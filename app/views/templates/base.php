<!DOCTYPE html>
<html lang="en" class="no-js">
<?php require_once 'includes/ti.php';?>

<head>
	<!-- META DATA -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="St.Marys Nursery & Garden Centre" />
	<meta name="keywords" content="StMarys,Garden,Nursery,Centre,Plants,Landscaping" />
	<meta name="author" content="Cameron Hrycyna" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	
	<title> St.Mary's Nursery and Garden Centre</title>
	
	<!-- JQUERY -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
	<!-- STYLESHEETS -->
	<?php startblock('css')?>
	<link rel="stylesheet" href="/app/static/css/base.css">
	<link rel="stylesheet" href="/app/static/css/instagram.css">
	<link rel="stylesheet" href="/app/static/css/Lobster.css">
	<link rel="stylesheet" href="/app/static/css/Slabo27.css">
	<?php endblock()?>
	
	<!-- ICON -->
	<link rel="shortcut icon" href="static/imgs/base/stmarys_logo.gif"/>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <div class="container main-content">	
    <header>
	  <div class="logo-panel">
		<img class="logo-background" src="/static/imgs/base/StMarys-Logo_Wave-Only.png"/> 
		<a href="/"><img class="logo-image" src="/static/imgs/base/StMarys-Logo_White-Text.png"/></a>
	  </div>
	  <nav class="navbar">
	    <div class="container-fluid">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav nav-tabs nav-justified">
            <li id="nav-home"><a href="/">Home</a></li>	
			<li id="nav-garden"><a href="/garden.php">Garden Centre</a></li>
			<li id="nav-giftstore"><a href="/giftstore.php">Gift Store</a></li>
			<li id="nav-landscaping"><a href="/landscaping.php">Landscaping</a></li>
			<li id="nav-events"><a href="/events.php">Events</a></li>
			<li id="nav-aboutus"><a href="aboutus.php">About Us</a></li>
          </ul>
        </div>
	  </nav>
	</header>
    <?php emptyblock('content')?>
	<!-- END: content -->
	<div class="footer">
	  <div class="row col-wrap footer-content">
	    <div id="footer-col" class="col-md-4">
		  St.Marys Nursery &#38; Garden Centre Ltd.
		  <br>
		  2901 St.Mary's Road
		  <br>
		  Winnipeg, Manitoba, R2N4A6
		  <br>
		  <div id="contact-information">
		    <a id="contact-email" href="mailto:garden@stmarysnursery.com">Contact Us  </a>
			| 
			<a id="contact-phone" href="tel:2042557353">  (204) 255-7353</a>
		  </div>
		</div>
	    <div id="footer-col" class="col-md-4">
		  <img id="footer-logo" src="/static/imgs/base/StMarysGardenCenter_Icon.png"/>
		</div>
		<div id="footer-col" class="col-md-4">
		  <div class="social-col">
			<div class="row ">
			  <a id="instagram-badge" class="social-badge" href="http://instagram.com/stmarysnursery?ref=badge">Instagram</a>
			</div>
			<div class="row ">
			  <a id="facebook-badge" class="social-badge" href="https://www.facebook.com/pages/St-Marys-Nursery-and-Garden-Centre-Ltd/128776243867073">Facebook</a>
			</div>
			<div class="row ">
			  <a id="twitter-badge" class="social-badge" href="https://twitter.com/StMarysNursery">Twitter</a>
			</div>
		  </div>
		</div>
	  </div>
	</div> <!-- END: footer  -->
  </div> <!-- END: container main-content -->	
</body>
  
<?php startblock('scripts') ?>
<script src="static/js/bootstrap.js" ></script>
<script src="static/js/twitter.js"> </script>
<script src="static/js/facebook.js"> </script>
<script src="static/js/underscore-min.js"></script>
<script src="static/js/offcanvas.js"></script>
<?php endblock () ?>

</html>
