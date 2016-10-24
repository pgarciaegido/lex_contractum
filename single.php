<?php get_header(); ?>
<?php include TEMPLATEPATH . "/templates/nav.php" ?>
	<div class="wrapper">
		<?php rewind_posts(); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3 class="status"><?php echo get_the_category(); ?></h3>
			<article class="Article">
				<h1 class="Article-title"><?php the_title(); ?></h1>
				<figure class="Figure">				
					<?php the_post_thumbnail('article'); ?>
					<!-- <h6 class="Figure-caption">New York // Something</h6> -->
				</figure>
				<div class="Article-info">
					<div class="Author">
						<img class="Author-pic" src="<?php echo get_avatar_url(); ?>" alt="">
						<h4 class="Author-name"><?php the_author(); ?> <span class="Author-date"><?php the_date(); ?></span></h4>
					</div>		
					<div class="Etiqueta">
						<i class="fa fa-bookmark" aria-hidden="true"></i>
						<h4 class="Etiqueta-name"><a href="#"><?php echo get_the_category(); ?></a></h4>
					</div>
				</div>
				<p class="Article-text"><?php echo get_the_content(); ?></p>

		<?php endwhile; ?>
		
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
			
<!-- 				<div class="Social">
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</div>
			</article>
		</div> -->
<?php get_footer(); ?>