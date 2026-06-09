<?php

// block direct access
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

body.woocommerce-checkout #main {
	background: #f5f7f8;
}

body.woocommerce-checkout #content-wrapper {
	background: transparent;
	border-radius: 0;
}

.woocommerce-checkout .woocommerce-notices-wrapper, .woocommerce-checkout form.checkout {
	clear: both;
}

.woocommerce-checkout form.checkout::after, .woocommerce-checkout .col2-set::after, .woocommerce-checkout #order_review::after, .woocommerce-checkout .woocommerce-checkout-payment::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-checkout .woocommerce-form-login, .woocommerce-checkout .woocommerce-billing-fields, .woocommerce-checkout .woocommerce-account-fields, .woocommerce-checkout .woocommerce-shipping-fields, .woocommerce-checkout .woocommerce-additional-fields, .woocommerce-checkout #order_review {
	clear: both;
	padding: 24px;
	margin: 0 0 24px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

.woocommerce-checkout .woocommerce-form-login-toggle {
	clear: both;
	margin: 0 0 20px;
}

.woocommerce-checkout .woocommerce-form-login-toggle .woocommerce-info {
	margin-bottom: 0 !important;
}

.woocommerce-checkout .woocommerce-form-login p:last-child, .woocommerce-checkout .woocommerce-billing-fields p:last-child, .woocommerce-checkout .woocommerce-account-fields p:last-child, .woocommerce-checkout .woocommerce-shipping-fields p:last-child, .woocommerce-checkout .woocommerce-additional-fields p:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout h3, .woocommerce-checkout #order_review_heading {
	clear: both;
	margin: 0 0 16px;
	padding: 0 0 12px;
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

.woocommerce-checkout input[type="text"], .woocommerce-checkout input[type="email"], .woocommerce-checkout input[type="tel"], .woocommerce-checkout input[type="password"], .woocommerce-checkout select, .woocommerce-checkout textarea {
	background: #ffffff;
	border: 0;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px #e0e0e0;
	color: <?php echo $default_text_color; ?>;
}

.woocommerce-checkout input[type="text"]:focus, .woocommerce-checkout input[type="email"]:focus, .woocommerce-checkout input[type="tel"]:focus, .woocommerce-checkout input[type="password"]:focus, .woocommerce-checkout select:focus, .woocommerce-checkout textarea:focus {
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?>;
	outline: 0;
}

.woocommerce-checkout #order_comments {
	border: 1px solid #e0e0e0 !important;
	box-shadow: none !important;
}

.woocommerce-checkout #order_comments:focus {
	border-color: <?php echo $default_link_color; ?> !important;
	box-shadow: none !important;
	outline: 0;
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
	margin: 0 0 24px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-collapse: separate;
	border-spacing: 0;
	border-radius: 8px;
	overflow: hidden;
	table-layout: fixed;
}

.woocommerce-checkout-review-order-table .product-name {
	width: 75%;
}

.woocommerce-checkout-review-order-table .product-total {
	width: 25%;
}

.woocommerce-checkout-review-order-table .shipping {
	display: flex;
	width: 100%;
}

.woocommerce-checkout-review-order-table th, .woocommerce-checkout-review-order-table td {
	padding: 16px 12px;
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

.woocommerce-checkout-review-order-table .variation {
	clear: both;
	margin: 6px 0 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 13px;
	font-weight: 400;
	line-height: 1.4;
	opacity: 0.75;
}

.woocommerce-checkout-review-order-table .variation dt, .woocommerce-checkout-review-order-table .variation dd {
	display: inline;
	margin: 0;
	padding: 0;
}

.woocommerce-checkout-review-order-table .variation dt {
	font-weight: 600;
}

.woocommerce-checkout-review-order-table .variation dd p {
	display: inline;
	margin: 0;
}

.woocommerce-checkout-review-order-table .variation dd:after {
	content: "";
	display: block;
}

.woocommerce-checkout-review-order-table .shipping th, .woocommerce-checkout-review-order-table .shipping td, .woocommerce-checkout-review-order-table .shipping td:last-child {
	text-align: left;
}

.woocommerce-checkout-review-order-table .shipping th {
	flex: 0 0 25%;
	width: auto;
}

.woocommerce-checkout-review-order-table .shipping td {
	flex: 1 1 75%;
	width: auto;
	min-width: 0;
}

.woocommerce-checkout-review-order-table .shipping ul {
	width: 100%;
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
	flex: 1 1 auto;
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
	padding: 0;
	margin: 0;
	background: transparent;
	border: 0;
	border-radius: 0;
}

body.woocommerce-checkout #payment ul.payment_methods {
	margin: 0 0 24px;
	padding: 0;
	list-style: none;
}

body.woocommerce-checkout #payment ul.payment_methods li {
	clear: both;
	margin: 0 0 12px;
	padding: 16px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
	color: <?php echo $default_text_color; ?>;
	list-style: none;
	line-height: 1.5;
}

body.woocommerce-checkout #payment ul.payment_methods li:last-child {
	margin-bottom: 0;
}

body.woocommerce-checkout #payment ul.payment_methods li::after {
	clear: both;
	content: "";
	display: table;
}

body.woocommerce-checkout #payment ul.payment_methods input[type="radio"] {
	float: none;
	margin: 5px 8px 0 0;
}

body.woocommerce-checkout #payment ul.payment_methods label {
	display: inline-flex;
	align-items: flex-start;
	gap: 8px;
	margin: 0;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
	line-height: 1.5;
}

body.woocommerce-checkout #payment .payment_box {
	clear: both;
	padding: 16px;
	margin: 16px 0 0;
	background: #f5f7f8;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
}

.woocommerce-checkout-payment .payment_box p {
	margin: 0 0 16px;
}

.woocommerce-checkout-payment .payment_box p:last-child {
	margin-bottom: 0;
}

.woocommerce-checkout-payment .payment_box fieldset, .woocommerce-checkout-payment .wc-payment-form, .woocommerce-checkout-payment .wc-upe-form {
	clear: both;
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

body.woocommerce-checkout #payment .wc-stripe-upe-element, body.woocommerce-checkout #payment .StripeElement {
	width: 100%;
	min-height: 46px;
	padding: 12px 16px;
	background: #ffffff;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px #e0e0e0;
	box-sizing: border-box;
}

.woocommerce-checkout-payment .woocommerce-SavedPaymentMethods-saveNew {
	display: flex;
	align-items: flex-start;
	gap: 8px;
	margin: 16px 0 0;
	padding: 0;
}

.woocommerce-checkout-payment .woocommerce-SavedPaymentMethods-saveNew input[type="checkbox"] {
	flex: 0 0 auto;
	margin: 5px 0 0;
}

.woocommerce-checkout-payment .woocommerce-SavedPaymentMethods-saveNew label {
	flex: 1 1 auto;
	display: block !important;
	margin: 0;
	font-weight: 400;
	line-height: 1.5;
}

.woocommerce-checkout-payment #wc-stripe-upe-errors {
	clear: both;
	margin: 12px 0 0;
	color: #ff1744;
	font-weight: 600;
	line-height: 1.5;
}

.woocommerce-checkout-payment .place-order {
	clear: both;
	margin: 24px 0 0;
	padding: 0;
}

.woocommerce-checkout-payment .place-order .woocommerce-terms-and-conditions-wrapper {
	margin: 0 0 20px;
	padding: 20px 0 0;
	border-top: 1px solid #e0e0e0;
}

.woocommerce-checkout-payment .place-order .woocommerce-privacy-policy-text {
	color: <?php echo $default_text_color; ?>;
	font-size: 14px;
	line-height: 1.6;
}

.woocommerce-checkout-payment .place-order .woocommerce-privacy-policy-text p {
	margin: 0 0 16px;
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

#ppc-button-ppcp-applepay, #ppc-button-ppcp-googlepay {
	clear: both;
	margin: 16px 0 0;
}

#ppc-button-ppcp-applepay:empty, #ppc-button-ppcp-googlepay:empty {
	display: none;
}

@media screen and (max-width: 1199px) {
	.woocommerce-checkout .woocommerce-form-login, .woocommerce-checkout .woocommerce-billing-fields, .woocommerce-checkout .woocommerce-account-fields, .woocommerce-checkout .woocommerce-shipping-fields, .woocommerce-checkout .woocommerce-additional-fields, .woocommerce-checkout #order_review {
		padding: 20px;
		margin-bottom: 24px;
	}


	.woocommerce-checkout .col2-set .col-1, .woocommerce-checkout .col2-set .col-2 {
		float: none;
		width: 100%;
	}

	.woocommerce-checkout .form-row-first {
		clear: left !important;
		float: left !important;
		width: calc(50% - 8px) !important;
		margin: 0 0 16px !important;
	}

	.woocommerce-checkout .form-row-last {
		clear: right !important;
		float: right !important;
		width: calc(50% - 8px) !important;
		margin: 0 0 16px !important;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce-checkout form.checkout {
		display: grid;
		grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
		column-gap: 32px;
		align-items: start;
	}

	.woocommerce-checkout #customer_details {
		grid-column: 1;
		grid-row: 1;
		margin: 0;
	}

	.woocommerce-checkout #order_review_heading {
		grid-column: 2;
		grid-row: 1;
		align-self: start;
	}

	.woocommerce-checkout #order_review {
		grid-column: 2;
		grid-row: 1;
		align-self: start;
		margin: 44px 0 24px;
	}

	.woocommerce-checkout #customer_details.col2-set .col-1, .woocommerce-checkout #customer_details.col2-set .col-2 {
		float: none;
		width: 100%;
	}

	.woocommerce-checkout #customer_details.col2-set .col-2 {
		margin-top: 24px;
	}

	.woocommerce-checkout .form-row-first {
		clear: left !important;
		float: left !important;
		width: calc(50% - 8px) !important;
		margin: 0 0 16px !important;
	}

	.woocommerce-checkout .form-row-last {
		clear: right !important;
		float: right !important;
		width: calc(50% - 8px) !important;
		margin: 0 0 16px !important;
	}

	.woocommerce-checkout .form-row-wide {
		clear: both;
		float: none;
		width: 100%;
	}
}
