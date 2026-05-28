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
	max-height: 360px;
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
	display: flex;
	align-items: flex-start;
	gap: 10px;
	width: 100%;
	min-height: 0;
	margin: 0;
	padding: 10px 28px 10px 0 !important;
	background: transparent;
	border-radius: 0;
	box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.12);
	color: <?php echo $default_text_color; ?>;
	line-height: 1.4;
	list-style: none;
	overflow: visible;
}

.widget_shopping_cart_content .woocommerce-mini-cart-item:hover {
	box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.12);
}

.widget_shopping_cart_content .woocommerce-mini-cart-item:last-child {
	box-shadow: none;
}

.widget_shopping_cart_content .hovercraft-mini-cart-item-main {
	flex: 1 1 auto;
	min-width: 0;
}

.widget_shopping_cart_content .hovercraft-mini-cart-product-name,
.widget_shopping_cart_content .woocommerce-mini-cart-item > a:not(.remove) {
	display: block;
	position: static;
	padding: 0;
	color: <?php echo $default_link_color; ?>;
	font-size: 13px;
	font-weight: 600;
	line-height: 1.4;
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
	margin-top: 4px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	font-weight: 400;
	line-height: 1.4;
}

.widget_shopping_cart_content .amount,
.widget_shopping_cart_content .woocommerce-mini-cart__total .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.widget_shopping_cart_content .remove_from_cart_button {
	position: absolute;
	top: 8px;
	right: 0;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	width: 18px;
	height: 18px;
	padding: 0;
	background: transparent;
	border-radius: 0;
	box-shadow: none;
	color: #c62828 !important;
	font-size: 16px;
	font-weight: 700;
	line-height: 18px;
	text-align: center;
	text-decoration: none;
}

.widget_shopping_cart_content .remove_from_cart_button:hover {
	background: transparent;
	color: #b71c1c !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart__total {
	clear: both;
	display: flex;
	justify-content: space-between;
	gap: 20px;
	margin: 12px 0 0;
	padding: 12px 0 0;
	box-shadow: inset 0 1px 0 0 rgba(0, 0, 0, 0.12);
	color: <?php echo $default_text_color; ?>;
	font-size: 13px;
	font-weight: 600;
	line-height: 1.4;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	clear: both;
	display: flex;
	gap: 8px;
	margin: 12px 0 0;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons::after {
	display: none !important;
	content: none !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons .button {
	flex: 1 1 auto;
	margin: 0;
	padding: 8px 10px;
	font-size: 12px;
	font-weight: 600;
	line-height: 1.4;
	text-align: center;
	text-decoration: none;
}

.widget_shopping_cart_content .woocommerce-mini-cart__empty-message {
	margin: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 13px;
	line-height: 1.4;
}

.widget-header-center .widget_shopping_cart_content,
.widget-header-aside .widget_shopping_cart_content {
	min-width: 260px;
	max-width: 360px;
	padding: 12px;
	background: #ffffff;
	box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}