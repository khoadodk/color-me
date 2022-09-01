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

	<!-- Notice/Flash message -->
	<?php if(wc_notice_count()): ?>
	<div class="pa3 tc">
		<?php wc_print_notices(); ?>
	</div>
	<?php endif ?>

	<?php if(is_home() or is_product_category()): ?>

	<header id="masthead" class="site-header flex-ns" style="<?php category_header_background(); ?>">
		
		<?php get_template_part('template-parts/category-navigation'); ?>

		<?php get_template_part('template-parts/featured-image'); ?>

	</header>

	<?php elseif(!is_product()): ?>
		<?php get_template_part('template-parts/page-header'); ?>
	<?php endif ?>
