<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// enqueue admin ui helpers
function hovercraft_admin_meta_ui_assets( $hook ) {

	if ( ! in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
		return;
	}

	wp_enqueue_style(
		'hovercraft-admin-meta-ui',
		get_template_directory_uri() . '/assets/css/admin-meta-collapse.css',
		array(),
		HOVERCRAFT_VERSION
	);

	wp_enqueue_script(
		'hovercraft-admin-meta-ui',
		get_template_directory_uri() . '/assets/js/admin-meta-collapse.js',
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'admin_enqueue_scripts', 'hovercraft_admin_meta_ui_assets' );
