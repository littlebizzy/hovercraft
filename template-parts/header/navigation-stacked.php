<?php

$hovercraft_desktop_header_width = get_theme_mod( 'hovercraft_desktop_header_width', 'fixed' );
$hovercraft_header_container_class = 'inner';
$search_icon_status = get_theme_mod( 'hovercraft_search_icon', 'desktop_only' );
$hovercraft_mobile_menu = get_theme_mod( 'hovercraft_mobile_menu', 'accordion' );

if ( 'full' === $hovercraft_desktop_header_width ) {
	$hovercraft_header_container_class = 'full';
}
?>

<div class="header-layout-stacked header-layout-stacked-top">
	<div class="<?php echo esc_attr( $hovercraft_header_container_class ); ?> header-layout-stacked-inner">
		<div class="header-left">
			<?php get_template_part( 'template-parts/header/header-branding' ); ?>
		</div><!-- header-left -->

		<?php hovercraft_header_center_widget_area(); ?>

		<div class="header-right">
			<?php hovercraft_header_aside_widget_area(); ?>

			<div class="menu-choose">

				<div class="menu-mobile-wrapper">
					<?php if ( in_array( $search_icon_status, array( 'mobile_only', 'desktop_and_mobile' ), true ) ) : ?>
						<?php hovercraft_header_search_icon(); ?>
					<?php endif; // end search-icon-status ?>

					<?php hovercraft_header_cart_icon(); ?>

					<?php if ( 'overlay' === $hovercraft_mobile_menu ) : ?>
						<button type="button" class="nav-icon mobile-menu-trig" aria-label="<?php echo esc_attr__( 'Open menu', 'hovercraft' ); ?>" aria-controls="hovercraft-overlay-menu" aria-expanded="false" onclick="hovercraftOpenNav()">
					<?php else : ?>
						<button type="button" class="nav-icon mobile-menu-trig hovercraft-offcanvas-trigger" aria-label="<?php echo esc_attr__( 'Open menu', 'hovercraft' ); ?>" aria-controls="hovercraft-offcanvas-menu" aria-expanded="false">
					<?php endif; // end hovercraft-mobile-menu ?>
						<?php hovercraft_header_menu_icon(); ?>
					</button>
				</div><!-- menu-mobile-wrapper -->

			</div><!-- menu-choose -->
		</div><!-- header-right -->
	</div><!-- header-layout-stacked-inner -->
</div><!-- header-layout-stacked-top -->

<div class="header-layout-stacked header-layout-stacked-bottom">
	<div class="<?php echo esc_attr( $hovercraft_header_container_class ); ?> header-layout-stacked-inner">
		<div class="menu-desktop">
			<?php hovercraft_header_main_menu(); ?>

			<div class="menu-desktop-right">
				<?php hovercraft_header_cart_nav_item(); ?>
				<?php hovercraft_header_cta_menu( 'cta-header-secondary', 'cta-header-secondary' ); ?>
				<?php hovercraft_header_cta_menu( 'cta-header-primary', 'cta-header-primary' ); ?>
			</div><!-- menu-desktop-right -->
		</div><!-- menu-desktop -->
	</div><!-- header-layout-stacked-inner -->
</div><!-- header-layout-stacked-bottom -->
