<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_verify_media_sizes() {
	$large_width = absint( get_option( 'large_size_w' ) );
	$medium_width = absint( get_option( 'medium_size_w' ) );
	$medium_large_width = absint( get_option( 'medium_large_size_w' ) );
	?>

	<?php if ( 1200 !== $large_width || 480 !== $medium_width || 768 !== $medium_large_width ) : ?>

		<div class="notice notice-warning">
			<p><strong><?php esc_html_e( 'Adjust Media Sizes', 'hovercraft' ); ?></strong></p>
			<p><?php esc_html_e( 'The HoverCraft theme requires Large size images to have a Max Width of 1200, Medium size images to have a Max Width of 480, and Medium Large size images to have a Max Width of 768.', 'hovercraft' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'options-media.php' ) ); ?>"><?php esc_html_e( 'Review Settings', 'hovercraft' ); ?></a></p>
		</div>

	<?php endif; ?>
	<?php
}
add_action( 'admin_notices', 'hovercraft_verify_media_sizes' );
