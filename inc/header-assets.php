<?php

// add external font resource hints
function hovercraft_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );

        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    if ( 'dns-prefetch' === $relation_type ) {
        $urls[] = '//fonts.googleapis.com';
        $urls[] = '//fonts.gstatic.com';
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'hovercraft_resource_hints', 10, 2 );

// enqueue header font assets
function hovercraft_enqueue_header_assets() {
    $material_icons_setting = get_theme_mod( 'hovercraft_material_icons', 'classic_only' );

    $material_icons_map = array(
        'classic_only' => array(
            'Material+Icons',
        ),
        'classic_and_outlined' => array(
            'Material+Icons',
            'Material+Icons+Outlined',
        ),
        'classic_and_outlined_and_two_toned' => array(
            'Material+Icons',
            'Material+Icons+Outlined',
            'Material+Icons+Two+Tone',
        ),
    );

    if ( 'none' !== $material_icons_setting && isset( $material_icons_map[ $material_icons_setting ] ) ) {
        foreach ( $material_icons_map[ $material_icons_setting ] as $material_icons_family ) {
            $material_icons_handle = 'hovercraft_material_icons_' . sanitize_key( $material_icons_family );
            $material_icons_url = 'https://fonts.googleapis.com/icon?family=' . $material_icons_family . '&display=block';

            wp_enqueue_style( $material_icons_handle, $material_icons_url, array(), HOVERCRAFT_VERSION );
        }
    }

    $font_awesome_setting = get_theme_mod( 'hovercraft_font_awesome', 'none' );

    $font_awesome_map = array(
        'version_6' => array(
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
            'version' => '6.7.2',
        ),
        'version_5' => array(
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
            'version' => '5.15.4',
        ),
        'version_4' => array(
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
            'version' => '4.7.0',
        ),
    );

    if ( 'none' !== $font_awesome_setting && isset( $font_awesome_map[ $font_awesome_setting ] ) ) {
        wp_enqueue_style( 'hovercraft_font_awesome', $font_awesome_map[ $font_awesome_setting ]['url'], array(), $font_awesome_map[ $font_awesome_setting ]['version'] );
    }
}
add_action( 'wp_enqueue_scripts', 'hovercraft_enqueue_header_assets' );
