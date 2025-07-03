// main-menu.js

(function () {
	'use strict';

	const menuContainer = document.querySelector('.menu-desktop');
	if (!menuContainer) return;

	const toggles = menuContainer.querySelectorAll('.menu-toggle');

	const closeAll = () => {
		menuContainer.querySelectorAll('li.open').forEach((li) => {
			li.classList.remove('open');
		});
	};

	toggles.forEach((toggle) => {
		toggle.addEventListener('click', function (e) {
			e.preventDefault();
			e.stopPropagation();

			const parentLi = this.closest('li');
			const isOpen = parentLi.classList.contains('open');

			closeAll();

			if (!isOpen) {
				parentLi.classList.add('open');
			}
		});
	});

	document.addEventListener('click', function (e) {
		if (!menuContainer.contains(e.target)) {
			closeAll();
		}
	});
})();
