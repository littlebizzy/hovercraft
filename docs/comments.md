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

## Template Closers

Trailing comments are acceptable on major template closers, including major HTML closing tags and PHP `endif`, `endwhile`, `endforeach`, `endfor`, and `endswitch` closers.

## CSS Comments

Use normal CSS comments inside raw CSS or PHP-generated CSS because CSS does not support `//` comments.

## Dead Code

Remove dead commented-out code instead of preserving it as a comment.
