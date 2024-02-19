<?php

// select menu
// require get_template_directory() . '/inc/select-menu.php';

// back to top
// require get_template_directory() . '/inc/back-to-top.php';

// bbpress quick tags
require get_template_directory() . '/inc/bbpress-quick-tags.php';

// breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';

// bullets category
require get_template_directory() . '/inc/bullets-category.php';

// register portal category (customizer)
require get_template_directory() . '/inc/customizer/register-portal-category.php';

// register snippets category (customizer)
require get_template_directory() . '/inc/customizer/register-snippets-category.php';

// css generator
require get_template_directory() . '/inc/css-generator.php';

// custom header
require get_template_directory() . '/inc/custom-header.php';

// custom post test
require get_template_directory() . '/inc/custom-post-test.php';

// customizer settings
require get_template_directory() . '/inc/customizer/customizer-settings.php';

// register blog category
require get_template_directory() . '/inc/customizer/register-blog-category.php';

// disable responsive images
require get_template_directory() . '/inc/disable-responsive-images.php';

// featured images
require get_template_directory() . '/inc/featured-images.php';

// full screen search
require get_template_directory() . '/inc/full-screen-search.php';

// suggest git updater
require get_template_directory() . '/inc/git-updater.php';

// google fonts
require get_template_directory() . '/inc/google-fonts.php';

// google fonts array (customizer)
require get_template_directory() . '/inc/customizer/google-fonts-array.php';

// video uploader
require get_template_directory() . '/inc/header-video.php';

// hide certain categories
require get_template_directory() . '/inc/hide-certain-categories.php';

// alternative logo
require get_template_directory() . '/inc/logo-alternative.php';

// default logo
require get_template_directory() . '/inc/logo-default.php';

// media sizes
require get_template_directory() . '/inc/media-sizes-verify.php';

// media sizes insert
require get_template_directory() . '/inc/media-sizes-insert.php';

// menu locations
require get_template_directory() . '/inc/menu-locations.php';

// meta box
require get_template_directory() . '/inc/meta-box.php';

// pagination
require get_template_directory() . '/inc/pagination.php';

// portal category
require get_template_directory() . '/inc/portal-category.php';

// responsive menu
require get_template_directory() . '/inc/responsive-menu.php';

// sidebar callout
require get_template_directory() . '/inc/sidebar-callout.php';

// tags list
require get_template_directory() . '/inc/tags-list.php';

// title homepage
require get_template_directory() . '/inc/title-homepage.php';

// title tag
require get_template_directory() . '/inc/title-tag.php';

// widget areas
require get_template_directory() . '/inc/widget-areas.php';

// remove generator
require get_template_directory() . '/inc/remove-generator.php';

// woocommerce support
require get_template_directory() . '/inc/woocommerce-support.php';

// page excerpts
add_post_type_support( 'page', 'excerpt' );

// rss feeds meta
add_theme_support( 'automatic-feed-links' );

//Internationalization
function hovercraft_load_theme_textdomain() {
    load_theme_textdomain( 'hovercraft', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'hovercraft_load_theme_textdomain' );

// disable post gallery inline css
add_filter( 'use_default_gallery_style', '__return_false' );

// disable archive title prefixes
// https://wordpress.stackexchange.com/questions/179585/remove-category-tag-author-from-the-archive-title
// https://wordpress.stackexchange.com/questions/245274/how-to-remove-archive-label-from-archive-title
add_filter( 'get_the_archive_title_prefix', '__return_false' );
