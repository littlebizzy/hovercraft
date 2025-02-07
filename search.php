<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
    <div class="inner">
    
        <?php 
        $hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
        if ( $hovercraft_sidebar_status_checked == true ) { ?>
            <div id="primary">
        <?php } else { ?>
            <div id="primary-wide">
        <?php } ?>
        
        <div id="content-wrapper">
            
            <?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
            
            <div id="content-padded">
        
                <h1><?php _e( 'Search results for:', 'hovercraft' ); ?>&nbsp;<span class="search-query"><?php echo get_search_query(); ?></span></h1>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="post-tease-archive">
                        <?php get_template_part( 'template-parts/content/featured-image-archive' ); ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="post-excerpt-archive"><?php the_excerpt(); ?></div>
                    </div><!-- post-tease-archive -->

                <?php endwhile; endif; ?><!-- the loop -->
                
                <?php get_template_part( 'template-parts/content/pagination' ); ?>
            
                <div class="clear"></div>
            </div><!-- content-padded -->

        </div><!-- content-wrapper -->
        
        <div class="clear"></div>
    </div><!-- primary -->

    <?php 
    if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
        get_template_part( 'sidebar' ); 
    } ?>
    
    <div class="clear"></div>
    </div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
