<?php

function hovercraft_customizer($wp_customize) {

// remove header text color control
$wp_customize->remove_control( 'header_textcolor' );
	
	
// header media section
$wp_customize->get_section('header_image')->title = __( 'Header Media' );


// general options section
$wp_customize->add_section( 'hovercraft_general', array(
    'title'      => 'General Options',
    'priority'   => 30,
) );


// back to top setting
$wp_customize->add_setting('hovercraft_back_to_top', array(
    'default' => 0,
));


// back to top control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_back_to_top',
        array(
            'label'     => __('Enable back to top button', 'hovercraft'),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_back_to_top',
            'type'      => 'checkbox',
        )
    )
);


// search setting
$wp_customize->add_setting('hovercraft_search', array(
    'default' => 0,
));

// search control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_search',
        array(
            'label'     => __('Enable site-wide search', 'hovercraft'),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_search',
            'type'      => 'checkbox',
        )
    )
);


// breadcrumbs setting
$wp_customize->add_setting('hovercraft_breadcrumbs', array(
    'default' => 0,
));

// breadcrumbs control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_breadcrumbs',
        array(
            'label'     => __('Enable breadcrumbs', 'hovercraft'),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_breadcrumbs',
            'type'      => 'checkbox',
        )
    )
);

	
// copyright background color setting
$wp_customize->add_setting( 'hovercraft_copyright_background_color', array(
        'default' => '#ECEFF1',
		));
 
// copyright background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_background_color', array(
	'label' => 'Copyright Background Color',
	'section' => 'colors',
	'settings' => 'hovercraft_copyright_background_color'
    )));


// sidebar section
$wp_customize->add_section( 'hovercraft_sidebar', array(
    'title'      => 'Sidebar',
    'priority'   => 120,
) );

// sidebar status setting
$wp_customize->add_setting( 'hovercraft_sidebar_status', array(
    'default' => 1,
) );

// sidebar padding setting
$wp_customize->add_setting( 'hovercraft_sidebar_padding', array(
    'default' => 0,
) );
	
// sidebar status control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_sidebar_status',
        array(
            'label'     => __('Enable sidebar', 'hovercraft'),
            'section'   => 'hovercraft_sidebar',
            'settings'  => 'hovercraft_sidebar_status',
            'type'      => 'checkbox',
        )
    )
);

// sidebar padding control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_sidebar_padding',
        array(
            'label'     => __('Enable sidebar padding', 'hovercraft'),
            'section'   => 'hovercraft_sidebar',
            'settings'  => 'hovercraft_sidebar_padding',
            'type'      => 'checkbox',
        )
    )
);

// footer section
$wp_customize->add_section( 'hovercraft_footer', array(
	'title'      => 'Footer',
    'priority'    => 130,
    'description' => 'Allows you to customize how many footer columns',
 	) 
);

// footer columns setting
$wp_customize->add_setting( 'hovercraft_footer_columns', array(
    'default'    => 'four_weighted',
    'type'       => 'theme_mod',
 	) 
);

// footer columns control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
 		'hovercraft_footer_columns', array(
    		'label' => 'Footer Columns',
    		'description' => 'Using this option you can change footer columns',
    		'settings' => 'hovercraft_footer_columns',
    		'priority' => 10,
    		'section' => 'hovercraft_footer',
    		'type' => 'radio',
    		'choices' => array(
        		'four_weighted' => 'Four Weighted',
        		'four_equal' => 'Four Equal',
        		'three_weighted' => 'Three Weighted',
        		'three_equal' => 'Three Equal',
    			)
			)
) );
	
// hover effects section
$wp_customize->add_section( 'hovercraft_effects', array(
    'title'      => 'Hover Effects',
    'priority'   => 140,
) );

// end function hovercraft_customizer
}

add_action('customize_register', 'hovercraft_customizer');
