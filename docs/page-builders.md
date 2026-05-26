# Page Builder Policy

HoverCraft is intentionally anti-page-builder. It should not chase page-builder parity or add generic drag-and-drop section systems.

The goal is simple, fast, maintainable WordPress sites using a small set of reliable templates, widget areas, Customizer settings, and narrow meta boxes where appropriate.

Do not add generic layout builders, reusable section builders, or page-builder-style control systems to the theme.

New features should improve repeatable client work without turning HoverCraft into a generic layout builder, content modeling system, or SEO/schema plugin.

## Page Template Policy

HoverCraft page templates should keep their major layout identity explicit and file-visible.

Hero type, header type, sidebar intent, and major page layout should not be hidden behind a generic layout renderer or selected from database settings as the primary source of truth.

Hardcoded template-part calls are appropriate when they make the template's purpose obvious. For example, a Mini Hero template should visibly load the Mini Hero header template part instead of delegating that choice to a broad helper.

Shared helpers or template parts are acceptable for boring repeated wrapper markup, repeated content loops, or complex reusable logic, but they should not obscure the template's hero/header identity.

Prefer clear, explicit page templates over clever abstractions when the template structure is central to HoverCraft's design approach.

## Block Editor Policy

HoverCraft may remain compatible with normal WordPress content, but it should not add features merely to support Gutenberg layout workflows.

Do not add `theme.json` just to mirror block editor settings, appease Gutenberg conventions, or create a second source of truth for colors, fonts, spacing, layout, or presentation.

A `theme.json` file should only be added if there is a specific, proven compatibility problem that cannot be handled cleanly through classic theme APIs, Customizer output, editor styles, or normal CSS.

If `theme.json` is ever added, it should stay minimal and defensive. It should not replace the Customizer as HoverCraft's design settings layer.
