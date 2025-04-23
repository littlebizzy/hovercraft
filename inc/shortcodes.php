<?php
// register simplified button shortcode
function hovercraft_button_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'url'    => '#',
			'target' => '_self',
			'rel'    => '',
			'class'  => '',
			'style'  => 'primary',
		),
		$atts,
		'button'
	);

	$style_class = ( $atts['style'] === 'secondary' ) ? 'button-secondary' : 'button-primary';
	$rel_attr = $atts['rel'] ? ' rel="' . esc_attr( $atts['rel'] ) . '"' : '';
	$class_attr = trim( $style_class . ' ' . $atts['class'] );

	return '<a href="' . esc_url( $atts['url'] ) . '" target="' . esc_attr( $atts['target'] ) . '" class="' . esc_attr( $class_attr ) . '"' . $rel_attr . '>' . do_shortcode( $content ) . '</a>';
}
add_shortcode( 'button', 'hovercraft_button_shortcode' );

// Ref: ChatGPT
