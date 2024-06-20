jQuery( document ).ready( function( $ ) {

accordionNav = $(function(){
	$('.menu-toggle').click(function(e) {
		e.preventDefault();
		var toggleButton = $(this);
		if (toggleButton.next().hasClass('active')) {
			toggleButton.next().removeClass('active');
			toggleButton.next().slideUp(400);
			toggleButton.removeClass('rotate');
		 } else {
			toggleButton.parent().parent().find('li .sub-menu').removeClass('active');
			toggleButton.parent().parent().find('li .sub-menu').slideUp(400);
			toggleButton.parent().parent().find('.menu-toggle').removeClass('rotate');
			toggleButton.next().toggleClass('active');
			toggleButton.next().slideToggle(400);
			toggleButton.toggleClass('rotate');
		}
	});
});
	
} );

// https://codepen.io/keithchis/pen/GpdbLm
