# Navigation Policy

HoverCraft navigation should remain predictable, accessible, and easy to maintain across desktop and mobile layouts.

## Menu Locations

The `main-menu` location is the primary desktop navigation. The optional `mobile-menu` location may provide a separate mobile structure.

When no Mobile Menu is assigned, mobile navigation should fall back to the assigned Main Menu. The fallback should retain the behavior of the selected mobile menu style without changing normal desktop Main Menu output.

CTA menu locations should remain limited to one top-level item. They are focused action locations, not general navigation areas.

## Mobile Menu Styles

`Overlay Simple` displays the full nested menu structure without accordion controls. Parent links and child links remain directly visible inside the overlay.

`Accordion Push` hides nested submenus until users expand them. It should provide the same submenu controls for a dedicated Mobile Menu and for the Main Menu when it is reused as the mobile fallback.

## Accordion Submenus

Menu-item links should remain normal links. A separate `<button type="button">` should open or close each submenu so navigation and disclosure remain distinct actions.

Submenu buttons should use the `menu-toggle` class, begin with `aria-expanded="false"`, and update `aria-expanded` whenever the visible submenu state changes. Closing an open sibling submenu must also reset its button state.

Accordion controls and their JavaScript should load only when `Accordion Push` is selected. `Overlay Simple` and normal desktop Main Menu output should not receive submenu buttons.

## Styling

Mobile submenu button styling belongs in `inc/css/header/menu-mobile.php`. Selectors should target the `menu-toggle` class rather than requiring an anchor element.

Semantic markup changes should preserve the established toggle dimensions, alignment, icon rotation, hover behavior, and surrounding menu layout unless a visual redesign is intentional.

## Testing

Navigation changes should be checked with both a dedicated Mobile Menu and the Main Menu fallback.

Test both `Overlay Simple` and `Accordion Push`. For Accordion Push, test parent links, nested submenus, keyboard activation, visible icon rotation, synchronized `aria-expanded` state, and sibling submenu closing. Mobile submenu changes should not alter desktop navigation markup or positioning.
