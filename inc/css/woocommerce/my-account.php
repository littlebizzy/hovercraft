<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce my account
?>

.woocommerce-account .woocommerce {
	clear: both;
}

.woocommerce-account .woocommerce::after, .woocommerce-account .woocommerce-MyAccount-navigation::after, .woocommerce-account .woocommerce-MyAccount-content::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-account .woocommerce-MyAccount-navigation {
	margin: 0 0 30px;
}

.woocommerce-account .woocommerce-MyAccount-navigation ul {
	margin: 0;
	padding: 0;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
	list-style: none;
	overflow: hidden;
}

.woocommerce-account .woocommerce-MyAccount-navigation li {
	margin: 0;
	padding: 0;
	border-bottom: 1px solid #e0e0e0;
	list-style: none;
}

.woocommerce-account .woocommerce-MyAccount-navigation li:last-child {
	border-bottom: 0;
}

.woocommerce-account .woocommerce-MyAccount-navigation a {
	display: block;
	padding: 12px 15px;
	background: #ffffff;
	color: <?php echo $default_link_color; ?>;
	font-weight: 600;
	line-height: 1.5;
	text-decoration: none;
}

.woocommerce-account .woocommerce-MyAccount-navigation li.is-active a, .woocommerce-account .woocommerce-MyAccount-navigation a:hover {
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $default_hover_color; ?>;
}

.woocommerce-account .woocommerce-MyAccount-content {
	margin: 0 0 30px;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
}

.woocommerce-account .woocommerce-MyAccount-content p:last-child {
	margin-bottom: 0;
}

.woocommerce-account .woocommerce-MyAccount-content mark {
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
}

.woocommerce-account .woocommerce-MyAccount-content fieldset {
	margin: 0 0 30px;
	padding: 0;
	border: 0;
}

.woocommerce-account .woocommerce-MyAccount-content legend {
	margin: 0 0 20px;
	padding: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 22px;
	font-weight: 600;
	line-height: 1.3;
}

.woocommerce-account .woocommerce-MyAccount-content .form-row {
	clear: both;
	margin: 0 0 16px;
	padding: 0;
}

.woocommerce-account .woocommerce-MyAccount-content .form-row::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-account .woocommerce-MyAccount-content .form-row label {
	display: block;
	margin: 0 0 6px;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
	line-height: 1.5;
}

.woocommerce-account .woocommerce-MyAccount-content input[type="text"], .woocommerce-account .woocommerce-MyAccount-content input[type="email"], .woocommerce-account .woocommerce-MyAccount-content input[type="tel"], .woocommerce-account .woocommerce-MyAccount-content input[type="password"], .woocommerce-account .woocommerce-MyAccount-content select, .woocommerce-account .woocommerce-MyAccount-content textarea {
	width: 100%;
	max-width: 100%;
	box-sizing: border-box;
}

.woocommerce-account .woocommerce-MyAccount-content input[type="checkbox"], .woocommerce-account .woocommerce-MyAccount-content input[type="radio"] {
	width: auto;
	height: auto;
	margin-right: 6px;
	appearance: auto;
	-webkit-appearance: auto;
	-moz-appearance: auto;
}

.woocommerce-account .woocommerce-MyAccount-content .button {
	display: inline-block;
}

.woocommerce-account table.shop_table, .woocommerce-account .woocommerce-orders-table, .woocommerce-account .woocommerce-MyAccount-paymentMethods {
	width: 100%;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-collapse: collapse;
	border-radius: 0;
}

.woocommerce-account table.shop_table th, .woocommerce-account table.shop_table td, .woocommerce-account .woocommerce-orders-table th, .woocommerce-account .woocommerce-orders-table td, .woocommerce-account .woocommerce-MyAccount-paymentMethods th, .woocommerce-account .woocommerce-MyAccount-paymentMethods td {
	padding: 12px 10px;
	border: 1px solid #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5;
	text-align: left;
	vertical-align: middle;
}

.woocommerce-account table.shop_table th, .woocommerce-account .woocommerce-orders-table th, .woocommerce-account .woocommerce-MyAccount-paymentMethods th {
	background: <?php echo $search_bar_background_color; ?>;
	font-weight: 600;
}

.woocommerce-account .woocommerce-orders-table__cell-order-actions .button {
	margin: 0 5px 5px 0;
}

.woocommerce-account .woocommerce-customer-details address, .woocommerce-account .woocommerce-Address address {
	padding: 20px;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
	font-style: normal;
	line-height: 1.5;
}

.woocommerce-account .woocommerce-Addresses::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-account .woocommerce-Address {
	margin-bottom: 30px;
}

.woocommerce-account .woocommerce-Address-title {
	margin: 0 0 15px;
}

.woocommerce-account .woocommerce-Address-title::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce-account .woocommerce-Address-title h2, .woocommerce-account .woocommerce-column__title {
	float: left;
	margin: 0;
	font-size: 22px;
	line-height: 1.3;
}

.woocommerce-account .woocommerce-Address-title .edit {
	float: right;
	font-size: 14px;
	line-height: 1.5;
}

.woocommerce-account .woocommerce-EditAccountForm em {
	display: block;
	margin-top: 5px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	font-style: normal;
	line-height: 1.5;
}

.woocommerce-account .woocommerce-password-strength, .woocommerce-account .woocommerce-password-hint {
	display: block;
	margin: 8px 0 0;
	font-size: 12px;
	line-height: 1.5;
}

.woocommerce-account .woocommerce-password-strength {
	padding: 8px;
	background: <?php echo $search_bar_background_color; ?>;
	border: 0;
	border-radius: 4px;
	color: <?php echo $default_text_color; ?>;
}

.woocommerce-account .woocommerce-form-login, .woocommerce-account .woocommerce-form-register {
	clear: both;
	padding: 30px;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

.woocommerce-account .woocommerce-form-login .form-row, .woocommerce-account .woocommerce-form-register .form-row {
	margin: 0 0 16px;
}

.woocommerce-account .woocommerce-form-login .woocommerce-form-login__rememberme {
	display: block;
	margin: 0 0 16px;
}

.woocommerce-account .woocommerce-LostPassword {
	margin: 16px 0 0;
	font-size: 14px;
	line-height: 1.5;
}

@media screen and (max-width: 1199px) {
	.woocommerce-account .woocommerce-MyAccount-navigation, .woocommerce-account .woocommerce-MyAccount-content {
		float: none;
		width: 100%;
	}

	.woocommerce-account table.shop_table thead, .woocommerce-account .woocommerce-orders-table thead, .woocommerce-account .woocommerce-MyAccount-paymentMethods thead {
		display: none;
	}

	.woocommerce-account table.shop_table, .woocommerce-account table.shop_table tbody, .woocommerce-account table.shop_table tr, .woocommerce-account table.shop_table td, .woocommerce-account .woocommerce-orders-table, .woocommerce-account .woocommerce-orders-table tbody, .woocommerce-account .woocommerce-orders-table tr, .woocommerce-account .woocommerce-orders-table td, .woocommerce-account .woocommerce-MyAccount-paymentMethods, .woocommerce-account .woocommerce-MyAccount-paymentMethods tbody, .woocommerce-account .woocommerce-MyAccount-paymentMethods tr, .woocommerce-account .woocommerce-MyAccount-paymentMethods td {
		display: block;
		width: 100%;
		box-sizing: border-box;
	}

	.woocommerce-account table.shop_table tr, .woocommerce-account .woocommerce-orders-table tr, .woocommerce-account .woocommerce-MyAccount-paymentMethods tr {
		margin-bottom: 20px;
		border: 1px solid #e0e0e0;
	}

	.woocommerce-account table.shop_table td, .woocommerce-account .woocommerce-orders-table td, .woocommerce-account .woocommerce-MyAccount-paymentMethods td {
		border-width: 0 0 1px;
	}

	.woocommerce-account .woocommerce-Address-title h2, .woocommerce-account .woocommerce-Address-title .edit {
		float: none;
		display: block;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce-account .woocommerce-MyAccount-navigation {
		float: left;
		width: 25%;
	}

	.woocommerce-account .woocommerce-MyAccount-content {
		float: right;
		width: 70%;
	}

	.woocommerce-account .woocommerce-Address {
		float: left;
		width: 48%;
	}

	.woocommerce-account .woocommerce-Address:nth-child(2n) {
		float: right;
	}
}
