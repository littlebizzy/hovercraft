<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// css from customizer
function hovercraft_generate_css(){

	/* google fonts */
	$first_font_family = get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' );
	$second_font_family = get_theme_mod( 'hovercraft_second_font_family', '' );
	$third_font_family = get_theme_mod( 'hovercraft_third_font_family', '' );
	$multilingual_font_family = get_theme_mod( 'hovercraft_multilingual_font_family', '' );
	
	/* default fonts */
    $default_font_family = get_theme_mod( 'hovercraft_default_font', '' );
    $default_desktop_font_size = get_theme_mod( 'hovercraft_default_desktop_font_size', '16' );
    $default_mobile_font_size = get_theme_mod( 'hovercraft_default_mobile_font_size', '16' );

	/* fonts (topbar) */
	$topbar_text_transform = get_theme_mod( 'hovercraft_topbar_text_transform', 'none' );
	$topbar_mobile_font_size = get_theme_mod( 'hovercraft_topbar_mobile_font_size', '14' );
	$topbar_desktop_font_size = get_theme_mod( 'hovercraft_topbar_desktop_font_size', '14' );
	$topbar_font_weight = get_theme_mod( 'hovercraft_topbar_font_weight', '400' );

	/* fonts (site title) */
	$site_name_font_family = get_theme_mod( 'hovercraft_site_name_font', 'noto_sans' );
	$site_name_text_transform = get_theme_mod( 'hovercraft_site_name_text_transform', 'none' );
	$site_name_mobile_font_size = get_theme_mod( 'hovercraft_site_name_mobile_font_size', '24' );
	$site_name_desktop_font_size = get_theme_mod( 'hovercraft_site_name_desktop_font_size', '36' );
	$site_name_font_weight = get_theme_mod( 'hovercraft_site_name_font_weight', '700' );

	/* fonts (main menu) */
	$main_menu_font_family = get_theme_mod( 'hovercraft_main_menu_font', 'noto_sans' );
	$main_menu_text_transform = get_theme_mod( 'hovercraft_main_menu_text_transform', 'none' );
	$main_menu_desktop_font_size = get_theme_mod( 'hovercraft_main_menu_desktop_font_size', '18' );
	$main_menu_font_weight = get_theme_mod( 'hovercraft_main_menu_font_weight', '600' );

	/* fonts (offcanvas menu) */
	$offcanvas_menu_text_transform = get_theme_mod( 'hovercraft_offcanvas_menu_text_transform', 'none' );
	$offcanvas_font_size = get_theme_mod( 'hovercraft_offcanvas_font_size', '18' );
	$offcanvas_font_weight = get_theme_mod( 'hovercraft_offcanvas_font_weight', '400' );

	/* fonts (offcanvas submenu) */
	$offcanvas_submenu_text_transform = get_theme_mod( 'hovercraft_offcanvas_submenu_text_transform', 'none' );
	$offcanvas_submenu_font_size = get_theme_mod( 'hovercraft_offcanvas_submenu_font_size', '16' );
	$offcanvas_submenu_font_weight = get_theme_mod( 'hovercraft_offcanvas_submenu_font_weight', '400' );
	
	/* fonts (after byline) */
	$after_byline_mobile_font_size = get_theme_mod( 'hovercraft_after_byline_mobile_font_size', '12' );
	$after_byline_desktop_font_size = get_theme_mod( 'hovercraft_after_byline_desktop_font_size', '12' );

	/* fonts (social sharing) */
	$social_sharing_font_size = get_theme_mod( 'hovercraft_social_sharing_font_size', '18' );

	/* fonts (footer) */
	$footer_mobile_font_size = get_theme_mod( 'hovercraft_footer_mobile_font_size', '14' );
	$footer_desktop_font_size = get_theme_mod( 'hovercraft_footer_desktop_font_size', '14' );

	/* fonts (copyright) */
	$copyright_mobile_font_size = get_theme_mod( 'hovercraft_copyright_mobile_font_size', '14' );
	$copyright_desktop_font_size = get_theme_mod( 'hovercraft_copyright_desktop_font_size', '14' );

	/* fonts (back to top) */
	$back_to_top_text_transform = get_theme_mod( 'hovercraft_back_to_top_text_transform', 'uppercase' );
	$back_to_top_font_weight = get_theme_mod( 'hovercraft_back_to_top_font_weight', '400' );

	/* h1 headings */
    $h1_font_family = get_theme_mod( 'hovercraft_h1_font', '' );
    $h1_mobile_font_size = get_theme_mod( 'hovercraft_h1_mobile_font_size', '36' );
    $h1_desktop_font_size = get_theme_mod( 'hovercraft_h1_desktop_font_size', '48' );
    $h1_font_weight = get_theme_mod( 'hovercraft_h1_font_weight', '700' );
    $h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );

	/* h2 headings */
    $h2_font_family = get_theme_mod( 'hovercraft_h2_font', '' );
    $h2_mobile_font_size = get_theme_mod( 'hovercraft_h2_mobile_font_size', '30' );
    $h2_desktop_font_size = get_theme_mod( 'hovercraft_h2_desktop_font_size', '36' );
    $h2_font_weight = get_theme_mod( 'hovercraft_h2_font_weight', '700' );
    $h2_divider_display = get_theme_mod( 'hovercraft_h2_divider_display', 'none' );

	/* h3 headings */
    $h3_font_family = get_theme_mod( 'hovercraft_h3_font', '' );
    $h3_mobile_font_size = get_theme_mod( 'hovercraft_h3_mobile_font_size', '24' );
    $h3_desktop_font_size = get_theme_mod( 'hovercraft_h3_desktop_font_size', '24' );
    $h3_font_weight = get_theme_mod( 'hovercraft_h3_font_weight', '700' );

	/* h4 headings */
    $h4_font_family = get_theme_mod( 'hovercraft_h4_font', '' );
    $h4_mobile_font_size = get_theme_mod( 'hovercraft_h4_mobile_font_size', '20' );
    $h4_desktop_font_size = get_theme_mod( 'hovercraft_h4_desktop_font_size', '20' );
    $h4_font_weight = get_theme_mod( 'hovercraft_h4_font_weight', '700' );

	/* h5 headings */
    $h5_font_family = get_theme_mod( 'hovercraft_h5_font', '' );
    $h5_mobile_font_size = get_theme_mod( 'hovercraft_h5_mobile_font_size', '18' );
    $h5_desktop_font_size = get_theme_mod( 'hovercraft_h5_desktop_font_size', '18' );
    $h5_font_weight = get_theme_mod( 'hovercraft_h5_font_weight', '700' );

	/* sidebar widget titles */
	$sidebar_widget_title_desktop_font_size = get_theme_mod( 'hovercraft_sidebar_widget_title_desktop_font_size', '24' );
	$sidebar_widget_title_mobile_font_size = get_theme_mod( 'hovercraft_sidebar_widget_title_mobile_font_size', '24' );
	$sidebar_widget_title_text_transform = get_theme_mod( 'hovercraft_sidebar_widget_title_text_transform', 'none' );
	$sidebar_widget_title_font_weight = get_theme_mod( 'hovercraft_sidebar_widget_title_font_weight', '600' );
	
	/* heros */
	$hero_gradient_tones = get_theme_mod( 'hovercraft_hero_gradient_tones', 'two_tones' );
	$mini_hero_vertical_padding = get_theme_mod( 'hovercraft_mini_hero_vertical_padding', '80' );
	$full_hero_background_position = get_theme_mod( 'hovercraft_full_hero_background_position', 'center_center' );
	$half_hero_background_position = get_theme_mod( 'hovercraft_half_hero_background_position', 'center_center' );
	$mini_hero_background_position = get_theme_mod( 'hovercraft_mini_hero_background_position', 'center_center' );
	$full_hero_header_background_color = get_theme_mod( 'hovercraft_full_hero_header_background_color', '#263238' );
	$full_hero_header_background_transparency = get_theme_mod( 'hovercraft_full_hero_header_background_transparency', '0.20' );
	$hero_gradient_angle = get_theme_mod( 'hovercraft_hero_gradient_angle', '60deg' );
	$hero_gradient_start_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_start_color_transparency', '0.50' );
	$hero_gradient_mid_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_mid_color_transparency', '0.50' );
	$hero_gradient_stop_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_stop_color_transparency', '0.50' );
	$hero_gradient_start_color_length = get_theme_mod( 'hovercraft_hero_gradient_start_color_length', '30' );
	$hero_gradient_mid_color_length = get_theme_mod( 'hovercraft_hero_gradient_mid_color_length', '30' );
	$hero_gradient_stop_color_length = get_theme_mod( 'hovercraft_hero_gradient_stop_color_length', '100' );
	$hero_content_width_desktop = get_theme_mod( 'hovercraft_hero_content_width_desktop', '900px' );
	$url_hero_video = wp_get_attachment_url( get_theme_mod( 'hovercraft_video' ) ); 
	$url_header_image = esc_url( get_header_image() );
	$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id(), 'large' ); 
	
	if (!empty( $url_featured_image )) { 
		$hero_image = $url_featured_image; 
	} else { 
		$hero_image = $url_header_image; 
	}
	
	/* widget areas */
	$home_premain_top_columns = get_theme_mod( 'hovercraft_home_premain_top_columns', '1' );
	$home_premain_top_align = get_theme_mod( 'hovercraft_home_premain_top_align', 'center' );
	$home_premain_bottom_columns = get_theme_mod( 'hovercraft_home_premain_bottom_columns', '1' );
	$home_premain_bottom_align = get_theme_mod( 'hovercraft_home_premain_bottom_align', 'center' );
	$home_postmain_top_columns = get_theme_mod( 'hovercraft_home_postmain_top_columns', '1' );
	$home_postmain_top_align = get_theme_mod( 'hovercraft_home_postmain_top_align', 'center' );
	$home_postmain_bottom_columns = get_theme_mod( 'hovercraft_home_postmain_bottom_columns', '1' );
	$home_postmain_bottom_align = get_theme_mod( 'hovercraft_home_postmain_bottom_align', 'center' );
	$prefooter_top_columns = get_theme_mod( 'hovercraft_prefooter_top_columns', '1' );
	$prefooter_top_align = get_theme_mod( 'hovercraft_prefooter_top_align', 'left' );
	$prefooter_bottom_columns = get_theme_mod( 'hovercraft_prefooter_bottom_columns', '1' );
	$prefooter_bottom_align = get_theme_mod( 'hovercraft_prefooter_bottom_align', 'left' );
	$postcolumns_top_align = get_theme_mod( 'hovercraft_postcolumns_top_align', 'left' );
	$postcolumns_bottom_align = get_theme_mod( 'hovercraft_postcolumns_bottom_align', 'left' );

	$back_to_top_desktop_font_size = get_theme_mod( 'hovercraft_back_to_top_desktop_font_size', '12' );
	$back_to_top_mobile_font_size = get_theme_mod( 'hovercraft_back_to_top_mobile_font_size', '12' );

	/* link decoration */
	$default_link_decoration = get_theme_mod( 'hovercraft_default_link_decoration', 'underline' );
	$topbar_link_decoration = get_theme_mod( 'hovercraft_topbar_link_decoration', 'underline' );
	$posthero_link_decoration = get_theme_mod( 'hovercraft_posthero_link_decoration', 'underline' );
	$postmain_top_link_decoration = get_theme_mod( 'hovercraft_postmain_top_link_decoration', 'underline' );
	$postmain_bottom_link_decoration = get_theme_mod( 'hovercraft_postmain_bottom_link_decoration', 'underline' );
	$premain_top_link_decoration = get_theme_mod( 'hovercraft_premain_top_link_decoration', 'underline' );
	$premain_bottom_link_decoration = get_theme_mod( 'hovercraft_premain_bottom_link_decoration', 'underline' );
	$prefooter_top_link_decoration = get_theme_mod( 'hovercraft_prefooter_top_link_decoration', 'underline' );
	$prefooter_bottom_link_decoration = get_theme_mod( 'hovercraft_prefooter_bottom_link_decoration', 'underline' );
	$footer_link_decoration = get_theme_mod( 'hovercraft_footer_link_decoration', 'underline' );
	$footer_callout_link_decoration = get_theme_mod( 'hovercraft_footer_callout_link_decoration', 'underline' );
	$copyright_link_decoration = get_theme_mod( 'hovercraft_copyright_link_decoration', 'underline' );
	
	/* colors */
	/* color settings */
	$mini_hero_background_color = get_theme_mod( 'hovercraft_header_mini_hero_background_color', '#ffffff' );
	$mini_hero_header_link_color = get_theme_mod( 'hovercraft_mini_hero_header_link_color', '#263238' );
	$mini_hero_header_text_color = get_theme_mod( 'hovercraft_mini_hero_header_text_color', '#263238' );
	$default_text_color = get_theme_mod( 'hovercraft_default_text_color', '#263238' );
	$default_link_color = get_theme_mod( 'hovercraft_default_link_color', '#5C6BC0' );
	$default_hover_color = get_theme_mod( 'hovercraft_default_hover_color', '#283593' );
	$woocommerce_price_text_color = get_theme_mod( 'hovercraft_woocommerce_price_text_color', '#9E9D24' );
	$search_bar_background_color = get_theme_mod( 'hovercraft_search_bar_background_color', '#eceff1' );
	$search_bar_border_color = get_theme_mod( 'hovercraft_search_bar_border_color', '#eceff1' );
	$topbar_background_color = get_theme_mod( 'hovercraft_topbar_background_color', '#263238' );
	$topbar_text_color = get_theme_mod( 'hovercraft_topbar_text_color', '#ffffff' );
	$topbar_link_color = get_theme_mod( 'hovercraft_topbar_link_color', '#ffffff' );
	$half_hero_background_color = get_theme_mod( 'hovercraft_header_half_hero_background_color', '#ffffff' ); 
	$half_hero_text_color = get_theme_mod( 'hovercraft_header_half_hero_text_color', '#263238' ); 
	$half_hero_link_color = get_theme_mod( 'hovercraft_header_half_hero_link_color', '#263238' ); 
	$half_hero_header_text_color = get_theme_mod( 'hovercraft_header_half_hero_text_color', '#263238' ); 
	$half_hero_header_link_color = get_theme_mod( 'hovercraft_header_half_hero_link_color', '#263238' ); 
	$hero_gradient_start_color = get_theme_mod( 'hovercraft_hero_gradient_start_color', '#37474f' );
	$hero_gradient_mid_color = get_theme_mod( 'hovercraft_hero_gradient_mid_color', '#37474f' );
	$hero_gradient_stop_color = get_theme_mod( 'hovercraft_hero_gradient_stop_color', '#ffffff' );
	$offcanvas_background_color = get_theme_mod( 'hovercraft_offcanvas_background_color', '#ffffff' );
	$offcanvas_toggle_background_color = get_theme_mod( 'hovercraft_offcanvas_toggle_background_color', '#eceff1' );
	$breadcrumbs_text_color = get_theme_mod( 'hovercraft_breadcrumbs_text_color', '#607D8B' );
	$breadcrumbs_link_color = get_theme_mod( 'hovercraft_breadcrumbs_link_color', '#607D8B' );
	$hero_snippet_text_color = get_theme_mod( 'hovercraft_hero_snippet_text_color', '#ffffff' );
	$hero_snippet_link_color = get_theme_mod( 'hovercraft_hero_snippet_link_color', '#ffffff' );
	$search_input_placeholder_color = get_theme_mod( 'hovercraft_search_input_placeholder_color', '#757575' );
	$search_input_text_color = get_theme_mod( 'hovercraft_search_input_text_color', '#263238' );
	$sidebar_widget_title_text_color = get_theme_mod( 'hovercraft_sidebar_widget_title_text_color', '#263238' );

	// new
	$header_basic_hero_background_color = get_theme_mod( 'hovercraft_header_basic_background_color', '#ffffff' );
	$header_basic_hero_text_color = get_theme_mod( 'hovercraft_basic_hero_header_text_color', '#263238' );
	$header_basic_hero_link_color = get_theme_mod( 'hovercraft_basic_hero_header_link_color', '#263238' );

	$posthero_background_color = get_theme_mod( 'hovercraft_posthero_background_color', '#eceff1' );
	$posthero_text_color = get_theme_mod( 'hovercraft_posthero_text_color', '#263238' );
	$posthero_link_color = get_theme_mod( 'hovercraft_posthero_link_color', '#5C6BC0' );
	$postcolumns_top_background_color = get_theme_mod( 'hovercraft_postcolumns_top_background_color', '#eceff1' );
	$postcolumns_top_text_color = get_theme_mod( 'hovercraft_postcolumns_top_text_color', '#263238' );
	$postcolumns_bottom_background_color = get_theme_mod( 'hovercraft_postcolumns_bottom_background_color', '#eceff1' );
	$postcolumns_bottom_text_color = get_theme_mod( 'hovercraft_postcolumns_bottom_text_color', '#263238' );
	$footer_callout_background_color = get_theme_mod( 'hovercraft_footer_callout_background_color', '#283593' );
	$footer_callout_border_color = get_theme_mod( 'hovercraft_footer_callout_border_color', '#283593' );
	$footer_callout_text_color = get_theme_mod( 'hovercraft_footer_callout_text_color', '#ffffff' );
	$footer_callout_link_color = get_theme_mod( 'hovercraft_footer_callout_link_color', '#ffffff' );
	$footer_callout_padding = get_theme_mod( 'hovercraft_footer_callout_padding', '40' );
	$sidebar_callout_background_color = get_theme_mod( 'hovercraft_sidebar_callout_background_color', '#283593' );
	$sidebar_callout_border_color = get_theme_mod( 'hovercraft_sidebar_callout_border_color', '#283593' );
	$sidebar_callout_text_color = get_theme_mod( 'hovercraft_sidebar_callout_text_color', '#ffffff' );
	$sidebar_callout_link_color = get_theme_mod( 'hovercraft_sidebar_callout_link_color', '#ffffff' );
	$sidebar_callout_cta_background_color = get_theme_mod( 'hovercraft_sidebar_callout_cta_background_color', '#263238' );
	$sidebar_callout_cta_border_color = get_theme_mod( 'hovercraft_sidebar_callout_cta_border_color', '#263238' );
	$sidebar_callout_hover_background_color = get_theme_mod( 'hovercraft_sidebar_callout_hover_background_color', '#ffffff' );
	$sidebar_callout_hover_link_color = get_theme_mod( 'hovercraft_sidebar_callout_hover_link_color', '#263238' );
	$sidebar_widget_background_color = get_theme_mod( 'hovercraft_sidebar_widget_background_color', '#ffffff' );
	$sidebar_widget_text_color = get_theme_mod( 'hovercraft_sidebar_widget_text_color', '#263238' );
	$sidebar_widget_link_color = get_theme_mod( 'hovercraft_sidebar_widget_link_color', '#5C6BC0' );
	$sidebar_widget_border_color = get_theme_mod( 'hovercraft_sidebar_widget_border_color', '#ffffff' );
	$sidebar_left_border_color = get_theme_mod( 'hovercraft_sidebar_left_border_color', '#e0e0e0' );
	$tile_background_color = get_theme_mod( 'hovercraft_tile_background_color', '#eceff1' );
	$tile_border_color = get_theme_mod( 'hovercraft_tile_border_color', '#eceff1' );
	$column_background_color = get_theme_mod( 'hovercraft_column_background_color', '#eceff1' );
	$column_border_color = get_theme_mod( 'hovercraft_column_border_color', '#eceff1' );
	$main_background_color = get_theme_mod( 'hovercraft_main_background_color', '#eceff1' );
	$main_background_color_homepage = get_theme_mod( 'hovercraft_main_background_color_homepage', '#eceff1' );
	$content_background_color = get_theme_mod( 'hovercraft_content_background_color', '#ffffff' );
	$postmain_top_background_color = get_theme_mod( 'hovercraft_postmain_top_background_color', '#eceff1' );
	$postmain_top_text_color = get_theme_mod( 'hovercraft_postmain_top_text_color', '#263238' );
	$postmain_top_link_color = get_theme_mod( 'hovercraft_postmain_top_link_color', '#5C6BC0' );
	$postmain_bottom_background_color = get_theme_mod( 'hovercraft_postmain_bottom_background_color', '#eceff1' );
	$postmain_bottom_text_color = get_theme_mod( 'hovercraft_postmain_bottom_text_color', '#263238' );
	$postmain_bottom_link_color = get_theme_mod( 'hovercraft_postmain_bottom_link_color', '#5C6BC0' );
	$premain_top_background_color = get_theme_mod( 'hovercraft_premain_top_background_color', '#eceff1' );
	$premain_top_text_color = get_theme_mod( 'hovercraft_premain_top_text_color', '#263238' );
	$premain_top_link_color = get_theme_mod( 'hovercraft_premain_top_link_color', '#5C6BC0' );
	$premain_bottom_background_color = get_theme_mod( 'hovercraft_premain_bottom_background_color', '#eceff1' );
	$premain_bottom_text_color = get_theme_mod( 'hovercraft_premain_bottom_text_color', '#263238' );
	$premain_bottom_link_color = get_theme_mod( 'hovercraft_premain_bottom_link_color', '#5C6BC0' );
    $prefooter_top_background_color = get_theme_mod( 'hovercraft_prefooter_top_background_color', '#eceff1' );
	$prefooter_top_text_color = get_theme_mod( 'hovercraft_prefooter_top_text_color', '#263238' );
	$prefooter_top_link_color = get_theme_mod( 'hovercraft_prefooter_top_link_color', '#5C6BC0' );
    $prefooter_bottom_background_color = get_theme_mod( 'hovercraft_prefooter_bottom_background_color', '#263238' );
	$prefooter_bottom_text_color = get_theme_mod( 'hovercraft_prefooter_bottom_text_color', '#ffffff' );
	$prefooter_bottom_link_color = get_theme_mod( 'hovercraft_prefooter_bottom_link_color', '#5C6BC0' );
    $footer_background_color = get_theme_mod( 'hovercraft_footer_background_color', '#ffffff' );
	$footer_text_color = get_theme_mod( 'hovercraft_footer_text_color', '#263238' );
	$footer_link_color = get_theme_mod( 'hovercraft_footer_link_color', '#5C6BC0' );
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color', '#ffffff' );
	$copyright_text_color = get_theme_mod( 'hovercraft_copyright_text_color', '#263238' );
	$copyright_link_color = get_theme_mod( 'hovercraft_copyright_link_color', '#5C6BC0' );
	$back_to_top_background_color = get_theme_mod( 'hovercraft_back_to_top_background_color', '#eceff1' );
	$back_to_top_background_hover_color = get_theme_mod( 'hovercraft_back_to_top_background_hover_color', '#eceff1' );
	$back_to_top_link_color = get_theme_mod( 'hovercraft_back_to_top_link_color', '#263238' );

	/* misc */
	$blockquote_captions = get_theme_mod( 'hovercraft_blockquote_captions', 'none' );
	$breadcrumbs = get_theme_mod( 'hovercraft_breadcrumbs', 'none' );
	$gallery_captions = get_theme_mod( 'hovercraft_gallery_captions', 'none' );
	$tiles_captions = get_theme_mod( 'hovercraft_tiles_captions', 'none' );
	$sitewide_layout = get_theme_mod( 'hovercraft_sitewide_layout', 'floating_islands' );
	$tiles_across = get_theme_mod( 'hovercraft_tiles_across', '3' );
	$columns_across = get_theme_mod( 'hovercraft_columns_across', '4' );
	$scroll_to_top = get_theme_mod( 'hovercraft_scroll_to_top', 'mobile_only' );
	$mobile_topbar_widget = get_theme_mod( 'hovercraft_mobile_topbar', 'topbar_left' );
	$mobile_preheader_widget = get_theme_mod( 'hovercraft_mobile_preheader', 'none' );
	$desktop_logo_width = get_theme_mod( 'hovercraft_desktop_logo_width', '150' );
	$mobile_logo_width = get_theme_mod( 'hovercraft_mobile_logo_width', '100' );
	$tagline_display = get_theme_mod( 'hovercraft_tagline_display', 'right_of_site_title' );
	$site_name_display_mobile = get_theme_mod( 'hovercraft_site_name_display_mobile', 'block' );
	$after_byline_padding = get_theme_mod( 'hovercraft_after_byline_padding', '0' );
	$after_byline_background_color = get_theme_mod( 'hovercraft_after_byline_background_color', '#fff8e1' );
	$after_byline_text_color = get_theme_mod( 'hovercraft_after_byline_text_color', '#263238' );
	$after_byline_link_color = get_theme_mod( 'hovercraft_after_byline_link_color', '#5C6BC0' );
	$featured_image_position = get_theme_mod( 'hovercraft_featured_image_position', 'above_title' );
	$title_divider_background_color = get_theme_mod( 'hovercraft_title_divider_background_color', '#757575' );
	$blockquote_text_color = get_theme_mod( 'hovercraft_blockquote_text_color', '#616161' );
	$blockquote_border_color = get_theme_mod( 'hovercraft_blockquote_border_color', '#757575' );
    ?>

<style type="text/css" id="hovercraft_custom_css">
<?php
$hovercraft_css_files = array(
	'/inc/css/global.php',
	'/inc/css/hero/full.php',
	'/inc/css/hero/half.php',
	'/inc/css/hero/mini.php',
	'/inc/css/header/branding.php',
	'/inc/css/header/logo.php',
	'/inc/css/header/site-title.php',
	'/inc/css/header/tagline.php',
	'/inc/css/related-posts.php',
	'/inc/css/tags.php',
	'/inc/css/social-sharing.php',
	'/inc/css/after-byline.php',
	'/inc/css/lists.php',
	'/inc/css/blockquotes.php',
	'/inc/css/tables.php',
	'/inc/css/utilities.php',
	'/inc/css/links.php',
	'/inc/css/hero/cta.php',
	'/inc/css/hero/title.php',
	'/inc/css/hero/snippet.php',
	'/inc/css/headings.php',
	'/inc/css/images-general.php',
	'/inc/css/images-featured.php',
	'/inc/css/code-snippets.php',
	'/inc/css/cta-general.php',
	'/inc/css/tiles.php',
	'/inc/css/bullets.php',
	'/inc/css/header/menu-desktop.php',
	'/inc/css/header/menu-mobile.php',
	'/inc/css/header/topbar.php',
	'/inc/css/header/preheader.php',
	'/inc/css/header/general.php',
	'/inc/css/header/basic.php',
	'/inc/css/header/cta.php',
	'/inc/css/button-secondary.php',
	'/inc/css/welcome.php',
	'/inc/css/posthero.php',
	'/inc/css/main.php',
	'/inc/css/primary.php',
	'/inc/css/byline.php',
	'/inc/css/alignment.php',
	'/inc/css/archives.php',
	'/inc/css/breadcrumbs.php',
	'/inc/css/content.php',
	'/inc/css/author-box.php',
	'/inc/css/columns.php',
	'/inc/css/captions.php',
	'/inc/css/zigzag.php',
	'/inc/css/sidebar.php',
	'/inc/css/footer-callout.php',
	'/inc/css/widgets.php',
	'/inc/css/home-premain-top.php',
	'/inc/css/home-premain-bottom.php',
	'/inc/css/home-postmain-top.php',
	'/inc/css/home-postmain-bottom.php',
	'/inc/css/prefooter-top.php',
	'/inc/css/prefooter-bottom.php',
	'/inc/css/footer-layout.php',
	'/inc/css/copyright.php',
	'/inc/css/gallery.php',
	'/inc/css/forms.php',
	'/inc/css/header/searchform.php',
	'/inc/css/comments.php',
	'/inc/css/header/search-modal.php',
	'/inc/css/back-to-top.php',
	'/inc/css/bbpress.php',
	'/inc/css/pagination.php',
	'/inc/css/woocommerce/cart.php',
	'/inc/css/woocommerce/checkout.php',
	'/inc/css/woocommerce/general.php',
	'/inc/css/woocommerce/ordering.php',
	'/inc/css/woocommerce/products.php',
	'/inc/css/woocommerce/product-details.php',
	'/inc/css/woocommerce/add-to-cart.php',
	'/inc/css/woocommerce/messages.php',
	'/inc/css/woocommerce/login.php',
	'/inc/css/woocommerce/widget-products.php',
	'/inc/css/header/cart-icon.php',
	'/inc/css/focus.php',
);

foreach ( $hovercraft_css_files as $hovercraft_css_file ) {
	$hovercraft_css_path = get_template_directory() . $hovercraft_css_file;

	if ( file_exists( $hovercraft_css_path ) ) {
		include $hovercraft_css_path;
	}
}
?>
</style>

<?php }
 
add_action( 'wp_head', 'hovercraft_generate_css' );
