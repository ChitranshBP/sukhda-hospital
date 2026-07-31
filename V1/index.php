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
<section class="relative w-full max-w-full overflow-hidden bg-[#0C2B09]" x-data="{
    active: 0,
    total: <?= count($BANNERS) ?>,
    timer: null,
    start() { this.timer = setInterval(() => this.next(), 5500) },
    stop()  { clearInterval(this.timer) },
    next()  { this.active = (this.active + 1) % this.total },
    prev()  { this.active = (this.active - 1 + this.total) % this.total },
  }" x-init="start()" @mouseenter="stop()" @mouseleave="start()">
  <!-- Sizer: first slide sets the natural aspect ratio of the banner -->
  <img src="<?= htmlspecialchars($BANNERS[0]) ?>" alt="" aria-hidden="true"
    class="block w-full h-auto invisible select-none pointer-events-none">

  <!-- Slides stacked over the sizer -->
  <?php foreach ($BANNERS as $i => $img): ?>
    <div x-show="active === <?= $i ?>" x-transition:enter="transition ease-out duration-700"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0" class="absolute inset-0">
      <img src="<?= htmlspecialchars($img) ?>" alt="Sukhda Hospital banner <?= $i + 1 ?>"
        class="absolute inset-0 w-full h-full object-cover" <?= $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"' ?>>
    </div>
  <?php endforeach; ?>

  <!-- Slider arrows (Sharp geometry) -->
  <button @click="prev()" aria-label="Previous slide"
    class="hidden md:grid place-items-center absolute left-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-[#0C2B09]/90 border border-[#184614] text-white hover:bg-[#56B929] transition-colors">
    <i data-lucide="arrow-left" class="w-5 h-5"></i>
  </button>
  <button @click="next()" aria-label="Next slide"
    class="hidden md:grid place-items-center absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-[#0C2B09]/90 border border-[#184614] text-white hover:bg-[#56B929] transition-colors">
    <i data-lucide="arrow-right" class="w-5 h-5"></i>
  </button>

  <!-- Slide indicators (Sharp line geometry) -->
  <div class="absolute bottom-5 left-0 right-0 z-10 flex justify-center">
    <div class="flex items-center gap-2 px-3 py-2 bg-[#0C2B09]/90 border border-[#184614]">
      <?php for ($i = 0; $i < count($BANNERS); $i++): ?>
        <button @click="active=<?= $i ?>"
          :class="active===<?= $i ?> ? 'w-8 bg-[#56B929]' : 'w-3 bg-white/40 hover:bg-white/80'"
          class="h-1.5 transition-all" aria-label="Go to slide <?= $i + 1 ?>"></button>
      <?php endfor; ?>
    </div>
  </div>

</section>

<!-- ============================================================
     3. SPECIALITIES & PROCEDURES — Centers of Excellence
============================================================ -->
<?php
$iconMap = [
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

$PROCEDURES = [
  ['name' => 'Coronary Angioplasty & Stenting', 'icon' => 'heart-pulse', 'desc' => 'Digital cath lab intervention with drug-eluting stents for acute cardiac care.', 'spec' => 'Cardiology', 'stay' => 'Same-Day / 24 Hr Stay', 'badge' => '24x7 Emergency Cath Lab'],
  ['name' => 'Total Knee & Hip Replacement', 'icon' => 'bone', 'desc' => 'Minimally invasive joint arthroplasty with fast-track pain-free rehab.', 'spec' => 'Orthopaedics', 'stay' => 'Walk in 48 Hours', 'badge' => 'Fast-Track Rehab'],
  ['name' => 'Micro-Neurosurgical Spine & Brain', 'icon' => 'brain', 'desc' => 'High-definition microscope & navigation-assisted precision tumor removal.', 'spec' => 'Neuro Surgery', 'stay' => 'Specialised ICU Care', 'badge' => 'Precision Navigation'],
  ['name' => 'Advanced Laparoscopic Surgeries', 'icon' => 'scissors', 'desc' => 'Keyhole surgery for gallbladder, hernia, appendicitis & bariatric weight loss.', 'spec' => 'General Surgery', 'stay' => 'Day-Care / 1 Day', 'badge' => 'Minimal Scarring'],
  ['name' => 'Endoscopy, Colonoscopy & ERCP', 'icon' => 'circle', 'desc' => 'High-definition diagnostic & therapeutic GI interventions with sedation.', 'spec' => 'Gastroenterology', 'stay' => 'Day-Care Procedure', 'badge' => 'High-Def GI Suite'],
  ['name' => 'Laser Kidney Stone & Urology Care', 'icon' => 'activity', 'desc' => 'Holmium laser lithotripsy & TURP without external skin incisions.', 'spec' => 'Urology', 'stay' => 'Same-Day Discharge', 'badge' => 'Laser Precision'],
  ['name' => 'High-Risk C-Section & Maternity', 'icon' => 'baby', 'desc' => 'Painless epidural delivery suites with Level-3 NICU round-the-clock backup.', 'spec' => 'Gynaecology', 'stay' => '3 Day Mother-Baby Care', 'badge' => '24x7 Obstetric Backup'],
  ['name' => 'Renal Haemodialysis & HDF Suite', 'icon' => 'flask-conical', 'desc' => 'State-of-the-art 8-station volumetric dialysis under nephrologist care.', 'spec' => 'Nephrology', 'stay' => 'Outpatient Session', 'badge' => 'RO Purified System'],
];

$COE_HIGHLIGHTS = [
  'Medical Oncology' => ['Targeted & Immunotherapy Suite', 'Solid Tumor Chemotherapy', 'Inpatient Oncology Care', 'Precision Genomic Profiling'],
  'Surgical Oncology' => ['Organ-Preserving Resection', 'Micro-Vascular Reconstruction', 'Laparoscopic Onco-Surgery', 'Post-Surgical ICU Protocols'],
  'Interventional Cardiology' => ['24x7 Digital Cath Lab', 'Primary Angioplasty & Pacemakers', 'Non-Invasive Echo & TMT', '4-Bed Dedicated Cardiac ICU'],
  'Spine Surgery' => ['Microscopic Disc Decompression', 'Precision Spinal Fixation', 'Minimally Invasive Spine Suite', 'Dedicated Neuro-Ortho Rehab'],
  'Neurosurgery' => ['Micro-Neurosurgical Suite', 'Neuro-Navigation System', 'Spine & Brain Trauma Care', 'Dedicated Neuro ICU Support'],
  'Orthopedics & Joint Replacement' => ['Total Knee & Hip Arthroplasty', 'Arthroscopic Sports Surgery', 'Complex Fracture Management', 'Dedicated Ortho Rehab'],
  'General & Laparoscopic Surgery' => ['Minimally Invasive Suite', 'Keyhole Abdominal Surgery', 'Quick Recovery Protocols', 'Painless Day-Care Procedures'],
  'Advanced Laparoscopy' => ['Keyhole Abdominal Surgeries', 'Minimal Access Gallbladder/Hernia', 'Reduced Post-Op Pain Protocols', 'Day-Care Surgical Discharge'],
  'Bariatric Surgery' => ['Advanced Weight-Loss Surgery', 'Metabolic Syndrome Care', 'Laparoscopic Gastric Bypass', 'Dedicated Nutrition & Rehab Support'],
  'Anaesthesia & Pain Management' => ['Critical Anaesthesia Care', 'Chronic Pain Management Clinic', 'Epidural & Nerve Block Suite', 'Post-Op Recovery Protocols'],
  'Physiotherapy & Rehabilitation' => ['Post-Op Mobility & Rehab Suite', 'Ergonomic & Spine Therapy', 'Sports Injury Recovery Clinic', 'Electrotherapy & Pain Relief'],

  'Cancer Care Centre' => ['Multi-Disciplinary Tumor Board', 'Daycare Chemotherapy Suite', 'Personalized Radiation Protocols', 'Onco-Counseling & Support'],
  'Internal Medicine' => ['Inpatient & Outpatient Care', 'Lifestyle & Diabetes Clinic', 'Geriatric & Preventive Care', 'Multi-System Diagnostic Protocol'],
  'Emergency & Critical Care' => ['24x7 Emergency Triage', 'Advanced Level-3 ICU Support', 'Trauma Resuscitation Bay', 'Multi-Para Vital Monitoring'],
  'Trauma Centre' => ['24x7 Polytrauma Triage Bay', 'Emergency Surgical Response Team', 'Multi-System Resuscitation Unit', 'Continuous Vital Monitoring'],
  'Gynaecology & Women\'s Health' => ['Painless Delivery Suites', 'High-Risk Pregnancy Care', 'IVF & Fertility Counseling', 'Advanced Laparoscopic Gynae'],
  'Paediatrics & Neonatology' => ['Level-3 Dedicated NICU', 'Paediatric Emergency Support', 'Vaccination & Wellness Clinic', 'Newborn Screening & Care'],
  'Diagnostic Services & Imaging' => ['32-Slice CT Scanner Wing', 'Color Doppler & Ultrasonography', 'Digital X-Ray & Imaging', 'Emergency Scan Protocols'],
  'Lab: Pathology & Microbiology' => ['NABL Accredited Lab Suite', 'Automated Biochemistry & Immunology', 'Microbiology & Culture Unit', '24x7 Sample Collection Desk'],
  'Dentistry & Maxillofacial' => ['Dental Implants & Crown Unit', 'Maxillofacial Trauma Surgery', 'Painless Root Canal Suite', 'Orthodontic & Aesthetic Care'],

  'Cardiac Sciences' => ['Non-Invasive Cardiac Diagnostics', '3D Echocardiography Suite', 'Preventive Heart Screening', 'Holter & TMT Monitoring'],
  'Nephrology & Kidney Care' => ['8-Station Dialysis Wing', 'Kidney Transplant Workup', 'Renal Biopsy Suite', 'Volumetric HDF System'],
  'Gastroenterology & ERCP' => ['High-Def Video Endoscopy', 'Therapeutic ERCP & Liver Unit', 'GI Bleed Emergency Response', 'IBS & Dysmotility Clinic'],
  'Urology & Laparoscopy' => ['Holmium Laser Lithotripsy', 'Mini-PCNL & RIRS Stone Care', 'Prostate Laser Surgery (TURP)', 'Keyhole Surgical Suite'],
  'Dermatology & Cosmetology' => ['Medical Dermatology Clinic', 'Laser Skin & Hair Treatments', 'Aesthetic & Anti-Aging Procedures', 'Allergy Testing Suite'],
  'Psychiatry & Mental Health' => ['Stress & Anxiety Management', 'Child & Adolescent Counseling', 'De-addiction Therapy Wing', 'Confidential Consultation Suite'],
  'ENT (Ear, Nose & Throat)' => ['Micro-Ear & Sinus Surgery', 'Hearing & Audiometry Testing', 'Endoscopic Nasal Evaluation', 'Voice & Throat Care'],
];
?>

<section id="specialties" class="relative py-14 lg:py-20 bg-slate-50 border-b border-slate-200" x-data="{
           tab: 'Treatments',
           searchQuery: '',
           selectedItem: null,
           openDetailModal(item, type) {
             this.selectedItem = {
               name: item.name,
               desc: item.desc,
               icon: item.icon || 'stethoscope',
               type: type || 'Speciality Department',
               spec: item.spec || item.name,
               highlights: <?= htmlspecialchars(json_encode($COE_HIGHLIGHTS), ENT_QUOTES) ?>[item.name] || ['24x7 Emergency Support', 'Senior Consultant Care', 'NABH Accredited Standards', 'Modern Diagnostic Wing']
             };
           },
           closeDetailModal() {
             this.selectedItem = null;
           },
           get filteredSpecialties() {
             if (!this.searchQuery.trim()) return <?= htmlspecialchars(json_encode($SPECIALTIES), ENT_QUOTES) ?>;
             const q = this.searchQuery.toLowerCase();
             return <?= htmlspecialchars(json_encode($SPECIALTIES), ENT_QUOTES) ?>.filter(s => 
               s.name.toLowerCase().includes(q) || s.desc.toLowerCase().includes(q)
             );
           }
         }">

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section Header Block -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-8 border-b border-slate-200">
      <div class="max-w-2xl">
        <span class="inline-block px-2.5 py-1 bg-brand-50 border border-brand-200 text-brand-700 text-[10px] font-bold uppercase tracking-wider mb-3">
          Our Services — Treatments, Departments &amp; Specialities
        </span>
        <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-[#051B3B] tracking-tight">
          Comprehensive medical care across <?= count($SPECIALTIES) ?> specialized wings.
        </h2>
      </div>

      <!-- Live Search Input Block -->
      <div class="w-full lg:w-96 shrink-0" id="search">
        <div class="relative flex items-center">
          <i data-lucide="search" class="absolute left-3.5 w-4 h-4 text-slate-400 pointer-events-none"></i>
          <input type="text" x-model="searchQuery" @input="if(searchQuery.trim() !== '') { tab = 'all' }"
            placeholder="Search department or procedure..."
            class="w-full h-11 pl-10 pr-9 border border-slate-300 bg-white text-slate-900 text-xs font-medium placeholder:text-slate-400 focus:border-brand-600 focus:ring-0 outline-none">
          <button type="button" x-show="searchQuery !== ''" @click="searchQuery = ''; tab = 'Treatments'" x-cloak
            class="absolute right-3 p-1 text-slate-400 hover:text-slate-900" title="Clear search">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Tab Selection Bar -->
    <div class="mt-8 flex flex-wrap items-center justify-between gap-4">
      <div class="flex flex-wrap items-center gap-1 bg-white p-1 border border-slate-200">
        
        <button type="button" @click="tab = 'Treatments'; searchQuery = ''"
          :class="tab === 'Treatments' && !searchQuery ? 'bg-brand-600 text-white font-bold' : 'text-slate-700 hover:bg-brand-50 font-medium'"
          class="inline-flex items-center gap-2 px-3.5 py-2 text-xs transition-colors">
          <i data-lucide="shield-plus" class="w-3.5 h-3.5"></i>
          <span>Treatments</span>
          <span :class="tab === 'Treatments' && !searchQuery ? 'bg-brand-700 text-white' : 'bg-slate-100 text-slate-700'"
            class="px-1.5 py-0.5 text-[10px] font-bold"><?= count($CATEGORIZED_SPECS['Treatments'] ?? []) ?></span>
        </button>

        <button type="button" @click="tab = 'Departments'; searchQuery = ''"
          :class="tab === 'Departments' && !searchQuery ? 'bg-brand-600 text-white font-bold' : 'text-slate-700 hover:bg-brand-50 font-medium'"
          class="inline-flex items-center gap-2 px-3.5 py-2 text-xs transition-colors">
          <i data-lucide="building-2" class="w-3.5 h-3.5"></i>
          <span>Departments</span>
          <span :class="tab === 'Departments' && !searchQuery ? 'bg-brand-700 text-white' : 'bg-slate-100 text-slate-700'"
            class="px-1.5 py-0.5 text-[10px] font-bold"><?= count($CATEGORIZED_SPECS['Departments'] ?? []) ?></span>
        </button>

        <button type="button" @click="tab = 'Specialities'; searchQuery = ''"
          :class="tab === 'Specialities' && !searchQuery ? 'bg-brand-600 text-white font-bold' : 'text-slate-700 hover:bg-brand-50 font-medium'"
          class="inline-flex items-center gap-2 px-3.5 py-2 text-xs transition-colors">
          <i data-lucide="heart-pulse" class="w-3.5 h-3.5"></i>
          <span>Specialities</span>
          <span :class="tab === 'Specialities' && !searchQuery ? 'bg-brand-700 text-white' : 'bg-slate-100 text-slate-700'"
            class="px-1.5 py-0.5 text-[10px] font-bold"><?= count($CATEGORIZED_SPECS['Specialities'] ?? []) ?></span>
        </button>

        <button type="button" @click="tab = 'procedures'; searchQuery = ''"
          :class="tab === 'procedures' && !searchQuery ? 'bg-brand-600 text-white font-bold' : 'text-slate-700 hover:bg-brand-50 font-medium'"
          class="inline-flex items-center gap-2 px-3.5 py-2 text-xs transition-colors">
          <i data-lucide="activity" class="w-3.5 h-3.5"></i>
          <span>Surgical Procedures</span>
          <span :class="tab === 'procedures' && !searchQuery ? 'bg-brand-700 text-white' : 'bg-slate-100 text-slate-700'"
            class="px-1.5 py-0.5 text-[10px] font-bold"><?= count($PROCEDURES) ?></span>
        </button>

        <button type="button" @click="tab = 'all'; searchQuery = ''"
          :class="(tab === 'all' || searchQuery) ? 'bg-brand-600 text-white font-bold' : 'text-slate-700 hover:bg-brand-50 font-medium'"
          class="inline-flex items-center gap-2 px-3.5 py-2 text-xs transition-colors">
          <i data-lucide="layout-grid" class="w-3.5 h-3.5"></i>
          <span>Complete Directory</span>
          <span :class="(tab === 'all' || searchQuery) ? 'bg-brand-700 text-white' : 'bg-slate-100 text-slate-700'"
            class="px-1.5 py-0.5 text-[10px] font-bold"><?= count($SPECIALTIES) ?></span>
        </button>
      </div>

      <div class="hidden sm:flex items-center gap-2 text-xs font-semibold text-accent-700">
        <span class="w-2.5 h-2.5 bg-[#56B929]"></span>
        All departments open 24×7
      </div>
    </div>

    <!-- TABS CONTENT: Center of Excellence Cards -->
    <?php foreach (['Treatments', 'Departments', 'Specialities'] as $catName):
      $catSpecs = $CATEGORIZED_SPECS[$catName] ?? [];
      $catBadge = $catName === 'Treatments' ? 'Medical & Surgical Treatment' : ($catName === 'Departments' ? 'Clinical Department' : 'Super-Speciality Wing');
      ?>
      <div x-show="tab === '<?= $catName ?>' && !searchQuery" x-cloak class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($catSpecs as $s):
          $icon = $iconMap[$s['icon']] ?? 'stethoscope';
          $highlights = $COE_HIGHLIGHTS[$s['name']] ?? ['24x7 Emergency Care', 'Advanced ICU Support', 'Senior Consultants', 'NABH Quality Protocol'];
          ?>
          <article class="group bg-white border border-slate-200 p-6 hover:border-brand-600 transition-colors flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between gap-4 mb-4">
                <span class="w-12 h-12 bg-brand-50 border border-brand-200 text-brand-700 grid place-items-center group-hover:bg-[#051B3B] group-hover:text-white transition-colors">
                  <i data-lucide="<?= $icon ?>" class="w-5 h-5"></i>
                </span>
                <span class="px-2 py-0.5 bg-accent-50 border border-accent-200 text-accent-700 text-[10px] font-bold uppercase tracking-wider">
                  <?= $catBadge ?>
                </span>
              </div>

              <h3 class="font-display text-xl font-bold text-slate-900 group-hover:text-brand-600 transition-colors">
                <?= htmlspecialchars($s['name']) ?>
              </h3>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                <?= htmlspecialchars($s['desc']) ?>
              </p>

              <ul class="mt-5 pt-4 border-t border-slate-200 grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-700">
                <?php foreach ($highlights as $hl): ?>
                  <li class="flex items-center gap-1.5 truncate">
                    <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-accent-600 shrink-0"></i>
                    <span class="truncate"><?= htmlspecialchars($hl) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between">
              <span class="text-[11px] font-semibold text-slate-500">Senior Consultants Available</span>
              <button type="button"
                @click="openDetailModal(<?= htmlspecialchars(json_encode($s), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($catBadge), ENT_QUOTES) ?>)"
                class="inline-flex items-center gap-1 text-xs font-bold uppercase tracking-wider text-brand-600 hover:text-slate-900 transition-colors">
                Explore Wing <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
              </button>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>

    <!-- TAB: SURGICAL PROCEDURES -->
    <div x-show="tab === 'procedures' && !searchQuery" x-cloak class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php foreach ($PROCEDURES as $p): ?>
        <article class="group bg-white border border-slate-200 p-5 hover:border-brand-600 transition-colors flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between gap-2 mb-3">
              <span class="px-2 py-0.5 bg-slate-100 border border-slate-200 text-slate-800 text-[10px] font-bold uppercase tracking-wider">
                <?= htmlspecialchars($p['spec']) ?>
              </span>
              <span class="w-8 h-8 bg-slate-100 text-slate-700 grid place-items-center group-hover:bg-slate-900 group-hover:text-white transition-colors">
                <i data-lucide="<?= htmlspecialchars($p['icon']) ?>" class="w-4 h-4"></i>
              </span>
            </div>

            <h4 class="font-display text-base font-bold text-slate-900 group-hover:text-brand-600 transition-colors">
              <?= htmlspecialchars($p['name']) ?>
            </h4>
            <p class="mt-2 text-xs text-slate-600 leading-relaxed line-clamp-3">
              <?= htmlspecialchars($p['desc']) ?>
            </p>
          </div>

          <div class="mt-5 pt-3 border-t border-slate-200 flex items-center justify-between">
            <span class="text-[11px] font-bold text-slate-700 bg-slate-100 border border-slate-200 px-2 py-0.5">
              <?= htmlspecialchars($p['stay']) ?>
            </span>
            <button type="button"
              @click="openDetailModal(<?= htmlspecialchars(json_encode(['name' => $p['name'], 'desc' => $p['desc'], 'icon' => $p['icon'], 'spec' => $p['spec']]), ENT_QUOTES) ?>, 'Clinical Procedure')"
              class="w-7 h-7 bg-slate-100 hover:bg-slate-900 hover:text-white text-slate-800 grid place-items-center transition-colors">
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- TAB & SEARCH: COMPLETE DIRECTORY -->
    <div x-show="tab === 'all' || searchQuery" x-cloak class="mt-8">
      <div x-show="searchQuery !== ''" class="mb-4 flex items-center justify-between bg-white p-3 border border-slate-200 text-xs">
        <p class="text-slate-700">
          Showing matching items for <strong class="text-slate-900" x-text="`'${searchQuery}'`"></strong>
        </p>
        <span class="px-2 py-0.5 bg-slate-100 text-slate-900 font-bold" x-text="`${filteredSpecialties.length} Found`"></span>
      </div>

      <div x-show="filteredSpecialties.length === 0" class="p-10 bg-white border border-slate-200 text-center max-w-xl mx-auto my-6">
        <h4 class="font-display text-xl font-bold text-slate-900">No matching specialty found</h4>
        <p class="mt-2 text-xs text-slate-600">Speak directly to our 24×7 Triage coordinator to find your specialist.</p>
        <div class="mt-4 flex items-center justify-center gap-3">
          <a href="tel:<?= $HOSPITAL['emergency'] ?>" class="px-4 py-2 bg-brand-600 text-white text-xs font-bold uppercase tracking-wider">
            Call <?= $HOSPITAL['emergency'] ?>
          </a>
          <button type="button" @click="searchQuery = ''; tab = 'Treatments'" class="px-4 py-2 border border-slate-300 text-slate-800 text-xs font-bold uppercase tracking-wider">
            Reset Search
          </button>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <template x-for="(spec, index) in filteredSpecialties" :key="index">
          <div @click="openDetailModal(spec, 'Clinical Department')"
            class="group p-4 bg-white border border-slate-200 hover:border-brand-600 transition-colors cursor-pointer flex items-start gap-3">
            <span class="w-8 h-8 bg-slate-100 text-slate-800 grid place-items-center shrink-0 group-hover:bg-slate-900 group-hover:text-white transition-colors">
              <i data-lucide="stethoscope" class="w-4 h-4"></i>
            </span>
            <div class="min-w-0 flex-1">
              <h4 class="font-bold text-xs text-slate-900 group-hover:text-brand-600 transition-colors truncate" x-text="spec.name"></h4>
              <p class="mt-1 text-[11px] text-slate-500 line-clamp-2" x-text="spec.desc"></p>
            </div>
          </div>
        </template>
      </div>
    </div>

    <!-- DETAIL MODAL -->
    <div x-show="selectedItem !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/75">
      <div x-show="selectedItem !== null" @click.away="closeDetailModal()"
        class="relative w-full max-w-2xl bg-white p-6 sm:p-8 border border-slate-300 overflow-hidden">
        
        <button type="button" @click="closeDetailModal()" class="absolute top-4 right-4 p-2 text-slate-500 hover:text-slate-900">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <div class="flex items-start gap-4">
          <div class="w-12 h-12 bg-slate-900 text-white grid place-items-center shrink-0">
            <i data-lucide="shield-check" class="w-6 h-6"></i>
          </div>
          <div>
            <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-1" x-text="selectedItem?.type"></span>
            <h3 class="font-display text-xl font-bold text-slate-900" x-text="selectedItem?.name"></h3>
          </div>
        </div>

        <p class="mt-4 text-xs text-slate-700 leading-relaxed bg-slate-50 p-4 border border-slate-200" x-text="selectedItem?.desc"></p>

        <div class="mt-5">
          <h5 class="text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-2">Clinical Standards</h5>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
            <template x-for="(hl, idx) in (selectedItem?.highlights || ['24x7 Emergency Triage', 'Experienced Specialists', 'NABH Accredited Care', 'Insurance Cashless Desk'])" :key="idx">
              <div class="flex items-center gap-2 p-2.5 bg-white border border-slate-200 text-xs font-semibold text-slate-800">
                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-slate-500 shrink-0"></i>
                <span x-text="hl"></span>
              </div>
            </template>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
          <div class="text-xs text-slate-600">
            <span class="font-bold text-slate-900">OPD Schedule: Mon – Sat (09 AM – 05 PM)</span>
          </div>

          <div class="flex items-center gap-2 w-full sm:w-auto">
            <a :href="`https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20want%20to%20enquire%20about%20${encodeURIComponent(selectedItem?.name || 'Consultation')}`"
              target="_blank" class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-1.5 px-4 py-2.5 bg-[#25D366] text-white text-xs font-bold uppercase tracking-wider">
              WhatsApp Desk
            </a>
            <a href="#search" @click="closeDetailModal()" class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-1.5 px-4 py-2.5 bg-brand-600 text-white text-xs font-bold uppercase tracking-wider">
              Book Appointment
            </a>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     ABOUT US — Minimal Heritage & Milestones
============================================================ -->
<section id="about" class="relative py-16 lg:py-20 bg-white border-b border-slate-200" x-data="{
           tab: 'story',
           activeYear: 2002,
           milestones: {
             2002: { title: 'The 20-Bed Genesis', desc: 'Founded by AIIMS-trained Dr. Amit Mehta and Dr. Manisha Mehta as Hisar\'s first ethical surgical clinic.', stats: '20 Beds · 2 Doctors · 1 OT' },
             2011: { title: 'Multispeciality Wing', desc: 'Expanded into an 80-bed facility introducing laminar-flow OTs and 12-bed adult ICU.', stats: '80 Beds · 12 Specialists · 24x7 ICU' },
             2018: { title: 'Super-Specialities & NABH', desc: 'Launched Interventional Cardiology with Digital Cath Lab and achieved NABH accreditation.', stats: '120 Beds · Cath Lab · NABH Safety' },
             2026: { title: 'Premier Health Ecosystem', desc: 'Today operating 150+ beds, 22 clinical departments, AI-powered diagnostics, and 8-station HDF kidney care center.', stats: '150+ Beds · <?= count($SPECIALTIES) ?> Wings · <?= $HOSPITAL['doctors'] ?> Doctors' }
           }
         }">

  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section Header Block -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-8 border-b border-slate-200">
      <div class="max-w-3xl">
        <span class="inline-block px-2.5 py-1 bg-slate-100 border border-slate-200 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-3">
          Heritage &amp; Leadership
        </span>
        <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 tracking-tight">
          A commitment to healthcare excellence in Hisar since <?= htmlspecialchars($HOSPITAL['founded']) ?>.
        </h2>
      </div>

      <!-- Tab Selection Bar -->
      <div class="flex flex-wrap items-center gap-1 bg-white p-1 border border-slate-200 shrink-0">
        <button type="button" @click="tab = 'story'"
          :class="tab === 'story' ? 'bg-[#0C2B09] text-white font-bold' : 'text-slate-700 hover:bg-slate-100 font-medium'"
          class="px-3.5 py-2 text-xs transition-colors">Our Story</button>
        <button type="button" @click="tab = 'timeline'"
          :class="tab === 'timeline' ? 'bg-[#0C2B09] text-white font-bold' : 'text-slate-700 hover:bg-slate-100 font-medium'"
          class="px-3.5 py-2 text-xs transition-colors">24-Year Journey</button>
        <button type="button" @click="tab = 'leadership'"
          :class="tab === 'leadership' ? 'bg-[#0C2B09] text-white font-bold' : 'text-slate-700 hover:bg-slate-100 font-medium'"
          class="px-3.5 py-2 text-xs transition-colors">Leadership</button>
        <button type="button" @click="tab = 'values'"
          :class="tab === 'values' ? 'bg-[#0C2B09] text-white font-bold' : 'text-slate-700 hover:bg-slate-100 font-medium'"
          class="px-3.5 py-2 text-xs transition-colors">4 Core Pillars</button>
      </div>
    </div>

    <!-- TAB 1: OUR STORY -->
    <div x-show="tab === 'story'" class="mt-10 grid lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-6 space-y-4">
        <div class="relative aspect-[16/10] border border-slate-200 bg-[#0C2B09] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=1000&auto=format&fit=crop"
            alt="Sukhda Hospital Surgical Suite" class="w-full h-full object-cover">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="bg-slate-50 p-4 border border-slate-200 flex items-center gap-3">
            <div class="w-10 h-10 bg-[#0C2B09] text-white font-bold grid place-items-center shrink-0">24Y</div>
            <div>
              <div class="text-xs font-bold text-slate-900 uppercase">Unbroken Trust</div>
              <p class="text-[11px] text-slate-600 mt-0.5">Serving Haryana since 2002.</p>
            </div>
          </div>

          <div class="bg-[#0C2B09] p-4 border border-[#184614] text-white flex items-center gap-3">
            <div class="w-10 h-10 bg-[#56B929] text-white grid place-items-center shrink-0">
              <i data-lucide="users" class="w-5 h-5"></i>
            </div>
            <div>
              <div class="font-bold text-sm text-white">1.2 Lakh+</div>
              <div class="text-[10px] uppercase tracking-wider text-slate-300">Patients Cared For</div>
            </div>
          </div>
        </div>
      </div>

      <div class="lg:col-span-6 space-y-4 text-xs sm:text-sm text-slate-700 leading-relaxed">
        <p class="font-semibold text-slate-900 text-base">
          What began in 2002 as a 20-bed clinic founded by <strong>Dr. Amit Mehta (MD, AIIMS)</strong> and <strong>Dr. Manisha Mehta (MS, Gynae)</strong> has grown into Hisar's multispeciality medical landmark.
        </p>
        <p>
          Sukhda was founded with a singular commitment: bringing premier healthcare directly to the people of Haryana with total transparency and medical ethics.
        </p>
        <p>
          Today operating across <strong><?= count($SPECIALTIES) ?> specialized departments</strong> with <strong><?= $HOSPITAL['doctors'] ?> consultants</strong> and <strong><?= $HOSPITAL['beds'] ?> beds</strong>, Sukhda pairs modern medical technology with compassionate patient care.
        </p>

        <div class="p-5 bg-slate-50 border border-slate-200">
          <p class="italic text-slate-800 text-xs sm:text-sm">
            &ldquo;We don't just treat illnesses; we treat neighbors, parents, and friends. Every surgical suite and ICU protocol at Sukhda is built to meet the exact standards we would demand for our own families.&rdquo;
          </p>
          <div class="mt-3 pt-2 border-t border-slate-200 flex items-center justify-between text-xs">
            <span class="font-bold text-slate-900">Dr. Amit Mehta — Founder &amp; MD</span>
            <button type="button" @click="tab = 'leadership'" class="font-bold text-brand-600 hover:underline">Meet Leadership →</button>
          </div>
        </div>
      </div>
    </div>

    <!-- TAB 2: TIMELINE -->
    <div x-show="tab === 'timeline'" x-cloak class="mt-10">
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-6">
        <template x-for="(data, year) in milestones" :key="year">
          <button type="button" @click="activeYear = year"
            :class="activeYear == year ? 'bg-slate-900 text-white font-bold' : 'bg-white text-slate-900 border border-slate-200 hover:bg-slate-50'"
            class="p-4 text-left transition-colors">
            <span class="font-display text-xl font-bold" x-text="year"></span>
            <span class="block text-xs font-semibold mt-1 truncate" x-text="data.title"></span>
          </button>
        </template>
      </div>

      <div class="p-8 bg-white border border-slate-200 grid lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-3">
          <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-900 text-[10px] font-bold uppercase tracking-wider" x-text="`Milestone: ${activeYear}`"></span>
          <h3 class="font-display text-xl font-bold text-slate-900" x-text="milestones[activeYear]?.title"></h3>
          <p class="text-xs text-slate-700 leading-relaxed" x-text="milestones[activeYear]?.desc"></p>
          <div class="pt-2">
            <span class="inline-block px-3 py-1 bg-slate-100 border border-slate-200 text-slate-800 text-xs font-bold" x-text="`Stats: ${milestones[activeYear]?.stats}`"></span>
          </div>
        </div>
        <div class="lg:col-span-5 aspect-[16/10] bg-slate-900 border border-slate-200">
          <img :src="activeYear == 2002 ? 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&auto=format&fit=crop' :
                     activeYear == 2011 ? 'https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?w=800&auto=format&fit=crop' :
                     activeYear == 2018 ? 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&auto=format&fit=crop' :
                     'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=800&auto=format&fit=crop'"
            alt="Milestone" class="w-full h-full object-cover">
        </div>
      </div>
    </div>

    <!-- TAB 3: LEADERSHIP -->
    <div x-show="tab === 'leadership'" x-cloak class="mt-10 grid md:grid-cols-2 gap-6">
      <article class="bg-white border border-slate-200 p-6 flex flex-col justify-between">
        <div>
          <div class="flex items-center gap-4 mb-4">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&auto=format&fit=crop"
              alt="Dr. Amit Mehta" class="w-16 h-16 object-cover border border-slate-200 shrink-0">
            <div>
              <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-1">Managing Director</span>
              <h3 class="font-display text-xl font-bold text-slate-900">Dr. Amit Mehta</h3>
              <p class="text-xs text-slate-600 font-semibold">MD (Internal Medicine, AIIMS New Delhi)</p>
            </div>
          </div>
          <p class="text-xs text-slate-700 leading-relaxed">
            An alumnus of AIIMS New Delhi, Dr. Amit Mehta spearheaded Hisar's transition to evidence-based critical care medicine.
          </p>
        </div>
        <div class="mt-5 pt-3 border-t border-slate-200 flex items-center justify-between text-xs">
          <span class="font-semibold text-slate-800">OPD &amp; ICU Rounds</span>
          <a href="#search" class="font-bold text-brand-600 uppercase tracking-wider">Book Consult →</a>
        </div>
      </article>

      <article class="bg-white border border-slate-200 p-6 flex flex-col justify-between">
        <div>
          <div class="flex items-center gap-4 mb-4">
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&auto=format&fit=crop"
              alt="Dr. Manisha Mehta" class="w-16 h-16 object-cover border border-slate-200 shrink-0">
            <div>
              <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-1">Senior Obstetrician</span>
              <h3 class="font-display text-xl font-bold text-slate-900">Dr. Manisha Mehta</h3>
              <p class="text-xs text-slate-600 font-semibold">MS (Obstetrics &amp; Gynaecology)</p>
            </div>
          </div>
          <p class="text-xs text-slate-700 leading-relaxed">
            Dr. Manisha Mehta introduced high-risk pregnancy protocols backed by Level-3 NICU support and painless delivery suites in Hisar.
          </p>
        </div>
        <div class="mt-5 pt-3 border-t border-slate-200 flex items-center justify-between text-xs">
          <span class="font-semibold text-slate-800">Mother &amp; Child Wing</span>
          <a href="#search" class="font-bold text-brand-600 uppercase tracking-wider">Book Consult →</a>
        </div>
      </article>
    </div>

    <!-- TAB 4: VALUES -->
    <div x-show="tab === 'values'" x-cloak class="mt-10">
      <?php
      $values = [
        ['icon' => 'heart-handshake', 'title' => 'Compassion First', 'desc' => 'Patient-centered care from admission to discharge.', 'stat' => '100% Personal Attention'],
        ['icon' => 'sparkles', 'title' => 'Clinical Excellence', 'desc' => 'Evidence-led medicine with strict surgical checklists.', 'stat' => '98.4% Outcome Success'],
        ['icon' => 'badge-indian-rupee', 'title' => 'Transparent Pricing', 'desc' => 'Honest billing estimates upfront without hidden charges.', 'stat' => '0% Hidden Charges'],
        ['icon' => 'shield-check', 'title' => 'NABH Accredited', 'desc' => 'National safety certification ensuring strict infection control.', 'stat' => 'Infection Rate < 0.1%'],
      ];
      ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <?php foreach ($values as $v): ?>
          <div class="bg-white border border-slate-200 p-5 flex flex-col justify-between">
            <div>
              <span class="w-10 h-10 bg-slate-100 text-slate-900 grid place-items-center mb-4">
                <i data-lucide="<?= $v['icon'] ?>" class="w-5 h-5"></i>
              </span>
              <h4 class="font-display text-base font-bold text-slate-900"><?= htmlspecialchars($v['title']) ?></h4>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed"><?= htmlspecialchars($v['desc']) ?></p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-200 text-xs font-bold text-slate-900">
              <?= htmlspecialchars($v['stat']) ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     3.5 DOCTORS & SPECIALISTS DIRECTORY
============================================================ -->
<section id="doctors" class="relative py-16 lg:py-20 bg-slate-50 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-8 border-b border-slate-200">
      <div>
        <span class="inline-block px-2.5 py-1 bg-slate-200 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-2">
          Consultants Directory
        </span>
        <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 tracking-tight">
          Expert doctors &amp; senior clinical directors.
        </h2>
      </div>

      <a href="#search" class="px-4 py-2 bg-brand-600 text-white text-xs font-bold uppercase tracking-wider inline-flex items-center gap-1.5">
        <span>Book Consultant Slot</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
      </a>
    </div>

    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php foreach ($DOCTORS as $doc): ?>
        <article class="bg-white border border-slate-200 p-6 flex flex-col justify-between hover:border-brand-600 transition-colors">
          <div>
            <div class="aspect-square bg-slate-100 border border-slate-200 mb-4 overflow-hidden">
              <img src="<?= htmlspecialchars($doc['img'] ?? 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&auto=format&fit=crop') ?>"
                alt="<?= htmlspecialchars($doc['name']) ?>" class="w-full h-full object-cover">
            </div>
            <span class="px-2 py-0.5 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-wider">
              <?= htmlspecialchars($doc['role']) ?>
            </span>
            <h3 class="font-display text-lg font-bold text-slate-900 mt-2">
              <?= htmlspecialchars($doc['name']) ?>
            </h3>
            <p class="text-xs font-semibold text-brand-600 mt-0.5"><?= htmlspecialchars($doc['spec']) ?></p>
            <p class="text-[11px] text-slate-500 mt-1"><?= htmlspecialchars($doc['qual']) ?></p>
          </div>

          <div class="mt-5 pt-3 border-t border-slate-200 flex items-center justify-between text-xs">
            <span class="text-[11px] font-bold text-emerald-700">OPD Available</span>
            <a href="#search" class="font-bold text-slate-900 uppercase tracking-wider hover:text-brand-600">Consult →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ============================================================
     4. WORLD CLASS TECHNOLOGY — Precision Infrastructure
============================================================ -->
<?php
$TECH_SPECS_MAP = [
  'Siemens CT Scanner' => [
    'make' => 'Siemens Healthineers (Germany)',
    'model' => 'SOMATOM 32-Slice Ultra-Fast CT',
    'highlights' => ['Sub-second 3D full-body & vascular acquisition', 'AI-assisted ultra low-dose radiation protocol', 'Emergency stroke triage angiography within 180 seconds', 'High-resolution pulmonary 3D reconstruction'],
    'category' => 'Imaging & Diagnostics',
    'badge' => 'Sub-Second Scan'
  ],
  'Modular Operation Theatre' => [
    'make' => 'German Laminar Flow & HEPA Filtration System',
    'model' => 'Class 10,000 Cleanroom Surgical Suite',
    'highlights' => ['Zero-bacteria positive pressure laminar air flow', 'High-definition digital C-Arm integration', 'Ergonomic LED shadowless surgical lighting', 'Dedicated anesthesia monitoring workstations'],
    'category' => 'Surgical & OTs',
    'badge' => 'HEPA Laminar Flow'
  ],
  'Advanced Cath Lab' => [
    'make' => 'Siemens ARTS ZEE PURE Digital Lab',
    'model' => 'Flat-Panel Digital Interventional Suite',
    'highlights' => ['Real-time 3D coronary stent visualization', 'Minimum radiation exposure with dose optimization', '24x7 readiness for primary emergency angioplasty', 'Comprehensive electrophysiology capabilities'],
    'category' => 'Critical & Renal Care',
    'badge' => '24×7 Active Lab'
  ],
  'Dialysis Department' => [
    'make' => 'Volumetric HDF & RO Purified Dialysis Wing',
    'model' => '8-Station Volumetric Haemodialysis Suite',
    'highlights' => ['Double-pass RO water purification system', 'Dedicated isolation stations for safety', 'Automated volumetric ultrafiltration monitoring', 'Supervised 24x7 by nephrologists'],
    'category' => 'Critical & Renal Care',
    'badge' => 'RO Purified Wing'
  ],
  'Cardiac ICU' => [
    'make' => 'Multi-Parameter Central Telemetry ICU',
    'model' => '4-Bed Specialized Coronary Intensive Care Unit',
    'highlights' => ['Continuous arterial pressure monitoring', 'Synchronized biphasic defibrillators', '1:1 ICU nurse-to-patient staffing', 'Direct connection to emergency lab'],
    'category' => 'Critical & Renal Care',
    'badge' => '1:1 Nurse Ratio'
  ],
  'NABL Pathology Lab' => [
    'make' => 'Fully Automated Barcoded Diagnostic Suite',
    'model' => 'NABL Accredited 24×7 Diagnostic Center',
    'highlights' => ['Automated biochemistry & immunoassay analyzers', 'Barcoded sample tracking preventing sample mix-up', 'Emergency report generation within 45 minutes', 'Daily internal quality control audits'],
    'category' => 'Imaging & Diagnostics',
    'badge' => 'NABL Accredited'
  ],
];
?>

<section id="technology" class="relative py-16 lg:py-20 bg-slate-50 border-b border-slate-200" x-data="{
           selectedTech: null,
           openTechModal(t) {
             const specs = <?= htmlspecialchars(json_encode($TECH_SPECS_MAP), ENT_QUOTES) ?>[t.name] || {
               make: 'Precision Hospital Infrastructure',
               model: t.tag || 'Clinical Suite',
               highlights: ['Daily Safety Check', 'Operated by Senior Technologists', 'Emergency 24x7 Diagnostic Readiness'],
               category: 'Clinical Suite',
               badge: '24×7 Operational'
             };
             this.selectedTech = {
               name: t.name,
               tag: t.tag,
               desc: t.desc,
               img: t.img || 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=900&auto=format&fit=crop',
               make: specs.make,
               model: specs.model,
               highlights: specs.highlights,
               badge: specs.badge
             };
           },
           closeTechModal() {
             this.selectedTech = null;
           }
         }">

  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto pb-8 border-b border-slate-200">
      <span class="inline-block px-2.5 py-1 bg-slate-200 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-2">
        World-Class Technology &amp; Diagnostics
      </span>
      <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 tracking-tight">
        Precision medicine, powered by modern infrastructure.
      </h2>
    </div>

    <!-- Equipment Cards Grid -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($TECH as $i => $t):
        $specs = $TECH_SPECS_MAP[$t['name']] ?? ['badge' => 'Audited Suite', 'make' => 'Precision Infrastructure', 'model' => $t['tag']];
        ?>
        <article @click="openTechModal(<?= htmlspecialchars(json_encode($t), ENT_QUOTES) ?>)"
          class="group bg-white border border-slate-200 overflow-hidden hover:border-brand-600 transition-colors cursor-pointer flex flex-col justify-between">

          <div>
            <div class="relative aspect-[16/10] bg-slate-100 border-b border-slate-200 overflow-hidden">
              <img src="<?= htmlspecialchars($t['img']) ?>" alt="<?= htmlspecialchars($t['name']) ?>"
                onerror="this.src='https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=800&auto=format&fit=crop'"
                loading="lazy" class="w-full h-full object-cover">
              <span class="absolute top-3 right-3 px-2 py-0.5 bg-slate-900 text-white text-[10px] font-bold uppercase tracking-wider">
                <?= htmlspecialchars($specs['badge']) ?>
              </span>
            </div>

            <div class="p-5">
              <h3 class="font-display text-lg font-bold text-slate-900 group-hover:text-brand-600 transition-colors">
                <?= htmlspecialchars($t['name']) ?>
              </h3>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed line-clamp-3">
                <?= htmlspecialchars($t['desc']) ?>
              </p>
              <div class="mt-4 pt-3 border-t border-slate-200 text-[11px] font-semibold text-slate-700">
                Mfg: <?= htmlspecialchars($specs['make'] ?? 'Verified Medical Suite') ?>
              </div>
            </div>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

    <!-- MODAL -->
    <div x-show="selectedTech !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/75">
      <div x-show="selectedTech !== null" @click.away="closeTechModal()"
        class="relative w-full max-w-2xl bg-white p-6 sm:p-8 border border-slate-300 overflow-hidden">
        
        <button type="button" @click="closeTechModal()" class="absolute top-4 right-4 p-2 text-slate-500 hover:text-slate-900">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <div class="flex items-center gap-4 pb-4 border-b border-slate-200">
          <div class="w-16 h-16 border border-slate-200 bg-slate-100 shrink-0">
            <img :src="selectedTech?.img" :alt="selectedTech?.name" class="w-full h-full object-cover">
          </div>
          <div>
            <span class="px-2 py-0.5 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-wider" x-text="selectedTech?.tag"></span>
            <h3 class="font-display text-xl font-bold text-slate-900" x-text="selectedTech?.name"></h3>
          </div>
        </div>

        <p class="mt-4 text-xs text-slate-700 leading-relaxed bg-slate-50 p-3 border border-slate-200" x-text="selectedTech?.desc"></p>

        <div class="mt-4">
          <h5 class="text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-2">Safety Protocols</h5>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
            <template x-for="(hl, idx) in (selectedTech?.highlights || ['Sub-second diagnostic acquisition', 'Daily NABL safety calibration'])" :key="idx">
              <div class="flex items-center gap-2 p-2 bg-white border border-slate-200 text-xs font-medium text-slate-800">
                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-slate-500 shrink-0"></i>
                <span x-text="hl"></span>
              </div>
            </template>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between">
          <span class="text-xs text-slate-600">Emergency diagnostic active 24×7</span>
          <a href="tel:<?= $HOSPITAL['emergency'] ?>" @click="closeTechModal()" class="px-4 py-2 bg-brand-600 text-white text-xs font-bold uppercase tracking-wider">
            Call Helpline
          </a>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     6. RARE CASES — Minimal Clinical Vault
============================================================ -->
<section id="rare-cases" class="relative py-16 lg:py-20 bg-[#0C2B09] text-white border-b border-[#184614]" x-data="{
           selectedCaseModal: null,
           cases: <?= htmlspecialchars(json_encode($RARE_CASES), ENT_QUOTES) ?>,
           openCaseModal(c) {
             this.selectedCaseModal = c;
           },
           closeCaseModal() {
             this.selectedCaseModal = null;
           }
         }">

  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto pb-8 border-b border-[#184614]">
      <span class="inline-block px-2.5 py-1 bg-[#56B929]/20 border border-[#56B929]/40 text-[#8AE065] text-[10px] font-bold uppercase tracking-wider mb-2">
        Clinical Triumphs
      </span>
      <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-white tracking-tight">
        Extraordinary recoveries through specialized care.
      </h2>
    </div>

    <!-- Grid of rare cases -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php foreach ($RARE_CASES as $rc): ?>
        <article class="bg-[#133A10] border border-[#1B4D17] p-5 flex flex-col justify-between hover:border-[#56B929] transition-colors">
          <div>
            <div class="aspect-[16/10] bg-[#0C2B09] border border-[#184614] mb-4 overflow-hidden">
              <img src="<?= htmlspecialchars($rc['img']) ?>" alt="<?= htmlspecialchars($rc['title']) ?>" class="w-full h-full object-cover">
            </div>
            <span class="px-2 py-0.5 bg-[#56B929]/20 text-[#8AE065] border border-[#56B929]/30 text-[10px] font-bold uppercase tracking-wider">
              <?= htmlspecialchars($rc['dept']) ?>
            </span>
            <h4 class="font-display text-sm font-bold text-white mt-2 line-clamp-2">
              <?= htmlspecialchars($rc['title']) ?>
            </h4>
            <p class="mt-2 text-xs text-slate-300 line-clamp-3 leading-relaxed">
              <?= htmlspecialchars($rc['outcome']) ?>
            </p>
          </div>

          <div class="mt-4 pt-3 border-t border-[#184614] flex items-center justify-between text-xs">
            <span class="text-slate-300 truncate"><?= htmlspecialchars($rc['doctor']) ?></span>
            <button type="button" @click="openCaseModal(<?= htmlspecialchars(json_encode($rc), ENT_QUOTES) ?>)" class="text-[#56B929] hover:text-white font-bold uppercase tracking-wider whitespace-nowrap">
              View →
            </button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- CASE MODAL -->
    <div x-show="selectedCaseModal !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-[#081E06]/90">
      <div x-show="selectedCaseModal !== null" @click.away="closeCaseModal()"
        class="relative w-full max-w-2xl bg-[#0C2B09] text-white p-6 sm:p-8 border border-[#184614] overflow-hidden">
        
        <button type="button" @click="closeCaseModal()" class="absolute top-4 right-4 p-2 text-slate-400 hover:text-white">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <span class="inline-block px-2 py-0.5 bg-[#56B929]/20 text-[#8AE065] border border-[#56B929]/40 text-[10px] font-bold uppercase tracking-wider mb-2" x-text="selectedCaseModal?.dept"></span>
        <h3 class="font-display text-xl font-bold text-white" x-text="selectedCaseModal?.title"></h3>
        <p class="text-xs text-slate-300 mt-1" x-text="`Patient: ${selectedCaseModal?.patient} | Doctor: ${selectedCaseModal?.doctor}`"></p>

        <div class="mt-4 p-4 bg-[#133A10] border border-[#1B4D17] text-xs text-slate-200 space-y-2">
          <div><strong class="text-white">Challenge:</strong> <span x-text="selectedCaseModal?.challenge"></span></div>
          <div><strong class="text-white">Treatment:</strong> <span x-text="selectedCaseModal?.treatment"></span></div>
          <div><strong class="text-white">Outcome:</strong> <span x-text="selectedCaseModal?.outcome"></span></div>
        </div>

        <div class="mt-6 pt-4 border-t border-[#184614] text-right">
          <button type="button" @click="closeCaseModal()" class="px-4 py-2 bg-[#56B929] hover:bg-[#4EA422] text-white text-xs font-bold uppercase tracking-wider">
            Close
          </button>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     7. TESTIMONIALS & PATIENT VOICES
============================================================ -->
<section id="testimonials" class="relative py-16 lg:py-20 bg-slate-50 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-6 lg:px-8" x-data="{
         activeVideoModal: null,
         testimonials: <?= htmlspecialchars(json_encode($TESTIMONIALS), ENT_QUOTES) ?>
       }">

    <div class="text-center max-w-3xl mx-auto pb-8 border-b border-slate-200">
      <span class="inline-block px-2.5 py-1 bg-slate-200 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-2">
        Patient Voices
      </span>
      <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 tracking-tight">
        Real patients, real recovery stories.
      </h2>
    </div>

    <!-- Testimonials Grid -->
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($TESTIMONIALS as $t): ?>
        <article @click="activeVideoModal = <?= htmlspecialchars(json_encode($t), ENT_QUOTES) ?>"
          class="group bg-slate-900 text-white border border-slate-800 overflow-hidden cursor-pointer flex flex-col justify-between h-[360px] relative">
          
          <img src="<?= htmlspecialchars($t['poster']) ?>" alt="<?= htmlspecialchars($t['name']) ?>" loading="lazy"
            class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-slate-950/70"></div>

          <div class="relative z-10 p-4">
            <span class="px-2 py-0.5 bg-slate-800 text-slate-300 text-[10px] font-bold uppercase tracking-wider">
              <?= htmlspecialchars($t['category']) ?>
            </span>
          </div>

          <div class="relative z-10 p-6 flex flex-col items-center justify-center text-center">
            <div class="w-12 h-12 bg-white text-slate-900 grid place-items-center mb-3">
              <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
            </div>
            <h4 class="font-display text-base font-bold text-white"><?= htmlspecialchars($t['name']) ?></h4>
            <p class="text-xs text-slate-300 italic mt-1">&ldquo;<?= htmlspecialchars($t['quote']) ?>&rdquo;</p>
          </div>

          <div class="relative z-10 p-4 bg-slate-950/90 border-t border-slate-800 text-xs text-slate-400">
            Specialist: <strong class="text-white"><?= htmlspecialchars($t['doctor']) ?></strong>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- VIDEO MODAL -->
    <div x-show="activeVideoModal !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/85">
      <div x-show="activeVideoModal !== null" @click.away="activeVideoModal = null"
        class="relative w-full max-w-3xl bg-slate-900 text-white p-6 border border-slate-700 overflow-hidden">
        
        <button type="button" @click="activeVideoModal = null" class="absolute top-4 right-4 p-2 text-slate-400 hover:text-white z-10">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <div class="relative aspect-[16/9] w-full bg-black mb-4">
          <template x-if="activeVideoModal !== null">
            <iframe class="w-full h-full border-0"
              :src="`https://www.youtube-nocookie.com/embed/${activeVideoModal?.youtube}?rel=0&autoplay=1`"
              title="Patient Video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </template>
        </div>

        <div class="flex items-center justify-between text-xs">
          <div>
            <h3 class="font-bold text-white text-base" x-text="`${activeVideoModal?.name} — ${activeVideoModal?.condition}`"></h3>
            <p class="text-slate-400 mt-0.5" x-text="`&ldquo;${activeVideoModal?.quote}&rdquo;`"></p>
          </div>
          <span class="text-slate-300 font-bold" x-text="activeVideoModal?.doctor"></span>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     8. UPCOMING EVENTS & CAMPS
============================================================ -->
<section id="events" class="relative py-14 lg:py-20 bg-white border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-6 lg:px-8" x-data="{
         openModal: false,
         selectedEvent: null,
         regName: '',
         regPhone: '',
         regSpecialty: 'Cardiology',
         registered: false,
         openRegistration(eventTitle, category) {
           this.selectedEvent = eventTitle;
           this.regSpecialty = category;
           this.registered = false;
           this.openModal = true;
         },
         submitRegistration() {
           if (!this.regName || !this.regPhone) return;
           this.registered = true;
           setTimeout(() => {
             this.openModal = false;
             this.regName = '';
             this.regPhone = '';
           }, 3000);
         }
       }">

    <div class="pb-8 border-b border-slate-200 mb-8">
      <span class="inline-block px-2.5 py-1 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-2">
        Community &amp; Health Camps
      </span>
      <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 tracking-tight">
        Upcoming events &amp; health camps.
      </h2>
    </div>

    <!-- Events Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ($EVENTS as $ev): ?>
        <article class="bg-slate-50 border border-slate-200 p-6 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between gap-2 mb-4">
              <span class="px-2 py-0.5 bg-slate-900 text-white text-[10px] font-bold uppercase tracking-wider">
                <?= htmlspecialchars($ev['status']) ?>
              </span>
              <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-800 text-[10px] font-bold uppercase tracking-wider">
                <?= htmlspecialchars($ev['category']) ?>
              </span>
            </div>

            <h3 class="font-display text-lg font-bold text-slate-900">
              <?= htmlspecialchars($ev['title']) ?>
            </h3>
            <p class="mt-2 text-xs text-slate-600 leading-relaxed">
              <?= htmlspecialchars($ev['desc']) ?>
            </p>
          </div>

          <div class="mt-6 pt-4 border-t border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="text-xs text-slate-600">
              <div class="font-semibold text-slate-900"><?= htmlspecialchars($ev['date']) ?> · <?= htmlspecialchars($ev['time']) ?></div>
              <div><?= htmlspecialchars($ev['location']) ?></div>
            </div>

            <button type="button"
              @click="openRegistration('<?= htmlspecialchars(addslashes($ev['title'])) ?>', '<?= htmlspecialchars(addslashes($ev['category'])) ?>')"
              class="px-4 py-2 bg-brand-600 text-white text-xs font-bold uppercase tracking-wider whitespace-nowrap">
              Register Slot
            </button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Registration Modal -->
    <div x-show="openModal" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/75">
      <div class="relative w-full max-w-md bg-white p-6 sm:p-8 border border-slate-300" @click.away="openModal = false">
        
        <button type="button" @click="openModal = false" class="absolute top-4 right-4 p-2 text-slate-500 hover:text-slate-900">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <div x-show="!registered">
          <h3 class="font-display text-lg font-bold text-slate-900">Reserve Priority Slot</h3>
          <p class="text-xs text-slate-600 mt-1" x-text="`Event: ${selectedEvent}`"></p>

          <form @submit.prevent="submitRegistration()" class="mt-4 space-y-3">
            <div>
              <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">Full Name *</label>
              <input type="text" x-model="regName" required placeholder="Enter full name"
                class="w-full h-10 px-3 border border-slate-300 text-xs font-medium focus:border-brand-600 focus:ring-0 outline-none">
            </div>

            <div>
              <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">Mobile Number *</label>
              <input type="tel" x-model="regPhone" required placeholder="e.g. 9876543210"
                class="w-full h-10 px-3 border border-slate-300 text-xs font-medium focus:border-brand-600 focus:ring-0 outline-none">
            </div>

            <button type="submit" class="w-full h-10 bg-brand-600 text-white font-bold text-xs uppercase tracking-wider mt-2">
              Confirm Registration
            </button>
          </form>
        </div>

        <div x-show="registered" x-cloak class="py-6 text-center space-y-2">
          <h3 class="font-display text-lg font-bold text-slate-900">Registration Confirmed</h3>
          <p class="text-xs text-slate-600">Thank you, <strong x-text="regName"></strong>. Your priority token has been issued.</p>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     5. BLOGS & SECOND OPINIONS
============================================================ -->
<?php
$ARTICLE_CONTENTS = [
  'The 7 silent signs of a heart attack you should never ignore' => [
    'subtitle' => 'Recognizing coronary symptoms early.',
    'takeaway' => 'Over 45% of heart attacks present with subtle symptoms prior to acute onset.',
    'body' => [
      'While many associate heart attacks with sudden severe pain, acute coronary syndromes are often subtler.',
      'Warning signs include jaw or shoulder tightness, unexplained cold sweats, or indigestion-like symptoms.',
      'Our 24x7 Digital Cath Lab offers immediate Troponin-I and ECG evaluation upon arrival.'
    ]
  ],
  'Knee replacement at 60+ : What modern surgery looks like today' => [
    'subtitle' => 'How early mobility protocols get patients walking in 24 hours.',
    'takeaway' => 'Modern joint replacement uses sub-millimeter computer alignment for fast recovery.',
    'body' => [
      'Joint replacement technology has evolved significantly in recent years.',
      'Class 10,000 HEPA-filtered laminar flow OTs ensure sterile surgical precision and rapid rehabilitation.',
      'Most patients begin walking with support within 24 hours of surgery.'
    ]
  ],
  'A parent\'s guide to fever in newborns — when to rush to NICU' => [
    'subtitle' => 'Key red flags in infants under 90 days old.',
    'takeaway' => 'A fever over 100.4°F in babies under 3 months requires immediate medical evaluation.',
    'body' => [
      'Fever in infants under 3 months requires prompt attention due to their developing immune systems.',
      'Red flags include lethargy, poor feeding, or rapid breathing.',
      'Our Level-3 NICU is staffed 24x7 by specialized neonatologists.'
    ]
  ]
];
?>

<section id="blogs" class="relative py-16 lg:py-20 bg-slate-50 border-b border-slate-200" x-data="{
           selectedArticle: null,
           openArticleModal(b) {
             const details = <?= htmlspecialchars(json_encode($ARTICLE_CONTENTS), ENT_QUOTES) ?>[b.title] || {
               subtitle: 'Clinical guidance from Sukhda Hospital.',
               takeaway: 'Early clinical evaluation is key to preventive healthcare.',
               body: [b.title + ' is a key topic in family healthcare.', 'Consult our senior specialists for personalized advice.']
             };
             this.selectedArticle = {
               title: b.title,
               cat: b.cat,
               date: b.date,
               read: b.read,
               author: b.author,
               img: b.img,
               subtitle: details.subtitle,
               takeaway: details.takeaway,
               body: details.body
             };
           },
           closeArticleModal() {
             this.selectedArticle = null;
           }
         }">

  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-8 border-b border-slate-200">
      <div>
        <span class="inline-block px-2.5 py-1 bg-slate-200 text-slate-800 text-[10px] font-bold uppercase tracking-wider mb-2">
          Medical Journal Hub
        </span>
        <h2 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900 tracking-tight">
          Articles &amp; clinical insights.
        </h2>
      </div>

      <div>
        <a href="#second-opinion-desk" class="px-4 py-2 border border-slate-300 bg-white text-slate-800 text-xs font-bold uppercase tracking-wider">
          Request Second Opinion ↓
        </a>
      </div>
    </div>

    <!-- Articles Grid -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php for ($i = 0; $i < min(3, count($BLOGS)); $i++):
        $b = $BLOGS[$i]; ?>
        <article class="group bg-white border border-slate-200 flex flex-col justify-between hover:border-brand-600 transition-colors">
          <div class="cursor-pointer" @click="openArticleModal(<?= htmlspecialchars(json_encode($b), ENT_QUOTES) ?>)">
            <div class="aspect-[16/10] bg-slate-100 border-b border-slate-200 overflow-hidden">
              <img src="<?= htmlspecialchars($b['img']) ?>" alt="<?= htmlspecialchars($b['title']) ?>" class="w-full h-full object-cover">
            </div>
            <div class="p-5">
              <span class="px-2 py-0.5 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-wider">
                <?= htmlspecialchars($b['cat']) ?>
              </span>
              <h3 class="font-display text-base font-bold text-slate-900 mt-2 group-hover:text-brand-600 transition-colors line-clamp-2">
                <?= htmlspecialchars($b['title']) ?>
              </h3>
            </div>
          </div>

          <div class="p-5 pt-0 flex items-center justify-between text-xs font-semibold text-slate-600 border-t border-slate-100">
            <span>By <?= htmlspecialchars($b['author']) ?></span>
            <button type="button" @click="openArticleModal(<?= htmlspecialchars(json_encode($b), ENT_QUOTES) ?>)" class="text-brand-600 font-bold uppercase tracking-wider">
              Read →
            </button>
          </div>
        </article>
      <?php endfor; ?>
    </div>

    <!-- SECOND OPINION DESK BANNER -->
    <div id="second-opinion-desk" class="mt-12 bg-[#0C2B09] text-white p-8 border border-[#184614]">
      <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
        <div>
          <span class="px-2.5 py-1 bg-[#56B929]/20 text-[#8AE065] border border-[#56B929]/40 text-[10px] font-bold uppercase tracking-wider">Ethical Second Opinion Board</span>
          <h3 class="font-display text-xl font-bold text-white mt-2">Unsure about a diagnosis or surgery recommendation?</h3>
          <p class="text-xs text-slate-300 mt-1 max-w-xl">Get a peer-reviewed second opinion directly from our senior department directors within 24 hours.</p>
        </div>

        <div class="flex items-center gap-3 w-full lg:w-auto">
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20want%20to%20upload%20my%20medical%20reports%20for%20a%20Second%20Opinion."
            target="_blank" class="w-full sm:w-auto px-5 py-3 bg-[#56B929] hover:bg-[#4EA422] text-white text-xs font-bold uppercase tracking-wider text-center">
            WhatsApp Reports
          </a>
          <a href="#search" class="w-full sm:w-auto px-5 py-3 border border-brand-400 bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider text-center">
            Book Consult
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     7. RECENT NEWS
============================================================ -->
<section id="news" class="relative py-12 lg:py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-6">
      <h2 class="font-display text-xl font-bold text-slate-900">Recent Hospital Updates</h2>
      <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Latest News</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach (array_slice($NEWS, 0, 6) as $n): ?>
        <div class="p-4 bg-slate-50 border border-slate-200 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between text-xs text-slate-500 mb-2">
              <span class="font-mono"><?= date('d M Y', strtotime($n['date'])) ?></span>
              <span class="px-2 py-0.5 bg-slate-200 text-slate-800 text-[9px] font-bold uppercase tracking-wider"><?= htmlspecialchars($n['tag']) ?></span>
            </div>
            <h3 class="font-bold text-xs text-slate-900 line-clamp-2"><?= htmlspecialchars($n['title']) ?></h3>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>