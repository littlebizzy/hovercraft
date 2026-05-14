<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// accordion menu assets

function hovercraft_accordion_menu() {
	wp_enqueue_script(
		'hovercraft_accordion_menu',
		esc_url_raw( get_template_directory_uri() . '/assets/js/accordion-menu.js' ),
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hovercraft_accordion_menu' );

// add accordion toggles to menu items
function hovercraft_accordion_menu_toggle( $item_output, $item, $depth, $args ) {
	if (
		isset( $args->theme_location ) &&
		'mobile-menu' === $args->theme_location &&
		in_array( 'menu-item-has-children', $item->classes, true )
	) {
		$arrow = '<a href="#" class="menu-toggle"></a>';
		$item_output = str_replace( '</a>', '</a>' . $arrow, $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'hovercraft_accordion_menu_toggle', 10, 4 );
