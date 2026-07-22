# Refactoring Policy

Preserve existing template behavior unless the change explicitly targets it.

Prefer boring, explicit, maintainable PHP over clever abstraction.

Prefer vanilla JavaScript and native browser APIs whenever they can implement the required behavior simply and reliably. Use jQuery or another frontend library only when it materially reduces complexity or is already necessary for the feature.

Maintain compatibility with the current theme requirements unless those requirements are intentionally changed.

Keep WooCommerce support lightweight and presentation-focused.

Keep Customizer settings focused on global design and layout defaults.

Keep meta boxes focused on specific templates or narrow visual behavior.

Keep widget areas tied to real theme locations.

Avoid speculative features, unused abstractions, and client-specific bloat.

Keep files, functions, comments, and naming easy to scan during future audits.

Small intended changes should produce small diffs. Cleanup patches should stay focused on the stated goal.
