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

### Layout Policy

HoverCraft is intentionally designed around the default WordPress `medium_large` image size, which exists on normal WordPress sites and uses a 768px width by default. The main readable content column should preserve this 768px design anchor so featured images, inline images, and editor-added media align predictably without forcing unnecessary browser scaling.

The desktop layout breakpoint is 1200px. This breakpoint is intentional because it supports a 768px primary content column, a 40px layout gap, and a 392px sidebar inside the standard 1200px desktop container.

Sidebar layouts should use the normal primary content column beside the sidebar. Wide no-sidebar layouts may use the full desktop container. Narrow no-sidebar layouts may intentionally reuse the 768px readable content width when the page should feel aligned with normal post content.

Avoid changing the 1200px breakpoint, 768px primary column, or sidebar math unless the theme is intentionally moving away from its WordPress `medium_large` image-size foundation.

Breakpoint-specific layout CSS should generally use both `max-width: 1199px` and `min-width: 1200px` blocks so mobile and desktop behavior stay easy to audit. Shared values may live outside breakpoint blocks when that makes the CSS cleaner, lighter, and does not hide meaningful mobile or desktop differences.

Do not create empty breakpoint blocks or duplicate identical declarations just to satisfy the breakpoint convention. Prefer explicit mobile and desktop blocks when values differ, and shared base declarations when values are truly identical.

### Corner Radius Policy

HoverCraft should use square or lightly softened corners by default. The theme should feel clean, practical, and WordPress-native, not overly bubbly, app-like, or page-builder-styled.

Corner radius should be intentional and consistent across related UI pieces. Buttons, calls to action, form fields, tabs, product cards, widgets, sidebar blocks, notices, thumbnails, and island-style layout sections should not each invent their own unrelated corner shape.

Use these general tiers unless a specific component has a strong reason to differ:

- `0px` for structural containers, tables, classic content boxes, tab seams, and places where hard alignment matters.
- `2px` to `4px` for buttons, form fields, selects, tabs, small notices, and compact WooCommerce controls.
- `4px` to `8px` for product cards, widgets, sidebar boxes, media frames, and island-style sections that need a subtle card feeling.
- Avoid large pill radiuses except for deliberately small badges, labels, counters, or compact status chips.

Tabs should look like tabs. When using tabbed interfaces, the active tab may visually connect to the content area, while inactive tabs may use a subtle background and border. Avoid making tabs look like unrelated buttons or plain navigation links unless the design intentionally calls for a minimal underline style.

Buttons and calls to action should normally share the same radius family as form controls so checkout, product, cart, search, and comment actions feel related. Primary CTAs may use stronger color and weight, but should not use a radically different corner style without a clear theme-wide reason.

Island-style layouts should use radius sparingly. If a section, widget, or sidebar island has a border, background, shadow, or padding, its radius should be subtle enough to preserve the theme's classic WordPress layout rhythm.

### Breadcrumb Policy

HoverCraft uses one custom breadcrumb system for core WordPress, WooCommerce, and bbPress contexts.

Native WooCommerce and bbPress breadcrumbs should remain disabled so breadcrumb markup, spacing, schema, colors, and typography stay uniform across the theme.

Breadcrumbs should support common contexts including:

- WordPress posts, pages, hierarchical pages, categories, tags, taxonomies, custom post type archives, author archives, date archives, search results, and 404 pages.
- WooCommerce shop, cart, checkout, order-pay, order-received, account pages, account endpoints, product searches, product categories, product tags, product attributes, product taxonomies, and single products.
- bbPress forum archives, forums, topics, replies, edit topic, edit reply, topic tags, topic tag edit, views, search, user profiles, subscriptions, favorites, topics, replies, and engagements.

Unknown plugin or extension endpoints should fall back to a safe current-page breadcrumb instead of failing silently.

### WooCommerce Product Layout Policy

Single product pages should use HoverCraft's desktop rhythm instead of a separate WooCommerce-specific layout system.

Desktop single product layout should generally use:

- 1200px product container.
- 392px product gallery column.
- 40px gap.
- 768px product summary column.
- 1200px description, metadata, reviews, and related products sections.

The product gallery should remain visually controlled so product images do not dominate the page. The product summary should receive the wider 768px content area so titles, short descriptions, quantity controls, add-to-cart buttons, and metadata have enough room.

Related products on single product pages should remain visually lighter than the main product area. Desktop related products should generally use four columns inside the 1200px product section unless a future layout policy intentionally changes the product grid globally.

Mobile product layouts should remain stacked and full-width.

### Customizer Policy

Customizer settings should control global design, layout, branding, typography, colors, WooCommerce presentation, and other site-wide defaults.

Customizer settings should not become page-specific content modeling, structured data management, or a replacement for proper plugins.

### Meta Box Policy

Meta boxes are acceptable when they support narrow, intentional, page-specific presentation behavior. Good examples include hiding a title, overriding a visual section, or managing structured rows for a specific page template.

Meta boxes should not become a generic section builder. Do not add meta boxes unless they map to a specific template, specific visual behavior, or a clearly limited editing need.

### Widget Area Policy

Widget areas are for reusable content zones and simple layout regions. They should remain predictable and tied to real theme locations.

Repeated visual sections should prefer one reusable widget area that renders each widget as an item, instead of many numbered widget areas.

Avoid adding widget areas speculatively. Add them only when they support a known template, layout, or reusable client pattern.

### Structured Data Policy

Business data, SEO systems, schema systems, review data, FAQ data, location data, and reusable content models should generally belong in plugins, not the theme.

The theme may output clean markup and support narrow presentation-related metadata, but it should not become the long-term storage layer for business or SEO data.

### AI / LLM Agent Editing Policy

Small intended changes must produce small diffs. Do not rebuild full files from partial context.

For version bumps, fetch the full current file, replace only the exact version string, save the full file, and verify the diff. If the diff changes more than the version line, redo the patch.

For cleanup patches, compare the final diff against the stated goal. Unrelated removals, missing includes, renamed paths, or broad rewrites are not acceptable for narrow cleanup tasks.

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
