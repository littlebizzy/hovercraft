# Layout Policy

HoverCraft layout code should stay boring, modern, and easy to audit.

## Content Widths

HoverCraft is intentionally designed around the default WordPress `medium_large` image size, which exists on normal WordPress sites and uses a 768px width by default.

The main readable content column should preserve this 768px design anchor so featured images, inline images, and editor-added media align predictably without forcing unnecessary browser scaling.

The desktop layout breakpoint is 1200px. This breakpoint is intentional because it supports a 768px primary content column, a 40px layout gap, and a 392px sidebar inside the standard 1200px desktop container.

Sidebar layouts should use the normal primary content column beside the sidebar.

Wide no-sidebar layouts may use the full desktop container.

Narrow no-sidebar layouts may intentionally reuse the 768px readable content width when the page should feel aligned with normal post content.

Avoid changing the 1200px breakpoint, 768px primary column, or sidebar math unless the theme is intentionally moving away from its WordPress `medium_large` image-size foundation.

## Layout Methods

Prefer modern CSS layout primitives for theme structure.

Use flexbox for one-dimensional alignment such as left/right header strips, footer rows, inline controls, tabs, horizontal action groups, and compact component alignment.

Use CSS grid only when a component is truly two-dimensional, such as card grids, product grids, column layouts, or layouts where rows and columns both matter.

Avoid `display: table`, `display: table-cell`, float-based layout, and clear-float markup for new layout work.

Existing table, float, or clearfix patterns should be replaced when a related component is being actively cleaned up and the replacement is straightforward.

Do not add `<div class="clear"></div>` or similar markup for new layout work. If a layout needs clearing, prefer fixing the layout model instead of adding clearing markup.

## Breakpoints

Keep mobile and desktop behavior explicit.

Breakpoint-specific layout CSS should generally use both `max-width: 1199px` and `min-width: 1200px` blocks so mobile and desktop behavior stay easy to audit.

Shared values may live outside breakpoint blocks when that makes the CSS cleaner, lighter, and does not hide meaningful mobile or desktop differences.

Do not create empty breakpoint blocks or duplicate identical declarations just to satisfy the breakpoint convention.

Prefer explicit mobile and desktop blocks when values differ, and shared base declarations when values are truly identical.

## Header Layouts

HoverCraft supports a small set of global header layout patterns through the Customizer. Header layouts should solve real navigation and branding needs without becoming a page-builder-style header system.

The `hovercraft_header_layout` setting currently supports `inline` and `stacked`. The default `inline` layout keeps branding and desktop navigation on one row for existing sites. The `stacked` layout keeps branding on the top row and places desktop navigation on a separate full navigation row below it for larger menus and more functional store headers.

Header layout template parts should stay explicit and easy to audit. The shared dispatcher is `template-parts/header/navigation.php`, while the actual layout markup lives in `template-parts/header/navigation-inline.php` and `template-parts/header/navigation-stacked.php`.

Mobile behavior should stay conservative when adding desktop header layout options. A desktop layout option should not unexpectedly redesign mobile headers unless that mobile behavior is intentionally planned and documented.

## Header Strips

Header strips such as topbar and preheader should use consistent structure and behavior.

Use a wrapper ID for the unique region, an `.inner` container for the width and alignment boundary, and side-specific child classes for layout.

For two-column header strips on desktop, the left side should usually fit its content and the right side should fill the remaining space.

For one-column header strips, the single active widget area should render centered instead of pretending to be a left or right column.

Do not rename stable public selectors casually. Existing selectors such as `#topbar`, `.topbar-left`, `.topbar-right`, `.topbar-center`, `#preheader`, `.preheader-left`, `.preheader-right`, and `.preheader-center` should remain stable unless there is a deliberate breaking refactor.
