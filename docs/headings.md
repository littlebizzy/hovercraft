# Headings Policy

True content headings should use one consistent sitewide typography and spacing system across HoverCraft.

Core WordPress pages, posts, archives, WooCommerce product pages, and bbPress views should use the global heading font family, font size, font weight, line height, margin, and spacing rules for real `h1`, `h2`, `h3`, `h4`, and `h5` content headings. Plugin-specific selectors should not redefine true heading typography or spacing.

Do not create separate heading font sizes, font weights, margins, or title scales for WooCommerce product titles, bbPress titles, archive titles, post titles, or other template-specific content headings. Product titles and plugin page titles are still true content headings and should remain aligned with the global heading Customizer settings.

Plugin-specific CSS may only remove plugin defaults that interfere with the global heading system, such as unwanted padding, floats, clearing, borders, pseudo-elements, or inherited plugin styling. If true headings feel too large, too small, too heavy, or too spaced out, adjust the global heading defaults instead of special-casing one template.

Small component titles are different from true content headings. Card titles, product-grid item titles, widget titles, form section labels, cart-summary labels, forum row titles, and similar compact UI labels may use component-specific styling when needed for layout, density, readability, or plugin compatibility.

Hero H1 titles should use fixed presentation styling for readability and contrast. Hero H1 text should remain `#ffffff`, should use `font-weight: 700`, and may use hero-specific spacing because hero titles sit inside visual banner areas instead of normal article flow. These fixed hero styles are intentional and should not be treated as conflicts with the global page H1 system.

Use title classes only when they are useful hooks. Singular content titles should use `entry-title`, archive titles should use `archive-title`, search result headings should use `search-title`, and error or static page headings may use `page-title` when appropriate.
