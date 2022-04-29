<?php
/**
 * The template part for displaying Funders in homepage.
 *
 * @package SBHI
 */

?>

<section class="funders-wrapper">

	<div class="container small-container">

		<?php
		if ( get_field( 'funders_section_title', 'option' ) ) {
			echo '<h2 class="page-title text-center">' . get_field( 'funders_section_title', 'option' ) . '</h2>'; // phpcs:ignore
		}

		// Check Funders lists exists.
		if ( have_rows( 'funders_lists', 'option' ) ) :

			echo '<ul class="funders-lists">';

			// Loop through rows.
			while ( have_rows( 'funders_lists', 'option' ) ) :
				the_row();

				// Load sub field value.
				$image = get_sub_field( 'funder_image', 'option' );
				$url   = get_sub_field( 'funder_link', 'option' );
				$alt   = get_sub_field( 'funder_image_alt_text', 'option' );

				if ( $url && $image ) {
					printf(
						'<li class="funder-list">
							<a href="%s">
								<img src="%s" alt="%s">
							</a>
						</li>',
						esc_url( $url ),
						esc_url( $image ),
						esc_html( $alt )
					);
				}
				if ( ! $url && $image ) {
					printf(
						'<li class="funder-list">
							<img src="%s" alt="%s">
						</li>',
						esc_url( $image ),
						esc_html( $alt )
					);
				}

			endwhile;

			echo '</ul>';

		endif;
		?>

	</div>

</section>
