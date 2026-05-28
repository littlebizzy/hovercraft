<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce mini cart
?>

.widget_shopping_cart_content {
	width: 100%;
	max-width: 100%;
}

.widget_shopping_cart_content .woocommerce-mini-cart,
.widget_shopping_cart_content .woocommerce-mini-cart-item,
.widget_shopping_cart_content .hovercraft-mini-cart-product-name,
.widget_shopping_cart_content .quantity,
.widget_shopping_cart_content .woocommerce-mini-cart__total,
.widget_shopping_cart_content .remove_from_cart_button {
	display: none !important;
}

.widget_shopping_cart_content .hovercraft-mini-cart-summary {
	display: block;
	width: 100%;
	margin: 0;
	padding: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.35;
}

.widget_shopping_cart_content .hovercraft-mini-cart-count {
	margin: 0 0 6px 0;
	font-weight: 600;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal {
	display: flex;
	justify-content: space-between;
	align-items: center;
	gap: 12px;
	margin: 0;
	padding: 6px 0 0;
	box-shadow: inset 0 1px 0 0 rgba(0, 0, 0, 0.10);
	font-weight: 600;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	clear: both;
	display: flex;
	gap: 6px;
	margin: 8px 0 0;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons:has(#ppc-button-minicart) {
	display: none !important;
}

.widget_shopping_cart_content #ppc-button-minicart {
	display: none !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons::after {
	display: none !important;
	content: none !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons .button {
	flex: 1 1 auto;
	margin: 0;
	padding: 6px 8px;
	font-size: 11px;
	font-weight: 600;
	line-height: 1.35;
	text-align: center;
	text-decoration: none;
}

.widget_shopping_cart_content .woocommerce-mini-cart__empty-message {
	margin: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.35;
}

.widget-header-center .widget_shopping_cart_content,
.widget-header-aside .widget_shopping_cart_content {
	min-width: 240px;
	max-width: 320px;
	padding: 10px;
	background: #ffffff;
	box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}