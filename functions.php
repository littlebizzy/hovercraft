<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'HOVERCRAFT_VERSION' ) ) {
	define( 'HOVERCRAFT_VERSION', '0.3.65' );
}

// title tag
add_theme_support( 'title-tag' );

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
require get_template_directory() . '/inc/header/header-video.php';
require get_template_directory() . '/inc/header/logo-alternative.php';
require get_template_directory() . '/inc/header/logo-default.php';
require get_template_directory() . '/inc/header/posthero.php';
require get_template_directory() . '/inc/header/remove-generator.php';

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

// taxonomy
require get_template_directory() . '/inc/taxonomy/category-bullets.php';
require get_template_directory() . '/inc/taxonomy/category-portal.php';
require get_template_directory() . '/inc/taxonomy/category-hide-certain.php';
require get_template_directory() . '/inc/taxonomy/tags-list.php';

// comments
require get_template_directory() . '/inc/comments/comment-fields.php';

// widgets
require get_template_directory() . '/inc/widgets/register-widget-areas.php';
require get_template_directory() . '/inc/widgets/widget-shortcodes.php';
require get_template_directory() . '/inc/widgets/widget-classes.php';
require get_template_directory() . '/inc/widgets/widget-content.php';
require get_template_directory() . '/inc/widgets/widget-visibility.php';

// customizer
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/google-fonts.php';
require get_template_directory() . '/inc/customizer/customizer-assets.php';

// css
require get_template_directory() . '/inc/css/css-generator.php';

// javascript
require get_template_directory() . '/inc/js/load-js.php';

// admin
require get_template_directory() . '/inc/admin/admin-assets.php';
require get_template_directory() . '/inc/admin/theme-info.php';

// integrations
require get_template_directory() . '/inc/integrations/bbpress.php';
require get_template_directory() . '/inc/integrations/woocommerce.php';
