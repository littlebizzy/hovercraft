# Navigation Policy

HoverCraft navigation should remain predictable, accessible, and easy to maintain across desktop and mobile layouts.

## Menu Locations

The `main-menu` location is the primary desktop navigation. The optional `mobile-menu` location may provide a separate mobile structure.

When no Mobile Menu is assigned, mobile navigation should fall back to the assigned Main Menu. The custom `hovercraft_mobile_fallback` menu argument identifies this reused mobile output without changing normal desktop Main Menu output.

CTA menu locations should remain limited to one top-level item. They are focused action locations, not general navigation areas.

## Mobile Menu Styles

Only the selected mobile menu style should render its markup and load its matching JavaScript.

`Overlay Simple` displays the full nested menu structure without accordion controls. Parent links and child links remain directly visible inside the overlay, and only the overlay menu script should load.

`Accordion Push` renders the offcanvas menu and its backdrop. It hides nested submenus until users expand them, and only the offcanvas and accordion menu scripts should load.

## Accordion Submenus

Menu-item links should remain normal links. A separate `<button type="button">` should open or close each submenu so navigation and disclosure remain distinct actions.

Submenu buttons should use the `menu-toggle` class, begin with `aria-expanded="false"`, and update `aria-expanded` whenever the visible submenu state changes. Closing an open sibling submenu must also reset its button state.

Accordion JavaScript should target `.offcanvas-menu .menu-toggle` so similarly named controls outside the offcanvas menu remain unaffected. `Overlay Simple` and normal desktop Main Menu output should not receive submenu buttons.

## Styling

Mobile submenu button styling belongs in `inc/css/header/menu-mobile.php`. Selectors should target the `menu-toggle` class rather than requiring an anchor element.

Semantic markup changes should preserve the established toggle dimensions, alignment, icon rotation, hover behavior, and surrounding menu layout unless a visual redesign is intentional.

## Testing

Navigation changes should be checked with both a dedicated Mobile Menu and the Main Menu fallback.

Test both `Overlay Simple` and `Accordion Push`. Confirm that only the selected menu exists in the page markup and only its matching scripts load. For Accordion Push, test parent links, nested submenus, keyboard activation, visible icon rotation, synchronized `aria-expanded` state, and sibling submenu closing. Mobile submenu changes should not alter desktop navigation markup or positioning.
