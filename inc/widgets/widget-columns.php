<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register preferred columns widget area
function hovercraft_register_columns_sidebar() {
	hovercraft_register_widget_area(
		array(
			'name' => 'Columns',
			'id' => 'hovercraft_columns',
			'class' => 'column',
		)
	);
}
add_action( 'widgets_init', 'hovercraft_register_columns_sidebar' );

// register legacy column widget areas
function hovercraft_register_legacy_column_sidebars() {
	$legacy_column_sidebars = array(
		array(
			'name' => 'Column #1',
			'id' => 'hovercraft_column_one',
			'class' => 'widget-column-one',
		),
		array(
			'name' => 'Column #2',
			'id' => 'hovercraft_column_two',
			'class' => 'widget-column-two',
		),
		array(
			'name' => 'Column #3',
			'id' => 'hovercraft_column_three',
			'class' => 'widget-column-three',
		),
		array(
			'name' => 'Column #4',
			'id' => 'hovercraft_column_four',
			'class' => 'widget-column-four',
		),
		array(
			'name' => 'Column #5',
			'id' => 'hovercraft_column_five',
			'class' => 'widget-column-five',
		),
	);

	foreach ( $legacy_column_sidebars as $legacy_column_sidebar ) {
		hovercraft_register_widget_area( $legacy_column_sidebar );
	}
}
add_action( 'widgets_init', 'hovercraft_register_legacy_column_sidebars' );

// get legacy column widget areas
function hovercraft_get_legacy_column_sidebars() {
	return array(
		'hovercraft_column_one',
		'hovercraft_column_two',
		'hovercraft_column_three',
		'hovercraft_column_four',
		'hovercraft_column_five',
	);
}

// mark legacy column widget areas in admin
function hovercraft_label_legacy_column_sidebars() {
	hovercraft_label_legacy_widget_areas( hovercraft_get_legacy_column_sidebars() );
}
add_action( 'widgets_init', 'hovercraft_label_legacy_column_sidebars', 20 );

// hide empty legacy column widget areas
function hovercraft_hide_empty_legacy_column_sidebars() {
	hovercraft_hide_empty_legacy_widget_areas( hovercraft_get_legacy_column_sidebars() );
}
add_action( 'widgets_init', 'hovercraft_hide_empty_legacy_column_sidebars', 30 );

// check if legacy column widget areas have content
function hovercraft_has_legacy_column_sidebars() {
	return hovercraft_has_active_legacy_widget_areas( hovercraft_get_legacy_column_sidebars() );
}

// show legacy column widget notice
function hovercraft_legacy_column_widget_notice() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	if ( ! hovercraft_has_legacy_column_sidebars() ) {
		return;
	}
	?>
	<div class="notice notice-warning">
		<p><?php esc_html_e( 'HoverCraft legacy column widget areas are active. Please transfer those column elements into the new Columns widget area.', 'hovercraft' ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'hovercraft_legacy_column_widget_notice' );

// render preferred columns widget area with legacy fallback
function hovercraft_render_columns() {
	$legacy_column_sidebars = hovercraft_get_legacy_column_sidebars();
	$has_columns = is_active_sidebar( 'hovercraft_columns' );
	$has_legacy_columns = hovercraft_has_legacy_column_sidebars();

	if ( ! $has_columns && ! $has_legacy_columns ) {
		return;
	}
	?>
	<div class="columns">

		<?php if ( $has_columns ) : ?>
			<?php dynamic_sidebar( 'hovercraft_columns' ); ?>
		<?php else : ?>
			<?php foreach ( $legacy_column_sidebars as $legacy_column_sidebar ) : ?>
				<?php if ( is_active_sidebar( $legacy_column_sidebar ) ) : ?>
				<div class="column">
					<?php dynamic_sidebar( $legacy_column_sidebar ); ?>
					<div class="clear"></div>
				</div><!-- column -->
				<?php endif; // end legacy column sidebar ?>
			<?php endforeach; // end legacy column sidebars ?>
		<?php endif; // end columns sidebar ?>

		<div class="clear"></div>
	</div><!-- columns -->
	<?php
}
