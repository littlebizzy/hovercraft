<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce mini cart
?>

.widget_shopping_cart_content {
	width: 100%;	max-width: 100%;
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
	text-align: right;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal {
	display: flex;
	justify-content: space-between;
	align-items: center;
	gap: 12px;
	margin: 0;
	padding: 7px 0 0;
	border-top: 1px solid rgba(0, 0, 0, 0.10);
	font-weight: 600;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	clear: both;
	display: flex;
	gap: 8px;
	margin: 10px 0 0;
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
	flex: 1 1 0;
	margin: 0;
	padding: 7px 10px;
	font-size: 12px;
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
	width: 280px;
	min-width: 280px;
	max-width: 280px;
	padding: 12px;
	background: #ffffff;
	border-radius: 0;
	box-shadow: none;
}