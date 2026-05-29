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

.widget_shopping_cart_content .woocommerce-mini-cart, .widget_shopping_cart_content .woocommerce-mini-cart-item, .widget_shopping_cart_content .hovercraft-mini-cart-product-name, .widget_shopping_cart_content .quantity, .widget_shopping_cart_content .woocommerce-mini-cart__total, .widget_shopping_cart_content .remove_from_cart_button {
	display: none !important;
}

.widget_shopping_cart_content .hovercraft-mini-cart-summary, .widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	min-height: 54px;
	margin: 0;
	background: rgba(0, 0, 0, 0.035);
}

.widget_shopping_cart_content .hovercraft-mini-cart-summary {
	display: flex;
	flex-direction: column;
	align-items: flex-start;
	justify-content: center;
	gap: 3px;
	padding: 6px 12px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.25;
	text-align: left;
	text-decoration: none;
	cursor: pointer;
	user-select: none;
}

.widget_shopping_cart_content .hovercraft-mini-cart-summary:hover {
	background: rgba(0, 0, 0, 0.065);
	color: <?php echo $default_text_color; ?>;
}

.widget_shopping_cart_content .hovercraft-mini-cart-summary:hover .hovercraft-mini-cart-count-number {
	color: #ffffff;
}

.widget_shopping_cart_content .hovercraft-mini-cart-count {
	display: flex;
	align-items: center;
	justify-content: flex-start;
	gap: 7px;
	width: 100%;
	font-weight: 700;
	text-align: left;
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
	align-items: baseline;
	justify-content: flex-start;
	gap: 4px;
	width: 100%;
	margin-top: 1px;
	padding-top: 5px;
	border-top: 1px solid rgba(0, 0, 0, 0.08);
	font-size: 11px;
	font-weight: 600;
	line-height: 1.2;
	text-align: left;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal-label {
	display: inline-block;
	font-size: inherit;
	line-height: inherit;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal strong, .widget_shopping_cart_content .hovercraft-mini-cart-subtotal .amount, .widget_shopping_cart_content .hovercraft-mini-cart-subtotal .woocommerce-Price-currencySymbol {
	font-size: inherit;
	line-height: inherit;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal strong {
	display: inline-flex;
	align-items: baseline;
}

.widget_shopping_cart_content .hovercraft-mini-cart-subtotal .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 700;
}

.widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	clear: both;
	display: flex;
	align-items: stretch;
	padding: 0;
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
	flex: 1 1 auto;
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0;
	padding: 10px 20px;
	background: transparent !important;
	box-shadow: none !important;
	color: <?php echo $default_text_color; ?> !important;
	font-family: <?php echo hovercraft_format_css_font_family( $main_menu_font_family, $default_font_family ); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: 700;
	line-height: 1.25;
	text-align: center;
	text-decoration: none;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	white-space: nowrap;
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

.widget-header-center .widget_shopping_cart_content, .widget-header-aside .widget_shopping_cart_content {
	display: grid;
	grid-template-columns: minmax(0, 1fr) auto;
	gap: 0;
	width: 410px;
	min-width: 410px;
	max-width: 410px;
	padding: 0;
	background: rgba(0, 0, 0, 0.035);
	border-radius: 4px;
	box-shadow: none;
	overflow: hidden;
}

.widget-header-center .widget_shopping_cart_content .hovercraft-mini-cart-summary, .widget-header-aside .widget_shopping_cart_content .hovercraft-mini-cart-summary {
	background: transparent;
}

.widget-header-center .widget_shopping_cart_content .hovercraft-mini-cart-summary:hover, .widget-header-aside .widget_shopping_cart_content .hovercraft-mini-cart-summary:hover {
	background: rgba(0, 0, 0, 0.035);
}

.widget-header-center .widget_shopping_cart_content .woocommerce-mini-cart__buttons, .widget-header-aside .widget_shopping_cart_content .woocommerce-mini-cart__buttons {
	background: rgba(0, 0, 0, 0.09);
	border-left: 1px solid rgba(0, 0, 0, 0.08);
}

.widget-header-center .widget_shopping_cart_content .woocommerce-mini-cart__buttons:hover, .widget-header-aside .widget_shopping_cart_content .woocommerce-mini-cart__buttons:hover {
	background: rgba(0, 0, 0, 0.13);
}
