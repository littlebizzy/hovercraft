jQuery(document).ready(function($) {

    ////$('.2burger').click(function() {
    ////$(this).find(".offcanvas").toggleClass('active');
	
    $(document).ready(function () {
        $(".burger").on("click", function(){
        $('#offcanvas').toggleClass('active');
		$('.overlay-main').toggleClass('active');
        });
    });

});

// https://codepen.io/abhi_pawar/pen/qzpEJL
