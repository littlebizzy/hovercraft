<?php

function hovercraft_customizer($wp_customize) {
$wp_customize->get_section('header_image')->title = __( 'Header Media' );
}

add_action('customize_register', 'hovercraft_customizer');
