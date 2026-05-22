# Customizer Visibility Policy

HoverCraft Customizer visibility settings should be honest, predictable, and easy to audit.

## Scope

Customizer settings may control global design, layout, responsive behavior, and section visibility.

Customizer settings should not become page-specific content modeling, structured data management, or a page builder.

If a setting only affects mobile, its label and description should make that clear.

Mobile-only visibility settings should not unexpectedly disable desktop output.

## Labels and Behavior

Customizer labels must match behavior.

If a setting says `None`, `Hidden`, or `Disabled`, the rendered output or generated CSS must actually hide the relevant section in that context.

If a setting includes a true disabled option, that disabled option should hide the whole affected region in the relevant context.

If a setting controls which widget area appears on mobile, it should only hide the non-selected mobile side.

Desktop behavior should remain unaffected unless the setting explicitly says otherwise.

## Preserving Content

Display settings should preserve user content whenever practical.

Hiding a section through CSS or conditional rendering is preferable to requiring users to delete widget content just to disable a section temporarily.

This is especially useful for reusable widget areas, because users can disable a visual region and turn it back on later without rebuilding content.

## Generated CSS

PHP-generated CSS should keep conditional CSS obvious and auditable.

Prefer PHP conditionals around complete CSS blocks when a Customizer setting controls whether a rule exists.

Avoid echoing partial declarations inside otherwise empty selectors when a whole block can be conditionally included.

Generated CSS should not emit empty selectors. If a Customizer option does not need a rule, skip the entire rule block.

Customizer variables should be read once in the CSS generator and used by focused CSS partials.
