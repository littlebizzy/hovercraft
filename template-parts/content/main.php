<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="main">
<div class="inner">
    <?php get_template_part( 'template-parts/content/primary' ); ?>
    <?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) : ?>
		<?php get_template_part( 'sidebar' ); ?>
	<?php endif; // end sidebar status ?>
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->
