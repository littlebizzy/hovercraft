<?php

function mysite_page_metabox() {
    add_meta_box( 
        'remove-title', 
        __('HoverCraft Theme', 'textdomain' ), 
        'hide_title_callback', 
        'page', 
        'side', 
        'high' 
    );
}
add_action( 'add_meta_boxes' , 'mysite_page_metabox');

function hide_title_callback( $post ) {

    // you have to verify this nonce inside `mysite_save_postdata()`
    // https://codex.wordpress.org/Function_Reference/wp_nonce_field
    wp_nonce_field( 'mysite_action_name', 'mysite_nonce_field_name' );

    // now you have the post ID
    $value = get_post_meta( $post->ID, '_mysite_meta_hide_title', true );

    if( $value == "on" ) : ?>
        <label for="hide">Hide Page Title: </label><input type="checkbox" name="hide" checked>
    <?php else : ?>
        <label for="hide">Hide Page Title: </label><input type="checkbox" name="hide">
    <?php endif;
}


// Save meta key and value
function mysite_save_postdata( $post_id ) {
    // https://codex.wordpress.org/Function_Reference/wp_verify_nonce
    if ( !wp_verify_nonce( $_POST['mysite_nonce_field_name'], 'mysite_action_name' ) ) {
        return;
    }

    if ( isset( $_POST['hide']) ) {
        update_post_meta(
            $post_id,
            '_mysite_meta_hide_title',
            sanitize_text_field( $_POST['hide'] )
        );
    } else {
        update_post_meta(
            $post_id,
            '_mysite_meta_hide_title',
            sanitize_text_field( "off" )
        );
    }
}

add_action('save_post', 'mysite_save_postdata');

// https://wordpress.stackexchange.com/questions/329053/hide-page-title-with-post-meta
