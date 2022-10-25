<?php

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
