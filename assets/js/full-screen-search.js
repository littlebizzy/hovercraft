// When the document is ready...
jQuery( document ).ready( function( $ ) {

    // ... display the Full Screen search when:
    // 1. The user focuses on a search field, or
    // 2. The user clicks the Search button
	$( '.search-icon-wrapper' ).on( 'click', function( event ) {
        // Prevent the default action
        event.preventDefault();

        // Display the Full Screen Search
        $( '#full-screen-search' ).addClass( 'open' );

        // Focus on the Full Screen Search Input Field
        $( '#full-screen-search input' ).focus();
    } );

    // Hide the Full Screen search when the user clicks the close button
    $( '#full-screen-search button.close' ).on( 'click', function( event ) {
        // Prevent the default event
        event.preventDefault();

        // Hide the Full Screen Search
        $( '#full-screen-search' ).removeClass( 'open' );
    } );

} );

// https://wordpress.org/plugins/full-screen-search-overlay/
