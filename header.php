<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="zyv_UUMim3J97jY6uvD6Y0FVl5vfgnojTko7eF9EZRE" />
	<?php wp_head(); ?>
</head>
<body id="body">

<?php include_once("analyticstracking.php") ?>
<div class="darkbg" id="darkbg"></div>
<!-- HEADER -->
	
	<div class="barra-superior">
		<div class="container-top" id="container-top">
			<div class="barra-superior-icons">
				<a target="_blank" href="https://twitter.com/lex_contractus"><i class="fa fa-twitter"></i></a>
				<a target="_blank" href="https://www.linkedin.com/company/15235328"><i class="fa fa-linkedin"></i></a>
			</div>
			<form class="Buscar">
				<input type="text" id="buscar" class="Buscar-input">
				<i class="fa fa-search" id="buscarIcon" aria-hidden="true"></i>
			</form><!--BUSCAR-->
		</div>
	</div>
	<div class="container" id="container">
		<header class="Header">
			<a href="<?php bloginfo( 'wpurl' );?>"><img class="Header-logo" id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Logo"></a>
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
				<a href="http://lexcontractus.es/category/mercantil/"><li class="Mobile-list-item">MERCANTIL</li></a>
				<a href="http://lexcontractus.es/category/fiscal-internacional/"><li class="Mobile-list-item">FISCAL INTERNACIONAL</li></a>
				<a href="http://lexcontractus.es/category/propiedad-industrial-e-intelectual/"><li class="Mobile-list-item">PROPIEDAD INDUSTRIAL E INTELECTUAL</li></a>
				<a href="http://lexcontractus.es/quienes-somos/"><li class="Mobile-list-item">¿QUIENES SOMOS?</li></a>
				<a href="http://lexcontractus.es/contacta/"><li class="Mobile-list-item">CONTACTO</li></a>
			</ul>
		</nav>
		<!-- MOBILE-MENU -->