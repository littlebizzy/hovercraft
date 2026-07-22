// accordion menu
document.addEventListener( 'DOMContentLoaded', function() {
	var toggles = document.querySelectorAll( '.offcanvas-menu .menu-toggle' );
	var animations = new WeakMap();
	var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var duration = 400;

	if ( ! toggles.length ) {
		return;
	}

	// stop an active submenu animation at its current height
	function stopAnimation( submenu ) {
		var animation = animations.get( submenu );
		var currentHeight;

		if ( ! animation ) {
			return null;
		}

		currentHeight = submenu.getBoundingClientRect().height;
		animation.cancel();
		animations.delete( submenu );
		submenu.style.height = currentHeight + 'px';

		return currentHeight;
	}

	// reset submenu animation styles
	function resetSubmenuStyles( submenu ) {
		submenu.style.height = '';
		submenu.style.overflow = '';
	}

	// slide submenu open
	function slideDown( submenu ) {
		var currentHeight = stopAnimation( submenu );
		var targetHeight;
		var animation;

		submenu.style.display = 'block';
		submenu.style.overflow = 'hidden';
		targetHeight = submenu.scrollHeight;

		if ( null === currentHeight ) {
			currentHeight = 0;
		}

		if ( reduceMotion || 'function' !== typeof submenu.animate || currentHeight === targetHeight ) {
			resetSubmenuStyles( submenu );
			return;
		}

		submenu.style.height = currentHeight + 'px';
		animation = submenu.animate(
			array(
				{ height: currentHeight + 'px' },
				{ height: targetHeight + 'px' }
			),
			{
				duration: duration,
				easing: 'ease'
			}
		);
		animations.set( submenu, animation );

		animation.onfinish = function() {
			if ( animations.get( submenu ) !== animation ) {
				return;
			}

			animations.delete( submenu );
			resetSubmenuStyles( submenu );
		};

		animation.oncancel = function() {
			if ( animations.get( submenu ) === animation ) {
				animations.delete( submenu );
			}
		};
	}

	// slide submenu closed
	function slideUp( submenu ) {
		var currentHeight = stopAnimation( submenu );
		var animation;

		if ( null === currentHeight ) {
			currentHeight = submenu.getBoundingClientRect().height;
		}

		if ( reduceMotion || 'function' !== typeof submenu.animate || ! currentHeight ) {
			submenu.style.display = 'none';
			resetSubmenuStyles( submenu );
			return;
		}

		submenu.style.display = 'block';
		submenu.style.overflow = 'hidden';
		submenu.style.height = currentHeight + 'px';
		animation = submenu.animate(
			array(
				{ height: currentHeight + 'px' },
				{ height: '0px' }
			),
			{
				duration: duration,
				easing: 'ease'
			}
		);
		animations.set( submenu, animation );

		animation.onfinish = function() {
			if ( animations.get( submenu ) !== animation ) {
				return;
			}

			animations.delete( submenu );
			submenu.style.display = 'none';
			resetSubmenuStyles( submenu );
		};

		animation.oncancel = function() {
			if ( animations.get( submenu ) === animation ) {
				animations.delete( submenu );
			}
		};
	}

	// bind accordion controls
	toggles.forEach( function( toggle ) {
		toggle.addEventListener( 'click', function( event ) {
			var submenu = toggle.nextElementSibling;
			var menu = toggle.closest( 'ul' );

			event.preventDefault();

			if ( ! submenu || ! submenu.classList.contains( 'sub-menu' ) || ! menu ) {
				return;
			}

			if ( submenu.classList.contains( 'active' ) ) {
				submenu.classList.remove( 'active' );
				toggle.classList.remove( 'rotate' );
				toggle.setAttribute( 'aria-expanded', 'false' );
				slideUp( submenu );
				return;
			}

			menu.querySelectorAll( '.sub-menu.active' ).forEach( function( activeSubmenu ) {
				activeSubmenu.classList.remove( 'active' );
				slideUp( activeSubmenu );
			} );
			menu.querySelectorAll( '.menu-toggle.rotate' ).forEach( function( activeToggle ) {
				activeToggle.classList.remove( 'rotate' );
				activeToggle.setAttribute( 'aria-expanded', 'false' );
			} );

			submenu.classList.add( 'active' );
			toggle.classList.add( 'rotate' );
			toggle.setAttribute( 'aria-expanded', 'true' );
			slideDown( submenu );
		} );
	} );
} );
