<?php

// check preheader widget areas
$hovercraft_preheader_left_active = is_active_sidebar( 'hovercraft_preheader_left' );
$hovercraft_preheader_right_active = is_active_sidebar( 'hovercraft_preheader_right' );
$hovercraft_has_preheader_widgets = $hovercraft_preheader_left_active || $hovercraft_preheader_right_active;

// skip empty preheader
if ( ! $hovercraft_has_preheader_widgets ) {
	return;
}

// get desktop header width
$hovercraft_desktop_header_width = get_theme_mod( 'hovercraft_desktop_header_width', 'fixed' );
$hovercraft_preheader_container_class = 'inner';

if ( 'full' === $hovercraft_desktop_header_width ) {
	$hovercraft_preheader_container_class = 'full';
}

?>
<div id="preheader">
	<div class="<?php echo esc_attr( $hovercraft_preheader_container_class ); ?>">

		<?php if ( $hovercraft_preheader_left_active ) : ?>
			<div class="preheader-left">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_left' ); ?>
			</div><!-- preheader-left -->
		<?php endif; // end preheader-left-active ?>

		<?php if ( $hovercraft_preheader_right_active ) : ?>
			<div class="preheader-right">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_right' ); ?>
			</div><!-- preheader-right -->
		<?php endif; // end preheader-right-active ?>

	</div><!-- <?php echo esc_attr( $hovercraft_preheader_container_class ); ?> -->
</div><!-- preheader -->
