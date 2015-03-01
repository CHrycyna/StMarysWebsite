<?php
require_once 'includes/google/Google_Client.php';
require_once 'includes/google/Google_CalendarService.php';
require_once 'includes/google/cache/Google_Cache.php';
require_once 'includes/google/cache/Google_FileCache.php';

date_default_timezone_set('America/Chicago');

class EventController {
  const DAY_MILLISECONDS = 86400000;
  
  private static $initialized = false;
  private static $calendars = array();
  private static $client_id = NULL;
  private static $service_account_name = NULL;
  private static $key_file = NULL;
  private static $cache_time = NULL;
  
  private static function initialize()
  {
    if(self::$initialized)
      return;
  
    self::$calendars = array (  array('Classes' ,       "d8vrdr0fheck4o9f7uq38rsau0@group.calendar.google.com", 'event-success'),
                                array('Store Hours' ,   "ch254sd7tbnf6lgp8v4avqinss@group.calendar.google.com", 'event-warning'),
                                array('Special Events', "b9ccbhrbi339eprjibcolj25s0@group.calendar.google.com", 'event-special') );
  
    self::$client_id = '805723456387-vo08h7st3c35perc07q24nsbf84hkcoc.apps.googleusercontent.com';
    self::$service_account_name = '805723456387-vo08h7st3c35perc07q24nsbf84hkcoc@developer.gserviceaccount.com';
    self::$key_file = 'includes/StMarysWebsite-8a773e3b1a94.p12';
    self::$cache_time = 600;
  
    self::$initialized = true;
  }
  
  private static function getService()
  {
    self::initialize();
  
    $client = new Google_Client(); // Start API call
    $client->setApplicationName("Event Calendars");
    $client->setUseObjects(true); // Need this to return it as an object array
    // Checking to see that we are authenticated (OAuth2) to make API to calendar
    if (isset($_SESSION['token'])) {
      $client->setAccessToken($_SESSION['token']);
    }
    // Load the key in PKCS 12 format (you need to download this from the Google API Console when the service account was created.)
    $key = file_get_contents(self::$key_file);
    $client->setAssertionCredentials(new Google_AssertionCredentials(
        self::$service_account_name,
        array('https://www.googleapis.com/auth/calendar', "https://www.googleapis.com/auth/calendar.readonly"),
        $key)
    );
    $client->setClientId(self::$client_id); // Set client ID for my API call
    $service = new Google_CalendarService($client); // Start API call to Calendar
  
    //Save authentication token in session
    if ($client->getAccessToken()) {
      $_SESSION['token'] = $client->getAccessToken();
    }
    return $service;
  }
  
  private static function getEventList()
  {
    self::initialize();
  
    $service = self::getService();
    $cache = new Google_FileCache();
  
    $event_lists = array();
  
    $today = date('Y-m-d');
    $minDate = date('Y-m-d', strtotime($today.'-1 year')).'T00:00:00Z';
    $maxDate = date('Y-m-d', strtotime($today.'+1 year')).'T00:00:00Z';
  
    if($cache->get(self::$calendars[0][1], self::$cache_time)) {
      //echo "Cached";
      for($i=0; $i<count(self::$calendars); $i++)
      {
        $events = $cache->get(self::$calendars[$i][1]);
        $cal_id = self::$calendars[$i][0];
        $event_lists[$cal_id] = $events;
      }
    }
    else
    {
      for($i=0; $i<count(self::$calendars); $i++)
      {
      $optParams = array ('timeMin' => $minDate,
          'timeMax' => $maxDate
      );
    
      echo self::$calendars[$i][1];
      $events = $service->events->listEvents(self::$calendars[$i][1], $optParams);
      $cal_id = self::$calendars[$i][1];
      $event_lists[$cal_id] = $events;
      $cache->set($cal_id, $events);
      }
    }
    return $event_lists;
  }
  
  private static function getStartEnd($event)
  {
  $start = NULL;
  $end   = NULL;
  
  $start = NULL;
  	
  if ($event->getStart()->date != NULL)
    $start = $event->getStart()->date;
    else
    $start = $event->getStart()->dateTime;
  	
  $end = NULL;
  if ($event->getEnd()->date != NULL)
    $end = $event->getEnd()->date;
    else
    $end = $event->getEnd()->dateTime;
  
    $start = strtotime($start)*1000;
  
    if($start+'DAY_MILLISECONDS' == $end)
    $end = NULL;
  else
    $end = strtotime($end)*1000;
  
    $times = array (
  'start' => $start,
  'end'   => $end
  );
  
  return $times;
  }
  
  public static function getEvents() {
    $event_lists = self::getEventList();
		
	$out = array();
	for($i=0; $i<count(self::$calendars); $i++)
	{
		$my_events = $event_lists[self::$calendars[$i][0]];
		foreach ($my_events->getItems() as $event) 
		{
			$times = self::getStartEnd($event);
			$out[] = array (
				'id'    => $event->id,
				'title' => self::$calendars[$i][0].": ".$event->getSummary(),
				'desc'  => $event->description,
				'class' => self::$calendars[$i][2],
				'start' => $times['start'],
				'end'   => $times['end']
			);
		}
	}
	
	echo json_encode(array('success' => 1, 'result' => $out));
  }
  
  public static function getTemplate($params) {
    
  }
}
?>