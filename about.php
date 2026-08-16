<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'About — Webryakt';
$currentPage = 'about';

include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container-fluid wrap">
      <p class="eyebrow">About Webryakt</p>
      <h1>A small studio, built for brands with big ambitions.</h1>
      <p class="lead">We're a team of designers, strategists and marketers who believe the best growth comes from work that's both thoughtful and measurable.</p>
    </div>
  </section>

  <section class="section">
    <div class="container-fluid wrap">
      <div class="story-block row g-4 g-lg-5 align-items-start">
        <div class="col-12 col-lg-5">
          <div class="story-photo">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=900&q=80" alt="Design team collaborating around a table">
          </div>
        </div>
        <div class="col-12 col-lg-7">
          <div class="story-copy">
            <p class="eyebrow">Our story</p>
            <p>Webryakt started with a simple frustration: too many agencies treated design and marketing as separate disciplines, handed off between teams that never really talked to each other.</p>
            <p>We built Webryakt to close that gap — a single team that designs the experience and drives the strategy behind it, so every decision serves the same goal: real business impact.</p>
            <p>Today we work with technology companies, real estate developers, healthcare providers and lifestyle brands across India and beyond, blending strategy, creativity and technology into work that performs as well as it looks.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section pt-0">
    <div class="container-fluid wrap">
      <div class="stat-row row row-cols-2 row-cols-md-4 g-2 g-md-3">
        <?php foreach ($stats as $stat): ?>
          <div class="col">
            <div class="stat">
              <strong><?= htmlspecialchars($stat['number'] ?? '') ?></strong>
              <span><?= htmlspecialchars($stat['label'] ?? '') ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container-fluid wrap">
      <div class="section-head mb-5">
        <span class="rail-label mb-3">Our values</span>
        <div class="row g-4 align-items-end">
          <div class="col-12 col-lg-7">
            <h2>What guides <em>every</em> project we take on.</h2>
          </div>
          <div class="col-12 col-lg-5">
            <p>Principles we hold ourselves to, on every brief, for every client, every time.</p>
          </div>
        </div>
      </div>

      <div class="values-grid row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        <?php foreach ($values as $val): ?>
          <div class="col">
            <div class="value-card">
              <span class="num"><?= htmlspecialchars($val['id'] ?? '') ?></span>
              <h3><?= htmlspecialchars($val['title'] ?? '') ?></h3>
              <p><?= htmlspecialchars($val['desc'] ?? '') ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
