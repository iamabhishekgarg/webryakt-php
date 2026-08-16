<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'About — Webryakt';
$currentPage = 'about';

include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">About Webryakt</p>
      <h1>A small studio, built for brands with big ambitions.</h1>
      <p class="lead">We're a team of designers, strategists and marketers who believe the best growth comes from work that's both thoughtful and measurable.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="story-block">
        <div class="story-photo">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=900&q=80" alt="Design team collaborating around a table">
        </div>
        <div class="story-copy">
          <p class="eyebrow">Our story</p>
          <p>Webryakt started with a simple frustration: too many agencies treated design and marketing as separate disciplines, handed off between teams that never really talked to each other.</p>
          <p>We built Webryakt to close that gap — a single team that designs the experience and drives the strategy behind it, so every decision serves the same goal: real business impact.</p>
          <p>Today we work with technology companies, real estate developers, healthcare providers and lifestyle brands across India and beyond, blending strategy, creativity and technology into work that performs as well as it looks.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="stat-row">
        <?php foreach ($stats as $stat): ?>
          <div class="stat">
            <strong><?= htmlspecialchars($stat['number']) ?></strong>
            <span><?= htmlspecialchars($stat['label']) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-head">
        <span class="rail-label">Our values</span>
        <h2>What guides <em>every</em> project we take on.</h2>
        <p>Principles we hold ourselves to, on every brief, for every client, every time.</p>
      </div>

      <div class="values-grid">
        <?php foreach ($values as $val): ?>
          <div class="value-card">
            <span class="num"><?= htmlspecialchars($val['id']) ?></span>
            <h3><?= htmlspecialchars($val['title']) ?></h3>
            <p><?= htmlspecialchars($val['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
