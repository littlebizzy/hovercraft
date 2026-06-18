<?php

// check topbar widget areas
$hovercraft_topbar_left_active = is_active_sidebar( 'hovercraft_topbar_left' );
$hovercraft_topbar_right_active = is_active_sidebar( 'hovercraft_topbar_right' );
$hovercraft_has_topbar_widgets = $hovercraft_topbar_left_active || $hovercraft_topbar_right_active;

// skip empty topbar
if ( ! $hovercraft_has_topbar_widgets ) {
	return;
}

// get desktop header width
$hovercraft_desktop_header_width = get_theme_mod( 'hovercraft_desktop_header_width', 'fixed' );
$hovercraft_topbar_container_class = 'inner';

if ( 'full' === $hovercraft_desktop_header_width ) {
	$hovercraft_topbar_container_class = 'full';
}

?>
<div id="topbar">
	<div class="<?php echo esc_attr( $hovercraft_topbar_container_class ); ?>">

		<?php if ( $hovercraft_topbar_left_active && $hovercraft_topbar_right_active ) : ?>
			<div class="topbar-left">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_left' ); ?>
			</div><!-- topbar-left -->

			<div class="topbar-right">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_right' ); ?>
			</div><!-- topbar-right -->
		<?php elseif ( $hovercraft_topbar_left_active ) : ?>
			<div class="topbar-center">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_left' ); ?>
			</div><!-- topbar-center -->
		<?php elseif ( $hovercraft_topbar_right_active ) : ?>
			<div class="topbar-center">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_right' ); ?>
			</div><!-- topbar-center -->
		<?php endif; // end topbar widget checks ?>

	</div><!-- <?php echo esc_attr( $hovercraft_topbar_container_class ); ?> -->
</div><!-- topbar -->
