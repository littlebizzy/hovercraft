<?php

$search_icon_status = get_theme_mod( 'hovercraft_search_icon', 'desktop_icon_mobile_menu' );
$show_mobile_menu_search = in_array( $search_icon_status, array( 'desktop_icon_mobile_menu', 'mobile_menu_only' ), true );
?>

<div id="hovercraft-overlay-menu" class="overlay" role="dialog" aria-modal="true" aria-hidden="true" aria-label="<?php esc_attr_e( 'Mobile menu', 'hovercraft' ); ?>" tabindex="-1" inert>

	<button type="button" class="closebtn" aria-label="<?php esc_attr_e( 'Close menu', 'hovercraft' ); ?>" onclick="hovercraftCloseNav()">
		<?php echo hovercraft_icon( 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</button>

	<div class="overlay-content">
		<?php if ( $show_mobile_menu_search ) : ?>
			<div class="mobile-menu-search">
				<?php get_search_form(); ?>
			</div><!-- mobile-menu-search -->
		<?php endif; // end show-mobile-menu-search ?>

		<?php hovercraft_mobile_menu_output(); ?>
	</div><!-- overlay-content -->
</div><!-- hovercraft-overlay-menu -->

<div id="hovercraft-offcanvas-menu" role="dialog" aria-modal="true" aria-hidden="true" aria-label="<?php esc_attr_e( 'Mobile menu', 'hovercraft' ); ?>" tabindex="-1" inert>
	<h4 class="sitename-offcanvas"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h4>

	<?php if ( $show_mobile_menu_search ) : ?>
		<div class="mobile-menu-search">
			<?php get_search_form(); ?>
		</div><!-- mobile-menu-search -->
	<?php endif; // end show-mobile-menu-search ?>

	<?php hovercraft_mobile_menu_output(); ?>
</div><!-- hovercraft-offcanvas-menu -->

<div class="hovercraft-offcanvas-overlay" aria-hidden="true"></div>
