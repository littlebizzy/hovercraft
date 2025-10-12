// main menu
jQuery( function( $ ) {
	'use strict';

	// check menu exists
	var $menu = $( '.menu-desktop' );
	if ( ! $menu.length ) {
		return;
	}

	// submenu delays
	var delayIn  = 100; // submenu open delay
	var delayOut = 150; // submenu close delay

	// bind hover events
	$menu.find( '.menu-item-has-children' ).each( function() {
		var $li = $( this );
		var openTimer;
		var closeTimer;

		// mouse enter
		$li.on( 'mouseenter', function() {
			clearTimeout( openTimer );
			clearTimeout( closeTimer );

			openTimer = setTimeout( function() {
				$menu.find( 'li.open' ).not( $li.parents() ).removeClass( 'open' );
				$li.addClass( 'open' );
			}, delayIn );
		} );

		// mouse leave
		$li.on( 'mouseleave', function() {
			clearTimeout( openTimer );
			clearTimeout( closeTimer );

			closeTimer = setTimeout( function() {
				$li.removeClass( 'open' );
			}, delayOut );
		} );
	} );
} );

// Ref: ChatGPT
