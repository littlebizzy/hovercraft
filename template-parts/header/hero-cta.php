<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php if ( is_front_page() ) : ?>
<?php if ( has_nav_menu( 'cta-hero-primary' ) || has_nav_menu( 'cta-hero-secondary' ) ) : ?>
<div class="cta-hero-wrapper">
	<?php
	if ( has_nav_menu( 'cta-hero-primary' ) ) {
		wp_nav_menu( array(
			'theme_location'  => 'cta-hero-primary',
			'menu_class'      => 'cta',
			'container_class' => 'cta-hero-primary',
		) );
	}
	if ( has_nav_menu( 'cta-hero-secondary' ) ) {
		wp_nav_menu( array(
			'theme_location'  => 'cta-hero-secondary',
			'menu_class'      => 'cta',
			'container_class' => 'cta-hero-secondary',
		) );
	}
	?>
</div><!-- cta-hero-wrapper -->
<?php endif; ?>
<?php endif; ?>
