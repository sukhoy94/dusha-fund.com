<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dusha_WP_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <script src="https://kit.fontawesome.com/5ae6764514.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

</head>

<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dusha-wp-theme' ); ?></a>
    <div class="container">
        <header id="masthead" class="site-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid nav-container">
                    <a class="navbar-brand" href="/">
                        <?php require ('template-parts/logo-svg.php'); ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php

                    require_once "backend/header/DushaWalker.php";

                    wp_nav_menu( array(
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => 'collapse justify-content-end navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'menu_class'      => 'navbar-nav',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'link_after'      => '',
                        'theme_location'  => 'top-menu',
                        'walker' => new DushaWalker(),
                    ) );
                    ?>

                    <a class="btn bg-primary color-white donate-btn" href="<?php echo get_permalink(132);?>"> 
                        <?php echo pll__('Donate') ;?> <i class="fa-solid fa-heart"></i> 
                    </a>
                </div>


            </nav>

            <ul class="language-switcher-wrapper">
                <?php
                    if (function_exists('pll_the_languages')) {
                        pll_the_languages(['show_flags' => false, 'show_names' => true,]);
                    }
                ?>
            </ul>


            <?php get_search_form(); ?>
        </header><!-- #masthead -->
    </div>