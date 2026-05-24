<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'HOVERCRAFT_VERSION' ) ) {
	define( 'HOVERCRAFT_VERSION', '0.3.149' );
}

// title tag
add_theme_support( 'title-tag' );

// rss feeds
add_theme_support( 'automatic-feed-links' );

// post thumbnails
add_theme_support( 'post-thumbnails' );

// post formats
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'video', 'quote', 'status', 'audio', 'chat' ) );

// woocommerce support
add_theme_support( 'woocommerce' );

// menus
register_nav_menus( array(
	'menu_header' => 'Header Menu',
	'menu_mobile' => 'Mobile Menu',
	'menu_footer' => 'Footer Menu',
) );

// content width
if ( ! isset( $content_width ) ) {
	$content_width = 1000;
}

// customizer
require get_template_directory() . '/inc/customizer.php';

// css generator
require get_template_directory() . '/inc/css-generator.php';

// automatic updates
require get_template_directory() . '/inc/automatic-updates.php';

// content types
require get_template_directory() . '/inc/content-types.php';

// wp-admin
require get_template_directory() . '/inc/wp-admin.php';

// enqueue scripts
require get_template_directory() . '/inc/enqueue-scripts.php';

// posthero
require get_template_directory() . '/inc/posthero.php';

// main content
require get_template_directory() . '/inc/main-content.php';

// fonts
require get_template_directory() . '/inc/fonts.php';

// misc
require get_template_directory() . '/inc/misc.php';

// body classes
require get_template_directory() . '/inc/body-classes.php';

// sidebars
require get_template_directory() . '/inc/sidebars.php';

// navigation
require get_template_directory() . '/inc/navigation.php';

// images
require get_template_directory() . '/inc/images.php';

// breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';

// theme mods
require get_template_directory() . '/inc/theme-mods.php';

// title
require get_template_directory() . '/inc/title.php';

// excerpt
require get_template_directory() . '/inc/excerpt.php';

// search
require get_template_directory() . '/inc/search.php';

// comments
require get_template_directory() . '/inc/comments.php';

// woocommerce
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
