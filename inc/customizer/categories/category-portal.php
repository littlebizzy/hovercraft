<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register portal category setting
function hovercraft_register_portal_category( $wp_customize ) {

	// get an array of categories
	$categories_list = get_categories( array( 'orderby' => 'name' ) );

	// initialize choices list with default value
	$choices_list = array( 'none' => 'None (Disabled)' );

	// populate choices list with categories
	foreach ( $categories_list as $category ) {
		$choices_list[ $category->slug ] = $category->name;
	}

	// portal category setting
	$wp_customize->add_setting( 'hovercraft_portal_category', array(
		'default'           => 'none',
		'sanitize_callback' => 'hovercraft_sanitize_select',
	) );

	// portal category control
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_portal_category',
	array(
		'label'       => __( 'Portal Category', 'hovercraft' ),
		'description' => __( 'Which post category should use the portal layout? Note: This works well with Support articles, but might not be needed in some cases.', 'hovercraft' ),
		'section'     => 'hovercraft_category_layouts',
		'settings'    => 'hovercraft_portal_category',
		'type'        => 'select',
		'choices'     => $choices_list,
	)
) );
}

add_action( 'customize_register', 'hovercraft_register_portal_category' );
