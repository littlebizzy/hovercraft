<?php

function hovercraft_customizer( $wp_customize ) {
	// load google fonts array (via functions.php)
	$hovercraft_google_fonts_array = hovercraft_google_fonts_array();

	// load google fonts multilingual array (via functions.php)
	$hovercraft_google_fonts_multilingual_array = hovercraft_google_fonts_multilingual_array();

	// load google fonts helper function (via functions.php)
	$hovercraft_available_fonts = hovercraft_available_fonts();

    // remove header text color control
    $wp_customize->remove_control('header_textcolor');

    // hero media section
    $wp_customize->get_section('header_image')->title = __('Hero Media', 'hovercraft');

    // homepage section
    $wp_customize->get_section('static_front_page')->title = __('Homepage', 'hovercraft');
    $wp_customize->get_section('static_front_page')->priority = 31;


	// load customizer sections
	require get_template_directory() . '/inc/customizer/sections/general.php';
	require get_template_directory() . '/inc/customizer/sections/seo.php';
	require get_template_directory() . '/inc/customizer/sections/widget-areas.php';
	require get_template_directory() . '/inc/customizer/sections/category-layouts.php';
	require get_template_directory() . '/inc/customizer/sections/page-layouts.php';
	require get_template_directory() . '/inc/customizer/sections/blog.php';
	require get_template_directory() . '/inc/customizer/sections/fonts.php';
	require get_template_directory() . '/inc/customizer/sections/sidebar.php';
	require get_template_directory() . '/inc/customizer/sections/footer.php';
	require get_template_directory() . '/inc/customizer/sections/effects.php';
	require get_template_directory() . '/inc/customizer/sections/link-styling.php';
	require get_template_directory() . '/inc/customizer/sections/icons.php';
	require get_template_directory() . '/inc/customizer/sections/hero-styling.php';
	require get_template_directory() . '/inc/customizer/sections/license-key.php';

// end function hovercraft_customizer
}

add_action( 'customize_register', 'hovercraft_customizer' );

// sanitize select input
function hovercraft_sanitize_select( $input, $setting ) {
    $input = sanitize_key( $input );
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return array_key_exists( $input, $choices ) ? $input : $setting->default;
}

// sanitize radio input
function hovercraft_sanitize_radio( $input, $setting ) {
    $input = sanitize_key( $input );
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return array_key_exists( $input, $choices ) ? $input : $setting->default;
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

// Ref: ChatGPT
// Ref: https://themeshaper.com/2013/04/29/validation-sanitization-in-customizer/
// Ref: https://divpusher.com/blog/wordpress-customizer-sanitization-examples/
// Ref: https://wordpress.stackexchange.com/questions/225825/customizer-sanitize-callback-for-input-type-number
// Ref: https://core.trac.wordpress.org/ticket/24528
// Ref: https://wp-a2z.org/oik_api/twentytwenty_customizesanitize_checkbox/
// Ref: https://wordpress.stackexchange.com/questions/261969/how-to-rename-and-rearrange-multiple-sections-in-the-customizer
// Ref: https://wphelp.blog/how-to-remove-sections-from-wordpress-customizer/
// Ref: https://stackoverflow.com/questions/7073672/how-to-load-return-array-from-a-php-file
// Ref: https://stackoverflow.com/questions/53613871/how-to-check-whether-checkox-is-checked-in-wordpress-customizer
