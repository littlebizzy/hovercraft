# Breadcrumb Policy

HoverCraft uses one custom breadcrumb system for core WordPress, WooCommerce, and bbPress contexts.

Native WooCommerce and bbPress breadcrumbs should remain disabled so breadcrumb markup, spacing, schema, colors, and typography stay uniform across the theme.

## Plugin Resets

Duplicate native breadcrumb reset CSS is allowed when it exists only to neutralize WooCommerce, bbPress, or other plugin breadcrumb defaults if native plugin breadcrumbs ever reappear because of a plugin update, filter change, template change, or third-party override.

These selectors may duplicate broader HoverCraft breadcrumb coverage for fallback stability, but they should only preserve HoverCraft's unified breadcrumb spacing, colors, typography, and layout.

They should not create a second breadcrumb design system.

## Supported Contexts

Breadcrumbs should support common WordPress contexts including posts, pages, hierarchical pages, categories, tags, taxonomies, custom post type archives, author archives, date archives, search results, and 404 pages.

Breadcrumbs should support common WooCommerce contexts including shop, cart, checkout, order-pay, order-received, account pages, account endpoints, product searches, product categories, product tags, product attributes, product taxonomies, and single products.

Breadcrumbs should support common bbPress contexts including forum archives, forums, topics, replies, edit topic, edit reply, topic tags, topic tag edit, views, search, user profiles, subscriptions, favorites, topics, replies, and engagements.

Unknown plugin or extension endpoints should fall back to a safe current-page breadcrumb instead of failing silently.
