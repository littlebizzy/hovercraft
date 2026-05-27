<?php

// check preheader widget areas
$hovercraft_preheader_left_active = is_active_sidebar( 'hovercraft_preheader_left' );
$hovercraft_preheader_right_active = is_active_sidebar( 'hovercraft_preheader_right' );
$hovercraft_has_preheader_widgets = $hovercraft_preheader_left_active || $hovercraft_preheader_right_active;

// skip empty preheader
if ( ! $hovercraft_has_preheader_widgets ) {
	return;
}

?>
<div id="preheader">
	<div class="inner">

		<?php if ( $hovercraft_preheader_left_active ) : ?>
			<div class="preheader-left<?php echo $hovercraft_preheader_right_active ? '' : ' preheader-single'; ?>">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_left' ); ?>
			</div><!-- preheader-left -->
		<?php endif; // end preheader-left-active ?>

		<?php if ( $hovercraft_preheader_right_active ) : ?>
			<div class="preheader-right<?php echo $hovercraft_preheader_left_active ? '' : ' preheader-single'; ?>">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_right' ); ?>
			</div><!-- preheader-right -->
		<?php endif; // end preheader-right-active ?>

	</div><!-- inner -->
</div><!-- preheader -->