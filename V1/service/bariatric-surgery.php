<?php 
$page_title = 'Bariatric &amp; Metabolic Weight Loss Surgery — Sukhda Hospital, Hisar';
$page_description = 'Advanced Bariatric &amp; Metabolic Surgery at Sukhda Hospital, Hisar. Laparoscopic Sleeve Gastrectomy, Gastric Bypass (Roux-en-Y), Diabetes reversal &amp; obesity care.';
require dirname(__DIR__) . '/includes/header.php'; 
?>

<!-- ============================================================
     DEPARTMENT / SERVICE PAGE TEMPLATE: Bariatric Surgery
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
            <span style="color: #7DCB6B;">Bariatric Surgery</span>
          </div>
          
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.32); color: #7DCB6B; padding: 7px 16px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 26px;">
            <i data-lucide="scissors" style="width: 15px; height: 15px;"></i>Centre for Bariatric &amp; Metabolic Care
          </div>
          
          <h1 style="font-size: clamp(42px, 5.4vw, 66px); font-weight: 800; line-height: 1.04; letter-spacing: -0.038em; color: #FFFFFF; margin: 0 0 24px;">
            Transform your health with <em class="serif" style="color: #7DCB6B;">laparoscopic</em> <em class="serif" style="color: #7DCB6B;">metabolic surgery.</em>
          </h1>
          
          <p style="font-size: 17.5px; line-height: 1.72; color: rgba(247,250,247,.82); max-width: 540px; margin: 0 0 36px;">
            Laparoscopic Sleeve Gastrectomy and Roux-en-Y Gastric Bypass for sustainable weight loss, Type-2 Diabetes remission, hypertension resolution, and joint relief under multidisciplinary care.
          </p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 38px;">
            <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; box-shadow: 0 16px 34px -12px rgba(22,163,74,.75);">
              <i data-lucide="calendar-check" style="width: 18px; height: 18px;"></i>Book bariatric consult
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.26); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
              <i data-lucide="phone" style="width: 18px; height: 18px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
          </div>
          
          <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap; font-size: 13px; font-weight: 500; color: rgba(247,250,247,.68);">
            <span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Long-Term Diabetes Remission</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Keyhole Laparoscopic Approach</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Multidisciplinary Team Care</span>
          </div>
        </div>

        <!-- Right Hero Visual Card -->
        <div style="position: relative;">
          <div style="position: relative; border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,.16); box-shadow: 0 28px 60px -20px rgba(0,0,0,.6);">
            <img src="/assets/images/infra/operation-theatre.jpg" alt="Bariatric Surgery" style="width: 100%; height: 420px; object-fit: cover; display: block;">
            <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(11,30,60,.9) 100%);"></div>
            
            <div style="position: absolute; top: 18px; right: 18px; background: rgba(11,30,60,.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,.18); color: #FFFFFF; padding: 6px 14px; border-radius: 999px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px;">
              <span style="width: 7px; height: 7px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 3px rgba(125,203,107,.3);"></span>
              Metabolic Surgery Suite
            </div>
            
            <div style="position: absolute; bottom: 22px; left: 22px; right: 22px; background: rgba(11,30,60,.88); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.16); border-radius: 16px; padding: 16px 18px; display: flex; align-items: center; gap: 14px;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: linear-gradient(135deg, #16A34A, #15803D); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #FFFFFF;">
                <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
              </div>
              <div>
                <div style="font-size: 14px; font-weight: 800; color: #FFFFFF; line-height: 1.25;">Diabetes &amp; Weight Remission</div>
                <div style="font-size: 12px; color: rgba(247,250,247,.7); margin-top: 2px;">Substantial long-term excess weight reduction &amp; metabolic reset</div>
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
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">1,200+</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Bariatric &amp; metabolic consultations</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">85%+</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Type-2 Diabetes remission rate</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">70–80%</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Excess body weight loss</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">24–48h</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Average hospital stay</div>
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
          <i data-lucide="stethoscope" style="width: 14px; height: 14px;"></i>Bariatric &amp; Metabolic Sciences
        </div>
        
        <h2 style="font-size: clamp(32px, 3.8vw, 46px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 22px;">
          Sustainable weight loss & <em class="serif" style="color: #2E8B3C;">metabolic disease reversal.</em>
        </h2>
        
        <p style="font-size: 16.5px; line-height: 1.75; color: #2A5288; margin: 0 0 20px;">
          The Department of Bariatric and Metabolic Surgery at Sukhda Hospital provides safe, evidence-based surgical solutions for severe obesity and associated metabolic conditions like Type-2 Diabetes, sleep apnea, fatty liver, and joint degeneration.
        </p>
        
        <div style="border-left: 3px solid #2E8B3C; padding: 4px 0 4px 18px; margin: 24px 0 28px; background: rgba(46,139,60,.04); border-radius: 0 8px 8px 0;">
          <p style="margin: 0; font-size: 15.5px; line-height: 1.68; color: #12305F; font-weight: 600;">
            &quot;Bariatric surgery is not merely about cosmetic weight loss; it is a life-changing metabolic reset that cures chronic lifestyle diseases.&quot;
          </p>
          <span style="display: block; font-size: 12.5px; color: #5B6480; margin-top: 6px; font-weight: 500;">— Sukhda Bariatric &amp; Metabolic Team</span>
        </div>

        <p style="font-size: 15.5px; line-height: 1.75; color: #5B6480; margin: 0 0 36px;">
          Guided by a multidisciplinary board of bariatric surgeons, endocrinologists, bariatric dietitians, and clinical psychologists, we offer customized laparoscopic procedures with dedicated lifelong nutritional follow-up.
        </p>

        <!-- 4 Highlights Grid -->
        <div data-g="quad" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                    <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="scissors" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Lap Sleeve Gastrectomy</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Removes 75–80% of stomach volume and ghrelin hunger hormone producing cells</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="activity" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Roux-en-Y Gastric Bypass</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Gold standard metabolic bypass for long-standing severe Type-2 Diabetes and severe GERD</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="heart-pulse" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Diabetes Reversal</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Substantial hormonal reset leading to discontinuation of insulin and oral hypoglycemics</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="users" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Nutritional Support</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Structured pre-op and lifelong post-op micronutrient and dietary guidance</div>
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
          Bariatric & metabolic <em class="serif" style="color: #2E8B3C;">surgical procedures.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Minimally invasive keyhole metabolic interventions customized to your BMI and health profile.
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
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Laparoscopic Sleeve Gastrectomy (LSG)</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">The most popular bariatric procedure, converting the stomach into a narrow tube, reducing food capacity and suppressing hunger hormones.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Removal of hunger-inducing ghrelin hormone fundus</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>No intestinal rerouting or malabsorption complications</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Average loss of 65–75% excess body weight over 12–18 months</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Rapid resolution of sleep apnea, joint pain, and high blood pressure</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">02</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Roux-en-Y Gastric Bypass (RYGB)</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Combination of gastric restriction and small bowel bypass, creating powerful metabolic changes that induce dramatic remission of Type-2 Diabetes.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Gold standard procedure for diabetic obese patients with severe acid reflux</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Bypasses the upper small intestine, stimulating GLP-1 incretin hormones</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Rapid normalization of blood sugar levels often before hospital discharge</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>High, sustainable long-term excess weight maintenance</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F5F3FF; border: 1px solid #DDD6FE; color: #7C3AED;">
            <i data-lucide="zap" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">03</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Mini Gastric Bypass / OAGB</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">One Anastomosis Gastric Bypass (OAGB), a simplified and highly effective bypass technique with shorter operative time and excellent metabolic benefits.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Single loop gastro-jejunal anastomosis</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Exceptional weight loss and diabetes control</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Reversible and easily revised if needed</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Minimal operative complexity with fast post-op recovery</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFFBEB; border: 1px solid #FDE68A; color: #D97706;">
            <i data-lucide="shield-plus" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">04</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Metabolic Surgery for Normal/Mildly Obese Diabetics</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Targeted metabolic gastrointestinal interventions for uncontrolled Type-2 Diabetics (BMI 27.5 to 35) who have failed medical and insulin therapy.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>International Diabetes Federation (IDF) approved metabolic protocols</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Stimulation of natural gut incretins and insulin secretion</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Protection against diabetic kidney, eye, and heart complications</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Significant reduction or complete cessation of daily insulin doses</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48;">
            <i data-lucide="shield-alert" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">05</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Revision Bariatric Surgery</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Specialized corrective surgery for patients who have experienced weight regain, insufficient loss, or anatomical complications from previous bariatric surgeries.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Conversion of failed gastric band to sleeve or bypass</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Conversion of sleeve to Roux-en-Y bypass for reflux or regain</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Correction of pouch dilatation or anastomotic ulcers</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Detailed nutritional and anatomical evaluation prior to revision</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDFA; border: 1px solid #99F6E4; color: #0D9488;">
            <i data-lucide="heart-handshake" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">06</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Endoscopic Intragastric Balloon</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Non-surgical daycare weight loss option where an adjustable medical-grade balloon is placed in the stomach endoscopically to reduce appetite.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Completely non-surgical procedure without cuts or incisions</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Induces early satiety and portion control for 6 to 12 months</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Ideal for patients needing 10–15 kg weight loss or pre-op bridge</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Smooth removal in a simple 15-minute outpatient endoscopy</span>
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
          Metabolic conditions <em class="serif" style="color: #2E8B3C;">resolved.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Bariatric surgery treats the underlying hormonal drivers of obesity and lifestyle diseases.
      </p>
    </div>

    <div data-g="cangrid" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Metabolic Disorders</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Endocrine &amp; glucose health</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Severe Type-2 Diabetes Mellitus &amp; Insulin Resistance</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Metabolic Syndrome &amp; Dyslipidemia</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Essential Hypertension</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Non-Alcoholic Fatty Liver Disease (NASH / Cirrhosis)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Polycystic Ovarian Syndrome (PCOS) &amp; Infertility</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Hyperuricemia &amp; Gout</span>
            </div>
        </div>
        
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="heart-pulse" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Cardiopulmonary &amp; Sleep</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Breathing &amp; cardiac load</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Obstructive Sleep Apnea (OSA) &amp; Heavy Snoring</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Obesity Hypoventilation Syndrome (Pickwickian)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Coronary Artery Disease Risk Reduction</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Chronic Venous Stasis &amp; Leg Swelling</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Asthma &amp; Exercise Intolerance</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Pulmonary Hypertension Associated with Obesity</span>
            </div>
        </div>
                  <div style="margin-top: 20px; padding: 14px 16px; border-radius: 12px; background: #F0FDF4; border: 1px dashed #86EFAC; font-size: 12.5px; color: #166534; line-height: 1.6;">
            <strong>Multidisciplinary Care:</strong> Full pre-operative workup including endocrinology, cardiology, pulmonology, and bariatric nutrition.
          </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="scissors" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Musculoskeletal &amp; Mechanical</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Joints &amp; abdominal pressure</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Severe Knee &amp; Hip Osteoarthritis from Weight Burden</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Chronic Mechanical Low Back Pain &amp; Disc Bulge</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Gastroesophageal Reflux Disease (GERD)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Stress Urinary Incontinence in Women</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Pseudotumor Cerebri (Idiopathic Intracranial Hypertension)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Depression, Social Anxiety &amp; Reduced Quality of Life</span>
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
            Why choose Sukhda for <em class="serif" style="color: #7DCB6B;">bariatric surgery.</em>
          </h2>
        </div>
        <p style="font-size: 16px; line-height: 1.75; color: rgba(247,250,247,.78); margin: 0;">
          Fellowship-trained bariatric team, zero-infection OTs, and compassionate long-term care.
        </p>
      </div>

      <div data-g="c3" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="scissors" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Fellowship-Trained Bariatric Surgeons</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Surgeries performed by high-volume bariatric specialists following strict international metabolic guidelines.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="hospital" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Bariatric-Equipped Infrastructure</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Specially designed high-weight capacity motorized surgical tables, wide beds, and specialized bariatric equipment.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="activity" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Proven Diabetes Remission</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Over 85% of Type-2 Diabetic patients achieve normal blood glucose levels and eliminate daily insulin doses.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="users" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Multidisciplinary Support Team</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Comprehensive team comprising endocrinologists, pulmonologists, bariatric dietitians, and fitness counselors.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="heart-handshake" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Lifelong Follow-Up Program</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Regular post-surgical monitoring of micronutrient levels, muscle preservation, and ongoing dietary coaching.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="indian-rupee" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Insurance &amp; TPA Coverage</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">IRDAI-compliant insurance approvals for medical obesity (BMI &gt; 35 with co-morbidities) with full TPA assistance.</div>
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
          Your bariatric & <em class="serif" style="color: #2E8B3C;">metabolic transformation pathway.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        A structured, safe, and supportive journey toward health and renewed vitality.
      </p>
    </div>

    <div data-g="j6" data-reveal="1" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px;">
              <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            1
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Initial Consultation &amp; BMI</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Assessment of BMI, medical history, eating patterns, and co-morbid conditions.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            2
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Multidisciplinary Workup</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Thyroid, HbA1c, lipid panel, sleep study (if snoring), and cardiologist clearance.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            3
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Pre-Op Liver Shrink Diet</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">10-day high-protein low-carb diet to reduce liver size and enhance surgical safety.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            4
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Laparoscopic Surgery</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Painless 60-minute keyhole procedure in modular OT with same-day walking.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            5
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Graduated Dietary Phases</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Structured transition from clear liquids to purees, soft foods, and healthy solid meals.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            6
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Lifelong Vitality</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Tremendous surge in energy, reversal of diabetes, and active lifestyle restored.</div>
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
          Meet our <em class="serif" style="color: #2E8B3C;">bariatric surgery team.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Leading bariatric surgeons, metabolic physicians, and clinical dietitians.
      </p>
    </div>

    <div data-g="team" data-reveal="1" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          BS
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Bariatric &amp; Metabolic Surgery
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Sukhda Bariatric Surgery Team</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">MS / DNB Surgery · Fellowships in Bariatric &amp; Metabolic Surgery</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Specialized bariatric surgeons performing laparoscopic sleeve gastrectomy, gastric bypass, and revision bariatric surgery.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Sleeve Gastrectomy</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Gastric Bypass</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Diabetes Reversal</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Metabolic Surgery</span>
          </div>
        </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          AM
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Internal Medicine &amp; Metabolic Endocrinology
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Dr. Amit Mehta</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">MD (AIIMS) · Founder &amp; Director</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Senior physician specializing in metabolic syndrome, diabetes remission, and cardiovascular risk reduction.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>AIIMS Alumnus</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Type-2 Diabetes</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Metabolic Health</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Internal Medicine</span>
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
            <span>Who is eligible for bariatric surgery?</span>
            <i id="faq_1_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_1" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            According to Indian consensus guidelines, candidates for bariatric surgery are individuals with a BMI of 35 or higher, or a BMI of 30 or higher with significant obesity-related co-morbidities like Type-2 Diabetes, severe hypertension, fatty liver, or obstructive sleep apnea.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_3')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>How much weight can I expect to lose after surgery?</span>
            <i id="faq_3_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_3" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Most patients lose 65% to 80% of their excess body weight within the first 12 to 18 months following surgery, provided they follow recommended nutritional and physical activity guidelines.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_5')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Is bariatric surgery covered under health insurance in India?</span>
            <i id="faq_5_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_5" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes. Under IRDAI regulations, bariatric surgery is recognized as a medically necessary treatment and is covered by health insurance policies for patients meeting BMI and co-morbidity criteria with prior authorization.
          </div>
        </div>
      </div>
      <div style="display: flex; flex-direction: column; gap: 14px;">
                <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_2')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>How does bariatric surgery cure or reverse Type-2 Diabetes?</span>
            <i id="faq_2_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_2" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Bariatric surgery triggers immediate hormonal changes in the gastrointestinal tract (increasing GLP-1 incretin hormones and reducing insulin resistance) within days of surgery, often allowing patients to discontinue insulin and diabetic pills before leaving the hospital.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_4')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>How long will I be in the hospital after bariatric surgery?</span>
            <i id="faq_4_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_4" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Because the procedure is performed laparoscopically through tiny keyhole incisions, patients walk within 4 to 6 hours after surgery and are comfortably discharged within 24 to 48 hours.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_6')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Will I have to take vitamin supplements after surgery?</span>
            <i id="faq_6_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_6" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes, daily multivitamin, calcium, and vitamin D supplements are prescribed to maintain optimal micronutrient levels and protect bone and muscle health during rapid weight loss.
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
          Start your journey to a healthier, <em class="serif" style="color: #7DCB6B;">lighter life.</em>
        </h2>
        <p style="font-size: 16px; line-height: 1.72; color: rgba(247,250,247,.8); max-width: 520px; margin: 0 0 32px;">
          Schedule a confidential bariatric and metabolic evaluation with our specialized team.
        </p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap;">
          <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 15px 28px; border-radius: 12px; font-size: 15px; font-weight: 700; box-shadow: 0 14px 30px -10px rgba(22,163,74,.7);">
            <i data-lucide="calendar-check" style="width: 17px; height: 17px;"></i>Book consultation
          </a>
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20would%20like%20to%20consult%20regarding%20Bariatric Surgery" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.24); color: #FFFFFF; padding: 15px 24px; border-radius: 12px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
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