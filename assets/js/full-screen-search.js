jQuery(document).ready(function($){

	$(document).ready(function(){
		
		$('.search-icon-wrapper').on('click', function(event){
        
			// Prevent the default action
        	event.preventDefault();

        	// Display the Full Screen Search
        	$( '#full-screen-search' ).addClass( 'open' );

        	// Focus on the Full Screen Search Input Field
        	$( '#full-screen-search input' ).focus();
			
    	});

		$( '#full-screen-search button.close' ).on( 'click', function( event ) {
    	
			// Prevent the default event
        	event.preventDefault();

        	// Hide the Full Screen Search
        	$( '#full-screen-search' ).removeClass( 'open' );
			
    	});
	
		// Hide the Full Screen search when the user clicks the esc key
		$( document ).on( 'keydown', function( event ) {
		
			if (event.key == "Escape") {
			
				// Hide the Full Screen Search
        		$( '#full-screen-search' ).removeClass( 'open' );
		
			}

		});

	});

});

// https://wordpress.org/plugins/full-screen-search-overlay/
// https://www.geeksforgeeks.org/how-to-detect-escape-key-press-using-jquery/
