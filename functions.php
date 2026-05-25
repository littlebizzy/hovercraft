<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'HOVERCRAFT_VERSION' ) ) {
	define( 'HOVERCRAFT_VERSION', '0.3.161' );
}

// rss feeds
add_theme_support( 'automatic-feed-links' );

// page excerpts
add_post_type_support( 'page', 'excerpt' );

// internationalization
function hovercraft_load_theme_textdomain() {
	load_theme_textdomain( 'hovercraft', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'hovercraft_load_theme_textdomain' );

// disable wordpress.org updates for this theme
add_filter( 'gu_override_dot_org', function ( $overrides ) {
	$overrides[] = 'hovercraft';
	return $overrides;
} );

// disable post gallery inline css
add_filter( 'use_default_gallery_style', '__return_false' );

// disable archive title prefixes
add_filter( 'get_the_archive_title_prefix', '__return_false' );

// editor styles
add_theme_support( 'editor-styles' );
add_editor_style( 'style.css' );

// wide alignment
add_theme_support( 'align-wide' );

// title tag
add_theme_support( 'title-tag' );

// post thumbnails
add_theme_support( 'post-thumbnails' );

// customize refresh
add_theme_support( 'customize-selective-refresh-widgets' );

// woocommerce
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// register menus
register_nav_menus( array(
	'main' => esc_html__( 'Main Menu', 'hovercraft' ),
	'mobile' => esc_html__( 'Mobile Menu', 'hovercraft' ),
	'footer' => esc_html__( 'Footer Menu', 'hovercraft' ),
	'topbar' => esc_html__( 'Topbar Menu', 'hovercraft' ),
) );

// required files
require get_template_directory() . '/inc/assets.php';
require get_template_directory() . '/inc/body-classes.php';
require get_template_directory() . '/inc/comments.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/editor.php';
require get_template_directory() . '/inc/header-assets.php';
require get_template_directory() . '/inc/license.php';
require get_template_directory() . '/inc/meta-boxes.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/sidebars.php';
require get_template_directory() . '/inc/taxonomies.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/widgets.php';

// bbpress files
require get_template_directory() . '/inc/bbpress/bbpress.php';
require get_template_directory() . '/inc/bbpress/forums.php';
require get_template_directory() . '/inc/bbpress/roles.php';

// footer files
require get_template_directory() . '/inc/footer/footer-back-to-top.php';
require get_template_directory() . '/inc/footer/footer-callout.php';
require get_template_directory() . '/inc/footer/footer-widgets.php';

// header files
require get_template_directory() . '/inc/header/header-cleanup.php';
require get_template_directory() . '/inc/header/header-cta.php';
require get_template_directory() . '/inc/header/header-image.php';
require get_template_directory() . '/inc/header/header-logo.php';
require get_template_directory() . '/inc/header/header-navigation.php';
require get_template_directory() . '/inc/header/header-title.php';
require get_template_directory() . '/inc/header/header-video.php';

// helper files
require get_template_directory() . '/inc/helpers/hero.php';
require get_template_directory() . '/inc/helpers/main-content.php';
require get_template_directory() . '/inc/helpers/post-title.php';
require get_template_directory() . '/inc/helpers/widgets.php';

// misc files
require get_template_directory() . '/inc/misc/breadcrumbs.php';
require get_template_directory() . '/inc/misc/full-screen-search.php';
require get_template_directory() . '/inc/misc/pagination.php';
require get_template_directory() . '/inc/misc/shortcodes.php';
require get_template_directory() . '/inc/misc/tags-list.php';

// post files
require get_template_directory() . '/inc/post/post-bylines.php';
require get_template_directory() . '/inc/post/post-featured-image.php';
require get_template_directory() . '/inc/post/posthero.php';

// woocommerce files
require get_template_directory() . '/inc/woocommerce/checkout-login.php';
require get_template_directory() . '/inc/woocommerce/checkout-order-summary.php';
require get_template_directory() . '/inc/woocommerce/checkout-place-order.php';
require get_template_directory() . '/inc/woocommerce/product-tabs.php';
require get_template_directory() . '/inc/woocommerce/quantity-select.php';
