<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lex Contractus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="zyv_UUMim3J97jY6uvD6Y0FVl5vfgnojTko7eF9EZRE" />
	<?php wp_head(); ?>
</head>
<body id="body">

<?php include_once("analyticstracking.php") ?>
<div class="darkbg" id="darkbg"></div>
<!-- HEADER -->

	<div class="barra-superior" id="barra-superior">
		<div class="container-top" id="container-top">
			<div class="barra-superior-icons">
				<a target="_blank" href="https://twitter.com/lex_contractus"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a target="_blank" href="https://www.linkedin.com/company/15235328"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
			<i class="fa fa-bars burguer-button" id="arrow"></i>
			<a href="<?php bloginfo( 'wpurl' );?>"><img class="barra-superior-logo" id="logo-mobile" src="<?php bloginfo('template_url'); ?>/images/logo-blanco.svg" alt="Logo"></a>
			<i class="fa fa-search barra-superior-search" id="buscarIcon" aria-hidden="true"></i>
			<!--BUSCAR-->
		</div>
	</div>
	<div class="Buscar" id="buscarDiv">
		<div class="Buscar-container">
			<p class="Buscar-title">Buscar</p>
			<div class="Buscar-input">
				<input type="text" placeholder="Buscar" id="buscar">
				<i class="fa fa-close" id="buscarClose"></i>
			</div>
		</div>
	</div>
	<!-- buscar-pushdown will get the whole page down when buscar is opened -->
	<div id="buscarPushdown">
		<nav class="menu">
			<div class="menu-container">
				<h1 class="menu-title"><a href="http://lexcontractus.es">Lex Contractus</a></h1>
			  <ul class="menu-list" id="color-menu">
			    <li class="menu-list-item"><a href="http://lexcontractus.es">HOME</a></li>
			    <li class="menu-list-item"><a href="http://lexcontractus.es/category/mercantil/">MERCANTIL</a></li>
			    <li class="menu-list-item"><a href="http://lexcontractus.es/category/fiscal-internacional/">FISCAL INTERNACIONAL</a></li>
			    <li class="menu-list-item"><a href="http://lexcontractus.es/category/propiedad-industrial-e-intelectual/">PROPIEDAD INDUSTRIAL</a></li>
			    <li class="menu-list-item"><a href="http://lexcontractus.es/quienes-somos/">QUIENES SOMOS</a></li>
			    <li class="menu-list-item"><a href="http://lexcontractus.es/contacta/">CONTACTA</a></li>
			  </ul>
			</div>
		</nav>
		<!-- MOBILE INPUT -->
		<!-- <input type="text" id="buscar" class="Buscar-input-mob"> -->
		<!-- /MOBILE INPUT -->
		<div class="container" id="container">
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
