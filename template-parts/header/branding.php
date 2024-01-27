<div id="branding">
	<?php if(get_theme_mod('custom_logo', '') != '') { ?>
	<div class="branding-media">
		<a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
		<img class="site-logo" src="<?php 
			$logo_default_url = wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
			$logo_alternative_url = get_theme_mod( 'hovercraft_logo_alternative' );
			if ( is_page_template( array( 
				'page-templates/full-hero-columns-no-sidebar.php',
				'page-templates/full-hero-no-sidebar.php',
				'page-templates/full-hero-sidebar.php',
				'page-templates/full-hero-tiles-no-sidebar.php',
				'page-templates/full-hero-tiles-sidebar.php'
				) ) ) {
				echo esc_url($logo_alternative_url);
			} else { 
				echo esc_url($logo_default_url); 
			} ?>" class="custom-logo" alt="<?php echo get_bloginfo( 'name' ); ?> logo" />
		</a><!-- custom-logo-link -->
	</div><!-- branding-media -->
	<?php } ?>
	<?php if (display_header_text()==true) { ?>
	<div class="branding-text">
		<a href="<?php echo esc_url( home_url() ); ?>" class="site-title-link" rel="home"><div class="site-title"><?php echo get_bloginfo( 'name' ); ?></div></a>
		<div class="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
	</div><!-- branding-text -->
	<?php } ?>
</div><!-- branding -->
