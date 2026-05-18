<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce add to cart
?>

.add_to_cart_button, .single_add_to_cart_button, .woocommerce .button.add_to_cart_button, .woocommerce a.add_to_cart_button, .woocommerce button.single_add_to_cart_button, .woocommerce input.single_add_to_cart_button {
	display: inline-block;
	padding: 10px 20px;
	border: 0;
	border-radius: 0;
	box-shadow: none;
	cursor: pointer;
	font-size: 16px;
	font-weight: 700;
	line-height: 1.5;
	text-align: center;
	text-decoration: none;
}

.single_add_to_cart_button, .woocommerce button.single_add_to_cart_button, .woocommerce input.single_add_to_cart_button {
	background: <?php echo $default_link_color; ?> !important;
	color: #ffffff !important;
}

.single_add_to_cart_button:hover, .single_add_to_cart_button:focus, .single_add_to_cart_button:active, .woocommerce button.single_add_to_cart_button:hover, .woocommerce button.single_add_to_cart_button:focus, .woocommerce button.single_add_to_cart_button:active, .woocommerce input.single_add_to_cart_button:hover, .woocommerce input.single_add_to_cart_button:focus, .woocommerce input.single_add_to_cart_button:active {
	background: <?php echo $default_hover_color; ?> !important;
	color: #ffffff !important;
}

.add_to_cart_button, .woocommerce .button.add_to_cart_button, .woocommerce a.add_to_cart_button {
	background: #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
}

.add_to_cart_button:hover, .add_to_cart_button:focus, .add_to_cart_button:active, .woocommerce .button.add_to_cart_button:hover, .woocommerce .button.add_to_cart_button:focus, .woocommerce .button.add_to_cart_button:active, .woocommerce a.add_to_cart_button:hover, .woocommerce a.add_to_cart_button:focus, .woocommerce a.add_to_cart_button:active {
	background: #bdbdbd !important;
	color: <?php echo $default_text_color; ?> !important;
}

.woocommerce .button.loading, .woocommerce .button.added, .woocommerce a.add_to_cart_button.loading, .woocommerce a.add_to_cart_button.added {
	opacity: 0.75;
}

.woocommerce a.added_to_cart {
	display: inline-block;
	margin: 10px 0 0;
	color: <?php echo $default_link_color; ?>;
	font-size: 14px;
	font-weight: 600;
	line-height: 1.5;
	text-decoration: underline;
}

.woocommerce a.added_to_cart:hover {
	color: <?php echo $default_hover_color; ?>;
}

.woocommerce div.product form.cart, form.cart {
	clear: both;
	margin: 0 0 30px;
}

.woocommerce div.product form.cart::after, form.cart::after, .woocommerce div.product form.cart .variations_button::after, .woocommerce div.product form.cart .single_variation_wrap::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce div.product form.cart .button {
	vertical-align: middle;
}

.woocommerce div.product form.cart table.variations, .single-product .summary .variations_form table.variations {
	width: 100% !important;
	margin: 0 0 30px !important;
	background: #ffffff !important;
	border: 0;
	border-collapse: collapse !important;
}

.woocommerce div.product form.cart table.variations tbody, .woocommerce div.product form.cart table.variations tr, .single-product .summary .variations_form table.variations tbody, .single-product .summary .variations_form table.variations tr {
	display: block !important;
	width: 100% !important;
}

.woocommerce div.product form.cart table.variations th.label, .woocommerce div.product form.cart table.variations td.value, .single-product .summary .variations_form table.variations th.label, .single-product .summary .variations_form table.variations td.value {
	display: block !important;
	clear: both !important;
	float: none !important;
	width: 100% !important;
	margin: 0 !important;
	padding: 0 !important;
	background: #ffffff !important;
	border: 0 !important;
	line-height: 1.5 !important;
}

.woocommerce div.product form.cart table.variations th.label label, .single-product .summary .variations_form table.variations th.label label {
	display: block;
	margin: 0 0 6px;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
}

.woocommerce div.product form.cart table.variations td.value, .single-product .summary .variations_form table.variations td.value {
	padding-bottom: 16px !important;
}

.woocommerce div.product form.cart table.variations td.value select, .single-product .summary .variations_form table.variations td.value select {
	display: block !important;
	box-sizing: border-box !important;
	width: 100% !important;
	max-width: 100% !important;
	height: 44px;
	padding: 8px 12px;
	background: #ffffff !important;
	border: 1px solid #cfcfcf !important;
	border-radius: 0;
	color: <?php echo $default_text_color; ?> !important;
	line-height: 1.2;
}

.woocommerce div.product form.cart table.variations td.value select:focus, .woocommerce div.product form.cart table.variations td.value select:active, .single-product .summary .variations_form table.variations td.value select:focus, .single-product .summary .variations_form table.variations td.value select:active {
	background: #ffffff !important;
	border-color: <?php echo $default_link_color; ?> !important;
	box-shadow: 0 0 0 2px rgba(0,0,0,0.05) inset !important;
	color: <?php echo $default_text_color; ?> !important;
}

.woocommerce div.product form.cart .reset_variations, .single-product .summary .variations_form .reset_variations {
	display: inline-block !important;
	margin-top: 6px !important;
	color: <?php echo $default_link_color; ?>;
	font-size: 13px;
	line-height: 1.5;
}

.woocommerce div.product form.cart .reset_variations:hover, .single-product .summary .variations_form .reset_variations:hover {
	color: <?php echo $default_hover_color; ?>;
}

.woocommerce div.product form.cart .reset_variations[style*="visibility: hidden"], .woocommerce div.product form.cart .reset_variations[aria-hidden="true"], .single-product .summary .variations_form .reset_variations[style*="visibility: hidden"], .single-product .summary .variations_form .reset_variations[aria-hidden="true"] {
	display: none !important;
	visibility: hidden !important;
}

.woocommerce div.product form.cart .single_variation, .woocommerce div.product form.cart .woocommerce-variation, div.single_variation_wrap {
	clear: both;
	margin: 0 0 20px;
}

.woocommerce div.product form.cart .woocommerce-variation-price, .woocommerce div.product form.cart .woocommerce-variation-availability, .woocommerce div.product form.cart .woocommerce-variation-description {
	margin: 0 0 15px;
}

.woocommerce div.product form.cart .woocommerce-variation-description p:last-child {
	margin-bottom: 0;
}

.woocommerce div.product form.cart .variations_button {
	clear: both;
}

.woocommerce div.product form.cart.grouped_form {
	display: block !important;
}

.woocommerce div.product form.cart.grouped_form table.group_table {
	width: 100%;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-collapse: collapse;
}

.woocommerce div.product form.cart.grouped_form table.group_table td {
	padding: 12px 10px;
	border: 1px solid #e0e0e0;
	vertical-align: middle;
}

.woocommerce div.product form.cart.grouped_form table.group_table td.woocommerce-grouped-product-list-item__label label {
	font-weight: 600;
}

.woocommerce div.product form.cart.grouped_form table.group_table td.woocommerce-grouped-product-list-item__price {
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-weight: 600;
}

input.qty {
	width: 60px !important;
	height: 40px !important;
	margin: 0 !important;
	padding: 0 !important;
	background: #f2f2f2 !important;
	border: 0 !important;
	box-shadow: none !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: default !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 40px !important;
	text-align: center !important;
	vertical-align: middle !important;
	appearance: textfield;
	-moz-appearance: textfield;
	-webkit-appearance: none;
}

input.qty::-webkit-outer-spin-button, input.qty::-webkit-inner-spin-button {
	margin: 0 !important;
	-webkit-appearance: none !important;
}

input.qty[type="number"] {
	-moz-appearance: textfield !important;
}

.buttons-added {
	display: inline-flex !important;
	align-items: center !important;
	padding: 0 !important;
	background: #f7f7f7 !important;
	border: 1px solid #d9d9d9 !important;
	border-radius: 0 !important;
	box-shadow: none !important;
	overflow: hidden !important;
}

.quantity-button {
	display: flex !important;
	align-items: center !important;
	justify-content: center !important;
	width: 40px !important;
	height: 40px !important;
	margin: 0 !important;
	padding: 0 !important;
	background: #eaeaea !important;
	border: 0 !important;
	box-shadow: inset 0 1px 0 rgba(255,255,255,0.45), inset 0 -1px 0 rgba(0,0,0,0.06) !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: pointer !important;
	font-size: 22px !important;
	line-height: 40px !important;
	transition: background 0.15s ease, box-shadow 0.15s ease !important;
	user-select: none !important;
}

.quantity-button:hover {
	background: #e3e3e3 !important;
	box-shadow: inset 0 1px 0 rgba(255,255,255,0.4), inset 0 -1px 0 rgba(0,0,0,0.08) !important;
}

.quantity-button:active {
	background: #dddddd !important;
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.12) !important;
}

.single-product form.cart {
	display: flex !important;
	flex-direction: column !important;
	align-items: stretch !important;
}

.single-product form.cart div.quantity {
	width: 100% !important;
	margin: 0 0 15px !important;
}

.single-product form.cart div.quantity.buttons-added {
	display: flex !important;
	flex-direction: row !important;
	align-items: stretch !important;
}

.single-product form.cart div.quantity.buttons-added button.quantity-button {
	flex: 0 0 40px !important;
}

.single-product form.cart div.quantity.buttons-added input.qty {
	flex: 1 1 auto !important;
	width: auto !important;
	max-width: none !important;
}

.single-product form.cart button.single_add_to_cart_button {
	width: 100% !important;
	height: 40px !important;
	padding: 0 20px !important;
	border: 0 !important;
	box-shadow: none !important;
	font-size: 16px !important;
	font-weight: 700 !important;
	line-height: 40px !important;
	vertical-align: middle !important;
}

.single-product .summary form.variations_form.cart {
	display: block !important;
	flex-direction: column !important;
	align-items: stretch !important;
}

.woocommerce .screen-reader-text {
	position: absolute;
	width: 1px;
	height: 1px;
	padding: 0;
	margin: -1px;
	border: 0;
	overflow: hidden;
	clip: rect(0, 0, 0, 0);
	white-space: nowrap;
}

@media screen and (max-width: 1199px) {
	.woocommerce div.product form.cart.grouped_form table.group_table, .woocommerce div.product form.cart.grouped_form table.group_table tbody, .woocommerce div.product form.cart.grouped_form table.group_table tr, .woocommerce div.product form.cart.grouped_form table.group_table td {
		display: block;
		width: 100%;
		box-sizing: border-box;
	}
}
