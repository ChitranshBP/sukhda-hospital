<?php require_once __DIR__ . '/data.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($HOSPITAL['name']) ?> &mdash; <?= htmlspecialchars($HOSPITAL['tagline']) ?></title>
  <meta name="description"
    content="Sukhda Multispeciality Hospital, Hisar — NABH accredited multispeciality hospital. 22+ specialties, 60+ expert doctors, 24x7 emergency.">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Tailwind via Play CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['GeistSans', '"GeistSans Fallback"', '"Inter"', 'system-ui', '-apple-system', 'sans-serif'],
            display: ['GeistSans', '"GeistSans Fallback"', '"Inter"', 'system-ui', '-apple-system', 'sans-serif'],
            serif: ['GeistSans', '"GeistSans Fallback"', '"Inter"', 'system-ui', '-apple-system', 'sans-serif'],
            mono: ['GeistSans', '"GeistSans Fallback"', '"Inter"', 'system-ui', '-apple-system', 'sans-serif'],
          },
          colors: {
            brand: {
              50: '#EAF2FB',
              100: '#CFE0F4',
              200: '#9FC1E9',
              300: '#6BA1DD',
              400: '#3F84CD',
              500: '#1F66B5',   // primary blue
              600: '#0F4F94',   // deep blue — main brand
              700: '#0B3D74',
              800: '#082D58',
              900: '#051D3C',
            },
            coral: {
              50: '#FBF5E8',
              100: '#F4E5C5',
              300: '#DCC084',
              500: '#C9A86A',   // logo champagne gold
              600: '#A88349',   // darker on hover
              700: '#8D6E3A',   // deepest, for text on light bg
            },
            sand: '#FBF6EE',
            ink: '#0B1424',
            mist: '#F3F7FC',
          },
          boxShadow: {
            'soft': '0 6px 24px -8px rgba(15, 79, 148, 0.20)',
            'glow': '0 20px 50px -20px rgba(15, 79, 148, 0.50)',
          },
          keyframes: {
            fadeUp: { '0%': { opacity: 0, transform: 'translateY(18px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
            float: { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-8px)' } },
            shimmer: { '0%': { backgroundPosition: '-200% 0' }, '100%': { backgroundPosition: '200% 0' } },
          },
          animation: {
            'fade-up': 'fadeUp .8s ease-out both',
            'float': 'float 6s ease-in-out infinite',
            'shimmer': 'shimmer 3s linear infinite',
          },
        }
      }
    }
  </script>

  <!-- Lucide icons (pinned to stable, loaded BEFORE Alpine so global is ready) -->
  <script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js"></script>
  <!-- Alpine.js for interactivity -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style>
    [x-cloak] {
      display: none !important;
    }

    body,
    p,
    span,
    div,
    li,
    input,
    textarea,
    select,
    button,
    a {
      font-family: GeistSans, "GeistSans Fallback", Inter, system-ui, -apple-system, sans-serif !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .font-display {
      font-family: GeistSans, "GeistSans Fallback", Inter, system-ui, -apple-system, sans-serif !important;
      letter-spacing: -0.015em;
    }

    .font-serif,
    span.italic,
    h1 .italic,
    h2 .italic,
    h3 .italic,
    blockquote p,
    .quote-font {
      font-family: GeistSans, "GeistSans Fallback", Inter, system-ui, -apple-system, sans-serif !important;
    }

    html {
      scroll-behavior: smooth;
      font-size: 17px !important;
      /* Scales down all rem-based typography across the site */
      overflow-x: clip !important;
      max-width: 100vw !important;
    }

    body {
      font-feature-settings: "ss01", "ss02", "cv11";
      -webkit-font-smoothing: antialiased;
      font-size: 1rem;
      overflow-x: clip !important;
      width: 100% !important;
      max-width: 100vw !important;
      position: relative;
    }

    .text-balance {
      text-wrap: balance;
    }

    .grain {
      background-image: radial-gradient(rgba(15, 110, 120, .06) 1px, transparent 1px);
      background-size: 22px 22px;
    }

    .specialty-card:hover .specialty-icon {
      transform: rotate(-6deg) scale(1.08);
    }

    .marquee-track {
      animation: marquee 28s linear infinite;
    }

    @keyframes marquee {
      from {
        transform: translateX(0)
      }

      to {
        transform: translateX(-50%)
      }
    }

    .scrollbar-hide::-webkit-scrollbar {
      display: none
    }

    .scrollbar-hide {
      scrollbar-width: none
    }
  </style>
</head>

<body class="font-sans bg-white text-ink antialiased [overflow-x:clip] w-full max-w-full relative">

  <?php
  // Primary main-bar menu (matches exact navigation & sub-navigation structure from requirements)
  $MAIN_MENU = [
    ['label' => 'About Us', 'href' => '#about', 'children' => ['About Sukhda Healthcare', 'Leadership', 'Infrastructure', 'Why Choose Us', 'Vision and Mission', 'Academics']],
    ['label' => 'Hospital Networks', 'href' => '#about', 'children' => ['Sukhda Multispeciality Hospital', 'Sukhda MedPark']],
    ['label' => 'Our Services', 'href' => '#specialties', 'mega' => true],
    ['label' => 'Doctors', 'href' => '#doctors'],
    ['label' => 'Patient Stories', 'href' => '#testimonials', 'children' => ['Testimonials', 'Success Stories']],
  ];

  // Rich metadata for standard dropdown items (icon + descriptive subtitle + anchor target)
  $CHILD_META = [
    // About
    'About Sukhda Healthcare' => ['icon' => 'building-2', 'desc' => 'Our 24+ years of medical excellence', 'href' => '#about'],
    'Leadership' => ['icon' => 'users', 'desc' => 'Guided by visionary medical pioneers', 'href' => '#about'],
    'Infrastructure' => ['icon' => 'hospital', 'desc' => 'State-of-the-art modular OTs & ICUs', 'href' => '#about'],
    'Why Choose Us' => ['icon' => 'award', 'desc' => "Hisar's most trusted multispeciality hub", 'href' => '#about'],
    'Vision and Mission' => ['icon' => 'compass', 'desc' => 'Our commitment to healing & innovation', 'href' => '#about'],
    'Academics' => ['icon' => 'graduation-cap', 'desc' => 'DNB program run by the institution', 'href' => '#about'],

    // Hospitals
    'Sukhda Multispeciality Hospital' => ['icon' => 'building', 'desc' => 'Flagship 250+ bed multispeciality hub, Hisar', 'href' => '#about'],
    'Sukhda MedPark' => ['icon' => 'tree-pine', 'desc' => 'Ultra-modern super-speciality medical campus', 'href' => '#about'],

    // Doctors
    'All Doctors' => ['icon' => 'user-round-check', 'desc' => 'Browse our 60+ experienced consultants', 'href' => '#doctors'],
    'By Hospital' => ['icon' => 'building-2', 'desc' => 'Filter doctors by hospital campus location', 'href' => '#doctors'],
    'Individual Doctor Pages' => ['icon' => 'stethoscope', 'desc' => 'Detailed clinical profiles & expertise', 'href' => '#doctors'],
    'Find a Doctor' => ['icon' => 'search', 'desc' => 'Quickly search by name or treatment specialty', 'href' => '#doctors'],

    // Patient Stories
    'Testimonials' => ['icon' => 'video', 'desc' => 'Watch authentic video recovery journeys', 'href' => '#testimonials'],
    'Success Stories' => ['icon' => 'sparkles', 'desc' => 'Inspiring medical miracles & breakthroughs', 'href' => '#rare-cases'],

    // Media Centre (Top Bar)
    'Gallery' => ['icon' => 'images', 'desc' => 'Explore our hospital campus & facility photos', 'href' => '#events'],
    'Videos' => ['icon' => 'play-square', 'desc' => 'Health talks, procedures & event coverage', 'href' => '#testimonials'],

    // Patient Guide / Health Library (Top Bar)
    'Blogs' => ['icon' => 'book-open', 'desc' => 'Expert health advice & medical articles', 'href' => '#blogs'],
    'Symptoms' => ['icon' => 'activity', 'desc' => 'Understand warning signs & early diagnosis', 'href' => '#blogs'],
    'OPD Schedule' => ['icon' => 'calendar-clock', 'desc' => 'Timings of consultant OPD visits & clinics', 'href' => '#doctors'],
    'Empanelments' => ['icon' => 'shield-check', 'desc' => 'TPA, Ayushman & corporate insurance partners', 'href' => '#about'],
    'Rare Cases' => ['icon' => 'trophy', 'desc' => 'Complex & rare clinical achievements', 'href' => '#rare-cases'],
    'Treatments' => ['icon' => 'shield-plus', 'desc' => 'Comprehensive guide to surgical & medical care', 'href' => '#specialties'],
    'Conditions' => ['icon' => 'heart-pulse', 'desc' => 'Patient guides on managing chronic diseases', 'href' => '#specialties'],
    'Breakthrough Cases' => ['icon' => 'trophy', 'desc' => 'Complex & rare clinical achievements', 'href' => '#rare-cases'],
  ];

  // Local fallback mapping for specialty icons so header mega menu has exact Lucide icons
  $HEADER_ICON_MAP = [
    'heart' => 'heart-pulse',
    'brain' => 'brain',
    'kidney' => 'droplet',
    'stomach' => 'circle',
    'bone' => 'bone',
    'urology' => 'activity',
    'ear' => 'ear',
    'pregnant' => 'baby',
    'skin' => 'sparkles',
    'cell' => 'biohazard',
    'scalpel' => 'scissors',
    'surgery' => 'scissors',
    'baby' => 'baby',
    'ambulance' => 'ambulance',
    'syringe' => 'syringe',
    'mind' => 'smile',
    'tooth' => 'shell',
    'physio' => 'dumbbell',
    'lab' => 'flask-conical',
    'scan' => 'scan',
    'medicine' => 'pill',
    'surgery2' => 'scissors',
  ];

  // Categorize specialties precisely into 3 columns: Treatments, Departments, Specialities
  $SPEC_TO_CAT_MAP = [
    'Medical Oncology' => 'Treatments',
    'Surgical Oncology' => 'Treatments',
    'Interventional Cardiology' => 'Treatments',
    'Spine Surgery' => 'Treatments',
    'Neurosurgery' => 'Treatments',
    'Orthopedics & Joint Replacement' => 'Treatments',
    'General & Laparoscopic Surgery' => 'Treatments',
    'Advanced Laparoscopy' => 'Treatments',
    'Bariatric Surgery' => 'Treatments',
    'Anaesthesia & Pain Management' => 'Treatments',
    'Physiotherapy & Rehabilitation' => 'Treatments',

    'Cancer Care Centre' => 'Departments',
    'Internal Medicine' => 'Departments',
    'Emergency & Critical Care' => 'Departments',
    'Trauma Centre' => 'Departments',
    'Gynaecology & Women\'s Health' => 'Departments',
    'Paediatrics & Neonatology' => 'Departments',
    'Diagnostic Services & Imaging' => 'Departments',
    'Lab: Pathology & Microbiology' => 'Departments',
    'Dentistry & Maxillofacial' => 'Departments',

    'Cardiac Sciences' => 'Specialities',
    'Nephrology & Kidney Care' => 'Specialities',
    'Gastroenterology & ERCP' => 'Specialities',
    'Urology & Laparoscopy' => 'Specialities',
    'Dermatology & Cosmetology' => 'Specialities',
    'Psychiatry & Mental Health' => 'Specialities',
    'ENT (Ear, Nose & Throat)' => 'Specialities',
  ];

  $CATEGORIZED_SPECS = [
    'Treatments' => [],
    'Departments' => [],
    'Specialities' => [],
  ];
  foreach ($SPECIALTIES as $s) {
    $cat = $SPEC_TO_CAT_MAP[$s['name']] ?? 'Treatments';
    if (isset($CATEGORIZED_SPECS[$cat])) {
      $CATEGORIZED_SPECS[$cat][] = $s;
    } else {
      $CATEGORIZED_SPECS['Treatments'][] = $s;
    }
  }
  $CAT_META = [
    'Treatments' => ['icon' => 'shield-plus', 'badge' => 'Surgical & Medical Interventions'],
    'Departments' => ['icon' => 'building-2', 'badge' => 'Core Hospital Clinical & Lab Units'],
    'Specialities' => ['icon' => 'heart-pulse', 'badge' => 'Organ & System Super-Speciality Care'],
  ];

  // Upper tier utility navigation menu items & dropdown structure
  $TOP_MENU = [
    ['label' => 'Media Centre', 'href' => '#events', 'children' => ['Gallery', 'Videos']],
    ['label' => 'Patient Guide', 'href' => '#blogs', 'children' => ['Blogs', 'Symptoms', 'OPD Schedule', 'Empanelments', 'Rare Cases']],
    ['label' => 'Events & Camps', 'href' => '#events'],
    ['label' => 'CSR', 'href' => '#'],
    ['label' => 'Contact Us', 'href' => '#'],
  ];
  ?>

  <header x-data="{ open:false, m:null, t:null }" class="sticky top-0 z-50 shadow-soft bg-white w-full">

    <!-- ===== TIER 1: Upper Header Utility & Guide Bar ===== -->
    <div
      class="hidden lg:block relative bg-gradient-to-r from-brand-900 via-brand-800 to-brand-600 text-white border-b border-white/10">
      <div class="max-w-[1440px] mx-auto px-6 h-11 flex items-center justify-between gap-4 text-[12.5px]">

        <!-- Left: Quick contact actions -->
        <div class="flex items-center gap-4 xl:gap-5 shrink-0">
          <a href="https://wa.me/919996544005" class="inline-flex items-center gap-1.5 hover:text-coral-200 transition">
            <span class="w-5 h-5 rounded-full bg-[#25D366] grid place-items-center shadow-sm">
              <i data-lucide="phone" class="w-3 h-3 text-white"></i>
            </span>
            <span class="font-medium">WhatsApp Us</span> <span class="opacity-80 text-xs">(24/7)</span>
          </a>
          <span class="w-px h-4 bg-white/20"></span>
          <a href="tel:<?= $HOSPITAL['emergency'] ?>"
            class="inline-flex items-center gap-1.5 font-bold hover:text-coral-200 transition">
            <span class="w-5 h-5 rounded-full bg-coral-500 grid place-items-center shadow-sm animate-pulse">
              <i data-lucide="phone-call" class="w-3 h-3 text-white"></i>
            </span>
            <span><?= htmlspecialchars($HOSPITAL['emergency']) ?></span> <span
              class="opacity-80 font-normal text-xs">(24/7 ER)</span>
          </a>
        </div>

        <!-- Right: Upper Navigation Links & Dropdowns ($TOP_MENU) -->
        <div class="flex items-center gap-1 xl:gap-2.5 ml-auto">
          <?php foreach ($TOP_MENU as $idx => $topItem): ?>
            <div class="relative" @mouseenter="t = <?= $idx ?>" @mouseleave="t = null">
              <a href="<?= $topItem['href'] ?>"
                class="inline-flex items-center gap-1 py-1.5 px-2.5 rounded-lg hover:bg-white/15 transition-all duration-150 font-bold text-white hover:text-coral-200 tracking-tight"
                :class="t === <?= $idx ?> ? 'bg-white/20 font-extrabold text-white shadow-xs' : ''">
                <span><?= htmlspecialchars($topItem['label']) ?></span>
                <?php if (!empty($topItem['children'])): ?>
                  <i data-lucide="chevron-down" class="w-3.5 h-3.5 opacity-70 transition-transform duration-200"
                    :class="t === <?= $idx ?> ? 'rotate-180' : ''"></i>
                <?php endif; ?>
              </a>

              <?php if (!empty($topItem['children'])): ?>
                <!-- Upper Dropdown Box -->
                <div x-show="t === <?= $idx ?>" x-cloak x-transition:enter="transition ease-out duration-150"
                  x-transition:enter-start="opacity-0 translate-y-1.5 scale-95"
                  x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                  x-transition:leave="transition ease-in duration-100"
                  x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                  x-transition:leave-end="opacity-0 translate-y-1 scale-95"
                  class="absolute top-full <?= $idx >= 1 ? 'right-0' : 'left-0' ?> mt-1.5 w-[290px] bg-white text-ink rounded-2xl shadow-glow ring-1 ring-brand-100/80 p-2 z-50 space-y-1">
                  <?php foreach ($topItem['children'] as $child):
                    $meta = $CHILD_META[$child] ?? ['icon' => 'chevron-right', 'desc' => '', 'href' => '#'];
                    ?>
                    <a href="<?= $meta['href'] ?>"
                      class="group/tc flex items-start gap-2.5 p-2 rounded-xl hover:bg-brand-50/90 transition-all duration-150">
                      <span
                        class="w-7 h-7 rounded-lg bg-brand-50 border border-brand-100/80 text-brand-600 grid place-items-center shrink-0 group-hover/tc:bg-brand-600 group-hover/tc:text-white transition-colors">
                        <i data-lucide="<?= $meta['icon'] ?>" class="w-3.5 h-3.5"></i>
                      </span>
                      <div class="min-w-0">
                        <div class="text-[12px] font-bold text-ink group-hover/tc:text-brand-800 transition-colors">
                          <?= htmlspecialchars($child) ?>
                        </div>
                        <?php if (!empty($meta['desc'])): ?>
                          <div class="text-[10px] text-ink/55 line-clamp-1 mt-0.5"><?= htmlspecialchars($meta['desc']) ?></div>
                        <?php endif; ?>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>

    <!-- ===== TIER 2: Main white bar — logo + dropdown menu + actions ===== -->
    <div class="bg-white border-b border-brand-100/60">
      <nav
        class="max-w-[1440px] mx-auto px-4 lg:px-6 h-[84px] flex items-center justify-between gap-2 xl:gap-4 relative">

        <!-- LEFT: Logo + divider + NABH -->
        <div class="flex items-center gap-2.5 lg:gap-3.5 shrink-0">
          <a href="#top" class="flex items-center" aria-label="<?= htmlspecialchars($HOSPITAL['name']) ?>">
            <img src="assets/images/logo-sukhda.png" alt="<?= htmlspecialchars($HOSPITAL['name']) ?>" width="831"
              height="300" class="h-20 lg:h-20 w-auto select-none">
          </a>
          <span class="hidden sm:block w-px h-16 bg-brand-100"></span>
          <img src="assets/images/logo-removebg-preview1.png" alt="NABH Accredited" title="NABH Accredited" width="80"
            height="80" class="hidden sm:block h-16 w-auto rounded select-none">
        </div>

        <!-- CENTER: Inline dropdown menu (Optimized Bold Navigation Spacing) -->
        <ul
          class="hidden lg:flex items-center gap-1 xl:gap-1.5 text-sm xl:text-[14.5px] font-bold text-ink ml-auto tracking-tight">
          <?php foreach ($MAIN_MENU as $i => $item): ?>
            <li class="<?= !empty($item['mega']) ? 'static' : 'relative' ?>" @mouseenter="m=<?= $i ?>"
              @mouseleave="m=null">
              <a href="<?= $item['href'] ?>"
                class="inline-flex items-center gap-1 px-2.5 xl:px-3 py-2 rounded-xl font-bold text-ink/90 hover:text-brand-700 hover:bg-brand-50/80 transition-all duration-200 whitespace-nowrap"
                :class="m === <?= $i ?> ? 'text-brand-700 bg-brand-50 font-extrabold shadow-sm ring-1 ring-brand-200/60' : ''">
                <?= htmlspecialchars($item['label']) ?>
                <?php if (!empty($item['children']) || !empty($item['mega'])): ?>
                  <i data-lucide="chevron-down" class="w-3.5 h-3.5 opacity-60 transition-transform duration-200 shrink-0"
                    :class="m === <?= $i ?> ? 'rotate-180 text-brand-600' : ''"></i>
                <?php endif; ?>
              </a>

              <?php if (!empty($item['mega'])): ?>
                <!-- Mega menu for specialties (100% solid white, zero glass effect or translucency) -->
                <div x-show="m === <?= $i ?>" x-cloak x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 translate-y-2.5 scale-[0.98]"
                  x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                  x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                  x-transition:leave-end="opacity-0 translate-y-1.5 scale-[0.98]"
                  class="absolute top-full left-4 right-4 lg:left-6 lg:right-6 mt-2.5 max-w-[1240px] mx-auto bg-white rounded-3xl shadow-2xl border border-slate-200 p-5 lg:p-6 z-50 max-h-[calc(100vh-100px)] overflow-y-auto">

                  <div
                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-4 mb-4 border-b border-slate-200">
                    <div class="flex flex-wrap items-center gap-2.5">
                      <span
                        class="px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-[10.5px] font-extrabold uppercase tracking-widest border border-brand-200">Treatments,
                        Departments & Specialities</span>
                      <p class="text-xs text-ink/75 font-medium">Categorized guide across our <?= count($SPECIALTIES) ?>
                        specialized medical & diagnostic centers</p>
                    </div>
                    <a href="#specialties"
                      class="inline-flex items-center gap-1.5 text-xs text-brand-600 hover:text-coral-600 font-bold transition-colors group/link shrink-0">
                      <span>Explore all departments</span>
                      <i data-lucide="arrow-right"
                        class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform duration-200"></i>
                    </a>
                  </div>

                  <!-- Responsive 3-column grid (Solid high-contrast opaque cards) -->
                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
                    <?php foreach ($CATEGORIZED_SPECS as $catName => $catItems):
                      $meta = $CAT_META[$catName] ?? ['icon' => 'stethoscope', 'badge' => 'Specialized Care'];
                      ?>
                      <div
                        class="bg-slate-50 rounded-2xl p-3 sm:p-3.5 border border-slate-200/90 flex flex-col justify-between min-w-0 shadow-sm">
                        <div>
                          <div class="flex items-center justify-between gap-1 pb-2 mb-2.5 border-b border-slate-200">
                            <div class="flex items-center gap-1.5 min-w-0">
                              <span
                                class="w-6 h-6 rounded-lg bg-white border border-slate-200 text-brand-600 grid place-items-center shrink-0 shadow-2xs">
                                <i data-lucide="<?= $meta['icon'] ?>" class="w-3.5 h-3.5"></i>
                              </span>
                              <h4 class="text-[12.5px] font-bold text-brand-950 truncate"><?= htmlspecialchars($catName) ?>
                              </h4>
                            </div>
                          </div>
                          <div class="space-y-1.5">
                            <?php foreach ($catItems as $s):
                              $sIcon = $HEADER_ICON_MAP[$s['icon']] ?? 'stethoscope';
                              ?>
                              <a href="#specialties"
                                class="group/s flex items-center gap-2 p-1.5 rounded-xl bg-white hover:bg-brand-50 border border-slate-200/80 hover:border-brand-300 transition-all duration-150 min-w-0 shadow-2xs hover:shadow-sm">
                                <span
                                  class="w-6 h-6 rounded-lg bg-brand-50 text-brand-600 group-hover/s:bg-brand-600 group-hover/s:text-white grid place-items-center shrink-0 transition-colors">
                                  <i data-lucide="<?= $sIcon ?>" class="w-3 h-3"></i>
                                </span>
                                <span
                                  class="text-[11.5px] font-bold text-ink/90 group-hover/s:text-brand-800 truncate transition-colors flex-1"><?= htmlspecialchars($s['name']) ?></span>
                              </a>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>

                  <!-- Mega menu bottom banner CTA -->
                  <div
                    class="mt-4 pt-3.5 border-t border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 rounded-2xl bg-gradient-to-r from-brand-900 via-brand-800 to-brand-700 p-3.5 sm:p-4 text-white shadow-soft">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="w-9 h-9 rounded-xl bg-white/10 border border-white/20 grid place-items-center shrink-0">
                        <i data-lucide="shield-plus" class="w-4 h-4 text-coral-300"></i>
                      </div>
                      <div class="min-w-0">
                        <h4 class="text-[12.5px] font-bold tracking-wide truncate">Need help finding the right department or
                          specialist?</h4>
                        <p class="text-[11px] text-brand-100/90 truncate">Our 24/7 clinical coordinators can guide your
                          exact
                          diagnostic or treatment path.</p>
                      </div>
                    </div>
                    <a href="#search"
                      class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 px-5 py-2.5 rounded-md bg-coral-500 hover:bg-coral-600 text-white text-xs font-bold uppercase tracking-wider shadow-soft hover:scale-105 transition-all shrink-0 whitespace-nowrap">
                      <span>Consult Specialist</span>
                      <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                    </a>
                  </div>
                </div>
              <?php elseif (!empty($item['children'])): ?>
                <!-- Standard dropdown with rich items (Solid opaque white without glass blur) -->
                <div x-show="m === <?= $i ?>" x-cloak x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 translate-y-2.5 scale-[0.98]"
                  x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                  x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                  x-transition:leave-end="opacity-0 translate-y-1.5 scale-[0.98]"
                  class="absolute top-full <?= $i >= 2 ? 'right-0' : 'left-0' ?> mt-2.5 w-[310px] sm:w-[330px] bg-white rounded-2xl shadow-2xl border border-slate-200 p-2.5 space-y-1.5 z-50">
                  <?php foreach ($item['children'] as $c):
                    $meta = $CHILD_META[$c] ?? ['icon' => 'chevron-right', 'desc' => 'Explore hospital details', 'href' => '#'];
                    ?>
                    <a href="<?= $meta['href'] ?>"
                      class="group/c block p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-200 transition-all duration-200">
                      <div class="flex items-start gap-3">
                        <span
                          class="w-9 h-9 rounded-xl bg-brand-50 border border-brand-100 text-brand-600 grid place-items-center shrink-0 group-hover/c:bg-brand-600 group-hover/c:text-white group-hover/c:shadow-soft group-hover/c:scale-105 transition-all duration-200">
                          <i data-lucide="<?= $meta['icon'] ?>" class="w-4 h-4"></i>
                        </span>
                        <div class="flex-1 min-w-0">
                          <div class="flex items-center justify-between gap-1">
                            <span
                              class="text-[13px] font-bold text-ink group-hover/c:text-brand-800 transition-colors"><?= htmlspecialchars($c) ?></span>
                            <i data-lucide="chevron-right"
                              class="w-3.5 h-3.5 text-brand-400 opacity-0 -translate-x-1.5 group-hover/c:opacity-100 group-hover/c:translate-x-0 transition-all duration-200 shrink-0"></i>
                          </div>
                          <p
                            class="text-[11px] text-ink/65 leading-tight mt-0.5 truncate group-hover/c:text-ink/85 transition-colors">
                            <?= htmlspecialchars($meta['desc']) ?>
                          </p>
                        </div>
                      </div>
                    </a>
                  <?php endforeach; ?>
                  <div
                    class="mt-2 pt-2 border-t border-slate-200 px-2.5 py-2 flex items-center justify-between text-[11px] bg-slate-50 rounded-xl">
                    <span class="text-ink/75 font-medium">Need immediate assistance?</span>
                    <a href="tel:<?= $HOSPITAL['emergency'] ?>"
                      class="text-brand-700 hover:text-coral-600 font-bold inline-flex items-center gap-1 transition-colors">
                      <i data-lucide="phone-call" class="w-3 h-3"></i> Helpline →
                    </a>
                  </div>
                </div>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>

        <!-- RIGHT: CTA + mobile -->
        <div class="flex items-center gap-2 lg:gap-3 shrink-0 ml-auto lg:ml-3">
          <a href="#search"
            class="hidden sm:inline-flex items-center h-11 px-5 lg:px-6 rounded-md bg-coral-500 hover:bg-coral-600 text-white text-[12.5px] font-bold uppercase tracking-wider shadow-soft transition whitespace-nowrap">
            Book an Appointment
          </a>
          <button @click="open=!open"
            class="lg:hidden w-11 h-11 rounded-xl bg-brand-50 text-brand-700 grid place-items-center"
            aria-label="Open menu">
            <i x-show="!open" data-lucide="menu" class="w-5 h-5"></i>
            <i x-show="open" x-cloak data-lucide="x" class="w-5 h-5"></i>
          </button>
        </div>
      </nav>
    </div>

    <!-- ===== MOBILE MENU ===== -->
    <div x-show="open" x-cloak x-transition
      class="lg:hidden border-t border-brand-100 bg-white max-h-[80vh] overflow-y-auto" x-data="{ mobileSub: null }">
      <div class="px-5 py-4 space-y-1.5">
        <?php foreach ($MAIN_MENU as $idx => $item): ?>
          <div class="rounded-xl border border-transparent transition-all"
            :class="mobileSub === <?= $idx ?> ? 'bg-brand-50/40 border-brand-100/80 p-1.5' : ''">
            <div
              class="flex items-center justify-between px-3 py-2.5 rounded-lg hover:bg-mist text-ink font-bold transition-colors">
              <a href="<?= $item['href'] ?>"
                @click="<?= (!empty($item['children']) || !empty($item['mega'])) ? "mobileSub = (mobileSub === $idx ? null : $idx); \$event.preventDefault();" : "open=false" ?>"
                class="flex-1 font-bold text-[15px]">
                <?= htmlspecialchars($item['label']) ?>
              </a>
              <?php if (!empty($item['children']) || !empty($item['mega'])): ?>
                <button type="button" @click="mobileSub = (mobileSub === <?= $idx ?> ? null : <?= $idx ?>)"
                  class="p-1.5 text-brand-600 rounded-md hover:bg-brand-100/60 transition-colors">
                  <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200"
                    :class="mobileSub === <?= $idx ?> ? 'rotate-180 text-brand-700 font-bold' : ''"></i>
                </button>
              <?php else: ?>
                <i data-lucide="chevron-right" class="w-4 h-4 text-brand-400"></i>
              <?php endif; ?>
            </div>

            <?php if (!empty($item['children'])): ?>
              <div x-show="mobileSub === <?= $idx ?>" x-transition x-cloak
                class="pl-2 pr-1 py-1.5 space-y-1 border-l-2 border-brand-300 ml-3 my-1">
                <?php foreach ($item['children'] as $c):
                  $meta = $CHILD_META[$c] ?? ['icon' => 'chevron-right', 'desc' => '', 'href' => '#'];
                  ?>
                  <a href="<?= $meta['href'] ?>" @click="open=false"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm text-ink/80 hover:text-brand-800 transition-all">
                    <span class="w-7 h-7 rounded-lg bg-brand-100/80 text-brand-700 grid place-items-center shrink-0">
                      <i data-lucide="<?= $meta['icon'] ?>" class="w-3.5 h-3.5"></i>
                    </span>
                    <div class="min-w-0">
                      <div class="text-xs font-bold truncate"><?= htmlspecialchars($c) ?></div>
                      <?php if (!empty($meta['desc'])): ?>
                        <div class="text-[10px] text-ink/50 truncate"><?= htmlspecialchars($meta['desc']) ?></div>
                      <?php endif; ?>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            <?php elseif (!empty($item['mega'])): ?>
              <div x-show="mobileSub === <?= $idx ?>" x-transition x-cloak
                class="pl-2 pr-1 py-1.5 space-y-3 border-l-2 border-brand-300 ml-3 my-1 max-h-[360px] overflow-y-auto">
                <?php foreach ($CATEGORIZED_SPECS as $cName => $cList): ?>
                  <div class="space-y-1">
                    <div
                      class="text-[11px] font-extrabold uppercase tracking-wider text-brand-600 px-2 pt-1 border-b border-brand-100 pb-1">
                      <?= htmlspecialchars($cName) ?>
                    </div>
                    <?php foreach ($cList as $s):
                      $sIcon = $HEADER_ICON_MAP[$s['icon']] ?? 'stethoscope';
                      ?>
                      <a href="#specialties" @click="open=false"
                        class="flex items-center gap-2.5 px-2.5 py-1.5 rounded-lg hover:bg-white hover:shadow-sm text-ink/80 hover:text-brand-800 transition-all">
                        <span class="w-6 h-6 rounded-md bg-brand-100/80 text-brand-700 grid place-items-center shrink-0">
                          <i data-lucide="<?= $sIcon ?>" class="w-3 h-3"></i>
                        </span>
                        <span class="text-xs font-bold truncate"><?= htmlspecialchars($s['name']) ?></span>
                      </a>
                    <?php endforeach; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <!-- Mobile Top Bar Items -->
        <div class="pt-2 mt-2 border-t border-brand-100/80 space-y-1.5">
          <div class="px-3 text-[11px] font-extrabold uppercase tracking-wider text-brand-600">Quick Guide &amp;
            Services</div>
          <?php foreach ($TOP_MENU as $idx => $tItem): ?>
            <div class="rounded-xl border border-transparent transition-all"
              :class="mobileSub === 'top_<?= $idx ?>' ? 'bg-brand-50/40 border-brand-100/80 p-1.5' : ''">
              <div
                class="flex items-center justify-between px-3 py-2 rounded-lg hover:bg-mist text-ink font-medium transition-colors">
                <a href="<?= $tItem['href'] ?>"
                  @click="<?= !empty($tItem['children']) ? "mobileSub = (mobileSub === 'top_$idx' ? null : 'top_$idx'); \$event.preventDefault();" : "open=false" ?>"
                  class="flex-1 font-semibold text-[13.5px] text-brand-900">
                  <?= htmlspecialchars($tItem['label']) ?>
                </a>
                <?php if (!empty($tItem['children'])): ?>
                  <button type="button" @click="mobileSub = (mobileSub === 'top_<?= $idx ?>' ? null : 'top_<?= $idx ?>')"
                    class="p-1.5 text-brand-600 rounded-md hover:bg-brand-100/60 transition-colors">
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200"
                      :class="mobileSub === 'top_<?= $idx ?>' ? 'rotate-180 text-brand-700 font-bold' : ''"></i>
                  </button>
                <?php else: ?>
                  <i data-lucide="chevron-right" class="w-4 h-4 text-brand-400"></i>
                <?php endif; ?>
              </div>

              <?php if (!empty($tItem['children'])): ?>
                <div x-show="mobileSub === 'top_<?= $idx ?>'" x-transition x-cloak
                  class="pl-2 pr-1 py-1.5 space-y-1 border-l-2 border-brand-300 ml-3 my-1">
                  <?php foreach ($tItem['children'] as $c):
                    $meta = $CHILD_META[$c] ?? ['icon' => 'chevron-right', 'desc' => '', 'href' => '#'];
                    ?>
                    <a href="<?= $meta['href'] ?>" @click="open=false"
                      class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm text-ink/80 hover:text-brand-800 transition-all">
                      <span class="w-7 h-7 rounded-lg bg-brand-100/80 text-brand-700 grid place-items-center shrink-0">
                        <i data-lucide="<?= $meta['icon'] ?>" class="w-3.5 h-3.5"></i>
                      </span>
                      <div class="min-w-0">
                        <div class="text-xs font-bold truncate"><?= htmlspecialchars($c) ?></div>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="pt-4 mt-2 border-t border-brand-100 grid grid-cols-1 sm:grid-cols-2 gap-2">
          <a href="tel:<?= $HOSPITAL['emergency'] ?>"
            class="flex items-center justify-center gap-2 px-4 py-3.5 rounded-md bg-coral-500 text-white font-semibold">
            <i data-lucide="phone-call" class="w-4 h-4"></i> Emergency · 24/7
          </a>
          <a href="#search" @click="open=false"
            class="flex items-center justify-center gap-2 px-4 py-3.5 rounded-md bg-brand-600 text-white font-semibold">
            Book Appointment
          </a>
        </div>
      </div>
    </div>
  </header>