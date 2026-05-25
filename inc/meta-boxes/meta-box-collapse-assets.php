<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// enqueue meta box collapse assets
function hovercraft_enqueue_meta_box_collapse_assets( $hook ) {
	// exit if this is not a post editor screen
	if ( ! in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
		return;
	}

	wp_enqueue_style(
		'hovercraft_meta_box_collapse',
		get_template_directory_uri() . '/assets/css/admin-meta-collapse.css',
		array(),
		HOVERCRAFT_VERSION
	);

	wp_enqueue_script(
		'hovercraft_meta_box_collapse',
		get_template_directory_uri() . '/assets/js/admin-meta-collapse.js',
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'admin_enqueue_scripts', 'hovercraft_enqueue_meta_box_collapse_assets' );
