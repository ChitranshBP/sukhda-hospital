<?php require __DIR__ . '/includes/header.php'; ?>

<!-- ============================================================
     1. BANNER SLIDER (full-width, auto-advancing)
============================================================ -->
<?php
$BANNERS = [
  'https://sukhdahospitalhisar.com/templates/sukhda/images/slider1.jpg',
  'https://sukhdahospitalhisar.com/templates/sukhda/images/slider2.jpg',
  'https://sukhdahospitalhisar.com/templates/sukhda/images/slider3.jpg',
];
?>
<section class="banner" aria-label="Hospital highlights">
  <div class="banner-frame">
    <?php foreach ($BANNERS as $i => $img): ?>
      <div class="banner-slide<?= $i === 0 ? ' active' : '' ?>" role="img"
        aria-label="Sukhda Medpark banner <?= $i + 1 ?>"
        style="background-image: url('<?= htmlspecialchars($img) ?>');"></div>
    <?php endforeach; ?>

    <div class="banner-dots">
      <?php foreach ($BANNERS as $i => $img): ?>
        <button class="banner-dot<?= $i === 0 ? ' active' : '' ?>" data-slide="<?= $i ?>" aria-label="Go to slide <?= $i + 1 ?>"></button>
      <?php endforeach; ?>
    </div>
    <div class="banner-arrows">
      <button class="banner-arrow" id="bannerPrev" aria-label="Previous slide">&lsaquo;</button>
      <button class="banner-arrow" id="bannerNext" aria-label="Next slide">&rsaquo;</button>
    </div>
  </div>
</section>

<!-- ============================================================
     2. HERO — headline + quick stat cards
============================================================ -->
<section class="hero">
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="hero-badge">NABH Accredited &middot; Since 2002</div>
      <h1>Advanced cancer &amp; super speciality care, close to home.</h1>
      <p class="hero-sub">Twenty-three years of surgical precision, critical care and compassion for the families of
        Hisar and greater Haryana — under one roof.</p>
      <div class="hero-actions">
        <a href="#contact" class="btn-solid">Book an appointment</a>
        <a href="tel:+919996544005" class="btn-ghost">Emergency &middot; <?= htmlspecialchars($HOSPITAL['emergency']) ?></a>
      </div>
    </div>
    <div class="hero-cards">
      <?php
      $STATS = [
        ['n' => '23+',       'l' => 'Years of care'],
        ['n' => '120+',      'l' => 'Inpatient beds'],
        ['n' => '60+',       'l' => 'Consultants'],
        ['n' => '5,00,000+', 'l' => 'Patients treated'],
      ];
      foreach ($STATS as $s):
      ?>
        <div class="navy-card">
          <div class="num stat-num"><?= htmlspecialchars($s['n']) ?></div>
          <div class="lbl"><?= htmlspecialchars($s['l']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     4. SPECIALITIES — filterable department grid
============================================================ -->
<?php /* $SPEC_CATS and $SPECS come from includes/data.php (shared with the header mega menu) */ ?>
<section id="specialities" class="section">
  <div class="sec-head">
    <div>
      <div class="kicker">Specialities</div>
      <h2 class="sec-title">Every department, one campus.</h2>
    </div>
    <p class="sec-lede">Twenty-eight clinical departments working as one team — so a diagnosis, a surgery and a
      recovery never need a second hospital.</p>
  </div>

  <div class="spec-tabs" id="specTabs">
    <?php foreach ($SPEC_CATS as $i => $cat): ?>
      <button class="spec-tab<?= $i === 0 ? ' active' : '' ?>" data-cat="<?= htmlspecialchars($cat) ?>">
        <?= htmlspecialchars($cat) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="spec-grid" id="specGrid">
    <?php foreach ($SPECS as $sp): ?>
      <div class="spec-card" data-cat="<?= htmlspecialchars($sp[1]) ?>"<?= $sp[1] === $SPEC_CATS[0] ? '' : ' style="display:none;"' ?>>
        <div class="head">
          <span class="spec-ico"><i data-lucide="<?= htmlspecialchars($sp[3]) ?>"></i></span>
          <h3><?= htmlspecialchars($sp[0]) ?></h3>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============================================================
     5. ABOUT
============================================================ -->
<?php
$VALUES = [
  ['t' => 'One roof',       'd' => 'Diagnosis, surgery and rehab without a second hospital.'],
  ['t' => 'Plain language', 'd' => 'Every plan explained to the family, not just the file.'],
  ['t' => 'Fair pricing',   'd' => 'Transparent packages and cashless TPA support.'],
  ['t' => 'Always open',    'd' => 'Emergency, trauma and cath lab staffed 24×7.'],
];
?>
<section id="about" class="section">
  <div class="about-grid">
    <div class="about-media">
      <img src="assets/images/infra/hdu.jpg" alt="Sukhda Medpark high dependency unit">
      <div class="about-badge">
        <div class="num">2002</div>
        <div class="lbl">The year Dr. Amit &amp; Dr. Manisha Mehta opened our first ward.</div>
      </div>
    </div>
    <div class="about-copy">
      <div class="kicker">About Sukhda</div>
      <h2 class="sec-title">Care &amp; cure for the whole family.</h2>
      <p>What began as a small nursing home on Delhi Road is now a NABH-accredited cancer and super speciality
        hospital with 120+ beds, a digital cath lab, modular operation theatres and a Level-3 neonatal ICU.</p>
      <p>Our promise has not changed in twenty-three years: metro-grade medicine, explained in plain language, priced
        so that families in Haryana never have to travel to Delhi for it.</p>
      <div class="values-grid">
        <?php foreach ($VALUES as $v): ?>
          <div class="value-item">
            <div class="t"><?= htmlspecialchars($v['t']) ?></div>
            <div class="d"><?= htmlspecialchars($v['d']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     6. TECHNOLOGY & INFRASTRUCTURE (navy band)
============================================================ -->
<?php
$TECH = [
  ['name' => 'Siemens CT Scanner',        'tag' => 'Imaging',        'desc' => 'Multi-slice CT for cardiac, neuro and whole-body scans.',              'img' => 'assets/images/infra/ct-scan.jpg'],
  ['name' => 'Modular Operation Theatre', 'tag' => 'Surgery',        'desc' => 'HEPA-filtered laminar-flow OT with C-arm and modern anaesthesia.',     'img' => 'assets/images/infra/operation-theatre.jpg'],
  ['name' => 'Advanced Cath Lab',         'tag' => 'Cardiology',     'desc' => 'Fully digital catheterisation lab for angiography and angioplasty.',   'img' => 'assets/images/infra/cath-lab.jpg'],
  ['name' => 'Dialysis Department',       'tag' => 'Nephrology',     'desc' => 'Seven-bed renal dialysis unit with dedicated isolation stations.',     'img' => 'assets/images/infra/dialysis.jpg'],
  ['name' => 'Cardiac ICU',               'tag' => 'Critical Care',  'desc' => 'Coronary intensive care with round-the-clock cardiac monitoring.',     'img' => 'assets/images/infra/icu.jpg'],
  ['name' => 'NABL Pathology Lab',        'tag' => 'Diagnostics',    'desc' => 'Biochemistry, haematology and microbiology under one accreditation.',  'img' => 'assets/images/infra/pathology-lab.jpg'],
  ['name' => 'General ICU',               'tag' => 'Critical Care',  'desc' => 'Multi-bed intensive care with ventilators and central monitoring.',    'img' => 'assets/images/infra/icu-general.jpg'],
  ['name' => 'High Dependency Unit',      'tag' => 'Step-down Care', 'desc' => 'Post-operative HDU beds for closely monitored recovery.',              'img' => 'assets/images/infra/hdu.jpg'],
];
?>
<section id="technology" class="tech-band">
  <div class="wrap">
    <div class="sec-head">
      <div>
        <div class="kicker on-dark">Technology &amp; Infrastructure</div>
        <h2 class="sec-title">Equipment that earns the diagnosis.</h2>
      </div>
      <p class="sec-lede">Imaging, surgery and critical care built to tertiary-hospital standards — installed,
        serviced and staffed around the clock.</p>
    </div>
    <div class="tech-grid">
      <?php foreach ($TECH as $t): ?>
        <div class="tech-card">
          <div class="img" role="img" aria-label="<?= htmlspecialchars($t['name']) ?>"
            style="background-image: url('<?= htmlspecialchars($t['img']) ?>');"></div>
          <div class="body">
            <div class="tag"><?= htmlspecialchars($t['tag']) ?></div>
            <h3><?= htmlspecialchars($t['name']) ?></h3>
            <p><?= htmlspecialchars($t['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     7. RARE & COMPLEX CASES
============================================================ -->
<?php
$CASES = [
  [
    'dept' => 'Neurosurgery', 'badge' => 'Medical miracle',
    'title' => 'Staged excision of a 7.5 cm skull-base meningioma',
    'outcome' => 'Complete tumour excision with zero motor deficit; functional vision regained within three weeks.',
    'img' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=900&auto=format&fit=crop',
    'stats' => [['k' => 'Surgery', 'v' => '9 hours'], ['k' => 'ICU stay', 'v' => '3 days'], ['k' => 'Status', 'v' => '100% functional']],
  ],
  [
    'dept' => 'Neonatology', 'badge' => 'Rare survival',
    'title' => 'A 620-gram, 25-week preterm baby goes home',
    'outcome' => 'Surfactant therapy and high-frequency ventilation; discharged at 1.85 kg with a normal brain ultrasound.',
    'img' => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=900&auto=format&fit=crop',
    'stats' => [['k' => 'Birth weight', 'v' => '620 g'], ['k' => 'NICU care', 'v' => '68 days'], ['k' => 'Today', 'v' => 'Thriving']],
  ],
  [
    'dept' => 'Orthopaedics', 'badge' => 'High-risk surgery',
    'title' => 'Bilateral hip and knee replacement at 81, with cardiac disease',
    'outcome' => 'Stood with a walker on day two after three bedridden years; walking independently by week five.',
    'img' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=900&auto=format&fit=crop',
    'stats' => [['k' => 'Patient age', 'v' => '81 years'], ['k' => 'First steps', 'v' => 'Day 2'], ['k' => 'Joints', 'v' => '4 replaced']],
  ],
  [
    'dept' => 'Interventional Cardiology', 'badge' => 'Lifesaving',
    'title' => 'Emergency stenting for left-main coronary dissection',
    'outcome' => 'IVUS-guided primary angioplasty restored full coronary flow; discharged on day four.',
    'img' => 'https://images.unsplash.com/photo-1559757175-5700dde675bc?w=900&auto=format&fit=crop',
    'stats' => [['k' => 'Door-to-balloon', 'v' => '15 mins'], ['k' => 'Risk averted', 'v' => '>80%'], ['k' => 'Stay', 'v' => '4 days']],
  ],
];
?>
<section id="cases" class="section">
  <div class="cases-intro">
    <div class="kicker">Rare &amp; Complex Cases</div>
    <h2 class="sec-title">The cases other hospitals refer to us.</h2>
  </div>
  <div class="cases-grid">
    <?php foreach ($CASES as $i => $c): ?>
      <div class="case-card"<?= $i >= 3 ? ' style="display:none;" data-case-extra' : '' ?>>
        <div class="img" role="img" aria-label="<?= htmlspecialchars($c['dept']) ?>"
          style="background-image: url('<?= htmlspecialchars($c['img']) ?>');"></div>
        <div class="body">
          <div class="case-top">
            <span class="case-dept"><?= htmlspecialchars($c['dept']) ?></span>
            <span class="case-badge"><?= htmlspecialchars($c['badge']) ?></span>
          </div>
          <h3><?= htmlspecialchars($c['title']) ?></h3>
          <p class="outcome"><?= htmlspecialchars($c['outcome']) ?></p>
          <div class="case-stats">
            <?php foreach ($c['stats'] as $st): ?>
              <div>
                <div class="v"><?= htmlspecialchars($st['v']) ?></div>
                <div class="k"><?= htmlspecialchars($st['k']) ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <?php if (count($CASES) > 3): ?>
  <div class="cases-more">
    <button type="button" class="cases-more-btn" id="casesMoreBtn">Show More</button>
  </div>
  <?php endif; ?>
</section>

<!-- ============================================================
     8. PATIENT STORIES (tabbed)
============================================================ -->
<?php
$STORIES = [
  [
    'poster' => 'assets/images/infra/cath-lab.jpg', 'name' => 'Renu Sharma', 'condition' => 'Cardiac · Angioplasty',
    'meta' => '54 · Hisar, Haryana · Dr. Rajiv Sharma', 'outcome' => 'Recovered', 'recovery' => '4 weeks',
    'quote' => 'My father underwent angioplasty here. The cardiac team was attentive day and night. We felt like family, not patients.',
  ],
  [
    'poster' => 'assets/images/infra/operation-theatre.jpg', 'name' => 'Vikas Kumar', 'condition' => 'Orthopaedics · Knee Replacement',
    'meta' => '62 · Fatehabad, Haryana · Joint Replacement Team', 'outcome' => 'Pain-free', 'recovery' => '6 weeks',
    'quote' => "Knee replacement done in March. I'm walking pain-free in six weeks. Thank you, Sukhda — you gave me back my mornings.",
  ],
  [
    'poster' => 'assets/images/infra/hdu.jpg', 'name' => 'Sunita Devi', 'condition' => 'Paediatrics · NICU',
    'meta' => '47 · Hansi, Haryana · Dr. Pooja Goyal', 'outcome' => 'Discharged healthy', 'recovery' => '21 days NICU',
    'quote' => 'My grand-daughter was born premature. The NICU staff treated her like their own. Today she is healthy and beautiful.',
  ],
  [
    'poster' => 'assets/images/infra/icu-general.jpg', 'name' => 'Harbinder Singh', 'condition' => 'Neurosurgery · Spine Navigation',
    'meta' => '58 · Rohtak, Haryana · Dr. Amit Mehta', 'outcome' => 'Full mobility', 'recovery' => '5 weeks',
    'quote' => 'For two years I could not walk more than ten metres. After navigation spine surgery at Sukhda, I am back on my farm.',
  ],
  [
    'poster' => 'assets/images/infra/ct-scan.jpg', 'name' => 'Geeta Rani', 'condition' => 'Oncology · Surgical Excision',
    'meta' => '49 · Jind, Haryana · Cancer Care Team', 'outcome' => 'Tumour free', 'recovery' => '3 months',
    'quote' => 'A cancer diagnosis was terrifying. The tumour board gave us hope and precision care without going to Delhi.',
  ],
];
?>
<section id="stories" class="stories-theater">
  <div class="stories-theater-inner">
    <div class="kicker on-dark">Patient Stories</div>
    <h2 class="sec-title">In their own words.</h2>

    <div class="theater-row">
      <button class="story-arrow prev" id="storyPrev" aria-label="Previous story">&#8249;</button>

      <div class="theater-stage" id="storyPanels">
        <?php foreach ($STORIES as $i => $s): ?>
          <?php
          $parts = preg_split('/\s+/', trim($s['name']));
          $initials = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
          ?>
          <div class="story-panel<?= $i === 0 ? ' active' : '' ?>" data-story="<?= $i ?>">
            <div class="story-mark" aria-hidden="true">&ldquo;</div>
            <blockquote class="story-quote"><?= htmlspecialchars($s['quote']) ?></blockquote>
            <div class="story-who">
              <span class="avatar"><?= htmlspecialchars($initials) ?></span>
              <span class="name"><?= htmlspecialchars($s['name']) ?></span>
              <span class="meta"><?= htmlspecialchars($s['meta']) ?></span>
            </div>
            <div class="story-pills">
              <span class="pill"><span class="k">Outcome</span><span class="v"><?= htmlspecialchars($s['outcome']) ?></span></span>
              <span class="pill"><span class="k">Recovery</span><span class="v"><?= htmlspecialchars($s['recovery']) ?></span></span>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="slider-content-background"></div>
      </div>

      <button class="story-arrow next" id="storyNext" aria-label="Next story">&#8250;</button>
    </div>

    <div class="story-dots" id="storyDots">
      <?php foreach ($STORIES as $i => $s): ?>
        <button class="story-dot<?= $i === 0 ? ' active' : '' ?>" data-story="<?= $i ?>" aria-label="<?= htmlspecialchars($s['name']) ?>'s story"></button>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     9. FOUNDERS
============================================================ -->
<?php
$FOUNDERS = [
  [
    'img' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600&auto=format&fit=crop',
    'name' => 'Dr. Amit Mehta',
    'qual' => 'MD (AIIMS)',
    'spec' => 'Internal Medicine',
    'role' => 'Founder & Director',
  ],
  [
    'img' => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=600&auto=format&fit=crop',
    'name' => 'Dr. Manisha Mehta',
    'qual' => 'MS, DGO',
    'spec' => 'Gynaecology & Obstetrics',
    'role' => 'Founder & Director',
  ],
];
?>
<section id="founders" class="section">
  <div class="founders-panel">
    <div class="founders-left">
      <div class="kicker">Our Founders</div>
      <h2 class="sec-title">Two doctors. One promise.</h2>
      
      <div class="founder-quote-card">
        <div class="founder-quote-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
        </div>
        <blockquote class="founder-quote">We did not build Sukhda to be the biggest hospital in Haryana. We built it so that <strong>no family in Hisar would ever have to board a train to Delhi</strong> to save someone they love.</blockquote>
        <div class="founder-attrib">
          <span class="attrib-badge">Founding Promise</span>
          <span class="attrib-names">Dr. Amit &amp; Dr. Manisha Mehta &middot; 2002</span>
        </div>
      </div>
    </div>

    <div class="founder-cards">
      <?php foreach ($FOUNDERS as $f): ?>
        <div class="founder-card">
          <div class="img-wrap">
            <div class="img" role="img" aria-label="<?= htmlspecialchars($f['name']) ?>"
              style="background-image: url('<?= htmlspecialchars($f['img']) ?>');"></div>
            <span class="spec-tag"><?= htmlspecialchars($f['spec']) ?></span>
          </div>
          <div class="body">
            <div class="name"><?= htmlspecialchars($f['name']) ?></div>
            <div class="qual-badge"><?= htmlspecialchars($f['qual']) ?></div>
            <div class="role"><?= htmlspecialchars($f['role']) ?></div>
          </div>
        </div>
      <?php endforeach; ?>

      <div class="founder-milestone">
        <div class="milestone-head">
          <span class="milestone-badge">24+ Years of Excellence</span>
          <span class="num">2002 &rarr; <?= date('Y') ?></span>
        </div>
        <div class="lbl">From a single clinic on Delhi Road to Hisar&rsquo;s premier 120+ bed NABH-accredited cancer &amp; super-speciality medical campus.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     10. HEALTH JOURNAL & CLINICAL INSIGHTS
============================================================ -->
<?php
$BLOGS = [
  [
    'cat'    => 'CARDIOLOGY',
    'date'   => 'APR 18, 2026',
    'title'  => 'The 7 silent signs of a heart attack you should never ignore',
    'author' => 'Dr. Rajiv Sharma',
    'read'   => '6 min read',
    'desc'   => 'Evidence-based medical overview and clinical recommendations prepared by Dr. Rajiv Sharma and the Sukhda specialty board.',
    'img'    => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&auto=format&fit=crop',
  ],
  [
    'cat'    => 'ORTHOPAEDICS',
    'date'   => 'APR 09, 2026',
    'title'  => 'Knee replacement at 60+ : What modern surgery looks like today',
    'author' => 'Sukhda Editorial',
    'read'   => '5 min read',
    'desc'   => 'Evidence-based medical overview and clinical recommendations prepared by Sukhda Editorial and the Sukhda specialty board.',
    'img'    => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=800&auto=format&fit=crop',
  ],
  [
    'cat'    => 'PAEDIATRICS',
    'date'   => 'MAR 28, 2026',
    'title'  => "A parent's guide to fever in newborns — when to rush to NICU",
    'author' => 'Dr. Pooja Goyal',
    'read'   => '4 min read',
    'desc'   => 'Evidence-based medical overview and clinical recommendations prepared by Dr. Pooja Goyal and the Sukhda specialty board.',
    'img'    => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?w=800&auto=format&fit=crop',
  ],
];
?>
<section id="library" class="section journal-section">
  <div class="journal-header">
    <div class="journal-header-left">
      <div class="journal-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
        HEALTH JOURNAL &amp; CLINICAL INSIGHTS
      </div>
      <h2 class="sec-title">Stories, science and <em class="title-serif">second opinions.</em></h2>
      <p class="journal-sub">Peer-reviewed medical articles, early warning symptom guides, and ethical second opinion reviews directly from the senior departmental directors at Sukhda Hospital.</p>
    </div>
    <div class="journal-header-right">
      <a href="#contact" class="btn-second-opinion">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>
        REQUEST SECOND OPINION &darr;
      </a>
    </div>
  </div>

  <div class="journal-grid">
    <?php foreach ($BLOGS as $b): ?>
      <div class="journal-card">
        <div class="card-img-wrap">
          <div class="img" role="img" aria-label="<?= htmlspecialchars($b['title']) ?>"
            style="background-image: url('<?= htmlspecialchars($b['img']) ?>');"></div>
          <span class="cat-badge"><?= htmlspecialchars($b['cat']) ?></span>
          <span class="read-tag"><?= htmlspecialchars($b['read']) ?></span>
        </div>
        <div class="body">
          <div class="date"><?= htmlspecialchars($b['date']) ?></div>
          <h3 class="title"><?= htmlspecialchars($b['title']) ?></h3>
          <p class="desc"><?= htmlspecialchars($b['desc']) ?></p>
          <div class="card-footer">
            <span class="author">By <strong><?= htmlspecialchars($b['author']) ?></strong></span>
            <a href="#library" class="read-link">Read &nearr;</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============================================================
     11. NEWS & EVENTS
============================================================ -->
<?php
$NEWS_UPDATES = [
  ['date' => '22 APR', 'tag' => 'CAMP',           'title' => 'Sukhda launches free cardiac screening camp across April'],
  ['date' => '02 APR', 'tag' => 'ACHIEVEMENT',    'title' => 'NABH re-accreditation renewed for 5 more years'],
  ['date' => '14 MAR', 'tag' => 'INFRASTRUCTURE', 'title' => 'New 128-slice CT scanner inaugurated at radiology wing'],
  ['date' => '10 MAR', 'tag' => 'EVENT',          'title' => 'World Kidney Day — over 600 patients screened'],
  ['date' => '28 FEB', 'tag' => 'CAMP',           'title' => 'Free knee replacement camp for senior citizens'],
  ['date' => '15 FEB', 'tag' => 'INFRASTRUCTURE', 'title' => 'Maternity wing expansion — 12 new birthing suites'],
];
?>
<section id="events" class="section news-events-section">
  <div class="news-events-grid">
    
    <!-- Left Column: Kicker, Title, Description & Graphic -->
    <div class="news-left">
      <div class="kicker">NEWS &amp; EVENTS</div>
      <h2 class="sec-title">Recent <em class="title-serif">updates</em><br>from Sukhda.</h2>
      <p class="news-desc">Camps, milestones and announcements &mdash; a short digest of what&rsquo;s happening this month.</p>
      
      <!-- Graphic Illustration -->
      <div class="news-graphic-wrap">
        <svg width="220" height="180" viewBox="0 0 220 180" fill="none" xmlns="http://www.w3.org/2000/svg" class="news-illustration">
          <circle cx="150" cy="90" r="50" fill="#EBF3FA" />
          <circle cx="170" cy="65" r="28" fill="#FFEAE4" />
          <circle cx="170" cy="65" r="16" fill="#FF7A59" opacity="0.8" />
          
          <g transform="translate(45, 30) rotate(-6)">
            <rect x="0" y="0" width="100" height="125" rx="12" fill="#FFFFFF" stroke="#2A5288" stroke-width="2"/>
            <circle cx="14" cy="14" r="4" fill="#FF5252" />
            <rect x="26" y="12" width="45" height="4" rx="2" fill="#DCE6DC" />
            <rect x="14" y="28" width="70" height="4" rx="2" fill="#EAF3EA" />
            <rect x="14" y="38" width="55" height="4" rx="2" fill="#EAF3EA" />
          </g>

          <g transform="translate(65, 42)">
            <rect x="0" y="0" width="115" height="128" rx="14" fill="#FFFFFF" stroke="#2A5288" stroke-width="2.5"/>
            <rect x="14" y="14" width="40" height="7" rx="3.5" fill="#2A5288" />
            <rect x="68" y="14" width="22" height="7" rx="3.5" fill="#FF7A59" />
            <rect x="14" y="32" width="85" height="5" rx="2.5" fill="#EBF3FA" />
            <rect x="14" y="44" width="75" height="5" rx="2.5" fill="#EBF3FA" />
            <rect x="14" y="56" width="80" height="5" rx="2.5" fill="#EBF3FA" />
            <rect x="14" y="76" width="30" height="4" rx="2" fill="#DCE6DC" />
            <rect x="14" y="94" width="42" height="14" rx="7" fill="#2A5288" />
            <circle cx="92" cy="101" r="11" fill="#FF7A59" />
            <path d="M88 101H96M93 98L96 101L93 104" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </g>

          <circle cx="42" cy="148" r="4" fill="#2A5288" />
          <circle cx="190" cy="118" r="3.5" fill="#2A5288" />
          <circle cx="196" cy="144" r="5" fill="#FF7A59" />
        </svg>
      </div>
    </div>

    <!-- Right Column: Header bar + News list -->
    <div class="news-right">
      <div class="news-head-bar">
        <span class="news-latest-label">LATEST</span>
        <a href="#events" class="news-view-all">View all &rarr;</a>
      </div>

      <div class="news-list">
        <?php foreach ($NEWS_UPDATES as $item): ?>
          <a href="#events" class="news-item">
            <span class="news-date"><?= htmlspecialchars($item['date']) ?></span>
            <span class="news-badge"><?= htmlspecialchars($item['tag']) ?></span>
            <span class="news-title"><?= htmlspecialchars($item['title']) ?></span>
            <span class="news-arrow">&nearr;</span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     12. CONTACT CTA
============================================================ -->
<?php
$CONTACT_ROWS = [
  ['k' => 'Address',             'v' => 'Delhi Road, Near Bus Stand, Hisar, Haryana 125001'],
  ['k' => 'Emergency & Trauma',  'v' => 'Open 24×7 · +91-99965-44005'],
  ['k' => 'OPD hours',           'v' => '9:00 AM – 8:00 PM, all days'],
];
?>
<section id="contact" class="section">
  <div class="contact-panel">
    <div>
      <h2>Talk to a doctor today.</h2>
      <p class="sub">OPD runs 9:00 AM &ndash; 8:00 PM, seven days a week. Emergency and trauma never close.</p>
      <div class="hero-actions">
        <a href="tel:+919996544005" class="btn-solid">Call <?= htmlspecialchars($HOSPITAL['phone']) ?></a>
        <a href="mailto:<?= htmlspecialchars($HOSPITAL['email']) ?>" class="btn-ghost">Email the hospital</a>
      </div>
    </div>
    <div class="contact-rows">
      <?php foreach ($CONTACT_ROWS as $r): ?>
        <div class="contact-row">
          <div class="k"><?= htmlspecialchars($r['k']) ?></div>
          <div class="v"><?= htmlspecialchars($r['v']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
