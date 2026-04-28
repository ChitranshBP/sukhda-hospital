<?php
/**
 * Central data store for Sukhda Multispeciality Hospital homepage.
 * Replace with database queries when wiring to a real backend.
 */

$HOSPITAL = [
    'name'      => 'Sukhda Multispeciality Hospital',
    'short'     => 'Sukhda Hospital',
    'tagline'   => 'Care & Cure for the whole family, under one roof.',
    'city'      => 'Hisar, Haryana',
    'phone'     => '+91-99965-44005',
    'emergency' => '+91-99965-44005',
    'email'     => 'info@sukhdahospitalhisar.com',
    'address'   => 'Delhi Road, Near Bus Stand, Hisar, Haryana 125001',
    'founded'   => '2002',
    'beds'     => '120+',
    'doctors'  => '60+',
    'patients' => '5,00,000+',
    'years'    => '23+',
];

$SPECIALTIES = [
    ['name' => 'Interventional Cardiology',     'icon' => 'heart',        'desc' => 'Advanced cath lab, angioplasty & 24x7 cardiac care.'],
    ['name' => 'Neuro Surgery',                 'icon' => 'brain',        'desc' => 'Brain, spine and nerve surgeries with precision navigation.'],
    ['name' => 'Nephrology',                    'icon' => 'kidney',       'desc' => 'Dialysis, kidney transplant evaluation and renal care.'],
    ['name' => 'Gastroenterology',              'icon' => 'stomach',      'desc' => 'Endoscopy, ERCP and complete digestive care.'],
    ['name' => 'Orthopaedics & Joint Replacement','icon' => 'bone',       'desc' => 'Arthroscopy, knee & hip replacement, sports injury.'],
    ['name' => 'Urology & Laparoscopy',         'icon' => 'urology',      'desc' => 'Minimally invasive urological and laser surgeries.'],
    ['name' => 'ENT',                           'icon' => 'ear',          'desc' => 'Ear, nose & throat — micro-surgical interventions.'],
    ['name' => 'Gynaecology & Obstetrics',      'icon' => 'pregnant',     'desc' => 'Maternity, IVF support and women wellness.'],
    ['name' => 'Dermatology & Cosmetology',     'icon' => 'skin',         'desc' => 'Skin, hair, laser and aesthetic procedures.'],
    ['name' => 'Medical Oncology',              'icon' => 'cell',         'desc' => 'Chemotherapy and personalised cancer treatment.'],
    ['name' => 'Surgical Oncology',             'icon' => 'scalpel',      'desc' => 'Cancer surgeries with multidisciplinary care.'],
    ['name' => 'Bariatric & Laparoscopic Surgery','icon' => 'surgery',    'desc' => 'Weight loss & advanced laparoscopic procedures.'],
    ['name' => 'Paediatrics & Neonatology',     'icon' => 'baby',         'desc' => 'NICU, child care and adolescent health.'],
    ['name' => 'Emergency & Critical Care',     'icon' => 'ambulance',    'desc' => '24x7 ER, ICU and trauma response unit.'],
    ['name' => 'Anesthesia & Pain Management',  'icon' => 'syringe',      'desc' => 'Pain clinic, anesthesia and palliative support.'],
    ['name' => 'Psychiatry & Rehabilitation',   'icon' => 'mind',         'desc' => 'Mental wellness and de-addiction therapy.'],
    ['name' => 'Dentistry & Maxillofacial',     'icon' => 'tooth',        'desc' => 'Implants, orthodontics and oral surgery.'],
    ['name' => 'Physiotherapy',                 'icon' => 'physio',       'desc' => 'Rehabilitation, sports and post-op recovery.'],
    ['name' => 'Pathology & Microbiology',      'icon' => 'lab',          'desc' => 'NABL standard diagnostic lab — round the clock.'],
    ['name' => 'CT & Radiology Imaging',        'icon' => 'scan',         'desc' => '128-slice CT, USG, X-ray & advanced imaging.'],
    ['name' => 'Internal Medicine',             'icon' => 'medicine',     'desc' => 'Comprehensive adult medical care.'],
    ['name' => 'General Surgery',               'icon' => 'surgery2',     'desc' => 'Complete spectrum of surgical procedures.'],
];

$DOCTORS = [
    ['name' => 'Dr. Amit Mehta',     'spec' => 'Internal Medicine',           'qual' => 'MD (AIIMS)',      'role' => 'Founder & Director'],
    ['name' => 'Dr. Manisha Mehta',  'spec' => 'Gynaecology & Obstetrics',    'qual' => 'MS, DGO',         'role' => 'Director'],
    ['name' => 'Dr. Rajiv Sharma',   'spec' => 'Interventional Cardiology',   'qual' => 'DM Cardiology',   'role' => 'Sr. Consultant'],
    ['name' => 'Dr. Pooja Goyal',    'spec' => 'Paediatrics & Neonatology',   'qual' => 'MD, DCH',         'role' => 'Sr. Consultant'],
];

$TECH = [
    ['name' => '128-Slice CT Scanner',     'tag' => 'Imaging',       'desc' => 'Ultra-fast, low-radiation imaging for cardiac, neuro and whole-body scans.', 'img' => 'https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=900&auto=format&fit=crop'],
    ['name' => 'Modular Operation Theatres','tag' => 'Surgery',      'desc' => 'HEPA-filtered, laminar-flow OTs designed for precision surgery.',           'img' => 'https://images.unsplash.com/photo-1551076805-e1869033e561?w=900&auto=format&fit=crop'],
    ['name' => 'Advanced Cath Lab',        'tag' => 'Cardiology',    'desc' => 'Flat panel digital cath lab for angiography & angioplasty.',              'img' => 'https://images.unsplash.com/photo-1559757175-5700dde675bc?w=900&auto=format&fit=crop'],
    ['name' => 'Dialysis Suite',           'tag' => 'Nephrology',    'desc' => '8-station HDF dialysis with isolation suites.',                            'img' => 'https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?w=900&auto=format&fit=crop'],
    ['name' => 'NICU & PICU',              'tag' => 'Paediatrics',   'desc' => 'Level III neonatal & paediatric ICU with 24×7 neonatologist.',            'img' => 'https://images.unsplash.com/photo-1631815587646-b85a1bb027e1?w=900&auto=format&fit=crop'],
    ['name' => 'NABL Pathology Lab',       'tag' => 'Diagnostics',   'desc' => 'Fully automated lab — biochemistry, hematology, microbiology.',           'img' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?w=900&auto=format&fit=crop'],
];

$BLOGS = [
    ['title' => 'The 7 silent signs of a heart attack you should never ignore',  'cat' => 'Cardiology',    'date' => 'Apr 18, 2026', 'read' => '6 min read',  'author' => 'Dr. Rajiv Sharma',  'img' => 'https://images.unsplash.com/photo-1559757175-5700dde675bc?w=800&auto=format&fit=crop'],
    ['title' => 'Knee replacement at 60+ : What modern surgery looks like today','cat' => 'Orthopaedics',  'date' => 'Apr 09, 2026', 'read' => '5 min read',  'author' => 'Sukhda Editorial',  'img' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=800&auto=format&fit=crop'],
    ['title' => 'A parent\'s guide to fever in newborns — when to rush to NICU', 'cat' => 'Paediatrics',   'date' => 'Mar 28, 2026', 'read' => '4 min read',  'author' => 'Dr. Pooja Goyal',   'img' => 'https://images.unsplash.com/photo-1631815587646-b85a1bb027e1?w=800&auto=format&fit=crop'],
    ['title' => 'Why annual full-body checkups matter after 35',                 'cat' => 'Wellness',      'date' => 'Mar 19, 2026', 'read' => '4 min read',  'author' => 'Sukhda Editorial',  'img' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&auto=format&fit=crop'],
    ['title' => 'Five food habits that quietly damage your kidneys',             'cat' => 'Nephrology',    'date' => 'Mar 11, 2026', 'read' => '7 min read',  'author' => 'Dr. Amit Mehta',    'img' => 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=800&auto=format&fit=crop'],
    ['title' => 'Pregnancy first trimester — what nobody tells you',             'cat' => 'Gynaecology',   'date' => 'Mar 02, 2026', 'read' => '8 min read',  'author' => 'Dr. Manisha Mehta', 'img' => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=800&auto=format&fit=crop'],
    ['title' => 'Migraine vs headache — how doctors actually tell them apart',   'cat' => 'Neurology',     'date' => 'Feb 22, 2026', 'read' => '5 min read',  'author' => 'Sukhda Editorial',  'img' => 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=800&auto=format&fit=crop'],
];

$TESTIMONIALS = [
    [
      'name'      => 'Renu Sharma',
      'age'       => 54,
      'place'     => 'Hisar, Haryana',
      'condition' => 'Cardiac · Angioplasty',
      'doctor'    => 'Dr. Rajiv Sharma',
      'quote'     => 'My father underwent angioplasty here. The cardiac team was attentive day and night. We felt like family, not patients.',
      'outcome'   => 'Recovered',
      'recovery'  => '4 weeks',
      'duration'  => '2:14',
      'youtube'   => 'aqz-KE-bpKQ',
      'poster'    => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1100&auto=format&fit=crop',
    ],
    [
      'name'      => 'Vikas Kumar',
      'age'       => 62,
      'place'     => 'Fatehabad, Haryana',
      'condition' => 'Orthopaedics · Knee Replacement',
      'doctor'    => 'Dr. Sukhda Ortho Team',
      'quote'     => 'Knee replacement done in March. I\'m walking pain-free in 6 weeks. Thank you, Sukhda — you gave me back my mornings.',
      'outcome'   => 'Pain-free',
      'recovery'  => '6 weeks',
      'duration'  => '1:48',
      'youtube'   => 'eRsGyueVLvQ',
      'poster'    => 'https://images.unsplash.com/photo-1631815587646-b85a1bb027e1?w=1100&auto=format&fit=crop',
    ],
    [
      'name'      => 'Sunita Devi',
      'age'       => 47,
      'place'     => 'Hansi, Haryana',
      'condition' => 'Paediatrics · NICU',
      'doctor'    => 'Dr. Pooja Goyal',
      'quote'     => 'My grand-daughter was born premature. The NICU staff treated her like their own. Today she is healthy and beautiful.',
      'outcome'   => 'Discharged healthy',
      'recovery'  => '21 days NICU',
      'duration'  => '2:32',
      'youtube'   => 'fEErySYqItI',
      'poster'    => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=1100&auto=format&fit=crop',
    ],
    [
      'name'      => 'Mohammed Rafiq',
      'age'       => 41,
      'place'     => 'Sirsa, Haryana',
      'condition' => 'Gastroenterology · ERCP',
      'doctor'    => 'Dr. Sukhda Gastro Team',
      'quote'     => 'Affordable, transparent, and world-class. The doctors explained every step. Truly a hospital with a heart.',
      'outcome'   => 'Full recovery',
      'recovery'  => '2 weeks',
      'duration'  => '1:36',
      'youtube'   => 'ScMzIvxBSi4',
      'poster'    => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1100&auto=format&fit=crop',
    ],
    [
      'name'      => 'Anita Yadav',
      'age'       => 36,
      'place'     => 'Bhiwani, Haryana',
      'condition' => 'Gynaecology · Painless Delivery',
      'doctor'    => 'Dr. Manisha Mehta',
      'quote'     => 'I was scared. The team made it gentle, calm and joyful. My baby and I are home, smiling.',
      'outcome'   => 'Healthy delivery',
      'recovery'  => '3 weeks',
      'duration'  => '2:05',
      'youtube'   => 'jNQXAC9IVRw',
      'poster'    => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=1100&auto=format&fit=crop',
    ],
];

$NEWS = [
    [
      'title'   => 'Sukhda launches free cardiac screening camp across April',
      'date'    => 'Apr 22, 2026',
      'tag'     => 'Camp',
      'excerpt' => 'Two-day ECG, BP and lipid screening running at all OPD wings — over 800 community members already registered.',
      'img'     => 'https://images.unsplash.com/photo-1559757175-5700dde675bc?w=1100&auto=format&fit=crop',
    ],
    [
      'title'   => 'NABH re-accreditation renewed for 5 more years',
      'date'    => 'Apr 02, 2026',
      'tag'     => 'Achievement',
      'excerpt' => 'Independent auditors have re-confirmed our quality and patient-safety standards across all 22 specialties.',
      'img'     => 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=900&auto=format&fit=crop',
    ],
    [
      'title'   => 'New 128-slice CT scanner inaugurated at radiology wing',
      'date'    => 'Mar 14, 2026',
      'tag'     => 'Infrastructure',
      'excerpt' => 'Sub-second cardiac scans now possible with reduced radiation — a first for Hisar.',
      'img'     => 'https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=900&auto=format&fit=crop',
    ],
    [
      'title'   => 'World Kidney Day — over 600 patients screened',
      'date'    => 'Mar 10, 2026',
      'tag'     => 'Event',
      'excerpt' => 'Nephrology team led city-wide free screenings; 40 patients enrolled in dialysis support programme.',
      'img'     => 'https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?w=900&auto=format&fit=crop',
    ],
    [
      'title'   => 'Free knee replacement camp for senior citizens',
      'date'    => 'Feb 28, 2026',
      'tag'     => 'Camp',
      'excerpt' => 'Subsidised total knee replacement available for eligible senior citizens through March and April.',
      'img'     => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=900&auto=format&fit=crop',
    ],
    [
      'title'   => 'Maternity wing expansion — 12 new birthing suites',
      'date'    => 'Feb 15, 2026',
      'tag'     => 'Infrastructure',
      'excerpt' => 'Mother-baby suites with painless delivery options and 24×7 anesthesia support.',
      'img'     => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=900&auto=format&fit=crop',
    ],
    [
      'title'   => 'Sukhda named "Best Multispeciality Hospital in Haryana"',
      'date'    => 'Feb 02, 2026',
      'tag'     => 'Achievement',
      'excerpt' => 'Recognised by Haryana Medical Excellence Awards for outcomes, affordability and patient experience.',
      'img'     => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&auto=format&fit=crop',
    ],
];

$NAV = [
    'Home'        => '#',
    'About'       => '#about',
    'Specialties' => '#specialties',
    'Doctors'     => '#doctors',
    'Technology'  => '#technology',
    'Blogs'       => '#blogs',
    'Contact'     => '#contact',
];
