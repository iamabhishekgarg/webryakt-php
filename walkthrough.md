# Pixel-Perfect Grid Alignment Walkthrough

Updated the Webryakt design system and template layout wrappers to guarantee strict, single-pixel alignment between the header logo (`Webryakt.`) and all page content across every sub-page.

---

## Technical Audit & Key Enhancements

1. **Fixed Container Padding Framework (`styles.css`)**:
   - Replaced fluid `clamp(20px, 4vw, 40px)` padding with fixed grid alignment tokens:
     ```css
     .wrap, .container {
       width: 100%;
       max-width: var(--container-max); /* 1240px */
       margin-left: auto;
       margin-right: auto;
       padding-left: 40px;
       padding-right: 40px;
     }
     ```
   - Eliminates viewport fluid calculation variances that caused sub-page headings and cards to shift relative to the header logo.

2. **Template Layout Standardization**:
   - Standardized layout wrappers in `includes/header.php`, `includes/footer.php`, `includes/cta.php`, `index.php`, `work.php`, `services.php`, `about.php`, `insights.php`, and `contact.php` to use the `.container` class.
   - Guaranteed alignment down the exact same vertical guide:
     - Header Logo (`Webryakt.`)
     - Sub-page Eyebrows (`SELECTED WORK`, `WHAT WE DO`, `ABOUT WEBRYAKT`, `INSIGHTS & ARTICLES`, `GET IN TOUCH`)
     - Sub-page Main Headings (`h1`) and Lead Copy (`p.lead`)
     - Portfolio Filter Buttons (`.filter-row`)
     - Portfolio Card Grid (`.portfolio-grid`)
     - Services Breakdown List (`.service-detail-list`)
     - Contact Form Fields (`.contact-form`)
     - Footer Brand Column (`.footer-brand`)

---

## Verification Results

- Executed PHP Syntax Check across all 10 codebase files:
  ```bash
  php -l config/data.php includes/header.php includes/footer.php includes/cta.php index.php work.php services.php about.php insights.php contact.php
  ```
  **Result**: `No syntax errors detected` across all files.

- Server Verification:
  All page routes tested on local PHP dev server `http://localhost:8000`. Content renders cleanly with HTTP 200 responses.
