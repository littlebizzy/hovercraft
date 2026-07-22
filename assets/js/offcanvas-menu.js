// offcanvas menu
document.addEventListener( 'DOMContentLoaded', function() {
	var menu = document.getElementById( 'hovercraft-offcanvas-menu' );
	var overlay = document.querySelector( '.offcanvas-overlay' );
	var triggers = document.querySelectorAll( '.offcanvas-trigger' );
	var lastFocused = null;

	if ( ! menu || ! overlay || ! triggers.length ) {
		return;
	}

	// update trigger states
	function setTriggerState( expanded ) {
		triggers.forEach( function( trigger ) {
			trigger.setAttribute( 'aria-expanded', expanded );
		} );
	}

	// open offcanvas menu
	function openOffcanvasMenu() {
		lastFocused = document.activeElement;
		menu.classList.add( 'active' );
		menu.removeAttribute( 'inert' );
		menu.setAttribute( 'aria-hidden', 'false' );
		document.body.classList.add( 'frozen' );
		overlay.classList.add( 'active' );
		setTriggerState( 'true' );

		window.setTimeout( function() {
			if ( 'false' === menu.getAttribute( 'aria-hidden' ) ) {
				menu.focus();
			}
		}, 50 );
	}

	// close offcanvas menu
	function closeOffcanvasMenu() {
		menu.classList.remove( 'active' );
		menu.setAttribute( 'inert', '' );
		menu.setAttribute( 'aria-hidden', 'true' );
		document.body.classList.remove( 'frozen' );
		overlay.classList.remove( 'active' );
		setTriggerState( 'false' );

		if ( lastFocused && document.contains( lastFocused ) && 'function' === typeof lastFocused.focus ) {
			lastFocused.focus();
		}
	}

	// bind offcanvas controls
	triggers.forEach( function( trigger ) {
		trigger.addEventListener( 'click', function() {
			if ( menu.classList.contains( 'active' ) ) {
				closeOffcanvasMenu();
				return;
			}

			openOffcanvasMenu();
		} );
	} );
	overlay.addEventListener( 'click', closeOffcanvasMenu );

	// close offcanvas menu with escape key
	document.addEventListener( 'keydown', function( event ) {
		if ( 'Escape' === event.key && menu.classList.contains( 'active' ) ) {
			closeOffcanvasMenu();
		}
	} );
} );
