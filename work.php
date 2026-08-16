<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'Work — Webryakt';
$currentPage = 'work';

include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container-fluid wrap">
      <p class="eyebrow">Selected Work</p>
      <h1>Projects built with strategy, craft &amp; a point of view.</h1>
      <p class="lead">A look at the platforms, brands and campaigns we've shipped for technology companies, real estate developers, healthcare providers and lifestyle brands.</p>
    </div>
  </section>

  <section class="portfolio">
    <div class="container-fluid wrap">
      <div class="filter-row d-flex flex-wrap gap-2 mb-4" id="filterRow">
        <button class="filter-btn active" data-filter="all">All Work</button>
        <button class="filter-btn" data-filter="technology">Technology</button>
        <button class="filter-btn" data-filter="real-estate">Real Estate</button>
        <button class="filter-btn" data-filter="healthcare">Healthcare</button>
        <button class="filter-btn" data-filter="lifestyle">Lifestyle</button>
      </div>

      <div class="portfolio-grid row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-3" id="portfolioGrid">
        <?php foreach ($projects as $project): ?>
          <div class="col work-card-wrapper" data-category="<?= htmlspecialchars($project['category_slug']) ?>">
            <a class="work-card w-100" href="#">
              <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['alt']) ?>">
              <div class="work-card-overlay <?= htmlspecialchars($project['overlay']) ?>">
                <span class="work-tag"><?= htmlspecialchars(strtoupper($project['category'])) ?></span>
                <h3><?= htmlspecialchars($project['title']) ?></h3>
                <span class="arrow-circle">&#8594;</span>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
