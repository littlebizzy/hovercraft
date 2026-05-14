<img src="https://repository-images.githubusercontent.com/56482826/43902c63-3729-437d-ab69-8ab86f52e839" />

# HoverCraft

No maintenance WordPress theme

## Changelog

### 0.3.x
- still a little bit alpha
- experimenting with meta boxes

### 0.2.x
- still a little bit alpha
- forced update (fixes versioning conflict)
- passes Theme Check basic tests

### 0.1.x
- alpha branch
- more messing around

### 0.0.x
- requires PHP 7.0+
- supports Git Updater
- messing around

## Theme Policy

HoverCraft is a lightweight standardized WordPress theme for simple client sites, WooCommerce sites, and long-term maintainability. It intentionally avoids page-builder-style complexity while still supporting practical customization through templates, widget areas, meta boxes, and the WordPress Customizer.

The theme should remain boring, explicit, and easy to maintain. New features should improve repeatable client work without turning HoverCraft into a generic layout builder, content modeling system, or SEO/schema plugin.

### Core Philosophy

- Keep the theme lightweight, reusable, and predictable.
- Prefer simple WordPress conventions over clever abstractions.
- Support fast client builds without depending on page builders.
- Keep templates, widget areas, meta boxes, and Customizer settings understandable.
- Avoid features that make the theme harder to audit, refactor, or maintain.

### Customizer Policy

Customizer settings should control global design, layout, branding, typography, colors, WooCommerce presentation, and other site-wide defaults.

Customizer settings should not become page-specific content modeling, structured data management, or a replacement for proper plugins.

### Meta Box Policy

Meta boxes are acceptable when they support narrow, intentional, page-specific presentation behavior. Good examples include hiding a title, overriding a visual section, or managing structured rows for a specific page template.

Meta boxes should not become a generic section builder. Do not add meta boxes unless they map to a specific template, specific visual behavior, or a clearly limited editing need.

### Widget Area Policy

Widget areas are for reusable content zones and simple layout regions. They should remain predictable and tied to real theme locations.

Avoid adding widget areas speculatively. Add them only when they support a known template, layout, or reusable client pattern.

### Structured Data Policy

Business data, SEO systems, schema systems, review data, FAQ data, location data, and reusable content models should generally belong in plugins, not the theme.

The theme may output clean markup and support narrow presentation-related metadata, but it should not become the long-term storage layer for business or SEO data.

### Comment Policy

Comments should make HoverCraft easier to scan during audits without adding noise. Use comments to explain real code sections, functions, template structure, or intentional exceptions.

- Use concise, helpful comments only where they improve readability.
- Add comments above code blocks or functions when they clarify the purpose of the code.
- Keep normal PHP comments lowercase and single-line using `//`.
- Do not use PHP docblocks or multi-line PHP comments for ordinary code.
- Keep required WordPress file headers when WordPress needs them, including `Template Name` headers.
- Add trailing comments to major template closers, including major HTML closing tags and PHP `endif`, `endwhile`, `endforeach`, `endfor`, and `endswitch` closers.
- Avoid trailing comments on ordinary PHP logic unless the comment marks a template closer.
- Use normal CSS comments inside raw CSS or PHP-generated CSS, because CSS does not support `//` comments.
- Remove dead commented-out code instead of preserving it as a comment.

### Page Builder Policy

HoverCraft is intentionally anti-page-builder. It should not chase page-builder parity or add generic drag-and-drop section systems.

The goal is simple, fast, maintainable WordPress sites using a small set of reliable templates, widget areas, Customizer settings, and narrow meta boxes where appropriate.

### Editing And Refactoring Rules

- Preserve existing template behavior unless the change explicitly targets it.
- Prefer boring, explicit, maintainable PHP over clever abstraction.
- Maintain PHP backwards compatibility to PHP 7.0 unless the minimum requirement is intentionally changed.
- Avoid fancy modern PHP syntax when simpler code is clearer, including ternary operators and null coalescing operators.
- Add `ABSPATH` guards to PHP files when appropriate.
- Keep comments concise, lowercase, and useful during audits.
- Keep WooCommerce support lightweight and presentation-focused.
- Keep Customizer settings focused on global design and layout defaults.
- Keep meta boxes focused on specific templates or narrow visual behavior.
- Keep widget areas tied to real theme locations.
- Keep business data, schema systems, SEO systems, and reusable content models out of the theme unless there is a narrow presentation reason.
- Avoid speculative features, unused abstractions, and client-specific bloat.
- Keep files, functions, comments, and naming easy to scan during future audits.
