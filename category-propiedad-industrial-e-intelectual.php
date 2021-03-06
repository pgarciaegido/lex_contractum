<?php get_header(); ?>

<h3 class="status">PROPIEDAD INDUSTRIAL E INTELECTUAL</h3>
<section class="Feed">
	<?php rewind_posts(); ?>


	<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
		<div class="Feed-wrapper">
				<article class="Feed-article">
					<a href="<?php echo get_permalink(); ?>"><figure><?php the_post_thumbnail('feed-thumb'); ?></figure></a>
					<div class="Feed-article-text">
						<a href="<?php echo get_permalink(); ?>"><h2 class="Feed-article-text-title"><?php the_title(); ?></h2></a>
						<div class="Author">
							<h4 class="Author-name"><?php the_author(); ?> <span class="Author-date"><?php echo get_the_date(); ?></span></h4>
						</div>
					</div>
				</article>
				</div>
	<?php endwhile; ?>

		<?php else: ?>
		<?php endif;?>
	</section>
<?php get_footer(); ?>
