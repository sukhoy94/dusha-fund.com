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
</head>

<body class="bg-black">
<?php wp_body_open(); ?>
<div id="page" class="site bg-black">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dusha-wp-theme' ); ?></a>

	<header id="masthead" class="site-header bg-black">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <?php require ('template-parts/logo-svg.php'); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu( array(
                    'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                    'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                    'container_class' => 'collapse justify-content-end navbar-collapse',              // (string) class контейнера (div тега)
                    'container_id'    => 'navbarSupportedContent',              // (string) id контейнера (div тега)
                    'menu_class'      => 'navbar-nav',          // (string) class самого меню (ul тега)
                    'menu_id'         => '',              // (string) id самого меню (ul тега)
                    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                    'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                    'before'          => '',              // (string) Текст перед <a> каждой ссылки
                    'after'           => '',              // (string) Текст после </a> каждой ссылки
                    'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                    'link_after'      => '<i class="fa-solid fa-arrow-up-right-from-square"></i>',              // (string) Текст после анкора (текста) ссылки
                    'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                    'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                    'theme_location'  => 'top-menu',               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                ) );
                ?>
            </div>


        </nav>
<!--        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">-->
<!--            <div class="container-fluid">-->
<!---->
<!---->
<!---->
<!--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-top-navbar" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!---->
<!--                -->
<!--            </div>-->
<!--        </nav>-->
	</header><!-- #masthead -->