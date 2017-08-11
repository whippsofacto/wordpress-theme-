<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whippsoFacto
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'whippsofacto' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php

			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
			  <div id="header_outter_container" class="header-outter-container"><div id="header_container" class="header-container"> <?the_post_thumbnail()?>  </div></div>
				<div id="site_tite_and_description" class="site-title-and-description"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!-- if on a "projects page" -->
			<?php elseif ( is_singular('projects') ) :?>
				<div id="header_outter_container" class="header-outter-container"><div id="header_container" class="header-container"> <?the_post_thumbnail()?>  </div></div>
				<div id="site_tite_and_description" class="site-title-and-description"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<!-- Show video from header media on the front page -->
			<?php elseif (is_front_page() ) :?>
				<?php the_custom_header_markup();?>
				<div id="header_outter_container" class="header-outter-container"><div id="header_container" class="header-container"> <?the_post_thumbnail()?>  </div></div>
				<div id="site_tite_and_description" class="site-title-and-description"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>
				<div id="header_outter_container" class="header-outter-container"><div id="header_container" class="header-container"> <?the_post_thumbnail()?>  </div></div>
				<div id="site_tite_and_description" class="site-title-and-description"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo "$description" /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- site_tite_and_description -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php//esc_html_e( 'Primary Menu', 'whippsofacto' ); ?></button>-->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
