<?php

function hovercraft_google_fonts() {
	
	$default_font = get_theme_mod( 'hovercraft_default_font', 'noto_sans' );
	$default_font_clean = str_replace("_", "+", $default_font);
	$default_font_almost = ucfirst($default_font_clean);
	$default_font_final = ucwords($default_font_almost, "+");
	
	$site_name_font = get_theme_mod( 'hovercraft_site_name_font', 'noto_sans' );
	$site_name_font_clean = str_replace("_", "+", $site_name_font);
	$site_name_font_almost = ucfirst($site_name_font_clean);
	$site_name_font_final = ucwords($site_name_font_almost, "+");
	
	
	if ( empty( $site_name_font_final ) || $site_name_font_final == $default_font_final ) {
		$google_fonts_url = "https://fonts.googleapis.com/css2?family={$default_font_final}:wght@400";
	} else {
		$google_fonts_url = "https://fonts.googleapis.com/css2?family={$default_font_final}:wght@400&family={$site_name_font_final}:wght@400";
	}
	

	wp_enqueue_style( 'google-fonts', $google_fonts_url.'&display=swap', array(), null, 'all' );

}

add_action( 'wp_enqueue_scripts', 'hovercraft_google_fonts' );

// https://wordpress.org/support/topic/new-google-fonts-url-incompatible-with-wp_enqueue_style/
// https://wordpress.stackexchange.com/questions/77227/enqueue-google-web-fonts-without-messing-up-symbols-in-url
