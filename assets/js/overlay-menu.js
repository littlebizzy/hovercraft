// overlay menu
var hovercraftOverlayLastFocused = null;

function hovercraftOpenNav() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );
	var trigger = document.querySelector( '.mobile-menu-trig:not(.offcanvas-trigger)' );
	var closeButton;

	if ( ! menu ) {
		return;
	}

	hovercraftOverlayLastFocused = document.activeElement;
	closeButton = menu.querySelector( '.closebtn' );

	menu.classList.add( 'active' );
	menu.removeAttribute( 'inert' );
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
	var trigger = document.querySelector( '.mobile-menu-trig:not(.offcanvas-trigger)' );

	if ( ! menu ) {
		return;
	}

	if ( hovercraftOverlayLastFocused && 'function' === typeof hovercraftOverlayLastFocused.focus ) {
		hovercraftOverlayLastFocused.focus();
	}

	menu.classList.remove( 'active' );
	menu.setAttribute( 'inert', '' );
	menu.setAttribute( 'aria-hidden', 'true' );
	document.body.classList.remove( 'frozen' );

	if ( trigger ) {
		trigger.setAttribute( 'aria-expanded', 'false' );
	}
}

document.addEventListener( 'keydown', function( event ) {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );

	if ( ! menu || 'Escape' !== event.key || 'false' !== menu.getAttribute( 'aria-hidden' ) ) {
		return;
	}

	hovercraftCloseNav();
} );
