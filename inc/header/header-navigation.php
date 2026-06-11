<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get header icon style
function hovercraft_get_header_icon_style() {
	return get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
}

// render header search icon
function hovercraft_header_search_icon() {
	?>
	<button type="button" class="search-icon-wrapper search-modal-toggle" aria-label="<?php echo esc_attr__( 'Open search', 'hovercraft' ); ?>" aria-controls="full-screen-search" aria-expanded="false">
		<?php echo hovercraft_icon( 'search' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</button><!-- search-icon-wrapper -->
	<?php
}

// render header cart icon
function hovercraft_header_cart_icon() {
	// skip missing woocommerce cart
	if ( ! class_exists( 'WooCommerce' ) || ! function_exists( 'WC' ) || ! WC()->cart ) {
		return;
	}

	// get header cart icon state
	$hovercraft_header_icon_style = hovercraft_get_header_icon_style();
	$hovercraft_cart_count = WC()->cart->get_cart_contents_count();
	$hovercraft_cart_aria_label = sprintf(
		_n( 'View cart, %d item', 'View cart, %d items', $hovercraft_cart_count, 'hovercraft' ),
		$hovercraft_cart_count
	);
	?>
	<div class="cart-icon-wrapper">
		<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" aria-label="<?php echo esc_attr( $hovercraft_cart_aria_label ); ?>">
			<?php if ( 'material_icons_classic' === $hovercraft_header_icon_style ) : ?>
				<i class="material-icons shopping_cart" aria-hidden="true">shopping_cart</i>
			<?php elseif ( 'font_awesome_version_6' === $hovercraft_header_icon_style ) : ?>
				<i class="fas fa-shopping-cart" aria-hidden="true"></i>
			<?php endif; // end header icon style ?>
		</a>
		<div class="notification-dot" aria-hidden="true"><?php echo esc_html( $hovercraft_cart_count ); ?></div><!-- notification-dot -->
	</div><!-- cart-icon-wrapper -->
	<?php
}

// render header cart nav item
function hovercraft_header_cart_nav_item() {
	// skip missing woocommerce cart
	if ( ! class_exists( 'WooCommerce' ) || ! function_exists( 'WC' ) || ! WC()->cart ) {
		return;
	}

	$hovercraft_cart_count = WC()->cart->get_cart_contents_count();
	$hovercraft_cart_aria_label = sprintf(
		_n( 'View cart, %d item', 'View cart, %d items', $hovercraft_cart_count, 'hovercraft' ),
		$hovercraft_cart_count
	);
	?>
	<div class="header-cart-nav-item">
		<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" aria-label="<?php echo esc_attr( $hovercraft_cart_aria_label ); ?>">
			<span class="header-cart-nav-label"><?php esc_html_e( 'Shopping Cart', 'hovercraft' ); ?></span>

			<span class="header-cart-nav-count" aria-hidden="true"><?php echo esc_html( $hovercraft_cart_count ); ?></span><!-- header-cart-nav-count -->
		</a>
	</div><!-- header-cart-nav-item -->
	<?php
}

// render header menu icon
function hovercraft_header_menu_icon() {
	echo hovercraft_icon( 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

// render header main menu
function hovercraft_header_main_menu() {
	// render assigned main menu
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

	// render page fallback menu
	echo '<div class="main-menu"><ul class="menu">';
	wp_list_pages(
		array(
			'title_li' => '',
		)
	);
	echo '</ul></div>';
}

// render header cta menu
function hovercraft_header_cta_menu( $hovercraft_theme_location, $hovercraft_container_class ) {
	// skip missing header cta menu
	if ( ! has_nav_menu( $hovercraft_theme_location ) ) {
		return;
	}

	wp_nav_menu(
		array(
			'theme_location' => $hovercraft_theme_location,
			'menu_class' => 'cta',
			'container_class' => $hovercraft_container_class,
		)
	);
}
