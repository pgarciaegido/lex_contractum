<?php get_header(); ?>

<?php include TEMPLATEPATH . "/templates/nav.php" ?>
<?php include TEMPLATEPATH . "/templates/principal.php" ?>
	
<section class="Feed">
<?php rewind_posts(); ?>
<!-- shows up to 10 posts, but not the first one -->
<?php $query_args = array(
    "posts_per_page" => "10",
    "offset" => "1",
    "orderby" => "modified",
    "order" => "DESC"
	); ?>
	<?php query_posts($query_args); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="Feed-wrapper">
				<article class="Feed-article">
					<figure><?php the_post_thumbnail(); ?></figure>
					<div class="Feed-article-text">				
						<a href="<?php echo get_permalink(); ?>"><h2 class="Feed-article-text-title"><?php the_title(); ?></h2></a>
						<div class="Author">
							<h4 class="Author-name"><?php the_author(); ?> <span class="Author-date"><?php echo get_the_date(); ?></span></h4>
						</div>
					</div>
				</article>
				</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<!-- include here 404 -->
<!-- no posts found -->
<?php endif; ?>
</section>
<?php get_footer(); ?>