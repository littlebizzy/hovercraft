# File Guard Policy

HoverCraft should use direct-access guards where they protect loaded PHP logic files, not where they add noise to normal WordPress templates.

## Use Guards

Use the `ABSPATH` guard in PHP files that are loaded as reusable logic or configuration.

This includes:

- `functions.php`
- files under `inc/`
- files that define functions, hooks, filters, helpers, or theme setup logic
- plugin-style integration files

These files are commonly loaded directly by `require`, `require_once`, hooks, or bootstrap logic, so the guard is useful and expected.

## Skip Guards

Do not require the `ABSPATH` guard in normal theme template files.

This includes:

- `header.php`
- `footer.php`
- `index.php`
- `single.php`
- `page.php`
- archive templates
- WooCommerce templates
- files under `template-parts/`

Template files are rendered through WordPress theme loading. Adding a guard to every template makes the file harder to scan without adding meaningful protection.

## Rule

If the file mostly defines reusable PHP behavior, use the guard.

If the file mostly outputs theme markup, skip the guard.
