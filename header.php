<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <?php 
        $hovercraft_material_icons = get_theme_mod( 'hovercraft_material_icons', 'classic_only' );
        $icons = array(
            'classic_only' => 'Material+Icons',
            'classic_and_outlined' => 'Material+Icons&family=Material+Icons+Outlined',
            'classic_and_outlined_and_two_toned' => 'Material+Icons&family=Material+Icons+Outlined&family=Material+Icons+Two+Tone',
        );
        if ( isset( $icons[ $hovercraft_material_icons ] ) ) :
        ?>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=<?php echo esc_attr( $icons[ $hovercraft_material_icons ] ); ?>&display=block">
        <?php endif; ?>

        <?php 
        $hovercraft_font_awesome = get_theme_mod( 'hovercraft_font_awesome', 'none' );
        $font_awesome = array(
            'version_6' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
            'version_5' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
            'version_4' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/all.min.css',
        );
        if ( isset( $font_awesome[ $hovercraft_font_awesome ] ) ) :
        ?>
            <link rel="stylesheet" href="<?php echo esc_url( $font_awesome[ $hovercraft_font_awesome ] ); ?>">
        <?php endif; ?>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=block">

        <style>
            <?php 
            $style_path = get_stylesheet_directory() . '/style.css';
            if ( file_exists( $style_path ) && is_readable( $style_path ) ) :
                echo trim( file_get_contents( $style_path ) );
            endif;
            ?>
        </style>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <?php wp_body_open(); ?>

        <?php get_template_part( 'template-parts/header/mobile-menu' ); ?>

        <div id="container">

                <?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) || is_active_sidebar( 'hovercraft_topbar_right' ) ) : ?>
                    <div id="topbar">
                        <div class="inner">

                            <?php if ( is_active_sidebar( 'hovercraft_topbar_left' ) && is_active_sidebar( 'hovercraft_topbar_right' ) ) : ?>
                                <div class="topbar-left">
                                    <?php 
                                    add_filter( 'widget_title', '__return_false' );
                                    dynamic_sidebar( 'hovercraft_topbar_left' );
                                    remove_filter( 'widget_title', '__return_false' ); 
                                    ?>
                                </div>
                                <div class="topbar-right">
                                    <?php 
                                    add_filter( 'widget_title', '__return_false' );
                                    dynamic_sidebar( 'hovercraft_topbar_right' );
                                    remove_filter( 'widget_title', '__return_false' ); 
                                    ?>
                                </div>
                            <?php else : ?>
                                <div class="topbar-center">
                                    <?php 
                                    $sidebar = is_active_sidebar( 'hovercraft_topbar_left' ) ? 'hovercraft_topbar_left' : 'hovercraft_topbar_right';
                                    add_filter( 'widget_title', '__return_false' );
                                    dynamic_sidebar( $sidebar );
                                    remove_filter( 'widget_title', '__return_false' ); 
                                    ?>
                                </div>
                            <?php endif; ?>

                            <div class="clear"></div>

                        </div>
                    </div>
                <?php endif; ?>


<!-- Ref: ChatGPT -->
<!-- Ref: https://stackoverflow.com/questions/13903918/apply-widget-title-filter-only-to-wordpress-widgets-from-a-certain-sidebar -->
<!-- Ref: https://wordpress.stackexchange.com/questions/419686/how-to-retrieve-blog-language-without-any-region-locale-attached -->
<!-- Ref: https://stackoverflow.com/questions/48021086/how-to-avoid-font-awesome-loading-jumping-when-opening-a-page -->
<!-- Ref: https://www.smashingmagazine.com/2021/05/reduce-font-loading-impact-css-descriptors/ -->
