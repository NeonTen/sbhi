<?php
/**
 * The template-part for displaying Contact Form in Contact page.
 *
 * @package SBHI
 */

?>

<div class="left-wrap">
	<?php
	theme_logo();

	if ( get_field( 'contact_form_shortcode', 'option' ) ) {
		echo do_shortcode( get_field( 'contact_form_shortcode', 'option' ) );
	}
	?>
</div>
