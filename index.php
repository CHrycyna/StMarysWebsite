<?php
ini_set('display_errors', 1);

require 'includes/AltoRouter.php';

foreach(glob('app/controllers/*.php') as $filename)
  require $filename;

$router = new AltoRouter();
$router->setBasePath('');

$router->map('GET','/','FrontController#getHome', "home");
$router->map('GET|POST','/api/[a:controller]/[a:action]/[*:param1]?/[*:param2]?/[*:param3]?/[*:param4]?/[*:param5]?','APIController#getRequest' ,'api');
$router->map('GET','/[a:page]/[a:subpage]?','FrontController#getPage');

// match current request
$match = $router->match();
// call closure or throw 404 status
if( $match ) {
  list( $controller, $action ) = explode( '#', $match['target']);
  if( is_callable(array($controller, $action)) )
  {
    call_user_func_array( array($controller, $action), array($match['params']) );
  }
  else
  {
    FrontController::get404();
  }
} else {
  FrontController::get404();
}
?>