<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="branding">

<?php
// get branding content
$logo_url = hovercraft_get_header_logo_url();
$tagline = get_bloginfo( 'description' );
?>

<?php if ( $logo_url ) : ?>
	<div class="branding-media">
		<a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
			<img class="site-logo custom-logo" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> logo" />
		</a>
	</div><!-- branding-media -->
<?php endif; // end logo-url ?>

<?php if ( display_header_text() ) : ?>
	<div class="branding-text">
		<a href="<?php echo esc_url( home_url() ); ?>" class="site-title-link" rel="home">
			<div class="site-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
		</a>
		<?php if ( $tagline ) : ?>
			<div class="tagline"><?php echo esc_html( $tagline ); ?></div>
		<?php endif; // end tagline ?>
	</div><!-- branding-text -->
<?php endif; // end header text ?>

</div><!-- branding -->
