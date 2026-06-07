<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'HOVERCRAFT_VERSION' ) ) {
	define( 'HOVERCRAFT_VERSION', '0.3.222' );
}

// rss feeds
add_theme_support( 'automatic-feed-links' );

// html5 markup
add_theme_support( 'html5', array(
	'comment-form',
	'comment-list',
	'search-form',
	'gallery',
	'caption',
	'script',
	'style',
) );

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

// menus
require get_template_directory() . '/inc/menus/menu-locations.php';
require get_template_directory() . '/inc/menus/main-menu.php';
require get_template_directory() . '/inc/menus/main-menu-toggle.php';
require get_template_directory() . '/inc/menus/accordion-menu.php';
require get_template_directory() . '/inc/menus/offcanvas-menu.php';
require get_template_directory() . '/inc/menus/overlay-menu.php';

// header
require get_template_directory() . '/inc/header/custom-header.php';
require get_template_directory() . '/inc/header/header-assets.php';
require get_template_directory() . '/inc/header/header-cleanup.php';
require get_template_directory() . '/inc/header/header-navigation.php';
require get_template_directory() . '/inc/header/header-logo-alternative.php';
require get_template_directory() . '/inc/header/header-logo-default.php';

// hero
require get_template_directory() . '/inc/hero/hero-posthero.php';
require get_template_directory() . '/inc/hero/hero-video.php';

// content
require get_template_directory() . '/inc/content/main-content.php';
require get_template_directory() . '/inc/content/title-homepage.php';
require get_template_directory() . '/inc/content/title-tag.php';

// media
require get_template_directory() . '/inc/media/disable-responsive-images.php';
require get_template_directory() . '/inc/media/featured-images.php';
require get_template_directory() . '/inc/media/sizes-verify.php';
require get_template_directory() . '/inc/media/sizes-insert.php';

// navigation
require get_template_directory() . '/inc/navigation/breadcrumbs.php';
require get_template_directory() . '/inc/navigation/pagination.php';
