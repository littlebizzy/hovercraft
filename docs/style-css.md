# Style.css Policy

The `style.css` file is a protected theme metadata and baseline reset file.

Nobody should change this file except to bump the theme version number on the `Version:` line. This includes humans, AI assistants, LLMs, automated refactoring tools, code cleanup tools, formatting tools, and bulk search-and-replace edits.

Do not add new CSS rules to `style.css`.

Do not remove any existing CSS rules from `style.css`.

Do not reorder the theme header fields.

Do not reorder the CSS sections.

Do not change selector ordering.

Do not change media query breakpoints.

Do not move WordPress alignment, caption, typography, layout, focus, accessibility, form, plugin, WooCommerce, header, footer, content, sidebar, or component CSS into `style.css`.

The only approved edit is changing this line during a version bump:

```css
Version: 0.3.216
```

## Required File Contents

The full contents of `style.css` must remain exactly as follows, except for the version number on the `Version:` line:

```css
/*
Theme Name: HoverCraft
Theme URI: https://hovercraft.vip
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
Description: No maintenance WordPress theme
Version: 0.3.216
Requires at least: 6.0
Tested up to: 7.0
Requires PHP: 7.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: hovercraft
GitHub Theme URI: littlebizzy/hovercraft
Primary Branch: master
*/

/* root */

html {
	scrollbar-gutter: stable;
}

/* css reset */

html, body, div, span, applet, object, iframe, main, h1, h2, h3, h4, h5, h6, p, hr, blockquote, pre, a, abbr, acronym, address, big, button, cite, code, del, dfn, dl, dt, dd, em, img, input, ins, kbd, label, legend, mark, meter, optgroup, option, output, progress, q, s, samp, select, small, source, strike, strong, sub, summary, sup, table, tbody, td, template, textarea, tfoot, th, thead, time, tr, tt, u, ul, var, video, article, aside, audio, canvas, caption, center, details, dialog, embed, fieldset, figcaption, figure, footer, form, header, hgroup, li, menu, nav, ol, picture, ruby, section {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

/* html5 elements */

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section {
	display: block;
}

/* form elements */

button, input, optgroup, select, textarea {
	font: inherit;
}

/* responsive media */

img, picture, video, canvas, svg {
	max-width: 100%;
	height: auto;
}

/* universal */

*, *::before, *::after {
	box-sizing: border-box;
}

/* devices */

@media screen and (max-width: 1199px) {
	.desktop {
		display: none !important;
	}
}

@media screen and (min-width: 1200px) {
	.mobile {
		display: none !important;
	}
}
```

## Where Other CSS Belongs

All other CSS belongs in the generated modular CSS system under `inc/css/` or in a more specific existing CSS partial.

Global content CSS belongs in `inc/css/global.php`.

Focus and accessibility CSS belongs in `inc/css/focus.php`.

Form CSS belongs in `inc/css/forms.php`.

Header CSS belongs under `inc/css/header/`.

Footer CSS belongs under `inc/css/footer/`.

WooCommerce CSS belongs under `inc/css/woocommerce/`.

Component, template, and plugin CSS must stay in the most specific matching CSS partial.
