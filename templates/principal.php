

<figure class="Principal">

	<?php $query_args = array(
    "posts_per_page" => "1",
    "orderby" => "modified",
    "order" => "DESC"
	); ?>
	<?php query_posts($query_args); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<figure class="Principal-pic"><?php the_post_thumbnail('feed-thumb')?></figure>
	<div class="Principal-desc">
		<a href="<?php echo get_permalink(); ?>"><h1 class="Principal-desc-title"><?php the_title(); ?></h1></a>
		<div class="Author">
			<img class="Author-pic" id="aut-pic" src="https://randomuser.me/api/portraits/men/85.jpg" alt="">
			<h4 class="Author-name"><?php the_author(); ?> <span class="Author-date"><?php echo get_the_date(); ?></span></h4>
		</div>
	</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<p>En construcción<p>
	<?php endif; ?>
</figure>