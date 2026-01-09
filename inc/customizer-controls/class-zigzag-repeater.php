<?php

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}

class HoverCraft_ZigZag_Repeater_Control extends WP_Customize_Control {

	public $type = 'hovercraft_zigzag_repeater';

	public function enqueue() {
		wp_enqueue_media();

		wp_enqueue_script(
			'hovercraft-zigzag-customizer',
			get_template_directory_uri() . '/assets/js/customizer-zigzag.js',
			array( 'jquery', 'customize-controls' ),
			null,
			true
		);
	}

	public function render_content() {

		$value = $this->value();

		if ( ! is_array( $value ) ) {
			$value = array();
		}
		?>

		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

		<div class="hovercraft-zigzag-repeater">

			<div class="zigzag-rows">
				<?php foreach ( $value as $index => $row ) : ?>
					<?php $this->render_row( $index, $row ); ?>
				<?php endforeach; ?>
			</div>

			<button type="button" class="button add-zigzag-row">add row</button>

			<script type="text/template" class="zigzag-row-template">
				<?php $this->render_row( '__i__', array() ); ?>
			</script>

		</div>

		<?php
	}

	private function render_row( $i, $row ) {

		$image_id  = isset( $row['image_id'] ) ? absint( $row['image_id'] ) : 0;
		$title     = isset( $row['title'] ) ? $row['title'] : '';
		$text      = isset( $row['text'] ) ? $row['text'] : '';
		$link_url  = isset( $row['link_url'] ) ? $row['link_url'] : '';
		$link_text = isset( $row['link_text'] ) ? $row['link_text'] : '';
		?>

		<div class="zigzag-row">

			<input type="hidden" class="zigzag-image-id" value="<?php echo esc_attr( $image_id ); ?>">

			<p>
				<button type="button" class="button select-zigzag-image">select image</button>
			</p>

			<p>
				<input type="text" class="widefat zigzag-title" placeholder="title" value="<?php echo esc_attr( $title ); ?>">
			</p>

			<p>
				<textarea class="widefat zigzag-text" rows="4" placeholder="text"><?php echo esc_textarea( $text ); ?></textarea>
			</p>

			<p>
				<input type="text" class="widefat zigzag-link-url" placeholder="link url" value="<?php echo esc_attr( $link_url ); ?>">
			</p>

			<p>
				<input type="text" class="widefat zigzag-link-text" placeholder="link text" value="<?php echo esc_attr( $link_text ); ?>">
			</p>

			<button type="button" class="button-link-delete remove-zigzag-row">remove</button>

		</div>

		<?php
	}
}

// Ref: ChatGPT
