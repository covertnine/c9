<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cortextoo
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.typekit.net/uqa4rne.css">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
</head>

<body <?php body_class(); ?>>

	<div class="hfeed site" id="page">

		<div id="wrapper-navbar" class="header-navbar" itemscope itemtype="http://schema.org/WebSite">

			<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e('Skip to content', 'cortextoo'); ?></a>

			<nav class="navbar navbar-expand-lg navbar-light">

				<div class="container">
					<?php
					the_custom_logo();
					?>

					<div class="navbar-small-buttons">
						<div class="nav-search">
							<a href="#" class="btn-nav-search">
								<i class="fa fa-search"></i>
								<span class="sr-only"><?php __('Search', 'cortextoo'); ?></span>
							</a>
						</div>
						<div class="nav-toggle">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fa fa-bars"></i>
							</button>
						</div>
					</div><!-- .navbar-small-buttons-->

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'navbar-primary collapse navbar-collapse justify-content-end navbar-expand-md',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav nav justify-content-between',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new cortextoo_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div><!-- .container -->

			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->