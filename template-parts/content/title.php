<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// content title display

if ( ! hovercraft_is_title_hidden() ) : ?>
	<?php
	$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
	$hovercraft_title_classes = array( 'entry-title' );

	if ( $h1_divider_display === 'everywhere_possible' || $h1_divider_display === 'everywhere_except_heros' ) {
		$hovercraft_title_classes[] = 'divide';
	}
	?>
	<h1 class="<?php echo esc_attr( implode( ' ', $hovercraft_title_classes ) ); ?>"><?php echo esc_html( get_the_title() ); ?></h1>
<?php endif; // end title display ?>
