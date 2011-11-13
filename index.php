<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="UTF-8">	
	<title>Unmatched Style CSSOFF!!</title>
	<meta name="description" content="Unmatched Style contest to show how awesome we really are">
	<meta name="keywords" content="awesome, css, html5, css3, killer site, crazy contest">
	<meta name="author" content="Dale Sande">
	
	<!--  Mobile/Handheld Viewport -->
	<!-- <meta name="viewport" content="initial-scale=1, maximum-scale=1" /> -->
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/public/images/favicon.ico">
	<link rel="apple-touch-icon" href="/public/images/apple-touch-icon.png">
	
	<!-- CSS : implied media="screen" -->
	<link rel="stylesheet" href="public/styles/CSS/core_style.css" />
	
	<script src="/public/javascripts/jquery.min.js"></script>
	
	<!-- legacy browser support ... IE must die -->
	<script src="/public/javascripts/modernizr-1.7.min.js"></script> <!-- we know the awesome -->
	<!--[if (gte IE 6)&(lte IE 9)]>
		<script type="text/javascript" src="/public/javascripts/selectivizr-min.js"></script>
		<script src="/public/javascripts/flexie.min.js"></script> <!-- pollyfill for IE flexbox support -->
	<![endif]-->
	
	<script src="/public/javascripts/css_browser_selector.js"></script> <!-- basic platform and browser support -->
	
	<!-- application specific scripts -->
	<script src="/public/javascripts/application.js"></script>	
</head>

<body>
	<?php include 'includes/site_nav.php'?>
	<section class="page_container">
		<?php include 'includes/site_header.php'?>
	</section>
	<section class="page_container">
		<div class="box_shadow"></div>
		<a name="obstacles"></a>
		<?php include 'includes/obstacles.php'?>
	</section>
	<section class="page_container">
		<div class="box_shadow"></div>
		<a name="prizes"></a>
		<?php include 'includes/prizes.php'?>
	</section>
	<section class="page_container">
		<div class="box_shadow"></div>
		<a name="contest"></a>
		<?php include 'includes/contest_form.php'?>
		<?php include 'includes/site_footer.php'?>
	</section>
</body>
</html>


