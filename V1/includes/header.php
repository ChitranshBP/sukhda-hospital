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
      color: #12305F;
      font-family: 'Schibsted Grotesk', system-ui, sans-serif;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    a { color: #12305F; text-decoration: none; transition: color .15s ease; }
    a:hover { color: #2E8B3C; }
    img { display: block; max-width: 100%; }
    h1, h2, h3 { letter-spacing: -0.025em; font-weight: 500; text-wrap: pretty; }
    button { font-family: inherit; }
    ::selection { background: #7DCB6B; color: #12305F; }

    @keyframes rise {
      from { opacity: 0; transform: translateY(14px); }
      to   { opacity: 1; transform: none; }
    }

    section[id] { scroll-margin-top: 96px; }

    .wrap { max-width: 1240px; margin: 0 auto; padding-left: 28px; padding-right: 28px; }

    /* ---------- Top bar ---------- */
    .topbar { background: #12305F; color: #EAF3EA; font-size: 13px; letter-spacing: 0.01em; }
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
    .brand-text .l1 { display: block; font-size: 22px; font-weight: 700; letter-spacing: 0.06em; color: #12305F; }
    .brand-text .l2 { display: block; font-size: 13px; font-weight: 700; letter-spacing: 0.22em; color: #1E7BC4; margin-top: 4px; }
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
      box-shadow: 0 28px 56px -28px rgba(18, 48, 95, 0.35);
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
      background: #F7FAF7; border: 1px solid #DCE6DC; border-radius: 6px; color: #12305F; transition: all .15s ease;
    }
    .drop-ico svg { width: 15px; height: 15px; }
    .drop-item:hover .drop-ico { background: #12305F; border-color: #12305F; color: #7DCB6B; }
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
      background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 6px; color: #12305F;
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
    .mega-item:hover { border-color: #12305F; }
    .mega-item > span:last-child { overflow: hidden; text-overflow: ellipsis; }
    .mega-ico {
      width: 26px; height: 26px; flex-shrink: 0; display: grid; place-items: center;
      background: #EAF3EA; border-radius: 6px; color: #2E8B3C; transition: all .15s ease;
    }
    .mega-ico svg { width: 13px; height: 13px; }
    .mega-item:hover .mega-ico { background: #12305F; color: #7DCB6B; }

    .mega-cta {
      margin-top: 18px; background: #12305F; color: #F7FAF7; border-radius: 8px; padding: 16px 20px;
      display: flex; align-items: center; justify-content: space-between; gap: 12px 24px; flex-wrap: wrap;
    }
    .mega-cta .t { font-size: 14.5px; font-weight: 700; white-space: normal; }
    .mega-cta .d { font-size: 13px; font-weight: 400; color: rgba(247, 250, 247, 0.68); margin-top: 4px; white-space: normal; }
    .mega-cta-btn {
      flex-shrink: 0; background: #3EA94B; color: #12305F; font-size: 13.5px; font-weight: 700;
      padding: 11px 20px; border-radius: 5px; transition: background .15s ease;
    }
    .mega-cta-btn:hover { background: #7DCB6B; color: #12305F; }

    .nav-toggle {
      display: none; order: 2; flex-shrink: 0;
      width: 44px; height: 44px; place-items: center; cursor: pointer;
      background: transparent; border: 1px solid #DCE6DC; color: #12305F; font-size: 20px; line-height: 1;
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
    .banner { position: relative; width: 100%; background: #12305F; overflow: hidden; }
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
      background: rgba(18,48,95,0.7); color: #F7FAF7; font-size: 17px; cursor: pointer;
      transition: all .15s ease;
    }
    .banner-arrow:hover { background: #3EA94B; border-color: #3EA94B; color: #12305F; }

    /* ---------- Hero ---------- */
    .hero { position: relative; background: #12305F; color: #F7FAF7; }
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
      background: #3EA94B; color: #12305F; padding: 15px 30px; font-weight: 700; font-size: 15px;
      transition: background .15s ease;
    }
    .btn-solid:hover { background: #7DCB6B; color: #12305F; }
    .btn-ghost {
      border: 1px solid rgba(247,250,247,0.35); color: #F7FAF7; padding: 15px 30px; font-weight: 600; font-size: 15px;
      transition: all .15s ease;
    }
    .btn-ghost:hover { border-color: #7DCB6B; color: #7DCB6B; }

    .hero-cards { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; align-content: center; }
    @media (max-width: 640px) { .hero-cards { grid-template-columns: 1fr; } }
    .navy-card { background: #1A3F73; border: 1px solid #2A5288; padding: 22px 24px; }
    .navy-card .num { font-size: 40px; color: #7DCB6B; line-height: 1; }
    .navy-card .lbl { font-size: 14px; color: rgba(247,250,247,0.7); margin-top: 8px; }

    /* ---------- Stats strip ---------- */
    .stats-strip {
      margin-top: -46px; position: relative; z-index: 5;
      background: #FFFFFF; border: 1px solid #DCE6DC;
      display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    }
    .stat-cell { padding: 30px 28px; border-right: 1px solid #E6EFE6; }
    .stat-cell:last-child { border-right: none; }
    .stat-cell .num { font-size: 42px; line-height: 1; color: #12305F; }
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
    .spec-tab.active { border-color: #12305F; background: #12305F; color: #F7FAF7; }
    .spec-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 16px; margin-top: 26px; }
    .spec-card { background: #FFFFFF; border: 1px solid #DCE6DC; padding: 24px 24px 26px; transition: border-color .15s ease; }
    .spec-card:hover { border-color: #12305F; }
    .spec-card .head { display: flex; align-items: center; gap: 12px; }
    .spec-ico {
      width: 36px; height: 36px; flex-shrink: 0;
      display: grid; place-items: center;
      background: #F7FAF7; border: 1px solid #DCE6DC; border-radius: 6px; color: #12305F;
      transition: all .15s ease;
    }
    .spec-ico svg { width: 17px; height: 17px; }
    .spec-card:hover .spec-ico { background: #12305F; border-color: #12305F; color: #7DCB6B; }
    .spec-card h3 { font-size: 16.5px; font-weight: 700; margin: 0; letter-spacing: -0.01em; }
    .spec-card p { font-size: 14px; line-height: 1.6; color: #5B6480; margin: 12px 0 0; }

    /* ---------- About ---------- */
    .about-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: clamp(40px, 5vw, 64px); align-items: center;
    }
    .about-media { position: relative; }
    .about-media img { width: 100%; height: clamp(300px, 42vw, 480px); object-fit: cover; }
    .about-badge { position: absolute; right: -18px; bottom: -18px; background: #12305F; color: #F7FAF7; padding: 24px 28px; max-width: 230px; }
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
    .tech-band { margin-top: clamp(58px, 8vw, 96px); background: #12305F; color: #F7FAF7; padding: clamp(58px, 8vw, 90px) 0; }
    .tech-band .sec-lede { color: rgba(247,250,247,0.65); max-width: 380px; }
    .tech-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px; margin-top: 40px; }
    .tech-card { background: #1A3F73; border: 1px solid #2A5288; overflow: hidden; transition: border-color .15s ease; }
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
    .case-badge { font-size: 11.5px; font-weight: 700; background: #EAF3EA; color: #12305F; padding: 6px 12px; }
    .case-card h3 { font-weight: 500; font-size: 25px; line-height: 1.25; margin: 16px 0 0; }
    .case-card .outcome { font-size: 14.5px; line-height: 1.65; color: #5B6480; margin: 14px 0 0; }
    .case-stats { display: flex; gap: 26px; margin-top: auto; padding-top: 20px; border-top: 1px solid #E6EFE6; flex-wrap: wrap; }
    .case-card .outcome { margin-bottom: 22px; }
    .case-stats .v { font-size: 17px; font-weight: 700; color: #12305F; }
    .case-stats .k { font-size: 11.5px; letter-spacing: 0.09em; text-transform: uppercase; color: #7A8A7C; margin-top: 4px; font-weight: 600; }

    /* ---------- Patient stories (quote theater) ---------- */
    .stories-theater {
      margin-top: clamp(58px, 8vw, 96px); background: #12305F; color: #F7FAF7;
      padding: clamp(58px, 8vw, 90px) 0;
    }
    .stories-theater-inner { max-width: 1240px; margin: 0 auto; padding: 0 28px; text-align: center; }
    .stories-theater .sec-title { font-size: clamp(28px, 3.6vw, 40px); line-height: 1.14; margin: 14px auto 38px; }
    .theater-stage { position: relative; }
    .story-panel {
      display: none; position: relative; overflow: hidden; border-radius: 14px;
      border: 1px solid rgba(255,255,255,0.1);
      background-size: cover; background-position: center;
      padding: clamp(40px, 5.5vw, 72px) clamp(24px, 5vw, 80px);
    }
    .story-panel.active { display: block; animation: rise .5s ease both; }
    .story-mark {
      font-family: 'Newsreader', Georgia, serif; font-size: 84px; line-height: 0.55;
      color: #3EA94B; margin-bottom: 8px;
    }
    .story-quote {
      font-family: 'Newsreader', Georgia, serif; font-style: italic; font-weight: 300;
      font-size: clamp(23px, 2.9vw, 37px); line-height: 1.35; letter-spacing: -0.01em;
      color: #F7FAF7; max-width: 880px; margin: 0 auto;
    }
    .story-who { display: flex; flex-direction: column; align-items: center; gap: 4px; margin-top: 34px; }
    .story-who .avatar {
      width: 52px; height: 52px; border-radius: 50%; margin-bottom: 8px;
      background: #3EA94B; color: #12305F; font-weight: 700; font-size: 16px; letter-spacing: 0.04em;
      display: flex; align-items: center; justify-content: center;
    }
    .story-who .name { font-weight: 700; font-size: 16px; }
    .story-who .meta { font-size: 13.5px; color: rgba(247,250,247,0.6); }
    .story-pills { display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; margin-top: 22px; }
    .story-pills .pill {
      display: inline-flex; align-items: center; gap: 9px; padding: 8px 17px; border-radius: 999px;
      border: 1px solid rgba(125,203,107,0.35); background: rgba(125,203,107,0.08);
    }
    .story-pills .k { font-size: 10.5px; letter-spacing: 0.11em; text-transform: uppercase; font-weight: 600; color: rgba(247,250,247,0.55); }
    .story-pills .v { font-size: 13.5px; font-weight: 700; color: #7DCB6B; }
    .story-rail { display: flex; justify-content: center; flex-wrap: wrap; gap: 10px; margin-top: 28px; }
    .story-tab {
      display: inline-flex; align-items: center; gap: 10px; text-align: left;
      padding: 7px 18px 7px 8px; border-radius: 999px; cursor: pointer; transition: all .15s ease;
      background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); color: rgba(247,250,247,0.75);
    }
    .story-tab:hover { border-color: rgba(125,203,107,0.55); color: #F7FAF7; }
    .story-tab .avatar {
      width: 34px; height: 34px; border-radius: 50%; flex: none;
      background: rgba(255,255,255,0.1); color: #7DCB6B; font-weight: 700; font-size: 12px;
      display: flex; align-items: center; justify-content: center; transition: all .15s ease;
    }
    .story-tab .txt { display: flex; flex-direction: column; gap: 2px; }
    .story-tab .n { font-weight: 700; font-size: 13.5px; }
    .story-tab .c { font-size: 11.5px; opacity: 0.65; }
    .story-tab.active { background: #3EA94B; border-color: #3EA94B; color: #12305F; }
    .story-tab.active .c { opacity: 0.8; }
    .story-tab.active .avatar { background: #12305F; color: #7DCB6B; }
    @media (max-width: 640px) {
      .story-tab .c { display: none; }
      .story-tab { padding: 6px 14px 6px 7px; }
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
      background: #EAF3EA; border-radius: 10px; padding: clamp(30px, 4vw, 54px);
      display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: clamp(30px, 4vw, 54px); align-items: center;
    }
    .founder-quote-mark { font-size: 64px; color: #3EA94B; line-height: 0.6; margin-top: 30px; }
    .founder-quote {
      font-family: 'Newsreader', Georgia, serif; font-style: italic; font-weight: 400;
      font-size: clamp(22px, 2.6vw, 30px); line-height: 1.45; letter-spacing: -0.01em;
      margin: 18px 0 0; color: #12305F; max-width: 560px;
    }
    .founder-attrib { font-size: 13.5px; color: #5B6480; margin-top: 22px; }
    .founder-cards { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; align-content: center; }
    .founder-card {
      background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 8px; overflow: hidden;
    }
    .founder-card .img {
      width: 100%; height: clamp(220px, 24vw, 300px);
      background-size: cover; background-position: center top;
    }
    .founder-card .body { padding: 16px 18px 20px; }
    .founder-card .name { font-weight: 700; font-size: 16.5px; }
    .founder-card .role { font-size: 13.5px; color: #5B6480; margin-top: 4px; line-height: 1.5; }
    .founder-milestone { background: #12305F; border-radius: 8px; padding: 22px 24px; color: #F7FAF7; grid-column: 1 / -1; }
    @media (max-width: 480px) { .founder-cards { grid-template-columns: 1fr; } }
    .founder-milestone .num { font-size: 26px; color: #7DCB6B; line-height: 1; letter-spacing: -0.01em; }
    .founder-milestone .lbl { font-size: 13.5px; color: rgba(247,250,247,0.72); margin-top: 10px; line-height: 1.55; }

    /* ---------- Health library ---------- */
    .blog-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 18px; margin-top: 36px; }
    .blog-card { background: #FFFFFF; border: 1px solid #DCE6DC; overflow: hidden; display: block; transition: border-color .15s ease; }
    .blog-card:hover { border-color: #3EA94B; }
    .blog-card .img { width: 100%; height: 170px; background-size: cover; background-position: center; }
    .blog-card .body { padding: 20px 22px 24px; }
    .blog-card .cat { font-size: 11.5px; letter-spacing: 0.13em; text-transform: uppercase; color: #2E8B3C; font-weight: 700; }
    .blog-card h3 { font-size: 16.5px; font-weight: 700; line-height: 1.4; margin: 10px 0 0; letter-spacing: -0.01em; }
    .blog-card .by { font-size: 12.5px; color: #7A8A7C; margin-top: 14px; }

    /* ---------- Events ---------- */
    .events-list { margin-top: 36px; border-top: 1px solid #DCE6DC; }
    .event-row {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 16px 32px; align-items: center; padding: 26px 8px; border-bottom: 1px solid #DCE6DC;
      transition: background .15s ease;
    }
    .event-row:hover { background: #EAF3EA; }
    .event-row .date { font-size: 15px; font-weight: 700; }
    .event-row .time { font-size: 12.5px; color: #7A8A7C; margin-top: 4px; }
    .event-row .title { font-size: 17.5px; font-weight: 700; letter-spacing: -0.01em; }
    .event-row .desc { font-size: 13.5px; color: #5B6480; margin-top: 6px; line-height: 1.55; }
    .event-row .loc { font-size: 13.5px; color: #5B6480; }
    .event-row .status-wrap { display: flex; justify-content: flex-end; }
    .event-row .status { font-size: 12px; font-weight: 700; padding: 7px 14px; background: #12305F; color: #7DCB6B; }

    /* ---------- Contact ---------- */
    .contact-panel {
      background: #12305F; color: #F7FAF7; padding: clamp(36px, 5vw, 66px);
      display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: clamp(34px, 4vw, 60px); align-items: center;
    }
    .contact-panel h2 { font-weight: 500; font-size: clamp(30px, 4vw, 48px); line-height: 1.1; margin: 0; }
    .contact-panel .sub { font-size: 16.5px; line-height: 1.65; color: rgba(247,250,247,0.68); margin: 18px 0 0; max-width: 440px; }
    .contact-rows { display: grid; gap: 14px; align-content: end; }
    .contact-row { background: #1A3F73; border: 1px solid #2A5288; padding: 20px 24px; }
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
    .btn-solid, .btn-ghost, .nav-toggle, .spec-tab,
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
