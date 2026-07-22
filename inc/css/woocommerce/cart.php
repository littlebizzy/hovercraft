<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce cart
?>

.woocommerce-cart .woocommerce-notices-wrapper {
	clear: both;
}

.woocommerce-cart .woocommerce-cart-form {
	clear: both;
	margin-bottom: 30px;
}

.woocommerce-cart .woocommerce-cart-form::after, .woocommerce-cart .cart-collaterals::after, .woocommerce-cart .cart_totals::after, .woocommerce-cart .shop_table td.actions::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-cart .shop_table {
	width: 100%;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0 !important;
	border-collapse: separate;
	border-spacing: 0;
	border-radius: 0;
	table-layout: auto;
}

.woocommerce-cart .shop_table thead th {
	background: <?php echo $search_bar_background_color; ?> !important;
}

.woocommerce-cart .shop_table th, .woocommerce-cart .shop_table td {
	padding: 12px 10px;
	background: #ffffff;
	border: 0 !important;
	border-right: 1px solid #e0e0e0 !important;
	border-bottom: 1px solid #e0e0e0 !important;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
	text-align: left;
	vertical-align: middle;
}

.woocommerce-cart .shop_table th:last-child, .woocommerce-cart .shop_table td:last-child {
	border-right: 0 !important;
}

.woocommerce-cart .shop_table tr:last-child th, .woocommerce-cart .shop_table tr:last-child td {
	border-bottom: 0 !important;
}

.woocommerce-cart .shop_table th {
	font-weight: 600;
}

.woocommerce-cart .shop_table .product-thumbnail img {
	display: block;
	max-width: 80px;
	height: auto;
	border-radius: 0;
	object-fit: cover;
}

.woocommerce-cart .shop_table .product-name a {
	font-weight: 600;
}

.woocommerce-cart .shop_table .product-price, .woocommerce-cart .shop_table .product-subtotal {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.woocommerce-cart .shop_table .product-remove {
	text-align: center;
}

.woocommerce-cart .shop_table .product-remove a.remove {
	display: inline-block;
	width: 24px;
	height: 24px;
	border-radius: 999px !important;
	color: #ff1744 !important;
	font-size: 24px;
	font-weight: 700;
	line-height: 20px;
	text-align: center;
	text-decoration: none;
}

.woocommerce-cart .shop_table .product-remove a.remove:hover {
	background: #ff1744;
	color: #ffffff !important;
}

.woocommerce-cart .shop_table .quantity {
	margin: 0;
}

.woocommerce-cart .shop_table .quantity input.qty, .woocommerce-cart .shop_table .quantity select.qty {
	width: 90px !important;
	max-width: 90px !important;
	text-align: center;
}

.woocommerce-cart .shop_table td.actions {
	padding: 20px !important;
	border-right: 0 !important;
	border-bottom: 0 !important;
}

.woocommerce-cart .coupon {
	display: flex;
	align-items: center;
	gap: 10px;
}

.woocommerce-cart .coupon label {
	display: none;
}

.woocommerce-cart .coupon input.input-text {
	width: auto !important;
	max-width: 100%;
	min-height: 46px;
	padding: 10px 16px !important;
	background: #ffffff !important;
	border: 0 !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
	box-sizing: border-box;
	color: <?php echo $default_text_color; ?> !important;
	font-size: 16px;
	line-height: 1.5;
}

.woocommerce-cart .coupon input.input-text:focus {
	background: #ffffff !important;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	outline: 0 !important;
}

.woocommerce-cart .coupon .button, form.woocommerce-cart-form button[name="update_cart"] {
	padding: 10px 16px;
	background: <?php echo $default_link_color; ?> !important;
	border: 1px solid transparent !important;
	border-radius: 4px;
	box-sizing: border-box;
	color: #ffffff !important;
	cursor: pointer;
	font-size: 16px;
	font-weight: 700;
	line-height: 1.5;
	opacity: 1 !important;
	text-decoration: none;
}

.woocommerce-cart .coupon .button:hover, .woocommerce-cart .coupon .button:focus, form.woocommerce-cart-form button[name="update_cart"]:hover, form.woocommerce-cart-form button[name="update_cart"]:focus {
	background: <?php echo $default_hover_color; ?> !important;
	color: #ffffff !important;
}

form.woocommerce-cart-form button[name="update_cart"] {
	float: right;
}

form.woocommerce-cart-form button[name="update_cart"]:disabled, form.woocommerce-cart-form button[name="update_cart"][disabled] {
	background: <?php echo $search_bar_background_color; ?> !important;
	border-color: #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: not-allowed;
	opacity: 1 !important;
}

.woocommerce-cart .cart-collaterals {
	clear: both;
	margin: 30px 0 0;
}

.woocommerce-cart .cart_totals {
	clear: both;
	padding: 30px;
	margin: 0;
	background: <?php echo $search_bar_background_color; ?>;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

.woocommerce-cart .cart_totals h2 {
	margin: 0 0 20px;
	padding: 0 0 10px;
	border-bottom: 1px solid #e0e0e0;
	font-size: 22px;
}

.woocommerce-cart .cart_totals table {
	width: 100%;
	margin: 0;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-collapse: separate;
	border-spacing: 0;
	border-radius: 0;
}

.woocommerce-cart .cart_totals table th, .woocommerce-cart .cart_totals table td {
	padding: 12px 10px;
	border: 0;
	border-right: 1px solid #e0e0e0;
	border-bottom: 1px solid #e0e0e0;
	line-height: 1.5;
	vertical-align: top;
}

.woocommerce-cart .cart_totals table th:last-child, .woocommerce-cart .cart_totals table td:last-child {
	border-right: 0;
}

.woocommerce-cart .cart_totals table tr:last-child th, .woocommerce-cart .cart_totals table tr:last-child td {
	border-bottom: 0;
}

.woocommerce-cart .cart_totals table th {
	font-weight: 600;
	text-align: left;
}

.woocommerce-cart .cart_totals .order-total .amount {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

.woocommerce-cart .woocommerce-shipping-methods {
	margin: 0;
	padding: 0;
	list-style: none;
}

.woocommerce-cart .woocommerce-shipping-methods li {
	display: flex;
	align-items: flex-start;
	gap: 8px;
	margin: 0 0 12px;
	font-size: 16px;
	line-height: 1.5;
}

.woocommerce-cart .woocommerce-shipping-methods li:last-child {
	margin-bottom: 0;
}

.woocommerce-cart .woocommerce-shipping-methods label {
	display: inline-block;
	color: <?php echo $default_text_color; ?>;
	cursor: pointer;
	font-size: 16px;
	line-height: 1.5;
}

.woocommerce-cart .woocommerce-shipping-destination {
	margin: 10px 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 14px;
	line-height: 1.5;
}

.woocommerce-cart .shipping-calculator-button {
	display: inline-block;
	margin-top: 10px;
	color: <?php echo $default_link_color; ?>;
	cursor: pointer;
	font-weight: 500;
	text-decoration: underline;
}

.woocommerce-cart .shipping-calculator-button:hover {
	color: <?php echo $default_hover_color; ?>;
}

.woocommerce-cart .shipping-calculator-form {
	margin-top: 15px;
}

.woocommerce-cart .shipping-calculator-form .form-row {
	margin: 0 0 15px;
}

.woocommerce-cart .shipping-calculator-form label {
	display: block;
	margin-bottom: 5px;
	color: <?php echo $default_text_color; ?>;
	font-weight: 500;
}

.woocommerce-cart .shipping-calculator-form input, .woocommerce-cart .shipping-calculator-form select {
	width: 100%;
	box-sizing: border-box;
}

.woocommerce-cart .shipping-calculator-form button.button {
	margin-top: 10px;
}

.woocommerce-cart .wc-proceed-to-checkout {
	clear: both;
	margin-top: 20px;
	text-align: right;
}

.woocommerce-cart .wc-proceed-to-checkout::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-cart a.checkout-button {
	display: inline-block;
	padding: 14px 24px;
	background: <?php echo $default_link_color; ?>;
	border: 0;
	border-radius: 4px;
	color: #ffffff;
	font-size: 16px;
	line-height: 1.5;
	text-align: center;
	text-decoration: none;
}

.woocommerce-cart a.checkout-button:hover {
	background: <?php echo $default_hover_color; ?>;
	color: #ffffff;
}

.woocommerce-cart .cross-sells {
	clear: both;
	width: 100%;
	margin: 40px 0 0;
}

.woocommerce-cart .cross-sells h2 {
	margin: 0 0 20px;
	font-size: 24px;
}

.woocommerce-cart .cross-sells ul.products {
	display: grid !important;
	gap: 30px;
	width: 100%;
	margin: 0 !important;
	padding: 0 !important;
}

.woocommerce-cart .cross-sells ul.products::before, .woocommerce-cart .cross-sells ul.products::after {
	display: none !important;
	content: none !important;
}

.woocommerce-cart .cross-sells ul.products li.product {
	clear: none !important;
	float: none !important;
	width: 100% !important;
	margin: 0 !important;
}

.woocommerce-cart .cross-sells ul.products li.product a img {
	border-radius: 0;
	object-fit: contain !important;
	object-position: center center !important;
}

.woocommerce-cart .cart-empty {
	clear: both;
	margin: 0 0 30px;
	color: <?php echo $default_text_color; ?>;
	font-size: 18px;
	line-height: 1.5;
	text-align: center;
}

.woocommerce-cart .return-to-shop {
	clear: both;
	margin-top: 40px;
	text-align: center;
}

.woocommerce-cart div.woocommerce-notices-wrapper ul {
	margin: 0;
	font-size: 18px;
}

@media screen and (max-width: 1199px) {
	.woocommerce-cart .woocommerce-notices-wrapper {
		margin-bottom: 20px;
	}

	.woocommerce-cart .shop_table {
		border: 0 !important;
	}

	.woocommerce-cart .shop_table thead {
		display: none;
	}

	.woocommerce-cart .shop_table, .woocommerce-cart .shop_table tbody, .woocommerce-cart .shop_table tr, .woocommerce-cart .shop_table td {
		display: block;
		width: 100%;
		box-sizing: border-box;
	}

	.woocommerce-cart .shop_table tr {
		margin-bottom: 20px;
		border: 1px solid #e0e0e0;
	}

	.woocommerce-cart .shop_table td {
		border-right: 0 !important;
		border-bottom: 1px solid #e0e0e0 !important;
		text-align: left;
	}

	.woocommerce-cart .shop_table td:last-child {
		border-bottom: 0 !important;
	}

	.woocommerce-cart .shop_table td::before {
		display: block;
		margin-bottom: 5px;
		font-weight: 600;
	}

	.woocommerce-cart .shop_table td.product-remove, .woocommerce-cart .shop_table td.actions {
		text-align: left;
	}

	.woocommerce-cart .coupon {
		display: block;
		margin-bottom: 15px;
	}

	.woocommerce-cart .coupon input.input-text {
		width: 100% !important;
		margin-bottom: 10px;
	}

	.woocommerce-cart .coupon .button, form.woocommerce-cart-form button[name="update_cart"], .woocommerce-cart a.checkout-button {
		display: block;
		width: 100%;
		float: none;
		text-align: center;
	}

	.woocommerce-cart .cross-sells ul.products {
		grid-template-columns: 1fr;
	}

	.woocommerce-cart .cart_totals {
		padding: 20px;
	}

	.woocommerce-cart .wc-proceed-to-checkout {
		text-align: left;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce-cart .woocommerce-notices-wrapper {
		margin-bottom: 30px;
	}

	.woocommerce-cart .cart-collaterals {
		display: flex;
		align-items: flex-start;
		justify-content: space-between;
		gap: 40px;
	}

	.woocommerce-cart .cart-collaterals::after {
		display: none;
	}

	.woocommerce-cart .cart-collaterals .cross-sells {
		clear: none;
		flex: 1 1 auto;
		float: none !important;
		order: 1;
		width: auto !important;
		margin: 0;
	}

	.woocommerce-cart .cart-collaterals .cart_totals {
		clear: none;
		flex: 0 0 42%;
		float: none !important;
		order: 2;
		width: 42% !important;
	}

	.woocommerce-cart .cross-sells ul.products {
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}

	.woocommerce-cart .cross-sells ul.products li.product a img {
		height: 220px !important;
		max-height: 220px !important;
	}
}
