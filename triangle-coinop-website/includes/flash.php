<?php
/**
 * Flash message partial — renders form-submission feedback.
 * form-handler.php redirects back with ?sent=ok or ?sent=err.
 * Included once by includes/header.php, just inside <main>.
 */
$flash = $_GET['sent'] ?? '';
if ($flash === 'ok' || $flash === 'err'):
?>
<div class="flash flash--<?= $flash ?>" role="status">
  <div class="container flash-inner">
    <span class="flash-icon" aria-hidden="true"><?= $flash === 'ok' ? '&#10003;' : '!' ?></span>
    <span class="flash-text">
      <?php if ($flash === 'ok'): ?>
        <strong>Coin inserted.</strong> Your message is on its way &mdash; we&rsquo;ll be in touch shortly.
      <?php else: ?>
        <strong>The mechanism jammed.</strong> Your message didn&rsquo;t go through. Give it another pull, or email us directly.
      <?php endif; ?>
    </span>
    <a href="?" class="flash-dismiss" aria-label="Dismiss message">&times;</a>
  </div>
</div>
<?php endif; ?>
