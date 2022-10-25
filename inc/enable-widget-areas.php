<?php

// enable sidebar widgets
function hovercraft_register_sidebar() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'hovercraft_sidebar',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_sidebar' );


// enable copyright widget
function hovercraft_register_copyright() {

	register_sidebar( array(
		'name'          => 'Copyright',
		'id'            => 'hovercraft_copyright',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_copyright' );

// enable footer one widget
function hovercraft_register_footer_one() {

	register_sidebar( array(
		'name'          => 'Footer #1',
		'id'            => 'hovercraft_footer_one',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_one' );


// enable footer two widget
function hovercraft_register_footer_two() {

	register_sidebar( array(
		'name'          => 'Footer #2',
		'id'            => 'hovercraft_footer_two',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_two' );


// enable footer three widget
function hovercraft_register_footer_three() {

	register_sidebar( array(
		'name'          => 'Footer #3',
		'id'            => 'hovercraft_footer_three',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_three' );


// enable footer four widget
function hovercraft_register_footer_four() {

	register_sidebar( array(
		'name'          => 'Footer #4',
		'id'            => 'hovercraft_footer_four',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_register_footer_four' );


// topbar widget (major)
function hovercraft_widget_topbar_major() {

	register_sidebar( array(
		'name'          => 'Topbar (Major)',
		'id'            => 'hovercraft_topbar_major',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_widget_topbar_major' );

// topbar widget (minor)
function hovercraft_widget_topbar_minor() {

	register_sidebar( array(
		'name'          => 'Topbar (Minor)',
		'id'            => 'hovercraft_topbar_minor',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_widget_topbar_minor' );

