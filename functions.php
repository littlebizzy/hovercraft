<?php

// disable wordpress.org updates for this theme
add_filter( 'gu_override_dot_org', function ( $overrides ) {
    $overrides[] = 'hovercraft';
    return $overrides;
});

// menus
require get_template_directory() . '/inc/menus/menu-locations.php';
require get_template_directory() . '/inc/menus/main-menu.php';
require get_template_directory() . '/inc/menus/main-menu-toggle.php';
require get_template_directory() . '/inc/menus/accordion-menu.php';
require get_template_directory() . '/inc/menus/offcanvas-menu.php';
require get_template_directory() . '/inc/menus/overlay-menu.php';
// require get_template_directory() . '/inc/menus/select-menu.php';

// back to top
require get_template_directory() . '/inc/back-to-top.php';

// bbpress
require get_template_directory() . '/inc/bbpress-disable-reply-links.php';
require get_template_directory() . '/inc/bbpress-quick-tags.php';
require get_template_directory() . '/inc/bbpress-search-results.php';

// breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';

// categories
require get_template_directory() . '/inc/bullets-category.php';
require get_template_directory() . '/inc/portal-category.php';
require get_template_directory() . '/inc/hide-certain-categories.php';

// comments
require get_template_directory() . '/inc/comment-fields.php';

// customizer
require get_template_directory() . '/inc/customizer/customizer-settings.php';
require get_template_directory() . '/inc/customizer/register-blog-category.php';
require get_template_directory() . '/inc/customizer/register-portal-category.php';
require get_template_directory() . '/inc/customizer/register-snippets-category.php';
require get_template_directory() . '/inc/customizer/font-family-helper.php';
require get_template_directory() . '/inc/customizer/google-fonts-array.php';
require get_template_directory() . '/inc/customizer/google-fonts-multilingual-array.php';

// css
require get_template_directory() . '/inc/css-generator.php';

// fonts
require get_template_directory() . '/inc/google-fonts.php';

// footer
require get_template_directory() . '/inc/footer-callout.php';

// header
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/header-cleanup.php';
require get_template_directory() . '/inc/header-video.php';

// images
require get_template_directory() . '/inc/disable-responsive-images.php';
require get_template_directory() . '/inc/featured-images.php';
require get_template_directory() . '/inc/media-sizes-verify.php';
require get_template_directory() . '/inc/media-sizes-insert.php';

// license
require_once get_template_directory() . '/inc/license.php';

// logo
require get_template_directory() . '/inc/logo-alternative.php';
require get_template_directory() . '/inc/logo-default.php';

// meta
require get_template_directory() . '/inc/meta-box.php';
require get_template_directory() . '/inc/open-graph.php';

// pagination
require get_template_directory() . '/inc/pagination.php';

// search
require get_template_directory() . '/inc/full-screen-search.php';

// sidebar
require get_template_directory() . '/inc/sidebar-callout.php';

// tags
require get_template_directory() . '/inc/tags-list.php';

// title
require get_template_directory() . '/inc/title-homepage.php';
require get_template_directory() . '/inc/title-tag.php';

// updates
require get_template_directory() . '/inc/git-updater.php';

// widget areas
require get_template_directory() . '/inc/widget-areas.php';

// custom theme widgets
require get_template_directory() . '/inc/widgets/widget-zigzag.php';

// woocommerce
require get_template_directory() . '/inc/quantity-buttons.php';
require get_template_directory() . '/inc/woocommerce-support.php';

// shortcodes
require get_template_directory() . '/inc/shortcodes.php';

// utility
require get_template_directory() . '/inc/custom-post-test.php';
require get_template_directory() . '/inc/remove-generator.php';

// page excerpts
add_post_type_support( 'page', 'excerpt' );

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

// zigzag layout module
require get_template_directory() . '/inc/layouts/layout-zigzag.php';
require get_template_directory() . '/inc/layouts/render-zigzag.php';
require get_template_directory() . '/inc/customizer-controls/class-zigzag-repeater.php';

// Ref: ChatGPT
// Ref: https://wordpress.stackexchange.com/questions/179585/remove-category-tag-author-from-the-archive-title
// Ref: https://wordpress.stackexchange.com/questions/245274/how-to-remove-archive-label-from-archive-title
