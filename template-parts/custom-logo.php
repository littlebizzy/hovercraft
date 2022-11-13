<div class="branding-left">
<a href="<?php echo home_url(); ?>"><div class="site-logo" style="background:url(<?php 
$hovercraft_default_logo_id = get_theme_mod( 'custom_logo' );
$logo_default_url = wp_get_attachment_image_src( $hovercraft_default_logo_id , 'full' );
$logo_alternative_url = get_theme_mod( 'hovercraft_logo_transparent' );
if (is_page_template('page-templates/template-page-splash.php')) {
	echo $logo_alternative_url;
} else { 
	echo esc_url($logo_default_url[0]); 
} ?>);
background-position: center center;
background-size:contain;
background-repeat:no-repeat;"></div></a>
</div><!-- branding-left -->
