<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_active_sidebar( 'hovercraft_footer_one' ) && ! is_active_sidebar( 'hovercraft_footer_two' ) && ! is_active_sidebar( 'hovercraft_footer_three' ) && ! is_active_sidebar( 'hovercraft_footer_four' ) && ! is_active_sidebar( 'hovercraft_footer_callout' ) ) {
	return;
}

$hovercraft_footer_columns = get_theme_mod( 'hovercraft_footer_columns', 'four_weighted' );

?>
<div id="footer">
	<div class="inner">

		<?php
		if ( 'four_equal' === $hovercraft_footer_columns ) {
			get_template_part( 'template-parts/footer/footer-four-columns-equal' );
		} elseif ( 'four_weighted' === $hovercraft_footer_columns ) {
			get_template_part( 'template-parts/footer/footer-four-columns-unequal' );
		} elseif ( 'three_equal' === $hovercraft_footer_columns ) {
			get_template_part( 'template-parts/footer/footer-three-columns-equal' );
		} elseif ( 'three_weighted' === $hovercraft_footer_columns ) {
			get_template_part( 'template-parts/footer/footer-three-columns-unequal' );
		} else {
			get_template_part( 'template-parts/footer/footer-four-columns-unequal' );
		}
		?>

		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- footer -->
