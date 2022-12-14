<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package colorme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<h1 class="woocommerce-products-header__title page-title">
			<span class="marque">New Arrivals</span>
		</h1>

		<ul class="products">
			<?php
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 12,
					'tax_query' => array(
							array(
								'taxonomy' => 'product_visibility',
								'field'    => 'name',
								'terms'    => 'featured',
							),
						),
					);
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
						wc_get_template_part( 'content', 'product' );
					endwhile;
				} else {
					echo __( 'No products found' );
				}
				wp_reset_postdata();
			?>
		</ul><!--/.products-->
	</main><!-- #main -->

	<div class="home-video">
		<video src="<?php echo get_template_directory_uri() . "/images/video.mp4" ?>"  type="video/mp4" class="db w-100 h-auto" autoplay loop muted plays-inline></video>
	</div>

<?php

get_footer();
