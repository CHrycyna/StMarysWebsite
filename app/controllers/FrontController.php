<?php

class FrontController
{
  public static function getHome() {
    require 'app/views/homepage.php';
  }
  
  public static function get404() {
    require 'app/views/404.php';
  }
  
  public static function getPage($params) {
    if (file_exists('app/views/'.$params['page'].".php"))
    {
      require 'app/views/'.$params['page'].".php";
    }
    else if (file_exists('app/views/'.$params['page']))
    {
      if(array_key_exists('subpage', $params))
          require 'app/views/'.$params['page'].'/'.$params['subpage'].'.php';
      else
          require 'app/views/'.$params['page'].'/'.$params['page'].'.php';
    }
    else
    {
      self::get404();
    }
  }
}


?>