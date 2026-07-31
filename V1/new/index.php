<?php require __DIR__ . '/includes/header.php'; ?>

<!-- ============================================================
     1. BANNER / HERO SLIDER (full-width image-only)
============================================================ -->
<?php
$BANNERS = [
  'assets/images/infra/operation-theatre.jpg',
  'assets/images/infra/cath-lab.jpg',
  'assets/images/infra/icu.jpg',
];
?>
<section class="relative w-full max-w-full overflow-hidden bg-brand-900" x-data="{
    active: 0,
    total: <?= count($BANNERS) ?>,
    timer: null,
    start() { this.timer = setInterval(() => this.next(), 5500) },
    stop()  { clearInterval(this.timer) },
    next()  { this.active = (this.active + 1) % this.total },
    prev()  { this.active = (this.active - 1 + this.total) % this.total },
  }" x-init="start()" @mouseenter="stop()" @mouseleave="start()">
  <!-- Sizer: first slide sets the natural aspect ratio of the banner -->
  <img src="<?= htmlspecialchars($BANNERS[0]) ?>" alt="" aria-hidden="true" onerror="this.src='assets/images/infra/operation-theatre.jpg'"
    class="block w-full h-auto invisible select-none pointer-events-none">

  <!-- Slides stacked over the sizer -->
  <?php foreach ($BANNERS as $i => $img): ?>
        <div x-show="active === <?= $i ?>" x-transition:enter="transition ease-out duration-1000"
          x-transition:enter-start="opacity-0 scale-[1.03]" x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-700" x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0" class="absolute inset-0">
          <img src="<?= htmlspecialchars($img) ?>" alt="Sukhda Hospital banner <?= $i + 1 ?>" onerror="this.src='assets/images/infra/operation-theatre.jpg'"
            class="absolute inset-0 w-full h-full object-cover" <?= $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"' ?>>
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
      <?php for ($i = 0; $i < count($BANNERS); $i++): ?>
            <button @click="active=<?= $i ?>"
              :class="active===<?= $i ?> ? 'w-10 bg-coral-400' : 'w-2.5 bg-white/50 hover:bg-white/80'"
              class="h-2.5 rounded-full transition-all" aria-label="Go to slide <?= $i + 1 ?>"></button>
      <?php endfor; ?>
    </div>
  </div>

</section>








<!-- ============================================================
     3. SPECIALITIES & PROCEDURES — Centers of Excellence & Clinical Spectrum
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

// Rich Highlights Checklist for all Specialized Wings
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

<section id="specialties" class="relative py-16 lg:py-28 bg-gradient-to-b from-[#eaf2fb] via-[#f4f8fd] to-white border-y border-brand-200/80 overflow-hidden" x-data="{
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

  <!-- Background decorative elements -->
  <div class="absolute -top-40 -left-40 w-[600px] h-[600px] rounded-full bg-brand-100/60 blur-3xl pointer-events-none">
  </div>
  <div
    class="absolute -bottom-40 -right-40 w-[600px] h-[600px] rounded-full bg-coral-100/50 blur-3xl pointer-events-none">
  </div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section Header Block -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pb-10 border-b border-brand-200/60">
      <div class="max-w-2xl">
        <span
          class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-50 border border-brand-200 text-brand-700 text-[11px] font-bold uppercase tracking-[0.25em] shadow-soft mb-4">
          <i data-lucide="shield-check" class="w-3.5 h-3.5 text-brand-600"></i> Our Services — Treatments, Departments &amp; Specialities
        </span>
        <h2
          class="font-display text-2xl sm:text-3xl lg:text-4xl leading-[1.15] font-semibold text-ink tracking-tight">
          Comprehensive medical care across <span class="italic font-serif text-brand-600"><?= count($SPECIALTIES) ?> specialised
            wings.</span>
        </h2>
      </div>

      <!-- Live Search Input Block -->
      <div class="w-full lg:w-96 shrink-0">
        <div class="relative flex items-center">
          <i data-lucide="search" class="absolute left-4 w-5 h-5 text-brand-500 pointer-events-none"></i>
          <input type="text" x-model="searchQuery" @input="if(searchQuery.trim() !== '') { tab = 'all' }"
            placeholder="Search department or procedure (e.g. Kidney, Heart, Knee)..."
            class="w-full h-13 pl-12 pr-10 rounded-2xl bg-white border border-brand-200/80 text-ink text-sm font-medium placeholder:text-ink/40 shadow-soft focus:border-brand-500 focus:ring-4 focus:ring-brand-500/10 outline-none transition-all">
          <button type="button" x-show="searchQuery !== ''" @click="searchQuery = ''; tab = 'Treatments'" x-cloak
            class="absolute right-3.5 p-1 rounded-lg text-ink/40 hover:text-ink hover:bg-mist transition"
            title="Clear search">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Tab Selection Bar (Aligned to Our Services Categories) -->
    <div class="mt-8 flex flex-wrap items-center justify-between gap-4">
      <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 bg-white p-1.5 rounded-2xl ring-1 ring-brand-100 shadow-soft">
        
        <!-- Tab: Treatments -->
        <button type="button" @click="tab = 'Treatments'; searchQuery = ''"
          :class="tab === 'Treatments' && !searchQuery ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="shield-plus" class="w-4 h-4"></i>
          <span>Treatments</span>
          <span :class="tab === 'Treatments' && !searchQuery ? 'bg-white/20 text-white' : 'bg-brand-100/80 text-brand-800'"
            class="px-2 py-0.5 rounded-md text-[10px] font-bold"><?= count($CATEGORIZED_SPECS['Treatments'] ?? []) ?></span>
        </button>

        <!-- Tab: Departments -->
        <button type="button" @click="tab = 'Departments'; searchQuery = ''"
          :class="tab === 'Departments' && !searchQuery ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="building-2" class="w-4 h-4"></i>
          <span>Departments</span>
          <span :class="tab === 'Departments' && !searchQuery ? 'bg-white/20 text-white' : 'bg-brand-100/80 text-brand-800'"
            class="px-2 py-0.5 rounded-md text-[10px] font-bold"><?= count($CATEGORIZED_SPECS['Departments'] ?? []) ?></span>
        </button>

        <!-- Tab: Specialities -->
        <button type="button" @click="tab = 'Specialities'; searchQuery = ''"
          :class="tab === 'Specialities' && !searchQuery ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="heart-pulse" class="w-4 h-4"></i>
          <span>Specialities</span>
          <span :class="tab === 'Specialities' && !searchQuery ? 'bg-white/20 text-white' : 'bg-brand-100/80 text-brand-800'"
            class="px-2 py-0.5 rounded-md text-[10px] font-bold"><?= count($CATEGORIZED_SPECS['Specialities'] ?? []) ?></span>
        </button>

        <!-- Tab: Surgical Procedures -->
        <button type="button" @click="tab = 'procedures'; searchQuery = ''"
          :class="tab === 'procedures' && !searchQuery ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="activity" class="w-4 h-4"></i>
          <span>Surgical Procedures</span>
          <span
            :class="tab === 'procedures' && !searchQuery ? 'bg-white/20 text-white' : 'bg-brand-100/80 text-brand-800'"
            class="px-2 py-0.5 rounded-md text-[10px] font-bold"><?= count($PROCEDURES) ?></span>
        </button>

        <!-- Tab: Complete Directory -->
        <button type="button" @click="tab = 'all'; searchQuery = ''"
          :class="(tab === 'all' || searchQuery) ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="layout-grid" class="w-4 h-4"></i>
          <span>Complete Directory</span>
          <span :class="(tab === 'all' || searchQuery) ? 'bg-white/20 text-white' : 'bg-brand-100/80 text-brand-800'"
            class="px-2 py-0.5 rounded-md text-[10px] font-bold"><?= count($SPECIALTIES) ?></span>
        </button>
      </div>

      <!-- Quick Triage link -->
      <div class="hidden sm:flex items-center gap-2 text-xs font-semibold text-brand-700">
        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
        All departments open for emergency Triage 24×7
      </div>
    </div>

    <!-- ==========================================
         TABS: TREATMENTS, DEPARTMENTS, SPECIALITIES (Rich Center of Excellence Cards)
    =========================================== -->
    <?php foreach (['Treatments', 'Departments', 'Specialities'] as $catName):
      $catSpecs = $CATEGORIZED_SPECS[$catName] ?? [];
      $catBadge = $catName === 'Treatments' ? 'Medical & Surgical Treatment' : ($catName === 'Departments' ? 'Clinical Department' : 'Super-Speciality Wing');
      ?>
          <div x-show="tab === '<?= $catName ?>' && !searchQuery" x-cloak x-transition:enter="transition ease-out duration-400"
            x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <?php foreach ($catSpecs as $s):
              $icon = $iconMap[$s['icon']] ?? 'stethoscope';
              $highlights = $COE_HIGHLIGHTS[$s['name']] ?? ['24x7 Emergency Care', 'Advanced ICU Support', 'Senior Consultants', 'NABH Quality Protocol'];
              ?>
                  <article
                    class="group relative rounded-3xl bg-white border border-brand-200/80 p-6 lg:p-7 shadow-soft hover:shadow-glow hover:border-brand-400 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                      <!-- Header row: Icon & Accredited badge -->
                      <div class="flex items-center justify-between gap-4 mb-5">
                        <span
                          class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-500 via-brand-600 to-brand-700 text-white grid place-items-center shadow-soft group-hover:scale-110 transition-transform duration-300">
                          <i data-lucide="<?= $icon ?>" class="w-6 h-6"></i>
                        </span>
                        <span
                          class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 border border-brand-100 text-brand-700 text-[10px] font-bold uppercase tracking-wider">
                          <i data-lucide="shield-check" class="w-3 h-3 text-brand-600"></i> <?= $catBadge ?>
                        </span>
                      </div>

                      <!-- Title & Desc -->
                      <h3
                        class="font-display text-2xl font-semibold text-brand-900 leading-snug group-hover:text-coral-600 transition">
                        <?= htmlspecialchars($s['name']) ?>
                      </h3>
                      <p class="mt-2.5 text-[13.5px] text-ink/70 leading-relaxed">
                        <?= htmlspecialchars($s['desc']) ?>
                      </p>

                      <!-- Highlights Checklist -->
                      <ul
                        class="mt-6 pt-5 border-t border-brand-100/80 grid grid-cols-1 sm:grid-cols-2 gap-2.5 text-xs text-ink/80 font-medium">
                        <?php foreach ($highlights as $hl): ?>
                              <li class="flex items-center gap-2 truncate">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 shrink-0"></i>
                                <span class="truncate"><?= htmlspecialchars($hl) ?></span>
                              </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>

                    <!-- Footer Action Button -->
                    <div class="mt-8 pt-4 border-t border-brand-100/60 flex items-center justify-between">
                      <span class="text-xs font-semibold text-ink/50">Senior Consultants Available</span>
                      <button type="button"
                        @click="openDetailModal(<?= htmlspecialchars(json_encode($s), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($catBadge), ENT_QUOTES) ?>)"
                        class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-brand-700 group-hover:text-coral-600 transition">
                        Explore Wing <i data-lucide="arrow-right"
                          class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                      </button>
                    </div>
                  </article>
            <?php endforeach; ?>
          </div>
    <?php endforeach; ?>


    <!-- ==========================================
         TAB 2: SURGICAL & ADVANCED PROCEDURES (8 Cards)
    =========================================== -->
    <div x-show="tab === 'procedures' && !searchQuery" x-cloak x-transition:enter="transition ease-out duration-400"
      x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
      class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
      <?php foreach ($PROCEDURES as $p): ?>
            <article
              class="group relative rounded-3xl bg-white border border-brand-200/80 p-6 shadow-soft hover:shadow-glow hover:border-brand-400 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
              <div>
                <!-- Top strip: Badge + Icon -->
                <div class="flex items-center justify-between gap-2 mb-4">
                  <span
                    class="px-2.5 py-1 rounded-md bg-brand-50 text-brand-800 text-[10px] font-bold uppercase tracking-wider">
                    <?= htmlspecialchars($p['spec']) ?>
                  </span>
                  <span
                    class="w-10 h-10 rounded-xl bg-brand-50 text-brand-600 grid place-items-center group-hover:bg-brand-600 group-hover:text-white transition">
                    <i data-lucide="<?= htmlspecialchars($p['icon']) ?>" class="w-5 h-5"></i>
                  </span>
                </div>

                <!-- Title -->
                <h4
                  class="font-display text-lg font-semibold text-brand-900 leading-snug group-hover:text-coral-600 transition">
                  <?= htmlspecialchars($p['name']) ?>
                </h4>

                <!-- Desc -->
                <p class="mt-2 text-xs text-ink/65 leading-relaxed line-clamp-3">
                  <?= htmlspecialchars($p['desc']) ?>
                </p>
              </div>

              <!-- Bottom strip: Hospital stay badge & Action -->
              <div class="mt-6 pt-4 border-t border-brand-100/80 flex items-center justify-between">
                <span
                  class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-md">
                  <i data-lucide="clock" class="w-3.5 h-3.5"></i> <?= htmlspecialchars($p['stay']) ?>
                </span>
                <button type="button"
                  @click="openDetailModal(<?= htmlspecialchars(json_encode(['name' => $p['name'], 'desc' => $p['desc'], 'icon' => $p['icon'], 'spec' => $p['spec']]), ENT_QUOTES) ?>, 'Clinical Procedure')"
                  class="w-8 h-8 rounded-full bg-brand-50 hover:bg-brand-600 hover:text-white text-brand-700 grid place-items-center transition"
                  title="View Procedure Details">
                  <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
              </div>
            </article>
      <?php endforeach; ?>
    </div>


    <!-- ==========================================
         TAB 3 & SEARCH: COMPLETE DIRECTORY (All 22 Specialties)
    =========================================== -->
    <div x-show="tab === 'all' || searchQuery" x-cloak x-transition:enter="transition ease-out duration-400"
      x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
      class="mt-10">

      <!-- Search status banner -->
      <div x-show="searchQuery !== ''"
        class="mb-6 flex items-center justify-between bg-white p-4 rounded-2xl ring-1 ring-brand-200 shadow-soft">
        <p class="text-sm text-ink/80">
          Showing departments and procedures matching <strong class="text-brand-700"
            x-text="`'${searchQuery}'`"></strong>
        </p>
        <span class="px-3 py-1 rounded-full bg-brand-100/60 text-brand-800 text-xs font-bold"
          x-text="`${filteredSpecialties.length} Found`"></span>
      </div>

      <!-- No results fallback -->
      <div x-show="filteredSpecialties.length === 0"
        class="p-12 rounded-3xl bg-white ring-1 ring-brand-200 text-center max-w-xl mx-auto my-6 shadow-soft">
        <div class="w-16 h-16 rounded-full bg-coral-50 text-coral-500 mx-auto grid place-items-center mb-4">
          <i data-lucide="help-circle" class="w-8 h-8"></i>
        </div>
        <h4 class="font-display text-2xl font-semibold text-brand-900">No matching specialty found</h4>
        <p class="mt-2 text-sm text-ink/65 leading-relaxed">
          Sukhda provides multispeciality treatment for complex conditions. Speak directly to our 24×7 Triage
          coordinator to find your exact specialist.
        </p>
        <div class="mt-6 flex items-center justify-center gap-4">
          <a href="tel:<?= $HOSPITAL['emergency'] ?>"
            class="inline-flex items-center gap-2 px-6 py-3 rounded-md bg-coral-500 hover:bg-coral-600 text-white text-xs font-bold uppercase tracking-wider shadow-soft transition">
            <i data-lucide="phone-call" class="w-4 h-4"></i> Call Helpline (<?= $HOSPITAL['emergency'] ?>)
          </a>
          <button type="button" @click="searchQuery = ''; tab = 'coe'"
            class="px-5 py-3 rounded-md bg-mist hover:bg-brand-100 text-brand-800 text-xs font-bold uppercase tracking-wider transition">
            Reset Search
          </button>
        </div>
      </div>

      <!-- Complete Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <template x-for="(spec, index) in filteredSpecialties" :key="index">
          <div @click="openDetailModal(spec, 'Clinical Department')"
            class="group p-4 rounded-2xl bg-white border border-brand-200/80 hover:border-brand-500 hover:shadow-soft transition-all duration-200 cursor-pointer flex items-start gap-3.5">
            <span
              class="w-11 h-11 rounded-xl bg-brand-50 grid place-items-center text-brand-600 shrink-0 group-hover:bg-brand-600 group-hover:text-white transition-all">
              <i data-lucide="stethoscope" class="w-5 h-5"></i>
            </span>
            <div class="min-w-0 flex-1">
              <h4
                class="font-semibold text-[14px] text-brand-900 leading-snug group-hover:text-coral-600 transition truncate"
                x-text="spec.name"></h4>
              <p class="mt-1 text-xs text-ink/60 line-clamp-2 leading-relaxed" x-text="spec.desc"></p>
            </div>
            <i data-lucide="chevron-right"
              class="w-4 h-4 text-brand-300 group-hover:text-coral-500 self-center transition shrink-0"></i>
          </div>
        </template>
      </div>
    </div>


    <!-- ==========================================
         INTERACTIVE DETAIL MODAL across all cards
    =========================================== -->
    <div x-show="selectedItem !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-brand-900/70 backdrop-blur-sm"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

      <div x-show="selectedItem !== null" @click.away="closeDetailModal()"
        class="relative w-full max-w-2xl rounded-3xl bg-white p-7 lg:p-9 shadow-2xl ring-1 ring-brand-100 overflow-hidden"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100">

        <button type="button" @click="closeDetailModal()"
          class="absolute top-6 right-6 w-10 h-10 rounded-full bg-mist text-ink/60 hover:text-ink hover:bg-brand-100 grid place-items-center transition">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <div class="flex items-start gap-4">
          <div
            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-500 to-brand-700 text-white grid place-items-center shrink-0 shadow-soft">
            <i data-lucide="shield-check" class="w-8 h-8"></i>
          </div>
          <div>
            <span
              class="inline-block px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold uppercase tracking-wider mb-1.5"
              x-text="selectedItem?.type"></span>
            <h3 class="font-display text-2xl lg:text-3xl font-semibold text-brand-900 leading-tight"
              x-text="selectedItem?.name"></h3>
          </div>
        </div>

        <p class="mt-5 text-[15px] text-ink/75 leading-relaxed bg-mist/60 p-4 rounded-2xl ring-1 ring-brand-100"
          x-text="selectedItem?.desc"></p>

        <!-- Department Highlights in Modal -->
        <div class="mt-6">
          <h5 class="text-xs font-bold uppercase tracking-widest text-ink/45 mb-3">Clinical Capabilities &amp; Standards
          </h5>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
            <template
              x-for="(hl, idx) in (selectedItem?.highlights || ['24x7 Emergency Triage', 'Experienced Specialists', 'NABH Accredited Care', 'Insurance Cashless Desk'])"
              :key="idx">
              <div
                class="flex items-center gap-2.5 p-3 rounded-xl bg-white border border-brand-200/80 text-xs font-medium text-brand-900">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 shrink-0"></i>
                <span x-text="hl"></span>
              </div>
            </template>
          </div>
        </div>

        <!-- OPD Timings & Direct Action -->
        <div
          class="mt-8 pt-6 border-t border-brand-200/60 flex flex-col sm:flex-row items-center justify-between gap-4">
          <div class="text-xs space-y-0.5">
            <div class="font-bold text-brand-900 flex items-center gap-1.5">
              <i data-lucide="calendar" class="w-4 h-4 text-brand-600"></i> OPD Schedule: Mon – Sat (09 AM – 05 PM)
            </div>
            <div class="text-ink/60">Emergency and critical care operational round-the-clock.</div>
          </div>

          <div class="flex items-center gap-2.5 w-full sm:w-auto">
            <a :href="`https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20want%20to%20enquire%20about%20${encodeURIComponent(selectedItem?.name || 'Consultation')}`"
              target="_blank"
              class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-[#25D366] hover:bg-[#20bd5a] text-white text-xs font-bold tracking-wide shadow-soft transition">
              <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Desk
            </a>
            <a href="#search" @click="closeDetailModal()"
              class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider shadow-soft hover:shadow-glow transition">
              Book Appointment <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

      </div>
    </div>


    <!-- ==========================================
         BOTTOM LUXURY BANNER: FIND AN EXPERT / TRIAGE
    =========================================== -->
    <div
      class="mt-16 rounded-[2.5rem] overflow-hidden bg-gradient-to-r from-brand-900 via-brand-800 to-brand-600 text-white p-8 lg:p-12 shadow-2xl relative flex flex-col lg:flex-row items-center justify-between gap-8">
      <!-- Decorative circles inside banner -->
      <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
      <div class="absolute -left-20 -top-20 w-80 h-80 rounded-full bg-coral-500/20 blur-3xl pointer-events-none"></div>

      <div class="relative z-10 max-w-xl text-center lg:text-left">
        <span
          class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-coral-300 text-[11px] font-bold uppercase tracking-widest mb-3">
          <i data-lucide="phone-call" class="w-3.5 h-3.5"></i> 24/7 Patient Concierge &amp; Triage
        </span>
        <h3 class="font-display text-2xl sm:text-3xl lg:text-4xl font-semibold leading-tight text-white">
          Not sure which specialist or department you need?
        </h3>
        <p class="mt-3 text-white/80 text-sm sm:text-base leading-relaxed">
          Speak with our clinical triage coordinator to match your symptoms with the right senior consultant. Same-day
          appointments available for urgent evaluations.
        </p>
      </div>

      <div class="relative z-10 flex flex-col sm:flex-row flex-wrap items-center gap-3 shrink-0 w-full lg:w-auto justify-center">
        <a href="#search"
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-md bg-coral-500 hover:bg-coral-600 text-white text-xs sm:text-sm font-bold shadow-glow transition whitespace-nowrap">
          <i data-lucide="calendar-plus" class="w-4 h-4 shrink-0"></i> Book Priority Appointment
        </a>
        <a href="tel:<?= $HOSPITAL['emergency'] ?>"
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-md bg-white/15 hover:bg-white/25 ring-1 ring-white/30 text-white text-xs sm:text-sm font-bold backdrop-blur transition whitespace-nowrap">
          <i data-lucide="phone" class="w-4 h-4 text-coral-400 shrink-0"></i> Call <?= $HOSPITAL['emergency'] ?>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     ABOUT US — Interactive Heritage, Milestones, Leadership & Values
============================================================ -->
<section id="about" class="relative py-18 lg:py-28 bg-gradient-to-br from-[#FBF6EE] via-[#F6EEE3] to-[#EFE7DA] border-b border-coral-200/60 overflow-hidden" x-data="{
           tab: 'story', // 'story', 'timeline', 'leadership', 'values'
           activeYear: 2002,
           openVideoTour: false,
           milestones: {
             2002: { title: 'The 20-Bed Genesis', desc: 'Founded by AIIMS-trained Dr. Amit Mehta and Dr. Manisha Mehta as Hisar\'s first ethical, patient-centric maternity and surgical clinic.', stats: '20 Beds · 2 Doctors · 1 OT' },
             2011: { title: 'Multispeciality & Critical Care Wing', desc: 'Expanded into an 80-bed facility introducing laminar-flow modular OTs, round-the-clock emergency triage, and a dedicated 12-bed adult ICU.', stats: '80 Beds · 12 Specialists · 24x7 ICU' },
             2018: { title: 'Super-Specialities & NABH Accreditation', desc: 'Launched Interventional Cardiology with a state-of-the-art Digital Cath Lab, Neuro Surgery wing, and achieved national NABH accreditation for safety.', stats: '120 Beds · Cath Lab · NABH Safety' },
             2026: { title: 'Hisar\'s Premier Health Ecosystem', desc: 'Today, Sukhda operates with 150+ beds, 22 clinical departments, AI-powered diagnostics, and an 8-station volumetric HDF kidney care center.', stats: '150+ Beds · <?= count($SPECIALTIES) ?> Wings · <?= $HOSPITAL['doctors'] ?> Doctors' }
           }
         }">

  <!-- Decorative background glows -->
  <div
    class="absolute -top-40 -left-32 w-[500px] h-[500px] rounded-full bg-brand-100/80 blur-3xl opacity-70 pointer-events-none">
  </div>
  <div
    class="absolute -bottom-40 -right-32 w-[500px] h-[500px] rounded-full bg-coral-100/70 blur-3xl opacity-60 pointer-events-none">
  </div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section Header Block -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pb-10 border-b border-brand-200/60">
      <div class="max-w-3xl">
        <span
          class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-50 border border-brand-200 text-brand-700 text-[11px] font-bold uppercase tracking-[0.25em] shadow-soft mb-3">
          <i data-lucide="history" class="w-3.5 h-3.5 text-brand-600"></i> Heritage &amp; Medical Leadership
        </span>
        <h2
          class="font-display text-2xl sm:text-3xl lg:text-4xl leading-[1.15] font-semibold text-ink tracking-tight text-balance">
          A quiet revolution in <span class="italic font-serif text-brand-600">Hisar's</span> healthcare,
          <span class="text-ink/40">since <?= htmlspecialchars($HOSPITAL['founded']) ?>.</span>
        </h2>
      </div>

      <!-- Tab Selection Bar -->
      <div
        class="flex flex-wrap items-center gap-2 bg-white p-1.5 rounded-2xl ring-1 ring-brand-100 shadow-soft shrink-0">
        <button type="button" @click="tab = 'story'"
          :class="tab === 'story' ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="book-open" class="w-4 h-4"></i> Our Story
        </button>
        <button type="button" @click="tab = 'timeline'"
          :class="tab === 'timeline' ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="milestone" class="w-4 h-4"></i> 24-Year Journey
        </button>
        <button type="button" @click="tab = 'leadership'"
          :class="tab === 'leadership' ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="users" class="w-4 h-4"></i> Leadership
        </button>
        <button type="button" @click="tab = 'values'"
          :class="tab === 'values' ? 'bg-brand-600 text-white font-semibold shadow-soft' : 'text-ink/65 hover:text-brand-700 hover:bg-mist font-medium'"
          class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-[13px] transition-all duration-200">
          <i data-lucide="shield-check" class="w-4 h-4"></i> 4 Core Pillars
        </button>
      </div>
    </div>

    <!-- ==========================================
         TAB 1: OUR STORY & FOUNDERS VISION
    =========================================== -->
    <div x-show="tab === 'story'" x-transition:enter="transition ease-out duration-500"
      x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
      class="mt-12 grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

      <!-- Left: Multi-image editorial collage + interactive stat cards -->
      <div class="lg:col-span-6 space-y-5">
        <!-- Main Hero Image Box -->
        <div
          class="relative aspect-[16/11] sm:aspect-[16/10] rounded-[2rem] lg:rounded-[2.5rem] overflow-hidden ring-1 ring-brand-200 shadow-glow group/hero bg-brand-900">
          <img src="assets/images/infra/operation-theatre.jpg" onerror="this.src='assets/images/infra/operation-theatre.jpg'"
            alt="Sukhda Hospital Surgical Suite and Care"
            class="w-full h-full object-cover group-hover/hero:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-900/90 via-brand-900/30 to-transparent"></div>

          <!-- Top Right Live Status Badge -->
          <div class="absolute top-5 right-5 z-10">
            <span
              class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-ink/50 backdrop-blur-md ring-1 ring-white/20 text-white text-xs font-semibold shadow-sm">
              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
              24/7 Active Surgical Suite
            </span>
          </div>

          <!-- Bottom Caption (Unobstructed & Clean) -->
          <div
            class="absolute bottom-6 left-6 right-6 text-white z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-3">
            <div>
              <span
                class="inline-block px-3 py-1 rounded-md bg-coral-500 text-white text-[11px] font-extrabold uppercase tracking-widest shadow-sm">Hisar's
                Pride</span>
              <h4 class="font-display text-xl sm:text-2xl font-bold mt-2 leading-snug">State-of-the-Art Critical Care
                Wing</h4>
              <p class="text-xs text-white/80 mt-1 max-w-md hidden sm:block">Equipped with German & American diagnostic
                technology and modular laminar-flow OTs.</p>
            </div>
            <div
              class="hidden md:flex items-center gap-1.5 shrink-0 bg-white/15 backdrop-blur-md px-3 py-1.5 rounded-xl border border-white/20 text-xs font-semibold text-white">
              <i data-lucide="shield-check" class="w-4 h-4 text-coral-300"></i>
              NABH Safe
            </div>
          </div>
        </div>

        <!-- Bottom Row: 2 Balanced Interactive Heritage & Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <!-- Card 1: Unbroken Trust / 24Y Heritage -->
          <div
            class="bg-white rounded-[2rem] p-5 sm:p-6 ring-1 ring-brand-200/80 shadow-soft hover:shadow-glow hover:ring-brand-300 transition-all duration-300 flex items-center gap-4 group/card1">
            <div
              class="w-14 h-14 rounded-2xl bg-gradient-to-br from-coral-500 via-coral-600 to-coral-700 text-white grid place-items-center shadow-md shrink-0 group-hover/card1:scale-105 transition-transform duration-300">
              <div class="text-center leading-none">
                <div class="font-display text-lg font-black">24Y</div>
                <div class="text-[8px] uppercase tracking-tighter font-bold opacity-90">Trust</div>
              </div>
            </div>
            <div class="min-w-0 flex-1">
              <div class="flex items-center gap-1.5">
                <span class="text-xs uppercase tracking-wider font-extrabold text-brand-900">Unbroken Trust</span>
                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-emerald-500 shrink-0"></i>
              </div>
              <p class="text-xs text-ink/65 mt-1 leading-relaxed">Serving families across Haryana without compromise
                since 2002.</p>
            </div>
          </div>

          <!-- Card 2: 1.2 Lakh+ Patients Cared For -->
          <div
            class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-brand-900 via-brand-800 to-brand-700 p-5 sm:p-6 text-white shadow-soft hover:shadow-glow ring-1 ring-brand-600/80 transition-all duration-300 flex items-center gap-4 group/card2">
            <!-- Coloured backdrop blur inside card -->
            <div
              class="absolute -right-8 -bottom-8 w-28 h-28 rounded-full bg-coral-500/25 blur-xl pointer-events-none group-hover/card2:scale-125 transition-transform duration-500">
            </div>

            <div
              class="w-14 h-14 rounded-2xl bg-white/10 ring-1 ring-white/20 text-coral-400 grid place-items-center shrink-0 group-hover/card2:scale-105 transition-transform duration-300">
              <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <div class="relative z-10 min-w-0 flex-1">
              <div class="font-display text-2xl font-black text-coral-300 tracking-tight leading-none">1.2 Lakh+</div>
              <div class="text-xs uppercase tracking-wider font-bold text-white/90 mt-1">Patients Cared For</div>
              <div class="text-[11px] text-brand-100/70 mt-0.5 truncate">Across 22+ clinical specialties</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Narrative story + founder quote -->
      <div class="lg:col-span-6 space-y-6">
        <div class="space-y-4 text-ink/75 leading-relaxed text-[15px] lg:text-base">
          <p class="font-medium text-brand-900 text-lg">
            What began in 2002 as a humble 20-bed clinic founded by <strong class="text-brand-700 font-bold">Dr. Amit
              Mehta (MD, AIIMS)</strong> and <strong class="text-brand-700 font-bold">Dr. Manisha Mehta (MS,
              Gynae)</strong> has grown into Hisar's definitive multispeciality medical landmark.
          </p>
          <p>
            For decades, patients from Hisar and surrounding districts had to endure arduous 4-hour journeys to Delhi or
            Gurgaon for advanced cardiac interventions, brain navigation surgery, or specialized joint replacements.
            Sukhda was founded with a singular, non-negotiable vow: <span
              class="italic text-brand-800 font-semibold">bring premier metropolis healthcare directly to the heart of
              Haryana.</span>
          </p>
          <p>
            Today, operating across <strong class="text-brand-800"><?= count($SPECIALTIES) ?> specialized
              departments</strong> with <strong class="text-brand-800"><?= $HOSPITAL['doctors'] ?> resident &amp;
              visiting consultants</strong> and <strong class="text-brand-800"><?= $HOSPITAL['beds'] ?> beds</strong>,
            Sukhda pairs world-class German and American diagnostic technology with transparent, ethical pricing.
          </p>
        </div>

        <!-- Founder Quote Card -->
        <div class="p-6 rounded-3xl bg-white border border-brand-200 shadow-soft relative overflow-hidden">
          <i data-lucide="quote"
            class="absolute top-4 right-4 w-12 h-12 text-brand-100 -rotate-12 pointer-events-none"></i>
          <p class="italic font-serif text-brand-900 text-base lg:text-xl leading-relaxed relative z-10">
            &ldquo;We don't just treat illnesses; we treat neighbors, parents, and friends. Every surgical suite and ICU
            protocol at Sukhda is built to meet the exact standards we would demand for our own families.&rdquo;
          </p>
          <div class="mt-4 pt-3 border-t border-brand-100 flex items-center justify-between relative z-10">
            <div>
              <div class="font-bold text-brand-800 text-sm">Dr. Amit Mehta</div>
              <div class="text-xs text-ink/50 font-medium">Founder &amp; Managing Director (MD, AIIMS New Delhi)</div>
            </div>
            <button type="button" @click="tab = 'leadership'"
              class="text-xs font-bold text-coral-500 hover:underline flex items-center gap-1">
              Meet Doctors <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </button>
          </div>
        </div>
      </div>

    </div>


    <!-- ==========================================
         TAB 2: 24-YEAR MILESTONE JOURNEY
    =========================================== -->
    <div x-show="tab === 'timeline'" x-cloak x-transition:enter="transition ease-out duration-500"
      x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
      class="mt-12">

      <!-- Interactive Year Selector Bar -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-8">
        <template x-for="(data, year) in milestones" :key="year">
          <button type="button" @click="activeYear = year"
            :class="activeYear == year ? 'ring-2 ring-coral-500 bg-brand-600 text-white shadow-glow' : 'ring-1 ring-brand-200 bg-white text-brand-900 hover:bg-mist'"
            class="p-4 rounded-2xl text-left transition-all group flex flex-col justify-between">
            <span :class="activeYear == year ? 'text-coral-300' : 'text-brand-500 group-hover:text-coral-500'"
              class="font-display text-2xl font-bold transition" x-text="year"></span>
            <span :class="activeYear == year ? 'text-white/80' : 'text-ink/60'"
              class="text-xs font-medium truncate mt-1" x-text="data.title"></span>
          </button>
        </template>
      </div>

      <!-- Active Milestone Card -->
      <div
        class="p-8 lg:p-12 rounded-3xl bg-white ring-1 ring-brand-200 shadow-xl grid lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-4">
          <div
            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold uppercase tracking-wider">
            <i data-lucide="calendar" class="w-3.5 h-3.5 text-coral-500"></i> Milestone Chapter: <span
              x-text="activeYear"></span>
          </div>
          <h3 class="font-display text-lg sm:text-xl lg:text-2xl font-semibold text-brand-900 leading-tight"
            x-text="milestones[activeYear]?.title"></h3>
          <p class="text-[15px] lg:text-base text-ink/75 leading-relaxed" x-text="milestones[activeYear]?.desc"></p>

          <div class="pt-4">
            <span
              class="inline-block px-4 py-2 rounded-xl bg-emerald-50 border border-emerald-200/60 text-emerald-800 text-xs font-bold tracking-wide"
              x-text="`Capacity & Infrastructure: ${milestones[activeYear]?.stats}`"></span>
          </div>
        </div>

        <div class="lg:col-span-5 aspect-[16/10] rounded-2xl overflow-hidden bg-brand-900 relative shadow-soft">
          <img :src="activeYear == 2002 ? 'assets/images/infra/icu-general.jpg' :
                     activeYear == 2011 ? 'assets/images/infra/cath-lab.jpg' :
                     activeYear == 2018 ? 'assets/images/infra/ct-scan.jpg' :
                     'assets/images/infra/icu.jpg'"
            onerror="this.src='assets/images/infra/operation-theatre.jpg'"
            alt="Milestone growth" class="w-full h-full object-cover transition-all duration-500">
          <div
            class="absolute inset-0 bg-gradient-to-t from-brand-900/80 via-transparent to-transparent grid place-items-end p-6">
            <div class="text-white">
              <span class="text-xs uppercase tracking-widest text-coral-300 font-bold">Hisar Healthcare Evolution</span>
              <div class="font-display text-xl font-bold" x-text="`Sukhda in ${activeYear}`"></div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <!-- ==========================================
         TAB 3: FOUNDERS & MEDICAL LEADERSHIP
    =========================================== -->
    <div x-show="tab === 'leadership'" x-cloak x-transition:enter="transition ease-out duration-500"
      x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
      class="mt-12 grid md:grid-cols-2 gap-8 lg:gap-10">

      <!-- Leader 1 -->
      <article
        class="bg-white rounded-3xl p-7 lg:p-9 ring-1 ring-brand-200 shadow-soft hover:shadow-glow transition-all flex flex-col justify-between">
        <div>
          <div class="flex items-center gap-5 mb-6">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&auto=format&fit=crop"
              onerror="this.src='assets/images/infra/operation-theatre.jpg'"
              alt="Dr. Amit Mehta"
              class="w-20 h-20 rounded-2xl object-cover ring-2 ring-brand-300 shadow-soft shrink-0">
            <div>
              <span
                class="inline-block px-2.5 py-0.5 rounded bg-brand-50 text-brand-700 text-[10px] font-bold uppercase tracking-wider mb-1">Founder
                &amp; Managing Director</span>
              <h3 class="font-display text-2xl font-bold text-brand-900">Dr. Amit Mehta</h3>
              <p class="text-xs text-ink/60 font-semibold mt-0.5">MD (Internal Medicine, AIIMS New Delhi) · Fellowship
                in Cardiology</p>
            </div>
          </div>
          <p class="text-sm text-ink/75 leading-relaxed">
            An alumnus of India's premier medical institute, Dr. Amit Mehta spearheaded Hisar's transition from basic
            clinic consultations to evidence-based protocol intensive care. Under his leadership, Sukhda's emergency and
            critical care wings boast a survival rate exceeding 97.8% in acute cardiac and metabolic crises.
          </p>
        </div>
        <div class="mt-6 pt-5 border-t border-brand-100 flex items-center justify-between">
          <span class="text-xs font-bold text-emerald-700 flex items-center gap-1.5"><i data-lucide="check-circle"
              class="w-4 h-4"></i> Available for OPD &amp; ICU Rounds</span>
          <a href="#search"
            class="text-xs font-bold uppercase tracking-wider text-brand-700 hover:text-coral-500 transition">Book
            Consult →</a>
        </div>
      </article>

      <!-- Leader 2 -->
      <article
        class="bg-white rounded-3xl p-7 lg:p-9 ring-1 ring-brand-200 shadow-soft hover:shadow-glow transition-all flex flex-col justify-between">
        <div>
          <div class="flex items-center gap-5 mb-6">
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&auto=format&fit=crop"
              onerror="this.src='assets/images/infra/cath-lab.jpg'"
              alt="Dr. Manisha Mehta"
              class="w-20 h-20 rounded-2xl object-cover ring-2 ring-brand-300 shadow-soft shrink-0">
            <div>
              <span
                class="inline-block px-2.5 py-0.5 rounded bg-coral-50 text-coral-600 text-[10px] font-bold uppercase tracking-wider mb-1">Co-Founder
                &amp; Senior Obstetrician</span>
              <h3 class="font-display text-2xl font-bold text-brand-900">Dr. Manisha Mehta</h3>
              <p class="text-xs text-ink/60 font-semibold mt-0.5">MS (Obstetrics &amp; Gynaecology) · Advanced
                Laparoscopic Surgeon</p>
            </div>
          </div>
          <p class="text-sm text-ink/75 leading-relaxed">
            Dr. Manisha Mehta revolutionized maternal safety in Haryana by introducing painless epidural labor suites
            and high-risk pregnancy protocols backed by Level-3 NICU support. She has personally supervised over 35,000
            successful childbirths, maintaining one of the state's highest natural delivery percentages.
          </p>
        </div>
        <div class="mt-6 pt-5 border-t border-brand-100 flex items-center justify-between">
          <span class="text-xs font-bold text-emerald-700 flex items-center gap-1.5"><i data-lucide="check-circle"
              class="w-4 h-4"></i> Leading Mother &amp; Child Wing</span>
          <a href="#search"
            class="text-xs font-bold uppercase tracking-wider text-brand-700 hover:text-coral-500 transition">Book
            Consult →</a>
        </div>
      </article>

    </div>


    <!-- ==========================================
         TAB 4: 4 CORE PILLARS & QUALITY AUDIT
    =========================================== -->
    <div x-show="tab === 'values'" x-cloak x-transition:enter="transition ease-out duration-500"
      x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
      class="mt-12">

      <?php
      $values = [
        ['icon' => 'heart-handshake', 'title' => 'Compassion First', 'desc' => 'Care that treats people, not protocols. Every patient is assigned a personal nurse-coordinator from admission to discharge.', 'stat' => '100% Personal Attention'],
        ['icon' => 'sparkles', 'title' => 'Clinical Excellence', 'desc' => 'Evidence-led, outcome-driven medicine with peer-reviewed surgical checklists and strict antibiotic stewardship.', 'stat' => '98.4% Outcome Success'],
        ['icon' => 'badge-indian-rupee', 'title' => 'Transparent Pricing', 'desc' => 'World-class care at honest rates. All package estimates are shared upfront before surgery without hidden surprise billing.', 'stat' => '0% Hidden Charges'],
        ['icon' => 'shield-check', 'title' => 'NABH Accredited', 'desc' => 'National quality audit certification ensuring hospital infection rates remain below 0.1% across all modular operating suites.', 'stat' => 'Infection Rate < 0.1%'],
      ];
      ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($values as $v): ?>
              <div
                class="group bg-white rounded-3xl p-6 ring-1 ring-brand-200 shadow-soft hover:shadow-glow hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                <div>
                  <span
                    class="w-14 h-14 rounded-2xl bg-brand-50 text-brand-600 grid place-items-center group-hover:bg-brand-600 group-hover:text-white transition-all mb-5 shadow-soft">
                    <i data-lucide="<?= $v['icon'] ?>" class="w-6 h-6"></i>
                  </span>
                  <h4 class="font-display text-xl font-bold text-brand-900"><?= htmlspecialchars($v['title']) ?></h4>
                  <p class="mt-2 text-xs text-ink/70 leading-relaxed"><?= htmlspecialchars($v['desc']) ?></p>
                </div>
                <div class="mt-6 pt-4 border-t border-brand-100 text-xs font-bold text-coral-500 flex items-center gap-1.5">
                  <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500"></i> <?= htmlspecialchars($v['stat']) ?>
                </div>
              </div>
        <?php endforeach; ?>
      </div>

      <!-- Live Audit Strip -->
      <div
        class="mt-8 p-6 rounded-2xl bg-brand-900 text-white flex flex-col sm:flex-row items-center justify-between gap-4 shadow-soft">
        <div class="flex items-center gap-3">
          <span class="w-3 h-3 rounded-full bg-emerald-400 animate-ping"></span>
          <span class="text-xs sm:text-sm font-medium">Sukhda Hospital is actively compliant with 2026 NABH Safety &amp;
            Cashless Insurance Directives.</span>
        </div>
        <a href="#search"
          class="px-5 py-2 rounded-md bg-coral-500 hover:bg-coral-600 text-white text-xs font-bold tracking-wider uppercase transition shrink-0">
          Verify Cashless Panel →
        </a>
      </div>

    </div>


    <!-- ==========================================
         INTERACTIVE CINEMATIC VIDEO TOUR MODAL
    =========================================== -->
    <div x-show="openVideoTour" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-brand-900/80 backdrop-blur-md"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

      <div
        class="relative w-full max-w-4xl rounded-3xl bg-brand-900 p-4 sm:p-6 ring-1 ring-white/20 shadow-2xl overflow-hidden"
        @click.away="openVideoTour = false">

        <div class="flex items-center justify-between text-white pb-4 px-2">
          <div class="flex items-center gap-2 font-display font-semibold text-base sm:text-lg">
            <i data-lucide="play-circle" class="w-5 h-5 text-coral-400"></i> Sukhda Hospital Infrastructure Tour
            (<?= $HOSPITAL['beds'] ?> Beds)
          </div>
          <button type="button" @click="openVideoTour = false"
            class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 text-white grid place-items-center transition">
            <i data-lucide="x" class="w-5 h-5"></i>
          </button>
        </div>

        <div class="relative aspect-video w-full rounded-2xl overflow-hidden bg-black shadow-glow">
          <template x-if="openVideoTour">
            <iframe class="absolute inset-0 w-full h-full border-0"
              src="https://www.youtube.com/embed/ScMzIvxBSi4?rel=0&modestbranding=1&autoplay=1" title="Sukhda Hospital Tour"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </template>
        </div>

        <div class="mt-4 px-2 grid grid-cols-3 gap-3 text-center text-white text-xs sm:text-sm font-semibold">
          <div class="bg-white/10 py-2.5 rounded-xl">Laminar Flow Modular OTs</div>
          <div class="bg-white/10 py-2.5 rounded-xl">24x7 Digital Cath Lab &amp; ICU</div>
          <div class="bg-white/10 py-2.5 rounded-xl">8-Station Dialysis Wing</div>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     4. WORLD CLASS TECHNOLOGY — Precision Infrastructure Suite & Specs
============================================================ -->
<?php
// Enriched technical details and telemetry mapping for $TECH items
$TECH_SPECS_MAP = [
  'Siemens CT Scanner' => [
    'make' => 'Siemens Healthineers (Germany)',
    'model' => 'SOMATOM 32-Slice Ultra-Fast CT',
    'highlights' => ['Sub-second 3D full-body & vascular acquisition', 'AI-assisted ultra low-dose radiation protocol for children & seniors', 'Emergency stroke triage angiography within 180 seconds', 'High-resolution pulmonary & orthopedic 3D reconstruction'],
    'category' => 'Imaging & Diagnostics',
    'badge' => 'Sub-Second Scan'
  ],
  'Modular Operation Theatre' => [
    'make' => 'German Laminar Flow & HEPA Filtration System',
    'model' => 'Class 10,000 Cleanroom Surgical Suite',
    'highlights' => ['Zero-bacteria positive pressure laminar air flow', 'High-definition digital C-Arm & neuro-navigation integration', 'Ergonomic LED shadowless surgical lighting arrays', 'Dedicated anesthesia & hemodynamic monitoring workstations'],
    'category' => 'Surgical & OTs',
    'badge' => 'HEPA Laminar Flow'
  ],
  'Advanced Cath Lab' => [
    'make' => 'Siemens ARTS ZEE PURE Digital Lab',
    'model' => 'Flat-Panel Digital Interventional Suite',
    'highlights' => ['Real-time 3D coronary & cerebral stent visualization', 'Minimum radiation exposure with PURE dose optimization', '24x7 readiness for primary emergency angioplasty in heart attacks', 'Comprehensive electrophysiology and pacemaker insertion capabilities'],
    'category' => 'Critical & Renal Care',
    'badge' => '24×7 Active Lab'
  ],
  'Dialysis Department' => [
    'make' => 'Volumetric HDF & RO Purified Dialysis Wing',
    'model' => '7-Station Volumetric Haemodialysis Suite',
    'highlights' => ['Multi-stage double-pass RO water purification for zero endotoxins', 'Dedicated isolation stations for Hepatitis/HIV safe separation', 'Automated volumetric ultrafiltration and blood pressure monitoring', 'Supervised 24x7 by senior nephrologists and critical care nurses'],
    'category' => 'Critical & Renal Care',
    'badge' => 'RO Purified Wing'
  ],
  'Cardiac ICU' => [
    'make' => 'Multi-Parameter Central Telemetry ICU',
    'model' => '4-Bed Specialized Coronary Intensive Care Unit',
    'highlights' => ['Continuous invasive & non-invasive arterial pressure monitoring', 'Synchronized biphasic defibrillators and temporary pacing bedside', '1:1 ICU nurse-to-patient critical care staffing protocol', 'Direct pneumatic tube connection to emergency blood & pathology lab'],
    'category' => 'Critical & Renal Care',
    'badge' => '1:1 Nurse Ratio'
  ],
  'NABL Pathology Lab' => [
    'make' => 'Fully Automated Barcoded Diagnostic Suite',
    'model' => 'NABL Accredited 24×7 Diagnostic Center',
    'highlights' => ['Automated biochemistry, immunoassay, and hematology analyzers', 'Barcoded sample tracking eliminating human sample mix-up', 'Emergency critical blood report generation within 45 minutes', 'Daily internal & external quality control calibration audits'],
    'category' => 'Imaging & Diagnostics',
    'badge' => 'NABL Accredited'
  ],
];
?>

<section id="technology" class="relative py-18 lg:py-28 bg-gradient-to-br from-brand-600 via-brand-700 to-brand-800 text-white border-y border-brand-500/60 overflow-hidden" x-data="{
           activeCategory: 'All Suites',
           selectedTech: null,
           openTechModal(t) {
             const specs = <?= htmlspecialchars(json_encode($TECH_SPECS_MAP), ENT_QUOTES) ?>[t.name] || {
               make: 'Precision Hospital Infrastructure',
               model: t.tag || 'Clinical Suite',
               highlights: ['Daily NABL Calibration & Safety Check', 'Operated by Senior Specialized Technologists', 'Emergency 24x7 Diagnostic Readiness', 'Integrated Electronic Health Record Output'],
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
           },
           get filteredTech() {
             const all = <?= htmlspecialchars(json_encode($TECH), ENT_QUOTES) ?>;
             if (this.activeCategory === 'All Suites') return all;
             const specs = <?= htmlspecialchars(json_encode($TECH_SPECS_MAP), ENT_QUOTES) ?>;
             return all.filter(t => (specs[t.name]?.category || 'Imaging & Diagnostics') === this.activeCategory);
           }
         }">

  <!-- Soft decorative background gradients -->
  <div
    class="absolute -top-32 -right-32 w-[480px] h-[480px] rounded-full bg-coral-500/15 blur-3xl opacity-80 pointer-events-none">
  </div>
  <div
    class="absolute -bottom-32 -left-32 w-[480px] h-[480px] rounded-full bg-brand-400/15 blur-3xl opacity-70 pointer-events-none">
  </div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section Header (Centered, Tabs Removed) -->
    <div class="text-center max-w-3xl mx-auto pb-10 border-b border-white/15">
      <div class="flex justify-center mb-3.5">
        <span
          class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-white/10 border border-white/20 text-coral-300 text-[11px] font-bold uppercase tracking-[0.25em] shadow-soft backdrop-blur">
          <i data-lucide="cpu" class="w-3.5 h-3.5 text-coral-400"></i> World-Class Technology &amp; Diagnostics
        </span>
      </div>
      <h2
        class="font-display text-2xl sm:text-3xl lg:text-4xl leading-[1.15] font-semibold text-white tracking-tight text-balance mx-auto">
        Precision medicine, powered by <span class="italic font-serif text-coral-300">serious infrastructure.</span>
      </h2>
      <p class="mt-3.5 text-white/80 leading-relaxed text-[15px] sm:text-base max-w-2xl mx-auto">
        Every diagnostic, interventional, and life-support suite across our <?= $HOSPITAL['beds'] ?> facility is
        calibrated daily and audited annually to rigorous international clinical safety standards.
      </p>
    </div>

    <!-- Responsive Equipment Cards Grid (Clean, no CTA button inside cards) -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
      <?php foreach ($TECH as $i => $t):
        $specs = $TECH_SPECS_MAP[$t['name']] ?? ['badge' => 'Audited Suite', 'make' => 'Precision Infrastructure', 'model' => $t['tag']];
        ?>
            <article
              @click="openTechModal(<?= htmlspecialchars(json_encode($t), ENT_QUOTES) ?>)"
              x-show="activeCategory === 'All Suites' || (<?= htmlspecialchars(json_encode($TECH_SPECS_MAP[$t['name']]['category'] ?? 'Imaging & Diagnostics'), ENT_QUOTES) ?> === activeCategory)"
              x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3"
              x-transition:enter-end="opacity-100 translate-y-0"
              class="group relative rounded-3xl bg-white/10 backdrop-blur-md border border-white/20 overflow-hidden shadow-soft hover:shadow-glow hover:border-coral-400 hover:bg-white/15 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between cursor-pointer">

              <div>
                <!-- Image Container with Badges -->
                <div class="relative aspect-[16/10] overflow-hidden bg-brand-900">
                  <img src="<?= htmlspecialchars($t['img']) ?>" alt="<?= htmlspecialchars($t['name']) ?>"
                    onerror="this.src='assets/images/infra/operation-theatre.jpg'"
                    loading="lazy"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                  <div
                    class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-brand-950 via-brand-950/40 to-transparent">
                  </div>

                  <!-- Top right active chip -->
                  <span
                    class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-full bg-emerald-500/90 text-white text-[10px] font-bold uppercase tracking-wider backdrop-blur shadow-soft flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                    <?= htmlspecialchars($specs['badge']) ?>
                  </span>

                  <!-- Bottom caption inside image -->
                  <div class="absolute bottom-3 left-4 right-4 text-white">
                    <p class="text-[11px] text-coral-300 font-semibold uppercase tracking-wider truncate">
                      <?= htmlspecialchars($specs['model'] ?? $t['tag']) ?></p>
                  </div>
                </div>

                <!-- Content Body -->
                <div class="p-6">
                  <h3
                    class="font-display text-xl font-bold text-white leading-snug group-hover:text-coral-300 transition">
                    <?= htmlspecialchars($t['name']) ?>
                  </h3>
                  <p class="mt-2 text-xs text-white/75 leading-relaxed line-clamp-3">
                    <?= htmlspecialchars($t['desc']) ?>
                  </p>

                  <!-- Quick Spec Highlights -->
                  <div
                    class="mt-4 pt-3 border-t border-white/15 flex items-center gap-2 text-[11px] font-semibold text-coral-300 truncate">
                    <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-400 shrink-0"></i>
                    <span class="truncate">Mfg: <?= htmlspecialchars($specs['make'] ?? 'Verified Medical Suite') ?></span>
                  </div>
                </div>
              </div>

            </article>
      <?php endforeach; ?>
    </div>

    <!-- ==========================================
         INTERACTIVE TECHNICAL SPECIFICATION MODAL
    =========================================== -->
    <div x-show="selectedTech !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-brand-900/75 backdrop-blur-sm"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

      <div x-show="selectedTech !== null" @click.away="closeTechModal()"
        class="relative w-full max-w-3xl rounded-3xl bg-white p-7 lg:p-9 shadow-2xl ring-1 ring-brand-100 overflow-hidden"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100">

        <button type="button" @click="closeTechModal()"
          class="absolute top-6 right-6 w-10 h-10 rounded-full bg-mist text-ink/60 hover:text-ink hover:bg-brand-100 grid place-items-center transition">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <!-- Modal Header -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-5 pb-6 border-b border-brand-100">
          <div class="w-20 h-20 rounded-2xl overflow-hidden bg-mist shrink-0 ring-1 ring-brand-200 shadow-soft">
            <img :src="selectedTech?.img" :alt="selectedTech?.name"
              onerror="this.src='assets/images/infra/operation-theatre.jpg'"
              class="w-full h-full object-cover">
          </div>
          <div>
            <div class="flex items-center gap-2 mb-1">
              <span
                class="px-3 py-0.5 rounded-full bg-brand-50 text-brand-700 text-xs font-bold uppercase tracking-wider"
                x-text="selectedTech?.tag"></span>
              <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-[11px] font-bold"
                x-text="selectedTech?.badge"></span>
            </div>
            <h3 class="font-display text-2xl sm:text-3xl font-bold text-brand-900 leading-tight"
              x-text="selectedTech?.name"></h3>
            <p class="text-xs text-ink/60 font-medium mt-1" x-text="selectedTech?.model"></p>
          </div>
        </div>

        <!-- Technical Description & Make -->
        <div class="mt-6 space-y-4">
          <div class="p-4 rounded-2xl bg-mist/70 ring-1 ring-brand-100/80 text-sm text-ink/80 leading-relaxed"
            x-text="selectedTech?.desc"></div>

          <div
            class="flex items-center justify-between text-xs font-semibold text-brand-800 bg-brand-50 px-4 py-3 rounded-xl">
            <span class="flex items-center gap-2"><i data-lucide="award" class="w-4 h-4 text-brand-600"></i>
              Manufacturer Specification:</span>
            <span x-text="selectedTech?.make" class="text-brand-900 font-bold"></span>
          </div>
        </div>

        <!-- Capability & Precision Checklist -->
        <div class="mt-6">
          <h5 class="text-xs font-bold uppercase tracking-widest text-ink/45 mb-3">Core Precision &amp; Safety Protocol
            Highlights</h5>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
            <template
              x-for="(hl, idx) in (selectedTech?.highlights || ['Sub-second diagnostic acquisition', 'Daily NABL safety calibration', 'Strict low-dose radiation adherence', 'Instant emergency trauma reporting'])"
              :key="idx">
              <div
                class="flex items-start gap-2.5 p-3 rounded-xl bg-white border border-brand-200/80 text-xs font-medium text-brand-900">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                <span x-text="hl" class="leading-snug"></span>
              </div>
            </template>
          </div>
        </div>

        <!-- Modal Footer Actions -->
        <div
          class="mt-8 pt-6 border-t border-brand-200/60 flex flex-col sm:flex-row items-center justify-between gap-4">
          <div class="text-xs text-ink/60 flex items-center gap-1.5">
            <i data-lucide="clock" class="w-4 h-4 text-emerald-600"></i>
            <span>Emergency diagnostic &amp; OT suites active round-the-clock.</span>
          </div>

          <div class="flex items-center gap-3 w-full sm:w-auto">
            <a :href="`https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20want%20to%20enquire%20about%20${encodeURIComponent(selectedTech?.name || 'Diagnostic Scan')}`"
              target="_blank"
              class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-[#25D366] hover:bg-[#20bd5a] text-white text-xs font-bold tracking-wide shadow-soft transition">
              <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Desk
            </a>
            <a href="tel:<?= $HOSPITAL['emergency'] ?>" @click="closeTechModal()"
              class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider shadow-soft hover:shadow-glow transition">
              Call Helpline <i data-lucide="phone" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     6. RARE CASES & MEDICAL MIRACLES — Clinical Mastery Vault
============================================================ -->
<?php
// Enriched clinical case notes for detailed modal presentation
$CASE_FILE_DETAILS = [
  'Staged Excision of 7.5cm Skull Base Meningioma with Zero Neurological Deficit' => [
    'preop' => 'Patient presented with severe bilateral progressive visual loss (only light perception remaining in right eye) and severe cerebellar ataxia due to a 7.5cm vascular skull base tumor compressing the brainstem, optic apparatus, and lower cranial nerves.',
    'intraop' => 'Conducted a 9-hour staged micro-neurosurgical procedure utilizing the Zeiss OPMI Pentero high-definition neurosurgical microscope and Medtronic StealthStation surgical navigation. Continuous neuro-physiological monitoring (MEP/SSEP) ensured complete preservation of brainstem nuclei and facial/trigeminal nerve fibers.',
    'postop' => 'Extubated on table with immediate movement in all four limbs. Transferred from ICU to ward on post-op Day 3. Visual fields showed dramatic improvement by week 3 with 100% functional motor recovery.',
    'doctor_quote' => 'Skull base meningiomas of this magnitude require millimeter precision where even a fraction of a millimeter deviation can cause permanent brainstem infarction. Our multidisciplinary neuro-anesthesia and micro-neurosurgical protocol allowed complete excision with zero deficit.'
  ],
  'Survival & Thriving of 620-gram Extremely Low Birth Weight Preterm Baby' => [
    'preop' => 'Delivered via emergency C-section at just 25 weeks of gestation (normal is 37-40 weeks) weighing a fragile 620 grams (less than a loaf of bread). The neonate suffered from severe Respiratory Distress Syndrome (RDS grade 4), perinatal asphyxia, and immature organ systems.',
    'intraop' => 'Immediately intubated in the delivery room and transferred to the Level-3 NICU in a transport incubator. Administered early endotracheal surfactant replacement therapy and initiated High-Frequency Oscillatory Ventilation (HFOV) along with continuous arterial blood gas titration.',
    'postop' => 'Over 68 intensive days, the infant transitioned from HFOV to nasal CPAP, and finally to room air. Total Parenteral Nutrition (TPN) was meticulously managed to ensure optimal weight gain without liver metabolic strain. Serial cranial ultrasounds confirmed zero intraventricular hemorrhage.',
    'doctor_quote' => 'Saving a 620-gram baby requires a level of dedicated 1:1 neonatal nursing, sterile infection control protocols, and advanced respiratory infrastructure that represents the pinnacle of modern pediatric critical care.'
  ],
  'Bilateral Total Hip & Knee Replacement on 81-Year-Old Cardiac Patient' => [
    'preop' => 'Mrs. Bhagwani Devi, an 81-year-old severe stage-4 osteoarthritis patient, had been bedridden for 3 continuous years with debilitating hip and knee contractures. Surgery elsewhere was denied due to high cardiac risk stemming from previous myocardial infarction and low ejection fraction (38%).',
    'intraop' => 'Our cardiac anesthesia team utilized advanced invasive hemodynamic monitoring (FloTrac/Swan-Ganz) and ultrasound-guided combined spinal-epidural blocks to avoid general anesthesia myocardial depression. Minimally invasive arthroplasty was performed sequentially with sub-millimeter computer alignment.',
    'postop' => 'Transferred to the cardiac step-down unit overnight. Guided by our joint replacement physiotherapy protocol, the patient stood upright with walker support on Day 2 post-op and walked independently by week 5.',
    'doctor_quote' => 'High-risk geriatric surgery is never performed by a single surgeon—it is an institutional symphony between cardiology, critical care, and orthopedics that turns an "inoperable" cardiac patient into an independent walker.'
  ],
  'Emergency Stenting for Spontaneous Left Main Coronary Artery Dissection' => [
    'preop' => '44-year-old male collapsed in the ER with acute crushing chest pain, profuse sweating, and cardiogenic shock (BP 70/40 mmHg). Emergency 12-lead ECG showed massive anterolateral ST-elevation myocardial infarction (STEMI).',
    'intraop' => 'Rushed to the 24x7 Digital Cath Lab within 6 minutes of arrival. Coronary angiogram revealed a catastrophic spontaneous dissection of the Left Main Coronary Artery (LMCA) causing 95% flow obstruction—a condition with over 80% pre-hospital or ER mortality.',
    'postop' => 'Under Intravascular Ultrasound (IVUS) guidance, two drug-eluting stents were deployed with sub-millimeter accuracy, restoring TIMI-3 normal blood flow within 15 minutes of door-to-balloon time. Patient made a complete, uneventful recovery with normal LV systolic function.',
    'doctor_quote' => 'In Left Main coronary emergencies, time is brain and cardiac muscle. Having an on-campus, interventional cardiology team residing within minutes of our high-speed Cath Lab is the sole distinction between life and fatal cardiogenic shock.'
  ]
];
?>

<section id="rare-cases" class="relative py-18 lg:py-28 bg-gradient-to-br from-[#0b2949] via-[#071d36] to-[#04101e] text-white border-b border-white/10 overflow-hidden" x-data="{
           activeCase: 0,
           filterDept: 'ALL',
           viewMode: 'cards',
           selectedCaseModal: null,
           cases: <?= htmlspecialchars(json_encode($RARE_CASES), ENT_QUOTES) ?>,
           details: <?= htmlspecialchars(json_encode($CASE_FILE_DETAILS), ENT_QUOTES) ?>,
           get filteredCases() {
             if (this.filterDept === 'ALL') return this.cases;
             return this.cases.filter(c => c.dept.toLowerCase().includes(this.filterDept.toLowerCase()));
           },
           openCaseModal(c) {
             const ext = this.details[c.title] || {
               preop: c.challenge,
               intraop: c.treatment,
               postop: c.outcome,
               doctor_quote: 'At Sukhda Hospital, every high-risk surgical case undergoes rigorous peer review by our multidisciplinary clinical board to ensure maximum patient safety and functional recovery.'
             };
             this.selectedCaseModal = {
               ...c,
               preop: ext.preop,
               intraop: ext.intraop,
               postop: ext.postop,
               doctor_quote: ext.doctor_quote
             };
           },
           closeCaseModal() {
             this.selectedCaseModal = null;
           }
         }">

  <!-- Decorative background glows -->
  <div class="absolute top-0 right-0 w-[600px] h-[600px] rounded-full bg-brand-600/30 blur-3xl pointer-events-none">
  </div>
  <div class="absolute bottom-0 left-0 w-[600px] h-[600px] rounded-full bg-coral-500/20 blur-3xl pointer-events-none">
  </div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section Header Block (Centered & High-Impact) -->
    <div class="text-center max-w-4xl mx-auto pb-8">
      <div class="flex justify-center mb-4">
        <span
          class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-coral-500/15 ring-1 ring-coral-500/30 text-coral-300 text-xs font-bold uppercase tracking-[0.25em] shadow-soft">
          <i data-lucide="sparkles" class="w-3.5 h-3.5 text-coral-400"></i> Medical Miracles &amp; Clinical Triumphs
        </span>
      </div>
      <h2
        class="font-display text-2xl sm:text-3xl lg:text-4xl leading-[1.15] font-bold text-white tracking-tight text-balance mx-auto">
        Extraordinary recoveries, engineered by <span class="italic font-serif text-coral-300 font-normal">multidisciplinary
          mastery.</span>
      </h2>
      <p class="mt-4 text-white/75 leading-relaxed text-[15px] sm:text-lg max-w-2xl mx-auto">
        When anatomy poses unprecedented challenges and seconds determine survival, our specialized surgical teams
        combine sub-millimeter navigation with Level-3 critical care to rewrite patient outcomes.
      </p>
    </div>

    <!-- ==========================================
         ONE FEATURED RARE CASE (HERO DOSSIER)
    =========================================== -->
    <div class="mt-12">
      <template x-if="filteredCases.length === 0">
        <div
          class="p-12 rounded-[2.5rem] bg-white/[0.05] ring-1 ring-white/15 text-center text-white/70 backdrop-blur-xl">
          No medical case matches this specific department filter. Please select "All Cases
          (<?= count($RARE_CASES) ?>)".
        </div>
      </template>

      <template x-if="filteredCases.length > 0">
        <div x-data="{ get featured() { return filteredCases[activeCase] || filteredCases[0]; } }" :key="featured.title"
          x-transition:enter="transition ease-out duration-500"
          x-transition:enter-start="opacity-0 translate-y-6 scale-[0.99]"
          x-transition:enter-end="opacity-100 translate-y-0 scale-100"
          class="relative grid lg:grid-cols-12 gap-8 lg:gap-10 items-center bg-gradient-to-b from-white/[0.09] via-white/[0.04] to-brand-950/95 rounded-[2.5rem] p-6 sm:p-9 lg:p-11 ring-1 ring-coral-500/50 backdrop-blur-2xl shadow-2xl overflow-hidden">

          <!-- Ambient Glow inside Featured Hero -->
          <div class="absolute -right-32 -top-32 w-80 h-80 rounded-full bg-coral-500/20 blur-3xl pointer-events-none">
          </div>
          <!-- Left Visual Image Container -->
          <div class="lg:col-span-6 relative z-10">
            <div
              class="relative aspect-[16/10] sm:aspect-[16/9] rounded-[2rem] overflow-hidden ring-1 ring-white/20 shadow-glow group">
              <img :src="featured.img" :alt="featured.title" onerror="this.src='assets/images/infra/cath-lab.jpg'"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
              <div class="absolute inset-0 bg-gradient-to-t from-brand-950 via-brand-950/40 to-transparent"></div>

              <!-- Top Featured Chip -->
              <div class="absolute top-4 left-4 right-4 flex items-center justify-between gap-2">
                <span
                  class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-coral-500 text-white text-xs font-bold uppercase tracking-wider shadow-glow animate-pulse">
                  <i data-lucide="star" class="w-3 h-3 fill-white"></i> Featured Case
                </span>
                <span
                  class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-600/95 backdrop-blur text-white text-xs font-bold ring-1 ring-white/30 shadow-soft"
                  x-text="featured.dept"></span>
              </div>

              <!-- Patient Demographics bar at bottom of image -->
              <div class="absolute bottom-4 left-4 right-4 text-white">
                <p class="text-[10px] uppercase tracking-[0.2em] text-coral-300 font-bold">Patient Demographics</p>
                <h4 class="font-display text-lg sm:text-xl font-bold text-white mt-0.5" x-text="featured.patient"></h4>
              </div>
            </div>
          </div>

          <!-- Right Concise Highlight & Telemetry Column -->
          <div class="lg:col-span-6 flex flex-col justify-center space-y-6 relative z-10">
            <div>
              <span class="inline-block text-coral-400 text-xs font-bold tracking-widest uppercase mb-1"
                x-text="`Institutional Triumph — ${featured.badge}`"></span>
              <h3 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-white leading-tight"
                x-text="featured.title"></h3>
            </div>

            <!-- Single Concise Breakthrough Summary Box (Clean & Lightweight) -->
            <div class="p-5 rounded-2xl bg-white/[0.06] ring-1 ring-white/10 backdrop-blur-md">
              <p class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-1.5 flex items-center gap-1.5">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400"></i> Verified Medical Outcome
              </p>
              <p class="text-white/85 text-sm sm:text-base leading-relaxed line-clamp-3" x-text="featured.outcome"></p>
            </div>

            <!-- Lead Surgeon & Main CTA Button Footer -->
            <div class="pt-4 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
              <div class="flex items-center gap-3 min-w-0">
                <div
                  class="w-10 h-10 rounded-xl bg-coral-500/20 ring-1 ring-coral-500/40 grid place-items-center text-coral-400 font-bold shrink-0">
                  <i data-lucide="user-check" class="w-5 h-5"></i>
                </div>
                <div class="min-w-0">
                  <p class="text-[10px] uppercase tracking-wider text-white/50 font-semibold">Lead Surgeon</p>
                  <p class="font-bold text-white text-sm truncate" x-text="featured.doctor"></p>
                </div>
              </div>

              <!-- Main CTA Button -->
              <button type="button" @click="openCaseModal(featured)"
                class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-coral-500 to-coral-600 hover:from-coral-600 hover:to-coral-700 text-white text-xs sm:text-sm font-bold uppercase tracking-wider shadow-glow hover:scale-105 transition-all shrink-0">
                <span>View Full Case Dossier</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </button>
            </div>
          </div>

        </div>
      </template>
    </div>


    <!-- ==========================================
         REST OF THE RARE CASES BELOW THAT (WITH CTA BUTTONS)
    =========================================== -->
    <template x-if="filteredCases.length > 1">
      <div class="mt-12 pt-8 border-t border-white/15">
        <!-- Supporting Section Title -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
          <div class="flex items-center gap-2.5">
            <span class="w-2.5 h-2.5 rounded-full bg-coral-400 animate-pulse shrink-0"></span>
            <h4 class="font-display text-xl sm:text-2xl font-bold text-white tracking-tight">More Clinical Triumphs</h4>
          </div>
          <p class="text-xs text-white/60 font-semibold">Click any case below to feature or view full file</p>
        </div>

        <!-- Supporting Cases Grid (3-4 cases below) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6">
          <template x-for="(rc, idx) in filteredCases" :key="rc.title">
            <article x-show="idx !== (activeCase || 0)"
              class="group relative rounded-3xl bg-white/[0.05] hover:bg-white/[0.08] p-5 ring-1 ring-white/10 hover:ring-coral-500/60 shadow-xl backdrop-blur-md flex flex-col justify-between transition duration-300 hover:-translate-y-1 overflow-hidden">

              <!-- Card Top Content -->
              <div>
                <!-- Image Container (Clicking image elevates case to Featured) -->
                <div @click="activeCase = idx; $el.scrollIntoView({behavior: 'smooth', block: 'center'})"
                  class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-brand-950 ring-1 ring-white/15 shadow-soft mb-4 cursor-pointer group/img">
                  <img :src="rc.img" :alt="rc.title" onerror="this.src='assets/images/infra/cath-lab.jpg'"
                    class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500">
                  <div class="absolute inset-0 bg-gradient-to-t from-brand-950/90 via-transparent to-transparent"></div>
                </div>

                <!-- Title & Brief Outcome -->
                <h5 @click="activeCase = idx; $el.scrollIntoView({behavior: 'smooth', block: 'center'})"
                  class="font-display text-base sm:text-lg font-bold text-white group-hover:text-coral-300 transition-colors line-clamp-2 cursor-pointer leading-snug"
                  x-text="rc.title"></h5>
                <p class="mt-2 text-xs text-white/70 line-clamp-2 leading-relaxed" x-text="rc.outcome"></p>
              </div>

              <!-- Compact Footer with Lead Surgeon & CTA Button -->
              <div class="pt-3.5 mt-4 border-t border-white/10 flex items-center justify-between gap-3">
                <span class="text-[11px] text-white/50 truncate font-medium" x-text="rc.doctor"></span>
                <button type="button" @click="openCaseModal(rc)"
                  class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-coral-500 hover:bg-coral-600 text-white text-[11px] font-bold shadow-soft transition shrink-0">
                  <span>View Dossier</span>
                  <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </button>
              </div>

            </article>
          </template>
        </div>
      </div>
    </template>


    <!-- ==========================================
         COMPLETE MEDICAL CASE FILE MODAL
    =========================================== -->
    <div x-show="selectedCaseModal !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-brand-950/85 backdrop-blur-md overflow-y-auto"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

      <div x-show="selectedCaseModal !== null" @click.away="closeCaseModal()"
        class="relative w-full max-w-4xl rounded-[2.5rem] bg-brand-900 text-white p-7 sm:p-10 lg:p-12 shadow-2xl ring-1 ring-white/20 my-8 overflow-hidden"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0">

        <!-- Close Button -->
        <button type="button" @click="closeCaseModal()"
          class="absolute top-6 right-6 w-11 h-11 rounded-full bg-white/10 hover:bg-coral-500 text-white grid place-items-center transition z-10 shadow-soft">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <!-- Modal Header -->
        <div class="pb-6 border-b border-white/15 space-y-3">
          <div class="flex flex-wrap items-center gap-2">
            <span
              class="px-3.5 py-1 rounded-full bg-coral-500/20 ring-1 ring-coral-500/40 text-coral-300 text-xs font-bold uppercase tracking-wider"
              x-text="selectedCaseModal?.badge"></span>
            <span class="px-3.5 py-1 rounded-full bg-white/10 text-white/80 text-xs font-semibold"
              x-text="selectedCaseModal?.dept"></span>
            <span class="text-xs text-white/60 font-medium" x-text="`Patient: ${selectedCaseModal?.patient}`"></span>
          </div>
          <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-white leading-tight"
            x-text="selectedCaseModal?.title"></h2>
        </div>

        <!-- Telemetry Stats row -->
        <div class="my-6 grid grid-cols-3 gap-4">
          <template x-for="(val, label) in selectedCaseModal?.stats" :key="label">
            <div class="p-4 rounded-2xl bg-white/5 ring-1 ring-white/15 text-center">
              <div class="font-display text-xl font-bold text-coral-400" x-text="val"></div>
              <div class="text-[11px] uppercase tracking-wider text-white/60 mt-0.5 font-semibold" x-text="label"></div>
            </div>
          </template>
        </div>

        <!-- Detailed Clinical Documentation -->
        <div class="space-y-6 text-sm sm:text-base leading-relaxed">
          <!-- Pre-operative Presentation -->
          <div class="p-5 rounded-2xl bg-white/5 ring-1 ring-white/10 space-y-1.5">
            <h5 class="text-xs font-bold uppercase tracking-widest text-coral-300 flex items-center gap-2">
              <i data-lucide="clipboard-list" class="w-4 h-4 text-coral-400"></i> 1. Pre-Operative Diagnosis &amp;
              Clinical Presentation
            </h5>
            <p class="text-white/85" x-text="selectedCaseModal?.preop"></p>
          </div>

          <!-- Intraoperative & Surgical Technique -->
          <div class="p-5 rounded-2xl bg-white/5 ring-1 ring-white/10 space-y-1.5">
            <h5 class="text-xs font-bold uppercase tracking-widest text-brand-300 flex items-center gap-2">
              <i data-lucide="cpu" class="w-4 h-4 text-brand-300"></i> 2. Intraoperative Navigation &amp; Critical Care
              Protocol
            </h5>
            <p class="text-white/85" x-text="selectedCaseModal?.intraop"></p>
          </div>

          <!-- Post-operative Recovery & Outcome -->
          <div class="p-5 rounded-2xl bg-emerald-950/60 ring-1 ring-emerald-500/40 space-y-1.5">
            <h5 class="text-xs font-bold uppercase tracking-widest text-emerald-400 flex items-center gap-2">
              <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i> 3. Post-Operative Recovery &amp;
              Functional Milestone
            </h5>
            <p class="text-white font-medium" x-text="selectedCaseModal?.postop"></p>
          </div>

          <!-- Lead Surgeon Testimony Quote -->
          <div
            class="p-5 rounded-2xl bg-gradient-to-r from-coral-950/40 via-brand-950/40 to-transparent ring-1 ring-coral-500/30 flex items-start gap-4">
            <span class="text-3xl text-coral-400 font-serif shrink-0">“</span>
            <div class="space-y-2">
              <p class="text-sm italic text-white/90 font-light" x-text="selectedCaseModal?.doctor_quote"></p>
              <p class="text-xs font-bold text-coral-300 uppercase tracking-wider"
                x-text="`— ${selectedCaseModal?.doctor}, Sukhda Hospital`"></p>
            </div>
          </div>
        </div>

        <!-- Modal Footer Actions -->
        <div class="mt-8 pt-6 border-t border-white/15 flex flex-col sm:flex-row items-center justify-between gap-4">
          <span class="text-xs text-white/60">Do you have a complex medical case requiring multidisciplinary board
            review?</span>
          <div class="flex items-center gap-3 w-full sm:w-auto">
            <a :href="`https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20reviewed%20the%20case%20study%20'${encodeURIComponent(selectedCaseModal?.title || 'Rare Case')}'%20and%20want%20to%20consult%20the%20Surgical%20Tumor%20Board.`"
              target="_blank"
              class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-[#25D366] hover:bg-[#20bd5a] text-white text-xs font-bold tracking-wide shadow-soft transition">
              <i data-lucide="message-circle" class="w-4 h-4"></i> Consult Surgical Board
            </a>
            <button type="button" @click="closeCaseModal()"
              class="flex-1 sm:flex-initial px-6 py-3.5 rounded-xl bg-white/15 hover:bg-white/25 text-white text-xs font-bold uppercase tracking-wider transition">
              Close File
            </button>
          </div>
        </div>

      </div>
    </div>


    <!-- ==========================================
         COMPLEX CASE & TUMOR BOARD CONSULTATION BANNER
    =========================================== -->
    <div id="miracle-consult"
      class="mt-16 rounded-[2.5rem] bg-gradient-to-r from-coral-600 via-coral-500 to-brand-600 text-white p-8 lg:p-12 shadow-2xl relative overflow-hidden">
      <!-- Decorative background glow -->
      <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-white/20 blur-2xl pointer-events-none"></div>

      <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <!-- Left Banner Narrative -->
        <div class="lg:col-span-7 space-y-3">
          <div
            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/15 text-white text-[11px] font-bold uppercase tracking-widest">
            <i data-lucide="shield-alert" class="w-3.5 h-3.5 text-white"></i> High-Risk Surgical Referral Desk
          </div>
          <h3 class="font-display text-2xl sm:text-3xl lg:text-4xl font-semibold text-white leading-tight">
            Told your surgery is too high-risk or inoperable?
          </h3>
          <p class="text-white/90 text-sm sm:text-base leading-relaxed">
            Our Multidisciplinary Surgical &amp; Tumor Board (Neurosurgery, Interventional Cardiology, Oncology, and
            Level-3 Critical Care) convenes every Wednesday to review complex, high-risk referrals and formulate safe
            surgical pathways.
          </p>
        </div>

        <!-- Right Action Triggers -->
        <div class="lg:col-span-5 flex flex-col sm:flex-row items-center justify-center lg:justify-end gap-3 flex-wrap">
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20want%20to%20submit%20my%20medical%20scans%20for%20the%20Multidisciplinary%20Surgical%20Board%20review."
            target="_blank"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-md bg-brand-900 hover:bg-brand-950 text-white text-xs sm:text-sm font-bold shadow-2xl transition whitespace-nowrap">
            <i data-lucide="upload-cloud" class="w-4 h-4 text-coral-400 shrink-0"></i> Submit Case
          </a>
          <a href="#search"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-md bg-white/20 hover:bg-white/30 ring-1 ring-white/40 text-white text-xs sm:text-sm font-bold backdrop-blur transition whitespace-nowrap">
            <i data-lucide="phone-call" class="w-4 h-4 shrink-0"></i> Speak to Coordinator
          </a>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     7. VIDEO TESTIMONIALS — Real Patients, Real Stories Carousel
============================================================ -->
<section id="testimonials" class="relative py-18 lg:py-28 bg-gradient-to-br from-[#e2f5ee] via-[#ebf8f3] to-[#f2fbf8] text-brand-950 border-b border-emerald-200/50 overflow-hidden">
  <!-- Soft Ambient Glows -->
  <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[350px] rounded-full bg-brand-100/60 blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-32 right-10 w-[500px] h-[350px] rounded-full bg-coral-100/50 blur-3xl pointer-events-none"></div>

  <script>
    window.sukhdaTestimonials = <?= json_encode($TESTIMONIALS, JSON_HEX_TAG) ?>;
  </script>
  <div class="relative max-w-7xl mx-auto px-6 lg:px-8" x-data="{
         activeVideoModal: null,
         testimonials: window.sukhdaTestimonials,
         next() {
           const slider = this.$refs.slider;
           if (!slider) return;
           const cards = slider.querySelectorAll('article');
           if (cards.length < 2) return;
           const step = (cards[1].getBoundingClientRect().left - cards[0].getBoundingClientRect().left) || (cards[0].offsetWidth + 28);
           if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 15) {
             slider.scrollTo({ left: 0, behavior: 'smooth' });
           } else {
             slider.scrollBy({ left: step, behavior: 'smooth' });
           }
         },
         prev() {
           const slider = this.$refs.slider;
           if (!slider) return;
           const cards = slider.querySelectorAll('article');
           if (cards.length < 2) return;
           const step = (cards[1].getBoundingClientRect().left - cards[0].getBoundingClientRect().left) || (cards[0].offsetWidth + 28);
           if (slider.scrollLeft <= 15) {
             slider.scrollTo({ left: slider.scrollWidth, behavior: 'smooth' });
           } else {
             slider.scrollBy({ left: -step, behavior: 'smooth' });
           }
         }
       }">

    <!-- Section Header (Matched to Standard Site Section Heading Design) -->
    <div class="text-center max-w-3xl mx-auto pb-10 border-b border-brand-200/60 mb-10 lg:mb-14">
      <div class="flex justify-center mb-3.5">
        <span
          class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-brand-50 border border-brand-200 text-brand-700 text-[11px] font-bold uppercase tracking-[0.25em] shadow-soft">
          <i data-lucide="heart-handshake" class="w-3.5 h-3.5 text-brand-600"></i> Patient Voices &amp; Testimonials
        </span>
      </div>
      <h2
        class="font-display text-2xl sm:text-3xl lg:text-4xl leading-[1.15] font-semibold text-ink tracking-tight text-balance mx-auto">
        Real patients, <span class="italic font-serif text-emerald-800">real recovery stories.</span>
      </h2>
      <p class="mt-3.5 text-ink/70 leading-relaxed text-[15px] sm:text-base max-w-2xl mx-auto">
        Hear directly from our patients and their families about their transformational healthcare journeys and clinical outcomes at Sukhda.
      </p>
    </div>

    <!-- 3-Card Carousel Track with Side Floating Navigation Arrows -->
    <div class="relative max-w-6xl mx-auto px-2 sm:px-6">
      
      <!-- Left Navigation Arrow Button -->
      <button type="button" @click="prev()" aria-label="Previous Testimonial"
        class="absolute -left-3 sm:-left-6 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-14 sm:h-14 rounded-full bg-white text-brand-950 shadow-2xl ring-1 ring-black/10 flex items-center justify-center hover:bg-coral-500 hover:text-white transition duration-300 hover:scale-110 focus:outline-none cursor-pointer">
        <i data-lucide="chevron-left" class="w-6 h-6 stroke-[2.5]"></i>
      </button>

      <!-- Horizontal Sliding Track -->
      <div x-ref="slider"
        class="flex gap-6 lg:gap-7 overflow-x-auto pb-4 items-stretch [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
        <template x-for="(t, idx) in testimonials" :key="t.name">
          <article @click="activeVideoModal = t"
            class="snap-start shrink-0 w-[85vw] sm:w-[340px] md:w-[calc(50%-0.8rem)] lg:w-[calc(33.3333%-1.1rem)] group relative rounded-[2rem] overflow-hidden bg-brand-950 ring-1 ring-black/10 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-1.5 cursor-pointer h-[380px] sm:h-[420px] flex flex-col justify-end">
            
            <!-- Full Height Background Poster -->
            <img :src="t.poster" :alt="t.name" loading="lazy" onerror="this.src='assets/images/infra/icu.jpg'"
              class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-90">
            
            <!-- Frosted Dark Bottom Vignette Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-brand-950 via-brand-950/65 to-transparent"></div>

            <!-- Center Frosted Circular Play Button Overlay (Pure SVG ensures 100% visibility always) -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
              <div
                class="w-16 h-16 sm:w-18 sm:h-18 rounded-full bg-white/85 backdrop-blur-md grid place-items-center shadow-2xl group-hover:scale-110 group-hover:bg-coral-500 group-hover:text-white transition duration-300 text-brand-800 ring-4 ring-white/30">
                <svg class="w-7 h-7 sm:w-8 sm:h-8 fill-current ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
              </div>
            </div>

          </article>
        </template>
      </div>

      <!-- Right Navigation Arrow Button -->
      <button type="button" @click="next()" aria-label="Next Testimonial"
        class="absolute -right-3 sm:-right-6 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-14 sm:h-14 rounded-full bg-white text-brand-950 shadow-2xl ring-1 ring-black/10 flex items-center justify-center hover:bg-coral-500 hover:text-white transition duration-300 hover:scale-110 focus:outline-none cursor-pointer">
        <i data-lucide="chevron-right" class="w-6 h-6 stroke-[2.5]"></i>
      </button>

    </div>

    <!-- Bottom Center Orange CTA Pill Button -->
    <div class="mt-12 lg:mt-14 text-center">
      <button type="button" @click="activeVideoModal = testimonials[0]"
        class="inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-full bg-coral-500 hover:bg-coral-600 text-white font-bold text-sm tracking-wide shadow-glow hover:scale-105 transition-all duration-300">
        <span>View All Testimonials</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </button>
    </div>


    <!-- ==========================================
         CINEMATIC VIDEO PLAYER MODAL
    =========================================== -->
    <div x-show="activeVideoModal !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-brand-950/90 backdrop-blur-md overflow-y-auto"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

      <div x-show="activeVideoModal !== null" @click.away="activeVideoModal = null"
        class="relative w-full max-w-4xl rounded-[2.5rem] bg-brand-900 text-white p-6 sm:p-9 shadow-2xl ring-1 ring-white/20 my-8 overflow-hidden"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-6 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100">

        <!-- Close Modal Button -->
        <button type="button" @click="activeVideoModal = null"
          class="absolute top-5 right-5 z-20 w-11 h-11 rounded-full bg-white/10 hover:bg-coral-500 text-white grid place-items-center transition shadow-soft">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <!-- Video Player Iframe -->
        <div class="relative aspect-[16/9] w-full rounded-2xl overflow-hidden bg-black shadow-2xl ring-1 ring-white/10 mb-6">
          <template x-if="activeVideoModal !== null">
            <iframe class="absolute inset-0 w-full h-full border-0"
              :src="`https://www.youtube.com/embed/${activeVideoModal?.youtube}?rel=0&modestbranding=1&playsinline=1&autoplay=1`"
              title="Patient video testimonial" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </template>
        </div>

        <!-- Video Details Below Player -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          <div>
            <span class="px-3 py-1 rounded-full bg-coral-500/20 text-coral-300 ring-1 ring-coral-500/40 text-xs font-bold uppercase tracking-wider"
              x-text="activeVideoModal?.category + ' Care'"></span>
            <h3 class="font-display text-2xl font-bold text-white mt-2"
              x-text="`${activeVideoModal?.condition} — ${activeVideoModal?.name}`"></h3>
            <p class="text-sm text-white/70 mt-1 italic" x-text="`&ldquo;${activeVideoModal?.quote}&rdquo;`"></p>
          </div>
          <div class="bg-white/10 px-4 py-2.5 rounded-xl text-xs text-white/90 shrink-0 self-start sm:self-center ring-1 ring-white/15">
            <p class="font-bold text-coral-300" x-text="`Dr. ${activeVideoModal?.doctor.replace(/^Dr\.\s*/i, '')}`"></p>
            <p class="text-white/60 text-[11px]">Lead Treating Specialist</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     8. UPCOMING EVENTS & HEALTH CAMPS — interactive calendar & registration
============================================================ -->
<section id="events" class="relative py-16 lg:py-26 bg-gradient-to-b from-[#fbf7f0] via-[#fffdfa] to-[#f5f0e8] border-b border-coral-200/50 overflow-hidden">
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
           }, 3500);
         }
       }">

    <!-- Section Header -->
    <div class="grid lg:grid-cols-12 gap-6 items-end mb-12">
      <div class="lg:col-span-7">
        <p class="text-brand-500 text-[11px] uppercase tracking-[0.3em] font-semibold flex items-center gap-1.5">
          <i data-lucide="calendar" class="w-3.5 h-3.5"></i> Community Care &amp; Academics
        </p>
        <h2
          class="mt-3 font-display text-2xl sm:text-3xl lg:text-4xl leading-tight font-semibold text-ink tracking-tight text-balance">
          Upcoming <span class="italic font-serif text-coral-600">Events, Health Camps</span> &amp; Workshops.
        </h2>
      </div>
      <div class="lg:col-span-5 flex items-end justify-between lg:justify-end gap-5">
        <p class="text-ink/65 leading-relaxed text-[15px] lg:text-right max-w-sm">
          Join our complimentary health screening drives or medical symposiums. Register online to secure priority OPD
          consultation slots.
        </p>
      </div>
    </div>

    <!-- Events Grid (2x2 on desktop) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
      <?php foreach ($EVENTS as $ev): ?>
            <article
              class="group relative rounded-3xl bg-mist p-6 lg:p-8 border border-brand-100 hover:border-brand-400 hover:shadow-glow transition-all duration-300 flex flex-col justify-between">
              <div>
                <!-- Top strip: status chip & date badge -->
                <div class="flex items-start justify-between gap-4 mb-5">
                  <div class="flex items-center gap-2">
                    <span
                      class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider <?= htmlspecialchars($ev['status_color']) ?> shadow-soft">
                      <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                      <?= htmlspecialchars($ev['status']) ?>
                    </span>
                    <span
                      class="px-3 py-1 rounded-full bg-white border border-brand-200 text-brand-800 text-xs font-bold uppercase tracking-wider">
                      <?= htmlspecialchars($ev['category']) ?>
                    </span>
                  </div>
                  <span
                    class="w-12 h-12 rounded-2xl bg-white grid place-items-center text-brand-600 shadow-soft group-hover:bg-brand-600 group-hover:text-white transition">
                    <i data-lucide="<?= htmlspecialchars($ev['icon']) ?>" class="w-6 h-6"></i>
                  </span>
                </div>

                <!-- Title -->
                <h3
                  class="font-display text-2xl font-semibold text-brand-900 leading-snug group-hover:text-coral-600 transition">
                  <?= htmlspecialchars($ev['title']) ?>
                </h3>

                <!-- Description -->
                <p class="mt-3 text-sm lg:text-[15px] text-ink/70 leading-relaxed">
                  <?= htmlspecialchars($ev['desc']) ?>
                </p>
              </div>

              <!-- Bottom strip: date, location & RSVP button -->
              <div
                class="mt-8 pt-5 border-t border-brand-200/60 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div class="space-y-1 text-xs text-ink/80">
                  <div class="flex items-center gap-2 font-semibold text-brand-800">
                    <i data-lucide="clock" class="w-4 h-4 text-brand-500"></i>
                    <?= htmlspecialchars($ev['date']) ?> · <?= htmlspecialchars($ev['time']) ?>
                  </div>
                  <div class="flex items-center gap-2 text-ink/65">
                    <i data-lucide="map-pin" class="w-4 h-4 text-coral-500"></i>
                    <?= htmlspecialchars($ev['location']) ?>
                  </div>
                </div>

                <button type="button"
                  @click="openRegistration('<?= htmlspecialchars(addslashes($ev['title'])) ?>', '<?= htmlspecialchars(addslashes($ev['category'])) ?>')"
                  class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-md bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider shadow-soft hover:shadow-glow transition shrink-0">
                  Register / RSVP
                  <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </button>
              </div>
            </article>
      <?php endforeach; ?>
    </div>

    <!-- Registration Interactive Modal -->
    <div x-show="openModal" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-brand-900/70 backdrop-blur-sm"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
      <div class="relative w-full max-w-lg rounded-3xl bg-white p-8 shadow-2xl ring-1 ring-brand-100 overflow-hidden"
        @click.away="openModal = false">

        <button type="button" @click="openModal = false"
          class="absolute top-6 right-6 w-9 h-9 rounded-full bg-mist text-ink/60 hover:text-ink hover:bg-brand-100 grid place-items-center transition">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <div x-show="!registered">
          <span
            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold uppercase tracking-wider mb-3">
            <i data-lucide="calendar-check" class="w-3.5 h-3.5"></i> Fast-Track Registration
          </span>
          <h3 class="font-display text-2xl font-semibold text-brand-900 leading-snug">
            Reserve Your Priority Slot
          </h3>
          <p class="mt-1 text-sm text-ink/65">
            Event: <strong class="text-brand-800" x-text="selectedEvent"></strong>
          </p>

          <form @submit.prevent="submitRegistration()" class="mt-6 space-y-4">
            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-ink/70 mb-1.5">Patient / Attendee Name
                *</label>
              <input type="text" x-model="regName" required placeholder="Enter full name"
                class="w-full h-12 px-4 rounded-xl border border-brand-200 bg-mist/50 focus:bg-white focus:border-brand-500 focus:ring-2 focus:ring-brand-200 outline-none text-sm font-medium transition">
            </div>

            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-ink/70 mb-1.5">Mobile Number (WhatsApp
                enabled) *</label>
              <input type="tel" x-model="regPhone" required placeholder="e.g. +91 98765 43210"
                class="w-full h-12 px-4 rounded-xl border border-brand-200 bg-mist/50 focus:bg-white focus:border-brand-500 focus:ring-2 focus:ring-brand-200 outline-none text-sm font-medium transition">
            </div>

            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-ink/70 mb-1.5">Specialty / Interest
                Area</label>
              <select x-model="regSpecialty"
                class="w-full h-12 px-4 rounded-xl border border-brand-200 bg-mist/50 focus:bg-white focus:border-brand-500 outline-none text-sm font-medium transition cursor-pointer">
                <option>Cardiology &amp; Heart Care</option>
                <option>Orthopaedics &amp; Joint Pain</option>
                <option>Maternity &amp; Women Wellness</option>
                <option>General Checkup / Symposium</option>
              </select>
            </div>

            <div class="pt-2">
              <button type="submit"
                class="w-full h-12 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-soft hover:shadow-glow transition flex items-center justify-center gap-2">
                Confirm Registration Slot <i data-lucide="check-circle" class="w-4 h-4"></i>
              </button>
            </div>
            <p class="text-center text-[11px] text-ink/50">
              Free consultation coupon will be sent via SMS/WhatsApp within 15 minutes.
            </p>
          </form>
        </div>

        <!-- Success confirmation state inside modal -->
        <div x-show="registered" x-cloak class="py-8 text-center space-y-4">
          <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 mx-auto grid place-items-center">
            <i data-lucide="check-circle-2" class="w-10 h-10 animate-bounce"></i>
          </div>
          <h3 class="font-display text-2xl font-bold text-brand-900">Registration Confirmed!</h3>
          <p class="text-sm text-ink/70 max-w-sm mx-auto">
            Thank you, <strong x-text="regName"></strong>. Your seat for <strong x-text="selectedEvent"></strong> has
            been reserved. Our OPD desk will call <strong x-text="regPhone"></strong> shortly with your Token Number.
          </p>
          <div class="pt-4">
            <span class="inline-block px-4 py-2 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold">
              Status: Priority Pass Issued
            </span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>







<!-- ============================================================
     5. BLOGS & SECOND OPINIONS — Medical Journal Hub (No filter tabs)
============================================================ -->
<?php
// Enriched article content snippets for interactive reader modal
$ARTICLE_CONTENTS = [
  'The 7 silent signs of a heart attack you should never ignore' => [
    'subtitle' => 'Recognizing atypical coronary symptoms before acute myocardial infarction strikes.',
    'takeaway' => 'Over 45% of heart attacks present with subtle symptoms like jaw pain, upper back ache, or sudden unexplained indigestion up to 48 hours before classic chest pain.',
    'body' => [
      'While movies depict heart attacks as sudden, crushing chest pain where a person collapses to the floor, acute coronary syndromes in clinical practice are often much quieter—and therefore more dangerous.',
      'Common early warning signs include: (1) Unexplained jaw, neck, or left shoulder stiffness that comes and goes; (2) Sudden cold sweating or clamminess during rest; (3) Epigastric discomfort that mimics acid reflux or heartburn; and (4) Unusual shortness of breath after minor exertion.',
      'If you or a senior family member experiences these symptoms lasting more than 15 minutes, never wait to see if it goes away. Our 24x7 Digital Cath Lab at Sukhda offers rapid ECG and high-sensitivity Troponin-I screening within 15 minutes of emergency arrival.'
    ]
  ],
  'Knee replacement at 60+ : What modern surgery looks like today' => [
    'subtitle' => 'How minimally invasive arthroplasty and early mobility protocols get patients walking in 24 hours.',
    'takeaway' => 'Modern joint replacement utilizes sub-millimeter computer alignment, allowing patients to stand and walk with support on the very next day of surgery.',
    'body' => [
      'For decades, severe osteoarthritis of the knee meant accepting a life of immobility and chronic pain, or fearing a prolonged, painful hospital recovery after surgery. Today, joint replacement has been completely revolutionized.',
      'Using sub-millimeter precise surgical alignment inside our Class 10,000 HEPA-filtered laminar flow operation suites, bone preservation is maximized while ligament balance is naturally restored. Coupled with modern regional nerve blocks and epidural pain protocols, post-operative pain is minimal.',
      'Most patients at Sukhda stand with walker support within 24 hours post-op, begin stair climbing by day 4, and return to independent, pain-free walking within 4 to 6 weeks.'
    ]
  ],
  'A parent\'s guide to fever in newborns — when to rush to NICU' => [
    'subtitle' => 'Key red flags every new parent must watch for in infants under 90 days old.',
    'takeaway' => 'A rectal temperature over 100.4°F (38°C) in any baby under 3 months old is always a medical emergency requiring immediate neonatal evaluation.',
    'body' => [
      'Fever in older children is a natural immune response, but in newborns and infants under 3 months (90 days) of age, their immune system is still immature. This means a fever can be the only outward sign of a serious bacterial infection.',
      'Immediate red flags requiring urgent NICU triage include: (1) Temperature exceeding 100.4°F or dropping below 96.8°F; (2) Refusal to feed for more than two consecutive feedings; (3) Lethargy, limpness, or difficulty waking up; and (4) Rapid, grunting breathing or flaring nostrils.',
      'Our Level-3 Neonatal Intensive Care Unit (NICU) at Sukhda is staffed 24x7 by specialized neonatologists and pediatric critical care nurses to provide immediate, life-saving evaluation.'
    ]
  ]
];
?>

<section id="blogs" class="relative py-18 lg:py-28 bg-gradient-to-br from-[#eff5fd] via-[#f7f9ff] to-[#e8f1fb] border-b border-brand-200/70 overflow-hidden" x-data="{
           selectedArticle: null,
           openArticleModal(b) {
             const details = <?= htmlspecialchars(json_encode($ARTICLE_CONTENTS), ENT_QUOTES) ?>[b.title] || {
               subtitle: 'Clinical perspectives and evidence-based guidance from Sukhda Hospital.',
               takeaway: 'Regular health screenings and early clinical evaluation are the cornerstones of preventive family medicine.',
               body: [
                 b.title + ' represents a vital topic in modern clinical practice. Understanding early symptoms and evidence-based protocols allows patients and families to make informed medical decisions.',
                 'Our specialist consultants at Sukhda Hospital combine decades of institutional experience with advanced diagnostic tools to ensure accurate diagnosis and personalized treatment plans.',
                 'If you have questions regarding this condition or wish to seek a second opinion on your current medical reports, our senior clinical team is available for comprehensive consultations.'
               ]
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

  <!-- Decorative subtle gradients -->
  <div
    class="absolute -top-40 -left-40 w-[450px] h-[450px] rounded-full bg-brand-100/70 blur-3xl opacity-60 pointer-events-none">
  </div>
  <div
    class="absolute -bottom-40 -right-40 w-[450px] h-[450px] rounded-full bg-coral-100/60 blur-3xl opacity-50 pointer-events-none">
  </div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section Header Block -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-10 border-b border-brand-200/60">
      <div class="max-w-3xl">
        <span
          class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-50 border border-brand-200 text-brand-700 text-[11px] font-bold uppercase tracking-[0.25em] shadow-soft mb-3">
          <i data-lucide="book-open" class="w-3.5 h-3.5 text-brand-600"></i> Health Journal &amp; Clinical Insights
        </span>
        <h2
          class="font-display text-2xl sm:text-3xl lg:text-4xl leading-[1.15] font-semibold text-ink tracking-tight text-balance">
          Stories, science and <span class="italic font-serif text-brand-600">second opinions.</span>
        </h2>
        <p class="mt-3.5 text-ink/70 leading-relaxed text-[15px] max-w-2xl">
          Peer-reviewed medical articles, early warning symptom guides, and ethical second opinion reviews directly from
          the senior departmental directors at Sukhda Hospital.
        </p>
      </div>

      <!-- Quick Action link to Second Opinion section below -->
      <div class="shrink-0">
        <a href="#second-opinion-desk"
          class="inline-flex items-center gap-2 px-6 py-3.5 rounded-2xl bg-white border border-brand-200 text-brand-800 hover:border-brand-600 text-xs font-bold uppercase tracking-wider shadow-soft hover:shadow-glow transition">
          <i data-lucide="file-check-2" class="w-4 h-4 text-coral-500"></i> Request Second Opinion ↓
        </a>
      </div>
    </div>


    <!-- ==========================================
         EDITORIAL ARTICLES GRID (EXACTLY 3 ARTICLES)
    =========================================== -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
      <?php for ($i = 0; $i < min(3, count($BLOGS)); $i++):
        $b = $BLOGS[$i]; ?>
            <article
              class="group relative rounded-3xl bg-white ring-1 ring-brand-200/80 overflow-hidden shadow-soft hover:shadow-glow hover:ring-brand-400 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">

              <div class="cursor-pointer" @click="openArticleModal(<?= htmlspecialchars(json_encode($b), ENT_QUOTES) ?>)">
                <!-- Image Header -->
                <div class="relative aspect-[16/10] overflow-hidden bg-mist">
                  <img src="<?= htmlspecialchars($b['img']) ?>" alt="<?= htmlspecialchars($b['title']) ?>" loading="lazy"
                    onerror="this.src='assets/images/infra/pathology-lab.jpg'"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                  <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-brand-900/40 to-transparent"></div>

                  <!-- Category badge -->
                  <span
                    class="absolute top-3.5 left-3.5 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur ring-1 ring-white shadow-soft text-[10px] uppercase tracking-widest font-bold text-brand-800">
                    <?= htmlspecialchars($b['cat']) ?>
                  </span>

                  <!-- Reading time -->
                  <span class="absolute bottom-3 right-3.5 text-white text-[11px] font-semibold drop-shadow">
                    <?= htmlspecialchars($b['read']) ?>
                  </span>
                </div>

                <!-- Body -->
                <div class="p-6">
                  <div class="text-[11px] uppercase tracking-widest text-ink/45 font-semibold mb-2">
                    <?= htmlspecialchars($b['date']) ?>
                  </div>
                  <h3
                    class="font-display text-lg font-bold text-brand-900 leading-snug group-hover:text-coral-600 transition line-clamp-2">
                    <?= htmlspecialchars($b['title']) ?>
                  </h3>
                  <p class="mt-2 text-xs text-ink/65 leading-relaxed line-clamp-3">
                    Evidence-based medical overview and clinical recommendations prepared by
                    <?= htmlspecialchars($b['author']) ?> and the Sukhda specialty board.
                  </p>
                </div>
              </div>

              <!-- Card Footer -->
              <div
                class="px-6 pb-6 pt-3 border-t border-brand-100/80 flex items-center justify-between text-xs font-semibold">
                <span class="text-ink/60 truncate">By <strong
                    class="text-brand-800"><?= htmlspecialchars($b['author']) ?></strong></span>
                <button type="button" @click="openArticleModal(<?= htmlspecialchars(json_encode($b), ENT_QUOTES) ?>)"
                  class="inline-flex items-center gap-1 text-brand-600 hover:text-coral-600 font-bold transition">
                  <span>Read</span> <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                </button>
              </div>

            </article>
      <?php endfor; ?>
    </div>


    <!-- ==========================================
         INTERACTIVE ARTICLE READER MODAL
    =========================================== -->
    <div x-show="selectedArticle !== null" x-cloak style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-brand-900/80 backdrop-blur-sm overflow-y-auto"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

      <div x-show="selectedArticle !== null" @click.away="closeArticleModal()"
        class="relative w-full max-w-3xl rounded-3xl bg-white p-7 lg:p-10 shadow-2xl ring-1 ring-brand-100 my-8 overflow-hidden"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0">

        <!-- Close Button -->
        <button type="button" @click="closeArticleModal()"
          class="absolute top-6 right-6 w-10 h-10 rounded-full bg-mist text-ink/60 hover:text-ink hover:bg-brand-100 grid place-items-center transition z-10">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <!-- Article Header -->
        <div class="space-y-3 pb-6 border-b border-brand-100">
          <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-brand-700">
            <span class="px-3 py-1 rounded-full bg-brand-50 border border-brand-200"
              x-text="selectedArticle?.cat"></span>
            <span x-text="selectedArticle?.date"></span>
            <span>·</span>
            <span x-text="selectedArticle?.read"></span>
          </div>
          <h2 class="font-display text-2xl sm:text-3xl font-bold text-brand-900 leading-tight"
            x-text="selectedArticle?.title"></h2>
          <p class="text-sm sm:text-base text-ink/75 italic leading-relaxed" x-text="selectedArticle?.subtitle"></p>
        </div>

        <!-- Article Hero Image -->
        <div class="my-6 aspect-[16/9] rounded-2xl overflow-hidden bg-mist ring-1 ring-brand-200 shadow-soft">
          <img :src="selectedArticle?.img" :alt="selectedArticle?.title" onerror="this.src='assets/images/infra/pathology-lab.jpg'" class="w-full h-full object-cover">
        </div>

        <!-- Key Takeaway Box -->
        <div
          class="p-5 rounded-2xl bg-coral-50/70 border border-coral-200 text-brand-900 mb-6 flex items-start gap-3.5">
          <span
            class="w-8 h-8 rounded-xl bg-coral-500 text-white grid place-items-center shrink-0 mt-0.5 shadow-soft font-bold">
            💡
          </span>
          <div>
            <h5 class="text-xs font-bold uppercase tracking-wider text-coral-800">Clinical Takeaway Box</h5>
            <p class="text-xs sm:text-sm text-ink/80 leading-relaxed mt-1 font-medium"
              x-text="selectedArticle?.takeaway"></p>
          </div>
        </div>

        <!-- Article Body Paragraphs -->
        <div class="space-y-4 text-sm sm:text-[15px] text-ink/80 leading-relaxed font-normal">
          <template x-for="(para, idx) in selectedArticle?.body" :key="idx">
            <p x-text="para"></p>
          </template>
        </div>

        <!-- Author Byline Strip -->
        <div class="mt-8 p-4 rounded-2xl bg-mist ring-1 ring-brand-100 flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-brand-600 text-white grid place-items-center font-bold text-sm">
              <i data-lucide="user-check" class="w-5 h-5"></i>
            </div>
            <div>
              <div class="text-xs font-bold text-brand-900" x-text="`Authored by ${selectedArticle?.author}`"></div>
              <div class="text-[11px] text-ink/60">Senior Consultant &amp; Clinical Advisory Board, Sukhda Hospital
              </div>
            </div>
          </div>
          <a href="#search" @click="closeArticleModal()" class="text-xs font-bold text-coral-600 hover:underline">
            Book Consultation →
          </a>
        </div>

        <!-- Article Footer Modal Actions -->
        <div class="mt-6 pt-6 border-t border-brand-200 flex flex-col sm:flex-row items-center justify-between gap-4">
          <span class="text-xs text-ink/60 font-medium">Have medical reports related to this condition? Request a second
            opinion.</span>
          <div class="flex items-center gap-3 w-full sm:w-auto">
            <a :href="`https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20read%20the%20article%20'${encodeURIComponent(selectedArticle?.title || 'Journal')}'%20and%20need%20a%20second%20opinion.`"
            target="_blank"
              class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-[#25D366] hover:bg-[#20bd5a] text-white text-xs font-bold tracking-wide shadow-soft transition">
              <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Reports
            </a>
            <button type="button" @click="closeArticleModal()"
              class="flex-1 sm:flex-initial px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold uppercase tracking-wider shadow-soft transition">
              Close Reader
            </button>
          </div>
        </div>

      </div>
    </div>


    <!-- ==========================================
         SECOND OPINIONS & CASE REVIEW DESK BANNER
    =========================================== -->
    <div id="second-opinion-desk"
      class="mt-16 rounded-[2.5rem] bg-gradient-to-r from-brand-900 via-brand-800 to-brand-700 text-white p-8 lg:p-12 shadow-2xl relative overflow-hidden">
      <!-- Decorative blobs -->
      <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
      <div class="absolute -left-20 -top-20 w-80 h-80 rounded-full bg-coral-500/20 blur-3xl pointer-events-none"></div>

      <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <!-- Left Banner Narrative -->
        <div class="lg:col-span-7 space-y-3">
          <div
            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-coral-300 text-[11px] font-bold uppercase tracking-widest">
            <i data-lucide="file-check-2" class="w-3.5 h-3.5 text-coral-400"></i> Ethical Second Opinion Board
          </div>
          <h3 class="font-display text-2xl sm:text-3xl lg:text-4xl font-semibold text-white leading-tight">
            Unsure about a diagnosis or recommended surgery?
          </h3>
          <p class="text-white/80 text-sm sm:text-base leading-relaxed">
            Get an ethical, peer-reviewed second opinion directly from our senior department directors within 24 hours.
            We review your MRI/CT scans, biopsy reports, and treatment roadmaps with 100% medical confidentiality.
          </p>
        </div>

        <!-- Right Action Triggers -->
        <div class="lg:col-span-5 flex flex-col sm:flex-row items-center justify-center lg:justify-end gap-3 flex-wrap">
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20want%20to%20upload%20my%20medical%20reports%20for%20a%20Second%20Opinion."
            target="_blank"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-md bg-[#25D366] hover:bg-[#20bd5a] text-white text-xs sm:text-sm font-bold shadow-glow transition whitespace-nowrap">
            <i data-lucide="upload" class="w-4 h-4 shrink-0"></i> WhatsApp Reports
          </a>
          <a href="#search"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-md bg-white/15 hover:bg-white/25 ring-1 ring-white/30 text-white text-xs sm:text-sm font-bold backdrop-blur transition whitespace-nowrap">
            <i data-lucide="calendar" class="w-4 h-4 text-coral-300 shrink-0"></i> Book Review Consult
          </a>
        </div>
      </div>
    </div>

  </div>
</section>



<!-- ============================================================
     7. NEWS — vector illustration + compact list
============================================================ -->
<section id="news" class="relative pt-14 pb-12 lg:pt-20 lg:pb-16 bg-gradient-to-t from-brand-100/60 via-[#f3f8fd] to-white">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">

      <!-- LEFT — Vector illustration + intro -->
      <div class="lg:col-span-4 flex flex-col">
        <p class="text-brand-500 text-[11px] uppercase tracking-[0.3em] font-semibold">News &amp; events</p>
        <h2
          class="mt-3 font-display text-2xl sm:text-3xl lg:text-4xl leading-tight font-semibold text-ink tracking-tight text-balance">
          Recent <span class="italic font-serif text-brand-600">updates</span> from Sukhda.
        </h2>
        <p class="mt-4 text-[15px] text-ink/65 leading-relaxed max-w-sm">
          Camps, milestones and announcements — a short digest of what's happening this month.
        </p>

        <!-- Inline vector illustration -->
        <div class="mt-6 lg:mt-8 max-w-[320px]">
          <svg viewBox="0 0 320 280" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-full h-auto">
            <!-- soft backdrop -->
            <circle cx="160" cy="140" r="120" fill="#EAF2FB" />
            <!-- coral accent blob -->
            <circle cx="248" cy="64" r="34" fill="#FFDBCC" />
            <circle cx="248" cy="64" r="18" fill="#FF6B47" />
            <!-- back card (rotated) -->
            <g transform="rotate(-7 110 150)">
              <rect x="50" y="55" width="160" height="190" rx="16" fill="#FFFFFF" stroke="#CFE0F4" stroke-width="2" />
              <rect x="68" y="76" width="64" height="8" rx="4" fill="#CFE0F4" />
              <rect x="68" y="98" width="124" height="6" rx="3" fill="#E5EFF8" />
              <rect x="68" y="114" width="100" height="6" rx="3" fill="#E5EFF8" />
            </g>
            <!-- front card -->
            <g>
              <rect x="86" y="60" width="170" height="200" rx="18" fill="#FFFFFF" stroke="#1F66B5" stroke-width="2" />
              <!-- top bar -->
              <rect x="106" y="82" width="84" height="10" rx="5" fill="#0F4F94" />
              <!-- "tag" pill -->
              <rect x="200" y="82" width="36" height="18" rx="9" fill="#FFF1EC" />
              <circle cx="208" cy="91" r="3" fill="#FF6B47" />
              <rect x="214" y="88" width="18" height="6" rx="3" fill="#FF6B47" />
              <!-- text lines -->
              <rect x="106" y="116" width="130" height="6" rx="3" fill="#CFE0F4" />
              <rect x="106" y="132" width="100" height="6" rx="3" fill="#CFE0F4" />
              <rect x="106" y="148" width="116" height="6" rx="3" fill="#CFE0F4" />
              <!-- divider -->
              <rect x="106" y="170" width="130" height="1" fill="#EAF2FB" />
              <!-- date strip -->
              <rect x="106" y="184" width="40" height="6" rx="3" fill="#9FC1E9" />
              <!-- 'read more' chip -->
              <rect x="106" y="208" width="60" height="22" rx="11" fill="#0F4F94" />
              <rect x="116" y="216" width="32" height="6" rx="3" fill="#FFFFFF" />
              <!-- arrow circle -->
              <circle cx="226" cy="219" r="13" fill="#FF6B47" />
              <path d="M221 219 h10 m-4 -4 l4 4 -4 4" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" fill="none" />
            </g>
            <!-- floating dots -->
            <circle cx="60" cy="70" r="5" fill="#FF6B47" />
            <circle cx="280" cy="220" r="6" fill="#FFA482" />
            <circle cx="50" cy="240" r="4" fill="#0F4F94" />
            <circle cx="270" cy="160" r="3" fill="#1F66B5" />
          </svg>
        </div>
      </div>

      <!-- RIGHT — News list -->
      <div class="lg:col-span-8">
        <div class="flex items-center justify-between mb-3">
          <p class="text-[10px] uppercase tracking-[0.25em] font-bold text-ink/45">Latest</p>
          <a href="#"
            class="inline-flex items-center gap-1.5 text-[13px] text-brand-700 font-semibold hover:text-coral-500 transition">
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
                    <span
                      class="hidden sm:inline-flex px-2 py-0.5 rounded-full bg-brand-50 text-brand-700 text-[9px] font-bold uppercase tracking-widest shrink-0">
                      <?= htmlspecialchars($n['tag']) ?>
                    </span>
                    <h3
                      class="flex-1 min-w-0 font-medium text-[14px] text-brand-900 leading-snug truncate group-hover:text-coral-500 transition">
                      <?= htmlspecialchars($n['title']) ?>
                    </h3>
                    <i data-lucide="arrow-up-right"
                      class="w-3.5 h-3.5 text-brand-400 group-hover:text-coral-500 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition shrink-0"></i>
                  </a>
                </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>
</section>


<?php require __DIR__ . '/includes/footer.php'; ?>