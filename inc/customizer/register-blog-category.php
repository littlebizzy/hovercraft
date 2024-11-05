<?php

function hovercraft_register_blog_category( $wp_customize ) {

    // get an array of categories
    $categories_list = get_categories( array( 'orderby' => 'name' ) );

    // initialize choices list with default value
    $choices_list = [ 'none' => 'None (Disabled)' ];

    // populate choices list with categories
    foreach ( $categories_list as $category ) {
        $choices_list[ $category->slug ] = __( $category->name );
    }

    // blog category setting
    $wp_customize->add_setting( 'hovercraft_blog_category', array(
        'default'           => 'none',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // blog category control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_blog_category',
        array(
            'label'       => __( 'Feed Category', 'hovercraft' ),
            'description' => __( 'Which post category should be displayed as the default feed and/or Posts page?', 'hovercraft' ),
            'section'     => 'hovercraft_category_layouts',
            'settings'    => 'hovercraft_blog_category',
            'type'        => 'select',
            'choices'     => $choices_list,
        )
    ) );
}

add_action( 'customize_register', 'hovercraft_register_blog_category' );

// Ref: ChatGPT
// Ref: https://ralphjsmit.com/create-a-category-dropdown-in-wordpress-customizer
// Ref: https://stackoverflow.com/questions/43715567/how-to-add-extra-values-to-a-existing-array
