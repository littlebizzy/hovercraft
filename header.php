<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
        <link rel="dns-prefetch" href="https://fonts.googleapis.com">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <?php wp_resource_hints(); ?>

        <?php 
        // get material icons setting
        $material_icons_setting = get_theme_mod( 'hovercraft_material_icons', 'classic_only' );

        // map available material icons
        $material_icons_map = array(
            'classic_only' => 'Material+Icons',
            'classic_and_outlined' => 'Material+Icons&family=Material+Icons+Outlined',
            'classic_and_outlined_and_two_toned' => 'Material+Icons&family=Material+Icons+Outlined&family=Material+Icons+Two+Tone',
        );

        // output material icons if not 'none' and valid
        if ( $material_icons_setting !== 'none' && isset( $material_icons_map[ $material_icons_setting ] ) ) {
        ?><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=<?php echo esc_attr( $material_icons_map[ $material_icons_setting ] ); ?>&display=block"><?php 
        } ?>

        <?php 
        // get font awesome setting
        $font_awesome_setting = get_theme_mod( 'hovercraft_font_awesome', 'none' );

        // map available font awesome versions
        $font_awesome_map = array(
            'version_6' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
            'version_5' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
            'version_4' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/all.min.css',
        );

        // output font awesome if not 'none' and valid
        if ( $font_awesome_setting !== 'none' && isset( $font_awesome_map[ $font_awesome_setting ] ) ) {
        ?><link rel="stylesheet" href="<?php echo esc_url( $font_awesome_map[ $font_awesome_setting ] ); ?>"><?php 
        } ?>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=block">

        <?php 
        // inline the theme's main stylesheet
        $style_path = get_stylesheet_directory() . '/style.css';
        if ( is_readable( $style_path ) ) {
        ?><style><?php readfile( $style_path ); ?></style><?php 
        } ?>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <?php wp_body_open(); ?>

        <?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

        <div id="container"><!-- main container -->

            <?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) || is_active_sidebar( 'hovercraft_topbar_right' ) ) : ?>
                <div id="topbar"><!-- topbar section -->
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
                                <?php dynamic_sidebar( is_active_sidebar( 'hovercraft_topbar_left' ) ? 'hovercraft_topbar_left' : 'hovercraft_topbar_right' ); ?>
                            </div><!-- topbar-center -->
                        <?php endif;

                        // restore widget titles after topbar
                        remove_filter( 'widget_title', '__return_false' );
                        ?>

                        <div class="clear"></div><!-- clear floats -->

                    </div><!-- inner -->
                </div><!-- topbar -->
            <?php endif; ?>

<!-- Ref: ChatGPT -->
<!-- Ref: https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar -->
<!-- Ref: https://wordpress.stackexchange.com/questions/419686/how-to-retrieve-blog-language-without-any-region-locale-attached -->
<!-- Ref: https://stackoverflow.com/questions/48021086/how-to-avoid-font-awesome-loading-jumping-when-opening-a-page -->
<!-- Ref: https://www.smashingmagazine.com/2021/05/reduce-font-loading-impact-css-descriptors/ -->
