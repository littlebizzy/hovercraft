<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce checkout title
?>

body.woocommerce-checkout .checkout-title-row {
	display: flex;
	align-items: center;
	gap: 24px;
}

body.woocommerce-checkout .checkout-title-row.divide {
	margin-bottom: 32px;
	padding-bottom: 16px;
	border-bottom: 2px solid <?php echo $title_divider_background_color; ?>;
}

body.woocommerce-checkout .checkout-title-row .entry-title {
	flex: 1 1 auto;
	margin-bottom: 0;
}

body.woocommerce-checkout .checkout-title-row .entry-title.divide:after {
	display: none;
}

body.woocommerce-checkout .checkout-title-row .checkout-logo {
	display: block;
	width: auto;
	max-width: 192px;
	height: auto;
	max-height: 64px;
	object-fit: contain;
}

@media screen and (max-width: 1199px) {
	body.woocommerce-checkout .checkout-title-row {
		gap: 16px;
	}

	body.woocommerce-checkout .checkout-title-row.divide {
		margin-bottom: 24px;
		padding-bottom: 12px;
	}

	body.woocommerce-checkout .checkout-title-row .checkout-logo {
		max-width: 144px;
		max-height: 48px;
	}
}
