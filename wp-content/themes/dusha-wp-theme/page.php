<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dusha_WP_theme
 */

get_header();
global $post;
?>

	<div id="primary" class="container color-white pb-9rem">
        <h1 class="color-primary page-content-title mt-5"><?=$post->post_title?></h1>
        <?=$post->post_content;?>
	</div><!-- #main -->

<?php
get_sidebar();
get_footer();
