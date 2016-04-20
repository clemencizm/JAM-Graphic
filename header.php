<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jamgraphickit
 */

?><!DOCTYPE html>

<!--  RICH SNIPPET ON HOMEPAGE ONLY, AS REQUIRED BY GOOGLE. -->  
<?php 
	if (  (is_home()) || (is_front_page())  ) { ?>
		<head itemscope itemtype="http://schema.org/WebSite">
			<title itemprop='JAM Graphic'>JAM Graphic</title>
			<link rel="canonical" href="http://jam-graphic.com/" itemprop="url">
		<?php } 
	else { ?>
		<head>
<?php } ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#333">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#333">

    <!-- Extention styles from Material -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.teal-green.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!--[if lt IE 9]>
		   <link rel="stylesheet" href="app/styles/ie.css">
		<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class("mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base"); ?> >
	<div id="page" class="site mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'jamgraphickit' ); ?></a>

		<header id="masthead" class="site-header mdl-layout__header mdl-layout__header--scroll mdl-color--primary" role="banner">
			<div class="mdl-layout--large-screen-only mdl-layout__header-row">
	        </div>
	        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
	        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
	        </div>

			<nav id="site-navigation" class="main-navigation mdl-js-ripple-effect mdl-color--primary-dark" role="navigation">
				<button class="menu-toggle mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jamgraphickit' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<main id="content" class="site-content mdl-layout__content" role="main">
