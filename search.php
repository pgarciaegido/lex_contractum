<?php get_header(); ?>
<?php include TEMPLATEPATH . "/templates/nav.php" ?>
<?php get_header(); ?>
 
<div class="Search">
    <h3 class="Search-status"><?php printf(__('RESULTADOS DE LA BÚSQUEDA PARA: %s', 'mytheme' ), '<strong>' . get_search_query() . '</strong>'); ?></h3>
    <?php if (have_posts()): ?>
          <?php while ( have_posts() ) : the_post(); ?>
              <article class="Search-result">  
                  <a class="Search-result-a" href="<?php echo get_permalink(); ?>">
                      <?php the_post_thumbnail('thumbnail', array('class' => 'Search-result-img')); ?>
                      <div class="Search-result-details">
                      	<h3 class="Search-result-details-title"><?php the_title(); ?></h3>
                      	<div class="Search-result-details-more">
		                      <h4 class="Search-result-details-more-author"><?php the_author(); ?></h4>
													<h4 class="Search-result-details-more-date"><?php the_date(); ?></h4>
                      	</div>
                      </div>
                  </a>
              </article>
          <?php endwhile; ?>
    <?php else: ?>
        <h3 class="Search-not">No encontrado. </h3>
        <p class="Search-not-text">Lo sentimos, no hemos encontrado nada bajos esos criterios.</p>
    <?php endif; ?>  
</div>
 
<?php get_footer(); ?>

<?php get_footer(); ?>