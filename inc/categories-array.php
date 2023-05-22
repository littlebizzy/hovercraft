<?php

function hovercraft_portal_category_register( $wp_customize ) {
 
    //Get an array with the category list
	$rjs_categories_full_list = get_categories(array( 'orderby' => 'name', ));
 
    //Create an empty array
	$rjs_choices_list = [];
 
    //Loop through the array and add the correct values every time
	foreach( $rjs_categories_full_list as $rjs_single_cat ) {
    	$rjs_choices_list[$rjs_single_cat->slug] = esc_html__( $rjs_single_cat->name, 'text-domain' );
	}
	
	// portal category setting
	$wp_customize->add_setting( 'hovercraft_portal_category', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
	);
	
	// portal category control
		$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_portal_category',
        array(
            'label'     => __( 'Portal Category', 'hovercraft' ),
			'description' => __( 'Which post category should use the portal layout? Note: This works well with Support articles, and might not be needed in some cases.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_portal_category',
            'type'      => 'select',
			'choices' => $rjs_choices_list,
        )
) );
 
}
 
add_action( 'customize_register', 'hovercraft_portal_category_register' );

// https://ralphjsmit.com/create-a-category-dropdown-in-wordpress-customizer
// $category = get_theme_mod( 'rjs_category_dropdown', 'Uncategorized');
