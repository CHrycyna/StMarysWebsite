<?php
require_once 'app/controllers/sub_controllers/EventController.php';

class APIController
{
  public static function getRequest($params)
  {
    if( is_callable(array($params['controller'], $params['action']) ) )
    {
      call_user_func_array( array($params['controller'], $params['action']), array($params) );
    }
  }
}

?>