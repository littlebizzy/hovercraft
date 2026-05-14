<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

hovercraft_render_columns();

?>

<?php if ( is_active_sidebar( 'hovercraft_postcolumns_top' ) ) : ?>
<div class="postcolumns-top">
	<?php dynamic_sidebar( 'hovercraft_postcolumns_top' ); ?>
<div class="clear"></div>
</div><!-- postcolumns-top -->
<?php endif; // end hovercraft-postcolumns-top sidebar ?>

<?php if ( is_active_sidebar( 'hovercraft_postcolumns_bottom' ) ) : ?>
<div class="postcolumns-bottom">
	<?php dynamic_sidebar( 'hovercraft_postcolumns_bottom' ); ?>
<div class="clear"></div>
</div><!-- postcolumns-bottom -->
<?php endif; // end hovercraft-postcolumns-bottom sidebar ?>
