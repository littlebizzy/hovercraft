jQuery(document).ready(function($){

    $(document).ready(function(){
        $('.burger').on('click', function(){
        	$('#offcanvas').toggleClass('active');
			$('body').toggleClass('frozen');
			$('.overlay-main').toggleClass('active');
        });
		$('.overlay-main').on('click', function(){
			$('#offcanvas').removeClass('active');
			$('body').removeClass('frozen');
			$('.overlay-main').removeClass('active');
		});
    });
	
});

// https://codepen.io/abhi_pawar/pen/qzpEJL
