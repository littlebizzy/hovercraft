<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register customizer panels and sections
function hovercraft_customizer( $wp_customize ) {
	// load google fonts array (via functions.php)
	$hovercraft_google_fonts_array = hovercraft_google_fonts_array();

	// load google fonts multilingual array (via functions.php)
	$hovercraft_google_fonts_multilingual_array = hovercraft_google_fonts_multilingual_array();

	// load google fonts helper function (via functions.php)
	$hovercraft_available_fonts = hovercraft_available_fonts();

	// remove header text color control
	$wp_customize->remove_control( 'header_textcolor' );

	// hero media section
	$wp_customize->get_section( 'header_image' )->title = __( 'Hero Media', 'hovercraft' );

	// homepage section
	$wp_customize->get_section( 'static_front_page' )->title = __( 'Homepage', 'hovercraft' );
	$wp_customize->get_section( 'static_front_page' )->priority = 31;

	// load customizer sections
	require get_template_directory() . '/inc/customizer/general.php';
	require get_template_directory() . '/inc/customizer/seo.php';
	require get_template_directory() . '/inc/customizer/widget-areas.php';
	require get_template_directory() . '/inc/customizer/category-layouts.php';
	require get_template_directory() . '/inc/customizer/homepage.php';
	require get_template_directory() . '/inc/customizer/page-layouts.php';
	require get_template_directory() . '/inc/customizer/blog.php';
	require get_template_directory() . '/inc/customizer/fonts/fonts.php';
	require get_template_directory() . '/inc/customizer/colors/colors.php';
	require get_template_directory() . '/inc/customizer/sidebar/sidebar.php';
	require get_template_directory() . '/inc/customizer/footer/footer.php';
	require get_template_directory() . '/inc/customizer/effects.php';
	require get_template_directory() . '/inc/customizer/link-styling.php';
	require get_template_directory() . '/inc/customizer/icons.php';
	require get_template_directory() . '/inc/customizer/hero/hero-styling.php';
	require get_template_directory() . '/inc/customizer/misc/license-key.php';

// end function hovercraft_customizer
}

add_action( 'customize_register', 'hovercraft_customizer' );

// sanitize select input
function hovercraft_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;

	if ( array_key_exists( $input, $choices ) ) {
		return $input;
	}

	return $setting->default;
}

// sanitize radio input
function hovercraft_sanitize_radio( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;

	if ( array_key_exists( $input, $choices ) ) {
		return $input;
	}

	return $setting->default;
}

// sanitize checkbox input
function hovercraft_sanitize_checkbox( $checked ) {
	return isset( $checked ) && true === $checked;
}

// sanitize float input
function hovercraft_sanitize_float( $input ) {
	return filter_var( $input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
}

// sanitize text input
function hovercraft_sanitize_text( $input ) {
	return sanitize_text_field( $input );
}
