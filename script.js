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

// ============ Reveal on scroll ============
const revealTargets = document.querySelectorAll('.service-card, .work-card, .portfolio-item, .insight-card, .value-card, .service-detail');

if ('IntersectionObserver' in window && revealTargets.length) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.transition = 'opacity .6s ease, transform .6s ease';
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealTargets.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(16px)';
    io.observe(el);
  });
}

// ============ Sticky header shadow on scroll ============
const header = document.querySelector('header, .site-header');
if (header) {
  window.addEventListener('scroll', () => {
    header.style.boxShadow = window.scrollY > 8 ? '0 1px 0 rgba(18,21,28,.06)' : 'none';
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
      card.classList.toggle('hidden', !match);
    });
  });
}
