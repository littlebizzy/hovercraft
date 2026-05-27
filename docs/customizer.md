# Customizer Policy

HoverCraft Customizer settings should be honest, predictable, reversible, and easy to audit.

## Scope

Customizer settings should control global design, layout, branding, typography, colors, WooCommerce presentation, responsive behavior, section visibility, and other site-wide defaults.

Customizer settings should not become page-specific content modeling, structured data management, a page builder, or a replacement for proper plugins.

Keep Customizer controls understandable. Prefer simple booleans, text fields, color settings, typography settings, and layout options over complex nested systems that behave like a page builder.

Do not add Customizer settings speculatively. Add them when they control a real global theme behavior or a repeated layout pattern that is likely to matter across client sites.

## Source Of Truth

The Customizer is HoverCraft's source of truth for designer-selected presentation settings.

Do not duplicate Customizer-controlled colors, fonts, spacing, widths, radii, layout choices, or presentation defaults in `theme.json`.

Do not maintain parallel design settings in Gutenberg/block-editor configuration files unless a specific compatibility issue makes that unavoidable.

Do not create a CSS token layer as a second presentation settings map. Customizer/PHP-generated CSS should remain direct unless CSS custom properties become necessary for WordPress compatibility, browser expectations, or a concrete maintenance problem.

## Layout Options

Customizer layout options are appropriate when they control a real site-wide presentation pattern. Header layout options may switch between approved global header structures when the markup stays explicit and the default preserves existing sites.

The `hovercraft_header_layout` setting uses `inline` as the default and `stacked` as the alternate layout. `inline` keeps branding and desktop navigation on one row. `stacked` separates branding and desktop navigation into two full-width desktop rows while keeping mobile behavior conservative.

Do not add speculative header layout choices. New layout choices should support real client patterns and should not turn the header into a page-builder system.

## Visibility

Customizer visibility toggles are appropriate for theme regions such as the topbar, preheader, footer areas, or other reusable layout zones.

Hiding a section through the Customizer should avoid rendering the section on the front end while preserving any saved widget content or settings whenever practical.

Use the Customizer for reversible presentation decisions. A site owner should be able to disable a region without deleting it from the widget area.

Display settings should preserve user content whenever practical. Hiding a section through CSS or conditional rendering is preferable to requiring users to delete widget content just to disable a section temporarily.

This is especially useful for reusable widget areas, because users can disable a visual region and turn it back on later without rebuilding content.

## Labels And Behavior

Customizer labels must match behavior.

If a setting only affects mobile, its label and description should make that clear.

Mobile-only visibility settings should not unexpectedly disable desktop output. Desktop behavior should remain unaffected unless the setting explicitly says otherwise.

If a setting says `None`, `Hidden`, or `Disabled`, the rendered output or generated CSS must actually hide the relevant section in that context.

If a setting includes a true disabled option, that disabled option should hide the whole affected region in the relevant context.

If a setting controls which widget area appears on mobile, it should only hide the non-selected mobile side.

## Generated CSS

PHP-generated CSS should keep conditional CSS obvious and auditable.

Prefer PHP conditionals around complete CSS blocks when a Customizer setting controls whether a rule exists.

Avoid echoing partial declarations inside otherwise empty selectors when a whole block can be conditionally included.

Generated CSS should not emit empty selectors. If a Customizer option does not need a rule, skip the entire rule block.

Customizer variables should be read once in the CSS generator and used by focused CSS partials.
