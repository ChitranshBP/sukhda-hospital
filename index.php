<?php require __DIR__ . '/includes/header.php'; ?>

<!-- ============================================================
     1. BANNER / HERO SLIDER (full-width image-only)
============================================================ -->
<?php
$BANNERS = [
  'https://sukhdahospitalhisar.com/templates/sukhda/images/slider1.jpg',
  'https://sukhdahospitalhisar.com/templates/sukhda/images/slider2.jpg',
  'https://sukhdahospitalhisar.com/templates/sukhda/images/slider3.jpg',
];
?>
<section
  class="relative w-screen left-1/2 -translate-x-1/2 overflow-hidden bg-brand-900"
  x-data="{
    active: 0,
    total: <?= count($BANNERS) ?>,
    timer: null,
    start() { this.timer = setInterval(() => this.next(), 5500) },
    stop()  { clearInterval(this.timer) },
    next()  { this.active = (this.active + 1) % this.total },
    prev()  { this.active = (this.active - 1 + this.total) % this.total },
  }"
  x-init="start()"
  @mouseenter="stop()" @mouseleave="start()"
>
  <!-- Sizer: first slide sets the natural aspect ratio of the banner -->
  <img src="<?= htmlspecialchars($BANNERS[0]) ?>" alt="" aria-hidden="true"
       class="block w-full h-auto invisible select-none pointer-events-none">

  <!-- Slides stacked over the sizer -->
  <?php foreach ($BANNERS as $i => $img): ?>
    <div
      x-show="active === <?= $i ?>"
      x-transition:enter="transition ease-out duration-1000"
      x-transition:enter-start="opacity-0 scale-[1.03]"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-700"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="absolute inset-0"
    >
      <img src="<?= htmlspecialchars($img) ?>" alt="Sukhda Hospital banner <?= $i+1 ?>"
           class="absolute inset-0 w-full h-full object-cover"
           <?= $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"' ?>>
    </div>
  <?php endforeach; ?>

  <!-- Slider arrows -->
  <button @click="prev()" aria-label="Previous slide"
          class="hidden md:grid place-items-center absolute left-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/85 backdrop-blur ring-1 ring-white/40 text-brand-700 hover:bg-coral-500 hover:text-white hover:ring-coral-500 transition shadow-soft">
    <i data-lucide="arrow-left" class="w-5 h-5"></i>
  </button>
  <button @click="next()" aria-label="Next slide"
          class="hidden md:grid place-items-center absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/85 backdrop-blur ring-1 ring-white/40 text-brand-700 hover:bg-coral-500 hover:text-white hover:ring-coral-500 transition shadow-soft">
    <i data-lucide="arrow-right" class="w-5 h-5"></i>
  </button>

  <!-- Slide indicators -->
  <div class="absolute bottom-5 left-0 right-0 z-10 flex justify-center">
    <div class="flex items-center gap-2 px-3 py-2 rounded-full bg-black/30 backdrop-blur ring-1 ring-white/20">
      <?php for ($i=0;$i<count($BANNERS);$i++): ?>
        <button @click="active=<?= $i ?>"
                :class="active===<?= $i ?> ? 'w-10 bg-coral-400' : 'w-2.5 bg-white/50 hover:bg-white/80'"
                class="h-2.5 rounded-full transition-all"
                aria-label="Go to slide <?= $i+1 ?>"></button>
      <?php endfor; ?>
    </div>
  </div>

</section>


<!-- ============================================================
     2. SEARCH — concise pill, overlapping the banner edge
============================================================ -->
<section id="search" class="relative -mt-9 lg:-mt-12 z-20">
  <div class="max-w-3xl mx-auto px-5">
    <form class="flex items-center gap-1 p-1.5 rounded-full bg-white ring-1 ring-brand-100 focus-within:ring-brand-400 shadow-glow transition-all">

      <!-- Specialty -->
      <label class="flex-1 min-w-0 flex items-center gap-2 pl-4 pr-2 py-2 rounded-full hover:bg-mist transition cursor-pointer">
        <i data-lucide="stethoscope" class="w-4 h-4 text-brand-500 shrink-0"></i>
        <select class="w-full bg-transparent text-sm font-medium text-ink outline-none cursor-pointer appearance-none truncate">
          <option>All specialties</option>
          <?php foreach ($SPECIALTIES as $s): ?><option><?= htmlspecialchars($s['name']) ?></option><?php endforeach; ?>
        </select>
      </label>

      <span class="hidden sm:block w-px h-6 bg-brand-100"></span>

      <!-- Doctor / keyword -->
      <label class="hidden sm:flex flex-[1.3] min-w-0 items-center gap-2 px-3 py-2 rounded-full hover:bg-mist transition">
        <i data-lucide="search" class="w-4 h-4 text-brand-500 shrink-0"></i>
        <input type="text" placeholder="Doctor name or symptom"
               class="w-full bg-transparent text-sm font-medium text-ink placeholder:text-ink/40 outline-none">
      </label>

      <!-- Submit -->
      <button type="submit"
              class="inline-flex items-center justify-center gap-1.5 h-11 px-5 rounded-full bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold shadow-soft transition shrink-0"
              aria-label="Search">
        <span class="hidden sm:inline">Search</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </button>
    </form>
  </div>
</section>


<!-- Insurance partners marquee -->
<div class="bg-white border-b border-brand-100/60 py-5 mt-6 lg:mt-8 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 flex items-center gap-6">
    <span class="shrink-0 text-[11px] uppercase tracking-[0.2em] font-bold text-brand-600">Cashless at</span>
    <div class="flex-1 overflow-hidden">
      <div class="flex marquee-track gap-12 text-ink/40 whitespace-nowrap">
        <?php for ($k=0;$k<2;$k++): foreach (['CGHS','ECHS','Star Health','HDFC Ergo','Care Health','ICICI Lombard','Bajaj Allianz','Niva Bupa','UHC','MD India'] as $p): ?>
          <span class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-widest"><i data-lucide="shield-check" class="w-4 h-4"></i> <?= $p ?></span>
        <?php endforeach; endfor; ?>
      </div>
    </div>
  </div>
</div>


<!-- ============================================================
     3. SPECIALITIES & PROCEDURES — tabbed grid + Find-a-Doctor card
============================================================ -->
<?php
$iconMap = [
  'heart'=>'heart-pulse','brain'=>'brain','kidney'=>'droplet','stomach'=>'circle','bone'=>'bone',
  'urology'=>'activity','ear'=>'ear','pregnant'=>'baby','skin'=>'sparkles','cell'=>'biohazard',
  'scalpel'=>'scissors','surgery'=>'scissors','baby'=>'baby','ambulance'=>'ambulance','syringe'=>'syringe',
  'mind'=>'smile','tooth'=>'shell','physio'=>'dumbbell','lab'=>'flask-conical','scan'=>'scan',
  'medicine'=>'pill','surgery2'=>'scissors',
];
$PROCEDURES = [
  ['name'=>'Angioplasty',           'icon'=>'heart-pulse',  'desc'=>'Same-day cardiac stenting.'],
  ['name'=>'Kidney Transplant',     'icon'=>'droplet',      'desc'=>'Pre-transplant evaluation & care.'],
  ['name'=>'Knee Replacement',      'icon'=>'bone',         'desc'=>'Walk pain-free in 6 weeks.'],
  ['name'=>'Laparoscopic Surgery',  'icon'=>'scissors',     'desc'=>'Small cuts, fast recovery.'],
  ['name'=>'Spine Surgery',         'icon'=>'activity',     'desc'=>'Precision-navigated relief.'],
  ['name'=>'Endoscopy & ERCP',      'icon'=>'circle',       'desc'=>'Day-care diagnostic care.'],
  ['name'=>'Dialysis Care',         'icon'=>'flask-conical','desc'=>'8-station HDF suite.'],
  ['name'=>'C-Section Delivery',    'icon'=>'baby',         'desc'=>'Painless, family-centred birth.'],
];
?>
<section id="specialties" class="relative py-12 lg:py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-stretch">

      <!-- LEFT — Title, tabs, items list -->
      <div class="lg:col-span-7" x-data="{ tab: 'specialties' }">

        <!-- Title with underline accent -->
        <div class="relative inline-block">
          <h2 class="font-display text-3xl lg:text-[40px] leading-tight font-semibold text-ink tracking-tight">
            Specialities <span class="text-brand-300">&amp;</span> Procedures
          </h2>
          <span class="absolute -bottom-1 left-0 w-24 h-[3px] bg-coral-500 rounded-full"></span>
        </div>

        <!-- Tabs -->
        <div class="mt-10 flex items-center gap-8 border-b border-brand-100">
          <button @click="tab='specialties'"
                  :class="tab==='specialties' ? 'text-brand-700 border-coral-500' : 'text-ink/45 border-transparent hover:text-ink/70'"
                  class="pb-3 -mb-px border-b-2 font-semibold text-[17px] transition">Specialities</button>
          <button @click="tab='procedures'"
                  :class="tab==='procedures' ? 'text-brand-700 border-coral-500' : 'text-ink/45 border-transparent hover:text-ink/70'"
                  class="pb-3 -mb-px border-b-2 font-semibold text-[17px] transition">Procedures</button>
        </div>

        <!-- SPECIALITIES tab -->
        <div x-show="tab === 'specialties'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="mt-8 grid sm:grid-cols-2 gap-3 lg:gap-4">
          <?php foreach (array_slice($SPECIALTIES, 0, 8) as $s):
            $icon = $iconMap[$s['icon']] ?? 'stethoscope'; ?>
            <a href="#"
               class="group flex items-start gap-4 p-4 lg:p-5 rounded-2xl border border-brand-200 bg-white hover:border-brand-500 hover:shadow-soft transition">
              <span class="w-12 h-12 rounded-2xl bg-brand-50 grid place-items-center text-brand-600 shrink-0 group-hover:bg-brand-600 group-hover:text-white transition">
                <i data-lucide="<?= $icon ?>" class="w-5 h-5"></i>
              </span>
              <h4 class="flex-1 font-semibold text-[15px] text-brand-900 leading-tight self-center"><?= htmlspecialchars($s['name']) ?></h4>
            </a>
          <?php endforeach; ?>
        </div>

        <!-- PROCEDURES tab -->
        <div x-show="tab === 'procedures'" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="mt-8 grid sm:grid-cols-2 gap-3 lg:gap-4">
          <?php foreach ($PROCEDURES as $p): ?>
            <a href="#"
               class="group flex items-start gap-4 p-4 lg:p-5 rounded-2xl border border-brand-200 bg-white hover:border-brand-500 hover:shadow-soft transition">
              <span class="w-12 h-12 rounded-2xl bg-brand-50 grid place-items-center text-brand-600 shrink-0 group-hover:bg-brand-600 group-hover:text-white transition">
                <i data-lucide="<?= $p['icon'] ?>" class="w-5 h-5"></i>
              </span>
              <h4 class="flex-1 font-semibold text-[15px] text-brand-900 leading-tight self-center"><?= htmlspecialchars($p['name']) ?></h4>
            </a>
          <?php endforeach; ?>
        </div>

        <a href="#" class="mt-9 inline-flex items-center gap-1.5 text-sm text-brand-700 font-semibold hover:text-coral-500 transition">
          View all <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>

      <!-- RIGHT — Find a Doctor card -->
      <div class="lg:col-span-5">
        <div class="relative h-full min-h-[440px] rounded-[2rem] overflow-hidden bg-gradient-to-br from-brand-500 via-brand-600 to-brand-700 shadow-glow">
          <!-- decorative -->
          <div class="absolute -right-20 -top-20 w-72 h-72 rounded-full bg-white/10 blur-2xl"></div>
          <div class="absolute -left-20 -bottom-20 w-72 h-72 rounded-full bg-coral-500/25 blur-3xl"></div>
          <svg class="absolute right-6 top-6 w-20 opacity-20" viewBox="0 0 100 100" fill="none">
            <circle cx="50" cy="50" r="48" stroke="white" stroke-dasharray="2 4"/>
            <circle cx="50" cy="50" r="32" stroke="white" stroke-dasharray="2 4"/>
          </svg>

          <!-- Content -->
          <div class="relative z-10 p-8 lg:p-10 max-w-[60%]">
            <h3 class="font-display text-3xl lg:text-[32px] leading-[1.1] font-semibold text-white">
              Looking for<br>an Expert?
            </h3>
            <p class="mt-3 text-white/80 leading-relaxed text-[15px]">
              Sukhda is home to <?= $HOSPITAL['doctors'] ?> trusted specialists across <?= count($SPECIALTIES) ?> departments.
            </p>
            <a href="#search"
               class="mt-7 inline-flex items-center gap-1 pl-5 pr-1.5 py-1.5 rounded-full bg-white text-brand-700 text-[14px] font-semibold hover:bg-coral-500 hover:text-white transition group">
              Find a Doctor
              <span class="ml-2 w-9 h-9 rounded-full bg-brand-600 group-hover:bg-white text-white group-hover:text-coral-500 grid place-items-center transition">
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </span>
            </a>
          </div>

          <!-- Doctor photo on the right -->
          <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=900&auto=format&fit=crop"
               alt="Sukhda specialist"
               class="absolute right-0 bottom-0 w-[55%] h-[78%] object-cover rounded-tl-[2.5rem] ring-4 ring-white/10">

          <!-- 24/7 floating badge -->
          <a href="tel:<?= $HOSPITAL['emergency'] ?>"
             class="absolute bottom-5 right-5 z-20 inline-flex items-center gap-2 pl-2 pr-4 py-2 rounded-full bg-coral-500 text-white shadow-glow hover:bg-coral-600 transition">
            <span class="w-7 h-7 rounded-full bg-white text-coral-500 grid place-items-center">
              <i data-lucide="phone-call" class="w-3.5 h-3.5"></i>
            </span>
            <span class="text-xs font-bold tracking-widest">24/7</span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     ABOUT US — editorial split with image collage + values
============================================================ -->
<section id="about" class="relative py-14 lg:py-20 bg-mist overflow-hidden">
  <!-- soft decorative blobs -->
  <div class="absolute -top-40 -left-32 w-[420px] h-[420px] rounded-full bg-brand-100 blur-3xl opacity-60"></div>
  <div class="absolute -bottom-40 -right-32 w-[420px] h-[420px] rounded-full bg-coral-100 blur-3xl opacity-50"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

      <!-- LEFT — single clean image -->
      <div class="lg:col-span-5">
        <div class="relative aspect-[4/5] rounded-[2rem] overflow-hidden ring-1 ring-brand-100 shadow-glow">
          <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=900&auto=format&fit=crop"
               alt="Sukhda Hospital interior"
               class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-900/25 via-transparent to-transparent"></div>
        </div>
      </div>

      <!-- RIGHT — title, story, values, CTA -->
      <div class="lg:col-span-7">
        <p class="text-brand-500 text-[11px] uppercase tracking-[0.3em] font-semibold">About Sukhda</p>
        <h2 class="mt-3 font-display text-3xl lg:text-[44px] leading-[1.1] font-semibold text-ink tracking-tight text-balance">
          A quiet revolution in <span class="italic text-brand-600">Hisar's</span> healthcare,
          <span class="text-ink/40">since <?= htmlspecialchars($HOSPITAL['founded']) ?>.</span>
        </h2>
        <p class="mt-6 text-ink/70 leading-relaxed text-[15px] lg:text-base max-w-2xl">
          What began in 2002 as a 20-bed clinic founded by <span class="text-brand-700 font-semibold">Dr. Amit Mehta (MD, AIIMS)</span> and <span class="text-brand-700 font-semibold">Dr. Manisha Mehta</span> has grown into one of Haryana's most trusted multispeciality hospitals — <?= count($SPECIALTIES) ?> departments, <?= $HOSPITAL['doctors'] ?> specialists and <?= $HOSPITAL['beds'] ?> beds, all delivering quality healthcare without compromise on cost.
        </p>

        <!-- Values — bordered pill cards with icon + title + supporting line -->
        <?php
        $values = [
          ['icon'=>'heart-handshake',   'title'=>'Compassion first',    'desc'=>'Care that treats people, not protocols.'],
          ['icon'=>'sparkles',          'title'=>'Clinical excellence', 'desc'=>'Evidence-led, outcome-driven medicine.'],
          ['icon'=>'badge-indian-rupee','title'=>'Honest pricing',      'desc'=>'World-class care at fair, transparent rates.'],
          ['icon'=>'shield-check',      'title'=>'NABH accredited',     'desc'=>'Audited quality and patient safety.'],
        ];
        ?>
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-3 lg:gap-4">
          <?php foreach ($values as $v): ?>
            <div class="group flex items-start gap-4 p-4 lg:p-5 rounded-2xl border border-brand-200 bg-white hover:border-brand-500 hover:shadow-soft transition">
              <span class="w-12 h-12 rounded-2xl bg-brand-50 grid place-items-center text-brand-600 shrink-0 group-hover:bg-brand-600 group-hover:text-white transition">
                <i data-lucide="<?= $v['icon'] ?>" class="w-5 h-5"></i>
              </span>
              <div class="min-w-0">
                <h4 class="font-semibold text-[15px] text-brand-900 leading-tight"><?= htmlspecialchars($v['title']) ?></h4>
                <p class="mt-1 text-[12.5px] text-ink/60 leading-snug"><?= htmlspecialchars($v['desc']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- CTA row -->
        <div class="mt-10 flex flex-wrap items-center gap-4">
          <a href="#" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold shadow-soft hover:shadow-glow transition">
            Read our story <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="#" class="inline-flex items-center gap-2 text-brand-700 hover:text-coral-500 text-sm font-semibold transition">
            <span class="w-9 h-9 rounded-full bg-white ring-1 ring-brand-200 grid place-items-center group-hover:bg-coral-500 group-hover:text-white"><i data-lucide="play" class="w-3.5 h-3.5"></i></span>
            Watch the hospital tour
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     4. WORLD CLASS TECHNOLOGY — light tone, image-led cards
============================================================ -->
<section id="technology" class="relative py-12 lg:py-16 bg-white overflow-hidden">
  <!-- soft decorative -->
  <div class="absolute -top-32 -right-32 w-[420px] h-[420px] rounded-full bg-brand-50 blur-3xl opacity-80 pointer-events-none"></div>
  <div class="absolute -bottom-32 -left-32 w-[420px] h-[420px] rounded-full bg-coral-50 blur-3xl opacity-70 pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Header with inline slider controls -->
    <div x-data="{
      scrollByCard(dir) {
        const track = this.$refs.track;
        const card = track.querySelector('article');
        if (!card) return;
        const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
        track.scrollBy({ left: dir * (card.offsetWidth + gap), behavior: 'smooth' });
      }
    }" class="relative">

      <div class="grid lg:grid-cols-12 gap-6 items-end mb-10">
        <div class="lg:col-span-6">
          <p class="text-brand-500 text-[11px] uppercase tracking-[0.3em] font-semibold">World-class technology</p>
          <h2 class="mt-3 font-display text-3xl lg:text-[40px] leading-tight font-semibold text-ink tracking-tight text-balance">
            Precision medicine, powered by <span class="italic text-brand-600">serious infrastructure.</span>
          </h2>
        </div>
        <div class="lg:col-span-6 flex flex-col lg:flex-row lg:items-end lg:justify-end gap-5">
          <p class="text-ink/65 leading-relaxed text-[15px] lg:max-w-sm">
            Every diagnostic and life-support tool a tertiary hospital needs — calibrated daily, audited annually.
          </p>
          <!-- slider arrows -->
          <div class="flex items-center gap-2 shrink-0">
            <button type="button" @click="scrollByCard(-1)" aria-label="Previous"
                    class="w-11 h-11 rounded-full bg-white ring-1 ring-brand-200 hover:bg-brand-600 hover:ring-brand-600 hover:text-white text-brand-700 grid place-items-center transition shadow-soft">
              <i data-lucide="arrow-left" class="w-4 h-4"></i>
            </button>
            <button type="button" @click="scrollByCard(1)" aria-label="Next"
                    class="w-11 h-11 rounded-full bg-brand-600 hover:bg-brand-700 text-white grid place-items-center transition shadow-soft">
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Slider track: 4 cards visible at lg, swipeable, snap to start -->
      <div x-ref="track"
           class="flex gap-5 lg:gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-pl-1 -mx-6 px-6 lg:mx-0 lg:px-0 pb-2">
        <?php foreach ($TECH as $i => $t): ?>
          <article class="group relative shrink-0 snap-start
                          w-[82%] sm:w-[calc((100%-1.25rem)/2)] lg:w-[calc((100%-4.5rem)/4)]
                          rounded-3xl bg-white ring-1 ring-brand-100 overflow-hidden hover:ring-brand-300 hover:-translate-y-1 hover:shadow-glow transition-all duration-300">
            <!-- Image -->
            <div class="relative aspect-[5/4] overflow-hidden bg-mist">
              <img src="<?= htmlspecialchars($t['img']) ?>"
                   alt="<?= htmlspecialchars($t['name']) ?>"
                   loading="lazy"
                   class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
              <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-brand-900/30 to-transparent"></div>
              <span class="absolute top-3 left-3 inline-flex items-center gap-1.5 pl-1 pr-3 py-1 rounded-full bg-white/95 backdrop-blur ring-1 ring-white shadow-soft">
                <span class="w-5 h-5 rounded-full bg-brand-600 text-white text-[10px] font-bold grid place-items-center"><?= $i+1 ?></span>
                <span class="text-[10px] uppercase tracking-widest font-bold text-brand-800"><?= htmlspecialchars($t['tag']) ?></span>
              </span>
            </div>

            <!-- Content -->
            <div class="p-5">
              <h3 class="font-display text-[18px] font-semibold text-brand-900 leading-snug"><?= htmlspecialchars($t['name']) ?></h3>
              <p class="mt-2 text-[12.5px] text-ink/60 leading-relaxed line-clamp-2"><?= htmlspecialchars($t['desc']) ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Footer strip: stats + CTA -->
    <div class="mt-14 flex flex-col sm:flex-row items-center justify-between gap-6 pt-8 border-t border-brand-100">
      <div class="flex items-center divide-x divide-brand-100">
        <div class="pr-6 lg:pr-8">
          <div class="font-display text-2xl lg:text-3xl font-semibold text-brand-700">24×7</div>
          <div class="text-[10px] uppercase tracking-widest text-ink/50 mt-1 font-semibold">Imaging</div>
        </div>
        <div class="px-6 lg:px-8">
          <div class="font-display text-2xl lg:text-3xl font-semibold text-brand-700">128</div>
          <div class="text-[10px] uppercase tracking-widest text-ink/50 mt-1 font-semibold">CT slices</div>
        </div>
        <div class="pl-6 lg:pl-8">
          <div class="font-display text-2xl lg:text-3xl font-semibold text-brand-700">Lvl 3</div>
          <div class="text-[10px] uppercase tracking-widest text-ink/50 mt-1 font-semibold">NICU</div>
        </div>
      </div>

      <div class="flex flex-wrap items-center gap-3">
        <a href="#" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold shadow-soft hover:shadow-glow transition">
          Take a virtual tour <i data-lucide="play" class="w-4 h-4"></i>
        </a>
        <a href="#" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white ring-1 ring-brand-200 text-brand-700 hover:bg-brand-50 text-sm font-semibold transition">
          Download brochure <i data-lucide="download" class="w-4 h-4"></i>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     5. BLOGS — 4-up slider
============================================================ -->
<section id="blogs" class="relative py-12 lg:py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div x-data="{
      scrollByCard(dir) {
        const track = this.$refs.track;
        const card = track.querySelector('article');
        if (!card) return;
        const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
        track.scrollBy({ left: dir * (card.offsetWidth + gap), behavior: 'smooth' });
      }
    }">

      <!-- Header with inline slider controls -->
      <div class="grid lg:grid-cols-12 gap-6 items-end mb-10">
        <div class="lg:col-span-7">
          <p class="text-brand-500 text-[11px] uppercase tracking-[0.3em] font-semibold">Health journal</p>
          <h2 class="mt-3 font-display text-3xl lg:text-[40px] leading-tight font-semibold text-ink tracking-tight text-balance">
            Stories, science and <span class="italic text-brand-600">second opinions.</span>
          </h2>
        </div>
        <div class="lg:col-span-5 flex items-end justify-between lg:justify-end gap-5">
          <a href="#" class="inline-flex items-center gap-1.5 text-sm text-brand-700 font-semibold hover:text-coral-500 transition">
            All articles <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <div class="flex items-center gap-2 shrink-0">
            <button type="button" @click="scrollByCard(-1)" aria-label="Previous"
                    class="w-11 h-11 rounded-full bg-white ring-1 ring-brand-200 hover:bg-brand-600 hover:ring-brand-600 hover:text-white text-brand-700 grid place-items-center transition shadow-soft">
              <i data-lucide="arrow-left" class="w-4 h-4"></i>
            </button>
            <button type="button" @click="scrollByCard(1)" aria-label="Next"
                    class="w-11 h-11 rounded-full bg-brand-600 hover:bg-brand-700 text-white grid place-items-center transition shadow-soft">
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Slider track -->
      <div x-ref="track"
           class="flex gap-5 lg:gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide -mx-6 px-6 lg:mx-0 lg:px-0 pb-2">
        <?php foreach ($BLOGS as $b): ?>
          <article class="group relative shrink-0 snap-start
                          w-[82%] sm:w-[calc((100%-1.25rem)/2)] lg:w-[calc((100%-4.5rem)/4)]
                          rounded-3xl bg-white ring-1 ring-brand-100 overflow-hidden hover:ring-brand-300 hover:-translate-y-1 hover:shadow-glow transition-all duration-300">
            <a href="#" class="block">
              <!-- Image -->
              <div class="relative aspect-[5/4] overflow-hidden bg-mist">
                <img src="<?= htmlspecialchars($b['img']) ?>"
                     alt="<?= htmlspecialchars($b['title']) ?>"
                     loading="lazy"
                     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-brand-900/30 to-transparent"></div>
                <span class="absolute top-3 left-3 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur ring-1 ring-white shadow-soft text-[10px] uppercase tracking-widest font-bold text-brand-800">
                  <?= htmlspecialchars($b['cat']) ?>
                </span>
              </div>

              <!-- Content -->
              <div class="p-5">
                <div class="flex items-center gap-2 text-[11px] uppercase tracking-widest text-ink/45 font-semibold">
                  <span><?= htmlspecialchars($b['date']) ?></span>
                  <span class="w-1 h-1 rounded-full bg-ink/30"></span>
                  <span><?= htmlspecialchars($b['read']) ?></span>
                </div>
                <h3 class="mt-3 font-display text-[18px] font-semibold text-brand-900 leading-snug group-hover:text-coral-500 transition line-clamp-3 text-balance">
                  <?= htmlspecialchars($b['title']) ?>
                </h3>
                <div class="mt-4 pt-4 border-t border-brand-100 flex items-center justify-between text-[12.5px]">
                  <span class="text-ink/55 truncate">By <?= htmlspecialchars($b['author']) ?></span>
                  <span class="inline-flex items-center gap-1 text-brand-600 font-semibold shrink-0">Read <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i></span>
                </div>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     6. VIDEO TESTIMONIALS — featured player + thumbnail rail
============================================================ -->
<section id="testimonials" class="relative py-12 lg:py-16 bg-mist overflow-hidden">
  <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[400px] rounded-full bg-brand-100 blur-3xl opacity-60 pointer-events-none"></div>
  <div class="absolute -bottom-32 right-0 w-[500px] h-[400px] rounded-full bg-coral-100 blur-3xl opacity-50 pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8"
       x-data="{
         active: 0,
         total: <?= count($TESTIMONIALS) ?>,
         videos: <?= htmlspecialchars(json_encode(array_column($TESTIMONIALS, 'youtube'), JSON_UNESCAPED_SLASHES), ENT_QUOTES) ?>,
         select(i) { this.active = i },
         next()    { this.active = (this.active + 1) % this.total },
         prev()    { this.active = (this.active - 1 + this.total) % this.total }
       }">

    <!-- Header -->
    <div class="grid lg:grid-cols-12 gap-6 items-end mb-10">
      <div class="lg:col-span-7">
        <p class="text-brand-500 text-[11px] uppercase tracking-[0.3em] font-semibold">Patient stories</p>
        <h2 class="mt-3 font-display text-3xl lg:text-[40px] leading-tight font-semibold text-ink tracking-tight text-balance">
          Real recoveries, in their <span class="italic text-brand-600">own words.</span>
        </h2>
      </div>
      <div class="lg:col-span-5 flex items-end justify-between lg:justify-end gap-5">
        <p class="text-ink/55 text-[13px] leading-relaxed lg:text-right">
          <span class="inline-flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-coral-500 animate-pulse"></span> Captions available · Tap any video to play</span>
        </p>
      </div>
    </div>

    <!-- Layout -->
    <div class="grid lg:grid-cols-12 gap-6 lg:gap-8 items-start">

      <!-- LEFT — Featured player (single iframe, src swaps on active) -->
      <div class="lg:col-span-7">
        <div class="relative w-full rounded-[2rem] overflow-hidden ring-1 ring-brand-100 bg-brand-900 shadow-glow"
             style="padding-bottom: 56.25%;">
          <iframe class="absolute inset-0 w-full h-full border-0"
                  :src="`https://www.youtube-nocookie.com/embed/${videos[active]}?rel=0&modestbranding=1&playsinline=1`"
                  title="Patient testimonial"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
        </div>

        <!-- Caption row under the player: condition + name + nav -->
        <div class="mt-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          <div class="min-w-0">
            <?php foreach ($TESTIMONIALS as $i => $t): ?>
              <div x-show="active === <?= $i ?>"
                   x-transition:enter="transition ease-out duration-300"
                   x-transition:enter-start="opacity-0 translate-y-1"
                   x-transition:enter-end="opacity-100 translate-y-0">
                <div class="flex items-center gap-2 text-[11px] uppercase tracking-widest text-brand-600 font-bold">
                  <span class="w-1.5 h-1.5 rounded-full bg-coral-500"></span>
                  <?= htmlspecialchars($t['condition']) ?>
                </div>
                <div class="mt-1.5 flex items-baseline gap-2 flex-wrap">
                  <span class="font-display text-xl font-semibold text-brand-900 truncate"><?= htmlspecialchars($t['name']) ?></span>
                  <span class="text-[13px] text-ink/55"><?= htmlspecialchars($t['place']) ?> · Age <?= htmlspecialchars($t['age']) ?></span>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="flex items-center gap-3 shrink-0">
            <span class="font-display text-lg text-brand-700 font-semibold">
              <span x-text="String(active+1).padStart(2,'0')"></span>
              <span class="text-ink/30">/ <?= str_pad(count($TESTIMONIALS), 2, '0', STR_PAD_LEFT) ?></span>
            </span>
            <button @click="prev()" aria-label="Previous testimonial"
                    class="w-11 h-11 rounded-full bg-white ring-1 ring-brand-200 hover:bg-brand-600 hover:ring-brand-600 hover:text-white text-brand-700 grid place-items-center transition shadow-soft">
              <i data-lucide="arrow-left" class="w-4 h-4"></i>
            </button>
            <button @click="next()" aria-label="Next testimonial"
                    class="w-11 h-11 rounded-full bg-brand-600 hover:bg-brand-700 text-white grid place-items-center transition shadow-soft">
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- RIGHT — Quote + outcome card and thumbnail rail -->
      <div class="lg:col-span-5">

        <!-- Quote card with stacked panels -->
        <div class="relative bg-white rounded-3xl p-6 lg:p-7 ring-1 ring-brand-100 shadow-soft min-h-[280px]">
          <?php foreach ($TESTIMONIALS as $i => $t): ?>
            <div x-show="active === <?= $i ?>"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0">
              <i data-lucide="quote" class="w-7 h-7 text-coral-500"></i>
              <blockquote class="mt-3 font-display text-[18px] lg:text-[19px] leading-relaxed text-brand-900 text-balance">
                &ldquo;<?= htmlspecialchars($t['quote']) ?>&rdquo;
              </blockquote>

              <!-- Outcome strip -->
              <dl class="mt-6 grid grid-cols-3 gap-3 pt-5 border-t border-brand-100">
                <div>
                  <dt class="text-[10px] uppercase tracking-widest text-ink/45 font-semibold">Outcome</dt>
                  <dd class="mt-1 font-display text-[15px] font-semibold text-brand-700 leading-tight"><?= htmlspecialchars($t['outcome']) ?></dd>
                </div>
                <div>
                  <dt class="text-[10px] uppercase tracking-widest text-ink/45 font-semibold">Recovery</dt>
                  <dd class="mt-1 font-display text-[15px] font-semibold text-brand-700 leading-tight"><?= htmlspecialchars($t['recovery']) ?></dd>
                </div>
                <div>
                  <dt class="text-[10px] uppercase tracking-widest text-ink/45 font-semibold">Doctor</dt>
                  <dd class="mt-1 font-display text-[13px] font-semibold text-brand-700 leading-tight truncate"><?= htmlspecialchars($t['doctor']) ?></dd>
                </div>
              </dl>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Thumbnail rail -->
        <div class="mt-5">
          <div class="flex items-center justify-between mb-3">
            <p class="text-[10px] uppercase tracking-[0.25em] font-bold text-ink/45">More stories</p>
            <a href="#" class="text-[12px] text-brand-700 hover:text-coral-500 font-semibold inline-flex items-center gap-1">View all <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
          </div>
          <div class="grid grid-cols-5 gap-2.5">
            <?php foreach ($TESTIMONIALS as $i => $t): ?>
              <button type="button"
                      @click="select(<?= $i ?>)"
                      :class="active === <?= $i ?> ? 'ring-2 ring-coral-500 -translate-y-0.5' : 'ring-1 ring-brand-100 hover:ring-brand-300'"
                      class="group relative aspect-[3/4] rounded-2xl overflow-hidden bg-mist transition shadow-soft"
                      aria-label="Watch <?= htmlspecialchars($t['name']) ?>'s testimonial">
                <img src="<?= htmlspecialchars($t['poster']) ?>"
                     alt="<?= htmlspecialchars($t['name']) ?>"
                     loading="lazy"
                     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-900/80 via-brand-900/10 to-transparent"></div>
                <!-- play chip -->
                <span class="absolute top-1.5 right-1.5 w-6 h-6 rounded-full bg-white/95 backdrop-blur grid place-items-center text-brand-700 group-hover:bg-coral-500 group-hover:text-white transition">
                  <i data-lucide="play" class="w-3 h-3 fill-current"></i>
                </span>
                <!-- name -->
                <span class="absolute bottom-1.5 left-1.5 right-1.5 text-white text-[10px] font-bold leading-tight truncate text-left">
                  <?= htmlspecialchars(explode(' ', $t['name'])[0]) ?>
                </span>
                <!-- active indicator -->
                <span x-show="active === <?= $i ?>"
                      class="absolute inset-x-0 bottom-0 h-0.5 bg-coral-500"></span>
              </button>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- ============================================================
     7. NEWS — vector illustration + compact list
============================================================ -->
<section id="news" class="relative pt-12 pb-6 lg:pt-16 lg:pb-8">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">

      <!-- LEFT — Vector illustration + intro -->
      <div class="lg:col-span-4 flex flex-col">
        <p class="text-brand-500 text-[11px] uppercase tracking-[0.3em] font-semibold">News &amp; events</p>
        <h2 class="mt-3 font-display text-3xl lg:text-[40px] leading-tight font-semibold text-ink tracking-tight text-balance">
          Recent <span class="italic text-brand-600">updates</span> from Sukhda.
        </h2>
        <p class="mt-4 text-[15px] text-ink/65 leading-relaxed max-w-sm">
          Camps, milestones and announcements — a short digest of what's happening this month.
        </p>

        <!-- Inline vector illustration -->
        <div class="mt-6 lg:mt-8 max-w-[320px]">
          <svg viewBox="0 0 320 280" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-full h-auto">
            <!-- soft backdrop -->
            <circle cx="160" cy="140" r="120" fill="#EAF2FB"/>
            <!-- coral accent blob -->
            <circle cx="248" cy="64" r="34" fill="#FFDBCC"/>
            <circle cx="248" cy="64" r="18" fill="#FF6B47"/>
            <!-- back card (rotated) -->
            <g transform="rotate(-7 110 150)">
              <rect x="50" y="55" width="160" height="190" rx="16" fill="#FFFFFF" stroke="#CFE0F4" stroke-width="2"/>
              <rect x="68" y="76" width="64" height="8" rx="4" fill="#CFE0F4"/>
              <rect x="68" y="98" width="124" height="6" rx="3" fill="#E5EFF8"/>
              <rect x="68" y="114" width="100" height="6" rx="3" fill="#E5EFF8"/>
            </g>
            <!-- front card -->
            <g>
              <rect x="86" y="60" width="170" height="200" rx="18" fill="#FFFFFF" stroke="#1F66B5" stroke-width="2"/>
              <!-- top bar -->
              <rect x="106" y="82" width="84" height="10" rx="5" fill="#0F4F94"/>
              <!-- "tag" pill -->
              <rect x="200" y="82" width="36" height="18" rx="9" fill="#FFF1EC"/>
              <circle cx="208" cy="91" r="3" fill="#FF6B47"/>
              <rect x="214" y="88" width="18" height="6" rx="3" fill="#FF6B47"/>
              <!-- text lines -->
              <rect x="106" y="116" width="130" height="6" rx="3" fill="#CFE0F4"/>
              <rect x="106" y="132" width="100" height="6" rx="3" fill="#CFE0F4"/>
              <rect x="106" y="148" width="116" height="6" rx="3" fill="#CFE0F4"/>
              <!-- divider -->
              <rect x="106" y="170" width="130" height="1" fill="#EAF2FB"/>
              <!-- date strip -->
              <rect x="106" y="184" width="40" height="6" rx="3" fill="#9FC1E9"/>
              <!-- 'read more' chip -->
              <rect x="106" y="208" width="60" height="22" rx="11" fill="#0F4F94"/>
              <rect x="116" y="216" width="32" height="6" rx="3" fill="#FFFFFF"/>
              <!-- arrow circle -->
              <circle cx="226" cy="219" r="13" fill="#FF6B47"/>
              <path d="M221 219 h10 m-4 -4 l4 4 -4 4" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
            </g>
            <!-- floating dots -->
            <circle cx="60" cy="70" r="5" fill="#FF6B47"/>
            <circle cx="280" cy="220" r="6" fill="#FFA482"/>
            <circle cx="50" cy="240" r="4" fill="#0F4F94"/>
            <circle cx="270" cy="160" r="3" fill="#1F66B5"/>
          </svg>
        </div>
      </div>

      <!-- RIGHT — News list -->
      <div class="lg:col-span-8">
        <div class="flex items-center justify-between mb-3">
          <p class="text-[10px] uppercase tracking-[0.25em] font-bold text-ink/45">Latest</p>
          <a href="#" class="inline-flex items-center gap-1.5 text-[13px] text-brand-700 font-semibold hover:text-coral-500 transition">
            View all <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>

        <ul>
          <?php foreach (array_slice($NEWS, 0, 6) as $n): ?>
            <li class="border-t border-brand-100 first:border-t-0">
              <a href="#" class="flex items-center gap-3 py-3.5 group">
                <span class="text-[11px] uppercase tracking-widest font-semibold text-ink/45 tabular-nums shrink-0 w-14">
                  <?= date('d M', strtotime($n['date'])) ?>
                </span>
                <span class="hidden sm:inline-flex px-2 py-0.5 rounded-full bg-brand-50 text-brand-700 text-[9px] font-bold uppercase tracking-widest shrink-0">
                  <?= htmlspecialchars($n['tag']) ?>
                </span>
                <h3 class="flex-1 min-w-0 font-medium text-[14px] text-brand-900 leading-snug truncate group-hover:text-coral-500 transition">
                  <?= htmlspecialchars($n['title']) ?>
                </h3>
                <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 text-brand-400 group-hover:text-coral-500 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition shrink-0"></i>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>
</section>


<?php require __DIR__ . '/includes/footer.php'; ?>

