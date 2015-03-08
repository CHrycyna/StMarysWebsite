<?php
require_once 'app/controllers/sub_controllers/DatabaseController.php';

class SubscriptionController extends DatabaseController {
   
  public static function subscribe() {
    echo "Subscribe";
  }
  
  public static function Unsubscribe() {
    echo "Unsubscrible";
  }
}

?>