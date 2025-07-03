(function ($) {
	'use strict';

	var $menu = $('.menu-desktop');

	if (!$menu.length) return;

	$menu.find('.menu-toggle').on('click', function (e) {
		e.preventDefault();
		e.stopPropagation();

		var $toggle = $(this);
		var $li = $toggle.closest('li');
		var isOpen = $li.hasClass('open');

		$menu.find('li.open').removeClass('open');

		if (!isOpen) {
			$li.addClass('open');
		}
	});

	$(document).on('click', function (e) {
		if (!$menu.has(e.target).length) {
			$menu.find('li.open').removeClass('open');
		}
	});
})(jQuery);
