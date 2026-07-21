<?php
/**
 * Twin Cities Towing INC — Katy, TX Service Area
 * Premium area page — diagonal-split hero + heritage strip layout
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Katy TX | I-10 & Grand Parkway Tow Truck Service | Twin Cities Towing INC';
$pageDescription = 'Towing and roadside assistance in Katy, TX — I-10 Katy Freeway, Grand Parkway (SH-99), Katy Mills, Cinco Ranch & old town. 24/7 Richmond dispatch, 30–50 min response.';
$ogImage         = $clientPhotos[7];
$currentPage     = 'service-area';

$areaFaqs = [
    ['q' => 'How long does a tow truck take to reach Katy from Richmond?', 'a' => 'Our yard in Richmond 77469 connects to Katy straight up the Grand Parkway (SH-99), roughly 20 miles. Most Katy calls see a truck in 30–50 minutes. Cinco Ranch and the SH-99 corridor land near the low end; old town Katy north of I-10 during freeway congestion runs toward the top.'],
    ['q' => 'How much does towing cost in Katy, TX?', 'a' => 'Light-duty tows starting in Katy typically run $95–$160 depending on mileage and vehicle type. A short hook near Katy Mills or LaCenterra to a local shop sits at the low end; hauls into the Energy Corridor or back toward Richmond price by distance. The full amount is quoted before dispatch.'],
    ['q' => 'Do you tow from the I-10 Katy Freeway managed lanes?', 'a' => 'Yes. We recover vehicles from the Katy Freeway main lanes, feeders, and the SH-99 interchange ramps. On one of the widest freeways in America, the far shoulder is a dangerous place to wait — stay in your vehicle with belts on until our driver arrives and blocks traffic with the truck.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Katy, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/katy-tx/#service',
         'name'        => 'Towing Service in Katy, TX',
         'url'         => $domain . '/areas/katy-tx/',
         'description' => '24/7 towing and roadside assistance in Katy, TX — I-10 Katy Freeway, Grand Parkway (SH-99), Katy Mills Mall, Cinco Ranch, LaCenterra, and old town Katy. Dispatched from Richmond, TX.',
         'serviceType' => 'Towing Service',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Katy, TX']],
        generateFAQSchema($areaFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════
   KATY SERVICE AREA — page-specific styles (ky- prefix)
   Techniques: diagonal-split layered hero (gradient + noise),
   notch + tilt SVG dividers, freeway badge grid, dark heritage
   strip signature, asymmetric question grid, tinted cards,
   floating accents, mixed reveals, text-wrap balance.
   var() tokens only.
   ════════════════════════════════════════════════════════════════ */

/* ── Page-scoped reveal directions ── */
[data-animate="ky-left"] {
  transform: translateX(-38px);
}
[data-animate="ky-right"] {
  transform: translateX(38px);
}
[data-animate="ky-zoom"] {
  transform: scale(0.93);
}
[data-animate].animated {
  transform: none;
}

/* ── HERO — diagonal split ── */
.ky-hero {
  position: relative;
  display: grid;
  grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
  min-height: 64vh;
  background: var(--color-primary-dark);
  overflow: hidden;
}
.ky-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px;
  pointer-events: none;
  z-index: 3;
}
.ky-hero-copy {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: var(--space-16) var(--space-8) var(--space-12) max(5vw, var(--space-8));
}
.ky-hero-copy::before {
  content: '';
  position: absolute;
  top: -30%;
  left: -20%;
  width: 70%;
  height: 160%;
  background: radial-gradient(circle,
    color-mix(in srgb, var(--color-accent) 10%, transparent) 0%,
    transparent 65%);
  pointer-events: none;
}
.ky-hero-crumb {
  font-size: var(--font-size-xs);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: color-mix(in srgb, var(--color-white) 52%, transparent);
  margin-bottom: var(--space-5);
}
.ky-hero-crumb a {
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
}
.ky-hero-crumb a:hover {
  color: var(--color-accent);
}
.ky-hero-crumb .sep {
  margin: 0 var(--space-2);
}
.ky-hero h1 {
  color: var(--color-white);
  font-size: clamp(2rem, 4.4vw, 3.2rem);
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-5);
  max-width: 16ch;
}
.ky-hero h1 span {
  color: var(--color-accent);
}
.ky-hero-lede {
  color: color-mix(in srgb, var(--color-white) 84%, transparent);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 52ch;
  margin-bottom: var(--space-7);
}
.ky-hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.ky-hero-ticks {
  display: flex;
  gap: var(--space-5);
  flex-wrap: wrap;
}
.ky-hero-ticks span {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: color-mix(in srgb, var(--color-white) 70%, transparent);
  font-size: var(--font-size-sm);
}
.ky-hero-ticks svg {
  color: var(--color-accent);
  flex-shrink: 0;
}
.ky-hero-media {
  position: relative;
  min-height: 380px;
  background-image: url('<?php echo htmlspecialchars($clientPhotos[7]); ?>');
  background-size: cover;
  background-position: center;
  clip-path: polygon(18% 0, 100% 0, 100% 100%, 0 100%);
}
.ky-hero-media::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(75deg,
    color-mix(in srgb, var(--color-primary-dark) 88%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 30%, transparent) 40%,
    transparent 75%);
}
.ky-hero-eta {
  position: absolute;
  bottom: var(--space-8);
  right: var(--space-8);
  z-index: 2;
  background: color-mix(in srgb, var(--color-primary-dark) 85%, transparent);
  backdrop-filter: blur(6px);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  border-radius: var(--radius-lg);
  padding: var(--space-4) var(--space-6);
  color: var(--color-white);
  font-size: var(--font-size-sm);
  text-align: center;
}
.ky-hero-eta strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
}

/* ── DIVIDER STYLE 1 — center notch ── */
.ky-divider-notch {
  display: block;
  width: 100%;
  line-height: 0;
  background: var(--color-primary-dark);
}
.ky-divider-notch svg {
  display: block;
  width: 100%;
  height: clamp(36px, 5vw, 64px);
}
.ky-divider-notch .fill {
  fill: var(--color-white);
}

/* ── FREEWAY BADGE GRID ── */
.ky-freeways {
  background: var(--color-white);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.ky-fw-float {
  position: absolute;
  top: -80px;
  right: -60px;
  width: 300px;
  height: 300px;
  border-radius: var(--radius-full);
  border: 24px solid color-mix(in srgb, var(--color-accent) 6%, transparent);
  pointer-events: none;
  animation: ky-spin 40s linear infinite;
}
@keyframes ky-spin {
  from { transform: rotate(0deg); }
  to   { transform: rotate(360deg); }
}
.ky-fw-head {
  max-width: 72ch;
  margin-bottom: var(--space-10);
}
.ky-fw-head .eyebrow {
  color: var(--color-accent);
}
.ky-fw-head h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ky-fw-head .answer-block {
  margin-top: var(--space-5);
}
.ky-fw-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
}
.ky-fw-card {
  position: relative;
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6) var(--space-6);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.ky-fw-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.ky-fw-card.tint-a {
  background: color-mix(in srgb, var(--color-primary) 7%, var(--color-white));
}
.ky-fw-card.tint-b {
  background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white));
}
.ky-fw-card.tint-c {
  background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white));
}
.ky-fw-badge {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-white);
  background: var(--color-primary-dark);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-md);
  padding: var(--space-1) var(--space-3);
  margin-bottom: var(--space-4);
  letter-spacing: 0.06em;
}
.ky-fw-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.ky-fw-card p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.7;
  margin-bottom: 0;
}
.ky-fw-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-accent), transparent);
  opacity: 0;
  transition: opacity var(--transition-base);
}
.ky-fw-card:hover::after {
  opacity: 1;
}

/* ── SIGNATURE — heritage strip (dark, rice + railroad) ── */
.ky-heritage {
  position: relative;
  background: linear-gradient(115deg, var(--color-dark) 0%, var(--color-primary-dark) 55%, var(--color-dark-alt) 100%);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ky-heritage::before {
  content: '';
  position: absolute;
  inset: 0;
  background: repeating-linear-gradient(
    90deg,
    transparent 0,
    transparent 120px,
    color-mix(in srgb, var(--color-white) 3%, transparent) 120px,
    color-mix(in srgb, var(--color-white) 3%, transparent) 124px);
  pointer-events: none;
}
.ky-heritage-grid {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: var(--space-12);
  align-items: center;
  position: relative;
  z-index: 1;
}
.ky-heritage-rail {
  position: relative;
  padding: var(--space-8);
  border: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent);
  border-radius: var(--radius-xl);
  background: color-mix(in srgb, var(--color-white) 4%, transparent);
  text-align: center;
}
.ky-heritage-rail::before {
  content: '';
  position: absolute;
  left: var(--space-6);
  right: var(--space-6);
  top: 50%;
  height: 2px;
  background: repeating-linear-gradient(
    90deg,
    color-mix(in srgb, var(--color-accent) 55%, transparent) 0,
    color-mix(in srgb, var(--color-accent) 55%, transparent) 14px,
    transparent 14px,
    transparent 24px);
  opacity: 0.5;
  pointer-events: none;
}
.ky-heritage-rail .yr {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2.6rem, 6vw, 4rem);
  color: var(--color-accent);
  line-height: 1;
  position: relative;
  background: var(--color-primary-dark);
  width: fit-content;
  margin: 0 auto var(--space-3);
  padding: 0 var(--space-4);
}
.ky-heritage-rail .cap {
  display: block;
  position: relative;
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  font-size: var(--font-size-sm);
  line-height: 1.6;
}
.ky-heritage-copy .ky-script {
  display: block;
  font-family: var(--font-accent);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.ky-heritage-copy h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.ky-heritage-copy p {
  color: color-mix(in srgb, var(--color-white) 74%, transparent);
  line-height: 1.8;
}
.ky-heritage-copy a {
  color: var(--color-accent);
  font-weight: 600;
}
.ky-heritage-copy a:hover {
  text-decoration: underline;
}

/* ── DIVIDER STYLE 2 — tilt ── */
.ky-divider-tilt {
  display: block;
  width: 100%;
  line-height: 0;
  background: var(--color-light);
}
.ky-divider-tilt svg {
  display: block;
  width: 100%;
  height: clamp(40px, 6vw, 80px);
}
.ky-divider-tilt .fill {
  fill: var(--color-dark-alt);
}

/* ── SPLIT — image + neighborhoods copy ── */
.ky-hoods {
  background: var(--color-light);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.ky-hoods-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-12);
  align-items: start;
}
.ky-hoods-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.ky-hoods-copy p {
  color: var(--color-gray-dark);
  line-height: 1.75;
}
.ky-hoods-copy a {
  color: var(--color-accent);
  font-weight: 600;
}
.ky-hoods-copy a:hover {
  text-decoration: underline;
}
.ky-hoods-media {
  position: relative;
}
.ky-hoods-media img {
  width: 100%;
  height: auto;
  border-radius: var(--radius-full) var(--radius-full) var(--radius-lg) var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.ky-hoods-media::after {
  content: '';
  position: absolute;
  bottom: calc(-1 * var(--space-4));
  right: calc(-1 * var(--space-4));
  width: 45%;
  height: 45%;
  background-image: radial-gradient(color-mix(in srgb, var(--color-accent) 30%, transparent) 2px, transparent 2px);
  background-size: 14px 14px;
  border-radius: var(--radius-lg);
  z-index: -1;
}
.ky-hood-tags {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.ky-hood-tags span {
  background: var(--color-white);
  border: 1px solid color-mix(in srgb, var(--color-primary) 15%, transparent);
  border-left: 3px solid var(--color-accent);
  border-radius: var(--radius-md);
  padding: var(--space-2) var(--space-4);
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
}
.ky-hood-tags span:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-sm);
}

/* ── QUESTION GRID — asymmetric 2-col ── */
.ky-questions {
  background: var(--color-white);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.ky-q-float {
  position: absolute;
  bottom: -60px;
  left: -80px;
  width: 260px;
  height: 260px;
  transform: rotate(-14deg);
  background: color-mix(in srgb, var(--color-primary) 5%, transparent);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.ky-q-head {
  text-align: center;
  max-width: 65ch;
  margin: 0 auto var(--space-10);
}
.ky-q-head h2 {
  text-wrap: balance;
}
.ky-q-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  position: relative;
  z-index: 1;
}
.ky-q-card {
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-6) var(--space-5);
  border-top: 3px solid var(--color-accent);
}
.ky-q-card:nth-child(even) {
  margin-top: var(--space-6);
}
.ky-q-card h3 {
  font-size: var(--font-size-lg);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.ky-q-card p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.75;
  margin-bottom: 0;
}
.ky-q-card a {
  color: var(--color-accent);
  font-weight: 600;
}
.ky-q-card a:hover {
  text-decoration: underline;
}

/* ── CTA ── */
.ky-cta {
  background: var(--color-primary-dark);
  padding: var(--space-16) 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.ky-cta::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 640px;
  height: 640px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle,
    color-mix(in srgb, var(--color-accent) 14%, transparent) 0%,
    transparent 70%);
  pointer-events: none;
}
.ky-cta .container {
  position: relative;
  z-index: 1;
}
.ky-cta h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ky-cta p {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  max-width: 58ch;
  margin: 0 auto var(--space-8);
}
.ky-cta-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.ky-siblings {
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 55%, transparent);
}
.ky-siblings a {
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  text-decoration: underline;
  text-underline-offset: 3px;
  margin: 0 var(--space-2);
}
.ky-siblings a:hover {
  color: var(--color-accent);
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .ky-fw-grid {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 900px) {
  .ky-hero {
    grid-template-columns: 1fr;
  }
  .ky-hero-media {
    min-height: 300px;
    clip-path: polygon(0 12%, 100% 0, 100% 100%, 0 100%);
    order: 2;
  }
  .ky-heritage-grid {
    grid-template-columns: 1fr;
  }
  .ky-hoods-grid {
    grid-template-columns: 1fr;
  }
  .ky-q-grid {
    grid-template-columns: 1fr;
  }
  .ky-q-card:nth-child(even) {
    margin-top: 0;
  }
}
</style>

<section class="ky-hero" aria-labelledby="ky-hero-heading">
  <div class="ky-hero-copy">
    <nav class="ky-hero-crumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="sep">/</span><a href="/service-area/">Service Areas</a><span class="sep">/</span>Katy, TX
    </nav>
    <h1 id="ky-hero-heading">Towing Service in <span>Katy</span>, TX</h1>
    <p class="ky-hero-lede">From the Katy Freeway's twenty-plus lanes to the quiet streets of old town, Twin Cities Towing INC covers Katy 24/7 &mdash; straight up the Grand Parkway from our Richmond yard, with your price locked in before the truck rolls.</p>
    <div class="ky-hero-actions">
      <a href="tel:+12819351113" class="btn btn-accent btn-lg">Call (281) 935-1113 &mdash; 24/7</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Request a Tow</a>
    </div>
    <div class="ky-hero-ticks">
      <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg> Licensed &amp; Insured</span>
      <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Est. 2011 &mdash; Fort Bend Based</span>
    </div>
  </div>
  <div class="ky-hero-media" role="img" aria-label="Twin Cities Towing truck working a roadside recovery near Katy TX">
    <div class="ky-hero-eta">
      <strong>30&ndash;50 min</strong>
      Typical ETA to Katy
    </div>
  </div>
</section>

<div class="ky-divider-notch" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path class="fill" d="M0,60 L0,30 L620,30 L660,58 L700,30 L1440,30 L1440,60 Z"/></svg>
</div>

<section class="ky-freeways" aria-labelledby="ky-fw-heading">
  <div class="ky-fw-float" aria-hidden="true"></div>
  <div class="container">
    <div class="ky-fw-head" data-animate="fade-up">
      <span class="eyebrow">Freeway Coverage</span>
      <h2 id="ky-fw-heading">Which Katy freeways does Twin Cities Towing work?</h2>
      <div class="answer-block">
        <p>Twin Cities Towing INC is a licensed and insured towing company based at 1920 Rocky Falls RD in Richmond, TX, and we've served Katy since 2011. We recover vehicles from I-10 (the Katy Freeway), the Grand Parkway (SH-99), and every surface street between Katy Mills and Cinco Ranch &mdash; 24 hours a day, with pricing quoted up front.</p>
      </div>
    </div>
    <div class="ky-fw-grid">
      <div class="ky-fw-card tint-a" data-animate="ky-left">
        <span class="ky-fw-badge">I-10</span>
        <h3>Katy Freeway &amp; the Energy Corridor commute</h3>
        <p>Tens of thousands of Katy residents run I-10 into the Energy Corridor every workday. When a breakdown strands you in one of America's widest freeway cross-sections, we position the flatbed as a shield, load fast, and get you off the shoulder &mdash; then home or to any shop you name.</p>
      </div>
      <div class="ky-fw-card tint-b" data-animate="fade-up">
        <span class="ky-fw-badge">SH-99</span>
        <h3>Grand Parkway &mdash; our direct line to Katy</h3>
        <p>The SH-99/I-10 interchange is Katy's busiest merge, and it's also our fastest route up from Richmond. That direct run is why our ETAs to Cinco Ranch and the parkway corridor hold at 30&ndash;50 minutes, even overnight.</p>
      </div>
      <div class="ky-fw-card tint-c" data-animate="ky-right">
        <span class="ky-fw-badge">KATY MILLS</span>
        <h3>Mall traffic, dead batteries &amp; lockouts</h3>
        <p>Katy Mills' massive lots produce a steady stream of jump starts, <a href="/services/lockout-service/">lockouts</a>, and cars that won't restart after a shopping trip. We work those lanes without blocking them &mdash; and holiday weekends don't change our response promise.</p>
      </div>
    </div>
  </div>
</section>

<section class="ky-heritage" aria-labelledby="ky-heritage-heading">
  <div class="container">
    <div class="ky-heritage-grid">
      <div class="ky-heritage-rail" data-animate="ky-zoom">
        <span class="yr">MKT</span>
        <span class="cap">Katy takes its name from the &ldquo;K-T&rdquo; &mdash; the Missouri&ndash;Kansas&ndash;Texas Railroad that cut through the town's rice fields. The rail line and the rice dryers still mark old town today.</span>
      </div>
      <div class="ky-heritage-copy" data-animate="ky-right">
        <span class="ky-script">Old town roads, modern traffic</span>
        <h2 id="ky-heritage-heading">Why does old town Katy need a different kind of tow?</h2>
        <p>North of I-10, old town Katy keeps its rice-farming bones: narrow streets platted along the MKT railroad grade, rail crossings, and historic blocks around the depot where a 40-foot wrecker simply doesn't fit. We send compact <a href="/services/light-duty-towing/">light-duty units</a> into those streets and save the big rigs for the freeway.</p>
        <p>South of the interstate it's the opposite problem &mdash; scale. Cinco Ranch alone is larger than many Texas towns, and an evening at LaCenterra can end with a dead battery three parking rows from the restaurant. Wherever you are when you search <strong>towing near me in Katy</strong>, the same Richmond dispatcher picks up, quotes one number, and tracks the truck to your pin.</p>
      </div>
    </div>
  </div>
</section>

<div class="ky-divider-tilt" aria-hidden="true">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none"><polygon class="fill" points="0,0 1440,0 1440,20 0,80"/></svg>
</div>

<section class="ky-hoods" aria-labelledby="ky-hoods-heading">
  <div class="container">
    <div class="ky-hoods-grid">
      <div class="ky-hoods-copy" data-animate="ky-left">
        <h2 id="ky-hoods-heading">Which Katy neighborhoods do you cover?</h2>
        <p>All of them &mdash; the city proper and the greater Katy area on both sides of I-10. Our <a href="/services/car-towing/">car towing</a> and <a href="/services/emergency-towing/">emergency towing</a> crews run Cinco Ranch's boulevards, the established streets of old town, and every master-planned section along the Grand Parkway. If a repair isn't worth a tow, <a href="/services/roadside-assistance/">roadside assistance</a> handles jump starts, fuel delivery, and flat tires curbside.</p>
        <p>Katy's explosive growth means construction zones shift monthly along SH-99 and the Katy Freeway feeders. Our drivers run these roads daily from Richmond, so lane closures don't eat your ETA. And every tow ends where you say it ends &mdash; any mechanic, dealership, body shop, or driveway in the region.</p>
        <div class="ky-hood-tags" aria-label="Katy neighborhoods served">
          <span>Old Town Katy</span>
          <span>Cinco Ranch</span>
          <span>LaCenterra area</span>
          <span>Katy Mills district</span>
          <span>Grand Parkway corridor</span>
          <span>Energy Corridor commuters</span>
        </div>
      </div>
      <div class="ky-hoods-media" data-animate="ky-zoom">
        <img src="<?php echo htmlspecialchars($clientPhotos[7]); ?>"
             alt="Flatbed tow truck loading a car for transport in Katy TX"
             width="560" height="640" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="ky-questions" aria-labelledby="ky-q-heading">
  <div class="ky-q-float" aria-hidden="true"></div>
  <div class="container">
    <div class="ky-q-head" data-animate="fade-up">
      <h2 id="ky-q-heading">Katy Towing Questions, Answered Straight</h2>
    </div>
    <div class="ky-q-grid">
      <?php foreach ($areaFaqs as $faq): ?>
      <div class="ky-q-card" data-animate="fade-up">
        <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
        <p><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
      <div class="ky-q-card" data-animate="fade-up">
        <h3>Can you tow my motorcycle from a Katy event?</h3>
        <p>Yes &mdash; our <a href="/services/motorcycle-towing/">motorcycle towing</a> setup uses wheel chocks and soft straps rated for bikes, not car tie-downs. Whether it quit outside Katy Mills or on the SH-99 feeder, your motorcycle rides the flatbed upright and scratch-free to any shop or garage you choose.</p>
      </div>
    </div>
  </div>
</section>

<section class="ky-cta" aria-labelledby="ky-cta-heading">
  <div class="container">
    <h2 id="ky-cta-heading">Need a Tow in Katy Right Now?</h2>
    <p>Call the Richmond dispatch line and get a live ETA to your exact spot on I-10, SH-99, or any Katy street &mdash; plus the full price before we roll. Prefer typing to talking? <a href="/contact/" style="color:var(--color-accent);">Send us the details online.</a></p>
    <div class="ky-cta-actions">
      <a href="tel:+12819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Quote</a>
    </div>
    <p class="ky-siblings">Nearby coverage:
      <a href="/areas/richmond-tx/">Richmond</a> &middot;
      <a href="/areas/sugar-land-tx/">Sugar Land</a>
    </p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
