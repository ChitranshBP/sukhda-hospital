<?php require_once __DIR__ . '/data.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sukhda Medpark &mdash; Cancer &amp; Super Speciality Hospital, Hisar</title>
  <meta name="description"
    content="Sukhda Medpark, Hisar — NABH accredited cancer & super speciality hospital. 28 specialities, 60+ expert doctors, 120+ beds, 24x7 emergency & trauma care since 2002.">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:wght@400;500;600;700&family=Newsreader:opsz,wght@6..72,300;6..72,400&display=swap"
    rel="stylesheet">

  <style>
    *, *::before, *::after { box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    body {
      margin: 0;
      background: #F7FAF7;
      color: #2A5288;
      font-family: 'Schibsted Grotesk', system-ui, sans-serif;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    a { color: #2A5288; text-decoration: none; transition: color .15s ease; }
    a:hover { color: #2E8B3C; }
    img { display: block; max-width: 100%; }
    h1, h2, h3 { letter-spacing: -0.025em; font-weight: 500; text-wrap: pretty; }
    button { font-family: inherit; }
    ::selection { background: #7DCB6B; color: #2A5288; }

    @keyframes rise {
      from { opacity: 0; transform: translateY(14px); }
      to   { opacity: 1; transform: none; }
    }

    section[id] { scroll-margin-top: 96px; }

    .wrap { max-width: 1240px; margin: 0 auto; padding-left: 28px; padding-right: 28px; }

    /* ---------- Top bar ---------- */
    .topbar { background: #2A5288; color: #EAF3EA; font-size: 13px; letter-spacing: 0.01em; }
    .topbar-inner {
      max-width: 1240px; margin: 0 auto; padding: 9px 28px;
      display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;
    }
    .topbar-left { display: flex; align-items: center; gap: 22px; flex-wrap: wrap; }
    .topbar-live { display: flex; align-items: center; gap: 8px; }
    .topbar-live::before { content: ''; width: 7px; height: 7px; background: #3EA94B; display: inline-block; }
    .topbar-addr { opacity: 0.55; }
    .topbar-right { display: flex; align-items: center; gap: 20px; }
    .topbar-mail { color: #EAF3EA; opacity: 0.8; }
    .topbar-mail:hover { opacity: 1; color: #7DCB6B; }
    .topbar-tel { color: #7DCB6B; font-weight: 600; }
    .topbar-tel:hover { color: #7DCB6B; }

    /* ---------- Header ---------- */
    .site-header { position: sticky; top: 0; z-index: 50; background: #F7FAF7; border-bottom: 1px solid #DCE6DC; }
    .header-inner {
      max-width: 1240px; margin: 0 auto; padding: 14px 28px;
      display: flex; align-items: center; gap: 12px 24px; flex-wrap: wrap;
    }
    .brand { display: flex; align-items: center; gap: 12px; flex-shrink: 0; }
    .brand img { height: 48px; width: auto; }
    .brand-text { display: block; line-height: 1; }
    .brand-text .l1 { display: block; font-size: 22px; font-weight: 700; letter-spacing: 0.06em; color: #2A5288; }
    .brand-text .l2 { display: block; font-size: 13px; font-weight: 700; letter-spacing: 0.22em; color: #2A5288; margin-top: 4px; }
    .brand-text .l3 { display: block; font-size: 8.5px; font-weight: 600; letter-spacing: 0.11em; color: #7A8A7C; margin-top: 4px; white-space: nowrap; }

    .main-nav {
      flex: 1 1 auto; display: flex; align-items: center; justify-content: flex-end;
      gap: 2px 6px; flex-wrap: wrap; font-size: 14px; font-weight: 500; white-space: nowrap; order: 3;
    }
    .main-nav a:hover { color: #2E8B3C; }

    .nav-item { position: relative; display: flex; align-items: center; gap: 2px; }
    .nav-item.has-mega { position: static; }
    .nav-link { display: inline-flex; align-items: center; padding: 8px 6px; }
    .drop-toggle {
      display: grid; place-items: center; width: 18px; height: 18px; padding: 0; margin-left: -2px;
      border: none; background: transparent; color: #7A8A7C; cursor: pointer;
    }
    .drop-toggle svg { width: 14px; height: 14px; transition: transform .18s ease; }
    .nav-item:hover .drop-toggle svg, .nav-item.sub-open .drop-toggle svg { transform: rotate(180deg); color: #2E8B3C; }

    /* ---------- Dropdown + mega panels ---------- */
    .drop, .mega {
      position: absolute; z-index: 60; background: #FFFFFF; border: 1px solid #DCE6DC;
      box-shadow: 0 28px 56px -28px rgba(42, 82, 136, 0.35);
      opacity: 0; visibility: hidden; pointer-events: none;
      transition: opacity .16s ease, transform .16s ease, visibility .16s ease;
    }
    .drop::before, .mega::before { content: ''; position: absolute; left: 0; right: 0; top: -16px; height: 16px; }
    .nav-item:hover > .drop, .nav-item:focus-within > .drop,
    .nav-item:hover > .mega, .nav-item:focus-within > .mega { opacity: 1; visibility: visible; pointer-events: auto; }

    .drop { top: calc(100% + 15px); left: 0; width: 330px; padding: 10px; border-radius: 10px; transform: translateY(10px); }
    .nav-item:hover > .drop, .nav-item:focus-within > .drop { transform: none; }
    .nav-item.drop-right .drop { left: auto; right: 0; }

    .drop-item { display: flex; align-items: flex-start; gap: 11px; padding: 9px 10px; border-radius: 8px; white-space: normal; }
    .drop-item:hover { background: #EAF3EA; }
    .drop-ico {
      width: 32px; height: 32px; flex-shrink: 0; display: grid; place-items: center;
      background: #F7FAF7; border: 1px solid #DCE6DC; border-radius: 6px; color: #2A5288; transition: all .15s ease;
    }
    .drop-ico svg { width: 15px; height: 15px; }
    .drop-item:hover .drop-ico { background: #2A5288; border-color: #2A5288; color: #7DCB6B; }
    .drop-item .t { display: block; font-size: 14px; font-weight: 700; }
    .drop-item .d { display: block; font-size: 12.5px; font-weight: 400; color: #7A8A7C; margin-top: 3px; line-height: 1.45; }

    .mega {
      top: calc(100% + 1px); left: 50%; transform: translate(-50%, 10px);
      width: min(1184px, calc(100vw - 40px)); padding: 22px 24px 24px; border-radius: 12px;
      max-height: calc(100vh - 150px); overflow-y: auto;
    }
    .nav-item:hover > .mega, .nav-item:focus-within > .mega { transform: translate(-50%, 0); }

    .mega-head {
      display: flex; align-items: center; justify-content: space-between; gap: 14px 24px; flex-wrap: wrap;
      padding-bottom: 16px; margin-bottom: 18px; border-bottom: 1px solid #E6EFE6;
    }
    .mega-head-l { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }
    .mega-badge {
      font-size: 11px; letter-spacing: 0.13em; text-transform: uppercase; font-weight: 700; color: #2E8B3C;
      background: #EAF3EA; border: 1px solid #BFDCBF; border-radius: 999px; padding: 6px 13px;
    }
    .mega-note { font-size: 13.5px; font-weight: 400; color: #5B6480; white-space: normal; }
    .mega-link { font-size: 13.5px; font-weight: 700; color: #2E8B3C; flex-shrink: 0; }

    .mega-cols { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; }
    .mega-col { background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 8px; padding: 14px; min-width: 0; }
    .mega-col-head { display: flex; align-items: center; gap: 10px; padding-bottom: 11px; margin-bottom: 11px; border-bottom: 1px solid #DCE6DC; }
    .mega-col-ico {
      width: 30px; height: 30px; flex-shrink: 0; display: grid; place-items: center;
      background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 6px; color: #2A5288;
    }
    .mega-col-ico svg { width: 15px; height: 15px; }
    .mega-col-head .t { display: block; font-size: 14px; font-weight: 700; }
    .mega-col-head .s { display: block; font-size: 11.5px; font-weight: 400; color: #7A8A7C; margin-top: 2px; white-space: normal; }
    .mega-list { display: grid; gap: 6px; }
    .mega-item {
      display: flex; align-items: center; gap: 9px; padding: 7px 9px; min-width: 0;
      background: #FFFFFF; border: 1px solid #E6EFE6; border-radius: 6px;
      font-size: 13px; font-weight: 600; transition: border-color .15s ease;
    }
    .mega-item:hover { border-color: #2A5288; }
    .mega-item > span:last-child { overflow: hidden; text-overflow: ellipsis; }
    .mega-ico {
      width: 26px; height: 26px; flex-shrink: 0; display: grid; place-items: center;
      background: #EAF3EA; border-radius: 6px; color: #2E8B3C; transition: all .15s ease;
    }
    .mega-ico svg { width: 13px; height: 13px; }
    .mega-item:hover .mega-ico { background: #2A5288; color: #7DCB6B; }

    .mega-cta {
      margin-top: 18px; background: #2A5288; color: #F7FAF7; border-radius: 8px; padding: 16px 20px;
      display: flex; align-items: center; justify-content: space-between; gap: 12px 24px; flex-wrap: wrap;
    }
    .mega-cta .t { font-size: 14.5px; font-weight: 700; white-space: normal; }
    .mega-cta .d { font-size: 13px; font-weight: 400; color: rgba(247, 250, 247, 0.68); margin-top: 4px; white-space: normal; }
    .mega-cta-btn {
      flex-shrink: 0; background: #3EA94B; color: #2A5288; font-size: 13.5px; font-weight: 700;
      padding: 11px 20px; border-radius: 5px; transition: background .15s ease;
    }
    .mega-cta-btn:hover { background: #7DCB6B; color: #2A5288; }

    .nav-toggle {
      display: none; order: 2; flex-shrink: 0;
      width: 44px; height: 44px; place-items: center; cursor: pointer;
      background: transparent; border: 1px solid #DCE6DC; color: #2A5288; font-size: 20px; line-height: 1;
    }

    @media (max-width: 900px) {
      .nav-toggle { display: grid; }
      .main-nav { display: none; width: 100%; flex-direction: column; align-items: stretch; gap: 0; padding: 10px 0 6px; order: 4; }
      .main-nav.open { display: flex; }
      .nav-item { flex-wrap: wrap; position: static; border-top: 1px solid #E6EFE6; }
      .nav-link { flex: 1 1 auto; padding: 11px 4px; }
      .drop-toggle { width: 44px; height: 42px; }
      .drop, .mega {
        display: none; position: static; width: auto; max-height: none; opacity: 1; visibility: visible;
        transform: none; pointer-events: auto; box-shadow: none; border: none; overflow: visible;
        border-left: 2px solid #BFDCBF; border-radius: 0; margin: 0 0 12px 6px; padding: 2px 0 2px 12px;
        flex-basis: 100%;
      }
      .drop::before, .mega::before { content: none; }
      .nav-item.sub-open > .drop, .nav-item.sub-open > .mega { display: block; transform: none; }
      .mega-head { display: none; }
      .mega-cols { grid-template-columns: 1fr; gap: 10px; }
      .drop-item { padding: 8px 6px; }
    }

    /* ---------- Banner slider ---------- */
    .banner { position: relative; width: 100%; background: #2A5288; overflow: hidden; }
    .banner-frame { position: relative; width: 100%; aspect-ratio: 1920 / 690; min-height: 240px; }
    .banner-slide {
      position: absolute; inset: 0; width: 100%; height: 100%;
      background-size: cover; background-position: center right;
      opacity: 0; transition: opacity .9s ease;
    }
    .banner-slide.active { opacity: 1; }
    .banner-dots { position: absolute; left: 24px; bottom: 22px; display: flex; align-items: center; gap: 10px; z-index: 2; }
    .banner-dot {
      height: 6px; width: 12px; border: none; padding: 0; cursor: pointer;
      transition: all .25s ease; background: rgba(247,250,247,0.5);
    }
    .banner-dot.active { width: 30px; background: #3EA94B; }
    .banner-arrows { position: absolute; right: 24px; bottom: 22px; display: flex; gap: 8px; z-index: 2; }
    .banner-arrow {
      width: 40px; height: 40px; border: 1px solid rgba(247,250,247,0.45);
      background: rgba(42,82,136,0.7); color: #F7FAF7; font-size: 17px; cursor: pointer;
      transition: all .15s ease;
    }
    .banner-arrow:hover { background: #3EA94B; border-color: #3EA94B; color: #2A5288; }

    /* ---------- Hero ---------- */
    .hero { position: relative; background: #2A5288; color: #F7FAF7; }
    .hero-inner {
      position: relative; max-width: 1240px; margin: 0 auto;
      padding: clamp(64px, 7vw, 92px) 28px;
      display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: clamp(36px, 5vw, 60px); align-items: center;
    }
    .hero-copy { animation: rise 0.7s ease both; }
    .hero-badge {
      display: inline-flex; align-items: center; gap: 10px;
      border: 1px solid rgba(125,203,107,0.45); color: #7DCB6B; padding: 7px 16px;
      font-size: 12px; letter-spacing: 0.12em; text-transform: uppercase; font-weight: 600; white-space: nowrap;
    }
    .hero h1 {
      font-weight: 500; font-size: clamp(30px, 4.2vw, 52px); line-height: 1.1;
      margin: 26px 0 0; letter-spacing: -0.015em;
    }
    .hero-sub { font-size: 18px; line-height: 1.65; color: rgba(247,250,247,0.72); max-width: 540px; margin: 22px 0 0; }
    .hero-actions { display: flex; gap: 14px; margin-top: 34px; flex-wrap: wrap; }

    .btn-solid {
      background: #3EA94B; color: #2A5288; padding: 15px 30px; font-weight: 700; font-size: 15px;
      transition: background .15s ease;
    }
    .btn-solid:hover { background: #7DCB6B; color: #2A5288; }
    .btn-ghost {
      border: 1px solid rgba(247,250,247,0.35); color: #F7FAF7; padding: 15px 30px; font-weight: 600; font-size: 15px;
      transition: all .15s ease;
    }
    .btn-ghost:hover { border-color: #7DCB6B; color: #7DCB6B; }

    .hero-cards { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; align-content: center; }
    @media (max-width: 480px) { .hero-cards { grid-template-columns: 1fr; } }
    .navy-card { background: #35619B; border: 1px solid #4674B2; padding: 22px 24px; border-radius: 8px; }
    .navy-card .num { font-size: 38px; color: #7DCB6B; line-height: 1; font-weight: 700; }
    .navy-card .lbl { font-size: 12.5px; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(247,250,247,0.85); margin-top: 10px; font-weight: 600; }

    /* ---------- Stats strip ---------- */
    .stats-strip {
      margin-top: -46px; position: relative; z-index: 5;
      background: #FFFFFF; border: 1px solid #DCE6DC;
      display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    }
    .stat-cell { padding: 30px 28px; border-right: 1px solid #E6EFE6; }
    .stat-cell:last-child { border-right: none; }
    .stat-cell .num { font-size: 42px; line-height: 1; color: #2A5288; }
    .stat-cell .lbl { font-size: 13px; letter-spacing: 0.12em; text-transform: uppercase; color: #7A8A7C; margin-top: 10px; font-weight: 600; }

    /* ---------- Section headers ---------- */
    .section { max-width: 1240px; margin: 0 auto; padding: clamp(58px, 8vw, 96px) 28px 0; }
    .kicker { font-size: 12.5px; letter-spacing: 0.16em; text-transform: uppercase; color: #2E8B3C; font-weight: 700; }
    .kicker.on-dark { color: #7DCB6B; }
    .sec-title { font-weight: 500; font-size: clamp(30px, 4vw, 46px); line-height: 1.12; margin: 14px 0 0; letter-spacing: -0.01em; }
    .sec-head { display: flex; align-items: end; justify-content: space-between; gap: 40px; flex-wrap: wrap; }
    .sec-lede { max-width: 400px; font-size: 16px; line-height: 1.65; color: #5B6480; margin: 0; }
    .link-more { font-size: 14.5px; font-weight: 700; color: #2E8B3C; border-bottom: 1px solid #3EA94B; padding-bottom: 3px; }

    /* ---------- Specialities ---------- */
    .spec-tabs { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 36px; }
    .spec-tab {
      padding: 11px 20px; font-size: 14px; font-weight: 600; cursor: pointer;
      transition: all .15s ease; border: 1px solid #DCE6DC; background: transparent; color: #5B6480;
    }
    .spec-tab.active { border-color: #2A5288; background: #2A5288; color: #F7FAF7; }
    .spec-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 16px; margin-top: 26px; }
    .spec-card { background: #FFFFFF; border: 1px solid #DCE6DC; padding: 24px 24px 26px; transition: border-color .15s ease; }
    .spec-card:hover { border-color: #2A5288; }
    .spec-card .head { display: flex; align-items: center; gap: 12px; }
    .spec-ico {
      width: 36px; height: 36px; flex-shrink: 0;
      display: grid; place-items: center;
      background: #F7FAF7; border: 1px solid #DCE6DC; border-radius: 6px; color: #2A5288;
      transition: all .15s ease;
    }
    .spec-ico svg { width: 17px; height: 17px; }
    .spec-card:hover .spec-ico { background: #2A5288; border-color: #2A5288; color: #7DCB6B; }
    .spec-card h3 { font-size: 16.5px; font-weight: 700; margin: 0; letter-spacing: -0.01em; }
    .spec-card p { font-size: 14px; line-height: 1.6; color: #5B6480; margin: 12px 0 0; }

    /* ---------- About ---------- */
    .about-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: clamp(40px, 5vw, 64px); align-items: center;
    }
    .about-media { position: relative; }
    .about-media img { width: 100%; height: clamp(300px, 42vw, 480px); object-fit: cover; }
    .about-badge { position: absolute; right: -18px; bottom: -18px; background: #2A5288; color: #F7FAF7; padding: 24px 28px; max-width: 230px; }
    .about-badge .num { font-size: 34px; color: #7DCB6B; line-height: 1; }
    .about-badge .lbl { font-size: 13.5px; color: rgba(247,250,247,0.7); margin-top: 8px; line-height: 1.5; }
    .about-copy p { font-size: 16.5px; line-height: 1.7; color: #5B6480; margin: 20px 0 0; }
    .about-copy p + p { margin-top: 16px; }
    .values-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 30px; }
    .value-item { border-left: 2px solid #3EA94B; padding: 4px 0 4px 16px; }
    .value-item .t { font-weight: 700; font-size: 15px; }
    .value-item .d { font-size: 13.5px; color: #5B6480; margin-top: 5px; line-height: 1.55; }
    @media (max-width: 480px) { .values-grid { grid-template-columns: 1fr; } .about-badge { right: 0; } }

    /* ---------- Technology ---------- */
    .tech-band { margin-top: clamp(58px, 8vw, 96px); background: #2A5288; color: #F7FAF7; padding: clamp(58px, 8vw, 90px) 0; }
    .tech-band .sec-lede { color: rgba(247,250,247,0.65); max-width: 380px; }
    .tech-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px; margin-top: 40px; }
    .tech-card { background: #35619B; border: 1px solid #4674B2; overflow: hidden; transition: border-color .15s ease; }
    .tech-card:hover { border-color: rgba(125,203,107,0.5); }
    .tech-card .img { width: 100%; height: 190px; background-size: cover; background-position: center; }
    .tech-card .body { padding: 22px 24px 26px; }
    .tech-card .tag { font-size: 11.5px; letter-spacing: 0.14em; text-transform: uppercase; color: #7DCB6B; font-weight: 700; }
    .tech-card h3 { font-size: 18px; font-weight: 700; margin: 10px 0 0; }
    .tech-card p { font-size: 14px; line-height: 1.6; color: rgba(247,250,247,0.62); margin: 10px 0 0; }

    /* ---------- Rare cases ---------- */
    .cases-intro { text-align: center; max-width: 640px; margin: 0 auto; }
    .cases-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(330px, 1fr)); gap: 18px; margin-top: 44px; }
    .case-card { background: #FFFFFF; border: 1px solid #DCE6DC; display: flex; flex-direction: column; overflow: hidden; }
    .case-card .img { width: 100%; height: 185px; background-size: cover; background-position: center; }
    .case-card .body { padding: 26px 28px 30px; display: flex; flex-direction: column; flex: 1; }
    .case-top { display: flex; align-items: center; justify-content: space-between; gap: 16px; }
    .case-dept { font-size: 11.5px; letter-spacing: 0.13em; text-transform: uppercase; font-weight: 700; color: #2E8B3C; }
    .case-badge { font-size: 11.5px; font-weight: 700; background: #EAF3EA; color: #2A5288; padding: 6px 12px; }
    .case-card h3 { font-weight: 500; font-size: 25px; line-height: 1.25; margin: 16px 0 0; }
    .case-card .outcome { font-size: 14.5px; line-height: 1.65; color: #5B6480; margin: 14px 0 0; }
    .case-stats { display: flex; gap: 26px; margin-top: auto; padding-top: 20px; border-top: 1px solid #E6EFE6; flex-wrap: wrap; }
    .case-card .outcome { margin-bottom: 22px; }
    .case-stats .v { font-size: 17px; font-weight: 700; color: #2A5288; }
    .case-stats .k { font-size: 11.5px; letter-spacing: 0.09em; text-transform: uppercase; color: #7A8A7C; margin-top: 4px; font-weight: 600; }
    .cases-more { display: flex; justify-content: center; margin-top: 36px; }
    .cases-more-btn {
      padding: 14px 32px; font-size: 14.5px; font-weight: 700; cursor: pointer;
      border: 1px solid #2A5288; background: transparent; color: #2A5288; transition: all .15s ease;
    }
    .cases-more-btn:hover { background: #2A5288; color: #F7FAF7; }
    .cases-more-btn.is-hidden { display: none; }

    /* ---------- Patient stories (3D coverflow card slider) ---------- */
    .stories-theater {
      margin-top: clamp(58px, 8vw, 96px);
      background: #2A5288;
      color: #F7FAF7;
      padding: clamp(58px, 8vw, 90px) 0;
      overflow: hidden;
    }
    .stories-theater-inner { max-width: 1240px; margin: 0 auto; padding: 0 28px; text-align: center; }
    .stories-theater .sec-title { font-size: clamp(28px, 3.6vw, 40px); line-height: 1.14; margin: 14px auto 38px; }
    .theater-row { display: flex; align-items: center; justify-content: center; gap: 16px; position: relative; }
    
    .theater-stage {
      position: relative;
      width: 100%;
      max-width: 960px;
      height: 420px;
      display: flex;
      justify-content: center;
      align-items: center;
      perspective: 1000px;
      overflow: hidden;
      user-select: none;
    }
    .slider-content-background {
      height: 100%; width: 102%; position: absolute; top: 0; left: -1%;
      background: linear-gradient(to right, #2A5288 0%, transparent 15%, transparent 85%, #2A5288 100%);
      z-index: 3; pointer-events: none;
    }

    .story-panel {
      position: absolute;
      left: 50%;
      top: 50%;
      width: clamp(280px, 75vw, 520px);
      border-radius: 18px;
      background: #FFFFFF; color: #2A5288;
      box-shadow: 0 15px 35px -5px rgba(0,0,0,0.3);
      padding: clamp(24px, 4vw, 36px);
      transform-style: preserve-3d;
      transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out, left 0.5s ease-in-out,
        z-index 0s 0.25s ease-in-out, box-shadow 0.5s ease-in-out, filter 0.5s ease-in-out;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .story-panel.position-1 {
      left: 15% !important;
      z-index: 1 !important;
      transform: translate(-50%, -50%) rotateY(-18deg) scale(0.76) !important;
      opacity: 0.45 !important;
      box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.15) !important;
      filter: blur(3px);
    }
    .story-panel.position-2 {
      left: 32% !important;
      z-index: 2 !important;
      transform: translate(-50%, -50%) rotateY(-9deg) scale(0.88) !important;
      opacity: 0.82 !important;
      box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.25) !important;
      filter: blur(1.5px);
      cursor: pointer;
    }
    .story-panel.position-3 {
      left: 50% !important;
      z-index: 4 !important;
      transform: translate(-50%, -50%) rotateY(0deg) scale(1) !important;
      opacity: 1 !important;
      box-shadow: 0px 20px 45px -8px rgba(0, 0, 0, 0.4) !important;
      cursor: pointer;
      filter: blur(0px);
    }
    .story-panel.position-3:hover {
      box-shadow: 0px 24px 50px -5px rgba(0, 0, 0, 0.5) !important;
      transform: translate(-50%, -50%) rotateY(0deg) scale(1.02) !important;
    }
    .story-panel.position-4 {
      left: 68% !important;
      z-index: 2 !important;
      transform: translate(-50%, -50%) rotateY(9deg) scale(0.88) !important;
      opacity: 0.82 !important;
      box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.25) !important;
      filter: blur(1.5px);
      cursor: pointer;
    }
    .story-panel.position-5 {
      left: 85% !important;
      z-index: 1 !important;
      transform: translate(-50%, -50%) rotateY(18deg) scale(0.76) !important;
      opacity: 0.45 !important;
      box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.15) !important;
      filter: blur(3px);
    }
    .story-panel.position-none {
      left: 50% !important;
      z-index: 0 !important;
      transform: translate(-50%, -50%) rotateY(0deg) scale(0.6) !important;
      opacity: 0 !important;
      pointer-events: none !important;
    }

    .story-mark {
      font-family: 'Newsreader', Georgia, serif; font-size: 56px; line-height: 0.55;
      color: #3EA94B; margin-bottom: 4px;
    }
    .story-quote {
      font-family: 'Newsreader', Georgia, serif; font-style: italic; font-weight: 300;
      font-size: clamp(17px, 2vw, 22px); line-height: 1.4; letter-spacing: -0.01em;
      color: #2A5288; max-width: 480px; margin: 0 auto;
    }
    .story-who { display: flex; flex-direction: column; align-items: center; gap: 3px; margin-top: 20px; }
    .story-who .avatar {
      width: 48px; height: 48px; border-radius: 50%; margin-bottom: 6px;
      background: #EAF3EA; color: #2E8B3C; font-weight: 700; font-size: 15px; letter-spacing: 0.04em;
      display: flex; align-items: center; justify-content: center;
    }
    .story-who .name { font-weight: 700; font-size: 15.5px; color: #2A5288; }
    .story-who .meta { font-size: 13px; color: #5B6480; }
    .story-pills { display: flex; justify-content: center; gap: 8px; flex-wrap: wrap; margin-top: 16px; }
    .story-pills .pill {
      display: inline-flex; align-items: center; gap: 7px; padding: 6px 14px; border-radius: 999px;
      border: 1px solid #BFDCBF; background: #EAF3EA;
    }
    .story-pills .k { font-size: 10px; letter-spacing: 0.11em; text-transform: uppercase; font-weight: 600; color: #7A8A7C; }
    .story-pills .v { font-size: 12.5px; font-weight: 700; color: #2E8B3C; }
    .story-arrow {
      flex: none; width: 44px; height: 44px; border-radius: 50%; cursor: pointer; z-index: 10;
      background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.3); color: #F7FAF7;
      font-size: 22px; line-height: 1; display: flex; align-items: center; justify-content: center;
      transition: all .15s ease;
    }
    .story-arrow:hover { background: #3EA94B; border-color: #3EA94B; color: #2A5288; }
    .story-dots { display: flex; justify-content: center; align-items: center; gap: 9px; margin-top: 28px; z-index: 10; position: relative; }
    .story-dot {
      width: 9px; height: 9px; padding: 0; border-radius: 50%; cursor: pointer;
      background: rgba(255,255,255,0.25); border: none; transition: all .2s ease;
    }
    .story-dot:hover { background: rgba(255,255,255,0.5); }
    .story-dot.active { background: #3EA94B; width: 22px; border-radius: 5px; }

    @media (max-width: 768px) {
      .theater-stage { height: 440px; }
      .story-panel.position-1, .story-panel.position-5 { opacity: 0 !important; pointer-events: none !important; }
      .story-panel.position-2 { left: 18% !important; opacity: 0.65 !important; }
      .story-panel.position-4 { left: 82% !important; opacity: 0.65 !important; }
    }
    @media (max-width: 520px) {
      .theater-stage { height: 460px; }
      .story-panel.position-2, .story-panel.position-4 { opacity: 0 !important; pointer-events: none !important; }
      .story-panel { width: 88%; }
      .story-arrow { width: 36px; height: 36px; font-size: 18px; }
    }

    /* ---------- Doctors ---------- */
    .docs-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(215px, 1fr)); gap: 16px; margin-top: 36px; }
    .doc-card { background: #FFFFFF; border: 1px solid #DCE6DC; padding: 16px 16px 24px; }
    .doc-card .img { width: 100%; height: 220px; background-size: cover; background-position: center; }
    .doc-card .name { font-size: 17px; font-weight: 700; margin-top: 18px; padding: 0 8px; }
    .doc-card .spec { font-size: 13.5px; color: #5B6480; margin-top: 6px; padding: 0 8px; }
    .doc-card .qual { font-size: 12.5px; color: #7A8A7C; margin-top: 12px; letter-spacing: 0.05em; padding: 0 8px; }

    /* ---------- Founders ---------- */
    .founders-panel {
      background: linear-gradient(135deg, #F0F6F0 0%, #E3EFE3 100%);
      border: 1px solid #D5E4D5;
      border-radius: 16px;
      padding: clamp(32px, 5vw, 56px);
      display: grid;
      grid-template-columns: 1.1fr 1fr;
      gap: clamp(32px, 5vw, 56px);
      align-items: center;
      box-shadow: 0 20px 45px -15px rgba(42, 82, 136, 0.07);
    }
    @media (max-width: 900px) {
      .founders-panel { grid-template-columns: 1fr; }
    }

    .founders-left .sec-title { margin-bottom: 24px; }

    .founder-quote-card {
      background: #FFFFFF;
      border: 1px solid #DCE6DC;
      border-radius: 14px;
      padding: clamp(24px, 4vw, 32px);
      box-shadow: 0 12px 30px -8px rgba(0, 0, 0, 0.05);
      position: relative;
    }
    .founder-quote-icon {
      width: 42px; height: 42px; border-radius: 50%;
      background: #EAF3EA; color: #3EA94B;
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 16px;
    }
    .founder-quote {
      font-family: 'Newsreader', Georgia, serif;
      font-style: italic;
      font-weight: 400;
      font-size: clamp(20px, 2.3vw, 26px);
      line-height: 1.45;
      letter-spacing: -0.01em;
      color: #2A5288;
      margin: 0;
    }
    .founder-quote strong {
      color: #12305F;
      font-weight: 600;
    }
    .founder-attrib {
      margin-top: 24px;
      padding-top: 18px;
      border-top: 1px solid #E6EFE6;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }
    .attrib-badge {
      display: inline-flex; align-items: center; gap: 6px;
      font-size: 11px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
      color: #2E8B3C; background: #EAF3EA; border: 1px solid #BFDCBF;
      padding: 5px 12px; border-radius: 999px;
    }
    .attrib-names {
      font-size: 13.5px; font-weight: 600; color: #5B6480;
    }

    .founder-cards { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-content: center; }
    @media (max-width: 540px) { .founder-cards { grid-template-columns: 1fr; } }

    .founder-card {
      background: #FFFFFF;
      border: 1px solid #DCE6DC;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -8px rgba(0,0,0,0.06);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .founder-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px -10px rgba(42, 82, 136, 0.16);
      border-color: #BFDCBF;
    }
    .founder-card .img-wrap { position: relative; width: 100%; overflow: hidden; }
    .founder-card .img {
      width: 100%; height: clamp(230px, 26vw, 310px);
      background-size: cover; background-position: center top;
      transition: transform 0.4s ease;
    }
    .founder-card:hover .img { transform: scale(1.05); }

    .founder-card .spec-tag {
      position: absolute; bottom: 10px; left: 10px; right: 10px;
      background: rgba(42, 82, 136, 0.9); backdrop-filter: blur(4px);
      color: #F7FAF7; font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;
      padding: 6px 10px; border-radius: 6px; text-align: center;
    }

    .founder-card .body { padding: 18px; text-align: center; }
    .founder-card .name { font-weight: 700; font-size: 16.5px; color: #2A5288; }
    .founder-card .qual-badge {
      display: inline-block; font-size: 11.5px; font-weight: 700; color: #2E8B3C;
      background: #EAF3EA; padding: 3px 10px; border-radius: 999px; margin-top: 6px;
    }
    .founder-card .role { font-size: 12.5px; color: #5B6480; margin-top: 6px; font-weight: 500; }

    .founder-milestone {
      background: linear-gradient(135deg, #2A5288 0%, #1D3F6E 100%);
      border-radius: 12px;
      padding: 22px 26px;
      color: #F7FAF7;
      grid-column: 1 / -1;
      box-shadow: 0 12px 30px -8px rgba(42, 82, 136, 0.25);
    }
    .founder-milestone .milestone-head {
      display: flex; align-items: center; justify-content: space-between; gap: 12px; flex-wrap: wrap;
    }
    .founder-milestone .milestone-badge {
      font-size: 11px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
      color: #7DCB6B; background: rgba(255,255,255,0.1); border: 1px solid rgba(125,203,107,0.4);
      padding: 5px 12px; border-radius: 999px;
    }
    .founder-milestone .num { font-size: 26px; font-weight: 700; color: #7DCB6B; line-height: 1; letter-spacing: -0.01em; }
    .founder-milestone .lbl { font-size: 13.5px; color: rgba(247,250,247,0.85); margin-top: 12px; line-height: 1.55; text-align: left; }

    /* ---------- Health Journal / Library Section (Image 2 Design) ---------- */
    .journal-section { padding-top: clamp(48px, 6vw, 80px); }
    .journal-header {
      display: flex; align-items: flex-end; justify-content: space-between;
      gap: 28px 40px; flex-wrap: wrap; margin-bottom: clamp(32px, 4vw, 48px);
    }
    .journal-header-left { max-width: 620px; }
    .journal-badge {
      display: inline-flex; align-items: center; gap: 8px;
      font-size: 11px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
      color: #2A5288; background: #EBF3FA; border: 1px solid #BFDCBF;
      padding: 6px 14px; border-radius: 999px; margin-bottom: 16px;
    }
    .journal-header-left .sec-title {
      font-size: clamp(28px, 3.8vw, 44px); line-height: 1.15; color: #12305F;
      font-weight: 700; margin: 0 0 14px; letter-spacing: -0.015em;
    }
    .journal-header-left .sec-title .title-serif {
      font-family: 'Newsreader', Georgia, serif; font-style: italic; font-weight: 400; color: #2A5288;
    }
    .journal-sub { font-size: 14.5px; line-height: 1.6; color: #5B6480; margin: 0; }

    .journal-header-right { flex-shrink: 0; }
    .btn-second-opinion {
      display: inline-flex; align-items: center; gap: 8px;
      padding: 12px 22px; border-radius: 999px;
      border: 1px solid #BFDCBF; background: #FFFFFF; color: #2A5288;
      font-size: 11.5px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
      transition: all 0.2s ease; text-decoration: none;
      box-shadow: 0 4px 12px rgba(42, 82, 136, 0.06);
    }
    .btn-second-opinion:hover {
      background: #2A5288; color: #FFFFFF; border-color: #2A5288;
      transform: translateY(-2px); box-shadow: 0 8px 20px rgba(42, 82, 136, 0.2);
    }

    .journal-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: clamp(20px, 3vw, 28px);
    }
    @media (max-width: 990px) {
      .journal-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
      .journal-grid { grid-template-columns: 1fr; }
    }

    .journal-card {
      background: #FFFFFF;
      border: 1px solid #DCE6DC;
      border-radius: 16px;
      overflow: hidden;
      display: flex; flex-direction: column;
      box-shadow: 0 10px 25px -8px rgba(0,0,0,0.05);
      transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }
    .journal-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px -10px rgba(42, 82, 136, 0.16);
      border-color: #BFDCBF;
    }

    .card-img-wrap { position: relative; width: 100%; height: 210px; overflow: hidden; }
    .card-img-wrap .img {
      width: 100%; height: 100%;
      background-size: cover; background-position: center;
      transition: transform 0.4s ease;
    }
    .journal-card:hover .card-img-wrap .img { transform: scale(1.05); }

    .card-img-wrap .cat-badge {
      position: absolute; top: 14px; left: 14px;
      background: rgba(255, 255, 255, 0.94); backdrop-filter: blur(4px);
      color: #2A5288; font-size: 10.5px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
      padding: 5px 12px; border-radius: 999px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    }
    .card-img-wrap .read-tag {
      position: absolute; bottom: 12px; right: 14px;
      color: #FFFFFF; font-size: 12px; font-weight: 600;
      text-shadow: 0 1px 4px rgba(0,0,0,0.7);
      background: rgba(0, 0, 0, 0.35); backdrop-filter: blur(4px);
      padding: 3px 10px; border-radius: 6px;
    }

    .journal-card .body {
      padding: 22px 24px;
      display: flex; flex-direction: column; flex: 1;
    }
    .journal-card .date {
      font-size: 11.5px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;
      color: #8A96A3; margin-bottom: 8px;
    }
    .journal-card .title {
      font-size: 17px; font-weight: 700; line-height: 1.35; color: #12305F;
      margin: 0 0 10px; letter-spacing: -0.01em;
    }
    .journal-card .desc {
      font-size: 12.5px; line-height: 1.55; color: #7A8A7C;
      margin: 0 0 20px; flex: 1;
    }

    .journal-card .card-footer {
      padding-top: 14px;
      border-top: 1px solid #EBF1F6;
      display: flex; align-items: center; justify-content: space-between;
      gap: 12px; font-size: 13px;
    }
    .journal-card .author { color: #5B6480; }
    .journal-card .author strong { color: #12305F; }
    .journal-card .read-link {
      font-weight: 700; color: #2A5288; text-decoration: none;
      transition: color 0.15s ease;
    }
    .journal-card:hover .read-link { color: #2E8B3C; }

    /* ---------- News & Events Section ---------- */
    .news-events-section { padding-top: clamp(48px, 6vw, 80px); }
    .news-events-grid {
      display: grid;
      grid-template-columns: minmax(280px, 1fr) minmax(360px, 1.5fr);
      gap: clamp(36px, 6vw, 70px);
      align-items: start;
    }
    @media (max-width: 860px) {
      .news-events-grid { grid-template-columns: 1fr; gap: 36px; }
    }

    .news-left { display: flex; flex-direction: column; }
    .news-left .kicker { font-size: 12px; letter-spacing: 0.14em; text-transform: uppercase; color: #2A5288; font-weight: 700; margin-bottom: 12px; }
    .news-left .sec-title { font-size: clamp(28px, 3.8vw, 44px); line-height: 1.15; color: #12305F; margin: 0 0 16px; font-weight: 700; }
    .news-left .sec-title .title-serif { font-family: 'Newsreader', Georgia, serif; font-style: italic; font-weight: 400; color: #2A5288; }
    .news-desc { font-size: 15px; line-height: 1.6; color: #5B6480; margin: 0 0 24px; max-width: 360px; }
    .news-graphic-wrap { margin-top: 10px; }

    .news-right { width: 100%; }
    .news-head-bar {
      display: flex; align-items: center; justify-content: space-between;
      padding-bottom: 14px; margin-bottom: 6px;
      border-bottom: 1px solid #EBF1F6;
    }
    .news-latest-label { font-size: 11px; letter-spacing: 0.14em; font-weight: 700; color: #8A96A3; text-transform: uppercase; }
    .news-view-all { font-size: 13.5px; font-weight: 700; color: #2A5288; transition: color 0.15s ease; text-decoration: none; }
    .news-view-all:hover { color: #2E8B3C; }

    .news-list { display: flex; flex-direction: column; }
    .news-item {
      display: flex; align-items: center; gap: 16px;
      padding: 16px 8px;
      border-bottom: 1px solid #EBF1F6;
      transition: background 0.15s ease, padding-left 0.15s ease;
      border-radius: 6px;
      text-decoration: none;
    }
    .news-item:hover {
      background: #F4F8F4;
      padding-left: 12px;
    }
    .news-date {
      font-size: 12.5px; font-weight: 700; color: #8A96A3;
      letter-spacing: 0.05em; text-transform: uppercase;
      width: 54px; flex-shrink: 0;
    }
    .news-badge {
      font-size: 10.5px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase;
      padding: 4px 10px; border-radius: 999px;
      background: #EBF3FA; color: #2A5288;
      flex-shrink: 0; min-width: 105px; text-align: center;
    }
    .news-title {
      font-size: 14.5px; font-weight: 600; color: #12305F;
      flex: 1; line-height: 1.4;
      transition: color 0.15s ease;
    }
    .news-item:hover .news-title { color: #2E8B3C; }
    .news-arrow {
      font-size: 16px; font-weight: 600; color: #8A96A3;
      flex-shrink: 0; transition: transform 0.15s ease, color 0.15s ease;
    }
    .news-item:hover .news-arrow {
      transform: translate(2px, -2px);
      color: #2E8B3C;
    }

    @media (max-width: 600px) {
      .news-item { flex-wrap: wrap; gap: 10px; padding: 14px 4px; }
      .news-date { width: auto; }
      .news-badge { min-width: auto; }
      .news-title { width: 100%; flex: none; order: 3; }
      .news-arrow { margin-left: auto; order: 2; }
    }

    /* ---------- Contact ---------- */
    .contact-panel {
      background: #2A5288; color: #F7FAF7; padding: clamp(36px, 5vw, 66px);
      display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: clamp(34px, 4vw, 60px); align-items: center;
    }
    .contact-panel h2 { font-weight: 500; font-size: clamp(30px, 4vw, 48px); line-height: 1.1; margin: 0; }
    .contact-panel .sub { font-size: 16.5px; line-height: 1.65; color: rgba(247,250,247,0.68); margin: 18px 0 0; max-width: 440px; }
    .contact-rows { display: grid; gap: 14px; align-content: end; }
    .contact-row { background: #35619B; border: 1px solid #4674B2; padding: 20px 24px; }
    .contact-row .k { font-size: 11.5px; letter-spacing: 0.14em; text-transform: uppercase; color: #7DCB6B; font-weight: 700; }
    .contact-row .v { font-size: 15.5px; margin-top: 8px; line-height: 1.5; color: rgba(247,250,247,0.88); }

    /* ---------- Footer ---------- */
    .site-footer { margin-top: clamp(58px, 8vw, 96px); border-top: 1px solid #DCE6DC; background: #F7FAF7; }
    .footer-grid {
      max-width: 1240px; margin: 0 auto; padding: 56px 28px 40px;
      display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px 48px;
    }
    .footer-brand img.lockup { height: 132px; width: auto; }
    .footer-brand p { font-size: 14px; line-height: 1.65; color: #5B6480; margin: 18px 0 0; max-width: 300px; }
    .footer-brand img.nabh { height: 54px; width: auto; margin-top: 20px; }
    .footer-col .h { font-size: 12px; letter-spacing: 0.14em; text-transform: uppercase; color: #7A8A7C; font-weight: 700; }
    .footer-col .links { display: grid; gap: 10px; margin-top: 16px; font-size: 14.5px; }
    .footer-col .links.muted { color: #5B6480; line-height: 1.5; }
    .footer-bottom { border-top: 1px solid #DCE6DC; }
    .footer-bottom-inner {
      max-width: 1240px; margin: 0 auto; padding: 20px 28px;
      display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap;
      font-size: 13px; color: #7A8A7C;
    }

    /* ---------- Soft corners ---------- */
    .btn-solid, .btn-ghost, .nav-toggle, .spec-tab, .cases-more-btn,
    .banner-arrow, .hero-badge { border-radius: 5px; }

    .case-badge, .event-row .status { border-radius: 4px; }
    .banner-dot { border-radius: 3px; }
    .topbar-live::before { border-radius: 2px; }

    .navy-card, .spec-card, .case-card, .doc-card, .contact-row,
    .about-media img, .about-badge, .doc-card .img, .event-row { border-radius: 8px; }

    .stats-strip, .tech-card, .blog-card { border-radius: 8px; overflow: hidden; }
    .contact-panel { border-radius: 10px; }
  </style>
</head>

<body id="top">

  <!-- ===== Top utility bar ===== -->
  <div class="topbar">
    <div class="topbar-inner">
      <div class="topbar-left">
        <span class="topbar-live">Emergency &amp; Trauma open 24&times;7</span>
        <span class="topbar-addr">Delhi Road, Near Bus Stand, Hisar, Haryana</span>
      </div>
      <div class="topbar-right">
        <a class="topbar-mail" href="mailto:<?= htmlspecialchars($HOSPITAL['email']) ?>"><?= htmlspecialchars($HOSPITAL['email']) ?></a>
        <a class="topbar-tel" href="tel:+919996544005"><?= htmlspecialchars($HOSPITAL['phone']) ?></a>
      </div>
    </div>
  </div>

  <!-- ===== Sticky header ===== -->
  <?php
  // Main navigation with dropdowns + services mega menu (ported from the previous site's navbar).
  // children item: [t => title, i => lucide icon, d => description, h => anchor]
  $NAV_MENU = [
    ['label' => 'About Us', 'href' => '#about', 'children' => [
      ['t' => 'About Sukhda Healthcare', 'i' => 'building-2', 'd' => 'Our 24+ years of medical excellence', 'h' => '#about'],
      ['t' => 'Leadership', 'i' => 'users', 'd' => 'Guided by visionary medical pioneers', 'h' => '#about'],
      ['t' => 'Infrastructure', 'i' => 'hospital', 'd' => 'State-of-the-art modular OTs & ICUs', 'h' => '#technology'],
      ['t' => 'Why Choose Us', 'i' => 'award', 'd' => "Hisar's most trusted speciality hub", 'h' => '#about'],
      ['t' => 'Vision and Mission', 'i' => 'compass', 'd' => 'Our commitment to healing & innovation', 'h' => '#about'],
      ['t' => 'Academics', 'i' => 'graduation-cap', 'd' => 'DNB program run by the institution', 'h' => '#about'],
    ]],
    ['label' => 'Hospital Networks', 'href' => '#about', 'children' => [
      ['t' => 'Sukhda Multispeciality Hospital', 'i' => 'building', 'd' => 'Flagship 250+ bed multispeciality hub, Hisar', 'h' => '#about'],
      ['t' => 'Sukhda MedPark', 'i' => 'tree-pine', 'd' => 'Ultra-modern super-speciality medical campus', 'h' => '#about'],
    ]],
    ['label' => 'Our Services', 'href' => '#specialities', 'mega' => true],
    ['label' => 'Doctors', 'href' => '#doctors'],
    ['label' => 'Technology', 'href' => '#technology'],
    ['label' => 'Patient Stories', 'href' => '#stories', 'children' => [
      ['t' => 'Testimonials', 'i' => 'video', 'd' => 'Authentic patient recovery journeys', 'h' => '#stories'],
      ['t' => 'Success Stories', 'i' => 'sparkles', 'd' => 'Rare cases & clinical breakthroughs', 'h' => '#cases'],
    ]],
    ['label' => 'Events', 'href' => '#events'],
  ];

  $MEGA_CATS = [
    'Treatments'   => ['icon' => 'shield-plus', 'sub' => 'Surgical & medical interventions'],
    'Departments'  => ['icon' => 'building-2',  'sub' => 'Core clinical & lab units'],
    'Specialities' => ['icon' => 'heart-pulse', 'sub' => 'Organ & system speciality care'],
  ];
  $MEGA_GROUPS = ['Treatments' => [], 'Departments' => [], 'Specialities' => []];
  foreach ($SPECS as $sp) {
    if (isset($MEGA_GROUPS[$sp[1]])) $MEGA_GROUPS[$sp[1]][] = $sp;
  }
  ?>
  <header class="site-header">
    <div class="header-inner">
      <a href="#top" class="brand" aria-label="Sukhda Medpark — Cancer &amp; Super Speciality Hospital">
        <img src="assets/images/logo-mark.png" alt="Sukhda Medpark">
        <span class="brand-text">
          <span class="l1">SUKHDA</span>
          <span class="l2">MEDPARK</span>
          <span class="l3">CANCER &amp; SUPER SPECIALITY HOSPITAL</span>
        </span>
      </a>

      <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false">&#9776;</button>

      <nav class="main-nav" id="mainNav">
        <?php foreach ($NAV_MENU as $ni => $item):
          $children = $item['children'] ?? [];
          $isMega = !empty($item['mega']);
          $hasPanel = $isMega || $children;
        ?>
          <div class="nav-item<?= $isMega ? ' has-mega' : '' ?><?= ($hasPanel && $ni >= 3) ? ' drop-right' : '' ?>">
            <a class="nav-link" href="<?= $item['href'] ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php if ($hasPanel): ?>
              <button class="drop-toggle" type="button" aria-haspopup="true" aria-expanded="false"
                aria-label="Open <?= htmlspecialchars($item['label']) ?> menu"><i data-lucide="chevron-down"></i></button>
            <?php endif; ?>

            <?php if ($isMega): ?>
              <div class="mega">
                <div class="mega-head">
                  <div class="mega-head-l">
                    <span class="mega-badge">Treatments, Departments &amp; Specialities</span>
                    <span class="mega-note">A categorised guide across our clinical departments and speciality centres</span>
                  </div>
                  <a class="mega-link" href="#specialities">Explore all departments &rarr;</a>
                </div>
                <div class="mega-cols">
                  <?php foreach ($MEGA_GROUPS as $catName => $catItems): $cm = $MEGA_CATS[$catName]; ?>
                    <div class="mega-col">
                      <div class="mega-col-head">
                        <span class="mega-col-ico"><i data-lucide="<?= $cm['icon'] ?>"></i></span>
                        <span>
                          <span class="t"><?= htmlspecialchars($catName) ?></span>
                          <span class="s"><?= htmlspecialchars($cm['sub']) ?></span>
                        </span>
                      </div>
                      <div class="mega-list">
                        <?php foreach ($catItems as $sp): ?>
                          <a class="mega-item" href="#specialities">
                            <span class="mega-ico"><i data-lucide="<?= htmlspecialchars($sp[3]) ?>"></i></span>
                            <span><?= htmlspecialchars($sp[0]) ?></span>
                          </a>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class="mega-cta">
                  <div>
                    <div class="t">Need help finding the right department or specialist?</div>
                    <div class="d">Our 24&times;7 clinical coordinators can guide your exact diagnostic or treatment path.</div>
                  </div>
                  <a class="mega-cta-btn" href="#contact">Consult a specialist</a>
                </div>
              </div>
            <?php elseif ($children): ?>
              <div class="drop">
                <?php foreach ($children as $c): ?>
                  <a class="drop-item" href="<?= $c['h'] ?>">
                    <span class="drop-ico"><i data-lucide="<?= $c['i'] ?>"></i></span>
                    <span>
                      <span class="t"><?= htmlspecialchars($c['t']) ?></span>
                      <span class="d"><?= htmlspecialchars($c['d']) ?></span>
                    </span>
                  </a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </nav>
    </div>
  </header>
