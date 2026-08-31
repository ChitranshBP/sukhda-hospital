<?php 
$page_title = 'Psychiatry, Mental Health &amp; De-Addiction — Sukhda Hospital, Hisar';
$page_description = 'Comprehensive Psychiatry &amp; Mental Wellness at Sukhda Hospital, Hisar. Depression, anxiety, panic disorders, bipolar, OCD, de-addiction &amp; psychotherapy counseling.';
require dirname(__DIR__) . '/includes/header.php'; 
?>

<!-- ============================================================
     DEPARTMENT / SERVICE PAGE TEMPLATE: Psychiatry &amp; Mental Health
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
       1. HERO SECTION (Lighter Ocean Navy & Emerald Accents)
  ============================================================ -->
  <div style="position: relative; overflow: hidden; background: linear-gradient(140deg, #1B3E6B 0%, #25548B 48%, #3168A6 100%); color: #F7FAF7; padding: 72px 0 0;">
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 82% 22%, rgba(125,203,107,.24) 0%, transparent 55%), radial-gradient(circle at 12% 88%, rgba(62,169,75,.16) 0%, transparent 50%);"></div>
    <div data-grid-tex="1"></div>
    <div data-pad="1" style="position: relative; z-index: 2; max-width: 1240px; margin: 0 auto; padding: 0 32px;">
      <div data-g="hero" style="display: grid; grid-template-columns: 1.05fr .95fr; gap: 64px; align-items: center; padding-bottom: 64px;">
        
        <!-- Left Hero Content -->
        <div>
          <div style="display: flex; align-items: center; gap: 8px; font-size: 13.5px; font-weight: 600; margin-bottom: 22px;">
            <a href="/v1/" style="color: #7DCB6B;">Home</a> <span style="opacity: .4;">›</span>
            <a href="/v1/#specialities" style="color: rgba(247,250,247,.85);">Specialties</a><span style="opacity: .4;">›</span>
            <span style="color: #7DCB6B;">Psychiatry &amp; Mental Health</span>
          </div>
          
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.18); border: 1px solid rgba(125,203,107,.38); color: #7DCB6B; padding: 7px 16px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 26px;">
            <i data-lucide="smile" style="width: 15px; height: 15px;"></i>Centre for Mental Wellness &amp; Psychiatry
          </div>
          
          <h1 style="font-size: clamp(42px, 5.4vw, 66px); font-weight: 800; line-height: 1.04; letter-spacing: -0.038em; color: #FFFFFF; margin: 0 0 24px;">
            Compassionate, confidential care for <em class="serif" style="color: #7DCB6B;">mental wellness &</em> <em class="serif" style="color: #7DCB6B;">emotional healing.</em>
          </h1>
          
          <p style="font-size: 17.5px; line-height: 1.72; color: rgba(247,250,247,.9); max-width: 540px; margin: 0 0 36px;">
            Holistic clinical psychiatric evaluations, evidence-based pharmacotherapy, Cognitive Behavioral Therapy (CBT), addiction de-addiction programs, and supportive counseling in a stigma-free, confidential environment.
          </p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 38px;">
            <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; box-shadow: 0 16px 34px -12px rgba(22,163,74,.75);">
              <i data-lucide="calendar-check" style="width: 18px; height: 18px;"></i>Book confidential consult
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.1); border: 1px solid rgba(255,255,255,.3); color: #FFFFFF; padding: 16px 28px; border-radius: 13px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
              <i data-lucide="phone" style="width: 18px; height: 18px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
          </div>
          
          <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap; font-size: 13px; font-weight: 500; color: rgba(247,250,247,.78);">
            <span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>100% Confidential Consultations</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Evidence-Based Pharmacotherapy</span><span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,.3);"></span><span style="display: inline-flex; align-items: center; gap: 7px;"><i data-lucide="badge-check" style="width: 16px; height: 16px; color: #7DCB6B;"></i>Certified Clinical Psychotherapy</span>
          </div>
        </div>

        <!-- Right Hero Visual Card -->
        <div style="position: relative;">
          <div style="position: relative; border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,.2); box-shadow: 0 28px 60px -20px rgba(0,0,0,.45);">
            <img src="/assets/images/doctor-consult.jpg" alt="Psychiatry &amp; Mental Health" style="width: 100%; height: 420px; object-fit: cover; display: block;">
            <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(20,48,84,.88) 100%);"></div>
            
            <div style="position: absolute; top: 18px; right: 18px; background: rgba(20,48,84,.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,.22); color: #FFFFFF; padding: 6px 14px; border-radius: 999px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px;">
              <span style="width: 7px; height: 7px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 3px rgba(125,203,107,.35);"></span>
              Stigma-Free Care
            </div>
            
            <div style="position: absolute; bottom: 22px; left: 22px; right: 22px; background: rgba(20,48,84,.88); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.2); border-radius: 16px; padding: 16px 18px; display: flex; align-items: center; gap: 14px;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: linear-gradient(135deg, #16A34A, #15803D); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #FFFFFF;">
                <i data-lucide="smile" style="width: 22px; height: 22px;"></i>
              </div>
              <div>
                <div style="font-size: 14px; font-weight: 800; color: #FFFFFF; line-height: 1.25;">Holistic Mind &amp; Wellness</div>
                <div style="font-size: 12px; color: rgba(247,250,247,.8); margin-top: 2px;">Confidential treatment for depression, anxiety, sleep issues &amp; addiction</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- 4 Stats Strip -->
    <div style="border-top: 1px solid rgba(255,255,255,.16); background: rgba(22,54,94,.42); backdrop-filter: blur(8px);">
      <div data-pad="1" style="max-width: 1240px; margin: 0 auto; padding: 0 32px;">
        <div data-g="stats" style="display: grid; grid-template-columns: repeat(4, 1fr);">
                  <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">10,000+</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Patients supported to wellness</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">100%</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Confidential &amp; stigma-free</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          <div data-statline="1" style="position: absolute; right: 0; top: 22%; bottom: 22%; width: 1px; background: rgba(255,255,255,.14);"></div>
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">24×7</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Emergency psychiatric crisis support</div>
        </div>        <div style="padding: 26px 28px; position: relative;">
          
          <div style="font-size: 30px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">98.5%</div>
          <div style="font-size: 12.5px; color: rgba(247,250,247,.62); margin-top: 8px; font-weight: 500;">Clinical recovery &amp; stability rate</div>
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
          <i data-lucide="stethoscope" style="width: 14px; height: 14px;"></i>Department of Psychiatry
        </div>
        
        <h2 style="font-size: clamp(32px, 3.8vw, 46px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 22px;">
          Healing the mind, <em class="serif" style="color: #2E8B3C;">restoring balance and happiness.</em>
        </h2>
        
        <p style="font-size: 16.5px; line-height: 1.75; color: #2A5288; margin: 0 0 20px;">
          The Department of Psychiatry and Behavioral Health at Sukhda Hospital is committed to providing compassionate, evidence-based medical and psychological care for emotional, behavioral, and psychiatric conditions.
        </p>
        
        <div style="border-left: 3px solid #2E8B3C; padding: 4px 0 4px 18px; margin: 24px 0 28px; background: rgba(46,139,60,.04); border-radius: 0 8px 8px 0;">
          <p style="margin: 0; font-size: 15.5px; line-height: 1.68; color: #12305F; font-weight: 600;">
            &quot;Mental health is just as vital as physical health. Seeking help is an act of profound courage, self-respect, and healing.&quot;
          </p>
          <span style="display: block; font-size: 12.5px; color: #5B6480; margin-top: 6px; font-weight: 500;">— Sukhda Mental Wellness Division</span>
        </div>

        <p style="font-size: 15.5px; line-height: 1.75; color: #5B6480; margin: 0 0 36px;">
          Our team of psychiatrists, clinical psychologists, and counselors works collaboratively to diagnose and treat mood disorders, severe anxiety, panic attacks, obsessive-compulsive disorder (OCD), sleep disorders, and substance addictions.
        </p>

        <!-- 4 Highlights Grid -->
        <div data-g="quad" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                    <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="smile" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Mood &amp; Anxiety Clinic</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Specialized protocols for clinical depression, generalized anxiety, panic attacks, and phobias</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="activity" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">De-Addiction Centre</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Medical detoxification and psychological rehabilitation for alcohol, opioid, and tobacco dependence</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="shield-check" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Psychotherapy &amp; CBT</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Cognitive Behavioral Therapy, stress management, and family relationship counseling</div>
          </div>          <div style="background: #F7FAF7; border: 1px solid #E6EFE6; border-radius: 16px; padding: 22px;">
            <div style="width: 40px; height: 40px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
              <i data-lucide="heart-pulse" style="width: 20px; height: 20px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 15px; font-weight: 700; color: #12305F; margin-bottom: 6px;">Child &amp; Adolescent Guidance</div>
            <div style="font-size: 13.5px; line-height: 1.6; color: #5B6480;">Assessment and behavioral therapy for ADHD, autism spectrum, exam stress, and screen addiction</div>
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
          Psychiatric & <em class="serif" style="color: #2E8B3C;">psychological services.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Integrated medical, behavioral, and therapeutic modalities tailored to each individual.
      </p>
    </div>

    <div data-g="c3" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94;">
            <i data-lucide="smile" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">01</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Depression &amp; Mood Disorder Care</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Comprehensive diagnosis and treatment for major depressive disorder, persistent low mood, bipolar disorder, and dysthymia using modern medications and therapy.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Modern SSRI/SNRI medications with minimal side effects</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Management of treatment-resistant depression</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Bipolar affective disorder mood stabilization protocols</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0F4F94; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Post-partum depression and grief counseling</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">02</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Anxiety, Panic &amp; OCD Management</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Structured therapeutic and medical intervention for generalized anxiety disorder, acute panic attacks, social anxiety, and Obsessive-Compulsive Disorder.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Exposure and Response Prevention (ERP) for OCD</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Panic attack rapid abortive techniques and breathing therapy</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Cognitive reframing for catastrophic and intrusive thoughts</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Non-addictive anxiolytic medications for sustained calm</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48;">
            <i data-lucide="shield-alert" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">03</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">De-Addiction &amp; Substance Rehabilitation</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Safe, medically supervised detoxification and relapse prevention programs for alcohol, opioids (smack/tramadol), cannabis, and nicotine dependence.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Inpatient and outpatient medical detox protocols</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Management of acute alcohol withdrawal and delirium tremens</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Anti-craving medications (Naltrexone, Acamprosate, Baclofen)</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Relapse prevention counseling and 12-step support guidance</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #FFFBEB; border: 1px solid #FDE68A; color: #D97706;">
            <i data-lucide="shield-check" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">04</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Sleep Disorders &amp; Insomnia Clinic</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Holistic evaluation of chronic insomnia, poor sleep architecture, restless leg syndrome, and circadian rhythm disturbances.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>CBT for Insomnia (CBT-I) — the gold standard non-drug therapy</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Sleep hygiene restructuring and stimulus control protocols</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Non-habit-forming medical sleep stabilization</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Evaluation of underlying anxiety and obstructive sleep apnea triggers</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F5F3FF; border: 1px solid #DDD6FE; color: #7C3AED;">
            <i data-lucide="zap" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">05</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Psychosis &amp; Schizophrenia Management</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Compassionate clinical management of hallucinations, delusions, paranoia, and thought disorders using modern atypical antipsychotics.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Atypical second-generation antipsychotic therapies</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Long-acting injectable depot formulations for compliance</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Family psychoeducation and caregiver support programs</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Social and occupational reintegration assistance</span>
            </li>
        </ul>
      </div>      <div data-treat="1" style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 32px 28px; display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
          <span style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: #F0FDFA; border: 1px solid #99F6E4; color: #0D9488;">
            <i data-lucide="heart-handshake" style="width: 22px; height: 22px;"></i>
          </span>
          <span style="font-size: 12px; font-weight: 800; color: #2E8B3C; background: #EAF3EA; padding: 4px 10px; border-radius: 999px; letter-spacing: .08em;">06</span>
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Child, Adolescent &amp; Student Wellness</div>
        <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 20px; flex-grow: 1;">Specialized behavioral and psychological support for ADHD, autism spectrum disorders, academic performance anxiety, and adolescent relationship stress.</p>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 9px; border-top: 1px solid #E6EFE6; padding-top: 18px;">
                      <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Attention Deficit Hyperactivity Disorder (ADHD) workup and therapy</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Behavioral modification and parent management training</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Exam phobia, career stress, and screen addiction counseling</span>
            </li>            <li style="display: flex; align-items: flex-start; gap: 9px; font-size: 13.5px; line-height: 1.55; color: #2A5288;">
              <i data-lucide="check" style="width: 15px; height: 15px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Adolescent identity and emotional regulation support</span>
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
          Mental health conditions <em class="serif" style="color: #2E8B3C;">treated.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Confidential care across all spectrums of psychological and psychiatric health.
      </p>
    </div>

    <div data-g="cangrid" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="smile" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Mood &amp; Anxiety Disorders</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Emotional &amp; stress conditions</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Major Depressive Disorder (MDD) &amp; Low Energy</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Generalized Anxiety Disorder (GAD) &amp; Restlessness</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Panic Disorder &amp; Sudden Severe Palpitations</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Obsessive-Compulsive Disorder (OCD &amp; Intrusive Thoughts)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Bipolar I &amp; II Affective Disorders (Mania/Depression)</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Post-Traumatic Stress Disorder (PTSD) &amp; Trauma</span>
            </div>
        </div>
        
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="shield-alert" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Addiction &amp; Sleep Disorders</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Substance &amp; circadian health</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Alcohol Dependence &amp; Heavy Binge Drinking</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Opioid, Smack &amp; Prescription Drug Addiction</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Cannabis (Bhang/Ganja) &amp; Nicotine Addiction</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Chronic Insomnia &amp; Difficulty Falling Asleep</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Frequent Nighttime Awakening &amp; Non-Restorative Sleep</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Restless Legs Syndrome (RLS) &amp; Night Terrors</span>
            </div>
        </div>
                  <div style="margin-top: 20px; padding: 14px 16px; border-radius: 12px; background: #F0FDF4; border: 1px dashed #86EFAC; font-size: 12.5px; color: #166534; line-height: 1.6;">
            <strong>100% Privacy:</strong> All consultations, patient notes, and records are held in strict medical confidentiality.
          </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 20px; padding: 30px 26px;">
        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 18px; border-bottom: 1px solid #E6EFE6;">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Psychotic &amp; Behavioral</div>
            <div style="font-size: 12.5px; color: #5B6480; font-weight: 500;">Thought &amp; developmental</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
                      <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Schizophrenia &amp; Schizoaffective Disorder</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Delusional Disorder &amp; Paranoia</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Acute Transient Psychotic Episodes</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>ADHD &amp; Conduct Issues in Children</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Autism Spectrum Developmental Support</span>
            </div>            <div data-canrow="1" style="display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; font-size: 13.5px; font-weight: 600; color: #12305F; background: transparent; transition: background .15s ease;">
              <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
              <span>Dementia, Alzheimer’s &amp; Geriatric Agitation</span>
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
            Why trust Sukhda for <em class="serif" style="color: #7DCB6B;">mental healthcare.</em>
          </h2>
        </div>
        <p style="font-size: 16px; line-height: 1.75; color: rgba(247,250,247,.78); margin: 0;">
          Compassionate psychiatrists, zero-judgment environment, and proven therapeutic results.
        </p>
      </div>

      <div data-g="c3" data-reveal="1" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="smile" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Senior MD Psychiatrists</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Expert clinical psychiatrists with extensive experience in modern, rational psychopharmacology.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="shield-check" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Absolute Medical Confidentiality</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Private consulting rooms and secure records ensuring total discretion for you and your family.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="activity" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Integrated Psychotherapy</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Cognitive behavioral therapy, mindfulness, and counseling combined with medications for long-term cure.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="heart-pulse" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">24×7 Emergency Psychiatric Cover</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Emergency triage for acute panic, severe agitation, suicidal crisis, and alcohol withdrawal in our ICU.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="users" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Compassionate Family Guidance</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Involving family members with structured psychoeducation to foster a supportive home recovery environment.</div>
        </div>        <div data-why="1" style="background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.11); border-radius: 18px; padding: 28px; position: relative; overflow: hidden; transition: transform .25s ease, background .25s ease, border-color .25s ease;">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="indian-rupee" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Affordable &amp; Empaneled</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.72);">Inpatient psychiatric and de-addiction admissions covered under insurance and government healthcare panels.</div>
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
          Your mental wellness & <em class="serif" style="color: #2E8B3C;">recovery pathway.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        A gentle, supportive, step-by-step roadmap back to peace of mind and clarity.
      </p>
    </div>

    <div data-g="j6" data-reveal="1" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px;">
              <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            1
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Confidential Consultation</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Comprehensive discussion of symptoms, life stressors, sleep, and emotional patterns.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            2
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Medical &amp; Biochemical Check</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Thyroid, vitamin B12, vitamin D, and metabolic check to rule out physical causes of mood changes.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            3
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Personalized Care Plan</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Tailored combination of modern medications, psychotherapy goals, and sleep restoration.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            4
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Cognitive Therapy Sessions</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Regular counseling sessions to build coping mechanisms and resolve thought triggers.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            5
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Medication Optimization</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Careful monitoring to ensure maximal emotional stability with minimal or zero side effects.</div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 18px; padding: 26px; display: flex; flex-direction: column; position: relative;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; margin-bottom: 18px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
            6
          </div>
          <div style="font-size: 16px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 8px;">Renewed Happiness &amp; Life</div>
          <div style="font-size: 13px; line-height: 1.65; color: #5B6480;">Restored confidence, productive career, fulfilling relationships, and vibrant mental wellness.</div>
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
          Meet our <em class="serif" style="color: #2E8B3C;">psychiatry faculty.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Leading psychiatrists, clinical psychologists, and de-addiction specialists.
      </p>
    </div>

    <div data-g="team" data-reveal="1" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
            <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          PS
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Psychiatry &amp; De-Addiction Medicine
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Sukhda Psychiatry &amp; Mental Health Team</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">MD / DNB Psychiatry · Clinical Psychologists</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Senior psychiatrists providing evidence-based medical treatments for depression, anxiety, OCD, bipolar disorder, and substance dependence.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Depression &amp; Anxiety</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>CBT Therapy</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>De-Addiction</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Sleep Medicine</span>
          </div>
        </div>
      </div>      <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 22px; padding: 32px; display: flex; gap: 24px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 72px; height: 72px; border-radius: 18px; background: linear-gradient(135deg, #0B1E3C, #1D4E7A); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          AM
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Internal Medicine &amp; Neuropsychiatric Health
          </div>
          <div style="font-size: 21px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Dr. Amit Mehta</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 12px;">MD (AIIMS) · Founder &amp; Director</div>
          <p style="font-size: 14px; line-height: 1.68; color: #5B6480; margin: 0 0 16px;">Comprehensive evaluation of metabolic, hormonal, and systemic factors affecting mood and neurological well-being.</p>
          <div style="display: flex; gap: 8px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>AIIMS Alumnus</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Metabolic Health</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Internal Medicine</span><span style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 4px 10px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 12px; height: 12px;"></i>Preventive Care</span>
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
            <span>Are psychiatric medications addictive or habit-forming?</span>
            <i id="faq_1_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_1" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Most modern psychiatric medications, such as antidepressants (SSRIs/SNRIs) and mood stabilizers, are completely non-addictive. They work by gently restoring natural chemical neurotransmitter balance in the brain. Sleeping aids are used only temporarily under strict medical supervision.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_3')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>How long does treatment for depression or anxiety usually last?</span>
            <i id="faq_3_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_3" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Most patients begin noticing significant improvements within 2 to 4 weeks of starting therapy. For a first episode of depression or anxiety, medications are typically maintained for 6 to 9 months to solidify recovery and prevent relapse before being gradually tapered.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_5')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Will anyone find out about my psychiatric treatment?</span>
            <i id="faq_5_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_5" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            No. Medical confidentiality is strictly protected by law. Your medical history, consultations, and prescriptions are kept completely private and confidential.
          </div>
        </div>
      </div>
      <div style="display: flex; flex-direction: column; gap: 14px;">
                <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_2')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>How do I know if I need to see a psychiatrist or a psychologist?</span>
            <i id="faq_2_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_2" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            A psychiatrist is a medical doctor (MD) who can diagnose conditions, order lab tests, and prescribe medications. A psychologist provides talk therapy and counseling. At Sukhda Hospital, both work together to give you the most comprehensive combined care.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_4')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Is medical detoxification safe for severe alcohol addiction?</span>
            <i id="faq_4_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_4" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes, medical detox is the safest way to quit alcohol. It prevents dangerous withdrawal complications like tremors, seizures, and delirium tremens through safe medications, IV fluids, and vitamins under close medical monitoring.
          </div>
        </div>        <div style="background: #FFFFFF; border: 1px solid #DCE6DC; border-radius: 16px; overflow: hidden;">
          <button data-faqq="1" onclick="toggleFaq('faq_6')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer;">
            <span>Are mental health admissions covered under health insurance in India?</span>
            <i id="faq_6_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_6" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes! Under the Mental Healthcare Act and IRDAI directives, health insurance companies in India are mandated to cover hospital admissions for psychiatric disorders and mental illnesses on par with physical illnesses.
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
          Take the first step toward <em class="serif" style="color: #7DCB6B;">peace of mind.</em>
        </h2>
        <p style="font-size: 16px; line-height: 1.72; color: rgba(247,250,247,.8); max-width: 520px; margin: 0 0 32px;">
          Schedule a confidential consultation with our psychiatry and mental wellness team today.
        </p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap;">
          <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 15px 28px; border-radius: 12px; font-size: 15px; font-weight: 700; box-shadow: 0 14px 30px -10px rgba(22,163,74,.7);">
            <i data-lucide="calendar-check" style="width: 17px; height: 17px;"></i>Book consultation
          </a>
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20would%20like%20to%20consult%20regarding%20Psychiatry &amp; Mental Health" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.24); color: #FFFFFF; padding: 15px 24px; border-radius: 12px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
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