<div class="branding-left">
	<a href="<?php echo home_url(); ?>"><div class="site-logo" style="background:url(<?php 
$hovercraft_default_logo_id = get_theme_mod( 'custom_logo' );
$logo_default_url = wp_get_attachment_image_src( $hovercraft_default_logo_id , 'full' );
$logo_alternative_url = get_theme_mod( 'hovercraft_logo_transparent' );
// $logo_alternative_url = wp_get_attachment_image_src( $hovercraft_alternative_logo_id , 'full' );
// if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } 
if (is_front_page()) { echo $logo_alternative_url; } else { echo esc_url( $logo_default_url[0]); }
?>);
background-position: center center;
background-size:contain;
background-repeat:no-repeat;"></div></a>
</div><!-- branding-left -->
