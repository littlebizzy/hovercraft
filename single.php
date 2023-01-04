<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <?php get_template_part( 'template-parts/content/main' ); ?>
</div>

<?php get_template_part( 'footer' ); ?>
