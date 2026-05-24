<?php

// limit output to front page
if ( ! is_front_page() ) {
	return;
}

// check hero cta menus
$hovercraft_hero_primary_cta_active = has_nav_menu( 'cta-hero-primary' );
$hovercraft_hero_secondary_cta_active = has_nav_menu( 'cta-hero-secondary' );
$hovercraft_has_hero_cta_menus = $hovercraft_hero_primary_cta_active || $hovercraft_hero_secondary_cta_active;

// skip empty hero cta menus
if ( ! $hovercraft_has_hero_cta_menus ) {
	return;
}

// render hero cta menus
?>
<div class="cta-hero-wrapper">
	<?php
	// render primary hero cta menu
	if ( $hovercraft_hero_primary_cta_active ) {
		wp_nav_menu(
			array(
				'theme_location' => 'cta-hero-primary',
				'menu_class' => 'cta',
				'container_class' => 'cta-hero-primary',
			)
		);
	}

	// render secondary hero cta menu
	if ( $hovercraft_hero_secondary_cta_active ) {
		wp_nav_menu(
			array(
				'theme_location' => 'cta-hero-secondary',
				'menu_class' => 'cta',
				'container_class' => 'cta-hero-secondary',
			)
		);
	}
	?>
</div><!-- cta-hero-wrapper -->
