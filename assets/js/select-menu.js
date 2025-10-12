// select menu dropdown
jQuery( function( $ ) {

	var winWidth = $( window ).width();

	if ( winWidth <= 480 ) {

		// toggle menu open state
		$( '.menu' ).on( 'click', function() {
			var isOpen = $( this ).hasClass( 'open' );
			if ( isOpen ) {
				$( this ).removeClass( 'open' );
			} else {
				$( this ).addClass( 'open' );
			}
		} );

		// swap selected item with first item
		$( '.menu li' ).on( 'click', function() {
			var selectedValue = $( this ).html();
			var firstLi = $( '.menu li:first-child' ).html();
			$( '.menu li:first-child' ).html( selectedValue );
			$( this ).html( firstLi );
		} );

		// close menu when clicking outside
		$( document ).on( 'mouseup', function( event ) {
			var target = event.target;
			var select = $( '.menu' );
			if ( ! select.is( target ) && select.has( target ).length === 0 ) {
				select.removeClass( 'open' );
			}
		} );
	}

} );

// Ref: ChatGPT
