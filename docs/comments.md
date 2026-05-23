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

Do not show the website URL field in the public comment form by default. The URL field is legacy blog-era behavior and is commonly used for spam or low-value promotional links.

Keep WordPress's required field behavior for name and email. If WordPress requires name and email, HoverCraft may show a simple required indicator and add the matching `required` and `aria-required` attributes.

Keep WordPress's expected field `name` attributes for comment submission. Custom IDs are acceptable when they avoid anchor conflicts, such as reserving `#author` for the author box and using `#comment-author` for the comment form name field.

Do not duplicate WordPress core comment form defaults unless HoverCraft intentionally needs different behavior. For example, do not filter `comment_form_defaults` just to repeat WordPress's default reply title markup.

Comment listing args may remain filterable through HoverCraft-specific filters where useful, but do not add no-op callbacks that simply return the same args.

## Template Closers

Trailing comments are acceptable on major template closers, including major HTML closing tags and PHP `endif`, `endwhile`, `endforeach`, `endfor`, and `endswitch` closers.

## CSS Comments

Use normal CSS comments inside raw CSS or PHP-generated CSS because CSS does not support `//` comments.

## Dead Code

Remove dead commented-out code instead of preserving it as a comment.
