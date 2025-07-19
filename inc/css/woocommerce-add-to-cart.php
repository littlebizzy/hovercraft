<?php
// styles for woocommerce add to cart
?>

/* block layout for variation form */
form.variations_form {
	display: block;
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

/* style for variations table */
table.variations {
	width: 100%;
	margin-bottom: 30px !important;
	border: 0 !important;
	border-collapse: collapse !important;
}

/* reset native number input styles */
input.qty {
	appearance: textfield;
	-moz-appearance: textfield;
	-webkit-appearance: none;
}

/* hide webkit spin buttons */
input.qty::-webkit-outer-spin-button, input.qty::-webkit-inner-spin-button {
	-webkit-appearance: none !important;
	margin: 0 !important;
}

/* hide firefox spin buttons */
input.qty[type="number"] {
	-moz-appearance: textfield !important;
}

/* style for quantity input */
input.qty {
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
}

/* flex layout when plus/minus buttons exist */
.quantity.buttons-added {
	display: inline-flex !important;
	align-items: center !important;
	overflow: hidden !important;
	padding: 0 !important;
}

/* plus/minus button styles */
.quantity-button {
	width: 40px !important;
	height: 40px !important;
	font-size: 20px !important;
	color: #333 !important;
	border: none !important;
	margin: 0 !important;
	padding: 0 !important;
	cursor: pointer !important;
	user-select: none !important;
	line-height: 1 !important;
	display: flex !important;
	align-items: center !important;
	justify-content: center !important;
	transition: background 0.2s ease !important;
}

/* style for quantity input inside wrapper */
input.qty {
	width: 60px !important;
	height: 40px !important;
	font-size: 16px !important;
	text-align: center !important;
	border: none !important;
	padding: 0 !important;
	margin: 0 !important;
	outline: none !important;
	background: #f2f2f2 !important;
	color: #000 !important;
	-moz-appearance: textfield !important;
	cursor: default !important;
}

/* style for add to cart button */
form.cart button {
	font-size: 16px !important;
	font-weight: 700 !important;
	line-height: 40px !important;
	margin: 0 !important;
	padding: 0 20px !important;
	vertical-align: middle !important;
	height: 40px !important;
	border: 0 !important;
	outline: none !important;
	cursor: pointer !important;
}

/* base style for quantity buttons */
.quantity-button, .quantity .plus, .quantity .minus {
	background: #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
	border: none !important;
	box-shadow: none !important;
}

/* hover style for quantity buttons */
.quantity-button:hover, .quantity .plus:hover, .quantity .minus:hover {
	background: #bdbdbd !important;
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
