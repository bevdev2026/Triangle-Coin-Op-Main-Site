<?php
require_once 'includes/config.php';
$PAGE = [
  'title'       => 'Venue Operations — ' . $SITE['parent_co'],
  'description' => 'Coin-op pinball placements for high-traffic commercial spaces. Curated, maintained, league-driven.',
  'slug'        => 'venue',
];
require_once 'includes/header.php';
?>

<!-- ============================================================
     SHORT HERO
     ============================================================ -->
<section class="hero hero-short" style="background: linear-gradient(135deg, var(--gunmetal) 0%, #1E2E38 100%);">
  <div class="hero-corner hero-corner--tl" style="border-color: var(--steel-pale)!important;"></div>
  <div class="hero-corner hero-corner--tr" style="border-color: var(--steel-pale)!important;"></div>
  <div class="hero-corner hero-corner--bl" style="border-color: var(--steel-pale)!important;"></div>
  <div class="hero-corner hero-corner--br" style="border-color: var(--steel-pale)!important;"></div>

  <div class="hero-inner">
    <div class="hero-eyebrow" style="color: var(--steel-light);"><?= htmlspecialchars($SITE['parent_co']) ?></div>
    <h1 class="hero-title" style="color: var(--steel-pale); text-shadow: 0 4px 24px rgba(168,194,204,0.3);">Venue Operations</h1>
    <p class="hero-tagline" style="color: var(--steel-pale);">Coin-Op Architecture for Commercial Spaces</p>
  </div>
</section>

<!-- ============================================================
     VALUE PROPOSITION — 4 ICONS
     ============================================================ -->
<section class="section section-steel">
  <div class="container">
    <div class="text-center mb-xl">
      <span class="section-tag" style="color: var(--steel-pale); border-color: var(--steel-light); background: rgba(168,194,204,0.08);">01 — Value Proposition</span>
      <h2 class="section-title" style="color: var(--steel-pale);">What We Bring</h2>
    </div>

    <div class="grid-4">
      <div class="feature">
        <!-- Compass icon -->
        <svg class="feature-icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--steel-pale);">
          <circle cx="32" cy="32" r="26"/>
          <circle cx="32" cy="32" r="3" fill="currentColor"/>
          <path d="M32 8 L36 32 L32 56 L28 32 Z" fill="currentColor" opacity="0.6"/>
        </svg>
        <h3 class="feature-title">Curated Placements</h3>
        <p class="feature-desc">Machines matched to your venue's clientele, square footage, and traffic patterns.</p>
      </div>

      <div class="feature">
        <!-- Key icon -->
        <svg class="feature-icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--steel-pale);">
          <circle cx="20" cy="32" r="10"/>
          <path d="M28 32 L56 32 M48 32 L48 42 M40 32 L40 40"/>
          <circle cx="20" cy="32" r="3" fill="currentColor"/>
        </svg>
        <h3 class="feature-title">Turn-Key Operation</h3>
        <p class="feature-desc">Delivery, install, licensing, and revenue share — handled. Zero operational lift on your team.</p>
      </div>

      <div class="feature">
        <!-- Valve icon -->
        <svg class="feature-icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--steel-pale);">
          <circle cx="32" cy="32" r="18"/>
          <circle cx="32" cy="32" r="6" fill="currentColor"/>
          <line x1="32" y1="6"  x2="32" y2="18"/>
          <line x1="32" y1="46" x2="32" y2="58"/>
          <line x1="6"  y1="32" x2="18" y2="32"/>
          <line x1="46" y1="32" x2="58" y2="32"/>
        </svg>
        <h3 class="feature-title">Maintenance &amp; Tuning</h3>
        <p class="feature-desc">Routine service, on-call repairs, and the kind of dial-in only operators care about.</p>
      </div>

      <div class="feature">
        <!-- Lightbulb icon -->
        <svg class="feature-icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--steel-pale);">
          <path d="M32 8 C22 8 16 16 16 24 C16 30 20 34 24 38 L24 46 L40 46 L40 38 C44 34 48 30 48 24 C48 16 42 8 32 8 Z"/>
          <line x1="26" y1="52" x2="38" y2="52"/>
          <line x1="28" y1="58" x2="36" y2="58"/>
        </svg>
        <h3 class="feature-title">League Traffic</h3>
        <p class="feature-desc">Recurring nights bring repeat patrons. Pinball draws a loyal crowd that drinks, eats, and stays.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     INTAKE & CONTACT
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="grid-2">
      <div>
        <span class="section-tag">02 — Get In Touch</span>
        <h2 class="section-title">Maximize Your Square Footage</h2>
        <p class="section-desc">
          Masterfully maintained machines that earn their floor space. We handle the logistics,
          licensing, and upkeep. You collect the foot traffic.
        </p>
        <p class="section-desc" style="opacity:0.7;font-size:14px;">
          Inquiries route directly to <?= htmlspecialchars($SITE['parent_co']) ?> for intake.
          Expect a reply within 2 business days.
        </p>
      </div>

      <div class="form-card">
        <form action="form-handler.php" method="post">
          <input type="hidden" name="form_type" value="venue_intake">

          <div class="hp-field" aria-hidden="true">
            <label for="vn_company">Company (leave this blank)</label>
            <input type="text" id="vn_company" name="company" tabindex="-1" autocomplete="off">
          </div>

          <div class="form-field">
            <label for="vn_venue">Venue Name</label>
            <input type="text" id="vn_venue" name="venue_name" required>
          </div>
          <div class="form-field">
            <label for="vn_location">Location (City, State)</label>
            <input type="text" id="vn_location" name="location" required>
          </div>
          <div class="form-field">
            <label for="vn_traffic">Estimated Weekly Foot Traffic</label>
            <select id="vn_traffic" name="foot_traffic" required>
              <option value="">Choose a range…</option>
              <option>Under 500</option>
              <option>500 – 1,500</option>
              <option>1,500 – 5,000</option>
              <option>Over 5,000</option>
            </select>
          </div>
          <div class="form-field">
            <label for="vn_contact">Contact Name</label>
            <input type="text" id="vn_contact" name="contact_name" required>
          </div>
          <div class="form-field">
            <label for="vn_email">Email</label>
            <input type="email" id="vn_email" name="email" required>
          </div>
          <div class="form-field">
            <label for="vn_notes">Tell us about your space</label>
            <textarea id="vn_notes" name="notes" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-steel" style="width:100%">Send Intake</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
