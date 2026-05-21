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

### Headings / Titles Policy

True content headings should use one consistent sitewide typography and spacing system across HoverCraft.

Core WordPress pages, posts, archives, WooCommerce product pages, and bbPress views should use the global heading font family, font size, font weight, line height, margin, and spacing rules for real `h1`, `h2`, `h3`, `h4`, and `h5` content headings. Plugin-specific selectors should not redefine true heading typography or spacing.

Do not create separate heading font sizes, font weights, margins, or title scales for WooCommerce product titles, bbPress titles, archive titles, post titles, or other template-specific content headings. Product titles and plugin page titles are still true content headings and should remain aligned with the global heading Customizer settings.

Plugin-specific CSS may only remove plugin defaults that interfere with the global heading system, such as unwanted padding, floats, clearing, borders, pseudo-elements, or inherited plugin styling. If true headings feel too large, too small, too heavy, or too spaced out, adjust the global heading defaults instead of special-casing one template.

Duplicate plugin-specific heading reset CSS is allowed when it exists only to neutralize WooCommerce, bbPress, or other submodule/plugin defaults that could interfere with HoverCraft's global heading system. These selectors may duplicate broader HoverCraft heading coverage for fallback stability, but they should only reset disruptive plugin behavior such as clearing, padding, margins, borders, floats, pseudo-elements, or inherited plugin layout rules. They should not create separate WooCommerce, bbPress, or plugin-specific content heading typography, colors, weights, sizes, or title systems.

Small component titles are different from true content headings. Card titles, product-grid item titles, widget titles, form section labels, cart-summary labels, forum row titles, and similar compact UI labels may use component-specific styling when needed for layout, density, readability, or plugin compatibility. These styles should stay narrow, intentional, and should not be reused as an alternate content-heading system.

Hero H1 titles should use fixed presentation styling for readability and contrast. Hero H1 text should remain `#ffffff`, should use `font-weight: 700`, and may use hero-specific spacing because hero titles sit inside visual banner areas instead of normal article flow. These fixed hero styles are intentional and should not be treated as conflicts with the global page H1 system. Normal WordPress, WooCommerce, and bbPress page H1 titles should still follow the global H1 typography system.

Use normal WordPress title and entry classes where they improve compatibility without changing the design. Singular content titles should use `entry-title`, archive titles should use `archive-title`, search result headings should use `search-title`, and error or static page headings may use `page-title` when appropriate. Loop item titles should usually keep their existing heading level but may add `entry-title` for standard hooks.

Looped posts and search results should prefer `article` wrappers with `id="post-<?php the_ID(); ?>"` and `post_class( 'post-tease-archive' )` when the wrapper represents a real WordPress post. Excerpts in loops should use `entry-summary` alongside existing theme classes, and singular post/page content may use `entry-content` when the wrapper does not disrupt existing layout or styling.

Do not add WordPress classes just to add markup noise. Use standard classes when they provide useful hooks for WordPress, plugins, SEO tools, accessibility tooling, or future audits. Preserve existing visual classes such as `post-tease-archive` and `post-excerpt-archive` so CSS behavior does not change.

Reserve WordPress entry classes for real WordPress entries and real page/post content. Normal posts, pages, archives, search results, category portal loops, and forum intro page content may use `entry-title`, `entry-summary`, `entry-content`, `article`, and `post_class()` when appropriate. Component output should stay custom unless it represents a real entry. Do not add `entry-title`, `entry-summary`, or `entry-content` to hero snippets, FAQ bullets, widget-style cards, navigation labels, related-posts section headings, mobile menu headings, or other compact UI components just because they contain a title, excerpt, or content-like text.

WooCommerce and bbPress own much of their internal title markup. Prefer narrow CSS fallback selectors for WooCommerce and bbPress title cleanup instead of replacing plugin templates unless a real template override is already justified. Plugin title fallbacks should align plugin output with HoverCraft's global heading system, not create alternate plugin title systems.

### Corner Radius Policy

HoverCraft uses subtly softened corners as a core design standard. The goal is timeless, refined, lightly modern WordPress design: clean and professional, without looking bubbly, pill-heavy, app-like, or page-builder styled.

Use fixed corner radius values across major UI groups so WordPress, WooCommerce, and bbPress feel like one design system.

Use explicit `border-radius` declarations on relevant elements that have a meaningful corner policy, including elements that should remain square. This prevents accidental inheritance or plugin leakage and makes future audits easier. Do not omit `border-radius` merely because the intended value is `0`.

Use radius only when the visible shape of an element is part of the design. Radius is most appropriate when an element has a visible border, shadow, strong contrasting background, contained card surface, or other clear box shape.

Do not add visual rounding just because an element has padding or spacing. Normal article-flow sections should stay square when their shape is not intended to read as a card. This includes blockquotes, after-byline areas, post meta areas, plain widget-area sections, full-width sections, text sections, separators, and document-style content treatments.

- `0px` for images, thumbnails, galleries, HTML tables, table cells, horizontal rules, separators, full-width bars, embedded media, iframe embeds, structural content edges, and normal article-flow sections that are not intended to read as cards.
- `4px` for buttons, calls to action, form fields, selects, textareas, search fields, quantity controls, add-to-cart controls, checkout controls, comment forms, notices, alerts, messages, pagination links, tabs, account navigation items, bbPress forms, bbPress actions, compact controls, and small overlay captions.
- `8px` for visible card-like containers, including widgets with visible box styling, sidebar boxes, product cards, forum cards, topic cards, reply cards, content cards, island-style layout sections, boxed template sections, cart boxes, cross-sell boxes, account dashboard boxes, author boxes, tile cards, column cards, and reusable theme panels.
- `999px` only for intentionally circular elements, including small badges, counters, labels, sale chips, status chips, tiny inline metadata pills, author avatars, byline avatars, comment avatars, other intentionally circular identity photos, range slider thumbs, and small icon-only controls such as remove icons.

Normal images should remain square. Avatar and identity photos are the exception because circular author photos are a common WordPress pattern and help separate personal identity from regular content media.

Do not use arbitrary one-off radius values. If a new component looks like a button or form control, use `4px`. If it looks like a visible card, widget, panel, or island, use `8px`. If it is an image, table, structural edge, plain article-flow section, or document-style content area, use `0px`. If it is an intentionally circular element such as an avatar, identity photo, badge, counter, range slider thumb, or small icon-only control, use `999px`.

Tabs should use `4px` on the top corners when they visually connect to a tab panel or tab boundary. Bottom tab corners should stay square when needed to preserve the tab seam.

Primary calls to action may use stronger color, font weight, spacing, or border treatment, but should still use the same `4px` radius as normal buttons and form controls.

### Forms / Form Elements Policy

Forms should use one consistent sitewide control system across HoverCraft, WooCommerce, bbPress, comments, search, widgets, and normal WordPress templates.

Real form fields include text inputs, email inputs, URL inputs, password inputs, search inputs, telephone inputs, number inputs, selects, textareas, file inputs, range inputs, checkboxes, radio buttons, reset buttons, and submit buttons. These controls should feel like the same family unless a plugin requires a narrow compatibility override.

Standard text fields, selects, and textareas should use boring, modern defaults: white background, default text color, inherited font family, `16px` font size, `1.5` line height, `46px` minimum height, `10px 16px` padding, and `4px` radius. These values are intentional because they are readable, touch-friendly, visually calm, and not overly large for a simple WordPress theme.

Field boundaries should use one consistent visual model. HoverCraft currently prefers `border: 0` with an inset `box-shadow` boundary because it avoids layout shifts and makes normal, focus, invalid, validated, readonly, and disabled states easier to keep consistent. Normal field boundaries should use the theme's standard light neutral border color, currently `#e0e0e0`, instead of the darker default text color. Do not mix physical borders and inset shadows for the same class of normal fields unless the whole shared field model is intentionally changed.

Focus states should be visible, consistent, and accessible. Text fields, selects, and textareas should use a stronger inset boundary with the default link color, normally `2px`, rather than a glow effect or a separate one-off outline. Checkbox and radio focus states may use browser-native controls with a simple outline instead of custom fake controls.

Checkboxes and radio buttons should remain native browser controls unless there is a clear reason to customize them. Avoid replacing them with complex custom UI, pseudo-elements, icon fonts, or JavaScript-only behavior. They should align cleanly with labels and keep normal keyboard behavior.

Select fields should remain simple and reliable. Native selects are preferred for normal theme forms, WooCommerce variation selectors, quantity selectors, checkout fields, and account fields. Custom select libraries or plugin-generated select wrappers may receive compatibility styling, but they should not define a second visual system.

Select fields that use HoverCraft's normal visual field system should use the preferred custom chevron-style downward SVG caret instead of inconsistent browser-native arrows or filled triangle icons. The native arrow should be disabled with `appearance: none`, `-webkit-appearance: none`, and `-moz-appearance: none`; the chevron should be a stroked V shape using the default text color, should sit at `right 14px center`, use `16px` background size, and reserve right-side space with `10px 44px 10px 16px` padding. This applies to normal selects, WooCommerce variation selects, WooCommerce quantity selects, and WooCommerce ordering selects unless a narrow plugin compatibility issue requires an exception.

Submit buttons, reset buttons, and real form buttons are part of the forms policy. They should generally use `16px` font size, `600` font weight, `12px 20px` padding, `4px` radius, the default link color, and the default hover color unless a specific plugin state requires a defensive override. They should look like clear form actions, not oversized marketing CTAs.

Marketing calls to action are not covered by this forms policy. CTA links, hero buttons, product-card action links, banner buttons, and other non-form promotional controls may have their own presentation policy, but they should not accidentally redefine normal form submit/input behavior.

WooCommerce and bbPress form CSS may override layout, width, clearing, table wrappers, plugin validation states, hidden accessibility labels, and plugin-specific spacing. These plugin overrides should protect the global form system from leaked plugin CSS, not create a separate WooCommerce or bbPress field design.

Validation, readonly, disabled, hover, and focus states should use the same visual model as normal fields whenever possible. If the field boundary uses inset shadow, then plugin validation states should also use inset shadow rather than switching to physical borders. If the field boundary uses a real border in the future, validation states should follow that same model consistently.

Do not create one-off field sizes, font sizes, border colors, border widths, shadows, padding systems, or select styles for individual templates unless the component has a real layout constraint. If one template's fields look wrong, first adjust the shared form baseline or add a narrow plugin reset that preserves the shared design.

Header search bars, fullscreen search modals, and other visually integrated search experiences may use layout-specific dimensions when needed, but they should still preserve the same general field family unless there is a deliberate visual reason not to. These exceptions should stay narrow and should not leak back into normal form fields.

### Breadcrumb Policy

HoverCraft uses one custom breadcrumb system for core WordPress, WooCommerce, and bbPress contexts.

Native WooCommerce and bbPress breadcrumbs should remain disabled so breadcrumb markup, spacing, schema, colors, and typography stay uniform across the theme.

Duplicate native breadcrumb reset CSS is allowed when it exists only to neutralize WooCommerce, bbPress, or other submodule/plugin breadcrumb defaults if native plugin breadcrumbs ever reappear because of a plugin update, filter change, template change, or third-party override. These selectors may duplicate broader HoverCraft breadcrumb coverage for fallback stability, but they should only preserve HoverCraft's unified breadcrumb spacing, colors, typography, and layout. They should not create a second breadcrumb design system.

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
