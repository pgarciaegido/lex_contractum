<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
	<header>
		<h1><?php bloginfo ('name'); ?></h1>
		<h2><?php bloginfo ('description')?></h2>
	</header>
	<section class="content">
		<?php query_posts('posts_per_pages=1'); ?>
		<?php query_posts('order=Asc&cat=3'); ?>


		<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
			<article>
				<header>
					<h3><?php the_title(); ?></h3>
				</header>
				<?php the_excerpt(); ?> <!-- imprime un resumen -->
				<?php the_category(); ?>
				<?php the_author(); ?> -
				<?php the_date(); ?>
			</article>
		
		<?php endwhile; ?>

		<?php else: ?>
			<h3>No hay entradas :(</h3>
		<?php endif;?>


		<article class="articulos"></article>
	</section>
	
</body>
</html>