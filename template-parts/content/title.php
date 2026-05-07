<?php if ( ! hovercraft_is_title_hidden() ) : ?>
	<?php
	$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
	$hovercraft_title_class = '';

	if ( $h1_divider_display === 'everywhere_possible' || $h1_divider_display === 'everywhere_except_heros' ) {
		$hovercraft_title_class = 'divide';
	}
	?>
	<h1 class="<?php echo esc_attr( $hovercraft_title_class ); ?>"><?php echo esc_html( get_the_title() ); ?></h1>
<?php endif; ?>
