<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// validate license key with the license server
function hovercraft_validate_license_key( $license_key ) {

	// license server url
	$license_server = '';

	// skip remote checks until licensing is live
	if ( empty( $license_key ) || empty( $license_server ) ) {
		return false;
	}

	// send request to check license validity
	$response = wp_remote_get( esc_url_raw( $license_server . '/validate-key?license=' . urlencode( $license_key ) ) );

	// handle request errors
	if ( is_wp_error( $response ) ) {
		return false;
	}

	// decode server response
	$data = json_decode( wp_remote_retrieve_body( $response ), true );

	return false;
}

