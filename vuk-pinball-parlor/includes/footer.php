</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <div class="footer-brand"><?= htmlspecialchars($SITE['brand']) ?></div>
        <p class="footer-text">
          <?= htmlspecialchars($SITE['tagline']) ?>. Residency at <?= htmlspecialchars($SITE['residency']) ?>.
        </p>
      </div>

      <div class="footer-col">
        <div class="footer-col-title">Quick Links</div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <?php foreach ($NAV as $item): ?>
            <li><a href="<?= $item['href'] ?>"><?= htmlspecialchars($item['label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-col">
        <div class="footer-col-title">Network &amp; Contact</div>
        <ul>
          <li><a href="mailto:<?= htmlspecialchars($SITE['public_email']) ?>"><?= htmlspecialchars($SITE['public_email']) ?></a></li>
          <li><a href="venue-operations.php">Host a Machine</a></li>
          <li><a href="<?= htmlspecialchars($SITE['parent_url']) ?>" target="_blank" rel="noopener">Parent Project</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <?= $SITE['year'] ?> <?= htmlspecialchars($SITE['parent_co']) ?>. All machines maintained with care.</span>
      <span><?= htmlspecialchars($SITE['location']) ?></span>
    </div>
  </div>
</footer>

<script>
  // Sticky header background transition on scroll
  (function() {
    var header = document.getElementById('siteHeader');
    if (!header) return;
    var onScroll = function() {
      if (window.scrollY > 40) header.classList.add('scrolled');
      else header.classList.remove('scrolled');
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  })();
</script>

</body>
</html>
