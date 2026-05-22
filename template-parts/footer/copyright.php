<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get desktop copyright width setting
$hovercraft_copyright_width = get_theme_mod( 'hovercraft_desktop_copyright_width', 'fixed' );

// map to css class
if ( 'full' === $hovercraft_copyright_width ) {
	$hovercraft_copyright_class = 'is-full';
} else {
	$hovercraft_copyright_class = 'is-fixed';
}

?>
<div id="copyright" class="<?php echo esc_attr( $hovercraft_copyright_class ); ?>">
	<div class="inner">

		<div class="copyright-left">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>.
			<?php $license_key = get_theme_mod( 'hovercraft_license_key' ); ?>
			<?php if ( empty( $license_key ) || ( function_exists( 'hovercraft_validate_license_key' ) && ! hovercraft_validate_license_key( $license_key ) ) ) : ?>
				Powered by <a rel="nofollow" href="https://hovercraft.vip">HoverCraft</a>.
			<?php endif; // end missing license key ?>
			<div class="clear"></div>
		</div><!-- copyright-left -->

		<?php if ( is_active_sidebar( 'hovercraft_copyright' ) ) : ?>
			<div class="copyright-right">
				<?php
				// remove widget titles for this sidebar only
				add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_copyright' );
				remove_filter( 'widget_title', '__return_false' );
				?>
				<div class="clear"></div>
			</div><!-- copyright-right -->
		<?php endif; // end hovercraft-copyright sidebar ?>

		<?php
		// scroll to top link logic
		$hovercraft_scroll_to_top = get_theme_mod( 'hovercraft_scroll_to_top', 'mobile_only' );
		?>
		<?php if ( 'none' !== $hovercraft_scroll_to_top ) : ?>
			<div class="scrollup-wrapper">
				<span class="scrollup-link"><?php esc_html_e( 'Back to top', 'hovercraft' ); ?></span>
			</div><!-- scrollup-wrapper -->
		<?php endif; // end hovercraft-scroll-to-top ?>

		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- copyright -->
