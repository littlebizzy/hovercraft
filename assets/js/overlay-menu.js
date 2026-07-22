// overlay menu
document.addEventListener( 'DOMContentLoaded', function() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );
	var triggers = document.querySelectorAll( '.overlay-trigger' );
	var closeButton = menu ? menu.querySelector( '.overlay-close' ) : null;
	var lastFocused = null;

	if ( ! menu || ! triggers.length || ! closeButton ) {
		return;
	}

	// update trigger states
	function setTriggerState( expanded ) {
		triggers.forEach( function( trigger ) {
			trigger.setAttribute( 'aria-expanded', expanded );
		} );
	}

	// open overlay menu
	function openOverlayMenu() {
		lastFocused = document.activeElement;
		menu.classList.add( 'active' );
		menu.removeAttribute( 'inert' );
		menu.setAttribute( 'aria-hidden', 'false' );
		document.body.classList.add( 'frozen' );
		setTriggerState( 'true' );

		window.setTimeout( function() {
			if ( 'false' === menu.getAttribute( 'aria-hidden' ) ) {
				closeButton.focus();
			}
		}, 50 );
	}

	// close overlay menu
	function closeOverlayMenu() {
		menu.classList.remove( 'active' );
		menu.setAttribute( 'inert', '' );
		menu.setAttribute( 'aria-hidden', 'true' );
		document.body.classList.remove( 'frozen' );
		setTriggerState( 'false' );

		if ( lastFocused && document.contains( lastFocused ) && 'function' === typeof lastFocused.focus ) {
			lastFocused.focus();
		}
	}

	// bind overlay controls
	triggers.forEach( function( trigger ) {
		trigger.addEventListener( 'click', openOverlayMenu );
	} );
	closeButton.addEventListener( 'click', closeOverlayMenu );

	// close overlay menu with escape key
	document.addEventListener( 'keydown', function( event ) {
		if ( 'Escape' === event.key && 'false' === menu.getAttribute( 'aria-hidden' ) ) {
			closeOverlayMenu();
		}
	} );
} );
