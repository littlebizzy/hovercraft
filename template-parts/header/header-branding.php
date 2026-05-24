<?php

// get branding content
$hovercraft_logo_url = hovercraft_get_header_logo_url();
$hovercraft_site_name = get_bloginfo( 'name' );
$hovercraft_tagline = get_bloginfo( 'description' );
$hovercraft_show_header_text = display_header_text();

?>
<div id="branding">

	<?php // render branding logo ?>
	<?php if ( $hovercraft_logo_url ) : ?>
		<div class="branding-media">
			<a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
				<img class="site-logo custom-logo" src="<?php echo esc_url( $hovercraft_logo_url ); ?>" alt="<?php echo esc_attr( $hovercraft_site_name ); ?> logo" />
			</a>
		</div><!-- branding-media -->
	<?php endif; // end branding logo ?>

	<?php // render branding text ?>
	<?php if ( $hovercraft_show_header_text ) : ?>
		<div class="branding-text">
			<a href="<?php echo esc_url( home_url() ); ?>" class="site-title-link" rel="home">
				<div class="site-title"><?php echo esc_html( $hovercraft_site_name ); ?></div>
			</a>

			<?php // render tagline ?>
			<?php if ( $hovercraft_tagline ) : ?>
				<div class="tagline"><?php echo esc_html( $hovercraft_tagline ); ?></div>
			<?php endif; // end tagline ?>
		</div><!-- branding-text -->
	<?php endif; // end branding text ?>

</div><!-- branding -->
