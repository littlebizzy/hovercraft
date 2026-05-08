<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

    // fonts section
    $wp_customize->add_section( 'hovercraft_fonts', array(
        'title'    => 'Fonts',
        'priority' => 43,
    ) );

    // first font family setting
    $wp_customize->add_setting( 'hovercraft_first_font_family', array(
        'default'           => 'noto_sans',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // first font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_first_font_family',
        array(
            'label'       => __( 'First Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_first_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_array,
        )
    ) );

    // second font family setting
    $wp_customize->add_setting( 'hovercraft_second_font_family', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // second font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_second_font_family',
        array(
            'label'       => __( 'Second Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_second_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_array,
        )
    ) );

    // third font family setting
    $wp_customize->add_setting( 'hovercraft_third_font_family', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // third font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_third_font_family',
        array(
            'label'       => __( 'Third Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_third_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_array,
        )
    ) );

    // multilingual font family setting
    $wp_customize->add_setting( 'hovercraft_multilingual_font_family', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // multilingual font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_multilingual_font_family',
        array(
            'label'       => __( 'Multilingual Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded. Be sure the font you choose here matches your other font families above to avoid conflicts.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_multilingual_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_multilingual_array,
        )
    ) );

    // default font family setting
    $wp_customize->add_setting( 'hovercraft_default_font', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // default font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_default_font',
        array(
            'label'       => __( 'Default Font Family', 'hovercraft' ),
            'description' => __( 'Which Google Fonts family should be used for the default site-wide font?', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_default_font',
            'type'        => 'select',
            'choices'     => $hovercraft_available_fonts,
        )
    ) );

// default font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_default_desktop_font_size', array(
    'default'    => '16',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// default font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_default_desktop_font_size',
        array(
            'label'     => __( 'Default Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the default on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_default_desktop_font_size',
            'type' => 'text'
        )
) );

// default font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_default_mobile_font_size', array(
    'default'    => '16',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// default font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_default_mobile_font_size',
        array(
            'label'     => __( 'Default Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the default on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_default_mobile_font_size',
            'type' => 'text'
        )
) );

// add setting for site name font family
$wp_customize->add_setting( 'hovercraft_site_name_font', array(
    'default'    => '',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// add control for site name font family
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_site_name_font',
    array(
        'label'       => __( 'Site Name Font Family', 'hovercraft' ),
        'description' => __( 'Which Google Fonts family should be used for the site name in the header? Note: Display must be enabled under the Site Identity section.', 'hovercraft' ),
        'section'     => 'hovercraft_fonts',
        'settings'    => 'hovercraft_site_name_font',
        'type'        => 'select',
        'choices'     => $hovercraft_available_fonts,
    )
) );

// site name text transform setting
$wp_customize->add_setting( 'hovercraft_site_name_text_transform', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// site name text transform control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_site_name_text_transform',
        array(
            'label'     => __( 'Site Name Text Transform', 'hovercraft' ),
			'description' => __( 'Specify text transform for Site Name element?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_site_name_text_transform',
            'type' => 'select',
			'choices' => array(
				'none' => 'Default (None)',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
    			)
        )
) );

// site name font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_site_name_desktop_font_size', array(
    'default'    => '36',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// site name font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_site_name_desktop_font_size',
        array(
            'label'     => __( 'Site Name Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the site name on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_site_name_desktop_font_size',
            'type' => 'text'
        )
) );
	
// site name font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_site_name_mobile_font_size', array(
    'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// site name font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_site_name_mobile_font_size',
        array(
            'label'     => __( 'Site Name Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the site name on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_site_name_mobile_font_size',
            'type' => 'text'
        )
) );

// site name font weight setting
$wp_customize->add_setting( 'hovercraft_site_name_font_weight', array(
    'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// site name font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_site_name_font_weight',
        array(
            'label'     => __('Site Name Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the site name? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_site_name_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// offcanvas menu text transform setting
$wp_customize->add_setting( 'hovercraft_offcanvas_menu_text_transform', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// offcanvas menu text transform control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_offcanvas_menu_text_transform',
        array(
            'label'     => __( 'Offcanvas Menu Text Transform', 'hovercraft' ),
			'description' => __( 'Specify text transform for Offcanvas menu list items?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_offcanvas_menu_text_transform',
            'type' => 'select',
			'choices' => array(
				'none' => 'Default (None)',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
    			)
        )
) );

// offcanvas menu font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_offcanvas_font_size', array(
    'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas menu font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_offcanvas_font_size',
        array(
            'label'     => __( 'Offcanvas Menu Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the Offcanvas Menu on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_offcanvas_font_size',
            'type' => 'text'
        )
) );

// offcanvas menu font weight setting
$wp_customize->add_setting( 'hovercraft_offcanvas_font_weight', array(
    'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas menu font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_offcanvas_font_weight',
        array(
            'label'     => __('Offcanvas Menu Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the Offcanvas Menu? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_offcanvas_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// offcanvas submenu text transform setting
$wp_customize->add_setting( 'hovercraft_offcanvas_submenu_text_transform', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// offcanvas submenu text transform control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_offcanvas_submenu_text_transform',
        array(
            'label'     => __( 'Offcanvas Submenu Text Transform', 'hovercraft' ),
			'description' => __( 'Specify text transform for Offcanvas submenu list items?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_offcanvas_submenu_text_transform',
            'type' => 'select',
			'choices' => array(
				'none' => 'Default (None)',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
    			)
        )
) );

// offcanvas submenu font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_offcanvas_submenu_font_size', array(
    'default'    => '16',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas submenu font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_offcanvas_submenu_font_size',
        array(
            'label'     => __( 'Offcanvas Submenu Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the Offcanvas submenus on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_offcanvas_submenu_font_size',
            'type' => 'text'
        )
) );

// offcanvas submenu font weight setting
$wp_customize->add_setting( 'hovercraft_offcanvas_submenu_font_weight', array(
    'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas submenu font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_offcanvas_submenu_font_weight',
        array(
            'label'     => __('Offcanvas Submenu Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the Offcanvas Submenu? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_offcanvas_submenu_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// topbar text transform setting
$wp_customize->add_setting( 'hovercraft_topbar_text_transform', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// topbar text transform control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_topbar_text_transform',
        array(
            'label'     => __( 'Topbar Text Transform', 'hovercraft' ),
			'description' => __( 'Specify text transform for Topbar area?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_topbar_text_transform',
            'type' => 'select',
			'choices' => array(
				'none' => 'Default (None)',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
    			)
        )
) );
	
// topbar font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_topbar_desktop_font_size', array(
    'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// topbar font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_topbar_desktop_font_size',
        array(
            'label'     => __( 'Topbar Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the Topbar on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_topbar_desktop_font_size',
            'type' => 'text'
        )
) );

// topbar font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_topbar_mobile_font_size', array(
    'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// topbar font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_topbar_mobile_font_size',
        array(
            'label'     => __( 'Topbar Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the Topbar on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_topbar_mobile_font_size',
            'type' => 'text'
        )
) );

// topbar font weight setting
$wp_customize->add_setting( 'hovercraft_topbar_font_weight', array(
    'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// topbar font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_topbar_font_weight',
        array(
            'label'     => __('Topbar Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the Topbar area? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_topbar_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// main menu font family setting
$wp_customize->add_setting( 'hovercraft_main_menu_font', array(
    'default'    => '',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// main menu font family control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_main_menu_font',
    array(
        'label'       => __( 'Main Menu Font Family', 'hovercraft' ),
        'description' => __( 'Which Google Fonts family should be used for the main menu links?', 'hovercraft' ),
        'section'     => 'hovercraft_fonts',
        'settings'    => 'hovercraft_main_menu_font',
        'type'        => 'select',
        'choices'     => $hovercraft_available_fonts,
    )
) );

// main menu text transform setting
$wp_customize->add_setting( 'hovercraft_main_menu_text_transform', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// main menu text transform control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_main_menu_text_transform',
        array(
            'label'     => __( 'Main Menu Text Transform', 'hovercraft' ),
			'description' => __( 'Specify text transform for Main Menu list items?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_main_menu_text_transform',
            'type' => 'select',
			'choices' => array(
				'none' => 'Default (None)',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
    			)
        )
) );

// main menu font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_main_menu_desktop_font_size', array(
    'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// main menu font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_main_menu_desktop_font_size',
        array(
            'label'     => __( 'Main Menu Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the main menu links on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_main_menu_desktop_font_size',
            'type' => 'text'
        )
) );

// main menu font weight setting
$wp_customize->add_setting( 'hovercraft_main_menu_font_weight', array(
    'default'    => '600',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// main menu font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_main_menu_font_weight',
        array(
            'label'     => __('Main Menu Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the main menu? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_main_menu_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// after byline (desktop) setting
$wp_customize->add_setting( 'hovercraft_after_byline_desktop_font_size', array(
    'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// after byline (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_after_byline_desktop_font_size',
        array(
            'label'     => __( 'After Byline Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the After Byline widget on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_after_byline_desktop_font_size',
            'type' => 'text'
        )
) );

// after byline (mobile) setting
$wp_customize->add_setting( 'hovercraft_after_byline_mobile_font_size', array(
    'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// after byline (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_after_byline_mobile_font_size',
        array(
            'label'     => __( 'After Byline Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the After Byline widget on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_after_byline_mobile_font_size',
            'type' => 'text'
        )
) );

// back to top text transform setting
$wp_customize->add_setting( 'hovercraft_back_to_top_text_transform', array(
    'default'    => 'uppercase',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// back to top text transform control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_back_to_top_text_transform',
        array(
            'label'     => __( 'Back To Top Text Transform', 'hovercraft' ),
			'description' => __( 'Specify text transform for the Back To Top element?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_back_to_top_text_transform',
            'type' => 'select',
			'choices' => array(
				'none' => 'Default (None)',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
    			)
        )
) );

// back to top font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_back_to_top_desktop_font_size', array(
    'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// back to top font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_back_to_top_desktop_font_size',
        array(
            'label'     => __( 'Back To Top Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the back to top element on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_back_to_top_desktop_font_size',
            'type' => 'text'
        )
) );

// back to top font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_back_to_top_mobile_font_size', array(
    'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// back to top font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_back_to_top_mobile_font_size',
        array(
            'label'     => __( 'Back To Top Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the back to top element on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_back_to_top_mobile_font_size',
            'type' => 'text'
        )
) );

// back to top font weight setting
$wp_customize->add_setting( 'hovercraft_back_to_top_font_weight', array(
    'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// back to top font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_back_to_top_font_weight',
        array(
            'label'     => __('Back To Top Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the Back To Top element?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_back_to_top_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );
	
// h1 font family setting
$wp_customize->add_setting( 'hovercraft_h1_font', array(
    'default'    => '',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h1 font family control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_h1_font',
    array(
        'label'       => __( 'H1 Font Family', 'hovercraft' ),
        'description' => __( 'Which Google Fonts family should be used for all H1 titles site-wide?', 'hovercraft' ),
        'section'     => 'hovercraft_fonts',
        'settings'    => 'hovercraft_h1_font',
        'type'        => 'select',
        'choices'     => $hovercraft_available_fonts,
    )
) );

// h1 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h1_desktop_font_size', array(
    'default'    => '48',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h1 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h1_desktop_font_size',
        array(
            'label'     => __( 'H1 Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the H1 titles on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h1_desktop_font_size',
            'type' => 'text'
        )
) );

// h1 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h1_mobile_font_size', array(
    'default'    => '36',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h1 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h1_mobile_font_size',
        array(
            'label'     => __( 'H1 Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the H1 titles on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h1_mobile_font_size',
            'type' => 'text'
        )
) );

// h1 font weight setting
$wp_customize->add_setting( 'hovercraft_h1_font_weight', array(
    'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h1 font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h1_font_weight',
        array(
            'label'     => __('H1 Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the H1 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h1_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// h1 divider display setting
$wp_customize->add_setting( 'hovercraft_h1_divider_display', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// h1 divider display control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h1_divider_display',
        array(
            'label'     => __( 'H1 Divider Display', 'hovercraft' ),
			'description' => __( 'Choose if you want to display a divider (line) below the H1 elements?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h1_divider_display',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Hidden)',
				'everywhere_possible' => 'Everywhere Possible',
				'everywhere_except_heros' => 'Everywhere Except Heros'
    			)
        )
) );

// h2 font family setting
$wp_customize->add_setting( 'hovercraft_h2_font', array(
    'default'    => '',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h2 font family control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_h2_font',
    array(
        'label'       => __( 'H2 Font Family', 'hovercraft' ),
        'description' => __( 'Which Google Fonts family should be used for all h2 titles site-wide?', 'hovercraft' ),
        'section'     => 'hovercraft_fonts',
        'settings'    => 'hovercraft_h2_font',
        'type'        => 'select',
        'choices'     => $hovercraft_available_fonts,
    )
) );

// h2 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h2_desktop_font_size', array(
    'default'    => '36',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h2 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h2_desktop_font_size',
        array(
            'label'     => __( 'H2 Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h2 titles on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h2_desktop_font_size',
            'type' => 'text'
        )
) );

// h2 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h2_mobile_font_size', array(
    'default'    => '30',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h2 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h2_mobile_font_size',
        array(
            'label'     => __( 'H2 Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h2 titles on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h2_mobile_font_size',
            'type' => 'text'
        )
) );

// h2 font weight setting
$wp_customize->add_setting( 'hovercraft_h2_font_weight', array(
    'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h2 font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h2_font_weight',
        array(
            'label'     => __('H2 Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the h2 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h2_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// h2 divider display setting
$wp_customize->add_setting( 'hovercraft_h2_divider_display', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// h2 divider display control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h2_divider_display',
        array(
            'label'     => __( 'H2 Divider Display', 'hovercraft' ),
			'description' => __( 'Choose if you want to display a divider (line) below the H2 elements?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h2_divider_display',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Hidden)',
				'everywhere_possible' => 'Everywhere Possible'
    			)
        )
) );

// h3 font family setting
$wp_customize->add_setting( 'hovercraft_h3_font', array(
    'default'    => '',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h3 font family control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_h3_font',
    array(
        'label'       => __( 'H3 Font Family', 'hovercraft' ),
        'description' => __( 'Which Google Fonts family should be used for all h3 titles site-wide?', 'hovercraft' ),
        'section'     => 'hovercraft_fonts',
        'settings'    => 'hovercraft_h3_font',
        'type'        => 'select',
        'choices'     => $hovercraft_available_fonts,
    )
) );

// h3 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h3_desktop_font_size', array(
    'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h3 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h3_desktop_font_size',
        array(
            'label'     => __( 'H3 Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h3 titles on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h3_desktop_font_size',
            'type' => 'text'
        )
) );

// h3 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h3_mobile_font_size', array(
    'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h3 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h3_mobile_font_size',
        array(
            'label'     => __( 'H3 Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h3 titles on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h3_mobile_font_size',
            'type' => 'text'
        )
) );

// h3 font weight setting
$wp_customize->add_setting( 'hovercraft_h3_font_weight', array(
    'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h3 font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h3_font_weight',
        array(
            'label'     => __('H3 Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the h3 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h3_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// h4 font family setting
$wp_customize->add_setting( 'hovercraft_h4_font', array(
    'default'    => '',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h4 font family control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_h4_font',
    array(
        'label'       => __( 'H4 Font Family', 'hovercraft' ),
        'description' => __( 'Which Google Fonts family should be used for all h4 titles site-wide?', 'hovercraft' ),
        'section'     => 'hovercraft_fonts',
        'settings'    => 'hovercraft_h4_font',
        'type'        => 'select',
        'choices'     => $hovercraft_available_fonts,
    )
) );

// h4 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h4_desktop_font_size', array(
    'default'    => '20',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h4 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h4_desktop_font_size',
        array(
            'label'     => __( 'H4 Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h4 titles on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h4_desktop_font_size',
            'type' => 'text'
        )
) );

// h4 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h4_mobile_font_size', array(
    'default'    => '20',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h4 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h4_mobile_font_size',
        array(
            'label'     => __( 'H4 Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h4 titles on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h4_mobile_font_size',
            'type' => 'text'
        )
) );

// h4 font weight setting
$wp_customize->add_setting( 'hovercraft_h4_font_weight', array(
    'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h4 font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h4_font_weight',
        array(
            'label'     => __('H4 Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the h4 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h4_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// h5 font family setting
$wp_customize->add_setting( 'hovercraft_h5_font', array(
    'default'    => '',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h5 font family control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_h5_font',
    array(
        'label'       => __( 'H5 Font Family', 'hovercraft' ),
        'description' => __( 'Which Google Fonts family should be used for all h5 titles site-wide?', 'hovercraft' ),
        'section'     => 'hovercraft_fonts',
        'settings'    => 'hovercraft_h5_font',
        'type'        => 'select',
        'choices'     => $hovercraft_available_fonts,
    )
) );

// h5 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h5_desktop_font_size', array(
    'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h5 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h5_desktop_font_size',
        array(
            'label'     => __( 'H5 Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h5 titles on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h5_desktop_font_size',
            'type' => 'text'
        )
) );

// h5 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h5_mobile_font_size', array(
    'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h5 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h5_mobile_font_size',
        array(
            'label'     => __( 'H5 Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the h5 titles on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h5_mobile_font_size',
            'type' => 'text'
        )
) );

// h5 font weight setting
$wp_customize->add_setting( 'hovercraft_h5_font_weight', array(
    'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h5 font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_h5_font_weight',
        array(
            'label'     => __('H5 Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the h5 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_h5_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// sidebar widget title text transform setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_text_transform', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// sidebar widget title text transform control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_sidebar_widget_title_text_transform',
        array(
            'label'     => __( 'Sidebar Widget Title Text Transform', 'hovercraft' ),
			'description' => __( 'Specify text transform for sidebar widget titles?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_sidebar_widget_title_text_transform',
            'type' => 'select',
			'choices' => array(
				'none' => 'Default (None)',
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
				'capitalize' => 'Capitalize',
    			)
        )
) );

// sidebar widget title font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_desktop_font_size', array(
    'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// sidebar widget title font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_sidebar_widget_title_desktop_font_size',
        array(
            'label'     => __( 'Sidebar Widget Title Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the sidebar widget titles on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_sidebar_widget_title_desktop_font_size',
            'type' => 'text'
        )
) );

// sidebar widget title font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_mobile_font_size', array(
    'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// sidebar widget title font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_sidebar_widget_title_mobile_font_size',
        array(
            'label'     => __( 'Sidebar Widget Title Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the sidebar widget titles on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_sidebar_widget_title_mobile_font_size',
            'type' => 'text'
        )
) );

// sidebar widget title font weight setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_font_weight', array(
    'default'    => '600',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// sidebar widget title font weight control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_sidebar_widget_title_font_weight',
        array(
            'label'     => __('Sidebar Widget Title Font Weight', 'hovercraft'),
			'description' => __( 'Specify font weight to use for the Sidebar widget titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_sidebar_widget_title_font_weight',
            'type'      => 'select',
			'choices' => array(
        		'700' => '700',
        		'600' => '600',
				'400' => '400'
    			)
        )
) );

// social sharing font size setting
$wp_customize->add_setting( 'hovercraft_social_sharing_font_size', array(
    'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// social sharing font size control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_social_sharing_font_size',
        array(
            'label'     => __( 'Social Sharing Font Size', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the social sharing icons?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_social_sharing_font_size',
            'type' => 'text'
        )
) );

// footer font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_footer_desktop_font_size', array(
    'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// footer font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_footer_desktop_font_size',
        array(
            'label'     => __( 'Footer Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the footer on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_footer_desktop_font_size',
            'type' => 'text'
        )
) );

// footer font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_footer_mobile_font_size', array(
    'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// footer font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_footer_mobile_font_size',
        array(
            'label'     => __( 'Footer Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the footer on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_footer_mobile_font_size',
            'type' => 'text'
        )
) );

// copyright font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_copyright_desktop_font_size', array(
    'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// copyright font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_copyright_desktop_font_size',
        array(
            'label'     => __( 'Copyright Font Size (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the copyright on desktop devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_copyright_desktop_font_size',
            'type' => 'text'
        )
) );

// copyright font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_copyright_mobile_font_size', array(
    'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// copyright font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_copyright_mobile_font_size',
        array(
            'label'     => __( 'Copyright Font Size (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify font size to use, in pixels, for the copyright on mobile devices?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_copyright_mobile_font_size',
            'type' => 'text'
        )
) );

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

// divider above default link colors setting
$wp_customize->add_setting( 'hovercraft_divider_default_link_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above default link colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_default_link_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_default_link_colors',
)));
	
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

// divider above hero snippet colors setting
$wp_customize->add_setting( 'hovercraft_divider_hero_snippet_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above hero snippet colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_hero_snippet_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_hero_snippet_colors',
)));

// hero snippet text color setting
$wp_customize->add_setting( 'hovercraft_hero_snippet_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// hero snippet text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_hero_snippet_text_color', array(
	'label' => 'Hero Snippet Text Color',
	'description' => 'Hero Snippet Text Color',
	'section' => 'colors',
	'settings' => 'hovercraft_hero_snippet_text_color'
	)
) );

// hero snippet link color setting
$wp_customize->add_setting( 'hovercraft_hero_snippet_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// hero snippet link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_hero_snippet_link_color', array(
	'label' => 'Hero Snippet Link Color',
	'description' => 'Hero Snippet Link Color',
	'section' => 'colors',
	'settings' => 'hovercraft_hero_snippet_link_color'
	)
) );

// divider above breadcrumbs colors setting
$wp_customize->add_setting( 'hovercraft_divider_breadcrumbs_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above breadcrumbs colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_breadcrumbs_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_breadcrumbs_colors',
)));
	
// breadcrumbs text color setting
$wp_customize->add_setting( 'hovercraft_breadcrumbs_text_color', array(
	'default' => '#607D8B',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// breadcrumbs text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_breadcrumbs_text_color', array(
	'label' => 'Breadcrumbs Text Color',
	'description' => 'Breadcrumbs text color',
	'section' => 'colors',
	'settings' => 'hovercraft_breadcrumbs_text_color'
	)
) );

// breadcrumbs link color setting
$wp_customize->add_setting( 'hovercraft_breadcrumbs_link_color', array(
	'default' => '#607D8B',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// breadcrumbs link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_breadcrumbs_link_color', array(
	'label' => 'Breadcrumbs Link Color',
	'description' => 'Breadcrumbs link color',
	'section' => 'colors',
	'settings' => 'hovercraft_breadcrumbs_link_color'
	)
) );

// divider above search bar colors setting
$wp_customize->add_setting( 'hovercraft_divider_search_bar_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above search bar colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_search_bar_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_search_bar_colors',
)));

// search bar background color setting
$wp_customize->add_setting( 'hovercraft_search_bar_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// search bar background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_search_bar_background_color', array(
	'label' => 'Search Bar Background Color',
	'description' => 'Specify background color of the search bar element?',
	'section' => 'colors',
	'settings' => 'hovercraft_search_bar_background_color'
	)
) );

// search bar border color setting
$wp_customize->add_setting( 'hovercraft_search_bar_border_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// search bar border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_search_bar_border_color', array(
	'label' => 'Search Bar Border Color',
	'description' => 'Specify border color of the search bar element?',
	'section' => 'colors',
	'settings' => 'hovercraft_search_bar_border_color'
	)
) );
	
// search input placeholder color setting
$wp_customize->add_setting( 'hovercraft_search_input_placeholder_color', array(
	'default' => '#757575',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// search input placeholder color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_search_input_placeholder_color', array(
	'label' => 'Search Input Placeholder Color',
	'description' => 'Specify color of the placeholder text that appears before search input element is active?',
	'section' => 'colors',
	'settings' => 'hovercraft_search_input_placeholder_color'
	)
) );

// search input text color setting
$wp_customize->add_setting( 'hovercraft_search_input_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// search input text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_search_input_text_color', array(
	'label' => 'Search Input Text Color',
	'description' => 'Search input text color',
	'section' => 'colors',
	'settings' => 'hovercraft_search_input_text_color'
	)
) );

// divider above heading colors setting
$wp_customize->add_setting( 'hovercraft_divider_heading_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above heading colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_heading_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_heading_colors',
)));

// h1 h2 title divider background color setting
$wp_customize->add_setting( 'hovercraft_title_divider_background_color', array(
	'default' => '#757575',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// h1 h2 title divider background color color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_title_divider_background_color', array(
	'label' => 'H1 H2 Divider Background Color',
	'description' => 'Specify the background color of the H1 H2 divider line?',
	'section' => 'colors',
	'settings' => 'hovercraft_title_divider_background_color'
	)
) );

// divider above blockquote colors setting
$wp_customize->add_setting( 'hovercraft_divider_blockquote_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above blockquote colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_blockquote_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_blockquote_colors',
)));

// blockquote text color setting
$wp_customize->add_setting( 'hovercraft_blockquote_text_color', array(
	'default' => '#616161',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// blockquote text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_blockquote_text_color', array(
	'label' => 'Blockquote Text Color',
	'description' => 'Specify the text color on blockquotes?',
	'section' => 'colors',
	'settings' => 'hovercraft_blockquote_text_color'
	)
) );

// blockquote border color setting
$wp_customize->add_setting( 'hovercraft_blockquote_border_color', array(
	'default' => '#757575',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// blockquote border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_blockquote_border_color', array(
	'label' => 'Blockquote Border Color',
	'description' => 'Specify the border-left color on blockquotes?',
	'section' => 'colors',
	'settings' => 'hovercraft_blockquote_border_color'
	)
) );

// divider above woocommerce price colors setting
$wp_customize->add_setting( 'hovercraft_divider_woocommerce_price_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above woocommerce price colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_woocommerce_price_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_woocommerce_price_colors',
)));

// woocommerce price text color setting
$wp_customize->add_setting( 'hovercraft_woocommerce_price_text_color', array(
	'default' => '#9E9D24',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// woocommerce price text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_woocommerce_price_text_color', array(
	'label' => 'WooCommerce Price Text Color',
	'description' => 'Text color of the prices displayed by WooCommerce on products?',
	'section' => 'colors',
	'settings' => 'hovercraft_woocommerce_price_text_color'
	)
) );

// divider above offcanvas menu colors setting
$wp_customize->add_setting( 'hovercraft_divider_offcanvas_menu_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above offcanvas menu colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_offcanvas_menu_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_offcanvas_menu_colors',
)));

// offcanvas menu background color setting
$wp_customize->add_setting( 'hovercraft_offcanvas_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// offcanvas menu background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_offcanvas_background_color', array(
	'label' => 'Offcanvas Menu Background Color',
	'description' => 'Specify background color of the Offcanvas Menu element?',
	'section' => 'colors',
	'settings' => 'hovercraft_offcanvas_background_color'
	)
) );

// offcanvas toggle background color setting
$wp_customize->add_setting( 'hovercraft_offcanvas_toggle_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// offcanvas toggle background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_offcanvas_toggle_background_color', array(
	'label' => 'Offcanvas Toggle Background Color',
	'description' => 'Specify background color of the Offcanvas Menu toggle elements?',
	'section' => 'colors',
	'settings' => 'hovercraft_offcanvas_toggle_background_color'
	)
) );

// divider above topbar colors setting
$wp_customize->add_setting( 'hovercraft_divider_topbar_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above topbar colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_topbar_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_topbar_colors',
)));
 
// topbar background color setting
$wp_customize->add_setting( 'hovercraft_topbar_background_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// topbar background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_topbar_background_color', array(
	'label' => 'Topbar Background Color',
	'description' => 'Specify background color of the Topbar element? Note: Choose a bold tone or black for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
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

// divider above full hero colors setting
$wp_customize->add_setting( 'hovercraft_divider_full_hero_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above full hero colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_full_hero_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_full_hero_colors',
)));

// full hero header background color setting
$wp_customize->add_setting( 'hovercraft_full_hero_header_background_color', array(
	'default' => '#37474f',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// full hero header background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_full_hero_header_background_color', array(
	'label' => 'Full Hero Header Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_full_hero_header_background_color'
	)
) );

// divider above hero gradient colors setting
$wp_customize->add_setting( 'hovercraft_divider_hero_gradient_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above hero gradient colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_hero_gradient_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_hero_gradient_colors',
)));

// hero gradient start color setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_start_color', array(
	'default' => '#37474f',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// hero gradient start color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_hero_gradient_start_color', array(
	'label' => 'Hero Gradient Start Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_hero_gradient_start_color'
	)
) );

// hero gradient mid color setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_mid_color', array(
	'default' => '#37474f',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// hero gradient mid color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_hero_gradient_mid_color', array(
	'label' => 'Hero Gradient Mid Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_hero_gradient_mid_color'
	)
) );
	
// hero gradient stop color setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// hero gradient stop color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_hero_gradient_stop_color', array(
	'label' => 'Hero Gradient Stop Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_hero_gradient_stop_color'
	)
) );

// divider above half hero colors setting
$wp_customize->add_setting( 'hovercraft_divider_half_hero_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above half hero colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_half_hero_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_half_hero_colors',
)));
	
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

// header half hero text color setting
$wp_customize->add_setting( 'hovercraft_header_half_hero_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header half hero text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_half_hero_text_color', array(
	'label' => 'Header (Half Hero) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_half_hero_text_color'
	)
) );

// header half hero link color setting
$wp_customize->add_setting( 'hovercraft_header_half_hero_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header half hero link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_header_half_hero_link_color', array(
	'label' => 'Header (Half Hero) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_header_half_hero_link_color'
	)
) );

// divider above mini hero colors setting
$wp_customize->add_setting( 'hovercraft_divider_mini_hero_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above mini hero colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_mini_hero_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_mini_hero_colors',
)));
	
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
	
// header mini hero text color setting
$wp_customize->add_setting( 'hovercraft_mini_hero_header_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header mini hero text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_mini_hero_header_text_color', array(
	'label' => 'Header (Mini Hero) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_mini_hero_header_text_color'
	)
) );
	
// header mini hero link color setting
$wp_customize->add_setting( 'hovercraft_mini_hero_header_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header mini hero link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_mini_hero_header_link_color', array(
	'label' => 'Header (Mini Hero) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_mini_hero_header_link_color'
	)
) );

// divider above header basic colors setting
$wp_customize->add_setting( 'hovercraft_divider_header_basic_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above header basic colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_header_basic_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_header_basic_colors',
)));
	
// header basic background color setting
$wp_customize->add_setting( 'hovercraft_header_basic_background_color', array(
	'default' => '#ffffff',
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
	
// header basic hero text color setting
$wp_customize->add_setting( 'hovercraft_basic_hero_header_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header basic hero text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_basic_hero_header_text_color', array(
	'label' => 'Header (Basic) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_basic_hero_header_text_color'
	)
) );
	
// header basic hero link color setting
$wp_customize->add_setting( 'hovercraft_basic_hero_header_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// header basic hero link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_basic_hero_header_link_color', array(
	'label' => 'Header (Basic) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_basic_hero_header_link_color'
	)
) );

// divider above posthero colors setting
$wp_customize->add_setting( 'hovercraft_divider_posthero_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above posthero colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_posthero_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_posthero_colors',
)));
	
// posthero background color setting
$wp_customize->add_setting( 'hovercraft_posthero_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// posthero background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_posthero_background_color', array(
	'label' => 'Posthero Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_posthero_background_color'
	)
) );
	
// posthero text color setting
$wp_customize->add_setting( 'hovercraft_posthero_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// posthero text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_posthero_text_color', array(
	'label' => 'Posthero Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_posthero_text_color'
	)
) );

// posthero link color setting
$wp_customize->add_setting( 'hovercraft_posthero_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// posthero link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_posthero_link_color', array(
	'label' => 'Posthero Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_posthero_link_color'
	)
) );

// divider above after byline colors setting
$wp_customize->add_setting( 'hovercraft_divider_after_byline_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above after byline colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_after_byline_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_after_byline_colors',
)));

// after byline background color setting
$wp_customize->add_setting( 'hovercraft_after_byline_background_color', array(
	'default' => '#fff8e1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// after byline background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_after_byline_background_color', array(
	'label' => 'After Byline Background Color',
	'description' => 'Applies to the After Byline widget element.',
	'section' => 'colors',
	'settings' => 'hovercraft_after_byline_background_color'
	)
) );

// after byline text color setting
$wp_customize->add_setting( 'hovercraft_after_byline_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// after byline text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_after_byline_text_color', array(
	'label' => 'After Byline Text Color',
	'description' => 'Specify the text color in the After Byline widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_after_byline_text_color'
	)
) );

// after byline link color setting
$wp_customize->add_setting( 'hovercraft_after_byline_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// after byline link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_after_byline_link_color', array(
	'label' => 'After Byline Link Color',
	'description' => 'Specify the link color in the After Byline widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_after_byline_link_color'
	)
) );

// divider above main background colors setting
$wp_customize->add_setting( 'hovercraft_divider_main_background_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above main background colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_main_background_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_main_background_colors',
)));

// main background color setting
$wp_customize->add_setting( 'hovercraft_main_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// main background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_main_background_color', array(
	'label' => 'Main Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_main_background_color'
	)
) );

// main background color (homepage) setting
$wp_customize->add_setting( 'hovercraft_main_background_color_homepage', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// main background color (homepage) control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_main_background_color_homepage', array(
	'label' => 'Main Background Color (Homepage)',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_main_background_color_homepage'
	)
) );

// divider above content background colors setting
$wp_customize->add_setting( 'hovercraft_divider_content_background_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above content background colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_content_background_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_content_background_colors',
)));

// content background color setting
$wp_customize->add_setting( 'hovercraft_content_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// content background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_content_background_color', array(
	'label' => 'Content Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_content_background_color'
	)
) );

// divider above sidebar callout colors setting
$wp_customize->add_setting( 'hovercraft_divider_sidebar_callout_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above sidebar callout colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_sidebar_callout_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_sidebar_callout_colors',
)));
	
// sidebar callout background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_background_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_background_color', array(
	'label' => 'Sidebar Callout Background Color',
	'description' => 'Specify background color of the Sidebar Callout widget? Note: Choose a bold tone for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_background_color'
	)
) );

// sidebar callout border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_border_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_border_color', array(
	'label' => 'Sidebar Callout Border Color',
	'description' => 'Specify border color of sidebar callout widget',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_border_color'
	)
) );
	
// sidebar callout text color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_text_color', array(
	'label' => 'Sidebar Callout Text Color',
	'description' => 'Specify text color of the Sidebar Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_text_color'
	)
) );

// sidebar callout CTA background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_cta_background_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout CTA background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_cta_background_color', array(
	'label' => 'Sidebar Callout CTA Background Color',
	'description' => 'Specify background color of the Sidebar Callout CTA?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_cta_background_color'
	)
) );

// sidebar callout CTA border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_cta_border_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout CTA border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_cta_border_color', array(
	'label' => 'Sidebar Callout CTA Border Color',
	'description' => 'Specify border color of the Sidebar Callout CTA?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_cta_border_color'
	)
) );
	
// sidebar callout CTA link color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout CTA link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_link_color', array(
	'label' => 'Sidebar Callout CTA Link Color',
	'description' => 'Specify link color of the Sidebar Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_link_color'
	)
) );

// sidebar callout (hover) background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_hover_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout (hover) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_hover_background_color', array(
	'label' => 'Sidebar Callout CTA Background Hover Color',
	'description' => 'Specify the hover background color for the CTA button in SideBar Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_hover_background_color'
	)
) );

// sidebar callout (hover) link color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_hover_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout (hover) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_callout_hover_link_color', array(
	'label' => 'Sidebar Callout CTA Link Hover Color',
	'description' => 'Specify the hover link color for the CTA button in SideBar Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_callout_hover_link_color'
	)
) );

// divider above sidebar widgets colors setting
$wp_customize->add_setting( 'hovercraft_divider_sidebar_widgets_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above sidebar widgets colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_sidebar_widgets_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_sidebar_widgets_colors',
)));

// sidebar left border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_left_border_color', array(
	'default' => '#e0e0e0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar left border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_left_border_color', array(
	'label' => 'Sidebar Left Border Color',
	'description' => 'Specify the color of the left border of the sidebar.',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_left_border_color'
) ) );


// sidebar widgets background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_widget_background_color', array(
	'label' => 'Sidebar Widgets Background Color',
	'description' => 'Specify background color of default sidebar widgets?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_widget_background_color'
	)
) );

// sidebar widgets border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_border_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_widget_border_color', array(
	'label' => 'Sidebar Widgets Border Color',
	'description' => 'Specify border color of default sidebar widgets?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_widget_border_color'
	)
) );
	
// sidebar widgets text color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_widget_text_color', array(
	'label' => 'Sidebar Widgets Text Color',
	'description' => 'Specify text color of default sidebar widgets?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_widget_text_color'
	)
) );
	
// sidebar widgets link color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_widget_link_color', array(
	'label' => 'Sidebar Widgets Link Color',
	'description' => 'Specify link color of default sidebar widgets?',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_widget_link_color'
	)
) );

// sidebar widget title text color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widget title text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_sidebar_widget_title_text_color', array(
	'label' => 'Sidebar Widget Title Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_sidebar_widget_title_text_color'
	)
) );

// divider above tile colors setting
$wp_customize->add_setting( 'hovercraft_divider_tile_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above tile colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_tile_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_tile_colors',
)));

// tile background color setting
$wp_customize->add_setting( 'hovercraft_tile_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// tile background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_tile_background_color', array(
	'label' => 'Tile Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_tile_background_color'
	)
) );

// tile border color setting
$wp_customize->add_setting( 'hovercraft_tile_border_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// tile border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_tile_border_color', array(
	'label' => 'Tile Border Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_tile_border_color'
	)
) );

// divider above column colors setting
$wp_customize->add_setting( 'hovercraft_divider_column_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above column colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_column_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_column_colors',
)));

// column background color setting
$wp_customize->add_setting( 'hovercraft_column_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// column background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_column_background_color', array(
	'label' => 'Column Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_column_background_color'
	)
) );

// column border color setting
$wp_customize->add_setting( 'hovercraft_column_border_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// column border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_column_border_color', array(
	'label' => 'Column Border Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_column_border_color'
	)
) );

// divider above postmain top colors setting
$wp_customize->add_setting( 'hovercraft_divider_postmain_top_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above postmain top colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_postmain_top_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_postmain_top_colors',
)));

// home postmain (top) background color setting
$wp_customize->add_setting( 'hovercraft_postmain_top_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// home postmain (top) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_postmain_top_background_color', array(
	'label' => 'Home Postmain (Top) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_postmain_top_background_color'
	)
) );
	
// home postmain (top) text color setting
$wp_customize->add_setting( 'hovercraft_postmain_top_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (top) text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_postmain_top_text_color', array(
	'label' => 'Home Postmain (Top) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_postmain_top_text_color'
	)
) );
	
// home postmain (top) link color setting
$wp_customize->add_setting( 'hovercraft_postmain_top_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (top) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_postmain_top_link_color', array(
	'label' => 'Home Postmain (Top) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_postmain_top_link_color'
	)
) );

// divider above postmain bottom colors setting
$wp_customize->add_setting( 'hovercraft_divider_postmain_bottom_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above postmain bottom colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_postmain_bottom_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_postmain_bottom_colors',
)));

// home postmain (bottom) background color setting
$wp_customize->add_setting( 'hovercraft_postmain_bottom_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// home postmain (bottom) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_postmain_bottom_background_color', array(
	'label' => 'Home Postmain (Bottom) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_postmain_bottom_background_color'
	)
) );
	
// home postmain (bottom) text color setting
$wp_customize->add_setting( 'hovercraft_postmain_bottom_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (bottom) text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_postmain_bottom_text_color', array(
	'label' => 'Home Postmain (Bottom) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_postmain_bottom_text_color'
	)
) );
	
// home postmain (bottom) link color setting
$wp_customize->add_setting( 'hovercraft_postmain_bottom_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (bottom) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_postmain_bottom_link_color', array(
	'label' => 'Home Postmain (Bottom) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_postmain_bottom_link_color'
	)
) );

// divider above prefooter top colors setting
$wp_customize->add_setting( 'hovercraft_divider_prefooter_top_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above prefooter top colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_prefooter_top_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_prefooter_top_colors',
)));

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

// divider above prefooter bottom colors setting
$wp_customize->add_setting( 'hovercraft_divider_prefooter_bottom_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above prefooter bottom colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_prefooter_bottom_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_prefooter_bottom_colors',
)));

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

// divider above footer colors setting
$wp_customize->add_setting( 'hovercraft_divider_footer_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above footer colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_footer_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_footer_colors',
)));

// footer background color setting
$wp_customize->add_setting( 'hovercraft_footer_background_color', array(
	'default' => '#ffffff',
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

// footer callout background color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_background_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_background_color', array(
	'label' => 'Footer Callout Background Color',
	'description' => 'Specify background color of the Footer Callout widget? Note: Choose a bold tone for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_background_color'
	)
) );

// footer callout border color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_border_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_border_color', array(
	'label' => 'Footer Callout Border Color',
	'description' => 'Specify border color of the Footer Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_border_color'
	)
) );

// footer callout text color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_text_color', array(
	'label' => 'Footer Callout Text Color',
	'description' => 'Specify text color of the Footer Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_text_color'
	)
) );

// footer callout link color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_link_color', array(
	'label' => 'Footer Callout Link Color',
	'description' => 'Specify link color of the Footer Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_link_color'
	)
) );

// divider above copyright colors setting
$wp_customize->add_setting( 'hovercraft_divider_copyright_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above copyright colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_copyright_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_copyright_colors',
)));

// copyright background color setting
$wp_customize->add_setting( 'hovercraft_copyright_background_color', array(
        'default' => '#ffffff',
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

// divider above back to top colors setting
$wp_customize->add_setting( 'hovercraft_divider_back_to_top', array(
	'sanitize_callback' => '__return_null',
));

// divider above back to top colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_back_to_top', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_back_to_top',
)));

// back to top background color setting
$wp_customize->add_setting( 'hovercraft_back_to_top_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// back to top background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_back_to_top_background_color', array(
	'label' => 'Back To Top Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_back_to_top_background_color'
	)
) );

// back to top background hover color setting
$wp_customize->add_setting( 'hovercraft_back_to_top_background_hover_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// back to top background hover color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_back_to_top_background_hover_color', array(
	'label' => 'Back To Top Background Hover Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_back_to_top_background_hover_color'
	)
) );
	
// back to top link color setting
$wp_customize->add_setting( 'hovercraft_back_to_top_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// back to top link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_back_to_top_link_color', array(
	'label' => 'Back To Top Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_back_to_top_link_color'
	)
) );

