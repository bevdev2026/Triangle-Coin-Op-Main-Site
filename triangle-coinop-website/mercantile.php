<?php
require_once 'includes/config.php';
$PAGE = [
  'title'       => 'The Mercantile | ' . $SITE['brand'],
  'description' => 'Curated collections and official ' . $SITE['brand'] . ' gear. Apparel, accessories, and league exclusives. Opening soon.',
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
      Apparel, accessories, and league exclusives, all maintained to parlour standards.
    </p>
  </div>
</section>

<!-- ============================================================
     COMING SOON
     ============================================================ -->
<section class="section section-rosewood">
  <div class="container text-center">
    <span class="section-tag">Coming Soon</span>
    <h2 class="section-title" style="margin-left:auto;margin-right:auto;">The Shop Is Stocking Up</h2>
    <p class="section-desc" style="margin-left:auto;margin-right:auto;">
      A curated Amazon collection of tools, parts, and pinball-adjacent goods. Branded tees, hoodies,
      and tournament uniforms printed on demand. Limited-run league exclusives for active members only.
      Everything worth keeping, nothing worth skipping.
    </p>
    <p class="section-desc" style="margin-left:auto;margin-right:auto;opacity:0.7;font-size:15px;">
      Collection drops alongside league launch.
    </p>
    <a href="index.php" class="btn btn-ghost btn-pill">Back to Home</a>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
