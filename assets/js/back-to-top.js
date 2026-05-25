// back to top
document.addEventListener( 'DOMContentLoaded', function() {
	var link = document.querySelector( '.scrollup-link' );

	if ( ! link ) {
		return;
	}

	// scroll to top
	link.addEventListener( 'click', function() {
		window.scrollTo( {
			top: 0,
			behavior: 'smooth'
		} );
	} );
} );
