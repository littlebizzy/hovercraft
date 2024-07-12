jQuery(document).ready(function($){

    $(document).ready(function(){  
        $('.scrollup-link').on('click', function(){
            $('html, body').animate({
                scrollTop: "0"
            });
        });
    });

});

// https://codepen.io/nabeelfaheem/pen/zYOZOZK
// https://www.geeksforgeeks.org/how-to-animate-scrolltop-using-jquery/
