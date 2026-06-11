<?php

$hovercraft_search_id = wp_unique_id( 'search-' );
?>
<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo esc_attr( $hovercraft_search_id ); ?>"><?php esc_html_e( 'Search', 'hovercraft' ); ?></label>

	<div class="input-container">
		<input id="<?php echo esc_attr( $hovercraft_search_id ); ?>" type="search" class="search-input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search entire website...', 'hovercraft' ); ?>" />

		<button type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'Submit search', 'hovercraft' ); ?>">
			<?php echo hovercraft_icon( 'search' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</button>
	</div><!-- input-container -->
</form><!-- searchform -->
