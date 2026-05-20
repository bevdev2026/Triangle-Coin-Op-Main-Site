<?php
require_once 'includes/config.php';
$PAGE = [
  'title'       => 'Leagues & Locations — ' . $SITE['brand'],
  'description' => 'Durham pinball league nights at Fullsteam Brewery. Schedule, registration, and current machine roster.',
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
    <p class="hero-tagline">Schedule · Standings · Machines</p>
  </div>
</section>

<!-- ============================================================
     SCHEDULE & REGISTRATION
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="grid-2">
      <div>
        <span class="section-tag">01 — Schedule</span>
        <h2 class="section-title">Spring &amp; Summer Calendar</h2>
        <p class="section-desc">
          League nights run at <?= htmlspecialchars($SITE['residency']) ?>.
          Doors at 5 PM. Steam's already up.
        </p>

        <ul class="gear-list">
          <li><strong>Tuesday Open Play</strong> — 5 PM to 10 PM · No registration required</li>
          <li><strong>Thursday League Night</strong> — 7 PM · Registered players, 4-game match play</li>
          <li><strong>First Saturday Tournament</strong> — 2 PM · Open bracket, prize merch</li>
          <li><strong>Sunday Practice Hours</strong> — Noon to 6 PM · Discounted plays for members</li>
        </ul>
      </div>

      <div class="form-card">
        <span class="section-tag">02 — Registration</span>
        <h2 class="section-title" style="font-size:clamp(22px,3vw,32px)">Join the League</h2>
        <form action="form-handler.php" method="post">
          <input type="hidden" name="form_type" value="league_signup">

          <div class="hp-field" aria-hidden="true">
            <label for="lg_company">Company (leave this blank)</label>
            <input type="text" id="lg_company" name="company" tabindex="-1" autocomplete="off">
          </div>

          <div class="form-field">
            <label for="lg_name">Your Name</label>
            <input type="text" id="lg_name" name="name" required>
          </div>
          <div class="form-field">
            <label for="lg_email">Email</label>
            <input type="email" id="lg_email" name="email" required>
          </div>
          <div class="form-field">
            <label for="lg_skill">Skill Level</label>
            <select id="lg_skill" name="skill" required>
              <option value="">Choose one…</option>
              <option>First-timer</option>
              <option>Casual player</option>
              <option>League veteran</option>
              <option>Tournament regular</option>
            </select>
          </div>
          <div class="form-field">
            <label for="lg_notes">Notes (optional)</label>
            <textarea id="lg_notes" name="notes" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%">Insert Coin</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     MACHINE ROSTER
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="divider"></div>

    <div class="text-center mb-xl">
      <span class="section-tag">03 — Current Roster</span>
      <h2 class="section-title">Machines on Location</h2>
      <p class="section-desc" style="margin-left:auto;margin-right:auto">
        The current lineup at Fullsteam, dialed in by hand. Roster rotates seasonally.
      </p>
    </div>

    <div class="grid-3">
      <!-- TODO: replace placeholder cards with real machine data -->
      <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="machine-card">
          <img src="assets/images/hero-foreground.png" alt="Machine <?= $i ?>" class="machine-card-image"
               loading="lazy"
               onerror="this.onerror=null;this.src='assets/images/placeholder-mechanism.svg'">
          <div class="machine-card-body">
            <div class="machine-card-meta">Machine #<?= str_pad($i,2,'0',STR_PAD_LEFT) ?></div>
            <h3 class="machine-card-title">Replace with Title</h3>
            <p class="machine-card-desc">Short rule, era, or feature note. Spectral italic feels right here.</p>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
