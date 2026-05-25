<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// license helpers

function hovercraft_validate_license_key( $license_key ) {
	$license_server = '';

	if ( empty( $license_key ) || empty( $license_server ) ) {
		return false;
	}

	$response = wp_remote_get( esc_url_raw( $license_server . '/validate-key?license=' . urlencode( $license_key ) ) );

	if ( is_wp_error( $response ) ) {
		return false;
	}

	json_decode( wp_remote_retrieve_body( $response ), true );

	return false;
}
