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

<div id="full-screen-search">
	<?php $hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' ); ?>
	<?php if ( $hovercraft_layout_icons === 'material_icons_classic' ) : ?>
		<button type="button" class="close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>"><i class="material-icons close" aria-hidden="true">close</i></button>
	<?php elseif ( $hovercraft_layout_icons === 'font_awesome_version_6' ) : ?>
		<button type="button" class="close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>"><i class="fa-solid fa-x" aria-hidden="true"></i></button>
	<?php endif; // end layout icons ?>

	<?php get_search_form(); ?>
</div><!-- full-screen-search -->

<?php wp_footer(); ?>

</body><!-- body -->
</html><!-- html -->
