<!-- ============================================================
     CTA — glass card, comfortable height
============================================================ -->
<section id="cta" class="relative pt-6 pb-14 lg:pt-8 lg:pb-20 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-6">
    <div class="relative overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-[#0D1B3E] via-[#132A5E] to-[#0A1530] ring-1 ring-brand-300/20 shadow-2xl">

      <!-- Ambient glow layers & background decor -->
      <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-coral-500/25 blur-[100px] pointer-events-none"></div>
      <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-brand-400/25 blur-[100px] pointer-events-none"></div>
      <div class="absolute inset-0 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] opacity-10 pointer-events-none"></div>

      <!-- Glass overlay container -->
      <div class="relative z-10 p-8 sm:p-12 lg:p-14">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">

          <!-- Headline + intro -->
          <div class="lg:col-span-7 text-white space-y-4">
            <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-white/10 ring-1 ring-white/20 backdrop-blur-md text-[11px] uppercase tracking-[0.25em] font-extrabold text-coral-300 shadow-sm">
              <span class="w-2 h-2 rounded-full bg-coral-400 animate-ping"></span>
              24×7 Emergency &amp; Priority Triage
            </div>
            <h2 class="font-display text-xl sm:text-2xl lg:text-3xl leading-[1.15] font-bold tracking-tight text-white text-balance">
              Your family's health, <span class="italic font-normal text-transparent bg-clip-text bg-gradient-to-r from-coral-300 to-coral-400">always a priority.</span>
            </h2>
            <p class="text-white/80 text-sm sm:text-base leading-relaxed max-w-xl font-normal">
              Speak directly to round-the-clock care coordinators, schedule priority OPD visits with senior department heads, or dispatch instant emergency support.
            </p>
          </div>

          <!-- Action buttons row -->
          <div class="lg:col-span-5 flex flex-col sm:flex-row items-center justify-center lg:justify-end gap-3.5 flex-wrap">

            <!-- Emergency button -->
            <a href="tel:<?= $HOSPITAL['emergency'] ?>"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-md bg-coral-500 hover:bg-coral-600 ring-1 ring-coral-400/40 text-white font-bold text-xs sm:text-sm shadow-xl hover:shadow-coral-500/30 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
              <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
              <i data-lucide="phone-call" class="w-4 h-4 shrink-0"></i>
              <span>Call <?= htmlspecialchars($HOSPITAL['emergency']) ?></span>
            </a>

            <!-- Book button -->
            <a href="#search"
               class="group w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-md bg-white/15 hover:bg-white/25 ring-1 ring-white/30 hover:ring-white/50 text-white font-bold text-xs sm:text-sm backdrop-blur-md shadow-lg hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
              <i data-lucide="calendar-plus" class="w-4 h-4 text-coral-300 shrink-0 group-hover:scale-110 transition-transform"></i>
              <span>Book Appointment</span>
              <i data-lucide="arrow-up-right" class="w-4 h-4 opacity-70 group-hover:opacity-100 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition shrink-0"></i>
            </a>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER — state-of-the-art medical institution layout
============================================================ -->
<!-- ============================================================
     FOOTER — state-of-the-art 2026 medical park architecture
============================================================ -->
<footer id="contact" class="relative bg-[#0A1120] text-slate-300 overflow-hidden border-t border-brand-800/80">
  
  <!-- Subtle ambient lighting -->
  <div class="absolute -top-32 left-1/3 w-[600px] h-[600px] rounded-full bg-brand-600/10 blur-[150px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] rounded-full bg-coral-500/10 blur-[140px] pointer-events-none"></div>

  <!-- Tier 1: Hospital Quick-Command & Emergency Dispatch Strip -->
  <div class="relative bg-gradient-to-r from-[#0E1A33] via-[#112040] to-[#0E1A33] border-b border-brand-800/80 py-6 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-5">
      <div class="flex items-center gap-3.5 text-white">
        <span class="w-10 h-10 rounded-md bg-coral-500/20 border border-coral-500/40 text-coral-400 grid place-items-center shrink-0">
          <i data-lucide="radio" class="w-5 h-5 animate-pulse"></i>
        </span>
        <div>
          <div class="flex items-center gap-2 text-[11px] font-extrabold uppercase tracking-widest text-coral-400">
            <span>24×7 Clinical Command &amp; Rapid Triage</span>
            <span class="w-1.5 h-1.5 rounded-full bg-coral-400 animate-ping"></span>
          </div>
          <p class="text-sm font-semibold text-slate-200 mt-0.5">Instant emergency admission &amp; priority specialist appointments.</p>
        </div>
      </div>

      <div class="flex flex-wrap items-center justify-center gap-3 w-full lg:w-auto">
        <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-md bg-coral-500 hover:bg-coral-600 text-white text-xs font-bold shadow-md transition whitespace-nowrap">
          <i data-lucide="phone-call" class="w-3.5 h-3.5"></i> Call Emergency Desk
        </a>
        <a href="#search" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-md bg-brand-600 hover:bg-brand-500 text-white text-xs font-bold shadow-md transition whitespace-nowrap">
          <i data-lucide="calendar-check" class="w-3.5 h-3.5"></i> Book Priority Slot
        </a>
        <a href="https://wa.me/919996544005" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-md bg-white/10 hover:bg-white/20 text-white text-xs font-bold border border-white/15 transition whitespace-nowrap">
          <i data-lucide="message-square" class="w-3.5 h-3.5 text-coral-300"></i> WhatsApp Scans
        </a>
      </div>
    </div>
  </div>

  <!-- Tier 2: Main Navigation & Institutional Identity Grid -->
  <div class="relative max-w-7xl mx-auto px-6 pt-16 pb-14 lg:pt-20 lg:pb-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">
    
    <!-- Column 1: Hospital Brand Identity & Direct Triage Desk (4 cols) -->
    <div class="lg:col-span-4 space-y-6">
      <a href="#" class="inline-block focus:outline-none" aria-label="<?= htmlspecialchars($HOSPITAL['name']) ?>">
        <img src="assets/images/logo-sukhda.png"
             alt="<?= htmlspecialchars($HOSPITAL['name']) ?>"
             width="831" height="300"
             class="h-14 w-auto select-none brightness-0 invert opacity-95 hover:opacity-100 transition">
      </a>
      <p class="text-sm leading-relaxed text-slate-400 max-w-sm font-normal">
        Northern India’s premier NABH-accredited multispeciality clinical institute in Hisar. Integrating world-class diagnostic technology across 21 specialized centers with human-first medical care since <?= htmlspecialchars($HOSPITAL['founded']) ?>.
      </p>

      <!-- Direct 24/7 Emergency Dispatch Box -->
      <div class="p-4 rounded-xl bg-gradient-to-br from-brand-900/90 to-[#111F38] border border-brand-700/60 shadow-lg flex items-center justify-between gap-4">
        <div class="flex items-center gap-3.5">
          <span class="w-11 h-11 rounded-md bg-coral-500 text-white flex items-center justify-center shrink-0 shadow-md shadow-coral-500/30">
            <i data-lucide="phone-call" class="w-5 h-5 animate-bounce"></i>
          </span>
          <div>
            <div class="text-[10px] uppercase tracking-widest font-extrabold text-coral-300">Immediate Triage Line</div>
            <div class="text-base font-extrabold text-white tracking-wide"><?= htmlspecialchars($HOSPITAL['emergency']) ?></div>
          </div>
        </div>
        <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="px-3.5 py-2 rounded-md bg-white text-brand-950 font-bold text-xs hover:bg-coral-400 hover:text-white transition shadow-sm whitespace-nowrap">Call →</a>
      </div>

      <!-- Social Media Pills -->
      <div class="pt-1 flex items-center gap-3">
        <a href="#" aria-label="Facebook" class="w-10 h-10 grid place-items-center rounded-md bg-[#111C32] border border-brand-800/80 hover:bg-coral-500 hover:border-coral-500 text-slate-300 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm">
          <i data-lucide="facebook" class="w-4 h-4"></i>
        </a>
        <a href="#" aria-label="Instagram" class="w-10 h-10 grid place-items-center rounded-md bg-[#111C32] border border-brand-800/80 hover:bg-coral-500 hover:border-coral-500 text-slate-300 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm">
          <i data-lucide="instagram" class="w-4 h-4"></i>
        </a>
        <a href="#" aria-label="YouTube" class="w-10 h-10 grid place-items-center rounded-md bg-[#111C32] border border-brand-800/80 hover:bg-coral-500 hover:border-coral-500 text-slate-300 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm">
          <i data-lucide="youtube" class="w-4 h-4"></i>
        </a>
        <a href="#" aria-label="LinkedIn" class="w-10 h-10 grid place-items-center rounded-md bg-[#111C32] border border-brand-800/80 hover:bg-coral-500 hover:border-coral-500 text-slate-300 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm">
          <i data-lucide="linkedin" class="w-4 h-4"></i>
        </a>
      </div>
    </div>

    <!-- Column 2: Navigation Guide (2 cols) -->
    <div class="lg:col-span-2 space-y-4">
      <h4 class="text-xs font-extrabold uppercase tracking-[0.2em] text-coral-400 pb-3 border-b border-brand-800/80 flex items-center gap-2">
        <i data-lucide="compass" class="w-4 h-4"></i> Hospital
      </h4>
      <ul class="space-y-2 text-sm">
        <?php foreach ($NAV as $label => $href): ?>
          <li>
            <a href="<?= $href ?>" class="group flex items-center gap-2.5 py-1.5 text-slate-400 hover:text-white transition font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-brand-500 group-hover:bg-coral-400 group-hover:scale-125 transition"></span>
              <span class="group-hover:translate-x-1 transition-transform duration-200"><?= htmlspecialchars($label) ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Column 3: Centres of Excellence (3 cols) -->
    <div class="lg:col-span-3 space-y-4">
      <h4 class="text-xs font-extrabold uppercase tracking-[0.2em] text-coral-400 pb-3 border-b border-brand-800/80 flex items-center gap-2">
        <i data-lucide="activity" class="w-4 h-4"></i> Specialities
      </h4>
      <ul class="space-y-2 text-sm">
        <?php foreach (array_slice($SPECIALTIES, 0, 6) as $s): ?>
          <li>
            <a href="#search" class="group flex items-center gap-3 py-1.5 text-slate-400 hover:text-white transition font-medium">
              <span class="w-6 h-6 rounded-md bg-brand-900/80 border border-brand-800/80 text-brand-400 group-hover:bg-coral-500 group-hover:border-coral-500 group-hover:text-white grid place-items-center shrink-0 transition">
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
              </span>
              <span class="truncate group-hover:translate-x-1 transition-transform"><?= htmlspecialchars($s['name']) ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Column 4: Campus Location & Clinical Desk (3 cols) -->
    <div class="lg:col-span-3 space-y-4">
      <h4 class="text-xs font-extrabold uppercase tracking-[0.2em] text-coral-400 pb-3 border-b border-brand-800/80 flex items-center gap-2">
        <i data-lucide="map-pin" class="w-4 h-4"></i> Campus Desk
      </h4>
      <div class="p-5 rounded-2xl bg-gradient-to-br from-[#111C32] to-[#0D1628] border border-brand-800/70 space-y-4 shadow-xl">
        <div class="flex items-start gap-3.5">
          <span class="w-9 h-9 rounded-md bg-coral-500/20 border border-coral-500/40 text-coral-400 grid place-items-center shrink-0 mt-0.5">
            <i data-lucide="map-pin" class="w-4 h-4"></i>
          </span>
          <div>
            <div class="text-xs font-bold text-white uppercase tracking-wider">Hisar Medical Campus</div>
            <p class="text-xs text-slate-400 mt-1 leading-relaxed"><?= htmlspecialchars($HOSPITAL['address']) ?></p>
          </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 border-t border-brand-800/60">
          <a href="tel:<?= $HOSPITAL['phone'] ?>" class="flex items-center gap-2 p-2.5 rounded-lg bg-[#0A1120] hover:bg-brand-900 border border-brand-800/60 text-slate-200 hover:text-white text-xs font-semibold transition truncate">
            <i data-lucide="phone" class="w-3.5 h-3.5 text-coral-400 shrink-0"></i> <?= htmlspecialchars($HOSPITAL['phone']) ?>
          </a>
          <a href="mailto:<?= $HOSPITAL['email'] ?>" class="flex items-center gap-2 p-2.5 rounded-lg bg-[#0A1120] hover:bg-brand-900 border border-brand-800/60 text-slate-200 hover:text-white text-xs font-semibold transition truncate">
            <i data-lucide="mail" class="w-3.5 h-3.5 text-coral-400 shrink-0"></i> Email Desk
          </a>
        </div>

        <div class="pt-1">
          <div class="flex items-center justify-between text-xs font-bold px-3.5 py-2.5 rounded-md bg-emerald-500/15 border border-emerald-500/30 text-emerald-300">
            <span class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
              OPD 9 AM – 8 PM
            </span>
            <span class="text-slate-500">|</span>
            <span class="text-coral-300">24×7 Emergency</span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Tier 3: Institutional Accreditations & Cashless Insurance Strip -->
  <div class="relative bg-[#070D18] border-t border-b border-brand-900/90 py-5 px-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-xs">
      <div class="flex items-center gap-3 text-white font-semibold">
        <span class="w-8 h-8 rounded-md bg-coral-500/20 border border-coral-500/30 grid place-items-center text-coral-400 shrink-0">
          <i data-lucide="shield-check" class="w-4 h-4"></i>
        </span>
        <span>NABH Accredited &amp; ISO 9001:2015 Certified Multispeciality Hospital</span>
      </div>
      <div class="flex flex-wrap items-center justify-center gap-6 text-slate-400 font-medium">
        <span class="flex items-center gap-1.5 text-slate-300"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400"></i> Cashless Insurance (All Major TPAs)</span>
        <span class="flex items-center gap-1.5 text-slate-300"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400"></i> Ayushman Bharat / PM-JAY Empanelled</span>
        <span class="flex items-center gap-1.5 text-slate-300"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400"></i> Haryana Govt. &amp; ECHS Approved</span>
      </div>
    </div>
  </div>

  <!-- Tier 4: Bottom Copyright & Patient Charter Bar -->
  <div class="relative bg-[#050912] py-6 px-6">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
      <p class="font-medium">© <?= date('Y') ?> <?= htmlspecialchars($HOSPITAL['name']) ?>. All rights reserved.</p>
      
      <div class="flex flex-wrap items-center justify-center gap-6 font-medium text-slate-400">
        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
        <a href="#" class="hover:text-white transition-colors">Patient Charter &amp; Rights</a>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-brand-900 border border-brand-800 text-slate-200 font-bold tracking-wide shadow-sm">
          <i data-lucide="badge-check" class="w-3.5 h-3.5 text-coral-400"></i> NABH Accredited
        </span>
      </div>
    </div>
  </div>
</footer>

<script>
  // Render Lucide icons; re-render automatically after Alpine swaps DOM, mega-menu opens, or carousels slide
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

  // Auto-render icons whenever Alpine adds new elements to the DOM
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
