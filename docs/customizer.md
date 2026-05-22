# Customizer Policy

Customizer settings should control global design, layout, branding, typography, colors, WooCommerce presentation, and other site-wide defaults.

Customizer settings should not become page-specific content modeling, structured data management, or a replacement for proper plugins.

Customizer visibility toggles are appropriate for theme regions such as the topbar, preheader, footer areas, or other reusable layout zones. Hiding a section through the Customizer should avoid rendering the section on the front end while preserving any saved widget content or settings.

Use the Customizer for reversible presentation decisions. A site owner should be able to disable a region without deleting its saved content, then re-enable it later without rebuilding the area.

Keep Customizer controls understandable. Prefer simple booleans, text fields, color settings, typography settings, and layout options over complex nested systems that behave like a page builder.

Do not add Customizer settings speculatively. Add them when they control a real global theme behavior or a repeated layout pattern that is likely to matter across client sites.
