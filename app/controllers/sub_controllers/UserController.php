<?php

include_once 'app/controllers/sub_controllers/DatabaseController.php';

class UserController extends DatabaseController {
  
  public static function getUser($params) {
    self::SELECT();
  }
}

?>