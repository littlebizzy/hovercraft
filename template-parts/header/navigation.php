<?php

$hovercraft_header_layout = get_theme_mod( 'hovercraft_header_layout', 'inline' );

if ( 'stacked' === $hovercraft_header_layout ) {
	get_template_part( 'template-parts/header/navigation-stacked' );
	return;
}

get_template_part( 'template-parts/header/navigation-inline' );
