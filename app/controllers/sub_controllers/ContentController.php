<?php
include_once 'app/controllers/sub_controllers/DatabaseController.php';

class ContentController extends DatabaseController {
  
  public static function getCarousel() {
    $count = 10;
        
    $out = array();
	for($i=0; $i<$count; $i++)
	{
    	$out[] = array (
    		'img'    => '/static/img/carousel'.($i+1).'.jpg',
    		'heading' => '',
    		'desc'  => '',
    	);
	}
	
	echo json_encode(array('success' => 1,'result' => $out));
  }
}
?>