<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render widget area without titles
function hovercraft_dynamic_sidebar_without_title( $sidebar_id ) {
	add_filter( 'widget_title', '__return_false' );
	dynamic_sidebar( $sidebar_id );
	remove_filter( 'widget_title', '__return_false' );
}

// register widget area
function hovercraft_register_widget_area( $sidebar ) {
	$before_title = '<h3 class="widget-title">';
	$after_title = '</h3>';

	if ( isset( $sidebar['title_tag'] ) ) {
		$before_title = '<' . $sidebar['title_tag'] . ' class="widget-title">';
		$after_title = '</' . $sidebar['title_tag'] . '>';
	}

	register_sidebar(
		array(
			'name' => $sidebar['name'],
			'id' => $sidebar['id'],
			'before_widget' => '<div class="' . $sidebar['class'] . ' widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => $before_title,
			'after_title' => $after_title,
		)
	);
}

// label legacy widget areas in admin
function hovercraft_label_legacy_widget_areas( $sidebar_ids ) {
	global $wp_registered_sidebars;

	foreach ( $sidebar_ids as $sidebar_id ) {
		if ( ! isset( $wp_registered_sidebars[ $sidebar_id ]['name'] ) ) {
			continue;
		}

		if ( strpos( $wp_registered_sidebars[ $sidebar_id ]['name'], 'Legacy ' ) === 0 ) {
			continue;
		}

		$wp_registered_sidebars[ $sidebar_id ]['name'] = 'Legacy ' . $wp_registered_sidebars[ $sidebar_id ]['name'];
	}
}

// hide empty legacy widget areas in admin
function hovercraft_hide_empty_legacy_widget_areas( $sidebar_ids ) {
	foreach ( $sidebar_ids as $sidebar_id ) {
		if ( is_active_sidebar( $sidebar_id ) ) {
			continue;
		}

		unregister_sidebar( $sidebar_id );
	}
}

// check if legacy widget areas have content
function hovercraft_has_active_legacy_widget_areas( $sidebar_ids ) {
	foreach ( $sidebar_ids as $sidebar_id ) {
		if ( is_active_sidebar( $sidebar_id ) ) {
			return true;
		}
	}

	return false;
}

// register theme widget areas
function hovercraft_register_sidebars() {
	$sidebars = array(
		// topbar widgets
		array(
			'name' => 'Topbar Left',
			'id' => 'hovercraft_topbar_left',
			'class' => 'widget-topbar-left',
		),
		array(
			'name' => 'Topbar Right',
			'id' => 'hovercraft_topbar_right',
			'class' => 'widget-topbar-right',
		),

		// preheader widgets
		array(
			'name' => 'Preheader Left',
			'id' => 'hovercraft_preheader_left',
			'class' => 'widget-preheader-left',
		),
		array(
			'name' => 'Preheader Right',
			'id' => 'hovercraft_preheader_right',
			'class' => 'widget-preheader-right',
		),

		// hero widgets
		array(
			'name' => 'Hero Snippet',
			'id' => 'hovercraft_hero_snippet',
			'class' => 'widget-hero-snippet',
		),
		array(
			'name' => 'Hero Window',
			'id' => 'hovercraft_hero_window',
			'class' => 'widget-hero-window',
		),

		// posthero widgets
		array(
			'name' => 'Posthero (Adjust in Customizer)',
			'id' => 'hovercraft_posthero',
			'class' => 'widget-posthero',
		),

		// home widgets
		array(
			'name' => 'Home Premain Top',
			'id' => 'hovercraft_home_premain_top',
			'class' => 'widget-home-premain-top',
		),
		array(
			'name' => 'Home Premain Bottom',
			'id' => 'hovercraft_home_premain_bottom',
			'class' => 'widget-home-premain-bottom',
		),
		array(
			'name' => 'Home Postmain Top',
			'id' => 'hovercraft_home_postmain_top',
			'class' => 'widget-home-postmain-top',
		),
		array(
			'name' => 'Home Postmain Bottom',
			'id' => 'hovercraft_home_postmain_bottom',
			'class' => 'widget-home-postmain-bottom',
		),

		// sidebar widgets
		array(
			'name' => 'Sidebar',
			'id' => 'hovercraft_sidebar',
			'class' => 'widget-sidebar',
		),

		// prefooter widgets
		array(
			'name' => 'Prefooter Top',
			'id' => 'hovercraft_prefooter_top',
			'class' => 'widget-prefooter-top',
		),
		array(
			'name' => 'Prefooter Bottom',
			'id' => 'hovercraft_prefooter_bottom',
			'class' => 'widget-prefooter-bottom',
		),

		// footer widgets
		array(
			'name' => 'Footer Column #1',
			'id' => 'hovercraft_footer_one',
			'class' => 'widget-footer-one',
			'title_tag' => 'h4',
		),
		array(
			'name' => 'Footer Column #2',
			'id' => 'hovercraft_footer_two',
			'class' => 'widget-footer-two',
			'title_tag' => 'h4',
		),
		array(
			'name' => 'Footer Column #3',
			'id' => 'hovercraft_footer_three',
			'class' => 'widget-footer-three',
			'title_tag' => 'h4',
		),
		array(
			'name' => 'Footer Column #4',
			'id' => 'hovercraft_footer_four',
			'class' => 'widget-footer-four',
			'title_tag' => 'h4',
		),

		// copyright widgets
		array(
			'name' => 'Copyright',
			'id' => 'hovercraft_copyright',
			'class' => 'widget-copyright',
		),

		// postcolumns widgets
		array(
			'name' => 'Postcolumns Top',
			'id' => 'hovercraft_postcolumns_top',
			'class' => 'widget-postcolumns-top',
		),
		array(
			'name' => 'Postcolumns Bottom',
			'id' => 'hovercraft_postcolumns_bottom',
			'class' => 'widget-postcolumns-bottom',
		),

		// single post widgets
		array(
			'name' => 'After Byline',
			'id' => 'hovercraft_after_byline',
			'class' => 'widget-after-byline',
		),
		array(
			'name' => 'After Loop',
			'id' => 'hovercraft_after_loop',
			'class' => 'widget-after-loop',
		),
	);

	// register each sidebar
	foreach ( $sidebars as $sidebar ) {
		hovercraft_register_widget_area( $sidebar );
	}
}
add_action( 'widgets_init', 'hovercraft_register_sidebars' );
