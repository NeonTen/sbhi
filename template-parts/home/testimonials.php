<?php
/**
 * The template part for displaying Testimonials in homepage.
 *
 * @package SBHI
 */

?>

<section class="testimonials-wrapper dark">

	<div class="container">

		<?php
		if ( get_field( 'testimonials_section_title', 'option' ) ) {
			echo '<h2 class="page-title text-center">' . get_field( 'testimonials_section_title', 'option' ) . '</h2>'; // phpcs:ignore
		}

		// Check Testimonials lists exists.
		if ( have_rows( 'testimonials_lists', 'option' ) ) :

			echo '<ul class="testimonials-lists">';

			// Loop through rows.
			while ( have_rows( 'testimonials_lists', 'option' ) ) :
				the_row();

				// Load sub field value.
				$image   = get_sub_field( 'testimonial_image', 'option' );
				$content = get_sub_field( 'testimonial_content', 'option' );
				$author  = get_sub_field( 'testimonial_author', 'option' );

				printf(
					'<li class="testimonials-list">
						<div class="testimonial-image"><img src="%1$s" alt=""></div>
						<p class="testimonial-content">%2$s</p>
						<p class="author-name text-center">%3$s</p>
					</li>',
					esc_url( $image ),
					esc_html( $content ),
					esc_html( $author )
				);

			endwhile;

			echo '</ul>';

		endif;
		?>

	</div>

</section>
