<?php $hovercraft_post_tags = get_theme_mod( 'hovercraft_post_tags', 'native_posts_only' );

if ( $hovercraft_post_tags == 'native_posts_only' ) {
    if ( is_single() && 'post' == get_post_type() ) { ?>
        <div class="tags"><span><?php _e( 'Tags: ', 'hovercraft' ); echo wpdocs_show_tags(); ?></span></div><!-- tags -->
    <?php }
elseif ( $hovercraft_post_tags == 'native_posts_and_custom_posts' ) {
    if ( is_single() {
        if ( 'post' == get_post_type() || is_custom_post_type() ) { ?>
            <div class="tags"><span><?php _e( 'Tags: ', 'hovercraft' ); echo wpdocs_show_tags(); ?></span></div><!-- tags -->
        <?php }
    }
elseif ( $hovercraft_post_tags == 'native_posts_and_pages' ) {
    if ( is_single() {
        if ( 'post' == get_post_type() || is_page() ) { ?>
            <div class="tags"><span><?php _e( 'Tags: ', 'hovercraft' ); echo wpdocs_show_tags(); ?></span></div><!-- tags -->
        <?php }
    }
elseif ( $hovercraft_post_tags == 'native_posts_and_pages_and_custom_posts' ) {   
    if ( is_single() {
        if ( 'post' == get_post_type() || is_page() || is_custom_post_type() ) { ?>
            <div class="tags"><span><?php _e( 'Tags: ', 'hovercraft' ); echo wpdocs_show_tags(); ?></span></div><!-- tags -->
        <?php }
    }
else {
    // do nothing
}

// Ref: https://developer.wordpress.org/reference/functions/is_single/
// Ref: https://wordpress.stackexchange.com/questions/6731/how-do-test-if-a-post-is-a-custom-post-type
// Ref: https://wordpress.stackexchange.com/questions/62260/how-to-add-tags-to-custom-post-type
        
?>
