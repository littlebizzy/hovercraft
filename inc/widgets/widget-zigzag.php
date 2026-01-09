<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_widget_zigzag_admin_assets( $hook ) {
	if ( $hook !== 'widgets.php' && $hook !== 'customize.php' ) {
		return;
	}

	wp_enqueue_media();

	wp_enqueue_script(
		'hovercraft-widget-zigzag',
		get_template_directory_uri() . '/assets/js/widget-zigzag.js',
		array( 'jquery', 'jquery-ui-sortable' ),
		null,
		true
	);
}
add_action( 'admin_enqueue_scripts', 'hovercraft_widget_zigzag_admin_assets' );

class HoverCraft_Widget_ZigZag extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'hovercraft_widget_zigzag',
			'HoverCraft ZigZag',
			array(
				'description' => 'zigzag layout widget with unlimited rows',
			)
		);
	}

	public function widget( $args, $instance ) {

		$rows = isset( $instance['rows'] ) && is_array( $instance['rows'] ) ? $instance['rows'] : array();

		if ( empty( $rows ) ) {
			return;
		}

		echo $args['before_widget'];

		$index = 0;

		foreach ( $rows as $row ) {

			$image_id = isset( $row['image_id'] ) ? absint( $row['image_id'] ) : 0;
			$title    = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
			$text     = isset( $row['text'] ) ? (string) $row['text'] : '';
			$link_url = isset( $row['link_url'] ) ? trim( (string) $row['link_url'] ) : '';
			$link_txt = isset( $row['link_text'] ) ? trim( (string) $row['link_text'] ) : '';

			if ( ! $image_id && $title === '' && trim( wp_strip_all_tags( $text ) ) === '' && $link_url === '' ) {
				continue;
			}

			$section_class = ( $index % 2 === 0 ) ? 'zigzag-section' : 'zigzag-section-reverse';

			echo '<div class="' . esc_attr( $section_class ) . '">';

			if ( $image_id ) {
				echo wp_get_attachment_image( $image_id, 'large' );
			}

			if ( $title !== '' ) {
				echo '<h3>' . esc_html( $title ) . '</h3>';
			}

			if ( trim( $text ) !== '' ) {
				echo wpautop( wp_kses_post( $text ) );
			}

			if ( $link_url !== '' ) {
				$label = ( $link_txt !== '' ) ? $link_txt : 'Read more...';
				echo '<p><a href="' . esc_url( $link_url ) . '">' . esc_html( $label ) . '</a></p>';
			}

			echo '<div class="clear"></div>';
			echo '</div>';

			$index++;
		}

		echo $args['after_widget'];
	}

	public function form( $instance ) {

		$rows = isset( $instance['rows'] ) && is_array( $instance['rows'] ) ? $instance['rows'] : array();

		echo '<div class="hovercraft-zigzag-widget">';

		echo '<div class="hovercraft-zigzag-rows">';

		$i = 0;
		foreach ( $rows as $row ) {
			$this->render_row_fields( $i, $row );
			$i++;
		}

		echo '</div>';

		echo '<p><button type="button" class="button hovercraft-zigzag-add-row">add row</button></p>';

		echo '<script type="text/template" class="hovercraft-zigzag-row-template">';
		$this->render_row_fields( '__i__', array(), true );
		echo '</script>';

		echo '</div>';
	}

	private function render_row_fields( $i, $row, $is_template = false ) {

		$image_id = isset( $row['image_id'] ) ? absint( $row['image_id'] ) : 0;
		$title    = isset( $row['title'] ) ? (string) $row['title'] : '';
		$text     = isset( $row['text'] ) ? (string) $row['text'] : '';
		$link_url = isset( $row['link_url'] ) ? (string) $row['link_url'] : '';
		$link_txt = isset( $row['link_text'] ) ? (string) $row['link_text'] : '';

		$name = function( $key ) use ( $i ) {
			return $this->get_field_name( 'rows' ) . '[' . $i . '][' . $key . ']';
		};

		$id = function( $key ) use ( $i ) {
			return $this->get_field_id( 'rows' ) . '_' . $i . '_' . $key;
		};

		echo '<div class="hovercraft-zigzag-row">';

		echo '<div style="margin: 10px 0; padding: 12px; border: 1px solid #ccd0d4; background: #fff;">';

		echo '<p style="margin: 0 0 10px 0;"><strong>row</strong> <span class="hovercraft-zigzag-row-number"></span> ';
		echo '<button type="button" class="button-link-delete hovercraft-zigzag-remove-row" style="float:right;">remove</button>';
		echo '</p>';

		echo '<input type="hidden" class="hovercraft-zigzag-image-id" name="' . esc_attr( $name( 'image_id' ) ) . '" id="' . esc_attr( $id( 'image_id' ) ) . '" value="' . esc_attr( $image_id ) . '">';

		echo '<p style="margin: 0 0 10px 0;">';
		echo '<button type="button" class="button hovercraft-zigzag-select-image">select image</button> ';
		echo '<button type="button" class="button hovercraft-zigzag-remove-image">remove image</button>';
		echo '</p>';

		echo '<div class="hovercraft-zigzag-image-preview" style="margin: 0 0 12px 0;">';
		if ( $image_id ) {
			echo wp_get_attachment_image( $image_id, 'thumbnail' );
		}
		echo '</div>';

		echo '<p style="margin: 0 0 10px 0;">';
		echo '<label><strong>title</strong></label><br>';
		echo '<input class="widefat" type="text" name="' . esc_attr( $name( 'title' ) ) . '" value="' . esc_attr( $title ) . '">';
		echo '</p>';

		echo '<p style="margin: 0 0 10px 0;">';
		echo '<label><strong>text</strong></label><br>';
		echo '<textarea class="widefat" rows="6" name="' . esc_attr( $name( 'text' ) ) . '">' . esc_textarea( $text ) . '</textarea>';
		echo '</p>';

		echo '<p style="margin: 0 0 10px 0;">';
		echo '<label><strong>link url</strong></label><br>';
		echo '<input class="widefat" type="text" name="' . esc_attr( $name( 'link_url' ) ) . '" value="' . esc_attr( $link_url ) . '">';
		echo '</p>';

		echo '<p style="margin: 0;">';
		echo '<label><strong>link text</strong></label><br>';
		echo '<input class="widefat" type="text" name="' . esc_attr( $name( 'link_text' ) ) . '" value="' . esc_attr( $link_txt ) . '">';
		echo '</p>';

		echo '</div>';
		echo '</div>';
	}

	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['rows'] = array();

		if ( isset( $new_instance['rows'] ) && is_array( $new_instance['rows'] ) ) {

			foreach ( $new_instance['rows'] as $row ) {

				$image_id = isset( $row['image_id'] ) ? absint( $row['image_id'] ) : 0;
				$title    = isset( $row['title'] ) ? sanitize_text_field( $row['title'] ) : '';
				$text     = isset( $row['text'] ) ? wp_kses_post( $row['text'] ) : '';
				$link_url = isset( $row['link_url'] ) ? esc_url_raw( $row['link_url'] ) : '';
				$link_txt = isset( $row['link_text'] ) ? sanitize_text_field( $row['link_text'] ) : '';

				if ( ! $image_id && $title === '' && trim( wp_strip_all_tags( $text ) ) === '' && $link_url === '' ) {
					continue;
				}

				$instance['rows'][] = array(
					'image_id'  => $image_id,
					'title'     => $title,
					'text'      => $text,
					'link_url'  => $link_url,
					'link_text' => $link_txt,
				);
			}
		}

		return $instance;
	}
}

function hovercraft_register_widget_zigzag() {
	register_widget( 'HoverCraft_Widget_ZigZag' );
}
add_action( 'widgets_init', 'hovercraft_register_widget_zigzag' );

// Ref: ChatGPT
