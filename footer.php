<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="bottom-tri">
			<img src="<?php bloginfo('template_url'); ?>/images/white-bottom.png">
		</div>
		<div class="wrapper">
			<div class="footer-logo">
				<img src="<?php bloginfo('template_url'); ?>/images/logo.png">
			</div>
		</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
