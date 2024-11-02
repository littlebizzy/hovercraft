<?php

function hovercraft_google_fonts() {

	// new
    $first_font_family = get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' );
    $first_font_family_clean = str_replace("_", "+", $first_font_family);
    $first_font_family_almost = ucfirst($first_font_family_clean);
    $first_font_family_final = ucwords($first_font_family_almost, "+");

    $second_font_family = get_theme_mod( 'hovercraft_second_font_family', 'open_sans' );
    $second_font_family_clean = str_replace("_", "+", $second_font_family);
    $second_font_family_almost = ucfirst($second_font_family_clean);
    $second_font_family_final = ucwords($second_font_family_almost, "+");

    $third_font_family = get_theme_mod( 'hovercraft_third_font_family', 'roboto' );
    $third_font_family_clean = str_replace("_", "+", $third_font_family);
    $third_font_family_almost = ucfirst($third_font_family_clean);
    $third_font_family_final = ucwords($third_font_family_almost, "+");

	// old
	$default_font = get_theme_mod( 'hovercraft_default_font', 'noto_sans' );
	$default_font_clean = str_replace("_", "+", $default_font);
	$default_font_almost = ucfirst($default_font_clean);
	$default_font_final = ucwords($default_font_almost, "+");
	
	$alternative_font = get_theme_mod( 'hovercraft_alternative_font', 'noto_sans' );
	$alternative_font_clean = str_replace("_", "+", $alternative_font);
	$alternative_font_almost = ucfirst($alternative_font_clean);
	$alternative_font_final = ucwords($alternative_font_almost, "+");
	
	$site_name_font = get_theme_mod( 'hovercraft_site_name_font', 'noto_sans' );
	$site_name_font_clean = str_replace("_", "+", $site_name_font);
	$site_name_font_almost = ucfirst($site_name_font_clean);
	$site_name_font_final = ucwords($site_name_font_almost, "+");
	
	
	if ( empty( $site_name_font_final ) || $site_name_font_final == $default_font_final ) {
		$google_fonts_url = "https://fonts.googleapis.com/css2?family={$default_font_final}:ital,wght@0,400;0,600;0,700;1,400";
	} else {
		$google_fonts_url = "https://fonts.googleapis.com/css2?family={$default_font_final}:ital,wght@0,400;0,600;0,700;1,400&family={$site_name_font_final}:wght@400";
	}
	

	wp_enqueue_style( 'google-fonts', $google_fonts_url.'&display=swap', array(), null, 'all' );

}

add_action( 'wp_enqueue_scripts', 'hovercraft_google_fonts' );

// https://wordpress.org/support/topic/new-google-fonts-url-incompatible-with-wp_enqueue_style/
// https://wordpress.stackexchange.com/questions/77227/enqueue-google-web-fonts-without-messing-up-symbols-in-url

/* 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=<?php $default_font_family = get_theme_mod( 'hovercraft_default_font', 'noto_sans' );
	echo ucwords(str_replace("_", "+", $default_font_family), "+"); ?>:ital,wght@0,400;0,600;0,700;1,400&display=swap">
	
	<?php 
	$wp_locale = get_locale();
	if (strpos($wp_locale, 'en') === false) { ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+<?php
		$wp_locale = get_locale();
		$wp_locale_trimmed = strstr($wp_locale, '_');
		$wp_locale_final = str_replace('_', '', $wp_locale_trimmed);
		echo rtrim($wp_locale_final); ?>:ital,wght@0,400;0,600;0,700;1,400&display=swap">
	<?php } ?>
*/
