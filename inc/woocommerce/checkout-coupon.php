<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// disable default checkout coupon position
function hovercraft_disable_woocommerce_checkout_coupon_form() {
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
}
add_action( 'wp', 'hovercraft_disable_woocommerce_checkout_coupon_form' );

// render checkout coupon form above order notes
function hovercraft_render_woocommerce_checkout_coupon_form() {
	?>
	<div class="woocommerce-form-coupon-toggle">
		<div class="woocommerce-info">
			<?php esc_html_e( 'Have a coupon?', 'woocommerce' ); ?> <a href="#" class="showcoupon"><?php esc_html_e( 'Click here to enter your code', 'woocommerce' ); ?></a>
		</div>
	</div>

	<div class="checkout_coupon woocommerce-form-coupon" style="display:none">
		<p class="form-row form-row-first">
			<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon code', 'woocommerce' ); ?></label>
			<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="">
		</p>

		<p class="form-row form-row-last">
			<button type="button" class="button hovercraft-apply-checkout-coupon" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
		</p>

		<div class="clear"></div>
	</div>
	<?php
}
add_action( 'woocommerce_before_order_notes', 'hovercraft_render_woocommerce_checkout_coupon_form', 5 );

// apply checkout coupon without nested forms
function hovercraft_enqueue_woocommerce_checkout_coupon_script() {
	if ( ! is_checkout() || is_order_received_page() ) {
		return;
	}

	$checkout_coupon_script = "
		jQuery( function( $ ) {
			$( document.body ).on( 'click', '.woocommerce-checkout .showcoupon', function( event ) {
				event.preventDefault();
				$( '.woocommerce-checkout .checkout_coupon' ).slideToggle( 200 );
			} );

			$( document.body ).on( 'click', '.hovercraft-apply-checkout-coupon', function( event ) {
				event.preventDefault();

				var couponContainer = $( this ).closest( '.checkout_coupon' );
				var couponCode = couponContainer.find( 'input[name="coupon_code"]' ).val();

				if ( ! couponCode ) {
					return;
				}

				couponContainer.addClass( 'processing' ).block( {
					message: null,
					overlayCSS: {
						background: '#fff',
						opacity: 0.6
					}
				} );

				$.ajax( {
					type: 'POST',
					url: wc_checkout_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'apply_coupon' ),
					data: {
						security: wc_checkout_params.apply_coupon_nonce,
						coupon_code: couponCode
					},
					success: function( response ) {
						$( '.woocommerce-error, .woocommerce-message' ).remove();
						couponContainer.removeClass( 'processing' ).unblock();

						if ( response ) {
							couponContainer.before( response );
							couponContainer.slideUp( 200 );
							$( document.body ).trigger( 'applied_coupon_in_checkout', [ couponCode ] );
							$( document.body ).trigger( 'update_checkout', { update_shipping_method: false } );
						}
					}
				} );
			} );
		} );
	";

	wp_add_inline_script( 'wc-checkout', $checkout_coupon_script );
}
add_action( 'wp_enqueue_scripts', 'hovercraft_enqueue_woocommerce_checkout_coupon_script', 20 );

// rename checkout order heading
function hovercraft_rename_woocommerce_checkout_order_heading( $translated_text, $text, $domain ) {
	if ( is_checkout() && ! is_order_received_page() && $domain === 'woocommerce' && $text === 'Your order' ) {
		return __( 'Order Summary', 'hovercraft' );
	}

	return $translated_text;
}
add_filter( 'gettext', 'hovercraft_rename_woocommerce_checkout_order_heading', 20, 3 );
