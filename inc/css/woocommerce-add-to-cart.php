<?php
// styles for woocommerce add to cart
?>

form.variations_form {
	display: block !important;
}

form.cart {
	display: flex;
}

@media (max-width: 1199px) {
	form.cart {
		flex-direction: column;
	}

	.quantity {
		margin-bottom: 15px !important;
		margin-right: 0 !important;
		width: 100%;
	}

	form.cart button {
		width: 100%;
	}
}

@media (min-width: 1200px) {
	form.cart {
		flex-direction: row;
	}

	.quantity {
		margin-bottom: 0 !important;
		margin-right: 10px !important;
		width: auto;
	}

	form.cart button {
		width: auto;
	}
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

input.qty {
	appearance: textfield;
	-moz-appearance: textfield;
	-webkit-appearance: none;
}

form.cart input {
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 40px !important;
	text-align: center !important;
	vertical-align: middle !important;
	height: 40px !important;
	padding: 0 !important;
	border: 0 !important;
	outline: none !important;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD !important;
}

form.cart button {
	float: none !important;
	font-size: 16px !important;
	font-weight: 700 !important;
	line-height: 40px !important;
	padding: 0 20px !important;
	vertical-align: middle !important;
	height: 40px !important;
	border: 0 !important;
	outline: none !important;
	cursor: pointer !important;
}

.quantity-button, .quantity .plus, .quantity .minus {
	background: #f5f5f5 !important;
	color: #333 !important;
	border: none !important;
	box-shadow: none !important;
}

.quantity-button:hover, .quantity .plus:hover, .quantity .minus:hover {
	background: #e0e0e0 !important;
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
