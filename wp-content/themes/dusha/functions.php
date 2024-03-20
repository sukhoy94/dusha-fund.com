<?php
// compiled styles
wp_enqueue_style('custom', get_template_directory_uri() . '/assets/dist/main.css');

// main compiled js file
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/dist/bundle.js');

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
    'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
) );