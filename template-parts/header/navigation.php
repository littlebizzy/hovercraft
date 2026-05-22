<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hovercraft_desktop_header_width = get_theme_mod( 'hovercraft_desktop_header_width', 'fixed' );
$search_icon_status = get_theme_mod( 'hovercraft_search_icon', 'desktop_only' );
$hovercraft_mobile_menu = get_theme_mod( 'hovercraft_mobile_menu', 'accordion' );
?>

<?php if ( 'fixed' === $hovercraft_desktop_header_width ) : ?>
	<div class="inner">
<?php else : ?>
	<div class="full">
<?php endif; // end desktop header width ?>

	<div class="header-left">
		<?php get_template_part( 'template-parts/header/branding' ); ?>
	</div><!-- header-left -->

	<div class="header-right">
		<div class="menu-choose">

			<div class="menu-mobile-wrapper">
				<?php if ( in_array( $search_icon_status, array( 'mobile_only', 'desktop_and_mobile' ), true ) ) : ?>
					<?php hovercraft_header_search_icon(); ?>
				<?php endif; // end search-icon-status ?>

				<?php hovercraft_header_cart_icon(); ?>

				<?php if ( 'overlay' === $hovercraft_mobile_menu ) : ?>
					<button type="button" class="nav-icon mobile-menu-trig" onclick="hovercraftOpenNav()">
				<?php else : ?>
					<button type="button" class="nav-icon mobile-menu-trig hovercraft-offcanvas-trigger">
				<?php endif; // end hovercraft-mobile-menu ?>
					<?php hovercraft_header_menu_icon(); ?>
				</button>
			</div><!-- menu-mobile-wrapper -->

			<div class="menu-desktop">
				<?php hovercraft_header_main_menu(); ?>

				<?php if ( in_array( $search_icon_status, array( 'desktop_only', 'desktop_and_mobile' ), true ) ) : ?>
					<?php hovercraft_header_search_icon(); ?>
				<?php endif; // end search-icon-status ?>

				<?php hovercraft_header_cart_icon(); ?>

				<?php hovercraft_header_cta_menu( 'cta-header-secondary', 'cta-header-secondary' ); ?>
				<?php hovercraft_header_cta_menu( 'cta-header-primary', 'cta-header-primary' ); ?>
			</div><!-- menu-desktop -->

		</div><!-- menu-choose -->
	</div><!-- header-right -->
</div><!-- inner -->
