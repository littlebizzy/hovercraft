<?php

// select menu
require get_template_directory() . '/inc/select-menu.php';

// suggest git updater
require get_template_directory() . '/inc/suggest-git-updater.php';

// enable widget areas
require get_template_directory() . '/inc/enable-widget-areas.php';

// enable menu locations
require get_template_directory() . '/inc/enable-menu-locations.php';

// featured images
require get_template_directory() . '/inc/featured-images.php';

// variables
$welcome = "Stop fixing your WordPress theme, and focus on your business.";
global $hovercraft_excerpt;
$hovercraft_excerpt = "HoverCraft is a WordPress theme focused on saving you time and avoiding maintenance tasks. Instead of messing with page builders, DOM elements, and settings, HoverCraft is largely hardcoded, with only a handful of menus, widgets, and CSS classes that you can lightly customize for new projects or clients. Future-proof WordPress designs, like never before...";

// WooCommerce support
add_theme_support('woocommerce');

// page excerpts
add_post_type_support( 'page', 'excerpt' );


// disable copyright widget title
// https://presscustomizr.com/snippet/dynamically-changing-the-widget-title-depending-on-the-context/
function my_widget_title($id_base) {
      if ('hovercraft_copyright' == $id_base) {
      		return '';
      }
      else {
        return $title;
      }
    }
