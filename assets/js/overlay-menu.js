// overlay menu
function hovercraftOpenNav() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );
	var trigger = document.querySelector( '.mobile-menu-trig:not(.hovercraft-offcanvas-trigger)' );

	if ( menu ) {
		menu.style.height = '100%';
		menu.setAttribute( 'aria-hidden', 'false' );
		document.body.classList.add( 'frozen' );
	}

	if ( trigger ) {
		trigger.setAttribute( 'aria-expanded', 'true' );
	}
}

function hovercraftCloseNav() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );
	var trigger = document.querySelector( '.mobile-menu-trig:not(.hovercraft-offcanvas-trigger)' );

	if ( menu ) {
		menu.style.height = '0%';
		menu.setAttribute( 'aria-hidden', 'true' );
		document.body.classList.remove( 'frozen' );
	}

	if ( trigger ) {
		trigger.setAttribute( 'aria-expanded', 'false' );
	}
}
