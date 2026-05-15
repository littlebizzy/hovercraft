<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="main">
<div class="inner">
    <?php get_template_part( 'template-parts/content/primary' ); ?>
    <?php if ( hovercraft_should_show_sidebar() ) : ?>
		<?php get_template_part( 'sidebar' ); ?>
	<?php endif; // end sidebar ?>
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->
