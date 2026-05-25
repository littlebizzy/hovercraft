// offcanvas menu
jQuery( function( $ ) {
	var $body = $( 'body' );
	var $menu = $( '#hovercraft-offcanvas-menu' );
	var $overlay = $( '.hovercraft-offcanvas-overlay' );
	var $trigger = $( '.hovercraft-offcanvas-trigger' );

	if ( ! $menu.length || ! $overlay.length || ! $trigger.length ) {
		return;
	}

	// toggle offcanvas menu
	$trigger.on( 'click', function() {
		$menu.toggleClass( 'active' );
		$body.toggleClass( 'frozen' );
		$overlay.toggleClass( 'active' );
	} );

	// close offcanvas menu
	$overlay.on( 'click', function() {
		$menu.removeClass( 'active' );
		$body.removeClass( 'frozen' );
		$overlay.removeClass( 'active' );
	} );
} );
