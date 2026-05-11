<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register menu locations
function hovercraft_menu_locations() {
	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'mobile-menu' => 'Mobile Menu',
			'cta-header-primary' => 'Header Primary CTA',
			'cta-header-secondary' => 'Header Secondary CTA',
			'cta-hero-primary' => 'Hero Primary CTA',
			'cta-hero-secondary' => 'Hero Secondary CTA',
			'cta-sidebar-callout' => 'Sidebar Callout CTA',
			'cta-footer-callout' => 'Footer Callout CTA',
		)
	);
}
add_action( 'init', 'hovercraft_menu_locations' );

// render mobile menu with fallback
function hovercraft_mobile_menu_output() {
	if ( has_nav_menu( 'mobile-menu' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'mobile-menu',
				'menu_class' => 'menu',
				'container_class' => 'mobile-menu',
			)
		);
		return;
	}

	if ( has_nav_menu( 'main-menu' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'main-menu',
				'menu_class' => 'menu',
				'container_class' => 'main-menu',
			)
		);
		return;
	}

	echo '<div class="main-menu"><ul class="menu">';
	wp_list_pages(
		array(
			'title_li' => '',
		)
	);
	echo '</ul></div>';
}

// limit cta menus to one top-level link
function hovercraft_limit_cta_menu_items( $items, $args ) {
	$limited_locations = array(
		'cta-header-primary',
		'cta-header-secondary',
		'cta-hero-primary',
		'cta-hero-secondary',
		'cta-sidebar-callout',
		'cta-footer-callout',
	);

	if ( ! isset( $args->theme_location ) || ! in_array( $args->theme_location, $limited_locations, true ) ) {
		return $items;
	}

	$top_level_items = 0;

	foreach ( $items as $key => $item ) {
		if ( 0 === (int) $item->menu_item_parent ) {
			$top_level_items++;
		}

		if ( $top_level_items > 1 ) {
			unset( $items[ $key ] );
		}
	}

	return $items;
}
add_filter( 'wp_nav_menu_objects', 'hovercraft_limit_cta_menu_items', 10, 2 );

// https://hollypryce.com/custom-menu-wordpress/
// https://www.isitwp.com/limit-amount-of-menu-items/
