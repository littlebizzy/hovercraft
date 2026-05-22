<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get header icon style
function hovercraft_get_header_icon_style() {
	return get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
}

// render header search icon
function hovercraft_header_search_icon() {
	$header_icon_style = hovercraft_get_header_icon_style();
	?>
	<div class="search-icon-wrapper">
		<?php if ( 'material_icons_classic' === $header_icon_style ) : ?>
			<i class="material-icons search">search</i>
		<?php elseif ( 'font_awesome_version_6' === $header_icon_style ) : ?>
			<i class="fas fa-search"></i>
		<?php endif; // end header icon style ?>
	</div><!-- search-icon-wrapper -->
	<?php
}

// render header cart icon
function hovercraft_header_cart_icon() {
	if ( ! class_exists( 'WooCommerce' ) || ! function_exists( 'WC' ) || ! WC()->cart ) {
		return;
	}

	$header_icon_style = hovercraft_get_header_icon_style();
	?>
	<div class="cart-icon-wrapper">
		<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
			<?php if ( 'material_icons_classic' === $header_icon_style ) : ?>
				<i class="material-icons shopping_cart">shopping_cart</i>
			<?php elseif ( 'font_awesome_version_6' === $header_icon_style ) : ?>
				<i class="fas fa-shopping-cart"></i>
			<?php endif; // end header icon style ?>
		</a>
		<div class="notification-dot"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></div><!-- notification-dot -->
	</div><!-- cart-icon-wrapper -->
	<?php
}

// render header menu icon
function hovercraft_header_menu_icon() {
	$header_icon_style = hovercraft_get_header_icon_style();

	if ( 'material_icons_classic' === $header_icon_style ) : ?>
		<i class="material-icons menu">menu</i>
	<?php elseif ( 'font_awesome_version_6' === $header_icon_style ) : ?>
		<i class="fa-solid fa-bars"></i>
	<?php endif; // end header icon style
}

// render header main menu
function hovercraft_header_main_menu() {
	if ( has_nav_menu( 'main-menu' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'main-menu',
				'menu_class' => 'menu',
				'container_class' => 'main-menu',
			)
		);
		return;
	}

	echo '<div class="main-menu"><ul class="menu">';
	wp_list_pages(
		array(
			'title_li' => '',
		)
	);
	echo '</ul></div>';
}

// render header cta menu
function hovercraft_header_cta_menu( $theme_location, $container_class ) {
	if ( ! has_nav_menu( $theme_location ) ) {
		return;
	}

	wp_nav_menu(
		array(
			'theme_location' => $theme_location,
			'menu_class' => 'cta',
			'container_class' => $container_class,
		)
	);
}

