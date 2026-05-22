# Widget Area Policy

HoverCraft widget areas should stay tied to real theme locations and predictable reusable content zones.

## Purpose

Widget areas are for reusable content zones and simple layout regions.

Do not add widget areas speculatively. Add them only when they support a known theme location, template, or reusable client pattern.

Widget areas should not become page-builder slots or a content modeling system.

Repeated visual sections should prefer one reusable widget area that renders each widget as an item, instead of many numbered widget areas.

## Template Usage

Widget-area template code should be easy to scan.

Cache repeated `is_active_sidebar()` checks into clear variables when a template needs multiple layout branches.

When only one of a left/right widget pair is active, render it in a centered branch instead of duplicating left/right layout markup unnecessarily.

When a widget area should render without widget titles, use a shared helper instead of repeating `add_filter( 'widget_title', '__return_false' )`, `dynamic_sidebar()`, and `remove_filter()` in templates.

## Visibility

Widget areas may be hidden by Customizer settings without deleting their saved widget content.

This is good practice when the setting controls display behavior, responsive behavior, or optional sections. It lets users disable a visual section while preserving its content for later.

Do not require users to delete widget content just to temporarily hide a section.

## Compact Header Widgets

Compact header widget regions may normalize basic `ul` and `li` output because menus, social links, and simple link lists are common widget content in these locations.

For compact header strips, removing default list margin, bullets, and first-item spacing is acceptable when the region is intended for inline utility content.

Do not apply compact list cleanup broadly to normal article content, sidebar widgets, footer widgets, or long-form widget areas where vertical lists may be expected.
