// full screen search
jQuery( function( $ ) {

	// open search overlay
	function openSearchOverlay() {
		$( '#full-screen-search' ).addClass( 'open' );
		$( '.search-icon-wrapper' ).attr( 'aria-expanded', 'true' );
		$( '#full-screen-search .search-input' ).focus();
	}

	// close search overlay
	function closeSearchOverlay() {
		$( '#full-screen-search' ).removeClass( 'open' );
		$( '.search-icon-wrapper' ).attr( 'aria-expanded', 'false' );
	}

	// open search overlay via click
	$( '.search-icon-wrapper' ).on( 'click', function( event ) {
		event.preventDefault();
		openSearchOverlay();
	} );

	// open search overlay via keyboard
	$( '.search-icon-wrapper' ).on( 'keydown', function( event ) {
		if ( event.key === 'Enter' || event.key === ' ' ) {
			event.preventDefault();
			openSearchOverlay();
		}
	} );

	// close search overlay via button
	$( '#full-screen-search button.close' ).on( 'click', function( event ) {
		event.preventDefault();
		closeSearchOverlay();
	} );

	// close search overlay via esc key
	$( document ).on( 'keydown', function( event ) {
		if ( event.key === 'Escape' ) {
			closeSearchOverlay();
		}
	} );

} );

