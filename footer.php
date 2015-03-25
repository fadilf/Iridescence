<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Iridescence
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php printf( __( 'Theme %1$s by %2$s.', 'iridescence' ), 'Iridescence', '<a href="http://fadilf.github.io/" rel="designer">Fadil Eledath</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="blur"></div>
<?php wp_footer(); ?>

</body>
</html>
