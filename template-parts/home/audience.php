<?php
/**
 * The template part for displaying Audience in homepage.
 *
 * @package SBHI
 */

?>

<section class="audience-wrapper">

	<div class="container">

		<?php
		if ( get_field( 'customers_main_title', 'option' ) ) {
			echo '<h2 class="page-title text-center">' . get_field( 'customers_main_title', 'option' ) . '</h2>'; // phpcs:ignore
		}

		// Check Audience lists exists.
		if ( have_rows( 'audience_lists', 'option' ) ) :

			echo '<ul class="audience-lists">';

			// Loop through rows.
			while ( have_rows( 'audience_lists', 'option' ) ) :
				the_row();

				// Load sub field value.
				$icon       = get_sub_field( 'audience_icon', 'option' );
				$hover_icon = get_sub_field( 'audience_hover_icon', 'option' );
				$title      = get_sub_field( 'audience_title', 'option' );
				$text       = get_sub_field( 'audience_text', 'option' );

				printf(
					'<li class="audience-list">
						<div class="icon">%1$s</div>
						<div class="icon hover">%2$s</div>
						<h2 class="entry-title">%3$s</h2>
						<p class="entry-content">%4$s</p>
						<a href="/courses" class="button shadow">%5$s</a>
					</li>',
					file_get_contents( $icon ), // phpcs:ignore
					file_get_contents( $hover_icon ), // phpcs:ignore
					esc_html( $title ),
					esc_html( $text ),
					esc_html__( 'See Courses', 'sbhi' )
				);

			endwhile;

			echo '</ul>';

		endif;

		?>

	</div>

</section>
