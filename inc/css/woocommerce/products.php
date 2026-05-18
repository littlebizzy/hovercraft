<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce product lists
?>

.woocommerce ul.products {
	clear: both;
	display: grid;
	margin: 0 !important;
	padding: 30px 0 0 !important;
	list-style: none;
}

.woocommerce ul.products::before, .woocommerce ul.products::after {
	display: none !important;
	content: none !important;
}

.woocommerce ul.products li.product {
	position: relative;
	float: none !important;
	clear: none !important;
	width: 100% !important;
	margin: 0 !important;
	padding: 0;
	list-style: none outside !important;
	line-height: 1.5 !important;
	text-align: left;
}

.woocommerce ul.products li.product a {
	display: block;
	text-decoration: none;
}

.woocommerce ul.products li.product a img, .woocommerce .products .product-category img {
	display: block !important;
	width: 100% !important;
	height: auto;
	margin: 0 0 15px !important;
	box-shadow: none;
}

.woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h2, .woocommerce ul.products li.product h3 {
	margin: 0 0 10px;
	padding: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 18px;
	font-weight: 600;
	line-height: 1.3;
}

.woocommerce ul.products li.product .price {
	display: block;
	margin: 0 0 15px;
	color: <?php echo $woocommerce_price_text_color; ?> !important;
	font-size: 16px !important;
	font-weight: 600 !important;
	line-height: 1.5 !important;
}

.woocommerce ul.products li.product .price del {
	color: <?php echo $default_text_color; ?>;
	opacity: 0.6;
}

.woocommerce ul.products li.product .price ins {
	background: transparent;
	font-weight: 600;
	text-decoration: none;
}

.woocommerce ul.products li.product .star-rating {
	display: block;
	margin: 0 0 10px;
}

.woocommerce ul.products li.product .button {
	display: inline-block;
	margin: 0;
}

.woocommerce ul.products li.product .added_to_cart {
	display: inline-block;
	margin-left: 10px;
	font-size: 12px;
	line-height: 1.5;
}

.woocommerce ul.products li.product .onsale {
	top: 10px;
	left: 10px;
	right: auto;
	margin: 0;
}

.woocommerce ul.products li.product .woocommerce-placeholder {
	border: 0;
}

.woocommerce .products .product-category h2, .woocommerce .products .product-category h3 {
	margin: 0;
	font-size: 18px;
	font-weight: 600;
	line-height: 1.3;
}

.woocommerce .products .product-category mark {
	background: transparent;
	color: <?php echo $default_text_color; ?>;
	font-weight: 400;
}

.woocommerce .woocommerce-result-count {
	margin: 0 0 20px;
	color: <?php echo $default_text_color; ?>;
	font-size: 14px;
	line-height: 1.5;
}

.woocommerce .woocommerce-ordering {
	margin: 0 0 20px;
}

.woocommerce .woocommerce-ordering select {
	max-width: 100%;
}

@media screen and (max-width: 1199px) {
	.woocommerce ul.products {
		grid-template-columns: 1fr;
		gap: 30px;
	}

	.woocommerce .woocommerce-result-count, .woocommerce .woocommerce-ordering {
		float: none;
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce ul.products {
		grid-template-columns: repeat(3, minmax(0, 1fr));
		gap: 30px 4%;
	}

	.woocommerce ul.products li.product a img, .woocommerce .products .product-category img {
		height: 220px !important;
		max-height: 220px !important;
		object-fit: contain !important;
		object-position: center center !important;
	}

	.woocommerce .woocommerce-result-count {
		float: left;
	}

	.woocommerce .woocommerce-ordering {
		float: right;
	}
}
