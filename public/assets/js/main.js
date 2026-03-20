// public/assets/js/main.js

(function () {
  const btn      = document.querySelector('.hamburger');
  const nav      = document.getElementById('mobileNav');
  const backdrop = document.getElementById('mobileNavBackdrop');

  function openNav() {
    btn.classList.add('is-open');
    nav.classList.add('is-open');
    btn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeNav() {
    btn.classList.remove('is-open');
    nav.classList.remove('is-open');
    btn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  btn.addEventListener('click', function () {
    nav.classList.contains('is-open') ? closeNav() : openNav();
  });

  backdrop.addEventListener('click', closeNav);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && nav.classList.contains('is-open')) closeNav();
  });

  nav.querySelectorAll('.nav-link').forEach(function (link) {
    link.addEventListener('click', closeNav);
  });
})();