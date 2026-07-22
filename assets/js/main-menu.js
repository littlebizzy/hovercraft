// main menu
document.addEventListener( 'DOMContentLoaded', function() {
	var menu = document.querySelector( '.menu-desktop' );
	var delayIn = 100;
	var delayOut = 150;

	if ( ! menu ) {
		return;
	}

	// setup submenu accessibility
	menu.querySelectorAll( '.menu-item-has-children > a' ).forEach( function( link ) {
		link.setAttribute( 'aria-expanded', 'false' );
	} );

	// close menu item
	function closeMenuItem( item ) {
		item.classList.remove( 'open' );
		item.querySelectorAll( '.menu-item-has-children > a' ).forEach( function( link ) {
			link.setAttribute( 'aria-expanded', 'false' );
		} );
	}

	// open menu item
	function openMenuItem( item ) {
		var link = item.querySelector( ':scope > a' );

		menu.querySelectorAll( 'li.open' ).forEach( function( openItem ) {
			if ( ! openItem.contains( item ) ) {
				closeMenuItem( openItem );
			}
		} );

		item.classList.add( 'open' );

		if ( link ) {
			link.setAttribute( 'aria-expanded', 'true' );
		}
	}

	// bind hover and focus events
	menu.querySelectorAll( '.menu-item-has-children' ).forEach( function( item ) {
		var openTimer;
		var closeTimer;

		// mouse enter
		item.addEventListener( 'mouseenter', function() {
			window.clearTimeout( openTimer );
			window.clearTimeout( closeTimer );

			openTimer = window.setTimeout( function() {
				openMenuItem( item );
			}, delayIn );
		} );

		// mouse leave
		item.addEventListener( 'mouseleave', function() {
			window.clearTimeout( openTimer );
			window.clearTimeout( closeTimer );

			closeTimer = window.setTimeout( function() {
				closeMenuItem( item );
			}, delayOut );
		} );

		// keyboard focus in
		item.addEventListener( 'focusin', function() {
			window.clearTimeout( openTimer );
			window.clearTimeout( closeTimer );
			openMenuItem( item );
		} );

		// keyboard focus out
		item.addEventListener( 'focusout', function() {
			window.clearTimeout( closeTimer );

			closeTimer = window.setTimeout( function() {
				if ( ! item.contains( document.activeElement ) ) {
					closeMenuItem( item );
				}
			}, delayOut );
		} );
	} );

	// close dropdowns with escape key
	document.addEventListener( 'keydown', function( event ) {
		if ( 'Escape' === event.key ) {
			menu.querySelectorAll( 'li.open' ).forEach( closeMenuItem );
		}
	} );
} );
