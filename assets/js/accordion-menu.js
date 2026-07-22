// accordion menu
document.addEventListener( 'DOMContentLoaded', function() {
	var toggles = document.querySelectorAll( '.offcanvas-menu .menu-toggle' );
	var animations = new WeakMap();
	var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	if ( ! toggles.length ) {
		return;
	}

	// animate a submenu from its current height
	function animateSubmenu( submenu, open ) {
		var runningAnimation = animations.get( submenu );
		var startHeight = submenu.getBoundingClientRect().height;
		var endHeight;
		var animation;

		if ( runningAnimation ) {
			runningAnimation.cancel();
			animations.delete( submenu );
		}

		if ( open ) {
			submenu.style.display = 'block';
		}

		endHeight = open ? submenu.scrollHeight : 0;

		if ( reduceMotion || 'function' !== typeof submenu.animate || startHeight === endHeight ) {
			submenu.style.display = open ? 'block' : 'none';
			submenu.style.overflow = '';
			return;
		}

		submenu.style.display = 'block';
		submenu.style.overflow = 'hidden';
		animation = submenu.animate(
			[
				{ height: startHeight + 'px' },
				{ height: endHeight + 'px' }
			],
			{
				duration: 400,
				easing: 'ease'
			}
		);
		animations.set( submenu, animation );

		animation.onfinish = function() {
			if ( animations.get( submenu ) !== animation ) {
				return;
			}

			animations.delete( submenu );
			submenu.style.display = open ? 'block' : 'none';
			submenu.style.overflow = '';
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
				animateSubmenu( submenu, false );
				return;
			}

			menu.querySelectorAll( '.sub-menu.active' ).forEach( function( activeSubmenu ) {
				activeSubmenu.classList.remove( 'active' );
				animateSubmenu( activeSubmenu, false );
			} );
			menu.querySelectorAll( '.menu-toggle.rotate' ).forEach( function( activeToggle ) {
				activeToggle.classList.remove( 'rotate' );
				activeToggle.setAttribute( 'aria-expanded', 'false' );
			} );

			submenu.classList.add( 'active' );
			toggle.classList.add( 'rotate' );
			toggle.setAttribute( 'aria-expanded', 'true' );
			animateSubmenu( submenu, true );
		} );
	} );
} );
