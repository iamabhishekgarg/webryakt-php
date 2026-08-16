<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'Services — Webryakt';
$currentPage = 'services';

include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container-fluid wrap">
      <p class="eyebrow">What We Do</p>
      <h1>Services built to move the numbers that matter.</h1>
      <p class="lead">From first sketch to shipped product, we cover the full stack of building and growing a digital brand — design, marketing, identity and measurement.</p>
    </div>
  </section>

  <section class="section">
    <div class="container-fluid wrap">
      <div class="service-detail-list">
        <?php foreach ($services as $service): ?>
          <div class="service-detail row g-3 g-md-4 py-4 align-items-start" id="<?= htmlspecialchars($service['slug'] ?? '') ?>">
            <div class="col-12 col-sm-2 col-md-1">
              <span class="idx"><?= htmlspecialchars($service['id'] ?? '') ?></span>
            </div>
            <div class="col-12 col-sm-10 col-md-4 col-lg-3">
              <h3><?= htmlspecialchars($service['title'] ?? '') ?></h3>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
              <p><?= htmlspecialchars($service['overview'] ?? $service['desc'] ?? '') ?></p>
              <div class="tag-list d-flex flex-wrap gap-2 mt-3">
                <?php foreach (($service['tags'] ?? []) as $tag): ?>
                  <span><?= htmlspecialchars($tag ?? '') ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section pt-0">
    <div class="container-fluid wrap">
      <div class="section-head mb-5">
        <span class="rail-label mb-3">How we work</span>
        <div class="row g-4 align-items-end">
          <div class="col-12 col-lg-7">
            <h2>A process built for <em>clarity</em>, not guesswork.</h2>
          </div>
          <div class="col-12 col-lg-5">
            <p>Every engagement follows the same disciplined path — so you always know what's next and why.</p>
          </div>
        </div>
      </div>

      <div class="process-row row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        <?php foreach ($processSteps as $step): ?>
          <div class="col">
            <div class="process-step">
              <span class="num"><?= htmlspecialchars($step['id'] ?? '') ?> — <?= htmlspecialchars($step['phase'] ?? '') ?></span>
              <h4><?= htmlspecialchars($step['title'] ?? '') ?></h4>
              <p><?= htmlspecialchars($step['desc'] ?? '') ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
