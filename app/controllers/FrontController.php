<?php

class FrontController extends BaseController
{
  public function getHome() {
    require 'app/views/homepage.php';
  }
}


?>