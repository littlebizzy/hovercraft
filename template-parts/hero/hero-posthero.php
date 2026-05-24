<?php

// check posthero widget area
$hovercraft_posthero_active = is_active_sidebar( 'hovercraft_posthero' );

// skip empty posthero
if ( ! $hovercraft_posthero_active ) {
	return;
}

// render posthero widget area
?>
<div id="posthero">
	<div class="inner">
		<?php
		// remove widget titles for posthero widgets
		add_filter( 'widget_title', '__return_false' );
		dynamic_sidebar( 'hovercraft_posthero' );
		remove_filter( 'widget_title', '__return_false' );
		?>
		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- posthero -->
