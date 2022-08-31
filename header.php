<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package colorme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header flex " style="<?php category_header_background(); ?>">
		<nav id="site-navigation" class="main-navigation flex flex-auto items-end">
			<!-- Logo -->
			<a href="<?php echo get_site_url() ?>" class="logo">
				<h1>Color Me</h1>
			</a>
			<!-- Nav -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'main-menu ma0 pa0 list'
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<img src="<?php get_category_image() ?>" class="db featured-image">
		</div>
	</header><!-- #masthead -->
