# CLAUDE.md — Triangle Coin Op Site

This file gives Claude Code everything it needs to extend this site without re-reading the brand kit. Keep it open in context.

---

## Project at a glance

- **Site**: Triangle Coin Op
- **Operator**: Triangle Coin Op LLC (Durham, NC)
- **Stack**: vanilla PHP + HTML + CSS. No framework, no build step.
- **Host**: Hostinger (shared PHP). FTP / hPanel file manager upload.
- **Pages**: 4 (Home, Leagues, Mercantile, Venue Operations)
- **B2B form recipient**: `steve@optidynamics.org` (do not change without confirmation)

## File map

```
/
├── index.php              Home — 4 blocks
├── leagues.php            Leagues & locations
├── mercantile.php         Shop (links out to Amazon + POD)
├── venue-operations.php   B2B intake page
├── 404.php                Custom not-found page
├── form-handler.php       Mail router (PHP mail()) + honeypot
├── robots.txt             Crawler rules
├── includes/
│   ├── config.php         ⭐ EDIT THIS for brand/email/URL changes
│   ├── header.php         Sticky nav + <head> + meta/OG tags
│   ├── flash.php          Form-feedback banner (?sent=ok|err)
│   └── footer.php         3-col footer + closing tags
├── assets/
│   ├── css/tokens.css     ⭐ Design tokens (do not duplicate inline)
│   ├── css/styles.css     Component styles
│   └── images/            See assets/images/MANIFEST.md
│       ├── favicon.svg            Site favicon (gear mark)
│       ├── placeholder-*.svg      Fallbacks shown until real assets land
└── README.md              Human-facing setup notes
```

## Design system

**All colors and spacing live in `assets/css/tokens.css` as CSS variables.** Use `var(--gold)`, never `#C8A534`. If you need a new token, add it to `tokens.css` first.

### Color usage rules

| Use case            | Tokens                                          |
|---------------------|-------------------------------------------------|
| Page background     | `--mahogany` base + `--global-bg-texture` image |
| Card / surface      | gradient `--rosewood` → `--mahogany`            |
| B2C primary action  | gradient `--copper-bright` → `--rust`           |
| B2B primary action  | gradient `--steel` → `--gunmetal`               |
| Heading text        | `--gold-light` (B2C) / `--steel-pale` (B2B)     |
| Body text           | `--parchment` or `--cream`                      |
| Success / accent    | `--verdigris`                                   |
| Borders             | `--copper-mid` (B2C) / `--steel-light` (B2B)    |

### Typography

- `--font-display` (Cinzel Decorative): hero titles ONLY
- `--font-heading` (Cinzel): section titles, buttons, labels — always uppercase with `--tracking-wide`
- `--font-body` (Spectral): all body copy

### B2C vs B2B aesthetic split

The site has two visual modes:

- **B2C (Home, Leagues, Mercantile)**: warm — mahogany, copper, gold, parchment
- **B2B (Venue Operations + Home Block 4)**: cool — gunmetal, steel, steel-pale text

When building new B2B sections use `.section-steel` and `.btn-steel`. When in doubt, B2C.

## Component patterns already built

Use these classes — don't invent new ones unless necessary:

- `.container` — 1280px max, padded
- `.section` / `.section-dark` / `.section-rosewood` / `.section-steel`
- `.hero` (full) / `.hero-short` (40vh) — both use the same corner-accent + video pattern
- `.frame` — copper-bordered card with hover lift
- `.machine-card` — image-top card for the roster
- `.feature` — centered icon + title + desc (B2B value props)
- `.form-card` + `.form-field` — parchment-style form
- `.btn` `.btn-primary` `.btn-ghost` `.btn-steel` `.btn-pill`
- `.gear-list` — ul with ⚙ bullets
- `.divider` — horizontal rule with ◆ centerpiece
- `.divider-graphic` — image-based (uses `divider-1.png` / `divider-2.png`)
- `.section-tag` — small uppercase pill (e.g. "01 — Schedule")
- `.flash` — form-feedback banner, rendered by `includes/flash.php`
- `.nav-toggle` + `.nav-state` — CSS-only mobile hamburger (no JS)
- `.hp-field` — visually-hidden honeypot wrapper for spam traps

## Graceful fallbacks

- Content `<img>` tags carry an `onerror` that swaps to `placeholder-mechanism.svg`
  / `placeholder-divider.svg`, so the site renders before the 11 brand assets land.
  Keep the `onerror` when adding new images; drop it once real assets are confirmed.
- The hero has a CSS gradient background, so it looks intentional without `hero-bg.mp4`.
- Forms POST to `form-handler.php`, which redirects back with `?sent=ok|err`;
  `flash.php` (included by `header.php`) renders the banner. New forms get this free.
- `form-handler.php` includes a honeypot check — every form needs a hidden
  `company` field wrapped in `.hp-field`.

## Asset filenames (already wired in CSS/PHP)

These names are referenced in code. **Drop the real files in `assets/images/` with these exact names** or update the references:

| Filename                  | Used in                          | Source asset                                |
|---------------------------|----------------------------------|---------------------------------------------|
| `global-bg-texture.png`   | `styles.css` body bg             | Global Page Background Texture              |
| `hero-bg.png`             | All hero video posters           | Hero Section Background Image               |
| `hero-bg.mp4`             | All hero `<video>` sources       | Hero Background Video                       |
| `hero-foreground.png`     | Home Block 2, machine cards      | Main Hero Foreground / Focal Graphic        |
| `divider-1.png`           | Home Block 3 top                 | Section Divider Graphics                    |
| `divider-2.png`           | Home Block 3 bottom              | Section Divider Graphics 2                  |
| `footer-bg.png`           | Footer background                | Footer Background Texture                   |
| `cta-bg.png`              | (Available — not yet wired)      | Call-to-Action Background Image             |
| `button-bg.png`           | (Available — not yet wired)      | Button Background Textures                  |
| `feature-icons.png`       | (Available — currently using SVGs) | Custom Feature Icons                      |
| `bullet-icons.png`        | (Available — currently using ⚙)    | Custom Bullet Point Icons                 |

The 4 B2B value-prop icons are inline SVGs in `venue-operations.php` so they color-shift cleanly. Swap to PNGs only if Kitty prefers her custom icon set — set `--steel-pale` filter on them or use white-on-transparent.

## Editing rules of thumb

1. **Brand strings, emails, URLs** → edit `includes/config.php` only.
2. **Colors / fonts / spacing** → edit `tokens.css`. Never hardcode hex values in component styles.
3. **New page** → copy any existing page, change `$PAGE` array, swap the `<section>` content.
4. **New nav link** → add to `$NAV` in `config.php`. Header + footer pick it up automatically.
5. **Form additions** → add a new `case` to `form-handler.php` and a matching hidden `form_type` field.

## Known TODOs

- [ ] Replace the 6 placeholder machine cards in `leagues.php` (search `for ($i = 1; $i <= 6;`) with real machine data — title, image, brief.
- [ ] Paste real Amazon storefront URL into `config.php` (`amazon_url`).
- [ ] Paste real Print-on-Demand store URL into `config.php` (`pod_url`).
- [ ] Update `public_email` in `config.php`.
- [ ] Confirm Hostinger PHP `mail()` works; if deliverability is poor, swap `form-handler.php` to PHPMailer + Hostinger SMTP.
- [x] Favicon wired (`assets/images/favicon.svg`) + Open Graph tags in `header.php`.
- [ ] `og:image` points at `assets/images/hero-bg.png` — confirm that asset exists, or add a dedicated 1200×630 `og.png` and update `header.php`.
- [ ] Drop the 11 named assets into `assets/images/` (SVG placeholders show until then).

## Deployment to Hostinger

1. In hPanel, open File Manager and navigate to `public_html/`.
2. Upload the entire contents of this folder (not the folder itself — the files inside).
3. Visit your domain. `index.php` is the home.
4. To test the form: submit, check the inbox for `steve@optidynamics.org` (allow ~1 minute).
5. If mail doesn't arrive, go to hPanel → Emails → SMTP credentials and rebuild `form-handler.php` with PHPMailer.

## What NOT to do

- Don't pull in Tailwind, Bootstrap, or any CSS framework. The token system is the design system.
- Don't inline `<style>` blocks in pages. Add to `styles.css`.
- Don't change the B2B form recipient without explicit confirmation.
- Don't add Lasso branding anywhere (see Kitty's standing instruction).
