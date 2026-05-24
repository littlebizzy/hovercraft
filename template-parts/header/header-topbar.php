<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$topbar_left_active = is_active_sidebar( 'hovercraft_topbar_left' );
$topbar_right_active = is_active_sidebar( 'hovercraft_topbar_right' );

if ( ! $topbar_left_active && ! $topbar_right_active ) {
	return;
}

?>
<div id="topbar">
	<div class="inner">

		<?php if ( $topbar_left_active && $topbar_right_active ) : ?>
			<div class="topbar-left">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_left' ); ?>
			</div><!-- topbar-left -->
			<div class="topbar-right">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_topbar_right' ); ?>
			</div><!-- topbar-right -->
		<?php else : ?>
			<?php $topbar_sidebar = $topbar_left_active ? 'hovercraft_topbar_left' : 'hovercraft_topbar_right'; ?>
			<div class="topbar-center">
				<?php hovercraft_dynamic_sidebar_without_title( $topbar_sidebar ); ?>
			</div><!-- topbar-center -->
		<?php endif; // end topbar columns ?>

	</div><!-- inner -->
</div><!-- topbar -->
