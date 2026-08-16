<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'Services — Webryakt';
$currentPage = 'services';

include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">What We Do</p>
      <h1>Services built to move the numbers that matter.</h1>
      <p class="lead">From first sketch to shipped product, we cover the full stack of building and growing a digital brand — design, marketing, identity and measurement.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="service-detail-list">
        <?php foreach ($services as $service): ?>
          <div class="service-detail" id="<?= htmlspecialchars($service['slug']) ?>">
            <span class="idx"><?= htmlspecialchars($service['id']) ?></span>
            <h3><?= htmlspecialchars($service['title']) ?></h3>
            <div>
              <p><?= htmlspecialchars($service['overview']) ?></p>
              <div class="tag-list">
                <?php foreach ($service['tags'] as $tag): ?>
                  <span><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="section-head">
        <span class="rail-label">How we work</span>
        <h2>A process built for <em>clarity</em>, not guesswork.</h2>
        <p>Every engagement follows the same disciplined path — so you always know what's next and why.</p>
      </div>

      <div class="process-row">
        <?php foreach ($processSteps as $step): ?>
          <div class="process-step">
            <span class="num"><?= htmlspecialchars($step['id']) ?> — <?= htmlspecialchars($step['phase']) ?></span>
            <h4><?= htmlspecialchars($step['title']) ?></h4>
            <p><?= htmlspecialchars($step['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
