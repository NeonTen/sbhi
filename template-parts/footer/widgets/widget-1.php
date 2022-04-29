<?php
/**
 * The template for displaying the footer widget 1.
 *
 * @package SBHI
 */

$flogo = get_field( 'footer_logo', 'option' );
?>

<div class="f-widget">
	<div class="top">
		<div class="f-logo">
			<a href="<?php echo esc_url( trailingslashit( home_url() ) ); ?>">
				<?php
				if ( $flogo ) {
					echo '<img src="' . esc_url( $flogo ) . '">';
				} else {
					echo '<h3>' . esc_html__( 'SBHI', 'sbhi' ) . '</h3>';
				}
				?>
			</a>
		</div>
		<div class="f-site-name">
			<a href="<?php esc_url( trailingslashit( home_url() ) ); ?>">
				<?php
				if ( get_field( 'footer_site_title', 'option' ) ) {
					echo '<h2>' . get_field( 'footer_site_title', 'option' ) . '</h2>'; // phpcs:ignore
				}
				?>
			</a>
		</div>
	</div>
	<div class="about-text">
		<?php
		if ( get_field( 'footer_text', 'option' ) ) {
			echo get_field( 'footer_text', 'option' ); // phpcs:ignore
		}
		?>
	</div>
</div>
