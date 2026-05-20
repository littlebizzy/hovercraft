<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce add to cart
$woocommerce_add_to_cart_select_arrow_color = rawurlencode( $default_text_color );
?>

.add_to_cart_button, .single_add_to_cart_button, .woocommerce .button.add_to_cart_button, .woocommerce a.add_to_cart_button, .woocommerce button.single_add_to_cart_button, .woocommerce input.single_add_to_cart_button {
	display: inline-block;
	padding: 10px 20px;
	border: 0;
	border-radius: 4px;
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
	margin: 0 0 12px !important;
	background: transparent !important;
	border: 0;
	border-collapse: collapse !important;
	border-radius: 0;
}

.woocommerce div.product form.cart table.variations tbody, .woocommerce div.product form.cart table.variations tr, .single-product .summary .variations_form table.variations tbody, .single-product .summary .variations_form table.variations tr {
	display: block !important;
	width: 100% !important;
	background: transparent !important;
}

.woocommerce div.product form.cart table.variations th.label, .woocommerce div.product form.cart table.variations td.value, .single-product .summary .variations_form table.variations th.label, .single-product .summary .variations_form table.variations td.value {
	display: block !important;
	clear: both !important;
	float: none !important;
	width: 100% !important;
	margin: 0 !important;
	padding: 0 !important;
	background: transparent !important;
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
	position: relative;
	padding-bottom: 0 !important;
}

.woocommerce div.product form.cart table.variations td.value select, .single-product .summary .variations_form table.variations td.value select {
	appearance: none !important;
	-webkit-appearance: none !important;
	-moz-appearance: none !important;
	display: block !important;
	box-sizing: border-box !important;
	width: 100% !important;
	max-width: 100% !important;
	height: 46px !important;
	min-height: 46px !important;
	padding: 10px 44px 10px 16px !important;
	background-color: #ffffff !important;
	background-image: url('data:image/svg+xml;utf8,<svg fill="<?php echo $woocommerce_add_to_cart_select_arrow_color; ?>" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>') !important;
	background-position: right 14px center !important;
	background-repeat: no-repeat !important;
	background-size: 16px !important;
	border: 0 !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: pointer !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 1.5 !important;
	vertical-align: middle !important;
}

.woocommerce div.product form.cart table.variations td.value select:hover, .single-product .summary .variations_form table.variations td.value select:hover {
	background-color: #ffffff !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
}

.woocommerce div.product form.cart table.variations td.value select:focus, .woocommerce div.product form.cart table.variations td.value select:active, .single-product .summary .variations_form table.variations td.value select:focus, .single-product .summary .variations_form table.variations td.value select:active {
	background-color: #ffffff !important;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	outline: 0 !important;
}

.woocommerce div.product form.cart .reset_variations, .single-product .summary .variations_form .reset_variations {
	position: absolute;
	top: -28px;
	right: 0;
	display: inline-block !important;
	margin: 0 !important;
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

.woocommerce div.product form.cart .single_variation_wrap, .woocommerce div.product form.cart .single_variation, .woocommerce div.product form.cart .woocommerce-variation, div.single_variation_wrap {
	clear: both;
	margin: 0 !important;
	padding: 0 !important;
}

.woocommerce div.product form.cart .single_variation:empty, .woocommerce div.product form.cart .woocommerce-variation:empty, .woocommerce div.product form.cart .single_variation[style*="display: none"], .woocommerce div.product form.cart .woocommerce-variation[style*="display: none"] {
	display: none !important;
	margin: 0 !important;
	padding: 0 !important;
}

.woocommerce div.product form.cart .woocommerce-variation-price, .woocommerce div.product form.cart .woocommerce-variation-availability, .woocommerce div.product form.cart .woocommerce-variation-description {
	margin: 0 0 12px !important;
	padding: 0 !important;
}

.woocommerce div.product form.cart .woocommerce-variation-price:empty, .woocommerce div.product form.cart .woocommerce-variation-availability:empty, .woocommerce div.product form.cart .woocommerce-variation-description:empty {
	display: none !important;
	margin: 0 !important;
	padding: 0 !important;
}

.woocommerce div.product form.cart .woocommerce-variation-description p:last-child {
	margin-bottom: 0;
}

.woocommerce div.product form.cart .variations_button {
	clear: both;
	margin: 0 !important;
	padding: 0 !important;
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
	border-radius: 0;
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
	height: 46px !important;
	min-height: 46px !important;
	margin: 0 !important;
	padding: 10px 16px !important;
	background: #ffffff !important;
	border: 0 !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 1.5 !important;
	text-align: center !important;
	vertical-align: middle !important;
	appearance: textfield;
	-moz-appearance: textfield;
	-webkit-appearance: none;
}

input.qty:focus, input.qty:active {
	background: #ffffff !important;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	outline: 0 !important;
}

input.qty::-webkit-outer-spin-button, input.qty::-webkit-inner-spin-button {
	margin: 0 !important;
	-webkit-appearance: none !important;
}

input.qty[type="number"] {
	-moz-appearance: textfield !important;
}

.quantity select.qty, .hovercraft-quantity-select {
	appearance: none !important;
	-webkit-appearance: none !important;
	-moz-appearance: none !important;
	display: block !important;
	box-sizing: border-box !important;
	width: 100% !important;
	max-width: 100% !important;
	height: 46px !important;
	min-height: 46px !important;
	margin: 0 !important;
	padding: 10px 44px 10px 16px !important;
	background-color: #ffffff !important;
	background-image: url('data:image/svg+xml;utf8,<svg fill="<?php echo $woocommerce_add_to_cart_select_arrow_color; ?>" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>') !important;
	background-position: right 14px center !important;
	background-repeat: no-repeat !important;
	background-size: 16px !important;
	border: 0 !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: pointer !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 1.5 !important;
	text-align: center !important;
	vertical-align: middle !important;
}

.quantity select.qty:hover, .hovercraft-quantity-select:hover {
	background-color: #ffffff !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
}

.quantity select.qty:focus, .quantity select.qty:active, .hovercraft-quantity-select:focus, .hovercraft-quantity-select:active {
	background-color: #ffffff !important;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	outline: 0 !important;
}

.single-product form.cart {
	display: flex !important;
	flex-direction: column !important;
	align-items: stretch !important;
}

.single-product form.cart div.quantity {
	width: 100% !important;
	margin: 0 0 12px !important;
}

.single-product form.cart button.single_add_to_cart_button {
	width: 100% !important;
	height: 44px !important;
	padding: 0 20px !important;
	border: 0 !important;
	box-shadow: none !important;
	font-size: 16px !important;
	font-weight: 700 !important;
	line-height: 44px !important;
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

@media screen and (min-width: 1200px) {
	.single-product .summary form.cart:not(.grouped_form) {
		max-width: 392px;
	}
}
