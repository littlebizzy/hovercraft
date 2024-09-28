<?php

// Disable WordPress.org updates for this theme
add_filter('gu_override_dot_org', function ($overrides) {
    $overrides[] = 'hovercraft';
    return $overrides;
});

// MENUS

// Menu locations
require get_template_directory() . '/inc/menus/menu-locations.php';

// Accordion menu
require get_template_directory() . '/inc/menus/accordion-menu.php';

// Offcanvas menu
require get_template_directory() . '/inc/menus/offcanvas-menu.php';

// Overlay menu
require get_template_directory() . '/inc/menus/overlay-menu.php';

// Select menu
// require get_template_directory() . '/inc/menus/select-menu.php';

// Back to top
require get_template_directory() . '/inc/back-to-top.php';

// bbPress disable reply links
require get_template_directory() . '/inc/bbpress-disable-reply-links.php';

// bbPress quick tags
require get_template_directory() . '/inc/bbpress-quick-tags.php';

// bbPress search results
require get_template_directory() . '/inc/bbpress-search-results.php';

// Breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';

// Bullets category
require get_template_directory() . '/inc/bullets-category.php';

// Register portal category (customizer)
require get_template_directory() . '/inc/customizer/register-portal-category.php';

// Register snippets category (customizer)
require get_template_directory() . '/inc/customizer/register-snippets-category.php';

// CSS generator
require get_template_directory() . '/inc/css-generator.php';

// Custom header
require get_template_directory() . '/inc/custom-header.php';

// Custom post test
require get_template_directory() . '/inc/custom-post-test.php';

// Customizer settings
require get_template_directory() . '/inc/customizer/customizer-settings.php';

// Register blog category
require get_template_directory() . '/inc/customizer/register-blog-category.php';

// Disable responsive images
require get_template_directory() . '/inc/disable-responsive-images.php';

// Featured images
require get_template_directory() . '/inc/featured-images.php';

// Footer callout
require get_template_directory() . '/inc/footer-callout.php';

// Full screen search
require get_template_directory() . '/inc/full-screen-search.php';

// Suggest Git Updater
require get_template_directory() . '/inc/git-updater.php';

// Google fonts
require get_template_directory() . '/inc/google-fonts.php';

// Google fonts array (customizer)
require get_template_directory() . '/inc/customizer/google-fonts-array.php';

// Header cleanup
require get_template_directory() . '/inc/header-cleanup.php';

// Video uploader
require get_template_directory() . '/inc/header-video.php';

// Hide certain categories
require get_template_directory() . '/inc/hide-certain-categories.php';

// Alternative logo
require get_template_directory() . '/inc/logo-alternative.php';

// Default logo
require get_template_directory() . '/inc/logo-default.php';

// Media sizes
require get_template_directory() . '/inc/media-sizes-verify.php';

// Media sizes insert
require get_template_directory() . '/inc/media-sizes-insert.php';

// Meta box
require get_template_directory() . '/inc/meta-box.php';

// Pagination
require get_template_directory() . '/inc/pagination.php';

// Portal category
require get_template_directory() . '/inc/portal-category.php';

// Sidebar callout
require get_template_directory() . '/inc/sidebar-callout.php';

// Tags list
require get_template_directory() . '/inc/tags-list.php';

// Title homepage
require get_template_directory() . '/inc/title-homepage.php';

// Title tag
require get_template_directory() . '/inc/title-tag.php';

// Widget areas
require get_template_directory() . '/inc/widget-areas.php';

// Remove generator
require get_template_directory() . '/inc/remove-generator.php';

// WooCommerce support
require get_template_directory() . '/inc/woocommerce-support.php';

// Page excerpts
add_post_type_support( 'page', 'excerpt' );

// RSS feeds meta
add_theme_support( 'automatic-feed-links' );

// Internationalization
function hovercraft_load_theme_textdomain() {
    load_theme_textdomain( 'hovercraft', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'hovercraft_load_theme_textdomain' );

// Disable post gallery inline CSS
add_filter( 'use_default_gallery_style', '__return_false' );

// Disable archive title prefixes
// https://wordpress.stackexchange.com/questions/179585/remove-category-tag-author-from-the-archive-title
// https://wordpress.stackexchange.com/questions/245274/how-to-remove-archive-label-from-archive-title
add_filter( 'get_the_archive_title_prefix', '__return_false' );
