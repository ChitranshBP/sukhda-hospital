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
    // Medical & Critical Care (Treatments, Departments & Specialities)
    ['name' => 'Medical Oncology',              'cat' => 'Medical & Critical Care', 'icon' => 'medicine',     'desc' => 'Targeted chemotherapy, immunotherapy, hormonal therapy and supportive onco-care.'],
    ['name' => 'Interventional Cardiology',     'cat' => 'Medical & Critical Care', 'icon' => 'heart',        'desc' => 'Advanced cath lab, angioplasty & 24x7 cardiac care.'],
    ['name' => 'Cardiac Sciences',              'cat' => 'Medical & Critical Care', 'icon' => 'heart',        'desc' => 'Non-invasive cardiology, echocardiography, TMT, Holter & preventive heart clinics.'],
    ['name' => 'Nephrology & Kidney Care',      'cat' => 'Medical & Critical Care', 'icon' => 'kidney',       'desc' => 'Dialysis, kidney transplant evaluation, volumetric HDF and renal care.'],
    ['name' => 'Internal Medicine',             'cat' => 'Medical & Critical Care', 'icon' => 'medicine',     'desc' => 'Comprehensive adult medical care, multi-system diagnosis & preventive health.'],
    ['name' => 'Emergency & Critical Care',     'cat' => 'Medical & Critical Care', 'icon' => 'ambulance',    'desc' => '24x7 ER, Level-3 ICU vital monitoring & acute emergency triage.'],
    ['name' => 'Trauma Centre',                 'cat' => 'Medical & Critical Care', 'icon' => 'ambulance',    'desc' => 'Dedicated 24x7 polytrauma response bay with multidisciplinary surgical triage.'],
    ['name' => 'Cancer Care Centre',            'cat' => 'Medical & Critical Care', 'icon' => 'cell',         'desc' => 'Comprehensive multi-disciplinary tumor board, radiation & daycare chemotherapy.'],

    // Surgical Specialities (Treatments & Specialities)
    ['name' => 'Surgical Oncology',             'cat' => 'Surgical Specialities',   'icon' => 'scalpel',      'desc' => 'Organ-preserving tumor resection, micro-vascular reconstruction & cancer surgery.'],
    ['name' => 'Spine Surgery',                 'cat' => 'Surgical Specialities',   'icon' => 'bone',         'desc' => 'Microscopic disc decompression, spinal fixation and precision deformity correction.'],
    ['name' => 'Neurosurgery',                  'cat' => 'Surgical Specialities',   'icon' => 'brain',        'desc' => 'Microscope & navigation-assisted surgery for brain tumors, aneurysms & trauma.'],
    ['name' => 'Gastroenterology & ERCP',       'cat' => 'Surgical Specialities',   'icon' => 'stomach',      'desc' => 'Diagnostic and therapeutic GI endoscopy, colonoscopy, ERCP & liver care.'],
    ['name' => 'Orthopedics & Joint Replacement','cat' => 'Surgical Specialities',  'icon' => 'bone',         'desc' => 'Total knee & hip replacement, arthroscopic ligament surgery & trauma management.'],
    ['name' => 'Urology & Laparoscopy',         'cat' => 'Surgical Specialities',   'icon' => 'urology',      'desc' => 'Holmium laser stone removal (RIRS/PCNL), prostate treatment & uro-oncology.'],
    ['name' => 'General & Laparoscopic Surgery','cat' => 'Surgical Specialities',   'icon' => 'surgery2',     'desc' => 'Complete spectrum of open and laparoscopic abdominal surgical procedures.'],
    ['name' => 'Advanced Laparoscopy',          'cat' => 'Surgical Specialities',   'icon' => 'scissors',     'desc' => 'Minimal access keyhole surgeries for gallbladder, hernia, appendicitis & GI repair.'],
    ['name' => 'Bariatric Surgery',             'cat' => 'Surgical Specialities',   'icon' => 'surgery',      'desc' => 'Weight loss & advanced metabolic laparoscopic bypass procedures.'],

    // Women, Child & Specialised (Departments & Specialities)
    ['name' => "Gynaecology & Women's Health",  'cat' => 'Women, Child & Specialised','icon' => 'pregnant',   'desc' => 'Complete gynecological wellness, painless delivery, high-risk maternity & IVF care.'],
    ['name' => 'Paediatrics & Neonatology',     'cat' => 'Women, Child & Specialised','icon' => 'baby',       'desc' => 'Specialist pediatric consultations, newborn screening, vaccination clinic & Level-3 NICU.'],
    ['name' => 'Dermatology & Cosmetology',     'cat' => 'Women, Child & Specialised','icon' => 'skin',       'desc' => 'Skin, hair, laser aesthetics, anti-aging and clinical allergy treatments.'],
    ['name' => 'Psychiatry & Mental Health',    'cat' => 'Women, Child & Specialised','icon' => 'mind',       'desc' => 'Holistic psychological counseling, stress management & mental wellness therapies.'],
    ['name' => 'ENT (Ear, Nose & Throat)',      'cat' => 'Women, Child & Specialised','icon' => 'ear',        'desc' => 'Micro-ear surgery, functional endoscopic sinus surgery (FESS) & speech therapy.'],

    // Diagnostics & Support (Departments & Treatments)
    ['name' => 'Diagnostic Services & Imaging', 'cat' => 'Diagnostics & Support',   'icon' => 'scan',         'desc' => '32-slice CT, USG, Color Doppler, X-ray & advanced diagnostic imaging protocols.'],
    ['name' => 'Lab: Pathology & Microbiology', 'cat' => 'Diagnostics & Support',   'icon' => 'lab',          'desc' => 'NABL accredited diagnostic lab — round the clock automated biochemistry & microbiology.'],
    ['name' => 'Anaesthesia & Pain Management', 'cat' => 'Diagnostics & Support',   'icon' => 'syringe',      'desc' => 'Chronic pain clinic, advanced surgical anaesthesia and palliative recovery support.'],
    ['name' => 'Physiotherapy & Rehabilitation','cat' => 'Diagnostics & Support',   'icon' => 'physio',       'desc' => 'Ergonomic posture therapy, post-op mobility rehab & sports injury recovery clinic.'],
    ['name' => 'Dentistry & Maxillofacial',     'cat' => 'Diagnostics & Support',   'icon' => 'tooth',        'desc' => 'Dental implants, maxillofacial trauma repair, root canals and orthodontic care.'],
];

$DOCTORS = [
    ['name' => 'Dr. Amit Mehta',     'spec' => 'Internal Medicine',           'qual' => 'MD (AIIMS)',      'role' => 'Founder & Director'],
    ['name' => 'Dr. Manisha Mehta',  'spec' => 'Gynaecology & Obstetrics',    'qual' => 'MS, DGO',         'role' => 'Director'],
    ['name' => 'Dr. Rajiv Sharma',   'spec' => 'Interventional Cardiology',   'qual' => 'DM Cardiology',   'role' => 'Sr. Consultant'],
    ['name' => 'Dr. Pooja Goyal',    'spec' => 'Paediatrics & Neonatology',   'qual' => 'MD, DCH',         'role' => 'Sr. Consultant'],
];

$TECH = [
    ['name' => 'Siemens CT Scanner',         'tag' => 'Imaging',       'desc' => '32-slice Siemens Healthineers CT for cardiac, neuro & whole-body scans.', 'img' => 'assets/images/infra/ct-scan.jpg'],
    ['name' => 'Modular Operation Theatre',  'tag' => 'Surgery',       'desc' => 'HEPA-filtered, laminar-flow OT with C-arm and modern anaesthesia.',      'img' => 'assets/images/infra/operation-theatre.jpg'],
    ['name' => 'Advanced Cath Lab',          'tag' => 'Cardiology',    'desc' => 'Fully digital ARTS ZEE PURE catheterisation lab for angio & angioplasty.', 'img' => 'assets/images/infra/cath-lab.jpg'],
    ['name' => 'Dialysis Department',        'tag' => 'Nephrology',    'desc' => 'Seven-bed renal dialysis unit with dedicated isolation stations.',       'img' => 'assets/images/infra/dialysis.jpg'],
    ['name' => 'Cardiac ICU',                'tag' => 'Critical Care', 'desc' => 'Four-bed coronary intensive care with 24×7 cardiac monitoring.',          'img' => 'assets/images/infra/icu.jpg'],
    ['name' => 'NABL Pathology Lab',         'tag' => 'Diagnostics',   'desc' => 'Fully equipped lab — biochemistry, haematology and microbiology.',        'img' => 'assets/images/infra/pathology-lab.jpg'],
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
      'category'  => 'Cardiology',
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
      'category'  => 'Ortho & Joint',
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
      'category'  => 'Paediatrics & NICU',
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
      'category'  => 'Gastroenterology',
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
      'category'  => 'Maternity',
      'doctor'    => 'Dr. Manisha Mehta',
      'quote'     => 'I was scared. The team made it gentle, calm and joyful. My baby and I are home, smiling.',
      'outcome'   => 'Healthy delivery',
      'recovery'  => '3 weeks',
      'duration'  => '2:05',
      'youtube'   => 'jNQXAC9IVRw',
      'poster'    => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=1100&auto=format&fit=crop',
    ],
    [
      'name'      => 'Harbinder Singh',
      'age'       => 58,
      'place'     => 'Rohtak, Haryana',
      'condition' => 'Neuro Surgery · Spine Navigation',
      'category'  => 'Neurology',
      'doctor'    => 'Dr. Amit Mehta',
      'quote'     => 'For two years I could not walk more than 10 meters due to severe spinal compression. After navigation spine surgery at Sukhda, I am back on my farm.',
      'outcome'   => 'Full mobility',
      'recovery'  => '5 weeks',
      'duration'  => '2:45',
      'youtube'   => 'aqz-KE-bpKQ',
      'poster'    => 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=1100&auto=format&fit=crop',
    ],
    [
      'name'      => 'Geeta Rani',
      'age'       => 49,
      'place'     => 'Jind, Haryana',
      'condition' => 'Oncology · Surgical Excision',
      'category'  => 'Oncology',
      'doctor'    => 'Sukhda Cancer Care Team',
      'quote'     => 'Getting a cancer diagnosis was terrifying. The tumor board team at Sukhda gave us hope and precision care without going to Delhi.',
      'outcome'   => 'Tumor Free',
      'recovery'  => '3 months',
      'duration'  => '3:10',
      'youtube'   => 'eRsGyueVLvQ',
      'poster'    => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=1100&auto=format&fit=crop',
    ],
];

$RARE_CASES = [
    [
        'title'     => 'Staged Excision of 7.5cm Skull Base Meningioma with Zero Neurological Deficit',
        'dept'      => 'Neuro Surgery',
        'patient'   => 'Mr. Suresh Kumar, 58 yrs',
        'challenge' => 'A massive vascular tumor compressing the brainstem and optic nerves, presenting with severe bilateral vision loss and ataxia.',
        'treatment' => 'Utilized neuro-navigation and high-definition surgical microscope in a 9-hour staged micro-neurosurgical procedure with intraoperative neuromonitoring.',
        'outcome'   => 'Complete 100% tumor excision. Patient regained functional vision within 3 weeks with zero motor deficits.',
        'doctor'    => 'Dr. Amit Mehta & Neuro Team',
        'badge'     => 'Medical Miracle',
        'img'       => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=900&auto=format&fit=crop',
        'stats'     => ['Surgery Duration' => '9 Hours', 'ICU Stay' => '3 Days', 'Status' => '100% Functional']
    ],
    [
        'title'     => 'Survival & Thriving of 620-gram Extremely Low Birth Weight Preterm Baby',
        'dept'      => 'Neonatology (NICU)',
        'patient'   => 'Baby of Meenakshi, 25 Weeks Preterm',
        'challenge' => 'Born at just 25 weeks gestation weighing only 620 grams with severe infant respiratory distress syndrome and undeveloped lungs.',
        'treatment' => 'Level-3 NICU care with surfactant replacement therapy, high-frequency oscillatory ventilation, and total parenteral nutrition under round-the-clock monitoring.',
        'outcome'   => 'Discharged home safely after 68 days weighing 1.85 kg with normal brain ultrasound and feeding reflexes.',
        'doctor'    => 'Dr. Pooja Goyal & NICU Team',
        'badge'     => 'Rare Survival',
        'img'       => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?w=900&auto=format&fit=crop',
        'stats'     => ['Birth Weight' => '620 Grams', 'NICU Care' => '68 Days', 'Current Status' => 'Thriving']
    ],
    [
        'title'     => 'Bilateral Total Hip & Knee Replacement on 81-Year-Old Cardiac Patient',
        'dept'      => 'Orthopaedics & Joint Replacement',
        'patient'   => 'Mrs. Bhagwani Devi, 81 yrs',
        'challenge' => 'Severe stage-4 osteoarthritis in both hips and knees with underlying ischemic heart disease, leaving her bedridden for 3 years.',
        'treatment' => 'Simultaneous minimally invasive joint replacement under continuous hemodynamic monitoring by multidisciplinary cardiac and orthopedic specialists.',
        'outcome'   => 'Patient stood upright with walker on Day 2 post-op and walked independently by week 5.',
        'doctor'    => 'Sukhda Joint Replacement Team',
        'badge'     => 'High Risk Surgery',
        'img'       => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=900&auto=format&fit=crop',
        'stats'     => ['Patient Age' => '81 Years', 'First Steps' => 'Day 2', 'Joints Replaced' => '4 Joints']
    ],
    [
        'title'     => 'Emergency Stenting for Spontaneous Left Main Coronary Artery Dissection',
        'dept'      => 'Interventional Cardiology',
        'patient'   => 'Mr. Rajesh Jindal, 44 yrs',
        'challenge' => 'Acute left main coronary artery dissection causing cardiogenic shock — a critical emergency with >80% mortality if delayed by even minutes.',
        'treatment' => 'Primary emergency angioplasty completed within 15 minutes of door arrival using Intravascular Ultrasound (IVUS) guidance and drug-eluting stents.',
        'outcome'   => 'Complete restoration of coronary blood flow. Patient discharged on Day 4 with full ejection fraction recovery.',
        'doctor'    => 'Dr. Rajiv Sharma & Cardiac Team',
        'badge'     => 'Lifesaving Intervention',
        'img'       => 'https://images.unsplash.com/photo-1559757175-5700dde675bc?w=900&auto=format&fit=crop',
        'stats'     => ['Door-to-Balloon' => '15 Mins', 'Mortality Risk' => '>80% Averted', 'Hospital Stay' => '4 Days']
    ],
];

$EVENTS = [
    [
        'title'       => 'Free Mega Heart & Blood Pressure Screening Camp',
        'date'        => 'July 18, 2026',
        'time'        => '09:00 AM – 02:00 PM',
        'location'    => 'OPD Block A, Ground Floor, Sukhda Hospital',
        'category'    => 'Health Camp',
        'status'      => 'Registration Open',
        'status_color'=> 'bg-emerald-500 text-white',
        'desc'        => 'Complimentary ECG, Blood Sugar, Blood Pressure checkup and cardiologist consultation for senior citizens and high-risk individuals.',
        'seats'       => '150 Spots Left',
        'icon'        => 'heart-pulse'
    ],
    [
        'title'       => 'CME Workshop: Advances in Minimal Access & Robotic Surgery',
        'date'        => 'July 26, 2026',
        'time'        => '10:00 AM – 04:00 PM',
        'location'    => 'MedPark Auditorium, 3rd Floor',
        'category'    => 'Doctor Symposium',
        'status'      => 'Upcoming',
        'status_color'=> 'bg-brand-600 text-white',
        'desc'        => 'Accredited Continuing Medical Education session featuring live surgical demonstrations and panel discussions for surgeons across Haryana.',
        'seats'       => 'For Medical Professionals',
        'icon'        => 'scissors'
    ],
    [
        'title'       => 'Healthy Motherhood & Antenatal Wellness Masterclass',
        'date'        => 'August 05, 2026',
        'time'        => '11:00 AM – 01:00 PM',
        'location'    => 'Sukhda Women Wellness Wing',
        'category'    => 'Patient Workshop',
        'status'      => 'Registration Open',
        'status_color'=> 'bg-emerald-500 text-white',
        'desc'        => 'Interactive session with Dr. Manisha Mehta covering third-trimester nutrition, painless delivery preparation, and newborn lactation guidance.',
        'seats'       => 'Limited to 40 Couples',
        'icon'        => 'baby'
    ],
    [
        'title'       => 'Free Joint Pain & Arthritis Assessment Camp',
        'date'        => 'August 14, 2026',
        'time'        => '09:30 AM – 03:00 PM',
        'location'    => 'Orthopaedics OPD, Ground Floor',
        'category'    => 'Health Camp',
        'status'      => 'Filling Fast',
        'status_color'=> 'bg-coral-500 text-white',
        'desc'        => 'Free Bone Mineral Density (BMD) test and expert orthopedic evaluation for chronic knee, hip, and spine pain sufferers.',
        'seats'       => '65 Spots Left',
        'icon'        => 'bone'
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
    'Home'          => '#',
    'About'         => '#about',
    'Specialties'   => '#specialties',
    'Technology'    => '#technology',
    'Rare Cases'    => '#rare-cases',
    'Testimonials'  => '#testimonials',
    'Events'        => '#events',
    'Contact'       => '#contact',
];

// Departments grid + header mega menu share this list.
$SPEC_CATS = ['Treatments', 'Departments', 'Specialities'];

// [name, category, description, lucide icon]
$SPECS = [
  // Treatments — surgical & medical interventions
  ['Medical Oncology', 'Treatments', 'Targeted chemotherapy, immunotherapy, hormonal therapy and supportive onco-care.', 'pill'],
  ['Surgical Oncology', 'Treatments', 'Organ-preserving tumour resection, micro-vascular reconstruction and cancer surgery.', 'scissors'],
  ['Interventional Cardiology', 'Treatments', 'Advanced cath lab, angioplasty and 24×7 cardiac care.', 'heart-pulse'],
  ['Spine Surgery', 'Treatments', 'Microscopic disc decompression, spinal fixation and deformity correction.', 'bone'],
  ['Neurosurgery', 'Treatments', 'Navigation-assisted surgery for brain tumours, aneurysms and trauma.', 'brain'],
  ['Orthopaedics & Joint Replacement', 'Treatments', 'Total knee and hip replacement, arthroscopic ligament surgery and trauma.', 'bone'],
  ['General & Laparoscopic Surgery', 'Treatments', 'Full spectrum of open and laparoscopic abdominal procedures.', 'scissors'],
  ['Bariatric Surgery', 'Treatments', 'Weight loss and advanced metabolic laparoscopic bypass procedures.', 'scissors'],
  ['Anaesthesia & Pain Management', 'Treatments', 'Chronic pain clinic, surgical anaesthesia and palliative recovery support.', 'syringe'],
  ['Physiotherapy & Rehabilitation', 'Treatments', 'Posture therapy, post-op mobility rehab and sports injury recovery.', 'dumbbell'],
  // Departments — core hospital clinical & lab units
  ['Internal Medicine', 'Departments', 'Comprehensive adult medical care, multi-system diagnosis and preventive health.', 'stethoscope'],
  ['Emergency & Critical Care', 'Departments', '24×7 ER, Level-3 ICU vital monitoring and acute emergency triage.', 'ambulance'],
  ['Trauma Centre', 'Departments', 'Dedicated polytrauma response bay with multidisciplinary surgical triage.', 'ambulance'],
  ['Cancer Care Centre', 'Departments', 'Multi-disciplinary tumour board, radiation and daycare chemotherapy.', 'biohazard'],
  ["Gynaecology & Women's Health", 'Departments', 'Gynaecological wellness, painless delivery, high-risk maternity and IVF care.', 'baby'],
  ['Paediatrics & Neonatology', 'Departments', 'Newborn screening, vaccination clinic and Level-3 NICU.', 'baby'],
  ['Diagnostic Services & Imaging', 'Departments', 'CT, USG, Colour Doppler, X-ray and advanced imaging protocols.', 'scan'],
  ['Lab: Pathology & Microbiology', 'Departments', 'NABL accredited lab — round-the-clock biochemistry and microbiology.', 'flask-conical'],
  ['Dentistry & Maxillofacial', 'Departments', 'Dental implants, maxillofacial trauma repair, root canals and orthodontics.', 'shell'],
  // Specialities — organ & system super-speciality care
  ['Cardiac Sciences', 'Specialities', 'Echocardiography, TMT, Holter and preventive heart clinics.', 'heart-pulse'],
  ['Nephrology & Kidney Care', 'Specialities', 'Dialysis, transplant evaluation, volumetric HDF and renal care.', 'droplet'],
  ['Gastroenterology & ERCP', 'Specialities', 'Diagnostic and therapeutic GI endoscopy, colonoscopy, ERCP and liver care.', 'circle'],
  ['Urology & Laparoscopy', 'Specialities', 'Holmium laser stone removal, prostate treatment and uro-oncology.', 'activity'],
  ['Dermatology & Cosmetology', 'Specialities', 'Skin, hair, laser aesthetics, anti-ageing and clinical allergy treatment.', 'sparkles'],
  ['Psychiatry & Mental Health', 'Specialities', 'Psychological counselling, stress management and wellness therapy.', 'smile'],
  ['ENT (Ear, Nose & Throat)', 'Specialities', 'Micro-ear surgery, endoscopic sinus surgery (FESS) and speech therapy.', 'ear'],
];
