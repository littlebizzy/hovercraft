/* bind click and scroll to top */
jQuery( function( $ ) {

	/* click to scroll to top */
	$( '.scrollup-link' ).on( 'click', function( e ) {
		/* prevent default link behavior */
		e.preventDefault();

		/* stop current animations and scroll to top */
		$( 'html, body' ).stop( true ).animate( { scrollTop: 0 }, 300, 'swing' );
	} );

} );

// Ref: ChatGPT
// Ref: https://codepen.io/nabeelfaheem/pen/zYOZOZK
// Ref: https://www.geeksforgeeks.org/how-to-animate-scrolltop-using-jquery/
