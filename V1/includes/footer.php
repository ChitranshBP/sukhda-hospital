<!-- ============================================================
     FOOTER
============================================================ -->
<footer class="site-footer">
  <div class="footer-grid">
    <div class="footer-brand">
      <img class="lockup" src="assets/images/logo-lockup.png" alt="Sukhda Medpark — Cancer &amp; Super Speciality Hospital">
      <p>Cancer &amp; super speciality hospital serving Hisar and greater Haryana since 2002.</p>
      <img class="nabh" src="assets/images/nabh.jpg" alt="NABH accredited">
    </div>
    <div class="footer-col">
      <div class="h">Hospital</div>
      <div class="links">
        <a href="#about">About us</a>
        <a href="#specialities">Specialities</a>
        <a href="#technology">Technology</a>
        <a href="#cases">Rare cases</a>
      </div>
    </div>
    <div class="footer-col">
      <div class="h">Patients</div>
      <div class="links">
        <a href="#contact">Book appointment</a>
        <a href="#stories">Patient stories</a>
        <a href="#events">Camps &amp; events</a>
        <a href="#library">Health library</a>
        <a href="#contact">Insurance &amp; TPA</a>
      </div>
    </div>
    <div class="footer-col">
      <div class="h">Reach us</div>
      <div class="links muted">
        <span><?= htmlspecialchars($HOSPITAL['address']) ?></span>
        <a href="tel:+919996544005"><?= htmlspecialchars($HOSPITAL['phone']) ?></a>
        <a href="mailto:<?= htmlspecialchars($HOSPITAL['email']) ?>"><?= htmlspecialchars($HOSPITAL['email']) ?></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-bottom-inner">
      <span>&copy; <?= date('Y') ?> Sukhda Medpark Cancer &amp; Super Speciality Hospital</span>
      <span>Privacy &middot; Terms &middot; Patient rights</span>
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

    /* ---------- Nav dropdown toggles (mobile accordion) ---------- */
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
          card.style.display = (cat === 'All' || card.getAttribute('data-cat') === cat) ? '' : 'none';
        });
      });
    });

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

    /* ---------- Patient story tabs ---------- */
    var storyTabs = Array.prototype.slice.call(document.querySelectorAll('.story-tab'));
    var storyPanels = Array.prototype.slice.call(document.querySelectorAll('.story-panel'));
    storyTabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var idx = tab.getAttribute('data-story');
        storyTabs.forEach(function (t) { t.classList.toggle('active', t === tab); });
        storyPanels.forEach(function (p) {
          p.classList.toggle('active', p.getAttribute('data-story') === idx);
        });
      });
    });
  })();
</script>

</body>

</html>
