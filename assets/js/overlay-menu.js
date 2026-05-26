// overlay menu
var hovercraftOverlayLastFocused = null;

function hovercraftOpenNav() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );
	var trigger = document.querySelector( '.mobile-menu-trig:not(.hovercraft-offcanvas-trigger)' );
	var closeButton;

	if ( ! menu ) {
		return;
	}

	hovercraftOverlayLastFocused = document.activeElement;
	closeButton = menu.querySelector( '.closebtn' );

	menu.style.height = '100%';
	menu.setAttribute( 'aria-hidden', 'false' );
	document.body.classList.add( 'frozen' );

	if ( trigger ) {
		trigger.setAttribute( 'aria-expanded', 'true' );
	}

	if ( closeButton ) {
		window.setTimeout( function() {
			closeButton.focus();
		}, 50 );
	}
}

function hovercraftCloseNav() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );
	var trigger = document.querySelector( '.mobile-menu-trig:not(.hovercraft-offcanvas-trigger)' );

	if ( ! menu ) {
		return;
	}

	menu.style.height = '0%';
	menu.setAttribute( 'aria-hidden', 'true' );
	document.body.classList.remove( 'frozen' );

	if ( trigger ) {
		trigger.setAttribute( 'aria-expanded', 'false' );
	}

	if ( hovercraftOverlayLastFocused && 'function' === typeof hovercraftOverlayLastFocused.focus ) {
		hovercraftOverlayLastFocused.focus();
	}
}

document.addEventListener( 'keydown', function( event ) {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );

	if ( ! menu || 'Escape' !== event.key || 'false' !== menu.getAttribute( 'aria-hidden' ) ) {
		return;
	}

	hovercraftCloseNav();
} );
