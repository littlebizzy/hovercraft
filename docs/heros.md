# Heros Policy

HoverCraft hero layouts should stay visually polished, predictable, and easy to audit.

## Full Hero Layout

Full Hero is a special hero layout because its background image or video includes the full hero header, preheader, navigation, and hero body.

Do not move the Full Hero header, preheader, or navigation outside the Full Hero container. Other hero types may display their image below the header, but Full Hero intentionally places the header inside the background container.

Full Hero pages should use viewport flex layout instead of table layout or hardcoded header-height math.

The page container owns the viewport height. The topbar keeps its natural height. The Full Hero container fills the remaining viewport height. The Full Hero header keeps its natural height, and the Full Hero body flexes to fill the remaining space below the header.

Use `100svh` for Full Hero viewport alignment, with `100vh` as a fallback when useful.

Do not use JavaScript to calculate Full Hero height unless a future browser bug requires it.

Do not hardcode topbar, preheader, navigation, or header heights into Full Hero CSS.

Full Hero snippets and hero windows should live inside the flexing hero body so they do not change the first-screen viewport contract. Captions, photo credits, and video credits should be treated as overlay metadata inside the Full Hero container because they belong visually to the background and should not reserve structural layout height.
