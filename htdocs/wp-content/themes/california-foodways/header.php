<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package california-foodways
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- <div class="bg-image-container">
		<img class="bg-image-container--california" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-ca.png" alt="California">
	</div> -->
<div id="page" class="site container">
	<a class="skip-link screen-reader-text hidden" href="#content"><?php esc_html_e( 'Skip to content', 'california-foodways' ); ?></a>

	<header id="masthead" class="site-header">
		<h1 class="site-header--title">California Foodways</h1>
	</header><!-- #masthead -->
	<nav id="site-navigation" class="main-navigation">
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'menu_class' => 'main-navigation--list'
		) );
	?>
</nav><!-- #site-navigation -->
	<div id="content" class="site-content">
