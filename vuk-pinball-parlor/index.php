<?php
require_once 'includes/config.php';
$PAGE = [
  'title'       => $SITE['brand'] . ' — ' . $SITE['tagline'],
  'description' => 'Masterfully maintained pinball. League nights at Fullsteam Brewery, Durham NC. Curated machines, exclusive gear, venue partnerships.',
  'slug'        => 'home',
];
require_once 'includes/header.php';
?>

<!-- ============================================================
     BLOCK 1: HERO
     ============================================================ -->
<section class="hero">
  <video class="hero-video" autoplay muted loop playsinline poster="assets/images/hero-bg.png">
    <source src="assets/images/hero-bg.mp4" type="video/mp4">
  </video>

  <div class="hero-corner hero-corner--tl"></div>
  <div class="hero-corner hero-corner--tr"></div>
  <div class="hero-corner hero-corner--bl"></div>
  <div class="hero-corner hero-corner--br"></div>

  <div class="hero-inner">
    <div class="hero-eyebrow"><?= htmlspecialchars($SITE['residency']) ?></div>
    <h1 class="hero-title">THE <?= strtoupper(htmlspecialchars($SITE['brand'])) ?></h1>
    <p class="hero-tagline">Masterfully Engineered Entertainment</p>
    <div class="hero-buttons">
      <a href="leagues.php" class="btn btn-primary">Durham League Nights</a>
      <a href="venue-operations.php" class="btn btn-ghost">Host a Machine</a>
    </div>
  </div>
</section>

<!-- ============================================================
     BLOCK 2: FULLSTEAM EXPERIENCE (B2C)
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="grid-2">
      <div>
        <img src="assets/images/hero-foreground.png"
             alt="Triangle Coin Op brass mechanism focal graphic"
             style="border-radius: var(--radius-lg); box-shadow: var(--shadow-deep);">
      </div>
      <div>
        <span class="section-tag">01 — The Residency</span>
        <h2 class="section-title">Fullsteam Brewery Residency</h2>
        <p class="section-desc">
          Join us in Durham for curated pinball, recurring league nights, and craft pints.
          Whether you are a grand champion or stepping up to the flippers for the first time,
          our machines are dialed in for peak performance.
        </p>
        <a href="leagues.php" class="btn btn-primary btn-pill">View Current Roster</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     BLOCK 3: THE MERCANTILE (Merch Teaser)
     ============================================================ -->
<section class="section">
  <div class="container">
    <img src="assets/images/divider-1.png" alt="" class="divider-graphic" aria-hidden="true">

    <div class="text-center mb-xl">
      <span class="section-tag">02 — The Mercantile</span>
      <h2 class="section-title">Curated Goods &amp; League Gear</h2>
    </div>

    <div class="grid-3">
      <div class="frame">
        <h3 class="frame-title">Apparel &amp; Uniforms</h3>
        <p class="frame-body">Branded apparel printed on demand. Tournament tees, hoodies, and parlour-grade essentials.</p>
        <a href="mercantile.php#apparel" class="btn btn-ghost">Shop Apparel</a>
      </div>
      <div class="frame">
        <h3 class="frame-title">The Amazon Collection</h3>
        <p class="frame-body">Curated accessories, tools, and pinball-adjacent goods from our Amazon storefront.</p>
        <a href="<?= htmlspecialchars($SITE['amazon_url']) ?>" target="_blank" rel="noopener" class="btn btn-ghost">Shop the Archive</a>
      </div>
      <div class="frame">
        <h3 class="frame-title">League Exclusives</h3>
        <p class="frame-body">Event-specific gear, championship merch, and limited-run pieces for active league members.</p>
        <a href="mercantile.php#exclusives" class="btn btn-ghost">View Exclusives</a>
      </div>
    </div>

    <img src="assets/images/divider-2.png" alt="" class="divider-graphic" aria-hidden="true">
  </div>
</section>

<!-- ============================================================
     BLOCK 4: VENUE PARTNERSHIP (B2B Teaser)
     ============================================================ -->
<section class="section section-steel">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">03 — Venue Operations</span>
      <h2 class="section-title" style="color: var(--steel-pale);">Coin-Op Architecture for Your Venue</h2>
      <p class="section-desc" style="margin-left:auto;margin-right:auto;color:var(--steel-pale);opacity:0.85;">
        <?= htmlspecialchars($SITE['parent_co']) ?> provides premium, zero-maintenance pinball placements
        for high-traffic commercial spaces. Curated machines, professional service, league-night foot traffic.
      </p>
      <a href="venue-operations.php" class="btn btn-steel btn-pill">Venue Operations</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
