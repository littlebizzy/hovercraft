# Corner Radius Policy

HoverCraft uses subtly softened corners as a core design standard. The goal is timeless, refined, lightly modern WordPress design: clean and professional, without looking bubbly, pill-heavy, app-like, or page-builder styled.

Use fixed corner radius values across major UI groups so WordPress, WooCommerce, and bbPress feel like one design system.

Use explicit `border-radius` declarations on relevant elements that have a meaningful corner policy, including elements that should remain square. This prevents accidental inheritance or plugin leakage and makes future audits easier.

Do not omit `border-radius` merely because the intended value is `0`.

## When To Use Radius

Use radius only when the visible shape of an element is part of the design. Radius is most appropriate when an element has a visible border, shadow, strong contrasting background, contained card surface, or other clear box shape.

Do not add visual rounding just because an element has padding or spacing. Normal article-flow sections should stay square when their shape is not intended to read as a card.

This includes blockquotes, after-byline areas, post meta areas, plain widget-area sections, full-width sections, text sections, separators, and document-style content treatments.

## Standard Values

- `0px` for images, thumbnails, galleries, HTML tables, table cells, horizontal rules, separators, full-width bars, embedded media, iframe embeds, structural content edges, and normal article-flow sections that are not intended to read as cards.
- `4px` for buttons, calls to action, form fields, selects, textareas, search fields, quantity controls, add-to-cart controls, checkout controls, comment forms, notices, alerts, messages, pagination links, tabs, account navigation items, bbPress forms, bbPress actions, compact controls, and small overlay captions.
- `8px` for visible card-like containers, including widgets with visible box styling, sidebar boxes, product cards, forum cards, topic cards, reply cards, content cards, island-style layout sections, boxed template sections, cart boxes, cross-sell boxes, account dashboard boxes, author boxes, tile cards, column cards, and reusable theme panels.
- `999px` only for intentionally circular elements, including small badges, counters, labels, sale chips, status chips, tiny inline metadata pills, author avatars, byline avatars, comment avatars, other intentionally circular identity photos, range slider thumbs, and small icon-only controls such as remove icons.

Normal images should remain square. Avatar and identity photos are the exception because circular author photos are a common WordPress pattern and help separate personal identity from regular content media.

Do not use arbitrary one-off radius values. If a new component looks like a button or form control, use `4px`. If it looks like a visible card, widget, panel, or island, use `8px`. If it is an image, table, structural edge, plain article-flow section, or document-style content area, use `0px`. If it is an intentionally circular element such as an avatar, identity photo, badge, counter, range slider thumb, or small icon-only control, use `999px`.

## Special Cases

Tabs should use `4px` on the top corners when they visually connect to a tab panel or tab boundary. Bottom tab corners should stay square when needed to preserve the tab seam.

Primary calls to action may use stronger color, font weight, spacing, or border treatment, but should still use the same `4px` radius as normal buttons and form controls.
