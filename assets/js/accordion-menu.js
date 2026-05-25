// accordion menu
jQuery( function( $ ) {
	$( '.menu-toggle' ).on( 'click', function( event ) {
		event.preventDefault();

		var $toggle = $( this );
		var $submenu = $toggle.next( '.sub-menu' );
		var $menu = $toggle.closest( 'ul' );

		if ( $submenu.hasClass( 'active' ) ) {
			$submenu.removeClass( 'active' ).slideUp( 400 );
			$toggle.removeClass( 'rotate' );
			return;
		}

		$menu.find( '.sub-menu.active' ).removeClass( 'active' ).slideUp( 400 );
		$menu.find( '.menu-toggle.rotate' ).removeClass( 'rotate' );
		$submenu.addClass( 'active' ).slideDown( 400 );
		$toggle.addClass( 'rotate' );
	} );
} );
