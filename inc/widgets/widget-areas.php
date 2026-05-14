<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
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

		// tiles widgets
		array(
			'name' => 'Tiles',
			'id' => 'hovercraft_tiles',
			'class' => 'tile',
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
}
add_action( 'widgets_init', 'hovercraft_register_sidebars' );
