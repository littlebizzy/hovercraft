<?php
// styles for woocommerce cart
?>

.woocommerce-cart-form {
	margin-bottom: 30px;
}

.shop_table {
	width: 100%;
	border-collapse: collapse;
	margin-bottom: 20px;
}

.shop_table th,
.shop_table td {
	text-align: left;
	padding: 12px 10px;
	border-bottom: 1px solid #e2e2e2;
	vertical-align: middle;
}

.shop_table th {
	font-weight: 600;
	color: #333;
}

.shop_table td strong {
	font-size: 18px;
	color: #111;
}

.cart_item {
	border-bottom: 1px solid #eaeaea;
}

.product-thumbnail img {
	max-width: 60px;
	height: auto;
	border-radius: 4px;
}

.shop_table .product-remove {
	text-align: center;
	white-space: nowrap;
	padding-left: 5px;
	padding-right: 5px;
}

.shop_table .product-remove a.remove {
	font-size: 18px;
	color: #999;
	display: inline-block;
	line-height: 1;
	text-decoration: none;
}

.shop_table .product-remove a.remove:hover {
	color: #cc0000;
}

.actions {
	display: flex;
	justify-content: space-between;
	align-items: center;
	flex-wrap: wrap;
	gap: 15px;
	margin-top: 20px;
}

.actions .button {
	padding: 10px 20px;
	font-size: 14px;
	background-color: #666;
	color: #fff;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

.actions .button:hover {
	background-color: #444;
}

.woocommerce-cart .coupon input.input-text {
	width: 160px;
	padding: 8px;
	border: 1px solid #ccc;
	border-radius: 4px;
}

.woocommerce-cart .coupon .button {
	background-color: #888;
}

.woocommerce-cart .coupon .button:hover {
	background-color: #666;
}

.woocommerce-shipping-methods {
	list-style: none;
	padding: 0;
	margin: 0;
}

.woocommerce-shipping-methods li {
	margin-bottom: 12px;
	display: flex;
	align-items: flex-start;
	font-size: 16px;
	line-height: 1.6;
}

.woocommerce-shipping-methods label {
	display: inline-block;
	cursor: pointer;
	font-size: 16px;
	color: #222;
	line-height: 1.4;
}

.woocommerce-shipping-destination {
	font-size: 14px;
	color: #666;
	margin: 10px 0;
}

.shipping-calculator-button {
	display: inline-block;
	margin-top: 10px;
	color: #0073aa;
	font-weight: 500;
	cursor: pointer;
	text-decoration: underline;
}

.shipping-calculator-form {
	margin-top: 15px;
}

.shipping-calculator-form .form-row {
	margin-bottom: 15px;
}

.shipping-calculator-form label {
	display: block;
	margin-bottom: 5px;
	font-weight: 500;
	color: #333;
}

.shipping-calculator-form input,
.shipping-calculator-form select {
	width: 100%;
	padding: 8px;
	border: 1px solid #ccc;
	border-radius: 4px;
	background: #fff;
	box-sizing: border-box;
}

.shipping-calculator-form button.button {
	margin-top: 10px;
	padding: 10px 20px;
	font-size: 14px;
	background-color: #0071a1;
	color: #fff;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

.shipping-calculator-form button.button:hover {
	background-color: #005f8d;
}

.cart_totals {
	background: #f9f9f9;
	border: 1px solid #ddd;
	padding: 30px;
	margin-top: 30px;
	border-radius: 6px;
}

.cart_totals h2 {
	font-size: 22px;
	margin-bottom: 20px;
	border-bottom: 1px solid #ccc;
	padding-bottom: 10px;
	color: #222;
}

.wc-proceed-to-checkout {
	text-align: right;
	margin-top: 20px;
}

a.checkout-button {
	background: <?php echo $default_link_color; ?>;
	padding: 14px 24px;
	font-size: 16px;
	color: #fff;
	border-radius: 4px;
	border: none;
	display: inline-block;
	text-decoration: none;
}

a.checkout-button:hover {
	background: <?php echo $default_hover_color; ?>;
}

.cart-empty {
	text-align: center;
	font-size: 18px;
	color: #555;
	margin-bottom: 30px;
}

.return-to-shop {
	text-align: center;
	margin-top: 40px;
}

div.woocommerce-notices-wrapper ul {
	margin: 0;
	font-size: 18px;
}

@media screen and (max-width: 1200px) {
	div.woocommerce-notices-wrapper {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	div.woocommerce-notices-wrapper {
		margin-bottom: 30px;
	}
}
