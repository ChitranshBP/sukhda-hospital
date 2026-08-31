<!-- ============================================================
     FOOTER — Full Width Corporate Footer
============================================================ -->
<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-grid">
      <!-- Column 1: Patient Support -->
      <div class="footer-col">
        <div class="footer-heading">Patient Support</div>
        <div class="footer-links">
          <a href="#contact">Book Consultation</a>
          <a href="#contact">Admission Guide</a>
          <a href="#stories">Patient Stories</a>
          <a href="#about">TPA &amp; Insurance</a>
          <a href="#contact">Visiting Hours</a>
          <a href="#library">Health Journal</a>
          <a href="#contact">Preventive Health</a>
          <a href="#events">Camps &amp; Events</a>
        </div>
      </div>

      <!-- Column 2: Centres of Excellence -->
      <div class="footer-col">
        <div class="footer-heading">Centres of Excellence</div>
        <div class="footer-links">
          <a href="#specialities">Cardiac Sciences</a>
          <a href="#specialities">Neurosciences</a>
          <a href="#specialities">Orthopedics</a>
          <a href="#specialities">Mother &amp; Child Care</a>
          <a href="#specialities">Gastroenterology</a>
          <a href="#specialities">Renal Sciences</a>
          <a href="#specialities">Cancer Care</a>
        </div>
      </div>

      <!-- Column 3: Clinical Departments -->
      <div class="footer-col">
        <div class="footer-heading">Clinical Departments</div>
        <div class="footer-links">
          <a href="#specialities">Internal Medicine</a>
          <a href="#specialities">Critical Care &amp; ICU</a>
          <a href="#specialities">Emergency Medicine</a>
          <a href="#specialities">General Surgery</a>
          <a href="#specialities">Respiratory Medicine</a>
          <a href="#specialities">ENT</a>
          <a href="#specialities">Dental Science</a>
        </div>
      </div>

      <!-- Column 4: Diagnostics & Support -->
      <div class="footer-col">
        <div class="footer-heading">Diagnostics &amp; Support</div>
        <div class="footer-links">
          <a href="#specialities">Ophthalmology</a>
          <a href="#specialities">Anesthesiology</a>
          <a href="#technology">Radiology &amp; Imaging</a>
          <a href="#technology">Laboratory Services</a>
          <a href="#technology">Physiotherapy</a>
          <a href="#technology">Blood Bank</a>
          <a href="#technology">Pharmacy</a>
        </div>
      </div>

      <!-- Column 5: Corporate & Info -->
      <div class="footer-col">
        <div class="footer-heading">Corporate</div>
        <div class="footer-links">
          <a href="#about">About Us</a>
          <a href="#technology">Infrastructure</a>
          <a href="#founders">Our Founders</a>
          <a href="#events">Events</a>
          <a href="#about">TPA &amp; Insurance</a>
          <a href="#contact">Careers</a>
        </div>
      </div>
    </div>

    <!-- Contact & Map Section -->
    <div class="footer-contact-row">
      <!-- Left Column: Brand + Contact Details -->
      <div class="footer-contact-left">
        <div class="footer-brand">
          <a href="/" class="footer-logo-wrap" aria-label="Sukhda Medpark — Cancer &amp; Super Speciality Hospital">
            <img class="lockup" src="/assets/images/logo-lockup.png" alt="Sukhda Medpark">
          </a>
          <div class="footer-cert-badge">
            <img class="nabh" src="/assets/images/nabh.jpg" alt="NABH Accredited">
            <div class="cert-text">
              <strong>NABH Accredited</strong>
              <span>Tertiary Care Standards</span>
            </div>
          </div>
        </div>

        <div class="footer-heading">Reach Us 24&times;7</div>
        <div class="footer-contact-box">
          <div class="contact-line">
            <span class="c-icon"><i data-lucide="map-pin"></i></span>
            <span><?= htmlspecialchars($HOSPITAL['address']) ?></span>
          </div>
          <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" class="contact-line">
            <span class="c-icon"><i data-lucide="phone-call"></i></span>
            <div>
              <small>24&times;7 EMERGENCY HOTLINE</small>
              <strong><?= htmlspecialchars($HOSPITAL['phone']) ?></strong>
            </div>
          </a>
          <a href="mailto:<?= htmlspecialchars($HOSPITAL['email']) ?>" class="contact-line">
            <span class="c-icon"><i data-lucide="mail"></i></span>
            <span><?= htmlspecialchars($HOSPITAL['email']) ?></span>
          </a>
        </div>

        <div class="footer-social">
          <a href="#" aria-label="Facebook"><i data-lucide="facebook"></i></a>
          <a href="#" aria-label="Instagram"><i data-lucide="instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i data-lucide="linkedin"></i></a>
          <a href="#" aria-label="YouTube"><i data-lucide="youtube"></i></a>
        </div>
      </div>

      <!-- Right Column: Google Map -->
      <div class="footer-map-col">
        <div class="footer-map-wrap">
          <iframe
            src="https://www.google.com/maps?q=Sukhda%20Hospital%2C%20Delhi%20Road%2C%20Hisar%2C%20Haryana&output=embed"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
      <div class="footer-bottom-inner">
        <span>&copy; <?= date('Y') ?> <?= htmlspecialchars($HOSPITAL['name']) ?>. All rights reserved.</span>
        <div class="footer-bottom-links">
          <a href="#about">Privacy Policy</a>
          <span>&middot;</span>
          <a href="#about">Terms of Service</a>
          <span>&middot;</span>
          <a href="#about">Sitemap</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js"></script>
<script>
  (function () {
    'use strict';

    /* ---------- Render Lucide icons ---------- */
    if (window.lucide) lucide.createIcons();

    /* ---------- Mobile navigation ---------- */
    var navToggle = document.getElementById('navToggle');
    var mainNav = document.getElementById('mainNav');
    if (navToggle && mainNav) {
      navToggle.addEventListener('click', function () {
        var open = mainNav.classList.toggle('open');
        navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      });
      mainNav.addEventListener('click', function (e) {
        if (e.target.closest('a')) {
          mainNav.classList.remove('open');
          navToggle.setAttribute('aria-expanded', 'false');
        }
      });
    }

    /* ---------- Nav dropdown toggles (mobile accordion + desktop hover intent) ---------- */
    var dropToggles = Array.prototype.slice.call(document.querySelectorAll('.drop-toggle'));
    dropToggles.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.nav-item');
        if (!item) return;
        var willOpen = !item.classList.contains('sub-open');
        Array.prototype.slice.call(document.querySelectorAll('.nav-item.sub-open')).forEach(function (it) {
          it.classList.remove('sub-open');
          var b = it.querySelector('.drop-toggle');
          if (b) b.setAttribute('aria-expanded', 'false');
        });
        item.classList.toggle('sub-open', willOpen);
        btn.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
      });
    });

    // Desktop hover stability (grace timer to prevent accidental closing)
    var navHoverItems = Array.prototype.slice.call(document.querySelectorAll('.nav-item'));
    navHoverItems.forEach(function (item) {
      var hoverTimer = null;
      item.addEventListener('mouseenter', function () {
        if (hoverTimer) clearTimeout(hoverTimer);
        item.classList.add('is-hovered');
      });
      item.addEventListener('mouseleave', function () {
        hoverTimer = setTimeout(function () {
          item.classList.remove('is-hovered');
        }, 150);
      });
    });

    /* ---------- Banner slider ---------- */
    var slides = Array.prototype.slice.call(document.querySelectorAll('.banner-slide'));
    var dots = Array.prototype.slice.call(document.querySelectorAll('.banner-dot'));
    if (slides.length) {
      var current = 0;
      var timer = null;

      var show = function (n) {
        current = (n + slides.length) % slides.length;
        slides.forEach(function (s, i) { s.classList.toggle('active', i === current); });
        dots.forEach(function (d, i) { d.classList.toggle('active', i === current); });
      };
      var start = function () { timer = setInterval(function () { show(current + 1); }, 5500); };
      var restart = function () { clearInterval(timer); start(); };

      dots.forEach(function (d, i) {
        d.addEventListener('click', function () { show(i); restart(); });
      });
      var prevBtn = document.getElementById('bannerPrev');
      var nextBtn = document.getElementById('bannerNext');
      if (prevBtn) prevBtn.addEventListener('click', function () { show(current - 1); restart(); });
      if (nextBtn) nextBtn.addEventListener('click', function () { show(current + 1); restart(); });

      start();
    }

    /* ---------- Speciality filter tabs ---------- */
    var specTabs = Array.prototype.slice.call(document.querySelectorAll('.spec-tab'));
    var specCards = Array.prototype.slice.call(document.querySelectorAll('.spec-card'));
    specTabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var cat = tab.getAttribute('data-cat');
        specTabs.forEach(function (t) { t.classList.toggle('active', t === tab); });
        specCards.forEach(function (card) {
          card.style.display = (card.getAttribute('data-cat') === cat) ? '' : 'none';
        });
      });
    });

    /* ---------- Rare cases: toggle show more / show less ---------- */
    var casesMoreBtn = document.getElementById('casesMoreBtn');
    if (casesMoreBtn) {
      var casesExpanded = false;
      casesMoreBtn.addEventListener('click', function () {
        casesExpanded = !casesExpanded;
        var extraCards = Array.prototype.slice.call(document.querySelectorAll('.case-card[data-case-extra]'));
        
        extraCards.forEach(function (card) {
          card.style.display = casesExpanded ? '' : 'none';
        });

        casesMoreBtn.textContent = casesExpanded ? 'Show Less' : 'Show More';

        if (!casesExpanded) {
          var casesSec = document.getElementById('cases');
          if (casesSec) {
            casesSec.scrollIntoView({ behavior: 'smooth' });
          }
        }
      });
    }

    /* ---------- Stat counters (count up from 0 on scroll into view) ---------- */
    var statNums = Array.prototype.slice.call(document.querySelectorAll('.stat-num'));
    if (statNums.length && 'IntersectionObserver' in window) {
      statNums.forEach(function (el) {
        var m = el.textContent.trim().match(/^([\d,]+)(.*)$/);
        if (!m) return;
        el.dataset.target = m[1].replace(/,/g, '');
        el.dataset.suffix = m[2] || '';
        el.dataset.grouped = m[1].indexOf(',') !== -1 ? '1' : '';
        el.textContent = '0' + el.dataset.suffix;
      });

      var animateStat = function (el) {
        var target = parseInt(el.dataset.target, 10);
        if (isNaN(target)) return;
        var suffix = el.dataset.suffix;
        var grouped = el.dataset.grouped === '1';
        var duration = 2000;
        var startTs = null;
        var step = function (ts) {
          if (startTs === null) startTs = ts;
          var p = Math.min((ts - startTs) / duration, 1);
          var eased = 1 - Math.pow(1 - p, 3);
          var val = Math.round(target * eased);
          el.textContent = (grouped ? val.toLocaleString('en-IN') : String(val)) + suffix;
          if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
      };

      var statObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            statObserver.unobserve(entry.target);
            animateStat(entry.target);
          }
        });
      }, { threshold: 0.4 });
      statNums.forEach(function (el) {
        if (el.dataset.target) statObserver.observe(el);
      });
    }

    /* ---------- Patient story 3D coverflow slider ---------- */
    var storyPanels = Array.prototype.slice.call(document.querySelectorAll('.story-panel'));
    var storyDots = Array.prototype.slice.call(document.querySelectorAll('.story-dot'));
    var storyPrevBtn = document.getElementById('storyPrev');
    var storyNextBtn = document.getElementById('storyNext');
    var storyStage = document.getElementById('storyPanels');

    if (storyPanels.length) {
      var n = storyPanels.length;
      var centerIndex = Math.floor(n / 2);

      var update3DSlider = function () {
        storyPanels.forEach(function (panel, i) {
          panel.classList.remove('position-1', 'position-2', 'position-3', 'position-4', 'position-5', 'position-none', 'active');

          var diff = (i - centerIndex + n) % n;
          if (diff > n / 2) diff -= n;

          if (diff === 0) {
            panel.classList.add('position-3', 'active');
          } else if (diff === -1 || (n <= 4 && diff === n - 1)) {
            panel.classList.add('position-2');
          } else if (diff === -2) {
            panel.classList.add('position-1');
          } else if (diff === 1) {
            panel.classList.add('position-4');
          } else if (diff === 2) {
            panel.classList.add('position-5');
          } else {
            panel.classList.add('position-none');
          }
        });

        storyDots.forEach(function (d, i) {
          d.classList.toggle('active', i === centerIndex);
        });
      };

      var scrollLeft = function () {
        centerIndex = (centerIndex - 1 + n) % n;
        update3DSlider();
      };

      var scrollRight = function () {
        centerIndex = (centerIndex + 1) % n;
        update3DSlider();
      };

      var goToStory = function (index) {
        centerIndex = (index + n) % n;
        update3DSlider();
      };

      update3DSlider();

      if (storyPrevBtn) storyPrevBtn.addEventListener('click', scrollLeft);
      if (storyNextBtn) storyNextBtn.addEventListener('click', scrollRight);

      storyDots.forEach(function (dot, i) {
        dot.addEventListener('click', function () { goToStory(i); });
      });

      storyPanels.forEach(function (panel, i) {
        panel.addEventListener('click', function () {
          if (i !== centerIndex) {
            goToStory(i);
          }
        });
      });

      if (storyStage) {
        var xDown = null;
        var yDown = null;
        storyStage.addEventListener('touchstart', function(evt) {
          xDown = evt.touches[0].clientX;
          yDown = evt.touches[0].clientY;
        }, { passive: true });

        storyStage.addEventListener('touchmove', function(evt) {
          if (!xDown || !yDown) return;
          var xUp = evt.touches[0].clientX;
          var yUp = evt.touches[0].clientY;
          var xDiff = xDown - xUp;
          var yDiff = yDown - yUp;

          if (Math.abs(xDiff) > Math.abs(yDiff) && Math.abs(xDiff) > 30) {
            if (xDiff > 0) {
              scrollRight();
            } else {
              scrollLeft();
            }
            xDown = null;
            yDown = null;
          }
        }, { passive: true });
      }
    }
  })();
</script>

</body>

</html>
