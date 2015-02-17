<?php 
function setActive($requestURI)
{
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	
	if($current_file_name == $requestURI)
		echo 'class="active"';
}

function printLinks($links, $currPage)
{
  $ret = "";
  for($i = 0; $i < count($links); $i++)
  {
  $ret .= '<a href="'.$links[$i][0].'" class="list-group-item';
  
      if($links[$i][0] == $currPage)
      $ret .= ' active';
       
      $ret .= '">'.$links[$i][1].'</a>';
  }
  echo $ret;
}

function getSubHeader($page, $currPage)
{
  $links = "";
  switch($page)
  {
    case "garden":
      $links = array( 
      array("garden.php", "Garden Center"),
      array("garden_perennials.php", "Perennials"),
      array("garden_annuals.php", "Annuals"),
      array("garden_tropicals.php", "Tropicals"),
      array("garden_nursery.php", "Nursery"),
      array("garden_largestock.php", "Large Stock"),
      array("garden_plantfinder.php", "Plant Finder"),
      );
      break;
      
    case "giftstore":
      $links = array(
      array("giftstore.php",         "Gift Store"),
      array("giftstore_fashion.php", "Fashion"),
      array("giftstore_gourmet.php", "Gourmet"),
      array("giftstore_homedecor.php", "Home Decor"),
      array("giftstore_christmas.php", "Christmas"),
      );
      break;
      
    case "landscaping":
      $links = array( 
      array("landscaping.php",              "Landscaping"),
      array("landscaping_design.php",       "Landscape Design"),
      array("landscaping_installation.php", "Landscape Installation"),
      array("landscaping_residential.php",  "Residential"),
      array("landscaping_commercial.php",   "Commercial"),
      array("landscaping_affiliates.php",   "Affiliates"),
      array("landscaping_gallery.php",      "Gallery"),      
      );
      break;
  }
  
  printLinks($links, $currPage);
}
?>