<?php
ini_set('display_errors', 1);

require 'includes/AltoRouter.php';

foreach(glob('app/controllers/*.php') as $filename)
  require $filename;

$router = new AltoRouter();
$router->setBasePath('');

$router->map('GET','/','FrontController#getHome');
$router->map('GET','/static/[:parent]/?[:child]?', 'StaticController#getSource', 'static');

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
    echo "Not Callable";
  }
} else {
  // no route was matched
  echo "404 - Not Found";
}
?>