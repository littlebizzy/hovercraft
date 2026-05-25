// full screen search
jQuery( function( $ ) {
	var $body = $( 'body' );
	var $modal = $( '#full-screen-search' );
	var $toggle = $( '.search-modal-toggle' );
	var $lastFocused = $();
	var originalBodyPaddingRight = '';

	if ( ! $modal.length || ! $toggle.length ) {
		return;
	}

	// lock page scroll
	function lockPageScroll() {
		var body = $body.get( 0 );
		var scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
		var currentPaddingRight = parseFloat( $body.css( 'padding-right' ) ) || 0;

		originalBodyPaddingRight = body.style.paddingRight;

		if ( 0 < scrollbarWidth ) {
			body.style.paddingRight = currentPaddingRight + scrollbarWidth + 'px';
		}

		$body.addClass( 'search-modal-open' );
	}

	// unlock page scroll
	function unlockPageScroll() {
		var body = $body.get( 0 );

		$body.removeClass( 'search-modal-open' );
		body.style.paddingRight = originalBodyPaddingRight;
		originalBodyPaddingRight = '';
	}

	// open search overlay
	function openSearchOverlay() {
		if ( $modal.hasClass( 'open' ) ) {
			return;
		}

		$lastFocused = $( document.activeElement );
		lockPageScroll();
		$modal.addClass( 'open' ).attr( 'aria-hidden', 'false' );
		$toggle.attr( 'aria-expanded', 'true' );

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
		unlockPageScroll();

		if ( $lastFocused.length ) {
			$lastFocused.trigger( 'focus' );
		}
	}

	// open search overlay
	$toggle.on( 'click', function( event ) {
		event.preventDefault();
		openSearchOverlay();
	} );

	// close search overlay button
	$modal.find( '.search-modal-close' ).on( 'click', function( event ) {
		event.preventDefault();
		closeSearchOverlay();
	} );

	// close search overlay backdrop
	$modal.on( 'click', function( event ) {
		if ( event.target === this ) {
			closeSearchOverlay();
		}
	} );

	// close search overlay keyboard
	$( document ).on( 'keydown', function( event ) {
		if ( 'Escape' === event.key ) {
			closeSearchOverlay();
		}
	} );
} );
