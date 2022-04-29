<?php
/**
 * Header Login buttons
 *
 * @package SBHI
 */

echo '<div class="right-wrap">';

if ( is_user_logged_in() ) {

	$current_profile = wp_get_current_user();

	echo '<div class="login-wrap logged-in flex align-center">';
		echo '<a href="/dashboard">';
		echo '<span>' . esc_html( $current_profile->display_name ) . '</span>';
		echo '<div class="icon blue">' . get_svg( 'icons/user', false ); //phpcs:ignore
		echo '</a>';
		echo '</div>';
		echo '<div class="dropdown">';
		printf( '<a href="%1$s">%2$s</a>', esc_url( wp_logout_url() ), esc_html__( 'Logout', 'sbhi' ) );
		echo '</div>';
	echo '</div>';

} else {
	echo '<div class="login-wrap logged-out">';

	printf(
		'<a href="%1$s" class="register-button button border-button orange-hover">%2$s%3$s</a>
		<a href="%1$s" class="login-button button">%4$s%5$s</a>',
		esc_url( wp_login_url() ),
		esc_html__( 'Register', 'sbhi' ),
		get_svg( 'icons/pen', false ), //phpcs:ignore
		esc_html__( 'Sign in', 'sbhi' ),
		get_svg( 'icons/user', false ) //phpcs:ignore
	);

	echo '</div>';
}

echo '</div>';
