<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce widgets
?>

.woocommerce ul.product_list_widget, ul.product_list_widget, .woocommerce-mini-cart {
	clear: both;
	width: 100%;
	margin: 0;
	padding: 0;
	list-style: none;
}

.woocommerce ul.product_list_widget::after, ul.product_list_widget::after, .woocommerce-mini-cart::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce ul.product_list_widget li, ul.product_list_widget li, .woocommerce-mini-cart li {
	position: relative;
	margin: 0 0 20px;
	padding: 0 !important;
	background: #ffffff;
	border-radius: 0;
	box-shadow: none;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
	list-style: none;
	overflow: hidden;
}

.woocommerce ul.product_list_widget li:last-child, ul.product_list_widget li:last-child, .woocommerce-mini-cart li:last-child {
	margin-bottom: 0;
}

.woocommerce ul.product_list_widget li a, ul.product_list_widget li a, .woocommerce-mini-cart li a {
	display: block;
	position: relative;
	color: <?php echo $default_link_color; ?>;
	font-weight: 600;
	line-height: 1.5;
	text-decoration: none;
}

.woocommerce ul.product_list_widget li a:hover, ul.product_list_widget li a:hover, .woocommerce-mini-cart li a:hover {
	color: <?php echo $default_hover_color; ?>;
}

.woocommerce ul.product_list_widget li img, ul.product_list_widget li img, .woocommerce-mini-cart li img {
	display: block !important;
	float: none !important;
	width: 100% !important;
	height: auto !important;
	margin: 0 0 10px !important;
	box-shadow: none !important;
	object-fit: cover !important;
}

.woocommerce ul.product_list_widget .product-title, ul.product_list_widget .product-title {
	display: block;
	margin: 0 0 8px;
	color: <?php echo $default_text_color; ?>;
	font-size: 14px;
	font-weight: 600;
	line-height: 1.3;
	text-align: left;
}

.woocommerce ul.product_list_widget .star-rating, ul.product_list_widget .star-rating {
	display: block;
	margin: 0 0 8px;
}

.woocommerce ul.product_list_widget .amount, ul.product_list_widget .amount, .woocommerce-mini-cart .amount, ul.product_list_widget .wcpbc-price {
	display: inline-block;
	margin: 0;
	padding: 0;
	background: transparent;
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-size: 14px;
	font-weight: 600;
	line-height: 1.5;
	text-align: left;
}

.woocommerce ul.product_list_widget del, ul.product_list_widget del {
	color: <?php echo $default_text_color; ?>;
	opacity: 0.6;
}

.woocommerce ul.product_list_widget ins, ul.product_list_widget ins {
	background: transparent;
	font-weight: 600;
	text-decoration: none;
}

.woocommerce-mini-cart .woocommerce-mini-cart-item {
	min-height: 70px;
	padding-left: 80px !important;
}

.woocommerce-mini-cart .woocommerce-mini-cart-item img {
	position: absolute;
	top: 0;
	left: 0;
	width: 60px !important;
	max-width: 60px;
	margin: 0 !important;
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

.woocommerce-mini-cart__total {
	clear: both;
	margin: 20px 0;
	padding: 15px 0 0;
	border-top: 1px solid #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
	line-height: 1.5;
}

.woocommerce-mini-cart__total .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
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
	.woocommerce ul.product_list_widget, ul.product_list_widget {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 20px;
	}

	.woocommerce-mini-cart {
		display: block;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce ul.product_list_widget, ul.product_list_widget {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 60px;
	}

	.woocommerce-mini-cart {
		display: block;
	}
}
