<div class="author-biography">
    <div class="biography-photo"><?php echo get_avatar( get_the_author_meta('user_email'), '150' ); ?></div>
        <h3 class="biography-name"><?php the_author_meta('display_name'); ?></h3>
        <p class="biography-description"><?php echo nl2br( get_the_author_meta('description') ); ?></p>
</div>

<!-- https://shihabiiuc.com/how-to-display-author-bio-in-wordpress-single-post/ -->
