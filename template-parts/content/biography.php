<div class="author-biography">
    <div class="photo"><?php echo get_avatar( get_the_author_meta('user_email'), '150' ); ?></div>
        <h3 class="name"><?php the_author_meta('display_name'); ?></h3>
        <p class="description"><?php echo nl2br( get_the_author_meta('description') ); ?></p>
        <a class="profile-link" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">See all posts »</a>
</div>

<!-- https://shihabiiuc.com/how-to-display-author-bio-in-wordpress-single-post/ -->
