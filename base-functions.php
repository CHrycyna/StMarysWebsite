<?php 
function setActive($requestURI)
{
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	
	if($current_file_name == $requestURI)
		echo 'class="active"';
}
?>