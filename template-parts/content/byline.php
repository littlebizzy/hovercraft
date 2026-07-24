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
        <?php endif; // end hovercraft-byline-photo

        $hovercraft_biography = get_theme_mod( 'hovercraft_biography', 'native_posts_only' );
        if ( $hovercraft_biography === 'native_posts_only' || $hovercraft_biography === 'all_post_types' ) : ?>
            <a href="#author" rel="author"><span class="author-name"><?php echo esc_html( $author_name ); ?></span></a>
        <?php else : ?>
            <span class="author-name"><?php echo esc_html( $author_name ); ?></span>
        <?php endif; // end biography setting ?>
    </span><!-- post-author -->
			
    <?php
    $hovercraft_byline_date = get_theme_mod( 'hovercraft_byline_date', 'published_date_only' );

    if ( $hovercraft_byline_date === 'published_date_only' ) : ?>
        <span class="byline-separator">|</span>
        <time class="date-published" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
            <?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
        </time>

    <?php elseif ( $hovercraft_byline_date === 'updated_date_only' ) : ?>
        <span class="byline-separator">|</span>
        <time class="date-updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_W3C ) ); ?>">
            <?php echo esc_html__( 'Updated', 'hovercraft' ) . ' ' . esc_html( get_the_modified_date( 'M j, Y' ) ); ?>
        </time>

    <?php elseif ( $hovercraft_byline_date === 'updated_and_published_dates' ) : ?>
        <span class="byline-separator">|</span>
        <time class="date-published" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
            <?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
        </time>
        <span class="byline-date-separator" aria-hidden="true">&middot;</span>
        <time class="date-updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_W3C ) ); ?>">
            <?php echo esc_html__( 'Updated', 'hovercraft' ) . ' ' . esc_html( get_the_modified_date( 'M j, Y' ) ); ?>
        </time>
    <?php endif; // end byline date ?>
</div><!-- post-byline -->

<?php
