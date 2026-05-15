<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
    <div class="inner">
    
        <?php if ( hovercraft_should_show_sidebar() ) : ?>
            <div id="primary">
        <?php else : ?>
            <div id="primary-wide">
        <?php endif; // end sidebar ?>
        
        <div id="content-wrapper">
            
            <?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
            
            <div id="content-padded">
        
                <h1><?php esc_html_e( 'Search results for:', 'hovercraft' ); ?>&nbsp;<span class="search-query"><?php echo esc_html( get_search_query() ); ?></span></h1>
                
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="post-tease-archive">
                            <?php get_template_part( 'template-parts/content/featured-image-archive' ); ?>
                            <h4><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h4>
                            <div class="post-excerpt-archive"><?php the_excerpt(); ?></div>
                        </div><!-- post-tease-archive -->

	                    <?php endwhile; // end search results ?>

                <?php else : ?>

                    <p><?php esc_html_e( 'No results found.', 'hovercraft' ); ?></p>

                <?php endif; ?><!-- end the loop -->
                
                <?php get_template_part( 'template-parts/content/pagination' ); ?>
            
                <div class="clear"></div>
            </div><!-- content-padded -->

        </div><!-- content-wrapper -->
        
        <div class="clear"></div>
    </div><!-- primary -->

    <?php if ( hovercraft_should_show_sidebar() ) : ?>
        <?php get_template_part( 'sidebar' ); ?>
    <?php endif; // end sidebar ?>
    
    <div class="clear"></div>
    </div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
