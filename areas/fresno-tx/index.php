<?php
/**
 * Twin Cities Towing INC — Fresno, TX Service Area
 * Premium area page — unique structure: bottom-lit hero with stat strip,
 * subdivision bento growth grid signature, commuter-corridor split,
 * two-column Q&A grid, light services/areas directory band.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Emergency Towing in Fresno, TX 77545 | Twin Cities Towing INC';
$pageDescription = 'Emergency towing and roadside help in Fresno, TX 77545 — FM 521, Hwy 6, Teal Run, and Winfield Lakes. Honest 30-50 minute ETAs from Richmond, 24/7 dispatch.';
$ogImage         = $clientPhotos[12];
$currentPage     = 'service-area';

$areaFaqs = [
    ['q' => 'How quickly can you get a tow truck to Fresno, TX?', 'a' => 'Expect 30–50 minutes for most of Fresno. Our trucks dispatch from Richmond 77469, about 20 miles west, usually running Hwy 6 or US-90A across the county. That is a real number, not a teaser — for a stalled car on FM 521 in rush hour we will tell you the honest window before you commit.'],
    ['q' => 'How much does a tow cost in Fresno, TX?', 'a' => 'Most passenger-vehicle tows starting in Fresno run $95–$150 depending on distance and destination — a hop to a Missouri City shop costs less than a haul back across the county to Richmond. Winch-outs and after-midnight calls can add to that. Every job is priced as one firm quote before the truck rolls.'],
    ['q' => 'My car broke down on FM 521 — who has jurisdiction in Fresno?', 'a' => 'Fresno is unincorporated Fort Bend County, so there is no city police force — Fort Bend County constables and sheriff\'s deputies patrol these roads. If an officer is waiting on you, tell our dispatcher; we treat law-enforcement-standby calls as priority and coordinate directly so the scene clears fast.'],
    ['q' => 'Can you tow me from Fresno to Pearland or the Medical Center?', 'a' => 'Yes. A huge share of Fresno commuters head northeast toward Pearland and the Texas Medical Center every morning, and breakdowns follow the commute. We regularly tow from Fresno across the Harris County line to a Pearland shop or dealership — the county boundary is not a boundary for our trucks.'],
    ['q' => 'Do you cover the Teal Run and Winfield Lakes subdivisions?', 'a' => 'Every street of them. Teal Run, Winfield Lakes, and the newer sections filling in along FM 521 are dense with parked cars, speed humps, and tight corner radii, so we load quickly and position the truck to keep the street passable. Driveway pickups, HOA lots, and apartment complexes are all routine calls.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Fresno, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/fresno-tx/#service',
         'name'        => 'Emergency Towing in Fresno, TX',
         'url'         => $domain . '/areas/fresno-tx/',
         'description' => '24/7 emergency towing, accident towing, and lockout service for Fresno, TX 77545 — the FM 521 corridor, Hwy 6, Teal Run, Winfield Lakes, and unincorporated Fort Bend County near the Harris County line.',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Fresno', 'containedInPlace' => ['@type' => 'State', 'name' => 'Texas']],
         'serviceType' => 'Towing Service'],
        generateFAQSchema($areaFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ═══════════════════════════════════════════════════════════════════
   FRESNO, TX — AREA PAGE STYLES (page-specific, var() tokens only)
   Techniques: layered hero (bottom-lit gradient + noise) with stat
   strip, 2 SVG divider styles (arrow-notch + curve), subdivision bento
   grid signature, tinted panels, asymmetric commuter split, two-column
   Q&A grid, floating accents, Caveat subtitle, mixed reveal directions,
   text-wrap balance.
   ═══════════════════════════════════════════════════════════════════ */

/* ── HERO — bottom-lit with stat strip ───────────────────────────── */
.fr-hero {
  position: relative;
  background: var(--color-primary-dark);
  overflow: hidden;
  padding: calc(var(--space-16) + var(--space-12)) 0 0;
}
.fr-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 20% 0%, color-mix(in srgb, var(--color-secondary) 35%, transparent) 0%, transparent 50%),
    linear-gradient(8deg,
      color-mix(in srgb, var(--color-primary) 72%, var(--color-accent)) 0%,
      var(--color-primary) 38%,
      var(--color-primary-dark) 100%);
  z-index: 1;
}
.fr-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 150px;
  z-index: 2;
  pointer-events: none;
}
.fr-hero-body {
  position: relative;
  z-index: 3;
  max-width: 760px;
  padding-bottom: var(--space-12);
}
.fr-hero-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--color-primary-dark);
  background: var(--color-accent);
  padding: var(--space-1) var(--space-4);
  border-radius: var(--radius-sm);
  margin-bottom: var(--space-5);
}
.fr-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(1.9rem, 4.2vw, 3rem);
  line-height: 1.12;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.fr-hero h1 .fr-h1-accent { color: var(--color-accent); }
.fr-hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.75;
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}
.fr-hero-ctas { display: flex; gap: var(--space-4); flex-wrap: wrap; }
/* stat strip anchored to hero bottom */
.fr-statstrip {
  position: relative;
  z-index: 3;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  border-top: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent);
}
.fr-stat {
  padding: var(--space-6) var(--space-4);
  text-align: center;
  border-right: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent);
}
.fr-stat:last-child { border-right: 0; }
.fr-stat strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-accent);
  margin-bottom: var(--space-1);
}
.fr-stat span {
  font-size: var(--font-size-xs);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: color-mix(in srgb, var(--color-white) 62%, transparent);
}

/* ── SVG DIVIDERS — style 1: arrow notch / style 2: curve ────────── */
.fr-divider { display: block; line-height: 0; }
.fr-divider svg { display: block; width: 100%; height: clamp(30px, 4.5vw, 56px); }

/* ── SIGNATURE — SUBDIVISION BENTO GROWTH GRID ───────────────────── */
.fr-bento-section {
  position: relative;
  background: var(--color-light);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.fr-bento-float {
  position: absolute;
  top: -80px;
  right: -100px;
  width: 360px;
  height: 360px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 7%, transparent);
  pointer-events: none;
}
.fr-bento-head {
  max-width: 70ch;
  margin-bottom: var(--space-10);
}
.fr-bento-script {
  font-family: var(--font-accent);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-2);
  transform: rotate(-1.2deg);
}
.fr-bento-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.fr-bento {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-auto-rows: minmax(150px, auto);
  gap: var(--space-5);
}
.fr-cell {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.fr-cell:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.fr-cell--wide { grid-column: span 2; }
.fr-cell--t1 { background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white)); }
.fr-cell--t2 { background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white)); }
.fr-cell--t3 { background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white)); }
.fr-cell--dark {
  background: linear-gradient(140deg, var(--color-primary), var(--color-primary-dark));
}
.fr-cell--dark h3, .fr-cell--dark p { color: var(--color-white); }
.fr-cell--dark p { color: color-mix(in srgb, var(--color-white) 78%, transparent); }
.fr-cell-tag {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.fr-cell h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.fr-cell p {
  color: var(--color-gray-dark);
  line-height: 1.7;
  font-size: var(--font-size-sm);
}
.fr-cell a { color: var(--color-accent); font-weight: 600; text-decoration: underline; }
.fr-cell a:hover { color: var(--color-primary); }
.fr-cell--dark a:hover { color: var(--color-white); }

/* ── COMMUTER CORRIDOR SPLIT (asymmetric) ────────────────────────── */
.fr-commute {
  background: var(--color-white);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.fr-commute-float {
  position: absolute;
  bottom: -90px;
  left: -80px;
  width: 320px;
  height: 320px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 4%, transparent);
  pointer-events: none;
}
.fr-commute .container {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: var(--space-12);
  align-items: center;
}
.fr-commute-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.8vw, 2rem);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.fr-commute-content p {
  color: var(--color-gray-dark);
  line-height: 1.75;
  margin-bottom: var(--space-4);
  max-width: 62ch;
}
.fr-commute-content a { color: var(--color-accent); font-weight: 600; text-decoration: underline; }
.fr-commute-content a:hover { color: var(--color-primary); }
.fr-commute-photo {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  transform: rotate(-1.2deg);
}
.fr-commute-photo img { width: 100%; height: auto; display: block; }
.fr-commute-photo figcaption {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: var(--space-4) var(--space-5);
  background: linear-gradient(0deg, color-mix(in srgb, var(--color-primary-dark) 85%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
  font-weight: 600;
}

/* ── TWO-COLUMN Q&A GRID ─────────────────────────────────────────── */
.fr-qa {
  background: var(--color-light);
  padding: var(--space-16) 0;
}
.fr-qa-head {
  text-align: center;
  max-width: 64ch;
  margin: 0 auto var(--space-10);
}
.fr-qa-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.1rem);
  color: var(--color-primary);
  text-wrap: balance;
}
.fr-qa-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
}
.fr-qa-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  border-top: 4px solid var(--color-accent);
  padding: var(--space-6) var(--space-8);
  box-shadow: var(--shadow-card);
}
.fr-qa-card:nth-child(even) { border-top-color: var(--color-primary); }
.fr-qa-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.fr-qa-card p { color: var(--color-gray-dark); line-height: 1.7; font-size: var(--font-size-sm); }

/* ── DIRECTORY BAND — services + nearby areas ────────────────────── */
.fr-directory {
  background: var(--color-white);
  padding: var(--space-16) 0;
}
.fr-directory .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.fr-dir-col h2 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.fr-dir-col > p {
  color: var(--color-gray-dark);
  line-height: 1.7;
  margin-bottom: var(--space-6);
  max-width: 52ch;
}
.fr-dir-list { display: flex; flex-direction: column; gap: var(--space-3); }
.fr-dir-link {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  padding: var(--space-4) var(--space-6);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  font-weight: 600;
  color: var(--color-primary);
  transition: border-color var(--transition-fast), transform var(--transition-fast), box-shadow var(--transition-fast);
}
.fr-dir-link::after { content: '→'; color: var(--color-accent); transition: transform var(--transition-fast); }
.fr-dir-link:hover { border-color: var(--color-accent); transform: translateX(4px); box-shadow: var(--shadow-sm); }
.fr-dir-link:hover::after { transform: translateX(3px); }

/* ── FINAL CTA ───────────────────────────────────────────────────── */
.fr-cta {
  position: relative;
  background:
    radial-gradient(ellipse at 50% 130%, color-mix(in srgb, var(--color-accent) 22%, transparent) 0%, transparent 60%),
    linear-gradient(180deg, var(--color-primary), var(--color-primary-dark));
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.fr-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.4vw, 2.4rem);
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.fr-cta p {
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  max-width: 58ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.fr-cta-row { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ── PAGE-SPECIFIC REVEAL DIRECTIONS ─────────────────────────────── */
[data-animate="fr-left"]  { opacity: 0; transform: translateX(-30px); transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="fr-right"] { opacity: 0; transform: translateX(30px);  transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="fr-scale"] { opacity: 0; transform: scale(0.95);       transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="fr-left"].animated,
[data-animate="fr-right"].animated,
[data-animate="fr-scale"].animated { opacity: 1; transform: none; }

/* ── INTERACTION & ACCESSIBILITY REFINEMENTS ─────────────────────── */
.fr-dir-link:focus-visible,
.fr-hero-ctas a:focus-visible,
.fr-cta-row a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
}
.fr-cell a:focus-visible,
.fr-commute-content a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
  border-radius: var(--radius-sm);
}
.fr-stat {
  transition: background var(--transition-base);
}
.fr-stat:hover {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
}
.fr-qa-card {
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.fr-qa-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.fr-commute-photo {
  transition: transform var(--transition-slow);
}
.fr-commute-photo:hover { transform: rotate(0deg); }
::selection { background: color-mix(in srgb, var(--color-accent) 30%, transparent); }

@media (prefers-reduced-motion: reduce) {
  [data-animate="fr-left"],
  [data-animate="fr-right"],
  [data-animate="fr-scale"] { opacity: 1; transform: none; transition: none; }
  .fr-cell:hover,
  .fr-qa-card:hover,
  .fr-dir-link:hover { transform: none; }
  .fr-commute-photo { transform: none; }
}

/* ── RESPONSIVE ──────────────────────────────────────────────────── */
@media (min-width: 1400px) {
  .fr-hero-body { max-width: 820px; }
  .fr-hero-answer { font-size: var(--font-size-xl); }
}
@media (max-width: 1024px) {
  .fr-bento { grid-template-columns: 1fr 1fr; }
  .fr-cell--wide { grid-column: span 2; }
  .fr-commute .container { grid-template-columns: 1fr; }
  .fr-commute-photo { transform: none; max-width: 540px; }
  .fr-qa-grid { grid-template-columns: 1fr; }
  .fr-directory .container { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
  .fr-statstrip { grid-template-columns: 1fr 1fr; }
  .fr-stat:nth-child(2) { border-right: 0; }
  .fr-stat:nth-child(-n+2) { border-bottom: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent); }
  .fr-bento { grid-template-columns: 1fr; }
  .fr-cell--wide { grid-column: auto; }
  .fr-hero-ctas .btn, .fr-cta-row .btn { width: 100%; justify-content: center; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li><a href="/service-area/">Service Areas</a></li>
      <li aria-current="page">Fresno, TX</li>
    </ol>
  </div>
</nav>

<!-- HERO — no reveal classes above the fold -->
<section class="fr-hero" aria-labelledby="fr-hero-heading">
  <div class="container">
    <div class="fr-hero-body">
      <span class="fr-hero-eyebrow">Fresno &middot; Fort Bend County &middot; 77545</span>
      <h1 id="fr-hero-heading">Emergency Towing in <span class="fr-h1-accent">Fresno</span>, TX</h1>
      <p class="fr-hero-answer">Twin Cities Towing INC is a licensed and insured towing company based in Richmond, TX, running 24/7 dispatch across Fort Bend County — including Fresno, the fast-growing unincorporated stretch along FM 521 near the Harris County line. Realistic ETA from our yard: 30&ndash;50 minutes, quoted honestly, with a firm price before the truck rolls.</p>
      <div class="fr-hero-ctas">
        <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
        <a href="/contact/" class="btn btn-outline-white btn-lg">Request a Tow Online</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="fr-statstrip">
      <div class="fr-stat"><strong>30&ndash;50 min</strong><span>Honest Fresno ETA</span></div>
      <div class="fr-stat"><strong>$95&ndash;$150</strong><span>Typical tow range</span></div>
      <div class="fr-stat"><strong>24/7/365</strong><span>Live dispatch</span></div>
      <div class="fr-stat"><strong>Since 2011</strong><span>Fort Bend roads</span></div>
    </div>
  </div>
</section>

<!-- Divider style 1: arrow notch -->
<div class="fr-divider" style="background: var(--color-primary-dark);" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L640,0 L720,36 L800,0 L1440,0 L1440,56 L0,56 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- SIGNATURE — subdivision bento growth grid -->
<section class="fr-bento-section" aria-labelledby="fr-bento-heading">
  <div class="fr-bento-float" aria-hidden="true"></div>
  <div class="container">
    <div class="fr-bento-head" data-animate>
      <span class="fr-bento-script">Growing faster than its roads</span>
      <h2 id="fr-bento-heading">Why is towing near me in Fresno different from the cities next door?</h2>
      <p class="answer-block">Because Fresno isn't a city — it's unincorporated Fort Bend County filling up fast with subdivisions like Teal Run and Winfield Lakes, all funneling onto FM 521 and Hwy 6. No municipal tow rotation, no city garage: when something breaks here, a private company you choose is the only call there is. Here's how we cover it.</p>
    </div>
    <div class="fr-bento">
      <div class="fr-cell fr-cell--wide fr-cell--t1" data-animate="fr-left">
        <span class="fr-cell-tag">The spine</span>
        <h3>FM 521 — where Fresno breaks down</h3>
        <p>FM 521 carries nearly everything Fresno does: school runs, commuters heading for Hwy 6, delivery traffic into the new sections. It's also where most of our Fresno <a href="/services/emergency-towing/">emergency towing</a> calls happen — stalls at the signal queues and fender-benders at the subdivision entrances. Our drivers stage loads to keep the lane moving.</p>
      </div>
      <div class="fr-cell fr-cell--dark" data-animate="fr-right">
        <span class="fr-cell-tag">No city hall</span>
        <h3>Constable country</h3>
        <p>Unincorporated means Fort Bend County constables and deputies patrol Fresno's roads. If an officer is standing by at your breakdown, say so — we coordinate directly and clear the scene fast.</p>
      </div>
      <div class="fr-cell fr-cell--t2" data-animate="fr-left">
        <span class="fr-cell-tag">Subdivisions</span>
        <h3>Teal Run &amp; Winfield Lakes</h3>
        <p>Tight streets, speed humps, packed curbs. We run compact setups for driveway and apartment-lot pickups — <a href="/services/lockout-service/">lockouts</a> included — without blocking your neighbors in.</p>
      </div>
      <div class="fr-cell fr-cell--t3" data-animate="fr-right">
        <span class="fr-cell-tag">The edge</span>
        <h3>The Harris County line</h3>
        <p>Fresno sits right against Harris County, and our trucks cross it without ceremony — tows into Pearland, Missouri City, or anywhere else your mechanic happens to be.</p>
      </div>
      <div class="fr-cell fr-cell--wide fr-cell--t1" data-animate="fr-left">
        <span class="fr-cell-tag">The escape route</span>
        <h3>Hwy 6 — Fresno's on-ramp to everywhere</h3>
        <p>Hwy 6 is how Fresno reaches Sugar Land, Missouri City, and the freeway system, and its high-speed intersections produce the area's uglier wrecks. Our <a href="/services/accident-towing/">accident towing</a> crews work those scenes with law enforcement, and <a href="/services/light-duty-towing/">light-duty towing</a> handles the everyday breakdowns in between.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider style 2: curve -->
<div class="fr-divider" style="background: var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,56 C480,0 960,0 1440,56 L1440,56 L0,56 Z" fill="var(--color-white)"/>
  </svg>
</div>

<!-- COMMUTER CORRIDOR SPLIT -->
<section class="fr-commute" aria-labelledby="fr-commute-heading">
  <div class="fr-commute-float" aria-hidden="true"></div>
  <div class="container">
    <div class="fr-commute-content" data-animate="fr-left">
      <h2 id="fr-commute-heading">What happens when your car dies on the Pearland or Medical Center commute?</h2>
      <p>Thousands of Fresno residents point their cars northeast every morning — nurses and techs bound for the Texas Medical Center, the rest merging toward Pearland and the beltway. When a car gives out mid-commute, you don't just need a tow; you need it to end somewhere useful. Tell dispatch where you actually want the vehicle — your mechanic in Pearland, the dealership in Missouri City, your own driveway in Winfield Lakes — and we quote the whole trip as one number.</p>
      <p>And if the problem is smaller than it feels — a dead battery in the Teal Run driveway at 5:40 a.m., a flat on the FM 521 shoulder — <a href="/services/roadside-assistance/">roadside assistance</a> is usually faster and cheaper than a tow. We'll tell you which one you need on the phone, not after the truck arrives.</p>
      <p>Want a number saved before you need it? <a href="/contact/">Contact us</a> — or just keep (281) 935-1113 in your phone under "tow truck."</p>
    </div>
    <figure class="fr-commute-photo" data-animate="fr-scale">
      <img src="<?php echo htmlspecialchars($clientPhotos[12]); ?>"
           alt="Twin Cities Towing operator securing a vehicle for transport from Fresno, TX"
           width="600" height="450" loading="lazy">
      <figcaption>Loaded in Fresno, delivered where you say.</figcaption>
    </figure>
  </div>
</section>

<!-- TWO-COLUMN Q&A GRID -->
<section class="fr-qa" aria-labelledby="fr-qa-heading">
  <div class="container">
    <div class="fr-qa-head" data-animate>
      <h2 id="fr-qa-heading">Fresno towing questions we answer every week</h2>
    </div>
    <div class="fr-qa-grid">
      <?php foreach ($areaFaqs as $i => $faq): ?>
      <div class="fr-qa-card" data-animate="<?php echo $i % 2 === 0 ? 'fr-left' : 'fr-right'; ?>">
        <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
        <p><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- DIRECTORY BAND -->
<section class="fr-directory" aria-label="Fresno services and nearby areas">
  <div class="container">
    <div class="fr-dir-col" data-animate="fr-left">
      <h2>Services we run in Fresno</h2>
      <p>Every service on our board covers 77545 — these are the four Fresno calls for most often.</p>
      <div class="fr-dir-list">
        <a class="fr-dir-link" href="/services/emergency-towing/">Emergency Towing</a>
        <a class="fr-dir-link" href="/services/accident-towing/">Accident Towing</a>
        <a class="fr-dir-link" href="/services/lockout-service/">Lockout Service</a>
        <a class="fr-dir-link" href="/services/light-duty-towing/">Light Duty Towing</a>
      </div>
    </div>
    <div class="fr-dir-col" data-animate="fr-right">
      <h2>Nearby areas we cover</h2>
      <p>Breakdowns ignore boundary lines — so do our trucks. Fresno's neighbors are on the same dispatch board.</p>
      <div class="fr-dir-list">
        <a class="fr-dir-link" href="/areas/missouri-city-tx/">Towing in Missouri City, TX</a>
        <a class="fr-dir-link" href="/areas/sugar-land-tx/">Towing in Sugar Land, TX</a>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="fr-cta" aria-labelledby="fr-cta-heading">
  <div class="container" data-animate>
    <h2 id="fr-cta-heading">Broken down in Fresno right now?</h2>
    <p>Call the dispatcher, get the honest ETA and a firm price, and get off the FM 521 shoulder safely. That's the whole process — no brokers, no callbacks, no surprises.</p>
    <div class="fr-cta-row">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113 Now</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Quote</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
