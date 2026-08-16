<?php
if (!isset($siteConfig)) {
    require_once __DIR__ . '/../config/data.php';
}
?>
<!-- Footer -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="logo"><?= htmlspecialchars($siteConfig['name']) ?><span>.</span></a>
        <p><?= htmlspecialchars($siteConfig['description']) ?></p>
        <div class="social-links">
          <a href="<?= $siteConfig['social']['linkedin'] ?>">in</a>
          <a href="<?= $siteConfig['social']['instagram'] ?>">ig</a>
          <a href="<?= $siteConfig['social']['dribbble'] ?>">dribbble</a>
          <a href="<?= $siteConfig['social']['behance'] ?>">Be</a>
        </div>
      </div>

      <div class="footer-column">
        <h4>Company</h4>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Our Process</a></li>
          <li><a href="about.php">Careers</a></li>
          <li><a href="about.php">Testimonials</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h4>Services</h4>
        <ul>
          <?php foreach ($services as $service): ?>
            <li><a href="services.php#<?= $service['slug'] ?>"><?= htmlspecialchars($service['title']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-column">
        <h4>Resources</h4>
        <ul>
          <li><a href="insights.php">Blog</a></li>
          <li><a href="work.php">Case Studies</a></li>
          <li><a href="insights.php">Guides</a></li>
          <li><a href="contact.php">FAQs</a></li>
        </ul>
      </div>

      <div class="footer-column footer-contact">
        <h4>Contact</h4>
        <p><a href="mailto:<?= htmlspecialchars($siteConfig['email']) ?>"><?= htmlspecialchars($siteConfig['email']) ?></a></p>
        <p><a href="tel:<?= preg_replace('/[^0-9+]/', '', $siteConfig['phone']) ?>"><?= htmlspecialchars($siteConfig['phone']) ?></a></p>
        <p><?= htmlspecialchars($siteConfig['location']) ?></p>
      </div>
    </div>

    <div class="footer-bottom">
      <div>© <?= date('Y') ?> <?= htmlspecialchars($siteConfig['name']) ?> Solutions Pvt. Ltd. All rights reserved.</div>
      <div class="footer-bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
