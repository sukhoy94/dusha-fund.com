<?php

function addNavItemClassToUlElementInMenu($classes): array
{
    $classes[] = 'nav-item';
    return $classes;
}

function addClassNavLinkToAnchorInMenu($html): string
{
    return preg_replace('/<a /', '<a class="nav-link"', $html);
}

add_filter('wp_nav_menu','addClassNavLinkToAnchorInMenu');
add_filter('nav_menu_css_class', 'addNavItemClassToUlElementInMenu', 10, 4 );