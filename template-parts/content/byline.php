<?php
// skip post byline on product post type
if ( is_singular( 'product' ) ) {
    return;
}
?>

<div class="post-byline">
    <span class="post-author">
        <?php
        $author_id = get_the_author_meta( 'ID' );
        $author_name = get_the_author_meta( 'display_name', $author_id );
        $author_avatar_url = get_avatar_url( $author_id, array( 'size' => 150 ) );

        $hovercraft_byline_photo = get_theme_mod( 'hovercraft_byline_photo', 'none' );
        if ( $hovercraft_byline_photo === 'byline_only' || $hovercraft_byline_photo === 'byline_and_biography' ) : ?>
            <span class="byline-photo">
                <img class="avatar byline-avatar" src="<?php echo esc_url( $author_avatar_url ); ?>" alt="<?php echo esc_attr( $author_name ); ?>">
            </span>
        <?php endif;

        $hovercraft_biography = get_theme_mod( 'hovercraft_biography', 'native_posts_only' );
        if ( $hovercraft_biography === 'native_posts_only' || $hovercraft_biography === 'all_post_types' ) : ?>
            <a href="#author" rel="author"><strong><?php echo esc_html( $author_name ); ?></strong></a>
        <?php else : ?>
            <strong><?php echo esc_html( $author_name ); ?></strong>
        <?php endif; ?>
    </span><!-- post-author -->
			
    <?php
    $hovercraft_byline_date = get_theme_mod( 'hovercraft_byline_date', 'published_date_only' );

    if ( $hovercraft_byline_date === 'published_date_only' ) : ?>
        <span class="byline-separator">|</span>
        <span class="post-published"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>

    <?php elseif ( $hovercraft_byline_date === 'updated_date_only' ) : ?>
        <span class="byline-separator">|</span>
        <span class="post-updated"><?php echo esc_html( get_the_modified_date( 'M j, Y' ) ); ?></span>

    <?php elseif ( $hovercraft_byline_date === 'updated_and_published_dates' ) : ?>
        <span class="byline-separator">|</span>
        <span class="post-published"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
        <span class="post-updated"><?php echo esc_html( get_the_modified_date( 'M j, Y' ) ); ?></span>
    <?php endif; ?>
</div><!-- post-byline -->

<?php
// Ref: ChatGPT
// Ref: https://wordpress.stackexchange.com/questions/264802/how-to-check-if-custom-post-type-exists-in-wordpress
// Ref: https://stackoverflow.com/questions/3634381/php-if-something-is-the-case-do-nothing
// Ref: https://stackoverflow.com/questions/45529150/how-to-get-the-url-of-the-get-avatar-url-function-in-wordpress
// Ref: https://www.wpexplorer.com/remove-async-decoding-wordpress-images/
