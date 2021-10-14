<?php
/**
 * The template for displaying the footer widget 2.
 *
 * @package SBHI
 */

?>

<div class="f-widget">
	<div class="about-text">
		<?php
		if ( get_field( 'footer_text', 'option' ) ) {
			echo get_field( 'footer_text', 'option' ); // phpcs:ignore
		}
		?>
	</div>
</div>
