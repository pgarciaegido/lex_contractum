<?php get_header(); ?>
<body>
	<header>
		<h1><?php bloginfo ('name'); ?></h1>
		<h2><?php bloginfo ('description')?></h2>
	</header>
	<section class="content">
		<?php rewind_posts(); ?>
		<?php query_posts('posts_per_pages=1'); ?>

		<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
			<article>
				<header>
					<figure>
						<?php the_post_thumbnail('feedMobile'); ?> <!-- nos da el tamaño de las imagenes -->
					</figure>
					<h3><?php the_title(); ?></h3>
				</header>
				<?php the_excerpt(); ?> <!-- imprime un resumen -->
				<?php the_author(); ?> -
				<?php the_date(); ?>
			</article>
		
		<?php endwhile; ?>

		<?php else: ?>
			<h3>No hay entradas :(</h3>
		<?php endif;?>
	</section>
<?php get_footer('main'); ?>