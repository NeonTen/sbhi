<?php
/**
 * The template-part for displaying fyrefli brand in footer
 *
 * @package SBHI
 */

?>

<div class="middle-text">
	<?php
	// Check Steps lists exists.
	if ( have_rows( 'copyrights_middle_text', 'option' ) ) :

		echo '<ul>';

		// Loop through rows.
		while ( have_rows( 'copyrights_middle_text', 'option' ) ) :
			the_row();

			if ( get_sub_field( 'middle_text', 'option' ) ) {
				printf(
					'<li>%s</li>',
					esc_html( get_sub_field( 'middle_text', 'option' ) )
				);
			}

		endwhile;

		echo '</ul>';

	endif;
	?>
</div><!-- .middle-text -->
