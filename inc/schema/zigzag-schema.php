<?php

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

// zigzag layout schema
acf_add_local_field_group( array(
	'key'   => 'group_hovercraft_zigzag_layout',
	'title' => 'ZigZag Layout',

	'fields' => array(
		array(
			'key'   => 'field_hovercraft_zigzag_rows',
			'label' => 'ZigZag Rows',
			'name'  => 'hovercraft_zigzag_rows',
			'type'  => 'repeater',
			'layout'=> 'row',

			'sub_fields' => array(
				array(
					'key'           => 'field_hovercraft_zigzag_image_id',
					'label'         => 'Image',
					'name'          => 'image_id',
					'type'          => 'image',
					'return_format' => 'id',
				),
				array(
					'key'   => 'field_hovercraft_zigzag_title',
					'label' => 'Title',
					'name'  => 'title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_hovercraft_zigzag_text',
					'label' => 'Text',
					'name'  => 'text',
					'type'  => 'textarea',
				),
				array(
					'key'   => 'field_hovercraft_zigzag_link_url',
					'label' => 'Link URL',
					'name'  => 'link_url',
					'type'  => 'url',
				),
				array(
					'key'   => 'field_hovercraft_zigzag_link_text',
					'label' => 'Link Text',
					'name'  => 'link_text',
					'type'  => 'text',
				),
			),
		),
	),

	'location' => array(
		array(
			array(
				'param'    => 'page_template',
				'operator' => '==',
				'value'    => 'page-templates/mini-hero-zigzag-no-sidebar.php',
			),
		),
	),
) );

// Ref: ChatGPT
