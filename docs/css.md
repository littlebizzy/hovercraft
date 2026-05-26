# CSS Organization Policy

HoverCraft CSS should stay modular, predictable, and easy to audit.

CSS files should be grouped by real theme area when that improves maintainability. Footer CSS belongs in a footer-focused location. WooCommerce CSS belongs in WooCommerce-focused files. Generic form controls, headings, breadcrumbs, and layout rules should stay in shared files when they are truly global.

Avoid mixing unrelated policy areas in one CSS file just because selectors are nearby. Layout rules, widget area rendering, Customizer output, forms, and plugin compatibility can interact, but the files should still make the purpose of each rule obvious.

Shared design rules should live in shared CSS when multiple theme areas need the same baseline. Plugin-specific files may reset or adapt plugin markup to the shared baseline, but should not create a separate visual system.

Use consistent media query structure. HoverCraft generally uses `max-width: 1199px` and `min-width: 1200px` for breakpoint-specific CSS so mobile and desktop behavior are easy to scan.

Do not create empty media query blocks. Do not duplicate identical declarations inside both mobile and desktop blocks when a shared base declaration is clearer.

Keep selector grouping readable. Selectors that share the same rules may stay on one line when that keeps the CSS compact and easy to scan. Each declaration inside a rule block should stay on its own line.

Generated CSS should avoid janky ordering, missing files, duplicate includes, and mismatched module paths. When CSS files are moved into subfolders, the generator should be updated in the same patch so the generated output remains complete and deterministic.

## Design Tokens

Customizer output and PHP-generated CSS may expose reusable CSS custom properties when that reduces duplication and improves maintainability.

CSS custom properties should be generated from HoverCraft's existing theme settings instead of being duplicated in `theme.json`.

Do not introduce a second design-token source just because block themes or Gutenberg examples use one. HoverCraft's front-end CSS and Customizer output should remain the canonical presentation layer.
