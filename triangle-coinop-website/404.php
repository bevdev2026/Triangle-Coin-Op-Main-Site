<?php
require_once 'includes/config.php';
$PAGE = [
  'title'       => 'Page Not Found — ' . $SITE['brand'],
  'description' => 'This page has slipped off the playfield.',
  'slug'        => '404',
];
http_response_code(404);
require_once 'includes/header.php';
?>

<section class="section section-dark" style="padding-top: calc(var(--header-height) + var(--space-2xl));">
  <div class="container text-center">
    <span class="section-tag">Error 404 — Tilt</span>
    <h1 class="section-title" style="margin-left:auto;margin-right:auto;">Ball Lost in the Machine</h1>
    <p class="section-desc" style="margin-left:auto;margin-right:auto;">
      The page you were after has slipped off the playfield. No credits lost &mdash;
      use the links below to get back in the game.
    </p>
    <div class="hero-buttons" style="margin-top: var(--space-lg);">
      <a href="index.php" class="btn btn-primary btn-pill">Return Home</a>
      <a href="leagues.php" class="btn btn-ghost btn-pill">League Nights</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
