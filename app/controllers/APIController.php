<?php
include_once ('app/controllers/FrontController.php');

foreach(glob('app/controllers/sub_controllers/*.php') as $filename)
  include_once $filename;

class APIController
{
  public static function getRequest($params)
  {
    if( is_callable(array($params['controller']."Controller", $params['action']) ) )
    {
      call_user_func_array( array($params['controller']."Controller", $params['action']), array($params) );
    }
    else
    {
      FrontController::get404();
    }
  }
}

?>