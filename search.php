<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="main">
<div class="inner">
	
	<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { ?><div id="primary"><?php } else { ?><div id="primary-wide"><?php } ?>

	<?php if ( get_theme_mod( 'hovercraft_breadcrumbs' ) == 1 ) { ?>
		<div class="breadcrumbs">
			<?php ah_breadcrumb(); ?>
		</div><!-- breadcrumbs -->
	<?php } ?><!-- if hovercraft_breadcrumbs -->
	
	<div id="content">
	
    <h1 class="page-title"><?php _e( 'Search results for:', 'nd_dosth' ); ?></h1>
    <div class="search-query"><?php echo get_search_query(); ?></div>    

            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="search-result">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more-link">
                            <?php _e( 'Read More', 'nd_dosth' );  ?>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p><?php _e( 'No Search Results found', 'nd_dosth' ); ?></p>
            <?php endif; ?>
		
			<div class="clear"></div>
	</div><!-- content -->

	
	<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
	} ?>
	
	<?php get_template_part( 'template-parts/content/pagination' ); ?>
	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
    
