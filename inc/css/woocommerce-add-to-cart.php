<?php
// styles for woocommerce add to cart
?>

/* base layout for add to cart buttons */
.add_to_cart_button,
.single_add_to_cart_button {
	display: block;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	padding: 10px 0;
	text-decoration: none;
	border: none;
	cursor: pointer;
}

/* single add to cart button uses theme link color with white text */
.single_add_to_cart_button {
	background: <?php echo $default_link_color; ?> !important;
	color: #ffffff !important;
}

/* hover and focus for single add to cart button */
.single_add_to_cart_button:hover,
.single_add_to_cart_button:focus,
.single_add_to_cart_button:active {
	background: <?php echo $default_hover_color; ?> !important;
	color: #ffffff !important;
}

/* other add to cart buttons (archives, related products, etc) use gray and theme text color */
.add_to_cart_button {
	background: #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
}

/* hover and focus for other add to cart buttons */
.add_to_cart_button:hover,
.add_to_cart_button:focus,
.add_to_cart_button:active {
	background: #bdbdbd !important;
	color: <?php echo $default_text_color; ?> !important;
}

/* block layout for variation form */
form.variations_form {
	display: block !important;
	width: 100% !important;
}

/* ensure variation table stacks above add-to-cart row */
.single-product .summary .variations_form table.variations {
	display: block !important;
	width: 100% !important;
	border: 0;
	border-collapse: collapse !important;
	margin: 0 0 30px 0 !important;
}
.single-product .summary .variations_form table.variations tbody,
.single-product .summary .variations_form table.variations tr {
	display: block !important;
	width: 100% !important;
}
.single-product .summary .variations_form table.variations th.label,
.single-product .summary .variations_form table.variations td.value {
	display: block !important;
	float: none !important;
	width: 100% !important;
	padding: 0 !important;
	border: 0 !important;
	clear: both !important;
}
.single-product .summary .variations_form table.variations th.label label {
	display: block;
	margin: 0 0 6px 0;
	font-weight: 500;
}
.single-product .summary .variations_form table.variations td.value select {
	display: block !important;
	width: 100% !important;
	height: 44px;
	padding: 8px 12px;
	border: 1px solid #cfcfcf;
	border-radius: 4px;
	background: #fff;
	line-height: 1.2;
}
.single-product .summary .variations_form .reset_variations {
	display: inline-block;
	margin-top: 6px;
	font-size: 13px;
	color: <?php echo $default_text_color; ?>;
}

/* flex layout for add to cart form */
form.cart {
	display: flex !important;
	align-items: stretch !important;
}

/* mobile layout (stack quantity and button vertically) */
@media (max-width: 1199px) {
	form.cart {
		flex-direction: column !important;
	}

	div.quantity {
		margin-bottom: 15px !important;
		margin-right: 0 !important;
		width: 100%;
	}

	form.cart button {
		width: 100%;
	}
}

/* desktop layout (display quantity and button inline) */
@media (min-width: 1200px) {
	form.cart {
		flex-direction: row !important;
	}

	div.quantity {
		margin-bottom: 0 !important;
		margin-right: 10px !important;
		width: auto;
	}

	form.cart button {
		width: auto;
	}
}

/* flex layout for variation details */
div.single_variation_wrap {
	display: flex;
}

/* style for add to cart button element */
form.cart button {
	font-size: 16px !important;
	font-weight: 700 !important;
	line-height: 40px !important;
	padding: 0 20px !important;
	vertical-align: middle !important;
	height: 40px !important;
	border: none !important;
	box-shadow: none !important;
	outline: none !important;
	cursor: pointer !important;
}

/* reset native number input styles */
input.qty {
	appearance: textfield;
	-moz-appearance: textfield;
	-webkit-appearance: none;
}

/* hide webkit spin buttons */
input.qty::-webkit-outer-spin-button,
input.qty::-webkit-inner-spin-button {
	-webkit-appearance: none !important;
	margin: 0 !important;
}

/* hide firefox spin buttons */
input.qty[type="number"] {
	-moz-appearance: textfield !important;
}

/* style for quantity input (unclickable number) */
input.qty {
	width: 60px !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 40px !important;
	text-align: center !important;
	vertical-align: middle !important;
	height: 40px !important;
	margin: 0 !important;
	padding: 0 !important;
	border: none !important;
	box-shadow: none !important;
	outline: none !important;
	cursor: default !important;
	background: #f2f2f2 !important;
	color: <?php echo $default_text_color; ?> !important;
}

/* flex layout when plus and minus buttons exist */
.buttons-added {
	display: inline-flex !important;
	align-items: center !important;
	overflow: hidden !important;
	padding: 0 !important;
	border-radius: 4px !important;
	box-shadow: 0 2px 3px rgba(0,0,0,0.1) !important;
}

/* 3d-style plus and minus buttons */
.quantity-button {
	width: 40px !important;
	height: 40px !important;
	font-size: 26px !important;
	color: <?php echo $default_text_color; ?> !important;
	border: none !important;
	margin: 0 !important;
	padding: 0 !important;
	cursor: pointer !important;
	user-select: none !important;
	line-height: 40px !important;
	display: flex !important;
	align-items: center !important;
	justify-content: center !important;
	background: linear-gradient(to bottom, #fafafa, #e0e0e0) !important;
	box-shadow: inset 0 1px 0 rgba(255,255,255,0.6), inset 0 -1px 2px rgba(0,0,0,0.1) !important;
	transition: all 0.2s ease !important;
}

/* hover lift for 3d buttons */
.quantity-button:hover {
	background: linear-gradient(to bottom, #ffffff, #d6d6d6) !important;
	transform: translateY(-1px);
	box-shadow: inset 0 1px 0 rgba(255,255,255,0.7), 0 2px 4px rgba(0,0,0,0.1) !important;
}

/* press state */
.quantity-button:active {
	transform: translateY(0);
	background: linear-gradient(to bottom, #e8e8e8, #d0d0d0) !important;
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.2) !important;
}

/* enforce stacked layout when woo uses both classes on one form */
.single-product .summary form.variations_form.cart {
	display: block !important;
	flex-direction: column !important;
	align-items: stretch !important;
}

/* hide screen reader text */
.screen-reader-text {
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
