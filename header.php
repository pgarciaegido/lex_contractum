<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="zyv_UUMim3J97jY6uvD6Y0FVl5vfgnojTko7eF9EZRE" />
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
			<a href="http://lexcontractus.es"><img class="Header-logo" id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Logo"></a>
			<!-- arrow-mobile -->
			<div id="arrow" class="Header-mobile"></div>
			<!-- arrow-mobile -->
		</header>
				<!-- MOBILE MENU -->
		<nav class="Mobile" id="Mobile">
			<div class="Mobile-header">
				<h2 class="Mobile-title">MENU</h2>
				<i id="Mobile-close" class="fa fa-times-circle-o" aria-hidden="true"></i>
			</div>
			<ul class="Mobile-list">
				<a href="http://lexcontractus.es"><li class="Mobile-list-item">HOME</li></a>
				<a href="http://lexcontractus.es/category/mercantil/"><li class="Mobile-list-item">MERCANTIL INTERNACIONAL</li></a>
				<a href="http://lexcontractus.es/category/fiscal-internacional/"><li class="Mobile-list-item">FISCAL INTERNACIONAL</li></a>
				<a href="http://lexcontractus.es/category/propiedad-industrial-e-intelectual/"><li class="Mobile-list-item">PROPIEDAD INDUSTRIAL E INTELECTUAL</li></a>
				<a href="http://lexcontractus.es/quienes-somos/"><li class="Mobile-list-item">¿QUIENES SOMOS?</li></a>
				<a href="http://lexcontractus.es/contacta/"><li class="Mobile-list-item">CONTACTO</li></a>
			</ul>
		</nav>
		<!-- MOBILE-MENU -->