<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce general styles
?>

.woocommerce, .woocommerce-page {
	clear: both;
}

.woocommerce::after, .woocommerce-page::after, .woocommerce .products::after, .woocommerce-page .products::after, .woocommerce .col2-set::after, .woocommerce-page .col2-set::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce .clear, .woocommerce-page .clear {
	clear: both;
}

.woocommerce .woocommerce-breadcrumb, .woocommerce-page .woocommerce-breadcrumb {
	clear: both;
	margin: 0 0 30px;
	padding: 0;
	color: <?php echo $breadcrumbs_text_color; ?>;
	font-size: 14px;
	line-height: 1.5;
}

.woocommerce .woocommerce-breadcrumb a, .woocommerce-page .woocommerce-breadcrumb a, .woocommerce .woocommerce-breadcrumb a:hover, .woocommerce-page .woocommerce-breadcrumb a:hover {
	color: <?php echo $breadcrumbs_link_color; ?>;
}

.woocommerce .blockUI.blockOverlay, .woocommerce-page .blockUI.blockOverlay {
	background: #ffffff !important;
	opacity: 0.6 !important;
}

.woocommerce .loader::before, .woocommerce-page .loader::before {
	border-color: <?php echo $default_link_color; ?>;
}

.woocommerce .term-description {
	clear: both;
	margin: 0 0 30px;
	color: <?php echo $breadcrumbs_text_color; ?>;
	font-size: 18px;
	line-height: 1.5;
}

.woocommerce .term-description p:last-child {
	margin-bottom: 0;
}

.woocommerce .page-description {
	clear: both;
	margin: 0 0 30px;
}

.woocommerce .page-description p:last-child {
	margin-bottom: 0;
}

.woocommerce div.coupon, .woocommerce-page div.coupon {
	display: flex;
}

.woocommerce mark, .woocommerce-page mark {
	background: <?php echo $search_bar_background_color; ?>;
	border-radius: 4px;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
}

.woocommerce small.note, .woocommerce-page small.note {
	display: block;
	margin: 8px 0 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.5;
}

.woocommerce .required, .woocommerce-page .required {
	color: #ff1744;
	font-weight: 600;
	text-decoration: none;
}

.woocommerce .optional, .woocommerce-page .optional {
	font-weight: 400;
}

.woocommerce p.woocommerce-result-count, p.woocommerce-result-count {
	color: <?php echo $breadcrumbs_text_color; ?>;
	font-size: 16px;
	font-weight: 600;
	line-height: 1.5 !important;
}

.woocommerce-checkout #order_comments {
	border: 0 !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
}

.woocommerce-checkout #order_comments:focus {
	border: 0 !important;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?> !important;
	outline: 0;
}

.woocommerce-checkout-review-order-table .product-total, .woocommerce-checkout-review-order-table tfoot td {
	color: <?php echo $default_text_color; ?>;
	font-weight: 400;
}

.woocommerce-checkout-review-order-table .cart-subtotal th, .woocommerce-checkout-review-order-table .cart-subtotal td, .woocommerce-checkout-review-order-table .order-total th, .woocommerce-checkout-review-order-table .order-total td {
	font-weight: 700;
}

@media screen and (max-width: 1199px) {
	.woocommerce p.woocommerce-result-count, p.woocommerce-result-count {
		display: block;
		float: none !important;
		margin: 0 0 20px !important;
		padding: 0 !important;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce p.woocommerce-result-count, p.woocommerce-result-count {
		float: left !important;
		margin: 0 0 20px !important;
		padding: 5px 0 !important;
	}
}
