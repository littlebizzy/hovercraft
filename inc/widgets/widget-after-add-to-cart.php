<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register after add to cart widget area
function hovercraft_register_after_add_to_cart_sidebar() {
	hovercraft_register_widget_area(
		array(
			'name' => 'After Add To Cart',
			'id' => 'hovercraft_after_add_to_cart',
			'class' => 'widget-after-add-to-cart',
		)
	);
}
add_action( 'widgets_init', 'hovercraft_register_after_add_to_cart_sidebar' );

// render after add to cart widget area
function hovercraft_render_after_add_to_cart_sidebar() {
	if ( ! is_active_sidebar( 'hovercraft_after_add_to_cart' ) ) {
		return;
	}

	echo '<div class="hovercraft-after-add-to-cart">';
	dynamic_sidebar( 'hovercraft_after_add_to_cart' );
	echo '</div><!-- hovercraft-after-add-to-cart -->';
}
add_action( 'woocommerce_after_add_to_cart_button', 'hovercraft_render_after_add_to_cart_sidebar', 1 );
