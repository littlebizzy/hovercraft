<?php
if ( function_exists( 'is_product' ) && is_product() ) {
	return;
}

// get author id safely
global $post;
$author_id = isset( $post ) && is_object( $post ) ? $post->post_author : 0;
?>

<div class="post-byline-archive">
    <span class="post-author">
        <strong><?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></strong>
    </span>

    <?php
    $hovercraft_byline_date = get_theme_mod( 'hovercraft_byline_date', 'published_date_only' );

    if ( $hovercraft_byline_date === 'published_date_only' ) { ?>
        <span class="byline-separator">|</span>
        <span class="post-published"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
    <?php } elseif ( $hovercraft_byline_date === 'updated_date_only' ) { ?>
        <span class="byline-separator">|</span>
        <span class="post-updated"><?php echo esc_html( get_the_modified_time( 'M j, Y' ) ); ?></span>
    <?php } elseif ( $hovercraft_byline_date === 'updated_and_published_dates' ) { ?>
        <span class="byline-separator">|</span>
        <span class="post-published"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
        <span class="post-updated"><?php echo esc_html( get_the_modified_time( 'M j, Y' ) ); ?></span>
    <?php } ?>
</div><!-- post-byline-archive -->

<?php
// Ref: ChatGPT
// Ref: https://wordpress.stackexchange.com/questions/264802/how-to-check-if-custom-post-type-exists-in-wordpress
// Ref: https://stackoverflow.com/questions/3634381/php-if-something-is-the-case-do-nothing
// Ref: https://stackoverflow.com/questions/45529150/how-to-get-the-url-of-the-get-avatar-url-function-in-wordpress
// Ref: https://www.wpexplorer.com/remove-async-decoding-wordpress-images/
