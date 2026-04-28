<!-- ============================================================
     CTA — glass card, comfortable height
============================================================ -->
<section id="cta" class="relative pt-2 pb-12 lg:pt-4 lg:pb-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-brand-600 via-brand-700 to-brand-900 ring-1 ring-brand-100 shadow-glow">

      <!-- Coloured blurs behind the glass -->
      <div class="absolute -top-24 -right-20 w-80 h-80 rounded-full bg-coral-500/30 blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 -left-20 w-80 h-80 rounded-full bg-brand-400/30 blur-3xl pointer-events-none"></div>
      <div class="absolute inset-0 grain opacity-10 pointer-events-none"></div>

      <!-- Glass overlay -->
      <div class="relative backdrop-blur-[2px] p-8 lg:p-12">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-10 items-center">

          <!-- Headline + intro -->
          <div class="lg:col-span-7 text-white">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 ring-1 ring-white/25 backdrop-blur-md text-[10px] uppercase tracking-[0.25em] font-bold">
              <span class="w-1.5 h-1.5 rounded-full bg-coral-400 animate-pulse"></span>
              24×7 Care
            </span>
            <h2 class="mt-4 font-display text-3xl lg:text-[40px] leading-[1.08] font-semibold tracking-tight text-balance">
              Your family's care,
              <span class="italic text-coral-300">a call away.</span>
            </h2>
            <p class="mt-3 text-white/70 text-[14px] leading-relaxed max-w-md">
              Care coordinators on call round-the-clock — book a visit, ask a question, or reach emergency.
            </p>
          </div>

          <!-- Glass action row (side by side) -->
          <div class="lg:col-span-5 flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-3">

            <!-- Emergency -->
            <a href="tel:<?= $HOSPITAL['emergency'] ?>"
               class="group flex-1 flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-coral-500/95 hover:bg-coral-500 ring-1 ring-coral-300/30 text-white shadow-soft transition backdrop-blur-md">
              <span class="relative grid place-items-center w-10 h-10 rounded-xl bg-white/15 shrink-0">
                <i data-lucide="phone-call" class="w-4 h-4"></i>
                <span class="absolute inset-0 rounded-xl bg-white/20 animate-ping opacity-40"></span>
              </span>
              <div class="leading-tight min-w-0">
                <div class="text-[10px] uppercase tracking-widest font-bold opacity-80">Emergency</div>
                <div class="text-[14px] font-bold truncate"><?= htmlspecialchars($HOSPITAL['emergency']) ?></div>
              </div>
            </a>

            <!-- Book -->
            <a href="#search"
               class="group flex-1 flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-white/15 hover:bg-white/25 ring-1 ring-white/30 hover:ring-white/50 text-white backdrop-blur-md transition">
              <span class="grid place-items-center w-10 h-10 rounded-xl bg-white/20 shrink-0">
                <i data-lucide="calendar-plus" class="w-4 h-4"></i>
              </span>
              <div class="leading-tight min-w-0 flex-1">
                <div class="text-[10px] uppercase tracking-widest font-bold opacity-80">Plan a visit</div>
                <div class="text-[14px] font-bold truncate">Book Appointment</div>
              </div>
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 opacity-70 group-hover:opacity-100 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition shrink-0"></i>
            </a>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<footer id="contact" class="relative bg-brand-900 text-brand-100/85 overflow-hidden border-t border-brand-700/40">
  <div class="absolute inset-0 grain opacity-30 pointer-events-none"></div>
  <div class="absolute -top-32 -right-20 w-96 h-96 rounded-full bg-brand-600/30 blur-3xl"></div>
  <div class="absolute -bottom-32 -left-20 w-96 h-96 rounded-full bg-coral-500/15 blur-3xl"></div>

  <div class="relative max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-12 gap-10">
    <div class="lg:col-span-4">
      <a href="#" class="inline-flex items-center" aria-label="<?= htmlspecialchars($HOSPITAL['name']) ?>">
        <img src="assets/images/logo-removebg-preview.png"
             alt="<?= htmlspecialchars($HOSPITAL['name']) ?>"
             width="294" height="80"
             class="h-12 w-auto select-none brightness-0 invert">
      </a>
      <p class="mt-5 text-sm leading-relaxed text-brand-100/70 max-w-sm">
        NABH accredited multispeciality hospital in Hisar. Caring for families since <?= htmlspecialchars($HOSPITAL['founded']) ?> with world-class technology and a human touch.
      </p>
      <div class="mt-6 flex items-center gap-3">
        <a href="#" class="w-10 h-10 grid place-items-center rounded-full bg-white/5 ring-1 ring-white/10 hover:bg-coral-500 hover:ring-coral-500 transition"><i data-lucide="facebook" class="w-4 h-4 text-white"></i></a>
        <a href="#" class="w-10 h-10 grid place-items-center rounded-full bg-white/5 ring-1 ring-white/10 hover:bg-coral-500 hover:ring-coral-500 transition"><i data-lucide="instagram" class="w-4 h-4 text-white"></i></a>
        <a href="#" class="w-10 h-10 grid place-items-center rounded-full bg-white/5 ring-1 ring-white/10 hover:bg-coral-500 hover:ring-coral-500 transition"><i data-lucide="youtube" class="w-4 h-4 text-white"></i></a>
        <a href="#" class="w-10 h-10 grid place-items-center rounded-full bg-white/5 ring-1 ring-white/10 hover:bg-coral-500 hover:ring-coral-500 transition"><i data-lucide="linkedin" class="w-4 h-4 text-white"></i></a>
      </div>
    </div>

    <div class="lg:col-span-2">
      <h4 class="text-white font-semibold mb-4">Hospital</h4>
      <ul class="space-y-3 text-sm">
        <?php foreach ($NAV as $label => $href): ?>
          <li><a href="<?= $href ?>" class="text-brand-100/70 hover:text-coral-300"><?= htmlspecialchars($label) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="lg:col-span-3">
      <h4 class="text-white font-semibold mb-4">Top Specialties</h4>
      <ul class="space-y-3 text-sm">
        <?php foreach (array_slice($SPECIALTIES, 0, 6) as $s): ?>
          <li><a href="#" class="text-brand-100/70 hover:text-coral-300"><?= htmlspecialchars($s['name']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="lg:col-span-3">
      <h4 class="text-white font-semibold mb-4">Reach us</h4>
      <ul class="space-y-4 text-sm">
        <li class="flex gap-3"><i data-lucide="map-pin" class="w-4 h-4 text-coral-300 mt-0.5 shrink-0"></i><span><?= htmlspecialchars($HOSPITAL['address']) ?></span></li>
        <li class="flex gap-3"><i data-lucide="phone" class="w-4 h-4 text-coral-300 mt-0.5 shrink-0"></i><a href="tel:<?= $HOSPITAL['phone'] ?>" class="hover:text-coral-300"><?= htmlspecialchars($HOSPITAL['phone']) ?></a></li>
        <li class="flex gap-3"><i data-lucide="mail" class="w-4 h-4 text-coral-300 mt-0.5 shrink-0"></i><a href="mailto:<?= $HOSPITAL['email'] ?>" class="hover:text-coral-300"><?= htmlspecialchars($HOSPITAL['email']) ?></a></li>
        <li class="flex gap-3"><i data-lucide="clock-3" class="w-4 h-4 text-coral-300 mt-0.5 shrink-0"></i><span>OPD 9 AM – 8 PM &middot; Emergency 24×7</span></li>
      </ul>
    </div>
  </div>

  <div class="relative border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-brand-100/60">
      <p>© <?= date('Y') ?> <?= htmlspecialchars($HOSPITAL['name']) ?>. All rights reserved.</p>
      <div class="flex items-center gap-5">
        <a href="#" class="hover:text-coral-300">Privacy</a>
        <a href="#" class="hover:text-coral-300">Terms</a>
        <a href="#" class="hover:text-coral-300">Patient Rights</a>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/5 ring-1 ring-white/10 text-white"><i data-lucide="badge-check" class="w-3.5 h-3.5 text-coral-300"></i> NABH Accredited</span>
      </div>
    </div>
  </div>
</footer>

<script>
  // Render Lucide icons; re-render after Alpine swaps DOM, mega-menu opens, etc.
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
  // Re-render on demand whenever a dispatch fires (use $dispatch('icons:refresh') from Alpine)
  document.addEventListener('icons:refresh', renderIcons);
</script>

</body>
</html>
