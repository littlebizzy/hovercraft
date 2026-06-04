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

// metadata
require get_template_directory() . '/inc/metadata/metadata.php';

// comments
require get_template_directory() . '/inc/comments/comment-fields.php';
require get_template_directory() . '/inc/comments/comment-form.php';
require get_template_directory() . '/inc/comments/comment-reply.php';
require get_template_directory() . '/inc/comments/comment-output.php';
require get_template_directory() . '/inc/comments/comment-navigation.php';

// misc
require get_template_directory() . '/inc/misc/accessibility.php';
require get_template_directory() . '/inc/misc/aria-labels.php';
require get_template_directory() . '/inc/misc/back-to-top.php';
require get_template_directory() . '/inc/misc/search-form.php';
require get_template_directory() . '/inc/misc/search-modal.php';
require get_template_directory() . '/inc/misc/shortcodes.php';
require get_template_directory() . '/inc/misc/social-media.php';
require get_template_directory() . '/inc/misc/svg-icons.php';

// customizer
require get_template_directory() . '/inc/customizer/active-callbacks.php';
require get_template_directory() . '/inc/customizer/sanitize-callbacks.php';
require get_template_directory() . '/inc/customizer/register.php';
require get_template_directory() . '/inc/customizer/output-css.php';
require get_template_directory() . '/inc/customizer/output-js.php';

// css
require get_template_directory() . '/inc/css/accessibility.php';
require get_template_directory() . '/inc/css/back-to-top.php';
require get_template_directory() . '/inc/css/base.php';
require get_template_directory() . '/inc/css/comments.php';
require get_template_directory() . '/inc/css/content.php';
require get_template_directory() . '/inc/css/custom-header.php';
require get_template_directory() . '/inc/css/footer.php';
require get_template_directory() . '/inc/css/forms.php';
require get_template_directory() . '/inc/css/global.php';
require get_template_directory() . '/inc/css/headings.php';
require get_template_directory() . '/inc/css/heros.php';
require get_template_directory() . '/inc/css/images.php';
require get_template_directory() . '/inc/css/menus.php';
require get_template_directory() . '/inc/css/metadata.php';
require get_template_directory() . '/inc/css/pagination.php';
require get_template_directory() . '/inc/css/search-modal.php';
require get_template_directory() . '/inc/css/search.php';
require get_template_directory() . '/inc/css/sidebar.php';
require get_template_directory() . '/inc/css/widgets.php';

// javascript
require get_template_directory() . '/inc/javascript/back-to-top.php';
require get_template_directory() . '/inc/javascript/main-menu-toggle.php';
require get_template_directory() . '/inc/javascript/offcanvas-menu.php';
require get_template_directory() . '/inc/javascript/overlay-menu.php';
require get_template_directory() . '/inc/javascript/search-modal.php';

// admin
require get_template_directory() . '/inc/admin/admin-bar.php';
require get_template_directory() . '/inc/admin/license-notice.php';

// widgets
require get_template_directory() . '/inc/widgets/widget-areas.php';

// meta boxes
require get_template_directory() . '/inc/meta-boxes/register.php';
require get_template_directory() . '/inc/meta-boxes/output.php';
require get_template_directory() . '/inc/meta-boxes/save.php';

// woocommerce
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce/woocommerce.php';
	require get_template_directory() . '/inc/woocommerce/woocommerce-cart.php';
	require get_template_directory() . '/inc/woocommerce/woocommerce-css.php';
	require get_template_directory() . '/inc/woocommerce/woocommerce-sidebar.php';
}

// bbpress
if ( class_exists( 'bbPress' ) ) {
	require get_template_directory() . '/inc/bbpress/bbpress.php';
	require get_template_directory() . '/inc/bbpress/bbpress-css.php';
}
