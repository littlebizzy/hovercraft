<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
        // inline parent theme's stylesheet
        $parent_style_path = get_template_directory() . '/style.css';
        if ( is_readable( $parent_style_path ) ) {
        ?><style><?php readfile( $parent_style_path ); ?></style><?php 
        } ?>

        <?php 
        // inline child theme's stylesheet
        $child_style_path = get_stylesheet_directory() . '/style.css';
        if ( is_readable( $child_style_path ) ) {
        ?><style><?php readfile( $child_style_path ); ?></style><?php 
        } ?>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <?php wp_body_open(); ?>

        <?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

        <div id="container"><!-- main container -->

            <?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) || is_active_sidebar( 'hovercraft_topbar_right' ) ) : ?>
                <div id="topbar">
                    <div class="inner">

                        <?php 
                        // disable widget titles for topbar
                        add_filter( 'widget_title', '__return_false' );

                        if ( is_active_sidebar( 'hovercraft_topbar_left' ) && is_active_sidebar( 'hovercraft_topbar_right' ) ) : ?>
                            <div class="topbar-left">
                                <?php dynamic_sidebar( 'hovercraft_topbar_left' ); ?>
                            </div><!-- topbar-left -->
                            <div class="topbar-right">
                                <?php dynamic_sidebar( 'hovercraft_topbar_right' ); ?>
                            </div><!-- topbar-right -->
                        <?php else : ?>
                            <div class="topbar-center">
                                <?php 
                                if ( is_active_sidebar( 'hovercraft_topbar_left' ) ) {
                                    dynamic_sidebar( 'hovercraft_topbar_left' );
                                } else {
                                    dynamic_sidebar( 'hovercraft_topbar_right' );
                                }
                                ?>
                            </div><!-- topbar-center -->
                        <?php endif;

                        // restore widget titles after topbar
                        remove_filter( 'widget_title', '__return_false' ); ?>

                        <div class="clear"></div><!-- clear floats -->

                    </div><!-- inner -->
                </div><!-- topbar -->
            <?php endif; ?>

<!-- Ref: ChatGPT -->
<!-- Ref: https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar -->
<!-- Ref: https://wordpress.stackexchange.com/questions/419686/how-to-retrieve-blog-language-without-any-region-locale-attached -->
<!-- Ref: https://stackoverflow.com/questions/48021086/how-to-avoid-font-awesome-loading-jumping-when-opening-a-page -->
<!-- Ref: https://www.smashingmagazine.com/2021/05/reduce-font-loading-impact-css-descriptors/ -->
