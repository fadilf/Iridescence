<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Iridescence
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
			<?php iridescence_paging_nav(); ?>
			<?php else: ?>
			<div id="home-row">
			<form id="more" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="POST">
			<div class="home-subrow">
			<?php for ($i=0;$i<3;$i++) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="post-item">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<div style="background: url('<?php echo $image[0] ?>')"></div></a>

			<?php if ($i == 1): ?>
			</div><div id="subrow2" class="home-subrow">
			<?php endif; ?>
			<?php endfor; ?>
			<button type="submit">+</button>
			</div>
		</form></div>
		<?php endif; ?>			
		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>