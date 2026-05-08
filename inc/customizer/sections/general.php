<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

    // general options section
    $wp_customize->add_section('hovercraft_general', array(
        'title'    => 'General Options',
        'priority' => 30,
    ));
	
// sitewide layout setting
$wp_customize->add_setting( 'hovercraft_sitewide_layout', array(
    'default'    => 'floating_islands',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// sitewide layout control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_sitewide_layout',
        array(
            'label'     => __( 'Sitewide Layout', 'hovercraft' ),
			'description' => __( 'Which layout style to use? This affects padding and alignment, so you might need to adjust background colors accordingly.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_sitewide_layout',
            'type'      => 'select',
			'choices' => array(
        		'floating_islands' => 'Floating Islands',
        		'classic_clean' => 'Classic Clean'
    			)
        )
) );

// mobile menu setting
$wp_customize->add_setting( 'hovercraft_mobile_menu', array(
    'default'    => 'accordion',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// mobile menu control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_mobile_menu',
        array(
            'label'     => __( 'Mobile Menu Style', 'hovercraft' ),
			'description' => __( 'Which mobile menu style do you want to use? Larger menus should usually use the Accordion Push.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_mobile_menu',
            'type'      => 'select',
			'choices' => array(
        		'overlay' => 'Overlay Simple',
        		'accordion' => 'Accordion Push'
    			)
        )
) );

// tagline display setting
$wp_customize->add_setting( 'hovercraft_tagline_display', array(
    'default'    => 'right_of_site_title',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// tagline display control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_tagline_display',
        array(
            'label'     => __( 'Tagline Display (Desktop)', 'hovercraft' ),
			'description' => __( 'Where should the Tagline display in the header? Note: Tagline must be filled in the Site Identity section for this to work, and will always be hidden on mobile devices regardless.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_tagline_display',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Hidden)',
				'right_of_site_title' => 'Right of Site Title',
				'below_site_title' => 'Below Site Title'
    			)
        )
) );

// site name display setting
$wp_customize->add_setting( 'hovercraft_site_name_display_mobile', array(
    'default'    => 'block',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// site name display control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_site_name_display_mobile',
        array(
            'label'     => __( 'Site Name Display (Mobile)', 'hovercraft' ),
			'description' => __( 'Should the Site Name be displayed on mobile devices next to the logo?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_site_name_display_mobile',
            'type'      => 'select',
			'choices' => array(
        		'block' => 'Visible (Block)',
				'none' => 'None (Hidden)'
    			)
        )
) );

// alternative logo location setting
$wp_customize->add_setting( 'hovercraft_logo_alternative_location', array(
    'default' => 'none',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// alternative logo location control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_logo_alternative_location',
    array(
        'label' => __( 'Alternative Logo Location', 'hovercraft' ),
        'description' => __( 'Where should the alternative logo appear?', 'hovercraft' ),
        'section' => 'hovercraft_general',
        'settings' => 'hovercraft_logo_alternative_location',
        'type' => 'select',
        'priority' => 9,
        'choices' => array(
            'none' => 'None',
            'full_hero_only' => 'Full Hero Only',
            'half_hero_only' => 'Half Hero Only',
            'mini_hero_only' => 'Mini Hero Only',
            'basic_header_only' => 'Basic Header Only',
            'full_and_half_hero' => 'Full + Half Hero',
            'full_and_mini_hero' => 'Full + Mini Hero',
            'full_hero_and_basic_header' => 'Full Hero + Basic Header',
            'half_and_mini_hero' => 'Half + Mini Hero',
            'half_hero_and_basic_header' => 'Half Hero + Basic Header',
            'mini_hero_and_basic_header' => 'Mini Hero + Basic Header',
            'full_and_half_and_mini_hero' => 'Full + Half + Mini Hero',
            'full_and_half_hero_and_basic_header' => 'Full + Half Hero + Basic Header',
            'full_and_mini_hero_and_basic_header' => 'Full + Mini Hero + Basic Header',
            'half_and_mini_hero_and_basic_header' => 'Half + Mini Hero + Basic Header',
            'full_and_half_and_mini_hero_and_basic_header' => 'Full + Half + Mini Hero + Basic Header',
        ),
    )
) );

// logo width setting (desktop)
$wp_customize->add_setting( 'hovercraft_desktop_logo_width', array(
    'default'    => '150',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// logo width control (desktop)
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_desktop_logo_width',
        array(
            'label'     => __( 'Logo Width (Desktop)', 'hovercraft' ),
			'description' => __( 'Specify desktop logo width in pixels? The height will be determined automatically.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_desktop_logo_width',
            'type' => 'text'
        )
) );

// logo width setting (mobile)
$wp_customize->add_setting( 'hovercraft_mobile_logo_width', array(
    'default'    => '100',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// logo width control (mobile)
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_mobile_logo_width',
        array(
            'label'     => __( 'Logo Width (Mobile)', 'hovercraft' ),
			'description' => __( 'Specify mobile logo width in pixels? The height will be determined automatically.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_mobile_logo_width',
            'type' => 'text'
        )
) );

// header width setting (desktop)
$wp_customize->add_setting( 'hovercraft_desktop_header_width', array(
    'default' => 'fixed',
	'sanitize_callback' => 'hovercraft_sanitize_select'
	)
);

// header width control (desktop)
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_desktop_header_width',
        array(
            'label'     => __( 'Header Width (Desktop)', 'hovercraft' ),
			'description' => __( 'What should the header width be on desktop? Note: Always Full Width on mobile.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_desktop_header_width',
            'type'      => 'select',
			'choices' => array(
				'full' => 'Full Width',
				'fixed' => 'Fixed Width (1200px)'
    			)
        )
) );

// copyright width setting (desktop)
$wp_customize->add_setting( 'hovercraft_desktop_copyright_width', array(
    'default' => 'fixed',
	'sanitize_callback' => 'hovercraft_sanitize_select'
	)
);

// copyright width control (desktop)
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_desktop_copyright_width',
        array(
            'label'     => __( 'Copyright Width (Desktop)', 'hovercraft' ),
			'description' => __( 'What should the copyright width be on desktop? Note: Always Full Width on mobile.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_desktop_copyright_width',
            'type'      => 'select',
			'choices' => array(
				'full' => 'Full Width',
				'fixed' => 'Fixed Width (1200px)'
    			)
        )
) );

// after byline padding setting (desktop)
$wp_customize->add_setting( 'hovercraft_after_byline_padding', array(
    'default'    => '0',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// after byline padding control (desktop)
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_after_byline_padding',
        array(
            'label'     => __( 'After Byline Padding', 'hovercraft' ),
			'description' => __( 'Specify After Byline widget padding in pixels?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_after_byline_padding',
            'type' => 'text'
        )
) );
	
// posthero widget display setting
$wp_customize->add_setting( 'hovercraft_posthero_widget_display', array(
    'default'    => 'full_and_half_hero',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// posthero widget display control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_posthero_widget_display',
        array(
            'label'     => __( 'Posthero Widget Display', 'hovercraft' ),
			'description' => __( 'Below which hero types should the posthero widget be displayed when active?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_posthero_widget_display',
            'type'      => 'select',
			'choices' => array(
        		'full_hero_only' => 'Full Hero Only',
        		'full_and_half_hero' => 'Full &amp; Half Hero',
        		'full_and_half_and_mini_hero' => 'Full &amp; Half &amp; Mini Hero',
    			)
        )
) );

// mobile topbar setting
$wp_customize->add_setting( 'hovercraft_mobile_topbar', array(
    'default'    => 'topbar_left',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// mobile topbar control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_mobile_topbar',
        array(
            'label'     => __( 'Mobile Topbar Widget', 'hovercraft' ),
			'description' => __( 'Which widget to display on mobile topbar? This only applies if both widgets are active.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_mobile_topbar',
            'type'      => 'select',
			'choices' => array(
				'topbar_left' => 'Topbar Left',
				'topbar_right' => 'Topbar Right'
    			)
        )
) );

// mobile preheader setting
$wp_customize->add_setting( 'hovercraft_mobile_preheader', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// mobile preheader control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_mobile_preheader',
        array(
            'label'     => __( 'Mobile Preheader Widget', 'hovercraft' ),
			'description' => __( 'Which widget to display on mobile preheader? Note: We suggest disabling this.', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_mobile_preheader',
            'type'      => 'select',
			'choices' => array(
				'none' => 'None (Disabled)',
				'preheader_left' => 'Preheader Left',
				'preheader_right' => 'Preheader Right'
    			)
        )
) );

// scroll to top setting
$wp_customize->add_setting( 'hovercraft_scroll_to_top', array(
    'default'    => 'mobile_only',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// scroll to top control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_scroll_to_top',
        array(
            'label'     => __( 'Back To Top Display', 'hovercraft' ),
			'description' => __( 'On which devices should the "back to top" element be displayed in the footer?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_scroll_to_top',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
        		'mobile_only' => 'Mobile Only',
        		'desktop_and_mobile' => 'Desktop &amp; Mobile'
    			)
        )
) );
	
// search icon setting
$wp_customize->add_setting( 'hovercraft_search_icon', array(
    'default'    => 'desktop_only',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// search icon control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_search_icon',
        array(
            'label'     => __( 'Search Icon Display', 'hovercraft' ),
			'description' => __( 'On which devices should the search icon be displayed in the header?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_search_icon',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'desktop_only' => 'Desktop Only',
				'desktop_and_mobile' => 'Desktop &amp; Mobile',
        		'mobile_only' => 'Mobile Only'
    			)
        )
) );

// breadcrumbs setting
$wp_customize->add_setting( 'hovercraft_breadcrumbs', array(
    'default'    => 'sitewide_except_homepage',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// breadcrumbs control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_breadcrumbs',
        array(
            'label'     => __( 'Breadcrumbs Display', 'hovercraft' ),
			'description' => __( 'On which pages should the breadcrumbs element be displayed (top of primary)?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_breadcrumbs',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'sitewide_except_homepage' => 'Sitewide Except Homepage',
				'sitewide' => 'Sitewide (All Pages)'
    			)
        )
) );
