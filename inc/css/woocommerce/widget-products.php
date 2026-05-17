<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce widgets
?>

ul.product_list_widget, .woocommerce ul.product_list_widget {
	width: 100%;
	margin: 0;
	padding: 0;
	display: grid;
	list-style: none;
}

ul.product_list_widget::after, .woocommerce ul.product_list_widget::after {
	clear: both;
	content: "";
	display: table;
}

ul.product_list_widget li, .woocommerce ul.product_list_widget li {
	position: relative;
	margin: 0;
	padding: 0 !important;
	background: #ffffff;
	border-radius: 0;
	box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
	line-height: 1.5;
	list-style: none;
	overflow: hidden;
	transition: box-shadow 0.2s ease;
}

ul.product_list_widget li:hover, .woocommerce ul.product_list_widget li:hover {
	box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

ul.product_list_widget li a, .woocommerce ul.product_list_widget li a {
	display: block;
	position: relative;
	color: <?php echo $default_link_color; ?>;
	font-weight: 600;
	line-height: 1.5;
	text-decoration: none;
}

ul.product_list_widget li a:hover, .woocommerce ul.product_list_widget li a:hover {
	color: <?php echo $default_hover_color; ?>;
}

ul.product_list_widget li a::before, .woocommerce ul.product_list_widget li a::before {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.05);
	content: "";
	pointer-events: none;
	transition: background 0.3s ease;
}

ul.product_list_widget li a:hover::before, .woocommerce ul.product_list_widget li a:hover::before {
	background: rgba(0, 0, 0, 0);
}

ul.product_list_widget li img, .woocommerce ul.product_list_widget li img {
	display: block !important;
	float: none !important;
	width: 100% !important;
	height: auto !important;
	margin-left: 0 !important;
	box-shadow: none !important;
	aspect-ratio: 1 / 1 !important;
	object-fit: cover !important;
}

ul.product_list_widget .product-title, .woocommerce ul.product_list_widget .product-title {
	position: absolute;
	bottom: 0;
	left: 0;
	z-index: 2;
	box-sizing: border-box;
	width: 100%;
	padding: 8px 10px;
	background: rgba(0, 0, 0, 0.6);
	color: #ffffff;
	font-size: 14px;
	line-height: 1.2;
	text-align: center;
}

ul.product_list_widget .wcpbc-price, .woocommerce ul.product_list_widget .wcpbc-price {
	display: block;
	margin-top: 0;
	padding: 8px 10px;
	background: #f0f0f0;
	color: #444444;
	font-size: 24px;
	font-weight: 600;
	line-height: 1.5;
	text-align: center;
}

ul.product_list_widget .wcpbc-price del, .woocommerce ul.product_list_widget .wcpbc-price del {
	display: none;
}

ul.product_list_widget .amount, .woocommerce ul.product_list_widget .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

ul.product_list_widget ins, .woocommerce ul.product_list_widget ins {
	background: transparent;
	font-weight: 600;
	text-decoration: none;
}

ul.product_list_widget .star-rating, .woocommerce ul.product_list_widget .star-rating {
	display: block;
	margin: 8px 10px;
}

.woocommerce-mini-cart {
	clear: both;
	width: 100%;
	margin: 0;
	padding: 0;
	display: block;
	list-style: none;
}

.woocommerce-mini-cart::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-mini-cart li {
	position: relative;
	min-height: 70px;
	margin: 0 0 20px;
	padding: 0 0 0 80px !important;
	background: #ffffff;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
	list-style: none;
	overflow: hidden;
}

.woocommerce-mini-cart li:last-child {
	margin-bottom: 0;
}

.woocommerce-mini-cart li a {
	display: block;
	position: relative;
	color: <?php echo $default_link_color; ?>;
	font-weight: 600;
	line-height: 1.5;
	text-decoration: none;
}

.woocommerce-mini-cart li a:hover {
	color: <?php echo $default_hover_color; ?>;
}

.woocommerce-mini-cart li img {
	display: block !important;
	position: absolute;
	top: 0;
	left: 0;
	float: none !important;
	width: 60px !important;
	max-width: 60px;
	height: auto !important;
	margin: 0 !important;
	box-shadow: none !important;
	object-fit: cover !important;
}

.woocommerce-mini-cart .remove_from_cart_button {
	display: inline-block;
	position: absolute;
	top: 0;
	right: 0;
	width: 24px;
	height: 24px;
	border-radius: 50%;
	color: #ff1744 !important;
	font-size: 20px;
	font-weight: 700;
	line-height: 20px;
	text-align: center;
	text-decoration: none;
}

.woocommerce-mini-cart .remove_from_cart_button:hover {
	background: #ff1744;
	color: #ffffff !important;
}

.woocommerce-mini-cart .quantity {
	display: block;
	margin-top: 5px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.5;
}

.woocommerce-mini-cart .amount, .woocommerce-mini-cart__total .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.woocommerce-mini-cart__total {
	clear: both;
	margin: 20px 0;
	padding: 15px 0 0;
	border-top: 1px solid #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
	line-height: 1.5;
}

.woocommerce-mini-cart__buttons {
	clear: both;
	margin: 20px 0 0;
}

.woocommerce-mini-cart__buttons::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-mini-cart__buttons .button {
	display: inline-block;
	margin: 0 10px 10px 0;
}

.woocommerce-mini-cart__empty-message {
	margin: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 14px;
	line-height: 1.5;
}

@media screen and (max-width: 1199px) {
	ul.product_list_widget, .woocommerce ul.product_list_widget {
		grid-template-columns: repeat(2, 1fr);
		gap: 20px;
	}
}

@media screen and (min-width: 1200px) {
	ul.product_list_widget, .woocommerce ul.product_list_widget {
		grid-template-columns: repeat(4, 1fr);
		gap: 60px;
	}
}
