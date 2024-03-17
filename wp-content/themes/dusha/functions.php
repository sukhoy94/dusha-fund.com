<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

// compiled styles
wp_enqueue_style('custom', get_template_directory_uri() . '/assets/dist/main.css');

// main compiled js file
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/dist/bundle.js');