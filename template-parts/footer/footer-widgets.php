<?php

// check footer widget areas
$hovercraft_has_footer_widgets = is_active_sidebar( 'hovercraft_footer_one' ) || is_active_sidebar( 'hovercraft_footer_two' ) || is_active_sidebar( 'hovercraft_footer_three' ) || is_active_sidebar( 'hovercraft_footer_four' ) || is_active_sidebar( 'hovercraft_footer_callout' );

// skip empty footer widgets
if ( ! $hovercraft_has_footer_widgets ) {
	return;
}

// get footer column layout
$hovercraft_footer_columns = get_theme_mod( 'hovercraft_footer_columns', 'four_weighted' );

?>
<div id="footer">
	<div class="inner">

		<?php
		// render footer column layout
		switch ( $hovercraft_footer_columns ) {
			case 'four_equal':
				get_template_part( 'template-parts/footer/footer-four-columns-equal' );
				break;

			case 'three_equal':
				get_template_part( 'template-parts/footer/footer-three-columns-equal' );
				break;

			case 'three_weighted':
				get_template_part( 'template-parts/footer/footer-three-columns-unequal' );
				break;

			case 'four_weighted':
			default:
				get_template_part( 'template-parts/footer/footer-four-columns-unequal' );
				break;
		}
		?>

		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- footer -->
