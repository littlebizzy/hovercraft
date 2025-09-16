<div class="clear"></div>

<?php if ( is_active_sidebar( 'hovercraft_home_postmain_top' ) && is_front_page() ) { ?>
<div id="home-postmain-top">
<div class="inner">
	<?php dynamic_sidebar( 'hovercraft_home_postmain_top' ); ?>
	<div class="clear"></div>
</div><!--inner -->
</div><!-- home-postmain-top -->
<?php } ?>

<?php if ( is_active_sidebar( 'hovercraft_home_postmain_bottom' ) && is_front_page() ) { ?>
<div id="home-postmain-bottom">
<div class="inner">
	<?php dynamic_sidebar( 'hovercraft_home_postmain_bottom' ); ?>
	<div class="clear"></div>
</div><!--inner -->
</div><!-- home-postmain-bottom -->
<?php } ?>

<?php if ( is_active_sidebar( 'hovercraft_prefooter_top' ) ) { ?>
<div id="prefooter-top">
<div class="inner">
	<?php dynamic_sidebar( 'hovercraft_prefooter_top' ); ?>
	<div class="clear"></div>
</div><!--inner -->
</div><!-- prefooter-top -->
<?php } ?>

<?php if ( is_active_sidebar( 'hovercraft_prefooter_bottom' ) ) { ?>
<div id="prefooter-bottom">
<div class="inner">
	<?php dynamic_sidebar( 'hovercraft_prefooter_bottom' ); ?>
	<div class="clear"></div>
</div><!--inner -->
</div><!-- prefooter-bottom -->
<?php } ?>

<?php if ( is_active_sidebar( 'hovercraft_footer_one' ) || is_active_sidebar( 'hovercraft_footer_two' ) || is_active_sidebar( 'hovercraft_footer_three' ) ) { ?>
<div id="footer">
<div class="inner">
	
	<?php if ( get_theme_mod( 'hovercraft_footer_columns' ) == 'four_equal') { 
		get_template_part( 'template-parts/footer/footer-four-columns-equal' );
	} elseif ( get_theme_mod( 'hovercraft_footer_columns' ) == 'four_weighted') {
		get_template_part( 'template-parts/footer/footer-four-columns-unequal' );
	} elseif ( get_theme_mod( 'hovercraft_footer_columns' ) == 'three_equal') {
		get_template_part( 'template-parts/footer/footer-three-columns-equal' );
	} elseif ( get_theme_mod( 'hovercraft_footer_columns' ) == 'three_weighted') {
		get_template_part( 'template-parts/footer/footer-three-columns-unequal' );
	} else {
		get_template_part( 'template-parts/footer/footer-four-columns-unequal' );
	} ?>
	
	<div class="clear"></div>
</div><!--inner -->
</div><!-- footer -->
<?php } ?>

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
			&copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?>. 
			<?php
			$license_key = get_theme_mod( 'hovercraft_license_key' );
			if ( empty( $license_key ) || ( function_exists( 'hovercraft_validate_license_key' ) && ! hovercraft_validate_license_key( $license_key ) ) ) {
				?>
				Powered by <a rel="nofollow" href="https://hovercraft.vip">HoverCraft</a>.
				<?php
			}
			?>
			<div class="clear"></div>
		</div><!-- copyright-left -->

		<?php if ( is_active_sidebar( 'hovercraft_copyright' ) ) { ?>
			<div class="copyright-right">
				<?php
				// remove widget titles for this sidebar only
				add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_copyright' );
				remove_filter( 'widget_title', '__return_false' );
				?>
				<div class="clear"></div>
			</div><!-- copyright-right -->
		<?php } ?>

		<?php
		// scroll to top link logic
		$hovercraft_scroll_to_top = get_theme_mod( 'hovercraft_scroll_to_top', 'mobile_only' );
		if ( $hovercraft_scroll_to_top != 'none' ) {
			?>
			<div class="scrollup-wrapper">
				<span class="scrollup-link"><?php _e( 'Back to top', 'hovercraft' ); ?></span>
			</div><!-- scrollup-wrapper -->
			<?php
		}
		?>

		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- copyright -->

</div><!-- container -->

	<div id="full-screen-search">
		<button type="button" class="close"><i class="material-icons close">close</i></button>

		<?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
				if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><button type="button" class="close"><i class="material-icons close">close</i></button><?php } 
				elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><button type="button" class="close"><i class="fa-solid fa-x"></i></button><?php } ?>

			<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="input-container">
					<input type="search" class="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php _e( 'Search entire website... ', 'hovercraft' ); ?>" />
					<button type="submit" class="search-submit" name="submit"><?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
			if ( $hovercraft_layout_icons == 'material_icons_classic' ) { ?><i class="material-icons search">search</i><?php } 
			elseif ( $hovercraft_layout_icons == 'font_awesome_version_6' ) { ?><i class="fas fa-search"></i><?php } ?></button>
				</div><!-- input-container -->
			</form><!-- searchform -->
				
	</div><!-- full-screen-search -->

<?php wp_footer(); ?>

</body><!-- body -->
</html><!-- html -->

<!-- Ref: https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar -->
