<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package colorme
 */

get_header();

?>
	<main id="primary" class="site-main">

		<?php if(have_posts() and get_search_query()): ?>
			<header class="page-header">
				<h1 class="page-title flex justify-center">
					<?php printf( esc_html__( 'Search Results for:%s', 'colorme'), '<span>' . get_search_query() . '</span>');
					 ?>
				</h1>
			</header>
			<ul class="products">
				<?php
					while(have_posts() and get_search_query() ) : the_post();
					wc_get_template_part('content', 'product');
				endwhile;
				?>
			</ul>
			<?php endif; ?>
 
			<!-- If No search query or result, show search form -->
			<?php if(!get_search_query() or !have_posts() ): ?>
				<div class="flex justify-center">
					<?php get_search_form() ?>
				</div>
			<?php endif ?>
			
	</main><!-- #main -->

<?php

get_footer();
