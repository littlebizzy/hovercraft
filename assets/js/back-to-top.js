jQuery(document).ready(function($){

    $(document).ready(function(){  
        // variables 
        var toTop = $('.scrollup-link');
        // logic
        toTop.on('click', function(){
            $('html, body').animate({
            scrollTop: $('html, body').offset().top,
            });
        });
    });

});

// https://codepen.io/nabeelfaheem/pen/zYOZOZK
