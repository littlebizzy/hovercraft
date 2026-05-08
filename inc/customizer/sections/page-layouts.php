<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// page layouts section
$wp_customize->add_section( 'hovercraft_page_layouts', array(
    'title'      => 'Page Layouts',
    'priority'   => 35,
) );

// tiles across setting
$wp_customize->add_setting( 'hovercraft_tiles_across', array(
    'default'    => '3',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// tiles across control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_tiles_across',
        array(
            'label'     => __('Tiles Across (Desktop)', 'hovercraft'),
			'description' => __( 'How many tiles across should display in the tiles widget area? (How many columns)', 'hovercraft' ),
            'section'   => 'hovercraft_page_layouts',
            'settings'  => 'hovercraft_tiles_across',
            'type'      => 'select',
			'choices' => array(
        		'2' => '2 Columns',
        		'3' => '3 Columns',
				'4' => '4 Columns',
				'5' => '5 Columns',
        		'6' => '6 Columns',
				'7' => '7 Columns',
				'8' => '8 Columns',
				'9' => '9 Columns',
				'10' => '10 Columns',
        		'11' => '11 Columns',
				'12' => '12 Columns'
    			)
        )
) );

// columns across setting
$wp_customize->add_setting( 'hovercraft_columns_across', array(
    'default'    => '4',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// columns across control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_columns_across',
        array(
            'label'     => __('Columns Across (Desktop)', 'hovercraft'),
			'description' => __( 'How many columns across should display in the columns widget area? (How many columns)', 'hovercraft' ),
            'section'   => 'hovercraft_page_layouts',
            'settings'  => 'hovercraft_columns_across',
            'type'      => 'select',
			'choices' => array(
        		'3' => '3 Columns',
				'4' => '4 Columns',
				'5' => '5 Columns',
				'6' => '6 Columns'
    			)
        )
) );

// gallery captions setting
$wp_customize->add_setting( 'hovercraft_gallery_captions', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// gallery captions control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_gallery_captions',
        array(
            'label'     => __('Gallery Captions Display', 'hovercraft'),
			'description' => __( 'What display style should the image gallery captions use?', 'hovercraft' ),
            'section'   => 'hovercraft_page_layouts',
            'settings'  => 'hovercraft_gallery_captions',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'below_image' => 'Below Image',
				'inside_image' => 'Inside Image (Bottom)'
    			)
        )
) );

// tiles captions setting
$wp_customize->add_setting( 'hovercraft_tiles_captions', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// tiles captions control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_tiles_captions',
        array(
            'label'     => __('Tiles Captions Display', 'hovercraft'),
			'description' => __( 'What display style should the images captions inside Tiles use?', 'hovercraft' ),
            'section'   => 'hovercraft_page_layouts',
            'settings'  => 'hovercraft_tiles_captions',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'below_image' => 'Below Image',
				'inside_image' => 'Inside Image (Bottom)'
    			)
        )
) );

// blockquote captions setting
$wp_customize->add_setting( 'hovercraft_blockquote_captions', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// blockquote captions control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_blockquote_captions',
        array(
            'label'     => __('Gallery Blockquote Display', 'hovercraft'),
			'description' => __( 'What display style should the blockquote captions use?', 'hovercraft' ),
            'section'   => 'hovercraft_page_layouts',
            'settings'  => 'hovercraft_blockquote_captions',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'below_image' => 'Below Image',
				'inside_image' => 'Inside Image (Bottom)'
    			)
        )
) );

