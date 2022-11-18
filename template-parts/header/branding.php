<div id="branding">
	<div class="branding-left">
	<?php if(get_theme_mod('custom_logo', '') != '') { ?>
		<a href="<?php echo home_url(); ?>" class="custom-logo-link" rel="home">
		<img class="site-logo" src="<?php 
			// $logo_default_id = get_theme_mod( 'custom_logo' );
			// $logo_default_url = wp_get_attachment_image_src( $logo_default_id , 'full' );
			$logo_default_url = wp_get_attachment_url( get_theme_mod( 'custom_logo' );
			$logo_alternative_url = get_theme_mod( 'hovercraft_logo_alternative' );
			if ( is_page_template( array( 
				'page-templates/template-page-splash.php', 
				'page-templates/template-page-half-splash.php',
				'page-templates/template-page-mini-splash.php'
				) ) ) {
				echo esc_url($logo_alternative_url);
			} else { 
				echo esc_url($logo_default_url[0]); 
			} ?>);
		?>" class="custom-logo" alt="<?php echo get_bloginfo('name'); ?>" />
		</a><!-- custom-logo-link -->
	<?php } ?>
	</div><!-- branding-left -->
	<?php if (display_header_text()==true) { ?>
	<div class="branding-right">
		<div class="site-name"><?php echo get_bloginfo('name'); ?></div>
		<div class="site-tagline"><?php echo get_bloginfo('description'); ?></div>
	</div><!-- branding-right -->
	<?php } ?>
</div><!-- branding -->
