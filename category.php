<?php get_header(); ?>

<section class="Feed">
	<?php rewind_posts(); ?>


	<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
		<?php $cat_id= get_cat_ID() ?>
		<h3 class="status"><?php echo get_cat_name($cat_id)?></h3>
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
			<h3>No hay entradas :(</h3>
		<?php endif;?>
	</section>
<?php get_footer(); ?>
