<?php

function hovercraft_customizer($wp_customize) {

// remove header text color control
$wp_customize->remove_control( 'header_textcolor' );

// header media section
$wp_customize->get_section( 'header_image' )->title = __( 'Header Media', 'hovercraft' );

// homepage section
$wp_customize->get_section( 'static_front_page' )->title = __( 'Homepage', 'hovercraft' );
$wp_customize->get_section( 'static_front_page' )->priority = 31;


// general options section
$wp_customize->add_section( 'hovercraft_general', array(
    'title'      => 'General Options',
    'priority'   => 30,
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
            'label'     => __( 'Desktop logo width', 'hovercraft' ),
			'description' => __( 'Specificy desktop logo width in pixels?', 'hovercraft' ),
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
            'label'     => __( 'Mobile logo width', 'hovercraft' ),
			'description' => __( 'Specificy mobile logo width in pixels?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_mobile_logo_width',
            'type' => 'text'
        )
) );

// scroll to top setting
$wp_customize->add_setting('hovercraft_scroll_to_top', array(
    'default' => 0,
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
));

// scroll to top control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_scroll_to_top',
        array(
            'label'     => __( 'Enable scroll to top', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_scroll_to_top',
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
            'label'     => __('Mobile topbar', 'hovercraft'),
			'description' => __( 'Which widget should display on mobile topbar?', 'hovercraft' ),
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
            'label'     => __('Mobile preheader', 'hovercraft'),
			'description' => __( 'Which widget should display on mobile preheader?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_mobile_preheader',
            'type'      => 'select',
			'choices' => array(
				'none' => 'None',
				'preheader_left' => 'preheader Left',
				'preheader_right' => 'preheader Right'
    			)
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
            'label'     => __('Posthero widget display', 'hovercraft'),
			'description' => __( 'Where should the Posthero widget be displayed when enabled?', 'hovercraft' ),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_posthero_widget_display',
            'type'      => 'select',
			'choices' => array(
        		'full_hero_only' => 'Full Hero only',
        		'full_and_half_hero' => 'Full &amp; Half Hero',
        		'full_and_half_and_mini_hero' => 'Full &amp; Half &amp; Mini Hero',
    			)
        )
) );


// homepage html title setting
$wp_customize->add_setting( 'hovercraft_homepage_html_title', array(
    'default'    => 'site_name_site_tagline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// homepage html title control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_homepage_html_title',
        array(
            'label'     => __( 'Homepage HTML title', 'hovercraft' ),
			'description' => __( 'How should the homepage HTML title tag be generated?', 'hovercraft' ),
            'section'   => 'static_front_page',
            'settings'  => 'hovercraft_homepage_html_title',
            'type'      => 'select',
			'choices' => array(
				'site_name_site_tagline' => 'Site Name | Site Tagline',
				'site_name_only' => 'Site Name Only',
				'page_title_only' => 'Page Title Only',
    			)
        )
) );
	
// homepage hide main setting
$wp_customize->add_setting('hovercraft_homepage_hide_main', array(
    'default' => 0,
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
));

// homepage hide main control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_homepage_hide_main',
        array(
            'label'     => __('Hide homepage main section', 'hovercraft'),
            'section'   => 'static_front_page',
            'settings'  => 'hovercraft_homepage_hide_main',
            'type'      => 'checkbox',
        )
    )
);


// fonts section
$wp_customize->add_section( 'hovercraft_fonts', array(
    'title'      => 'Fonts',
    'priority'   => 43,
) );

// default font family setting
$wp_customize->add_setting( 'hovercraft_default_font', array(
    'default'    => 'noto_sans',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// default font family control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_default_font',
        array(
            'label'     => __('Default font family', 'hovercraft'),
			'description' => __( 'What Google Fonts family to use for the default font?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_default_font',
            'type'      => 'select',
			'choices' => array(
				'gentium_book_basic' => 'Gentium Book Basic',
				'lato' => 'Lato',
				'lora' => 'Lora',
				'merriweather' => 'Merriweather',
        		'noto_sans' => 'Noto Sans',
				'noto_serif' => 'Noto Serif',
        		'open_sans' => 'Open Sans',
				'poppins' => 'Poppins',
				'pt_serif' => 'PT Serif',
				'roboto' => 'Roboto',
				'roboto_slab' => 'Robot Slab',
				'source_serif_pro' => 'Source Serif Pro',
    			)
        )
) );

// alternative font family setting
$wp_customize->add_setting( 'hovercraft_alternative_font', array(
    'default'    => 'noto_sans',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// alternative font family control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_alternative_font',
        array(
            'label'     => __( 'Alternative font family', 'hovercraft' ),
			'description' => __( 'What Google Fonts family to use for the alternative font?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_alternative_font',
            'type'      => 'select',
			'choices' => array(
				'noto_rashi_hebrew' => 'Noto Rashi Hebrew',
				'noto_sans_display' => 'Noto Sans Display',
				'noto_sans_hong_kong' => 'Noto Sans Hong Kong',
        		'noto_sans_japanese' => 'Noto Sans Japanese',
				'noto_sans_korean' => 'Noto Sans Korean',
				'noto_sans_mongolian' => 'Noto Sans Mongolian',
				'noto_sans_simplified_chinese' => 'Noto Sans Simplified Chinese',
				'noto_sans_thai' => 'Noto Sans Thai',
				'noto_sans_traditional_chinese' => 'Noto Sans Traditional Chinese',
				'noto_serif_bengali' => 'Noto Serif Bengali',
				'noto_serif_japanese' => 'Noto Serif Japanese',
				'noto_serif_khmer' => 'Noto Serif Khmer',
				'noto_serif_korean' => 'Noto Serif Korean',
				'noto_serif_malayalam' => 'Noto Serif Malayalam',
				'noto_serif_simplified_chinese' => 'Noto Serif Simplified Chinese',
				'noto_serif_traditional_chinese' => 'Noto Serif Traditional Chinese'
    			)
        )
) );

// site name font family setting
$wp_customize->add_setting( 'hovercraft_site_name_font', array(
    'default'    => 'noto_sans',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// site name font family control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_site_name_font',
        array(
            'label'     => __('Site Name font family', 'hovercraft'),
			'description' => __( 'What Google Fonts family to use for the site name?', 'hovercraft' ),
            'section'   => 'hovercraft_fonts',
            'settings'  => 'hovercraft_site_name_font',
            'type'      => 'select',
			'choices' => array(
				'averia_libre' => 'Averia Libre',
				'bebas_neue' => 'Bebas Neue',
				'bungee_inline' => 'Bungee Inline',
				'carter_one' => 'Carter One',
				'caveat_brush' => 'Caveat Brush',
				'chewy' => 'Chewy',
				'courgette' => 'Courgette',
				'crete_round' => 'Crete Round',
				'dancing_script' => 'Dancing Script',
				'fredoka_one' => 'Fredoka One',
				'genos' => 'Genos',
				'gentium_book_basic' => 'Gentium Book Basic',
				'gloria_hallelujah' => 'Gloria Hallelujah',
				'itim' => 'Itim',
				'knewave' => 'Knewave',
				'lilita_one' => 'Lilita One',
				'lobster' => 'Lobster',
				'marcellus_sc' => 'Marcellus SC',
				'merriweather' => 'Merriweather',
				'monoton' => 'Monoton',
        		'noto_sans' => 'Noto Sans',
        		'open_sans' => 'Open Sans',
				'orbitron' => 'Orbitron',
				'pacifico' => 'Pacifico',
				'permanent_marker' => 'Permanent Marker',
				'phudu' => 'Phudu',
				'playfair_display' => 'Playfair Display',
				'poller_one' => 'Poller One',
				'press_start_2p' => 'Press Start 2P',
				'rancho' => 'Rancho',
				'righteous' => 'Righteous',
				'roboto_slab' => 'Roboto Slab',
				'rowdies' => 'Rowdies',
				'rye' => 'Rye',
				'special_elite' => 'Special Elite',
				'staatliches' => 'Staatliches',
				'titan_one' => 'Titan One',
				'yellowtail' => 'Yellowtail',
    			)
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
            'label'     => __('Site Name font weight', 'hovercraft'),
			'description' => __( 'What font weight to use for the site name?', 'hovercraft' ),
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
	
// preheader background color setting
$wp_customize->add_setting( 'hovercraft_preheader_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// preheader background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_preheader_background_color', array(
	'label' => 'Preheader Background Color',
	'description' => 'Applies to the site-wide preheader element.',
	'section' => 'colors',
	'settings' => 'hovercraft_preheader_background_color'
	)
) );
	
// preheader text color setting
$wp_customize->add_setting( 'hovercraft_preheader_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// preheader text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_preheader_text_color', array(
	'label' => 'Preheader Text Color',
	'description' => 'Applies to any plain text inside the preheader.',
	'section' => 'colors',
	'settings' => 'hovercraft_preheader_text_color'
	)
) );
	
// preheader link color setting
$wp_customize->add_setting( 'hovercraft_preheader_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// preheader link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_preheader_link_color', array(
	'label' => 'Preheader Link Color',
	'description' => 'Applies to any links inside the preheader.',
	'section' => 'colors',
	'settings' => 'hovercraft_preheader_link_color'
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

// posthero link decoration setting
$wp_customize->add_setting( 'hovercraft_posthero_link_decoration', array(
    'default'    => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	) 
);

// posthero link decoration control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_posthero_link_decoration',
        array(
            'label'     => __('Posthero link decoration', 'hovercraft'),
			'description' => __( 'What type of link decoration', 'hovercraft' ),
            'section'   => 'hovercraft_link_styling',
            'settings'  => 'hovercraft_posthero_link_decoration',
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
    'title'      => 'Hero Gradient',
    'priority'   => 87,
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
				'0deg' => '0 Degrees',
        		'45deg' => '45 Degrees',
        		'60deg' => '60 Degrees',
        		'90deg' => '90 Degrees',
        		'120deg' => '120 Degrees',
				'135deg' => '135 Degrees',
				'180deg' => '180 Degrees',
				'225deg' => '225 Degrees',
				'270deg' => '270 Degrees',
				'315deg' => '315 Degrees',
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
    'default'    => '30',
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
    'default'    => '100',
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
function hovercraft_sanitize_checkbox( $checked ){
	//returns true if checkbox is checked
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

// sanitize float function
function hovercraft_sanitize_float( $input ){
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

// https://themeshaper.com/2013/04/29/validation-sanitization-in-customizer/
// https://divpusher.com/blog/wordpress-customizer-sanitization-examples/
// https://wordpress.stackexchange.com/questions/225825/customizer-sanitize-callback-for-input-type-number
// https://core.trac.wordpress.org/ticket/24528
// https://wp-a2z.org/oik_api/twentytwenty_customizesanitize_checkbox/
// https://wordpress.stackexchange.com/questions/261969/how-to-rename-and-rearrange-multiple-sections-in-the-customizer
// https://wphelp.blog/how-to-remove-sections-from-wordpress-customizer/
