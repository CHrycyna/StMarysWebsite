<!DOCTYPE html>
<html lang="en" class="no-js">

<?php require('base-functions.php')?>

<head>
	<!-- META DATA -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="St.Marys Nursery & Garden Centre" />
	<meta name="keywords" content="StMarys,Garden,Nursery,Centre,Plants,Landscaping" />
	<meta name="author" content="Cameron Hrycyna" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title> St.Mary's Nursery and Garden Centre</title>
	
		<!-- JAVASCRIPTS -->
	<script async src="static/Scripts/jquery.js"></script>
	<script>
		function loadCSS(filename)
		{
			console.log(filename)
			var fileref=document.createElement("link")
			fileref.setAttribute("rel", "stylesheet")
			fileref.setAttribute("type", "text/css")
			fileref.setAttribute("href", filename)
			
			if (typeof fileref!="undefined")
				  document.getElementsByTagName("head")[0].appendChild(fileref)
		}
	
		loadCSS("/static/bootstrap/css/bootstrap.css")
		loadCSS("/static/StyleSheets/base.css")
		loadCSS("/static/StyleSheets/instagram.css")
		loadCSS("/static/StyleSheets/Lobster.css")
		loadCSS("/static/StyleSheets/Slabo27.css")
	</script>
	<script async src="static/bootstrap/js/bootstrap.js" ></script>
	<script async src="static/Scripts/twitter.js"> </script>
	<script async src="static/Scripts/facebook.js"> </script>
	
	<link rel="shortcut icon" href="static/imgs/base/stmarys_logo.gif"/>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="seasonal">
	  	<div class="container main-content">	
			<header>
				<div class="logo-panel">
					<a href="/">
						<img class="logo-image" src="/static/imgs/base/StMarysGardenCentre_Logovector_Blue-White.png"/> 
					</a>
				</div>
				<div id="nav-row" class="row nav-row">
					<ul class="">
						<li id="nav-home" <?php setActive("")?>>
							<a href="/">Home</a>
						</li>
						<li id="nav-gift-store" <?php setActive("giftstore")?>>
							<a href="/giftstore.php">Gift Store</a>
						</li>
						<li id="nav-landscaping" <?php setActive("landscaping")?>>
							<a href="/landscaping.php">Landscaping</a>
						</li>
						<li id="nav-garden" <?php setActive("garden")?>>
							<a href="/garden.php">Garden</a>
						</li>
						<li id="nav-blog" <?php setActive("blog")?>>
							<a href="/blog.php">Blog</a>
						</li>
						<li id="nav-events" <?php setActive("events")?>>
							<a href="/events.php">Events</a>
						</li>
						
					</ul>					
				</div>
			</header>	