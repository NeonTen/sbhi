<?php
/**
 * The template-part for displaying site info in footer
 *
 * @package SBHI
 */

?>

<div class="site-info">
	<?php
	printf(
		/* translators: 1: Current year, 2: Home link, 3: Theme name */
		'&copy;%1$s - <a href="%2$s">%3$s</a>. All rights reserved.',
		date( 'Y' ), // phpcs:ignore
		esc_url( trailingslashit( home_url() ) ),
		get_bloginfo( 'name' ) // phpcs:ignore
	);
	?>
</div><!-- .site-info -->
