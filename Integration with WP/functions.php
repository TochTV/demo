<?php
/**
 * tile functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tile
 */

if ( ! function_exists( 'tile_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tile_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tile, use a find and replace
		 * to change 'tile' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tile', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'tile' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tile_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tile_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tile_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tile_content_width', 640 );
}
add_action( 'after_setup_theme', 'tile_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tile_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tile' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tile' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tile_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tile_scripts() {
	wp_enqueue_style( 'tile-style', get_stylesheet_uri() );

	// ========css=============


	wp_enqueue_style( 'tile-bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	wp_enqueue_style( 'tile-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');

	wp_enqueue_style( 'tile-bootstrap-reboot.min', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');

	wp_enqueue_style( 'tile-bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css');

	wp_enqueue_style( 'tile-bootstrap-grid.min', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );

	wp_enqueue_style( 'tile-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');

	wp_enqueue_style( 'tile-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');

	wp_enqueue_style( 'tile-main',get_template_directory_uri() . '/assets/css/main.css' );	


	// ===========js===============

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'tile-bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );

	wp_enqueue_script( 'tile-bootstrap.bundle.min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true );

	wp_enqueue_script( 'tile-bootstrap.bundles', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), '1.0', true );

	wp_enqueue_script( 'tile-mask', get_template_directory_uri() . '/assets/js/jquery.maskedinput.js', array(), '1.0', true );

	wp_enqueue_script( 'tile-magnific', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.0', true );

	wp_enqueue_script( 'tile-main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tile_scripts' );

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
 * Load Jetpack compatibility file.
 */




if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/option-panel.php';
