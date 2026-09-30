<?php
$year = date('Y');

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
    <title>About Us | Sukhda Healthcare - Multispeciality & Super Speciality Hospitals in Hisar</title>
    <meta name="description"
        content="Learn about Sukhda Healthcare in Hisar. Founded in 2002 by Dr. Amit Mehta (MD Medicine, AIIMS New Delhi) and Dr. Manisha Mehta (NABH Assessor). Discover our history, vision, mission, leadership, and infrastructure.">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap"
        rel="stylesheet">
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

        .nav-group>a {
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
            background: radial-gradient(circle at 85% 25%, rgba(7, 139, 75, 0.22) 0%, transparent 55%),
                        radial-gradient(circle at 15% 85%, rgba(10, 71, 127, 0.35) 0%, transparent 60%),
                        linear-gradient(135deg, #052347 0%, #07356b 100%);
            color: #fff;
            padding: 56px 0 52px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.02' fill-rule='evenodd'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.8;
            pointer-events: none;
        }

        .hero .wrap {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 46px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-copy {
            width: 100%;
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
            font-size: 12.5px;
            letter-spacing: 0.9px;
            margin-bottom: 12px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
        }

        .eyebrow-badge {
            background: rgba(114, 224, 162, 0.16);
            border: 1px solid rgba(114, 224, 162, 0.45);
            padding: 4px 12px;
            border-radius: 20px;
        }

        .hero h1 {
            font-size: 42px;
            line-height: 1.18;
            margin: 10px 0 16px;
            letter-spacing: -0.5px;
        }

        .hero h1 span {
            color: #72e0a2;
        }

        .hero p {
            font-size: 16.5px;
            line-height: 1.68;
            color: #dce7f0;
            margin: 0 0 26px;
        }

        .hero-actions {
            display: flex;
            gap: 14px;
            margin-bottom: 0;
            flex-wrap: wrap;
        }

        /* HIGHLIGHTS CARD */
        .hero-highlights-card {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 18px;
            padding: 28px 26px;
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.35);
        }

        .hh-header {
            margin-bottom: 20px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }

        .hh-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 800;
            color: #72e0a2;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .hh-badge i {
            width: 14px;
            height: 14px;
        }

        .hh-header h3 {
            margin: 0;
            font-size: 21px;
            color: #fff;
            font-weight: 800;
        }

        .hh-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 20px;
        }

        .hh-item {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 13px 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: transform 0.2s ease, border-color 0.2s ease, background 0.2s ease;
        }

        .hh-item:hover {
            transform: translateY(-2px);
            border-color: rgba(114, 224, 162, 0.5);
            background: rgba(255, 255, 255, 0.1);
        }

        .hh-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(114, 224, 162, 0.16);
            border: 1px solid rgba(114, 224, 162, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #72e0a2;
            flex-shrink: 0;
        }

        .hh-icon i {
            width: 20px;
            height: 20px;
        }

        .hh-item b {
            display: block;
            font-size: 17px;
            color: #fff;
            line-height: 1.15;
        }

        .hh-item small {
            display: block;
            font-size: 11.5px;
            color: #b9d3eb;
            margin-top: 3px;
        }

        .hh-footer {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            padding-top: 14px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hh-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(114, 224, 162, 0.12);
            border: 1px solid rgba(114, 224, 162, 0.3);
            color: #72e0a2;
            padding: 5px 11px;
            border-radius: 20px;
            font-size: 11.5px;
            font-weight: 700;
        }

        .hh-tag i {
            width: 13px;
            height: 13px;
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
            margin: 0 0 24px;
            font-size: 15.5px;
            line-height: 1.55
        }

        /* STORY 2-COL */
        .story-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 48px;
            align-items: center
        }

        .story-copy p {
            color: var(--muted);
            line-height: 1.75;
            font-size: 16px;
            margin: 0 0 18px
        }

        .story-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px
        }

        .story-badge {
            background: var(--pale);
            border: 1px solid var(--line);
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 700;
            color: var(--blue);
            display: inline-flex;
            align-items: center;
            gap: 6px
        }

        .story-badge i {
            width: 16px;
            height: 16px;
            color: var(--green)
        }

        .story-media {
            position: relative
        }

        .story-img-wrap {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 16px 36px rgba(7, 53, 107, 0.14);
            border: 4px solid #fff
        }

        .story-img-wrap img {
            height: 380px;
            object-fit: cover
        }

        .quote-box {
            border-left: 4px solid var(--green);
            background: #fff;
            padding: 18px 22px;
            border-radius: 0 10px 10px 0;
            box-shadow: 0 4px 14px rgba(7, 53, 107, 0.08);
            margin-top: 22px;
            font-size: 16.5px;
            font-weight: 700;
            color: var(--blue);
            font-style: italic
        }

        /* VISION & MISSION */
        .vm-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 26px;
            margin-bottom: 36px
        }

        .vm-card {
            background: #fff;
            border-radius: 14px;
            padding: 32px 28px;
            border: 1px solid var(--line);
            box-shadow: 0 4px 18px rgba(7, 53, 107, 0.08);
            position: relative;
            overflow: hidden
        }

        .vm-card.vision-card {
            border-top: 5px solid var(--green)
        }

        .vm-card.mission-card {
            border-top: 5px solid var(--blue)
        }

        .vm-icon {
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

        .vm-card.mission-card .vm-icon {
            background: #eaf3fb;
            color: var(--blue)
        }

        .vm-icon i {
            width: 26px;
            height: 26px
        }

        .vm-card h3 {
            font-size: 22px;
            margin: 0 0 10px;
            color: var(--blue)
        }

        .vm-card p {
            font-size: 15.5px;
            line-height: 1.65;
            color: var(--muted);
            margin: 0
        }

        /* CORE VALUES */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px
        }

        .val-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 24px 20px;
            box-shadow: 0 3px 12px rgba(7, 53, 107, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease
        }

        .val-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(7, 53, 107, 0.12);
            border-color: #b7d1e8
        }

        .val-card i {
            width: 32px;
            height: 32px;
            color: var(--green);
            margin-bottom: 12px
        }

        .val-card h4 {
            font-size: 17px;
            margin: 0 0 8px;
            color: var(--blue)
        }

        .val-card p {
            font-size: 13.5px;
            color: var(--muted);
            line-height: 1.5;
            margin: 0
        }

        /* DIRECTORS / LEADERSHIP */
        .directors-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px
        }

        .director-card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid var(--line);
            overflow: hidden;
            box-shadow: 0 6px 22px rgba(7, 53, 107, 0.08);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease, box-shadow 0.2s ease
        }

        .director-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(7, 53, 107, 0.14)
        }

        .dir-top {
            display: flex;
            gap: 20px;
            padding: 24px;
            background: linear-gradient(135deg, #f8fbfe 0%, #edf5fc 100%);
            border-bottom: 1px solid var(--line);
            align-items: center
        }

        .dir-photo {
            width: 110px;
            height: 130px;
            border-radius: 10px;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(7, 53, 107, 0.15);
            flex-shrink: 0
        }

        .dir-meta h3 {
            font-size: 21px;
            margin: 0 0 4px;
            color: var(--blue)
        }

        .dir-title {
            font-size: 13.5px;
            color: var(--green);
            font-weight: 800;
            margin-bottom: 6px
        }

        .dir-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 6px
        }

        .dir-badge {
            background: #eaf7f0;
            border: 1px solid #bfe8cf;
            color: #06723e;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700
        }

        .dir-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            flex-grow: 1
        }

        .dir-body h4 {
            font-size: 14.5px;
            margin: 0;
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 0.5px
        }

        .dir-body p {
            font-size: 14.5px;
            line-height: 1.65;
            color: var(--muted);
            margin: 0
        }

        .dir-msg {
            background: #f8fbfe;
            border-left: 3px solid var(--green);
            padding: 14px 16px;
            border-radius: 0 8px 8px 0;
            font-style: italic;
            font-size: 14px;
            color: #274567;
            line-height: 1.55
        }

        /* HOSPITALS NETWORK */
        .hospital-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 26px
        }

        .hospital {
            display: grid;
            grid-template-columns: 46% 54%;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 18px #07356b12;
            border: 1px solid var(--line);
            transition: transform 0.25s ease, box-shadow 0.25s ease
        }

        .hospital:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 28px rgba(7, 53, 107, 0.16)
        }

        .photo {
            position: relative
        }

        .photo img {
            height: 100%;
            object-fit: cover
        }

        .place {
            position: absolute;
            left: 14px;
            bottom: 14px;
            background: rgba(7, 53, 107, 0.9);
            backdrop-filter: blur(4px);
            color: #fff;
            font-size: 12px;
            line-height: 1.35;
            padding: 6px 11px;
            border-radius: 6px;
            font-weight: 600
        }

        .h-info {
            padding: 24px
        }

        .h-logo {
            width: 145px;
            height: 42px;
            object-fit: contain;
            object-position: left center;
            margin-bottom: 12px
        }

        .h-info h3 {
            font-size: 18.5px;
            margin: 0 0 8px;
            color: var(--blue)
        }

        .h-info p {
            font-size: 13.5px;
            line-height: 1.55;
            color: var(--muted);
            margin: 0 0 16px
        }

        .checks {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            margin-bottom: 20px
        }

        .checks span {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
            font-weight: 700;
            color: var(--blue)
        }

        .checks i {
            width: 16px;
            height: 16px;
            color: var(--green);
            flex-shrink: 0
        }

        /* INFRASTRUCTURE */
        .facilities {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 18px
        }

        .facility {
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 14px #07356b12;
            border: 1px solid var(--line);
            transition: transform 0.2s ease, box-shadow 0.2s ease
        }

        .facility:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(7, 53, 107, 0.16)
        }

        .facility img {
            height: 125px;
            object-fit: cover
        }

        .facility div {
            padding: 12px 14px
        }

        .facility b {
            display: block;
            font-size: 14px;
            color: var(--blue);
            margin-bottom: 4px
        }

        .facility small {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.4;
            display: block
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
            .values-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .facilities {
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
            .story-grid,
            .vm-grid,
            .directors-grid,
            .hospital-grid {
                grid-template-columns: 1fr;
                gap: 28px
            }

            .facilities {
                grid-template-columns: 1fr 1fr
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
                font-size: 30px
            }

            .hh-grid {
                grid-template-columns: 1fr;
                gap: 10px
            }

            .title {
                font-size: 24px
            }

            .values-grid {
                grid-template-columns: 1fr
            }

            .facilities {
                grid-template-columns: 1fr
            }

            .dir-top {
                flex-direction: column;
                text-align: center
            }

            .dir-badges {
                justify-content: center
            }

            .hospital {
                grid-template-columns: 1fr
            }

            .photo {
                height: 190px
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
                <a href="https://wa.me/919996544005" target="_blank"><i data-lucide="message-circle"></i> WhatsApp Us
                    (24/7)</a>
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
                <img class="logo" src="../assets/images/sukhda-multispeciality-logo.png"
                    alt="Sukhda Multispeciality Hospital Hisar">
            </a>
            <nav class="menu">
                <span class="nav-group">
                    <a class="on" href="index.php">About Us <i data-lucide="chevron-down" class="nav-chevron"></i></a>
                    <span class="nav-drop">
                        <a href="index.php">About Sukhda</a>
                        <a href="#leadership">Medical Leadership</a>
                        <a href="#vision">Vision &amp; Mission</a>
                        <a href="#hospitals">Our Hospitals</a>
                        <a href="#infrastructure">Infrastructure &amp; Facilities</a>
                    </span>
                </span>
                <span class="nav-group">
                    <a href="../index.php#hospitals">Our Hospitals <i data-lucide="chevron-down"
                            class="nav-chevron"></i></a>
                    <span class="nav-drop">
                        <a href="../index.php#hospitals">Sukhda Multispeciality Hospital</a>
                        <a href="../index.php#hospitals">Sukhda MedPark (Cancer &amp; Super Speciality)</a>
                    </span>
                </span>
                <span class="nav-group">
                    <a href="../index.php#specialities">Our Services <i data-lucide="chevron-down"
                            class="nav-chevron"></i></a>
                    <span class="nav-drop services-drop">
                        <a href="../servicemockup/index.php">Medical Oncology</a>
                        <a href="../gynaecology/index.php">Gynaecology &amp; Obstetrics</a>
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
                <a href="#infrastructure">Technology</a>
                <a href="../index.php#cases">Case Stories</a>
                <a href="../index.php#patients">Testimonials</a>
            </nav>
            <a class="btn primary" href="../contact/index.php"><i data-lucide="calendar-days"></i>Book Appointment</a>
            <button class="hamb" aria-label="Open menu">☰</button>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="wrap">
            <div class="hero-copy">
                <div class="crumb">
                    <a href="../index.php">Home</a> <span>›</span> <span>About Us</span>
                </div>
                <div class="eyebrow">
                    <span class="eyebrow-badge">NABH ACCREDITED HEALTHCARE NETWORK</span>
                    <span>ESTABLISHED NOVEMBER 2002</span>
                </div>
                <h1>Two Decades of Clinical Excellence,<br><span>Compassion &amp; Quality Care</span></h1>
                <p>From a focused 20-bed hospital in 2002 to a 100-bedded NABH accredited multispeciality and cancer
                    care network, Sukhda Healthcare is built on the founding promise of <i>"Care and Cure for Whole
                        Family Under One Roof"</i>.</p>

                <div class="hero-actions">
                    <a class="btn primary" href="../contact/index.php"><i data-lucide="calendar-days"></i>Book
                        Consultation</a>
                    <a class="btn white" href="#leadership"><i data-lucide="award"></i>Meet Leadership</a>
                </div>
            </div>

            <div class="hero-highlights-card">
                <div class="hh-header">
                    <div class="hh-badge"><i data-lucide="shield-check"></i> INSTITUTIONAL SNAPSHOT</div>
                    <h3>Healthcare Legacy at a Glance</h3>
                </div>
                <div class="hh-grid">
                    <div class="hh-item">
                        <div class="hh-icon"><i data-lucide="calendar"></i></div>
                        <div>
                            <b>Nov 2002</b>
                            <small>Founded in Hisar (22+ Yrs)</small>
                        </div>
                    </div>
                    <div class="hh-item">
                        <div class="hh-icon"><i data-lucide="building-2"></i></div>
                        <div>
                            <b>100+ Beds</b>
                            <small>Across 2 Modern Hospitals</small>
                        </div>
                    </div>
                    <div class="hh-item">
                        <div class="hh-icon"><i data-lucide="users"></i></div>
                        <div>
                            <b>50,000+</b>
                            <small>Patients Treated Regionally</small>
                        </div>
                    </div>
                    <div class="hh-item">
                        <div class="hh-icon"><i data-lucide="award"></i></div>
                        <div>
                            <b>NABH</b>
                            <small>Accredited Quality Care</small>
                        </div>
                    </div>
                </div>
                <div class="hh-footer">
                    <span class="hh-tag"><i data-lucide="check-circle-2"></i> AIIMS Clinical Heritage</span>
                    <span class="hh-tag"><i data-lucide="check-circle-2"></i> 24/7 ICU &amp; Trauma</span>
                    <span class="hh-tag"><i data-lucide="check-circle-2"></i> MedPark Cancer Wing</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: STORY & ORIGIN -->
    <section class="section">
        <div class="wrap story-grid">
            <div class="story-copy">
                <div class="kicker">ABOUT SUKHDA HEALTHCARE</div>
                <h2 class="title">Care and Cure for Whole Family Under One Roof</h2>
                <p>Sukhda Multispeciality Hospital is the brainchild of <b>Dr. Amit Mehta, MD Medicine (AIIMS, New
                        Delhi)</b>. After studying and gaining rich clinical experience from premier institutes of India
                    like <b>AIIMS, New Delhi</b> and <b>PGIMER, Chandigarh</b>, Dr. Mehta decided to return to his
                    native place Hisar to serve his community.</p>
                <p>He joined Jindal Institute of Medical Sciences (JIMS) in February 1994 and worked tirelessly for nine
                    years as <b>Head of the Department of Internal Medicine &amp; Critical Care</b>. For his exemplary
                    healthcare contributions, he was bestowed with the prestigious <b>"Vikas Ratan Gold Award"</b> in
                    the year 2002.</p>
                <p>In November 2002, under the visionary leadership of Dr. Amit Mehta and <b>Dr. Manisha Mehta (NABH
                        Certified Assessor)</b>, Sukhda made a humble beginning as a 20-bedded hospital with the sole
                    mission of providing <i>"Care and Cure for Whole Family Under One Roof"</i> without compromising
                    quality.</p>
                <p>Today, this vision has metamorphosed into a premier 100-bedded network comprising <b>Sukhda
                        Multispeciality Hospital</b> and <b>Sukhda MedPark (Cancer &amp; Super Speciality Hospital)</b>,
                    catering to patients from across Haryana (Sirsa, Fatehabad, Hansi, Jind, Barwala, Uklana, Narwana,
                    Tohana), Rajasthan (Bhadra, Rajgarh, Churu), and Punjab (Bhatinda, Mansa).</p>
                <div class="story-badge-strip">
                    <span class="story-badge"><i data-lucide="check-circle-2"></i> AIIMS &amp; PGIMER Clinical
                        Heritage</span>
                    <span class="story-badge"><i data-lucide="check-circle-2"></i> NABH Accredited Standards</span>
                    <span class="story-badge"><i data-lucide="check-circle-2"></i> 24/7 ICU &amp; Emergency
                        Helpline</span>
                </div>
            </div>
            <div class="story-media">
                <div class="story-img-wrap">
                    <img src="../assets/images/doctor-patient-hero.jpg"
                        alt="Doctor and Patient Consultation at Sukhda Hospital">
                </div>
                <div class="quote-box">
                    "Since inception, our goal has been to facilitate cost-effective medical services at par with top
                    national institutions — with uncompromised clinical quality and genuine human empathy."
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: VISION, MISSION & VALUES -->
    <section class="section soft" id="vision">
        <div class="wrap">
            <div class="kicker">GUIDING PHILOSOPHY</div>
            <h2 class="title">Vision, Mission &amp; Core Values</h2>
            <p class="sub">The enduring principles that define every patient interaction, clinical decision, and
                operational standard at Sukhda.</p>

            <div class="vm-grid">
                <div class="vm-card vision-card">
                    <div class="vm-icon"><i data-lucide="eye"></i></div>
                    <h3>Our Vision</h3>
                    <p>To be a recognised centre of excellence for providing <b>"Quality Healthcare at Affordable
                            Cost"</b>, setting benchmark standards in patient safety, advanced technology, and
                        compassionate healing for the northern region.</p>
                </div>
                <div class="vm-card mission-card">
                    <div class="vm-icon"><i data-lucide="target"></i></div>
                    <h3>Our Mission</h3>
                    <p>Sukhda Multispeciality Hospital is committed to provide <b>"Care and Cure for Whole Family Under
                            One Roof"</b> through a team of qualified, experienced doctors and dedicated nursing,
                        paramedical, and support staff supported by state-of-the-art medical and diagnostic services.
                    </p>
                </div>
            </div>

            <div class="values-grid">
                <div class="val-card">
                    <i data-lucide="heart-handshake"></i>
                    <h4>Dignity &amp; Equity</h4>
                    <p>We practice dignity and equity in all relationships, providing opportunities for patients and
                        healthcare staff to realise their full potential.</p>
                </div>
                <div class="val-card">
                    <i data-lucide="shield-check"></i>
                    <h4>Patient Rights &amp; Centricity</h4>
                    <p>We manage all operations with deep concern for patient rights, safety, transparency, and clinical
                        ethics in a comfortable environment.</p>
                </div>
                <div class="val-card">
                    <i data-lucide="sparkles"></i>
                    <h4>Technological Innovation</h4>
                    <p>We continuously stay updated with latest technological advancements (Clear Stent Live Cath Lab,
                        LINAC, CT) and managerial expertise.</p>
                </div>
                <div class="val-card">
                    <i data-lucide="wallet"></i>
                    <h4>Affordable &amp; Effective</h4>
                    <p>We inculcate cost-consciousness and effective, efficient service delivery keeping patient
                        affordability and transparency at the core.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: DIRECTORS / LEADERSHIP -->
    <section class="section" id="leadership">
        <div class="wrap">
            <div class="kicker">EXECUTIVE &amp; CLINICAL LEADERSHIP</div>
            <h2 class="title">Messages from the Directors' Desk</h2>
            <p class="sub">Guided by medical expertise, administrative foresight, and an unwavering commitment to
                patient well-being.</p>

            <div class="directors-grid">
                <!-- DR. AMIT MEHTA -->
                <article class="director-card">
                    <div class="dir-top">
                        <img class="dir-photo" src="../assets/images/doctors/dr-amit-mehta.jpg"
                            alt="Dr. Amit Mehta - Director Sukhda Hospital">
                        <div class="dir-meta">
                            <h3>Dr. Amit Mehta</h3>
                            <div class="dir-title">Director &amp; Head of Internal Medicine &amp; Critical Care</div>
                            <div class="dir-badges">
                                <span class="dir-badge">MD Medicine (AIIMS, New Delhi)</span>
                                <span class="dir-badge">Ex-PGIMER Chandigarh</span>
                                <span class="dir-badge">Vikas Ratan Gold Awardee</span>
                            </div>
                        </div>
                    </div>
                    <div class="dir-body">
                        <h4>Professional Profile</h4>
                        <p>After graduating from premier institutes AIIMS New Delhi and PGIMER Chandigarh, Dr. Mehta
                            headed Internal Medicine &amp; Critical Care at Jindal Hospital for 9 years before founding
                            Sukhda in 2002. He has spearheaded critical care protocols, intensive care management, and
                            ethical clinical governance across Haryana.</p>
                        <div class="dir-msg">
                            "At Sukhda Multispeciality Hospital, we foster, promote, and practice high-quality, ethical,
                            and evidence-based medicine. Our team is committed to deliver best healthcare services with
                            a human touch — acknowledging and respecting cultural diversity, dignity, and every
                            patient's unique needs."
                        </div>
                    </div>
                </article>

                <!-- DR. MANISHA MEHTA -->
                <article class="director-card">
                    <div class="dir-top">
                        <img class="dir-photo" src="../assets/images/doctors/dr-manisha-mehta.jpg"
                            alt="Dr. Manisha Mehta - Director Sukhda Hospital">
                        <div class="dir-meta">
                            <h3>Dr. Manisha Mehta</h3>
                            <div class="dir-title">Director &amp; Healthcare Quality Administrator</div>
                            <div class="dir-badges">
                                <span class="dir-badge">NABH Certified Assessor (2019)</span>
                                <span class="dir-badge">23+ Years Healthcare Management</span>
                                <span class="dir-badge">Hospital Quality Head</span>
                            </div>
                        </div>
                    </div>
                    <div class="dir-body">
                        <h4>Professional Profile</h4>
                        <p>With over 23 years of healthcare administration and facility oversight, Dr. Manisha Mehta
                            leads Sukhda's quality compliance, NABH regulatory protocols, patient safety initiatives,
                            and operational excellence. Her leadership ensures clinical transparency and continuous
                            infrastructure modernisation.</p>
                        <div class="dir-msg">
                            "Everything we do revolves around our patients and their families. We continuously challenge
                            ourselves to bring greater accessibility, affordability, and reliability in healthcare
                            delivery with an unrelenting focus on quality, patient-centricity, and delightful healing
                            experiences."
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECTION 4: OUR HOSPITALS NETWORK -->
    <section class="section soft" id="hospitals">
        <div class="wrap">
            <div class="kicker">TWO HOSPITALS • ONE COMMITMENT</div>
            <h2 class="title">Our Hospital Network in Hisar</h2>
            <p class="sub">Two state-of-the-art facilities working as one unified healthcare ecosystem for complete
                patient care.</p>

            <div class="hospital-grid">
                <!-- HOSPITAL 1 -->
                <article class="hospital">
                    <div class="photo">
                        <img src="../assets/images/sukhda-multispecialty-hospital.jpg"
                            alt="Sukhda Multispeciality Hospital">
                        <div class="place">DELHI ROAD, HISAR<br>NABH ACCREDITED</div>
                    </div>
                    <div class="h-info">
                        <img class="h-logo" src="../assets/images/sukhda-multispeciality-logo.png"
                            alt="Sukhda Multispeciality Hospital">
                        <h3>Sukhda Multispeciality Hospital</h3>
                        <p>Complete multispeciality care with advanced 24/7 ICU, emergency trauma care, mother &amp;
                            child care, laparoscopic surgery, nephrology, joint replacements, and comprehensive
                            diagnostics.</p>
                        <div class="checks">
                            <span><i data-lucide="check"></i> 24/7 ICU &amp; Emergency</span>
                            <span><i data-lucide="check"></i> Internal Medicine</span>
                            <span><i data-lucide="check"></i> Nephrology &amp; Dialysis</span>
                            <span><i data-lucide="check"></i> Laparoscopy &amp; Urology</span>
                            <span><i data-lucide="check"></i> Gynaecology &amp; NICU</span>
                            <span><i data-lucide="check"></i> Joint Replacement</span>
                        </div>
                        <a class="btn small primary" href="../index.php#specialities">Explore Multispeciality Services
                            →</a>
                    </div>
                </article>

                <!-- HOSPITAL 2 -->
                <article class="hospital">
                    <div class="photo">
                        <img src="../assets/images/oncology/medical-oncology-redesign.jpg" alt="Sukhda MedPark">
                        <div class="place">HISAR<br>SUPER SPECIALITY &amp; CANCER</div>
                    </div>
                    <div class="h-info">
                        <img class="h-logo" src="../assets/images/sukhda-medpark-logo.png" alt="Sukhda MedPark">
                        <h3>Sukhda MedPark Hospital</h3>
                        <p>Hisar's dedicated super speciality &amp; comprehensive cancer institute offering chemotherapy
                            daycare, surgical oncology, radiation oncology (LINAC), cardiology with Cath Lab, and neuro
                            spine surgery.</p>
                        <div class="checks">
                            <span><i data-lucide="check"></i> Medical Oncology &amp; Chemo</span>
                            <span><i data-lucide="check"></i> Surgical Oncology</span>
                            <span><i data-lucide="check"></i> Radiation Oncology (LINAC)</span>
                            <span><i data-lucide="check"></i> Cardiology &amp; Cath Lab</span>
                            <span><i data-lucide="check"></i> Neuro &amp; Spine Surgery</span>
                            <span><i data-lucide="check"></i> Gastroenterology</span>
                        </div>
                        <a class="btn small primary" href="../servicemockup/index.php">Explore MedPark Cancer Care →</a>
                    </div>
                </article>
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

    <!-- CTA SECTION -->
    <section class="cta" id="contact">
        <div class="wrap">
            <div class="cta-visual">
                <img src="../assets/images/logo-mark.png" alt="Sukhda Healthcare Logo Mark">
            </div>
            <div>
                <h2>Need Specialist Medical Consultation or Emergency Care?</h2>
                <p>Speak with our 24/7 patient helpline or visit our Delhi Road hospital in Hisar for immediate
                    assistance.</p>
            </div>
            <div class="actions">
                <a class="btn primary" href="tel:01662249473"><i data-lucide="phone-call"></i>Call Helpline:
                    01662-249473</a>
                <a class="btn white" href="https://wa.me/919996544005" target="_blank"><i
                        data-lucide="message-circle"></i>WhatsApp Us</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="wrap">
            <div class="footer-grid">
                <div>
                    <img class="footer-logo" src="../assets/images/sukhda-multispeciality-logo.png"
                        alt="Sukhda Multispeciality Hospital">
                    <p class="footer-tagline">Providing quality, compassionate, and affordable multi &amp; super
                        speciality medical care across Hisar and surrounding regions since 2002.</p>
                    <div class="footer-nabh-badge">
                        <img src="../assets/images/nabh.jpg" alt="NABH Accredited"
                            style="width:26px;height:26px;object-fit:contain">
                        <span>NABH Accredited Quality Healthcare</span>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <a href="../index.php">Home</a>
                    <a href="index.php">About Sukhda</a>
                    <a href="#leadership">Medical Leadership</a>
                    <a href="#vision">Vision &amp; Mission</a>
                    <a href="#hospitals">Our Hospitals</a>
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
                        <i data-lucide="phone-call"
                            style="width:18px;color:var(--green);flex-shrink:0;margin-top:2px"></i>
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