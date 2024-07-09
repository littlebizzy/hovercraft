jQuery(document).ready(function($) {

    ////$('.2burger').click(function() {
    ////$(this).find(".offcanvas").toggleClass('active');
	
    $(document).ready(function () {
        $(".burger").on("click", function(){
        	$('#offcanvas').toggleClass('active');
			$('body').toggleClass('frozen');
			$('.overlay-main').toggleClass('active');
        });
		$(".overlay-main").on("click", function(){
			$('#offcanvas').removeClass('active');
			$('body').removeClass('frozen');
			$('.overlay-main').removeClass('active');
		});
    });
});

// https://codepen.io/abhi_pawar/pen/qzpEJL
