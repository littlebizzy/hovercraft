// full screen search
jQuery( function( $ ) {
	var $modal = $( '#full-screen-search' );
	var $toggle = $( '.search-modal-toggle' );
	var $lastFocused = $();

	// open search overlay
	function openSearchOverlay() {
		$lastFocused = $( document.activeElement );
		$modal.addClass( 'open' ).attr( 'aria-hidden', 'false' );
		$toggle.attr( 'aria-expanded', 'true' );
		$( 'body' ).addClass( 'search-modal-open' );

		window.setTimeout( function() {
			$modal.find( '.search-input' ).trigger( 'focus' );
		}, 50 );
	}

	// close search overlay
	function closeSearchOverlay() {
		if ( ! $modal.hasClass( 'open' ) ) {
			return;
		}

		$modal.removeClass( 'open' ).attr( 'aria-hidden', 'true' );
		$toggle.attr( 'aria-expanded', 'false' );
		$( 'body' ).removeClass( 'search-modal-open' );

		if ( $lastFocused.length ) {
			$lastFocused.trigger( 'focus' );
		}
	}

	// open search overlay via click
	$toggle.on( 'click', function( event ) {
		event.preventDefault();
		openSearchOverlay();
	} );

	// close search overlay via button
	$modal.find( '.search-modal-close' ).on( 'click', function( event ) {
		event.preventDefault();
		closeSearchOverlay();
	} );

	// close search overlay via backdrop
	$modal.on( 'click', function( event ) {
		if ( event.target === this ) {
			closeSearchOverlay();
		}
	} );

	// close search overlay via esc key
	$( document ).on( 'keydown', function( event ) {
		if ( event.key === 'Escape' ) {
			closeSearchOverlay();
		}
	} );

} );
