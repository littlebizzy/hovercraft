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

body.woocommerce-checkout .checkout-title-row.divide {
	margin-bottom: 30px;
	padding-bottom: 15px;
	border-bottom: 2px solid <?php echo $title_divider_background_color; ?>;
}

body.woocommerce-checkout .checkout-title-row .entry-title {
	flex: 1 1 auto;
	margin-bottom: 0;
}

body.woocommerce-checkout .checkout-title-row .entry-title.divide:after {
	display: none;
}

body.woocommerce-checkout .checkout-title-row .checkout-logo-link {
	flex: 0 0 auto;
	display: inline-block;
	margin-top: 4px;
}

body.woocommerce-checkout .checkout-title-row .checkout-logo {
	display: block;
	width: auto;
	max-width: 160px;
	height: auto;
	max-height: 48px;
	object-fit: contain;
}

@media screen and (max-width: 1199px) {
	body.woocommerce-checkout .checkout-title-row {
		gap: 16px;
	}

	body.woocommerce-checkout .checkout-title-row.divide {
		margin-bottom: 20px;
		padding-bottom: 10px;
	}

	body.woocommerce-checkout .checkout-title-row .checkout-logo {
		max-width: 120px;
		max-height: 40px;
	}
}
