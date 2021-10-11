<?php
/**
 * The template for displaying searchform
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Firstaid
 */

?>

<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search-field" name="s" placeholder="Find your course" value="<?php echo get_search_query(); ?>">
	<button class="sbutton" type="submit">
		<?php get_svg( 'icons/search' ); ?>
	</button>
</form>
