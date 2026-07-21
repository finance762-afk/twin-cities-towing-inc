<?php
/**
 * Twin Cities Towing INC — Flatbed Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Flatbed Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Professional flatbed towing in Richmond, TX for luxury cars, AWD vehicles, low-clearance automobiles, and accident-damaged cars. All 4 wheels off the ground — damage-free transport guaranteed.';
$ogImage         = $clientPhotos[16];
$currentPage     = 'flatbed-towing';

$serviceFaqs = [
    ['q' => 'When should I request flatbed towing instead of standard towing?', 'a' => 'Request flatbed towing for: all AWD and 4WD vehicles, lowered or low-clearance cars, luxury vehicles you don\'t want rolling on a hook, accident-damaged vehicles that can\'t be safely towed by wheel, and any car where the owner simply wants zero risk of drivetrain or undercarriage contact. When in doubt, flatbed is always the safer choice.'],
    ['q' => 'Does flatbed towing cost more than standard towing in Richmond, TX?', 'a' => 'Flatbed towing typically costs $25–$50 more than wheel-lift for the same distance due to equipment overhead. For most vehicles that require flatbed — AWD, luxury, damaged — that extra cost is trivial compared to the damage that improper towing causes. We quote flatbed rates upfront so you know before we roll.'],
    ['q' => 'Is flatbed towing safe for all-wheel drive vehicles?', 'a' => 'Flatbed is not just safe for AWD — it\'s the required method. Towing an AWD vehicle with the wheels turning when they shouldn\'t be can destroy the transfer case, differentials, and transmission. Flatbed keeps all four wheels stationary and off the ground the entire trip, eliminating that risk entirely.'],
    ['q' => 'Can you load a vehicle that won\'t roll or start?', 'a' => 'Yes. Our flatbeds are equipped with winches that pull non-rolling vehicles up the deck without requiring the car to drive itself on. Vehicles with seized wheels, blown tires, or accident damage that prevents rolling can all be safely loaded via winch and secured for transport.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Flatbed Towing']]],
        ['@type' => 'Service', '@id' => $domain . '/services/flatbed-towing/#service',
         'name' => 'Flatbed Towing', 'url' => $domain . '/services/flatbed-towing',
         'description' => 'Professional flatbed towing in Richmond TX for luxury, AWD, low-clearance, and accident-damaged vehicles. All wheels off the ground.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Flatbed Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   FLATBED TOWING — page-specific premium layer
   Theme: "Precision Equipment" — technical blueprint grid,
   corner-bracket framing, spec-sheet showcase.
   Techniques: C1 layered hero (split-tone gradient + blueprint
   grid + noise), C3 dividers x2 (arch curve + beveled notch),
   C7 signature side-by-side equipment showcase w/ corner
   brackets + spec sheet, asymmetric why-grid columns, tinted
   card rotation, floating ruler/hex accents, C5 balance.
   Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---------- typographic balance on every heading ---------- */
h1, h2, h3, h4 { text-wrap: balance; }

/* ============================================================
   T1 — LAYERED HERO (split-tone gradient + blueprint grid + noise)
   ============================================================ */
.flat-hero { isolation: isolate; }
.flat-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    repeating-linear-gradient(90deg,
      color-mix(in srgb, var(--color-accent) 7%, transparent) 0,
      color-mix(in srgb, var(--color-accent) 7%, transparent) 1px,
      transparent 1px,
      transparent var(--space-16)),
    repeating-linear-gradient(0deg,
      color-mix(in srgb, var(--color-accent) 5%, transparent) 0,
      color-mix(in srgb, var(--color-accent) 5%, transparent) 1px,
      transparent 1px,
      transparent var(--space-16)),
    linear-gradient(to right,
      rgba(var(--color-primary-rgb), 0.96) 0%,
      rgba(var(--color-primary-rgb), 0.86) 55%,
      rgba(var(--color-secondary-rgb), 0.62) 100%);
  z-index: 1;
}
.flat-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='fn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23fn)' opacity='0.045'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.flat-hero .hero-overlay { background: transparent; }
.flat-hero .hero-content { z-index: 2; }
.flat-hero .hero-title {
  font-size: clamp(var(--font-size-4xl), 5.5vw, var(--font-size-6xl));
  line-height: 1.08;
  letter-spacing: -0.01em;
}
/* technical eyebrow: bracketed spec label */
.flat-hero .hero-eyebrow {
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  border-radius: var(--radius-sm);
  background: color-mix(in srgb, var(--color-primary) 55%, transparent);
  padding: var(--space-2) var(--space-4);
  letter-spacing: 2px;
  position: relative;
}
.flat-hero .hero-eyebrow::before,
.flat-hero .hero-eyebrow::after {
  content: '';
  position: absolute;
  width: var(--space-2);
  height: var(--space-2);
  border-color: var(--color-accent);
  border-style: solid;
}
.flat-hero .hero-eyebrow::before {
  top: calc(-1 * var(--space-1));
  left: calc(-1 * var(--space-1));
  border-width: 2px 0 0 2px;
}
.flat-hero .hero-eyebrow::after {
  bottom: calc(-1 * var(--space-1));
  right: calc(-1 * var(--space-1));
  border-width: 0 2px 2px 0;
}

/* Ticker: steel band with dual rules, unique to this page */
.flat-ticker.ticker-strip {
  background: var(--color-gray-dark);
  border-top: 1px solid color-mix(in srgb, var(--color-accent) 55%, transparent);
  border-bottom: var(--space-1) solid var(--color-accent);
}

/* ============================================================
   T2 — SVG SECTION DIVIDERS (arch curve + beveled notch)
   ============================================================ */
.flat-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.flat-divider svg {
  display: block;
  width: 100%;
  height: clamp(var(--space-8), 5vw, var(--space-16));
}
/* Style A: single deep arch (white showcase -> light why) */
.flat-divider--arch {
  background: var(--color-white);
  color: var(--color-light);
}
/* Style B: beveled deck-ramp notch (light FAQ -> closing band) */
.flat-divider--ramp {
  background: var(--color-primary);
  color: var(--color-light);
}

/* ============================================================
   T3 — SIGNATURE: SIDE-BY-SIDE EQUIPMENT SHOWCASE
   (corner-bracket photo frame + spec-sheet panel)
   ============================================================ */
.flat-showcase { position: relative; overflow: hidden; }
.flat-showcase .split {
  grid-template-columns: 1fr 1fr;
  align-items: center;
  position: relative;
  z-index: 1;
  gap: var(--space-12);
}
.flat-showcase .split-image {
  position: relative;
  display: grid;
  gap: var(--space-6);
}
/* corner-bracket technical frame around the equipment photo */
.flat-showcase .img-reveal {
  position: relative;
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-lg);
}
.flat-showcase .img-reveal::before,
.flat-showcase .img-reveal::after {
  content: '';
  position: absolute;
  width: var(--space-10);
  height: var(--space-10);
  border-color: var(--color-accent);
  border-style: solid;
  z-index: 2;
  pointer-events: none;
}
.flat-showcase .img-reveal::before {
  top: calc(-1 * var(--space-2));
  left: calc(-1 * var(--space-2));
  border-width: var(--space-1) 0 0 var(--space-1);
}
.flat-showcase .img-reveal::after {
  bottom: calc(-1 * var(--space-2));
  right: calc(-1 * var(--space-2));
  border-width: 0 var(--space-1) var(--space-1) 0;
}
/* deck-angle motif sliding behind the photo column */
.flat-showcase .split-image::before {
  content: '';
  position: absolute;
  bottom: calc(-1 * var(--space-8));
  left: calc(-1 * var(--space-8));
  width: 60%;
  height: var(--space-8);
  background: linear-gradient(90deg, var(--color-accent) 0%, transparent 100%);
  opacity: 0.15;
  transform: skewY(-4deg);
  border-radius: var(--radius-sm);
  pointer-events: none;
}
/* spec-sheet panel: ruled lines, mono-spec feel via heading font */
.flat-showcase .service-sidebar-card {
  background: linear-gradient(165deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  border-radius: var(--radius-md);
  border: 1px solid color-mix(in srgb, var(--color-accent) 35%, transparent);
  box-shadow: var(--shadow-xl);
  position: relative;
  overflow: hidden;
}
.flat-showcase .service-sidebar-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 100% 0%, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 55%);
  pointer-events: none;
}
.flat-showcase .service-sidebar-card h4 {
  color: var(--color-accent);
  font-family: var(--font-heading);
  text-transform: uppercase;
  letter-spacing: 0.14em;
  font-size: var(--font-size-sm);
  border-bottom: 1px solid color-mix(in srgb, var(--color-accent) 35%, transparent);
  padding-bottom: var(--space-3);
  position: relative;
}
.flat-showcase .service-sidebar-card ul li {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  border-bottom: 1px dashed color-mix(in srgb, var(--color-white) 15%, transparent);
  position: relative;
}
.flat-showcase .service-sidebar-card ul li:last-child { border-bottom: none; }
.flat-showcase .service-sidebar-card ul li svg {
  color: var(--color-accent);
}
.flat-showcase .service-sidebar-card ul li {
  transition: color var(--transition-fast), transform var(--transition-fast);
}
.flat-showcase .service-sidebar-card ul li:hover {
  color: var(--color-white);
  transform: translateX(var(--space-1));
}
/* duotone equipment-photo treatment (C4.3) */
.flat-showcase .img-reveal img {
  filter: saturate(0.9) contrast(1.04);
  transition: filter var(--transition-slow), transform var(--transition-slow);
}
.flat-showcase .img-reveal:hover img {
  filter: saturate(1.05) contrast(1.02);
}
.flat-showcase .split-content .prose p em {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
}
.flat-showcase .service-sidebar-card .btn-primary {
  background: var(--color-accent);
  color: var(--color-primary-dark);
  border-color: var(--color-accent);
  font-weight: 700;
}
.flat-showcase .split-content .eyebrow {
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  border-radius: var(--radius-sm);
  padding: var(--space-1) var(--space-3);
  background: color-mix(in srgb, var(--color-accent) 8%, transparent);
}
.flat-showcase .split-content h2 {
  font-size: clamp(var(--font-size-2xl), 3.2vw, var(--font-size-4xl));
}
.flat-showcase .answer-block {
  border: 1px solid color-mix(in srgb, var(--color-accent) 30%, transparent);
  border-left: var(--space-1) solid var(--color-accent);
  background: color-mix(in srgb, var(--color-accent) 5%, var(--color-white));
  border-radius: var(--radius-md);
}

/* ============================================================
   T4 — ASYMMETRIC WHY-GRID (uneven columns, offset rhythm)
   ============================================================ */
.flat-why { position: relative; overflow: hidden; }
.flat-why .grid-2 {
  grid-template-columns: 1.2fr 0.8fr;
  align-items: start;
}
.flat-why .benefit-item:nth-child(even) {
  transform: translateY(var(--space-10));
}
.flat-why .benefit-item {
  border-radius: var(--radius-md);
  padding: var(--space-6);
  border: 1px solid var(--color-gray-light);
  position: relative;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
/* measurement tick on each card's top edge */
.flat-why .benefit-item::before {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-1));
  left: var(--space-6);
  width: var(--space-10);
  height: var(--space-1);
  border-radius: var(--radius-full);
  background: var(--color-accent);
}
.flat-why .benefit-item:hover {
  box-shadow: var(--shadow-md);
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
}

/* ============================================================
   T5 — TINTED CARD ROTATION (benefits + FAQ, never all-white)
   ============================================================ */
.flat-why .benefit-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
}
.flat-why .benefit-item:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-gray-dark) 6%, var(--color-white));
}
.flat-why .benefit-item:nth-child(4n+3) {
  background: color-mix(in srgb, var(--color-primary) 7%, var(--color-white));
}
.flat-why .benefit-item:nth-child(4n+4) {
  background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white));
}
.flat-faq .faq-item {
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
}
.flat-faq .faq-item:nth-child(3n+1) {
  background: color-mix(in srgb, var(--color-accent) 5%, var(--color-white));
}
.flat-faq .faq-item:nth-child(3n+2) {
  background: color-mix(in srgb, var(--color-primary) 5%, var(--color-white));
}
.flat-faq .faq-item:nth-child(3n+3) {
  background: color-mix(in srgb, var(--color-gray-dark) 5%, var(--color-white));
}
.flat-faq .faq-item .faq-icon { color: var(--color-accent); }

/* ============================================================
   T6 — FLOATING DECORATIVE ACCENTS (ruler ticks + hex, 4–7%)
   ============================================================ */
.flat-float {
  position: absolute;
  pointer-events: none;
  z-index: 0;
}
.flat-float--ruler {
  top: var(--space-16);
  right: calc(-1 * var(--space-8));
  width: clamp(var(--space-16), 16vw, calc(var(--space-16) * 3));
  height: var(--space-6);
  background: repeating-linear-gradient(90deg,
    var(--color-primary) 0,
    var(--color-primary) 2px,
    transparent 2px,
    transparent var(--space-5));
  opacity: 0.06;
  animation: flat-slide 16s ease-in-out infinite alternate;
}
.flat-float--hex {
  bottom: var(--space-16);
  left: calc(-1 * var(--space-12));
  width: clamp(var(--space-16), 18vw, calc(var(--space-16) * 3.5));
  aspect-ratio: 1;
  border: var(--space-1) solid var(--color-accent);
  clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  opacity: 0.05;
  animation: flat-hex-turn 70s linear infinite;
}
@keyframes flat-slide {
  from { transform: translateX(0); }
  to   { transform: translateX(calc(-1 * var(--space-16))); }
}
@keyframes flat-hex-turn {
  from { transform: rotate(0deg); }
  to   { transform: rotate(360deg); }
}

/* ============================================================
   CTA polish + focus states
   ============================================================ */
.flat-cta.cta-banner::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 85% 15%, rgba(var(--color-accent-rgb), 0.20) 0%, transparent 50%);
  pointer-events: none;
}
.flat-cta.cta-banner .container { z-index: 2; }
.flat-closing { position: relative; overflow: hidden; }
.flat-closing::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 100%, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 55%);
  pointer-events: none;
}
.flat-closing .container { position: relative; }
.flat-showcase a:focus-visible,
.flat-why a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
  border-radius: var(--radius-sm);
}

/* ============================================================
   Responsive collapse + reduced motion
   ============================================================ */
@media (max-width: 1024px) {
  .flat-why .grid-2 { grid-template-columns: 1fr; }
  .flat-why .benefit-item:nth-child(even) { transform: none; }
  .flat-showcase .split { gap: var(--space-8); }
}
@media (max-width: 640px) {
  .flat-float { display: none; }
  .flat-divider svg { height: var(--space-6); }
  .flat-showcase .split-image::before { display: none; }
  .flat-showcase .img-reveal::before,
  .flat-showcase .img-reveal::after {
    width: var(--space-6);
    height: var(--space-6);
  }
  .flat-hero .hero-eyebrow { letter-spacing: 1px; }
}
@media (prefers-reduced-motion: reduce) {
  .flat-float--ruler, .flat-float--hex { animation: none; }
  .flat-why .benefit-item { transition: none; }
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
        <span itemprop="name">Flatbed Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero flat-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[16]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><rect width="18" height="18" x="3" y="3" rx="2" />
  <path d="M8 12h8" /></svg>
      Luxury Cars &bull; AWD &bull; Low Clearance &bull; Accident Recovery
    </div>
    <h1 class="hero-title" id="service-hero-heading">Flatbed Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">All four wheels off the ground. Zero drivetrain contact. The safest way to move any vehicle — especially when it matters most.</p>
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

<div class="ticker-strip flat-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9989;&nbsp; All 4 Wheels Off the Ground</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; AWD &amp; 4WD Safe</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Winch Loading Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Google Reviews</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; All 4 Wheels Off the Ground</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; AWD &amp; 4WD Safe</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Winch Loading Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Google Reviews</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white flat-showcase" style="padding: var(--space-16) 0;">
  <div class="flat-float flat-float--ruler" aria-hidden="true"></div>
  <div class="flat-float flat-float--hex" aria-hidden="true"></div>
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><rect width="18" height="18" x="3" y="3" rx="2" />
  <path d="M8 12h8" /></svg>
          Flatbed Towing in Richmond TX
        </span>
        <h2>When the Vehicle is Too Valuable to Risk a Standard Tow</h2>
        <div class="prose">
          <p>Not every vehicle should be towed the same way. A hook-and-chain or basic wheel-lift is adequate for many standard cars — but for luxury vehicles, AWD/4WD drivetrains, lowered suspensions, and accident-damaged cars, those methods introduce real risk. Flatbed towing eliminates that risk by keeping all four wheels completely off the road from pickup to delivery.</p>
          <p>The most important application of flatbed towing is AWD and 4WD vehicles. When the non-driven wheels of an AWD car are rolling during a standard tow, the drivetrain is still partially engaged — and damage to the transfer case, differentials, or transmission can cost thousands of dollars in repairs. Flatbed removes this problem entirely: nothing rolls, nothing engages, nothing wears.</p>
          <p>Luxury vehicles benefit from flatbed even when AWD isn't a factor. A Corvette with a 4-inch ground clearance, a Mercedes with air suspension in failure mode, or a custom build with body-kit modifications may not safely clear the approach angle of a wheel-lift. Our flatbed deck angles and winch system handle these situations without scratching or stressing the vehicle.</p>
          <p>We also use flatbed for accident-damaged vehicles that can't roll safely — blown tires, seized wheels, bent frames. The winch pulls the car up the deck without requiring anything to operate correctly. Once on the deck and strapped, it's a stable, ground-contact-free ride to wherever you need it delivered.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[19]); ?>"
               alt="Flatbed towing vehicle being loaded in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Flatbed Towing For:</h4>
          <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> All AWD &amp; 4WD vehicles</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Luxury &amp; exotic cars</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Low-clearance &amp; lowered vehicles</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Accident-damaged vehicles</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Non-rolling cars (winch load)</li>
          </ul>
          <a href="/contact/" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Flatbed Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>Why do AWD vehicles need flatbed towing in Richmond, TX?</h2>
      <p>AWD vehicles have all four wheels connected through the drivetrain. When towed with a wheel-lift (rear wheels rolling), the transmission and transfer case can be damaged because they weren't designed to operate that way. Flatbed keeps all wheels stationary and off the ground, eliminating drivetrain damage risk entirely.</p>
    </div>
  </div>
</section>

<!-- DIVIDER: deep arch into why band -->
<div class="flat-divider flat-divider--arch" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,80 C400,0 800,0 1200,80 L1200,80 L0,80 Z" fill="currentColor"/></svg>
</div>

<section class="section-light flat-why" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What Makes Our Flatbed Service the Safe Choice</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
  <path d="m9 12 2 2 4-4" /></svg>
        <div>
          <h3>Zero Ground Contact — Entire Trip</h3>
          <p class="prose">Your vehicle's tires never touch pavement from the moment it's loaded until it's delivered. That's the fundamental advantage of flatbed over any other towing method — there's no way to damage what isn't moving.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M12 6v16" />
  <path d="m19 13 2-1a9 9 0 0 1-18 0l2 1" />
  <path d="M9 11h6" />
  <circle cx="12" cy="4" r="2" /></svg>
        <div>
          <h3>Winch Loading for Non-Running Vehicles</h3>
          <p class="prose">Accident-damaged or mechanically failed vehicles that won't roll get winched up our deck without requiring the car to cooperate. Even completely disabled vehicles load safely with our winch system.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <circle cx="12" cy="12" r="6" />
  <circle cx="12" cy="12" r="2" /></svg>
        <div>
          <h3>Proper Tie-Down at Frame Points</h3>
          <p class="prose">We secure vehicles at manufacturer-designated tie-down points — never bumpers, tow hooks used improperly, or body panels. The strapping pattern matches what the vehicle was designed to handle.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        <div>
          <h3>Cheaper Than Drivetrain Repair</h3>
          <p class="prose">Flatbed costs a bit more than wheel-lift for the same distance. But AWD drivetrain repair from incorrect towing runs $1,500–$8,000+. The math is straightforward — flatbed is the economical choice for the right vehicles.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner flat-cta" aria-labelledby="flat-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Luxury or AWD Vehicle?</span>
    <h2 id="flat-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Don't Risk a Wheel-Lift on a Vehicle That Needs Flatbed</h2>
    <p>Twin Cities Towing INC dispatches flatbed equipment 24/7 throughout Richmond and Fort Bend County. Tell us your vehicle make and model — we'll confirm the right method before we roll.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Flatbed Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light flat-faq" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Flatbed Towing FAQs &mdash; Richmond, TX</h2>
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

<!-- DIVIDER: beveled deck-ramp notch into closing band -->
<div class="flat-divider flat-divider--ramp" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="currentColor" points="0,0 520,0 640,34 1200,34 1200,0 1200,0 0,0"/></svg>
</div>

<section class="closing-cta flat-closing" aria-labelledby="flat-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Flatbed Towing &mdash; Richmond TX</span>
      <h2 id="flat-close-heading">The Safest Tow Available — All 4 Wheels Up, Every Mile</h2>
      <p class="closing-lead">Twin Cities Towing INC has transported luxury cars, AWD vehicles, and accident-damaged automobiles on flatbed throughout Fort Bend County since 2011. Call for immediate dispatch or request a quote online.</p>
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
