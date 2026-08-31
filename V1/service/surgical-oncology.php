<?php 
$page_title = 'Surgical Oncology &amp; Advanced Cancer Surgery — Sukhda Medpark, Hisar';
$page_description = 'Comprehensive surgical oncology at Sukhda Hospital, Hisar. Organ-preserving tumor resections, minimally invasive onco-surgery, breast &amp; GI cancer surgeries.';
require dirname(__DIR__) . '/includes/header.php'; 
?>

<!-- ============================================================
     DEPARTMENT / SERVICE PAGE TEMPLATE: Surgical Oncology
     Replicating the design tokens and layout of medical-oncology.php
============================================================ -->

<style>
.onco-page-wrap {
  background: #F7FAF7;
  color: #2A5288;
  font-family: 'Schibsted Grotesk', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  overflow-x: hidden;
}
.onco-page-wrap em.serif {
  font-family: 'Newsreader', Georgia, serif;
  font-style: italic;
  font-weight: 400;
}

.onco-page-wrap [data-treat]:hover {
  transform: translateY(-4px);
  border-color: #7DCB6B !important;
  box-shadow: 0 20px 44px -20px rgba(46,139,60,.25);
}

.onco-page-wrap [data-why]:hover {
  transform: translateY(-3px);
  background: rgba(255,255,255,.09) !important;
  border-color: rgba(125,203,107,.4) !important;
}
.onco-page-wrap [data-why]::after {
  content: '';
  position: absolute; left: 0; right: 0; bottom: 0; height: 2px;
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
          <div style="display: flex; align-items: center; gap: 8px; font-size: 13.5px; font-weight: 600; margin-bottom: 22px;">
            <a href="/v1/" style="color: #7DCB6B;">Home</a> <span style="opacity: .4;">›</span>
            <a href="/v1/#specialities" style="color: rgba(247,250,247,.75);">Specialties</a><span style="opacity: .4;">›</span>
            <span style="color: #7DCB6B;">Surgical Oncology</span>
          </div>
          
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.32); color: #7DCB6B; padding: 7px 16px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 26px;">
            <i data-lucide="scissors" style="width: 15px; height: 15px;"></i>Surgical Oncology &amp; Onco-Surgery
          </div>
          
          <h1 style="font-size: clamp(42px, 5.4vw, 66px); font-weight: 800; line-height: 1.04; letter-spacing: -0.038em; color: #FFFFFF; margin: 0 0 24px;">
            Precision tumor resection with <em class="serif" style="color: #7DCB6B;">organ-preserving</em> <em class="serif" style="color: #7DCB6B;">expertise.</em>
          </h1>
          
          <p style="font-size: 17.5px; line-height: 1.72; color: rgba(247,250,247,.82); max-width: 540px; margin: 0 0 36px;">
            Advanced cancer surgeries performed by fellowship-trained surgical oncologists in laminar flow modular OTs, backed by intraoperative frozen sections and multidisciplinary tumor board planning.
          </p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 38px;">
            <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; box-shadow: 0 16px 34px -12px rgba(22,163,74,.75);">
              <i data-lucide="calendar-check" style="width: 18px; height: 18px;"></i>Book onco-surgery consult
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.26); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
              <i data-lucide="phone" style="width: 18px; height: 18px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
          </div>
          
          <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap; font-size: 13px; font-weight: 500; color: rgba(247,250,247,.68);">
            <span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>NABH accredited modular OTs</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Intraoperative frozen biopsy</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Cashless TPA support</span>
          </div>
        </div>

        <!-- Right Hero Visual Card -->
        <div style="position: relative;">
          <div style="position: relative; border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,.16); box-shadow: 0 28px 60px -20px rgba(0,0,0,.6);">
            <img src="/assets/images/infra/operation-theatre.jpg" alt="Surgical Oncology" style="width: 100%; height: 420px; object-fit: cover; display: block;">
            <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(11,30,60,.9) 100%);"></div>
            
            <div style="position: absolute; top: 18px; right: 18px; background: rgba(11,30,60,.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,.18); color: #FFFFFF; padding: 6px 14px; border-radius: 999px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px;">
              <span style="width: 7px; height: 7px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 3px rgba(125,203,107,.3);"></span>
              Laminar Flow Modular OT
            </div>
            
            <div style="position: absolute; bottom: 22px; left: 22px; right: 22px; background: rgba(11,30,60,.88); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.16); border-radius: 16px; padding: 16px 18px; display: flex; align-items: center; gap: 14px;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: linear-gradient(135deg, #16A34A, #15803D); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #FFFFFF;">
                <i data-lucide="shield-alert" style="width: 22px; height: 22px;"></i>
              </div>
              <div>
                <div style="font-size: 14px; font-weight: 800; color: #FFFFFF; line-height: 1.25;">Multidisciplinary Onco-Board</div>
                <div style="font-size: 12px; color: rgba(247,250,247,.7); margin-top: 2px;">Every surgical case planned with medical &amp; radiation oncologists</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- 4 Stats Strip -->
    <div style="border-top: 1px solid rgba(255,255,255,.12); background: rgba(11,30,60,.45); backdrop-filter: blur(8px);">
      <div data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 0 32px;">
        <div data-g="stats" style="display: grid; grid-template-columns: repeat(4, 1fr);">
                  <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">1,800+</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Cancer surgeries performed</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">98.6%</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Surgical safety &amp; margin rate</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">24×7</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Onco-surgical ICU support</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">15+</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Specialized onco-procedures</div>
        </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ============================================================
       2. ABOUT THE DEPARTMENT & QUICK NAVIGATION
  ============================================================ -->
  <section data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 88px 32px 0;">
    <div data-g="two" style="display: grid; grid-template-columns: 1.15fr .85fr; gap: 56px; align-items: flex-start;">
      
      <!-- Left Column: Copy & 4 Highlights -->
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 20px;">
          <i data-lucide="stethoscope" style="width: 14px; height: 14px;"></i>About the department
        </div>
        
        <h2 style="font-size: clamp(32px, 3.8vw, 46px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 22px;">
          Curative, reconstructive & <em class="serif" style="color: #2E8B3C;">organ-saving surgery.</em>
        </h2>
        
        <p style="font-size: 16.5px; line-height: 1.75; color: #2A5288; margin: 0 0 20px;">
          The Department of Surgical Oncology at Sukhda Medpark is dedicated to the surgical management of solid tumors across head and neck, breast, gastrointestinal, gynecological, and musculoskeletal systems.
        </p>
        
        <div style="border-left: 3px solid #2E8B3C; padding: 4px 0 4px 18px; margin: 24px 0 28px; background: rgba(46,139,60,.04); border-radius: 0 8px 8px 0;">
          <p style="margin: 0; font-size: 15.5px; line-height: 1.68; color: #12305F; font-weight: 600;">
            &quot;Our surgical philosophy combines radical oncological clearance with functional and cosmetic tissue preservation.&quot;
          </p>
          <span style="display: block; font-size: 12.5px; color: #5B6480; margin-top: 6px; font-weight: 500;">— Sukhda Surgical Oncology Division</span>
        </div>

        <p style="font-size: 15.5px; line-height: 1.75; color: #5B6480; margin: 0 0 36px;">
          Equipped with ultra-modern laminar flow modular operation theatres, harmonic scalpels, C-arm fluoroscopy, and immediate frozen section pathology, we minimize operative trauma and maximize long-term disease-free survival.
        </p>

        <!-- 4 Highlights Grid -->
        <div data-g="quad" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                    <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="scissors" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Organ Preservation</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Conservative surgeries for breast, larynx, and limb salvage with reconstruction</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="microscope" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Frozen Section Lab</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Real-time margin status verification during surgery by on-site pathologists</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="heart-handshake" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Multimodal Care</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Integrated with neoadjuvant chemotherapy and post-operative adjuvant therapies</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="shield-check" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Modular Onco-OTs</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Zero-infection HEPA-filtered laminar airflow operating suites</div>
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
              <i data-lucide="activity" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Treatments &amp; Modalities
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#conditions" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="shield-plus" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Conditions We Treat
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#why" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="award" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Why Choose Sukhda
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#journey" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="route" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Your Care Pathway
              <i data-lucide="arrow-up-right" style="width: 14px; height: 14px; color: #BFDCBF; margin-left: auto;"></i>
            </a>
            <a href="#team" style="display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #F1F5F9; font-size: 14.5px; font-weight: 600; color: #2A5288;">
              <i data-lucide="user-check" style="width: 17px; height: 17px; color: #2E8B3C;"></i>Specialist Faculty
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
              <span style="width: 7px; height: 7px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 4px rgba(125,203,107,.2);"></span>Helpline open 24×7
            </div>
            <div style="font-size: 19px; font-weight: 800; margin-bottom: 8px;">Need clinical assistance?</div>
            <p style="margin: 0 0 20px; font-size: 14px; line-height: 1.65; color: rgba(247,250,247,.8);">Speak directly with our clinical coordinators for appointments, second opinions, or emergency care.</p>
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
          <i data-lucide="activity" style="width: 14px; height: 14px;"></i>Clinical modalities
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Surgical oncology <em class="serif" style="color: #2E8B3C;">procedures we perform.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        From early diagnostic biopsies to radical multi-visceral resections and complex microvascular reconstructions.
      </p>
    </div>

    <div data-g="c3" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94;">
            <i data-lucide="scissors" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">01</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Head &amp; Neck Cancer Surgery</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Comprehensive surgical excision for oral cavity, tongue, thyroid, parotid, and laryngeal malignancies with microvascular reconstructive flap surgery.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Composite resections (Commando procedures)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Neck dissections (Selective, Modified &amp; Radical)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Thyroidectomies with nerve monitoring</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Microvascular free-flap tissue reconstruction</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A;">
            <i data-lucide="ribbon" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">02</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Breast Cancer &amp; Oncoplasty</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Complete breast cancer surgical care focusing on breast conservation, sentinel lymph node biopsy, oncoplastic reconstruction, and modified radical mastectomy.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Breast conservation surgery (Lumpectomy)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Sentinel lymph node biopsy (SLNB)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Oncoplastic breast reconstruction</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Modified Radical Mastectomy (MRM)</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F5F3FF; border: 1px solid #DDD6FE; color: #7C3AED;">
            <i data-lucide="scan" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">03</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Gastrointestinal (GI) Onco-Surgery</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Advanced open and laparoscopic surgical resections for cancers of the esophagus, stomach, colon, rectum, liver, pancreas, and gall bladder.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Laparoscopic colorectal cancer resection</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Whipple procedure (Pancreaticoduodenectomy)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Gastrectomy (Total and Subtotal) with D2 dissection</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Hepatic lobectomy &amp; biliary resections</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFFBEB; border: 1px solid #FDE68A; color: #D97706;">
            <i data-lucide="user-check" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">04</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Gynaecological Onco-Surgery</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Surgical staging and radical resections for ovarian, cervical, and endometrial malignancies, including cytoreductive procedures.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Radical Wertheim hysterectomy</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Interval cytoreductive surgery for ovarian cancer</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Pelvic lymphadenectomy</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Fertility-preserving oncological surgery</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">05</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Urological Cancer Surgeries</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Minimally invasive and radical surgeries for malignancies of the kidney, bladder, prostate, and testes.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Radical &amp; partial nephrectomy</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Radical cystectomy with urinary diversion</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Radical prostatectomy</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Retroperitoneal lymph node dissection (RPLND)</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDFA; border: 1px solid #99F6E4; color: #0D9488;">
            <i data-lucide="shield-plus" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">06</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Thoracic &amp; Soft Tissue Onco-Surgery</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Specialized resections for lung cancers, mediastinal masses, retroperitoneal sarcomas, and extremity soft tissue sarcomas with limb preservation.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Lobectomy &amp; wedge resection for lung tumors</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Limb salvage surgery for bone &amp; soft-tissue sarcomas</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Retroperitoneal sarcoma excision with clear margins</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Mediastinal tumor excision</span>
            </li>
        </ul>
      </div>
    </div>
  </section>


  <!-- ============================================================
       4. CONDITIONS WE TREAT (3 Categorized Panels)
  ============================================================ -->
  <section id="conditions" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 40px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="shield-plus" style="width: 14px; height: 14px;"></i>Scope of care
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Tumor categories <em class="serif" style="color: #2E8B3C;">treated surgically.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Expert surgical care spanning primary, recurrent, and complex metastasized malignancies.
      </p>
    </div>

    <div data-g="cangrid" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="scan" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Head, Neck &amp; Thoracic</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Upper body malignancies</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Oral &amp; Buccal Mucosa Tumors</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Tongue &amp; Lip Malignancies</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Thyroid &amp; Parathyroid Neoplasms</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Laryngeal &amp; Pharyngeal Tumors</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Non-Small Cell Lung Carcinoma</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Mediastinal Tumors</span>
            </div>
        </div>
        
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">GI &amp; Abdominal</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Digestive system cancers</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Colorectal &amp; Rectal Carcinoma</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Stomach &amp; Esophageal Cancers</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Pancreatic Head &amp; Body Tumors</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Gallbladder &amp; Cholangiocarcinoma</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Hepatocellular Carcinoma</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Gastrointestinal Stromal Tumors (GIST)</span>
            </div>
        </div>
                  <div style="margin-top: 20px; padding: 14px 16px; border-radius: 12px; background: #F0FDF4; border: 1px dashed #86EFAC; font-size: 12.5px; color: #166534; line-height: 1.6;">
            <strong>Laparoscopic Approach:</strong> Over 70% of colorectal and early GI resections performed laparoscopically for faster recovery.
          </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #F5F3FF; border: 1px solid #DDD6FE; color: #7C3AED; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="ribbon" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Breast, Gynae &amp; Uro-Onco</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Pelvic &amp; organ-specific</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Invasive Ductal &amp; Lobular Breast Cancer</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Ovarian Epithelial Tumors &amp; Cystadenocarcinomas</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Cervical &amp; Uterine Malignancies</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Renal Cell Carcinoma (RCC)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Urinary Bladder Cancer</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Testicular &amp; Penile Malignancies</span>
            </div>
        </div>
        
      </div>
    </div>
  </section>


  <!-- ============================================================
       5. WHY CHOOSE SUKHDA (Dark Navy 6-Card Grid)
  ============================================================ -->
  <section id="why" style="margin-top: 92px; background: linear-gradient(140deg, #0B1E3C 0%, #143560 50%, #1D4E7A 100%); color: #F7FAF7; padding: 92px 0; position: relative; overflow: hidden;">
    <div data-grid-tex="1"></div>
    <div data-pad="1" style="position: relative; z-index: 2; max-width: 1240px; margin: 0 auto; padding: 0 32px;">
      <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 48px;">
        <div>
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.32); color: #7DCB6B; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
            <i data-lucide="award" style="width: 14px; height: 14px;"></i>The Sukhda distinction
          </div>
          <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #FFFFFF; margin: 0;">
            Why families choose <em class="serif" style="color: #7DCB6B;">Sukhda for cancer surgery.</em>
          </h2>
        </div>
        <p style="font-size: 16px; line-height: 1.75; color: rgba(247,250,247,.78); margin: 0;">
          Precision margins, cutting-edge surgical infrastructure, and humane patient recovery.
        </p>
      </div>

      <div data-g="c3" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="shield-check" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Sub-Speciality Onco-Surgeons</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Surgeries led by highly experienced surgical oncologists dedicated specifically to cancer resections.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="microscope" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Instant Frozen Biopsy</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Intraoperative frozen section verification guarantees clear surgical margins before the operation concludes.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="hospital" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Laminar Airflow Modular OTs</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Ultra-sterile positive pressure OTs ensure near-zero surgical site infection rates for immune-compromised cancer patients.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="heart-pulse" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Dedicated Surgical ICU</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Round-the-clock intensivist-led postoperative critical care with continuous haemodynamic monitoring.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="users" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Weekly Multidisciplinary Review</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Tumor board alignment ensures surgical timing is flawlessly harmonized with chemo and radiation schedules.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="indian-rupee" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Transparent Treatment Packages</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Clear surgical package quotes upfront with comprehensive cashless insurance / TPA settlement support.</div>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
       6. PATIENT CARE PATHWAY (6 Chronological Steps)
  ============================================================ -->
  <section id="journey" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 48px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="route" style="width: 14px; height: 14px;"></i>Care pathway
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Your surgical <em class="serif" style="color: #2E8B3C;">oncology care pathway.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        A structured, reassuring pathway from pre-operative staging to complete physical recovery and rehabilitation.
      </p>
    </div>

    <div data-g="j6" data-reveal="1" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px;">
              <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            1
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Clinical Staging &amp; Workup</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">High-resolution imaging, biopsy review, and cardiopulmonary fitness evaluation.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            2
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Tumor Board Review</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Multidisciplinary consensus on neoadjuvant therapy vs upfront surgical resection.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            3
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Pre-Op Planning</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Detailed patient counseling, nutritional optimization, and anaesthesia clearance.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            4
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Precision Surgery</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Resection performed in modular OT with intraoperative margin verification.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            5
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">ICU &amp; Post-Op Recovery</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Early ambulation, multimodal analgesia, and specialised surgical wound care.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            6
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Adjuvant Care &amp; Follow-Up</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Histopathology review, adjuvant therapy sequencing, and long-term surveillance.</div>
        </div>
    </div>
  </section>


  <!-- ============================================================
       7. SPECIALIST DOCTOR TEAM CARDS
  ============================================================ -->
  <section id="team" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-g="head" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 44px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="user-check" style="width: 14px; height: 14px;"></i>Medical faculty
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Meet our <em class="serif" style="color: #2E8B3C;">surgical oncology experts.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Experienced onco-surgeons and dedicated critical care teams working seamlessly for your recovery.
      </p>
    </div>

    <div data-g="team" data-reveal="1" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          SO
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Surgical Oncology &amp; Oncoplasty
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Sukhda Surgical Oncology Team</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">MCh / DNB Surgical Oncology</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Fellowship-trained surgical oncologists specializing in head-neck, breast, GI, and pelvic cancer resections.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Organ preservation</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Modular OT</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Whipple procedure</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Oncoplasty</span>
          </div>
        </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          AM
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Internal Medicine &amp; Pre-Op Optimization
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Dr. Amit Mehta</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">MD (AIIMS) · Founder &amp; Director</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Comprehensive multi-system medical optimization and post-surgical recovery oversight.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>AIIMS Alumnus</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Pre-op clearance</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Critical care</span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
       8. FREQUENTLY ASKED QUESTIONS (Accordion Grid)
  ============================================================ -->
  <section id="faqs" data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 0;">
    <div data-reveal="1" style="text-align: center; max-width: 680px; margin: 0 auto 48px;">
      <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
        <i data-lucide="help-circle" style="width: 14px; height: 14px;"></i>Clear answers
      </div>
      <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 14px;">
        Frequently asked <em class="serif" style="color: #2E8B3C;">questions.</em>
      </h2>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Answers to common questions regarding consultations, procedures, admissions, and insurance panels.
      </p>
    </div>

    <div data-g="faq" data-reveal="1" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;">
      <div style="display: flex; flex-direction: column; gap: 14px;">
                <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_1')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>What is the goal of surgical oncology?</span>
            <i id="faq_1_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_1" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            The primary goal of surgical oncology is to physically remove the tumor and a margin of healthy tissue surrounding it to achieve curative or diagnostic outcomes. Depending on the stage, surgery may be the primary treatment, combined with chemotherapy or radiation therapy.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_3')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Can my breast be saved during breast cancer surgery?</span>
            <i id="faq_3_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_3" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes. For many patients, Breast Conserving Surgery (Lumpectomy) combined with oncoplastic reconstruction is an effective alternative to complete mastectomy, providing identical long-term survival rates while preserving cosmetic appearance.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_5')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Does Sukhda accept Ayushman Bharat and cashless insurance for cancer surgeries?</span>
            <i id="faq_5_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_5" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes, Sukhda Medpark is empaneled with major private insurance TPAs, Ayushman Bharat (PMJAY), and government welfare schemes, providing seamless cashless hospital admission and surgical coverage.
          </div>
        </div>
      </div>
      <div style="display: flex; flex-direction: column; gap: 14px;">
                <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_2')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>What is an intraoperative frozen section and why is it important?</span>
            <i id="faq_2_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_2" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            An intraoperative frozen section is a rapid microscopic analysis performed while the patient is still on the operating table. The pathologist immediately examines the edges of the removed tumor to confirm that no cancer cells remain, ensuring clear margins and preventing the need for repeat surgery.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_4')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>How long is the typical hospital stay after cancer surgery?</span>
            <i id="faq_4_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_4" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Hospital stay depends on the complexity of the procedure. Minimally invasive laparoscopic GI or breast surgeries usually require 2 to 4 days, while complex procedures like Whipple surgery or composite head-neck resections require 5 to 8 days of supervised recovery.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_6')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>When will I know if further chemotherapy or radiation is needed?</span>
            <i id="faq_6_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_6" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Final histopathology reports (including tumor grade, lymph node involvement, and biomarker status) are available within 5 to 7 days post-surgery. Our tumor board will then review the findings to recommend any necessary adjuvant chemotherapy or radiation.
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
       9. BOTTOM CTA & DIRECT ACCESS CARD
  ============================================================ -->
  <section data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 100px;">
    <div data-g="cta" data-reveal="1" style="background: linear-gradient(135deg, #0B1E3C 0%, #163B66 52%, #1D4E7A 100%); border-radius: 28px; padding: 56px 48px; color: #F7FAF7; display: grid; grid-template-columns: 1.2fr .8fr; gap: 48px; align-items: center; position: relative; overflow: hidden; box-shadow: 0 28px 64px -28px rgba(11,30,60,.55);">
      <div style="position: absolute; top: -60px; right: -60px; width: 260px; height: 260px; border-radius: 50%; background: radial-gradient(circle, rgba(125,203,107,.25), transparent 70%);"></div>
      
      <div style="position: relative; z-index: 2;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.32); color: #7DCB6B; padding: 6px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 22px;">
          <i data-lucide="heart-handshake" style="width: 14px; height: 14px;"></i>Compassionate care starts here
        </div>
        <h2 style="font-size: clamp(32px, 3.8vw, 46px); font-weight: 800; line-height: 1.1; letter-spacing: -0.034em; color: #FFFFFF; margin: 0 0 16px;">
          Schedule your onco-surgery <em class="serif" style="color: #7DCB6B;">consultation today.</em>
        </h2>
        <p style="font-size: 16px; line-height: 1.72; color: rgba(247,250,247,.8); max-width: 520px; margin: 0 0 32px;">
          Our surgical oncology team is available for primary treatment planning, second opinions, and urgent surgical consultations.
        </p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap;">
          <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 15px 28px; border-radius: 12px; font-size: 15px; font-weight: 700; box-shadow: 0 14px 30px -10px rgba(22,163,74,.7);">
            <i data-lucide="calendar-check" style="width: 17px; height: 17px;"></i>Book consultation
          </a>
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20would%20like%20to%20consult%20regarding%20Surgical Oncology" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.24); color: #FFFFFF; padding: 15px 24px; border-radius: 12px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
            <i data-lucide="message-circle" style="width: 17px; height: 17px; color: #7DCB6B;"></i>WhatsApp consult
          </a>
        </div>
      </div>

      <!-- Access & Emergency Card -->
      <div style="position: relative; z-index: 2; background: rgba(11,30,60,.75); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.16); border-radius: 20px; padding: 28px;">
        <div style="font-size: 13px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: #7DCB6B; margin-bottom: 12px;">
          Direct hospital access
        </div>
        <div style="font-size: 20px; font-weight: 800; color: #FFFFFF; margin-bottom: 6px;">Sukhda Hospital, Hisar</div>
        <div style="font-size: 13.5px; line-height: 1.6; color: rgba(247,250,247,.72); margin-bottom: 20px;">
          <?= htmlspecialchars($HOSPITAL['address']) ?>
        </div>

        <div style="border-top: 1px solid rgba(255,255,255,.12); padding-top: 16px; display: flex; flex-direction: column; gap: 10px;">
          <div style="display: flex; align-items: center; justify-content: space-between; font-size: 13.5px;">
            <span style="color: rgba(247,250,247,.7);">OPD Timings:</span>
            <strong style="color: #FFFFFF;">09:00 AM – 08:00 PM</strong>
          </div>
          <div style="display: flex; align-items: center; justify-content: space-between; font-size: 13.5px;">
            <span style="color: rgba(247,250,247,.7);">Emergency &amp; ICU:</span>
            <strong style="color: #7DCB6B;">Open 24×7 · All Days</strong>
          </div>
          <div style="display: flex; align-items: center; justify-content: space-between; font-size: 13.5px;">
            <span style="color: rgba(247,250,247,.7);">Emergency Hotline:</span>
            <strong style="color: #FFFFFF;"><a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="color: #FFFFFF;"><?= htmlspecialchars($HOSPITAL['phone']) ?></a></strong>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>

<script>
function toggleFaq(id) {
  const el = document.getElementById(id);
  const icon = document.getElementById(id + '_icon');
  if (!el) return;
  const isHidden = el.style.display === 'none' || el.style.display === '';
  if (isHidden) {
    el.style.display = 'block';
    if (icon) icon.style.transform = 'rotate(180deg)';
  } else {
    el.style.display = 'none';
    if (icon) icon.style.transform = 'rotate(0deg)';
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

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>