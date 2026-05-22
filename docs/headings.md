# Headings Policy

True content headings should use one consistent sitewide typography and spacing system across HoverCraft.

## True Content Headings

Core WordPress pages, posts, archives, WooCommerce product pages, and bbPress views should use the global heading font family, font size, font weight, line height, margin, and spacing rules for real `h1`, `h2`, `h3`, `h4`, and `h5` content headings.

Plugin-specific selectors should not redefine true heading typography or spacing.

Do not create separate heading font sizes, font weights, margins, or title scales for WooCommerce product titles, bbPress titles, archive titles, post titles, or other template-specific content headings.

Product titles and plugin page titles are still true content headings and should remain aligned with the global heading Customizer settings.

If true headings feel too large, too small, too heavy, or too spaced out, adjust the global heading defaults instead of special-casing one template.

## Plugin Heading Resets

Plugin-specific CSS may only remove plugin defaults that interfere with the global heading system, such as unwanted padding, floats, clearing, borders, pseudo-elements, or inherited plugin styling.

Duplicate plugin-specific heading reset CSS is allowed when it exists only to neutralize WooCommerce, bbPress, or other plugin defaults that could interfere with HoverCraft's global heading system.

These selectors may duplicate broader HoverCraft heading coverage for fallback stability, but they should only reset disruptive plugin behavior such as clearing, padding, margins, borders, floats, pseudo-elements, or inherited plugin layout rules.

They should not create separate WooCommerce, bbPress, or plugin-specific content heading typography, colors, weights, sizes, or title systems.

## Component Titles

Small component titles are different from true content headings.

Card titles, product-grid item titles, widget titles, form section labels, cart-summary labels, forum row titles, and similar compact UI labels may use component-specific styling when needed for layout, density, readability, or plugin compatibility.

These styles should stay narrow, intentional, and should not be reused as an alternate content-heading system.

## Hero H1 Titles

Hero H1 titles should use fixed presentation styling for readability and contrast.

Hero H1 text should remain `#ffffff`, should use `font-weight: 700`, and may use hero-specific spacing because hero titles sit inside visual banner areas instead of normal article flow.

These fixed hero styles are intentional and should not be treated as conflicts with the global page H1 system.

Normal WordPress, WooCommerce, and bbPress page H1 titles should still follow the global H1 typography system.

## Title Classes

Use title classes only when they are useful hooks.

Singular content titles should use `entry-title`, archive titles should use `archive-title`, search result headings should use `search-title`, and error or static page headings may use `page-title` when appropriate.

Loop item titles should usually keep their existing heading level but may add `entry-title` for standard hooks.

WooCommerce and bbPress own much of their internal title markup.

Prefer narrow CSS fallback selectors for WooCommerce and bbPress title cleanup instead of replacing plugin templates unless a real template override is already justified.

Plugin title fallbacks should align plugin output with HoverCraft's global heading system, not create alternate plugin title systems.
