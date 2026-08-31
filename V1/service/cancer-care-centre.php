<?php 
$page_title = 'Comprehensive Cancer Care Centre — Sukhda Medpark, Hisar';
$page_description = 'Comprehensive Cancer Care Centre at Sukhda Medpark, Hisar. Medical, Surgical &amp; Radiation Oncology, Daycare Chemotherapy, Immunotherapy &amp; Multidisciplinary Tumor Board.';
require dirname(__DIR__) . '/includes/header.php'; 
?>

<!-- ============================================================
     DEPARTMENT / SERVICE PAGE TEMPLATE: Cancer Care Centre
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
          <div style="display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 500; color: rgba(247,250,247,.55); margin-bottom: 26px;">
            <a href="/" style="color: rgba(247,250,247,.75);">Home</a><span style="opacity: .4;">›</span>
            <a href="/#specialities" style="color: rgba(247,250,247,.75);">Specialties</a><span style="opacity: .4;">›</span>
            <span style="color: #7DCB6B;">Cancer Care Centre</span>
          </div>
          
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.32); color: #7DCB6B; padding: 7px 16px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 26px;">
            <i data-lucide="activity" style="width: 15px; height: 15px;"></i>Comprehensive Cancer Care Centre
          </div>
          
          <h1 style="font-size: clamp(42px, 5.4vw, 66px); font-weight: 800; line-height: 1.04; letter-spacing: -0.038em; color: #FFFFFF; margin: 0 0 24px;">
            Holistic cancer care uniting <em class="serif" style="color: #7DCB6B;">medical, surgical &</em> <em class="serif" style="color: #7DCB6B;">supportive oncology.</em>
          </h1>
          
          <p style="font-size: 17.5px; line-height: 1.72; color: rgba(247,250,247,.82); max-width: 540px; margin: 0 0 36px;">
            An integrated regional oncology hub combining weekly Multidisciplinary Tumor Boards, precision chemotherapy, targeted immunotherapy, advanced onco-surgery in modular OTs, and compassionate palliative care.
          </p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 38px;">
            <a href="/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; box-shadow: 0 16px 34px -12px rgba(22,163,74,.75);">
              <i data-lucide="calendar-check" style="width: 18px; height: 18px;"></i>Book comprehensive cancer consult
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.26); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
              <i data-lucide="phone" style="width: 18px; height: 18px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
          </div>
          
          <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap; font-size: 13px; font-weight: 500; color: rgba(247,250,247,.68);">
            <span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Multidisciplinary Tumor Board</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Daycare Chemotherapy Suite</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Organ-Preserving Onco-Surgery</span>
          </div>
        </div>

        <!-- Right Hero Visual Card -->
        <div style="position: relative;">
          <div style="position: relative; border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,.16); box-shadow: 0 28px 60px -20px rgba(0,0,0,.6);">
            <img src="/assets/images/oncology/onco-img-1.jpg" alt="Cancer Care Centre" style="width: 100%; height: 420px; object-fit: cover; display: block;">
            <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(11,30,60,.9) 100%);"></div>
            
            <div style="position: absolute; top: 18px; right: 18px; background: rgba(11,30,60,.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,.18); color: #FFFFFF; padding: 6px 14px; border-radius: 999px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px;">
              <span style="width: 7px; height: 7px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 3px rgba(125,203,107,.3);"></span>
              NABH Cancer Centre
            </div>
            
            <div style="position: absolute; bottom: 22px; left: 22px; right: 22px; background: rgba(11,30,60,.88); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.16); border-radius: 16px; padding: 16px 18px; display: flex; align-items: center; gap: 14px;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: linear-gradient(135deg, #16A34A, #15803D); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #FFFFFF;">
                <i data-lucide="shield-check" style="width: 22px; height: 22px;"></i>
              </div>
              <div>
                <div style="font-size: 14px; font-weight: 800; color: #FFFFFF; line-height: 1.25;">Weekly Multidisciplinary Tumor Board</div>
                <div style="font-size: 12px; color: rgba(247,250,247,.7); margin-top: 2px;">Every case jointly evaluated by medical, surgical, and radiation specialists</div>
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
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">5,000+</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Cancer patients supported</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">< 7 days</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Consultation to treatment start</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">24×7</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Daycare &amp; supportive onco-care</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">100%</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">NCCN guideline-aligned protocols</div>
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
          <i data-lucide="stethoscope" style="width: 14px; height: 14px;"></i>Cancer Care Centre
        </div>
        
        <h2 style="font-size: clamp(32px, 3.8vw, 46px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 22px;">
          World-class oncology protocols, <em class="serif" style="color: #2E8B3C;">right here in Hisar.</em>
        </h2>
        
        <p style="font-size: 16.5px; line-height: 1.75; color: #2A5288; margin: 0 0 20px;">
          The Comprehensive Cancer Care Centre at Sukhda Medpark is dedicated to delivering evidence-based, compassionate, and affordable cancer care spanning prevention, early diagnosis, systemic therapy, advanced surgery, and survivorship.
        </p>
        
        <div style="border-left: 3px solid #2E8B3C; padding: 4px 0 4px 18px; margin: 24px 0 28px; background: rgba(46,139,60,.04); border-radius: 0 8px 8px 0;">
          <p style="margin: 0; font-size: 15.5px; line-height: 1.68; color: #12305F; font-weight: 600;">
            &quot;No cancer patient should have to travel hundreds of kilometers to metropolitan cities for international-standard cancer therapies.&quot;
          </p>
          <span style="display: block; font-size: 12.5px; color: #5B6480; margin-top: 6px; font-weight: 500;">— Sukhda Cancer Care Centre Leadership</span>
        </div>

        <p style="font-size: 15.5px; line-height: 1.75; color: #5B6480; margin: 0 0 36px;">
          With our dedicated daycare chemotherapy suite, NABL-accredited histopathology and immunohistochemistry (IHC) lab, HEPA-filtered laminar airflow modular operating rooms, and psychological support services, we offer 360-degree healing.
        </p>

        <!-- 4 Highlights Grid -->
        <div data-g="quad" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                    <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="activity" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Tumor Board Governance</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Multi-specialist consensus on staging, sequencing, and individual treatment planning</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="pill" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Targeted &amp; Immunotherapy</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Checkpoint inhibitors and molecular targeted therapies guided by genetic biomarkers</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="scissors" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Advanced Onco-Surgery</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Radical and organ-preserving tumor resections with intraoperative frozen sections</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="heart-handshake" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Palliative &amp; Pain Clinic</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">WHO-ladder pain management, onco-nutrition, and psycho-oncology family counseling</div>
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
          Comprehensive oncology <em class="serif" style="color: #2E8B3C;">modalities.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Integrated systemic, surgical, and supportive oncological interventions.
      </p>
    </div>

    <div data-g="c3" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94;">
            <i data-lucide="pill" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">01</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Medical Oncology &amp; Daycare Chemotherapy</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Intravenous and oral cytotoxic protocols delivered in a dedicated daycare suite with ergonomic recliners, infusion pumps, and specialized nursing.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Neoadjuvant chemotherapy (pre-operative tumor downsizing)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Adjuvant chemotherapy (post-operative residual cell elimination)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Metronomic and palliative chemotherapy regimens</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Port-a-cath insertion, maintenance, and heparin flushes</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A;">
            <i data-lucide="shield-check" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">02</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Immunotherapy &amp; Targeted Precision Medicine</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Next-generation therapies that harness the immune system or target specific oncogenic mutations (EGFR, ALK, HER2, KRAS).</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Immune checkpoint inhibitors (anti-PD-1, anti-PD-L1)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Tyrosine kinase inhibitors (TKIs) and monoclonal antibodies</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Next-Generation Sequencing (NGS) and IHC guided selection</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Immune-related adverse effect (irAE) monitoring</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F5F3FF; border: 1px solid #DDD6FE; color: #7C3AED;">
            <i data-lucide="scissors" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">03</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Surgical Oncology &amp; Oncoplasty</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Organ-preserving and radical cancer surgeries performed in ultra-sterile laminar flow modular OTs with intraoperative frozen biopsy.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Breast conservation surgery &amp; oncoplastic reconstruction</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Gastrointestinal &amp; colorectal laparoscopic cancer resections</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Head and neck composite resections with microvascular flaps</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Urological and gynaecological radical cytoreductive surgeries</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFFBEB; border: 1px solid #FDE68A; color: #D97706;">
            <i data-lucide="zap" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">04</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Radiation Oncology Coordination</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Seamless multidisciplinary coordination for external beam radiotherapy (IMRT, IGRT, SRS/SBRT) and brachytherapy.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Coordinated concurrent chemoradiotherapy protocols</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Pre-radiation dental and nutritional optimization</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Palliative radiotherapy for painful bone metastases</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Post-radiation follow-up and symptom management</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48;">
            <i data-lucide="heart-pulse" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">05</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Cancer Screening &amp; Early Detection</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Proactive screening clinics for high-risk individuals and general population to detect malignancies at their earliest, curable stage.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Mammography and clinical breast examination</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Pap smear and liquid-based cytology for cervical cancer</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Low-dose chest CT for heavy smokers (Lung cancer screening)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Fecal occult blood, colonoscopy, and PSA screening for prostate</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDFA; border: 1px solid #99F6E4; color: #0D9488;">
            <i data-lucide="heart-handshake" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">06</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Palliative Care &amp; Survivorship Programs</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Dedicated supportive care managing cancer pain, cachexia, nausea, and psychological well-being from diagnosis through long-term survivorship.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>WHO analgesic ladder stepped pain management</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Onco-dietetics and nutritional supplementation</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Psycho-oncology counseling for patients and families</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Long-term surveillance and cancer recurrence monitoring</span>
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
          Cancers <em class="serif" style="color: #2E8B3C;">treated at our centre.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Comprehensive treatment across all solid-organ tumors and hematological malignancies.
      </p>
    </div>

    <div data-g="cangrid" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Solid Organ Cancers</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Primary organ malignancies</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Breast Cancer (Early, Locally Advanced &amp; Metastatic)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Oral Cavity, Tongue &amp; Head-Neck Carcinomas</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Lung Cancer (NSCLC &amp; SCLC)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Colorectal &amp; Rectal Carcinoma</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Stomach &amp; Esophageal Cancers</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Pancreatic, Gallbladder &amp; Liver Malignancies</span>
            </div>
        </div>
        
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="scissors" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Gynaecological &amp; Uro-Onco</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Pelvic &amp; genitourinary</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Cervical &amp; Endometrial Cancer</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Ovarian Epithelial &amp; Germ Cell Tumors</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Prostate Cancer &amp; Elevated PSA</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Renal Cell Carcinoma (Kidney Cancer)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Urinary Bladder Carcinoma</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Testicular &amp; Penile Malignancies</span>
            </div>
        </div>
                  <div style="margin-top: 20px; padding: 14px 16px; border-radius: 12px; background: #F0FDF4; border: 1px dashed #86EFAC; font-size: 12.5px; color: #166534; line-height: 1.6;">
            <strong>NCCN Protocols:</strong> All treatments strictly adhere to National Comprehensive Cancer Network (NCCN) international guidelines.
          </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #FFFBEB; border: 1px solid #FDE68A; color: #D97706; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="shield-plus" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Blood &amp; Bone Malignancies</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Haematological cancers</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Hodgkin &amp; Non-Hodgkin Lymphoma (NHL)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Acute &amp; Chronic Leukaemias (ALL, AML, CML, CLL)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Multiple Myeloma &amp; Monoclonal Gammopathies</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Myelodysplastic Syndromes (MDS)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Osteosarcoma &amp; Soft Tissue Sarcomas</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Brain Tumors (Gliomas &amp; Metastases)</span>
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
            Why families choose Sukhda <em class="serif" style="color: #7DCB6B;">Cancer Care Centre.</em>
          </h2>
        </div>
        <p style="font-size: 16px; line-height: 1.75; color: rgba(247,250,247,.78); margin: 0;">
          Compassionate care, tumor board precision, and modern daycare facilities in Hisar.
        </p>
      </div>

      <div data-g="c3" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="activity" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Weekly Multidisciplinary Tumor Board</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Every case is evaluated by medical, surgical, and radiation oncologists for a unified, balanced roadmap.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="hospital" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Dedicated Daycare Chemotherapy Suite</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Ergonomic infusion recliners, individualized attention, and same-day return home.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="zap" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Rapid Initiation (&lt; 7 Days)</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">From initial evaluation to biopsy confirmation and therapy initiation within 7 days.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="shield-check" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">In-House NABL Diagnostics</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Biopsy histopathology, immunohistochemistry, and tumour markers processed with strict quality control.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="heart-handshake" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Holistic Psycho-Oncology</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Counseling support, pain clinic, and nutritional guidance addressing the emotional weight of cancer.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="indian-rupee" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Ayushman PMJAY &amp; Cashless TPAs</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Chemotherapy, onco-surgeries, and diagnostic evaluations covered with full cashless support.</div>
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
          Your cancer care & <em class="serif" style="color: #2E8B3C;">healing roadmap.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        A clear, compassionate journey from first suspicion to remission and survivorship.
      </p>
    </div>

    <div data-g="j6" data-reveal="1" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px;">
              <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            1
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Consultation &amp; Staging</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Comprehensive history, imaging (CT/PET), and biopsy review by senior oncologists.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            2
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Tumor Board Review</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Joint multi-specialist consensus defining optimal chemotherapy, surgery, or radiation sequencing.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            3
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Port-a-Cath Placement</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Simple daycare port insertion for painless, reliable IV therapy infusions.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            4
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Therapy in Daycare Suite</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Chemotherapy, immunotherapy, or targeted therapy under close monitoring with supportive medications.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            5
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Response Assessment</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Periodic imaging and tumour marker scans to verify disease shrinkage and adjust protocols.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            6
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Survivorship &amp; Follow-Up</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Long-term surveillance scans, health restoration, and celebrating cancer-free milestones.</div>
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
          Meet our <em class="serif" style="color: #2E8B3C;">cancer care faculty.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Dedicated medical oncologists, surgical oncologists, and supportive onco-care teams.
      </p>
    </div>

    <div data-g="team" data-reveal="1" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          CC
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Medical &amp; Surgical Oncology Board
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Sukhda Cancer Care Team</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">DM / MCh / DNB Oncology · Multidisciplinary Panel</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Experienced oncologists, onco-surgeons, pathologists, and oncology nurses delivering protocol-driven cancer treatment.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Tumor Board</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Daycare Chemo</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Targeted Therapy</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Onco-Surgery</span>
          </div>
        </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          AM
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Internal Medicine &amp; Supportive Oncology
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Dr. Amit Mehta</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">MD (AIIMS) · Founder &amp; Director</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Specialist in cancer screening, pre-chemotherapy fitness, infection management in neutropenia, and palliative care.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>AIIMS Alumnus</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Early Screening</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Infection Control</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Supportive Care</span>
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
            <span>What makes Sukhda Cancer Care Centre unique in Haryana?</span>
            <i id="faq_1_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_1" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Our centre brings together multidisciplinary tumor boards, international NCCN-aligned chemotherapy and immunotherapy protocols, laminar-flow modular onco-surgeries, and dedicated daycare facilities under one roof in Hisar, eliminating the need to travel to Delhi.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_3')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>How does daycare chemotherapy work?</span>
            <i id="faq_3_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_3" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Patients arrive in the morning, receive their pre-medication and chemotherapy infusion in comfortable motorized recliners with personal television, and return home the same evening without requiring overnight hospitalization.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_5')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Is cancer treatment covered under Ayushman Bharat (PMJAY) and health insurance?</span>
            <i id="faq_5_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_5" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes! Cancer diagnostic biopsies, staging scans, daycare chemotherapy cycles, immunotherapies, and onco-surgeries are fully covered under Ayushman Bharat (PMJAY), Chirayu Haryana, and all leading private insurance TPAs.
          </div>
        </div>
      </div>
      <div style="display: flex; flex-direction: column; gap: 14px;">
                <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_2')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>What is the purpose of a Multidisciplinary Tumor Board?</span>
            <i id="faq_2_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_2" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            A Tumor Board is a weekly medical conference where medical, surgical, and radiation oncologists, radiologists, and pathologists jointly examine a patient’s biopsy and scans. This eliminates single-doctor bias and ensures the most effective, personalized sequence of treatment.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_4')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>What is a Chemoport and why is it recommended?</span>
            <i id="faq_4_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_4" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            A Chemoport (Port-a-cath) is a small disc implanted under the skin of the upper chest connected to a central vein. It allows painless drawing of blood samples and infusion of chemotherapy drugs without repeated painful needle pricks in fragile arm veins.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_6')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>What supportive care is provided during cancer treatment?</span>
            <i id="faq_6_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_6" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            We provide comprehensive supportive care including anti-emetic protocols for nausea, onco-nutrition counseling, pain management via WHO protocols, psychological counseling, and 24x7 emergency admission support for fever or infection during chemotherapy.
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
          You are not alone in this fight — <em class="serif" style="color: #7DCB6B;">we stand with you.</em>
        </h2>
        <p style="font-size: 16px; line-height: 1.72; color: rgba(247,250,247,.8); max-width: 520px; margin: 0 0 32px;">
          Contact our cancer care coordinators for a second opinion, tumor board review, or consultation.
        </p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap;">
          <a href="/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 15px 28px; border-radius: 12px; font-size: 15px; font-weight: 700; box-shadow: 0 14px 30px -10px rgba(22,163,74,.7);">
            <i data-lucide="calendar-check" style="width: 17px; height: 17px;"></i>Book consultation
          </a>
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20would%20like%20to%20consult%20regarding%20Cancer Care Centre" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.24); color: #FFFFFF; padding: 15px 24px; border-radius: 12px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
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