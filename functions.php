<?php

// load jquery scripts
add_action( 'wp_enqueue_scripts', 'add_my_script' );

function add_my_script() {
wp_enqueue_script(
    'hovercraft_select_menu', // your script unique name 
    get_template_directory_uri().'/js/select-menu.js', //script file location
    array('jquery') //lists the scripts upon which your script depends
);
}

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

// disable Customizer (menu)
// ref: https://stackoverflow.com/a/50912719/1718491
// add_action( 'admin_menu', function () {
// global $submenu;
// if ( isset( $submenu[ 'themes.php' ] ) ) {
//    foreach ( $submenu[ 'themes.php' ] as $index => $menu_item ) {
//        foreach ($menu_item as $value) {
//            if (strpos($value,'customize') !== false) {
//                unset( $submenu[ 'themes.php' ][ $index ] );
//            }
//        }
//    }
// }
// });

// disable Customize link (admin bar)
// ref: https://wordpress.stackexchange.com/a/200304/152624
// add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 
// function wpse200296_before_admin_bar_render() {
//    global $wp_admin_bar;
//    $wp_admin_bar->remove_menu('customize');
// }

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


// enable sidebar widgets
function hovercraft_register_sidebar() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'hovercraft_sidebar',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_sidebar' );


// enable copyright widget
function hovercraft_register_copyright() {

	register_sidebar( array(
		'name'          => 'Copyright',
		'id'            => 'hovercraft_copyright',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_copyright' );


// enable footer one widget
function hovercraft_register_footer_one() {

	register_sidebar( array(
		'name'          => 'Footer #1',
		'id'            => 'hovercraft_footer_one',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_one' );


// enable footer two widget
function hovercraft_register_footer_two() {

	register_sidebar( array(
		'name'          => 'Footer #2',
		'id'            => 'hovercraft_footer_two',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_two' );


// enable footer three widget
function hovercraft_register_footer_three() {

	register_sidebar( array(
		'name'          => 'Footer #3',
		'id'            => 'hovercraft_footer_three',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_three' );


// enable footer four widget
function hovercraft_register_footer_four() {

	register_sidebar( array(
		'name'          => 'Footer #4',
		'id'            => 'hovercraft_footer_four',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_four' );




// topbar widget (major)
function hovercraft_widget_topbar_major() {

	register_sidebar( array(
		'name'          => 'Topbar (Major)',
		'id'            => 'hovercraft_topbar_major',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_widget_topbar_major' );

// topbar widget (minor)
function hovercraft_widget_topbar_minor() {

	register_sidebar( array(
		'name'          => 'Topbar (Minor)',
		'id'            => 'hovercraft_topbar_minor',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_widget_topbar_minor' );



// register header menu
function hovercraft_main_menu() {
	register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'hovercraft_main_menu' );



// register header cta menu
function hovercraft_cta_header() {
	register_nav_menu('cta-header',__( 'Header CTA' ));
}
add_action( 'init', 'hovercraft_cta_header' );

// menu splash cta major
function hovercraft_cta_splash_major() {
	register_nav_menu('cta-splash-major',__( 'Splash CTA (Major)' ));
}
add_action( 'init', 'hovercraft_cta_splash_major' );

// menu splash cta minor
function hovercraft_cta_splash_minor() {
	register_nav_menu('cta-splash-minor',__( 'Splash CTA (Minor)' ));
}
add_action( 'init', 'hovercraft_cta_splash_minor' );


// llimit header cta to single item
// https://www.isitwp.com/limit-amount-of-menu-items/
add_filter( 'wp_nav_menu_objects', 'hovercraft_header_cta_limit', 10, 2 );

function hovercraft_header_cta_limit($items, $args) {
    // want our MAINMENU to have MAX of 7 items
    if ( $args->theme_location == 'cta-header' ) {
        $toplinks = 0;
        foreach ( $items as $k => $v ) {
            if ( $v->menu_item_parent == 0 ) {
                // count how many top-level links we have so far...
                $toplinks++;
            }
            // if we've passed our max # ...
            if ( $toplinks > 1 ) {
                unset($items[$k]);
            }
        }
    }
    return $items;
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


