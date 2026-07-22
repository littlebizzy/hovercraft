// full screen search
document.addEventListener( 'DOMContentLoaded', function() {
	var modal = document.getElementById( 'full-screen-search' );
	var toggles = document.querySelectorAll( '.search-modal-toggle' );
	var closeButton;
	var searchInput;
	var lastFocused = null;

	if ( ! modal || ! toggles.length ) {
		return;
	}

	closeButton = modal.querySelector( '.search-modal-close' );
	searchInput = modal.querySelector( '.search-input' );

	// update trigger states
	function setToggleState( expanded ) {
		toggles.forEach( function( toggle ) {
			toggle.setAttribute( 'aria-expanded', expanded );
		} );
	}

	// open search overlay
	function openSearchOverlay() {
		if ( modal.classList.contains( 'open' ) ) {
			return;
		}

		lastFocused = document.activeElement;
		modal.classList.add( 'open' );
		modal.setAttribute( 'aria-hidden', 'false' );
		setToggleState( 'true' );
		document.body.classList.add( 'search-modal-open' );

		window.setTimeout( function() {
			if ( modal.classList.contains( 'open' ) && searchInput ) {
				searchInput.focus();
			}
		}, 50 );
	}

	// close search overlay
	function closeSearchOverlay() {
		if ( ! modal.classList.contains( 'open' ) ) {
			return;
		}

		modal.classList.remove( 'open' );
		modal.setAttribute( 'aria-hidden', 'true' );
		setToggleState( 'false' );
		document.body.classList.remove( 'search-modal-open' );

		if ( lastFocused && document.contains( lastFocused ) && 'function' === typeof lastFocused.focus ) {
			lastFocused.focus();
		}
	}

	// open search overlay
	toggles.forEach( function( toggle ) {
		toggle.addEventListener( 'click', function( event ) {
			event.preventDefault();
			openSearchOverlay();
		} );
	} );

	// close search overlay button
	if ( closeButton ) {
		closeButton.addEventListener( 'click', function( event ) {
			event.preventDefault();
			closeSearchOverlay();
		} );
	}

	// close search overlay backdrop
	modal.addEventListener( 'click', function( event ) {
		if ( event.target === modal ) {
			closeSearchOverlay();
		}
	} );

	// close search overlay keyboard
	document.addEventListener( 'keydown', function( event ) {
		if ( 'Escape' === event.key ) {
			closeSearchOverlay();
		}
	} );
} );
