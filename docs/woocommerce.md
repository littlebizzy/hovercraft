# WooCommerce Policy

WooCommerce support should stay lightweight and presentation-focused.

WooCommerce owns much of its internal markup. Prefer narrow CSS fallback selectors for WooCommerce output unless a template override is already justified.

WooCommerce CSS should align plugin markup with HoverCraft's shared design system, not create a second WooCommerce-only design system.

## Header Cart

When WooCommerce is active and cart access is available, HoverCraft should render hardcoded cart access inside approved header navigation layouts.

The header cart should not depend on a WooCommerce cart widget, mini cart widget, header widget area, or manually assigned menu item. Basic cart access is core store navigation and should work automatically through theme template logic.

Inline header and mobile header areas may use the compact cart icon with the red notification pill. Stacked desktop header navigation should use the readable `Shopping Cart` text link with the red notification pill and no cart icon.

The red cart notification pill should always render with the current cart count, including `0` for an empty cart. Keeping the pill visible avoids layout jumping and makes the cart affordance consistent across empty and non-empty cart states.

## Product Layout

Single product pages should use HoverCraft's desktop rhythm instead of a separate WooCommerce-specific layout system.

### Desktop Layout

Desktop single product layout should generally use:

- 1200px product container.
- 392px product gallery column.
- 40px gap.
- 768px product summary column.
- 1200px description, metadata, reviews, and related products sections.

The product gallery should remain visually controlled so product images do not dominate the page.

The product summary should receive the wider 768px content area so titles, short descriptions, quantity controls, add-to-cart buttons, and metadata have enough room.

### Mobile Layout

Mobile product layouts should remain stacked and full-width.

Mobile product gallery sizing should avoid forcing users to scroll past an oversized image before they can see the product title and purchase controls.

Mobile changes should preserve normal WooCommerce behavior unless there is a clear visual or usability problem to solve.

## Product Forms

WooCommerce product forms should keep the first purchase control close to the short product description so simple products and single-option variable products do not feel unnecessarily stretched.

Variable products with multiple option rows may add spacing between sibling variation rows only. The current baseline is `16px` top margin on variation rows that follow another variation row.

Do not add extra top margin to the whole variations table just to fix crowded multi-option products, because that also pushes the first option farther away from the short description.

Do not add extra label bottom spacing unless the label is visually detached from its own field. The current baseline is `6px` bottom margin between a variation label and its own field.

The usual problem on multi-option variable products is row-to-row crowding, not label-to-field spacing.

Prefer CSS-only fixes for WooCommerce variation spacing. Do not override WooCommerce variation templates unless CSS cannot solve the layout problem cleanly.

Add to cart buttons must have a visibly disabled state for unavailable or incomplete variable-product selections. Disabled buttons should not keep the active accent color on hover, focus, or active states.

## Product Widget Areas

WooCommerce widget areas should stay practical and location-specific. They should support real product-page needs such as trust messages, payment notices, shipping notes, shortcodes, sale notices, or other reusable content that belongs near purchase controls.

The `After Add To Cart` widget area renders below the WooCommerce add-to-cart form through the `woocommerce_after_add_to_cart_form` hook. It should stay outside the cart form so arbitrary widget markup does not create invalid WooCommerce form HTML.

Widget-area registration and rendering helpers should stay under `inc/widgets/`, even when the output appears inside a WooCommerce hook. See `docs/widget-areas.md` for the full widget policy and supported widget area list.

## Product Tabs

WooCommerce product tabs should feel like HoverCraft tabs, not plugin defaults.

Active product tabs should use a white background and visually connect into the white tab panel or product description section below.

Inactive product tabs may use a light gray background. Hover states on inactive tabs may darken the gray slightly, but text color should remain the normal default text color instead of changing to link blue.

Tab labels should generally use the default text color and `600` font weight for both active and inactive states.

Top tab corners should use the theme's normal tab radius. Bottom tab corners should stay square when needed to preserve the seam into the active panel.

## Product Specs

The WooCommerce `Additional Information` tab may be labeled `Product Specs` when the tab mostly contains technical product attributes.

`Product Specs` is short, clear, and easier for normal users to understand than `Additional Information` when the content is mostly product data.

## Related Products

Related products on single product pages should remain visually lighter than the main product area.

Desktop related products should generally use four columns inside the 1200px product section unless a future layout policy intentionally changes the product grid globally.