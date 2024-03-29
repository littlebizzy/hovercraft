<?php
$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
    'post__not_in'        => array( get_queried_object_id() ),
    'posts_per_page'      => 5,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'post_tag',
            'terms'    => $tags
        ]
    ]
];
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
    echo '<div id="related"><h4>Related Posts:</h4><ul>';
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php }
        wp_reset_postdata();
    echo '</ul></div><!-- related -->';
}

// https://wordpress.stackexchange.com/a/183498/152624
// alt: https://stackoverflow.com/a/58809628/1718491
// alt: https://wordpress.stackexchange.com/a/413722/152624
?> 
