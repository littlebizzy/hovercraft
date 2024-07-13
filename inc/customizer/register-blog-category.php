<?php

function hovercraft_blog_category_register( $wp_customize ) {
 
    //Get an array with the category list
	$rjs_categories_full_list = get_categories(array( 'orderby' => 'name', ));
 
    //Create an empty array
	$rjs_choices_list = [ 'none' => 'None (Disabled)', ];
 
    //Loop through the array and add the correct values every time
	foreach( $rjs_categories_full_list as $rjs_single_cat ) {
    	$rjs_choices_list[$rjs_single_cat->slug] = __( $rjs_single_cat->name );
	}
	
	// blog category setting
	$wp_customize->add_setting( 'hovercraft_blog_category', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
	);
	
	// blog category control
		$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_blog_category',
        array(
            'label'     => __( 'Feed Category', 'hovercraft' ),
			'description' => __( 'Which post category should be displayed on the default posts page?', 'hovercraft' ),
            'section'   => 'hovercraft_category_layouts',
            'settings'  => 'hovercraft_blog_category',
            'type'      => 'select',
			'choices' =>  $rjs_choices_list,
        )
) );
 
}
 
add_action( 'customize_register', 'hovercraft_blog_category_register' );

// https://ralphjsmit.com/create-a-category-dropdown-in-wordpress-customizer
// $category = get_theme_mod( 'rjs_category_dropdown', 'Uncategorized');
// https://stackoverflow.com/questions/43715567/how-to-add-extra-values-to-a-existing-array
