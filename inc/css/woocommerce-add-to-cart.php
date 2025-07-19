<?php
// styles for woocommerce add to cart
?>

form.variations_form {
	display: block;
}

form.cart {
	display: flex;
	align-items: stretch;
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
	border: 0 !important;
	border-collapse: collapse;
}

/* remove default browser styling from quantity input */
input.qty {
	appearance: textfield;
	-moz-appearance: textfield;
	-webkit-appearance: none;
}

/* hide chrome/safari spin buttons on number inputs */
.quantity input.qty::-webkit-outer-spin-button,
.quantity input.qty::-webkit-inner-spin-button {
	-webkit-appearance: none !important;
	margin: 0 !important;
}

/* hide firefox spin buttons on number inputs */
.quantity input.qty[type="number"] {
	-moz-appearance: textfield !important;
}

form.cart input {
	display: block !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 40px !important;
	text-align: center !important;
	vertical-align: middle !important;
	height: 40px !important;
	margin: 0 !important;
	padding: 0 !important;
	border: 0 !important;
	outline: none !important;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD !important;
}

.quantity.buttons-added {
    display: inline-flex !important;
    align-items: center !important;
    border: 1px solid #ccc !important;
    border-radius: 4px !important;
    overflow: hidden !important;
    padding: 0 !important;
    background: #fff !important;
}

.quantity-button {
    width: 40px !important;
    height: 40px !important;
    font-size: 20px !important;
    background: #f2f2f2 !important;
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

.quantity input.qty {
    width: 60px !important;
    height: 40px !important;
    font-size: 16px !important;
    text-align: center !important;
    border: none !important;
    padding: 0 !important;
    margin: 0 !important;
    box-shadow: none !important;
    outline: none !important;
    background: #fff !important;
    color: #000 !important;
    -moz-appearance: textfield !important;
    cursor: default !important;
}

form.cart button {
	display: block !important;
	float: none !important;
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
	box-shadow: inset 0px 0px 0px 1px transparent !important;
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
