<?php
/**
 * The template-part for displaying Navigation in header
 *
 * @package SBHI
 */

?>

<nav id="site-navigation" class="main-navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'sbhi' ); ?>
		<?php get_svg( 'icons/menu' ); ?>
	</button>
	<?php
	wp_nav_menu(
		[
			'theme_location' => 'main-menu',
			'menu_id'        => 'primary-menu',
		]
	);
	?>
</nav><!-- #site-navigation -->
