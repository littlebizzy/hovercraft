<?php

// topbar primary widgets
function hovercraft_topbar_primary() {

	register_sidebar( array(
		'name'          => 'Topbar Primary',
		'id'            => 'hovercraft_topbar_primary',
		'before_widget' => '<div class="widgets-topbar-primary-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_topbar_primary' );


// topbar secondary widgets
function hovercraft_topbar_secondary() {

	register_sidebar( array(
		'name'          => 'Topbar Secondary',
		'id'            => 'hovercraft_topbar_secondary',
		'before_widget' => '<div class="widgets-topbar-secondary-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_topbar_secondary' );


// sidebar widgets
function hovercraft_sidebar() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'hovercraft_sidebar',
		'before_widget' => '<div class="widgets-sidebar-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_sidebar' );


// prefooter top widgets
function hovercraft_prefooter_top() {

	register_sidebar( array(
		'name'          => 'Prefooter Top',
		'id'            => 'hovercraft_prefooter_top',
		'before_widget' => '<div class="widgets-prefooter-top-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_prefooter_top' );


// prefooter bottom widgets
function hovercraft_prefooter_bottom() {

	register_sidebar( array(
		'name'          => 'Prefooter Bottom',
		'id'            => 'hovercraft_prefooter_bottom',
		'before_widget' => '<div class="widgets-prefooter-bottom-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_prefooter_bottom' );


// footer one widgets
function hovercraft_footer_one() {

	register_sidebar( array(
		'name'          => 'Footer #1',
		'id'            => 'hovercraft_footer_one',
		'before_widget' => '<div class="widgets-footer-one-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_footer_one' );


// footer two widgets
function hovercraft_footer_two() {

	register_sidebar( array(
		'name'          => 'Footer #2',
		'id'            => 'hovercraft_footer_two',
		'before_widget' => '<div class="widgets-footer-two-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_footer_two' );


// footer three widgets
function hovercraft_footer_three() {

	register_sidebar( array(
		'name'          => 'Footer #3',
		'id'            => 'hovercraft_footer_three',
		'before_widget' => '<div class="widgets-footer-three-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_footer_three' );


// footer four widgets
function hovercraft_footer_four() {

	register_sidebar( array(
		'name'          => 'Footer #4',
		'id'            => 'hovercraft_footer_four',
		'before_widget' => '<div class="widgets-footer-four-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_footer_four' );


// copyright widgets
function hovercraft_copyright() {

	register_sidebar( array(
		'name'          => 'Copyright',
		'id'            => 'hovercraft_copyright',
		'before_widget' => '<div class="widgets-copyright-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_copyright' );
