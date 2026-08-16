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

<!-- Google Fonts: Plus Jakarta Sans -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

<!-- Bootstrap 5.3 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!-- Custom Stylesheet -->
<link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header -->
<header class="site-header">
  <div class="container-fluid wrap">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <a href="index.php" class="logo navbar-brand me-auto"><?= htmlspecialchars($siteConfig['name']) ?><span>.</span></a>

      <button class="hamburger navbar-toggler border-0 p-1" id="hamburger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
        <ul class="nav-links navbar-nav align-items-lg-center gap-lg-4 mt-3 mt-lg-0" id="navLinks">
          <?php foreach ($navItems as $nav): ?>
            <li class="nav-item">
              <a href="<?= $nav['url'] ?>" class="nav-link <?= ($currentPage === $nav['key']) ? 'active' : '' ?>">
                <?= htmlspecialchars($nav['label']) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </div>
</header>
