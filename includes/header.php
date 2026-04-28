<?php require_once __DIR__ . '/data.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($HOSPITAL['name']) ?> &mdash; <?= htmlspecialchars($HOSPITAL['tagline']) ?></title>
    <meta name="description" content="Sukhda Multispeciality Hospital, Hisar — NABH accredited multispeciality hospital. 22+ specialties, 60+ expert doctors, 24x7 emergency.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&display=swap" rel="stylesheet">

    <!-- Tailwind via Play CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
              display: ['"Fraunces"', 'serif'],
            },
            colors: {
              brand: {
                50:  '#EAF2FB',
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
                50:  '#F4F8E1',
                100: '#E5EFC0',
                300: '#C9DD7A',
                500: '#ACCF43',   // brand accent green
                600: '#8FB330',   // darker on hover
                700: '#6F8A23',   // deepest, for text on light bg
              },
              sand:  '#FBF6EE',
              ink:   '#0B1424',
              mist:  '#F3F7FC',
            },
            boxShadow: {
              'soft': '0 6px 24px -8px rgba(15, 79, 148, 0.20)',
              'glow': '0 20px 50px -20px rgba(15, 79, 148, 0.50)',
            },
            keyframes: {
              fadeUp:  { '0%': { opacity:0, transform:'translateY(18px)' }, '100%': { opacity:1, transform:'translateY(0)' } },
              float:   { '0%,100%': { transform:'translateY(0)' }, '50%': { transform:'translateY(-8px)' } },
              shimmer: { '0%': { backgroundPosition:'-200% 0' }, '100%': { backgroundPosition:'200% 0' } },
            },
            animation: {
              'fade-up':   'fadeUp .8s ease-out both',
              'float':     'float 6s ease-in-out infinite',
              'shimmer':   'shimmer 3s linear infinite',
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
      html { scroll-behavior: smooth; }
      body { font-feature-settings: "ss01","ss02","cv11"; -webkit-font-smoothing: antialiased; }
      .text-balance { text-wrap: balance; }
      .grain {
        background-image: radial-gradient(rgba(15,110,120,.06) 1px, transparent 1px);
        background-size: 22px 22px;
      }
      .specialty-card:hover .specialty-icon {
        transform: rotate(-6deg) scale(1.08);
      }
      .marquee-track { animation: marquee 28s linear infinite; }
      @keyframes marquee { from { transform: translateX(0) } to { transform: translateX(-50%) } }
      .scrollbar-hide::-webkit-scrollbar { display: none }
      .scrollbar-hide { scrollbar-width: none }
    </style>
</head>
<body class="font-sans bg-white text-ink antialiased">

<?php
// Primary main-bar menu (matches Max-style with dropdowns)
$MAIN_MENU = [
  ['label' => 'Hospital',       'href' => '#about',        'children' => ['About Us', 'Mission & Vision', 'NABH', 'Why Sukhda']],
  ['label' => 'Specialities',   'href' => '#specialties',  'mega'     => true],
  ['label' => 'Treatments',     'href' => '#',             'children' => ['Cardiac Procedures', 'Joint Replacement', 'Laparoscopy', 'Cancer Care', 'Maternity']],
  ['label' => 'Our Doctors',    'href' => '#doctors'],
  ['label' => 'Quick Enquiry',  'href' => '#search',       'children' => ['Book Appointment', 'Find a Doctor', 'OPD Schedule', 'Patient Reports']],
];
?>

<header x-data="{ open:false, m:null }" class="sticky top-0 z-50 shadow-soft">

  <!-- ===== TIER 1: Banner-shaped teal utility bar ===== -->
  <div class="hidden lg:block relative bg-white">
    <!-- The teal banner — angled left tail -->
    <div class="absolute inset-y-0 right-0 left-[28%] bg-brand-500"
         style="clip-path: polygon(56px 0, 100% 0, 100% 100%, 56px 100%, 0 50%);"></div>

    <div class="relative max-w-[1400px] mx-auto px-6 h-11 flex items-center justify-end gap-5 text-[12.5px] text-white">
      <a href="#search"  class="hover:text-coral-200 transition">Find a Doctor</a>
      <a href="#blogs"   class="hover:text-coral-200 transition">Blogs</a>
      <a href="#"        class="hover:text-coral-200 transition">My Reports</a>
      <a href="#"        class="hover:text-coral-200 transition">Investors</a>
      <a href="#"        class="hover:text-coral-200 transition">Research</a>
      <a href="#"        class="hover:text-coral-200 transition">CSR</a>
      <a href="#contact" class="hover:text-coral-200 transition">Contact Us</a>

      <span class="w-px h-4 bg-white/25 mx-1"></span>

      <a href="https://wa.me/919996544005" class="inline-flex items-center gap-2 hover:text-coral-200 transition">
        <span class="w-5 h-5 rounded-full bg-[#25D366] grid place-items-center">
          <i data-lucide="phone" class="w-3 h-3 text-white"></i>
        </span>
        WhatsApp Us <span class="opacity-80">(24/7)</span>
      </a>
      <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="inline-flex items-center gap-1.5 font-semibold hover:text-coral-200 transition">
        <i data-lucide="phone-call" class="w-3.5 h-3.5"></i>
        <?= htmlspecialchars($HOSPITAL['emergency']) ?> <span class="opacity-80 font-normal">(24/7)</span>
      </a>
    </div>
  </div>

  <!-- ===== TIER 2: Main white bar — logo + dropdown menu + actions ===== -->
  <div class="bg-white border-b border-brand-100/60">
    <nav class="max-w-[1400px] mx-auto px-5 lg:px-8 h-[84px] flex items-center justify-between gap-4">

      <!-- LEFT: Logo + divider + NABH -->
      <div class="flex items-center gap-3 lg:gap-4 shrink-0">
        <a href="#" class="flex items-center" aria-label="<?= htmlspecialchars($HOSPITAL['name']) ?>">
          <img src="assets/images/logo-removebg-preview.png"
               alt="<?= htmlspecialchars($HOSPITAL['name']) ?>"
               width="294" height="80"
               class="h-11 lg:h-[52px] w-auto select-none">
        </a>
        <span class="hidden sm:block w-px h-10 bg-brand-100"></span>
        <img src="assets/images/nabh.jpg"
             alt="NABH Accredited"
             title="NABH Accredited"
             width="80" height="80"
             class="hidden sm:block h-10 lg:h-11 w-auto rounded select-none">
      </div>

      <!-- CENTER: Inline dropdown menu -->
      <ul class="hidden lg:flex items-center gap-1 text-[14px] font-medium text-ink/80 ml-auto">
        <?php foreach ($MAIN_MENU as $i => $item): ?>
          <li class="relative" @mouseenter="m=<?= $i ?>" @mouseleave="m=null">
            <a href="<?= $item['href'] ?>"
               class="inline-flex items-center gap-1 px-3 xl:px-4 py-2 rounded hover:text-brand-700 transition"
               :class="m === <?= $i ?> ? 'text-brand-700' : ''">
              <?= htmlspecialchars($item['label']) ?>
              <?php if (!empty($item['children']) || !empty($item['mega'])): ?>
                <i data-lucide="chevron-down" class="w-3.5 h-3.5 opacity-70"></i>
              <?php endif; ?>
            </a>

            <?php if (!empty($item['mega'])): ?>
              <!-- Mega menu for specialties -->
              <div x-show="m === <?= $i ?>" x-cloak x-transition.opacity.duration.150ms
                   class="absolute top-full right-0 mt-2 w-[720px] bg-white rounded-2xl shadow-glow ring-1 ring-brand-100 p-5">
                <div class="flex items-center justify-between mb-3">
                  <p class="text-[10px] uppercase tracking-widest text-brand-500 font-bold"><?= count($SPECIALTIES) ?> Departments</p>
                  <a href="#specialties" class="text-[12px] text-brand-600 hover:text-coral-500 font-semibold">View all →</a>
                </div>
                <div class="grid grid-cols-3 gap-1.5">
                  <?php foreach (array_slice($SPECIALTIES, 0, 12) as $s): ?>
                    <a href="#" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg hover:bg-mist transition group/m">
                      <span class="w-7 h-7 rounded-md bg-brand-50 grid place-items-center text-brand-600 group-hover/m:bg-brand-600 group-hover/m:text-white transition">
                        <i data-lucide="stethoscope" class="w-3.5 h-3.5"></i>
                      </span>
                      <span class="text-[13px] font-medium text-ink/80 group-hover/m:text-brand-700"><?= htmlspecialchars($s['name']) ?></span>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php elseif (!empty($item['children'])): ?>
              <!-- Standard dropdown -->
              <div x-show="m === <?= $i ?>" x-cloak x-transition.opacity.duration.150ms
                   class="absolute top-full left-0 mt-2 w-60 bg-white rounded-xl shadow-glow ring-1 ring-brand-100 py-2">
                <?php foreach ($item['children'] as $c): ?>
                  <a href="#" class="block px-4 py-2 text-[13px] text-ink/80 hover:bg-mist hover:text-brand-700 transition"><?= htmlspecialchars($c) ?></a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- RIGHT: search + CTA + mobile -->
      <div class="flex items-center gap-2 lg:gap-3 shrink-0 ml-auto lg:ml-3">
        <button type="button" aria-label="Search"
                class="hidden sm:grid w-10 h-10 place-items-center rounded-full text-brand-700 hover:bg-brand-50 transition">
          <i data-lucide="search" class="w-5 h-5"></i>
        </button>
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
  <div x-show="open" x-cloak x-transition class="lg:hidden border-t border-brand-100 bg-white max-h-[80vh] overflow-y-auto">
    <div class="px-5 py-4 space-y-1">
      <?php foreach ($MAIN_MENU as $item): ?>
        <a href="<?= $item['href'] ?>" @click="open=false"
           class="flex items-center justify-between px-4 py-3 rounded-xl hover:bg-mist text-ink font-medium">
          <?= htmlspecialchars($item['label']) ?>
          <i data-lucide="chevron-right" class="w-4 h-4 text-brand-400"></i>
        </a>
      <?php endforeach; ?>
      <a href="#blogs" @click="open=false" class="flex items-center justify-between px-4 py-3 rounded-xl hover:bg-mist text-ink font-medium">Blogs <i data-lucide="chevron-right" class="w-4 h-4 text-brand-400"></i></a>
      <a href="#contact" @click="open=false" class="flex items-center justify-between px-4 py-3 rounded-xl hover:bg-mist text-ink font-medium">Contact Us <i data-lucide="chevron-right" class="w-4 h-4 text-brand-400"></i></a>

      <div class="pt-4 mt-2 border-t border-brand-100 grid grid-cols-1 sm:grid-cols-2 gap-2">
        <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="flex items-center justify-center gap-2 px-4 py-3.5 rounded-xl bg-coral-500 text-white font-semibold">
          <i data-lucide="phone-call" class="w-4 h-4"></i> Emergency · 24/7
        </a>
        <a href="#search" @click="open=false" class="flex items-center justify-center gap-2 px-4 py-3.5 rounded-xl bg-brand-600 text-white font-semibold">
          Book Appointment
        </a>
      </div>
    </div>
  </div>
</header>
