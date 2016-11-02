<?php get_header(); ?>
<?php include TEMPLATEPATH . "/templates/nav.php" ?>
<?php get_search_form(); ?>
<div class="Search">
	<h3 class="Search-title">Buscar - (lo que se esté buscando)</h3>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="Search-result">
		<p class="Search-result-title">TITULO ARTICULO</p>
		<p class="Search-result-excerpt">Excerpt</p>
	</article>
	<?php endwhile; ?>
		
	<?php else: ?>
		<!-- no posts found -->
	<?php endif; ?>
</div>


<?php get_footer(); ?>