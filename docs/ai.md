# AI Policy

AI assistants and LLM tools should keep commits narrow and easy to review.

Each ChatGPT-generated GitHub commit should edit exactly one file unless the user explicitly asks for a multi-file commit.

Functional code changes and documentation changes should be committed separately. Do not combine a code fix with a docs update in the same ChatGPT commit unless explicitly requested.

When fixing a specific bug, edit only the smallest relevant file needed for that fix. Avoid opportunistic cleanup, drive-by formatting, unrelated docs edits, version bumps, or adjacent refactors.

If docs need to be updated after a code fix, ask first or make a separate one-file docs commit when requested.
