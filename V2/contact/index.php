<?php
$year = date('Y');

$specialities = [
    'Internal Medicine & Critical Care',
    'Interventional Cardiology',
    'Medical Oncology (Chemotherapy)',
    'Surgical Oncology',
    'Radiation Oncology (LINAC)',
    'Neuro Surgery & Spine',
    'Nephrology & Dialysis',
    'Gastroenterology & Hepatology',
    'Advanced Laparoscopy & Urology',
    'Arthroscopy & Joint Replacement',
    'Gynaecology & Obstetrics',
    'Paediatrics & Neonatology',
    'ENT (Ear, Nose & Throat)',
    'Dermatology & Cosmetology',
    'CT & Radiology Imaging',
    'Emergency Medicine & Trauma (24×7)',
    'Psychiatry & Mental Health',
    'Dentistry & Maxillofacial Surgery',
    'Physiotherapy & Rehabilitation',
    'Pathology & Microbiology Lab',
    'Anesthesiology & Pain Management'
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
    <title>Contact Us &amp; OPD Booking | Sukhda Healthcare Hisar</title>
    <meta name="description" content="Contact Sukhda Healthcare in Hisar. 24/7 Emergency Helpline: 01662-249473 / +91-99965-44005. Book specialist OPD appointments, emergency ambulance, and hospital inquiries online.">
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

        .hero-top-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 36px;
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
            max-height: 380px;
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
            flex-wrap: wrap;
        }

        /* QUICK CONTACT CARDS */
        .contact-cards-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px
        }

        .c-card {
            background: #fff;
            border-radius: 12px;
            padding: 22px 20px;
            border: 1px solid var(--line);
            box-shadow: 0 4px 16px rgba(7, 53, 107, 0.06);
            display: flex;
            flex-direction: column;
            gap: 8px;
            transition: transform 0.2s ease, box-shadow 0.2s ease
        }

        .c-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 24px rgba(7, 53, 107, 0.12);
            border-color: #b7d1e8
        }

        .c-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #eaf3fb;
            color: var(--blue);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 4px
        }

        .c-card.emergency .c-icon {
            background: #fee2e2;
            color: #dc2626
        }

        .c-card.whatsapp .c-icon {
            background: #eaf7f0;
            color: var(--green)
        }

        .c-icon i {
            width: 22px;
            height: 22px
        }

        .c-card h4 {
            margin: 0;
            font-size: 14px;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.5px
        }

        .c-card b {
            font-size: 16.5px;
            color: var(--blue);
            line-height: 1.25
        }

        .c-card small {
            font-size: 12.5px;
            color: var(--muted)
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

        /* FORM & INFO LAYOUT */
        .contact-layout {
            display: grid;
            grid-template-columns: 1.25fr 0.95fr;
            gap: 40px;
            align-items: flex-start
        }

        .form-box {
            background: #fff;
            border-radius: 14px;
            padding: 36px 32px;
            border: 1px solid var(--line);
            box-shadow: 0 6px 24px rgba(7, 53, 107, 0.08)
        }

        .form-box h3 {
            font-size: 23px;
            margin: 0 0 8px;
            color: var(--blue)
        }

        .form-box p {
            font-size: 14.5px;
            color: var(--muted);
            margin: 0 0 24px
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .form-group.full {
            grid-column: span 2
        }

        .form-group label {
            font-size: 13.5px;
            font-weight: 700;
            color: var(--blue)
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-family: inherit;
            font-size: 14.5px;
            padding: 12px 14px;
            border: 1px solid #c9d9e8;
            border-radius: 8px;
            background: #fdfdfd;
            color: var(--blue);
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 3px rgba(7, 139, 75, 0.15);
            background: #fff
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px
        }

        .form-submit-btn {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            margin-top: 8px
        }

        .form-success-alert {
            display: none;
            background: #eaf7f0;
            border: 1px solid #8fe0b2;
            color: #06723e;
            padding: 14px 18px;
            border-radius: 8px;
            font-size: 14.5px;
            font-weight: 700;
            margin-bottom: 20px
        }

        /* SIDEBAR / TIMINGS & INFO */
        .info-sidebar {
            display: flex;
            flex-direction: column;
            gap: 24px
        }

        .info-card {
            background: #fff;
            border-radius: 12px;
            padding: 26px 24px;
            border: 1px solid var(--line);
            box-shadow: 0 4px 16px rgba(7, 53, 107, 0.06)
        }

        .info-card h4 {
            font-size: 18px;
            margin: 0 0 16px;
            color: var(--blue);
            display: flex;
            align-items: center;
            gap: 8px
        }

        .info-card h4 i {
            color: var(--green);
            width: 20px;
            height: 20px
        }

        .timing-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dashed var(--line);
            font-size: 14px
        }

        .timing-row:last-child {
            border-bottom: 0
        }

        .timing-row span:first-child {
            color: var(--muted);
            font-weight: 600
        }

        .timing-row span:last-child {
            color: var(--blue);
            font-weight: 700
        }

        .emergency-pill-tag {
            background: #fee2e2;
            color: #b91c1c;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 800
        }

        /* BRANCHES 2-COL */
        .branches-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px
        }

        .branch-card {
            background: #fff;
            border-radius: 12px;
            border: 1px solid var(--line);
            overflow: hidden;
            box-shadow: 0 4px 18px rgba(7, 53, 107, 0.08);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease, box-shadow 0.2s ease
        }

        .branch-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 26px rgba(7, 53, 107, 0.14)
        }

        .branch-header {
            padding: 22px 24px;
            background: linear-gradient(135deg, #f8fbfe 0%, #edf5fc 100%);
            border-bottom: 1px solid var(--line);
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .branch-header h3 {
            font-size: 19px;
            margin: 0 0 4px;
            color: var(--blue)
        }

        .branch-badge {
            background: #eaf7f0;
            border: 1px solid #bfe8cf;
            color: #06723e;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11.5px;
            font-weight: 800
        }

        .branch-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
            flex-grow: 1;
            justify-content: space-between
        }

        .branch-line {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 14.5px;
            color: var(--muted)
        }

        .branch-line i {
            width: 20px;
            height: 20px;
            color: var(--green);
            flex-shrink: 0;
            margin-top: 2px
        }

        .branch-line b {
            color: var(--blue)
        }

        .branch-actions {
            display: flex;
            gap: 12px;
            margin-top: 8px
        }

        /* MAP SECTION */
        .map-section {
            background: #fff;
            padding: 0 0 60px
        }

        .map-frame-box {
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--line);
            box-shadow: 0 8px 24px rgba(7, 53, 107, 0.1);
            height: 380px;
            background: #e5edf5;
            position: relative
        }

        .map-frame-box iframe {
            width: 100%;
            height: 100%;
            border: 0
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
            .contact-cards-grid {
                grid-template-columns: repeat(2, 1fr)
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

            .hero-top-grid,
            .contact-layout {
                grid-template-columns: 1fr;
                gap: 28px
            }

            .branches-grid {
                grid-template-columns: 1fr;
                gap: 24px
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

            .contact-cards-grid {
                grid-template-columns: 1fr
            }

            .form-box {
                padding: 24px 20px
            }

            .form-grid {
                grid-template-columns: 1fr
            }

            .form-group.full {
                grid-column: span 1
            }

            .branch-actions {
                flex-direction: column
            }

            .branch-actions .btn {
                width: 100%
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
                <a href="index.php">Contact Us</a>
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
                    <a href="../index.php#specialities">Our Services <i data-lucide="chevron-down" class="nav-chevron"></i></a>
                    <span class="nav-drop services-drop">
                        <a href="../servicemockup/index.php">Medical Oncology</a>
                        <a href="../index.php#specialities">Interventional Cardiology</a>
                        <a href="../index.php#specialities">Critical Care &amp; Medicine</a>
                        <a href="../index.php#specialities">Neuro Surgery &amp; Spine</a>
                        <a href="../index.php#specialities">Orthopaedics &amp; Joint Replacement</a>
                        <a href="../index.php#specialities">Nephrology &amp; Dialysis</a>
                        <a href="../index.php#specialities">Gastroenterology</a>
                        <a href="../gynaecology/index.php">Gynaecology &amp; Obstetrics</a>
                        <a href="../index.php#specialities">Emergency &amp; Trauma Care</a>
                        <a href="../index.php#specialities">View All 21 Specialities →</a>
                    </span>
                </span>
                <a href="../index.php#doctors">Doctors</a>
                <a href="../index.php#infrastructure">Technology</a>
                <a href="../index.php#cases">Case Stories</a>
                <a href="../index.php#patients">Testimonials</a>
            </nav>
            <a class="btn primary" href="#appointment-form"><i data-lucide="calendar-days"></i>Book Appointment</a>
            <button class="hamb" aria-label="Open menu">☰</button>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="wrap">
            <div class="hero-top-grid">
                <div class="hero-copy">
                    <div class="crumb">
                        <a href="../index.php">Home</a> <span>›</span> <span>Contact Us</span>
                    </div>
                    <div class="eyebrow">
                        <span class="eyebrow-badge">24/7 EMERGENCY &amp; OPD BOOKINGS</span>
                        <span>HISAR, HARYANA</span>
                    </div>
                    <h1>Get in Touch with<br><span>Sukhda Healthcare Team</span></h1>
                    <p>Whether you require urgent emergency care, specialist OPD doctor consultations, or guidance regarding cashless TPA insurance — our dedicated medical and patient-care coordination team is available round-the-clock.</p>

                    <div class="hero-actions">
                        <a class="btn primary" href="#appointment-form"><i data-lucide="calendar-days"></i>Book OPD Appointment</a>
                        <a class="btn white" href="tel:01662249473"><i data-lucide="phone-call"></i>24/7 Helpline: 01662-249473</a>
                    </div>
                </div>

                <div class="hero-media">
                    <div class="hero-img-card">
                        <img src="../assets/images/doctor-consult.jpg" alt="Sukhda Hospital Doctor Consultation and Patient Helpdesk">
                        <div class="hero-badge-float">
                            <i data-lucide="clock"></i>
                            <div>
                                <b>24/7 Emergency &amp; OPD Assistance</b>
                                <small>Rapid Helpdesk • Call +91-99965-44005</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-cards-grid">
                <!-- EMERGENCY -->
                <div class="c-card emergency">
                    <div class="c-icon"><i data-lucide="phone-call"></i></div>
                    <h4>24/7 Emergency Helpline</h4>
                    <b>+91-99965-44005</b>
                    <small>Instant ambulance &amp; ICU team response</small>
                </div>

                <!-- RECEPTION / LANDLINE -->
                <div class="c-card">
                    <div class="c-icon"><i data-lucide="phone"></i></div>
                    <h4>Hospital Reception</h4>
                    <b>01662-249473, 248473</b>
                    <small>OPD appointments &amp; general inquiry</small>
                </div>

                <!-- WHATSAPP -->
                <div class="c-card whatsapp">
                    <div class="c-icon"><i data-lucide="message-circle"></i></div>
                    <h4>WhatsApp Support</h4>
                    <b>+91-99965-44005</b>
                    <small>Chat with patient coordinator</small>
                </div>

                <!-- EMAIL -->
                <div class="c-card">
                    <div class="c-icon"><i data-lucide="mail"></i></div>
                    <h4>Email Inquiries</h4>
                    <b>info@sukhdahospitalhisar.com</b>
                    <small>Reports &amp; administrative queries</small>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: APPOINTMENT FORM & TIMINGS -->
    <section class="section" id="appointment-form">
        <div class="wrap contact-layout">
            <!-- FORM -->
            <div class="form-box">
                <div class="kicker">ONLINE APPOINTMENT &amp; INQUIRY</div>
                <h3>Book a Doctor Consultation</h3>
                <p>Fill out the details below and our hospital patient coordinator will confirm your appointment slot via call/SMS.</p>

                <div id="formSuccess" class="form-success-alert">
                    ✓ Thank you! Your appointment request has been submitted. Our team will contact you shortly to confirm your time slot.
                </div>

                <form id="contactForm" onsubmit="handleFormSubmit(event)">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="pName">Patient Full Name *</label>
                            <input type="text" id="pName" required placeholder="e.g. Rahul Sharma">
                        </div>

                        <div class="form-group">
                            <label for="pPhone">Contact Number (Mobile) *</label>
                            <input type="tel" id="pPhone" required placeholder="e.g. +91 98765 43210">
                        </div>

                        <div class="form-group">
                            <label for="pEmail">Email Address (Optional)</label>
                            <input type="email" id="pEmail" placeholder="e.g. name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="pHospital">Select Hospital Unit *</label>
                            <select id="pHospital" required>
                                <option value="Sukhda Multispeciality Hospital (Delhi Road)">Sukhda Multispeciality Hospital (Delhi Road)</option>
                                <option value="Sukhda MedPark (Cancer & Super Speciality)">Sukhda MedPark (Cancer &amp; Super Speciality)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pDept">Speciality / Department *</label>
                            <select id="pDept" required>
                                <option value="">-- Choose Department --</option>
                                <?php foreach ($specialities as $dept): ?>
                                    <option value="<?= htmlspecialchars($dept) ?>"><?= htmlspecialchars($dept) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pDate">Preferred Date *</label>
                            <input type="date" id="pDate" required value="<?= date('Y-m-d') ?>">
                        </div>

                        <div class="form-group full">
                            <label for="pMessage">Brief Reason for Visit / Symptoms</label>
                            <textarea id="pMessage" placeholder="Describe symptoms or specific doctor preference..."></textarea>
                        </div>

                        <div class="form-group full">
                            <button type="submit" class="btn primary form-submit-btn">
                                <i data-lucide="check-circle"></i> Submit Appointment Request
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- SIDEBAR: TIMINGS & EMERGENCY -->
            <div class="info-sidebar">
                <!-- TIMINGS CARD -->
                <div class="info-card">
                    <h4><i data-lucide="clock"></i> OPD &amp; Service Timings</h4>
                    <div class="timing-row">
                        <span>Emergency &amp; Trauma (24/7)</span>
                        <span class="emergency-pill-tag">Open 24 Hours</span>
                    </div>
                    <div class="timing-row">
                        <span>ICU &amp; Critical Care</span>
                        <span class="emergency-pill-tag">Round the Clock</span>
                    </div>
                    <div class="timing-row">
                        <span>Morning OPD Hours</span>
                        <span>09:00 AM – 02:00 PM</span>
                    </div>
                    <div class="timing-row">
                        <span>Evening OPD Hours</span>
                        <span>05:00 PM – 07:30 PM</span>
                    </div>
                    <div class="timing-row">
                        <span>Sunday Consultations</span>
                        <span>10:00 AM – 02:00 PM</span>
                    </div>
                    <div class="timing-row">
                        <span>CT Scan &amp; Digital X-Ray</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="timing-row">
                        <span>Pathology Lab &amp; Blood</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="timing-row">
                        <span>In-house Pharmacy</span>
                        <span>24 Hours Open</span>
                    </div>
                </div>

                <!-- REACH US CARD -->
                <div class="info-card">
                    <h4><i data-lucide="map-pin"></i> How to Reach Us</h4>
                    <p style="font-size:14px;color:var(--muted);line-height:1.6;margin:0 0 12px">
                        Sukhda Healthcare is conveniently situated in the heart of Hisar along <b>Delhi Road (NH-9)</b>, easily accessible from all transport hubs:
                    </p>
                    <div class="timing-row">
                        <span>Hisar Railway Station</span>
                        <span>~ 3.5 km (10 mins)</span>
                    </div>
                    <div class="timing-row">
                        <span>Hisar Main Bus Stand</span>
                        <span>~ 2.8 km (8 mins)</span>
                    </div>
                    <div class="timing-row">
                        <span>Delhi Road Bus Stop</span>
                        <span>Within 200 metres</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: OUR TWO HOSPITAL LOCATIONS -->
    <section class="section soft" id="branches">
        <div class="wrap">
            <div class="kicker">HOSPITAL UNITS IN HISAR</div>
            <h2 class="title">Our Hospital Locations &amp; Direct Desks</h2>
            <p class="sub">Two well-connected branches providing end-to-end multispeciality and super speciality medical solutions.</p>

            <div class="branches-grid">
                <!-- MULTISPECIALITY -->
                <article class="branch-card">
                    <div class="branch-header">
                        <div>
                            <h3>Sukhda Multispeciality Hospital</h3>
                            <small style="color:var(--muted)">Comprehensive Family &amp; Emergency Care</small>
                        </div>
                        <span class="branch-badge">NABH Accredited</span>
                    </div>
                    <div class="branch-body">
                        <div class="branch-line">
                            <i data-lucide="map-pin"></i>
                            <div>
                                <b>Address:</b><br>
                                Delhi Road, Model Town, Hisar (Haryana) - 125005
                            </div>
                        </div>
                        <div class="branch-line">
                            <i data-lucide="phone"></i>
                            <div>
                                <b>Telephone / Reception:</b><br>
                                01662-249473, 248473, +91-99966-48483
                            </div>
                        </div>
                        <div class="branch-line">
                            <i data-lucide="phone-call"></i>
                            <div>
                                <b>Emergency Line (24/7):</b><br>
                                <a href="tel:01662249473" style="color:var(--green);font-weight:800">01662-249473</a> &nbsp;/&nbsp; <a href="tel:+919996544005" style="color:var(--green);font-weight:800">+91-99965-44005</a>
                            </div>
                        </div>
                        <div class="branch-line">
                            <i data-lucide="mail"></i>
                            <div>
                                <b>Email:</b><br>
                                sukhdahospital@gmail.com / info@sukhdahospitalhisar.com
                            </div>
                        </div>
                        <div class="branch-actions">
                            <a class="btn primary small" href="tel:01662249473"><i data-lucide="phone-call"></i>Call Hospital</a>
                            <a class="btn small" href="https://maps.google.com/?q=Sukhda+Hospital+Delhi+Road+Hisar" target="_blank"><i data-lucide="navigation"></i>Get Directions</a>
                        </div>
                    </div>
                </article>

                <!-- MEDPARK -->
                <article class="branch-card">
                    <div class="branch-header">
                        <div>
                            <h3>Sukhda MedPark Hospital</h3>
                            <small style="color:var(--muted)">Cancer &amp; Super Speciality Centre</small>
                        </div>
                        <span class="branch-badge">Super Speciality</span>
                    </div>
                    <div class="branch-body">
                        <div class="branch-line">
                            <i data-lucide="map-pin"></i>
                            <div>
                                <b>Address:</b><br>
                                Hisar (Haryana) - 125005
                            </div>
                        </div>
                        <div class="branch-line">
                            <i data-lucide="shield-plus"></i>
                            <div>
                                <b>Specialities:</b><br>
                                Medical &amp; Surgical Oncology, LINAC Radiation, Cath Lab &amp; Cardiology, Neuro Spine
                            </div>
                        </div>
                        <div class="branch-line">
                            <i data-lucide="phone-call"></i>
                            <div>
                                <b>Direct Helpline (24/7):</b><br>
                                <a href="tel:+919996544005" style="color:var(--green);font-weight:800">+91-99965-44005</a>
                            </div>
                        </div>
                        <div class="branch-line">
                            <i data-lucide="message-circle"></i>
                            <div>
                                <b>WhatsApp Coordinator:</b><br>
                                +91-99965-44005
                            </div>
                        </div>
                        <div class="branch-actions">
                            <a class="btn primary small" href="tel:+919996544005"><i data-lucide="phone-call"></i>Call MedPark</a>
                            <a class="btn small" href="../servicemockup/index.php"><i data-lucide="external-link"></i>Cancer Care Details</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECTION 3: MAP EMBED -->
    <section class="map-section">
        <div class="wrap">
            <div class="kicker">LOCATION MAP</div>
            <h2 class="title">Find Us on Google Maps</h2>
            <p class="sub">Easily accessible on Delhi Road, Hisar with dedicated parking and rapid ambulance arrival bay.</p>

            <div class="map-frame-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3483.5677894228913!2d75.728956!3d29.147895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391233261a8b98e7%3A0xb30e70402b9e67b2!2sSukhda%20Hospital!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Sukhda Hospital Hisar Location Map"></iframe>
            </div>
        </div>
    </section>

    <!-- CASHLESS / EMPANELLED STRIP -->
    <section class="empanelled-section" id="empanelled">
        <div class="wrap">
            <div class="emp-head">
                <h4>Cashless Healthcare &amp; Empanelled Insurance Partners</h4>
                <span>Seamless TPA &amp; Govt Health Schemes</span>
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
                    <a href="../about/index.php#vision">Vision &amp; Mission</a>
                    <a href="../index.php#hospitals">Our Hospitals</a>
                    <a href="../index.php#specialities">Centres of Excellence</a>
                    <a href="../index.php#doctors">Our Doctors</a>
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

        // Form Submit Simulation
        function handleFormSubmit(e) {
            e.preventDefault();
            const successBox = document.getElementById('formSuccess');
            if (successBox) {
                successBox.style.display = 'block';
                successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            document.getElementById('contactForm').reset();
        }
    </script>
</body>

</html>
