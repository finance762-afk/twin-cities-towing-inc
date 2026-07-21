<?php
/**
 * Twin Cities Towing INC — Pecan Grove, TX Service Area
 * Premium area page — unique structure: split hero w/ dispatch rail,
 * FM 359 corridor route-line signature section, Q&A ledger, asymmetric photo split.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = '24-Hour Towing in Pecan Grove, TX | Twin Cities Towing INC';
$pageDescription = '24-hour towing and roadside assistance in Pecan Grove, TX 77406. Richmond-based trucks reach FM 359 and Plantation Drive in 15-25 minutes. Call (281) 935-1113.';
$ogImage         = $clientPhotos[10];
$currentPage     = 'service-area';

$areaFaqs = [
    ['q' => 'How fast can a tow truck reach Pecan Grove from Richmond?', 'a' => 'Usually 15–25 minutes. Our yard sits in Richmond 77469, directly across the Brazos River from Pecan Grove, so a truck only has to cross at US-90A or come up FM 359 to reach Plantation Drive. During the morning and evening commuter pinch at the FM 359/US-90A crossings, allow up to 40 minutes — we quote the real number when you call.'],
    ['q' => 'How much does towing cost in Pecan Grove, TX?', 'a' => 'Most standard tows starting in Pecan Grove run $75–$125 because the community is one of the closest areas to our Richmond yard. After-hours calls or winch-outs from soft ground near the golf course fairway lots can run more. You get a firm quote before the truck rolls — the price does not change after loading.'],
    ['q' => 'Can you get a car out of the Pecan Grove Plantation Country Club area?', 'a' => 'Yes. The streets that loop around the Pecan Grove Plantation Country Club golf course are narrow, tree-lined, and often lined with parked cars. We dispatch a wheel-lift or a shorter flatbed for those cul-de-sacs rather than a full-length rig, so we can load without blocking the street or tearing up a lawn.'],
    ['q' => 'Do you handle breakdowns at the FM 359 and US-90A crossings?', 'a' => 'Daily. The commuter squeeze where FM 359 meets US-90A is the single most common place we pick up disabled vehicles from Pecan Grove drivers. A stalled car there backs up the whole crossing fast, so we treat those calls as priority dispatch and clear the lane first, then complete paperwork off the roadway.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Pecan Grove, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/pecan-grove-tx/#service',
         'name'        => '24-Hour Towing in Pecan Grove, TX',
         'url'         => $domain . '/areas/pecan-grove-tx/',
         'description' => '24/7 towing, roadside assistance, and lockout service for Pecan Grove, TX 77406 — the FM 359 corridor, Plantation Drive, and the Pecan Grove Plantation community, dispatched from Richmond.',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Pecan Grove', 'containedInPlace' => ['@type' => 'State', 'name' => 'Texas']],
         'serviceType' => 'Towing Service'],
        generateFAQSchema($areaFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ═══════════════════════════════════════════════════════════════════
   PECAN GROVE, TX — AREA PAGE STYLES (page-specific, var() tokens only)
   Techniques: layered hero (gradient + noise), split hero w/ dispatch
   rail, 2 SVG divider styles (wave + angle), route-line signature
   section, tinted Q&A ledger, asymmetric photo split, floating accent,
   Caveat accent subtitle, mixed reveal directions, text-wrap balance.
   ═══════════════════════════════════════════════════════════════════ */

/* ── HERO — layered split with dispatch rail ─────────────────────── */
.pg-hero {
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: center;
  background: var(--color-primary-dark);
  overflow: hidden;
  padding: calc(var(--space-16) + var(--space-12)) 0 var(--space-16);
}
.pg-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 85% 15%, color-mix(in srgb, var(--color-accent) 22%, transparent) 0%, transparent 55%),
    linear-gradient(118deg,
      var(--color-primary-dark) 0%,
      var(--color-primary) 48%,
      color-mix(in srgb, var(--color-primary) 70%, var(--color-accent)) 100%);
  z-index: 1;
}
.pg-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 160px;
  z-index: 2;
  pointer-events: none;
}
.pg-hero .container {
  position: relative;
  z-index: 3;
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.pg-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--color-accent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  background: color-mix(in srgb, var(--color-accent) 12%, transparent);
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-full);
  margin-bottom: var(--space-5);
}
.pg-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(1.9rem, 4.2vw, 3.1rem);
  line-height: 1.12;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.pg-hero h1 .pg-h1-accent { color: var(--color-accent); }
.pg-hero-script {
  font-family: var(--font-accent);
  font-size: var(--font-size-2xl);
  color: color-mix(in srgb, var(--color-accent) 80%, var(--color-white));
  display: block;
  margin-bottom: var(--space-3);
  transform: rotate(-1.5deg);
}
.pg-hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.7;
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 58ch;
  margin-bottom: var(--space-8);
}
.pg-hero-ctas {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
}
/* Dispatch rail — hero right column */
.pg-dispatch {
  background: color-mix(in srgb, var(--color-white) 7%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent);
  border-radius: var(--radius-xl);
  padding: var(--space-8) var(--space-6);
  backdrop-filter: blur(6px);
}
.pg-dispatch-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.pg-dispatch-row {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  gap: var(--space-4);
  padding: var(--space-3) 0;
  border-bottom: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
}
.pg-dispatch-row:last-child { border-bottom: 0; }
.pg-dispatch-row dt {
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 65%, transparent);
}
.pg-dispatch-row dd {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-white);
  text-align: right;
}
.pg-dispatch-row dd.pg-glow { color: var(--color-accent); }

/* ── SVG DIVIDERS — style 1: wave / style 2: angle ───────────────── */
.pg-divider { display: block; line-height: 0; }
.pg-divider svg { display: block; width: 100%; height: clamp(34px, 5vw, 64px); }

/* ── SIGNATURE: FM 359 ROUTE LINE ────────────────────────────────── */
.pg-corridor {
  position: relative;
  background: var(--color-light);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pg-corridor-float {
  position: absolute;
  top: -90px;
  right: -110px;
  width: 380px;
  height: 380px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 6%, transparent);
  pointer-events: none;
}
.pg-corridor-head {
  max-width: 68ch;
  margin-bottom: var(--space-12);
}
.pg-corridor-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.pg-route {
  position: relative;
  margin-left: var(--space-4);
  padding-left: var(--space-10);
}
.pg-route::before {
  content: '';
  position: absolute;
  left: 0;
  top: var(--space-2);
  bottom: var(--space-2);
  width: 3px;
  border-radius: var(--radius-full);
  background: linear-gradient(180deg, var(--color-accent), color-mix(in srgb, var(--color-accent) 25%, transparent));
}
.pg-route-stop {
  position: relative;
  padding-bottom: var(--space-10);
  max-width: 62ch;
}
.pg-route-stop:last-child { padding-bottom: 0; }
.pg-route-stop::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-10) - 7px);
  top: var(--space-1);
  width: 17px;
  height: 17px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 4px solid var(--color-accent);
  box-shadow: var(--shadow-sm);
}
.pg-route-stop h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.pg-route-stop p {
  color: var(--color-gray-dark);
  line-height: 1.7;
}
.pg-route-stop a { color: var(--color-accent); font-weight: 600; text-decoration: underline; }
.pg-route-stop a:hover { color: var(--color-primary); }

/* ── Q&A LEDGER — tinted alternating cards ───────────────────────── */
.pg-qa {
  background: var(--color-white);
  padding: var(--space-16) 0;
}
.pg-qa-head {
  text-align: center;
  max-width: 62ch;
  margin: 0 auto var(--space-12);
}
.pg-qa-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.1rem);
  color: var(--color-primary);
  text-wrap: balance;
}
.pg-qa-list {
  max-width: 820px;
  margin: 0 auto;
  display: grid;
  gap: var(--space-5);
}
.pg-qa-item {
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-8);
  border-left: 4px solid var(--color-accent);
}
.pg-qa-item:nth-child(odd)  { background: color-mix(in srgb, var(--color-accent) 7%, var(--color-white)); }
.pg-qa-item:nth-child(even) { background: color-mix(in srgb, var(--color-primary) 5%, var(--color-white)); }
.pg-qa-item h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.pg-qa-item p { color: var(--color-gray-dark); line-height: 1.75; }

/* ── ASYMMETRIC PHOTO SPLIT ──────────────────────────────────────── */
.pg-split {
  background: var(--color-light);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.pg-split .container {
  display: grid;
  grid-template-columns: 1.25fr 0.75fr;
  gap: var(--space-12);
  align-items: center;
}
.pg-split-photo {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  transform: rotate(1.2deg);
}
.pg-split-photo img { width: 100%; height: auto; display: block; }
.pg-split-photo::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(200deg, transparent 65%, color-mix(in srgb, var(--color-primary) 55%, transparent) 100%);
}
.pg-split-badge {
  position: absolute;
  left: var(--space-4);
  bottom: var(--space-4);
  z-index: 2;
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-md);
}
.pg-split-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.8vw, 2rem);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.pg-split-content p {
  color: var(--color-gray-dark);
  line-height: 1.75;
  margin-bottom: var(--space-4);
  max-width: 60ch;
}
.pg-split-content a { color: var(--color-accent); font-weight: 600; text-decoration: underline; }
.pg-split-content a:hover { color: var(--color-primary); }
.pg-links-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.pg-link-chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast), border-color var(--transition-fast);
}
.pg-link-chip:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
  border-color: var(--color-accent);
}
.pg-link-chip svg { color: var(--color-accent); }

/* ── FINAL CTA ───────────────────────────────────────────────────── */
.pg-cta {
  position: relative;
  background:
    radial-gradient(ellipse at 15% 85%, color-mix(in srgb, var(--color-accent) 18%, transparent) 0%, transparent 55%),
    linear-gradient(120deg, var(--color-primary-dark), var(--color-primary));
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.pg-cta-float {
  position: absolute;
  bottom: -120px;
  left: -80px;
  width: 340px;
  height: 340px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 5%, transparent);
  pointer-events: none;
}
.pg-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.4vw, 2.4rem);
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.pg-cta p {
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  max-width: 58ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.pg-cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── PAGE-SPECIFIC REVEAL DIRECTIONS (uses site data-animate JS) ─── */
[data-animate="pg-left"]  { opacity: 0; transform: translateX(-32px); transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="pg-right"] { opacity: 0; transform: translateX(32px);  transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="pg-scale"] { opacity: 0; transform: scale(0.94);       transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="pg-left"].animated,
[data-animate="pg-right"].animated,
[data-animate="pg-scale"].animated { opacity: 1; transform: none; }

/* ── INTERACTION & ACCESSIBILITY REFINEMENTS ─────────────────────── */
.pg-link-chip:focus-visible,
.pg-cta-row a:focus-visible,
.pg-hero-ctas a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
}
.pg-route-stop a:focus-visible,
.pg-split-content a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
  border-radius: var(--radius-sm);
}
.pg-dispatch {
  transition: border-color var(--transition-base), transform var(--transition-base);
}
.pg-dispatch:hover {
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
  transform: translateY(-2px);
}
.pg-qa-item {
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.pg-qa-item:hover {
  transform: translateX(4px);
  box-shadow: var(--shadow-sm);
}
::selection { background: color-mix(in srgb, var(--color-accent) 30%, transparent); }

@media (prefers-reduced-motion: reduce) {
  [data-animate="pg-left"],
  [data-animate="pg-right"],
  [data-animate="pg-scale"] { opacity: 1; transform: none; transition: none; }
  .pg-qa-item:hover,
  .pg-dispatch:hover,
  .pg-link-chip:hover { transform: none; }
  .pg-split-photo { transform: none; }
}

/* ── RESPONSIVE ──────────────────────────────────────────────────── */
@media (min-width: 1400px) {
  .pg-hero { min-height: 64vh; }
  .pg-hero-answer { font-size: var(--font-size-xl); }
}
@media (max-width: 1024px) {
  .pg-hero .container { grid-template-columns: 1fr; gap: var(--space-8); }
  .pg-dispatch { max-width: 480px; }
  .pg-split .container { grid-template-columns: 1fr; }
  .pg-split-photo { transform: none; max-width: 560px; }
}
@media (max-width: 640px) {
  .pg-hero { min-height: 0; padding-top: calc(var(--space-16) + var(--space-8)); }
  .pg-qa-item { padding: var(--space-5); }
  .pg-route { margin-left: 0; padding-left: var(--space-8); }
  .pg-route-stop::before { left: calc(-1 * var(--space-8) - 7px); }
  .pg-hero-ctas .btn, .pg-cta-row .btn { width: 100%; justify-content: center; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li><a href="/service-area/">Service Areas</a></li>
      <li aria-current="page">Pecan Grove, TX</li>
    </ol>
  </div>
</nav>

<!-- HERO — no reveal classes above the fold -->
<section class="pg-hero" aria-labelledby="pg-hero-heading">
  <div class="container">
    <div>
      <span class="pg-hero-eyebrow">
        <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        Pecan Grove &middot; Fort Bend County &middot; 77406
      </span>
      <span class="pg-hero-script">Just across the Brazos from our yard</span>
      <h1 id="pg-hero-heading">24-Hour Towing in <span class="pg-h1-accent">Pecan Grove</span>, TX</h1>
      <p class="pg-hero-answer">Twin Cities Towing INC is a licensed and insured towing company based in Richmond, TX — directly across the Brazos River from Pecan Grove. Since 2011 our trucks have covered the FM 359 corridor, Plantation Drive, and the streets around the Pecan Grove Plantation Country Club, with a typical response of 15&ndash;25 minutes and dispatch that answers at 3 a.m. the same as 3 p.m.</p>
      <div class="pg-hero-ctas">
        <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
        <a href="/contact/" class="btn btn-outline-white btn-lg">Request a Tow Online</a>
      </div>
    </div>
    <dl class="pg-dispatch" aria-label="Pecan Grove dispatch facts">
      <div class="pg-dispatch-title">Pecan Grove Dispatch Card</div>
      <div class="pg-dispatch-row"><dt>Typical ETA</dt><dd class="pg-glow">15&ndash;25 min</dd></div>
      <div class="pg-dispatch-row"><dt>Rush hour at FM 359 / US-90A</dt><dd>up to 40 min</dd></div>
      <div class="pg-dispatch-row"><dt>Local tow pricing</dt><dd>$75&ndash;$125</dd></div>
      <div class="pg-dispatch-row"><dt>Availability</dt><dd class="pg-glow">24/7/365</dd></div>
      <div class="pg-dispatch-row"><dt>Dispatched from</dt><dd>Richmond 77469</dd></div>
    </dl>
  </div>
</section>

<!-- Divider style 1: wave -->
<div class="pg-divider" style="background: var(--color-primary);" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,28 C360,64 720,-8 1080,30 C1260,48 1380,40 1440,32 L1440,60 L0,60 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- SIGNATURE — FM 359 corridor route line -->
<section class="pg-corridor" aria-labelledby="pg-corridor-heading">
  <div class="pg-corridor-float" aria-hidden="true"></div>
  <div class="container">
    <div class="pg-corridor-head" data-animate>
      <h2 id="pg-corridor-heading">Where do Pecan Grove drivers actually break down?</h2>
      <p class="answer-block">Most calls we take from Pecan Grove come from three places: the FM 359 corridor, the Plantation Drive loop through the neighborhood, and the commuter pinch where FM 359 traffic funnels onto US-90A toward Richmond and Sugar Land. Because we cross that same bridge from our Richmond yard every day, we know exactly where to stage a truck.</p>
    </div>
    <div class="pg-route">
      <div class="pg-route-stop" data-animate="pg-left">
        <h3>FM 359 — the community's spine</h3>
        <p>Pecan Grove is an unincorporated master-planned community, so there's no city shop or municipal tow lot — when a car dies on FM 359 near the entrance monuments, a private company like ours is the call. We run <a href="/services/breakdown-towing/">breakdown towing</a> and <a href="/services/roadside-assistance/">roadside assistance</a> up this corridor daily.</p>
      </div>
      <div class="pg-route-stop" data-animate="pg-left">
        <h3>Plantation Drive and the country club loops</h3>
        <p>The mature pecan and oak canopy along Plantation Drive is what makes the neighborhood feel like the old plantation land it was built on — and what makes maneuvering a long rig tricky. For driveways and cul-de-sacs near the Pecan Grove Plantation Country Club we send compact <a href="/services/flatbed-towing/">flatbed towing</a> equipment sized for those streets.</p>
      </div>
      <div class="pg-route-stop" data-animate="pg-left">
        <h3>The US-90A crossings toward Richmond</h3>
        <p>Every weekday morning, Pecan Grove commuters squeeze across the Brazos at the FM 359/US-90A junctions. A stall or fender-bender there blocks the whole community's route out. Those calls get priority dispatch — clear the lane first, paperwork second. If you're locked out instead of broken down, our <a href="/services/lockout-service/">lockout service</a> covers 77406 around the clock.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider style 2: angle -->
<div class="pg-divider" style="background: var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,60 1440,0 1440,60" fill="var(--color-white)"/>
  </svg>
</div>

<!-- Q&A LEDGER -->
<section class="pg-qa" aria-labelledby="pg-qa-heading">
  <div class="container">
    <div class="pg-qa-head" data-animate>
      <h2 id="pg-qa-heading">Straight answers about towing near me in Pecan Grove</h2>
    </div>
    <div class="pg-qa-list">
      <?php foreach ($areaFaqs as $i => $faq): ?>
      <div class="pg-qa-item" data-animate="<?php echo $i % 2 === 0 ? 'pg-left' : 'pg-right'; ?>">
        <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
        <p><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ASYMMETRIC PHOTO SPLIT -->
<section class="pg-split" aria-labelledby="pg-split-heading">
  <div class="container">
    <div class="pg-split-content" data-animate="pg-left">
      <h2 id="pg-split-heading">A volunteer-fire-department kind of community deserves a tow company that shows up the same way</h2>
      <p>Pecan Grove is the sort of place that still runs on neighbors — the Pecan Grove Volunteer Fire Department has protected these streets for decades, and folks notice who actually shows up when something goes wrong. That's the standard we hold our drivers to. When we quote 20 minutes to Plantation Drive, we mean 20 minutes, not "the driver is on the way" for an hour.</p>
      <p>We're not a call-center broker relaying your location to whoever bites. The dispatcher who answers is in Richmond, the truck comes off Rocky Falls Rd, and the driver has crossed into 77406 hundreds of times. Golf-cart crossings near the club, school-run traffic, the way the neighborhood empties onto two crossings at rush hour — none of it needs explaining.</p>
      <p>Need something more specific? See our <a href="/services/car-towing/">car towing</a> page for vehicle-type details, or <a href="/contact/">contact us</a> for a quote before you need one.</p>
      <div class="pg-links-row">
        <a class="pg-link-chip" href="/areas/richmond-tx/">
          <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          Towing in Richmond, TX
        </a>
        <a class="pg-link-chip" href="/areas/greatwood-tx/">
          <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          Towing in Greatwood, TX
        </a>
      </div>
    </div>
    <div class="pg-split-photo" data-animate="pg-scale">
      <img src="<?php echo htmlspecialchars($clientPhotos[10]); ?>"
           alt="Twin Cities Towing truck loading a vehicle for a Pecan Grove, TX customer"
           width="600" height="450" loading="lazy">
      <span class="pg-split-badge">Serving Pecan Grove since 2011</span>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="pg-cta" aria-labelledby="pg-cta-heading">
  <div class="pg-cta-float" aria-hidden="true"></div>
  <div class="container" data-animate>
    <h2 id="pg-cta-heading">Stuck in Pecan Grove right now?</h2>
    <p>One call reaches a Richmond dispatcher with a truck 15&ndash;25 minutes from Plantation Drive. Firm price before we roll, 24 hours a day, every day of the year.</p>
    <div class="pg-cta-row">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113 Now</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Quote</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
