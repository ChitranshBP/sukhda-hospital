<!-- ============================================================
     CTA — Minimal Clean Banner
============================================================ -->
<section id="cta" class="relative py-12 lg:py-16 bg-white border-t border-slate-200">
  <div class="max-w-7xl mx-auto px-6">
    <div class="bg-slate-900 border border-slate-800 p-8 sm:p-12">
      <div class="grid lg:grid-cols-12 gap-8 items-center">

        <!-- Headline + intro -->
        <div class="lg:col-span-7 text-white space-y-3">
          <div class="inline-block px-2.5 py-1 bg-slate-800 border border-slate-700 text-[11px] uppercase tracking-widest font-bold text-slate-300">
            24×7 Emergency &amp; Priority Triage
          </div>
          <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold tracking-tight text-white">
            Your family's health, always our priority.
          </h2>
          <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl">
            Speak directly to round-the-clock care coordinators, schedule priority OPD visits with senior department heads, or request immediate emergency support.
          </p>
        </div>

        <!-- Action buttons row -->
        <div class="lg:col-span-5 flex flex-col sm:flex-row items-center justify-center lg:justify-end gap-3">

          <!-- Emergency button -->
          <a href="tel:<?= $HOSPITAL['emergency'] ?>"
             class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-brand-600 hover:bg-brand-700 text-white font-bold text-xs uppercase tracking-wider transition-colors whitespace-nowrap">
            <i data-lucide="phone-call" class="w-4 h-4 shrink-0"></i>
            <span>Call <?= htmlspecialchars($HOSPITAL['emergency']) ?></span>
          </a>

          <!-- Book button -->
          <a href="#search"
             class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 border border-slate-700 bg-slate-800 hover:bg-slate-700 text-white font-bold text-xs uppercase tracking-wider transition-colors whitespace-nowrap">
            <i data-lucide="calendar-plus" class="w-4 h-4 shrink-0"></i>
            <span>Book Appointment</span>
          </a>

        </div>

      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER — Minimal Institutional Layout
============================================================ -->
<footer id="contact" class="relative bg-slate-950 text-slate-300 border-t border-slate-800">
  
  <!-- Tier 1: Emergency & Command Bar -->
  <div class="bg-slate-900 border-b border-slate-800 py-5 px-6">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3 text-white">
        <span class="w-8 h-8 bg-slate-800 border border-slate-700 text-brand-400 grid place-items-center shrink-0">
          <i data-lucide="radio" class="w-4 h-4"></i>
        </span>
        <div>
          <div class="text-[11px] font-bold uppercase tracking-wider text-slate-300">
            24×7 Clinical Command &amp; Rapid Triage
          </div>
          <p class="text-xs text-slate-400 mt-0.5">Instant emergency admission &amp; priority specialist appointments.</p>
        </div>
      </div>

      <div class="flex flex-wrap items-center justify-center gap-3 w-full lg:w-auto">
        <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2 bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider transition-colors whitespace-nowrap">
          <i data-lucide="phone-call" class="w-3.5 h-3.5"></i> Emergency Desk
        </a>
        <a href="#search" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2 bg-slate-800 hover:bg-slate-700 border border-slate-700 text-white text-xs font-bold uppercase tracking-wider transition-colors whitespace-nowrap">
          <i data-lucide="calendar-check" class="w-3.5 h-3.5"></i> Book Priority Slot
        </a>
        <a href="https://wa.me/919996544005" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2 bg-slate-800 hover:bg-slate-700 border border-slate-700 text-white text-xs font-bold uppercase tracking-wider transition-colors whitespace-nowrap">
          <i data-lucide="message-square" class="w-3.5 h-3.5"></i> WhatsApp Scans
        </a>
      </div>
    </div>
  </div>

  <!-- Tier 2: Main Grid -->
  <div class="max-w-7xl mx-auto px-6 pt-12 pb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8">
    
    <!-- Column 1: Institutional Info -->
    <div class="lg:col-span-4 space-y-5">
      <a href="#" class="inline-block" aria-label="<?= htmlspecialchars($HOSPITAL['name']) ?>">
        <img src="assets/images/logo-sukhda.png"
             alt="<?= htmlspecialchars($HOSPITAL['name']) ?>"
             width="831" height="300"
             class="h-12 w-auto brightness-0 invert opacity-95">
      </a>
      <p class="text-xs leading-relaxed text-slate-400 max-w-sm">
        Northern India’s premier NABH-accredited multispeciality clinical institute in Hisar. Integrating advanced medical technology across specialized centers with compassionate healthcare since <?= htmlspecialchars($HOSPITAL['founded']) ?>.
      </p>

      <!-- Direct Emergency Desk -->
      <div class="p-3.5 bg-slate-900 border border-slate-800 flex items-center justify-between gap-3">
        <div class="flex items-center gap-3">
          <span class="w-9 h-9 bg-brand-600 text-white grid place-items-center shrink-0">
            <i data-lucide="phone-call" class="w-4 h-4"></i>
          </span>
          <div>
            <div class="text-[10px] uppercase tracking-wider font-bold text-slate-400">Immediate Triage Line</div>
            <div class="text-sm font-bold text-white tracking-wide"><?= htmlspecialchars($HOSPITAL['emergency']) ?></div>
          </div>
        </div>
        <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="px-3 py-1.5 border border-slate-700 bg-slate-800 text-white font-bold text-xs hover:bg-slate-700 transition-colors whitespace-nowrap">Call →</a>
      </div>

      <!-- Social Media -->
      <div class="pt-1 flex items-center gap-2">
        <a href="#" aria-label="Facebook" class="w-9 h-9 grid place-items-center bg-slate-900 border border-slate-800 hover:bg-brand-600 hover:border-brand-600 text-slate-400 hover:text-white transition-colors">
          <i data-lucide="facebook" class="w-4 h-4"></i>
        </a>
        <a href="#" aria-label="Instagram" class="w-9 h-9 grid place-items-center bg-slate-900 border border-slate-800 hover:bg-brand-600 hover:border-brand-600 text-slate-400 hover:text-white transition-colors">
          <i data-lucide="instagram" class="w-4 h-4"></i>
        </a>
        <a href="#" aria-label="YouTube" class="w-9 h-9 grid place-items-center bg-slate-900 border border-slate-800 hover:bg-brand-600 hover:border-brand-600 text-slate-400 hover:text-white transition-colors">
          <i data-lucide="youtube" class="w-4 h-4"></i>
        </a>
        <a href="#" aria-label="LinkedIn" class="w-9 h-9 grid place-items-center bg-slate-900 border border-slate-800 hover:bg-brand-600 hover:border-brand-600 text-slate-400 hover:text-white transition-colors">
          <i data-lucide="linkedin" class="w-4 h-4"></i>
        </a>
      </div>
    </div>

    <!-- Column 2: Navigation Guide -->
    <div class="lg:col-span-2 space-y-3">
      <h4 class="text-xs font-bold uppercase tracking-wider text-white pb-2 border-b border-slate-800 flex items-center gap-2">
        <i data-lucide="compass" class="w-3.5 h-3.5 text-slate-400"></i> Navigation
      </h4>
      <ul class="space-y-1.5 text-xs">
        <?php foreach ($NAV as $label => $href): ?>
          <li>
            <a href="<?= $href ?>" class="flex items-center gap-2 py-1 text-slate-400 hover:text-white transition-colors">
              <span class="w-1 h-1 bg-slate-600"></span>
              <span><?= htmlspecialchars($label) ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Column 3: Specialities -->
    <div class="lg:col-span-3 space-y-3">
      <h4 class="text-xs font-bold uppercase tracking-wider text-white pb-2 border-b border-slate-800 flex items-center gap-2">
        <i data-lucide="activity" class="w-3.5 h-3.5 text-slate-400"></i> Specialities
      </h4>
      <ul class="space-y-1.5 text-xs">
        <?php foreach (array_slice($SPECIALTIES, 0, 6) as $s): ?>
          <li>
            <a href="#search" class="flex items-center gap-2 py-1 text-slate-400 hover:text-white transition-colors">
              <span class="w-4 h-4 bg-slate-900 border border-slate-800 text-slate-400 grid place-items-center shrink-0">
                <i data-lucide="chevron-right" class="w-3 h-3"></i>
              </span>
              <span class="truncate"><?= htmlspecialchars($s['name']) ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Column 4: Campus Location -->
    <div class="lg:col-span-3 space-y-3">
      <h4 class="text-xs font-bold uppercase tracking-wider text-white pb-2 border-b border-slate-800 flex items-center gap-2">
        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-slate-400"></i> Campus Desk
      </h4>
      <div class="p-4 bg-slate-900 border border-slate-800 space-y-3">
        <div class="flex items-start gap-3">
          <span class="w-8 h-8 bg-slate-800 border border-slate-700 text-slate-300 grid place-items-center shrink-0 mt-0.5">
            <i data-lucide="map-pin" class="w-4 h-4"></i>
          </span>
          <div>
            <div class="text-xs font-bold text-white uppercase tracking-wider">Hisar Medical Campus</div>
            <p class="text-xs text-slate-400 mt-1 leading-relaxed"><?= htmlspecialchars($HOSPITAL['address']) ?></p>
          </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 border-t border-slate-800">
          <a href="tel:<?= $HOSPITAL['phone'] ?>" class="flex items-center gap-2 p-2 bg-slate-950 border border-slate-800 text-slate-300 hover:text-white text-xs font-medium transition-colors truncate">
            <i data-lucide="phone" class="w-3 h-3 text-slate-400 shrink-0"></i> <?= htmlspecialchars($HOSPITAL['phone']) ?>
          </a>
          <a href="mailto:<?= $HOSPITAL['email'] ?>" class="flex items-center gap-2 p-2 bg-slate-950 border border-slate-800 text-slate-300 hover:text-white text-xs font-medium transition-colors truncate">
            <i data-lucide="mail" class="w-3 h-3 text-slate-400 shrink-0"></i> Email Desk
          </a>
        </div>

        <div class="pt-1">
          <div class="flex items-center justify-between text-[11px] font-bold px-3 py-2 bg-slate-950 border border-slate-800 text-slate-300">
            <span>OPD 9 AM – 8 PM</span>
            <span class="text-slate-600">|</span>
            <span class="text-brand-400">24×7 Emergency</span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Tier 3: Accreditations Strip -->
  <div class="bg-slate-900 border-t border-b border-slate-800 py-4 px-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4 text-xs">
      <div class="flex items-center gap-2.5 text-white font-semibold">
        <span class="w-6 h-6 bg-slate-800 border border-slate-700 grid place-items-center text-slate-300 shrink-0">
          <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
        </span>
        <span>NABH Accredited &amp; ISO 9001:2015 Certified Multispeciality Hospital</span>
      </div>
      <div class="flex flex-wrap items-center justify-center gap-4 text-slate-400 font-medium text-[11px]">
        <span class="flex items-center gap-1"><i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-slate-300"></i> Cashless Insurance (TPAs)</span>
        <span class="flex items-center gap-1"><i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-slate-300"></i> Ayushman Bharat PM-JAY</span>
        <span class="flex items-center gap-1"><i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-slate-300"></i> ECHS &amp; Govt. Approved</span>
      </div>
    </div>
  </div>

  <!-- Tier 4: Bottom Bar -->
  <div class="bg-slate-950 py-5 px-6">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
      <p>© <?= date('Y') ?> <?= htmlspecialchars($HOSPITAL['name']) ?>. All rights reserved.</p>
      
      <div class="flex flex-wrap items-center justify-center gap-4 text-slate-400 text-[11px]">
        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
        <a href="#" class="hover:text-white transition-colors">Patient Charter</a>
        <span class="inline-flex items-center gap-1 px-2 py-0.5 border border-slate-800 bg-slate-900 text-slate-300 font-bold uppercase tracking-wider">
          NABH Accredited
        </span>
      </div>
    </div>
  </div>
</footer>

<script>
  function renderIcons() {
    if (window.lucide && typeof window.lucide.createIcons === 'function') {
      window.lucide.createIcons();
    }
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', renderIcons);
  } else {
    renderIcons();
  }
  document.addEventListener('alpine:initialized', renderIcons);
  document.addEventListener('icons:refresh', renderIcons);

  let iconRenderTimeout = null;
  if (typeof MutationObserver !== 'undefined') {
    const observer = new MutationObserver(() => {
      clearTimeout(iconRenderTimeout);
      iconRenderTimeout = setTimeout(renderIcons, 20);
    });
    observer.observe(document.body, { childList: true, subtree: true });
  }
</script>

</body>
</html>
