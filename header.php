<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
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
			<img class="Header-logo" id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="">
			<!-- arrow-mobile -->
			<i class="fa fa-caret-down Header-mobile" aria-hidden="true"></i>
			<!-- arrow-mobile -->
		</header>