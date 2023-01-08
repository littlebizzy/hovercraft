<?php

function hovercraft_customizer($wp_customize) {

// remove header text color control
$wp_customize->remove_control( 'header_textcolor' );

// header media section
$wp_customize->get_section('header_image')->title = __( 'Header Media', 'hovercraft' );


// general options section
$wp_customize->add_section( 'hovercraft_general', array(
    'title'      => 'General Options',
    'priority'   => 30,
) );


// back to top setting
$wp_customize->add_setting('hovercraft_back_to_top', array(
    'default' => 0,
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
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
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
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
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
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

// default text color setting
$wp_customize->add_setting( 'hovercraft_default_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// default text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_default_text_color', array(
	'label' => 'Default Text Color',
	'description' => 'Default text color site-wide',
	'section' => 'colors',
	'settings' => 'hovercraft_default_text_color'
	)
) );
	
// default link color setting
$wp_customize->add_setting( 'hovercraft_default_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// default link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_default_link_color', array(
	'label' => 'Default Link Color',
	'description' => 'Default link color site-wide',
	'section' => 'colors',
	'settings' => 'hovercraft_default_link_color'
	)
) );
	
// default hover color setting
$wp_customize->add_setting( 'hovercraft_default_hover_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// default hover color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_default_hover_color', array(
	'label' => 'Default Hover Color',
	'description' => 'Default hover color site-wide',
	'section' => 'colors',
	'settings' => 'hovercraft_default_hover_color'
	)
) );
 
// topbar background color setting
$wp_customize->add_setting( 'hovercraft_topbar_background_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// topbar background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_topbar_background_color', array(
	'label' => 'Topbar Background Color',
	'description' => 'Applies to the site-wide topbar element.',
	'section' => 'colors',
	'settings' => 'hovercraft_topbar_background_color'
	)
) );
	
// topbar text color setting
$wp_customize->add_setting( 'hovercraft_topbar_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// topbar text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_topbar_text_color', array(
	'label' => 'Topbar Text Color',
	'description' => 'Applies to any plain text inside the topbar.',
	'section' => 'colors',
	'settings' => 'hovercraft_topbar_text_color'
	)
) );
	
// topbar link color setting
$wp_customize->add_setting( 'hovercraft_topbar_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
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
	'default' => '#37474f',
	'sanitize_callback' => 'sanitize_hex_color',
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
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
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
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header half hero background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_half_hero_background_color', array(
	'label' => 'Header (Half Hero) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_half_hero_background_color'
	)
) );
	
// header mini hero background color setting
$wp_customize->add_setting( 'hovercraft_header_mini_hero_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header mini hero background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_mini_hero_background_color', array(
	'label' => 'Header (Mini Hero) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_mini_hero_background_color'
	)
) );
	
// header basic background color setting
$wp_customize->add_setting( 'hovercraft_header_basic_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header basic background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_basic_background_color', array(
	'label' => 'Header (Basic) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_basic_background_color'
	)
) );
	
// main (begin) background color setting
$wp_customize->add_setting( 'hovercraft_main_begin_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// main (begin) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_main_begin_background_color', array(
	'label' => 'Main (Begin) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_main_begin_background_color'
	)
) );
	
// main (begin) text color setting
$wp_customize->add_setting( 'hovercraft_main_begin_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// main (begin) text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_main_begin_text_color', array(
	'label' => 'Main (Begin) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_main_begin_text_color'
	)
) );

// main (begin) link color setting
$wp_customize->add_setting( 'hovercraft_main_begin_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// main (begin) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_main_begin_link_color', array(
	'label' => 'Main (Begin) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_main_begin_link_color'
	)
) );

// prefooter (top) background color setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// prefooter (top) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_top_background_color', array(
	'label' => 'Prefooter (Top) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_top_background_color'
	)
) );
	
// prefooter (top) text color setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (top) text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_top_text_color', array(
	'label' => 'Prefooter (Top) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_top_text_color'
	)
) );
	
// prefooter (top) link color setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (top) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_top_link_color', array(
	'label' => 'Prefooter (Top) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_top_link_color'
	)
) );

// prefooter (bottom) background color setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_background_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// prefooter (bottom) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_bottom_background_color', array(
	'label' => 'Prefooter (Bottom) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_bottom_background_color'
	)
) );
	
// prefooter (bottom) text color setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (bottom) text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_bottom_text_color', array(
	'label' => 'Prefooter (Bottom) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_bottom_text_color'
	)
) );
	
// prefooter (bottom) link color setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (bottom) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_bottom_link_color', array(
	'label' => 'Prefooter (Bottom) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_bottom_link_color'
	)
) );

// footer background color setting
$wp_customize->add_setting( 'hovercraft_footer_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// footer background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_background_color', array(
	'label' => 'Footer Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_background_color'
	)
) );
	
// footer text color setting
$wp_customize->add_setting( 'hovercraft_footer_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// footer text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_text_color', array(
	'label' => 'Footer Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_text_color'
	)
) );
	
// footer link color setting
$wp_customize->add_setting( 'hovercraft_footer_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// footer link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_link_color', array(
	'label' => 'Footer Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_link_color'
	)
) );

// copyright background color setting
$wp_customize->add_setting( 'hovercraft_copyright_background_color', array(
        'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
		));
 
// copyright background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_background_color', array(
	'label' => 'Copyright Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_copyright_background_color'
    )));

// copyright text color setting
$wp_customize->add_setting( 'hovercraft_copyright_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// copyright text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_text_color', array(
	'label' => 'Copyright Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_copyright_text_color'
	)
) );
	
// copyright link color setting
$wp_customize->add_setting( 'hovercraft_copyright_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// copyright link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_link_color', array(
	'label' => 'Copyright Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_copyright_link_color'
	)
) );

// sidebar section
$wp_customize->add_section( 'hovercraft_sidebar', array(
    'title'      => 'Sidebar',
    'priority'   => 120,
) );

// sidebar status setting
$wp_customize->add_setting( 'hovercraft_sidebar_status', array(
    'default' => 1,
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
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
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
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
	'sanitize_callback' => 'hovercraft_sanitize_radio',
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
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// hover effects logo control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_logo_effect',
        array(
            'label'     => __('Logo effect', 'hovercraft'),
			'description' => __( 'CSS hover effect for logos in the header', 'hovercraft' ),
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
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// hover effects main menu links control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_main_menu_links_effect',
        array(
            'label'     => __('Main menu links effect', 'hovercraft'),
			'description' => __( 'CSS hover effect for main menu links in the header', 'hovercraft' ),
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
	
// link styling section
$wp_customize->add_section( 'hovercraft_link_styling', array(
    'title'      => 'Link Styling',
    'priority'   => 103,
) );
	
// default link decoration setting
$wp_customize->add_setting( 'hovercraft_default_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// default link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_default_link_decoration',
        array(
            'label'     => __('Default link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_default_link_decoration',
            'type'      => 'select',
			'choices' => array(
				'underline' => 'Underline',
				'none' => 'None (no decoration)',
    			)
        )
) );
	
// topbar link decoration setting
$wp_customize->add_setting( 'hovercraft_topbar_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// topbar link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_topbar_link_decoration',
        array(
            'label'     => __('Topbar link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_topbar_link_decoration',
            'type'      => 'select',
			'choices' => array(
				'underline' => 'Underline',
				'none' => 'None (no decoration)',
    			)
        )
) );

// main (begin) link decoration setting
$wp_customize->add_setting( 'hovercraft_main_begin_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// main (begin) link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_main_begin_link_decoration',
        array(
            'label'     => __('Main (begin) link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_main_begin_link_decoration',
            'type'      => 'select',
			'choices' => array(
				'underline' => 'Underline',
				'none' => 'None (no decoration)',
    			)
        )
) );
	
// prefooter (top) link decoration setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// prefooter (top) link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_prefooter_top_link_decoration',
        array(
            'label'     => __('Prefooter (top) link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_prefooter_top_link_decoration',
            'type'      => 'select',
			'choices' => array(
				'underline' => 'Underline',
				'none' => 'None (no decoration)',
    			)
        )
) );
	
// prefooter (bottom) link decoration setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// prefooter (bottom) link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_prefooter_bottom_link_decoration',
        array(
            'label'     => __('Prefooter (bottom) link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_prefooter_bottom_link_decoration',
            'type'      => 'select',
			'choices' => array(
				'underline' => 'Underline',
				'none' => 'None (no decoration)',
    			)
        )
) );
	
// footer link decoration setting
$wp_customize->add_setting( 'hovercraft_footer_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// footer link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_footer_link_decoration',
        array(
            'label'     => __('Footer link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_footer_link_decoration',
            'type'      => 'select',
			'choices' => array(
				'underline' => 'Underline',
				'none' => 'None (no decoration)',
    			)
        )
) );

// copyright link decoration setting
$wp_customize->add_setting( 'hovercraft_copyright_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// copyright link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_copyright_link_decoration',
        array(
            'label'     => __('Copyright link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_copyright_link_decoration',
            'type'      => 'select',
			'choices' => array(
				'underline' => 'Underline',
				'none' => 'None (no decoration)',
    			)
        )
) );

// hero styling section
$wp_customize->add_section( 'hovercraft_hero_styling', array(
    'title'      => 'Hero Styling',
    'priority'   => 105,
) );

// hero content width (desktop) setting
$wp_customize->add_setting( 'hovercraft_hero_content_width_desktop', array(
    'default'    => '900px',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// hero content width (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_content_width_desktop',
        array(
            'label'     => __('Hero content width', 'hovercraft'),
			'description' => __( 'Width of hero content (desktop)', 'hovercraft' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_content_width_desktop',
            'type'      => 'select',
			'choices' => array(
				'600px' => '600px',
				'900px' => '900px',
				'1200px' => 'Full width (1200px)',
    			)
        )
) );	

// hero gradient angle setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_angle', array(
    'default'    => '60deg',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// hero gradient angle control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_angle',
        array(
            'label'     => __('Gradient angle', 'hovercraft'),
			'description' => __( 'Choose the angle of the hero gradient', 'hovercraft' ),
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
	'sanitize_callback' => 'hovercraft_sanitize_float',
	) 
);

// hero gradient start color transparency control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_start_color_transparency',
        array(
            'label'     => __('Start color transparency', 'hovercraft'),
			'description' => __( 'Transparency of the start color', 'hovercraft' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_gradient_start_color_transparency',
            'type'      => 'select',
			'choices' => array(
        		'0.0' => '0.00',
        		'0.10' => '0.10',
				'0.15' => '0.15',
				'0.20' => '0.20',
        		'0.25' => '0.25',
				'0.30' => '0.30',
				'0.35' => '0.35',
				'0.40' => '0.40',
				'0.45' => '0.45',
        		'0.50' => '0.50',
				'0.55' => '0.55',
				'0.60' => '0.60',
				'0.65' => '0.65',
				'0.70' => '0.70',
        		'0.75' => '0.75',
				'0.80' => '0.80',
				'0.85' => '0.85',
				'0.90' => '0.90',
				'0.95' => '0.95',
        		'1.0' => '1.00',
    			)
        )
) );
	
// hero gradient stop color transparency setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color_transparency', array(
    'default'    => '0.50',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	) 
);

// hero gradient stop color transparency control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_stop_color_transparency',
        array(
            'label'     => __('Stop color transparency', 'hovercraft'),
			'description' => __( 'Transparency of the stop color', 'hovercraft' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_gradient_stop_color_transparency',
            'type'      => 'select',
			'choices' => array(
				'0.0' => '0.00',
        		'0.10' => '0.10',
				'0.15' => '0.15',
				'0.20' => '0.20',
        		'0.25' => '0.25',
				'0.30' => '0.30',
				'0.35' => '0.35',
				'0.40' => '0.40',
				'0.45' => '0.45',
        		'0.50' => '0.50',
				'0.55' => '0.55',
				'0.60' => '0.60',
				'0.65' => '0.65',
				'0.70' => '0.70',
        		'0.75' => '0.75',
				'0.80' => '0.80',
				'0.85' => '0.85',
				'0.90' => '0.90',
				'0.95' => '0.95',
        		'1.0' => '1.00',
    			)
        )
) );
	
// hero gradient start color length setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_start_color_length', array(
    'default'    => '30%',
	'sanitize_callback' => 'absint',
	) 
);

// hero gradient start color length control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_start_color_length',
        array(
            'label'     => __('Start color length', 'hovercraft'),
			'description' => __( 'Length of the start color', 'hovercraft' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_gradient_start_color_length',
            'type'      => 'select',
			'choices' => array(
				'0' => '0%',
				'5' => '5%',
				'10' => '10%',
				'15' => '15%',
				'20' => '20%',
        		'25' => '25%',
				'30' => '30%',
				'35' => '35%',
				'40' => '40%',
				'45' => '45%',
        		'50' => '50%',
				'55' => '55%',
				'60' => '60%',
				'65' => '65%',
				'70' => '70%',
        		'75' => '75%',
				'80' => '80%',
				'85' => '85%',
				'90' => '90%',
				'95' => '95%',
        		'100' => '100%',
    			)
        )
) );
	
// hero gradient stop color length setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color_length', array(
    'default'    => '100%',
	'sanitize_callback' => 'absint',
	) 
);

// hero gradient stop color length control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_hero_gradient_stop_color_length',
        array(
            'label'     => __('Stop color length', 'hovercraft'),
			'description' => __( 'Length of the stop color', 'hovercraft' ),
            'section'   => 'hovercraft_hero_styling',
            'settings'  => 'hovercraft_hero_gradient_stop_color_length',
            'type'      => 'select',
			'choices' => array(
				'0' => '0%',
				'5' => '5%',
				'10' => '10%',
				'15' => '15%',
				'20' => '20%',
        		'25' => '25%',
				'30' => '30%',
				'35' => '35%',
				'40' => '40%',
				'45' => '45%',
        		'50' => '50%',
				'55' => '55%',
				'60' => '60%',
				'65' => '65%',
				'70' => '70%',
        		'75' => '75%',
				'80' => '80%',
				'85' => '85%',
				'90' => '90%',
				'95' => '95%',
        		'100' => '100%',
    			)
        )
) );

// end function hovercraft_customizer
}

add_action('customize_register', 'hovercraft_customizer');

// sanitize select function
function hovercraft_sanitize_select( $input, $setting ){
		//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
		$input = sanitize_key($input);
		//get the list of possible select options 
		$choices = $setting->manager->get_control( $setting->id )->choices;           
		//return input if valid or return default option
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// sanitize radio function
function hovercraft_sanitize_radio( $input, $setting ){
	//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
	$input = sanitize_key($input);
	//get the list of possible radio box options 
	$choices = $setting->manager->get_control( $setting->id )->choices;
	//return input if valid or return default option
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// sanitize checkbox function
function hovercraft_sanitize_checkbox( $input ){
	//returns true if checkbox is checked
	return ( isset( $input ) ? true : false );
}

// sanitize float function
function hovercraft_sanitize_float( $input ){
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

// https://themeshaper.com/2013/04/29/validation-sanitization-in-customizer/
// https://divpusher.com/blog/wordpress-customizer-sanitization-examples/
// https://wordpress.stackexchange.com/questions/225825/customizer-sanitize-callback-for-input-type-number
