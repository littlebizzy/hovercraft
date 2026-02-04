<?php
// styles for woocommerce checkout
?>

/* section boxes (match cart style) */
.woocommerce-checkout .woocommerce-billing-fields,
.woocommerce-checkout .woocommerce-shipping-fields,
.woocommerce-checkout #order_review,
.woocommerce-checkout .woocommerce-checkout-payment {
	background: #ffffff;
	border: 1px solid #dddddd;
	padding: 1.5rem;
	margin-bottom: 2rem;
}

/* headings */
.woocommerce-checkout h3 {
	margin-bottom: 1rem;
}

/* form rows */
.woocommerce-checkout .form-row {
	margin-bottom: 1rem;
}

/* inputs */
.woocommerce-checkout input[type="text"],
.woocommerce-checkout input[type="email"],
.woocommerce-checkout input[type="tel"],
.woocommerce-checkout select,
.woocommerce-checkout textarea {
	width: 100%;
	padding: 0.6rem 0.7rem;
	border: 1px solid #cccccc;
	border-radius: 3px;
}

/* order table */
.woocommerce-checkout-review-order-table {
	width: 100%;
	border-collapse: collapse;
}

.woocommerce-checkout-review-order-table th,
.woocommerce-checkout-review-order-table td {
	padding: 0.6rem;
	border-bottom: 1px solid #eeeeee;
}

/* payment methods */
.woocommerce-checkout-payment ul.payment_methods {
	list-style: none;
	margin: 0;
	padding: 0;
}

.woocommerce-checkout-payment li {
	margin-bottom: 1rem;
}

/* make radios and checkboxes visible */
.woocommerce-checkout input[type="radio"],
.woocommerce-checkout input[type="checkbox"] {
	appearance: auto;
	-webkit-appearance: auto;
	-moz-appearance: auto;
	width: auto;
	height: auto;
	margin-right: 0.4rem;
}

/* stripe box */
.woocommerce-checkout .payment_box {
	background: #f7f7f7;
	border: 1px solid #dddddd;
	padding: 1rem;
	margin-top: 0.5rem;
}

/* place order button spacing */
.woocommerce-checkout #place_order {
	margin-top: 1rem;
}
