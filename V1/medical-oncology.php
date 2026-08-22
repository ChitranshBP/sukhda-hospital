<?php
$page_title = 'Medical Oncology & Precision Cancer Care — Sukhda Medpark, Hisar';
$page_description = 'Advanced Medical Oncology at Sukhda Hospital, Hisar. Targeted chemotherapy, immunotherapy, hormonal therapy, palliative care and multidisciplinary tumor boards by experienced oncologists.';
require __DIR__ . '/includes/header.php';
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..700;1,6..72,300..700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* ================================================================
   SERVICE PAGE — MEDICAL ONCOLOGY (STANDALONE DESIGN INTEGRATION)
   Matches exact design tokens, typography, gradients & animations
================================================================ */

.onco-page-wrap {
  font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
  color: #0F172A;
  background: radial-gradient(900px 500px at 8% 4%, rgba(46,139,60,.05), transparent 60%), radial-gradient(900px 600px at 96% 46%, rgba(42,82,136,.05), transparent 60%), #F7FAF7;
  background-attachment: fixed;
  overflow-x: hidden;
}

.onco-page-wrap a { color: #2E8B3C; text-decoration: none; }
.onco-page-wrap a:hover { color: #16A34A; }
.onco-page-wrap em.serif {
  font-family: 'Newsreader', Georgia, serif !important;
  font-style: italic !important;
  font-weight: 400 !important;
  font-size: 1.05em;
  letter-spacing: -0.01em;
}
.onco-page-wrap h1, .onco-page-wrap h2, .onco-page-wrap h3, .onco-page-wrap h4 { text-wrap: balance; }
.onco-page-wrap p { text-wrap: pretty; }
.onco-page-wrap section[id], .onco-page-wrap div[id] { scroll-margin-top: 88px; }

/* Animation tokens */
.onco-page-wrap [data-anim] {
  transition: transform .3s cubic-bezier(.2,.7,.3,1), box-shadow .3s ease, border-color .3s ease, background .3s ease;
  box-shadow: 0 1px 2px rgba(11,30,60,.04), 0 12px 28px -24px rgba(11,30,60,.4);
}
.onco-page-wrap [data-anim]:hover {
  transform: translateY(-5px);
  border-color: #BFDCBF !important;
  box-shadow: 0 2px 4px rgba(11,30,60,.05), 0 30px 56px -28px rgba(11,30,60,.35);
}

.onco-page-wrap [data-treat] { position: relative; overflow: hidden; }
.onco-page-wrap [data-treat]::before {
  content: '';
  position: absolute; top: 0; left: 0; right: 0; height: 3px;
  background: linear-gradient(90deg, #16A34A, #7DCB6B);
  transform: scaleX(0); transform-origin: left;
  transition: transform .35s ease;
}
.onco-page-wrap [data-treat]:hover::before { transform: scaleX(1); }

.onco-page-wrap [data-num] {
  position: absolute; top: 18px; right: 22px;
  font-size: 44px; font-weight: 800; letter-spacing: -0.04em;
  color: #12305F; opacity: .07; line-height: 1; pointer-events: none;
}

.onco-page-wrap [data-why] { position: relative; overflow: hidden; }
.onco-page-wrap [data-why]::after {
  content: '';
  position: absolute; left: 26px; right: 26px; bottom: 0; height: 2px;
  background: linear-gradient(90deg, #7DCB6B, transparent);
  transform: scaleX(0); transform-origin: left;
  transition: transform .35s ease;
}
.onco-page-wrap [data-why]:hover::after { transform: scaleX(1); }

.onco-page-wrap a[href^="tel:"], .onco-page-wrap a[href="#contact"], .onco-page-wrap a[href="/#contact"] {
  transition: transform .22s ease, box-shadow .22s ease, background .22s ease, border-color .22s ease, color .22s ease;
}
.onco-page-wrap a[href^="tel:"]:hover, .onco-page-wrap a[href="#contact"]:hover, .onco-page-wrap a[href="/#contact"]:hover {
  transform: translateY(-2px);
  box-shadow: 0 18px 34px -14px rgba(11,30,60,.45);
}

.onco-page-wrap [data-index] a { transition: color .2s ease, padding-left .2s ease; }
.onco-page-wrap [data-index] a:hover { color: #16A34A; padding-left: 6px; }

.onco-page-wrap [data-faqq] { transition: color .2s ease, background .2s ease; }
.onco-page-wrap [data-faqq]:hover { color: #16A34A; background: #FBFDFB; }

.onco-page-wrap [data-canrow] { transition: background .2s ease, padding-left .2s ease; }
.onco-page-wrap [data-canrow]:hover { background: #F0FDF4; padding-left: 10px; }

.onco-page-wrap [data-grid-tex] {
  position: absolute; inset: 0;
  background-image: linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px);
  background-size: 56px 56px;
  mask-image: radial-gradient(circle at 32% 36%, #000, transparent 80%);
  -webkit-mask-image: radial-gradient(circle at 32% 36%, #000, transparent 80%);
}

.onco-page-wrap [data-reveal].rv { opacity: 0; transform: translateY(22px); }
.onco-page-wrap [data-reveal].rv-in { opacity: 1; transform: none; transition: opacity .7s ease, transform .7s cubic-bezier(.2,.7,.3,1); }

@media (max-width: 1040px) {
  .onco-page-wrap [data-g="hero"],
  .onco-page-wrap [data-g="two"],
  .onco-page-wrap [data-g="head"],
  .onco-page-wrap [data-g="faq"],
  .onco-page-wrap [data-g="cta"] { grid-template-columns: 1fr !important; }
  .onco-page-wrap [data-g="head"] { gap: 20px !important; }
  .onco-page-wrap [data-g="c3"] { grid-template-columns: repeat(2, 1fr) !important; }
  .onco-page-wrap [data-g="j6"] { grid-template-columns: repeat(3, 1fr) !important; }
  .onco-page-wrap [data-g="stats"] { grid-template-columns: repeat(2, 1fr) !important; }
  .onco-page-wrap [data-statline] { display: none !important; }
}

@media (max-width: 720px) {
  .onco-page-wrap [data-g="c3"],
  .onco-page-wrap [data-g="quad"],
  .onco-page-wrap [data-g="team"],
  .onco-page-wrap [data-g="j6"],
  .onco-page-wrap [data-g="cangrid"] { grid-template-columns: 1fr !important; }
  .onco-page-wrap [data-pad] { padding-left: 20px !important; padding-right: 20px !important; }
  .onco-page-wrap [data-g="stats"] { grid-template-columns: 1fr 1fr !important; }
}
</style>

<div class="onco-page-wrap">

  <!-- ============================================================
       1. HERO SECTION (Deep Navy & Emerald with Stats & Badges)
  ============================================================ -->
  <div style="position: relative; overflow: hidden; background: linear-gradient(140deg, #0B1E3C 0%, #143560 48%, #1D4E7A 100%); color: #F7FAF7; padding: 72px 0 0;">
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 82% 22%, rgba(125,203,107,.16) 0%, transparent 52%);"></div>
    <div data-grid-tex="1"></div>
    <div data-pad="1" style="position: relative; z-index: 2; max-width: 1240px; margin: 0 auto; padding: 0 32px;">
      <div data-g="hero" style="display: grid; grid-template-columns: 1.05fr .95fr; gap: 64px; align-items: center; padding-bottom: 64px;">
        
        <!-- Left Hero Content -->
        <div>
          <div style="display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 500; color: rgba(247,250,247,.55); margin-bottom: 26px;">
            <a href="/" style="color: rgba(247,250,247,.75);">Home</a><span style="opacity: .4;">›</span>
            <a href="/#specialities" style="color: rgba(247,250,247,.75);">Specialties</a><span style="opacity: .4;">›</span>
            <span style="color: #7DCB6B;">Medical Oncology</span>
          </div>
          
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.32); color: #7DCB6B; padding: 7px 16px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 26px;">
            <i data-lucide="shield-check" style="width: 15px; height: 15px;"></i>Centre of Excellence
          </div>
          
          <h1 style="font-size: clamp(42px, 5.4vw, 66px); font-weight: 800; line-height: 1.04; letter-spacing: -0.038em; color: #FFFFFF; margin: 0 0 24px;">
            Fighting cancer with <em class="serif" style="color: #7DCB6B;">precision</em> &amp; <em class="serif" style="color: #7DCB6B;">compassion.</em>
          </h1>
          
          <p style="font-size: 17.5px; line-height: 1.72; color: rgba(247,250,247,.82); max-width: 540px; margin: 0 0 36px;">
            Chemotherapy, immunotherapy and targeted therapy — planned by a weekly multidisciplinary tumour board, delivered in a dedicated daycare suite, and backed by round-the-clock supportive care.
          </p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 38px;">
            <a href="#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; box-shadow: 0 16px 34px -12px rgba(22,163,74,.75);">
              <i data-lucide="calendar-check" style="width: 18px; height: 18px;"></i>Book oncology consult
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.26); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
              <i data-lucide="phone" style="width: 18px; height: 18px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
          </div>
          
          <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap; font-size: 13px; font-weight: 500; color: rgba(247,250,247,.68);">
            <span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>NABH accredited</span>
            <span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span>
            <span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="flask-conical" style="width: 16px; height: 16px; color: #7DCB6B;"></i>NABL in-house lab</span>
            <span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span>
            <span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="wallet" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Cashless TPA support</span>
          </div>
        </div>

        <!-- Right Hero Visual Showcase -->
        <div style="position: relative;">
          <div style="position: absolute; inset: -18px -18px auto auto; width: 180px; height: 180px; border-radius: 50%; background: radial-gradient(circle, rgba(125,203,107,.25), transparent 70%); filter: blur(10px);"></div>
          <div style="position: relative; border-radius: 22px; overflow: hidden; border: 1px solid rgba(255,255,255,.18); box-shadow: 0 40px 80px -30px rgba(0,0,0,.6);">
            <img src="assets/images/oncology/onco-img-1.jpg" alt="Oncology care at Sukhda Medpark" style="display: block; width: 100%; height: 440px; object-fit: cover;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(11,30,60,.62), transparent 55%);"></div>
            <div style="position: absolute; left: 20px; right: 20px; bottom: 20px; display: flex; align-items: center; gap: 14px; background: rgba(247,250,247,.94); backdrop-filter: blur(10px); border-radius: 14px; padding: 16px 18px; color: #12305F;">
              <div style="width: 42px; height: 42px; flex: none; border-radius: 11px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center;">
                <i data-lucide="microscope" style="width: 20px; height: 20px;"></i>
              </div>
              <div>
                <div style="font-size: 14.5px; font-weight: 800;">Weekly tumour board</div>
                <div style="font-size: 12.5px; color: #5B6480; margin-top: 2px;">Every case reviewed by 6+ specialists before treatment</div>
              </div>
            </div>
          </div>
          <div style="position: absolute; top: 18px; right: 18px; display: inline-flex; align-items: center; gap: 7px; background: rgba(11,30,60,.72); backdrop-filter: blur(8px); border: 1px solid rgba(125,203,107,.4); color: #7DCB6B; padding: 8px 14px; border-radius: 999px; font-size: 11px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase;">
            <i data-lucide="award" style="width: 14px; height: 14px;"></i>NABH Accredited
          </div>
        </div>

      </div>

      <!-- Integrated Hero Bottom Stat Strip -->
      <div data-g="stats" style="position: relative; z-index: 2; display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; background: rgba(255,255,255,.06); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.14); border-bottom: none; border-radius: 20px 20px 0 0; overflow: hidden;">
        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">2,500<span style="color: #7DCB6B;">+</span></div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Cancer patients treated</div>
        </div>
        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">&lt; 7 <span style="color: #7DCB6B; font-size: 20px;">days</span></div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Consult to treatment start</div>
        </div>
        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">24<span style="color: #7DCB6B;">×</span>7</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Daycare chemo &amp; support</div>
        </div>
        <div style="padding: 26px 28px;">
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">18<span style="color: #7DCB6B;">+</span></div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Cancer types treated</div>
        </div>
      </div>
    </div>
  </div>


  <!-- ============================================================
       2. ABOUT THE DEPARTMENT & QUICK NAVIGATION
  ============================================================ -->
  <section data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 80px 32px 0;">
    <div data-g="two" style="display: grid; grid-template-columns: 1.1fr .9fr; gap: 60px; align-items: start;">
      
      <!-- Left Column: Department Overview & Core Highlights -->
      <div data-reveal="1">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="building-2" style="width: 14px; height: 14px;"></i>About the department
        </div>
        
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 26px;">
          Comprehensive cancer care, <em class="serif" style="color: #2E8B3C;">under one roof.</em>
        </h2>
        
        <p style="font-size: 16.5px; line-height: 1.78; color: #5B6480; margin: 0 0 18px;">
          The Department of Medical Oncology diagnoses, stages and treats solid-organ tumours and haematological malignancies using systemic therapies — from first biopsy to post-remission surveillance.
        </p>
        
        <div style="margin: 26px 0 28px; padding: 22px 26px; background: #FFFFFF; border-left: 4px solid #16A34A; border-radius: 0 16px 16px 0; box-shadow: 0 12px 28px -22px rgba(11,30,60,.35);">
          <p style="margin: 0; font-family: 'Newsreader', Georgia, serif; font-style: italic; font-size: 20px; line-height: 1.55; color: #12305F;">
            "No patient should have to travel to a metro city for world-class cancer treatment."
          </p>
          <div style="margin-top: 10px; font-size: 12.5px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: #2E8B3C;">
            — The principle we're built on
          </div>
        </div>
        
        <p style="font-size: 16.5px; line-height: 1.78; color: #5B6480; margin: 0 0 30px;">
          Every case is discussed in our <strong style="color: #12305F;">weekly multidisciplinary tumour board</strong> — medical, surgical and radiation oncologists, pathologists and radiologists designing each strategy together, so every decision is evidence-backed and protocol-driven.
        </p>
        
        <div data-g="quad" style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">
          <div data-anim="1" style="display: flex; gap: 14px; padding: 18px; background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 14px;">
            <div style="width: 38px; height: 38px; flex: none; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 12px -5px rgba(22,163,74,.55);">
              <i data-lucide="users" style="width: 18px; height: 18px;"></i>
            </div>
            <div>
              <strong style="display: block; font-size: 14.5px; color: #0F172A;">Tumour Board</strong>
              <span style="display: block; font-size: 13px; line-height: 1.55; color: #5B6480; margin-top: 3px;">Weekly review by a multidisciplinary specialist panel</span>
            </div>
          </div>

          <div data-anim="1" style="display: flex; gap: 14px; padding: 18px; background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 14px;">
            <div style="width: 38px; height: 38px; flex: none; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 12px -5px rgba(22,163,74,.55);">
              <i data-lucide="test-tube" style="width: 18px; height: 18px;"></i>
            </div>
            <div>
              <strong style="display: block; font-size: 14.5px; color: #0F172A;">In-house Diagnostics</strong>
              <span style="display: block; font-size: 13px; line-height: 1.55; color: #5B6480; margin-top: 3px;">NABL lab for histopathology, IHC &amp; tumour markers</span>
            </div>
          </div>

          <div data-anim="1" style="display: flex; gap: 14px; padding: 18px; background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 14px;">
            <div style="width: 38px; height: 38px; flex: none; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 12px -5px rgba(22,163,74,.55);">
              <i data-lucide="heart-handshake" style="width: 18px; height: 18px;"></i>
            </div>
            <div>
              <strong style="display: block; font-size: 14.5px; color: #0F172A;">Supportive Care</strong>
              <span style="display: block; font-size: 13px; line-height: 1.55; color: #5B6480; margin-top: 3px;">Pain, nutrition, psycho-oncology &amp; palliative support</span>
            </div>
          </div>

          <div data-anim="1" style="display: flex; gap: 14px; padding: 18px; background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 14px;">
            <div style="width: 38px; height: 38px; flex: none; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 12px -5px rgba(22,163,74,.55);">
              <i data-lucide="shield-check" style="width: 18px; height: 18px;"></i>
            </div>
            <div>
              <strong style="display: block; font-size: 14.5px; color: #0F172A;">Protocol-Driven</strong>
              <span style="display: block; font-size: 13px; line-height: 1.55; color: #5B6480; margin-top: 3px;">NCCN &amp; ESMO guidelines adapted for Indian patients</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Sticky Navigation Box & Emergency Help Card -->
      <div style="position: sticky; top: 92px; display: flex; flex-direction: column; gap: 16px;">
        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 26px; box-shadow: 0 18px 44px -28px rgba(11,30,60,.35);">
          <div style="display: flex; align-items: center; gap: 10px; font-size: 16.5px; font-weight: 800; color: #12305F; margin-bottom: 16px; padding-bottom: 14px; border-bottom: 1px solid #E6EFE6;">
            <i data-lucide="list" style="width: 18px; height: 18px; color: #2E8B3C;"></i>What's on this page
          </div>
          <div data-index="1" style="display: flex; flex-direction: column;">
            <a href="#treatments" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="pill" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Treatments &amp; Therapies
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#cancers" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="activity" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Cancers We Treat
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#why" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="award" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Why Choose Sukhda
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#journey" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="route" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Your Patient Journey
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#team" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="user-check" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Our Specialists
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#faqs" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="help-circle" style="width: 17px; height: 17px; color: #2E8B3C;"></i>FAQs
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
          </div>
        </div>

        <div style="position: relative; overflow: hidden; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); border-radius: 20px; padding: 28px; color: #F7FAF7;">
          <div style="position: absolute; top: -30px; right: -30px; width: 140px; height: 140px; border-radius: 50%; background: radial-gradient(circle, rgba(125,203,107,.28), transparent 70%);"></div>
          <div style="position: relative;">
            <div style="display: inline-flex; align-items: center; gap: 7px; font-size: 11px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; color: #7DCB6B; margin-bottom: 12px;">
              <span style="width: 7px; height: 7px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 4px rgba(125,203,107,.2);"></span>Helpline open now
            </div>
            <div style="font-size: 19px; font-weight: 800; margin-bottom: 8px;">Need urgent help?</div>
            <p style="margin: 0 0 20px; font-size: 14px; line-height: 1.65; color: rgba(247,250,247,.8);">Speak to a cancer care coordinator about reports, second opinions or starting treatment.</p>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 14px 18px; border-radius: 13px; font-size: 15px; font-weight: 700; box-shadow: 0 12px 24px -10px rgba(22,163,74,.6);">
              <i data-lucide="phone" style="width: 17px; height: 17px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
            <div style="margin-top: 12px; text-align: center; font-size: 12px; color: rgba(247,250,247,.55);">Available 24×7 · All 7 days</div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       3. TREATMENTS & MODALITIES GRID (6 Premium Cards)
  ============================================================ -->
  <section id="treatments" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 40px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="pill" style="width: 14px; height: 14px;"></i>Treatment modalities
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Treatments &amp; <em class="serif" style="color: #2E8B3C;">therapies we offer.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Every cancer is unique. Our oncologists tailor plans by combining modalities — chemotherapy, immunotherapy, targeted agents and supportive care — to maximise response while minimising side effects.
      </p>
    </div>

    <div data-g="c3" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
      
      <!-- Card 01: Chemotherapy -->
      <article data-anim="1" data-treat="1" data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; gap: 16px;">
        <div data-num="1">01</div>
        <div style="width: 52px; height: 52px; border-radius: 14px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94; display: flex; align-items: center; justify-content: center;">
          <i data-lucide="pill" style="width: 25px; height: 25px;"></i>
        </div>
        <h3 style="margin: 0; font-size: 20px; font-weight: 800; color: #12305F; letter-spacing: -0.02em;">Chemotherapy</h3>
        <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: #5B6480;">Intravenous and oral cytotoxic regimens delivered in a dedicated daycare suite with recliner stations, vitals monitoring and anti-emetic protocols.</p>
        <ul style="list-style: none; margin: 0; padding: 16px 0 0; border-top: 1px dashed #DCE6DC; display: flex; flex-direction: column; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #4B5563;">
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Neoadjuvant chemotherapy (pre-surgery tumour shrinkage)</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Adjuvant chemotherapy (residual cell elimination)</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Palliative chemotherapy for advanced-stage cancers</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Metronomic low-dose schedules</span></li>
        </ul>
      </article>

      <!-- Card 02: Immunotherapy -->
      <article data-anim="1" data-treat="1" data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; gap: 16px;">
        <div data-num="1">02</div>
        <div style="width: 52px; height: 52px; border-radius: 14px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center;">
          <i data-lucide="shield-check" style="width: 25px; height: 25px;"></i>
        </div>
        <h3 style="margin: 0; font-size: 20px; font-weight: 800; color: #12305F; letter-spacing: -0.02em;">Immunotherapy</h3>
        <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: #5B6480;">Checkpoint inhibitors (anti-PD-1, anti-PD-L1, anti-CTLA-4) that enlist the body's own immune system, for patients with the right biomarker profile.</p>
        <ul style="list-style: none; margin: 0; padding: 16px 0 0; border-top: 1px dashed #DCE6DC; display: flex; flex-direction: column; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #4B5563;">
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Pembrolizumab, Nivolumab, Atezolizumab protocols</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Combination immuno-chemotherapy regimens</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>PD-L1 expression &amp; TMB testing for eligibility</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Immune-related adverse event monitoring</span></li>
        </ul>
      </article>

      <!-- Card 03: Targeted Therapy -->
      <article data-anim="1" data-treat="1" data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; gap: 16px;">
        <div data-num="1">03</div>
        <div style="width: 52px; height: 52px; border-radius: 14px; background: #F5F3FF; border: 1px solid #DDD6FE; color: #7C3AED; display: flex; align-items: center; justify-content: center;">
          <i data-lucide="target" style="width: 25px; height: 25px;"></i>
        </div>
        <h3 style="margin: 0; font-size: 20px; font-weight: 800; color: #12305F; letter-spacing: -0.02em;">Targeted Therapy</h3>
        <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: #5B6480;">Precision medicine against the genes, proteins and pathways that drive cancer growth, guided by molecular profiling and next-generation sequencing.</p>
        <ul style="list-style: none; margin: 0; padding: 16px 0 0; border-top: 1px dashed #DCE6DC; display: flex; flex-direction: column; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #4B5563;">
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Tyrosine kinase inhibitors — EGFR, ALK, ROS1</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>HER2-targeted agents for breast &amp; gastric cancer</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Anti-angiogenic therapies (VEGF pathway)</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>CDK4/6 inhibitors for HR-positive breast cancer</span></li>
        </ul>
      </article>

      <!-- Card 04: Hormonal Therapy -->
      <article data-anim="1" data-treat="1" data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; gap: 16px;">
        <div data-num="1">04</div>
        <div style="width: 52px; height: 52px; border-radius: 14px; background: #FFFBEB; border: 1px solid #FDE68A; color: #D97706; display: flex; align-items: center; justify-content: center;">
          <i data-lucide="dna" style="width: 25px; height: 25px;"></i>
        </div>
        <h3 style="margin: 0; font-size: 20px; font-weight: 800; color: #12305F; letter-spacing: -0.02em;">Hormonal Therapy</h3>
        <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: #5B6480;">Endocrine therapy for hormone-sensitive cancers, blocking the hormones that fuel tumour growth — widely used in breast and prostate cancer.</p>
        <ul style="list-style: none; margin: 0; padding: 16px 0 0; border-top: 1px dashed #DCE6DC; display: flex; flex-direction: column; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #4B5563;">
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Aromatase inhibitors (Letrozole, Anastrozole)</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Selective estrogen receptor modulators (Tamoxifen)</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>GnRH agonists / antagonists for prostate cancer</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Androgen deprivation therapy (ADT)</span></li>
        </ul>
      </article>

      <!-- Card 05: Palliative & Supportive Care -->
      <article data-anim="1" data-treat="1" data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; gap: 16px;">
        <div data-num="1">05</div>
        <div style="width: 52px; height: 52px; border-radius: 14px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48; display: flex; align-items: center; justify-content: center;">
          <i data-lucide="heart-handshake" style="width: 25px; height: 25px;"></i>
        </div>
        <h3 style="margin: 0; font-size: 20px; font-weight: 800; color: #12305F; letter-spacing: -0.02em;">Palliative &amp; Supportive Care</h3>
        <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: #5B6480;">Symptom management and quality-of-life support at every stage — from early diagnosis through survivorship — for physical, emotional and practical needs.</p>
        <ul style="list-style: none; margin: 0; padding: 16px 0 0; border-top: 1px dashed #DCE6DC; display: flex; flex-direction: column; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #4B5563;">
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Expert pain management clinic (WHO ladder protocol)</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Onco-nutrition &amp; dietetics counselling</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Psycho-oncology for patients &amp; families</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Survivorship programs &amp; follow-up monitoring</span></li>
        </ul>
      </article>

      <!-- Card 06: Daycare Chemotherapy Suite -->
      <article data-anim="1" data-treat="1" data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; gap: 16px;">
        <div data-num="1">06</div>
        <div style="width: 52px; height: 52px; border-radius: 14px; background: #F0FDFA; border: 1px solid #99F6E4; color: #0D9488; display: flex; align-items: center; justify-content: center;">
          <i data-lucide="armchair" style="width: 25px; height: 25px;"></i>
        </div>
        <h3 style="margin: 0; font-size: 20px; font-weight: 800; color: #12305F; letter-spacing: -0.02em;">Daycare Chemotherapy Suite</h3>
        <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: #5B6480;">A purpose-built outpatient unit designed for comfort and safety, so patients receive treatment and return home the same day without admission.</p>
        <ul style="list-style: none; margin: 0; padding: 16px 0 0; border-top: 1px dashed #DCE6DC; display: flex; flex-direction: column; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #4B5563;">
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Individual recliner stations with privacy curtains</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Infusion pumps &amp; syringe drivers for precise dosing</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Emergency crash cart &amp; reaction response</span></li>
          <li style="display: grid; grid-template-columns: 16px 1fr; gap: 10px;"><i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; margin-top: 3px;"></i><span>Port-a-cath insertion &amp; maintenance services</span></li>
        </ul>
      </article>

    </div>
  </section>


  <!-- ============================================================
       4. CANCERS WE TREAT (3 Categorized Panels)
  ============================================================ -->
  <section id="cancers" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 40px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="activity" style="width: 14px; height: 14px;"></i>Scope of care
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Cancers <em class="serif" style="color: #2E8B3C;">we treat.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        The full spectrum of solid-organ tumours and haematological malignancies across all stages — from early-stage curative intent to advanced palliative management.
      </p>
    </div>

    <div data-g="cangrid" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
      
      <!-- Solid-organ Tumours -->
      <div data-anim="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 28px 26px;">
        <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 16px; margin-bottom: 8px; border-bottom: 2px solid #EAF3EA;">
          <div style="width: 42px; height: 42px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="scan" style="width: 20px; height: 20px;"></i>
          </div>
          <div>
            <div style="font-size: 16.5px; font-weight: 800; color: #12305F;">Solid-organ tumours</div>
            <div style="font-size: 12px; color: #7A8A7C; font-weight: 500;">Most common presentations</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column;">
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Breast Cancer</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Lung Cancer</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Head &amp; Neck Cancer</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Colorectal Cancer</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Stomach &amp; Oesophageal</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Liver, Bile Duct &amp; Pancreatic</div>
        </div>
      </div>

      <!-- Blood & Lymphatic -->
      <div data-anim="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 28px 26px;">
        <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 16px; margin-bottom: 8px; border-bottom: 2px solid #EAF3EA;">
          <div style="width: 42px; height: 42px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="droplets" style="width: 20px; height: 20px;"></i>
          </div>
          <div>
            <div style="font-size: 16.5px; font-weight: 800; color: #12305F;">Blood &amp; lymphatic</div>
            <div style="font-size: 12px; color: #7A8A7C; font-weight: 500;">Haematological malignancies</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column;">
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Lymphoma (NHL &amp; HL)</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Leukaemia</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Multiple Myeloma</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Myelodysplastic Syndromes</div>
        </div>
        <div style="margin-top: 18px; padding: 14px 16px; background: #F0FDF4; border: 1px dashed #BBF7D0; border-radius: 12px; font-size: 12.5px; line-height: 1.6; color: #15803D;">
          <strong>Note:</strong> Complete haematology work-up with same-day CBC, peripheral smear and bone-marrow reporting in our NABL lab.
        </div>
      </div>

      <!-- Gynaecological & Other -->
      <div data-anim="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 28px 26px;">
        <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 16px; margin-bottom: 8px; border-bottom: 2px solid #EAF3EA;">
          <div style="width: 42px; height: 42px; border-radius: 12px; background: #F5F3FF; border: 1px solid #DDD6FE; color: #7C3AED; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="ribbon" style="width: 20px; height: 20px;"></i>
          </div>
          <div>
            <div style="font-size: 16.5px; font-weight: 800; color: #12305F;">Gynaecological &amp; other</div>
            <div style="font-size: 12px; color: #7A8A7C; font-weight: 500;">Specialised programmes</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column;">
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Ovarian &amp; Cervical Cancer</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Prostate, Bladder &amp; Kidney</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Brain Tumours</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-bottom: 1px solid #F1F5F9; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Thyroid Cancer</div>
          <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 10px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; color: #2A5288;"><i data-lucide="circle-dot" style="width: 15px; height: 15px; color: #2E8B3C; flex: none;"></i>Soft Tissue Sarcoma</div>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       5. WHY CHOOSE SUKHDA (Dark Rich Navy Band with 6 Points)
  ============================================================ -->
  <div id="why" style="margin-top: 96px; position: relative; overflow: hidden; background: linear-gradient(135deg, #0F2B54 0%, #2A5288 100%); color: #F7FAF7; padding: 88px 0; border-top: 3px solid #7DCB6B;">
    <div data-grid-tex="1"></div>
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 88% 82%, rgba(125,203,107,.14) 0%, transparent 50%);"></div>
    <div data-pad="1" style="position: relative; z-index: 2; max-width: 1240px; margin: 0 auto; padding: 0 32px;">
      
      <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 42px;">
        <div>
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); color: #7DCB6B; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
            <i data-lucide="award" style="width: 14px; height: 14px;"></i>Why Sukhda
          </div>
          <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #FFFFFF; margin: 0;">
            Why families choose <em class="serif" style="color: #7DCB6B;">Sukhda for cancer care.</em>
          </h2>
        </div>
        <p style="font-size: 16px; line-height: 1.75; color: rgba(247,250,247,.78); margin: 0;">
          We combine clinical rigour with genuine compassion. Here's what sets our cancer centre apart from other hospitals in the region.
        </p>
      </div>

      <div data-g="c3" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px;">
        
        <div data-why="1" data-reveal="1" style="background: rgba(255,255,255,.055); border: 1px solid rgba(255,255,255,.13); border-radius: 18px; padding: 30px 26px; backdrop-filter: blur(4px);">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; border-radius: 13px; background: rgba(125,203,107,.15); color: #7DCB6B; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="users" style="width: 22px; height: 22px;"></i>
            </div>
            <span style="font-size: 30px; font-weight: 800; color: rgba(255,255,255,.12); letter-spacing: -0.04em;">01</span>
          </div>
          <h3 style="margin: 0 0 10px; font-size: 18.5px; font-weight: 800; color: #FFFFFF;">Multidisciplinary tumour board</h3>
          <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Every case reviewed weekly by oncologists, surgeons, pathologists and radiologists for a 360° treatment plan.</p>
        </div>

        <div data-why="1" data-reveal="1" style="background: rgba(255,255,255,.055); border: 1px solid rgba(255,255,255,.13); border-radius: 18px; padding: 30px 26px; backdrop-filter: blur(4px);">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; border-radius: 13px; background: rgba(125,203,107,.15); color: #7DCB6B; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="map-pin" style="width: 22px; height: 22px;"></i>
            </div>
            <span style="font-size: 30px; font-weight: 800; color: rgba(255,255,255,.12); letter-spacing: -0.04em;">02</span>
          </div>
          <h3 style="margin: 0 0 10px; font-size: 18.5px; font-weight: 800; color: #FFFFFF;">Metro-grade care, locally</h3>
          <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: rgba(247,250,247,.72);">World-class cancer protocols without the Delhi commute — the same international guidelines, right here in Hisar.</p>
        </div>

        <div data-why="1" data-reveal="1" style="background: rgba(255,255,255,.055); border: 1px solid rgba(255,255,255,.13); border-radius: 18px; padding: 30px 26px; backdrop-filter: blur(4px);">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; border-radius: 13px; background: rgba(125,203,107,.15); color: #7DCB6B; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="indian-rupee" style="width: 22px; height: 22px;"></i>
            </div>
            <span style="font-size: 30px; font-weight: 800; color: rgba(255,255,255,.12); letter-spacing: -0.04em;">03</span>
          </div>
          <h3 style="margin: 0 0 10px; font-size: 18.5px; font-weight: 800; color: #FFFFFF;">Transparent, fair pricing</h3>
          <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Clear treatment cost estimates upfront, cashless TPA support and financial counselling for every family.</p>
        </div>

        <div data-why="1" data-reveal="1" style="background: rgba(255,255,255,.055); border: 1px solid rgba(255,255,255,.13); border-radius: 18px; padding: 30px 26px; backdrop-filter: blur(4px);">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; border-radius: 13px; background: rgba(125,203,107,.15); color: #7DCB6B; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="heart" style="width: 22px; height: 22px;"></i>
            </div>
            <span style="font-size: 30px; font-weight: 800; color: rgba(255,255,255,.12); letter-spacing: -0.04em;">04</span>
          </div>
          <h3 style="margin: 0 0 10px; font-size: 18.5px; font-weight: 800; color: #FFFFFF;">Holistic patient support</h3>
          <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Psycho-oncology counselling, nutrition planning, pain management and family support groups in every plan.</p>
        </div>

        <div data-why="1" data-reveal="1" style="background: rgba(255,255,255,.055); border: 1px solid rgba(255,255,255,.13); border-radius: 18px; padding: 30px 26px; backdrop-filter: blur(4px);">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; border-radius: 13px; background: rgba(125,203,107,.15); color: #7DCB6B; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="flask-conical" style="width: 22px; height: 22px;"></i>
            </div>
            <span style="font-size: 30px; font-weight: 800; color: rgba(255,255,255,.12); letter-spacing: -0.04em;">05</span>
          </div>
          <h3 style="margin: 0 0 10px; font-size: 18.5px; font-weight: 800; color: #FFFFFF;">In-house NABL diagnostics</h3>
          <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: rgba(247,250,247,.72);">On-campus accredited lab for biopsy, IHC, tumour markers and biochemistry — same-day reports, no referrals.</p>
        </div>

        <div data-why="1" data-reveal="1" style="background: rgba(255,255,255,.055); border: 1px solid rgba(255,255,255,.13); border-radius: 18px; padding: 30px 26px; backdrop-filter: blur(4px);">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <div style="width: 46px; height: 46px; border-radius: 13px; background: rgba(125,203,107,.15); color: #7DCB6B; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="zap" style="width: 22px; height: 22px;"></i>
            </div>
            <span style="font-size: 30px; font-weight: 800; color: rgba(255,255,255,.12); letter-spacing: -0.04em;">06</span>
          </div>
          <h3 style="margin: 0 0 10px; font-size: 18.5px; font-weight: 800; color: #FFFFFF;">Rapid treatment initiation</h3>
          <p style="margin: 0; font-size: 14.5px; line-height: 1.68; color: rgba(247,250,247,.72);">From first consultation to treatment start in under seven days. In cancer, every day counts.</p>
        </div>

      </div>
    </div>
  </div>


  <!-- ============================================================
       6. PATIENT JOURNEY TIMELINE (6 Connected Steps)
  ============================================================ -->
  <section id="journey" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 48px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="route" style="width: 14px; height: 14px;"></i>Patient journey
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Your path through <em class="serif" style="color: #2E8B3C;">cancer treatment.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        From your first consultation to long-term survivorship monitoring, here's exactly how we guide you through every stage of care at Sukhda.
      </p>
    </div>

    <div style="position: relative;">
      <div data-statline="1" style="position: absolute; top: 24px; left: 40px; right: 40px; height: 3px; border-radius: 3px; background: linear-gradient(90deg, #16A34A 0%, #7DCB6B 55%, #DCE6DC 100%);"></div>
      <div data-g="j6" style="position: relative; display: grid; grid-template-columns: repeat(6, 1fr); gap: 18px;">
        
        <div data-reveal="1" style="text-align: left;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 800; border: 4px solid #F7FAF7; box-shadow: 0 8px 18px -8px rgba(22,163,74,.6); margin-bottom: 18px; position: relative;">1</div>
          <h4 style="margin: 0 0 8px; font-size: 15.5px; font-weight: 800; color: #12305F;">First consultation</h4>
          <p style="margin: 0; font-size: 13.5px; line-height: 1.62; color: #5B6480;">History, examination and review of existing reports by a senior oncologist.</p>
        </div>

        <div data-reveal="1" style="text-align: left;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 800; border: 4px solid #F7FAF7; box-shadow: 0 8px 18px -8px rgba(22,163,74,.6); margin-bottom: 18px; position: relative;">2</div>
          <h4 style="margin: 0 0 8px; font-size: 15.5px; font-weight: 800; color: #12305F;">Diagnostics &amp; staging</h4>
          <p style="margin: 0; font-size: 13.5px; line-height: 1.62; color: #5B6480;">Biopsy, CT/PET imaging, immunohistochemistry and molecular profiling.</p>
        </div>

        <div data-reveal="1" style="text-align: left;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 800; border: 4px solid #F7FAF7; box-shadow: 0 8px 18px -8px rgba(22,163,74,.6); margin-bottom: 18px; position: relative;">3</div>
          <h4 style="margin: 0 0 8px; font-size: 15.5px; font-weight: 800; color: #12305F;">Tumour board review</h4>
          <p style="margin: 0; font-size: 13.5px; line-height: 1.62; color: #5B6480;">Six or more specialists agree a personalised treatment plan.</p>
        </div>

        <div data-reveal="1" style="text-align: left;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: #FFFFFF; color: #16A34A; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 800; border: 2px solid #BBF7D0; box-shadow: 0 8px 18px -10px rgba(11,30,60,.3); margin-bottom: 18px; position: relative;">4</div>
          <h4 style="margin: 0 0 8px; font-size: 15.5px; font-weight: 800; color: #12305F;">Treatment begins</h4>
          <p style="margin: 0; font-size: 13.5px; line-height: 1.62; color: #5B6480;">Therapy initiated with close monitoring and supportive care alongside.</p>
        </div>

        <div data-reveal="1" style="text-align: left;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: #FFFFFF; color: #16A34A; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 800; border: 2px solid #BBF7D0; box-shadow: 0 8px 18px -10px rgba(11,30,60,.3); margin-bottom: 18px; position: relative;">5</div>
          <h4 style="margin: 0 0 8px; font-size: 15.5px; font-weight: 800; color: #12305F;">Response assessment</h4>
          <p style="margin: 0; font-size: 13.5px; line-height: 1.62; color: #5B6480;">Periodic scans and blood work; the regimen is adjusted where needed.</p>
        </div>

        <div data-reveal="1" style="text-align: left;">
          <div style="width: 50px; height: 50px; border-radius: 50%; background: #FFFFFF; color: #16A34A; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 800; border: 2px solid #BBF7D0; box-shadow: 0 8px 18px -10px rgba(11,30,60,.3); margin-bottom: 18px; position: relative;">6</div>
          <h4 style="margin: 0 0 8px; font-size: 15.5px; font-weight: 800; color: #12305F;">Survivorship &amp; follow-up</h4>
          <p style="margin: 0; font-size: 13.5px; line-height: 1.62; color: #5B6480;">Long-term monitoring, recurrence screening and life beyond cancer.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       7. SPECIALISTS SECTION
  ============================================================ -->
  <section id="team" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 40px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="user-check" style="width: 14px; height: 14px;"></i>Our team
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Meet our <em class="serif" style="color: #2E8B3C;">oncology experts.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Experienced medical oncologists, nursing staff trained in onco-care and allied health professionals dedicated to fighting cancer alongside you.
      </p>
    </div>

    <div data-g="team" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
      
      <div data-anim="1" data-reveal="1" style="position: relative; overflow: hidden; background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px;">
        <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #16A34A, #7DCB6B);"></div>
        <div style="display: flex; align-items: center; gap: 20px;">
          <div style="width: 76px; height: 76px; flex: none; border-radius: 22px; background: linear-gradient(135deg, #EAF3EA, #D9EED9); border: 2px solid #BFDCBF; color: #2E8B3C; font-weight: 800; font-size: 23px; display: flex; align-items: center; justify-content: center;">SC</div>
          <div>
            <h3 style="margin: 0 0 4px; font-size: 19px; font-weight: 800; color: #12305F;">Sukhda Cancer Care Team</h3>
            <div style="font-size: 13.5px; font-weight: 700; color: #2E8B3C; margin-bottom: 6px;">Medical Oncology</div>
            <div style="font-size: 13px; color: #7A8A7C; line-height: 1.55;">Multidisciplinary team of oncologists, onco-surgeons, pathologists &amp; support staff</div>
          </div>
        </div>
        <div style="display: flex; gap: 8px; margin-top: 18px; flex-wrap: wrap;">
          <span style="font-size: 11.5px; font-weight: 700; color: #15803D; background: #F0FDF4; border: 1px solid #BBF7D0; padding: 5px 12px; border-radius: 999px;">Tumour board</span>
          <span style="font-size: 11.5px; font-weight: 700; color: #15803D; background: #F0FDF4; border: 1px solid #BBF7D0; padding: 5px 12px; border-radius: 999px;">Daycare chemo</span>
          <span style="font-size: 11.5px; font-weight: 700; color: #15803D; background: #F0FDF4; border: 1px solid #BBF7D0; padding: 5px 12px; border-radius: 999px;">Palliative care</span>
        </div>
      </div>

      <div data-anim="1" data-reveal="1" style="position: relative; overflow: hidden; background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px;">
        <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #12305F, #2A5288);"></div>
        <div style="display: flex; align-items: center; gap: 20px;">
          <div style="width: 76px; height: 76px; flex: none; border-radius: 22px; background: linear-gradient(135deg, #EBF3FC, #DBEAFE); border: 2px solid #BFDBFE; color: #0F4F94; font-weight: 800; font-size: 23px; display: flex; align-items: center; justify-content: center;">AM</div>
          <div>
            <h3 style="margin: 0 0 4px; font-size: 19px; font-weight: 800; color: #12305F;">Dr. Amit Mehta</h3>
            <div style="font-size: 13.5px; font-weight: 700; color: #2E8B3C; margin-bottom: 6px;">Internal Medicine &amp; Cancer Screening</div>
            <div style="font-size: 13px; color: #7A8A7C; line-height: 1.55;">MD (AIIMS) · Founder &amp; Director</div>
          </div>
        </div>
        <div style="display: flex; gap: 8px; margin-top: 18px; flex-wrap: wrap;">
          <span style="font-size: 11.5px; font-weight: 700; color: #12305F; background: #EBF3FC; border: 1px solid #BFDBFE; padding: 5px 12px; border-radius: 999px;">Early detection</span>
          <span style="font-size: 11.5px; font-weight: 700; color: #12305F; background: #EBF3FC; border: 1px solid #BFDBFE; padding: 5px 12px; border-radius: 999px;">Screening programmes</span>
          <span style="font-size: 11.5px; font-weight: 700; color: #12305F; background: #EBF3FC; border: 1px solid #BFDBFE; padding: 5px 12px; border-radius: 999px;">AIIMS alumnus</span>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       8. FREQUENTLY ASKED QUESTIONS (Accordion)
  ============================================================ -->
  <section id="faqs" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="faq" style="display: grid; grid-template-columns: .85fr 1.15fr; gap: 48px; align-items: start;">
      
      <!-- Left FAQ Intro Card -->
      <div data-reveal="1" style="position: sticky; top: 92px;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="help-circle" style="width: 14px; height: 14px;"></i>FAQs
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 18px;">
          Common <em class="serif" style="color: #2E8B3C;">questions answered.</em>
        </h2>
        <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0 0 26px;">
          We understand a cancer diagnosis brings many questions. Here are answers to the ones our patients ask most.
        </p>
        
        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 22px 24px; box-shadow: 0 14px 32px -26px rgba(11,30,60,.4);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 6px;">
            <div style="width: 40px; height: 40px; border-radius: 11px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="message-circle-question" style="width: 19px; height: 19px;"></i>
            </div>
            <div style="font-size: 15.5px; font-weight: 800; color: #12305F;">Still have questions?</div>
          </div>
          <p style="margin: 0 0 16px; font-size: 13.5px; line-height: 1.65; color: #5B6480;">Our cancer care coordinators are happy to talk you through anything — no appointment needed.</p>
          <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 9px; font-size: 14.5px; font-weight: 800; color: #15803D;">
            <i data-lucide="phone" style="width: 16px; height: 16px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
          </a>
        </div>
      </div>

      <!-- Right Accordion List -->
      <div style="display: flex; flex-direction: column; gap: 12px;">
        
        <div data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 26px -24px rgba(11,30,60,.4);">
          <button type="button" data-faqq="1" onclick="toggleFaq(this)" style="width: 100%; background: none; border: 0; padding: 21px 24px; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; font-family: inherit; font-size: 15.5px; font-weight: 700; color: #12305F;">
            What is the difference between chemotherapy and immunotherapy?
            <span data-chevwrap="1" style="width: 30px; height: 30px; flex: none; border-radius: 9px; background: #F0FDF4; border: 1px solid #BBF7D0; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="plus" data-chev="1" style="width: 16px; height: 16px; color: #16A34A; transition: transform .25s ease;"></i>
            </span>
          </button>
          <div data-faq-body="1" style="display: none; padding: 0 24px 22px; font-size: 14.5px; line-height: 1.75; color: #5B6480;">
            Chemotherapy uses cytotoxic drugs to directly kill rapidly dividing cancer cells, which can also affect normal cells and cause side effects such as hair loss and nausea. Immunotherapy instead stimulates the body's own immune system to recognise and attack cancer cells specifically, often with a different side-effect profile. Your oncologist will determine which approach — or combination — suits your cancer type and biomarker profile.
          </div>
        </div>

        <div data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 26px -24px rgba(11,30,60,.4);">
          <button type="button" data-faqq="1" onclick="toggleFaq(this)" style="width: 100%; background: none; border: 0; padding: 21px 24px; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; font-family: inherit; font-size: 15.5px; font-weight: 700; color: #12305F;">
            How long does a typical chemotherapy session take?
            <span data-chevwrap="1" style="width: 30px; height: 30px; flex: none; border-radius: 9px; background: #F0FDF4; border: 1px solid #BBF7D0; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="plus" data-chev="1" style="width: 16px; height: 16px; color: #16A34A; transition: transform .25s ease;"></i>
            </span>
          </button>
          <div data-faq-body="1" style="display: none; padding: 0 24px 22px; font-size: 14.5px; line-height: 1.75; color: #5B6480;">
            A single session in our daycare suite typically takes two to six hours, depending on the drug regimen. That includes pre-medication to prevent nausea, the infusion itself and a short observation period afterwards. Most patients return home the same day, on a schedule your oncologist sets out in advance.
          </div>
        </div>

        <div data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 26px -24px rgba(11,30,60,.4);">
          <button type="button" data-faqq="1" onclick="toggleFaq(this)" style="width: 100%; background: none; border: 0; padding: 21px 24px; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; font-family: inherit; font-size: 15.5px; font-weight: 700; color: #12305F;">
            Will I lose my hair during cancer treatment?
            <span data-chevwrap="1" style="width: 30px; height: 30px; flex: none; border-radius: 9px; background: #F0FDF4; border: 1px solid #BBF7D0; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="plus" data-chev="1" style="width: 16px; height: 16px; color: #16A34A; transition: transform .25s ease;"></i>
            </span>
          </button>
          <div data-faq-body="1" style="display: none; padding: 0 24px 22px; font-size: 14.5px; line-height: 1.75; color: #5B6480;">
            It depends on the specific drugs used. Many traditional chemotherapy agents cause temporary hair loss that reverses after treatment ends, while newer targeted therapies and immunotherapies often cause little or none. Our team will discuss the expected effects of your regimen and the support available, including scalp cooling where applicable.
          </div>
        </div>

        <div data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 26px -24px rgba(11,30,60,.4);">
          <button type="button" data-faqq="1" onclick="toggleFaq(this)" style="width: 100%; background: none; border: 0; padding: 21px 24px; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; font-family: inherit; font-size: 15.5px; font-weight: 700; color: #12305F;">
            What is a tumour board and why is it important?
            <span data-chevwrap="1" style="width: 30px; height: 30px; flex: none; border-radius: 9px; background: #F0FDF4; border: 1px solid #BBF7D0; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="plus" data-chev="1" style="width: 16px; height: 16px; color: #16A34A; transition: transform .25s ease;"></i>
            </span>
          </button>
          <div data-faq-body="1" style="display: none; padding: 0 24px 22px; font-size: 14.5px; line-height: 1.75; color: #5B6480;">
            A tumour board is a weekly conference where your case is reviewed by medical, surgical and radiation oncologists together with pathologists and radiologists. This collaborative approach considers every angle, combines evidence from multiple disciplines and avoids single-doctor bias. Reviews of this kind are consistently associated with better treatment outcomes.
          </div>
        </div>

        <div data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 26px -24px rgba(11,30,60,.4);">
          <button type="button" data-faqq="1" onclick="toggleFaq(this)" style="width: 100%; background: none; border: 0; padding: 21px 24px; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; font-family: inherit; font-size: 15.5px; font-weight: 700; color: #12305F;">
            Does Sukhda accept health insurance for cancer treatment?
            <span data-chevwrap="1" style="width: 30px; height: 30px; flex: none; border-radius: 9px; background: #F0FDF4; border: 1px solid #BBF7D0; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="plus" data-chev="1" style="width: 16px; height: 16px; color: #16A34A; transition: transform .25s ease;"></i>
            </span>
          </button>
          <div data-faq-body="1" style="display: none; padding: 0 24px 22px; font-size: 14.5px; line-height: 1.75; color: #5B6480;">
            Yes. Sukhda Medpark is empanelled with major TPA insurance providers and offers cashless hospitalisation for eligible policies. Our dedicated billing and insurance desk assists with pre-authorisation, documentation and claims processing, so you can focus on recovery rather than paperwork.
          </div>
        </div>

        <div data-reveal="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 26px -24px rgba(11,30,60,.4);">
          <button type="button" data-faqq="1" onclick="toggleFaq(this)" style="width: 100%; background: none; border: 0; padding: 21px 24px; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; font-family: inherit; font-size: 15.5px; font-weight: 700; color: #12305F;">
            What should I bring to my first oncology consultation?
            <span data-chevwrap="1" style="width: 30px; height: 30px; flex: none; border-radius: 9px; background: #F0FDF4; border: 1px solid #BBF7D0; display: flex; align-items: center; justify-content: center;">
              <i data-lucide="plus" data-chev="1" style="width: 16px; height: 16px; color: #16A34A; transition: transform .25s ease;"></i>
            </span>
          </button>
          <div data-faq-body="1" style="display: none; padding: 0 24px 22px; font-size: 14.5px; line-height: 1.75; color: #5B6480;">
            Please bring all previous medical reports (blood work, biopsy reports, CT/MRI/PET imaging), treatment records from other hospitals, a list of current medications, your health insurance card if applicable, and a family member or companion. Arriving fifteen minutes early helps complete registration smoothly.
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ============================================================
       9. BOTTOM CTA BAND & HOSPITAL ACCESS
  ============================================================ -->
  <div id="contact" style="margin-top: 96px; position: relative; overflow: hidden; background: linear-gradient(135deg, #0B1E3C 0%, #163A66 100%); color: #F7FAF7; padding: 88px 0; border-top: 3px solid #7DCB6B;">
    <div data-grid-tex="1"></div>
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 24% 60%, rgba(125,203,107,.15) 0%, transparent 55%);"></div>
    <div data-pad="1" style="position: relative; z-index: 2; max-width: 1240px; margin: 0 auto; padding: 0 32px;">
      <div data-g="cta" style="display: grid; grid-template-columns: 1.2fr .8fr; gap: 56px; align-items: center;">
        
        <div data-reveal="1">
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); color: #7DCB6B; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 22px;">
            <i data-lucide="calendar-heart" style="width: 14px; height: 14px;"></i>Take the first step
          </div>
          <h2 style="font-size: clamp(32px, 4vw, 50px); font-weight: 800; line-height: 1.1; letter-spacing: -0.032em; color: #FFFFFF; margin: 0 0 18px;">
            Start your journey to <em class="serif" style="color: #7DCB6B;">recovery today.</em>
          </h2>
          <p style="font-size: 16.5px; line-height: 1.72; color: rgba(247,250,247,.78); margin: 0 0 32px; max-width: 520px;">
            Our oncology specialists are available seven days a week. Schedule a consultation or speak to our cancer care coordinator for guidance on next steps.
          </p>
          <div style="display: flex; gap: 14px; flex-wrap: wrap;">
            <a href="/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; box-shadow: 0 16px 34px -12px rgba(22,163,74,.75);">
              <i data-lucide="calendar-check" style="width: 18px; height: 18px;"></i>Book consultation
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.28); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700;">
              <i data-lucide="phone" style="width: 18px; height: 18px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
          </div>
        </div>

        <div data-reveal="1" style="background: rgba(255,255,255,.06); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,.15); border-radius: 20px; padding: 30px;">
          <div style="font-size: 12px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; color: #7DCB6B; margin-bottom: 20px;">Visit us</div>
          <div style="display: flex; flex-direction: column; gap: 18px;">
            <div style="display: flex; gap: 14px;">
              <i data-lucide="map-pin" style="width: 19px; height: 19px; color: #7DCB6B; flex: none; margin-top: 2px;"></i>
              <div>
                <div style="font-size: 14.5px; font-weight: 700; color: #FFFFFF;">Sukhda Medpark, Hisar</div>
                <div style="font-size: 13px; color: rgba(247,250,247,.65); margin-top: 3px;"><?= htmlspecialchars($HOSPITAL['address']) ?></div>
              </div>
            </div>
            <div style="display: flex; gap: 14px;">
              <i data-lucide="clock" style="width: 19px; height: 19px; color: #7DCB6B; flex: none; margin-top: 2px;"></i>
              <div>
                <div style="font-size: 14.5px; font-weight: 700; color: #FFFFFF;">OPD: Mon–Sat, 9 am – 5 pm</div>
                <div style="font-size: 13px; color: rgba(247,250,247,.65); margin-top: 3px;">Emergency &amp; helpline: 24×7, all days</div>
              </div>
            </div>
            <div style="display: flex; gap: 14px;">
              <i data-lucide="phone-call" style="width: 19px; height: 19px; color: #7DCB6B; flex: none; margin-top: 2px;"></i>
              <div>
                <div style="font-size: 14.5px; font-weight: 700; color: #FFFFFF;"><?= htmlspecialchars($HOSPITAL['phone']) ?></div>
                <div style="font-size: 13px; color: rgba(247,250,247,.65); margin-top: 3px;">Cancer care coordinator</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>

<script>
/* ================================================================
   PAGE SCRIPTS: FAQ ACCORDION & SCROLL REVEAL OBSERVER
================================================================ */
function toggleFaq(btn) {
  const card = btn.parentElement;
  const body = card.querySelector('[data-faq-body]');
  const chev = btn.querySelector('[data-chev]');
  const isOpen = body.style.display === 'block';
  body.style.display = isOpen ? 'none' : 'block';
  card.style.borderColor = isOpen ? '#DCE6DC' : '#BFDCBF';
  if (chev) {
    chev.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(45deg)';
  }
}

document.addEventListener('DOMContentLoaded', function() {
  if (window.lucide) {
    lucide.createIcons();
  }

  // Scroll reveal observer
  const revealEls = document.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window && revealEls.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((en) => {
        if (en.isIntersecting) {
          en.target.classList.add('rv-in');
          io.unobserve(en.target);
        }
      });
    }, { threshold: 0.12 });

    revealEls.forEach((el) => {
      const r = el.getBoundingClientRect();
      if (r.top > window.innerHeight * 0.92) {
        el.classList.add('rv');
        io.observe(el);
      }
    });
  }
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
