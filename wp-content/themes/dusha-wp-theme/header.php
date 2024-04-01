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
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dusha-wp-theme' ); ?></a>

	<header id="masthead" class="site-header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
            <div class="container-fluid">

<!--                <a class="navbar-brand heading-black page-scroll" href="/">-->
<!--                    --><?php //require ('template-parts/logo-svg.php'); ?>
<!--                </a>-->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-top-navbar" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                        'container_class' => 'collapse navbar-collapse justify-content-md-center',
                        'menu_class' => 'navbar-nav top-menu-wrapper',
                        'container_id' => 'primary-top-navbar',
                    ]);
                ?>
            </div>
        </nav>
	</header><!-- #masthead -->