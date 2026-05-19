<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce checkout
?>

.woocommerce-checkout .woocommerce-notices-wrapper, .woocommerce-checkout form.checkout {
	clear: both;
}

.woocommerce-checkout form.checkout::after, .woocommerce-checkout .col2-set::after, .woocommerce-checkout #order_review::after, .woocommerce-checkout .woocommerce-checkout-payment::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-checkout .woocommerce-form-login, .woocommerce-checkout .checkout_coupon, .woocommerce-checkout .woocommerce-billing-fields, .woocommerce-checkout .woocommerce-shipping-fields, .woocommerce-checkout .woocommerce-additional-fields, .woocommerce-checkout #order_review, .woocommerce-checkout .woocommerce-checkout-payment {
	clear: both;
	padding: 30px;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

.woocommerce-checkout .woocommerce-form-login p:last-child, .woocommerce-checkout .checkout_coupon p:last-child, .woocommerce-checkout .woocommerce-billing-fields p:last-child, .woocommerce-checkout .woocommerce-shipping-fields p:last-child, .woocommerce-checkout .woocommerce-additional-fields p:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout h3, .woocommerce-checkout #order_review_heading {
	clear: both;
	margin: 0 0 20px;
	padding: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 22px;
	line-height: 1.3;
}

.woocommerce-checkout .form-row {
	clear: both;
	margin: 0 0 16px;
	padding: 0;
}

.woocommerce-checkout .form-row::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-checkout .form-row label {
	display: block;
	margin: 0 0 6px;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
	line-height: 1.5;
}

.woocommerce-checkout .form-row label.checkbox, .woocommerce-checkout .woocommerce-form__label-for-checkbox {
	display: inline-block;
	font-weight: 400;
}

.woocommerce-checkout .form-row .required {
	color: #ff1744;
	font-weight: 600;
	text-decoration: none;
}

.woocommerce-checkout input[type="text"], .woocommerce-checkout input[type="email"], .woocommerce-checkout input[type="tel"], .woocommerce-checkout input[type="password"], .woocommerce-checkout select, .woocommerce-checkout textarea {
	width: 100%;
	max-width: 100%;
	box-sizing: border-box;
}

.woocommerce-checkout textarea {
	min-height: 120px;
}

.woocommerce-checkout input[type="radio"], .woocommerce-checkout input[type="checkbox"] {
	width: auto;
	height: auto;
	margin-right: 6px;
	appearance: auto;
	-webkit-appearance: auto;
	-moz-appearance: auto;
}

.woocommerce-checkout .select2-container {
	max-width: 100%;
}

.woocommerce-checkout .select2-container .select2-selection--single {
	height: auto;
	min-height: 42px;
	border-radius: 4px;
	line-height: 1.5;
}

.woocommerce-checkout .select2-container .select2-selection--single .select2-selection__rendered {
	padding: 8px 12px;
	line-height: 1.5;
}

.woocommerce-checkout .select2-container .select2-selection--single .select2-selection__arrow {
	height: 100%;
}

.woocommerce-checkout .woocommerce-invalid input, .woocommerce-checkout .woocommerce-invalid select, .woocommerce-checkout .woocommerce-invalid textarea {
	border-color: #ff1744 !important;
}

.woocommerce-checkout .woocommerce-validated input, .woocommerce-checkout .woocommerce-validated select, .woocommerce-checkout .woocommerce-validated textarea {
	border-color: #e0e0e0 !important;
}

.woocommerce-checkout .woocommerce-account-fields, .woocommerce-checkout .woocommerce-shipping-fields, .woocommerce-checkout .woocommerce-additional-fields {
	clear: both;
}

.woocommerce-checkout .woocommerce-shipping-fields #ship-to-different-address {
	margin: 0 0 20px;
}

.woocommerce-checkout .woocommerce-shipping-fields #ship-to-different-address label {
	font-weight: 600;
}

.woocommerce-checkout-review-order-table {
	width: 100%;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-collapse: collapse;
	border-radius: 0;
}

.woocommerce-checkout-review-order-table th, .woocommerce-checkout-review-order-table td {
	padding: 12px 10px;
	border: 1px solid #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
	text-align: left;
	vertical-align: top;
}

.woocommerce-checkout-review-order-table th {
	background: <?php echo $search_bar_background_color; ?>;
	font-weight: 600;
}

.woocommerce-checkout-review-order-table .product-total, .woocommerce-checkout-review-order-table tfoot td {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.woocommerce-checkout-review-order-table .cart_item .product-name {
	font-weight: 600;
}

.woocommerce-checkout-review-order-table .product-quantity {
	font-weight: 400;
}

.woocommerce-checkout .woocommerce-checkout-payment {
	background: <?php echo $search_bar_background_color; ?>;
}

.woocommerce-checkout-payment ul.payment_methods {
	margin: 0 0 20px;
	padding: 0;
	list-style: none;
}

.woocommerce-checkout-payment ul.payment_methods li {
	clear: both;
	margin: 0 0 16px;
	padding: 0;
	list-style: none;
	line-height: 1.5;
}

.woocommerce-checkout-payment ul.payment_methods li:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout-payment ul.payment_methods label {
	font-weight: 600;
}

.woocommerce-checkout-payment .payment_box {
	clear: both;
	padding: 20px;
	margin: 10px 0 0;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
}

.woocommerce-checkout-payment .payment_box p:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout-payment .payment_box fieldset {
	margin: 0;
	padding: 0;
	border: 0;
}

.woocommerce-checkout-payment .payment_box .form-row {
	margin-bottom: 16px;
}

.woocommerce-checkout-payment .place-order {
	clear: both;
	margin: 20px 0 0;
	padding: 0;
}

.woocommerce-checkout-payment .place-order .woocommerce-terms-and-conditions-wrapper {
	margin: 0 0 20px;
}

.woocommerce-checkout-payment .place-order .woocommerce-privacy-policy-text p:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout #place_order {
	display: inline-block;
	float: right;
	margin: 0;
}

.woocommerce-checkout .checkout_coupon .form-row {
	margin-bottom: 0;
}

.woocommerce-checkout .checkout_coupon .button {
	margin-top: 0;
}

@media screen and (max-width: 1199px) {
	.woocommerce-checkout .woocommerce-form-login, .woocommerce-checkout .checkout_coupon, .woocommerce-checkout .woocommerce-billing-fields, .woocommerce-checkout .woocommerce-shipping-fields, .woocommerce-checkout .woocommerce-additional-fields, .woocommerce-checkout #order_review, .woocommerce-checkout .woocommerce-checkout-payment {
		padding: 20px;
	}

	.woocommerce-checkout .col2-set .col-1, .woocommerce-checkout .col2-set .col-2 {
		float: none;
		width: 100%;
	}

	.woocommerce-checkout #place_order {
		float: none;
		width: 100%;
		text-align: center;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce-checkout .col2-set .col-1 {
		float: left;
		width: 48%;
	}

	.woocommerce-checkout .col2-set .col-2 {
		float: right;
		width: 48%;
	}
}
