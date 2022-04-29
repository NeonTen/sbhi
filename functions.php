<?php
/**
 * SBHI functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SBHI
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sbhi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sbhi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SBHI, use a find and replace
		 * to change 'sbhi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sbhi', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			[
				'main-menu' => esc_html__( 'Primary', 'sbhi' ),
			]
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sbhi_custom_background_args',
				[
					'default-color' => 'ffffff',
					'default-image' => '',
				]
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			[
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);
	}
endif;
add_action( 'after_setup_theme', 'sbhi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sbhi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sbhi_content_width', 640 );
}
add_action( 'after_setup_theme', 'sbhi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sbhi_widgets_init() {
	register_sidebar(
		[
			'name'          => esc_html__( 'Sidebar', 'sbhi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sbhi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}
add_action( 'widgets_init', 'sbhi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sbhi_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'sbhi-style', get_stylesheet_uri(), [], THEME_VERSION );

	// Google fonts.
	wp_enqueue_style( 'sbhi-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Titillium+Web:wght@400;600;700&display=swap', false );

	/**
	 * Scripts
	 */
	wp_enqueue_script( 'sbhi-navigation', get_template_directory_uri() . '/js/navigation.js', [], THEME_VERSION, true );

	// Custom scripts.
	wp_enqueue_script( 'sbhi-custom', get_template_directory_uri() . '/js/custom.js', [ 'jquery' ], THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sbhi_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * All custom actions
 */
require get_template_directory() . '/inc/class-sbhi-actions.php';

/**
 * Custom posts types
 */
// require get_template_directory() . '/inc/class-custom-post-types.php';

/**
 * Load ACF Options panel.
 */
require get_template_directory() . '/inc/class-acf-options-panel.php';


if(!is_admin() && $GLOBALS["pagenow"] != "wp-login.php"){
	function unload_um_styles(){

		// Deregister & dequeue styles
		wp_dequeue_style(array(
			"um_fonticons_ii",
			"um_fonticons_fa",
			// "select2",
			"um_modal",
			"um_styles",
			"um_members",
			"um_profile",
			"um_account",
			"um_misc",
			"um_fileupload",
			"um_datetime",
			"um_datetime_date",
			"um_datetime_time",
			"um_raty",
			"um_scrollbar",
			"um_crop",
			"um_tipsy",
			"um_responsive",
			"um_default_css",
		));

		wp_deregister_style(array(
			"um_fonticons_ii",
			"um_fonticons_fa",
			// "select2",
			"um_modal",
			"um_styles",
			"um_members",
			"um_profile",
			"um_account",
			"um_misc",
			"um_fileupload",
			"um_datetime",
			"um_datetime_date",
			"um_datetime_time",
			"um_raty",
			"um_scrollbar",
			"um_crop",
			"um_tipsy",
			"um_responsive",
			"um_default_css",
		));

	};
	add_action("wp_print_styles","unload_um_styles");
};

add_filter('login_errors','login_error_message');

function login_error_message($error){
    //check if that's the error you are looking for
    // $pos = strpos($error, 'invalid_username');
    if ( 'Incorrect username or password.' === $error ) {
        //its the right error so you can overwrite it
        $error = '<span style="color: #000;">Incorrect username or password. Please try again.</span>';
    }
    return $error;
}

function tutor_primary_author() {
	if ( function_exists('tutor')) {
		$tutor_post_type = tutor()->course_post_type;
		add_post_type_support( $tutor_post_type, 'author' );
	}
}
add_action('init', 'tutor_primary_author', 999 );
