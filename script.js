// ============ Mobile nav toggle ============
const navToggle = document.getElementById('hamburger') || document.getElementById('navToggle');
const mainNav = document.getElementById('navLinks') || document.getElementById('mainNav');

if (navToggle && mainNav) {
  mainNav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      const navbarCollapse = document.getElementById('navbarContent');
      if (navbarCollapse && window.bootstrap) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) bsCollapse.hide();
      }
    });
  });
}

// ============ Decorative dot grid ("What we do" panel) ============
(function buildDotGrid(){
  const svg = document.querySelector('.dot-grid svg');
  if (!svg) return;

  const cols = 5;
  const rows = 6;
  const spacing = 16;
  const radius = 1.5;

  let markup = '';
  for (let r = 0; r < rows; r++) {
    for (let c = 0; c < cols; c++) {
      const cx = c * spacing + radius;
      const cy = r * spacing + radius;
      markup += `<circle cx="${cx}" cy="${cy}" r="${radius}"></circle>`;
    }
  }
  svg.setAttribute('viewBox', `0 0 ${(cols - 1) * spacing + radius * 2} ${(rows - 1) * spacing + radius * 2}`);
  svg.innerHTML = markup;
})();

// ============ Smooth Scroll Reveal with Micro-Stagger ============
const revealTargets = document.querySelectorAll('.service-card, .work-card, .portfolio-item, .insight-card, .value-card, .service-detail, .process-step, .stat');

if ('IntersectionObserver' in window && revealTargets.length) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-revealed');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  revealTargets.forEach((el, index) => {
    el.classList.add('reveal-item');
    el.style.transitionDelay = `${(index % 4) * 0.1}s`;
    io.observe(el);
  });
}

// ============ Animated Stat Number Counter ============
const statElements = document.querySelectorAll('.stat strong');
if ('IntersectionObserver' in window && statElements.length) {
  const statIO = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const text = el.innerText.trim();
        const match = text.match(/(\d+)(.*)/);
        if (match) {
          const targetNum = parseInt(match[1], 10);
          const suffix = match[2] || '';
          let current = 0;
          const duration = 1500;
          const stepTime = 30;
          const steps = duration / stepTime;
          const increment = targetNum / steps;

          const timer = setInterval(() => {
            current += increment;
            if (current >= targetNum) {
              el.innerText = targetNum + suffix;
              clearInterval(timer);
            } else {
              el.innerText = Math.floor(current) + suffix;
            }
          }, stepTime);
        }
        statIO.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  statElements.forEach(el => statIO.observe(el));
}

// ============ Sticky header shadow & glass effect on scroll ============
const header = document.querySelector('header, .site-header');
if (header) {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 12) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });
}

// ============ Portfolio filter (work.php) ============
const filterRow = document.getElementById('filterRow');
const portfolioGrid = document.getElementById('portfolioGrid');

if (filterRow && portfolioGrid) {
  const cards = portfolioGrid.querySelectorAll('.work-card-wrapper, .work-card, .portfolio-item');

  filterRow.addEventListener('click', (e) => {
    const btn = e.target.closest('.filter-btn');
    if (!btn) return;

    filterRow.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const filter = btn.dataset.filter;
    cards.forEach(card => {
      const match = filter === 'all' || card.dataset.category === filter;
      if (match) {
        card.classList.remove('hidden');
        card.style.opacity = '1';
        card.style.transform = 'scale(1)';
      } else {
        card.classList.add('hidden');
      }
    });
  });
}
