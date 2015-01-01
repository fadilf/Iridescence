<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Iridescence
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/yeti/bootstrap.min.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100|Open+Sans" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?php if(is_home() && $_SERVER['REQUEST_METHOD'] != "POST"): ?>
	<style>
	footer .site-info {
		position: absolute;
		bottom: 0px;
		background: rgba(0, 0, 0, 0.5);
	}
	.navbar-default, .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav> .active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
		background: rgba(0, 0, 0, 0.5) !important;
	}
	</style>
	<?php else: ?>
	<style>
	#primary {
		padding: 0 30px;
	}
	</style>
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
         <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo("name"); ?></a>
           </div>

           <div class="collapse navbar-collapse">
            <?php /* Primary navigation */
               wp_nav_menu( array(
               'menu' => 'top_menu',
               'depth' => 2,
               'container' => false,
               'menu_class' => 'nav navbar-nav navbar-right',
               'walker' => new wp_bootstrap_navwalker())
             );
            ?>
           </div>
         </nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">