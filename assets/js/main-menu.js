(function ($) {
	'use strict';

	var $menu = $('.menu-desktop');
	if (!$menu.length) return;

	var delayIn = 100;  // submenu open delay
	var delayOut = 150; // submenu close delay

	$menu.find('.menu-item-has-children').each(function () {
		var $li = $(this);
		var openTimer, closeTimer;

		$li.on('mouseenter', function () {
			clearTimeout(closeTimer);
			openTimer = setTimeout(function () {
				$menu.find('li.open').not($li.parents()).removeClass('open');
				$li.addClass('open');
			}, delayIn);
		});

		$li.on('mouseleave', function () {
			clearTimeout(openTimer);
			closeTimer = setTimeout(function () {
				$li.removeClass('open');
			}, delayOut);
		});
	});
})(jQuery);
