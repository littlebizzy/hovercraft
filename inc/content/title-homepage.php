<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// filter homepage document title
function hovercraft_homepage_title( $title ) {
	if ( ! is_front_page() ) {
		return $title;
	}

	$hovercraft_homepage_html_title = get_theme_mod( 'hovercraft_homepage_html_title', 'site_name_site_tagline' );
	$blogname = get_option( 'blogname', '' );
	$blogdescription = get_option( 'blogdescription', '' );
	$id_frontpage = get_option( 'page_on_front', 0 );

	if ( 'site_name_site_tagline' === $hovercraft_homepage_html_title ) {
		if ( ! empty( $blogdescription ) ) {
			return $blogname . ' | ' . $blogdescription;
		}

		return $blogname;
	}

	if ( 'site_name_dash_site_tagline' === $hovercraft_homepage_html_title ) {
		if ( ! empty( $blogdescription ) ) {
			return $blogname . ' - ' . $blogdescription;
		}

		return $blogname;
	}

	if ( 'site_name_only' === $hovercraft_homepage_html_title ) {
		return $blogname;
	}

	if ( 'site_name_page_title' === $hovercraft_homepage_html_title && ! empty( $id_frontpage ) ) {
		return $blogname . ' | ' . get_the_title( $id_frontpage );
	}

	if ( 'site_name_dash_page_title' === $hovercraft_homepage_html_title && ! empty( $id_frontpage ) ) {
		return $blogname . ' - ' . get_the_title( $id_frontpage );
	}

	if ( 'page_title_only' === $hovercraft_homepage_html_title && ! empty( $id_frontpage ) ) {
		return get_the_title( $id_frontpage );
	}

	return $title;
}
add_filter( 'pre_get_document_title', 'hovercraft_homepage_title' );
