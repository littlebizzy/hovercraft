<?php

// topbar left widgets
function hovercraft_topbar_left() {

	register_sidebar( array(
		'name'          => 'Topbar Left',
		'id'            => 'hovercraft_topbar_left',
		'before_widget' => '<div class="widget-topbar-left widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_topbar_left' );


// topbar right widgets
function hovercraft_topbar_right() {

	register_sidebar( array(
		'name'          => 'Topbar Right',
		'id'            => 'hovercraft_topbar_right',
		'before_widget' => '<div class="widget-topbar-right widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_topbar_right' );


// preheader left widgets
function hovercraft_preheader_left() {

	register_sidebar( array(
		'name'          => 'Preheader Left',
		'id'            => 'hovercraft_preheader_left',
		'before_widget' => '<div class="widget-preheader-left widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_preheader_left' );


// preheader right widgets
function hovercraft_preheader_right() {

	register_sidebar( array(
		'name'          => 'Preheader Right',
		'id'            => 'hovercraft_preheader_right',
		'before_widget' => '<div class="widget-preheader-right widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_preheader_right' );


// hero snippet widgets
function hovercraft_hero_snippet() {

	register_sidebar( array(
		'name'          => 'Hero Snippet',
		'id'            => 'hovercraft_hero_snippet',
		'before_widget' => '<div class="widget-hero-snippet widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_hero_snippet' );

// hero window widgets
function hovercraft_hero_window() {

	register_sidebar( array(
		'name'          => 'Hero Window',
		'id'            => 'hovercraft_hero_window',
		'before_widget' => '<div class="widget-hero-window widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_hero_window' );

// posthero widgets
function hovercraft_posthero() {

	register_sidebar( array(
		'name'          => 'Posthero (Adjust in Customizer)',
		'id'            => 'hovercraft_posthero',
		'before_widget' => '<div class="widget-posthero widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_posthero' );


// home premain top widgets
function hovercraft_home_premain_top() {

	register_sidebar( array(
		'name'          => 'Home Premain Top',
		'id'            => 'hovercraft_home_premain_top',
		'before_widget' => '<div class="widget-home-premain-top widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_home_premain_top' );


// home premain bottom widgets
function hovercraft_home_premain_bottom() {

	register_sidebar( array(
		'name'          => 'Home Premain Bottom',
		'id'            => 'hovercraft_home_premain_bottom',
		'before_widget' => '<div class="widget-home-premain-bottom widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_home_premain_bottom' );


// home postmain top widgets
function hovercraft_home_postmain_top() {

	register_sidebar( array(
		'name'          => 'Home Postmain Top',
		'id'            => 'hovercraft_home_postmain_top',
		'before_widget' => '<div class="widget-home-postmain-top widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_home_postmain_top' );


// home postmain bottom widgets
function hovercraft_home_postmain_bottom() {

	register_sidebar( array(
		'name'          => 'Home Postmain Bottom',
		'id'            => 'hovercraft_home_postmain_bottom',
		'before_widget' => '<div class="widget-home-postmain-bottom widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_home_postmain_bottom' );


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
		'name'          => 'Footer Column #1',
		'id'            => 'hovercraft_footer_one',
		'before_widget' => '<div class="widget-footer-one widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'hovercraft_footer_one' );


// footer two widgets
function hovercraft_footer_two() {

	register_sidebar( array(
		'name'          => 'Footer Column #2',
		'id'            => 'hovercraft_footer_two',
		'before_widget' => '<div class="widget-footer-two widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'hovercraft_footer_two' );


// footer three widgets
function hovercraft_footer_three() {

	register_sidebar( array(
		'name'          => 'Footer Column #3',
		'id'            => 'hovercraft_footer_three',
		'before_widget' => '<div class="widget-footer-three widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'hovercraft_footer_three' );


// footer four widgets
function hovercraft_footer_four() {

	register_sidebar( array(
		'name'          => 'Footer Column #4',
		'id'            => 'hovercraft_footer_four',
		'before_widget' => '<div class="widget-footer-four widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
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


// column one widgets
function hovercraft_column_one() {

	register_sidebar( array(
		'name'          => 'Column #1',
		'id'            => 'hovercraft_column_one',
		'before_widget' => '<div class="widget-column-one widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_column_one' );


// column two widgets
function hovercraft_column_two() {

	register_sidebar( array(
		'name'          => 'Column #2',
		'id'            => 'hovercraft_column_two',
		'before_widget' => '<div class="widget-column-two widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_column_two' );


// column three widgets
function hovercraft_column_three() {

	register_sidebar( array(
		'name'          => 'Column #3',
		'id'            => 'hovercraft_column_three',
		'before_widget' => '<div class="widget-column-three widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_column_three' );

// column four widgets
function hovercraft_column_four() {

	register_sidebar( array(
		'name'          => 'Column #4',
		'id'            => 'hovercraft_column_four',
		'before_widget' => '<div class="widget-column-four widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_column_four' );

// column five widgets
function hovercraft_column_five() {

	register_sidebar( array(
		'name'          => 'Column #5',
		'id'            => 'hovercraft_column_five',
		'before_widget' => '<div class="widget-column-five widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_column_five' );

// postcolumns top widgets
function hovercraft_postcolumns_top() {

	register_sidebar( array(
		'name'          => 'Postcolumns Top',
		'id'            => 'hovercraft_postcolumns_top',
		'before_widget' => '<div class="widget-postcolumns-top widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_postcolumns_top' );

// postcolumns bottom widgets
function hovercraft_postcolumns_bottom() {

	register_sidebar( array(
		'name'          => 'Postcolumns Bottom',
		'id'            => 'hovercraft_postcolumns_bottom',
		'before_widget' => '<div class="widget-postcolumns-bottom widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_postcolumns_bottom' );

// single post after byline
function hovercraft_after_byline() {

	register_sidebar( array(
		'name'          => 'After Byline',
		'id'            => 'hovercraft_after_byline',
		'before_widget' => '<div class="widget-after-byline widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_after_byline' );

// single post after loop
function hovercraft_after_loop() {

	register_sidebar( array(
		'name'          => 'After Loop',
		'id'            => 'hovercraft_after_loop',
		'before_widget' => '<div class="widget-after-loop widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hovercraft_after_loop' );
