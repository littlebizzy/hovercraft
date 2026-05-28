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
	display: contents;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.35;
}

.widget_shopping_cart_content .hovercraft-mini-cart-count,
.widget_shopping_cart_content .hovercraft-mini-cart-subtotal,
.widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	min-height: 54px;
	margin: 0;
	padding: 8px 10px;
	background: rgba(0, 0, 0, 0.035);
}

.widget_shopping_cart_content .hovercraft-mini-cart-count {
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 7px;
	width: 100%;
	height: 100%;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
	text-align: center;
	text-decoration: none;
	cursor: pointer;
	user-select: none;
}

.widget_shopping_cart_content .hovercraft-mini-cart-count:hover {
	background: rgba(0, 0, 0, 0.065);
	color: <?php echo $default_text_color; ?>;
}

.widget_shopping_cart_content .hovercraft-mini-cart-count:hover .hovercraft-mini-cart-count-number {
	color: #ffffff;
}

.widget_shopping_cart_content .hovercraft-mini-cart-count-number {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 26px;
	height: 24px;
	padding: 0 7px;
	background-color: #f44336;
	border-radius: 4px;
	color: #ffffff;
	font-size: 12px;
	font-weight: 700;
	line-height: 24px;
	text-align: center;
	white-space: nowrap;
}

.widget_shopping_cart_content .hovercraft-mini-cart-count-label {
	display: inline-block;
	line-height: 1.25;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	gap: 3px;
	font-weight: 600;
	text-align: center;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	clear: both;
	display: flex;
	align-items: stretch;
	gap: 6px;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons:hover {
	background: rgba(0, 0, 0, 0.065);
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

.widget_shopping_cart_content .woocommerce-mini-cart__buttons .button:not(.checkout) {
	display: none !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons .checkout {
	flex: 1 1 0;
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0;
	padding: 7px 8px;
	background: transparent !important;
	box-shadow: none !important;
	color: <?php echo $default_text_color; ?> !important;
	font-size: 11px;
	font-weight: 600;
	line-height: 1.25;
	text-align: center;
	text-decoration: none;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons .checkout:hover {
	background: transparent !important;
	color: <?php echo $default_text_color; ?> !important;
}

.widget_shopping_cart_content .woocommerce-mini-cart__empty-message {
	margin: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.35;
}

.widget-header-center .widget_shopping_cart_content,
.widget-header-aside .widget_shopping_cart_content {
	display: grid;
	grid-template-columns: 1fr 1.2fr 1fr;
	gap: 8px;
	width: 480px;
	min-width: 480px;
	max-width: 480px;
	padding: 0;
	background: transparent;
	border-radius: 0;
	box-shadow: none;
}