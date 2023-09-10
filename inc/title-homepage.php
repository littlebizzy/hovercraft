<?php

add_filter( 'pre_get_document_title', 'hovercraft_homepage_title', 10, 2 );

function hovercraft_homepage_title( $title ) {
	
	if ( is_front_page() ) {
			$hovercraft_homepage_html_title = get_theme_mod( 'hovercraft_homepage_html_title', 'site_name_site_tagline' );
			if ( $hovercraft_homepage_html_title == 'site_name_site_tagline' ) {
				$blogname = get_option( 'blogname' );
				$blogdescription = get_option( 'blogdescription', "" );
            	if(!empty($blogdescription)) {
            		$title_ready = $blogname." &vert; ".$blogdescription;
            	} else {
					$title_ready = $blogname;
				}
				$title = $title_ready;
			} // if site_name_site_tagline
			elseif ( $hovercraft_homepage_html_title == 'site_name_dash_site_tagline' ) {
				$blogname = get_option( 'blogname' );
				$blogdescription = get_option( 'blogdescription', "" );
            	if(!empty($blogdescription)) {
            		$title_ready = $blogname." &ndash; ".$blogdescription;
            	} else {
					$title_ready = $blogname;
				}
				$title = $title_ready;
			} // if site_name_dash_site_tagline
			elseif ( $hovercraft_homepage_html_title == 'site_name_only' ) {
				$blogname = get_option( 'blogname' );
				$title = $blogname;
			} // if site_name_only
			elseif ( $hovercraft_homepage_html_title == 'site_name_page_title' ) {
				$blogname = get_option( 'blogname' );
				$id_frontpage = get_option( 'page_on_front' );
				if(!empty($id_frontpage)) {
					$frontpagetitle = get_the_title($id_frontpage);
					$title_ready = $blogname." &vert; ".$frontpagetitle;
				}
				$title = $title_ready;
			} // if site_name_page_title
			elseif ( $hovercraft_homepage_html_title == 'site_name_dash_page_title' ) {
				$blogname = get_option( 'blogname' );
				$id_frontpage = get_option( 'page_on_front' );
				if(!empty($id_frontpage)) {
					$frontpagetitle = get_the_title($id_frontpage);
					$title_ready = $blogname." &ndash; ".$frontpagetitle;
				}
				$title = $title_ready;
			} // if site_name_dash_page_title
			elseif ( $hovercraft_homepage_html_title == 'page_title_only' ) {
				$id_frontpage = get_option( 'page_on_front' );
				$frontpagetitle = get_the_title($id_frontpage);
				$title = $frontpagetitle;
			} // if page_title_only
		} // if is_front_page

    return $title;
}

// https://wordpress.stackexchange.com/questions/176940/add-theme-support-title-tag-in-conflict-with-custom-titles-function
// https://wordpress.stackexchange.com/questions/305353/cant-change-the-title-tag-with-wp-title-filter
// https://stackoverflow.com/questions/29956708/is-there-any-reason-to-use-html-entities-over-the-characters-themselves
