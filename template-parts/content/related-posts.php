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
    echo '<div id="related"><h4>Related Posts</h4>';
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            <div class="ncc">

                <h5><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></h5>
                <?php the_excerpt(); ?>

            </div><!--ncc-->
        <?php }
        wp_reset_postdata();
    echo '</div><!--related-->';
}

// https://wordpress.stackexchange.com/a/183498/152624
?> 
