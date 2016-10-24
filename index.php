<?php get_header(); ?>

<?php include TEMPLATEPATH . "/templates/nav.php" ?>
	
<section class="Feed">
<?php rewind_posts(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="Feed-wrapper">
				<article class="Feed-article">
					<figure><?php the_post_thumbnail('feed-thumb'); ?></figure>
					<div class="Feed-article-text">				
						<a href="<?php echo get_permalink(); ?>"><h2 class="Feed-article-text-title"><?php the_title(); ?></h2></a>
						<div class="Author">
							<h4 class="Author-name"><?php the_author(); ?> <span class="Author-date"><?php the_date(); ?></span></h4>
						</div>
					</div>
				</article>
				</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<h3>not found</h3>
<!-- no posts found -->
<?php endif; ?>
</section>
<?php get_footer(); ?>