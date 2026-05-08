<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// blog options section
$wp_customize->add_section( 'hovercraft_blog', array(
    'title'      => 'Blog (Posts)',
    'priority'   => 113,
) );

// featured image position setting
$wp_customize->add_setting( 'hovercraft_featured_image_position', array(
    'default'    => 'above_title',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// featured image position control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_featured_image_position',
        array(
            'label'     => __( 'Featured Image Position', 'hovercraft' ),
			'description' => __( 'Where should the featured images appear on blog posts?', 'hovercraft' ),
            'section'   => 'hovercraft_blog',
            'settings'  => 'hovercraft_featured_image_position',
            'type'      => 'select',
			'choices' => array(
        		'above_title' => 'Above Title',
				'below_title' => 'Below Title'
    			)
        )
) );

// social sharing setting
$wp_customize->add_setting( 'hovercraft_social_sharing', array(
    'default'    => 'bottom_of_post',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// social sharing control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_social_sharing',
        array(
            'label'     => __( 'Social Sharing Links', 'hovercraft' ),
			'description' => __( 'Where should the social sharing links be displayed?', 'hovercraft' ),
            'section'   => 'hovercraft_blog',
            'settings'  => 'hovercraft_social_sharing',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'top_of_post' => 'Top Of Post',
				'bottom_of_post' => 'Bottom Of Post',
				'top_and_bottom_of_post' => 'Top & Bottom Of Post'
    			)
        )
) );

// author biography display setting
$wp_customize->add_setting( 'hovercraft_biography', array(
    'default'    => 'native_posts_only',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// author biography display control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_biography',
        array(
            'label'     => __( 'Author Biography Display', 'hovercraft' ),
			'description' => __( 'On which post types should the author biography be displayed (below article text)? Note: for SEO reasons, we highly recommend keeping this enabled in most cases.', 'hovercraft' ),
            'section'   => 'hovercraft_blog',
            'settings'  => 'hovercraft_biography',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'native_posts_only' => 'Native Posts Only',
				'all_post_types' => 'Native & Custom Post Types'
    			)
        )
) );

// author social media links setting
$wp_customize->add_setting( 'hovercraft_biography_links', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// author social media links control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_biography_links',
        array(
            'label'     => __( 'Author Social Media Links', 'hovercraft' ),
			'description' => __( 'Where should the author social media links be displayed? Note: Biography options require Author Biography to be enabled.', 'hovercraft' ),
            'section'   => 'hovercraft_blog',
            'settings'  => 'hovercraft_biography_links',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'byline_only' => 'Byline Only',
				'biography_only' => 'Biography Only',
				'byline_and_biography' => 'Byline & Biography'
    			)
        )
) );

// author photo setting
$wp_customize->add_setting( 'hovercraft_byline_photo', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// author photo control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_byline_photo',
        array(
            'label'     => __( 'Author Photo (Gravatar)', 'hovercraft' ),
			'description' => __( 'Where should the author gravatar photo be displayed? Note: Biography options require Author Biography to be enabled.', 'hovercraft' ),
            'section'   => 'hovercraft_blog',
            'settings'  => 'hovercraft_byline_photo',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'byline_only' => 'Byline Only',
				'biography_only' => 'Biography Only',
				'byline_and_biography' => 'Byline & Biography'
    			)
        )
) );

// byline date setting
$wp_customize->add_setting( 'hovercraft_byline_date', array(
    'default'    => 'updated_date_only',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// byline date control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_byline_date',
        array(
            'label'     => __( 'Post Byline Date', 'hovercraft' ),
			'description' => __( 'Which date should appear next to the post author name (in the byline)? Note: for SEO reasons, most sites should probably use the Updated Date Only option to keep things cleaner.', 'hovercraft' ),
            'section'   => 'hovercraft_blog',
            'settings'  => 'hovercraft_byline_date',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'updated_date_only' => 'Updated Date Only',
				'published_date_only' => 'Published Date Only',
				'updated_and_published_dates' => 'Updated & Published Dates'
    			)
        )
) );

// post tags setting
$wp_customize->add_setting( 'hovercraft_post_tags', array(
    'default'    => 'native_posts_only',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// post tags control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_post_tags',
        array(
            'label'     => __( 'Post Tags Display', 'hovercraft' ),
			'description' => __( 'Should the Tags be displayed at the bottom of articles or not?', 'hovercraft' ),
            'section'   => 'hovercraft_blog',
            'settings'  => 'hovercraft_post_tags',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
				'native_posts_only' => 'Native Posts Only',
				'native_posts_and_pages' => 'Native Posts & Pages',
				'native_posts_and_custom_posts' => 'Native Posts & Custom Posts',
				'native_posts_and_pages_and_custom_posts' => 'Native Posts, Pages & Custom Posts'
    			)
        )
) );

