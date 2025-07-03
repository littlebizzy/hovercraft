<?php

function hovercraft_main_menu_toggle($item_output, $item, $depth, $args) {
	if (
		$args->theme_location === 'main-menu' &&
		in_array('menu-item-has-children', $item->classes, true)
	) {
		$item_output .= '<a href="#" class="menu-toggle" aria-hidden="true"></a>';
	}
	return $item_output;
}

add_filter('walker_nav_menu_start_el', 'hovercraft_main_menu_toggle', 10, 4);
