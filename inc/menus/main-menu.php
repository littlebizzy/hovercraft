<?php

function hovercraft_main_menu() {
	wp_enqueue_script(
		'hovercraft_main_menu',
		get_template_directory_uri() . '/assets/js/main-menu.js',
		array('jquery'),
		'',
		true
	);
}
add_action('wp_enqueue_scripts', 'hovercraft_main_menu');
