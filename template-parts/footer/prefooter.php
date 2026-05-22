<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// render prefooter widget area
function hovercraft_render_prefooter_widget_area( $sidebar_id, $wrapper_id ) {
	if ( ! is_active_sidebar( $sidebar_id ) ) {
		return;
	}
	?>
	<div id="<?php echo esc_attr( $wrapper_id ); ?>">
		<div class="inner">
			<?php dynamic_sidebar( $sidebar_id ); ?>
		</div><!-- inner -->
	</div><!-- <?php echo esc_html( $wrapper_id ); ?> -->
	<?php
}

hovercraft_render_prefooter_widget_area( 'hovercraft_prefooter_top', 'prefooter-top' );
hovercraft_render_prefooter_widget_area( 'hovercraft_prefooter_bottom', 'prefooter-bottom' );
