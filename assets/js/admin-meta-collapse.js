// admin meta collapse
jQuery( function( $ ) {
	$( '.hovercraft-meta-group-header' ).on( 'click', function() {
		var $header = $( this );
		var $group = $header.closest( '.hovercraft-meta-group' );
		var $body = $group.find( '.hovercraft-meta-group-body' );
		var $toggle = $header.find( '.hovercraft-meta-group-toggle' );
		var isOpen = $body.is( ':visible' );

		$body.stop( true, true ).slideToggle( 150 );
		$toggle.text( isOpen ? '▸' : '▾' );
	} );
} );
