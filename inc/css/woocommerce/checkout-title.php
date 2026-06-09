<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce checkout title
?>

body.woocommerce-checkout .checkout-title-row {
	display: flex;
	align-items: flex-start;
	gap: 24px;
}

body.woocommerce-checkout .checkout-title-row .entry-title {
	flex: 1 1 auto;
	margin-bottom: 0;
}

body.woocommerce-checkout .checkout-title-row .checkout-logo-link {
	flex: 0 0 auto;
	display: inline-block;
	margin-top: 4px;
}

body.woocommerce-checkout .checkout-title-row .checkout-logo {
	display: block;
	max-height: 48px;
	width: auto;
}

@media screen and (max-width: 1199px) {
	body.woocommerce-checkout .checkout-title-row {
		gap: 16px;
	}

	body.woocommerce-checkout .checkout-title-row .checkout-logo {
		max-height: 40px;
	}
}
