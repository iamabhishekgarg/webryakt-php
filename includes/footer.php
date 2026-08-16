<?php
if (!isset($siteConfig)) {
    require_once __DIR__ . '/../config/data.php';
}
?>
<!-- Footer -->
<footer>
  <div class="container-fluid wrap">
    <div class="footer-grid row g-4">
      <div class="footer-brand col-12 col-lg-4 col-xl-4">
        <a href="index.php" class="logo"><?= htmlspecialchars($siteConfig['name']) ?><span>.</span></a>
        <p><?= htmlspecialchars($siteConfig['description']) ?></p>
        <div class="social-links">
          <a href="<?= $siteConfig['social']['linkedin'] ?>" target="_blank" rel="noopener">in</a>
          <a href="<?= $siteConfig['social']['instagram'] ?>" target="_blank" rel="noopener">ig</a>
          <a href="<?= $siteConfig['social']['dribbble'] ?>" target="_blank" rel="noopener">dribbble</a>
          <a href="<?= $siteConfig['social']['behance'] ?>" target="_blank" rel="noopener">Be</a>
        </div>
      </div>

      <div class="footer-column col-6 col-sm-4 col-lg-2">
        <h4>Company</h4>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Our Process</a></li>
          <li><a href="about.php">Careers</a></li>
          <li><a href="about.php">Testimonials</a></li>
        </ul>
      </div>

      <div class="footer-column col-6 col-sm-4 col-lg-2">
        <h4>Services</h4>
        <ul>
          <?php foreach ($services as $service): ?>
            <li><a href="services.php#<?= $service['slug'] ?>"><?= htmlspecialchars($service['title']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-column col-6 col-sm-4 col-lg-2">
        <h4>Resources</h4>
        <ul>
          <li><a href="insights.php">Blog</a></li>
          <li><a href="work.php">Case Studies</a></li>
          <li><a href="insights.php">Guides</a></li>
          <li><a href="contact.php">FAQs</a></li>
        </ul>
      </div>

      <div class="footer-column footer-contact col-6 col-sm-6 col-lg-2">
        <h4>Contact</h4>
        <p><a href="mailto:<?= htmlspecialchars($siteConfig['email']) ?>"><?= htmlspecialchars($siteConfig['email']) ?></a></p>
        <p><a href="tel:<?= preg_replace('/[^0-9+]/', '', $siteConfig['phone']) ?>"><?= htmlspecialchars($siteConfig['phone']) ?></a></p>
        <p><?= htmlspecialchars($siteConfig['location']) ?></p>
      </div>
    </div>

    <div class="footer-bottom d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">
      <div>© <?= date('Y') ?> <?= htmlspecialchars($siteConfig['name']) ?> Solutions Pvt. Ltd. All rights reserved.</div>
      <div class="footer-bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap 5.3 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="script.js"></script>
</body>
</html>
