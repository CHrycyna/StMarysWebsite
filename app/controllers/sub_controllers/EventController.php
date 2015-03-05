<?php
require_once 'includes/google/Google_Client.php';
require_once 'includes/google/Google_CalendarService.php';
require_once 'includes/google/cache/Google_Cache.php';
require_once 'includes/google/cache/Google_FileCache.php';

date_default_timezone_set('America/Chicago');

class EventController {
  const DAY_MILLISECONDS = 86400000;
  const CLIENT_ID = "805723456387-vo08h7st3c35perc07q24nsbf84hkcoc.apps.googleusercontent.com";
  const SERVICE_ACCOUNT_NAME = "805723456387-vo08h7st3c35perc07q24nsbf84hkcoc@developer.gserviceaccount.com";
  const KEY_FILE   = "includes/StMarysWebsite-8a773e3b1a94.p12";
  const CACHE_TIME = 600;
  
  private static $calendars = array();
  
  private static function initialize()
  {
    if(count(self::$calendars) > 0)
    {
      return;
    }
    self::$calendars = array (  array('Classes' ,       "d8vrdr0fheck4o9f7uq38rsau0@group.calendar.google.com", 'event-success'),
                                array('Store Hours' ,   "ch254sd7tbnf6lgp8v4avqinss@group.calendar.google.com", 'event-important'),
                                array('Special Events', "b9ccbhrbi339eprjibcolj25s0@group.calendar.google.com", 'event-special') );
  }
  
  private static function getService()
  { 
    $client = new Google_Client(); // Start API call
    $client->setApplicationName("Event Calendars");
    $client->setUseObjects(true); // Need this to return it as an object array
    // Checking to see that we are authenticated (OAuth2) to make API to calendar
    if (isset($_SESSION['token'])) {
      $client->setAccessToken($_SESSION['token']);
    }
    // Load the key in PKCS 12 format (you need to download this from the Google API Console when the service account was created.)
    $key = file_get_contents(self::KEY_FILE);
    $client->setAssertionCredentials(new Google_AssertionCredentials(
        self::SERVICE_ACCOUNT_NAME,
        array('https://www.googleapis.com/auth/calendar', "https://www.googleapis.com/auth/calendar.readonly"),
        $key)
    );
    $client->setClientId(self::CLIENT_ID); // Set client ID for my API call
    $service = new Google_CalendarService($client); // Start API call to Calendar
  
    //Save authentication token in session
    if ($client->getAccessToken()) {
      $_SESSION['token'] = $client->getAccessToken();
    }
    return $service;
  }
  
  private static function getEventList()
  {  
    $service = self::getService();
    $cache = new Google_FileCache();
  
    $event_lists = array();
  
    $today = date('Y-m-d');
    $minDate = date('Y-m-d', strtotime($today.'-1 year')).'T00:00:00Z';
    $maxDate = date('Y-m-d', strtotime($today.'+1 year')).'T00:00:00Z';
    
    if($cache->get(self::$calendars[0][1], self::CACHE_TIME)) {
      for($i=0; $i<count(self::$calendars); $i++)
      {
        $events = $cache->get(self::$calendars[$i][1]);
        $cal_id = self::$calendars[$i][1];
        $event_lists[$cal_id] = $events;
      }
    }
    else {
      for($i=0; $i<count(self::$calendars); $i++)
      {
      $optParams = array ('timeMin' => $minDate,
          'timeMax' => $maxDate
      );
    
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
    $allday = false;
    
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
    $end = strtotime($end)*1000;
    
    if(($start+self::DAY_MILLISECONDS) == $end)
    {
      $end = null;
      $allday = true;
    }
  
    $times = array (
      'start' => $start,
      'end'   => $end,
      'allday'=> $allday
    );
    
    return $times;
  }
  
  public static function getEvents() {
    self::initialize();
    $event_lists = self::getEventList();
		
	$out = array();
	for($i=0; $i<count(self::$calendars); $i++)
	{
		$my_events = $event_lists[self::$calendars[$i][1]];
		foreach ($my_events->getItems() as $event) 
		{
			$times = self::getStartEnd($event);
			$out[] = array (
				'id'    => $event->id,
				'title' => self::$calendars[$i][0].": ".$event->getSummary(),
				'desc'  => $event->description,
				'class' => self::$calendars[$i][2],
			    'allday'=> $times['allday'],
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
