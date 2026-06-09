<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get logo
$hovercraft_logo_url = hovercraft_get_header_logo_url();
$hovercraft_site_name = get_bloginfo( 'name' );

if ( ! $hovercraft_logo_url ) {
	return;
}

?>
<div class="checkout-branding">
	<a href="<?php echo esc_url( home_url() ); ?>" class="checkout-logo-link" rel="home" aria-label="<?php echo esc_attr( $hovercraft_site_name ); ?>">
		<img class="site-logo checkout-logo custom-logo" src="<?php echo esc_url( $hovercraft_logo_url ); ?>" alt="<?php echo esc_attr( $hovercraft_site_name ); ?> logo" />
	</a>
</div><!-- checkout-branding -->
