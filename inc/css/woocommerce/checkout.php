<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce checkout
?>

body.woocommerce-checkout #topbar,
body.woocommerce-checkout #header-basic,
body.woocommerce-checkout #header-half-hero,
body.woocommerce-checkout #header-mini-hero,
body.woocommerce-checkout #header-full-hero,
body.woocommerce-checkout .breadcrumbs {
	display: none;
}

.woocommerce-checkout .woocommerce-notices-wrapper, .woocommerce-checkout form.checkout {
	clear: both;
}

.woocommerce-checkout form.checkout::after, .woocommerce-checkout .col2-set::after, .woocommerce-checkout #order_review::after, .woocommerce-checkout .woocommerce-checkout-payment::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-checkout .woocommerce-form-login, .woocommerce-checkout .checkout_coupon, .woocommerce-checkout .woocommerce-billing-fields, .woocommerce-checkout .woocommerce-account-fields, .woocommerce-checkout .woocommerce-shipping-fields, .woocommerce-checkout .woocommerce-additional-fields, .woocommerce-checkout #order_review {
	clear: both;
	padding: 30px;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

.woocommerce-checkout .woocommerce-form-login-toggle, .woocommerce-checkout .woocommerce-form-coupon-toggle {
	clear: both;
	margin: 0 0 20px;
}

.woocommerce-checkout .woocommerce-form-login-toggle .woocommerce-info, .woocommerce-checkout .woocommerce-form-coupon-toggle .woocommerce-info {
	margin-bottom: 0 !important;
}

.woocommerce-checkout .woocommerce-form-login p:last-child, .woocommerce-checkout .checkout_coupon p:last-child, .woocommerce-checkout .woocommerce-billing-fields p:last-child, .woocommerce-checkout .woocommerce-account-fields p:last-child, .woocommerce-checkout .woocommerce-shipping-fields p:last-child, .woocommerce-checkout .woocommerce-additional-fields p:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout h3, .woocommerce-checkout #order_review_heading {
	clear: both;
	margin: 0 0 20px;
	padding: 0 0 14px;
	border-bottom: 1px solid #e0e0e0;
	font-size: 22px;
	font-weight: 600;
	line-height: 1.35;
}

.woocommerce-checkout #order_review_heading {
	padding: 0;
	border-bottom: 0;
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
	display: inline-flex;
	align-items: flex-start;
	gap: 8px;
	font-weight: 400;
}

.woocommerce-checkout .form-row .optional {
	font-weight: 400;
	opacity: 0.65;
}

.woocommerce-checkout .form-row .required {
	color: #ff1744;
	font-weight: 600;
	text-decoration: none;
}

.woocommerce-checkout .woocommerce-input-wrapper {
	display: block;
	width: 100%;
}

.woocommerce-checkout input[type="text"], .woocommerce-checkout input[type="email"], .woocommerce-checkout input[type="tel"], .woocommerce-checkout input[type="password"], .woocommerce-checkout select, .woocommerce-checkout textarea {
	width: 100%;
	max-width: 100%;
	box-sizing: border-box;
}

.woocommerce-checkout input[type="text"], .woocommerce-checkout input[type="email"], .woocommerce-checkout input[type="tel"], .woocommerce-checkout input[type="password"], .woocommerce-checkout select {
	min-height: 46px;
}

.woocommerce-checkout textarea {
	min-height: 120px;
	resize: vertical;
}

.woocommerce-checkout input[type="radio"], .woocommerce-checkout input[type="checkbox"] {
	flex: 0 0 auto;
	width: auto;
	height: auto;
	margin: 5px 0 0;
	appearance: auto;
	-webkit-appearance: auto;
	-moz-appearance: auto;
}

.woocommerce-checkout .select2-container {
	max-width: 100%;
}

.woocommerce-checkout .select2-container .select2-selection--single {
	min-height: 46px;
	background: #ffffff;
	border: 0;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	font-family: inherit;
	font-size: 16px;
	font-weight: 400;
	line-height: 1.5;
	transition: background-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, color 0.15s ease-in-out;
}

.woocommerce-checkout .select2-container .select2-selection--single:focus, .woocommerce-checkout .select2-container.select2-container--focus .select2-selection--single, .woocommerce-checkout .select2-container.select2-container--open .select2-selection--single {
	background: #ffffff;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?>;
	color: <?php echo $default_text_color; ?>;
	outline: 0;
}

.woocommerce-checkout .select2-container .select2-selection--single .select2-selection__rendered {
	padding: 10px 44px 10px 16px;
	color: <?php echo $default_text_color; ?>;
	font-family: inherit;
	font-size: 16px;
	font-weight: 400;
	line-height: 1.5;
}

.woocommerce-checkout .select2-container .select2-selection--single .select2-selection__placeholder {
	color: <?php echo $default_text_color; ?>;
	opacity: 0.65;
}

.woocommerce-checkout .select2-container .select2-selection--single .select2-selection__arrow {
	top: 0;
	right: 12px;
	height: 100%;
}

.woocommerce-checkout .woocommerce-invalid input, .woocommerce-checkout .woocommerce-invalid select, .woocommerce-checkout .woocommerce-invalid textarea, .woocommerce-checkout .woocommerce-invalid .select2-container .select2-selection--single {
	box-shadow: inset 0 0 0 2px #ff1744 !important;
}

.woocommerce-checkout .woocommerce-validated input, .woocommerce-checkout .woocommerce-validated select, .woocommerce-checkout .woocommerce-validated textarea, .woocommerce-checkout .woocommerce-validated .select2-container .select2-selection--single {
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
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
	border-collapse: separate;
	border-spacing: 0;
	border-radius: 8px;
	overflow: hidden;
}

.woocommerce-checkout-review-order-table th, .woocommerce-checkout-review-order-table td {
	padding: 14px 12px;
	border: 0;
	border-bottom: 1px solid #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
	text-align: left;
	vertical-align: top;
}

.woocommerce-checkout-review-order-table th:last-child, .woocommerce-checkout-review-order-table td:last-child {
	text-align: right;
}

.woocommerce-checkout-review-order-table thead th {
	background: <?php echo $search_bar_background_color; ?>;
	font-weight: 600;
}

.woocommerce-checkout-review-order-table tbody tr:last-child td, .woocommerce-checkout-review-order-table tfoot tr:last-child th, .woocommerce-checkout-review-order-table tfoot tr:last-child td {
	border-bottom: 0;
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
	opacity: 0.75;
}

.woocommerce-checkout-review-order-table .shipping th, .woocommerce-checkout-review-order-table .shipping td, .woocommerce-checkout-review-order-table .shipping td:last-child {
	text-align: left;
}

.woocommerce-checkout-review-order-table .shipping ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.woocommerce-checkout-review-order-table .shipping li {
	display: flex;
	align-items: flex-start;
	gap: 8px;
	margin: 0 0 8px;
	list-style: none;
	text-align: left;
}

.woocommerce-checkout-review-order-table .shipping li:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout-review-order-table .shipping li label {
	display: block;
	text-align: left;
}

.woocommerce-checkout-review-order-table .shipping input[type="radio"] {
	flex: 0 0 auto;
	float: none;
	margin: 5px 0 0;
}

.woocommerce-checkout-review-order-table .order-total th, .woocommerce-checkout-review-order-table .order-total td {
	font-size: 18px;
	font-weight: 700;
}

.woocommerce-checkout .woocommerce-checkout-payment {
	clear: both;
	padding: 20px;
	margin: 0;
	background: <?php echo $search_bar_background_color; ?>;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

.woocommerce-checkout-payment ul.payment_methods {
	margin: 0 0 20px;
	padding: 0;
	list-style: none;
}

.woocommerce-checkout-payment ul.payment_methods li {
	clear: both;
	margin: 0 0 14px;
	padding: 16px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
	list-style: none;
	line-height: 1.5;
}

.woocommerce-checkout-payment ul.payment_methods li:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout-payment ul.payment_methods label {
	display: inline-flex;
	align-items: center;
	gap: 8px;
	font-weight: 600;
}

.woocommerce-checkout-payment .payment_box {
	clear: both;
	padding: 16px;
	margin: 14px 0 0;
	background: <?php echo $search_bar_background_color; ?>;
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

.woocommerce-checkout-payment .wc-saved-payment-methods {
	margin: 0 0 16px;
	padding: 0;
	list-style: none;
}

.woocommerce-checkout-payment .wc-saved-payment-methods li {
	margin: 0;
	padding: 0;
	background: transparent;
	border: 0;
	border-radius: 0;
}

.woocommerce-checkout-payment .wc-stripe-upe-element {
	min-height: 46px;
	padding: 12px 16px;
	background: #ffffff;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px #e0e0e0;
}

.woocommerce-checkout-payment #wc-stripe-upe-errors {
	margin: 10px 0 0;
	color: #ff1744;
}

.woocommerce-checkout-payment .place-order {
	clear: both;
	margin: 20px 0 0;
	padding: 0;
}

.woocommerce-checkout-payment .place-order .woocommerce-terms-and-conditions-wrapper {
	margin: 0 0 20px;
}

.woocommerce-checkout-payment .place-order .woocommerce-privacy-policy-text {
	font-size: 14px;
	line-height: 1.6;
}

.woocommerce-checkout-payment .place-order .woocommerce-privacy-policy-text p:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout #place_order {
	display: block;
	float: none;
	width: 100%;
	margin: 0;
	padding: 16px 24px;
	font-size: 18px;
	font-weight: 700;
	line-height: 1.2;
	text-align: center;
}

.woocommerce-checkout .checkout_coupon .form-row {
	margin-bottom: 0;
}

.woocommerce-checkout .checkout_coupon .button {
	margin-top: 0;
}

#ppc-button-ppcp-applepay, #ppc-button-ppcp-googlepay {
	clear: both;
	margin: 16px 0 0;
}

@media screen and (max-width: 1199px) {
	.woocommerce-checkout .woocommerce-form-login, .woocommerce-checkout .checkout_coupon, .woocommerce-checkout .woocommerce-billing-fields, .woocommerce-checkout .woocommerce-account-fields, .woocommerce-checkout .woocommerce-shipping-fields, .woocommerce-checkout .woocommerce-additional-fields, .woocommerce-checkout #order_review {
		padding: 20px;
	}

	.woocommerce-checkout .woocommerce-checkout-payment {
		padding: 16px;
	}

	.woocommerce-checkout .col2-set .col-1, .woocommerce-checkout .col2-set .col-2 {
		float: none;
		width: 100%;
	}

	.woocommerce-checkout .form-row-first, .woocommerce-checkout .form-row-last {
		float: none;
		width: 100%;
	}

	.woocommerce-checkout .checkout_coupon .form-row-first, .woocommerce-checkout .checkout_coupon .form-row-last {
		float: none;
		width: 100%;
		margin: 0 0 16px;
	}

	.woocommerce-checkout .checkout_coupon .form-row-last {
		margin-bottom: 0;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce-checkout .checkout_coupon {
		display: flex;
		align-items: stretch;
		gap: 16px;
	}

	.woocommerce-checkout .checkout_coupon .form-row-first {
		flex: 1 1 auto;
		float: none;
		width: auto;
	}

	.woocommerce-checkout .checkout_coupon .form-row-last {
		flex: 0 0 auto;
		float: none;
		width: auto;
	}

	.woocommerce-checkout form.checkout {
		display: grid;
		grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
		column-gap: 40px;
		align-items: start;
	}

	.woocommerce-checkout #customer_details {
		grid-column: 1;
		grid-row: 1 / span 2;
		margin: 0;
	}

	.woocommerce-checkout #order_review_heading {
		grid-column: 2;
		grid-row: 1;
	}

	.woocommerce-checkout #order_review {
		display: contents;
	}

	.woocommerce-checkout #order_review .woocommerce-checkout-review-order-table {
		grid-column: 2;
		grid-row: 2;
		margin: 0 0 30px;
	}

	.woocommerce-checkout #order_review .woocommerce-checkout-payment {
		grid-column: 1 / -1;
		grid-row: 3;
		margin: 0;
	}

	.woocommerce-checkout #customer_details.col2-set .col-1, .woocommerce-checkout #customer_details.col2-set .col-2 {
		float: none;
		width: 100%;
	}

	.woocommerce-checkout #customer_details.col2-set .col-2 {
		margin-top: 30px;
	}

	.woocommerce-checkout .form-row-first {
		clear: left;
		float: left;
		width: 48%;
	}

	.woocommerce-checkout .form-row-last {
		clear: right;
		float: right;
		width: 48%;
	}

	.woocommerce-checkout .form-row-wide {
		clear: both;
		float: none;
		width: 100%;
	}
}
