// hover delays for submenus
jQuery( function( $ ) {

	'use strict';

	var $menu = $( '.menu-desktop' );
	if ( ! $menu.length ) {
		return;
	}

	var delayIn = 100;  // submenu open delay
	var delayOut = 150; // submenu close delay

	$menu.find( '.menu-item-has-children' ).each( function() {
		var $li = $( this );
		var openTimer;
		var closeTimer;

		$li.on( 'mouseenter.hovercraftMenu', function() {
			clearTimeout( openTimer );
			clearTimeout( closeTimer );

			openTimer = setTimeout( function() {
				$menu.find( 'li.open' ).not( $li.parents() ).removeClass( 'open' );
				$li.addClass( 'open' );
			}, delayIn );
		} );

		$li.on( 'mouseleave.hovercraftMenu', function() {
			clearTimeout( openTimer );
			clearTimeout( closeTimer );

			closeTimer = setTimeout( function() {
				$li.removeClass( 'open' );
			}, delayOut );
		} );
	} );

} );

// Ref: ChatGPT
