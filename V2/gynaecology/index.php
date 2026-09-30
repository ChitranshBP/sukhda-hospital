<?php
$year = date('Y');

$services = [
    [
        'baby',
        'Normal & Painless Delivery (LDR)',
        'Private, hygienic labour-delivery suites equipped with continuous fetal CTG monitoring and epidural analgesia for comfortable, safe childbirth.'
    ],
    [
        'shield-alert',
        'High-Risk Pregnancy Management',
        'Specialised clinical care for gestational diabetes, pre-eclampsia, hypertension, twin pregnancies, previous C-sections, and recurrent miscarriages.'
    ],
    [
        'sparkles',
        'Advanced Laparoscopic Gynaecology',
        'Minimally invasive keyhole surgery for uterine fibroids (myomectomy), ovarian cysts, endometriosis, ectopic pregnancy, and Total Laparoscopic Hysterectomy (TLH).'
    ],
    [
        'heart-pulse',
        'Infertility Workup & IUI',
        'Comprehensive fertility evaluations, ovulation induction, follicular tracking, diagnostic hysteroscopy, semen analysis, and intrauterine insemination (IUI).'
    ],
    [
        'activity',
        'PCOD, PCOS & Adolescent Care',
        'Holistic management of polycystic ovarian syndrome, irregular periods, hormonal acne, thyroid disorders, and adolescent menstrual wellness.'
    ],
    [
        'shield-check',
        'Women’s Cancer Screening & Menopause',
        'Pap smears, HPV testing, colposcopy, breast examination, menopausal symptom management, bone mineral density assessment, and hormone counselling.'
    ]
];

$conditions = [
    'High-Risk Pregnancies',
    'Uterine Fibroids (Myomas)',
    'Ovarian Cysts & Tumours',
    'Endometriosis & Adenomyosis',
    'PCOD / PCOS Disorders',
    'Female Infertility & Tubal Blocks',
    'Heavy / Irregular Menstrual Bleeding',
    'Pelvic Organ Prolapse & Incontinence',
    'Ectopic / Tubal Pregnancies',
    'Cervical Dysplasia & Erosion',
    'Post-Menopausal Bleeding & Osteoporosis',
    'Recurrent Urinary Tract Infections (UTI)'
];

$journey = [
    [
        'Pre-Conception & Trimester 1',
        'Pre-pregnancy counselling, early dating ultrasound, baseline blood work, dual marker screening, and folic acid / nutritional guidance.'
    ],
    [
        'Trimester 2 (Anomaly Scan)',
        'Targeted Level-II anomaly scan, fetal echocardiography, quadruple marker tests, maternal glucose tolerance screening, and prenatal classes.'
    ],
    [
        'Trimester 3 & Birth Plan',
        'Fetal growth monitoring, colour Doppler studies, non-stress tests (NST), birth planning (Normal / Painless Epidural / Planned Caesarean).'
    ],
    [
        'Delivery & NICU Backup',
        'Safe, monitored delivery in modern LDR suites with experienced obstetricians, anaesthetists, and 24/7 Level II/III NICU team on standby.'
    ],
    [
        'Postnatal Recovery & Lactation',
        'Immediate skin-to-skin bonding, lactation support, pelvic floor rehabilitation, maternal health checkup, and newborn immunization.'
    ]
];

$faqs = [
    [
        'What is painless delivery and is it safe for my baby and me?',
        'Painless delivery is achieved using Epidural Analgesia, where a local anaesthetic is administered into the lower back space by a trained anaesthetist. It significantly relieves labour pain while allowing the mother to stay fully awake, relaxed, and active during delivery. It is internationally recognized as completely safe for both mother and child.'
    ],
    [
        'What conditions make a pregnancy "High-Risk"?',
        'A pregnancy may be classified as high-risk due to pre-existing conditions (diabetes, high blood pressure, thyroid dysfunction, heart disease), maternal age under 18 or above 35, multiple gestations (twins/triplets), previous pregnancy complications, placenta praevia, or intrauterine growth restriction (IUGR). Our multidisciplinary ICU and neonatal backup ensure optimal outcomes.'
    ],
    [
        'What are the advantages of Laparoscopic (Keyhole) Gynaecological Surgery?',
        'Laparoscopic surgery uses tiny 5-10 mm incisions instead of large cuts. Benefits include significantly less post-operative pain, minimal blood loss, minimal scarring, lower infection risk, and a faster return to normal daily activities within 2-3 days compared to weeks for open surgery.'
    ],
    [
        'Does Sukhda Hospital have 24/7 emergency facilities for delivery and Caesarean sections?',
        'Yes. Sukhda Multispeciality Hospital has round-the-clock on-duty obstetricians, anaesthesiologists, modular operation theatres, a fully equipped blood storage backup, and a dedicated Neonatal Intensive Care Unit (NICU) with Paediatricians ready 24/7 for immediate emergency Caesarean deliveries.'
    ],
    [
        'Are maternity and gynaecology treatments covered under cashless insurance?',
        'Yes. Sukhda Hospital is empanelled with major TPAs, private health insurers (Star Health, HDFC ERGO, ICICI Lombard, Care, etc.), and Government schemes like Ayushman Bharat (PM-JAY), CGHS, ECHS, and Haryana Govt Health Schemes for eligible cashless procedures.'
    ]
];

$empanelledGov = [
    'Ayushman Bharat (PM-JAY)',
    'CGHS (Central Govt Health Scheme)',
    'ECHS (Ex-Servicemen Contributory Health Scheme)',
    'Haryana Govt Employees & Pensioners',
    'Northern Railway',
    'BSNL',
    'Food Corporation of India (FCI)'
];

$empanelledTPA = [
    'Star Health Insurance',
    'HDFC ERGO General Insurance',
    'ICICI Lombard',
    'Bajaj Allianz',
    'Care Health Insurance (Religare)',
    'Niva Bupa Health Insurance',
    'Medi Assist TPA',
    'Paramount Health TPA',
    'MDIndia Healthcare TPA',
    'Vidal Health TPA'
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gynaecology &amp; Obstetrics Department | Sukhda Hospital Hisar</title>
    <meta name="description" content="Department of Gynaecology &amp; Obstetrics at Sukhda Multispeciality Hospital, Hisar. Led by Dr. Nidhi Mehta. Safe &amp; painless deliveries, high-risk pregnancy care, laparoscopic surgery, PCOD clinic, and 24/7 NICU.">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script>
    <style>
        :root {
            --blue: #07356b;
            --blue-dark: #052347;
            --green: #078b4b;
            --green-light: #eaf7f0;
            --pale: #f2f7fb;
            --muted: #53677f;
            --line: #dce7f0
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            color: var(--blue);
            font: 16px/1.55 'Nunito Sans', sans-serif;
            background: #fff;
            overflow-x: hidden
        }

        a {
            text-decoration: none;
            color: inherit
        }

        img {
            display: block;
            width: 100%
        }

        .wrap {
            width: min(1400px, calc(100% - 100px));
            margin: auto
        }

        /* TOP BAR */
        .top {
            height: 40px;
            background: var(--blue);
            color: #fff;
            font-size: 13px
        }

        .top .wrap,
        .nav .wrap {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .links {
            display: flex;
            gap: 20px;
            align-items: center
        }

        .links a {
            color: #fff;
            transition: color 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px
        }

        .links a:hover {
            color: #72e0a2
        }

        .links span+span,
        .links a+a {
            border-left: 1px solid #ffffff55;
            padding-left: 20px
        }

        /* NAVIGATION */
        .nav {
            height: 80px;
            box-shadow: 0 2px 9px #07356b19;
            position: relative;
            z-index: 100;
            background: #fff
        }

        .logo {
            width: 230px;
            height: 62px;
            object-fit: contain;
            object-position: left center
        }

        .menu {
            display: flex;
            gap: 30px;
            align-items: center;
            font-size: 15.5px;
            font-weight: 700
        }

        .menu a {
            padding: 28px 0;
            position: relative;
            transition: color 0.2s ease
        }

        .menu a:hover,
        .menu .on {
            color: var(--green)
        }

        .menu .on:after {
            content: '';
            height: 3px;
            background: var(--green);
            position: absolute;
            bottom: 14px;
            left: 0;
            right: 0
        }

        .nav-group {
            position: relative;
            display: inline-flex;
            align-items: center
        }

        .nav-group > a {
            display: inline-flex;
            align-items: center;
            gap: 4px
        }

        .nav-chevron {
            width: 14px;
            height: 14px;
            stroke-width: 2.4;
            transition: transform 0.2s ease
        }

        .nav-group:hover .nav-chevron {
            transform: rotate(180deg)
        }

        .nav-drop {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 250px;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 8px;
            box-shadow: 0 8px 24px rgba(7, 53, 107, 0.12);
            padding: 8px 0;
            z-index: 1000
        }

        .nav-drop a {
            display: block;
            padding: 11px 20px !important;
            font-size: 14.5px;
            font-weight: 600;
            color: var(--blue);
            border: 0 !important
        }

        .nav-drop a:hover {
            background: var(--pale);
            color: var(--green)
        }

        .nav-group:hover .nav-drop {
            display: block
        }

        .services-drop {
            min-width: 280px
        }

        .btn {
            display: inline-flex;
            gap: 8px;
            align-items: center;
            justify-content: center;
            border: 1px solid #aebfd0;
            padding: 13px 24px;
            border-radius: 7px;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.2s ease
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(7, 53, 107, 0.15)
        }

        .primary {
            background: var(--green);
            border-color: var(--green);
            color: #fff
        }

        .primary:hover {
            background: #06753f;
            border-color: #06753f;
            color: #fff
        }

        .white {
            background: #fff;
            color: var(--blue);
            border-color: #fff
        }

        .white:hover {
            background: #f0f6fa
        }

        .small {
            padding: 10px 22px;
            font-size: 13px
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(135deg, #052347 0%, #07356b 100%);
            color: #fff;
            padding: 50px 0 44px;
            position: relative;
            overflow: hidden;
        }

        .hero .wrap {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 40px;
            align-items: center;
        }

        .hero-copy {
            width: 100%;
        }

        .hero-media {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-img-card {
            position: relative;
            width: 100%;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 44px rgba(0, 0, 0, 0.4);
            border: 3px solid rgba(255, 255, 255, 0.25);
            background: #052347;
        }

        .hero-img-card img {
            width: 100%;
            height: auto;
            max-height: 460px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .hero-img-card:hover img {
            transform: scale(1.02);
        }

        .hero-badge-float {
            position: absolute;
            bottom: 16px;
            left: 16px;
            right: 16px;
            background: rgba(5, 35, 71, 0.94);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(114, 224, 162, 0.4);
            padding: 12px 16px;
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
            display: flex;
            align-items: center;
            gap: 12px;
            z-index: 2;
        }

        .hero-badge-float i {
            width: 26px;
            height: 26px;
            color: #72e0a2;
            flex-shrink: 0;
        }

        .hero-badge-float b {
            display: block;
            font-size: 14px;
            color: #fff;
            line-height: 1.2;
        }

        .hero-badge-float small {
            display: block;
            font-size: 12px;
            color: #b9d3eb;
        }

        .crumb {
            font-size: 13px;
            color: #b9d3eb;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .crumb a {
            color: #72e0a2;
        }

        .crumb a:hover {
            text-decoration: underline;
        }

        .eyebrow {
            color: #72e0a2;
            font-weight: 900;
            font-size: 13px;
            letter-spacing: 0.9px;
            margin-bottom: 10px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
        }

        .eyebrow-badge {
            background: rgba(114, 224, 162, 0.15);
            border: 1px solid rgba(114, 224, 162, 0.4);
            padding: 4px 12px;
            border-radius: 20px;
        }

        .hero h1 {
            font-size: 40px;
            line-height: 1.18;
            margin: 8px 0 16px;
            letter-spacing: -0.5px;
        }

        .hero h1 span {
            color: #72e0a2;
        }

        .hero p {
            font-size: 16.5px;
            line-height: 1.65;
            color: #dce7f0;
            max-width: 100%;
            margin: 0 0 24px;
        }

        .hero-actions {
            display: flex;
            gap: 14px;
            margin-bottom: 28px;
            flex-wrap: wrap;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            max-width: 100%;
        }

        .hero-stat-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 10px;
            padding: 14px 16px;
            backdrop-filter: blur(4px);
        }

        .hero-stat-card b {
            font-size: 22px;
            display: block;
            color: #72e0a2;
            line-height: 1.1;
        }

        .hero-stat-card small {
            font-size: 13px;
            color: #dce7f0;
        }

        /* SECTIONS */
        .section {
            padding: 60px 0
        }

        .soft {
            background: var(--pale)
        }

        .kicker {
            color: var(--green);
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 6px
        }

        .title {
            font-size: 30px;
            margin: 0 0 10px;
            color: var(--blue)
        }

        .sub {
            color: var(--muted);
            margin: 0 0 28px;
            font-size: 15.5px;
            line-height: 1.55
        }

        /* 2-COL INTRO */
        .intro-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 48px;
            align-items: center
        }

        .intro-copy p {
            color: var(--muted);
            line-height: 1.75;
            font-size: 16px;
            margin: 0 0 18px
        }

        .check-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin: 24px 0
        }

        .check-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14.5px;
            font-weight: 700;
            color: var(--blue)
        }

        .check-item i {
            width: 18px;
            height: 18px;
            color: var(--green);
            flex-shrink: 0
        }

        .intro-media {
            position: relative
        }

        .intro-img-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 16px 36px rgba(7, 53, 107, 0.14);
            border: 4px solid #fff
        }

        .intro-img-card img {
            height: 390px;
            object-fit: cover
        }

        /* SERVICES GRID */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px
        }

        .service-card {
            background: #fff;
            border-radius: 12px;
            padding: 26px 22px;
            border: 1px solid var(--line);
            box-shadow: 0 3px 14px rgba(7, 53, 107, 0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease
        }

        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 24px rgba(7, 53, 107, 0.12);
            border-color: #b7d1e8
        }

        .service-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--green-light);
            color: var(--green);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px
        }

        .service-icon i {
            width: 24px;
            height: 24px
        }

        .service-card h3 {
            font-size: 18.5px;
            margin: 0 0 8px;
            color: var(--blue)
        }

        .service-card p {
            font-size: 14px;
            color: var(--muted);
            line-height: 1.6;
            margin: 0
        }

        /* CONDITIONS PANEL */
        .conditions-panel {
            background: linear-gradient(135deg, var(--blue-dark) 0%, var(--blue) 100%);
            color: #fff;
            border-radius: 14px;
            padding: 40px;
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 48px;
            align-items: center
        }

        .conditions-panel h2 {
            font-size: 32px;
            line-height: 1.2;
            margin: 6px 0 14px
        }

        .conditions-panel p {
            color: #dce7f0;
            line-height: 1.65;
            margin: 0 0 20px;
            font-size: 15.5px
        }

        .cond-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px
        }

        .cond-item {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 14px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px
        }

        .cond-item i {
            color: #72e0a2;
            width: 16px;
            height: 16px;
            flex-shrink: 0
        }

        /* JOURNEY STEPS */
        .journey-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 16px;
            counter-reset: journey-counter
        }

        .journey-step {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 22px 18px;
            box-shadow: 0 3px 12px rgba(7, 53, 107, 0.05);
            position: relative;
            counter-increment: journey-counter;
            display: flex;
            flex-direction: column
        }

        .journey-step:before {
            content: '0' counter(journey-counter);
            font-size: 14px;
            font-weight: 900;
            color: var(--green);
            margin-bottom: 12px
        }

        .journey-step h4 {
            font-size: 16px;
            margin: 0 0 8px;
            color: var(--blue)
        }

        .journey-step p {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.5;
            margin: 0
        }

        /* DOCTOR CARD */
        .doc-feature-card {
            display: grid;
            grid-template-columns: 280px 1fr;
            background: #fff;
            border-radius: 14px;
            border: 1px solid var(--line);
            overflow: hidden;
            box-shadow: 0 6px 24px rgba(7, 53, 107, 0.09)
        }

        .doc-feature-img {
            height: 100%;
            min-height: 320px;
            object-fit: cover;
            object-position: top center;
            background: #f0f5fa
        }

        .doc-feature-body {
            padding: 36px 32px;
            display: flex;
            flex-direction: column;
            justify-content: space-between
        }

        .doc-feature-body h3 {
            font-size: 26px;
            margin: 4px 0;
            color: var(--blue)
        }

        .doc-feature-role {
            font-size: 14px;
            color: var(--green);
            font-weight: 800;
            margin-bottom: 8px
        }

        .doc-feature-deg {
            font-size: 14px;
            color: var(--muted);
            font-weight: 700;
            margin-bottom: 16px
        }

        .doc-feature-body p {
            color: var(--muted);
            line-height: 1.7;
            margin: 0 0 24px;
            font-size: 15px
        }

        /* FAQS */
        .faq-layout {
            display: grid;
            grid-template-columns: 0.75fr 1.25fr;
            gap: 48px
        }

        .faq-item {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 10px;
            margin-bottom: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(7, 53, 107, 0.04)
        }

        .faq-item summary {
            padding: 18px 20px;
            font-size: 16px;
            font-weight: 800;
            color: var(--blue);
            cursor: pointer;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: color 0.2s ease
        }

        .faq-item summary:hover {
            color: var(--green)
        }

        .faq-item summary::-webkit-details-marker {
            display: none
        }

        .faq-item summary:after {
            content: '+';
            font-size: 22px;
            color: var(--green);
            font-weight: 700;
            line-height: 1
        }

        .faq-item[open] summary:after {
            content: '−'
        }

        .faq-content {
            padding: 0 20px 20px;
            font-size: 14.5px;
            color: var(--muted);
            line-height: 1.65
        }

        /* CTA SECTION */
        .cta {
            background: linear-gradient(135deg, var(--blue-dark) 0%, var(--blue) 100%);
            color: #fff;
            padding: 42px 0
        }

        .cta .wrap {
            display: grid;
            grid-template-columns: 100px 1fr auto;
            gap: 32px;
            align-items: center
        }

        .cta-visual img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(255, 255, 255, 0.3)
        }

        .cta h2 {
            font-size: 30px;
            margin: 0 0 8px;
            line-height: 1.18
        }

        .cta p {
            font-size: 15px;
            color: #dbe7f2;
            line-height: 1.5;
            margin: 0
        }

        .cta .actions {
            margin: 0;
            display: flex;
            gap: 12px
        }

        /* EMPANELLED CASHLESS STRIP */
        .empanelled-section {
            background: #fff;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            padding: 28px 0
        }

        .emp-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px
        }

        .emp-head h4 {
            margin: 0;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: var(--blue)
        }

        .emp-head span {
            font-size: 13px;
            color: var(--green);
            font-weight: 700
        }

        .emp-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px
        }

        .emp-pill {
            background: #f4f8fc;
            border: 1px solid #d4e3f0;
            border-radius: 6px;
            padding: 8px 14px;
            font-size: 13px;
            font-weight: 700;
            color: var(--blue);
            display: inline-flex;
            align-items: center;
            gap: 7px
        }

        .emp-pill i {
            width: 15px;
            height: 15px;
            color: var(--green)
        }

        .emp-pill.gov {
            background: #eaf7f0;
            border-color: #bfe8cf;
            color: #06723e
        }

        /* FOOTER */
        .footer {
            background: #fff;
            padding: 48px 0 0;
            border-top: 1px solid var(--line)
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 28% 18% 26% 28%;
            gap: 28px;
            padding-bottom: 36px
        }

        .footer-logo {
            width: 220px;
            margin-bottom: 14px
        }

        .footer-tagline {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.65;
            margin: 0 0 14px
        }

        .footer-nabh-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #f4f8fc;
            border: 1px solid var(--line);
            padding: 7px 14px;
            border-radius: 6px;
            font-size: 12.5px;
            font-weight: 700;
            color: var(--blue)
        }

        .footer-col h4 {
            font-size: 14.5px;
            margin: 0 0 16px;
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 0.5px
        }

        .footer-col a {
            display: block;
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 9px;
            transition: color 0.2s ease
        }

        .footer-col a:hover {
            color: var(--green)
        }

        .footer-col p {
            font-size: 13px;
            color: var(--muted);
            margin: 0 0 5px;
            line-height: 1.5
        }

        .footer-col b {
            font-size: 13.5px;
            color: var(--blue);
            display: block;
            margin-top: 4px
        }

        .footer-contact-line {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-bottom: 12px !important
        }

        .footer-contact-line span {
            font-size: 13px;
            color: var(--muted)
        }

        .sign {
            font-size: 17px;
            font-weight: 900;
            color: var(--green);
            line-height: 1.2;
            margin-top: 16px !important
        }

        .bottom {
            background: var(--pale);
            padding: 16px 0;
            font-size: 13px;
            color: var(--muted);
            border-top: 1px solid var(--line)
        }

        .bottom .wrap {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .hamb {
            border: 0;
            background: transparent;
            color: var(--blue);
            font-size: 28px;
            line-height: 1;
            padding: 8px;
            cursor: pointer;
            display: none
        }

        /* RESPONSIVE MEDIA QUERIES */
        @media(max-width:1100px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .journey-grid {
                grid-template-columns: repeat(3, 1fr)
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 32px
            }
        }

        @media(max-width:900px) {
            .wrap {
                width: calc(100% - 40px)
            }

            .top,
            .menu,
            .nav .primary {
                display: none
            }

            .hamb {
                display: block
            }

            .hero .wrap,
            .intro-grid,
            .conditions-panel,
            .faq-layout {
                grid-template-columns: 1fr;
                gap: 28px
            }

            .doc-feature-card {
                grid-template-columns: 220px 1fr
            }

            .cta .wrap {
                grid-template-columns: 1fr;
                text-align: center
            }

            .cta-visual {
                margin: auto
            }

            .cta .actions {
                justify-content: center
            }

            .nav.open .menu {
                display: flex !important;
                visibility: visible !important;
                opacity: 1 !important;
                position: fixed !important;
                z-index: 1001;
                top: 80px !important;
                right: 0 !important;
                bottom: 0;
                left: auto !important;
                width: min(340px, 88vw);
                max-height: none !important;
                overflow-y: auto;
                flex-direction: column !important;
                align-items: stretch !important;
                gap: 0 !important;
                padding: 14px 20px 28px !important;
                background: #fff;
                box-shadow: -12px 18px 32px rgba(7, 53, 107, 0.22)
            }

            .nav.open .menu a {
                padding: 14px 0;
                border-bottom: 1px solid var(--line)
            }
        }

        @media(max-width:600px) {
            .wrap {
                width: calc(100% - 32px)
            }

            .hero h1 {
                font-size: 32px
            }

            .hero-stats {
                grid-template-columns: 1fr 1fr;
                gap: 12px
            }

            .hero-actions {
                flex-direction: column
            }

            .hero-actions .btn {
                width: 100%
            }

            .title {
                font-size: 24px
            }

            .services-grid {
                grid-template-columns: 1fr
            }

            .cond-grid {
                grid-template-columns: 1fr
            }

            .journey-grid {
                grid-template-columns: 1fr
            }

            .doc-feature-card {
                grid-template-columns: 1fr
            }

            .doc-feature-img {
                height: 260px
            }

            .doc-feature-body {
                padding: 24px 20px
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 24px
            }

            .bottom .wrap {
                flex-direction: column;
                gap: 8px;
                text-align: center
            }
        }
    </style>
</head>

<body>
    <!-- TOP BAR -->
    <div class="top">
        <div class="wrap">
            <div class="links">
                <a href="https://wa.me/919996544005" target="_blank"><i data-lucide="message-circle"></i> WhatsApp Us (24/7)</a>
                <a href="tel:01662249473"><b>☎ 01662-249473 (24/7 Emergency Helpline)</b></a>
            </div>
            <div class="links">
                <a href="../index.php#empanelled">Cashless / TPA</a>
                <a href="../index.php#specialities">OPD Schedule</a>
                <a href="../contact/index.php">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- HEADER / NAVIGATION -->
    <header class="nav">
        <div class="wrap">
            <a href="../index.php" aria-label="Sukhda Healthcare home">
                <img class="logo" src="../assets/images/sukhda-multispeciality-logo.png" alt="Sukhda Multispeciality Hospital Hisar">
            </a>
            <nav class="menu">
                <span class="nav-group">
                    <a href="../about/index.php">About Us <i data-lucide="chevron-down" class="nav-chevron"></i></a>
                    <span class="nav-drop">
                        <a href="../about/index.php">About Sukhda</a>
                        <a href="../about/index.php#leadership">Medical Leadership</a>
                        <a href="../about/index.php#vision">Vision &amp; Mission</a>
                        <a href="../about/index.php#hospitals">Our Hospitals</a>
                        <a href="../about/index.php#infrastructure">Infrastructure &amp; Facilities</a>
                    </span>
                </span>
                <span class="nav-group">
                    <a href="../index.php#hospitals">Our Hospitals <i data-lucide="chevron-down" class="nav-chevron"></i></a>
                    <span class="nav-drop">
                        <a href="../index.php#hospitals">Sukhda Multispeciality Hospital</a>
                        <a href="../index.php#hospitals">Sukhda MedPark (Cancer &amp; Super Speciality)</a>
                    </span>
                </span>
                <span class="nav-group">
                    <a class="on" href="../index.php#specialities">Our Services <i data-lucide="chevron-down" class="nav-chevron"></i></a>
                    <span class="nav-drop services-drop">
                        <a href="../servicemockup/index.php">Medical Oncology</a>
                        <a href="index.php">Gynaecology &amp; Obstetrics</a>
                        <a href="../index.php#specialities">Interventional Cardiology</a>
                        <a href="../index.php#specialities">Critical Care &amp; Medicine</a>
                        <a href="../index.php#specialities">Neuro Surgery &amp; Spine</a>
                        <a href="../index.php#specialities">Orthopaedics &amp; Joint Replacement</a>
                        <a href="../index.php#specialities">Nephrology &amp; Dialysis</a>
                        <a href="../index.php#specialities">Gastroenterology</a>
                        <a href="../index.php#specialities">Emergency &amp; Trauma Care</a>
                        <a href="../index.php#specialities">View All 21 Specialities →</a>
                    </span>
                </span>
                <a href="../index.php#doctors">Doctors</a>
                <a href="../index.php#infrastructure">Technology</a>
                <a href="../index.php#cases">Case Stories</a>
                <a href="../index.php#patients">Testimonials</a>
            </nav>
            <a class="btn primary" href="../contact/index.php"><i data-lucide="calendar-days"></i>Book Appointment</a>
            <button class="hamb" aria-label="Open menu">☰</button>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="wrap">
            <div class="hero-copy">
                <div class="crumb">
                    <a href="../index.php">Home</a> <span>›</span> <a href="../index.php#specialities">Specialities</a> <span>›</span> <span>Gynaecology &amp; Obstetrics</span>
                </div>
                <div class="eyebrow">
                    <span class="eyebrow-badge">CENTRE OF EXCELLENCE • MOTHER &amp; CHILD HEALTH</span>
                    <span>SUKHDA MULTISPECIALITY HOSPITAL</span>
                </div>
                <h1>Comprehensive Care for Women &amp;<br><span>Mothers at Every Stage of Life</span></h1>
                <p>From pre-conceptional planning, normal and painless deliveries, and high-risk pregnancy care to advanced laparoscopic gynaecology, PCOD clinics, and menopausal wellness — backed by 24/7 in-house specialists and a dedicated Level II/III NICU.</p>

                <div class="hero-actions">
                    <a class="btn primary" href="../contact/index.php"><i data-lucide="calendar-days"></i>Book Gynaecology Consultation</a>
                    <a class="btn white" href="tel:01662249473"><i data-lucide="phone-call"></i>24/7 Helpline: 01662-249473</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat-card">
                        <b>15,000+</b>
                        <small>Safe Deliveries Conducted</small>
                    </div>
                    <div class="hero-stat-card">
                        <b>24/7</b>
                        <small>Emergency Labour &amp; C-Section</small>
                    </div>
                    <div class="hero-stat-card">
                        <b>Level II/III</b>
                        <small>Advanced NICU Standby</small>
                    </div>
                    <div class="hero-stat-card">
                        <b>100%</b>
                        <small>Cashless Delivery &amp; Surgery</small>
                    </div>
                </div>
            </div>

            <div class="hero-media">
                <div class="hero-img-card">
                    <img src="../assets/images/gynae-maternity-hero.jpg" alt="Maternity and Gynaecology Care at Sukhda Hospital">
                    <div class="hero-badge-float">
                        <i data-lucide="shield-check"></i>
                        <div>
                            <b>Safe Motherhood &amp; Painless Delivery</b>
                            <small>Senior Obstetricians • 24/7 NICU Backup</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: OVERVIEW -->
    <section class="section">
        <div class="wrap intro-grid">
            <div class="intro-copy">
                <div class="kicker">DEPARTMENT OF GYNAECOLOGY &amp; OBSTETRICS</div>
                <h2 class="title">Compassionate Motherhood &amp; Advanced Women's Health</h2>
                <p>At Sukhda Multispeciality Hospital, we understand that pregnancy and childbirth are deeply personal, life-changing experiences. Our dedicated team of obstetricians, gynaecologists, neonatologists, and trained maternity nurses ensure that every woman receives respectful, empathetic, and evidence-based clinical care.</p>
                <p>We provide comprehensive outpatient and inpatient services ranging from routine prenatal screening and painless labour with epidural analgesia to complex laparoscopic surgeries for fibroids, ovarian cysts, and endometriosis.</p>

                <div class="check-grid">
                    <div class="check-item"><i data-lucide="check-circle-2"></i> Normal &amp; Painless Deliveries (LDR)</div>
                    <div class="check-item"><i data-lucide="check-circle-2"></i> High-Risk Pregnancy ICU Backup</div>
                    <div class="check-item"><i data-lucide="check-circle-2"></i> Advanced Laparoscopic Surgeries</div>
                    <div class="check-item"><i data-lucide="check-circle-2"></i> 24/7 NICU &amp; Paediatric Care</div>
                    <div class="check-item"><i data-lucide="check-circle-2"></i> Infertility &amp; Follicular Tracking</div>
                    <div class="check-item"><i data-lucide="check-circle-2"></i> Cervical Cancer &amp; Pap Smear Screening</div>
                </div>

                <a class="btn primary small" href="../contact/index.php">Schedule a Doctor Consultation →</a>
            </div>

            <div class="intro-media">
                <div class="intro-img-card">
                    <img src="../assets/images/doctor-consult.jpg" alt="Prenatal and Gynaecology Consultation at Sukhda Hospital">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: SERVICES & TREATMENTS -->
    <section class="section soft" id="services">
        <div class="wrap">
            <div class="kicker">OUR CLINICAL EXPERTISE</div>
            <h2 class="title">Comprehensive Maternity &amp; Gynaecology Services</h2>
            <p class="sub">Tailored clinical treatments and state-of-the-art facilities designed for women's health and wellness.</p>

            <div class="services-grid">
                <?php foreach ($services as $srv): ?>
                    <article class="service-card">
                        <div class="service-icon">
                            <i data-lucide="<?= htmlspecialchars($srv[0]) ?>"></i>
                        </div>
                        <h3><?= htmlspecialchars($srv[1]) ?></h3>
                        <p><?= htmlspecialchars($srv[2]) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 3: CONDITIONS WE TREAT -->
    <section class="section">
        <div class="wrap">
            <div class="conditions-panel">
                <div>
                    <div class="eyebrow" style="color:#72e0a2">CONDITIONS WE TREAT</div>
                    <h2>Expert Treatment Across All Gynaecological &amp; Obstetric Conditions</h2>
                    <p>Our specialists utilise modern diagnostic ultrasound, colour Doppler, CT imaging, and minimally invasive techniques to achieve optimal clinical outcomes.</p>
                    <a class="btn white small" href="../contact/index.php"><i data-lucide="calendar-days"></i>Book Appointment</a>
                </div>

                <div class="cond-grid">
                    <?php foreach ($conditions as $c): ?>
                        <div class="cond-item">
                            <i data-lucide="check-circle"></i>
                            <span><?= htmlspecialchars($c) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: CARE JOURNEY -->
    <section class="section soft" id="journey">
        <div class="wrap">
            <div class="kicker">PRENATAL TO POSTNATAL</div>
            <h2 class="title">Your Complete Maternity Care Journey at Sukhda</h2>
            <p class="sub">Step-by-step clinical guidance supporting you and your baby from conception through postpartum wellness.</p>

            <div class="journey-grid">
                <?php foreach ($journey as $step): ?>
                    <article class="journey-step">
                        <h4><?= htmlspecialchars($step[0]) ?></h4>
                        <p><?= htmlspecialchars($step[1]) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 5: LEAD SPECIALIST -->
    <section class="section" id="specialist">
        <div class="wrap">
            <div class="kicker">LEAD CLINICAL SPECIALIST</div>
            <h2 class="title">Meet Our Senior Obstetrician &amp; Gynaecologist</h2>
            <p class="sub">Providing experienced, compassionate, and evidence-based care for mothers and women in Hisar.</p>

            <article class="doc-feature-card">
                <img class="doc-feature-img" src="../assets/images/doctors/dr-nidhi-mehta.jpg" alt="Dr. Nidhi Mehta - Gynaecologist Sukhda Hospital">
                <div class="doc-feature-body">
                    <div>
                        <div class="doc-feature-role">SENIOR CONSULTANT OBSTETRICIAN &amp; GYNAECOLOGIST</div>
                        <h3>Dr. Nidhi Mehta</h3>
                        <div class="doc-feature-deg">M.B.B.S, D.G.O, D.N.B (Obstetrics &amp; Gynaecology)</div>
                        <p>Dr. Nidhi Mehta brings extensive clinical experience in managing normal and painless deliveries, complex high-risk pregnancies, recurrent miscarriages, and advanced laparoscopic gynaecological surgeries. Known for her patient-friendly approach, she emphasises clear communication, emotional reassurance, and evidence-based obstetrics.</p>
                    </div>
                    <div>
                        <a class="btn primary small" href="../contact/index.php"><i data-lucide="calendar-days"></i>Consult with Dr. Nidhi Mehta</a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- SECTION 6: FAQS -->
    <section class="section soft" id="faqs">
        <div class="wrap faq-layout">
            <div>
                <div class="kicker">FREQUENTLY ASKED QUESTIONS</div>
                <h2 class="title">Common Questions About Maternity &amp; Women's Health</h2>
                <p class="sub">Clear answers to help you make informed decisions regarding pregnancy, delivery options, and surgical care.</p>
                <a class="btn primary small" href="../contact/index.php"><i data-lucide="message-circle"></i>Ask a Doctor</a>
            </div>

            <div>
                <?php foreach ($faqs as $idx => $faq): ?>
                    <details class="faq-item" <?= $idx === 0 ? 'open' : '' ?>>
                        <summary><?= htmlspecialchars($faq[0]) ?></summary>
                        <div class="faq-content">
                            <?= htmlspecialchars($faq[1]) ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CASHLESS / EMPANELLED STRIP -->
    <section class="empanelled-section" id="empanelled">
        <div class="wrap">
            <div class="emp-head">
                <h4>Cashless Maternity &amp; Empanelled Insurance Partners</h4>
                <span>Hassle-Free TPA &amp; Govt Health Schemes</span>
            </div>
            <div class="emp-pills">
                <?php foreach ($empanelledGov as $gov): ?>
                    <span class="emp-pill gov"><i data-lucide="shield-check"></i> <?= htmlspecialchars($gov) ?></span>
                <?php endforeach; ?>
                <?php foreach ($empanelledTPA as $tpa): ?>
                    <span class="emp-pill"><i data-lucide="check-circle-2"></i> <?= htmlspecialchars($tpa) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta" id="contact">
        <div class="wrap">
            <div class="cta-visual">
                <img src="../assets/images/logo-mark.png" alt="Sukhda Healthcare Logo Mark">
            </div>
            <div>
                <h2>Expecting a Baby or Need Women's Health Advice?</h2>
                <p>Book a prenatal appointment or speak directly with our 24/7 maternity care coordinator in Hisar.</p>
            </div>
            <div class="actions">
                <a class="btn primary" href="../contact/index.php"><i data-lucide="calendar-days"></i>Book Consultation</a>
                <a class="btn white" href="tel:01662249473"><i data-lucide="phone-call"></i>24/7 Helpline: 01662-249473</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="wrap">
            <div class="footer-grid">
                <div>
                    <img class="footer-logo" src="../assets/images/sukhda-multispeciality-logo.png" alt="Sukhda Multispeciality Hospital">
                    <p class="footer-tagline">Providing quality, compassionate, and affordable multi &amp; super speciality medical care across Hisar and surrounding regions since 2002.</p>
                    <div class="footer-nabh-badge">
                        <img src="../assets/images/nabh.jpg" alt="NABH Accredited" style="width:26px;height:26px;object-fit:contain">
                        <span>NABH Accredited Quality Healthcare</span>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <a href="../index.php">Home</a>
                    <a href="../about/index.php">About Sukhda</a>
                    <a href="../about/index.php#leadership">Medical Leadership</a>
                    <a href="../index.php#hospitals">Our Hospitals</a>
                    <a href="../index.php#specialities">Centres of Excellence</a>
                    <a href="../index.php#doctors">Our Doctors</a>
                    <a href="../contact/index.php">Contact Us</a>
                </div>

                <div class="footer-col">
                    <h4>Our Hospitals</h4>
                    <b>Sukhda Multispeciality Hospital</b>
                    <p>Delhi Road, Model Town, Hisar, Haryana 125005</p>
                    <p>Phone: 01662-249473 / 249474</p>
                    <br>
                    <b>Sukhda MedPark (Cancer &amp; Super Speciality)</b>
                    <p>Hisar, Haryana</p>
                    <p>Helpline: +91-99965-44005</p>
                </div>

                <div class="footer-col">
                    <h4>24×7 Emergency &amp; OPD</h4>
                    <div class="footer-contact-line">
                        <i data-lucide="phone-call" style="width:18px;color:var(--green);flex-shrink:0;margin-top:2px"></i>
                        <span><b>24/7 Emergency:</b> 01662-249473 / +91-99965-44005</span>
                    </div>
                    <div class="footer-contact-line">
                        <i data-lucide="mail" style="width:18px;color:var(--green);flex-shrink:0;margin-top:2px"></i>
                        <span>info@sukhdahospitalhisar.com</span>
                    </div>
                    <div class="footer-contact-line">
                        <i data-lucide="map-pin" style="width:18px;color:var(--green);flex-shrink:0;margin-top:2px"></i>
                        <span>Delhi Road, Hisar, Haryana - 125005</span>
                    </div>
                    <p class="sign">Care &amp; Cure for Whole Family Under One Roof</p>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="wrap">
                <span>© <?= $year ?> Sukhda Healthcare. All rights reserved.</span>
                <span>Delhi Road, Hisar (Haryana) • NABH Accredited • Emergency Helpline: 01662-249473</span>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script>
        if (window.lucide) lucide.createIcons({ attrs: { 'stroke-width': 1.8 } });

        // Mobile Menu Toggle
        (() => {
            const nav = document.querySelector('.nav'), button = document.querySelector('.hamb'), menu = document.querySelector('.menu');
            if (!nav || !button || !menu) return;
            menu.id = 'mobile-menu';
            button.type = 'button';
            button.setAttribute('aria-controls', menu.id);
            button.setAttribute('aria-expanded', 'false');
            button.setAttribute('aria-label', 'Open menu');
            const close = () => {
                nav.classList.remove('open');
                button.setAttribute('aria-expanded', 'false');
                button.setAttribute('aria-label', 'Open menu');
                button.blur();
            };
            button.onclick = e => {
                e.preventDefault();
                e.stopPropagation();
                const open = !nav.classList.contains('open');
                nav.classList.toggle('open', open);
                button.setAttribute('aria-expanded', String(open));
                button.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
                if (!open) button.blur();
            };
            menu.onclick = e => { if (e.target.closest('a')) close(); };
            document.addEventListener('click', e => { if (nav.classList.contains('open') && !nav.contains(e.target)) close(); });
            document.addEventListener('keydown', e => { if (e.key === 'Escape') close(); });
        })();
    </script>
</body>

</html>
