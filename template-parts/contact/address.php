<?php
/**
 * The template-part for displaying Address in Contact page.
 *
 * @package SBHI
 */

?>

<div class="right-wrap dark-bg">

	<?php
	// Check Address lists exists.
	if ( have_rows( 'address_lists', 'option' ) ) :

		echo '<address>';

		// Loop through rows.
		while ( have_rows( 'address_lists', 'option' ) ) :
			the_row();

			// Load sub field value.
			$icon    = get_sub_field( 'address_icon', 'option' );
			$title   = get_sub_field( 'address_title', 'option' );
			$content = get_sub_field( 'address_content', 'option' );

			printf(
				'<div class="wrap">
					<div class="icon">%1$s</div>
					<div class="text">
						<h3 class="entity-title">%2$s</h3>
						<p class="text-normal">%3$s</p>
					</div>
				</div>',
				file_get_contents( $icon ), // phpcs:ignore
				esc_html( $title ),
				wp_kses_post( $content )
			);

		endwhile;

		echo '</address>';

	endif;
	?>

</div>
