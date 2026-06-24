<?php
require_once 'includes/config.php';
$PAGE = [
  'title'       => 'Leagues | ' . $SITE['brand'],
  'description' => 'Durham pinball league nights at Fullsteam Brewery. Schedule and registration coming soon.',
  'slug'        => 'leagues',
];
require_once 'includes/header.php';
?>

<!-- ============================================================
     SHORT HERO
     ============================================================ -->
<section class="hero hero-short">
  <video class="hero-video" autoplay muted loop playsinline poster="assets/images/hero-bg.png">
    <source src="assets/images/hero-bg.mp4" type="video/mp4">
  </video>
  <div class="hero-corner hero-corner--tl"></div>
  <div class="hero-corner hero-corner--tr"></div>
  <div class="hero-corner hero-corner--bl"></div>
  <div class="hero-corner hero-corner--br"></div>

  <div class="hero-inner">
    <div class="hero-eyebrow">The Player's Guide</div>
    <h1 class="hero-title">Durham Leagues</h1>
    <p class="hero-tagline">Schedule · Standings</p>
  </div>
</section>

<!-- ============================================================
     COMING SOON
     ============================================================ -->
<section class="section section-dark">
  <div class="container text-center">
    <span class="section-tag">Coming Soon</span>
    <h2 class="section-title" style="margin-left:auto;margin-right:auto;">League Nights Are Loading</h2>
    <p class="section-desc" style="margin-left:auto;margin-right:auto;">
      Thursday league nights at Fullsteam Brewery. Saturday open-bracket tournaments with prize merch.
      Tuesday open play for anyone looking to put in reps. A competitive pinball community rooted in Durham,
      built for players at every level.
    </p>
    <p class="section-desc" style="margin-left:auto;margin-right:auto;opacity:0.7;font-size:15px;">
      Registration opens when the calendar drops. Stay tuned.
    </p>
    <a href="index.php" class="btn btn-ghost btn-pill">Back to Home</a>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
