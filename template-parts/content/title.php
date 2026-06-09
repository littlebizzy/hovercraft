<?php

// content title display

if ( ! hovercraft_is_title_hidden() ) : ?>
	<?php if ( function_exists( 'is_checkout' ) && is_checkout() && ! is_order_received_page() ) : ?>
		<?php get_template_part( 'template-parts/woocommerce/checkout-title' ); ?>
	<?php else : ?>
		<?php
		$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
		$hovercraft_title_classes = array( 'entry-title' );

		if ( $h1_divider_display === 'everywhere_possible' || $h1_divider_display === 'everywhere_except_heros' ) {
			$hovercraft_title_classes[] = 'divide';
		}
		?>
		<h1 class="<?php echo esc_attr( implode( ' ', $hovercraft_title_classes ) ); ?>"><?php echo esc_html( get_the_title() ); ?></h1>
	<?php endif; ?>
<?php endif; // end title display ?>
