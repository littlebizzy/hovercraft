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

.widget_shopping_cart_content .woocommerce-mini-cart {
	display: block;
	width: 100%;
	max-height: 280px;
	margin: 0;
	padding: 0;
	list-style: none;
	overflow-x: hidden;
	overflow-y: auto;
}

.widget_shopping_cart_content .woocommerce-mini-cart::before,
.widget_shopping_cart_content .woocommerce-mini-cart::after {
	display: none !important;
	content: none !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart-item {
	position: relative;
	display: block;
	width: 100%;
	min-height: 0;
	margin: 0;
	padding: 7px 0 !important;
	background: transparent;
	border-radius: 0;
	box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.10);
	color: <?php echo $default_text_color; ?>;
	line-height: 1.35;
	list-style: none;
	overflow: visible;
}

.widget_shopping_cart_content .woocommerce-mini-cart-item:hover {
	box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.10);
}

.widget_shopping_cart_content .woocommerce-mini-cart-item:last-child {
	box-shadow: none;
}

.widget_shopping_cart_content .hovercraft-mini-cart-item-main {
	min-width: 0;
}

.widget_shopping_cart_content .hovercraft-mini-cart-product-name,
.widget_shopping_cart_content .woocommerce-mini-cart-item > a:not(.remove) {
	display: block;
	position: static;
	padding: 0;
	color: <?php echo $default_link_color; ?>;
	font-size: 12px;
	font-weight: 600;
	line-height: 1.35;
	text-decoration: none;
}

.widget_shopping_cart_content .hovercraft-mini-cart-product-name:hover,
.widget_shopping_cart_content .woocommerce-mini-cart-item > a:not(.remove):hover {
	color: <?php echo $default_hover_color; ?>;
}

.widget_shopping_cart_content .hovercraft-mini-cart-product-name::before,
.widget_shopping_cart_content .woocommerce-mini-cart-item > a:not(.remove)::before {
	display: none !important;
	content: none !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart-item img,
.widget_shopping_cart_content .woocommerce-mini-cart-item .attachment-woocommerce_thumbnail,
.widget_shopping_cart_content .woocommerce-mini-cart-item .woocommerce-placeholder {
	display: none !important;
}

.widget_shopping_cart_content .quantity {
	display: block;
	margin-top: 2px;
	color: <?php echo $default_text_color; ?>;
	font-size: 11px;
	font-weight: 400;
	line-height: 1.35;
}

.widget_shopping_cart_content .amount,
.widget_shopping_cart_content .woocommerce-mini-cart__total .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.widget_shopping_cart_content .remove_from_cart_button {
	display: none !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart__total {
	clear: both;
	display: flex;
	justify-content: space-between;
	gap: 16px;
	margin: 8px 0 0;
	padding: 8px 0 0;
	box-shadow: inset 0 1px 0 0 rgba(0, 0, 0, 0.10);
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	font-weight: 600;
	line-height: 1.35;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	clear: both;
	display: flex;
	gap: 6px;
	margin: 8px 0 0;
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
	min-width: 220px;
	max-width: 300px;
	padding: 10px;
	background: #ffffff;
	box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}