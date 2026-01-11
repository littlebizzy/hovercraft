jQuery(function($) {

	$('.hovercraft-meta-group-header').on('click', function() {
		var group = $(this).closest('.hovercraft-meta-group');
		var body = group.find('.hovercraft-meta-group-body');
		var toggle = $(this).find('.hovercraft-meta-group-toggle');

		body.slideToggle(150);

		toggle.text(
			body.is(':visible') ? '▾' : '▸'
		);
	});

});
