<?php
// https://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/

function hovercraft_pagination_nav() {
  
    if( is_singular() )
        return;
  
    global $wp_query;
  
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
  
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
  
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<div class="navigation"><ul>' . "\n";
  
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
  
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
  
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
  
}

// https://stackoverflow.com/questions/30108550/wordpress-category-php-pagination-404-errors
// https://stackoverflow.com/questions/53109614/wordpress-404-error-with-pagination-page-2-when-setting-posts-per-page
// https://stackoverflow.com/questions/42189247/why-pagination-is-not-working-and-gives-a-404-error-on-the-wordpress-site
// https://wordpress.stackexchange.com/questions/296537/category-template-with-pagination-returns-404-on-next-pages
// https://wordpress.stackexchange.com/questions/298767/pagination-page-2-displaying-404-on-archive-pages
// https://wordpress.stackexchange.com/questions/209693/wordpress-page-2-404-pagination-problem-what-to-do
// https://generatepress.com/forums/topic/pagnation/

add_filter( 'request', function ( $query_string ) {
if ( isset( $query_string['page'], $query_string['name'] ) && 'page' === $query_string['name'] ) {
unset( $query_string['name'] );
$query_string['paged'] = $query_string['page'];
}
return $query_string;
} );
