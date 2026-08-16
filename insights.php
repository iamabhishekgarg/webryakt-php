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
    <div class="container">
      <p class="eyebrow">Insights &amp; Articles</p>
      <h1>Perspectives on design, digital growth and brand strategy.</h1>
      <p class="lead">Actionable thoughts, detailed case studies and technical breakdowns from our studio team.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <?php if ($featuredPost): ?>
        <div class="insights-feature">
          <div class="insight-photo">
            <img src="<?= htmlspecialchars($featuredPost['photo']) ?>" alt="<?= htmlspecialchars($featuredPost['title']) ?>">
          </div>
          <div class="insight-copy">
            <div class="insight-meta">
              <span><?= htmlspecialchars($featuredPost['category']) ?></span>
              <span class="date">&bull; <?= htmlspecialchars($featuredPost['date']) ?></span>
            </div>
            <h2><?= htmlspecialchars($featuredPost['title']) ?></h2>
            <p><?= htmlspecialchars($featuredPost['excerpt']) ?></p>
            <a href="#" class="text-link" style="margin-top:20px;">READ ARTICLE <span class="arrow">&#8594;</span></a>
          </div>
        </div>
      <?php endif; ?>

      <div class="insights-grid">
        <?php foreach ($insights as $post): ?>
          <article class="insight-card">
            <div class="insight-photo">
              <img src="<?= htmlspecialchars($post['photo']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
            </div>
            <div class="insight-meta">
              <span><?= htmlspecialchars($post['category']) ?></span>
              <span class="date">&bull; <?= htmlspecialchars($post['date']) ?></span>
            </div>
            <h3><?= htmlspecialchars($post['title']) ?></h3>
            <p><?= htmlspecialchars($post['excerpt']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
