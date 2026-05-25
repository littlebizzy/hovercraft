// main menu
jQuery( function( $ ) {
	var $menu = $( '.menu-desktop' );

	if ( ! $menu.length ) {
		return;
	}

	var delayIn = 100;
	var delayOut = 150;

	// setup submenu accessibility
	$menu.find( '.menu-item-has-children > a' ).attr( 'aria-expanded', 'false' );

	// open menu item
	function openMenuItem( $li ) {
		$menu.find( 'li.open' ).not( $li.parents() ).each( function() {
			closeMenuItem( $( this ) );
		} );

		$li.addClass( 'open' );
		$li.children( 'a' ).attr( 'aria-expanded', 'true' );
	}

	// close menu item
	function closeMenuItem( $li ) {
		$li.removeClass( 'open' );
		$li.find( '.menu-item-has-children > a' ).attr( 'aria-expanded', 'false' );
	}

	// bind hover and focus events
	$menu.find( '.menu-item-has-children' ).each( function() {
		var $li = $( this );
		var openTimer;
		var closeTimer;

		// mouse enter
		$li.on( 'mouseenter', function() {
			clearTimeout( openTimer );
			clearTimeout( closeTimer );

			openTimer = setTimeout( function() {
				openMenuItem( $li );
			}, delayIn );
		} );

		// mouse leave
		$li.on( 'mouseleave', function() {
			clearTimeout( openTimer );
			clearTimeout( closeTimer );

			closeTimer = setTimeout( function() {
				closeMenuItem( $li );
			}, delayOut );
		} );

		// keyboard focus in
		$li.on( 'focusin', function() {
			clearTimeout( openTimer );
			clearTimeout( closeTimer );
			openMenuItem( $li );
		} );

		// keyboard focus out
		$li.on( 'focusout', function() {
			clearTimeout( closeTimer );

			closeTimer = setTimeout( function() {
				if ( ! $li.find( ':focus' ).length ) {
					closeMenuItem( $li );
				}
			}, delayOut );
		} );
	} );

	// close dropdowns with escape key
	$( document ).on( 'keydown', function( event ) {
		if ( 'Escape' === event.key ) {
			$menu.find( 'li.open' ).each( function() {
				closeMenuItem( $( this ) );
			} );
		}
	} );
} );
