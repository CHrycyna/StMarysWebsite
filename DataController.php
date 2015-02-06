<?php 
ini_set('display_errors', 1);

require_once ( 'CalendarEvents.php' );

switch ( urldecode($_GET["function"]) )
{
	case "getEvents":
		echo GoogleController::getJSONEvents();
		break;
}
?>