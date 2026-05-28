<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// keep mini cart buttons limited to checkout
function hovercraft_reset_woocommerce_mini_cart_buttons() {
	if ( ! function_exists( 'woocommerce_widget_shopping_cart_proceed_to_checkout' ) ) {
		return;
	}

	remove_all_actions( 'woocommerce_widget_shopping_cart_buttons' );

	add_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_proceed_to_checkout', 20 );
}
add_action( 'wp_loaded', 'hovercraft_reset_woocommerce_mini_cart_buttons', 100 );

// refresh mini cart fragment with theme template
function hovercraft_refresh_woocommerce_mini_cart_fragment( $fragments ) {
	if ( ! function_exists( 'woocommerce_mini_cart' ) ) {
		return $fragments;
	}

	ob_start();
	woocommerce_mini_cart();
	$mini_cart = ob_get_clean();

	$fragments['div.widget_shopping_cart_content'] = '<div class="widget_shopping_cart_content">' . $mini_cart . '</div>';

	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'hovercraft_refresh_woocommerce_mini_cart_fragment', 100 );

// clear stale woocommerce cart fragments after theme updates
function hovercraft_clear_stale_woocommerce_cart_fragments() {
	if ( ! wp_script_is( 'wc-cart-fragments', 'enqueued' ) ) {
		return;
	}

	$script = sprintf(
		'try{var hovercraftVersion=%s;var hovercraftKey="hovercraft_wc_fragments_version";var hovercraftClear=function(storage){if(!storage){return;}Object.keys(storage).forEach(function(key){if(key.indexOf("wc_fragments_")===0||key.indexOf("wc_cart_hash_")===0||key==="woocommerce_cart_hash"){storage.removeItem(key);}});};if(window.localStorage&&window.localStorage.getItem(hovercraftKey)!==hovercraftVersion){hovercraftClear(window.localStorage);hovercraftClear(window.sessionStorage);window.localStorage.setItem(hovercraftKey,hovercraftVersion);}}catch(error){}',
		wp_json_encode( HOVERCRAFT_VERSION )
	);

	wp_add_inline_script( 'wc-cart-fragments', $script, 'before' );
}
add_action( 'wp_enqueue_scripts', 'hovercraft_clear_stale_woocommerce_cart_fragments', 100 );
