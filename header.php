<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Asap:400,400i,700,700i|Merriweather:400,400i,700" rel="stylesheet">
</head>
<body id="body">
<div class="darkbg" id="darkbg"></div>
<!-- HEADER -->
	<div class="container">
		<div class="Buscar">
			<input type="text" class="Buscar-input">
			<i class="fa fa-search" aria-hidden="true"></i>
		</div>
		<header class="Header">
			<a href="localhost/lexcontractum"><img class="Header-logo" id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt=""></a>
			<!-- arrow-mobile -->
			<i class="fa fa-caret-down Header-mobile" id="arrow" aria-hidden="true"></i>
			<!-- arrow-mobile -->
		</header>
				<!-- MOBILE MENU -->
		<nav class="Mobile" id="Mobile">
			<div class="Mobile-header">
				<h2 class="Mobile-title">MENU</h2>
				<i id="Mobile-close" class="fa fa-times-circle-o" aria-hidden="true"></i>
			</div>
			<ul class="Mobile-list">
				<a href="feed.html"><li class="Mobile-list-item">HOME</li></a>
				<a href="#"><li class="Mobile-list-item">MERCANTIL INTERNACIONAL</li></a>
				<a href="#"><li class="Mobile-list-item">FISCAL INTERNACIONAL</li></a>
				<a href="#"><li class="Mobile-list-item">PROPIEDAD INDUSTRIAL E INTELECTUAL</li></a>
				<a href="#"><li class="Mobile-list-item">¿QUIENES SOMOS?</li></a>
				<a href="#"><li class="Mobile-list-item">CONTACTO</li></a>
			</ul>
		</nav>
		<!-- MOBILE-MENU -->