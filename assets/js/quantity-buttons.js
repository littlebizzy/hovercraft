(function () {
	// add quantity buttons to cart inputs
	function initQuantityButtons() {
		const quantityContainers = document.querySelectorAll( 'div.quantity:not(.buttons-added)' );

		quantityContainers.forEach( function ( container ) {
			const input = container.querySelector( 'input.qty' );
			if ( ! input ) {
				return;
			}

			// prevent duplicates
			container.classList.add( 'buttons-added' );

			// create minus button
			const minus = document.createElement( 'button' );
			minus.type = 'button';
			minus.className = 'quantity-button minus';
			minus.textContent = '-';

			// create plus button
			const plus = document.createElement( 'button' );
			plus.type = 'button';
			plus.className = 'quantity-button plus';
			plus.textContent = '+';

			// make input readonly
			input.readOnly = true;

			// insert buttons
			container.insertBefore( minus, input );
			container.appendChild( plus );

			// decrease qty
			minus.addEventListener( 'click', function () {
				let value = parseFloat( input.value ) || 0;
				let step = parseFloat( input.step ) || 1;
				let min = parseFloat( input.min ) || 0;
				input.value = Math.max( value - step, min );
				input.dispatchEvent( new Event( 'input', { bubbles: true } ) );
				input.dispatchEvent( new Event( 'change', { bubbles: true } ) );
			} );

			// increase qty
			plus.addEventListener( 'click', function () {
				let value = parseFloat( input.value ) || 0;
				let step = parseFloat( input.step ) || 1;
				let max = parseFloat( input.max );
				let newVal = value + step;
				if ( ! isNaN( max ) ) {
					newVal = Math.min( newVal, max );
				}
				input.value = newVal;
				input.dispatchEvent( new Event( 'input', { bubbles: true } ) );
				input.dispatchEvent( new Event( 'change', { bubbles: true } ) );
			} );
		} );
	}

	// run on page load
	document.addEventListener( 'DOMContentLoaded', function () {
		initQuantityButtons();
	} );

	// re-run after woocommerce updates the cart via ajax
	document.body.addEventListener( 'updated_cart_totals', initQuantityButtons );
	document.body.addEventListener( 'updated_wc_div', initQuantityButtons );

	// re-run if the entire cart form is replaced
	new MutationObserver( function ( mutations ) {
		for ( const mutation of mutations ) {
			if (
				[ ...mutation.addedNodes ].some( function ( node ) {
					return node.nodeType === 1 && node.matches && node.matches( 'form.woocommerce-cart-form' );
				} )
			) {
				initQuantityButtons();
			}
		}
	} ).observe( document.body, { childList: true, subtree: true } );
})();

// Ref: ChatGPT
// Ref: https://wordpress.org/plugins/qty-increment-buttons-for-woocommerce/
