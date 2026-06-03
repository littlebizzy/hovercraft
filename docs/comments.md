# Comment Policy

Comments should make HoverCraft easier to scan during audits without adding noise.

Use comments to explain real code sections, functions, template structure, or intentional exceptions.

## PHP Comments

- Use concise comments only where they improve readability.
- Add comments above code blocks or functions when they clarify purpose.
- Keep normal PHP comments lowercase and single-line using `//`.
- Do not use PHP docblocks for ordinary code.
- Keep required WordPress file headers when WordPress needs them.
- Avoid trailing comments on ordinary PHP logic.

## WordPress Comments

HoverCraft should keep WordPress comment functionality simple, low-friction, and resistant to spammy legacy fields.

The public comment form should collect only practical identity fields by default: name, email, and comment text.

HoverCraft intentionally disables the public website URL field. The URL field is legacy blog-era behavior and is commonly used for spam or low-value promotional links.

HoverCraft should also display comment author names as plain text, not links, so old or imported comment author URL values do not render publicly.

When the website URL field is disabled, any comment cookie consent text should mention only the fields HoverCraft actually saves, such as name and email.

Keep WordPress's required field behavior for name and email. If WordPress requires name and email, HoverCraft may show a simple required indicator and add the matching `required` and `aria-required` attributes.

Keep useful WordPress core field attributes when overriding comment fields, including maxlength, autocomplete, and aria helper attributes where applicable.

Keep WordPress's expected field `name` attributes for comment submission. Custom IDs are acceptable when they avoid anchor conflicts, such as reserving `#author` for the author box and using `#comment-author` for the comment form name field.

Do not duplicate WordPress core comment form defaults unless HoverCraft intentionally needs different behavior. For example, do not filter `comment_form_defaults` just to repeat WordPress's default reply title markup.

Comment listing args may remain filterable through HoverCraft-specific filters where useful, but do not add no-op callbacks that simply return the same args.

Threaded comments should load WordPress core reply handling only on singular views when comments are open and nested comments are enabled.

When Cloudflare Rocket Loader is active, the WordPress core `comment-reply` script should be excluded from Rocket Loader by adding `data-cfasync="false"` to that script tag only. This belongs in `inc/comments/comment-reply.php` because it preserves core reply behavior without replacing it.

Comment templates should only be loaded on singular views. Archive templates should not display the comment form or comments from whichever post happens to be active in the loop.

Comment navigation should use WordPress core helpers where possible instead of manually rebuilding previous and next links.

Comment CSS should target `.comment-list` generically instead of assuming only `ul.comment-list` or only `ol.comment-list`.

Comment CSS should not include selectors for disabled URL fields.

Comment list reset rules should not remove bullets, numbers, spacing, or padding from user-written lists inside `.comment-content`.

Comment anchor targets may use `scroll-margin-top` so jumps to comments and reply forms are not hidden behind fixed browser or theme chrome.

HoverCraft may keep global smooth scrolling. If reply links only nudge the page toward `#respond`, debug whether `comment-reply` executed before removing smooth scrolling or adding custom reply JavaScript.

HoverCraft should declare WordPress HTML5 support for comment forms and comment lists while keeping HoverCraft-specific choices like disabling the URL field and comment author URL output.

## Template Closers

Trailing comments are acceptable on major template closers, including major HTML closing tags and PHP `endif`, `endwhile`, `endforeach`, `endfor`, and `endswitch` closers.

## CSS Comments

Use normal CSS comments inside raw CSS or PHP-generated CSS because CSS does not support `//` comments.

## Dead Code

Remove dead commented-out code instead of preserving it as a comment.
