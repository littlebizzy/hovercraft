<?php
// styles for woocommerce cart
?>

.woocommerce-cart .woocommerce-cart-form {
	margin-bottom: 30px;
}

.woocommerce-cart .shop_table {
	width: 100%;
	table-layout: auto;
	border-collapse: collapse;
	margin-bottom: 30px;
}

.woocommerce-cart .shop_table thead tr {
	background: #eeeeee;
}

.woocommerce-cart .shop_table th,
.woocommerce-cart .shop_table td {
	text-align: left;
	padding: 12px 10px;
	border: 1px solid #e0e0e0;
	vertical-align: middle;
	line-height: 1.5;
	background: #ffffff;
}

.woocommerce-cart .shop_table th {
	font-weight: 600;
}

.woocommerce-cart .product-thumbnail img {
	max-width: 80px;
	height: auto;
	display: block;
	object-fit: cover;
	border-radius: 4px;
}

.woocommerce-cart .shop_table .product-remove {
	text-align: center;
}

.woocommerce-cart .shop_table .product-remove a.remove {
	display: block;
	font-size: 24px;
	font-weight: 700;
	line-height: 1;
	color: #ff1744 !important;
	text-decoration: none;
	border-radius: 50%;
}

.woocommerce-cart .shop_table .product-remove a.remove:hover {
	color: #fff;
	background: #ff1744;
}

.woocommerce-cart .shop_table td.actions {
	width: 100% !important;
}

.woocommerce-cart .coupon {
	display: flex;
	flex-grow: 1;
	gap: 10px;
	align-items: center;
	min-width: 240px;
}

.woocommerce-cart .coupon label {
	display: none;
}

.woocommerce-cart .coupon input.input-text {
	width: 100%;
	padding: 10px;
	font-size: 14px;
	border: 1px solid #bdbdbd;
	border-radius: 4px;
}

.woocommerce-cart .coupon .button {
	padding: 10px 20px;
	font-size: 14px;
	border: 1px solid #ccc;
	border-radius: 4px;
	background: none;
	color: inherit;
	cursor: pointer;
}

.woocommerce-cart .coupon .button:hover {
	background: #f2f2f2;
}

.woocommerce-cart .actions > .button[name="update_cart"] {
	margin-left: auto;
	padding: 10px 20px;
	font-size: 14px;
	background-color: #212121;
	color: #fff;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

.woocommerce-cart .actions > .button[name="update_cart"]:hover {
	background-color: #000;
}

.woocommerce-cart .woocommerce-shipping-methods {
	list-style: none;
	padding: 0;
	margin: 0;
}

.woocommerce-cart .woocommerce-shipping-methods li {
	margin-bottom: 12px;
	display: flex;
	align-items: flex-start;
	font-size: 16px;
	line-height: 1.6;
}

.woocommerce-cart .woocommerce-shipping-methods label {
	display: inline-block;
	cursor: pointer;
	font-size: 16px;
	color: #222;
	line-height: 1.4;
}

.woocommerce-cart .woocommerce-shipping-destination {
	font-size: 14px;
	color: #666;
	margin: 10px 0;
}

.woocommerce-cart .shipping-calculator-button {
	display: inline-block;
	margin-top: 10px;
	color: #0073aa;
	font-weight: 500;
	cursor: pointer;
	text-decoration: underline;
}

.woocommerce-cart .shipping-calculator-form {
	margin-top: 15px;
}

.woocommerce-cart .shipping-calculator-form .form-row {
	margin-bottom: 15px;
}

.woocommerce-cart .shipping-calculator-form label {
	display: block;
	margin-bottom: 5px;
	font-weight: 500;
	color: #333;
}

.woocommerce-cart .shipping-calculator-form input,
.woocommerce-cart .shipping-calculator-form select {
	width: 100%;
	padding: 8px;
	border: 1px solid #ccc;
	border-radius: 4px;
	background: #fff;
	box-sizing: border-box;
}

.woocommerce-cart .shipping-calculator-form button.button {
	margin-top: 10px;
	padding: 10px 20px;
	font-size: 14px;
	background-color: #0071a1;
	color: #fff;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

.woocommerce-cart .shipping-calculator-form button.button:hover {
	background-color: #005f8d;
}

.woocommerce-cart .cart_totals {
	background: #f9f9f9;
	border: 1px solid #ddd;
	padding: 30px;
	margin-top: 30px;
	border-radius: 6px;
}

.woocommerce-cart .cart_totals h2 {
	font-size: 22px;
	margin-bottom: 20px;
	border-bottom: 1px solid #ccc;
	padding-bottom: 10px;
	color: #222;
}

.woocommerce-cart .wc-proceed-to-checkout {
	text-align: right;
	margin-top: 20px;
}

.woocommerce-cart a.checkout-button {
	background: <?php echo $default_link_color; ?>;
	padding: 14px 24px;
	font-size: 16px;
	color: #fff;
	border-radius: 4px;
	border: none;
	display: inline-block;
	text-decoration: none;
}

.woocommerce-cart a.checkout-button:hover {
	background: <?php echo $default_hover_color; ?>;
}

.woocommerce-cart .cart-empty {
	text-align: center;
	font-size: 18px;
	color: #555;
	margin-bottom: 30px;
}

.woocommerce-cart .return-to-shop {
	text-align: center;
	margin-top: 40px;
}

.woocommerce-cart div.woocommerce-notices-wrapper ul {
	margin: 0;
	font-size: 18px;
}

@media screen and (max-width: 1200px) {
	.woocommerce-cart div.woocommerce-notices-wrapper {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	.woocommerce-cart div.woocommerce-notices-wrapper {
		margin-bottom: 30px;
	}
}

@media screen and (max-width: 600px) {
	.woocommerce-cart .actions {
  		display: flex;
		flex-direction: column;
		align-items: stretch;
		width: 100%;
	}

	.woocommerce-cart .actions > .button[name="update_cart"] {
	}
}
