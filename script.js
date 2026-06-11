/* ================================================================
   TEKNIK ELEKTRO – FTMM UNIVERSITAS AIRLANGGA
   script.js
================================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ─── SCROLL REVEAL ─── */
  const reveals = document.querySelectorAll('.reveal');

  const revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px',
    }
  );

  reveals.forEach(function (el) {
    revealObserver.observe(el);
  });


  /* ─── ACTIVE NAV LINK ON SCROLL ─── */
  const sections   = document.querySelectorAll('section[id]');
  const navLinks   = document.querySelectorAll('.nav-links a');

  const sectionObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          navLinks.forEach(function (link) {
            link.classList.remove('active');
          });
          const activeLink = document.querySelector(
            '.nav-links a[href="#' + entry.target.id + '"]'
          );
          if (activeLink) {
            activeLink.classList.add('active');
          }
        }
      });
    },
    { threshold: 0.35 }
  );

  sections.forEach(function (sec) {
    sectionObserver.observe(sec);
  });


  /* ─── SMOOTH NAVBAR HIDE / SHOW ON SCROLL ─── */
  var lastScrollY = window.scrollY;
  var navbar      = document.querySelector('nav');

  window.addEventListener('scroll', function () {
    var currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY && currentScrollY > 80) {
      navbar.style.transform = 'translateY(-100%)';
    } else {
      navbar.style.transform = 'translateY(0)';
    }
    lastScrollY = currentScrollY;
  });

  /* Re-add transition on nav for hide/show effect */
  navbar.style.transition = 'transform 0.3s ease';

});
