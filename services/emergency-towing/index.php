<?php
/**
 * Twin Cities Towing INC — Emergency Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Emergency Towing Richmond TX | 24/7 | Twin Cities Towing INC';
$pageDescription = '24/7 emergency towing in Richmond, TX with fast response — 20 to 40 minutes to most Fort Bend County locations. No hold music, no call centers. Real dispatch, real drivers.';
$ogImage         = $clientPhotos[4];
$currentPage     = 'emergency-towing';

$serviceFaqs = [
    ['q' => 'How fast can Twin Cities Towing respond to an emergency in Richmond, TX?', 'a' => 'Most emergency calls within Richmond and Fort Bend County see a driver on-site within 20–40 minutes. We dispatch immediately upon your call — no hold queue, no transfer to a national center. Your location and the nearest available driver determine ETA, and we confirm that number before you hang up.'],
    ['q' => 'Do you respond to highway breakdowns on I-69 and Highway 90?', 'a' => 'Yes. We respond regularly to breakdowns and accidents along I-69 (US-59), Highway 90, Business 90, FM 359, and all major Fort Bend County roadways. We coordinate with TxDOT and law enforcement when needed for highway-side safety.'],
    ['q' => 'Are you available at 3am on a Sunday?', 'a' => 'Absolutely. 24/7 means every hour of every day — including holidays, overnight, and weekends. There are no off-hours at Twin Cities Towing. If you\'re stranded, call and we will come.'],
    ['q' => 'What information do I need when I call for emergency towing?', 'a' => 'Just your location (address, mile marker, or cross streets) and what kind of vehicle you have. We\'ll handle the rest. If you\'re not sure where you are, give us a nearby landmark — we know Fort Bend County roads well.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Emergency Towing']]],
        ['@type' => 'Service', '@id' => $domain . '/services/emergency-towing/#service',
         'name' => 'Emergency Towing', 'url' => $domain . '/services/emergency-towing',
         'description' => '24/7 emergency towing in Richmond TX with fast response times throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Emergency Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   EMERGENCY TOWING — page-specific premium layer
   Theme: "Urgency / Live Dispatch" — dark bands, beacon pulses,
   danger-token accents, radar rings.
   Techniques: C1 layered hero (radial beacon gradient + noise),
   C3 dividers x2 (stacked parallelograms + jagged bolt edge),
   C7 signature dark urgency band w/ pulsing dispatch strip,
   C6.4 glass process cards, staggered asymmetric why-grid,
   tinted FAQ rotation, floating radar accents, C5 balance.
   Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---------- typographic balance on every heading ---------- */
h1, h2, h3, h4 { text-wrap: balance; }

/* ============================================================
   T1 — LAYERED HERO (off-center beacon radial + noise)
   ============================================================ */
.emrg-hero { isolation: isolate; }
.emrg-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 30% 30%, rgba(var(--color-primary-rgb), 0.55) 0%, transparent 60%),
    radial-gradient(ellipse at 78% 72%, color-mix(in srgb, var(--color-danger) 26%, transparent) 0%, transparent 46%),
    linear-gradient(160deg,
      rgba(var(--color-primary-rgb), 0.95) 0%,
      rgba(var(--color-primary-rgb), 0.82) 55%,
      rgba(var(--color-primary-rgb), 0.92) 100%);
  z-index: 1;
}
.emrg-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='en'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.95' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23en)' opacity='0.05'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.emrg-hero .hero-overlay { background: transparent; }
.emrg-hero .hero-content { z-index: 2; }
.emrg-hero .hero-title {
  font-size: clamp(var(--font-size-4xl), 6vw, var(--font-size-6xl));
  line-height: 1.06;
  letter-spacing: -0.015em;
  text-transform: uppercase;
}
.emrg-hero .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  background: color-mix(in srgb, var(--color-danger) 16%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-danger) 45%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  color: var(--color-white);
}
/* live beacon dot inside the hero eyebrow */
.emrg-hero .hero-eyebrow::before {
  content: '';
  width: var(--space-2);
  height: var(--space-2);
  border-radius: var(--radius-full);
  background: var(--color-danger);
  margin-right: var(--space-2);
  animation: emrg-beacon 1.4s ease-in-out infinite;
}
@keyframes emrg-beacon {
  0%, 100% { box-shadow: 0 0 0 0 color-mix(in srgb, var(--color-danger) 55%, transparent); }
  60%      { box-shadow: 0 0 0 var(--space-2) transparent; }
}

/* Ticker: hazard-striped edge, unique to this page */
.emrg-ticker.ticker-strip {
  background: var(--color-dark);
  border-top: var(--space-1) solid var(--color-danger);
  border-bottom: 1px solid color-mix(in srgb, var(--color-danger) 35%, transparent);
}

/* ============================================================
   T2 — SVG SECTION DIVIDERS (parallelograms + jagged bolt)
   ============================================================ */
.emrg-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.emrg-divider svg {
  display: block;
  width: 100%;
  height: clamp(var(--space-8), 5vw, var(--space-16));
}
/* Style A: stacked parallelograms (white detail -> light why) */
.emrg-divider--planes {
  background: var(--color-white);
  color: var(--color-light);
}
.emrg-divider--planes .plane-soft { opacity: 0.4; }
/* Style B: jagged bolt edge (dark band -> CTA gradient) */
.emrg-divider--bolt {
  background: var(--color-primary);
  color: var(--color-dark);
}

/* ============================================================
   T3 — SIGNATURE: DARK URGENCY BAND + PULSING DISPATCH STRIP
   ============================================================ */
.emrg-band {
  position: relative;
  overflow: hidden;
  background:
    radial-gradient(ellipse at 50% 0%, rgba(var(--color-accent-rgb), 0.10) 0%, transparent 55%),
    linear-gradient(165deg, var(--color-dark) 0%, var(--color-dark-alt) 100%);
  padding: var(--space-16) 0;
}
.emrg-band::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='bn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23bn)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.emrg-band .container { position: relative; z-index: 1; }
.emrg-band .section-header h2 { color: var(--color-white); }
.emrg-band .section-header .eyebrow { color: var(--color-accent); }

/* The pulsing dispatch strip */
.emrg-dispatch-strip {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-3) var(--space-4);
  margin: 0 auto var(--space-10);
  max-width: fit-content;
  padding: var(--space-3) var(--space-6);
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-danger) 12%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-danger) 40%, transparent);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--color-white);
  animation: emrg-strip-glow 2.2s ease-in-out infinite;
}
.emrg-pulse-dot {
  width: var(--space-2);
  height: var(--space-2);
  border-radius: var(--radius-full);
  background: var(--color-danger);
  flex-shrink: 0;
  animation: emrg-beacon 1.4s ease-in-out infinite;
}
.emrg-strip-sep { color: color-mix(in srgb, var(--color-white) 35%, transparent); }
@keyframes emrg-strip-glow {
  0%, 100% { box-shadow: 0 0 0 0 color-mix(in srgb, var(--color-danger) 25%, transparent); }
  50%      { box-shadow: 0 0 0 var(--space-1) color-mix(in srgb, var(--color-danger) 12%, transparent); }
}

/* Glass process cards on the dark band (C6.4) */
.emrg-band .process-steps {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-5);
  list-style: none;
  margin: 0;
  padding: 0;
}
.emrg-band .process-step {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  transition: border-color var(--transition-base), transform var(--transition-base);
}
.emrg-band .process-step:hover {
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
  transform: translateY(calc(-1 * var(--space-1)));
}
.emrg-band .process-step-num {
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: var(--space-10);
  height: var(--space-10);
  border-radius: var(--radius-full);
  background: linear-gradient(135deg, var(--color-danger) 0%, color-mix(in srgb, var(--color-danger) 55%, var(--color-primary)) 100%);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 800;
  box-shadow: var(--shadow-md);
}
.emrg-band .process-step h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.emrg-band .process-step .prose {
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  font-size: var(--font-size-sm);
  margin: 0;
}

/* ============================================================
   T4 — ASYMMETRIC / STAGGERED WHY-GRID
   ============================================================ */
.emrg-why { position: relative; overflow: hidden; }
.emrg-why .grid-2 {
  grid-template-columns: 0.9fr 1.1fr;
  align-items: start;
}
.emrg-why .benefit-item:nth-child(even) {
  transform: translateY(var(--space-8));
}
.emrg-why .benefit-item {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  position: relative;
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
/* corner tick — response-time motif */
.emrg-why .benefit-item::after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: var(--space-8);
  height: var(--space-8);
  background: linear-gradient(225deg, color-mix(in srgb, var(--color-danger) 22%, transparent) 0%, transparent 55%);
  pointer-events: none;
}
.emrg-why .benefit-item:hover { box-shadow: var(--shadow-md); }

/* ============================================================
   T5 — TINTED CARD ROTATION (benefits + FAQ, never all-white)
   ============================================================ */
.emrg-why .benefit-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-danger) 6%, var(--color-white));
}
.emrg-why .benefit-item:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-primary) 7%, var(--color-white));
}
.emrg-why .benefit-item:nth-child(4n+3) {
  background: color-mix(in srgb, var(--color-accent) 7%, var(--color-white));
}
.emrg-why .benefit-item:nth-child(4n+4) {
  background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white));
}
.emrg-faq .faq-item {
  border-top: var(--space-1) solid transparent;
}
.emrg-faq .faq-item:nth-child(3n+1) {
  background: color-mix(in srgb, var(--color-danger) 5%, var(--color-white));
  border-top-color: color-mix(in srgb, var(--color-danger) 60%, transparent);
}
.emrg-faq .faq-item:nth-child(3n+2) {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
  border-top-color: color-mix(in srgb, var(--color-accent) 60%, transparent);
}
.emrg-faq .faq-item:nth-child(3n+3) {
  background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white));
  border-top-color: color-mix(in srgb, var(--color-primary) 60%, transparent);
}

/* ============================================================
   T6 — FLOATING DECORATIVE ACCENTS (radar rings, 4–7% opacity)
   ============================================================ */
.emrg-float {
  position: absolute;
  pointer-events: none;
  z-index: 0;
}
.emrg-float--radar {
  top: var(--space-12);
  right: calc(-1 * var(--space-16));
  width: clamp(var(--space-16), 22vw, calc(var(--space-16) * 4.5));
  aspect-ratio: 1;
  border-radius: var(--radius-full);
  border: 1px solid var(--color-danger);
  opacity: 0.06;
  animation: emrg-radar 5s ease-out infinite;
}
.emrg-float--radar::before,
.emrg-float--radar::after {
  content: '';
  position: absolute;
  border-radius: var(--radius-full);
  border: 1px solid var(--color-danger);
}
.emrg-float--radar::before { inset: 22%; }
.emrg-float--radar::after { inset: 44%; background: color-mix(in srgb, var(--color-danger) 30%, transparent); }
.emrg-float--crosshair {
  bottom: var(--space-16);
  left: calc(-1 * var(--space-12));
  width: clamp(var(--space-16), 15vw, calc(var(--space-16) * 3));
  aspect-ratio: 1;
  border-radius: var(--radius-full);
  border: var(--space-1) dashed var(--color-primary);
  opacity: 0.05;
  animation: emrg-sweep 40s linear infinite;
}
@keyframes emrg-radar {
  from { transform: scale(0.92); opacity: 0.07; }
  70%  { transform: scale(1.04); opacity: 0.04; }
  to   { transform: scale(0.92); opacity: 0.07; }
}
@keyframes emrg-sweep {
  from { transform: rotate(0deg); }
  to   { transform: rotate(-360deg); }
}

/* ============================================================
   Detail split + answer block accents
   ============================================================ */
.emrg-detail { position: relative; overflow: hidden; }
.emrg-detail .split { position: relative; z-index: 1; }
.emrg-detail .split-content .eyebrow {
  color: var(--color-danger);
  border-bottom: 2px solid color-mix(in srgb, var(--color-danger) 50%, transparent);
  padding-bottom: var(--space-1);
}
.emrg-detail .img-reveal {
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
}
.emrg-detail .service-sidebar-card {
  border-radius: var(--radius-lg);
  border-left: var(--space-1) solid var(--color-danger);
  background: color-mix(in srgb, var(--color-danger) 4%, var(--color-white));
  box-shadow: var(--shadow-card);
}
.emrg-detail .answer-block {
  background: linear-gradient(135deg, color-mix(in srgb, var(--color-danger) 7%, var(--color-white)) 0%, color-mix(in srgb, var(--color-accent) 6%, var(--color-white)) 100%);
  border-radius: var(--radius-lg);
  border: 1px solid color-mix(in srgb, var(--color-danger) 22%, transparent);
}

.emrg-detail .service-sidebar-card h4 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  letter-spacing: 0.05em;
  text-transform: uppercase;
  font-size: var(--font-size-sm);
  border-bottom: 1px solid color-mix(in srgb, var(--color-danger) 25%, transparent);
  padding-bottom: var(--space-3);
}
.emrg-detail .service-sidebar-card ul li {
  transition: transform var(--transition-fast);
}
.emrg-detail .service-sidebar-card ul li:hover {
  transform: translateX(var(--space-1));
}
.emrg-detail a:focus-visible,
.emrg-band a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
  border-radius: var(--radius-sm);
}

/* Closing CTA glow */
.emrg-closing { position: relative; overflow: hidden; }
.emrg-closing::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 0%, color-mix(in srgb, var(--color-danger) 14%, transparent) 0%, transparent 60%);
  pointer-events: none;
}
.emrg-closing .container { position: relative; }

/* ============================================================
   Responsive collapse + reduced motion (pulses fully disabled)
   ============================================================ */
@media (max-width: 1024px) {
  .emrg-band .process-steps { grid-template-columns: 1fr; }
  .emrg-why .grid-2 { grid-template-columns: 1fr; }
  .emrg-why .benefit-item:nth-child(even) { transform: none; }
}
@media (max-width: 640px) {
  .emrg-dispatch-strip {
    border-radius: var(--radius-lg);
    padding: var(--space-3) var(--space-4);
  }
  .emrg-float { display: none; }
  .emrg-divider svg { height: var(--space-6); }
  .emrg-hero .hero-title { font-size: var(--font-size-4xl); }
}
@media (prefers-reduced-motion: reduce) {
  .emrg-hero .hero-eyebrow::before,
  .emrg-pulse-dot,
  .emrg-dispatch-strip,
  .emrg-float--radar,
  .emrg-float--crosshair {
    animation: none;
  }
  .emrg-band .process-step { transition: none; }
}
</style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services/" itemprop="item"><span itemprop="name">Services</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Emergency Towing</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero emrg-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[4]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
  <path d="M12 9v4" />
  <path d="M12 17h.01" /></svg>
      24/7 &bull; Immediate Dispatch &bull; No Hold Music
    </div>
    <h1 class="hero-title" id="service-hero-heading">Emergency Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Stranded on I-69, Highway 90, or a back road in Fort Bend County? We dispatch the moment you call — 20 to 40 minutes to most locations, around the clock.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Emergency Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<div class="ticker-strip emrg-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9200;&nbsp; Immediate Dispatch — No Hold Queue</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20–40 Min ETA in Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127942;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; Immediate Dispatch — No Hold Queue</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20–40 Min ETA in Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127942;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- SERVICE DETAIL -->
<section class="section-white emrg-detail" style="padding: var(--space-16) 0;">
  <div class="emrg-float emrg-float--radar" aria-hidden="true"></div>
  <div class="emrg-float emrg-float--crosshair" aria-hidden="true"></div>
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
  <path d="M12 9v4" />
  <path d="M12 17h.01" /></svg>
          Emergency Towing in Richmond TX
        </span>
        <h2>When It Can't Wait, We're Already Headed Your Way</h2>
        <div class="prose">
          <p>Emergency towing is different from scheduled service. Your car is disabled, you're on a roadside shoulder, it's dark, it's late, or traffic is moving around you. You don't need a promise — you need a driver, fast. Twin Cities Towing INC has operated 24 hours a day in Richmond and Fort Bend County since 2011, and our emergency response is built around one principle: dispatch first, paperwork second.</p>
          <p>When you call, a real local dispatcher answers. We ask for your location and vehicle type — nothing else to start — and have the nearest driver heading your way within minutes. Most locations in Richmond, Rosenberg, Sugar Land, and Missouri City see our truck in 20 to 40 minutes. We confirm your ETA before hanging up so you're not guessing in the dark.</p>
          <p>We respond to all types of emergency situations: highway breakdowns, post-accident recovery, engine failures, vehicles that won't start, crashes in parking lots, and overnight breakdowns with no one nearby. We regularly work alongside TxDOT, Fort Bend County Sheriff's Office, and Richmond Fire when scenes require coordination — keeping you, your vehicle, and other drivers safer while the situation is resolved.</p>
          <p>No call center, no routing to a third-party driver who may or may not show. Just a direct local dispatcher, a local driver, and a real truck. That's what 13 years of serving this community looks like.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[9]); ?>"
               alt="Emergency towing response in Richmond TX by Twin Cities Towing"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Emergency Response</h4>
          <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Available every hour of every day</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> 20–40 min ETA in Fort Bend County</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> No hold queues or call centers</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Highway &amp; back-road response</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Coordinates with law enforcement</li>
          </ul>
          <a href="/contact/" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Call for Emergency Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>How fast does emergency towing arrive in Richmond, TX?</h2>
      <p>Twin Cities Towing INC typically reaches most Richmond and Fort Bend County locations within 20–40 minutes of your call. Dispatch is immediate — no hold, no transfer, no delay. Your ETA is confirmed before you hang up.</p>
    </div>
  </div>
</section>

<!-- DIVIDER: stacked parallelograms into why band -->
<div class="emrg-divider emrg-divider--planes" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <polygon class="plane-soft" fill="currentColor" points="0,20 1200,40 1200,80 0,80"/>
    <polygon fill="currentColor" points="0,40 1200,20 1200,80 0,80"/>
  </svg>
</div>

<!-- WHY CHOOSE US -->
<section class="section-light emrg-why" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What Sets Our Emergency Towing Apart in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M13 2a9 9 0 0 1 9 9" />
  <path d="M13 6a5 5 0 0 1 5 5" />
  <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        <div>
          <h3>Real Dispatcher, Not a Robot</h3>
          <p class="prose">When you call Twin Cities Towing in an emergency, a person answers. No automated system, no national routing, no sitting on hold. A local dispatcher who knows Richmond's roads takes your call and gets you help immediately.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" /></svg>
        <div>
          <h3>Under-2-Minute Dispatch</h3>
          <p class="prose">From your first word to driver departure is under 2 minutes on most calls. We've built our dispatch process around eliminating delay — because in a roadside emergency, every additional minute of exposure matters.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
  <path d="m9 12 2 2 4-4" /></svg>
        <div>
          <h3>Scene Safety — Especially on Highways</h3>
          <p class="prose">Highway breakdowns are dangerous. Our drivers are trained to work safely on active road shoulders, use proper lighting and warning equipment, and position the tow truck to protect you from passing traffic while they load your vehicle.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z" />
  <path d="M15 5.764v15" />
  <path d="M9 3.236v15" /></svg>
        <div>
          <h3>13 Years of Local Road Knowledge</h3>
          <p class="prose">We know every interchange, every frontage road, every hidden exit along I-69, Hwy 90, and the county roads of Fort Bend. That knowledge means faster routing to your location — not a driver using GPS and guessing at the turn.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS — SIGNATURE DARK URGENCY BAND -->
<section class="emrg-band">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">How It Works</span>
      <h2>Emergency Towing — From Your Call to Safe Delivery</h2>
    </div>
    <div class="emrg-dispatch-strip" aria-hidden="true">
      <span class="emrg-pulse-dot"></span>
      <span>Dispatch Live Now</span>
      <span class="emrg-strip-sep">&bull;</span>
      <span>Richmond &amp; Fort Bend County</span>
      <span class="emrg-strip-sep">&bull;</span>
      <span>Under 2 Minutes to Wheels Rolling</span>
    </div>
    <ol class="process-steps" data-animate="fade-up">
      <li class="process-step">
        <div class="process-step-num">1</div>
        <div>
          <h3>Call — We Answer Immediately</h3>
          <p class="prose">Give us your location and vehicle type. We confirm your ETA right then, and the nearest driver departs within 2 minutes. No transfers, no waiting.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">2</div>
        <div>
          <h3>Driver Heads Directly to You</h3>
          <p class="prose">We route the nearest driver to your exact position. You'll get a confirmation and can track progress. No uncertainty about whether someone is actually coming.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">3</div>
        <div>
          <h3>Safe Load &amp; Secure</h3>
          <p class="prose">Our driver assesses your vehicle on arrival, sets up proper scene safety, and loads with the right equipment for your vehicle type. Everything secured before moving an inch.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">4</div>
        <div>
          <h3>Delivered to Your Destination</h3>
          <p class="prose">We take your vehicle to the mechanic, dealership, or home address you choose. You're never pressured to use a specific shop — your vehicle goes where you need it.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- DIVIDER: jagged bolt edge out of the dark band -->
<div class="emrg-divider emrg-divider--bolt" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,0 L0,26 L150,14 L290,34 L420,10 L560,38 L700,16 L840,34 L980,12 L1100,30 L1200,18 L1200,0 Z" fill="currentColor"/></svg>
</div>

<!-- MID-PAGE CTA -->
<section class="cta-banner" aria-labelledby="emerg-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Stranded Right Now?</span>
    <h2 id="emerg-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Call Now — We Dispatch in Under 2 Minutes</h2>
    <p>Don't wait on the shoulder any longer than you have to. Twin Cities Towing INC is local, available right now, and has been responding to Fort Bend County emergencies since 2011.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Emergency Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section-light emrg-faq" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Emergency Towing FAQs &mdash; Richmond, TX</h2>
    </div>
    <div class="faq-grid" data-animate="fade-up" data-p1-dynamic>
      <?php foreach ($serviceFaqs as $faq): ?>
      <div class="faq-item">
        <div class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:20px;height:20px;"><circle cx="12" cy="12" r="10" />
  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
  <path d="M12 17h.01" /></svg></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<section class="closing-cta emrg-closing" aria-labelledby="emerg-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Emergency Towing &mdash; 24/7</span>
      <h2 id="emerg-close-heading">Richmond's Go-To Emergency Tow — Any Hour, Any Road</h2>
      <p class="closing-lead">Twin Cities Towing INC has been the call Fort Bend County drivers make in a real emergency for over 13 years. Whether it's 2pm or 2am, we answer, we dispatch, and we arrive. No exceptions.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7 Dispatch
      </a>
      <a href="/service-area/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        View Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
