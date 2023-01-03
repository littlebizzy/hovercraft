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
	
// topbar background color setting
$wp_customize->add_setting( 'hovercraft_topbar_background_color', array(
	'default' => '#263238',
) );
 
// topbar background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_topbar_background_color', array(
	'label' => 'Topbar Background Color',
	'description' => 'Applies to the site-wide topbar element.',
	'section' => 'colors',
	'settings' => 'hovercraft_topbar_background_color'
	)
) );
	
// topbar font color setting
$wp_customize->add_setting( 'hovercraft_topbar_font_color', array(
	'default' => '#FFF',
) );
 
// topbar font color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_topbar_font_color', array(
	'label' => 'Topbar Font Color',
	'description' => 'Applies to any plain text inside the topbar.',
	'section' => 'colors',
	'settings' => 'hovercraft_topbar_font_color'
	)
) );
	
// topbar link color setting
$wp_customize->add_setting( 'hovercraft_topbar_link_color', array(
	'default' => '#FFF',
) );
 
// topbar link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_topbar_link_color', array(
	'label' => 'Topbar Link Color',
	'description' => 'Applies to any links inside the topbar.',
	'section' => 'colors',
	'settings' => 'hovercraft_topbar_link_color'
	)
) );

// hero gradient color start setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_start_color', array(
	'default' => '#37474F',
) );
 
// hero gradient color start control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_hero_gradient_start_color', array(
	'label' => 'Hero Gradient Start Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_hero_gradient_start_color'
	)
) );
	
// hero gradient color stop setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color', array(
	'default' => '#FFF',
) );
 
// hero gradient color stop control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_hero_gradient_stop_color', array(
	'label' => 'Hero Gradient Stop Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_hero_gradient_stop_color'
	)
) );
	

// header half hero background color setting
$wp_customize->add_setting( 'hovercraft_header_half_hero_background_color', array(
	'default' => '#FFF',
) );
 
// header half hero background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_half_hero_background_color', array(
	'label' => 'Header Half Hero Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_half_hero_background_color'
	)
) );
	
// header mini hero background color setting
$wp_customize->add_setting( 'hovercraft_header_mini_hero_background_color', array(
	'default' => '#FFF',
) );
 
// header mini hero background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_mini_hero_background_color', array(
	'label' => 'Header Mini Hero Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_mini_hero_background_color'
	)
) );
	
// header basic background color setting
$wp_customize->add_setting( 'hovercraft_header_basic_background_color', array(
	'default' => '#ECEFF1',
) );
 
// header basic background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_basic_background_color', array(
	'label' => 'Header Basic Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_basic_background_color'
	)
) );

// prefooter top background color setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_background_color', array(
	'default' => '#263238',
) );
 
// prefooter top background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_top_background_color', array(
	'label' => 'Prefooter Top Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_top_background_color'
	)
) );

// prefooter bottom background color setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_background_color', array(
	'default' => '#263238',
) );
 
// prefooter bottom background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_bottom_background_color', array(
	'label' => 'Prefooter Bottom Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_bottom_background_color'
	)
) );

// footer background color setting
$wp_customize->add_setting( 'hovercraft_footer_background_color', array(
	'default' => '#ECEFF1',
) );
 
// footer background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_background_color', array(
	'label' => 'Footer Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_background_color'
	)
) );

// copyright background color setting
$wp_customize->add_setting( 'hovercraft_copyright_background_color', array(
        'default' => '#ECEFF1',
		));
 
// copyright background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_background_color', array(
	'label' => 'Copyright Background Color',
	'description' => 'This is a description',
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

// sidebar padding setting
$wp_customize->add_setting( 'hovercraft_sidebar_padding', array(
    'default' => 0,
) );

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
    'priority'   => 107,
) );

// hover effects logo setting
$wp_customize->add_setting( 'hovercraft_logo_effect', array(
    'default'    => 'default',
	) 
);

// hover effects logo control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_logo_effect',
        array(
            'label'     => __('Logo effect', 'hovercraft'),
			'description' => __( 'CSS hover effect for logos in the header' ),
            'section'   => 'hovercraft_effects',
            'settings'  => 'hovercraft_logo_effect',
            'type'      => 'select',
			'choices' => array(
        		'default' => 'Default',
        		'cerulean' => 'Cerulean',
        		'cosmo' => 'Cosmo',
        		'cyborg' => 'cyborg',
    			)
        )
) );

// hover effects main menu links setting
$wp_customize->add_setting( 'hovercraft_main_menu_links_effect', array(
    'default'    => 'default',
	) 
);

// hover effects main menu links control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_main_menu_links_effect',
        array(
            'label'     => __('Main menu links effect', 'hovercraft'),
			'description' => __( 'CSS hover effect for main menu links in the header' ),
            'section'   => 'hovercraft_effects',
            'settings'  => 'hovercraft_main_menu_links_effect',
            'type'      => 'select',
			'choices' => array(
        		'default' => 'Default',
        		'cerulean' => 'Cerulean',
        		'cosmo' => 'Cosmo',
        		'cyborg' => 'cyborg',
    			)
        )
) );

// hero styling section
$wp_customize->add_section( 'hovercraft_hero_styling', array(
    'title'      => 'Hero Styling',
    'priority'   => 105,
) );

// hero gradient angle setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_angle', array(
    'default'    => '60deg',
	) 
);

// hero gradient angle control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_angle',
        array(
            'label'     => __('Gradient angle', 'hovercraft'),
			'description' => __( 'Choose the angle of the hero gradient' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_gradient_angle',
            'type'      => 'select',
			'choices' => array(
        		'45deg' => '45 Degrees',
        		'60deg' => '60 Degrees',
        		'90deg' => '90 Degrees',
        		'120deg' => '120 Degrees',
    			)
        )
) );

// hero gradient start color transparency setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_start_color_transparency', array(
    'default'    => '0.50',
	) 
);

// hero gradient start color transparency control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_start_color_transparency',
        array(
            'label'     => __('Start color transparency', 'hovercraft'),
			'description' => __( 'Transparency of the start color' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_gradient_start_color_transparency',
            'type'      => 'select',
			'choices' => array(
        		'0.10' => '10%',
				'0.15' => '15%',
				'0.20' => '20%',
        		'0.25' => '25%',
        		'0.50' => '50%',
        		'0.75' => '75%',
        		'1.0' => '100%',
    			)
        )
) );
	
// hero gradient stop color transparency setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color_transparency', array(
    'default'    => '0.50',
	) 
);

// hero gradient stop color transparency control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_stop_color_transparency',
        array(
            'label'     => __('Stop color transparency', 'hovercraft'),
			'description' => __( 'Transparency of the stop color' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_gradient_stop_color_transparency',
            'type'      => 'select',
			'choices' => array(
				'0.10' => '10%',
				'0.15' => '15%',
				'0.20' => '20%',
        		'0.25' => '25%',
        		'0.50' => '50%',
        		'0.75' => '75%',
        		'1.0' => '100%',
    			)
        )
) );

// end function hovercraft_customizer
}

add_action('customize_register', 'hovercraft_customizer');
