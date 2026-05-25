// overlay menu
function hovercraftOpenNav() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );

	if ( menu ) {
		menu.style.height = '100%';
	}
}

function hovercraftCloseNav() {
	var menu = document.getElementById( 'hovercraft-overlay-menu' );

	if ( menu ) {
		menu.style.height = '0%';
	}
}

document.addEventListener( 'DOMContentLoaded', function() {
	var closeButton = document.querySelector( '.hovercraft-overlay-close' );

	if ( closeButton ) {
		closeButton.addEventListener( 'click', hovercraftCloseNav );
	}
} );
