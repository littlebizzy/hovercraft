<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">
	
<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { ?><div id="primary"><?php } else { ?><div id="primary-wide"><?php } ?>
	
	<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
	
	<div id="content">
	
    <h1 class="page-title"><?php _e( 'Search results for:', 'nd_dosth' ); ?> <span class="search-query"><?php echo get_search_query(); ?></span></h1> 

            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more-link">
                            <?php _e( 'Read More', 'nd_dosth' );  ?>
                        </a>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p><?php _e( 'No Search Results found', 'nd_dosth' ); ?></p>
            <?php endif; ?>
		
			<div class="clear"></div>
	</div><!-- content -->
	
	<div class="clear"></div>
</div><!-- primary -->

	
	<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
	} ?>
	
	<?php get_template_part( 'template-parts/content/pagination' ); ?>
	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
	
