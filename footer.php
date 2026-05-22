<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="clear"></div>

<?php if ( is_active_sidebar( 'hovercraft_home_postmain_top' ) && is_front_page() ) : ?>
	<div id="home-postmain-top">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_top' ); ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- home-postmain-top -->
<?php endif; // end is_front_page ?>

<?php if ( is_active_sidebar( 'hovercraft_home_postmain_bottom' ) && is_front_page() ) : ?>
	<div id="home-postmain-bottom">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_bottom' ); ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- home-postmain-bottom -->
<?php endif; // end is_front_page ?>

<?php get_template_part( 'template-parts/footer/prefooter' ); ?>

<?php if ( is_active_sidebar( 'hovercraft_footer_one' ) || is_active_sidebar( 'hovercraft_footer_two' ) || is_active_sidebar( 'hovercraft_footer_three' ) || is_active_sidebar( 'hovercraft_footer_four' ) || is_active_sidebar( 'hovercraft_footer_callout' ) ) : ?>
	<div id="footer">
		<div class="inner">

			<?php
			$hovercraft_footer_columns = get_theme_mod( 'hovercraft_footer_columns', 'four_weighted' );

			if ( $hovercraft_footer_columns === 'four_equal' ) {
				get_template_part( 'template-parts/footer/footer-four-columns-equal' );
			} elseif ( $hovercraft_footer_columns === 'four_weighted' ) {
				get_template_part( 'template-parts/footer/footer-four-columns-unequal' );
			} elseif ( $hovercraft_footer_columns === 'three_equal' ) {
				get_template_part( 'template-parts/footer/footer-three-columns-equal' );
			} elseif ( $hovercraft_footer_columns === 'three_weighted' ) {
				get_template_part( 'template-parts/footer/footer-three-columns-unequal' );
			} else {
				get_template_part( 'template-parts/footer/footer-four-columns-unequal' );
			}
			?>

			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- footer -->
<?php endif; // end footer widget areas ?>

<?php
// get desktop copyright width setting
$hovercraft_copyright_width = get_theme_mod( 'hovercraft_desktop_copyright_width', 'fixed' );

// map to css class
if ( $hovercraft_copyright_width === 'full' ) {
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
		<?php if ( $hovercraft_scroll_to_top !== 'none' ) : ?>
			<div class="scrollup-wrapper">
				<span class="scrollup-link"><?php esc_html_e( 'Back to top', 'hovercraft' ); ?></span>
			</div><!-- scrollup-wrapper -->
		<?php endif; // end hovercraft-scroll-to-top ?>

		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- copyright -->

</div><!-- container -->

<div id="full-screen-search">
	<?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' ); ?>
	<?php if ( $hovercraft_layout_icons === 'material_icons_classic' ) : ?>
		<button type="button" class="close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>"><i class="material-icons close" aria-hidden="true">close</i></button>
	<?php elseif ( $hovercraft_layout_icons === 'font_awesome_version_6' ) : ?>
		<button type="button" class="close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>"><i class="fa-solid fa-x" aria-hidden="true"></i></button>
	<?php endif; // end layout icons ?>

	<?php get_search_form(); ?>
</div><!-- full-screen-search -->

<?php wp_footer(); ?>

</body><!-- body -->
</html><!-- html -->
