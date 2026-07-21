<?php
/**
 * Twin Cities Towing INC — Breakdown Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Breakdown Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Vehicle breakdown towing in Richmond, TX for engine failures, transmission problems, and cars that won\'t start. Twin Cities Towing INC gets your car to a mechanic fast. 24/7.';
$ogImage         = $clientPhotos[24];
$currentPage     = 'breakdown-towing';

$serviceFaqs = [
    ['q' => 'What if my car breaks down on a highway in Richmond, TX?', 'a' => 'Highway breakdowns are treated as high-priority calls. Turn on your hazard lights, pull as far onto the shoulder as possible, and call us immediately. We dispatch quickly and arrive with warning equipment to protect you from passing traffic. Don\'t stay in or near the vehicle on an active highway shoulder — get behind the guard rail if possible.'],
    ['q' => 'Can you tell me what\'s wrong with my car when you arrive?', 'a' => 'Our drivers are experienced with common breakdown symptoms and will give you their honest read on what may be happening. However, we\'re tow operators — not mechanics — and won\'t make repair promises or misdiagnose. We can help you get to a mechanic who can do a proper diagnosis. If the issue might be fixable roadside (dead battery, for instance), we\'ll try that first.'],
    ['q' => 'My car died at home and won\'t start — can you still tow it?', 'a' => 'Absolutely. We tow from any location — driveways, parking lots, garages (standard height), streets. If you\'re in a private driveway or parking structure, give us the details when you call and we\'ll confirm access. Most residential and commercial tow pickups present no issues.'],
    ['q' => 'How do I lock my car if the battery is completely dead?', 'a' => 'Most modern vehicles have a mechanical key hidden inside the key fob for battery-dead situations. Your owner\'s manual will show you the hidden key slot location. If you\'re unable to secure the vehicle, stay with it until we arrive — we can help with secure handoff at your destination.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Breakdown Towing']]],
        ['@type' => 'Service', '@id' => $domain . '/services/breakdown-towing/#service',
         'name' => 'Breakdown Towing', 'url' => $domain . '/services/breakdown-towing',
         'description' => 'Vehicle breakdown towing in Richmond TX for mechanical failures. 24/7 availability throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Breakdown Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   Breakdown Towing — page-specific premium styles
   Archetype: "Diagnostic Console" — dark symptom-diagnosis
   signature panel, diagonal + torn-edge dividers, drifting
   spark accent. Tokens only — no hardcoded values.
   ============================================================ */

/* ---------- Typography baseline (C5.5) ---------- */
h1, h2, h3, h4 {
  text-wrap: balance;
}

/* ---------- C1.4 Layered hero: gradient + noise ---------- */
.service-hero {
  min-height: 62vh;
  isolation: isolate;
}
.service-hero .hero-overlay {
  /* base scrim kept subtle; the composed gradient lives on ::before */
  background: rgba(var(--color-primary-rgb), 0.55);
}
.service-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background:
    linear-gradient(
      150deg,
      rgba(var(--color-primary-rgb), 0.94) 0%,
      rgba(var(--color-primary-rgb), 0.72) 48%,
      color-mix(in srgb, var(--color-accent) 22%, transparent) 100%
    );
  pointer-events: none;
}
.service-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.service-hero .hero-content {
  position: relative;
  z-index: 2;
  padding: var(--space-16) var(--space-6) var(--space-12);
}
.service-hero .hero-eyebrow {
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
  background: color-mix(in srgb, var(--color-accent) 10%, transparent);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
}
.service-hero .hero-title {
  position: relative;
  display: inline-block;
  padding-bottom: var(--space-4);
}
.service-hero .hero-title::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%) skewX(-18deg);
  width: var(--space-16);
  height: var(--space-1);
  background: linear-gradient(
    90deg,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 20%, transparent) 100%
  );
  border-radius: var(--radius-full);
}

/* ---------- Ticker accent (page-tinted) ---------- */
.ticker-strip {
  background: linear-gradient(
    90deg,
    var(--color-primary-dark) 0%,
    var(--color-primary) 60%,
    color-mix(in srgb, var(--color-accent) 35%, var(--color-primary)) 100%
  );
  border-top: 2px solid color-mix(in srgb, var(--color-accent) 60%, transparent);
  border-bottom: 1px solid color-mix(in srgb, var(--color-accent) 25%, transparent);
}

/* ---------- C3 Divider style 1: diagonal shear ---------- */
.bd-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.bd-divider svg {
  display: block;
  width: 100%;
  height: var(--space-12);
}
.bd-divider--diagonal {
  background: var(--color-white);
}
.bd-divider--diagonal svg polygon {
  fill: var(--color-dark);
}

/* ---------- C3 Divider style 2: torn organic edge ---------- */
.bd-divider--torn {
  background: var(--color-light);
}
.bd-divider--torn svg path {
  fill: var(--color-primary);
}

/* ---------- Intro split: editorial treatment + floating accent ---------- */
.section-white {
  position: relative;
  overflow: hidden;
}
/* Floating decorative spark — 4-8% opacity, slow drift (C7 accent) */
.section-white::after {
  content: '';
  position: absolute;
  top: var(--space-16);
  right: calc(-1 * var(--space-16));
  width: clamp(var(--space-16), 22vw, calc(var(--space-16) * 5));
  aspect-ratio: 1;
  border-radius: var(--radius-full);
  background: radial-gradient(
    circle at 35% 35%,
    color-mix(in srgb, var(--color-accent) 60%, transparent) 0%,
    transparent 70%
  );
  opacity: 0.06;
  pointer-events: none;
  animation: bd-drift 14s ease-in-out infinite alternate;
}
@keyframes bd-drift {
  from { transform: translate3d(0, 0, 0) scale(1); }
  to   { transform: translate3d(calc(-1 * var(--space-10)), var(--space-12), 0) scale(1.12); }
}
.split-content .eyebrow {
  display: inline-flex;
  align-items: center;
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  border-bottom: 2px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  padding-bottom: var(--space-1);
}
.split-content h2 {
  position: relative;
}
/* Editorial drop-cap on the opening paragraph (C5.4) */
.split-content .prose > p:first-child::first-letter {
  float: left;
  font-family: var(--font-heading);
  font-size: var(--font-size-5xl);
  font-weight: 700;
  line-height: 0.85;
  padding: var(--space-1) var(--space-2) 0 0;
  color: var(--color-primary);
}
.split .img-reveal,
.split-reverse .img-reveal {
  position: relative;
  box-shadow: var(--shadow-xl);
}
.split-reverse .split-image {
  position: relative;
}
/* Offset accent frame behind image (C11.1) */
.split-reverse .split-image::before {
  content: '';
  position: absolute;
  inset: var(--space-4) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-4);
  border: 2px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  border-radius: var(--radius-lg);
  pointer-events: none;
}

/* ---------- Answer block: tinted AEO panel ---------- */
.answer-block {
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-rgb), 0.06) 0%,
    color-mix(in srgb, var(--color-accent) 7%, transparent) 100%
  );
  border-left-width: var(--space-1);
  position: relative;
  overflow: hidden;
}
.answer-block::after {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-10));
  right: calc(-1 * var(--space-10));
  width: var(--space-16);
  aspect-ratio: 1;
  border-radius: var(--radius-full);
  border: 2px dashed color-mix(in srgb, var(--color-accent) 30%, transparent);
  opacity: 0.5;
  pointer-events: none;
}

/* ============================================================
   SIGNATURE SECTION (C7): Symptom-Diagnosis Console
   The "Why" benefits grid becomes a dark diagnostic panel —
   numbered symptom cards on a glowing rail. Unique to this page.
   ============================================================ */
.bd-diagnosis {
  background:
    radial-gradient(
      ellipse at 18% 12%,
      color-mix(in srgb, var(--color-accent) 14%, transparent) 0%,
      transparent 55%
    ),
    linear-gradient(165deg, var(--color-dark) 0%, var(--color-dark-alt) 100%);
  position: relative;
  overflow: hidden;
}
.bd-diagnosis::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.7' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.04;
  pointer-events: none;
}
.bd-diagnosis .section-header h2 {
  color: var(--color-white);
}
.bd-diagnosis .section-header .eyebrow {
  color: var(--color-accent);
  letter-spacing: 0.24em;
}
.bd-diagnosis .section-header {
  position: relative;
  z-index: 1;
}
/* Diagnosis rail down the center of the grid */
.bd-diagnosis .grid-2 {
  position: relative;
  z-index: 1;
  counter-reset: bd-symptom;
  grid-template-columns: 1.15fr 1fr; /* asymmetric split (C6.1) */
  gap: var(--space-8) var(--space-10);
}
/* Broken-grid offset: right column steps down */
.bd-diagnosis .benefit-item:nth-child(even) {
  transform: translateY(var(--space-8));
}
.bd-diagnosis .benefit-item {
  counter-increment: bd-symptom;
  position: relative;
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 11%, transparent);
  border-left: 3px solid var(--color-accent);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  transition: transform var(--transition-base), border-color var(--transition-base), background var(--transition-base);
}
/* Watermark diagnosis number (01–04) */
.bd-diagnosis .benefit-item::after {
  content: '0' counter(bd-symptom);
  position: absolute;
  top: var(--space-2);
  right: var(--space-4);
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-accent) 60%, transparent);
  opacity: 0.16;
  pointer-events: none;
}
.bd-diagnosis .benefit-item h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
}
.bd-diagnosis .benefit-item p.prose {
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
}
.bd-diagnosis .benefit-item svg {
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
  transition: transform var(--transition-base);
}
.bd-diagnosis .benefit-item:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  background: color-mix(in srgb, var(--color-white) 8%, transparent);
  border-left-color: var(--color-white);
}
.bd-diagnosis .benefit-item:nth-child(even):hover {
  transform: translateY(calc(var(--space-8) - var(--space-1)));
}
.bd-diagnosis .benefit-item:hover svg {
  transform: rotate(-8deg) scale(1.12);
}

/* ---------- Mid-page CTA banner: radial glow + noise (C4.1) ---------- */
.cta-banner {
  background: linear-gradient(
    135deg,
    var(--color-primary-dark) 0%,
    var(--color-primary) 55%,
    var(--color-secondary) 100%
  );
}
.cta-banner::before {
  background:
    radial-gradient(
      ellipse at 50% 0%,
      color-mix(in srgb, var(--color-accent) 24%, transparent) 0%,
      transparent 62%
    );
  opacity: 1;
}
.cta-banner p {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  max-width: var(--bp-tablet);
  margin-left: auto;
  margin-right: auto;
}

/* ---------- FAQ: rotating tinted cards ---------- */
#faq .faq-item {
  border: 1px solid transparent;
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
#faq .faq-item:nth-child(4n+1) {
  background: rgba(var(--color-primary-rgb), 0.07);
}
#faq .faq-item:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-accent) 8%, transparent);
}
#faq .faq-item:nth-child(4n+3) {
  background: rgba(var(--color-secondary-rgb), 0.08);
}
#faq .faq-item:nth-child(4n+4) {
  background: var(--color-white);
  border-color: var(--color-gray-light);
}
#faq .faq-item:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-lg);
  border-color: color-mix(in srgb, var(--color-accent) 35%, transparent);
}
#faq .faq-icon {
  background: linear-gradient(140deg, var(--color-primary) 0%, var(--color-accent) 130%);
  box-shadow: var(--shadow-sm);
}

/* ---------- Closing CTA: top-arc glow (C9.2) ---------- */
.closing-cta {
  position: relative;
  overflow: hidden;
}
.closing-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    ellipse at 50% 100%,
    color-mix(in srgb, var(--color-accent) 18%, transparent) 0%,
    transparent 58%
  );
  pointer-events: none;
}
.closing-cta .container {
  position: relative;
  z-index: 1;
}

/* ---------- Buttons: sheen micro-interaction (C10) ---------- */
.hero-buttons .btn::after,
.closing-actions .btn::after {
  content: '';
  position: absolute;
  top: 0;
  left: calc(-1 * var(--space-16));
  width: var(--space-10);
  height: 100%;
  transform: skewX(-20deg);
  background: linear-gradient(
    90deg,
    transparent 0%,
    color-mix(in srgb, var(--color-white) 35%, transparent) 50%,
    transparent 100%
  );
  transition: left var(--transition-slow);
  pointer-events: none;
}
.hero-buttons .btn:hover::after,
.closing-actions .btn:hover::after {
  left: calc(100% + var(--space-16));
}

/* ---------- Reveal support (fail-open, gated under html.js-anim) ---------- */
html.js-anim .bd-diagnosis .benefit-item {
  opacity: 0;
  transform: translateY(var(--space-4));
  transition: opacity var(--transition-slow), transform var(--transition-slow);
}
html.js-anim .bd-diagnosis .benefit-item.animated,
html.js-anim .bd-diagnosis .benefit-item.revealed {
  opacity: 1;
  transform: translateY(0);
}
html.js-anim .bd-diagnosis .benefit-item:nth-child(even).animated,
html.js-anim .bd-diagnosis .benefit-item:nth-child(even).revealed {
  transform: translateY(var(--space-8));
}

/* ---------- Responsive ---------- */
@media (max-width: 1024px) {
  .bd-diagnosis .grid-2 {
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 768px) {
  .service-hero {
    min-height: 52vh;
  }
  .bd-diagnosis .grid-2 {
    grid-template-columns: 1fr;
    gap: var(--space-5);
  }
  .bd-diagnosis .benefit-item:nth-child(even) {
    transform: none;
  }
  .bd-diagnosis .benefit-item:nth-child(even):hover {
    transform: translateY(calc(-1 * var(--space-1)));
  }
  html.js-anim .bd-diagnosis .benefit-item:nth-child(even).animated,
  html.js-anim .bd-diagnosis .benefit-item:nth-child(even).revealed {
    transform: translateY(0);
  }
  .split-reverse .split-image::before {
    display: none;
  }
  .section-white::after {
    display: none;
  }
  .bd-divider svg {
    height: var(--space-6);
  }
}

/* ---------- Reduced motion ---------- */
@media (prefers-reduced-motion: reduce) {
  .section-white::after {
    animation: none;
  }
  .hero-buttons .btn::after,
  .closing-actions .btn::after {
    display: none;
  }
  .bd-diagnosis .benefit-item,
  .bd-diagnosis .benefit-item svg,
  #faq .faq-item {
    transition: none;
  }
}
</style>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services/" itemprop="item"><span itemprop="name">Services</span></a><meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Breakdown Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[24]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M10.513 4.856 13.12 2.17a.5.5 0 0 1 .86.46l-1.377 4.317" />
  <path d="M15.656 10H20a1 1 0 0 1 .78 1.63l-1.72 1.773" />
  <path d="M16.273 16.273 10.88 21.83a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14H4a1 1 0 0 1-.78-1.63l4.507-4.643" />
  <path d="m2 2 20 20" /></svg>
      Engine Failures &bull; Won't Start &bull; Transmission Issues
    </div>
    <h1 class="hero-title" id="service-hero-heading">Breakdown Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">When your car stops cooperating — anywhere in Fort Bend County — we get it to the right mechanic fast. 24/7 dispatch, 20–40 minute response.</p>
    <div class="hero-buttons">
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
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9889;&nbsp; Engine, Transmission &amp; Electrical</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min Response — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Any Location — Driveway to Highway</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Engine, Transmission &amp; Electrical</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min Response — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Any Location — Driveway to Highway</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[21]); ?>"
               alt="Breakdown towing service in Richmond TX picking up disabled vehicle"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M10.513 4.856 13.12 2.17a.5.5 0 0 1 .86.46l-1.377 4.317" />
  <path d="M15.656 10H20a1 1 0 0 1 .78 1.63l-1.72 1.773" />
  <path d="M16.273 16.273 10.88 21.83a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14H4a1 1 0 0 1-.78-1.63l4.507-4.643" />
  <path d="m2 2 20 20" /></svg>
          Breakdown Towing in Richmond TX
        </span>
        <h2>Your Car Gave Up — We Haven't</h2>
        <div class="prose">
          <p>Mechanical breakdowns happen without warning. A transmission that shifts rough one week can fail completely the next. An engine that's been running hot might overheat and seize before you reach your exit on I-69. An electrical failure can leave you dead in the water in the middle of a Rosenberg parking lot on a Sunday afternoon. Whatever put your vehicle out of commission, Twin Cities Towing INC responds to breakdown calls throughout Fort Bend County 24 hours a day — and has done so since 2011.</p>
          <p>Our first step on any breakdown call is to assess whether there's a simple roadside fix. A dead battery that responds to a jump, for instance, may not require a tow at all. If the issue genuinely requires a shop visit — engine failure, blown transmission, serious electrical fault — we load and transport without delay. We don't waste your time pretending a mechanical failure can be fixed on the side of a road when it can't.</p>
          <p>Breakdown towing pickup locations aren't limited to roadways. We tow from residential driveways, apartment parking lots, commercial parking garages (standard clearance heights), and anywhere else your vehicle happens to be when it gives out. If your car didn't start this morning and has been sitting in your driveway all day, we can pick it up and take it to your preferred shop during regular business hours or at any point through the night.</p>
          <p>We service all of Fort Bend County, including Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno. Common breakdown corridors we cover daily include I-69, Highway 90, Highway 36, FM 359, and FM 762.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What should I do if my car breaks down on the highway in Richmond, TX?</h2>
      <p>Get to the right shoulder as far as possible, turn on hazard lights, and exit the vehicle to stand behind the guard rail away from traffic. Then call Twin Cities Towing INC for immediate dispatch. Don't stay inside a stationary vehicle on an active highway shoulder.</p>
    </div>
  </div>
</section>

<div class="bd-divider bd-divider--diagonal" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon points="0,60 1200,0 1200,60 0,60"/></svg>
</div>

<section class="bd-diagnosis" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Getting Your Broken-Down Vehicle Where It Needs to Go</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z" /></svg>
        <div>
          <h3>Roadside Fix Attempted First</h3>
          <p class="prose">We don't tow when we don't have to. If your breakdown might be solvable on the spot — dead battery, low fuel, tripped killswitch — we check first. Saves you time and money when the fix is simpler than the symptom suggests.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        <div>
          <h3>Pickup from Any Location</h3>
          <p class="prose">Highway, driveway, parking lot, garage — we come to wherever your car stopped. No restriction to roadway-only pickups. If it needs to go to a shop and you can give us the location, we'll get there.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><polygon points="3 11 22 2 13 21 11 13 3 11" /></svg>
        <div>
          <h3>Your Mechanic, Your Call</h3>
          <p class="prose">We deliver to the shop you trust, not one we're affiliated with. Whether that's a dealership in Sugar Land or an independent mechanic in Rosenberg you've used for years — your vehicle goes where you send it.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>Available When Breakdowns Happen</h3>
          <p class="prose">Mechanical failures don't schedule themselves for business hours. We dispatch 24 hours a day, 7 days a week — including the middle of the night, the weekend, and every holiday on the calendar.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="break-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Car Broken Down in Fort Bend County?</span>
    <h2 id="break-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">From Breakdown to Mechanic — One Call, 20–40 Minutes</h2>
    <p>Whether your car broke down on I-69 or won't start in your driveway, Twin Cities Towing INC responds immediately and handles the rest. Available right now.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Breakdown Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Breakdown Towing FAQs &mdash; Richmond, TX</h2>
    </div>
    <div class="faq-grid" data-animate="fade-up">
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

<div class="bd-divider bd-divider--torn" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L60,42 L120,35 L200,45 L280,32 L360,48 L440,38 L540,45 L640,30 L740,42 L840,35 L940,45 L1040,32 L1140,42 L1200,38 L1200,60 Z"/></svg>
</div>

<section class="closing-cta" aria-labelledby="break-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Breakdown Towing &mdash; Richmond TX</span>
      <h2 id="break-close-heading">Broken Down Anywhere in Fort Bend County — We Come to You</h2>
      <p class="closing-lead">Twin Cities Towing INC has been responding to vehicle breakdowns throughout Richmond, Rosenberg, and all of Fort Bend County for over 13 years. When your car won't cooperate, we will — 24/7, any location, upfront pricing.</p>
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
        Call Now &mdash; 24/7
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
        All Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
