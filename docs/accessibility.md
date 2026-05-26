# Accessibility Policy

HoverCraft should improve accessibility through simple, durable classic-theme patterns rather than heavy JavaScript frameworks, page-builder behavior, or block-editor assumptions.

Accessibility work should stay practical, visible in the relevant templates, and easy to audit.

## Baseline Expectations

Interactive controls should use the correct native element.

Use `<button type="button">` for controls that open, close, toggle, reveal, hide, or trigger JavaScript behavior.

Use links only for real navigation.

Do not use fake anchors, empty hash links, or clickable non-interactive elements when a real button is appropriate.

Decorative icons should use `aria-hidden="true"`. The accessible name should live on the surrounding button or link through visible text or `aria-label`.

Do not add ARIA attributes speculatively. ARIA state must match visible state and must be updated by JavaScript when the visible state changes.

## Skip Link

HoverCraft should output a skip-to-content link immediately after `wp_body_open()`.

The skip link should target the stable `#main` region used by HoverCraft templates.

Skip-link reveal styling belongs in the focus CSS partial, not in layout templates or header-specific CSS.

## Keyboard Focus

Keyboard focus styles should be visible, predictable, and centralized in the focus CSS partial when practical.

Do not hide outlines globally unless a clear replacement focus style exists.

Focus styles should support links, buttons, form controls, summary elements, and explicit tabindex targets.

## Menus, Overlays, And Modals

Menu, search, overlay, modal, and offcanvas behavior should keep visible state, body scroll state, ARIA state, and focus behavior in sync.

Controls that open hidden regions should use `aria-controls` when the controlled region has a stable ID.

Controls that toggle hidden regions should update `aria-expanded` when the region opens or closes.

Overlay and modal-style regions should expose their dialog state with stable ARIA attributes such as `role="dialog"`, `aria-modal="true"`, and `aria-hidden` when appropriate.

When a full-screen or offcanvas panel opens, focus should move into the panel when practical.

When a panel closes, focus should return to the control that opened it.

Escape-key close behavior is preferred for overlays, modals, offcanvas panels, and full-screen menus when it can be implemented without fragile JavaScript.

Backdrop click close behavior is acceptable when it does not conflict with keyboard behavior.

Avoid focus traps unless they are tested and necessary. Basic focus movement, Escape close, and focus return should come first because they are easier to maintain.

## Search Modal

The full-screen search modal should behave like a dialog.

It should expose dialog semantics, keep `aria-hidden` synchronized with visible state, update opener `aria-expanded`, move focus into the search field on open, close on Escape, close from its close button, and return focus to the opener when closed.

## Mobile Menus

Overlay and offcanvas mobile menus should use the same practical accessibility baseline as the search modal where possible.

The overlay menu should expose dialog semantics, keep `aria-hidden` synchronized with visible state, update opener `aria-expanded`, freeze body scrolling while open, close on Escape, focus the close button on open, and return focus to the opener when closed.

The offcanvas menu should update opener `aria-expanded`, freeze body scrolling while open, close from its backdrop, close on Escape, and return focus to the opener when closed.

## CSS Behavior

CSS should reflect visible state while JavaScript keeps ARIA attributes synchronized.

CSS should not fight JavaScript-managed state.

Avoid pointer-event tricks, hidden focusable elements, or advanced focus-trap styling unless the matching JavaScript behavior is implemented and tested.

## Classic Theme Scope

HoverCraft does not need Gutenberg, `theme.json`, or page-builder-specific behavior to provide good accessibility.

Accessibility improvements should fit the classic theme architecture: PHP templates, focused JavaScript files, generated CSS partials, Customizer-controlled presentation, and explicit page templates.

Do not add large accessibility frameworks or broad abstractions unless a real, repeated problem proves they are necessary.
