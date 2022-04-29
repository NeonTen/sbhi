<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SBHI
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<!-- Main header -->
	<header id="masthead" class="site-header sticky">

		<!-- Top bar -->
		<?php get_template_part( 'template-parts/header/top', 'bar' ); ?>

		<!-- Main header -->
		<div class="main-header">
			<div class="container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
				<?php get_template_part( 'template-parts/header/nav' ); ?>
				<?php get_template_part( 'template-parts/header/login' ); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Add content after header.
	 *
	 * @hooked get_page_title_section - 10
	 * (outputs Page image, Title and Breadcrumbs)
	 */
	do_action( 'sbhi_after_header' );
	?>
