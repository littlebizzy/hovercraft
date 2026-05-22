# Forms Policy

Forms should use one consistent sitewide control system across HoverCraft, WooCommerce, bbPress, comments, search, widgets, and normal WordPress templates.

## Field Scope

Real form fields include text inputs, email inputs, URL inputs, password inputs, search inputs, telephone inputs, number inputs, selects, textareas, file inputs, range inputs, checkboxes, radio buttons, reset buttons, and submit buttons.

These controls should feel like the same family unless a plugin requires a narrow compatibility override.

## Standard Fields

Standard text fields, selects, and textareas should use boring, modern defaults: white background, default text color, inherited font family, `16px` font size, `1.5` line height, `46px` minimum height, `10px 16px` padding, and `4px` radius.

These values are intentional because they are readable, touch-friendly, visually calm, and not overly large for a simple WordPress theme.

Field boundaries should use one consistent visual model.

HoverCraft currently prefers `border: 0` with an inset `box-shadow` boundary because it avoids layout shifts and makes normal, focus, invalid, validated, readonly, and disabled states easier to keep consistent.

Normal field boundaries should use the theme's standard light neutral border color, currently `#e0e0e0`, instead of the darker default text color.

Do not mix physical borders and inset shadows for the same class of normal fields unless the whole shared field model is intentionally changed.

## Focus And States

Focus states should be visible, consistent, and accessible.

Text fields, selects, and textareas should use a stronger inset boundary with the default link color, normally `2px`, rather than a glow effect or a separate one-off outline.

Checkbox and radio focus states may use browser-native controls with a simple outline instead of custom fake controls.

Validation, readonly, disabled, hover, and focus states should use the same visual model as normal fields whenever possible.

If the field boundary uses inset shadow, plugin validation states should also use inset shadow rather than switching to physical borders.

If the field boundary uses a real border in the future, validation states should follow that same model consistently.

## Native Controls

Checkboxes and radio buttons should remain native browser controls unless there is a clear reason to customize them.

Avoid replacing them with complex custom UI, pseudo-elements, icon fonts, or JavaScript-only behavior.

They should align cleanly with labels and keep normal keyboard behavior.

Select fields should remain simple and reliable.

Native selects are preferred for normal theme forms, WooCommerce variation selectors, quantity selectors, checkout fields, and account fields.

Custom select libraries or plugin-generated select wrappers may receive compatibility styling, but they should not define a second visual system.

## Select Caret

Select fields that use HoverCraft's normal visual field system should use the preferred custom chevron-style downward SVG caret instead of inconsistent browser-native arrows or filled triangle icons.

The native arrow should be disabled with `appearance: none`, `-webkit-appearance: none`, and `-moz-appearance: none`.

The chevron should be a stroked V shape using the default text color, should sit at `right 14px center`, use `16px` background size, and reserve right-side space with `10px 44px 10px 16px` padding.

This applies to normal selects, WooCommerce variation selects, WooCommerce quantity selects, and WooCommerce ordering selects unless a narrow plugin compatibility issue requires an exception.

## Buttons

Submit buttons, reset buttons, and real form buttons are part of the forms policy.

They should generally use `16px` font size, `600` font weight, `12px 20px` padding, `4px` radius, the default link color, and the default hover color unless a specific plugin state requires a defensive override.

They should look like clear form actions, not oversized marketing CTAs.

Marketing calls to action are not covered by this forms policy.

CTA links, hero buttons, product-card action links, banner buttons, and other non-form promotional controls may have their own presentation policy, but they should not accidentally redefine normal form submit/input behavior.

## Plugin Forms

WooCommerce and bbPress form CSS may override layout, width, clearing, table wrappers, plugin validation states, hidden accessibility labels, and plugin-specific spacing.

These plugin overrides should protect the global form system from leaked plugin CSS, not create a separate WooCommerce or bbPress field design.

Do not create one-off field sizes, font sizes, border colors, border widths, shadows, padding systems, or select styles for individual templates unless the component has a real layout constraint.

If one template's fields look wrong, first adjust the shared form baseline or add a narrow plugin reset that preserves the shared design.

Header search bars, fullscreen search modals, and other visually integrated search experiences may use layout-specific dimensions when needed, but they should still preserve the same general field family unless there is a deliberate visual reason not to.

These exceptions should stay narrow and should not leak back into normal form fields.
