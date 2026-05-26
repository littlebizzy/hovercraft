# CSS Organization Policy

HoverCraft CSS should stay modular, predictable, and easy to audit.

For broader keyboard, ARIA, focus, overlay, modal, and menu behavior policy, see `docs/accessibility.md`.

CSS files should be grouped by real theme area when that improves maintainability. Footer CSS belongs in a footer-focused location. WooCommerce CSS belongs in WooCommerce-focused files. Generic form controls, headings, breadcrumbs, and layout rules should stay in shared files when they are truly global.

Avoid mixing unrelated policy areas in one CSS file just because selectors are nearby. Layout rules, widget area rendering, Customizer output, forms, and plugin compatibility can interact, but the files should still make the purpose of each rule obvious.

Shared design rules should live in shared CSS when multiple theme areas need the same baseline. Plugin-specific files may reset or adapt plugin markup to the shared baseline, but should not create a separate visual system.

Use consistent media query structure. HoverCraft generally uses `max-width: 1199px` and `min-width: 1200px` for breakpoint-specific CSS so mobile and desktop behavior are easy to scan.

Do not create empty media query blocks. Do not duplicate identical declarations inside both mobile and desktop blocks when a shared base declaration is clearer.

Keep selector grouping readable. Selectors that share the same rules may stay on one line when that keeps the CSS compact and easy to scan. Each declaration inside a rule block should stay on its own line.

Generated CSS should avoid janky ordering, missing files, duplicate includes, and mismatched module paths. When CSS files are moved into subfolders, the generator should be updated in the same patch so the generated output remains complete and deterministic.

## Code Snippets

Inline `code` should use a `4px` radius so short technical values are visually distinct without looking like buttons.

Block-level `pre` and `.pre` code containers should use an `8px` radius and allow horizontal scrolling for long lines.

When normal WordPress code blocks use `pre > code`, the outer `pre` should own the rounded visual container and clipping, while the inner `code` should own the horizontal scrolling and internal padding. Custom `.pre > code` blocks should follow the same pattern.

Bare `pre` and `.pre` blocks should keep direct horizontal scrolling as a fallback because not all user content or plugins output nested `pre > code` or `.pre > code` markup.

Code snippets should remain easy to copy by allowing normal text selection. Use `user-select: text` for code elements, but do not use `user-select: all` globally because users may need to select only part of a snippet.

Do not inject global copy buttons into code blocks by default. Copy buttons add JavaScript, translated labels, focus behavior, and edge cases that belong in a specific documentation feature, not basic theme styling.

Do not remove code block radius just because native horizontal scrollbars may make the bottom edge look less rounded in some browsers. That is normal browser scrollbar rendering, not a theme bug.

Avoid custom scrollbar styling or wrapper-heavy markup unless a specific template needs a more polished code block layout. Generic theme CSS should stay simple and compatible with normal WordPress content output.

## Focus And Accessibility Styles

Keep focus and accessibility CSS aligned with `docs/accessibility.md`.

Keyboard focus styles should be visible, predictable, and centralized in the focus CSS partial when practical.

Do not hide outlines globally without providing a clear replacement focus style.

Skip-link reveal styles belong with focus styles, not with layout templates or header-specific CSS.

Overlay, modal, offcanvas, and menu CSS should not fight JavaScript-managed ARIA state. CSS should reflect the visible state while JavaScript keeps attributes such as `aria-hidden` and `aria-expanded` synchronized.

Avoid advanced focus-trap styling or pointer-event tricks unless the matching JavaScript behavior is already implemented and tested.

## CSS Custom Properties

HoverCraft should not maintain a CSS token layer by default.

Do not add a dedicated tokens file, broad `:root` variable map, or design-token abstraction merely because modern CSS, block themes, or Gutenberg examples use custom properties.

Customizer/PHP-generated CSS should remain direct and easy to audit unless there is a specific compatibility need that cannot be handled cleanly otherwise.

CSS custom properties may be considered only if they become critical to WordPress compatibility, browser expectations, or a concrete maintenance problem that direct generated CSS cannot solve.

If CSS custom properties are ever introduced, they should be minimal, generated from existing Customizer/PHP settings, and documented as an exception rather than a default architecture pattern.
