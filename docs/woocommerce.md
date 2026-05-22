# WooCommerce Policy

WooCommerce support should stay lightweight and presentation-focused.

WooCommerce owns much of its internal markup. Prefer narrow CSS fallback selectors for WooCommerce output unless a template override is already justified.

WooCommerce CSS should align plugin markup with HoverCraft's shared design system, not create a second WooCommerce-only design system.

## Product Layout

Single product pages should use HoverCraft's desktop rhythm instead of a separate WooCommerce-specific layout system.

Desktop single product layout should generally use:

- 1200px product container.
- 392px product gallery column.
- 40px gap.
- 768px product summary column.
- 1200px description, metadata, reviews, and related products sections.

The product gallery should remain visually controlled so product images do not dominate the page. The product summary should receive the wider 768px content area so titles, short descriptions, quantity controls, add-to-cart buttons, and metadata have enough room.

Mobile product layouts should remain stacked and full-width.

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

Related products on single product pages should remain visually lighter than the main product area. Desktop related products should generally use four columns inside the 1200px product section unless a future layout policy intentionally changes the product grid globally.
