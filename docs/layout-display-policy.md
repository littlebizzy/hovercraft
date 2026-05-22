# Layout and Display Policy

HoverCraft layout code should stay boring, modern, and easy to audit.

## Layout Methods

Prefer modern CSS layout primitives for theme structure.

Use flexbox for one-dimensional alignment such as left/right header strips, footer rows, inline controls, tabs, horizontal action groups, and compact component alignment.

Use CSS grid only when a component is truly two-dimensional, such as card grids, product grids, column layouts, or layouts where rows and columns both matter.

Avoid `display: table`, `display: table-cell`, float-based layout, and clear-float markup for new layout work.

Existing table, float, or clearfix patterns should be replaced when a related component is being actively cleaned up and the replacement is straightforward.

Do not add `<div class="clear"></div>` or similar markup for new layout work. If a layout needs clearing, prefer fixing the layout model instead of adding clearing markup.

## Breakpoints

Keep mobile and desktop behavior explicit.

HoverCraft generally uses `max-width: 1199px` for mobile and `min-width: 1200px` for desktop.

Shared layout rules may live outside media queries when they truly apply to both breakpoints.

Do not create empty breakpoint blocks or duplicate identical declarations only to satisfy the breakpoint convention.

## Header Strips

Header strips such as topbar and preheader should use consistent structure and behavior.

Use a wrapper ID for the unique region, an `.inner` container for the width and alignment boundary, and side-specific child classes for layout.

For two-column header strips on desktop, the left side should usually fit its content and the right side should fill the remaining space.

For one-column header strips, the single active widget area should render centered instead of pretending to be a left or right column.

Do not rename stable public selectors casually. Existing selectors such as `#topbar`, `.topbar-left`, `.topbar-right`, `.topbar-center`, `#preheader`, `.preheader-left`, `.preheader-right`, and `.preheader-center` should remain stable unless there is a deliberate breaking refactor.
