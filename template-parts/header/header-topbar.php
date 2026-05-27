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

		<?php if ( $hovercraft_topbar_left_active ) : ?>
			<div class="topbar-left<?php echo $hovercraft_topbar_right_active ? '' : ' topbar-single'; ?>">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_left' ); ?>
			</div><!-- topbar-left -->
		<?php endif; // end topbar-left-active ?>

		<?php if ( $hovercraft_topbar_right_active ) : ?>
			<div class="topbar-right<?php echo $hovercraft_topbar_left_active ? '' : ' topbar-single'; ?>">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_right' ); ?>
			</div><!-- topbar-right -->
		<?php endif; // end topbar-right-active ?>

	</div><!-- <?php echo esc_attr( $hovercraft_topbar_container_class ); ?> -->
</div><!-- topbar -->