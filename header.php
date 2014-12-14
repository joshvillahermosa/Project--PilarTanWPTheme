<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pilartan
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap, FontAwesome, and JQquery files -->
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!--/ Bootstrap, FontAwesome, and JQquery files-->

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pilartan' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //Blog name not needed//bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php /*Uncommented for blogger/ info bloginfo( 'description' ); */?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!--<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php //_e( 'Primary Menu', 'pilartan' ); ?></button>-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pt-navcollapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
      				<a class="navbar-brand pt-authorname" href="http://pilartanmd.joshvee.com"><?php bloginfo( 'name' ) ?></a>					
				</div>
				<div class="collapse navbar-collapse" id="pt-navcollapse">
					<?php
						/**
						 * Default for the WP menu
						 */
						$defaults = array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'nav navbar-nav',
							'menu_id'         => 'test',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);						

						wp_nav_menu( $defaults ); 
					?>
					<ul class="nav navbar-nav navbar-right" id="pt-socialnav">
					<li><a href="#"><i class="fa fa-facebook-square fa-lg fa-nav"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter-square fa-lg fa-nav"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin-square fa-lg fa-nav"></i></a></li>
				</ul>	
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
