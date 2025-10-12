// full screen search
jQuery( function( $ ) {

	// open search overlay
	$( '.search-icon-wrapper' ).on( 'click', function( event ) {
		event.preventDefault();
		$( '#full-screen-search' ).addClass( 'open' );
		$( '#full-screen-search input' ).focus();
	} );

	// close search overlay via button
	$( '#full-screen-search button.close' ).on( 'click', function( event ) {
		event.preventDefault();
		$( '#full-screen-search' ).removeClass( 'open' );
	} );

	// close search overlay via esc key
	$( document ).on( 'keydown', function( event ) {
		if ( event.key === 'Escape' ) {
			$( '#full-screen-search' ).removeClass( 'open' );
		}
	} );

} );

// Ref: ChatGPT
// Ref: https://wordpress.org/plugins/full-screen-search-overlay/
// Ref: https://www.geeksforgeeks.org/how-to-detect-escape-key-press-using-jquery/
