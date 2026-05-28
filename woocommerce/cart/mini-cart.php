<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render simplified woocommerce mini cart
do_action( 'woocommerce_before_mini_cart' );
?>

<?php if ( ! WC()->cart->is_empty() ) : ?>

	<ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>">
		<?php
		do_action( 'woocommerce_before_mini_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

			if ( ! $_product || ! $_product->exists() || $cart_item['quantity'] <= 0 || ! apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				continue;
			}

			$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
			$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
			$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
			?>
			<li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
				<div class="hovercraft-mini-cart-item-main">
					<?php if ( empty( $product_permalink ) ) : ?>
						<span class="hovercraft-mini-cart-product-name"><?php echo wp_kses_post( $product_name ); ?></span>
					<?php else : ?>
						<a class="hovercraft-mini-cart-product-name" href="<?php echo esc_url( $product_permalink ); ?>">
							<?php echo wp_kses_post( $product_name ); ?>
						</a>
					<?php endif; // end product permalink ?>

					<?php
					echo apply_filters(
						'woocommerce_widget_cart_item_quantity',
						'<span class="quantity">' . sprintf( '%s &times; %s', esc_html( $cart_item['quantity'] ), $product_price ) . '</span>',
						$cart_item,
						$cart_item_key
					);
					?>
				</div><!-- hovercraft-mini-cart-item-main -->
			</li>
			<?php
		}

		do_action( 'woocommerce_mini_cart_contents' );
		?>
	</ul>

	<p class="woocommerce-mini-cart__total total">
		<?php
		do_action( 'woocommerce_widget_shopping_cart_total' );
		?>
	</p>

	<p class="woocommerce-mini-cart__buttons buttons">
		<?php do_action( 'woocommerce_widget_shopping_cart_buttons' ); ?>
	</p>

<?php else : ?>

	<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
