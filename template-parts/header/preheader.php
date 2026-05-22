<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$preheader_left_active = is_active_sidebar( 'hovercraft_preheader_left' );
$preheader_right_active = is_active_sidebar( 'hovercraft_preheader_right' );

if ( ! $preheader_left_active && ! $preheader_right_active ) {
	return;
}

?>
<div id="preheader">
	<div class="inner">

		<?php if ( $preheader_left_active && $preheader_right_active ) : ?>
			<div class="preheader-left">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_left' ); ?>
			</div><!-- preheader-left -->
			<div class="preheader-right">
				<?php hovercraft_dynamic_sidebar_without_title( 'hovercraft_preheader_right' ); ?>
			</div><!-- preheader-right -->
		<?php else : ?>
			<?php $preheader_sidebar = $preheader_left_active ? 'hovercraft_preheader_left' : 'hovercraft_preheader_right'; ?>
			<div class="preheader-center">
				<?php hovercraft_dynamic_sidebar_without_title( $preheader_sidebar ); ?>
			</div><!-- preheader-center -->
		<?php endif; // end preheader columns ?>

	</div><!-- inner -->
</div><!-- preheader -->
