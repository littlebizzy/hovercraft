# Markup Policy

IDs, classes, and structural markup should make HoverCraft easier to style, audit, and extend without creating unnecessary theme-specific noise.

## Semantic Markup

Use semantic HTML elements when they clearly match the content structure.

Real posts and search results should use `article` wrappers when the wrapper represents one WordPress entry.

Breadcrumbs should use `nav` and ordered lists.

Navigation should use `nav` when it represents site navigation.

Do not replace clear existing layout wrappers with semantic elements just for novelty.

## WordPress Standard Hooks

Use WordPress standard classes and IDs when they provide useful compatibility hooks.

Real WordPress entries may use `id="post-<?php the_ID(); ?>"`, `post_class()`, `entry-title`, `entry-summary`, and `entry-content` where appropriate.

These hooks are useful for WordPress conventions, plugins, SEO tools, accessibility tooling, and future audits.

Reserve WordPress entry classes for real WordPress entries and real page/post content.

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
