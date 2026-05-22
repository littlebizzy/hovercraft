# Layout Policy

HoverCraft is intentionally designed around the default WordPress `medium_large` image size, which exists on normal WordPress sites and uses a 768px width by default. The main readable content column should preserve this 768px design anchor so featured images, inline images, and editor-added media align predictably without forcing unnecessary browser scaling.

The desktop layout breakpoint is 1200px. This breakpoint is intentional because it supports a 768px primary content column, a 40px layout gap, and a 392px sidebar inside the standard 1200px desktop container.

Sidebar layouts should use the normal primary content column beside the sidebar. Wide no-sidebar layouts may use the full desktop container. Narrow no-sidebar layouts may intentionally reuse the 768px readable content width when the page should feel aligned with normal post content.

Avoid changing the 1200px breakpoint, 768px primary column, or sidebar math unless the theme is intentionally moving away from its WordPress `medium_large` image-size foundation.

Breakpoint-specific layout CSS should generally use both `max-width: 1199px` and `min-width: 1200px` blocks so mobile and desktop behavior stay easy to audit. Shared values may live outside breakpoint blocks when that makes the CSS cleaner, lighter, and does not hide meaningful mobile or desktop differences.

Do not create empty breakpoint blocks or duplicate identical declarations just to satisfy the breakpoint convention. Prefer explicit mobile and desktop blocks when values differ, and shared base declarations when values are truly identical.
