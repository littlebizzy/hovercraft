# Markup Policy

IDs, classes, and structural markup should make HoverCraft easier to style, audit, and extend without creating unnecessary theme-specific noise.

## Semantic Markup

Use semantic HTML elements when they clearly match the content structure.

Real posts and search results should use `article` wrappers when the wrapper represents one WordPress entry.

Breadcrumbs should use `nav` and ordered lists.

Navigation should use `nav` when it represents site navigation.

Do not replace clear existing layout wrappers with semantic elements just for novelty.

## Template Readability

Template files should be easy to scan before they are clever.

Use blank lines to separate meaningful template sections such as document metadata, inline asset blocks, WordPress hooks, major wrapper markup, and template-part calls.

Avoid dense PHP and HTML switching when a few blank lines make the template easier to understand.

Template PHP should prefer clear local variables when they make nearby markup easier to read.

Do not move simple one-off template behavior into helpers just to reduce line count. A small readable block in the template is better than an abstract helper that hides obvious markup behavior.

Inline comments are acceptable when they label a specific block of template behavior.

Template files should read mostly like markup. Use functions and helpers for reusable logic, repeated behavior, or complex decisions.

Keep simple template-specific output close to the markup that depends on it.

## WordPress Standard Hooks

Use WordPress standard classes and IDs when they provide useful compatibility hooks.

Real WordPress entries may use `id="post-<?php the_ID(); ?>"`, `post_class()`, `entry-title`, `entry-summary`, and `entry-content` where appropriate.

These hooks are useful for WordPress conventions, plugins, SEO tools, accessibility tooling, and future audits.

Reserve WordPress entry classes for real WordPress entries and real page or post content.

Normal posts, pages, archives, search results, category portal loops, and forum intro page content may use `entry-title`, `entry-summary`, `entry-content`, `article`, and `post_class()` when appropriate.

Component output should stay custom unless it represents a real entry.

Do not add `entry-title`, `entry-summary`, or `entry-content` to hero snippets, FAQ bullets, widget-style cards, navigation labels, related-posts section headings, mobile menu headings, or other compact UI components just because they contain a title, excerpt, or content-like text.

## Stable Selectors

Preserve existing visual classes when they control real theme styling.

Custom classes such as `post-tease-archive` and `post-excerpt-archive` are acceptable because they are HoverCraft visual hooks.

When adding WordPress standard classes, add them alongside existing visual classes unless the old class is truly unused and intentionally removed.

Prefer classes for repeated styling hooks and IDs for unique page structure, anchor targets, JavaScript targets, accessibility relationships, or historically stable layout regions.

Avoid adding IDs to repeated elements.

Avoid duplicate IDs.

Search forms, labels, and other repeated controls should use generated unique IDs when multiple copies may appear on the same page.

Modal toggles and close controls should use real `<button type="button">` elements instead of clickable `<div>` elements with ARIA button roles. Modal wrappers should expose their dialog state with stable ARIA attributes, while repeated styling hooks should stay class-based.

Do not rename long-standing IDs or classes casually.

IDs such as `main`, `primary`, `primary-wide`, `primary-center`, `content-wrapper`, `content-padded`, and `content-wide` are part of the theme's layout contract.

Rename them only during a deliberate layout refactor with a full CSS/template scan.

Do not add classes just to make markup look more complete.

Add a class when it supports styling, plugin compatibility, accessibility, JavaScript behavior, WordPress standards, or future audits.

If a component already has a clear custom class and does not represent a real WordPress entry, keep it custom.

## Plugin Markup

WooCommerce and bbPress own much of their internal markup.

Prefer narrow CSS fallback selectors for plugin output unless a template override is already justified.

Plugin fallback selectors should align plugin markup with HoverCraft's design system, not create a second class system.
