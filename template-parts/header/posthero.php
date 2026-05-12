<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="posthero">
	<div class="inner">
		<?php
		add_filter( 'widget_title', '__return_false' );
		dynamic_sidebar( 'hovercraft_posthero' );
		remove_filter( 'widget_title', '__return_false' );
		?>
		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- posthero -->
