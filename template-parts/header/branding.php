<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="branding">

<?php
// get logo url
$logo_url = hovercraft_get_header_logo_url();

// check if a logo should be rendered
$has_logo = false;

if ( $logo_url ) {
	$has_logo = true;
}
?>

<?php if ( $has_logo ) : ?>
	<div class="branding-media">
		<a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
			<img class="site-logo custom-logo" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> logo" />
		</a>
	</div><!-- branding-media -->
<?php endif; // end has-logo ?>

<?php if ( display_header_text() ) : ?>
	<div class="branding-text">
		<a href="<?php echo esc_url( home_url() ); ?>" class="site-title-link" rel="home">
			<div class="site-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
		</a>
		<div class="tagline"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></div>
	</div><!-- branding-text -->
<?php endif; // end header text ?>

</div><!-- branding -->
