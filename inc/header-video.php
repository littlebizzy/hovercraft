<?php

function hovercraft_video($wp_customize) {
// add a setting 
    $wp_customize->add_setting('hovercraft_video',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint',
             'type' => 'theme_mod',
   		)
	);
// Add a control to upload the hover video
	$wp_customize->add_control(new WP_Customize_Media_Control( $wp_customize, 'video_upload', 
		array(
        	'label' => 'Background Video',
			'description' => esc_html__( 'This is the description for the Media Control', 'hovercraft' ),
        	'section' => 'header_image', //this is the section where the custom-logo from WordPress is
			'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
        	'settings' => 'hovercraft_video',
			'button_labels' => array( // Optional
         	'select' => __( 'Select File', 'hovercraft' ),
         	'change' => __( 'Change File', 'hovercraft' ),
         	'default' => __( 'Default', 'hovercraft' ),
         	'remove' => __( 'Remove', 'hovercraft' ),
         	'placeholder' => __( 'No file selected', 'hovercraft' ),
         	'frame_title' => __( 'Select File', 'hovercraft' ),
         	'frame_button' => __( 'Choose File', 'hovercraft' ),
        	'priority' => 8 // show it just below the custom-logo
    		)
		)
	));
}

add_action('customize_register', 'hovercraft_video');
