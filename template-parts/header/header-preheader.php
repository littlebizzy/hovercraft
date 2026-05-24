<?php

// check preheader widget areas
$hovercraft_preheader_left_active = is_active_sidebar( 'hovercraft_preheader_left' );
$hovercraft_preheader_right_active = is_active_sidebar( 'hovercraft_preheader_right' );
$hovercraft_has_preheader_widgets = $hovercraft_preheader_left_active || $hovercraft_preheader_right_active;

// skip empty preheader
if ( ! $hovercraft_has_preheader_widgets ) {
	return;
}

// get centered preheader widget area
if ( $hovercraft_preheader_left_active ) {
	$hovercraft_preheader_center_sidebar = 'hovercraft_preheader_left';
} else {
	$hovercraft_preheader_center_sidebar = 'hovercraft_preheader_right';
}

?>
<div id="preheader">
	<div class="inner">

		<?php // render split preheader widget areas ?>
		<?php if ( $hovercraft_preheader_left_active && $hovercraft_preheader_right_active ) : ?>
			<div class="preheader-left">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_left' ); ?>
			</div><!-- preheader-left -->
			<div class="preheader-right">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_right' ); ?>
			</div><!-- preheader-right -->
		<?php else : ?>
			<?php // render centered preheader widget area ?>
			<div class="preheader-center">
				<?php hovercraft_dynamic_sidebar_without_title( $hovercraft_preheader_center_sidebar ); ?>
			</div><!-- preheader-center -->
		<?php endif; // end preheader widget areas ?>

	</div><!-- inner -->
</div><!-- preheader -->
