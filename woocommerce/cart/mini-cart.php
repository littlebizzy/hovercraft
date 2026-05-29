<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render simplified woocommerce mini cart
?>

<?php if ( ! WC()->cart->is_empty() ) : ?>

	<?php $hovercraft_cart_count = WC()->cart->get_cart_contents_count(); ?>

	<a class="hovercraft-mini-cart-summary" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
		<span class="hovercraft-mini-cart-count">
			<span class="hovercraft-mini-cart-count-number"><?php echo esc_html( $hovercraft_cart_count ); ?></span>
			<span class="hovercraft-mini-cart-count-label">
				<?php echo esc_html( _n( 'item in cart', 'items in cart', $hovercraft_cart_count, 'woocommerce' ) ); ?>
			</span><!-- hovercraft-mini-cart-count-label -->
		</span><!-- hovercraft-mini-cart-count -->

		<span class="hovercraft-mini-cart-subtotal">
			<span class="hovercraft-mini-cart-subtotal-label"><?php esc_html_e( 'Subtotal:', 'woocommerce' ); ?></span>
			<strong><?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?></strong>
		</span><!-- hovercraft-mini-cart-subtotal -->
	</a><!-- hovercraft-mini-cart-summary -->

	<p class="woocommerce-mini-cart__buttons buttons hovercraft-mini-cart-buttons">
		<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="button checkout wc-forward">
			<?php esc_html_e( 'Checkout', 'woocommerce' ); ?>
		</a>
	</p>

<?php else : ?>

	<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>
