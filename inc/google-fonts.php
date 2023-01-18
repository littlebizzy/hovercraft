<?php

function hovercraft_google_fonts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Open+Sans:ital,wght@1,300&family=Roboto+Condensed:wght@300&family=Roboto:wght@300&display=swap', array(), null );

}

// add_action( 'wp_enqueue_scripts', 'hovercraft_google_fonts' );
