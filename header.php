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
    <meta name="msapplication-TileColor" content="#37474f">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#37474f">

    <!-- Extention styles from Material -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="styles.css" />
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.grey-indigo.min.css">

	<!--[if lt IE 9]>
	   <link rel="stylesheet" href="app/styles/ie.css">
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div id="page" class="site mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'jamgraphickit' ); ?></a>

		<header id="masthead" class="site-header mdl-layout__header mdl-layout__header--waterfall portfolio-header" role="banner">
			<div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo">
                    	<img src="<?php echo get_template_directory_uri(); ?>/images/logo-jam-graphic-diseno-digital.png" width="250px" height="90px" alt="Logo de Jam Graphic portafolio digital de clemencizm">
                    </div>
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
              
					<nav id="site-navigation" class="main-navigation mdl-navigation mdl-typography--body-1-force-preferred-font" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</span>

			</div><!-- .site-branding -->
	       
	       <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
				<nav id="site-navigation" class="main-navigation mdl-navigation mdl-typography--body-1-force-preferred-font" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->

		<div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <div class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                Portafolio de una 
            </div>
        </div>

		<main id="content" class="site-content mdl-layout__content" role="main">
