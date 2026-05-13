<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'HOVERCRAFT_VERSION' ) ) {
	define( 'HOVERCRAFT_VERSION', '0.3.41' );
}

// disable wordpress.org updates for this theme
add_filter( 'gu_override_dot_org', function ( $overrides ) {
	$overrides[] = 'hovercraft';
	return $overrides;
} );

// menus
require get_template_directory() . '/inc/menus/menu-locations.php';
require get_template_directory() . '/inc/menus/main-menu.php';
require get_template_directory() . '/inc/menus/main-menu-toggle.php';
require get_template_directory() . '/inc/menus/accordion-menu.php';
require get_template_directory() . '/inc/menus/offcanvas-menu.php';
require get_template_directory() . '/inc/menus/overlay-menu.php';

// back to top
require get_template_directory() . '/inc/ui/back-to-top.php';

// bbpress
require get_template_directory() . '/inc/bbpress/disable-reply-links.php';
require get_template_directory() . '/inc/bbpress/quick-tags.php';
require get_template_directory() . '/inc/bbpress/search-results.php';

// breadcrumbs
require get_template_directory() . '/inc/navigation/breadcrumbs.php';

// categories
require get_template_directory() . '/inc/taxonomy/category-bullets.php';
require get_template_directory() . '/inc/taxonomy/category-portal.php';
require get_template_directory() . '/inc/taxonomy/category-hide-certain.php';

// comments
require get_template_directory() . '/inc/comments/comment-fields.php';

// customizer
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/register-blog-category.php';
require get_template_directory() . '/inc/customizer/register-portal-category.php';
require get_template_directory() . '/inc/customizer/register-faq-category.php';
require get_template_directory() . '/inc/customizer/fonts/font-helpers.php';
require get_template_directory() . '/inc/customizer/fonts/google-fonts.php';
require get_template_directory() . '/inc/customizer/fonts/google-fonts-multilingual.php';

// css
require get_template_directory() . '/inc/css/css-generator.php';

// fonts
require get_template_directory() . '/inc/fonts/google-fonts.php';

// footer
require get_template_directory() . '/inc/footer/footer-callout.php';

// header
require get_template_directory() . '/inc/header/custom-header.php';
require get_template_directory() . '/inc/header/header-assets.php';
require get_template_directory() . '/inc/header/header-cleanup.php';
require get_template_directory() . '/inc/header/header-video.php';
require get_template_directory() . '/inc/header/logo-alternative.php';
require get_template_directory() . '/inc/header/logo-default.php';
require get_template_directory() . '/inc/header/posthero.php';

// images
require get_template_directory() . '/inc/media/disable-responsive-images.php';
require get_template_directory() . '/inc/media/featured-images.php';
require get_template_directory() . '/inc/media/sizes-verify.php';
require get_template_directory() . '/inc/media/sizes-insert.php';

// license
require_once get_template_directory() . '/inc/misc/license.php';

// main content
require get_template_directory() . '/inc/content/main-content.php';

// meta
require get_template_directory() . '/inc/meta/meta-box.php';
require get_template_directory() . '/inc/meta/open-graph.php';

// pagination
require get_template_directory() . '/inc/navigation/pagination.php';

// search
require get_template_directory() . '/inc/ui/full-screen-search.php';

// sidebar
require get_template_directory() . '/inc/sidebar/sidebar-callout.php';

// tags
require get_template_directory() . '/inc/taxonomy/tags-list.php';

// title
require get_template_directory() . '/inc/content/title-homepage.php';
require get_template_directory() . '/inc/content/title-tag.php';

// updates
require get_template_directory() . '/inc/misc/git-updater.php';

// widget areas
require get_template_directory() . '/inc/widgets/widget-areas.php';

// woocommerce
require get_template_directory() . '/inc/woocommerce/quantity-buttons.php';
require get_template_directory() . '/inc/woocommerce/woocommerce-support.php';

// shortcodes
require get_template_directory() . '/inc/shortcodes/theme-shortcodes.php';

// utility
require get_template_directory() . '/inc/misc/custom-post-test.php';
require get_template_directory() . '/inc/header/remove-generator.php';

// page excerpts
add_post_type_support( 'page', 'excerpt' );

// title tag
add_theme_support( 'title-tag' );

// rss feeds
add_theme_support( 'automatic-feed-links' );

// internationalization
function hovercraft_load_theme_textdomain() {
	load_theme_textdomain( 'hovercraft', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'hovercraft_load_theme_textdomain' );

// disable post gallery inline css
add_filter( 'use_default_gallery_style', '__return_false' );

// disable archive title prefixes
add_filter( 'get_the_archive_title_prefix', '__return_false' );

// meta boxes ui
require get_template_directory() . '/inc/admin/admin-meta-ui.php';

// meta boxes
require get_template_directory() . '/inc/meta-boxes/meta-box-zigzag.php';
