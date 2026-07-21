<?php
/**
 * Twin Cities Towing INC — Greatwood, TX Service Area
 * Premium area page — proximity-meter signature layout
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Greatwood TX | Fastest Local Tow Truck Response | Twin Cities Towing INC';
$pageDescription = 'Greatwood, TX towing & roadside assistance minutes from our Richmond yard — US-59, Sansbury Blvd, Crabb River Rd & the golf-course sections. 24/7, 10–20 min response.';
$ogImage         = $clientPhotos[9];
$currentPage     = 'service-area';

$areaFaqs = [
    ['q' => 'How fast can a tow truck get to Greatwood?', 'a' => 'Faster than anywhere else we serve. Greatwood sits just across US-59 from our Richmond 77469 yard — roughly five miles door to door. Most calls to Sansbury Blvd, the golf-course sections, or the Crabb River Road corridor see a truck in 10–20 minutes, day or night.'],
    ['q' => 'How much does a tow from Greatwood cost?', 'a' => 'Because Greatwood is our closest coverage zone, hooks here start at the bottom of our range — typically $75–$110 for a light-duty tow to a Richmond or Sugar Land shop. Longer hauls up US-59 toward Houston price by mileage, and every number is confirmed before dispatch.'],
    ['q' => 'Can you winch a car out of mud near the Brazos?', 'a' => 'Yes. Greatwood is built on Brazos River bottomland, and after hard rain the soft ground off Crabb River Road and the low sections near the river swallow tires fast. Our trucks carry winch lines and recovery boards for mud pulls — call before you spin the ruts deeper.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Greatwood, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/greatwood-tx/#service',
         'name'        => 'Towing & Roadside Assistance in Greatwood, TX',
         'url'         => $domain . '/areas/greatwood-tx/',
         'description' => '24/7 towing, winch-outs, and roadside assistance in Greatwood, TX — US-59, Sansbury Blvd, Crabb River Road, and the golf-course neighborhoods. Our closest coverage zone, minutes from Richmond, TX.',
         'serviceType' => 'Towing Service',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Greatwood, TX']],
        generateFAQSchema($areaFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════
   GREATWOOD SERVICE AREA — page-specific styles (gw- prefix)
   Techniques: layered split hero with arch image (gradient +
   noise), proximity meter signature band, peaks + bump SVG
   dividers, asymmetric flood-aware section, tinted checklist
   cards, native details accordion, floating accents, mixed
   reveals, text-wrap balance. var() tokens only.
   ════════════════════════════════════════════════════════════════ */

/* ── Page-scoped reveal directions ── */
[data-animate="gw-left"] {
  transform: translateX(-34px);
}
[data-animate="gw-right"] {
  transform: translateX(34px);
}
[data-animate="gw-rise"] {
  transform: translateY(44px);
}
[data-animate].animated {
  transform: none;
}

/* ── HERO — light split with arch image ── */
.gw-hero {
  position: relative;
  background:
    linear-gradient(160deg,
      var(--color-primary-dark) 0%,
      var(--color-primary) 62%,
      color-mix(in srgb, var(--color-accent) 18%, var(--color-primary)) 100%);
  overflow: hidden;
}
.gw-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px;
  pointer-events: none;
  z-index: 1;
}
.gw-hero::after {
  content: '';
  position: absolute;
  top: -140px;
  right: 8%;
  width: 420px;
  height: 420px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle,
    color-mix(in srgb, var(--color-accent) 16%, transparent) 0%,
    transparent 70%);
  pointer-events: none;
  z-index: 1;
}
.gw-hero-grid {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: var(--space-12);
  align-items: center;
  padding: var(--space-16) 0 var(--space-12);
}
.gw-hero-crumb {
  font-size: var(--font-size-xs);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: color-mix(in srgb, var(--color-white) 55%, transparent);
  margin-bottom: var(--space-5);
}
.gw-hero-crumb a {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
}
.gw-hero-crumb a:hover {
  color: var(--color-accent);
}
.gw-hero-crumb .sep {
  margin: 0 var(--space-2);
}
.gw-hero h1 {
  color: var(--color-white);
  font-size: clamp(2rem, 4.3vw, 3.1rem);
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.gw-hero h1 span {
  color: var(--color-accent);
}
.gw-hero-lede {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 54ch;
  margin-bottom: var(--space-7);
}
.gw-hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
}
.gw-hero-media {
  position: relative;
  justify-self: end;
  width: min(100%, 460px);
}
.gw-hero-media img {
  width: 100%;
  height: auto;
  border-radius: var(--radius-full) var(--radius-full) var(--radius-xl) var(--radius-xl);
  border: 4px solid color-mix(in srgb, var(--color-white) 18%, transparent);
  box-shadow: var(--shadow-xl);
}
.gw-hero-media::before {
  content: '';
  position: absolute;
  top: var(--space-6);
  left: calc(-1 * var(--space-6));
  width: 100%;
  height: 100%;
  border-radius: var(--radius-full) var(--radius-full) var(--radius-xl) var(--radius-xl);
  border: 2px dashed color-mix(in srgb, var(--color-accent) 45%, transparent);
  z-index: -1;
}
.gw-hero-flag {
  position: absolute;
  bottom: var(--space-6);
  left: calc(-1 * var(--space-8));
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  padding: var(--space-4) var(--space-6);
  text-align: center;
}
.gw-hero-flag strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  color: var(--color-primary);
  line-height: 1.1;
}
.gw-hero-flag em {
  font-style: normal;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}

/* ── DIVIDER STYLE 1 — layered peaks ── */
.gw-divider-peaks {
  display: block;
  width: 100%;
  line-height: 0;
  margin-top: -1px;
}
.gw-divider-peaks svg {
  display: block;
  width: 100%;
  height: clamp(44px, 6vw, 88px);
}
.gw-divider-peaks .p1 {
  fill: color-mix(in srgb, var(--color-primary) 20%, var(--color-white));
  opacity: 0.5;
}
.gw-divider-peaks .p2 {
  fill: var(--color-white);
}

/* ── SIGNATURE — proximity meter ── */
.gw-proximity {
  background: var(--color-white);
  padding: var(--space-12) 0 var(--space-16);
  position: relative;
  overflow: hidden;
}
.gw-prox-head {
  text-align: center;
  max-width: 72ch;
  margin: 0 auto var(--space-10);
}
.gw-prox-head .gw-script {
  display: block;
  font-family: var(--font-accent);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.gw-prox-head h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.gw-prox-head .answer-block {
  text-align: left;
  margin-top: var(--space-6);
}
.gw-meter {
  position: relative;
  max-width: 880px;
  margin: 0 auto;
  padding: var(--space-8) 0 var(--space-4);
}
.gw-meter-track {
  position: relative;
  height: 10px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 10%, var(--color-white));
  overflow: visible;
}
.gw-meter-fill {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 34%;
  border-radius: var(--radius-full);
  background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
}
.gw-meter-pins {
  display: flex;
  justify-content: space-between;
  margin-top: var(--space-6);
}
.gw-meter-pin {
  position: relative;
  text-align: center;
  flex: 1;
}
.gw-meter-pin::before {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-6) - 14px);
  left: 50%;
  transform: translateX(-50%);
  width: 14px;
  height: 14px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 3px solid var(--color-accent);
  box-shadow: var(--shadow-sm);
}
.gw-meter-pin strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.gw-meter-pin em {
  font-style: normal;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
}
.gw-prox-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  max-width: 880px;
  margin: var(--space-10) auto 0;
}
.gw-prox-stat {
  text-align: center;
  padding: var(--space-6) var(--space-4);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.gw-prox-stat:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}
.gw-prox-stat.tint-a {
  background: color-mix(in srgb, var(--color-primary) 7%, var(--color-white));
}
.gw-prox-stat.tint-b {
  background: color-mix(in srgb, var(--color-accent) 9%, var(--color-white));
}
.gw-prox-stat.tint-c {
  background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white));
}
.gw-prox-stat strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  color: var(--color-primary);
  line-height: 1.1;
  margin-bottom: var(--space-2);
}
.gw-prox-stat span {
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
}

/* ── DIVIDER STYLE 2 — rounded bump ── */
.gw-divider-bump {
  display: block;
  width: 100%;
  line-height: 0;
  background: var(--color-white);
}
.gw-divider-bump svg {
  display: block;
  width: 100%;
  height: clamp(40px, 6vw, 76px);
}
.gw-divider-bump .fill {
  fill: var(--color-light);
}

/* ── ASYMMETRIC — Brazos bottomland section ── */
.gw-brazos {
  background: var(--color-light);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.gw-brazos::before {
  content: '';
  position: absolute;
  bottom: -40px;
  left: 0;
  right: 0;
  height: 120px;
  background: repeating-linear-gradient(
    -3deg,
    transparent 0,
    transparent 26px,
    color-mix(in srgb, var(--color-primary) 4%, transparent) 26px,
    color-mix(in srgb, var(--color-primary) 4%, transparent) 30px);
  pointer-events: none;
}
.gw-brazos-grid {
  display: grid;
  grid-template-columns: 0.55fr 1.45fr;
  gap: var(--space-10);
  align-items: start;
  position: relative;
  z-index: 1;
}
.gw-brazos-marker {
  position: sticky;
  top: calc(var(--space-16) + 84px);
  background: var(--color-primary-dark);
  border-radius: var(--radius-xl);
  padding: var(--space-8) var(--space-6);
  text-align: center;
  color: var(--color-white);
  overflow: hidden;
}
.gw-brazos-marker::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 42%;
  background: linear-gradient(180deg,
    transparent 0%,
    color-mix(in srgb, var(--color-accent) 22%, transparent) 100%);
  pointer-events: none;
}
.gw-brazos-marker svg {
  color: var(--color-accent);
  margin: 0 auto var(--space-4);
  display: block;
}
.gw-brazos-marker strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.gw-brazos-marker p {
  color: color-mix(in srgb, var(--color-white) 70%, transparent);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  margin-bottom: 0;
  position: relative;
}
.gw-brazos-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.gw-brazos-copy p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  max-width: 68ch;
}
.gw-brazos-copy a {
  color: var(--color-accent);
  font-weight: 600;
}
.gw-brazos-copy a:hover {
  text-decoration: underline;
}
.gw-hood-check {
  list-style: none;
  margin: var(--space-6) 0 0;
  padding: 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3) var(--space-6);
}
.gw-hood-check li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  background: var(--color-white);
  border-radius: var(--radius-md);
  padding: var(--space-3) var(--space-4);
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  box-shadow: var(--shadow-sm);
}
.gw-hood-check svg {
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* ── QUESTIONS — native accordion ── */
.gw-questions {
  background: var(--color-white);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.gw-q-float {
  position: absolute;
  top: 15%;
  right: -100px;
  width: 300px;
  height: 300px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 5%, transparent);
  pointer-events: none;
  animation: gw-breathe 12s ease-in-out infinite alternate;
}
@keyframes gw-breathe {
  from { transform: scale(1); }
  to   { transform: scale(1.15); }
}
.gw-q-head {
  max-width: 68ch;
  margin-bottom: var(--space-8);
}
.gw-q-head .eyebrow {
  color: var(--color-accent);
}
.gw-q-head h2 {
  text-wrap: balance;
}
.gw-acc {
  max-width: 820px;
  position: relative;
  z-index: 1;
}
.gw-acc details {
  border: 1px solid color-mix(in srgb, var(--color-primary) 14%, transparent);
  border-radius: var(--radius-lg);
  margin-bottom: var(--space-4);
  background: var(--color-white);
  transition: box-shadow var(--transition-base);
}
.gw-acc details[open] {
  box-shadow: var(--shadow-md);
  border-color: color-mix(in srgb, var(--color-accent) 50%, transparent);
}
.gw-acc summary {
  cursor: pointer;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-dark);
  text-wrap: balance;
}
.gw-acc summary::-webkit-details-marker {
  display: none;
}
.gw-acc summary::after {
  content: '+';
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  line-height: 1;
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.gw-acc details[open] summary::after {
  transform: rotate(45deg);
}
.gw-acc .gw-acc-body {
  padding: 0 var(--space-6) var(--space-5);
  color: var(--color-gray-dark);
  line-height: 1.75;
}
.gw-acc .gw-acc-body a {
  color: var(--color-accent);
  font-weight: 600;
}
.gw-acc .gw-acc-body a:hover {
  text-decoration: underline;
}

/* ── CTA ── */
.gw-cta {
  position: relative;
  background: var(--color-primary-dark);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gw-cta::before {
  content: '5 MIN';
  position: absolute;
  right: -2%;
  top: 4%;
  font-family: var(--font-heading);
  font-size: clamp(5rem, 14vw, 11rem);
  line-height: 1;
  color: color-mix(in srgb, var(--color-white) 4%, transparent);
  pointer-events: none;
}
.gw-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 760px;
}
.gw-cta h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.gw-cta p {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  margin-bottom: var(--space-8);
  max-width: 58ch;
}
.gw-cta-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-7);
}
.gw-siblings {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
}
.gw-siblings a {
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 22%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  font-size: var(--font-size-sm);
  transition: all var(--transition-fast);
}
.gw-siblings a:hover {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-primary-dark);
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .gw-brazos-grid {
    grid-template-columns: 1fr;
  }
  .gw-brazos-marker {
    position: static;
  }
}
@media (max-width: 900px) {
  .gw-hero-grid {
    grid-template-columns: 1fr;
  }
  .gw-hero-media {
    justify-self: center;
  }
  .gw-hero-flag {
    left: var(--space-4);
  }
  .gw-prox-stats {
    grid-template-columns: 1fr;
  }
  .gw-meter-pin em {
    display: none;
  }
}
@media (max-width: 600px) {
  .gw-hood-check {
    grid-template-columns: 1fr;
  }
}
</style>

<section class="gw-hero" aria-labelledby="gw-hero-heading">
  <div class="container">
    <div class="gw-hero-grid">
      <div>
        <nav class="gw-hero-crumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">/</span><a href="/service-area/">Service Areas</a><span class="sep">/</span>Greatwood, TX
        </nav>
        <h1 id="gw-hero-heading">Towing &amp; Roadside Assistance in <span>Greatwood</span>, TX</h1>
        <p class="gw-hero-lede">Greatwood is the closest community to our Richmond yard &mdash; just across US-59, about five miles door to door. That makes Twin Cities Towing INC the fastest tow truck most Greatwood drivers can call, around the clock, with the price set before we roll.</p>
        <div class="gw-hero-actions">
          <a href="tel:+12819351113" class="btn btn-accent btn-lg">Call (281) 935-1113 &mdash; 24/7</a>
          <a href="/contact/" class="btn btn-outline-white btn-lg">Request Service Online</a>
        </div>
      </div>
      <div class="gw-hero-media">
        <img src="<?php echo htmlspecialchars($clientPhotos[9]); ?>"
             alt="Twin Cities Towing operator securing a vehicle for a tow in Greatwood TX"
             width="460" height="560" loading="lazy">
        <div class="gw-hero-flag">
          <strong>10&ndash;20 min</strong>
          <em>Typical Greatwood ETA</em>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="gw-divider-peaks" aria-hidden="true">
  <svg viewBox="0 0 1440 90" preserveAspectRatio="none">
    <polygon class="p1" points="0,90 0,55 360,20 720,60 1080,15 1440,50 1440,90"/>
    <polygon class="p2" points="0,90 0,70 360,40 720,78 1080,35 1440,66 1440,90"/>
  </svg>
</div>

<section class="gw-proximity" aria-labelledby="gw-prox-heading">
  <div class="container">
    <div class="gw-prox-head" data-animate="fade-up">
      <span class="gw-script">Practically next door</span>
      <h2 id="gw-prox-heading">Why is Greatwood our fastest response zone?</h2>
      <div class="answer-block">
        <p>Twin Cities Towing INC is a licensed and insured towing company based at 1920 Rocky Falls RD in Richmond, TX &mdash; directly across US-59 from Greatwood's Sansbury Blvd entrance. No freeway miles to burn means our trucks reach most Greatwood addresses in 10&ndash;20 minutes, faster than any other community we serve.</p>
      </div>
    </div>
    <div class="gw-meter" data-animate="gw-rise" aria-label="Distance from Twin Cities Towing to Greatwood destinations">
      <div class="gw-meter-track">
        <div class="gw-meter-fill"></div>
      </div>
      <div class="gw-meter-pins">
        <div class="gw-meter-pin">
          <strong>Our Richmond Yard</strong>
          <em>1920 Rocky Falls RD, 77469</em>
        </div>
        <div class="gw-meter-pin">
          <strong>Sansbury Blvd</strong>
          <em>Greatwood's front door off US-59</em>
        </div>
        <div class="gw-meter-pin">
          <strong>Crabb River Rd</strong>
          <em>FM 2759 corridor &amp; River Pointe area</em>
        </div>
        <div class="gw-meter-pin">
          <strong>Golf-Course Sections</strong>
          <em>Deepest streets, still inside 20 min</em>
        </div>
      </div>
    </div>
    <div class="gw-prox-stats">
      <div class="gw-prox-stat tint-a" data-animate="gw-left">
        <strong>~5 mi</strong>
        <span>From our yard to Greatwood &mdash; the shortest run on our coverage map</span>
      </div>
      <div class="gw-prox-stat tint-b" data-animate="fade-up">
        <strong>10&ndash;20</strong>
        <span>Minutes to most Greatwood driveways, 24 hours a day</span>
      </div>
      <div class="gw-prox-stat tint-c" data-animate="gw-right">
        <strong>2011</strong>
        <span>Towing Greatwood and greater Fort Bend County ever since</span>
      </div>
    </div>
  </div>
</section>

<div class="gw-divider-bump" aria-hidden="true">
  <svg viewBox="0 0 1440 76" preserveAspectRatio="none"><path class="fill" d="M0,76 L0,52 C480,10 960,10 1440,52 L1440,76 Z"/></svg>
</div>

<section class="gw-brazos" aria-labelledby="gw-brazos-heading">
  <div class="container">
    <div class="gw-brazos-grid">
      <aside class="gw-brazos-marker" data-animate="gw-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>
        <strong>Built on Brazos Bottomland</strong>
        <p>Greatwood sits off US-59 on the south side of the Brazos River. When the river runs high and the ground saturates, soft shoulders turn into tire traps &mdash; and winch-out season begins.</p>
      </aside>
      <div class="gw-brazos-copy" data-animate="gw-right">
        <h2 id="gw-brazos-heading">What makes towing in Greatwood different?</h2>
        <p>Greatwood grew up as a master-planned golf-course community, and its layout shows it: winding boulevards off Sansbury Blvd, cul-de-sacs backing onto fairways, and one main corridor &mdash; Crabb River Road (FM 2759) &mdash; carrying nearly everyone in and out toward US-59 and the River Pointe area. When a stalled car blocks that funnel at school-run hour, the whole neighborhood feels it. We clear those stalls quickly because we're minutes away, not dispatched from the far side of Houston.</p>
        <p>The Brazos bottomland matters too. After heavy rain, lawns, swales, and construction edges get soft enough to swallow a wheel &mdash; our winch-outs spike every storm season. And since Greatwood now falls under Sugar Land's wing while keeping a Richmond mailing address, drivers are sometimes told they're "outside the area" by other companies. Not by us: Greatwood has been core territory since 2011. Whether you need <a href="/services/flatbed-towing/">flatbed towing</a> for a low-slung car, <a href="/services/breakdown-towing/">breakdown towing</a> to your mechanic, or a fast <a href="/services/lockout-service/">lockout service</a> in your own driveway, searching <strong>towing near me in Greatwood</strong> puts our yard closer than anyone else's. <em>Last Updated: <?php echo date('F Y'); ?></em></p>
        <ul class="gw-hood-check">
          <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> Sansbury Blvd &amp; the US-59 frontage</li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> Crabb River Rd / FM 2759 corridor</li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> Golf-course neighborhoods &amp; fairway cul-de-sacs</li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> River Pointe area &amp; the low river sections</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="gw-questions" aria-labelledby="gw-q-heading">
  <div class="gw-q-float" aria-hidden="true"></div>
  <div class="container">
    <div class="gw-q-head" data-animate="fade-up">
      <span class="eyebrow">Straight Answers</span>
      <h2 id="gw-q-heading">Greatwood Towing Questions We Hear Most</h2>
    </div>
    <div class="gw-acc" data-animate="fade-up">
      <?php foreach ($areaFaqs as $idx => $faq): ?>
      <details<?php echo $idx === 0 ? ' open' : ''; ?>>
        <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
        <div class="gw-acc-body"><p><?php echo htmlspecialchars($faq['a']); ?></p></div>
      </details>
      <?php endforeach; ?>
      <details>
        <summary>Do you handle both cars and SUVs in Greatwood?</summary>
        <div class="gw-acc-body"><p>Yes. Our <a href="/services/light-duty-towing/">light-duty towing</a> covers sedans, SUVs, and pickups &mdash; the everyday vehicles filling Greatwood garages. AWD vehicles and anything low to the ground ride the flatbed to protect drivetrains and bumpers, and we deliver anywhere you choose, from a Richmond shop five minutes away to a Houston dealership.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="gw-cta" aria-labelledby="gw-cta-heading">
  <div class="container">
    <div class="gw-cta-inner" data-animate="fade-up">
      <h2 id="gw-cta-heading">Stuck in Greatwood? We're Already Close.</h2>
      <p>The truck that answers your call parks five miles away. Get a live ETA and a firm price from the dispatcher who actually knows your street &mdash; or <a href="/contact/" style="color:var(--color-accent);">send your details online</a> and we'll ring you right back.</p>
      <div class="gw-cta-actions">
        <a href="tel:+12819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
        <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Quote</a>
      </div>
      <div class="gw-siblings">
        <a href="/areas/richmond-tx/">Richmond towing</a>
        <a href="/areas/sugar-land-tx/">Sugar Land towing</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
