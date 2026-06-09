<?php

// get logo
$hovercraft_logo_url = hovercraft_get_header_logo_url();
$hovercraft_site_name = get_bloginfo( 'name' );
$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
$hovercraft_title_classes = array( 'entry-title' );

if ( $h1_divider_display === 'everywhere_possible' || $h1_divider_display === 'everywhere_except_heros' ) {
	$hovercraft_title_classes[] = 'divide';
}

?>
<div class="checkout-title-row">
	<h1 class="<?php echo esc_attr( implode( ' ', $hovercraft_title_classes ) ); ?>"><?php echo esc_html( get_the_title() ); ?></h1>

	<?php if ( $hovercraft_logo_url ) : ?>
		<a href="<?php echo esc_url( home_url() ); ?>" class="checkout-logo-link" rel="home" aria-label="<?php echo esc_attr( $hovercraft_site_name ); ?>">
			<img class="site-logo checkout-logo custom-logo" src="<?php echo esc_url( $hovercraft_logo_url ); ?>" alt="<?php echo esc_attr( $hovercraft_site_name ); ?> logo" />
		</a>
	<?php endif; ?>
</div><!-- checkout-title-row -->
