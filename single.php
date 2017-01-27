<?php get_header(); ?>

	<div class="wrapper">
		<div id="reading-bar"></div>
		<?php rewind_posts(); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h3 class="status"><?php $categories = get_the_category();
				if ( ! empty( $categories ) ) {
    		echo esc_html( $categories[0]->name );
    		}?>
    	</h3>
			<article class="Article">
				<h1 class="Article-title"><?php the_title(); ?></h1>
				<figure class="Figure">
					<?php the_post_thumbnail('article'); ?>
					<!-- <h6 class="Figure-caption">New York // Something</h6> -->
				</figure>
				<div class="Article-info">
					<div class="Author">
						<?php echo get_avatar(get_the_author_meta( 'ID' )); ?>
						<h4 class="Author-name"><?php the_author(); ?> <span class="Author-date"><?php the_date(); ?></span></h4>
					</div>
					<div class="Etiqueta">
						<i class="fa fa-bookmark" aria-hidden="true"></i>
						<h4 class="Etiqueta-name">
							<a href="#"><?php $categories = get_the_category();
							if ( ! empty( $categories ) ) {
    					echo esc_html( $categories[0]->name );
    					}?></a>
    				</h4>
					</div>
				</div>
				<p class="Article-text"><?php the_content(); ?></p>
				</article>
					</div>
				</div>
		<?php endwhile; ?>

		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>


<?php get_footer(); ?>
