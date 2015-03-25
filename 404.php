<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Iridescence
 */

get_header(); ?>
	<style>
		#primary {
			text-align: center;
			border-right: none;
		}
	</style>
	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'iridescence' ); ?></h1>
					<h1>S<i style="font-size: 0.75em;" class="fa fa-frown-o"></i>rry!</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'iridescence' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>