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
		$body.addClass( 'frozen' );
		$overlay.addClass( 'active' );
		$trigger.attr( 'aria-expanded', 'true' );
	}

	// close offcanvas menu
	function closeOffcanvasMenu() {
		$menu.removeClass( 'active' );
		$body.removeClass( 'frozen' );
		$overlay.removeClass( 'active' );
		$trigger.attr( 'aria-expanded', 'false' );

		if ( $lastFocused.length ) {
			$lastFocused.trigger( 'focus' );
		}
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
