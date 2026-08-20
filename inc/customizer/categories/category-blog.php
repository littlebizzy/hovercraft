<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register blog category setting
function hovercraft_register_blog_category( $wp_customize ) {

	// get an array of categories
	$categories_list = get_categories( array( 'orderby' => 'name' ) );

	// initialize choices list with default value
	$choices_list = array( 'none' => 'None (Disabled)' );

	// populate choices list with categories
	foreach ( $categories_list as $category ) {
		$choices_list[ $category->slug ] = $category->name;
	}

	// blog category setting
	$wp_customize->add_setting( 'hovercraft_blog_category', array(
		'default'           => 'none',
		'sanitize_callback' => 'hovercraft_sanitize_select',
	) );

	// blog category control
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_blog_category',
	array(
		'label'       => __( 'Feed Category', 'hovercraft' ),
		'description' => __( 'Which post category should be displayed as the default feed and/or Posts page?', 'hovercraft' ),
		'section'     => 'hovercraft_category_layouts',
		'settings'    => 'hovercraft_blog_category',
		'type'        => 'select',
		'choices'     => $choices_list,
	)
) );
}

add_action( 'customize_register', 'hovercraft_register_blog_category' );

// filter Posts page by selected category
function hovercraft_filter_posts_page_category( $query ) {
	if ( is_admin() || ! $query->is_main_query() || $query->is_feed() || ! $query->is_home() ) {
		return;
	}

	$blog_category = get_theme_mod( 'hovercraft_blog_category', 'none' );

	if ( 'none' === $blog_category ) {
		return;
	}

	$query->set( 'category_name', $blog_category );
}
add_action( 'pre_get_posts', 'hovercraft_filter_posts_page_category' );
