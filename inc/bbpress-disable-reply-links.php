<?php

// Remove all "Reply" links from both topics and individual replies
function hovercraft_remove_all_reply_links( $links ) {
    if ( isset( $links['reply'] ) ) {
        unset( $links['reply'] ); // Remove the reply link
    }
    return $links;
}
add_filter( 'bbp_topic_admin_links', 'hovercraft_remove_all_reply_links' );
add_filter( 'bbp_reply_admin_links', 'hovercraft_remove_all_reply_links' );

// Disable replying to individual replies, allow only replying to the main topic
function hovercraft_disable_reply_to_individual_replies( $can_publish, $reply_id = 0, $topic_id = 0 ) {
    // Ensure that reply and topic IDs are valid
    if ( ! $reply_id || ! $topic_id ) {
        return $can_publish; // Return original capability if IDs are not set
    }

    // Disable replies to individual replies
    if ( bbp_is_reply( $reply_id ) ) {
        return false; // Disable replies to individual replies
    }

    return $can_publish; // Allow replies to the main topic
}
add_filter( 'bbp_current_user_can_publish_replies', 'hovercraft_disable_reply_to_individual_replies', 10, 3 );

// Ref: ChatGPT
// Ref: https://bbpress.org/forums/topic/remove-reply-button/
// Ref: https://bbpress.org/forums/topic/disable-ability-to-reply/
