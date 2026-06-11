<?php

?>
<div id="full-screen-search" class="search-modal" role="dialog" aria-modal="true" aria-hidden="true" aria-label="<?php esc_attr_e( 'Search', 'hovercraft' ); ?>">
	<button type="button" class="search-modal-close" aria-label="<?php esc_attr_e( 'Close search', 'hovercraft' ); ?>">
		<?php echo hovercraft_icon( 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</button><!-- search-modal-close -->

	<div class="search-modal-panel">
		<?php get_search_form(); ?>
	</div><!-- search-modal-panel -->
</div><!-- full-screen-search -->
