<?php

function hovercraft_bullets_category_register( $wp_customize ) {
 
    //Get an array with the category list
	$rjs_categories_full_list = get_categories(array( 'orderby' => 'name', ));
 
    //Create an empty array
	$rjs_choices_list = [ 'none' => 'None (Disabled)', ];
 
    //Loop through the array and add the correct values every time
	foreach( $rjs_categories_full_list as $rjs_single_cat ) {
    	$rjs_choices_list[$rjs_single_cat->slug] = __( $rjs_single_cat->name );
	}
	
// faq category setting
	$wp_customize->add_setting( 'hovercraft_bullets_category', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);
	
// faq category control
		$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_bullets_category',
        array(
            'label'     => __( 'FAQ Category', 'hovercraft' ),
			'description' => __( 'Which post category should use the snippets layout? Note: This works well with FAQ content, which should be brief. Add sub-categories to these posts for better organization.', 'hovercraft' ),
            'section'   => 'hovercraft_category_layouts',
            'settings'  => 'hovercraft_bullets_category',
            'type'      => 'select',
			'choices' =>  $rjs_choices_list,
        )
) );

// faq html setting
	$wp_customize->add_setting( 'hovercraft_bullets_html_content', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// faq html control
		$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_bullets_html_content',
        array(
            'label'     => __( 'HTML in FAQ', 'hovercraft' ),
			'description' => __( 'Should HTML tags be incuded in the content output on the main FAQ page?', 'hovercraft' ),
            'section'   => 'hovercraft_category_layouts',
            'settings'  => 'hovercraft_bullets_html_content',
            'type'      => 'select',
			'choices' => array(
				'none' => 'No HTML',
				'include_html' => 'Include HTML'
    			)
        )
) );

// faq permalinks setting
	$wp_customize->add_setting( 'hovercraft_faq_permalinks', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// faq permalinks control
		$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_faq_permalinks',
        array(
            'label'     => __( 'FAQ Permalinks', 'hovercraft' ),
			'description' => __( 'Do you want to link to child FAQ pages from the main FAQ page? Note: For SEO reasons, we suggest limiting characters (below) using the FAQ Character Count setting if you enable FAQ Permalinks, to avoid duplicate content.', 'hovercraft' ),
            'section'   => 'hovercraft_category_layouts',
            'settings'  => 'hovercraft_faq_permalinks',
            'type'      => 'select',
			'choices' => array(
				'none' => 'Do not link',
				'link_to_faq' => 'Link to FAQ children'
    			)
        )
) );

// faq character count setting
$wp_customize->add_setting( 'hovercraft_faq_character_count', array(
    'default'    => '300',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	) 
);

// faq character count control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_faq_character_count',
        array(
            'label'     => __( 'FAQ Character Count', 'hovercraft' ),
			'description' => __( 'How many characters of each FAQ post should appear in the main FAQ page?', 'hovercraft' ),
            'section'   => 'hovercraft_category_layouts',
            'settings'  => 'hovercraft_faq_character_count',
            'type' => 'text'
        )
) );
	
}
 
add_action( 'customize_register', 'hovercraft_bullets_category_register' );

// https://ralphjsmit.com/create-a-category-dropdown-in-wordpress-customizer
// $category = get_theme_mod( 'rjs_category_dropdown', 'Uncategorized');
// https://stackoverflow.com/questions/43715567/how-to-add-extra-values-to-a-existing-array
