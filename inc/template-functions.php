<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package SBHI
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sbhi_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'sbhi_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sbhi_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'sbhi_pingback_header' );


/**
 * Get svg file content.
 *
 * @param string $path path of the SVG file.
 * @param string $echo print|return.
 *
 * @return string
 */
function get_svg( $path, $echo = true ) {

	$file = get_template_directory() . '/images/' . $path . '.svg';

	if ( ! file_exists( $file ) ) {
		return;
	}

	$svg = file_get_contents( $file ); // phpcs:ignore

	if ( $echo ) {
		echo $svg; // phpcs:ignore
	} else {
		return $svg;
	}
}

/**
 * Print terms with checkboxes for filters.
 *
 * @param string $taxonomy taxonomy name.
 * @param string $name     input field name.
 */
function get_term_filters( $taxonomy, $name ) {
	?>
	<div class="filter-custom-taxonomy">
		<?php
		$terms = get_terms( $taxonomy );
		foreach ( $terms as $term ) :
			?>
			<div class="checkboxes-group">
				<input type="checkbox" value="<?php echo esc_attr( $term->slug ); ?>" name="<?php echo $name; ?>[]" class="tax-filter" id="<?php echo esc_attr( $term->slug ); ?>" />
				<label for="<?php echo esc_attr( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></label>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * Custom login redirect.
 *
 * @param string $login_url default $login_url.
 * @param string $redirect default $redirect.
 * @param string $force_reauth default $force_reauth.
 */
function custom_login_page( $login_url, $redirect, $force_reauth ) {
	if ( is_admin() ) {
		return $login_url;
	}
	$login_url = site_url( '/login/', 'login' );
	if ( ! empty( $redirect ) ) {
		$login_url = add_query_arg( 'redirect_to', rawurlencode( $redirect ), $login_url );
	}
	if ( $force_reauth ) {
		$login_url = add_query_arg( 'reauth', '1', $login_url );
	}
	return $login_url;
}
add_filter( 'login_url', 'custom_login_page', 10, 3 );
