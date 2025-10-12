// mobile menu
jQuery( function( $ ) {

	// toggle menu open and overlay
	$( '.burger' ).on( 'click', function() {
		$( '#offcanvas' ).toggleClass( 'active' );
		$( 'body' ).toggleClass( 'frozen' );
		$( '.overlay-main' ).toggleClass( 'active' );
	} );

	// close menu when overlay is clicked
	$( '.overlay-main' ).on( 'click', function() {
		$( '#offcanvas' ).removeClass( 'active' );
		$( 'body' ).removeClass( 'frozen' );
		$( '.overlay-main' ).removeClass( 'active' );
	} );

} );

// Ref: ChatGPT
// https://codepen.io/abhi_pawar/pen/qzpEJL
