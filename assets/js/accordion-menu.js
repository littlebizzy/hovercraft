// accordion menu
jQuery( function( $ ) {

	// initialize accordion navigation
	var accordionNav = $( function() {
		$( '.menu-toggle' ).on( 'click', function( e ) {
			e.preventDefault();
			var toggleButton = $( this );

			if ( toggleButton.next().hasClass( 'active' ) ) {
				toggleButton.next().removeClass( 'active' ).slideUp( 400 );
				toggleButton.removeClass( 'rotate' );
			} else {
				toggleButton.parent().parent().find( 'li .sub-menu' ).removeClass( 'active' ).slideUp( 400 );
				toggleButton.parent().parent().find( '.menu-toggle' ).removeClass( 'rotate' );
				toggleButton.next().toggleClass( 'active' ).slideToggle( 400 );
				toggleButton.toggleClass( 'rotate' );
			}
		} );
	} );

} );

// Ref: ChatGPT
// Ref: https://codepen.io/keithchis/pen/GpdbLm
