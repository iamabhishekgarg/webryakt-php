<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'Webryakt. — Web Design & Digital Marketing Agency';
$currentPage = 'home';

include __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container-fluid wrap">
      <div class="hero-grid row align-items-start g-4 g-lg-5">
        <div class="col-12 col-lg-7">
          <span class="hero-left-label eyebrow">DESIGN &amp; MARKETING AGENCY</span>
          <h1 class="hero-title">We craft digital experiences that grow <span>ambitious brands</span>.</h1>
          <p class="hero-description">From first sketch to shipped product, we cover the full stack of building and growing a digital brand — design, marketing, identity and measurement.</p>
          <a href="work.php" class="hero-cta">
            VIEW OUR WORK
            <svg viewBox="0 0 24 12"><path d="M0 6h22M17 1l5 5-5 5"/></svg>
          </a>
        </div>

        <div class="col-12 col-lg-5 hero-right">
          <div class="coords">22.7196° N,<br>75.8577° E</div>
          <div class="hero-img-wrapper">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="Modern Interior Space">
            <div class="hero-overlay-card">
              <div class="badge-w">W.</div>
              <hr class="card-divider">
              <p>Minimal, strategy-led web design &amp; performance marketing built to convert.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services section-with-sidebar">
    <div class="container-fluid wrap d-flex flex-column flex-md-row gap-4">
      <div class="vertical-label-col">
        <span class="vertical-label">WHAT WE DO</span>
      </div>

      <div class="section-content-col w-100">
        <div class="services-layout row g-4 align-items-start">
          <div class="services-header col-12 col-lg-3">
            <h2>Services built to <span>move</span> the numbers.</h2>
            <div class="dot-grid mt-4">
              <svg viewBox="0 0 70 85"></svg>
            </div>
          </div>

          <div class="col-12 col-lg-9">
            <div class="services-grid row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4">
              <?php foreach ($services as $service): ?>
                <div class="col">
                  <div class="service-card">
                    <div class="service-icon">
                      <?= $service['icon'] ?? '' ?>
                    </div>
                    <div>
                      <h3><?= htmlspecialchars($service['title'] ?? '') ?></h3>
                      <p><?= htmlspecialchars($service['short_desc'] ?? $service['desc'] ?? $service['overview'] ?? '') ?></p>
                    </div>
                    <a href="services.php#<?= htmlspecialchars($service['slug'] ?? '') ?>" class="service-link">
                      EXPLORE
                      <svg viewBox="0 0 14 10"><path d="M0 5h12M8 1l4 4-4 4"/></svg>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="portfolio section-with-sidebar">
    <div class="container-fluid wrap d-flex flex-column flex-md-row gap-4">
      <div class="vertical-label-col">
        <span class="vertical-label">OUR WORK</span>
      </div>

      <div class="section-content-col w-100">
        <div class="portfolio-grid row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3">
          <?php foreach ($projects as $project): ?>
            <div class="col">
              <a class="work-card" data-category="<?= htmlspecialchars($project['category_slug'] ?? '') ?>" href="work.php">
                <img src="<?= htmlspecialchars($project['image'] ?? '') ?>" alt="<?= htmlspecialchars($project['alt'] ?? '') ?>">
                <div class="work-card-overlay <?= htmlspecialchars($project['overlay'] ?? '') ?>">
                  <span class="work-tag"><?= htmlspecialchars(strtoupper($project['category'] ?? '')) ?></span>
                  <h3><?= htmlspecialchars($project['title'] ?? '') ?></h3>
                  <span class="arrow-circle">&#8594;</span>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="portfolio-footer text-end mt-4">
          <a href="work.php" class="view-all-link">
            VIEW ALL PROJECTS
            <svg viewBox="0 0 16 10"><path d="M0 5h14M9 1l5 4-5 4"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients Section -->
  <section class="clients trusted section-with-sidebar">
    <div class="container-fluid wrap d-flex flex-column flex-md-row gap-4">
      <div class="vertical-label-col">
        <span class="vertical-label">TRUSTED BY</span>
      </div>

      <div class="section-content-col w-100">
        <div class="clients-grid d-flex flex-wrap justify-content-between align-items-center gap-3">
          <?php foreach ($clientLogos as $idx => $client): ?>
            <div class="client-logo <?= htmlspecialchars($client['class'] ?? '') ?>">
              <?php if (!empty($client['subtext'])): ?>
                <?= htmlspecialchars($client['name'] ?? '') ?> <span><?= htmlspecialchars($client['subtext'] ?? '') ?></span>
              <?php else: ?>
                <?= htmlspecialchars($client['name'] ?? '') ?>
              <?php endif; ?>
            </div>
            <?php if ($idx < count($clientLogos) - 1): ?>
              <div class="divider-v d-none d-md-block"></div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
