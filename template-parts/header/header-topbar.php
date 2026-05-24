<?php

// check topbar widget areas
$hovercraft_topbar_left_active = is_active_sidebar( 'hovercraft_topbar_left' );
$hovercraft_topbar_right_active = is_active_sidebar( 'hovercraft_topbar_right' );
$hovercraft_has_topbar_widgets = $hovercraft_topbar_left_active || $hovercraft_topbar_right_active;

// skip empty topbar
if ( ! $hovercraft_has_topbar_widgets ) {
	return;
}

// get centered topbar widget area
if ( $hovercraft_topbar_left_active ) {
	$hovercraft_topbar_center_sidebar = 'hovercraft_topbar_left';
} else {
	$hovercraft_topbar_center_sidebar = 'hovercraft_topbar_right';
}

?>
<div id="topbar">
	<div class="inner">

		<?php // render split topbar widget areas ?>
		<?php if ( $hovercraft_topbar_left_active && $hovercraft_topbar_right_active ) : ?>
			<div class="topbar-left">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_left' ); ?>
			</div><!-- topbar-left -->
			<div class="topbar-right">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_right' ); ?>
			</div><!-- topbar-right -->
		<?php else : ?>
			<?php // render centered topbar widget area ?>
			<div class="topbar-center">
				<?php hovercraft_dynamic_sidebar_without_title( $hovercraft_topbar_center_sidebar ); ?>
			</div><!-- topbar-center -->
		<?php endif; // end topbar widget areas ?>

	</div><!-- inner -->
</div><!-- topbar -->
