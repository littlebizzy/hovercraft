<div id="branding">
	<?php if(get_theme_mod('custom_logo', '') != '') { ?>
	<div class="branding-left">
		<a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
		<img class="site-logo" src="<?php 
			$logo_default_url = wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
			$logo_alternative_url = get_theme_mod( 'hovercraft_logo_alternative' );
			if ( is_page_template( array( 
				'page-templates/template-full-hero.php',
				'page-templates/template-full-hero-tiles.php'
				) ) ) {
				echo esc_url($logo_alternative_url);
			} else { 
				echo esc_url($logo_default_url); 
			} ?>" class="custom-logo" alt="<?php echo get_bloginfo( 'name' ); ?>" />
		</a><!-- custom-logo-link -->
	</div><!-- branding-left -->
	<?php } ?>
	<?php if (display_header_text()==true) { ?>
	<div class="branding-right">
		<a href="<?php echo esc_url( home_url() ); ?>" class="site-name-link" rel="home"><div class="site-name"><?php echo get_bloginfo( 'name' ); ?></div></a>
		<div class="site-tagline"><?php echo get_bloginfo( 'description' ); ?></div>
	</div><!-- branding-right -->
	<?php } ?>
</div><!-- branding -->
