# Breadcrumb Policy

HoverCraft uses one custom breadcrumb system across the theme.

Native plugin breadcrumb output should remain disabled when HoverCraft already provides the breadcrumb trail. This keeps markup, spacing, colors, typography, and schema behavior consistent.

Breadcrumb reset CSS is acceptable when it only prevents plugin defaults from leaking back into the design. These selectors should preserve HoverCraft's unified breadcrumb system instead of creating another breadcrumb style.

Breadcrumbs should support normal site pages, posts, archives, search results, product pages, product archives, forum pages, topic pages, and fallback current-page states.

Unknown endpoints should fall back to a safe current-page breadcrumb instead of failing silently.

Breadcrumb icons are not part of the current HoverCraft breadcrumb system. Breadcrumbs should remain text-based unless a future design decision intentionally restores icons.
