<?php
// styles for woocommerce cart
?>

a.checkout-button {
	background: <?php echo $default_link_color; ?> !important;
}

a.checkout-button:hover {
	background: <?php echo $default_hover_color; ?> !important;
}

@media screen and (max-width: 1200px) {
	div.woocommerce-notices-wrapper {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	div.woocommerce-notices-wrapper {
		margin-bottom: 30px;
	}
}

div.woocommerce-notices-wrapper ul {
	margin: 0 !important;
	font-size: 18px !important;
}

