# Widgets Policy

HoverCraft uses widget areas as practical reusable content zones, not as a page-builder system.

Widget areas should stay tied to real theme locations, predictable reusable sections, or repeated client-site patterns. They should make simple sites easier to build and maintain without turning the theme into a generic drag-and-drop layout builder.

Modern CSS makes widget areas more useful than they were when WordPress originally introduced widgets. Flexbox, grid, responsive media queries, and predictable wrapper classes let HoverCraft turn simple widget output into columns, tiles, footer sections, header utilities, and WooCommerce support areas without requiring a page builder plugin.

This is part of HoverCraft's classic-theme philosophy: use normal WordPress features, explicit PHP templates, generated CSS, and focused widget areas before adding heavier layout systems.

## Purpose

Widget areas are for reusable content zones and simple layout regions. They should remain predictable and tied to real theme locations.

Do not add widget areas speculatively. Add them only when they support a known theme location, template, layout, WooCommerce location, or reusable client pattern.

Widget areas should not become page-builder slots, a content modeling system, or a replacement for custom post types.

Widget areas should not be required for critical theme, WooCommerce, navigation, cart, checkout, accessibility, login, search, or other basic functionality. Core features should work automatically through theme templates, hooks, and explicit PHP logic. Widgets are for additional content, supporting messages, reusable blocks, and optional enhancements.

Repeated visual sections should prefer one reusable widget area that renders each widget as an item, instead of many numbered widget areas.

## Registration Pattern

Normal widget areas should use `hovercraft_register_widget_area()` from `inc/widgets/widget-areas.php`.

Use this naming pattern:

| Field | Pattern | Example |
|---|---|---|
| Name | Human-readable location name | `After Add To Cart` |
| ID | `hovercraft_` prefix with underscores | `hovercraft_after_add_to_cart` |
| Class | `widget-` prefix with dashes | `widget-after-add-to-cart` |

The sidebar ID should use the `hovercraft_` namespace. The widget wrapper class should stay short and readable, following the existing `widget-*` pattern.

Use separate widget files under `inc/widgets/` when a widget area has special registration, rendering, fallback, migration, or hook behavior. Keep widget-area files in the widgets tree even when they render into WooCommerce or another theme area.

## Rendering Pattern

Widget-area output should avoid unnecessary wrapper markup when the area is disabled or empty. If a widget area has no active widgets, it should not render visible layout spacing just because the location exists.

When a widget area should render without widget titles, use `hovercraft_dynamic_sidebar_without_title()` instead of repeating `add_filter( 'widget_title', '__return_false' )`, `dynamic_sidebar()`, and `remove_filter()` in templates.

When a widget area renders into a plugin hook, keep the registration and render helper in `inc/widgets/` unless the behavior truly belongs to a plugin-specific system.

The WooCommerce `After Add To Cart` area intentionally renders inside the cart form. See `docs/woocommerce.md` for its placement and content restrictions.

## Visibility

A widget area may be hidden from the front end when it is disabled in the Customizer. This is useful because site builders can keep widget content saved without deleting it from the widget area.

Customizer visibility settings should control whether a widget area renders, not whether the saved widgets exist. This keeps content management reversible and safer for client sites.

This is good practice when the setting controls display behavior, responsive behavior, or optional sections. It lets users disable a visual section while preserving its content for later.

Do not require users to delete widget content just to temporarily hide a section.

## Compact Header Widgets

Compact header widget regions may normalize basic `ul` and `li` output because menus, social links, switchers, and simple inline widget output are common content in these locations.

For compact header strips, removing default list margin, bullets, and first-item spacing is acceptable when the region is intended for inline utility content.

Do not apply compact list cleanup broadly to normal article content, sidebar widgets, footer widgets, or long-form widget areas where vertical lists may be expected.

Header Center and Header Aside are optional desktop widget areas in the stacked header branding row. They are intended for larger functional or visual header content such as search forms, language/currency/location switchers, trust badges, promo banners, countdowns, or similar compact commerce-focused widgets. General text utility content such as phone numbers, email links, login links, customer service links, social links, and text-only notices usually belongs in the topbar or preheader widget areas instead.

Header Center search forms should use the compact sidebar/control width and align toward the branding area by default. A future Customizer option should support Header Center alignment choices, such as left, center, or right, without requiring custom CSS.

Header Center and Header Aside should not be required to make WooCommerce cart access work. If WooCommerce is active, the theme should provide basic cart access through header template logic. Header widgets may add extra commerce messaging or optional store content, but they should not carry critical store navigation by themselves.

The WooCommerce header cart link should be hardcoded in approved header navigation layouts instead of depending on a cart widget. Its red notification pill should always render when WooCommerce cart access is available, including when the cart count is `0`, so the store cart entry remains visually consistent.

## Preheader Separators

The Preheader Menu Separator Customizer setting controls separators for WordPress menus rendered inside the Preheader Left and Preheader Right widget areas.

Supported values are `none`, `dot`, and `pipe`. The default should remain `none` to preserve existing sites. The generated CSS lives in `inc/css/header/preheader.php` and should keep separator spacing on the normal HoverCraft rhythm with `margin: 0 8px`.

The separator also supports explicit inline Custom HTML items through the `preheader-item` class. This is intended for short preheader snippets that need menu-style spacing without using dummy `#` menu links.

Example Custom HTML widget:

```html
<span class="preheader-item">Free Shipping</span>
<span class="preheader-item"><a href="/contact/"><strong>Contact Us</strong></a></span>
```

Do not target arbitrary `span` elements inside preheader widgets. Only `.preheader-item` should receive this behavior, so custom HTML widgets can still contain icons, badges, wrappers, shortcodes, scripts, or other markup without unexpected separators.

Do not type separators manually between `.preheader-item` elements. The Customizer setting should choose the separator character, and the generated CSS should apply consistent spacing for both `.menu > li` items and `.preheader-item` elements.

## Supported Widget Areas

### Global And Layout Areas

| Name | ID | Class |
|---|---|---|
| Topbar Left | `hovercraft_topbar_left` | `widget-topbar-left` |
| Topbar Right | `hovercraft_topbar_right` | `widget-topbar-right` |
| Preheader Left | `hovercraft_preheader_left` | `widget-preheader-left` |
| Preheader Right | `hovercraft_preheader_right` | `widget-preheader-right` |
| Header Center | `hovercraft_header_center` | `widget-header-center` |
| Header Aside | `hovercraft_header_aside` | `widget-header-aside` |
| Hero Snippet | `hovercraft_hero_snippet` | `widget-hero-snippet` |
| Hero Window | `hovercraft_hero_window` | `widget-hero-window` |
| Posthero (Adjust in Customizer) | `hovercraft_posthero` | `widget-posthero` |
| Home Premain Top | `hovercraft_home_premain_top` | `widget-home-premain-top` |
| Home Premain Bottom | `hovercraft_home_premain_bottom` | `widget-home-premain-bottom` |
| Home Postmain Top | `hovercraft_home_postmain_top` | `widget-home-postmain-top` |
| Home Postmain Bottom | `hovercraft_home_postmain_bottom` | `widget-home-postmain-bottom` |
| Sidebar | `hovercraft_sidebar` | `widget-sidebar` |
| Prefooter Top | `hovercraft_prefooter_top` | `widget-prefooter-top` |
| Prefooter Bottom | `hovercraft_prefooter_bottom` | `widget-prefooter-bottom` |
| Footer Column #1 | `hovercraft_footer_one` | `widget-footer-one` |
| Footer Column #2 | `hovercraft_footer_two` | `widget-footer-two` |
| Footer Column #3 | `hovercraft_footer_three` | `widget-footer-three` |
| Footer Column #4 | `hovercraft_footer_four` | `widget-footer-four` |
| Copyright | `hovercraft_copyright` | `widget-copyright` |
| Postcolumns Top | `hovercraft_postcolumns_top` | `widget-postcolumns-top` |
| Postcolumns Bottom | `hovercraft_postcolumns_bottom` | `widget-postcolumns-bottom` |
| After Byline | `hovercraft_after_byline` | `widget-after-byline` |
| After Loop | `hovercraft_after_loop` | `widget-after-loop` |

Header Center and Header Aside render only in the stacked header layout. They do not render in the inline header layout.

### WooCommerce Areas

| Name | ID | Class |
|---|---|---|
| After Add To Cart | `hovercraft_after_add_to_cart` | `widget-after-add-to-cart` |

The `After Add To Cart` widget area intentionally renders immediately after the WooCommerce add-to-cart button and inside the cart form. See `docs/woocommerce.md` for its placement and content restrictions.

WooCommerce widget areas are optional support areas for extra content such as trust messages, payment notices, shipping notes, shortcodes, sale notices, and reusable product-page messages. They should not be required for core store behavior such as cart access, checkout access, product purchasing, variation selection, or add-to-cart behavior.

### Repeating Layout Areas

| Name | ID | Wrapper Class |
|---|---|---|
| Tiles | `hovercraft_tiles` | `tile` |
| Columns | `hovercraft_columns` | `column` |
| ZigZag | `hovercraft_zigzag` | `zigzag-section widget-wrapper` or `zigzag-section-reverse widget-wrapper` |

Tiles, Columns, and ZigZag are preferred single widget areas that render each widget as a repeated visual item. This keeps modern layouts easier to maintain than many numbered widget areas.

### Legacy Widget Areas

Legacy widget areas are supported for migration and backward compatibility. Empty legacy areas should be hidden from the admin, and active legacy areas should be labeled as legacy so content can be moved into the preferred single-area pattern.

| Legacy Group | IDs |
|---|---|
| Tiles | `hovercraft_tile_one` through `hovercraft_tile_twenty` |
| Columns | `hovercraft_column_one` through `hovercraft_column_five` |
| ZigZag | `hovercraft_widget_area_zigzag`, `hovercraft_zigzag_one` through `hovercraft_zigzag_eleven` |

Legacy Tiles #1 through #12 are still rendered as a fallback when the preferred `hovercraft_tiles` area is empty. Tile #13 through Tile #20 are registered for migration visibility only.
