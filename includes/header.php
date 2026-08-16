<?php
if (!isset($siteConfig)) {
    require_once __DIR__ . '/../config/data.php';
}

$pageTitle = $pageTitle ?? $siteConfig['title'];
$currentPage = $currentPage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header -->
<header>
  <div class="container">
    <nav>
      <a href="index.php" class="logo"><?= htmlspecialchars($siteConfig['name']) ?><span>.</span></a>

      <ul class="nav-links" id="navLinks">
        <?php foreach ($navItems as $nav): ?>
          <li>
            <a href="<?= $nav['url'] ?>" class="<?= ($currentPage === $nav['key']) ? 'active' : '' ?>">
              <?= htmlspecialchars($nav['label']) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <button class="hamburger" id="hamburger" aria-label="Toggle Menu">
        <span></span>
        <span></span>
      </button>
    </nav>
  </div>
</header>
