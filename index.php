<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = $siteConfig['title'];
$currentPage = 'home';

include __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-left">
          <span class="hero-left-label">WEB DESIGN &amp; DIGITAL MARKETING AGENCY</span>
          <h1>Corporate<br>Creativity<span>.</span><br>Intelligent<br>Growth<span>.</span></h1>
          <p class="hero-description"><?= htmlspecialchars($siteConfig['description']) ?></p>
          <a href="work.php" class="hero-cta">
            VIEW OUR WORK
            <svg viewBox="0 0 24 12"><path d="M0 6h22M17 1l5 5-5 5"/></svg>
          </a>
        </div>
        <div class="hero-right">
          <div class="coords"><?= htmlspecialchars($siteConfig['coords']['lat']) ?>,<br><?= htmlspecialchars($siteConfig['coords']['lng']) ?></div>
          <div class="hero-img-wrapper">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="Modern Architecture">
            <!-- W. Overlay Card -->
            <div class="hero-overlay-card">
              <div class="badge-w">W.</div>
              <div class="card-divider"></div>
              <p>Strategy-led design.<br>Performance-driven marketing.<br>Real impact.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services" id="services">
    <div class="container">
      <div class="section-with-sidebar">
        <div class="vertical-label-col">
          <div class="vertical-label">WHAT WE DO</div>
        </div>
        <div class="section-content-col">
          <div class="services-layout">
            <div class="services-header">
              <h2>Solutions that<br>move your<br>business <span>forward.</span></h2>
              <div class="dot-pattern" aria-hidden="true">
                <span></span><span></span><span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span><span></span><span></span>
              </div>
            </div>
            <div class="services-grid">
              <?php foreach ($services as $service): ?>
                <div class="service-card" id="<?= htmlspecialchars($service['slug']) ?>">
                  <div>
                    <div class="service-icon">
                      <?= $service['icon'] ?>
                    </div>
                    <h3><?= htmlspecialchars($service['title']) ?></h3>
                    <p><?= htmlspecialchars($service['desc']) ?></p>
                  </div>
                  <a href="services.php#<?= htmlspecialchars($service['slug']) ?>" class="service-link">
                    LEARN MORE
                    <svg viewBox="0 0 24 12"><path d="M0 6h22M17 1l5 5-5 5"/></svg>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="portfolio" id="work">
    <div class="container">
      <div class="section-with-sidebar">
        <div class="vertical-label-col">
          <div class="vertical-label">OUR WORK</div>
        </div>
        <div class="section-content-col">
          <div class="portfolio-grid">
            <?php 
            $homeProjects = array_slice($projects, 0, 4);
            foreach ($homeProjects as $project): 
            ?>
              <div class="portfolio-item">
                <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['alt']) ?>">
                <div class="portfolio-overlay">
                  <span class="portfolio-category"><?= htmlspecialchars(strtoupper($project['category'])) ?></span>
                  <h3 class="portfolio-title"><?= htmlspecialchars($project['title']) ?></h3>
                  <svg class="portfolio-arrow" viewBox="0 0 24 12"><path d="M0 6h22M17 1l5 5-5 5"/></svg>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="portfolio-footer">
            <a href="work.php" class="view-all-link">
              VIEW ALL PROJECTS
              <svg viewBox="0 0 24 12"><path d="M0 6h22M17 1l5 5-5 5"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients Section -->
  <section class="clients">
    <div class="container">
      <div class="section-with-sidebar">
        <div class="vertical-label-col">
          <div class="vertical-label">TRUSTED BY</div>
        </div>
        <div class="section-content-col">
          <div class="clients-grid">
            <?php 
            $count = count($brands);
            foreach ($brands as $index => $brand): 
            ?>
              <div class="<?= htmlspecialchars($brand['class']) ?>"><?= $brand['html'] ?></div>
              <?php if ($index < $count - 1): ?>
                <div class="divider-v"></div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
