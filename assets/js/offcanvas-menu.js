// offcanvas menu
jQuery( function( $ ) {
	var $body = $( 'body' );
	var $menu = $( '#hovercraft-offcanvas-menu' );
	var $overlay = $( '.hovercraft-offcanvas-overlay' );
	var $trigger = $( '.hovercraft-offcanvas-trigger' );
	var $lastFocused = $();

	if ( ! $menu.length || ! $overlay.length || ! $trigger.length ) {
		return;
	}

	// open offcanvas menu
	function openOffcanvasMenu() {
		$lastFocused = $( document.activeElement );
		$menu.addClass( 'active' );
		$menu.removeAttr( 'inert' );
		$menu.attr( 'aria-hidden', 'false' );
		$body.addClass( 'frozen' );
		$overlay.addClass( 'active' );
		$trigger.attr( 'aria-expanded', 'true' );

		window.setTimeout( function() {
			$menu.trigger( 'focus' );
		}, 50 );
	}

	// close offcanvas menu
	function closeOffcanvasMenu() {
		if ( $lastFocused.length ) {
			$lastFocused.trigger( 'focus' );
		}

		$menu.removeClass( 'active' );
		$menu.attr( 'inert', '' );
		$menu.attr( 'aria-hidden', 'true' );
		$body.removeClass( 'frozen' );
		$overlay.removeClass( 'active' );
		$trigger.attr( 'aria-expanded', 'false' );
	}

	// toggle offcanvas menu
	$trigger.on( 'click', function() {
		if ( $menu.hasClass( 'active' ) ) {
			closeOffcanvasMenu();
			return;
		}

		openOffcanvasMenu();
	} );

	// close offcanvas menu
	$overlay.on( 'click', function() {
		closeOffcanvasMenu();
	} );

	// close offcanvas menu keyboard
	$( document ).on( 'keydown', function( event ) {
		if ( 'Escape' === event.key && $menu.hasClass( 'active' ) ) {
			closeOffcanvasMenu();
		}
	} );
} );
