<?php get_header(); ?>
<html>
<body>
	<?php rewind_posts(); ?>
	<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
	<header>
		<figure>
			<?php the_post_thumbnail('feedMobile'); ?>
		</figure>
		<h1><?php the_title(); ?></h1>
	</header>
	<article>
			<?php the_content(); ?> 
			<?php the_author(); ?> -
			<?php the_date(); ?>
	</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>