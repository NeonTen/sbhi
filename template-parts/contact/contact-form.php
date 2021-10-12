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
	echo do_shortcode( '[forminator_form id="22"]' );
	?>
</div>
