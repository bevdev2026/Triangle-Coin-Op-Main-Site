<?php
/**
 * Shared site header.
 * Pages should require_once 'includes/header.php' after setting $PAGE.
 */
if (!isset($SITE)) { require_once __DIR__ . '/config.php'; }
$current_slug = $PAGE['slug'] ?? 'home';

// Absolute base URL — used for the canonical link + Open Graph tags.
$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host     = $_SERVER['HTTP_HOST'] ?? 'trianglecoinop.com';
$base_url = $scheme . '://' . $host;
$page_url = $base_url . strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($PAGE['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($PAGE['description']) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($page_url) ?>">

  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
  <meta name="theme-color" content="#160804">

  <!-- Open Graph / social cards -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= htmlspecialchars($SITE['brand']) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($PAGE['title']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($PAGE['description']) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($page_url) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($base_url) ?>/assets/images/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Cinzel:wght@400;600;700&family=Spectral:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/tokens.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<header class="site-header" id="siteHeader">
  <div class="container">
    <a href="index.php" class="site-logo">
      <img src="assets/images/1777836309592.png" alt="Triangle Coin Op logo emblem">
    </a>

    <!-- CSS-only mobile menu toggle (works without JavaScript) -->
    <input type="checkbox" id="navState" class="nav-state" aria-label="Toggle navigation menu">
    <label for="navState" class="nav-toggle" aria-hidden="true">
      <span></span><span></span><span></span>
    </label>

    <nav class="site-nav" id="siteNav">
      <?php foreach ($NAV as $item): ?>
        <a href="<?= $item['href'] ?>"
           class="<?= ($current_slug === $item['slug']) ? 'active' : '' ?>">
          <?= htmlspecialchars($item['label']) ?>
        </a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>

<main>
<?php require __DIR__ . '/flash.php'; ?>
