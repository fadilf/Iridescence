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
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if(is_home() && !isset($_GET["more"])): ?>
	<style>
	footer .site-info {
		position: absolute;
		bottom: 0px;
	}
	</style>
	<?php else: ?>
	<style>
	#primary {
		padding: 0 30px;
		margin-bottom: 10px;
	}
	#blur {
		position: fixed;
		top: 0;
		left: 0;
		height: 100%;
		width: 100%;
		z-index: 2;
		transition: 0.5s;
		background-attachment: fixed !important;
		background-size: cover !important;
		-webkit-filter: blur(4px);
		filter: blur(4px);
	}
	#page {
		z-index: 3;
		position: relative;
	}
	#content {
		background-color: rgba(0, 0, 0, 0.5);
		color: #fff;
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