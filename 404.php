<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">

<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) === 1 ) : ?>
	<div id="primary">
<?php else : ?>
	<div id="primary-wide">
<?php endif; ?>

	<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
	
	<div id="content-wrapper">
	
		<h1><?php esc_html_e( '404 Error (Not Found)', 'hovercraft' ); ?></h1>
		
	<?php get_template_part( 'template-parts/content/loop' ); ?>
	
	<div class="clear"></div>
	</div><!-- content-wrapper -->
	
	<div class="clear"></div>
</div><!-- primary -->


<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) === 1 ) : ?>
	<?php get_template_part( 'sidebar' ); ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/content/pagination' ); ?>
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->


<?php get_template_part( 'footer' ); ?>
