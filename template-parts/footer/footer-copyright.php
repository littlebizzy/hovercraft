<?php

// get copyright width setting
$hovercraft_copyright_width = get_theme_mod( 'hovercraft_desktop_copyright_width', 'fixed' );

// get copyright width class
if ( 'full' === $hovercraft_copyright_width ) {
	$hovercraft_copyright_class = 'is-full';
} else {
	$hovercraft_copyright_class = 'is-fixed';
}

// get license key status
$hovercraft_license_key = get_theme_mod( 'hovercraft_license_key' );
$hovercraft_show_powered_by = empty( $hovercraft_license_key ) || ( function_exists( 'hovercraft_validate_license_key' ) && ! hovercraft_validate_license_key( $hovercraft_license_key ) );

// get scroll to top setting
$hovercraft_scroll_to_top = get_theme_mod( 'hovercraft_scroll_to_top', 'mobile_only' );

?>
<div id="copyright" class="<?php echo esc_attr( $hovercraft_copyright_class ); ?>">
	<div class="inner">

		<?php // render copyright left ?>
		<div class="copyright-left">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>.

			<?php // render powered by link ?>
			<?php if ( $hovercraft_show_powered_by ) : ?>
				Powered by <a rel="nofollow" href="https://hovercraft.vip">HoverCraft</a>.
			<?php endif; // end powered by link ?>

			<div class="clear"></div>
		</div><!-- copyright-left -->

		<?php // render copyright widget area ?>
		<?php if ( is_active_sidebar( 'hovercraft_copyright' ) ) : ?>
			<div class="copyright-right">
				<?php
				// remove widget titles for copyright widgets
				add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_copyright' );
				remove_filter( 'widget_title', '__return_false' );
				?>
				<div class="clear"></div>
			</div><!-- copyright-right -->
		<?php endif; // end copyright widget area ?>

		<?php // render scroll to top button ?>
		<?php if ( 'none' !== $hovercraft_scroll_to_top ) : ?>
			<div class="scrollup-wrapper">
				<button type="button" class="scrollup-link"><?php esc_html_e( 'Back to top', 'hovercraft' ); ?></button>
			</div><!-- scrollup-wrapper -->
		<?php endif; // end scroll to top button ?>

		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- copyright -->
