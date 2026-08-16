<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'Insights — Webryakt';
$currentPage = 'insights';

include __DIR__ . '/includes/header.php';

$featuredPost = $insights[0] ?? null;
$regularPosts = array_slice($insights, 1);
?>

<main>
  <section class="page-hero">
    <div class="container-fluid wrap">
      <p class="eyebrow">Insights &amp; Articles</p>
      <h1>Perspectives on design, digital growth and brand strategy.</h1>
      <p class="lead">Actionable thoughts, detailed case studies and technical breakdowns from our studio team.</p>
    </div>
  </section>

  <section class="section">
    <div class="container-fluid wrap">
      <?php if ($featuredPost): ?>
        <div class="insights-feature row g-4 g-lg-5 align-items-start mb-5 pb-5 border-bottom">
          <div class="col-12 col-lg-7">
            <div class="insight-photo">
              <img src="<?= htmlspecialchars($featuredPost['photo'] ?? '') ?>" alt="<?= htmlspecialchars($featuredPost['title'] ?? '') ?>">
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="insight-copy">
              <div class="insight-meta mb-2">
                <span><?= htmlspecialchars($featuredPost['category'] ?? '') ?></span>
                <span class="date">&bull; <?= htmlspecialchars($featuredPost['date'] ?? '') ?></span>
              </div>
              <h2><?= htmlspecialchars($featuredPost['title'] ?? '') ?></h2>
              <p><?= htmlspecialchars($featuredPost['excerpt'] ?? '') ?></p>
              <a href="#" class="text-link mt-3 d-inline-flex">READ ARTICLE <span class="arrow ms-2">&#8594;</span></a>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <div class="insights-grid row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        <?php foreach ($insights as $post): ?>
          <div class="col">
            <article class="insight-card">
              <div class="insight-photo">
                <img src="<?= htmlspecialchars($post['photo'] ?? '') ?>" alt="<?= htmlspecialchars($post['title'] ?? '') ?>">
              </div>
              <div class="insight-meta">
                <span><?= htmlspecialchars($post['category'] ?? '') ?></span>
                <span class="date">&bull; <?= htmlspecialchars($post['date'] ?? '') ?></span>
              </div>
              <h3><?= htmlspecialchars($post['title'] ?? '') ?></h3>
              <p><?= htmlspecialchars($post['excerpt'] ?? '') ?></p>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
