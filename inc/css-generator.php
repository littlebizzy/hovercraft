<?php

// css from customizer
function hovercraft_generate_css(){
 
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color' );
 
    if( !empty($copyright_background_color) ):
     
    ?>
    <style type="text/css" id="hovercraft_custom_css">
         
        #copyright {
            background:<?php echo $color_copyright_background; ?> !important;
        }
     
    </style>    
 
    <?php
 
    endif;    
}
 
add_action( 'wp_head', 'hovercraft_generate_css' );
