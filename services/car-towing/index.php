<?php
/**
 * Twin Cities Towing INC — Car Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Car Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Reliable car towing in Richmond, TX for all vehicle types. Twin Cities Towing INC safely transports your car to any mechanic, dealership, or address in Fort Bend County. 24/7.';
$ogImage         = $clientPhotos[10];
$currentPage     = 'car-towing';

$serviceFaqs = [
    ['q' => 'How much does car towing cost in Richmond, TX?', 'a' => 'Most standard car tows in Richmond start around $75–$125 for local distances within Fort Bend County. Longer hauls, after-hours service, or difficult recovery situations may cost more. We give you a clear quote before dispatch — no surprise fees once your car is loaded.'],
    ['q' => 'Can you tow my car to any mechanic in the area?', 'a' => 'Absolutely. We deliver your vehicle to any mechanic, dealership, body shop, or private address you choose within our service area. We do not push you toward preferred shops — your vehicle goes where you need it.'],
    ['q' => 'Will my car get scratched or damaged during towing?', 'a' => 'We take extensive precautions to prevent damage during loading and transport. Low-clearance vehicles, sports cars, and luxury sedans are handled on our flatbed, which keeps all four wheels off the ground. Standard vehicles use wheel-lift equipment with proper tie-down technique. In 13+ years of operation, careful handling has been a core part of how we work.'],
    ['q' => 'Can you tow all-wheel drive or four-wheel drive cars?', 'a' => 'Yes — AWD and 4WD vehicles should always be transported on a flatbed to prevent drivetrain damage. We carry flatbed equipment specifically for this. If you\'re not sure what your car requires, tell us the make and model when you call and we\'ll dispatch the right setup.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Car Towing']]],
        ['@type' => 'Service', '@id' => $domain . '/services/car-towing/#service',
         'name' => 'Car Towing', 'url' => $domain . '/services/car-towing',
         'description' => 'Reliable car towing service throughout Richmond TX and Fort Bend County. Safe transport for all vehicle types, 24/7.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Car Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   CAR TOWING — page-specific premium layer
   Theme: "Careful Handling" — soft curves, overlap composition,
   horizontal process rail signature.
   Techniques: C1 layered hero (vertical gradient + noise),
   C3 dividers x2 (curved wave + torn edge), C6.2 overlapping
   broken-grid split, tinted benefit/FAQ rotation, floating
   dashed-wheel accent, C7 signature process rail, C5 balance.
   Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---------- typographic balance on every heading ---------- */
h1, h2, h3, h4 { text-wrap: balance; }

/* ============================================================
   T1 — LAYERED HERO (bottom-weighted vertical gradient + noise)
   ============================================================ */
.car-hero { isolation: isolate; }
.car-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 18% 82%, rgba(var(--color-accent-rgb), 0.20) 0%, transparent 44%),
    linear-gradient(180deg,
      rgba(var(--color-primary-rgb), 0.72) 0%,
      rgba(var(--color-primary-rgb), 0.86) 62%,
      rgba(var(--color-primary-rgb), 0.96) 100%);
  z-index: 1;
}
.car-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='cn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23cn)' opacity='0.045'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.car-hero .hero-overlay { background: transparent; }
.car-hero .hero-content { z-index: 2; }
.car-hero .hero-title {
  font-size: clamp(var(--font-size-4xl), 5.5vw, var(--font-size-6xl));
  line-height: 1.1;
  position: relative;
  display: inline-block;
  padding-bottom: var(--space-4);
}
/* signature underline sweep beneath the H1 — this page only */
.car-hero .hero-title::after {
  content: '';
  position: absolute;
  left: 25%;
  right: 25%;
  bottom: 0;
  height: var(--space-1);
  border-radius: var(--radius-full);
  background: linear-gradient(90deg, transparent 0%, var(--color-accent) 50%, transparent 100%);
}
.car-hero .hero-eyebrow {
  background: color-mix(in srgb, var(--color-white) 10%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 25%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  letter-spacing: 2px;
}

/* Ticker: soft accent-tinted band, distinct from other pages */
.car-ticker.ticker-strip {
  background: linear-gradient(90deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  border-bottom: 2px solid var(--color-accent);
}

/* ============================================================
   T2 — SVG SECTION DIVIDERS (curved wave + torn edge)
   ============================================================ */
.car-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.car-divider svg {
  display: block;
  width: 100%;
  height: clamp(var(--space-8), 4.5vw, var(--space-12));
}
/* Style A: single curved wave (white detail -> tinted rail) */
.car-divider--wave {
  background: var(--color-white);
  color: color-mix(in srgb, var(--color-primary) 5%, var(--color-white));
}
/* Style B: torn organic edge (light FAQ zone -> CTA band) */
.car-divider--torn {
  background: var(--color-primary);
  color: var(--color-light);
}

/* ============================================================
   T3 — BROKEN-GRID DETAIL SPLIT (overlap composition, C6.2)
   ============================================================ */
.car-detail { position: relative; overflow: hidden; }
.car-detail .split {
  grid-template-columns: 1.08fr 0.92fr;
  align-items: start;
  position: relative;
  z-index: 1;
}
.car-detail .split-image { position: relative; }
.car-detail .img-reveal {
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  position: relative;
}
/* offset accent frame behind the photo — breaks the column box */
.car-detail .img-reveal::before {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-4));
  right: calc(-1 * var(--space-4));
  width: 70%;
  height: 70%;
  border: var(--space-1) solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
/* sidebar card pulls UP over the photo — the broken-grid moment */
.car-detail .service-sidebar-card {
  position: relative;
  margin-top: calc(-1 * var(--space-12));
  margin-left: var(--space-8);
  z-index: 2;
  border-radius: var(--radius-lg);
  border-top: var(--space-1) solid var(--color-accent);
  box-shadow: var(--shadow-xl);
  background: color-mix(in srgb, var(--color-accent) 5%, var(--color-white));
}
.car-detail .split-content .eyebrow {
  border-bottom: 2px solid var(--color-accent);
  padding-bottom: var(--space-1);
}
.car-detail .split-content h2 {
  font-size: clamp(var(--font-size-2xl), 3.2vw, var(--font-size-4xl));
}
.car-detail .answer-block {
  border-left: var(--space-1) solid var(--color-accent);
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
}
.car-detail .service-sidebar-card h4 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  letter-spacing: 0.04em;
  border-bottom: 1px solid color-mix(in srgb, var(--color-accent) 30%, transparent);
  padding-bottom: var(--space-3);
}
.car-detail .service-sidebar-card ul li {
  transition: transform var(--transition-fast), color var(--transition-fast);
}
.car-detail .service-sidebar-card ul li:hover {
  transform: translateX(var(--space-1));
  color: var(--color-primary);
}
.car-detail .service-sidebar-card .btn:focus-visible,
.car-detail a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
}
.car-detail .split-content .prose p em {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
}

/* ============================================================
   T4 — SIGNATURE: HORIZONTAL PROCESS RAIL (this page only)
   ============================================================ */
.car-rail {
  background: color-mix(in srgb, var(--color-primary) 5%, var(--color-white));
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.car-rail-track {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  margin: 0;
  padding: var(--space-8) 0 0;
  position: relative;
  counter-reset: railstep;
}
/* the rail line itself, threaded behind the numbered hubs */
.car-rail-track::before {
  content: '';
  position: absolute;
  top: calc(var(--space-8) + var(--space-6));
  left: var(--space-10);
  right: var(--space-10);
  height: var(--space-1);
  border-radius: var(--radius-full);
  background: linear-gradient(90deg,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 35%, var(--color-gray-light)) 100%);
  z-index: 0;
}
.car-rail-stop {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 0 var(--space-2);
}
.car-rail-num {
  display: flex;
  align-items: center;
  justify-content: center;
  width: var(--space-12);
  height: var(--space-12);
  margin: 0 auto var(--space-5);
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-lg);
  box-shadow: var(--shadow-md), 0 0 0 var(--space-2) color-mix(in srgb, var(--color-accent) 20%, transparent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.car-rail-stop:hover .car-rail-num {
  transform: translateY(calc(-1 * var(--space-1))) scale(1.06);
  box-shadow: var(--shadow-lg), 0 0 0 var(--space-2) color-mix(in srgb, var(--color-accent) 35%, transparent);
}
.car-rail-stop h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.car-rail-stop p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.6;
  margin: 0;
  max-width: 30ch;
  margin-inline: auto;
}
/* directional chevron between stops (desktop) */
.car-rail-stop:not(:last-child)::after {
  content: '\203A';
  position: absolute;
  top: calc(var(--space-6) + var(--space-1));
  right: calc(-1 * var(--space-4));
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  line-height: 1;
  opacity: 0.7;
}

/* ============================================================
   T5 — TINTED CARD ROTATION (benefits + FAQs never all-white)
   ============================================================ */
.car-why .benefit-item {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-top: var(--space-1) solid transparent;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.car-why .benefit-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white));
  border-top-color: var(--color-accent);
}
.car-why .benefit-item:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white));
  border-top-color: var(--color-secondary);
}
.car-why .benefit-item:nth-child(4n+3) {
  background: color-mix(in srgb, var(--color-warning) 7%, var(--color-white));
  border-top-color: var(--color-warning);
}
.car-why .benefit-item:nth-child(4n+4) {
  background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white));
  border-top-color: var(--color-primary);
}
.car-why .benefit-item:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-md);
}
/* gentle asymmetric stagger on the why-grid */
.car-why .grid-2 { align-items: start; }
.car-why .grid-2 .benefit-item:nth-child(even) {
  transform: translateY(var(--space-6));
}
.car-why .grid-2 .benefit-item:nth-child(even):hover {
  transform: translateY(var(--space-5));
}
.car-faq .faq-item:nth-child(3n+1) {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
}
.car-faq .faq-item:nth-child(3n+2) {
  background: color-mix(in srgb, var(--color-primary) 5%, var(--color-white));
}
.car-faq .faq-item:nth-child(3n+3) {
  background: color-mix(in srgb, var(--color-secondary) 7%, var(--color-white));
}
.car-faq .faq-item {
  border-left: var(--space-1) solid color-mix(in srgb, var(--color-accent) 55%, transparent);
}

/* ============================================================
   T6 — FLOATING DECORATIVE ACCENT (dashed wheel, slow rotation)
   ============================================================ */
.car-float {
  position: absolute;
  pointer-events: none;
  z-index: 0;
}
.car-float--wheel {
  top: var(--space-10);
  right: calc(-1 * var(--space-16));
  width: clamp(var(--space-16), 20vw, calc(var(--space-16) * 4));
  aspect-ratio: 1;
  border-radius: var(--radius-full);
  border: var(--space-2) dashed var(--color-primary);
  opacity: 0.05;
  animation: car-wheel-spin 80s linear infinite;
}
.car-float--wheel::after {
  content: '';
  position: absolute;
  inset: 18%;
  border-radius: var(--radius-full);
  border: var(--space-1) solid var(--color-accent);
}
.car-float--road {
  bottom: var(--space-12);
  left: calc(-1 * var(--space-10));
  width: clamp(var(--space-16), 16vw, calc(var(--space-16) * 3));
  height: var(--space-2);
  background: repeating-linear-gradient(90deg,
    var(--color-primary) 0,
    var(--color-primary) var(--space-6),
    transparent var(--space-6),
    transparent var(--space-10));
  opacity: 0.07;
  animation: car-road-drift 12s ease-in-out infinite alternate;
}
@keyframes car-wheel-spin {
  from { transform: rotate(0deg); }
  to   { transform: rotate(360deg); }
}
@keyframes car-road-drift {
  from { transform: translateX(0); }
  to   { transform: translateX(var(--space-12)); }
}

/* ============================================================
   CTA + closing polish (radial glow, C4 variations)
   ============================================================ */
.car-cta.cta-banner::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 20% 100%, rgba(var(--color-primary-rgb), 0.45) 0%, transparent 55%);
  pointer-events: none;
}
.car-cta.cta-banner .container { z-index: 2; }
.car-closing { position: relative; overflow: hidden; }
.car-closing::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 0%, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 60%);
  pointer-events: none;
}
.car-closing .container { position: relative; }

/* ============================================================
   Responsive collapse + reduced motion
   ============================================================ */
@media (max-width: 1024px) {
  .car-rail-track { grid-template-columns: repeat(2, 1fr); row-gap: var(--space-10); }
  .car-rail-track::before { display: none; }
  .car-rail-stop:not(:last-child)::after { display: none; }
  .car-detail .service-sidebar-card {
    margin-top: calc(-1 * var(--space-8));
    margin-left: var(--space-5);
  }
  .car-why .grid-2 .benefit-item:nth-child(even),
  .car-why .grid-2 .benefit-item:nth-child(even):hover { transform: none; }
}
@media (max-width: 640px) {
  .car-rail-track { grid-template-columns: 1fr; }
  .car-rail-stop { text-align: left; display: grid; grid-template-columns: auto 1fr; gap: var(--space-2) var(--space-4); }
  .car-rail-num { margin: 0; grid-row: span 2; }
  .car-rail-stop p { margin-inline: 0; max-width: none; }
  .car-detail .service-sidebar-card { margin-left: 0; margin-top: var(--space-5); }
  .car-detail .img-reveal::before { display: none; }
  .car-float { display: none; }
  .car-divider svg { height: var(--space-5); }
  .car-hero .hero-title::after { left: 15%; right: 15%; }
}
@media (prefers-reduced-motion: reduce) {
  .car-float--wheel, .car-float--road { animation: none; }
  .car-rail-num, .car-why .benefit-item { transition: none; }
}
</style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

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
        <span itemprop="name">Car Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero car-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[10]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
  <circle cx="7" cy="17" r="2" />
  <path d="M9 17h6" />
  <circle cx="17" cy="17" r="2" /></svg>
      Sedans &bull; SUVs &bull; Coupes &bull; All Passenger Cars
    </div>
    <h1 class="hero-title" id="service-hero-heading">Car Towing Service<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Safe, careful transport for all passenger vehicles throughout Fort Bend County. Your car delivered to any mechanic or destination — no damage, no drama.</p>
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

<div class="ticker-strip car-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#128664;&nbsp; All Passenger Vehicle Types</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch — 20–40 Min ETA</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Deliver to Any Mechanic or Address</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128664;&nbsp; All Passenger Vehicle Types</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch — 20–40 Min ETA</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Deliver to Any Mechanic or Address</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white car-detail" style="padding: var(--space-16) 0;">
  <div class="car-float car-float--wheel" aria-hidden="true"></div>
  <div class="car-float car-float--road" aria-hidden="true"></div>
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
  <circle cx="7" cy="17" r="2" />
  <path d="M9 17h6" />
  <circle cx="17" cy="17" r="2" /></svg>
          Car Towing in Richmond TX
        </span>
        <h2>Your Car Moved Carefully, Delivered Where You Need It</h2>
        <div class="prose">
          <p>Car towing sounds simple — but a lot can go wrong with the wrong operator. Incorrect tie-down positioning scratches bumpers. Improper wheel-lift technique damages steering components. Loading too fast on an incline can stress body panels. After 13 years of towing passenger vehicles throughout Richmond and Fort Bend County, our drivers know how to avoid every one of those mistakes.</p>
          <p>We tow all passenger vehicle types: sedans, coupes, hatchbacks, station wagons, crossovers, and standard SUVs. Standard front-wheel drive and rear-wheel drive vehicles can be safely towed with our wheel-lift equipment. All-wheel drive and four-wheel drive vehicles go on the flatbed to protect the drivetrain — we'll ask your vehicle type when you call so we dispatch the right truck.</p>
          <p>Your car gets delivered to whichever destination you choose. We service mechanics, dealerships, body shops, and private addresses throughout Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, and surrounding Fort Bend County communities. If you're not sure which shop to use, we're happy to discuss options — but the choice is entirely yours.</p>
          <p>Pricing is transparent and confirmed before dispatch. For standard local tows within Fort Bend County, most car towing calls start at $75–$125. We don't add hidden fees after your vehicle is loaded. What we quote is what you pay.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[13]); ?>"
               alt="Car being towed safely in Richmond TX by Twin Cities Towing"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Car Towing Highlights</h4>
          <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> All passenger car types</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> AWD/4WD on flatbed</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Deliver to any destination</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Upfront pricing before dispatch</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> 24/7 availability</li>
          </ul>
          <a href="/contact/" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Car Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>How do I know if my car needs flatbed or wheel-lift towing?</h2>
      <p>AWD, 4WD, and most low-clearance vehicles should always use flatbed towing to protect the drivetrain and undercarriage. Standard FWD and RWD vehicles can typically use wheel-lift. When you call, tell us your car's make and drivetrain type — we'll dispatch the right equipment automatically.</p>
    </div>
  </div>
</section>

<!-- DIVIDER: curved wave into the process rail -->
<div class="car-divider car-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="currentColor"/></svg>
</div>

<!-- SIGNATURE: CAR TOWING PROCESS RAIL -->
<section class="car-rail" aria-labelledby="car-rail-heading">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">How It Works</span>
      <h2 id="car-rail-heading">From Your Call to Careful Delivery</h2>
    </div>
    <ol class="car-rail-track">
      <li class="car-rail-stop">
        <span class="car-rail-num" aria-hidden="true">1</span>
        <h3>Call &amp; Get Your Quote</h3>
        <p>Tell us your car's make and drivetrain — your price is confirmed before the truck rolls.</p>
      </li>
      <li class="car-rail-stop">
        <span class="car-rail-num" aria-hidden="true">2</span>
        <h3>Right Truck Dispatched</h3>
        <p>Wheel-lift for standard FWD/RWD cars, flatbed for AWD, 4WD, and low-clearance vehicles.</p>
      </li>
      <li class="car-rail-stop">
        <span class="car-rail-num" aria-hidden="true">3</span>
        <h3>Careful Load &amp; Tie-Down</h3>
        <p>Proper positioning and tie-down technique protects bumpers, steering, and body panels.</p>
      </li>
      <li class="car-rail-stop">
        <span class="car-rail-num" aria-hidden="true">4</span>
        <h3>Delivered Where You Choose</h3>
        <p>Any mechanic, dealership, body shop, or address in Fort Bend County — your call.</p>
      </li>
    </ol>
  </div>
</section>

<section class="section-light car-why" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What Careful Car Towing Looks Like in Practice</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
        <div>
          <h3>Right Equipment for Your Vehicle</h3>
          <p class="prose">We match the tow method to your specific car. No flat-bed-for-everything or wheel-lift-for-everything generalization. The right equipment means your vehicle arrives in the same condition it left.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><polygon points="3 11 22 2 13 21 11 13 3 11" /></svg>
        <div>
          <h3>Your Choice of Destination</h3>
          <p class="prose">We never tell you where your car has to go. Any licensed mechanic, dealership, body shop, or home address within our service area is a valid destination. You're in charge of your vehicle.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:14px;color:var(--color-accent);"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        <div>
          <h3>Quote Before We Roll</h3>
          <p class="prose">You know what you're paying before we touch your car. We don't add "mileage surprises" or fuel surcharges after the fact. What we quote on the call is the final number.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>Fast Dispatch Around the Clock</h3>
          <p class="prose">Car breakdowns don't follow a 9-to-5 schedule. Our dispatch is live 24 hours a day — whether your car died at 6am on your way to work or at midnight coming back from Sugar Land.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner car-cta" aria-labelledby="car-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Car Won't Move?</span>
    <h2 id="car-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">We'll Have It at Your Shop in Under an Hour</h2>
    <p>Call Twin Cities Towing INC for immediate dispatch and a real ETA. No call centers, no runaround — local dispatch, local driver, 20–40 minutes to most Richmond-area locations.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Car Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light car-faq" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Car Towing FAQs &mdash; Richmond, TX</h2>
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

<!-- DIVIDER: torn organic edge into closing band -->
<div class="car-divider car-divider--torn" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,0 L0,20 L60,22 L120,15 L200,25 L280,12 L360,28 L440,18 L540,25 L640,10 L740,22 L840,15 L940,25 L1040,12 L1140,22 L1200,18 L1200,0 Z" fill="currentColor"/></svg>
</div>

<section class="closing-cta car-closing" aria-labelledby="car-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Car Towing &mdash; Richmond TX</span>
      <h2 id="car-close-heading">Your Car, Handled Carefully — Delivered Where You Need It</h2>
      <p class="closing-lead">Twin Cities Towing INC has been safely transporting passenger vehicles throughout Fort Bend County since 2011. When your car won't move, we do — 24/7, with upfront pricing and no pressure on your destination choice.</p>
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
