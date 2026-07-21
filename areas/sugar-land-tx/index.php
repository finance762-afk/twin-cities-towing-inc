<?php
/**
 * Twin Cities Towing INC — Sugar Land, TX Service Area
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing in Sugar Land, TX | Twin Cities Towing INC';
$pageDescription = '24/7 towing in Sugar Land, TX — First Colony, Telfair, Town Square & the I-69/Hwy 6 interchange. Richmond-based trucks reach you in 25-40 min. (281) 935-1113.';
$ogImage         = $clientPhotos[24];
$currentPage     = 'service-area';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Sugar Land, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/sugar-land-tx/#service',
         'name'        => 'Towing Service in Sugar Land, TX',
         'url'         => $domain . '/areas/sugar-land-tx/',
         'description' => '24/7 towing and roadside assistance in Sugar Land, TX — covering First Colony, Telfair, Riverstone, Sugar Land Town Square, the I-69/Hwy 6 interchange, and Smart Financial Centre event traffic.',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Sugar Land, TX'],
         'serviceType' => 'Towing Service'],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ══════════════════════════════════════════════════════════════════
   SUGAR LAND, TX — SERVICE AREA PAGE
   Page-specific premium styles — var() tokens only.
   Structure is deliberately distinct from Richmond & Rosenberg pages:
   centered layered hero with chip row, answers-first AEO stack
   directly under the hero, asymmetric photo-right split, signature
   neighborhood tile wall, event-night callout ribbon.
   Techniques: layered hero (::before gradient + ::after noise),
   arch + tilt SVG dividers, asymmetric split, tinted neighborhood
   tiles (color-mix), floating accents at 4-7% opacity, Caveat accent
   subtitle, mixed-direction reveals, text-wrap balance.
   ══════════════════════════════════════════════════════════════════ */

/* ── Mixed-direction reveal variants (below-fold only) ── */
[data-animate="from-left"]  { transform: translateX(-34px); }
[data-animate="from-right"] { transform: translateX(34px); }
[data-animate="lift"]       { transform: translateY(42px); }
[data-animate="settle"]     { transform: scale(1.05); }

/* ── CENTERED LAYERED HERO ── */
.sgl-hero {
  position: relative;
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-size: cover;
  background-position: center 45%;
  overflow: hidden;
  padding: var(--space-16) 0;
}
.sgl-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 50% 100%,
      color-mix(in srgb, var(--color-accent) 22%, transparent) 0%,
      transparent 55%),
    linear-gradient(180deg,
      rgba(var(--color-primary-rgb), 0.94) 0%,
      rgba(var(--color-primary-rgb), 0.82) 55%,
      rgba(var(--color-primary-rgb), 0.94) 100%);
  z-index: 1;
}
.sgl-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  background-size: 190px;
  z-index: 2;
  pointer-events: none;
}
.sgl-hero .container {
  position: relative;
  z-index: 3;
  max-width: 880px;
}
.sgl-hero-crumb {
  font-size: var(--font-size-xs);
  color: color-mix(in srgb, var(--color-white) 55%, transparent);
  margin-bottom: var(--space-5);
}
.sgl-hero-crumb a { color: color-mix(in srgb, var(--color-white) 70%, transparent); }
.sgl-hero-crumb a:hover { color: var(--color-accent); }
.sgl-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.6vw, 3.5rem);
  line-height: 1.08;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.sgl-hero h1 span { color: var(--color-accent); }
.sgl-hero-script {
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.3vw, 1.65rem);
  color: color-mix(in srgb, var(--color-white) 86%, transparent);
  display: block;
  margin-bottom: var(--space-5);
}
.sgl-hero-lead {
  color: color-mix(in srgb, var(--color-white) 84%, transparent);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 66ch;
  margin: 0 auto var(--space-6);
}
.sgl-chip-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
  margin-bottom: var(--space-8);
}
.sgl-chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-white) 9%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 18%, transparent);
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-xs);
  letter-spacing: 0.5px;
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-full);
}
.sgl-chip svg { color: var(--color-accent); flex-shrink: 0; }
.sgl-hero-actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── ARCH DIVIDER ── */
.sgl-arch {
  display: block;
  width: 100%;
  line-height: 0;
  overflow: hidden;
}
.sgl-arch svg { display: block; width: 100%; height: 72px; }

/* ── AEO ANSWER STACK (directly under hero) ── */
.sgl-answers {
  position: relative;
  background: var(--color-white);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.sgl-answers-float {
  position: absolute;
  top: 12%;
  right: -120px;
  width: 330px;
  height: 330px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 6%, transparent);
  pointer-events: none;
}
.sgl-answers-float--b {
  top: auto;
  right: auto;
  bottom: -100px;
  left: -110px;
  width: 280px;
  height: 280px;
  background: color-mix(in srgb, var(--color-primary) 4%, transparent);
}
.sgl-answers-head {
  max-width: 760px;
  margin: 0 auto var(--space-10);
  text-align: center;
}
.sgl-answers-head h2 { text-wrap: balance; margin-bottom: var(--space-3); }
.sgl-answers-head p { color: var(--color-gray-dark); margin-bottom: 0; }
.sgl-stack {
  max-width: 860px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.sgl-panel {
  position: relative;
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-xl);
  padding: var(--space-8) var(--space-8) var(--space-8) var(--space-10);
  box-shadow: var(--shadow-card);
  overflow: hidden;
}
.sgl-panel::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 6px;
  background: linear-gradient(180deg, var(--color-accent), color-mix(in srgb, var(--color-accent) 25%, var(--color-primary)));
}
.sgl-panel:nth-child(even) { background: color-mix(in srgb, var(--color-accent) 4%, var(--color-white)); }
.sgl-panel h2 {
  font-size: var(--font-size-xl);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.sgl-panel p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  margin-bottom: 0;
  max-width: 70ch;
}

/* ── TILT DIVIDER ── */
.sgl-tilt {
  display: block;
  width: 100%;
  line-height: 0;
  overflow: hidden;
}
.sgl-tilt svg { display: block; width: 100%; height: 56px; }

/* ── ASYMMETRIC SPLIT (photo right) ── */
.sgl-split {
  background: var(--color-light);
  padding: var(--space-16) 0;
}
.sgl-split-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: var(--space-12);
  align-items: center;
}
.sgl-split-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.sgl-split-copy p {
  color: var(--color-gray-dark);
  line-height: 1.85;
  max-width: 65ch;
}
.sgl-split-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-4);
  margin-top: var(--space-6);
}
.sgl-stat {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-5);
  text-align: center;
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-accent);
}
.sgl-stat strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  color: var(--color-primary);
  line-height: 1.1;
}
.sgl-stat em {
  font-style: normal;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  text-transform: uppercase;
  letter-spacing: 1px;
}
.sgl-split-photo {
  position: relative;
}
.sgl-split-photo img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-full) var(--radius-full) var(--radius-xl) var(--radius-xl);
  box-shadow: var(--shadow-xl);
}
.sgl-split-photo::after {
  content: '';
  position: absolute;
  inset: calc(-1 * var(--space-3));
  border: 2px dashed color-mix(in srgb, var(--color-accent) 40%, transparent);
  border-radius: var(--radius-full) var(--radius-full) var(--radius-xl) var(--radius-xl);
  pointer-events: none;
}

/* ── SIGNATURE: NEIGHBORHOOD TILE WALL ── */
.sgl-hoods {
  position: relative;
  background: var(--color-white);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.sgl-hoods-float {
  position: absolute;
  top: -70px;
  left: 10%;
  width: 250px;
  height: 250px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-secondary) 6%, transparent);
  pointer-events: none;
}
.sgl-hoods-head {
  max-width: 740px;
  margin-bottom: var(--space-10);
}
.sgl-hoods-head h2 { text-wrap: balance; margin-bottom: var(--space-3); }
.sgl-hoods-head p { color: var(--color-gray-dark); margin-bottom: 0; }
.sgl-tiles {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  gap: var(--space-5);
}
.sgl-tile {
  border-radius: var(--radius-xl);
  padding: var(--space-6);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.sgl-tile:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.sgl-tile--a { grid-column: span 7; background: color-mix(in srgb, var(--color-primary) 8%, var(--color-white)); }
.sgl-tile--b { grid-column: span 5; background: color-mix(in srgb, var(--color-accent) 9%, var(--color-white)); }
.sgl-tile--c { grid-column: span 5; background: color-mix(in srgb, var(--color-secondary) 10%, var(--color-white)); }
.sgl-tile--d { grid-column: span 7; background: color-mix(in srgb, var(--color-primary-dark) 5%, var(--color-white)); }
.sgl-tile-tag {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  background: var(--color-primary);
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-sm);
  margin-bottom: var(--space-4);
}
.sgl-tile h3 {
  font-size: var(--font-size-lg);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.sgl-tile p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.75;
  margin-bottom: 0;
  max-width: 60ch;
}

/* ── EVENT-NIGHT RIBBON ── */
.sgl-events {
  position: relative;
  background: linear-gradient(120deg, var(--color-primary-dark) 0%, var(--color-primary) 70%, color-mix(in srgb, var(--color-accent) 30%, var(--color-primary)) 100%);
  color: var(--color-white);
  padding: var(--space-12) 0;
  overflow: hidden;
}
.sgl-events::before {
  content: '';
  position: absolute;
  top: -60px;
  right: 14%;
  width: 220px;
  height: 220px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  pointer-events: none;
}
.sgl-events-grid {
  position: relative;
  display: grid;
  grid-template-columns: auto 1fr auto;
  gap: var(--space-8);
  align-items: center;
}
.sgl-events-icon {
  width: 64px;
  height: 64px;
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-accent) 20%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  color: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.sgl-events h2 {
  color: var(--color-white);
  font-size: var(--font-size-2xl);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.sgl-events p {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  line-height: 1.7;
  max-width: 68ch;
  margin-bottom: 0;
  font-size: var(--font-size-sm);
}

/* ── SERVICES + SIBLINGS FOOT ── */
.sgl-foot {
  background: var(--color-light);
  padding: var(--space-16) 0;
}
.sgl-foot-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-10);
  align-items: start;
}
.sgl-foot-col h2 {
  font-size: var(--font-size-xl);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.sgl-foot-col p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.75;
}
.sgl-foot-links {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  margin-top: var(--space-5);
}
.sgl-foot-links a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-3);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  padding: var(--space-4) var(--space-5);
  font-weight: 600;
  color: var(--color-primary);
  transition: border-color var(--transition-fast), transform var(--transition-fast), color var(--transition-fast);
}
.sgl-foot-links a::after {
  content: '→';
  color: var(--color-accent);
  transition: transform var(--transition-fast);
}
.sgl-foot-links a:hover {
  border-color: var(--color-accent);
  color: var(--color-accent);
  transform: translateX(4px);
}
.sgl-foot-links a:hover::after { transform: translateX(3px); }

/* ── FINAL CTA ── */
.sgl-cta {
  position: relative;
  background: var(--color-primary);
  text-align: center;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.sgl-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 50% 0%,
    color-mix(in srgb, var(--color-accent) 14%, transparent) 0%,
    transparent 55%);
}
.sgl-cta .container { position: relative; }
.sgl-cta h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.sgl-cta p {
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-8);
  line-height: 1.75;
}
.sgl-cta-actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .sgl-split-grid,
  .sgl-foot-grid { grid-template-columns: 1fr; }
  .sgl-tile--a, .sgl-tile--b, .sgl-tile--c, .sgl-tile--d { grid-column: span 6; }
  .sgl-events-grid { grid-template-columns: auto 1fr; }
  .sgl-events-grid .btn { grid-column: 2; justify-self: start; }
}
@media (max-width: 640px) {
  .sgl-tile--a, .sgl-tile--b, .sgl-tile--c, .sgl-tile--d { grid-column: span 12; }
  .sgl-split-stats { grid-template-columns: 1fr; }
  .sgl-hero-actions, .sgl-cta-actions { flex-direction: column; align-items: stretch; }
  .sgl-events-grid { grid-template-columns: 1fr; }
  .sgl-events-grid .btn { grid-column: 1; }
}
</style>

<!-- CENTERED LAYERED HERO -->
<section class="sgl-hero" style="background-image:url('<?php echo htmlspecialchars($clientPhotos[24]); ?>');" aria-labelledby="sgl-h1">
  <div class="container">
    <nav class="sgl-hero-crumb" aria-label="Breadcrumb">
      <a href="/">Home</a> › <a href="/service-area/">Service Areas</a> › <span aria-current="page">Sugar Land, TX</span>
    </nav>
    <h1 id="sgl-h1">Towing Service in <span>Sugar Land, TX</span></h1>
    <span class="sgl-hero-script">From Town Square to Telfair — we know every gate and garage.</span>
    <p class="sgl-hero-lead">Twin Cities Towing INC is a licensed and insured towing company based in nearby Richmond, serving Sugar Land and all of Fort Bend County since 2011. Whether you're stalled at the I-69 and Highway 6 interchange, locked out at Sugar Land Town Square, or stuck in a First Colony driveway, our trucks reach most of Sugar Land in 25&ndash;40 minutes — 24 hours a day.</p>
    <div class="sgl-chip-row">
      <span class="sgl-chip"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg> First Colony</span>
      <span class="sgl-chip"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg> Telfair</span>
      <span class="sgl-chip"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg> Riverstone</span>
      <span class="sgl-chip"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg> Town Square</span>
      <span class="sgl-chip"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 24/7 &bull; 25&ndash;40 Min ETA</span>
    </div>
    <div class="sgl-hero-actions">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Estimate</a>
    </div>
  </div>
</section>

<div class="sgl-arch" style="background:var(--color-white);" aria-hidden="true">
  <svg viewBox="0 0 1440 72" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L0,20 Q720,90 1440,20 L1440,0 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- AEO ANSWER STACK -->
<section class="sgl-answers" aria-labelledby="sgl-ans-h">
  <div class="sgl-answers-float" aria-hidden="true"></div>
  <div class="sgl-answers-float sgl-answers-float--b" aria-hidden="true"></div>
  <div class="container">
    <div class="sgl-answers-head" data-animate>
      <h2 id="sgl-ans-h">Sugar Land Towing — The Answers Up Front</h2>
      <p>Stranded drivers don't want a brochure. Here's what you actually need to know before calling for towing near me in Sugar Land.</p>
    </div>
    <div class="sgl-stack">
      <div class="sgl-panel answer-block" data-animate="lift">
        <h2>How long does a tow truck take to reach Sugar Land, TX?</h2>
        <p>Twin Cities Towing INC reaches most Sugar Land locations in 25&ndash;40 minutes from our Richmond base, running US-90A or I-69 depending on where you are. First Colony and Town Square sit at the near end of that range; Riverstone and Telfair at the far end. Dispatch answers 24/7 and gives you a live ETA.</p>
      </div>
      <div class="sgl-panel" data-animate="lift">
        <h2>What does towing cost from Sugar Land?</h2>
        <p>Most standard Sugar Land tows run $95&ndash;$150 depending on distance and vehicle type, with flatbed transport for AWD and low-clearance cars at the upper end. A tow back to a Sugar Land or Richmond shop costs less than a haul into Houston. You get the exact number on the phone — before any truck moves.</p>
      </div>
      <div class="sgl-panel" data-animate="lift">
        <h2>What are the most common tow calls in Sugar Land?</h2>
        <p>Collisions and stalls where I-69 meets Highway 6 and University Blvd, garage lockouts at Sugar Land Town Square, dead batteries after events at the Smart Financial Centre, and flat tires along the Highway 6 corridor near the Sugar Land Regional Airport. Evening rush and event nights generate the biggest spikes.</p>
      </div>
    </div>
  </div>
</section>

<div class="sgl-tilt" style="background:var(--color-white);" aria-hidden="true">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,56 0,26 1440,2 1440,56" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ASYMMETRIC SPLIT (photo right) -->
<section class="sgl-split" aria-labelledby="sgl-split-h">
  <div class="container">
    <div class="sgl-split-grid">
      <div class="sgl-split-copy" data-animate="from-left">
        <h2 id="sgl-split-h">Master-Planned Streets Need a Tow Operator Who Respects Them</h2>
        <p>Sugar Land isn't a city you improvise in. First Colony, Telfair, and Riverstone are master-planned communities with HOA standards, gated sections, and residents who expect a tow to happen quietly and carefully — no gouged lawns, no trucks idling at 2 a.m. longer than necessary. We only run owner-requested tows, we call ahead at gates, and our <a href="/services/flatbed-towing/">flatbed towing</a> keeps low-clearance vehicles off the pavement entirely.</p>
        <p>It's the same story at the commercial end: office parks off US-59, the Town Square garages, and hangar clients near the Sugar Land Regional Airport all get the same careful loading and upfront pricing. That's why Sugar Land drivers who found us once keep our number saved.</p>
        <div class="sgl-split-stats">
          <div class="sgl-stat" data-animate="lift"><strong>25&ndash;40</strong><em>min typical ETA</em></div>
          <div class="sgl-stat" data-animate="lift"><strong>$95+</strong><em>standard tows from</em></div>
          <div class="sgl-stat" data-animate="lift"><strong>24/7</strong><em>live dispatch</em></div>
        </div>
      </div>
      <div class="sgl-split-photo" data-animate="settle">
        <img src="<?php echo htmlspecialchars($clientPhotos[20]); ?>"
             alt="Twin Cities Towing INC operator securing a car for flatbed transport in Sugar Land, TX"
             width="560" height="640" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- SIGNATURE: NEIGHBORHOOD TILE WALL -->
<section class="sgl-hoods" aria-labelledby="sgl-hood-h">
  <div class="sgl-hoods-float" aria-hidden="true"></div>
  <div class="container">
    <div class="sgl-hoods-head" data-animate>
      <h2 id="sgl-hood-h">Which Parts of Sugar Land Do We Cover?</h2>
      <p>All of them — but each corner of Sugar Land breaks down differently, and we've learned the patterns over 13+ years of calls.</p>
    </div>
    <div class="sgl-tiles">
      <div class="sgl-tile sgl-tile--a" data-animate="from-left">
        <span class="sgl-tile-tag">I-69 &times; Hwy 6</span>
        <h3>The interchange &amp; University Blvd</h3>
        <p>The busiest asphalt in Sugar Land. Rush-hour collisions, merge-lane stalls, and debris flats cluster where I-69, Highway 6, and University Blvd tangle. Our <a href="/services/accident-towing/">accident towing</a> crews clear scenes here fast and coordinate with responders so traffic keeps moving.</p>
      </div>
      <div class="sgl-tile sgl-tile--b" data-animate="from-right">
        <span class="sgl-tile-tag">Town Square</span>
        <h3>Garages, valets &amp; tight ramps</h3>
        <p>Sugar Land Town Square's parking structures have height limits and tight spirals. We send the right truck the first time and handle <a href="/services/lockout-service/">lockouts</a> and jump starts inside the garages without drama.</p>
      </div>
      <div class="sgl-tile sgl-tile--c" data-animate="from-left">
        <span class="sgl-tile-tag">First Colony &amp; Riverstone</span>
        <h3>Residential &amp; gated sections</h3>
        <p>Driveway jump starts, HOA-conscious flatbed loads, and college-kid cars that won't start after a semester parked. We call ahead at gates and leave streets exactly as we found them.</p>
      </div>
      <div class="sgl-tile sgl-tile--d" data-animate="from-right">
        <span class="sgl-tile-tag">Hwy 6 South &amp; the Airport</span>
        <h3>Telfair to Sugar Land Regional</h3>
        <p>The Highway 6 corridor past Telfair toward the Sugar Land Regional Airport mixes commuter speed with construction zones. Flats and curb strikes are the staple call — our <a href="/services/tire-change/">tire change service</a> often fixes it on the spot, no tow needed.</p>
      </div>
    </div>
  </div>
</section>

<!-- EVENT-NIGHT RIBBON -->
<section class="sgl-events" aria-labelledby="sgl-ev-h">
  <div class="container">
    <div class="sgl-events-grid">
      <div class="sgl-events-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 10s3-3 3-8c0 0 1.5 2 2 5 0 0 2-1 2-4 0 0 5 3 5 10a7 7 0 1 1-14 0c0-1.1.2-2.1.5-3"/></svg>
      </div>
      <div data-animate="from-left">
        <h2 id="sgl-ev-h">Smart Financial Centre Show Tonight?</h2>
        <p>Concert and event nights at the Smart Financial Centre flood the University Blvd lots — and every show leaves a few drivers with dead batteries, locked keys, or a car that won't turn over at 11 p.m. We run extra availability on big event nights. Save our number before the encore.</p>
      </div>
      <a href="tel:2819351113" class="btn btn-accent">Save (281) 935-1113</a>
    </div>
  </div>
</section>

<!-- SERVICES + SIBLINGS -->
<section class="sgl-foot" aria-labelledby="sgl-foot-h">
  <div class="container">
    <div class="sgl-foot-grid">
      <div class="sgl-foot-col" data-animate="from-left">
        <h2 id="sgl-foot-h">Services Sugar Land Calls Us For</h2>
        <p>Every service dispatches to Sugar Land 24/7 with the price confirmed before the truck leaves Richmond.</p>
        <div class="sgl-foot-links">
          <a href="/services/car-towing/">Car Towing</a>
          <a href="/services/flatbed-towing/">Flatbed Towing</a>
          <a href="/services/roadside-assistance/">Roadside Assistance</a>
          <a href="/services/lockout-service/">Lockout Service</a>
        </div>
      </div>
      <div class="sgl-foot-col" data-animate="from-right">
        <h2>Nearby Coverage</h2>
        <p>Heading out of town, or broke down just past the city line? The same trucks cover the rest of Fort Bend County.</p>
        <div class="sgl-foot-links">
          <a href="/areas/richmond-tx/">Towing in Richmond, TX</a>
          <a href="/areas/rosenberg-tx/">Towing in Rosenberg, TX</a>
          <a href="/service-area/">All Service Areas</a>
          <a href="/contact/">Contact &amp; Request a Tow</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="sgl-cta" aria-labelledby="sgl-cta-h">
  <div class="container">
    <h2 id="sgl-cta-h">Broken Down in Sugar Land? Help Is One Exit Away.</h2>
    <p>Twin Cities Towing INC has served Sugar Land from our Richmond base since 2011 — licensed, insured, and familiar with every gate code protocol and garage ramp in the city. Call for a live ETA and an upfront price.</p>
    <div class="sgl-cta-actions">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Estimate</a>
    </div>
    <p style="margin-top:var(--space-8);margin-bottom:0;font-size:var(--font-size-xs);color:color-mix(in srgb, var(--color-white) 55%, transparent);"><em>Last Updated: <?php echo date('F Y'); ?></em></p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
