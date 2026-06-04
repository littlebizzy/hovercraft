<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'HOVERCRAFT_VERSION' ) ) {
	define( 'HOVERCRAFT_VERSION', '0.3.215' );
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

// taxonomy
require get_template_directory() . '/inc/taxonomy/category-bullets.php';
require get_template_directory() . '/inc/taxonomy/category-portal.php';
require get_template_directory() . '/inc/taxonomy/category-hide-certain.php';

// comments
require get_template_directory() . '/inc/comments/comment-author-url.php';
require get_template_directory() . '/inc/comments/comment-fields.php';
require get_template_directory() . '/inc/comments/comment-reply.php';

// widgets
require get_template_directory() . '/inc/widgets/widget-areas.php';
require get_template_directory() . '/inc/widgets/widget-tiles.php';
require get_template_directory() . '/inc/widgets/widget-columns.php';
require get_template_directory() . '/inc/widgets/widget-zigzag.php';
require get_template_directory() . '/inc/widgets/widget-header-center.php';
require get_template_directory() . '/inc/widgets/widget-header-aside.php';
require get_template_directory() . '/inc/widgets/widget-after-add-to-cart.php';
require get_template_directory() . '/inc/sidebar/sidebar-callout.php';
require get_template_directory() . '/inc/sidebar/sidebar-display.php';

// footer
require get_template_directory() . '/inc/footer/footer-back-to-top.php';
require get_template_directory() . '/inc/footer/footer-callout.php';

// customizer
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/categories/category-blog.php';
require get_template_directory() . '/inc/customizer/categories/category-portal.php';
require get_template_directory() . '/inc/customizer/categories/category-faq.php';
require get_template_directory() . '/inc/customizer/fonts/font-helpers.php';
require get_template_directory() . '/inc/customizer/fonts/google-fonts.php';
require get_template_directory() . '/inc/customizer/fonts/google-fonts-multilingual.php';

// css
require get_template_directory() . '/inc/css/css-generator.php';

// fonts
require get_template_directory() . '/inc/fonts/google-fonts.php';

// metadata
require get_template_directory() . '/inc/metadata/metadata-open-graph.php';

// meta boxes
require get_template_directory() . '/inc/meta-boxes/meta-box.php';
require get_template_directory() . '/inc/meta-boxes/meta-box-collapse-assets.php';
require get_template_directory() . '/inc/meta-boxes/meta-box-zigzag.php';

// woocommerce
require get_template_directory() . '/inc/woocommerce/woocommerce-theme-support.php';
require get_template_directory() . '/inc/woocommerce/woocommerce-checkout-coupon.php';
require get_template_directory() . '/inc/woocommerce/woocommerce-checkout-order-summary.php';
require get_template_directory() . '/inc/woocommerce/woocommerce-quantity-select.php';
require get_template_directory() . '/inc/woocommerce/woocommerce-wrappers.php';

// bbpress
require get_template_directory() . '/inc/bbpress/bbpress-disable-reply-links.php';
require get_template_directory() . '/inc/bbpress/bbpress-disable-styles.php';
require get_template_directory() . '/inc/bbpress/bbpress-quick-tags.php';
require get_template_directory() . '/inc/bbpress/bbpress-search-results.php';

// shortcodes
require get_template_directory() . '/inc/misc/shortcodes.php';

// search
require get_template_directory() . '/inc/misc/full-screen-search.php';

// tags
require get_template_directory() . '/inc/misc/tags-list.php';

// license
require_once get_template_directory() . '/inc/misc/license.php';

// updates
require get_template_directory() . '/inc/misc/git-updater.php';

// utility
require get_template_directory() . '/inc/misc/custom-post-test.php';
