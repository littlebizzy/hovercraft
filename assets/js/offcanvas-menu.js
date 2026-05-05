// mobile menu
jQuery( function( $ ) {

	// toggle menu open and overlay
	$( '.hovercraft-offcanvas-trigger' ).on( 'click', function() {
		$( '#hovercraft-offcanvas-menu' ).toggleClass( 'active' );
		$( 'body' ).toggleClass( 'frozen' );
		$( '.hovercraft-offcanvas-overlay' ).toggleClass( 'active' );
	} );

	// close menu when overlay is clicked
	$( '.hovercraft-offcanvas-overlay' ).on( 'click', function() {
		$( '#hovercraft-offcanvas-menu' ).removeClass( 'active' );
		$( 'body' ).removeClass( 'frozen' );
		$( '.hovercraft-offcanvas-overlay' ).removeClass( 'active' );
	} );

} );

// Ref: ChatGPT
// Ref: https://codepen.io/abhi_pawar/pen/qzpEJL
