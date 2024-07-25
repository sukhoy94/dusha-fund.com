<?php
/**
 * Dusha WP theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dusha_WP_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dusha_wp_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Dusha WP theme, use a find and replace
		* to change 'dusha-wp-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dusha-wp-theme', get_template_directory() . '/languages' );

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

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'dusha_wp_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
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
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'dusha_wp_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dusha_wp_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dusha_wp_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'dusha_wp_theme_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function dusha_wp_theme_scripts() {
	wp_enqueue_style( 'dusha-wp-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dusha-wp-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dusha-wp-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/dist/main.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/dist/bundle.js', [], _S_VERSION, ['in_footer' => true]);
}
add_action( 'wp_enqueue_scripts', 'dusha_wp_theme_scripts');

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

require_once "backend/navigation.php";
require_once "backend/translations/polylang.php";

add_filter( 'template_include', 'portfolio_page_template', 99 );
function portfolio_page_template( $template ) {
    // custom template for goals page
    if (is_page('our-goals') || is_page('nasze-cele') ) {
        $new_template = locate_template( array( 'page-our-goals.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }

    // custom template for events list page
    if (is_category('events-ua') || is_category('events-pl')) {
        $new_template = locate_template( array( 'category-events.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }

    // custom template for events
    if (is_singular()) {
        $postCategories = array_column(get_the_category(), 'slug');
        if (array_intersect(['events-ua', 'events-pl'], $postCategories)) {
            $new_template = locate_template(['single-event.php']);
            if ( '' != $new_template ) {
                return $new_template ;
            }
        }
    }

    return $template;
}



add_filter( 'previous_posts_link_attributes', 'pagination_posts_link_attributes_filter' );
add_filter( 'next_posts_link_attributes', 'pagination_posts_link_attributes_filter' );

function pagination_posts_link_attributes_filter( $attributes ){
	return 'class="page-link"';
}