# Widget Area Policy

Widget areas are for reusable content zones and simple layout regions. They should remain predictable and tied to real theme locations.

Repeated visual sections should prefer one reusable widget area that renders each widget as an item, instead of many numbered widget areas.

Avoid adding widget areas speculatively. Add them only when they support a known template, layout, or reusable client pattern.

A widget area may be hidden from the front end when it is disabled in the Customizer. This is useful because site builders can keep widget content saved without deleting it from the widget area.

Customizer visibility settings should control whether a widget area renders, not whether the saved widgets exist. This keeps content management reversible and safer for client sites.

Widget area output should avoid unnecessary wrapper markup when the area is disabled or empty. If a widget area has no active widgets, it should not render visible layout spacing just because the location exists.
