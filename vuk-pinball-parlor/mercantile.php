<?php
require_once 'includes/config.php';
$PAGE = [
  'title'       => 'The Mercantile — ' . $SITE['brand'],
  'description' => 'Curated collections and official ' . $SITE['brand'] . ' gear. Apparel, accessories, and league exclusives.',
  'slug'        => 'mercantile',
];
require_once 'includes/header.php';
?>

<!-- ============================================================
     HEADER & INTRO
     ============================================================ -->
<section class="section section-dark" style="padding-top: calc(var(--header-height) + var(--space-2xl));">
  <div class="container text-center">
    <span class="section-tag">The Mercantile</span>
    <h1 class="section-title" style="margin-left:auto;margin-right:auto">Goods for the Faithful</h1>
    <p class="section-desc" style="margin-left:auto;margin-right:auto">
      Curated collections and official <?= htmlspecialchars($SITE['brand']) ?> gear.
      Apparel, accessories, and league exclusives — all maintained to parlour standards.
    </p>
  </div>
</section>

<!-- ============================================================
     PRODUCT CATEGORIES
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="grid-2">

      <!-- AMAZON COLLECTION -->
      <div class="frame" id="amazon">
        <img src="assets/images/hero-foreground.png"
             alt="Curated parts and accessories"
             class="frame-image" loading="lazy">
        <span class="section-tag" style="margin-bottom: var(--space-sm)">01 — Curated</span>
        <h2 class="frame-title">The Amazon Collection</h2>
        <p class="frame-body">
          Hand-picked tools, parts, and accessories from our Amazon storefront. Cleaning kits,
          coil sleeves, rubber rings, and parlour-grade extras worth their shelf space.
        </p>
        <a href="<?= htmlspecialchars($SITE['amazon_url']) ?>"
           target="_blank" rel="noopener"
           class="btn btn-primary btn-pill">Shop the Archive</a>
      </div>

      <!-- PRINT ON DEMAND -->
      <div class="frame" id="apparel">
        <img src="assets/images/hero-foreground.png"
             alt="Branded apparel and uniforms"
             class="frame-image" loading="lazy">
        <span class="section-tag" style="margin-bottom: var(--space-sm)">02 — Apparel</span>
        <h2 class="frame-title">Apparel &amp; Uniforms</h2>
        <p class="frame-body">
          Branded tees, hoodies, hats, and tournament uniforms printed on demand. New designs
          drop each season; league exclusives release with each tournament.
        </p>
        <a href="<?= htmlspecialchars($SITE['pod_url']) ?>"
           target="_blank" rel="noopener"
           class="btn btn-primary btn-pill">Shop Apparel</a>
      </div>

    </div>

    <div class="divider"></div>

    <!-- LEAGUE EXCLUSIVES STRIP -->
    <div class="text-center mb-lg" id="exclusives">
      <span class="section-tag">03 — Exclusives</span>
      <h2 class="section-title">League Member Exclusives</h2>
      <p class="section-desc" style="margin-left:auto;margin-right:auto">
        Limited runs reserved for active league members. Championship merch, tournament prizes,
        and pieces you can't buy outside the parlour. Members receive drop notifications by email.
      </p>
      <a href="leagues.php" class="btn btn-ghost">Become a Member</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
