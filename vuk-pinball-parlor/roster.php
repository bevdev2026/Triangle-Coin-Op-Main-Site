<?php
require_once 'includes/config.php';

$PAGE = [
  'title'       => 'Machine Roster — ' . $SITE['brand'],
  'description' => 'Full pinball machine roster across all Triangle Coin Op locations in Durham and Cary, NC.',
  'slug'        => 'roster',
];

// ── Placeholder data — swap real values here when locations are confirmed ──────
$locations = [
  [
    'id'       => 'loc1',
    'name'     => 'Fullsteam Brewery',
    'address'  => "726 Rigsbee Ave\nDurham, NC 27701",
    'note'     => 'Tap room floor, near the bar. Tokens at the counter.',
    'maps_q'   => '726 Rigsbee Ave, Durham, NC 27701',
    'machines' => [
      ['title' => 'The Addams Family', 'year' => 1992, 'maker' => 'Bally',    'desc' => 'Best-selling pinball machine of all time. Thing\'s hand in fine form.'],
      ['title' => 'Theatre of Magic',  'year' => 1995, 'maker' => 'Bally',    'desc' => 'Original backglass and cabinet art. Trunk multiball open.'],
      ['title' => 'Medieval Madness',  'year' => 1997, 'maker' => 'Williams', 'desc' => 'Destroy the castle. Ramps dialed for fast return.'],
      ['title' => 'Attack from Mars',  'year' => 1995, 'maker' => 'Williams', 'desc' => 'Rule the Universe mode intact. Backglass original.'],
    ],
  ],
  [
    'id'       => 'loc2',
    'name'     => 'Wicked Weed Annex',
    'address'  => "117 W Chatham St\nCary, NC 27511",
    'note'     => 'Back bar area. Free play after 9 PM on Thursdays.',
    'maps_q'   => '117 W Chatham St, Cary, NC 27511',
    'machines' => [
      ['title' => 'Twilight Zone',   'year' => 1993, 'maker' => 'Williams', 'desc' => 'Powerball and gumball machine original. Slow Clock award live.'],
      ['title' => 'Indiana Jones',   'year' => 1993, 'maker' => 'Williams', 'desc' => 'All three modes accessible. Map inserts replaced with LEDs.'],
      ['title' => 'Cirqus Voltaire', 'year' => 1997, 'maker' => 'Bally',   'desc' => 'Marvelo multiball working. Highwire shot is tight.'],
    ],
  ],
  [
    'id'       => 'loc3',
    'name'     => 'Fortnight Brewing',
    'address'  => "1006 SW Maynard Rd\nCary, NC 27511",
    'note'     => 'Main floor beside the stage. League nights every other Friday.',
    'maps_q'   => '1006 SW Maynard Rd, Cary, NC 27511',
    'machines' => [
      ['title' => 'Bride of Pinbot', 'year' => 1991, 'maker' => 'Williams', 'desc' => 'Helmet multiball in original topside. Drop targets freshly adjusted.'],
      ['title' => 'Funhouse',        'year' => 1990, 'maker' => 'Williams', 'desc' => 'Rudy blinks and talks. Clock feature fully operational.'],
      ['title' => 'Earthshaker',     'year' => 1989, 'maker' => 'Williams', 'desc' => 'Freeway and tunnel shots dialed. Shaker motor intact.'],
    ],
  ],
];

require_once 'includes/header.php';
?>

<!-- ============================================================
     SHORT HERO
     ============================================================ -->
<section class="hero hero-short">
  <video class="hero-video" autoplay muted loop playsinline poster="assets/images/hero-bg.png">
    <source src="assets/images/animate_this_pinball_tables_je.mp4" type="video/mp4">
  </video>
  <div class="hero-corner hero-corner--tl"></div>
  <div class="hero-corner hero-corner--tr"></div>
  <div class="hero-corner hero-corner--bl"></div>
  <div class="hero-corner hero-corner--br"></div>

  <div class="hero-inner">
    <div class="hero-eyebrow">The Machine List</div>
    <h1 class="hero-title">Machine Roster</h1>
    <p class="hero-tagline">All Locations &middot; All Titles &middot; Always Maintained</p>
  </div>
</section>

<!-- ============================================================
     TABS — All Machines + per-location
     ============================================================ -->
<section class="section section-dark">
  <div class="container">

    <div class="tab-group">

      <!-- Radio inputs must be direct siblings of .tab-nav and .tab-panels -->
      <input type="radio" name="roster-tab" id="tab-all"  class="tab-input" checked>
      <?php foreach ($locations as $loc): ?>
        <input type="radio" name="roster-tab" id="tab-<?= htmlspecialchars($loc['id']) ?>" class="tab-input">
      <?php endforeach; ?>

      <div class="tab-nav" role="tablist">
        <label for="tab-all" class="tab-label">All Machines</label>
        <?php foreach ($locations as $loc): ?>
          <label for="tab-<?= htmlspecialchars($loc['id']) ?>" class="tab-label">
            <?= htmlspecialchars($loc['name']) ?>
          </label>
        <?php endforeach; ?>
      </div>

      <div class="tab-panels">

        <!-- ── Panel 1: All Machines ── -->
        <div class="tab-panel">
          <?php foreach ($locations as $loc): ?>
            <div style="margin-bottom: var(--space-xl);">
              <span class="section-tag" style="margin-bottom: var(--space-lg); display: inline-block;">
                <?= htmlspecialchars($loc['name']) ?>
              </span>
              <div class="grid-3">
                <?php foreach ($loc['machines'] as $m): ?>
                  <div class="machine-card">
                    <img src="assets/images/hero-foreground.png"
                         alt="<?= htmlspecialchars($m['title']) ?>"
                         class="machine-card-image" loading="lazy">
                    <div class="machine-card-body">
                      <div class="machine-card-meta"><?= (int)$m['year'] ?> &mdash; <?= htmlspecialchars($m['maker']) ?></div>
                      <h3 class="machine-card-title"><?= htmlspecialchars($m['title']) ?></h3>
                      <p class="machine-card-desc"><?= htmlspecialchars($m['desc']) ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="divider"></div>
          <?php endforeach; ?>
        </div>

        <!-- ── Panels 2–4: Individual locations ── -->
        <?php foreach ($locations as $loc): ?>
          <div class="tab-panel">

            <div style="margin-bottom: var(--space-xl);">
              <span class="section-tag" style="margin-bottom: var(--space-md); display: inline-block;">
                <?= count($loc['machines']) ?> Machine<?= count($loc['machines']) !== 1 ? 's' : '' ?> on Location
              </span>
              <h2 class="section-title" style="margin-bottom: 0;"><?= htmlspecialchars($loc['name']) ?></h2>
              <address class="location-address"><?= nl2br(htmlspecialchars($loc['address'])) ?></address>
              <p class="location-note"><?= htmlspecialchars($loc['note']) ?></p>
            </div>

            <div class="map-wrap">
              <iframe
                src="https://maps.google.com/maps?q=<?= urlencode($loc['maps_q']) ?>&output=embed"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Map of <?= htmlspecialchars($loc['name']) ?>">
              </iframe>
            </div>

            <div class="grid-3">
              <?php foreach ($loc['machines'] as $m): ?>
                <div class="machine-card">
                  <img src="assets/images/hero-foreground.png"
                       alt="<?= htmlspecialchars($m['title']) ?>"
                       class="machine-card-image" loading="lazy">
                  <div class="machine-card-body">
                    <div class="machine-card-meta"><?= (int)$m['year'] ?> &mdash; <?= htmlspecialchars($m['maker']) ?></div>
                    <h3 class="machine-card-title"><?= htmlspecialchars($m['title']) ?></h3>
                    <p class="machine-card-desc"><?= htmlspecialchars($m['desc']) ?></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

          </div>
        <?php endforeach; ?>

      </div><!-- .tab-panels -->
    </div><!-- .tab-group -->

  </div>
</section>

<!-- ============================================================
     CTA STRIP
     ============================================================ -->
<section class="section">
  <div class="container text-center">
    <span class="section-tag" style="margin-bottom: var(--space-lg); display: inline-block;">Want to Host a Machine?</span>
    <h2 class="section-title" style="margin: 0 auto var(--space-md);">Bring the Parlour to Your Venue</h2>
    <p class="section-desc" style="margin: 0 auto var(--space-xl);">
      We place and maintain machines at high-traffic commercial spaces across the Triangle.
    </p>
    <a href="venue-operations.php" class="btn btn-primary btn-pill">Explore Venue Operations</a>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
