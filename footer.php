<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SBHI
 */

?>

	<footer id="colophon" class="site-footer">
		<?php // footer_widget_columns(); ?>

		<div class="copyrights">
			<div class="container">
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
				<?php get_template_part( 'template-parts/footer/middle', 'text' ); ?>
				<?php get_template_part( 'template-parts/footer/fyrefli', 'brand' ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
