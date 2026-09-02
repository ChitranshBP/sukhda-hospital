<?php 
$page_title = 'Anaesthesia & Comprehensive Pain Management — Sukhda Hospital, Hisar';
$page_description = 'Advanced Anaesthesia & Interventional Pain Management at Sukhda Hospital, Hisar. Modern ultrasound-guided nerve blocks, painless delivery epidurals, fluoroscopy spine clinic & 24x7 OT safety.';
require dirname(__DIR__) . '/includes/header.php'; 
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;1,6..72,400;1,6..72,500;1,6..72,600&display=swap" rel="stylesheet">

<style>
/* ================================================================
   SUKHDA COMPREHENSIVE SERVICE PAGE: ANAESTHESIA & PAIN MEDICINE
   Aesthetic: Luminous Royal Sapphire Navy (#183C66 -> #2D6BAE) + Vibrant Emerald (#16A34A / #7DCB6B)
   Visual Media: High-relevance clinical imagery, dedicated service photography, zero clutter
================================================================ */

:root {
  --pain-bg:          #F7FAF7;
  --pain-card-bg:     #FFFFFF;
  --pain-royal-900:   #102842;
  --pain-royal-800:   #183C66;
  --pain-royal-700:   #235A94;
  --pain-royal-600:   #2D6BAE;
  --pain-green-800:   #14532D;
  --pain-green-700:   #15803D;
  --pain-green-600:   #16A34A;
  --pain-green-500:   #22C55E;
  --pain-green-400:   #7DCB6B;
  --pain-green-100:   #DCFCE7;
  --pain-green-50:    #F0FDF4;
  --pain-navy-heading:#12305F;
  --pain-text-body:   #334155;
  --pain-text-muted:  #5B6480;
  --pain-border:      #DCE6DC;
  --pain-border-light:#E6EFE6;
  --pain-radius-xl:   24px;
  --pain-radius-lg:   18px;
  --pain-radius-md:   12px;
}

.pain-page-container {
  font-family: 'Plus Jakarta Sans', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  background: var(--pain-bg);
  color: var(--pain-text-body);
  line-height: 1.65;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}

.pain-page-container a { text-decoration: none; color: inherit; }

.pain-page-container em.serif {
  font-family: 'Newsreader', Georgia, serif !important;
  font-style: italic !important;
  font-weight: 400 !important;
}

/* Micro-interactions & animations */
@keyframes liveDotPulse {
  0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(125, 203, 107, 0.8); }
  70% { transform: scale(1); box-shadow: 0 0 0 9px rgba(125, 203, 107, 0); }
  100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(125, 203, 107, 0); }
}

.pain-live-indicator {
  width: 8px; height: 8px;
  background: #7DCB6B;
  border-radius: 50%;
  display: inline-block;
  animation: liveDotPulse 2s infinite;
}

/* Modality Card with Media Header */
.pain-card-modality {
  background: var(--pain-card-bg);
  border: 1px solid var(--pain-border);
  border-radius: 20px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  position: relative;
  transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
}

.pain-card-modality:hover {
  transform: translateY(-6px);
  border-color: var(--pain-green-400);
  box-shadow: 0 22px 48px -18px rgba(24, 60, 102, 0.2);
}

.pain-card-media-wrap {
  position: relative;
  height: 195px;
  width: 100%;
  overflow: hidden;
  background: #183C66;
}

.pain-card-media-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.pain-card-modality:hover .pain-card-media-wrap img {
  transform: scale(1.05);
}

.pain-card-media-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(16,40,66,0.15) 0%, rgba(16,40,66,0.85) 100%);
}

.pain-card-body {
  padding: 24px 26px 28px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

/* Numbered Pill */
.pain-step-num {
  font-size: 11.5px;
  font-weight: 800;
  color: #16A34A;
  background: #EAF3EA;
  padding: 4px 10px;
  border-radius: 999px;
  letter-spacing: 0.06em;
}

/* Quick Navigation Links */
.pain-nav-link {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 11px 0;
  border-bottom: 1px solid #F1F5F9;
  font-size: 13.5px;
  font-weight: 600;
  color: #2A5288;
  transition: all 0.2s ease;
}

.pain-nav-link:hover {
  color: #16A34A;
  padding-left: 6px;
}

.pain-nav-link:hover .nav-arrow {
  color: #16A34A;
  transform: translateX(3px);
}

.nav-arrow {
  margin-left: auto;
  color: #BFDCBF;
  transition: transform 0.2s ease, color 0.2s ease;
}

/* Condition List Rows */
.pain-condition-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 9px 12px;
  border-radius: 8px;
  font-size: 13.5px;
  font-weight: 600;
  color: #12305F;
  transition: background 0.15s ease, padding-left 0.15s ease;
}

.pain-condition-item:hover {
  background: #F0FDF4;
  padding-left: 16px;
}

/* Why Choose Sukhda Cards */
.pain-advantage-card {
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 20px;
  padding: 26px;
  position: relative;
  overflow: hidden;
  transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease;
}

.pain-advantage-card:hover {
  transform: translateY(-4px);
  background: rgba(255, 255, 255, 0.1);
  border-color: rgba(125, 203, 107, 0.4);
}

.pain-advantage-card::after {
  content: '';
  position: absolute; left: 0; right: 0; bottom: 0; height: 2px;
  background: linear-gradient(90deg, #7DCB6B, transparent);
  transform: scaleX(0); transform-origin: left;
  transition: transform 0.35s ease;
}

.pain-advantage-card:hover::after { transform: scaleX(1); }

/* Interactive Navigator Tab Button */
.pain-tab-selector {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 15px 18px;
  border-radius: 14px;
  background: #FFFFFF;
  border: 1px solid var(--pain-border);
  color: #475569;
  font-weight: 700;
  font-size: 14px;
  cursor: pointer;
  transition: all 0.25s ease;
  width: 100%;
  text-align: left;
}

.pain-tab-selector:hover {
  background: #F0FDF4;
  border-color: #BBF7D0;
  color: #16A34A;
  transform: translateX(4px);
}

.pain-tab-selector.active {
  background: linear-gradient(135deg, #16A34A 0%, #15803D 100%);
  color: #FFFFFF;
  border-color: transparent;
  box-shadow: 0 12px 28px -10px rgba(22, 163, 74, 0.6);
}

.pain-tab-selector.active .tab-icon-frame {
  background: rgba(255, 255, 255, 0.22);
  color: #FFFFFF;
}

.tab-icon-frame {
  width: 38px; height: 38px;
  border-radius: 10px;
  background: #EAF3EA;
  color: #16A34A;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: all 0.25s ease;
}

/* Comparison Table */
.pain-table-wrap {
  background: #FFFFFF;
  border: 1px solid var(--pain-border);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 8px 30px -10px rgba(0,0,0,0.04);
}

.pain-table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
  font-size: 14px;
}

.pain-table th {
  padding: 16px 22px;
  font-weight: 800;
  font-size: 13.5px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.pain-table td {
  padding: 15px 22px;
  border-top: 1px solid #F1F5F9;
  vertical-align: middle;
}

.pain-table tr:hover td {
  background: #F8FAFC;
}

/* Responsive Grids */
@media (max-width: 1040px) {
  .pain-g-hero, .pain-g-about, .pain-g-nav, .pain-g-head, .pain-g-faq, .pain-g-cta, .pain-g-team, .pain-g-myth {
    grid-template-columns: 1fr !important;
  }
  .pain-g-3col { grid-template-columns: repeat(2, 1fr) !important; }
  .pain-g-4col { grid-template-columns: repeat(2, 1fr) !important; }
  .pain-g-6col { grid-template-columns: repeat(3, 1fr) !important; }
}

@media (max-width: 720px) {
  .pain-g-3col, .pain-g-4col, .pain-g-6col { grid-template-columns: 1fr !important; }
  .pain-g-stats { grid-template-columns: 1fr 1fr !important; }
  .pain-container-pad { padding-left: 20px !important; padding-right: 20px !important; }
  .pain-table-wrap { overflow-x: auto; }
}
</style>

<div class="pain-page-container">

  <!-- ============================================================
       1. HERO SECTION (100vh Viewport Fit with Real OT Showcase)
  ============================================================ -->
  <section style="min-height: calc(100vh - 76px); display: flex; flex-direction: column; justify-content: space-between; position: relative; overflow: hidden; background: linear-gradient(135deg, #183C66 0%, #235A94 50%, #2D6BAE 100%); color: #F7FAF7; padding: 18px 0 0;">
    <!-- Ambient Radial Lighting Mesh & Precision Grid Texture -->
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 85% 25%, rgba(125,203,107,0.22) 0%, transparent 55%), radial-gradient(circle at 15% 80%, rgba(56,189,248,0.18) 0%, transparent 50%);"></div>
    <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px); background-size: 48px 48px; opacity: 0.5;"></div>

    <div class="pain-container-pad" style="max-width: 1240px; width: 100%; margin: 0 auto; padding: 0 32px; position: relative; z-index: 2; flex-grow: 1; display: flex; flex-direction: column; justify-content: center;">
      
      <!-- Top Breadcrumbs & Active Status Indicator -->
      <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; margin-bottom: 14px;">
        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; color: rgba(247, 250, 247, 0.75);">
          <a href="/v1/" style="color: #7DCB6B; transition: color 0.2s;">Home</a>
          <span style="opacity: 0.4;">›</span>
          <a href="/v1/#specialities" style="color: rgba(247, 250, 247, 0.88);">Specialties</a>
          <span style="opacity: 0.4;">›</span>
          <span style="color: #7DCB6B; font-weight: 700;">Anaesthesia &amp; Pain Management</span>
        </div>

        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(16, 40, 66, 0.75); border: 1px solid rgba(125, 203, 107, 0.35); padding: 5px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; color: #FFFFFF; backdrop-filter: blur(10px);">
          <span class="pain-live-indicator"></span>
          24×7 Emergency Anaesthesia &amp; Labor Epidural Active
        </div>
      </div>

      <!-- Hero 2-Column Grid -->
      <div class="pain-g-hero" style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 40px; align-items: center; padding-bottom: 18px;">
        
        <!-- Left Hero Copy -->
        <div>
          <div style="display: inline-flex; align-items: center; gap: 7px; background: rgba(125, 203, 107, 0.16); border: 1px solid rgba(125, 203, 107, 0.38); color: #7DCB6B; padding: 5px 14px; border-radius: 999px; font-size: 11px; font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 12px;">
            <i data-lucide="syringe" style="width: 14px; height: 14px;"></i>
            Centre for Anaesthesia &amp; Interventional Pain Care
          </div>

          <h1 style="font-size: clamp(28px, 3.3vw, 46px); font-weight: 800; line-height: 1.08; letter-spacing: -0.035em; color: #FFFFFF; margin: 0 0 12px;">
            Advanced surgical anaesthesia &amp; <br><em class="serif" style="color: #7DCB6B;">compassionate pain relief.</em>
          </h1>

          <p style="font-size: 14.5px; line-height: 1.58; color: rgba(247, 250, 247, 0.92); margin: 0 0 20px; max-width: 530px;">
            Comprehensive surgical anaesthesia across modular OTs, ultrasound-guided regional nerve blocks for painless surgery, labor epidural analgesia, and interventional chronic pain therapies for back pain, sciatica, and cancer pain.
          </p>

          <!-- CTAs -->
          <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 20px;">
            <a href="#navigator" style="display: inline-flex; align-items: center; gap: 9px; background: linear-gradient(135deg, #16A34A 0%, #15803D 100%); color: #FFFFFF; padding: 12px 22px; border-radius: 12px; font-size: 14px; font-weight: 700; box-shadow: 0 14px 28px -10px rgba(22, 163, 74, 0.75); transition: transform 0.2s;">
              <i data-lucide="calendar-check" style="width: 17px; height: 17px;"></i>
              Book Pain Clinic Consult
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: inline-flex; align-items: center; gap: 9px; background: rgba(255, 255, 255, 0.12); border: 1px solid rgba(255, 255, 255, 0.28); color: #FFFFFF; padding: 12px 20px; border-radius: 12px; font-size: 14px; font-weight: 700; backdrop-filter: blur(6px); transition: background 0.2s;">
              <i data-lucide="phone" style="width: 17px; height: 17px; color: #7DCB6B;"></i>
              <?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
          </div>

          <!-- Trust Badges -->
          <div style="display: flex; align-items: center; gap: 14px; flex-wrap: wrap; font-size: 12px; font-weight: 600; color: rgba(247, 250, 247, 0.85);">
            <span style="display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="badge-check" style="width: 14px; height: 14px; color: #7DCB6B;"></i>Ultrasound-Guided Blocks</span>
            <span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,0.35);"></span>
            <span style="display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="badge-check" style="width: 14px; height: 14px; color: #7DCB6B;"></i>24×7 Labor Epidural</span>
            <span style="width: 4px; height: 4px; border-radius: 50%; background: rgba(247,250,247,0.35);"></span>
            <span style="display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="badge-check" style="width: 14px; height: 14px; color: #7DCB6B;"></i>Fluoroscopy Pain Clinic</span>
          </div>
        </div>

        <!-- Right Visual Showcase Card (Real Sukhda OT Suite) -->
        <div style="position: relative;">
          <div style="position: relative; border-radius: 20px; overflow: hidden; border: 1px solid rgba(255,255,255,.22); box-shadow: 0 24px 50px -18px rgba(0,0,0,.45);">
            <img src="/assets/images/infra/operation-theatre.jpg" alt="Anaesthesia &amp; Operation Theatre at Sukhda" style="width: 100%; height: 280px; object-fit: cover; display: block;">
            <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(16,40,66,.92) 100%);"></div>
            
            <div style="position: absolute; top: 12px; right: 12px; background: rgba(16,40,66,.88); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,.22); color: #FFFFFF; padding: 5px 12px; border-radius: 999px; font-size: 11px; font-weight: 700; display: flex; align-items: center; gap: 6px;">
              <span style="width: 6px; height: 6px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 3px rgba(125,203,107,.35);"></span>
              Advanced Modular OT
            </div>
            
            <div style="position: absolute; bottom: 12px; left: 12px; right: 12px; background: rgba(16,40,66,.9); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.2); border-radius: 14px; padding: 10px 14px; display: flex; align-items: center; gap: 12px;">
              <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #FFFFFF; box-shadow: 0 6px 14px -3px rgba(22,163,74,0.5);">
                <i data-lucide="syringe" style="width: 18px; height: 18px;"></i>
              </div>
              <div>
                <div style="font-size: 13px; font-weight: 800; color: #FFFFFF; line-height: 1.25;">Interventional Pain Relief</div>
                <div style="font-size: 11px; color: rgba(247,250,247,.82); margin-top: 1px;">Targeted nerve blocks, epidurals &amp; radiofrequency ablation</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- 4 Stats Metric Bar (Always in View) -->
    <div style="border-top: 1px solid rgba(255,255,255,.16); background: rgba(16,40,66,.55); backdrop-filter: blur(8px);">
      <div class="pain-container-pad" style="max-width: 1240px; margin: 0 auto; padding: 0 32px;">
        <div class="pain-g-stats" style="display: grid; grid-template-columns: repeat(4, 1fr);">
          
          <div style="padding: 14px 18px; position: relative;">
            <div style="position: absolute; right: 0; top: 20%; bottom: 20%; width: 1px; background: rgba(255,255,255,.14);"></div>
            <div style="font-size: 22px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">15,000<span style="color: #7DCB6B;">+</span></div>
            <div style="font-size: 11px; color: rgba(247,250,247,.72); margin-top: 4px; font-weight: 500;">Safe procedures delivered</div>
          </div>

          <div style="padding: 14px 18px; position: relative;">
            <div style="position: absolute; right: 0; top: 20%; bottom: 20%; width: 1px; background: rgba(255,255,255,.14);"></div>
            <div style="font-size: 22px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">24<span style="color: #7DCB6B;">×</span>7</div>
            <div style="font-size: 11px; color: rgba(247,250,247,.72); margin-top: 4px; font-weight: 500;">Emergency on-site team</div>
          </div>

          <div style="padding: 14px 18px; position: relative;">
            <div style="position: absolute; right: 0; top: 20%; bottom: 20%; width: 1px; background: rgba(255,255,255,.14);"></div>
            <div style="font-size: 22px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">99.9<span style="color: #7DCB6B; font-size: 16px;">%</span></div>
            <div style="font-size: 11px; color: rgba(247,250,247,.72); margin-top: 4px; font-weight: 500;">Safety record benchmark</div>
          </div>

          <div style="padding: 14px 18px;">
            <div style="font-size: 22px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.03em; line-height: 1;">100<span style="color: #7DCB6B; font-size: 16px;">%</span></div>
            <div style="font-size: 11px; color: rgba(247,250,247,.72); margin-top: 4px; font-weight: 500;">USG precision blocks</div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
       2. ABOUT THE DEPARTMENT & CLINICAL HIGHLIGHTS
  ============================================================ -->
  <section class="pain-container-pad" style="max-width: 1240px; margin: 0 auto; padding: 88px 32px 0;">
    <div class="pain-g-about" style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 56px; align-items: flex-start;">
      
      <!-- Left Column: Copy & 4 Highlights -->
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 20px;">
          <i data-lucide="stethoscope" style="width: 14px; height: 14px;"></i>Anaesthesia &amp; Pain Medicine
        </div>
        
        <h2 style="font-size: clamp(30px, 3.6vw, 44px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 20px;">
          Patient safety, comfort, and <em class="serif" style="color: #2E8B3C;">freedom from pain.</em>
        </h2>
        
        <p style="font-size: 16px; line-height: 1.72; color: #2A5288; margin: 0 0 20px;">
          The Department of Anaesthesia and Pain Management at Sukhda Hospital provides state-of-the-art perioperative care for all surgical specialties, ensuring maximum safety during surgery and exceptional pain relief afterwards.
        </p>

        <!-- Department Photo Card with Live Badge -->
        <div style="position: relative; border-radius: 18px; overflow: hidden; margin-bottom: 26px; box-shadow: 0 14px 34px -14px rgba(24,60,102,0.25);">
          <img src="/assets/images/doctor-consult.jpg" onerror="this.onerror=null;this.src='/assets/images/infra/operation-theatre.jpg'" alt="Clinical Consultation &amp; Pre-Anaesthesia Evaluation" style="width: 100%; height: 220px; object-fit: cover; display: block;">
          <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 30%, rgba(16,40,66,0.88) 100%);"></div>
          <div style="position: absolute; bottom: 16px; left: 20px; right: 20px; display: flex; align-items: center; justify-content: space-between; color: #FFFFFF;">
            <div>
              <div style="font-size: 15px; font-weight: 800;">Specialist Pre-Anaesthesia (PAC) Clinic</div>
              <div style="font-size: 12.5px; color: rgba(247,250,247,0.85);">Cardiovascular, metabolic, and personalized anaesthetic planning</div>
            </div>
            <span style="background: rgba(125,203,107,0.25); border: 1px solid #7DCB6B; color: #7DCB6B; padding: 4px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">NABH Standards</span>
          </div>
        </div>
        
        <div style="border-left: 3px solid #2E8B3C; padding: 6px 0 6px 18px; margin: 0 0 28px; background: rgba(46,139,60,.05); border-radius: 0 10px 10px 0;">
          <p style="margin: 0; font-size: 15px; line-height: 1.68; color: #12305F; font-weight: 600;">
            &quot;Pain should never be an inevitable companion of illness or surgery. Modern interventional pain medicine can restore comfort and dignity.&quot;
          </p>
          <span style="display: block; font-size: 12px; color: #5B6480; margin-top: 6px; font-weight: 500;">— Sukhda Anaesthesia &amp; Pain Medicine Division</span>
        </div>

        <!-- 4 Highlights Grid -->
        <div class="pain-g-4col" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
          
          <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; padding: 20px; box-shadow: 0 4px 14px rgba(0,0,0,0.02);">
            <div style="width: 38px; height: 38px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
              <i data-lucide="syringe" style="width: 19px; height: 19px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 14.5px; font-weight: 700; color: #12305F; margin-bottom: 4px;">Ultrasound Nerve Blocks</div>
            <div style="font-size: 13px; line-height: 1.55; color: #5B6480;">Targeted peripheral nerve blocks for painless knee, hip, shoulder, and abdominal surgeries</div>
          </div>

          <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; padding: 20px; box-shadow: 0 4px 14px rgba(0,0,0,0.02);">
            <div style="width: 38px; height: 38px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
              <i data-lucide="baby" style="width: 19px; height: 19px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 14.5px; font-weight: 700; color: #12305F; margin-bottom: 4px;">Painless Labor Epidurals</div>
            <div style="font-size: 13px; line-height: 1.55; color: #5B6480;">24×7 labor analgesia ensuring comfortable, controlled normal childbirth</div>
          </div>

          <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; padding: 20px; box-shadow: 0 4px 14px rgba(0,0,0,0.02);">
            <div style="width: 38px; height: 38px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
              <i data-lucide="activity" style="width: 19px; height: 19px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 14.5px; font-weight: 700; color: #12305F; margin-bottom: 4px;">Chronic Pain Injections</div>
            <div style="font-size: 13px; line-height: 1.55; color: #5B6480;">Targeted fluoroscopy injections for sciatica, chronic back pain, and osteoarthritis</div>
          </div>

          <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; padding: 20px; box-shadow: 0 4px 14px rgba(0,0,0,0.02);">
            <div style="width: 38px; height: 38px; border-radius: 10px; background: #EAF3EA; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
              <i data-lucide="heart-pulse" style="width: 19px; height: 19px; color: #2E8B3C;"></i>
            </div>
            <div style="font-size: 14.5px; font-weight: 700; color: #12305F; margin-bottom: 4px;">Cancer Pain &amp; Palliative</div>
            <div style="font-size: 13px; line-height: 1.55; color: #5B6480;">Neurolytic blocks, celiac plexus blocks, and stepped WHO analgesic ladder therapies</div>
          </div>

        </div>
      </div>

      <!-- Right Column: Sticky Navigation Box & Emergency Help Card -->
      <div style="position: sticky; top: 92px; display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 20px; padding: 26px; box-shadow: 0 18px 44px -28px rgba(11,30,60,.25);">
          <div style="display: flex; align-items: center; gap: 10px; font-size: 16px; font-weight: 800; color: #12305F; margin-bottom: 14px; padding-bottom: 12px; border-bottom: 1px solid var(--pain-border-light);">
            <i data-lucide="list" style="width: 18px; height: 18px; color: #2E8B3C;"></i>What's on this page
          </div>
          <div style="display: flex; flex-direction: column;">
            <a href="#navigator" class="pain-nav-link">
              <i data-lucide="compass" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Interactive Pain Navigator
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#treatments" class="pain-nav-link">
              <i data-lucide="activity" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Treatments &amp; Modalities
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#conditions" class="pain-nav-link">
              <i data-lucide="shield-plus" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Conditions We Treat
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#compare" class="pain-nav-link">
              <i data-lucide="scale" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Intervention vs. Surgery
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#safety" class="pain-nav-link">
              <i data-lucide="cpu" style="width: 15px; height: 15px; color: #2E8B3C;"></i>The Safety Matrix
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#epidural-facts" class="pain-nav-link">
              <i data-lucide="baby" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Labor Epidural Truth
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#why" class="pain-nav-link">
              <i data-lucide="award" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Why Choose Sukhda
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#checklist" class="pain-nav-link">
              <i data-lucide="clipboard-check" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Patient PAC Checklist
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#journey" class="pain-nav-link">
              <i data-lucide="route" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Your Care Pathway
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#team" class="pain-nav-link">
              <i data-lucide="user-check" style="width: 15px; height: 15px; color: #2E8B3C;"></i>Specialist Faculty
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
            <a href="#faqs" class="pain-nav-link" style="border-bottom: none;">
              <i data-lucide="help-circle" style="width: 15px; height: 15px; color: #2E8B3C;"></i>FAQs
              <i data-lucide="arrow-up-right" class="nav-arrow" style="width: 14px; height: 14px;"></i>
            </a>
          </div>
        </div>

        <!-- 24x7 Helpline Card -->
        <div style="position: relative; overflow: hidden; background: linear-gradient(135deg, #183C66, #235A94); border-radius: 20px; padding: 26px; color: #F7FAF7; box-shadow: 0 16px 36px -15px rgba(24, 60, 102, 0.4);">
          <div style="position: absolute; top: -30px; right: -30px; width: 140px; height: 140px; border-radius: 50%; background: radial-gradient(circle, rgba(125,203,107,.28), transparent 70%);"></div>
          <div style="position: relative;">
            <div style="display: inline-flex; align-items: center; gap: 7px; font-size: 11px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; color: #7DCB6B; margin-bottom: 10px;">
              <span style="width: 7px; height: 7px; border-radius: 50%; background: #7DCB6B; box-shadow: 0 0 0 4px rgba(125,203,107,.2);"></span>Helpline open 24×7
            </div>
            <div style="font-size: 18px; font-weight: 800; margin-bottom: 6px;">Need clinical assistance?</div>
            <p style="margin: 0 0 18px; font-size: 13.5px; line-height: 1.6; color: rgba(247,250,247,.85);">Speak directly with our clinical coordinators for appointments, second opinions, or emergency care.</p>
            <a href="tel:<?= htmlspecialchars(str_replace('-', '', $HOSPITAL['phone'])) ?>" style="display: flex; align-items: center; justify-content: center; gap: 9px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 13px 16px; border-radius: 12px; font-size: 14.5px; font-weight: 700; box-shadow: 0 12px 24px -10px rgba(22,163,74,.6);">
              <i data-lucide="phone" style="width: 16px; height: 16px;"></i><?= htmlspecialchars($HOSPITAL['phone']) ?>
            </a>
            <div style="margin-top: 10px; text-align: center; font-size: 11.5px; color: rgba(247,250,247,.6);">Available 24×7 · All 7 days</div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ============================================================
       3. INTERACTIVE CLINICAL NAVIGATOR WIDGET
  ============================================================ -->
  <section id="navigator" class="pain-container-pad" style="max-width: 1240px; margin: 90px auto 0; padding: 0 32px;">
    <div style="text-align: center; max-width: 740px; margin: 0 auto 42px;">
      <div style="display: inline-flex; align-items: center; gap: 8px; background: #DCFCE7; color: #15803D; padding: 6px 16px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 12px;">
        <i data-lucide="compass" style="width: 14px; height: 14px;"></i>Interactive Clinical Navigator
      </div>
      <h2 style="font-size: clamp(28px, 3.4vw, 42px); font-weight: 800; letter-spacing: -0.03em; color: #12305F; margin: 0 0 14px;">
        Where is your pain? <em class="serif" style="color: #16A34A;">Explore targeted non-surgical solutions.</em>
      </h2>
      <p style="font-size: 15.5px; color: #5B6480; margin: 0;">
        Select your condition below to see our specialized interventional treatment protocols, expected recovery timeframe, and procedural details.
      </p>
    </div>

    <div class="pain-g-nav" style="display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 32px; align-items: start;">
      
      <!-- Left Tab Selectors -->
      <div style="display: flex; flex-direction: column; gap: 10px;">
        <button type="button" class="pain-tab-selector active" onclick="switchPainTab('sciatica', this)">
          <div class="tab-icon-frame"><i data-lucide="bone" style="width: 18px; height: 18px;"></i></div>
          <div>
            <div style="font-size: 14.5px; font-weight: 700;">Lower Back Pain &amp; Sciatica</div>
            <div style="font-size: 12px; opacity: 0.8; font-weight: 500;">Disc herniation, shooting leg pain, slip disc</div>
          </div>
          <i data-lucide="chevron-right" style="width: 16px; height: 16px; margin-left: auto; opacity: 0.6;"></i>
        </button>

        <button type="button" class="pain-tab-selector" onclick="switchPainTab('knee', this)">
          <div class="tab-icon-frame"><i data-lucide="activity" style="width: 18px; height: 18px;"></i></div>
          <div>
            <div style="font-size: 14.5px; font-weight: 700;">Knee &amp; Joint Osteoarthritis</div>
            <div style="font-size: 12px; opacity: 0.8; font-weight: 500;">Severe knee friction, hip pain, shoulder stiffness</div>
          </div>
          <i data-lucide="chevron-right" style="width: 16px; height: 16px; margin-left: auto; opacity: 0.6;"></i>
        </button>

        <button type="button" class="pain-tab-selector" onclick="switchPainTab('labor', this)">
          <div class="tab-icon-frame"><i data-lucide="baby" style="width: 18px; height: 18px;"></i></div>
          <div>
            <div style="font-size: 14.5px; font-weight: 700;">Painless Labor &amp; Delivery</div>
            <div style="font-size: 12px; opacity: 0.8; font-weight: 500;">Walking epidural for comfortable normal childbirth</div>
          </div>
          <i data-lucide="chevron-right" style="width: 16px; height: 16px; margin-left: auto; opacity: 0.6;"></i>
        </button>

        <button type="button" class="pain-tab-selector" onclick="switchPainTab('neck', this)">
          <div class="tab-icon-frame"><i data-lucide="shield-alert" style="width: 18px; height: 18px;"></i></div>
          <div>
            <div style="font-size: 14.5px; font-weight: 700;">Neck Pain &amp; Cervical Spondylosis</div>
            <div style="font-size: 12px; opacity: 0.8; font-weight: 500;">Radiating arm numbness, facet arthropathy, headache</div>
          </div>
          <i data-lucide="chevron-right" style="width: 16px; height: 16px; margin-left: auto; opacity: 0.6;"></i>
        </button>

        <button type="button" class="pain-tab-selector" onclick="switchPainTab('nerve', this)">
          <div class="tab-icon-frame"><i data-lucide="zap" style="width: 18px; height: 18px;"></i></div>
          <div>
            <div style="font-size: 14.5px; font-weight: 700;">Trigeminal &amp; Neuropathic Pain</div>
            <div style="font-size: 12px; opacity: 0.8; font-weight: 500;">Electric facial shock pain, diabetic neuropathy, shingles</div>
          </div>
          <i data-lucide="chevron-right" style="width: 16px; height: 16px; margin-left: auto; opacity: 0.6;"></i>
        </button>

        <button type="button" class="pain-tab-selector" onclick="switchPainTab('cancer', this)">
          <div class="tab-icon-frame"><i data-lucide="heart-handshake" style="width: 18px; height: 18px;"></i></div>
          <div>
            <div style="font-size: 14.5px; font-weight: 700;">Cancer Pain &amp; Palliative Care</div>
            <div style="font-size: 12px; opacity: 0.8; font-weight: 500;">Celiac plexus blocks, continuous morphine titration</div>
          </div>
          <i data-lucide="chevron-right" style="width: 16px; height: 16px; margin-left: auto; opacity: 0.6;"></i>
        </button>
      </div>

      <!-- Right Tab Details Display -->
      <div id="pain-tab-display" style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 20px; padding: 34px; box-shadow: 0 16px 36px -15px rgba(22, 163, 74, 0.15);">
        
        <!-- Tab: Sciatica -->
        <div id="tab-content-sciatica" class="pain-tab-pane">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <span style="font-size: 12px; font-weight: 700; color: #0369A1; background: #E0F2FE; padding: 5px 12px; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="shield-check" style="width: 13px; height: 13px;"></i>C-Arm Fluoroscopy Guided</span>
            <span style="font-size: 12.5px; font-weight: 700; color: #16A34A; background: #DCFCE7; padding: 4px 10px; border-radius: 999px;">Daycare Procedure</span>
          </div>

          <h3 style="font-size: 22px; font-weight: 800; color: #12305F; margin: 0 0 10px; line-height: 1.25;">Transforaminal Epidural Steroid Injection (TFESI)</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.68; margin: 0 0 22px;">
            Targeted fluoroscopic anti-inflammatory delivery directly at the inflamed spinal nerve root. Dissolves chemical swelling from herniated discs, eliminating excruciating leg pain without spinal surgery.
          </p>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 14px; padding: 16px; margin-bottom: 22px;">
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Duration</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">15–20 Mins</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Hospital Stay</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">2 Hours</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Relief Window</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">6–18 Months</div>
            </div>
          </div>

          <div style="border-top: 1px dashed #CBD5E1; padding-top: 18px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: #475569;">
              <strong style="color: #0F172A;">Suitability:</strong> L4-L5/L5-S1 disc bulge, sciatica, lumbar canal stenosis.
            </div>
            <a href="#contact" style="display: inline-flex; align-items: center; gap: 8px; background: #16A34A; color: #FFFFFF; padding: 11px 20px; border-radius: 10px; font-size: 13.5px; font-weight: 700;">
              Consult Specialist <i data-lucide="arrow-right" style="width: 15px; height: 15px;"></i>
            </a>
          </div>
        </div>

        <!-- Tab: Knee -->
        <div id="tab-content-knee" class="pain-tab-pane" style="display: none;">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <span style="font-size: 12px; font-weight: 700; color: #15803D; background: #DCFCE7; padding: 5px 12px; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="zap" style="width: 13px; height: 13px;"></i>Cooled Radiofrequency (RFA)</span>
            <span style="font-size: 12.5px; font-weight: 700; color: #16A34A; background: #DCFCE7; padding: 4px 10px; border-radius: 999px;">Zero Surgical Cut</span>
          </div>

          <h3 style="font-size: 22px; font-weight: 800; color: #12305F; margin: 0 0 10px; line-height: 1.25;">Genicular Nerve Radiofrequency Ablation</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.68; margin: 0 0 22px;">
            Deactivates sensory knee pain nerve branches without major surgery. Ideal for patients unfit for total knee replacement or wanting to walk comfortably without pain.
          </p>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 14px; padding: 16px; margin-bottom: 22px;">
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Duration</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">30 Mins</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Recovery</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">Walk same day</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Pain Relief</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">12–24 Months</div>
            </div>
          </div>

          <div style="border-top: 1px dashed #CBD5E1; padding-top: 18px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: #475569;">
              <strong style="color: #0F172A;">Suitability:</strong> Grade 2-4 knee osteoarthritis, persistent post-surgical knee pain.
            </div>
            <a href="#contact" style="display: inline-flex; align-items: center; gap: 8px; background: #16A34A; color: #FFFFFF; padding: 11px 20px; border-radius: 10px; font-size: 13.5px; font-weight: 700;">
              Consult Specialist <i data-lucide="arrow-right" style="width: 15px; height: 15px;"></i>
            </a>
          </div>
        </div>

        <!-- Tab: Labor -->
        <div id="tab-content-labor" class="pain-tab-pane" style="display: none;">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <span style="font-size: 12px; font-weight: 700; color: #B45309; background: #FEF3C7; padding: 5px 12px; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="baby" style="width: 13px; height: 13px;"></i>24×7 Obstetric Analgesia</span>
            <span style="font-size: 12.5px; font-weight: 700; color: #0369A1; background: #E0F2FE; padding: 4px 10px; border-radius: 999px;">Walking Epidural</span>
          </div>

          <h3 style="font-size: 22px; font-weight: 800; color: #12305F; margin: 0 0 10px; line-height: 1.25;">Continuous Walking Labor Epidural Analgesia</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.68; margin: 0 0 22px;">
            Customized micro-dose infusion through an ultra-thin epidural catheter. Eliminates labor contraction pain while preserving full leg mobility and natural pushing power.
          </p>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 14px; padding: 16px; margin-bottom: 22px;">
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Onset of Relief</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">8–12 Mins</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Mobility</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">Full leg strength</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Fetal Safety</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">100% Safe</div>
            </div>
          </div>

          <div style="border-top: 1px dashed #CBD5E1; padding-top: 18px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: #475569;">
              <strong style="color: #0F172A;">Availability:</strong> Available 24×7 on-call by resident senior anaesthesiologists.
            </div>
            <a href="#contact" style="display: inline-flex; align-items: center; gap: 8px; background: #16A34A; color: #FFFFFF; padding: 11px 20px; border-radius: 10px; font-size: 13.5px; font-weight: 700;">
              Consult Specialist <i data-lucide="arrow-right" style="width: 15px; height: 15px;"></i>
            </a>
          </div>
        </div>

        <!-- Tab: Neck -->
        <div id="tab-content-neck" class="pain-tab-pane" style="display: none;">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <span style="font-size: 12px; font-weight: 700; color: #7E22CE; background: #F3E8FF; padding: 5px 12px; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="shield-check" style="width: 13px; height: 13px;"></i>Cervical Medial Branch</span>
            <span style="font-size: 12.5px; font-weight: 700; color: #16A34A; background: #DCFCE7; padding: 4px 10px; border-radius: 999px;">Outpatient Clinic</span>
          </div>

          <h3 style="font-size: 22px; font-weight: 800; color: #12305F; margin: 0 0 10px; line-height: 1.25;">Cervical Epidural &amp; Facet Joint Rhizotomy</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.68; margin: 0 0 22px;">
            Precision treatment for chronic stiff neck, radiating shoulder pain, and cervicogenic headaches under high-definition fluoroscopy.
          </p>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 14px; padding: 16px; margin-bottom: 22px;">
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Duration</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">20 Mins</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Precision</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">Sub-millimeter</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Relief</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">Immediate to 18 Mo</div>
            </div>
          </div>

          <div style="border-top: 1px dashed #CBD5E1; padding-top: 18px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: #475569;">
              <strong style="color: #0F172A;">Suitability:</strong> Whiplash injury, cervical disc prolapse, desk-worker chronic neck spasm.
            </div>
            <a href="#contact" style="display: inline-flex; align-items: center; gap: 8px; background: #16A34A; color: #FFFFFF; padding: 11px 20px; border-radius: 10px; font-size: 13.5px; font-weight: 700;">
              Consult Specialist <i data-lucide="arrow-right" style="width: 15px; height: 15px;"></i>
            </a>
          </div>
        </div>

        <!-- Tab: Nerve -->
        <div id="tab-content-nerve" class="pain-tab-pane" style="display: none;">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <span style="font-size: 12px; font-weight: 700; color: #0369A1; background: #E0F2FE; padding: 5px 12px; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="zap" style="width: 13px; height: 13px;"></i>Pulsed Radiofrequency</span>
            <span style="font-size: 12.5px; font-weight: 700; color: #16A34A; background: #DCFCE7; padding: 4px 10px; border-radius: 999px;">Advanced Neuro-Intervention</span>
          </div>

          <h3 style="font-size: 22px; font-weight: 800; color: #12305F; margin: 0 0 10px; line-height: 1.25;">Trigeminal Ganglion &amp; Peripheral Neuromodulation</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.68; margin: 0 0 22px;">
            Treats severe shooting facial shock pain and burning neuropathy using pulsed radiofrequency energy without causing numbness or weakness.
          </p>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 14px; padding: 16px; margin-bottom: 22px;">
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Duration</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">25 Mins</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Hospital Stay</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">Same day release</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Medication Cut</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">Up to 80% Reduction</div>
            </div>
          </div>

          <div style="border-top: 1px dashed #CBD5E1; padding-top: 18px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: #475569;">
              <strong style="color: #0F172A;">Suitability:</strong> Facial shock pain, intractable post-shingles pain, burning foot pain.
            </div>
            <a href="#contact" style="display: inline-flex; align-items: center; gap: 8px; background: #16A34A; color: #FFFFFF; padding: 11px 20px; border-radius: 10px; font-size: 13.5px; font-weight: 700;">
              Consult Specialist <i data-lucide="arrow-right" style="width: 15px; height: 15px;"></i>
            </a>
          </div>
        </div>

        <!-- Tab: Cancer -->
        <div id="tab-content-cancer" class="pain-tab-pane" style="display: none;">
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">
            <span style="font-size: 12px; font-weight: 700; color: #BE123C; background: #FFE4E6; padding: 5px 12px; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i data-lucide="heart-handshake" style="width: 13px; height: 13px;"></i>WHO Stepped Analgesia</span>
            <span style="font-size: 12.5px; font-weight: 700; color: #16A34A; background: #DCFCE7; padding: 4px 10px; border-radius: 999px;">Palliative Comfort</span>
          </div>

          <h3 style="font-size: 22px; font-weight: 800; color: #12305F; margin: 0 0 10px; line-height: 1.25;">Celiac Plexus &amp; Splanchnic Neurolysis</h3>
          <p style="font-size: 14.5px; color: #475569; line-height: 1.68; margin: 0 0 22px;">
            Direct chemical interruption of deep abdominal sympathetic nerves for intractable pancreatic, stomach, and liver cancer pain, restoring restful sleep and dignity.
          </p>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 14px; padding: 16px; margin-bottom: 22px;">
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Duration</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">30 Mins</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Guidance</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">CT / Fluoroscopy</div>
            </div>
            <div>
              <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748B;">Outcome</div>
              <div style="font-size: 15px; font-weight: 800; color: #16A34A; margin-top: 2px;">Dignified Comfort</div>
            </div>
          </div>

          <div style="border-top: 1px dashed #CBD5E1; padding-top: 18px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: #475569;">
              <strong style="color: #0F172A;">Integrated Care:</strong> Coordinated with Medical Oncology &amp; Surgical Oncology Tumor Boards.
            </div>
            <a href="#contact" style="display: inline-flex; align-items: center; gap: 8px; background: #16A34A; color: #FFFFFF; padding: 11px 20px; border-radius: 10px; font-size: 13.5px; font-weight: 700;">
              Consult Specialist <i data-lucide="arrow-right" style="width: 15px; height: 15px;"></i>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ============================================================
       4. TREATMENTS & MODALITIES GRID (Relatable Clinical Photography)
  ============================================================ -->
  <section id="treatments" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div class="pain-g-head" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 40px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="activity" style="width: 14px; height: 14px;"></i>Clinical Modalities
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Anaesthesia &amp; <em class="serif" style="color: #2E8B3C;">pain management services.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Comprehensive surgical anaesthesia, acute post-operative pain relief, and interventional pain procedures with visual precision.
      </p>
    </div>

    <div class="pain-g-3col" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
      
      <!-- Modality 01: Ultrasound-Guided Regional Anaesthesia -->
      <div class="pain-card-modality">
        <div class="pain-card-media-wrap">
          <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800&auto=format&fit=crop" alt="Ultrasound-Guided Regional Nerve Blocks">
          <div class="pain-card-media-overlay"></div>
          <div style="position: absolute; top: 16px; left: 16px; right: 16px; display: flex; align-items: center; justify-content: space-between;">
            <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; background: rgba(16,40,66,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); color: #7DCB6B; padding: 4px 10px; border-radius: 999px;">
              <i data-lucide="scan" style="width: 12px; height: 12px;"></i>USG Precision
            </span>
            <span class="pain-step-num" style="background: #FFFFFF; color: #16A34A; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">01</span>
          </div>
          <div style="position: absolute; bottom: 14px; left: 18px; color: #FFFFFF; font-size: 13px; font-weight: 700;">
            Targeted Regional Anaesthesia
          </div>
        </div>
        <div class="pain-card-body">
          <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Ultrasound-Guided Regional Blocks</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 18px; flex-grow: 1;">Real-time ultrasound guidance to deliver local anaesthetics directly around nerves, numbing the surgical area for hours without general anaesthesia.</p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; border-top: 1px solid var(--pain-border-light); padding-top: 16px;">
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Adductor canal &amp; femoral blocks for knee replacement</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Brachial plexus blocks for upper limb and hand surgery</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>TAP block for painless abdominal keyhole surgery</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Erector spinae plane (ESP) block for thoracic spine pain</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Modality 02: Labor Epidural & Obstetric Analgesia -->
      <div class="pain-card-modality">
        <div class="pain-card-media-wrap">
          <img src="https://images.unsplash.com/photo-1537673156864-5d2c72de7824?w=800&auto=format&fit=crop" alt="Painless Labor Epidural &amp; Maternity Care">
          <div class="pain-card-media-overlay"></div>
          <div style="position: absolute; top: 16px; left: 16px; right: 16px; display: flex; align-items: center; justify-content: space-between;">
            <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; background: rgba(16,40,66,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); color: #FDA4AF; padding: 4px 10px; border-radius: 999px;">
              <i data-lucide="baby" style="width: 12px; height: 12px;"></i>24×7 Maternity
            </span>
            <span class="pain-step-num" style="background: #FFFFFF; color: #E11D48; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">02</span>
          </div>
          <div style="position: absolute; bottom: 14px; left: 18px; color: #FFFFFF; font-size: 13px; font-weight: 700;">
            Painless Normal Delivery
          </div>
        </div>
        <div class="pain-card-body">
          <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Labor Epidural Analgesia</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 18px; flex-grow: 1;">Continuous epidural analgesia administered by senior anaesthetists to eliminate labor pain while allowing the mother to actively participate in normal delivery.</p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; border-top: 1px solid var(--pain-border-light); padding-top: 16px;">
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>24×7 on-call availability for all labor room admissions</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Walking epidural preserving leg movement and push power</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Significant reduction in maternal stress and exhaustion</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #E11D48; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Instant conversion for emergency Caesarean section if needed</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Modality 03: Interventional Spine Clinic (Real Sukhda OT) -->
      <div class="pain-card-modality">
        <div class="pain-card-media-wrap">
          <img src="/assets/images/infra/operation-theatre.jpg" alt="Fluoroscopy-Guided Interventional Spine Clinic">
          <div class="pain-card-media-overlay"></div>
          <div style="position: absolute; top: 16px; left: 16px; right: 16px; display: flex; align-items: center; justify-content: space-between;">
            <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; background: rgba(16,40,66,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); color: #7DCB6B; padding: 4px 10px; border-radius: 999px;">
              <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>C-Arm Guided
            </span>
            <span class="pain-step-num" style="background: #FFFFFF; color: #16A34A; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">03</span>
          </div>
          <div style="position: absolute; bottom: 14px; left: 18px; color: #FFFFFF; font-size: 13px; font-weight: 700;">
            Non-Surgical Spine Daycare
          </div>
        </div>
        <div class="pain-card-body">
          <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Interventional Spine Procedures</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 18px; flex-grow: 1;">Targeted fluoroscopy-guided injections for patients suffering from severe slip disc, sciatica, facet arthropathy, and spinal canal stenosis.</p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; border-top: 1px solid var(--pain-border-light); padding-top: 16px;">
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Transforaminal epidural steroid injections (TFESI)</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Facet joint medial branch blocks &amp; RF neurotomy</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Sacroiliac (SI) joint intra-articular injections</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #16A34A; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Caudal neuroplasty for failed back surgery pain</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Modality 04: Joint & Musculoskeletal Pain Injections -->
      <div class="pain-card-modality">
        <div class="pain-card-media-wrap">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&auto=format&fit=crop" alt="Joint &amp; Musculoskeletal Pain Examination">
          <div class="pain-card-media-overlay"></div>
          <div style="position: absolute; top: 16px; left: 16px; right: 16px; display: flex; align-items: center; justify-content: space-between;">
            <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; background: rgba(16,40,66,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); color: #FCD34D; padding: 4px 10px; border-radius: 999px;">
              <i data-lucide="shield-plus" style="width: 12px; height: 12px;"></i>Joint Health
            </span>
            <span class="pain-step-num" style="background: #FFFFFF; color: #D97706; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">04</span>
          </div>
          <div style="position: absolute; bottom: 14px; left: 18px; color: #FFFFFF; font-size: 13px; font-weight: 700;">
            Knee &amp; Shoulder Arthropathy
          </div>
        </div>
        <div class="pain-card-body">
          <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Joint &amp; Musculoskeletal Injections</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 18px; flex-grow: 1;">Ultrasound-guided therapeutic injections for painful osteoarthritic knees, frozen shoulders, bursitis, and chronic tendon pain.</p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; border-top: 1px solid var(--pain-border-light); padding-top: 16px;">
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Hyaluronic acid (viscosupplementation) knee injections</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>PRP (Platelet-Rich Plasma) joint &amp; tendon therapy</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Suprascapular nerve block for painful frozen shoulder</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #D97706; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Trigger point injections for myofascial muscle pain</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Modality 05: Neuropathic Pain & Trigeminal Care -->
      <div class="pain-card-modality">
        <div class="pain-card-media-wrap">
          <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=800&auto=format&fit=crop" alt="Neuropathic Pain &amp; Trigeminal Neuralgia">
          <div class="pain-card-media-overlay"></div>
          <div style="position: absolute; top: 16px; left: 16px; right: 16px; display: flex; align-items: center; justify-content: space-between;">
            <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; background: rgba(16,40,66,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); color: #C084FC; padding: 4px 10px; border-radius: 999px;">
              <i data-lucide="zap" style="width: 12px; height: 12px;"></i>Neuromodulation
            </span>
            <span class="pain-step-num" style="background: #FFFFFF; color: #7C3AED; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">05</span>
          </div>
          <div style="position: absolute; bottom: 14px; left: 18px; color: #FFFFFF; font-size: 13px; font-weight: 700;">
            Nerve Shock &amp; Neuropathy Relief
          </div>
        </div>
        <div class="pain-card-body">
          <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Neuropathic Pain &amp; Trigeminal Care</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 18px; flex-grow: 1;">Specialized medical and interventional nerve blocks for severe burning nerve pain, diabetic neuropathy, and electric-shock facial pain.</p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; border-top: 1px solid var(--pain-border-light); padding-top: 16px;">
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Gasserian ganglion block &amp; RFA for trigeminal neuralgia</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Sphenopalatine block for severe cluster headaches</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Stellate ganglion block for complex regional pain (CRPS)</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #7C3AED; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Post-herpetic neuralgia targeted nerve interventions</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Modality 06: Oncological & Palliative Relief -->
      <div class="pain-card-modality">
        <div class="pain-card-media-wrap">
          <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?w=800&auto=format&fit=crop" alt="Compassionate Oncology &amp; Palliative Care">
          <div class="pain-card-media-overlay"></div>
          <div style="position: absolute; top: 16px; left: 16px; right: 16px; display: flex; align-items: center; justify-content: space-between;">
            <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; background: rgba(16,40,66,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); color: #5EEAD4; padding: 4px 10px; border-radius: 999px;">
              <i data-lucide="heart-handshake" style="width: 12px; height: 12px;"></i>Palliative Care
            </span>
            <span class="pain-step-num" style="background: #FFFFFF; color: #0D9488; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">06</span>
          </div>
          <div style="position: absolute; bottom: 14px; left: 18px; color: #FFFFFF; font-size: 13px; font-weight: 700;">
            Compassionate Oncology Comfort
          </div>
        </div>
        <div class="pain-card-body">
          <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 10px; letter-spacing: -0.02em;">Oncological &amp; Palliative Relief</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 18px; flex-grow: 1;">Compassionate interventional procedures to relieve severe pain in advanced gastrointestinal, pelvic, and metastatic bone cancers.</p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; border-top: 1px solid var(--pain-border-light); padding-top: 16px;">
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Celiac plexus neurolysis for pancreatic cancer pain</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Superior hypogastric block for pelvic malignancies</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>Intrathecal drug delivery pump evaluation</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 13px; line-height: 1.5; color: #2A5288;">
              <i data-lucide="check" style="width: 14px; height: 14px; color: #0D9488; flex-shrink: 0; margin-top: 3px;"></i>
              <span>WHO stepped analgesic ladder optimization</span>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       5. CONDITIONS WE TREAT (3 Structured Categorized Panels)
  ============================================================ -->
  <section id="conditions" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div class="pain-g-head" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 40px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="shield-plus" style="width: 14px; height: 14px;"></i>Scope of Care
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Pain conditions <em class="serif" style="color: #2E8B3C;">treated.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Targeted interventional relief for acute, chronic, and post-surgical pain syndromes.
      </p>
    </div>

    <div class="pain-g-3col" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
      
      <!-- Panel 1 -->
      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 20px; padding: 28px; box-shadow: 0 4px 16px rgba(0,0,0,0.02);">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px; padding-bottom: 16px; border-bottom: 1px solid var(--pain-border-light);">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #EBF3FC; border: 1px solid #BFDBFE; color: #0F4F94; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="bone" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Spine &amp; Nerve Pain</div>
            <div style="font-size: 12px; color: #5B6480; font-weight: 500;">Back, neck &amp; radicular pain</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Sciatica &amp; Lumbar Herniated Disc Pain</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Chronic Low Back &amp; Facet Joint Pain</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Cervical Spondylosis &amp; Radiating Arm Pain</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Trigeminal Neuralgia (Facial Shock Pain)</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Post-Herpetic Neuralgia (Shingles Pain)</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Failed Back Surgery Syndrome (FBSS)</span>
          </div>
        </div>
      </div>

      <!-- Panel 2 -->
      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 20px; padding: 28px; box-shadow: 0 4px 16px rgba(0,0,0,0.02);">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px; padding-bottom: 16px; border-bottom: 1px solid var(--pain-border-light);">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; border: 1px solid #BBF7D0; color: #16A34A; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Joint &amp; Musculoskeletal</div>
            <div style="font-size: 12px; color: #5B6480; font-weight: 500;">Degenerative &amp; chronic pain</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Severe Osteoarthritis of Knee &amp; Hip</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Frozen Shoulder (Adhesive Capsulitis)</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Sacroiliac (SI) Joint Dysfunction</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Fibromyalgia &amp; Myofascial Pain Syndrome</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Chronic Post-Surgical Incisional Pain</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Complex Regional Pain Syndrome (CRPS)</span>
          </div>
        </div>
      </div>

      <!-- Panel 3 -->
      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 20px; padding: 28px; box-shadow: 0 4px 16px rgba(0,0,0,0.02);">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px; padding-bottom: 16px; border-bottom: 1px solid var(--pain-border-light);">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: #FFF1F2; border: 1px solid #FECDD3; color: #E11D48; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <i data-lucide="heart-pulse" style="width: 22px; height: 22px;"></i>
          </div>
          <div>
            <div style="font-size: 18px; font-weight: 800; color: #12305F; line-height: 1.25;">Cancer &amp; Specialized Pain</div>
            <div style="font-size: 12px; color: #5B6480; font-weight: 500;">Malignant &amp; vascular pain</div>
          </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3px;">
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Pancreatic, Stomach &amp; Liver Cancer Pain</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Pelvic &amp; Gynecological Malignancy Pain</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Metastatic Bone Cancer Pain</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Severe Diabetic Peripheral Neuropathy</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Chronic Migraine &amp; Occipital Neuralgia</span>
          </div>
          <div class="pain-condition-item">
            <i data-lucide="circle-dot" style="width: 13px; height: 13px; color: #2E8B3C; flex-shrink: 0;"></i>
            <span>Labor Pain during Normal Childbirth</span>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       6. CLINICAL COMPARISON: INTERVENTION VS. OPEN SURGERY
  ============================================================ -->
  <section id="compare" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div style="text-align: center; max-width: 720px; margin: 0 auto 40px;">
      <div style="display: inline-flex; align-items: center; gap: 8px; background: #DCFCE7; color: #15803D; padding: 6px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 14px;">
        <i data-lucide="scale" style="width: 14px; height: 14px;"></i>Informed Patient Choice
      </div>
      <h2 style="font-size: clamp(28px, 3.4vw, 40px); font-weight: 800; letter-spacing: -0.03em; color: #12305F; margin: 0 0 12px;">
        Interventional Pain Therapy <em class="serif" style="color: #16A34A;">vs. Traditional Open Surgery</em>
      </h2>
      <p style="font-size: 15.5px; color: #5B6480; margin: 0;">
        Why more than 80% of patients with sciatica and joint pain choose daycare needle-guided interventions before considering major surgery.
      </p>
    </div>

    <div class="pain-table-wrap">
      <table class="pain-table">
        <thead>
          <tr style="background: #F8FAFC; border-bottom: 2px solid var(--pain-border);">
            <th style="color: #12305F; width: 28%;">Clinical Parameter</th>
            <th style="color: #15803D; width: 36%; background: #F0FDF4; border-left: 2px solid #BBF7D0; border-right: 2px solid #BBF7D0;">
              <div style="display: flex; align-items: center; gap: 8px;">
                <i data-lucide="check-circle-2" style="width: 18px; height: 18px; color: #16A34A;"></i>
                Sukhda Interventional Pain Care
              </div>
            </th>
            <th style="color: #64748B; width: 36%;">Traditional Open Spine / Joint Surgery</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Incision &amp; Scars</strong></td>
            <td style="background: #F0FDF4; border-left: 2px solid #BBF7D0; border-right: 2px solid #BBF7D0; color: #15803D; font-weight: 700;">
              Zero surgical cut (sub-millimeter needle prick)
            </td>
            <td style="color: #64748B;">5 cm – 15 cm open cut with surgical stitches</td>
          </tr>
          <tr>
            <td><strong>Anaesthesia Required</strong></td>
            <td style="background: #F0FDF4; border-left: 2px solid #BBF7D0; border-right: 2px solid #BBF7D0; color: #15803D; font-weight: 700;">
              Local numbing + comfortable mild sedation
            </td>
            <td style="color: #64748B;">General anaesthesia with endotracheal tube</td>
          </tr>
          <tr>
            <td><strong>Hospital Stay</strong></td>
            <td style="background: #F0FDF4; border-left: 2px solid #BBF7D0; border-right: 2px solid #BBF7D0; color: #15803D; font-weight: 700;">
              Daycare procedure (Walk home in 1–2 hours)
            </td>
            <td style="color: #64748B;">3 to 7 days hospital room admission</td>
          </tr>
          <tr>
            <td><strong>Recovery &amp; Mobility</strong></td>
            <td style="background: #F0FDF4; border-left: 2px solid #BBF7D0; border-right: 2px solid #BBF7D0; color: #15803D; font-weight: 700;">
              Resume daily activities next day
            </td>
            <td style="color: #64748B;">4 to 12 weeks of restricted bed rest &amp; rehab</td>
          </tr>
          <tr>
            <td><strong>Tissue &amp; Muscle Damage</strong></td>
            <td style="background: #F0FDF4; border-left: 2px solid #BBF7D0; border-right: 2px solid #BBF7D0; color: #15803D; font-weight: 700;">
              Zero muscle cutting; preserves normal spinal anatomy
            </td>
            <td style="color: #64748B;">Muscle detachment and bone resection needed</td>
          </tr>
          <tr>
            <td><strong>Repeatability</strong></td>
            <td style="background: #F0FDF4; border-left: 2px solid #BBF7D0; border-right: 2px solid #BBF7D0; color: #15803D; font-weight: 700;">
              Can be safely repeated if necessary without scarring
            </td>
            <td style="color: #64748B;">Revision surgeries carry significantly higher risk</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>


  <!-- ============================================================
       7. THE SAFETY MATRIX (OT & Perioperative Technology)
  ============================================================ -->
  <section id="safety" class="pain-container-pad" style="max-width: 1240px; margin: 90px auto 0; padding: 0 32px;">
    <div style="background: linear-gradient(135deg, #183C66 0%, #204E82 100%); border-radius: 24px; padding: 56px 48px; color: #FFFFFF; position: relative; overflow: hidden; box-shadow: 0 24px 60px -20px rgba(24, 60, 102, 0.45);">
      <div style="position: absolute; top: 0; right: 0; width: 450px; height: 450px; background: radial-gradient(circle, rgba(125, 203, 107, 0.22), transparent 70%);"></div>

      <div style="max-width: 620px; margin-bottom: 44px; position: relative; z-index: 2;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125, 203, 107, 0.18); color: #7DCB6B; padding: 6px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 16px;">
          <i data-lucide="cpu" style="width: 14px; height: 14px;"></i>The Safety Matrix
        </div>
        <h2 style="font-size: clamp(28px, 3.4vw, 42px); font-weight: 800; letter-spacing: -0.03em; color: #FFFFFF; margin: 0 0 16px;">
          How Sukhda guarantees <em class="serif" style="color: #7DCB6B;">zero-compromise OT safety.</em>
        </h2>
        <p style="font-size: 16px; color: rgba(247, 250, 247, 0.88); line-height: 1.7; margin: 0;">
          Our perioperative anaesthesia protocols match international safety gold standards, utilizing four pillars of advanced medical technology in every single operation.
        </p>
      </div>

      <!-- 4 Tech Grid Columns -->
      <div class="pain-g-4col" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; position: relative; z-index: 2;">
        
        <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 18px; padding: 24px; backdrop-filter: blur(10px);">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(125, 203, 107, 0.2); color: #7DCB6B; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
            <i data-lucide="activity" style="width: 22px; height: 22px;"></i>
          </div>
          <h4 style="font-size: 17px; font-weight: 800; color: #FFFFFF; margin: 0 0 8px;">Dräger Workstations</h4>
          <p style="font-size: 13.5px; line-height: 1.6; color: rgba(247, 250, 247, 0.8); margin: 0;">
            Precision low-flow automated gas titration and lung-protective electronic ventilation preserving respiratory function.
          </p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 18px; padding: 24px; backdrop-filter: blur(10px);">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(56, 189, 248, 0.2); color: #38BDF8; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
            <i data-lucide="scan" style="width: 22px; height: 22px;"></i>
          </div>
          <h4 style="font-size: 17px; font-weight: 800; color: #FFFFFF; margin: 0 0 8px;">High-Frequency USG</h4>
          <p style="font-size: 13.5px; line-height: 1.6; color: rgba(247, 250, 247, 0.8); margin: 0;">
            Real-time visualization of individual nerve sheaths, vessels, and pleura for 100% targeted drug deposition.
          </p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 18px; padding: 24px; backdrop-filter: blur(10px);">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(245, 158, 11, 0.2); color: #FBBF24; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
            <i data-lucide="brain" style="width: 22px; height: 22px;"></i>
          </div>
          <h4 style="font-size: 17px; font-weight: 800; color: #FFFFFF; margin: 0 0 8px;">BIS Brain Tracking</h4>
          <p style="font-size: 13.5px; line-height: 1.6; color: rgba(247, 250, 247, 0.8); margin: 0;">
            Bispectral Index continuous electroencephalogram prevents accidental intraoperative awareness or dangerous over-sedation.
          </p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 18px; padding: 24px; backdrop-filter: blur(10px);">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(168, 85, 247, 0.2); color: #C084FC; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
            <i data-lucide="heart-pulse" style="width: 22px; height: 22px;"></i>
          </div>
          <h4 style="font-size: 17px; font-weight: 800; color: #FFFFFF; margin: 0 0 8px;">Invasive Hemodynamics</h4>
          <p style="font-size: 13.5px; line-height: 1.6; color: rgba(247, 250, 247, 0.8); margin: 0;">
            Continuous beat-by-beat arterial blood pressure &amp; central venous monitoring for complex cardiac and polytrauma surgeries.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       8. LABOR EPIDURAL: MYTHS VS. CLINICAL FACTS
  ============================================================ -->
  <section id="epidural-facts" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 24px; padding: 48px; box-shadow: 0 8px 30px -10px rgba(0,0,0,0.04);">
      <div style="max-width: 680px; margin-bottom: 36px;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #FFF1F2; color: #E11D48; padding: 6px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 12px;">
          <i data-lucide="baby" style="width: 14px; height: 14px;"></i>Maternal Reassurance
        </div>
        <h2 style="font-size: clamp(26px, 3.2vw, 38px); font-weight: 800; letter-spacing: -0.025em; color: #12305F; margin: 0 0 10px;">
          Painless Delivery Epidurals: <em class="serif" style="color: #E11D48;">Separating myth from medical science.</em>
        </h2>
        <p style="font-size: 15px; color: #5B6480; margin: 0;">
          Expecting mothers deserve empowering, fact-based clinical reassurance for a comfortable delivery experience.
        </p>
      </div>

      <div class="pain-g-3col" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        
        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 18px; padding: 24px;">
          <div style="color: #E11D48; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 6px;">Common Myth 01</div>
          <h4 style="font-size: 16px; font-weight: 800; color: #12305F; margin: 0 0 10px;">"Epidurals cause permanent back pain after birth."</h4>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.65; margin: 0;">
            <strong style="color: #16A34A;">Medical Fact:</strong> Multiple global clinical trials prove epidural analgesia causes no long-term spinal pain. Post-partum backaches are linked to pregnancy posture changes, core ligament stretching, and infant holding.
          </p>
        </div>

        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 18px; padding: 24px;">
          <div style="color: #E11D48; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 6px;">Common Myth 02</div>
          <h4 style="font-size: 16px; font-weight: 800; color: #12305F; margin: 0 0 10px;">"I won't be able to push or feel contractions."</h4>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.65; margin: 0;">
            <strong style="color: #16A34A;">Medical Fact:</strong> Modern "Walking Epidurals" use micro-dose concentrations that selectively block sensory pain nerve fibers while preserving 100% of motor push strength and natural pelvic awareness.
          </p>
        </div>

        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 18px; padding: 24px;">
          <div style="color: #E11D48; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 6px;">Common Myth 03</div>
          <h4 style="font-size: 16px; font-weight: 800; color: #12305F; margin: 0 0 10px;">"The epidural medicine can harm the baby."</h4>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.65; margin: 0;">
            <strong style="color: #16A34A;">Medical Fact:</strong> Epidural medicine stays confined to the local spinal epidural space. Negligible trace amounts enter the maternal bloodstream, having zero sedating effect on the newborn.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       9. WHY CHOOSE SUKHDA (6 Complete Reasons Visible)
  ============================================================ -->
  <section id="why" style="background: linear-gradient(135deg, #102842 0%, #183C66 100%); color: #F7FAF7; padding: 92px 0; margin-top: 90px; position: relative; overflow: hidden;">
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 18% 22%, rgba(125,203,107,.18) 0%, transparent 60%), radial-gradient(circle at 82% 78%, rgba(46,139,60,.16) 0%, transparent 55%);"></div>
    
    <div class="pain-container-pad" style="max-width: 1240px; margin: 0 auto; padding: 0 32px; position: relative; z-index: 2;">
      
      <div class="pain-g-head" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 48px;">
        <div>
          <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.16); border: 1px solid rgba(125,203,107,.35); color: #7DCB6B; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
            <i data-lucide="award" style="width: 14px; height: 14px;"></i>The Sukhda Distinction
          </div>
          <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #FFFFFF; margin: 0;">
            Why choose Sukhda for <em class="serif" style="color: #7DCB6B;">anaesthesia &amp; pain care.</em>
          </h2>
        </div>
        <p style="font-size: 16px; line-height: 1.75; color: rgba(247,250,247,.82); margin: 0;">
          Dedicated pain specialists, ultrasound-guided precision, and compassionate patient safety.
        </p>
      </div>

      <div class="pain-g-3col" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        
        <div class="pain-advantage-card">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="syringe" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Experienced Consultant Anaesthetists</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.75);">High-volume perioperative care across complex cardiac, neurosurgical, onco-surgical, and orthopedic cases.</div>
        </div>

        <div class="pain-advantage-card">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="zap" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Ultrasound-Guided Regional Nerve Blocks</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.75);">Direct visual needle guidance eliminates systemic drug side effects and ensures rapid surgical recovery.</div>
        </div>

        <div class="pain-advantage-card">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="baby" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">24×7 Painless Delivery Service</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.75);">Round-the-clock anaesthesia presence for safe, comforting labor epidural analgesia.</div>
        </div>

        <div class="pain-advantage-card">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="activity" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Fluoroscopy-Guided Daycare Injections</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.75);">Precision interventional back and joint pain procedures performed with same-day walkout discharge.</div>
        </div>

        <div class="pain-advantage-card">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="hospital" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Advanced Workstations &amp; Monitors</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.75);">Dräger anaesthesia workstations with continuous end-tidal gas, hemodynamic, and depth-of-anaesthesia monitoring.</div>
        </div>

        <div class="pain-advantage-card">
          <div style="width: 42px; height: 42px; border-radius: 11px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.3); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
            <i data-lucide="shield-check" style="width: 20px; height: 20px; color: #7DCB6B;"></i>
          </div>
          <div style="font-size: 17px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 8px;">Cashless TPA &amp; Ayushman Covered</div>
          <div style="font-size: 13.5px; line-height: 1.68; color: rgba(247,250,247,.75);">Anaesthesia, epidural labor, and interventional pain procedures covered under leading health insurance schemes.</div>
        </div>

      </div>

    </div>
  </section>


  <!-- ============================================================
       10. PRE-PROCEDURE PAC CHECKLIST FOR PATIENTS
  ============================================================ -->
  <section id="checklist" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 24px; padding: 48px; box-shadow: 0 8px 30px -10px rgba(0,0,0,0.04);">
      <div style="max-width: 680px; margin-bottom: 36px;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #E0F2FE; color: #0284C7; padding: 6px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 12px;">
          <i data-lucide="clipboard-check" style="width: 14px; height: 14px;"></i>Patient Guidance
        </div>
        <h2 style="font-size: clamp(26px, 3.2vw, 38px); font-weight: 800; letter-spacing: -0.025em; color: #12305F; margin: 0 0 10px;">
          Patient Preparation: <em class="serif" style="color: #0284C7;">Pre-Anaesthesia &amp; Daycare Checklist.</em>
        </h2>
        <p style="font-size: 15px; color: #5B6480; margin: 0;">
          Simple guidelines to ensure your anaesthesia or pain procedure proceeds smoothly with zero delays.
        </p>
      </div>

      <div class="pain-g-4col" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        
        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 18px; padding: 24px;">
          <div style="width: 36px; height: 36px; border-radius: 10px; background: #E0F2FE; color: #0284C7; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <i data-lucide="clock" style="width: 18px; height: 18px;"></i>
          </div>
          <h4 style="font-size: 16px; font-weight: 800; color: #12305F; margin: 0 0 8px;">Fasting (NPO) Rules</h4>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.6; margin: 0;">
            No solid food for 6 hours prior to the procedure. Clear water or tea without milk is permitted up to 2 hours before PACU arrival.
          </p>
        </div>

        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 18px; padding: 24px;">
          <div style="width: 36px; height: 36px; border-radius: 10px; background: #DCFCE7; color: #15803D; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <i data-lucide="pill" style="width: 18px; height: 18px;"></i>
          </div>
          <h4 style="font-size: 16px; font-weight: 800; color: #12305F; margin: 0 0 8px;">Daily Medications</h4>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.6; margin: 0;">
            Continue morning blood pressure medications with a small sip of water. Diabetic insulin and blood thinners must follow specific PAC instructions.
          </p>
        </div>

        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 18px; padding: 24px;">
          <div style="width: 36px; height: 36px; border-radius: 10px; background: #FEF3C7; color: #B45309; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <i data-lucide="file-text" style="width: 18px; height: 18px;"></i>
          </div>
          <h4 style="font-size: 16px; font-weight: 800; color: #12305F; margin: 0 0 8px;">Investigations to Bring</h4>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.6; margin: 0;">
            Bring all recent MRI/CT scan films, X-rays, ECG tracings, blood reports, and current medication prescription slips.
          </p>
        </div>

        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 18px; padding: 24px;">
          <div style="width: 36px; height: 36px; border-radius: 10px; background: #F3E8FF; color: #7E22CE; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <i data-lucide="users" style="width: 18px; height: 18px;"></i>
          </div>
          <h4 style="font-size: 16px; font-weight: 800; color: #12305F; margin: 0 0 8px;">Daycare Escort</h4>
          <p style="font-size: 13.5px; color: #475569; line-height: 1.6; margin: 0;">
            For daycare pain injections, have an adult family member or attendant accompany you for safe, relaxed transit back home.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       11. YOUR CARE PATHWAY (All 6 Sequential Steps Visible)
  ============================================================ -->
  <section id="journey" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div class="pain-g-head" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 40px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="route" style="width: 14px; height: 14px;"></i>Care Pathway
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Your anaesthesia &amp; pain relief <em class="serif" style="color: #2E8B3C;">care pathway.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Meticulous pre-operative checkup, painless procedure, and sustained post-procedure comfort.
      </p>
    </div>

    <div class="pain-g-6col" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px;">
      
      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 18px; padding: 24px; display: flex; flex-direction: column; position: relative;">
        <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 15px; font-weight: 800; margin-bottom: 16px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
          1
        </div>
        <div style="font-size: 15px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 6px;">PAC Checkup</div>
        <div style="font-size: 12.5px; line-height: 1.6; color: #5B6480;">Thorough medical assessment, airway check, and investigation review before surgery.</div>
      </div>

      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 18px; padding: 24px; display: flex; flex-direction: column; position: relative;">
        <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 15px; font-weight: 800; margin-bottom: 16px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
          2
        </div>
        <div style="font-size: 15px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 6px;">Personal Plan</div>
        <div style="font-size: 12.5px; line-height: 1.6; color: #5B6480;">Selection of optimal general, spinal, epidural, or nerve block technique.</div>
      </div>

      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 18px; padding: 24px; display: flex; flex-direction: column; position: relative;">
        <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 15px; font-weight: 800; margin-bottom: 16px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
          3
        </div>
        <div style="font-size: 15px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 6px;">Painless In OT</div>
        <div style="font-size: 12.5px; line-height: 1.6; color: #5B6480;">Smooth induction, continuous vital parameter monitoring, and USG nerve blocks.</div>
      </div>

      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 18px; padding: 24px; display: flex; flex-direction: column; position: relative;">
        <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 15px; font-weight: 800; margin-bottom: 16px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
          4
        </div>
        <div style="font-size: 15px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 6px;">PACU Recovery</div>
        <div style="font-size: 12.5px; line-height: 1.6; color: #5B6480;">Observation in post-anaesthesia care unit until fully awake and pain-free.</div>
      </div>

      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 18px; padding: 24px; display: flex; flex-direction: column; position: relative;">
        <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 15px; font-weight: 800; margin-bottom: 16px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
          5
        </div>
        <div style="font-size: 15px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 6px;">Multimodal Care</div>
        <div style="font-size: 12.5px; line-height: 1.6; color: #5B6480;">Continuous epidural or patient-controlled analgesia for early mobility.</div>
      </div>

      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 18px; padding: 24px; display: flex; flex-direction: column; position: relative;">
        <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 15px; font-weight: 800; margin-bottom: 16px; box-shadow: 0 8px 18px -6px rgba(22,163,74,.5);">
          6
        </div>
        <div style="font-size: 15px; font-weight: 800; color: #12305F; line-height: 1.3; margin-bottom: 6px;">Clinic Follow-Up</div>
        <div style="font-size: 12.5px; line-height: 1.6; color: #5B6480;">Routine pain score checkup, physiotherapy sync, and functional wellness.</div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       12. SPECIALIST FACULTY SPOTLIGHT (Dignified Medical Badges)
  ============================================================ -->
  <section id="team" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div class="pain-g-head" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: end; margin-bottom: 44px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
          <i data-lucide="user-check" style="width: 14px; height: 14px;"></i>Medical Faculty
        </div>
        <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0;">
          Meet our <em class="serif" style="color: #2E8B3C;">anaesthesia &amp; pain faculty.</em>
        </h2>
      </div>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Senior anaesthesiologists and interventional pain specialists delivering safe perioperative care.
      </p>
    </div>

    <div class="pain-g-team" style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
      
      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 22px; padding: 32px; display: flex; gap: 22px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 76px; height: 76px; border-radius: 18px; background: linear-gradient(135deg, #183C66, #235A94); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 26px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          AN
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Anaesthesiology &amp; Pain Division
          </div>
          <div style="font-size: 20px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Sukhda Anaesthesia &amp; Pain Team</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 10px;">MD / DNB / DA Anaesthesiology · Fellowship in Interventional Pain</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 14px;">Experienced anaesthetists providing high-risk surgical anaesthesia, ultrasound-guided regional nerve blocks, labor epidurals, and chronic spine pain injections.</p>
          <div style="display: flex; gap: 6px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 3px 8px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 11px; height: 11px;"></i>USG Blocks</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 3px 8px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 11px; height: 11px;"></i>Labor Epidural</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 3px 8px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 11px; height: 11px;"></i>Spine Pain</span>
          </div>
        </div>
      </div>

      <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 22px; padding: 32px; display: flex; gap: 22px; align-items: flex-start; box-shadow: 0 16px 40px -28px rgba(11,30,60,.35);">
        <div style="width: 76px; height: 76px; border-radius: 18px; background: linear-gradient(135deg, #183C66, #235A94); color: #7DCB6B; display: flex; align-items: center; justify-content: center; font-size: 26px; font-weight: 800; flex-shrink: 0; box-shadow: 0 12px 24px -8px rgba(11,30,60,.4);">
          AM
        </div>
        <div style="flex-grow: 1;">
          <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #16A34A; background: #F0FDF4; padding: 3px 9px; border-radius: 6px; margin-bottom: 6px;">
            <i data-lucide="shield-check" style="width: 12px; height: 12px;"></i>Internal Medicine &amp; Perioperative Safety
          </div>
          <div style="font-size: 20px; font-weight: 800; color: #12305F; line-height: 1.25; margin-bottom: 4px;">Dr. Amit Mehta</div>
          <div style="font-size: 13px; font-weight: 600; color: #5B6480; margin-bottom: 10px;">MD (AIIMS) · Founder &amp; Director</div>
          <p style="font-size: 13.5px; line-height: 1.65; color: #5B6480; margin: 0 0 14px;">Pre-operative cardiac and metabolic risk stratification, diabetic optimization, and post-surgical medical stabilization.</p>
          <div style="display: flex; gap: 6px; flex-wrap: wrap;">
            <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 3px 8px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 11px; height: 11px;"></i>AIIMS Alumnus</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 3px 8px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 11px; height: 11px;"></i>Pre-Op Fitness</span>
            <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 600; background: #EAF3EA; color: #2E8B3C; padding: 3px 8px; border-radius: 6px;"><i data-lucide="check-circle-2" style="width: 11px; height: 11px;"></i>Critical Care</span>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       13. FREQUENTLY ASKED QUESTIONS (Complete 6 Question Grid)
  ============================================================ -->
  <section id="faqs" class="pain-container-pad" style="max-width: 1240px; margin: 92px auto 0; padding: 0 32px;">
    <div style="text-align: center; max-width: 680px; margin: 0 auto 48px;">
      <div style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #2E8B3C; padding: 7px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 18px;">
        <i data-lucide="help-circle" style="width: 14px; height: 14px;"></i>Clear Answers
      </div>
      <h2 style="font-size: clamp(30px, 3.4vw, 42px); font-weight: 800; line-height: 1.12; letter-spacing: -0.032em; color: #12305F; margin: 0 0 14px;">
        Frequently asked <em class="serif" style="color: #2E8B3C;">questions.</em>
      </h2>
      <p style="font-size: 16px; line-height: 1.75; color: #5B6480; margin: 0;">
        Answers to common questions regarding consultations, procedures, admissions, and insurance panels.
      </p>
    </div>

    <div class="pain-g-faq" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;">
      
      <!-- Left 3 FAQs -->
      <div style="display: flex; flex-direction: column; gap: 14px;">
        <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; overflow: hidden;">
          <button type="button" onclick="toggleFaq('faq_1')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer; font-family: inherit;">
            <span>What is the difference between general anaesthesia and regional anaesthesia?</span>
            <i id="faq_1_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_1" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            General anaesthesia renders you completely unconscious and asleep during surgery. Regional anaesthesia (like spinal anaesthesia, epidurals, or nerve blocks) numbs only the specific part of the body undergoing surgery while you remain comfortably relaxed, awake, or lightly sedated.
          </div>
        </div>

        <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; overflow: hidden;">
          <button type="button" onclick="toggleFaq('faq_3')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer; font-family: inherit;">
            <span>How does a labor epidural work for normal delivery?</span>
            <i id="faq_3_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_3" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            A tiny, flexible catheter is placed in the epidural space of your lower back. Low-dose local anaesthetic medication is continuously infused, blocking the pain of contractions while preserving muscle strength so you can push easily when it is time to deliver.
          </div>
        </div>

        <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; overflow: hidden;">
          <button type="button" onclick="toggleFaq('faq_5')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer; font-family: inherit;">
            <span>Are interventional pain procedures painful?</span>
            <i id="faq_5_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_5" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Interventional pain injections are performed under local numbing anaesthesia in our sterile procedure room. Patients feel only a minor initial pinch, and the procedure takes only 15 to 20 minutes with same-day walkout discharge.
          </div>
        </div>
      </div>

      <!-- Right 3 FAQs -->
      <div style="display: flex; flex-direction: column; gap: 14px;">
        <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; overflow: hidden;">
          <button type="button" onclick="toggleFaq('faq_2')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer; font-family: inherit;">
            <span>Why is a Pre-Anaesthesia Checkup (PAC) required before surgery?</span>
            <i id="faq_2_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_2" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            A PAC allows the anaesthetist to review your medical history, heart and lung fitness, medications, allergies, and blood reports to choose the safest anaesthetic plan and prevent any unexpected complications during surgery.
          </div>
        </div>

        <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; overflow: hidden;">
          <button type="button" onclick="toggleFaq('faq_4')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer; font-family: inherit;">
            <span>Can chronic back pain and sciatica be treated without surgery?</span>
            <i id="faq_4_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_4" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes! In many cases, fluoroscopy-guided transforaminal epidural steroid injections (TFESI) directly reduce nerve swelling and inflammation around the slipped disc, relieving pain for months and often avoiding the need for surgery.
          </div>
        </div>

        <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 16px; overflow: hidden;">
          <button type="button" onclick="toggleFaq('faq_6')" style="width: 100%; text-align: left; background: none; border: none; padding: 20px 22px; font-size: 15px; font-weight: 700; color: #12305F; display: flex; align-items: center; justify-content: space-between; gap: 14px; cursor: pointer; font-family: inherit;">
            <span>Are anaesthesia and pain management services covered under insurance?</span>
            <i id="faq_6_icon" data-lucide="chevron-down" style="width: 18px; height: 18px; color: #2E8B3C; flex-shrink: 0; transition: transform .25s ease;"></i>
          </button>
          <div id="faq_6" style="display: none; padding: 0 22px 20px; font-size: 14px; line-height: 1.7; color: #5B6480; border-top: 1px solid #F1F5F9;">
            Yes, all anaesthesia care for surgeries, labor epidural analgesia, and interventional pain procedures for chronic spinal or cancer pain are fully covered under Ayushman Bharat (PMJAY) and private health insurance TPAs.
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
       14. CASHLESS INSURANCE & TPA EMPANELLED PARTNERS
  ============================================================ -->
  <section class="pain-container-pad" style="max-width: 1240px; margin: 80px auto 0; padding: 0 32px;">
    <div style="background: #FFFFFF; border: 1px solid var(--pain-border); border-radius: 20px; padding: 32px 36px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 800; text-transform: uppercase; color: #16A34A; letter-spacing: 0.08em; margin-bottom: 4px;">
          <i data-lucide="shield-check" style="width: 15px; height: 15px;"></i>Hassle-Free Cashless Healthcare
        </div>
        <div style="font-size: 18px; font-weight: 800; color: #12305F;">Empanelled with All Major TPA &amp; Corporate Insurers</div>
        <div style="font-size: 13.5px; color: #5B6480; margin-top: 2px;">Star Health · HDFC ERGO · ICICI Lombard · Care Health · Niva Bupa · PM-JAY Ayushman Bharat</div>
      </div>
      <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 8px; background: #EAF3EA; color: #15803D; padding: 12px 22px; border-radius: 10px; font-size: 14px; font-weight: 700; border: 1px solid #BBF7D0;">
        Check Insurance Policy Coverage &rarr;
      </a>
    </div>
  </section>


  <!-- ============================================================
       15. BOTTOM CTA & DIRECT HOSPITAL ACCESS CARD
  ============================================================ -->
  <section class="pain-container-pad" style="max-width: 1240px; margin: 0 auto; padding: 92px 32px 100px;">
    <div class="pain-g-cta" style="background: linear-gradient(135deg, #183C66 0%, #235A94 52%, #2D6BAE 100%); border-radius: 28px; padding: 56px 48px; color: #F7FAF7; display: grid; grid-template-columns: 1.2fr .8fr; gap: 48px; align-items: center; position: relative; overflow: hidden; box-shadow: 0 28px 64px -28px rgba(16,40,66,.55);">
      <div style="position: absolute; top: -60px; right: -60px; width: 260px; height: 260px; border-radius: 50%; background: radial-gradient(circle, rgba(125,203,107,.25), transparent 70%);"></div>
      
      <div style="position: relative; z-index: 2;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(125,203,107,.14); border: 1px solid rgba(125,203,107,.32); color: #7DCB6B; padding: 6px 14px; border-radius: 999px; font-size: 11.5px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; margin-bottom: 22px;">
          <i data-lucide="heart-handshake" style="width: 14px; height: 14px;"></i>Compassionate Care Starts Here
        </div>
        <h2 style="font-size: clamp(32px, 3.8vw, 46px); font-weight: 800; line-height: 1.1; letter-spacing: -0.034em; color: #FFFFFF; margin: 0 0 16px;">
          Experience freedom from pain with <em class="serif" style="color: #7DCB6B;">specialized pain care.</em>
        </h2>
        <p style="font-size: 16px; line-height: 1.72; color: rgba(247,250,247,.8); max-width: 520px; margin: 0 0 32px;">
          Consult our anaesthesia and interventional pain specialists for surgical planning or chronic pain relief.
        </p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap;">
          <a href="/v1/#contact" style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #16A34A, #15803D); color: #FFFFFF; padding: 15px 28px; border-radius: 12px; font-size: 15px; font-weight: 700; box-shadow: 0 14px 30px -10px rgba(22,163,74,.7);">
            <i data-lucide="calendar-check" style="width: 17px; height: 17px;"></i>Book Consultation
          </a>
          <a href="https://wa.me/919996544005?text=Hello%20Sukhda%20Hospital,%20I%20would%20like%20to%20consult%20regarding%20Anaesthesia%20and%20Pain%20Management" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.24); color: #FFFFFF; padding: 15px 24px; border-radius: 12px; font-size: 15px; font-weight: 700; backdrop-filter: blur(6px);">
            <i data-lucide="message-circle" style="width: 17px; height: 17px; color: #7DCB6B;"></i>WhatsApp Consult
          </a>
        </div>
      </div>

      <!-- Access & Emergency Card -->
      <div style="position: relative; z-index: 2; background: rgba(16,40,66,.75); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.16); border-radius: 20px; padding: 28px;">
        <div style="font-size: 13px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: #7DCB6B; margin-bottom: 12px;">
          Direct Hospital Access
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
/* ================================================================
   INTERACTIVE SCRIPTS: PAIN TAB NAVIGATOR & FAQ TOGGLES
================================================================ */

function switchPainTab(tabId, btn) {
  document.querySelectorAll('.pain-tab-selector').forEach(el => el.classList.remove('active'));
  btn.classList.add('active');

  document.querySelectorAll('.pain-tab-pane').forEach(el => el.style.display = 'none');

  const targetPane = document.getElementById('tab-content-' + tabId);
  if (targetPane) {
    targetPane.style.display = 'block';
  }

  if (window.lucide) {
    lucide.createIcons();
  }
}

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
});
</script>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
