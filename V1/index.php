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
      <div class="navy-card">
        <div class="num">28</div>
        <div class="lbl">specialities &amp; departments, from oncology to neonatal ICU</div>
      </div>
      <div class="navy-card">
        <div class="num">24&times;7</div>
        <div class="lbl">emergency, trauma bay, cath lab and Level-3 ICU response</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     3. STATS STRIP (overlapping the hero)
============================================================ -->
<?php
$STATS = [
  ['n' => '23+',       'l' => 'Years of care'],
  ['n' => '120+',      'l' => 'Inpatient beds'],
  ['n' => '60+',       'l' => 'Consultants'],
  ['n' => '5,00,000+', 'l' => 'Patients treated'],
];
?>
<section class="wrap">
  <div class="stats-strip">
    <?php foreach ($STATS as $s): ?>
      <div class="stat-cell">
        <div class="num stat-num"><?= htmlspecialchars($s['n']) ?></div>
        <div class="lbl"><?= htmlspecialchars($s['l']) ?></div>
      </div>
    <?php endforeach; ?>
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
        <?= $cat === 'All' ? 'All departments' : htmlspecialchars($cat) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="spec-grid" id="specGrid">
    <?php foreach ($SPECS as $sp): ?>
      <div class="spec-card" data-cat="<?= htmlspecialchars($sp[1]) ?>">
        <div class="head">
          <span class="spec-ico"><i data-lucide="<?= htmlspecialchars($sp[3]) ?>"></i></span>
          <h3><?= htmlspecialchars($sp[0]) ?></h3>
        </div>
        <p><?= htmlspecialchars($sp[2]) ?></p>
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
    <?php foreach ($CASES as $c): ?>
      <div class="case-card">
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

    <div class="theater-stage" id="storyPanels">
      <?php foreach ($STORIES as $i => $s): ?>
        <?php
        $parts = preg_split('/\s+/', trim($s['name']));
        $initials = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
        ?>
        <div class="story-panel<?= $i === 0 ? ' active' : '' ?>" data-story="<?= $i ?>"
          style="background-image: linear-gradient(rgba(17,42,81,0.95), rgba(18,48,95,0.9)), url('<?= htmlspecialchars($s['poster']) ?>');">
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
    </div>

    <div class="story-rail" id="storyTabs">
      <?php foreach ($STORIES as $i => $s): ?>
        <?php
        $parts = preg_split('/\s+/', trim($s['name']));
        $initials = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
        ?>
        <button class="story-tab<?= $i === 0 ? ' active' : '' ?>" data-story="<?= $i ?>">
          <span class="avatar"><?= htmlspecialchars($initials) ?></span>
          <span class="txt">
            <span class="n"><?= htmlspecialchars($s['name']) ?></span>
            <span class="c"><?= htmlspecialchars($s['condition']) ?></span>
          </span>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     9. FOUNDERS
============================================================ -->
<?php
$FOUNDERS = [
  ['img' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600&auto=format&fit=crop', 'name' => 'Dr. Amit Mehta',    'role' => 'MD (AIIMS) · Founder & Director · Internal Medicine'],
  ['img' => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=600&auto=format&fit=crop', 'name' => 'Dr. Manisha Mehta', 'role' => 'MS, DGO · Founder & Director · Gynaecology & Obstetrics'],
];
?>
<section id="founders" class="section">
  <div class="founders-panel">
    <div>
      <div class="kicker">Our Founders</div>
      <h2 class="sec-title">Two doctors. One promise.</h2>
      <div class="founder-quote-mark">&ldquo;</div>
      <p class="founder-quote">We did not build Sukhda to be the biggest hospital in Haryana. We built it so that no
        family in Hisar would ever have to board a train to Delhi to save someone they love.</p>
      <div class="founder-attrib">&mdash; Dr. Amit &amp; Dr. Manisha Mehta, on opening the first ward in 2002</div>
    </div>
    <div class="founder-cards">
      <?php foreach ($FOUNDERS as $f): ?>
        <div class="founder-card">
          <div class="img" role="img" aria-label="<?= htmlspecialchars($f['name']) ?>"
            style="background-image: url('<?= htmlspecialchars($f['img']) ?>');"></div>
          <div class="body">
            <div class="name"><?= htmlspecialchars($f['name']) ?></div>
            <div class="role"><?= htmlspecialchars($f['role']) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="founder-milestone">
        <div class="num">2002 &rarr; <?= date('Y') ?></div>
        <div class="lbl">From a small nursing home on Delhi Road to a 120+ bed NABH-accredited cancer &amp; super
          speciality campus.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     10. HEALTH LIBRARY (blogs)
============================================================ -->
<?php
$BLOGS = [
  ['title' => 'The seven silent signs of a heart attack you should never ignore', 'cat' => 'Cardiology',   'author' => 'Dr. Rajiv Sharma', 'read' => '6 min read', 'img' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=800&auto=format&fit=crop'],
  ['title' => 'Knee replacement at 60+ : what modern surgery looks like today',   'cat' => 'Orthopaedics', 'author' => 'Sukhda Editorial', 'read' => '5 min read', 'img' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&auto=format&fit=crop'],
  ["title" => "A parent's guide to fever in newborns — when to rush to NICU",     'cat' => 'Paediatrics',  'author' => 'Dr. Pooja Goyal',  'read' => '4 min read', 'img' => 'https://images.unsplash.com/photo-1531983412531-1f49a365ffed?w=800&auto=format&fit=crop'],
  ['title' => 'Why annual full-body checkups matter after 35',                    'cat' => 'Wellness',     'author' => 'Sukhda Editorial', 'read' => '4 min read', 'img' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&auto=format&fit=crop'],
];
?>
<section id="library" class="section">
  <div class="sec-head">
    <div>
      <div class="kicker">Health Library</div>
      <h2 class="sec-title">Written by our doctors.</h2>
    </div>
    <a href="#library" class="link-more">All articles</a>
  </div>
  <div class="blog-grid">
    <?php foreach ($BLOGS as $b): ?>
      <a href="#library" class="blog-card">
        <div class="img" role="img" aria-label="<?= htmlspecialchars($b['title']) ?>"
          style="background-image: url('<?= htmlspecialchars($b['img']) ?>');"></div>
        <div class="body">
          <div class="cat"><?= htmlspecialchars($b['cat']) ?></div>
          <h3><?= htmlspecialchars($b['title']) ?></h3>
          <div class="by"><?= htmlspecialchars($b['author']) ?> &middot; <?= htmlspecialchars($b['read']) ?></div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============================================================
     11. CAMPS & EVENTS
============================================================ -->
<?php
$EVENTS = [
  ['date' => 'July 18, 2026',   'time' => '9:00 AM – 2:00 PM',  'title' => 'Free mega heart & blood pressure screening camp',        'desc' => 'Complimentary ECG, blood sugar, BP check and cardiologist consultation.',        'location' => 'OPD Block A, Ground Floor',   'status' => '150 spots left'],
  ['date' => 'July 26, 2026',   'time' => '10:00 AM – 4:00 PM', 'title' => 'CME workshop: advances in minimal access surgery',       'desc' => 'Accredited CME with live surgical demonstrations and panel discussion.',         'location' => 'MedPark Auditorium, 3rd Floor', 'status' => 'For professionals'],
  ['date' => 'August 5, 2026',  'time' => '11:00 AM – 1:00 PM', 'title' => 'Healthy motherhood & antenatal wellness masterclass',    'desc' => 'Third-trimester nutrition, painless delivery prep and lactation guidance.',      'location' => 'Women Wellness Wing',          'status' => '40 couples'],
  ['date' => 'August 14, 2026', 'time' => '9:30 AM – 3:00 PM',  'title' => 'Free joint pain & arthritis assessment camp',            'desc' => 'Free bone mineral density test and expert orthopaedic evaluation.',              'location' => 'Orthopaedics OPD',             'status' => 'Filling fast'],
];
?>
<section id="events" class="section">
  <div class="sec-head">
    <div>
      <div class="kicker">Camps &amp; Events</div>
      <h2 class="sec-title">What's on at the hospital.</h2>
    </div>
  </div>
  <div class="events-list">
    <?php foreach ($EVENTS as $e): ?>
      <div class="event-row">
        <div>
          <div class="date"><?= htmlspecialchars($e['date']) ?></div>
          <div class="time"><?= htmlspecialchars($e['time']) ?></div>
        </div>
        <div>
          <div class="title"><?= htmlspecialchars($e['title']) ?></div>
          <div class="desc"><?= htmlspecialchars($e['desc']) ?></div>
        </div>
        <div class="loc"><?= htmlspecialchars($e['location']) ?></div>
        <div class="status-wrap">
          <span class="status"><?= htmlspecialchars($e['status']) ?></span>
        </div>
      </div>
    <?php endforeach; ?>
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
