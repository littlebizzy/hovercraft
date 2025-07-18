<?php
// styles for woocommerce add to cart
?>

form.variations_form {
	display: block !important;
}

form.cart {
	display: block;
}

div.single_variation_wrap {
	display: flex;
}

table.variations {
	width: 100%;
	margin-bottom: 30px !important;
	border: 0;
	border-collapse: collapse;
}

.quantity.buttons-added {
	margin-right: 10px;
}

input.qty {
	appearance: textfield;
	-moz-appearance: textfield;
	-webkit-appearance: none;
}

form.cart input {
	font-size: 16px !important;
	font-weight: 400 !important;
	text-align: center;
	vertical-align: middle;
	height: 40px;
	padding: 0;
	border: 0;
	border-radius: 4px !important;
	outline: none;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
}

form.cart button {
	font-size: 16px !important;
	font-weight: 700 !important;
	padding: 0 20px;
	vertical-align: middle;
	height: 40px;
	border: 0;
	border-radius: 4px !important;
	outline: none;
	cursor: pointer;
}

.quantity-button, .quantity .plus, .quantity .minus {
	background: #f5f5f5;
	color: #333;
	border: none !important;
	box-shadow: none !important;
}

.quantity-button:hover, .quantity .plus:hover, .quantity .minus:hover {
	background: #e0e0e0;
}

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
