<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="clear"></div>

<?php if ( is_active_sidebar( 'hovercraft_home_postmain_top' ) && is_front_page() ) : ?>
	<div id="home-postmain-top">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_top' ); ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- home-postmain-top -->
<?php endif; // end is_front_page ?>

<?php if ( is_active_sidebar( 'hovercraft_home_postmain_bottom' ) && is_front_page() ) : ?>
	<div id="home-postmain-bottom">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_bottom' ); ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- home-postmain-bottom -->
<?php endif; // end is_front_page ?>

<?php get_template_part( 'template-parts/footer/prefooter' ); ?>
<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
<?php get_template_part( 'template-parts/footer/copyright' ); ?>

</div><!-- container -->

<?php get_template_part( 'template-parts/misc/search-modal' ); ?>

<?php wp_footer(); ?>

</body><!-- body -->
</html><!-- html -->
