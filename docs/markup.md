# Markup Policy

IDs, classes, and structural markup should make HoverCraft easier to style, audit, and extend without creating unnecessary theme-specific noise.

Use semantic HTML elements when they clearly match the content structure. Real posts and search results should use `article` wrappers when the wrapper represents one WordPress entry. Breadcrumbs should use `nav` and ordered lists. Navigation should use `nav` when it represents site navigation.

Use WordPress standard classes and IDs when they provide useful compatibility hooks. Real WordPress entries may use `id="post-<?php the_ID(); ?>"`, `post_class()`, `entry-title`, `entry-summary`, and `entry-content` where appropriate.

Reserve WordPress entry classes for real WordPress entries and real page or post content. Normal posts, pages, archives, search results, category portal loops, and forum intro page content may use entry classes when appropriate.

Do not add entry classes to hero snippets, FAQ bullets, widget-style cards, navigation labels, related-posts section headings, mobile menu headings, or other compact UI components just because they contain a title, excerpt, or content-like text.

Preserve existing visual classes when they control real theme styling. Custom classes such as `post-tease-archive` and `post-excerpt-archive` are acceptable because they are HoverCraft visual hooks.

Prefer classes for repeated styling hooks and IDs for unique page structure, anchor targets, JavaScript targets, accessibility relationships, or historically stable layout regions. Avoid adding IDs to repeated elements. Avoid duplicate IDs.

Do not rename long-standing IDs or classes casually. IDs such as `main`, `primary`, `primary-wide`, `primary-center`, `content-wrapper`, `content-padded`, and `content-wide` are part of the theme's layout contract.

Do not add classes just to make markup look more complete. Add a class when it supports styling, plugin compatibility, accessibility, JavaScript behavior, WordPress standards, or future audits.
