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
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">

  <!-- Tailwind via Play CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
            display: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
            serif: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
            mono: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
          },
          colors: {
            brand: {
              50: '#F8FAFC',
              100: '#F1F5F9',
              200: '#E2E8F0',
              300: '#CBD5E1',
              400: '#94A3B8',
              500: '#3B82F6',
              600: '#0F4F94',   // primary brand blue
              700: '#0B3D74',
              800: '#0F172A',
              900: '#0B1424',
            },
            coral: {
              50: '#FFFBEB',
              100: '#FEF3C7',
              300: '#FDE68A',
              500: '#C9A86A',
              600: '#A88349',
              700: '#8D6E3A',
            },
            sand: '#F8FAFC',
            ink: '#0F172A',
            mist: '#F1F5F9',
          },
          boxShadow: {
            'none': 'none',
            'soft': 'none',
            'glow': 'none',
          }
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

    *, *::before, *::after {
      font-family: 'Plus Jakarta Sans', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
      border-radius: 0 !important;
    }

    html {
      scroll-behavior: smooth;
      font-size: 14px !important;
      overflow-x: clip !important;
      max-width: 100vw !important;
    }

    body {
      font-feature-settings: "ss01", "ss02";
      -webkit-font-smoothing: antialiased;
      font-size: 0.9375rem;
      overflow-x: clip !important;
      width: 100% !important;
      max-width: 100vw !important;
      position: relative;
    }

    .text-balance {
      text-wrap: balance;
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

<body id="top" class="font-sans bg-white text-ink antialiased [overflow-x:clip] w-full max-w-full relative">

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
    ['label' => 'CSR', 'href' => '#about'],
    ['label' => 'Contact Us', 'href' => '#contact'],
  ];
  ?>

  <header x-data="{ open:false, m:null, t:null }" class="sticky top-0 z-50 bg-white border-b border-slate-200 w-full">

    <!-- ===== TIER 1: Upper Header Utility & Guide Bar ===== -->
    <div class="hidden lg:block relative bg-slate-900 text-slate-200 border-b border-slate-800">
      <div class="max-w-[1440px] mx-auto px-6 h-10 flex items-center justify-between gap-4 text-[12px]">

        <!-- Left: Quick contact actions -->
        <div class="flex items-center gap-4 xl:gap-5 shrink-0">
          <a href="https://wa.me/919996544005" class="inline-flex items-center gap-1.5 hover:text-white transition">
            <span class="w-4 h-4 bg-[#25D366] grid place-items-center">
              <i data-lucide="phone" class="w-2.5 h-2.5 text-white"></i>
            </span>
            <span class="font-medium">WhatsApp Us</span> <span class="text-slate-400 text-xs">(24/7)</span>
          </a>
          <span class="w-px h-3.5 bg-slate-700"></span>
          <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="inline-flex items-center gap-1.5 font-semibold hover:text-white transition">
            <span class="w-4 h-4 bg-brand-600 grid place-items-center">
              <i data-lucide="phone-call" class="w-2.5 h-2.5 text-white"></i>
            </span>
            <span>Emergency: <?= htmlspecialchars($HOSPITAL['emergency']) ?></span>
          </a>
        </div>

        <!-- Right: Upper Navigation Links & Dropdowns ($TOP_MENU) -->
        <div class="flex items-center gap-1 xl:gap-2 ml-auto">
          <?php foreach ($TOP_MENU as $idx => $topItem): ?>
            <div class="relative" @mouseenter="t = <?= $idx ?>" @mouseleave="t = null">
              <a href="<?= $topItem['href'] ?>"
                class="inline-flex items-center gap-1 py-1 px-2 font-semibold text-slate-300 hover:text-white transition-colors"
                :class="t === <?= $idx ?> ? 'text-white font-bold' : ''">
                <span><?= htmlspecialchars($topItem['label']) ?></span>
                <?php if (!empty($topItem['children'])): ?>
                  <i data-lucide="chevron-down" class="w-3 h-3 opacity-60 transition-transform duration-200"
                    :class="t === <?= $idx ?> ? 'rotate-180' : ''"></i>
                <?php endif; ?>
              </a>

              <?php if (!empty($topItem['children'])): ?>
                <!-- Upper Dropdown Box -->
                <div x-show="t === <?= $idx ?>" x-cloak x-transition:enter="transition ease-out duration-100"
                  x-transition:enter-start="opacity-0 translate-y-1"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in duration-75"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 translate-y-1"
                  class="absolute top-full <?= $idx >= 1 ? 'right-0' : 'left-0' ?> mt-1 w-[260px] bg-white text-slate-900 border border-slate-200 p-1.5 z-50 space-y-0.5">
                  <?php foreach ($topItem['children'] as $child):
                    $meta = $CHILD_META[$child] ?? ['icon' => 'chevron-right', 'desc' => '', 'href' => '#'];
                    ?>
                    <a href="<?= $meta['href'] ?>"
                      class="group/tc flex items-center gap-2.5 p-2 hover:bg-slate-100 transition-colors">
                      <span class="w-6 h-6 border border-slate-200 text-slate-700 grid place-items-center shrink-0 group-hover/tc:bg-slate-900 group-hover/tc:text-white group-hover/tc:border-slate-900 transition-colors">
                        <i data-lucide="<?= $meta['icon'] ?>" class="w-3 h-3"></i>
                      </span>
                      <div class="min-w-0">
                        <div class="text-[12px] font-semibold text-slate-900">
                          <?= htmlspecialchars($child) ?>
                        </div>
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
    <div class="bg-white border-b border-slate-200">
      <nav class="max-w-[1440px] mx-auto px-4 lg:px-6 h-20 flex items-center justify-between gap-2 xl:gap-4 relative">

        <!-- LEFT: Logo + divider + NABH -->
        <div class="flex items-center gap-3 shrink-0">
          <a href="#top" class="flex items-center" aria-label="<?= htmlspecialchars($HOSPITAL['name']) ?>">
            <img src="assets/images/logo-sukhda.png" alt="<?= htmlspecialchars($HOSPITAL['name']) ?>" width="831"
              height="300" class="h-16 lg:h-16 w-auto select-none">
          </a>
          <span class="hidden sm:block w-px h-10 bg-slate-200"></span>
          <img src="assets/images/nabh.jpg" alt="NABH Accredited" title="NABH Accredited" width="80" height="80"
            class="hidden sm:block h-12 w-auto border border-slate-200 select-none">
        </div>

        <!-- CENTER: Inline dropdown menu -->
        <ul class="hidden lg:flex items-center gap-1 xl:gap-2 text-sm font-semibold text-slate-800 ml-auto">
          <?php foreach ($MAIN_MENU as $i => $item): ?>
            <li class="<?= !empty($item['mega']) ? 'static' : 'relative' ?>" @mouseenter="m=<?= $i ?>"
              @mouseleave="m=null">
              <a href="<?= $item['href'] ?>"
                class="inline-flex items-center gap-1 px-3 py-2 text-slate-800 hover:text-brand-600 hover:bg-slate-100 transition-colors whitespace-nowrap"
                :class="m === <?= $i ?> ? 'text-brand-600 bg-slate-100 font-bold' : ''">
                <?= htmlspecialchars($item['label']) ?>
                <?php if (!empty($item['children']) || !empty($item['mega'])): ?>
                  <i data-lucide="chevron-down" class="w-3.5 h-3.5 opacity-60 transition-transform duration-200 shrink-0"
                    :class="m === <?= $i ?> ? 'rotate-180 text-brand-600' : ''"></i>
                <?php endif; ?>
              </a>

              <?php if (!empty($item['mega'])): ?>
                <!-- Mega menu for specialties (Flat clean 1px border) -->
                <div x-show="m === <?= $i ?>" x-cloak x-transition:enter="transition ease-out duration-150"
                  x-transition:enter-start="opacity-0 translate-y-1"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in duration-100"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 translate-y-1"
                  class="absolute top-full left-4 right-4 lg:left-6 lg:right-6 mt-1 max-w-[1240px] mx-auto bg-white border border-slate-200 p-5 z-50 max-h-[calc(100vh-100px)] overflow-y-auto">

                  <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-3 mb-4 border-b border-slate-200">
                    <div class="flex flex-wrap items-center gap-2">
                      <span class="px-2 py-0.5 bg-slate-100 border border-slate-200 text-slate-900 text-[10px] font-bold uppercase tracking-wider">Treatments, Departments &amp; Specialities</span>
                      <p class="text-xs text-slate-600">Categorized guide across our <?= count($SPECIALTIES) ?> medical centers</p>
                    </div>
                    <a href="#specialties" class="inline-flex items-center gap-1 text-xs text-brand-600 font-bold hover:underline">
                      <span>Explore all departments</span>
                      <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                  </div>

                  <!-- Responsive 3-column grid -->
                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($CATEGORIZED_SPECS as $catName => $catItems):
                      $meta = $CAT_META[$catName] ?? ['icon' => 'stethoscope', 'badge' => 'Specialized Care'];
                      ?>
                      <div class="bg-slate-50 p-3 border border-slate-200 flex flex-col justify-between min-w-0">
                        <div>
                          <div class="flex items-center justify-between gap-1 pb-2 mb-2 border-b border-slate-200">
                            <div class="flex items-center gap-1.5 min-w-0">
                              <span class="w-5 h-5 bg-white border border-slate-300 text-slate-900 grid place-items-center shrink-0">
                                <i data-lucide="<?= $meta['icon'] ?>" class="w-3 h-3"></i>
                              </span>
                              <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider truncate"><?= htmlspecialchars($catName) ?></h4>
                            </div>
                          </div>
                          <div class="space-y-1">
                            <?php foreach ($catItems as $s):
                              $sIcon = $HEADER_ICON_MAP[$s['icon']] ?? 'stethoscope';
                              ?>
                              <a href="#specialties"
                                class="group/s flex items-center gap-2 p-1.5 bg-white hover:bg-slate-900 hover:text-white border border-slate-200 transition-colors min-w-0">
                                <span class="w-5 h-5 bg-slate-100 text-slate-700 group-hover/s:bg-slate-800 group-hover/s:text-white grid place-items-center shrink-0 transition-colors">
                                  <i data-lucide="<?= $sIcon ?>" class="w-3 h-3"></i>
                                </span>
                                <span class="text-xs font-semibold text-slate-800 group-hover/s:text-white truncate flex-1"><?= htmlspecialchars($s['name']) ?></span>
                              </a>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>

                  <!-- Mega menu bottom banner CTA -->
                  <div class="mt-4 pt-3 border-t border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 bg-slate-900 p-3 text-white">
                    <div class="flex items-center gap-3 min-w-0">
                      <div class="w-8 h-8 border border-slate-700 bg-slate-800 grid place-items-center shrink-0">
                        <i data-lucide="shield-plus" class="w-4 h-4 text-brand-400"></i>
                      </div>
                      <div class="min-w-0">
                        <h4 class="text-xs font-bold uppercase tracking-wide truncate">Need help finding the right specialist?</h4>
                        <p class="text-[11px] text-slate-400 truncate">Our clinical coordinators guide your diagnostic or treatment path 24/7.</p>
                      </div>
                    </div>
                    <a href="#search"
                      class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 px-4 py-2 bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider transition-colors shrink-0 whitespace-nowrap">
                      <span>Consult Specialist</span>
                      <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                  </div>
                </div>
              <?php elseif (!empty($item['children'])): ?>
                <!-- Standard dropdown (Flat opaque clean border) -->
                <div x-show="m === <?= $i ?>" x-cloak x-transition:enter="transition ease-out duration-150"
                  x-transition:enter-start="opacity-0 translate-y-1"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in duration-100"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 translate-y-1"
                  class="absolute top-full <?= $i >= 2 ? 'right-0' : 'left-0' ?> mt-1 w-[280px] bg-white border border-slate-200 p-1.5 space-y-1 z-50">
                  <?php foreach ($item['children'] as $c):
                    $meta = $CHILD_META[$c] ?? ['icon' => 'chevron-right', 'desc' => 'Explore hospital details', 'href' => '#'];
                    ?>
                    <a href="<?= $meta['href'] ?>"
                      class="group/c block p-2 hover:bg-slate-100 border border-transparent hover:border-slate-300 transition-colors">
                      <div class="flex items-center gap-2.5">
                        <span class="w-7 h-7 bg-slate-100 border border-slate-200 text-slate-800 grid place-items-center shrink-0 group-hover/c:bg-slate-900 group-hover/c:text-white transition-colors">
                          <i data-lucide="<?= $meta['icon'] ?>" class="w-3.5 h-3.5"></i>
                        </span>
                        <div class="flex-1 min-w-0">
                          <div class="text-xs font-bold text-slate-900 truncate"><?= htmlspecialchars($c) ?></div>
                        </div>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>

        <!-- RIGHT: CTA + mobile -->
        <div class="flex items-center gap-2 shrink-0 ml-auto lg:ml-3">
          <a href="#search"
            class="hidden sm:inline-flex items-center h-10 px-5 bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider transition-colors whitespace-nowrap">
            Book Appointment
          </a>
          <button @click="open=!open"
            class="lg:hidden w-10 h-10 border border-slate-300 text-slate-800 grid place-items-center"
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
                class="pl-2 pr-1 py-1.5 space-y-1 border-l-2 border-slate-300 ml-3 my-1">
                <?php foreach ($item['children'] as $c):
                  $meta = $CHILD_META[$c] ?? ['icon' => 'chevron-right', 'desc' => '', 'href' => '#'];
                  ?>
                  <a href="<?= $meta['href'] ?>" @click="open=false"
                    class="flex items-center gap-3 px-3 py-2 border border-slate-200 hover:bg-slate-100 text-slate-800 transition-colors">
                    <span class="w-6 h-6 border border-slate-200 text-slate-700 grid place-items-center shrink-0">
                      <i data-lucide="<?= $meta['icon'] ?>" class="w-3.5 h-3.5"></i>
                    </span>
                    <div class="min-w-0">
                      <div class="text-xs font-bold truncate"><?= htmlspecialchars($c) ?></div>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            <?php elseif (!empty($item['mega'])): ?>
              <div x-show="mobileSub === <?= $idx ?>" x-transition x-cloak
                class="pl-2 pr-1 py-1.5 space-y-3 border-l-2 border-slate-300 ml-3 my-1 max-h-[360px] overflow-y-auto">
                <?php foreach ($CATEGORIZED_SPECS as $cName => $cList): ?>
                  <div class="space-y-1">
                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-900 px-2 pt-1 border-b border-slate-200 pb-1">
                      <?= htmlspecialchars($cName) ?>
                    </div>
                    <?php foreach ($cList as $s):
                      $sIcon = $HEADER_ICON_MAP[$s['icon']] ?? 'stethoscope';
                      ?>
                      <a href="#specialties" @click="open=false"
                        class="flex items-center gap-2.5 px-2.5 py-1.5 border border-slate-200 hover:bg-slate-100 text-slate-800 transition-colors">
                        <span class="w-5 h-5 border border-slate-200 text-slate-700 grid place-items-center shrink-0">
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
        <div class="pt-2 mt-2 border-t border-slate-200 space-y-1.5">
          <div class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-900">Quick Guide &amp; Services</div>
          <?php foreach ($TOP_MENU as $idx => $tItem): ?>
            <div class="border border-slate-200 transition-colors"
              :class="mobileSub === 'top_<?= $idx ?>' ? 'bg-slate-50 p-1.5' : ''">
              <div class="flex items-center justify-between px-3 py-2 hover:bg-slate-100 text-slate-900 font-medium transition-colors">
                <a href="<?= $tItem['href'] ?>"
                  @click="<?= !empty($tItem['children']) ? "mobileSub = (mobileSub === 'top_$idx' ? null : 'top_$idx'); \$event.preventDefault();" : "open=false" ?>"
                  class="flex-1 font-semibold text-xs uppercase tracking-wider text-slate-900">
                  <?= htmlspecialchars($tItem['label']) ?>
                </a>
                <?php if (!empty($tItem['children'])): ?>
                  <button type="button" @click="mobileSub = (mobileSub === 'top_<?= $idx ?>' ? null : 'top_<?= $idx ?>')"
                    class="p-1 text-slate-600 hover:bg-slate-200 transition-colors">
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200"
                      :class="mobileSub === 'top_<?= $idx ?>' ? 'rotate-180 text-slate-900 font-bold' : ''"></i>
                  </button>
                <?php else: ?>
                  <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
                <?php endif; ?>
              </div>

              <?php if (!empty($tItem['children'])): ?>
                <div x-show="mobileSub === 'top_<?= $idx ?>'" x-transition x-cloak
                  class="pl-2 pr-1 py-1.5 space-y-1 border-l-2 border-slate-300 ml-3 my-1">
                  <?php foreach ($tItem['children'] as $c):
                    $meta = $CHILD_META[$c] ?? ['icon' => 'chevron-right', 'desc' => '', 'href' => '#'];
                    ?>
                    <a href="<?= $meta['href'] ?>" @click="open=false"
                      class="flex items-center gap-3 px-3 py-2 border border-slate-200 hover:bg-slate-100 text-slate-800 transition-colors">
                      <span class="w-6 h-6 border border-slate-200 text-slate-700 grid place-items-center shrink-0">
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

        <div class="pt-4 mt-2 border-t border-slate-200 grid grid-cols-1 sm:grid-cols-2 gap-2">
          <a href="tel:<?= $HOSPITAL['emergency'] ?>"
            class="flex items-center justify-center gap-2 px-4 py-3 bg-slate-900 text-white font-bold text-xs uppercase tracking-wider">
            <i data-lucide="phone-call" class="w-4 h-4"></i> Emergency 24/7
          </a>
          <a href="#search" @click="open=false"
            class="flex items-center justify-center gap-2 px-4 py-3 bg-brand-600 text-white font-bold text-xs uppercase tracking-wider">
            Book Appointment
          </a>
        </div>
      </div>
    </div>
  </header>