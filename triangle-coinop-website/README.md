# Triangle Coin Op — Site Package

Production-ready PHP/HTML/CSS site for Triangle Coin Op — pinball, league nights, and venue operations from Triangle Coin Op LLC in Durham, NC.

## What's in the box

- 4 fully built pages (Home, Leagues, Mercantile, Venue Operations)
- Sticky header with active-link highlighting
- 3-column footer
- Two contact forms with PHP mail routing (B2B → `steve@optidynamics.org`, league signups → public email)
- Complete design token system extracted from the Triangle Coin Op Brand Kit
- No build step — drop on Hostinger and it works

## Quick start

### Option A: Use with Claude Code

1. Unzip this package into a folder.
2. Open the project folder in your terminal.
3. Run `claude` (Claude Code reads `CLAUDE.md` automatically).
4. Tell it what you want to extend — for example:
   - "Add a tournament results page"
   - "Make the league signup form save to a database"
   - "Replace the placeholder machine cards with these 6 real machines"

### Option B: Deploy to Hostinger now

1. Log into Hostinger hPanel → File Manager → `public_html/`.
2. Delete any existing `index.html` or default page.
3. Upload **the contents** of this folder (not the folder itself).
4. Visit your domain — `index.php` loads.

## What to do first

Open `includes/config.php` and update:

- `public_email` — your real public-facing email
- `amazon_url` — your Amazon storefront link
- `pod_url` — your Print-on-Demand store link
- `parent_url` — change `https://unique.com` to the real parent project URL

Everything else propagates from there.

## Drop in your assets

Put these 11 files in `assets/images/` using these exact filenames (see `assets/images/MANIFEST.md`):

```
global-bg-texture.png
hero-bg.png
hero-bg.mp4
hero-foreground.png
divider-1.png
divider-2.png
footer-bg.png
cta-bg.png             ← available, not yet wired
button-bg.png          ← available, not yet wired
feature-icons.png      ← optional (SVG icons currently used)
bullet-icons.png       ← optional (⚙ glyph currently used)
```

## Files to know

| File                       | Purpose                                  |
|----------------------------|------------------------------------------|
| `CLAUDE.md`                | Instructions for Claude Code             |
| `includes/config.php`      | All brand strings, emails, URLs          |
| `assets/css/tokens.css`    | Color, type, spacing variables           |
| `assets/css/styles.css`    | All component styles                     |
| `form-handler.php`         | Routes form submissions to email         |




