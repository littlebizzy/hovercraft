# Cloudflare Policy

HoverCraft should work with Cloudflare without requiring theme-specific Cloudflare settings for normal page rendering.

Cloudflare features can still affect WordPress behavior when they rewrite, delay, combine, or proxy frontend assets. Compatibility fixes should be narrow, explicit, and only target the affected WordPress behavior.

## Rocket Loader

Cloudflare Rocket Loader can delay and rewrite JavaScript by changing normal script tags to a nonstandard script type before Cloudflare executes them later.

This can break WordPress's core `comment-reply` script. When that happens, comment reply links fall back to plain `#respond` anchor behavior instead of moving the comment form underneath the selected comment and setting the hidden `comment_parent` field.

HoverCraft prevents this by adding `data-cfasync="false"` only to the `comment-reply` script tag. This tells Rocket Loader to ignore the core reply script while leaving Rocket Loader behavior unchanged for other scripts.

The compatibility code belongs in `inc/comments/comment-reply.php`, not in `functions.php`, because it is specific to comment reply behavior.

## Comment Reply Script Loading

WordPress may output `comment-reply` with loading attributes such as `async`, `data-wp-strategy="async"`, or `fetchpriority="low"`.

HoverCraft currently strips those attributes from the `comment-reply` script tag only. This keeps the core reply handler available before users click Reply and avoids intermittent fallback to plain `#respond` anchor behavior.

This is a targeted compatibility workaround, not a general rule against async scripts. If a future WordPress version or real-world testing shows that these attributes are harmless for `comment-reply`, this part can be reverted while keeping the documented Rocket Loader exclusion.

## Smooth Scrolling

HoverCraft should not enable global smooth scrolling by default.

Native browser anchor behavior is easier to debug and more predictable for comments, reply links, comment pagination, skip links, post-submit redirects, and cached pages.

Back-to-top behavior should also avoid forced smooth scrolling while comment anchor behavior is being tested.

## Comment Anchors

After a successful comment submission, WordPress should redirect to the new comment link when the comment is approved and visible. If the URL ends in `#comment-123` but the browser does not move, confirm that the rendered page actually contains an element with `id="comment-123"`.

If the element is missing, check moderation, comment pagination, page cache, and whether the comment was submitted as a top-level comment because `comment-reply` did not execute.

## Implementation Rules

- Do not add broad Cloudflare-specific JavaScript patches.
- Do not disable Rocket Loader globally from the theme.
- Do not add global smooth scrolling as a workaround for anchor behavior.
- Do not manually reimplement WordPress comment reply behavior.
- Keep Cloudflare compatibility fixes targeted to the smallest affected script or feature.
- Treat the async-removal behavior for `comment-reply` as reversible if future testing proves it unnecessary.
