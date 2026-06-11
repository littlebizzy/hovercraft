<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// main menu toggle assets
function hovercraft_main_menu_toggle( $item_output, $item, $depth, $args ) {
	if (
		isset( $args->theme_location ) &&
		'main-menu' === $args->theme_location &&
		in_array( 'menu-item-has-children', $item->classes, true )
	) {
		$toggle = '<span class="toggle" aria-hidden="true">' . hovercraft_icon( 'chevron-down' ) . '</span>';
		$item_output = str_replace( '</a>', $toggle . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'hovercraft_main_menu_toggle', 10, 4 );
