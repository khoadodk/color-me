<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package colorme
 */

?>

	<footer id="colophon" class="site-footer">
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'menu-2',
				'menu_id' => 'footer-menu',
				'menu_class' => 'footer-menu list flex pa0 ma0'
			))
		?>

		<?php 
			wp_nav_menu(array(
				'theme_location' => 'menu-3',
				'menu_id' => 'social-menu',
				'menu_class' => 'footer-menu list flex pa0 ma0'
			))
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
