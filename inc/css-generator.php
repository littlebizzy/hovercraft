<?php

// css from customizer
function hovercraft_generate_css(){
    
    $header_half_hero_background_color = get_theme_mod( 'hovercraft_header_half_hero_background_color' );
    $header_mini_hero_background_color = get_theme_mod( 'hovercraft_header_mini_hero_background_color' );
    $header_basic_background_color = get_theme_mod( 'hovercraft_header_basic_background_color' );
    $prefooter_top_background_color = get_theme_mod( 'hovercraft_prefooter_top_background_color' );
    $prefooter_bottom_background_color = get_theme_mod( 'hovercraft_prefooter_bottom_background_color' );
    $footer_background_color = get_theme_mod( 'hovercraft_footer_background_color' );
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color' );
     
    ?>

<style type="text/css" id="hovercraft_custom_css">

<?php if( !empty($header_half_hero_background_color) ) { ?>
#header-half-hero {
	background: <?php echo $header_half_hero_background_color; ?>;
}
<?php } ?>

<?php if( !empty($header_mini_hero_background_color) ) { ?>
#header-mini-hero {
	background: <?php echo $header_mini_hero_background_color; ?>;
}
<?php } ?>

<?php if( !empty($header_basic_background_color) ) { ?>
#header-basic {
	background: <?php echo $header_basic_background_color; ?>;
}
<?php } ?>

<?php if( !empty($prefooter_top_background_color) ) { ?>
#prefooter-top {
	background: <?php echo $prefooter_top_background_color; ?>;
}
<?php } ?>

<?php if( !empty($prefooter_bottom_background_color) ) { ?>
#prefooter-bottom {
	background: <?php echo $prefooter_bottom_background_color; ?>;
}
<?php } ?>

<?php if( !empty($footer_background_color) ) { ?>
#footer {
	background: <?php echo $footer_background_color; ?>;
}
<?php } ?>

<?php if( !empty($copyright_background_color) ) { ?>
#copyright {
	background: <?php echo $copyright_background_color; ?>;
}
<?php } ?>

</style>

<?php }
 
add_action( 'wp_head', 'hovercraft_generate_css' );
