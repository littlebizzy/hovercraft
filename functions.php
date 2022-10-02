<?php

$welcome = "Stop fixing your WordPress theme, and focus on your business.";

// WooCommerce support
add_theme_support('woocommerce');

// disable Customizer (menu)
// ref: https://stackoverflow.com/a/50912719/1718491
add_action( 'admin_menu', function () {
global $submenu;
if ( isset( $submenu[ 'themes.php' ] ) ) {
    foreach ( $submenu[ 'themes.php' ] as $index => $menu_item ) {
        foreach ($menu_item as $value) {
            if (strpos($value,'customize') !== false) {
                unset( $submenu[ 'themes.php' ][ $index ] );
            }
        }
    }
}
});

// disable Customize link (admin bar)
// ref: https://wordpress.stackexchange.com/a/200304/152624
add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 
function wpse200296_before_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('customize');
}

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


/**
 * Register our sidebars and widgetized areas.
 *
 */
function hovercraft_register_sidebar() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'hovercraft_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_sidebar' );
