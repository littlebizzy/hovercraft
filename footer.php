<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="clear"></div>

<?php get_template_part( 'template-parts/home/home-postmain' ); ?>
<?php get_template_part( 'template-parts/footer/prefooter' ); ?>
<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
<?php get_template_part( 'template-parts/footer/copyright' ); ?>

</div><!-- container -->

<?php get_template_part( 'template-parts/misc/search-modal' ); ?>

<?php wp_footer(); ?>

</body><!-- body -->
</html><!-- html -->
