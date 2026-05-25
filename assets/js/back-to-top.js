// back to top
jQuery( function( $ ) {
	var $link = $( '.scrollup-link' );

	if ( ! $link.length ) {
		return;
	}

	// scroll to top
	$link.on( 'click', function( event ) {
		event.preventDefault();

		$( 'html, body' ).stop( true ).animate( { scrollTop: 0 }, 300, 'swing' );
	} );
} );
