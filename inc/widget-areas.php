<?php

// topbar primary widgets
function hovercraft_topbar_primary() {

	register_sidebar( array(
		'name'          => 'Topbar Primary',
		'id'            => 'hovercraft_topbar_primary',
		'before_widget' => '<div class="widget-topbar-primary widget-wrapper">',
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
		'before_widget' => '<div class="widget-topbar-secondary widget-wrapper">',
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
		'before_widget' => '<div class="widget-sidebar widget-wrapper">',
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
		'before_widget' => '<div class="widget-prefooter-top widget-wrapper">',
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
		'before_widget' => '<div class="widget-prefooter-bottom widget-wrapper">',
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
		'before_widget' => '<div class="widget-footer-one widget-wrapper">',
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
		'before_widget' => '<div class="widget-footer-two widget-wrapper">',
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
		'before_widget' => '<div class="widget-footer-three widget-wrapper">',
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
		'before_widget' => '<div class="widget-footer-four widget-wrapper">',
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
		'before_widget' => '<div class="widget-copyright widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_copyright' );


// tile one widgets
function hovercraft_tile_one() {

	register_sidebar( array(
		'name'          => 'Tile #1',
		'id'            => 'hovercraft_tile_one',
		'before_widget' => '<div class="widget-tile-one widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_one' );


// tile two widgets
function hovercraft_tile_two() {

	register_sidebar( array(
		'name'          => 'Tile #2',
		'id'            => 'hovercraft_tile_two',
		'before_widget' => '<div class="widget-tile-two widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_two' );


// tile three widgets
function hovercraft_tile_three() {

	register_sidebar( array(
		'name'          => 'Tile #3',
		'id'            => 'hovercraft_tile_three',
		'before_widget' => '<div class="widget-tile-three widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_three' );


// tile four widgets
function hovercraft_tile_four() {

	register_sidebar( array(
		'name'          => 'Tile #4',
		'id'            => 'hovercraft_tile_four',
		'before_widget' => '<div class="widget-tile-four widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_four' );


// tile five widgets
function hovercraft_tile_five() {

	register_sidebar( array(
		'name'          => 'Tile #5',
		'id'            => 'hovercraft_tile_five',
		'before_widget' => '<div class="widget-tile-five widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_five' );


// tile six widgets
function hovercraft_tile_six() {

	register_sidebar( array(
		'name'          => 'Tile #6',
		'id'            => 'hovercraft_tile_six',
		'before_widget' => '<div class="widget-tile-six widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_six' );


// tile seven widgets
function hovercraft_tile_seven() {

	register_sidebar( array(
		'name'          => 'Tile #7',
		'id'            => 'hovercraft_tile_seven',
		'before_widget' => '<div class="widget-tile-seven widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_seven' );


// tile eight widgets
function hovercraft_tile_eight() {

	register_sidebar( array(
		'name'          => 'Tile #8',
		'id'            => 'hovercraft_tile_eight',
		'before_widget' => '<div class="widget-tile-eight widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_eight' );


// tile nine widgets
function hovercraft_tile_nine() {

	register_sidebar( array(
		'name'          => 'Tile #9',
		'id'            => 'hovercraft_tile_nine',
		'before_widget' => '<div class="widget-tile-nine widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_nine' );


// tile ten widgets
function hovercraft_tile_ten() {

	register_sidebar( array(
		'name'          => 'Tile #10',
		'id'            => 'hovercraft_tile_ten',
		'before_widget' => '<div class="widget-tile-ten widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_ten' );


// tile eleven widgets
function hovercraft_tile_eleven() {

	register_sidebar( array(
		'name'          => 'Tile #11',
		'id'            => 'hovercraft_tile_eleven',
		'before_widget' => '<div class="widget-tile-eleven widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_eleven' );


// tile twelve widgets
function hovercraft_tile_twelve() {

	register_sidebar( array(
		'name'          => 'Tile #12',
		'id'            => 'hovercraft_tile_twelve',
		'before_widget' => '<div class="widget-tile-twelve widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_tile_twelve' );
