<?php

// css from customizer
function hovercraft_generate_css(){
 
    $prefooter_top_background_color = get_theme_mod( 'hovercraft_prefooter_top_background_color' );
    $prefooter_bottom_background_color = get_theme_mod( 'hovercraft_prefooter_bottom_background_color' );
    $footer_background_color = get_theme_mod( 'hovercraft_footer_background_color' );
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color' );
 
    // if( !empty($copyright_background_color) ):
     
    ?>
    <style type="text/css" id="hovercraft_custom_css">
        
        #prefooter-top {
            background:<?php echo $prefooter_top_background_color; ?>;
        }
        
        #prefooter-bottom {
            background:<?php echo $prefooter_bottom_background_color; ?>;
        }
        
        #footer {
            background:<?php echo $footer_background_color; ?>;
        }
        
        #copyright {
            background:<?php echo $color_copyright_background; ?>;
        }
     
    </style>    
 
    <?php
 
    // endif;    
}
 
add_action( 'wp_head', 'hovercraft_generate_css' );
