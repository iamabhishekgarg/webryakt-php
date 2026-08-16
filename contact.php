<?php
require_once __DIR__ . '/config/data.php';

$pageTitle = 'Contact — Webryakt';
$currentPage = 'contact';

$formSuccess = false;
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($name && $email && $message) {
        $formSuccess = true;
    } else {
        $errorMessage = 'Please fill out all required fields with a valid email address.';
    }
}

include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Get In Touch</p>
      <h1>Let's start a conversation about your next growth milestone.</h1>
      <p class="lead">Tell us about your project, your timeline, or your goals. We usually reply within one business day.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="contact-layout">

        <div class="contact-form-wrap">
          <?php if ($formSuccess): ?>
            <div class="form-status visible" style="background:#eefdf4; color:#15803d; border:1px solid #bbf7d0; padding:18px 22px; border-radius:4px; margin-bottom:24px;">
              <strong>Thank you, <?= htmlspecialchars($name) ?>!</strong><br>
              Your message has been received. Our team will get back to you shortly at <?= htmlspecialchars($email) ?>.
            </div>
          <?php endif; ?>

          <?php if ($errorMessage): ?>
            <div class="form-status visible" style="background:#fef2f2; color:#b91c1c; border:1px solid #fecaca; padding:18px 22px; border-radius:4px; margin-bottom:24px;">
              <?= htmlspecialchars($errorMessage) ?>
            </div>
          <?php endif; ?>

          <form class="contact-form" action="contact.php" method="POST" id="contactForm">
            <div class="form-row">
              <div class="field">
                <label for="name">Your Name *</label>
                <input type="text" id="name" name="name" required placeholder="John Doe">
              </div>
              <div class="field">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required placeholder="john@company.com">
              </div>
            </div>

            <div class="form-row">
              <div class="field">
                <label for="company">Company / Organization</label>
                <input type="text" id="company" name="company" placeholder="Acme Inc.">
              </div>
              <div class="field">
                <label for="service">Service Interested In</label>
                <select id="service" name="service">
                  <option value="Web Design">Web Design</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="Branding">Branding</option>
                  <option value="SEO & Analytics">SEO &amp; Analytics</option>
                  <option value="Full Service Partnership">Full Service Partnership</option>
                </select>
              </div>
            </div>

            <div class="field">
              <label for="message">Project Overview *</label>
              <textarea id="message" name="message" required placeholder="Tell us about your project goals, scope, and target timeline..."></textarea>
            </div>

            <button type="submit" class="btn" style="align-self:start; margin-top:8px;">
              Send Message <span class="arrow">&#8594;</span>
            </button>
          </form>
        </div>

        <div class="contact-info">
          <h3>Direct Contact</h3>
          <p>Prefer to reach out directly? Connect with our team via email or call our studio.</p>

          <div class="info-item">
            <div class="ico">&#9993;</div>
            <div>
              <h4>Email Us</h4>
              <a href="mailto:<?= htmlspecialchars($siteConfig['email']) ?>"><?= htmlspecialchars($siteConfig['email']) ?></a>
            </div>
          </div>

          <div class="info-item">
            <div class="ico">&#9742;</div>
            <div>
              <h4>Call Us</h4>
              <a href="tel:<?= preg_replace('/[^0-9+]/', '', $siteConfig['phone']) ?>"><?= htmlspecialchars($siteConfig['phone']) ?></a>
            </div>
          </div>

          <div class="info-item">
            <div class="ico">&#8982;</div>
            <div>
              <h4>Location</h4>
              <p><?= htmlspecialchars($siteConfig['location']) ?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
