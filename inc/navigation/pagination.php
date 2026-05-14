<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_pagination_nav() {

	if ( is_singular() ) {
		return;
	}

	global $wp_query;

	// stop execution if there is only 1 page
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	$paged = 1;

	if ( get_query_var( 'paged' ) ) {
		$paged = absint( get_query_var( 'paged' ) );
	}

	$max = intval( $wp_query->max_num_pages );
	$links = array();

	// add current page to the array
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	// add the pages around the current page to the array
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	// previous post link
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
	}

	// link to first page, plus ellipses if necessary
	if ( ! in_array( 1, $links, true ) ) {
		$class = '';

		if ( 1 === $paged ) {
			$class = ' class="active"';
		}

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links, true ) ) {
			echo '<li>…</li>';
		}
	}

	// link to current page, plus 2 pages in either direction if necessary
	sort( $links );

	foreach ( (array) $links as $link ) {
		$class = '';

		if ( $paged === $link ) {
			$class = ' class="active"';
		}

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	// link to last page, plus ellipses if necessary
	if ( ! in_array( $max, $links, true ) ) {
		if ( ! in_array( $max - 1, $links, true ) ) {
			echo '<li>…</li>' . "\n";
		}

		$class = '';

		if ( $paged === $max ) {
			$class = ' class="active"';
		}

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	// next post link
	if ( get_next_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );
	}

	echo '</ul></div>' . "\n";
}


add_filter( 'request', function ( $query_string ) {
	if ( isset( $query_string['page'], $query_string['name'] ) && 'page' === $query_string['name'] ) {
		unset( $query_string['name'] );
		$query_string['paged'] = $query_string['page'];
	}

	return $query_string;
} );
