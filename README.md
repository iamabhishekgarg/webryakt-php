# Webryakt — Modern Web Design & Digital Marketing Agency

Webryakt is a dynamic, lightweight PHP web application built with a modern design system, responsive grid layout, and a centralized configuration data model.

---

## 🌟 Key Features

- **Dynamic PHP Architecture**: 100% standalone PHP site with reusable component includes (`header.php`, `footer.php`, `cta.php`) — no database setup required.
- **Centralized Data Model (`config/data.php`)**: All agency services, portfolio projects, client brand logos, testimonials, and insights are driven from a single data source.
- **Design System & Typography**: Custom CSS using **Plus Jakarta Sans** Google Font, curated HSL color tokens (`#2563eb`, `#1d40b0`, `#070e20`), glassmorphic header, and micro-interactions.
- **Pixel-Perfect Grid Alignment**: Master `.container` layout wrapper (1240px max-width) enforcing consistent margin and padding guides across header logo, hero text, card grids, forms, and footer.
- **Interactive Component Systems**:
  - Filtering portfolio projects by industry (`Technology`, `Real Estate`, `Healthcare`, `Lifestyle`).
  - Native POST contact form validation with inline feedback status.
  - Responsive mobile drawer navigation menu with smooth transitions.

---

## 📂 Project Structure

```text
Webryakt/
├── config/
│   └── data.php          # Centralized dynamic data configuration (nav, services, portfolio, client logos)
├── includes/
│   ├── header.php        # Site header component with dynamic active nav highlighting
│   ├── footer.php        # Site footer component with dynamic copyright year
│   └── cta.php           # Reusable call-to-action banner component
├── about.php             # Studio story, stat counters, and core values page
├── contact.php           # Project inquiry page with server-side POST validation
├── index.php             # Homepage with hero overlay box and sidebar rail architecture
├── insights.php          # Agency blog and featured article layout
├── services.php         # Detailed service breakdown and 4-step process row
├── work.php             # Interactive portfolio project gallery with category filters
├── styles.css            # Complete design system stylesheet & responsive breakpoints
├── script.js            # Vanilla JS for portfolio filter, mobile menu, and animations
├── .gitignore            # Git exclusion rules
└── README.md             # Documentation
```

---

## 🚀 Local Setup & Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/iamabhishekgarg/webryakt-php.git
cd webryakt-php
```

### Step 2: Running the Local Server

#### Option A: Using Local's PHP Binary on macOS
If you use Local or do not have global PHP in your `PATH`, run:
```bash
"/Users/abhishekgarg/Library/Application Support/Local/lightning-services/php-8.3.30+1/bin/darwin-arm64/bin/php" -S localhost:8000
```

#### Option B: Enable global `php` command in macOS Terminal
Add the PHP 8.3 alias to your Zsh profile:
```bash
echo 'alias php="/Users/abhishekgarg/Library/Application Support/Local/lightning-services/php-8.3.30+1/bin/darwin-arm64/bin/php"' >> ~/.zshrc
source ~/.zshrc
```
Then run:
```bash
php -S localhost:8000
```

#### Option C: Install PHP via Homebrew
```bash
brew install php
php -S localhost:8000
```

### Step 3: Open in Browser
Visit `http://localhost:8000` in your web browser.

---

## 🌐 Page Overview & Routes

| Route | Description |
| :--- | :--- |
| `http://localhost:8000/index.php` | Homepage featuring overlay card, services overview, portfolio grid, and client logos. |
| `http://localhost:8000/work.php` | Portfolio gallery with category filter buttons. |
| `http://localhost:8000/services.php` | Detailed agency offerings & 4-phase process workflow (`Discover`, `Design`, `Build`, `Grow`). |
| `http://localhost:8000/about.php` | Studio narrative, performance statistics, and company values. |
| `http://localhost:8000/insights.php` | Perspectives & thought leadership articles layout. |
| `http://localhost:8000/contact.php` | Interactive inquiry form with PHP POST handler & direct contact details. |

---

## 💻 Tech Stack

- **Backend**: PHP 8.3 (Native Templating)
- **Frontend**: HTML5, Vanilla JavaScript (ES6)
- **Styling**: Modern CSS3 (Variables, Flexbox, CSS Grid, Media Queries)
- **Typography**: Plus Jakarta Sans (Google Fonts)

---

## 📄 License
Created for Webryakt Solutions Pvt. Ltd. All rights reserved.
