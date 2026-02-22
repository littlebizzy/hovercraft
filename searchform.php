<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="site-search"><?php esc_html_e( 'Search', 'hovercraft' ); ?></label>

	<div class="input-container">
		<input id="site-search" type="search" class="search-input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search entire website...', 'hovercraft' ); ?>" />

		<button type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'Submit search', 'hovercraft' ); ?>">
			<svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" focusable="false">
				<circle cx="11" cy="11" r="7"></circle>
				<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
			</svg>
		</button>
	</div><!-- input-container -->
</form><!-- searchform -->

<!-- Ref: ChatGPT -->
<!-- Ref: https://codepen.io/jessuppi/pen/pomVZrr -->
