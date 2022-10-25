<?php

// select menu
require get_template_directory() . '/inc/select-menu.php';

// suggest git updater
require get_template_directory() . '/inc/suggest-git-updater.php';

// enable widget areas
require get_template_directory() . '/inc/enable-widget-areas.php';

// enable menu locations
require get_template_directory() . '/inc/enable-menu-locations.php';

// variables
$welcome = "Stop fixing your WordPress theme, and focus on your business.";
global $hovercraft_excerpt;
$hovercraft_excerpt = "HoverCraft is a WordPress theme focused on saving you time and avoiding maintenance tasks. Instead of messing with page builders, DOM elements, and settings, HoverCraft is largely hardcoded, with only a handful of menus, widgets, and CSS classes that you can lightly customize for new projects or clients. Future-proof WordPress designs, like never before...";

// WooCommerce support
add_theme_support('woocommerce');

// page excerpts
add_post_type_support( 'page', 'excerpt' );

// featured image support
add_theme_support( 'post-thumbnails' );

// featured image
function post_image_large() {
    global $post;
    $args = array( 'post_type' => 'attachment', 'post_mime_type' => 'image', 'numberposts' => 1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_status' => null, 'post_parent' => $post->ID ); 
    $attachments = get_posts($args);
    if ($attachments) {
            foreach ( $attachments as $attachment ) {
                    $src = wp_get_attachment_image_src( $attachment->ID, 'large');
                    if ($src) {echo $src[0];}
            }
    }
}

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
