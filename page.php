<?php get_header(); ?>
<?php include TEMPLATEPATH . "/templates/nav.php" ?>
<?php  ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>


<?php get_footer(); ?>