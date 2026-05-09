<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

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

