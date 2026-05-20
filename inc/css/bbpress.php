<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress
$hovercraft_bbpress_css_files = array(
	'/inc/css/bbpress/foundation.php',
	'/inc/css/bbpress/content.php',
	'/inc/css/bbpress/content-headings.php',
	'/inc/css/bbpress/navigation.php',
	'/inc/css/bbpress/forms.php',
	'/inc/css/bbpress/editor.php',
	'/inc/css/bbpress/users.php',
	'/inc/css/bbpress/widgets-responsive.php',
);

foreach ( $hovercraft_bbpress_css_files as $hovercraft_bbpress_css_file ) {
	$hovercraft_bbpress_css_path = get_template_directory() . $hovercraft_bbpress_css_file;

	if ( file_exists( $hovercraft_bbpress_css_path ) ) {
		include $hovercraft_bbpress_css_path;
	}
}
