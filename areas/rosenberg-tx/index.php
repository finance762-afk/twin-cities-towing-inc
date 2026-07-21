<?php
/**
 * Twin Cities Towing INC — Rosenberg, TX Service Area
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing in Rosenberg, TX | Twin Cities Towing INC';
$pageDescription = 'Towing and roadside assistance in Rosenberg, TX. I-69 and Hwy 36 corridors, the downtown railroad district & Brazos Town Center covered 24/7 in 15-30 min.';
$ogImage         = $clientPhotos[23];
$currentPage     = 'service-area';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Rosenberg, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/rosenberg-tx/#service',
         'name'        => 'Towing Service in Rosenberg, TX',
         'url'         => $domain . '/areas/rosenberg-tx/',
         'description' => '24/7 towing and roadside assistance in Rosenberg, TX. Coverage for the I-69/US-59 freeway corridor, the Hwy 36 interchange, downtown Rosenberg\'s railroad district, and Brazos Town Center from a base minutes away in Richmond.',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Rosenberg, TX'],
         'serviceType' => 'Towing Service'],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ══════════════════════════════════════════════════════════════════
   ROSENBERG, TX — SERVICE AREA PAGE
   Page-specific premium styles — var() tokens only.
   Structure is deliberately distinct from the Richmond page:
   split hero with clipped photo (not full-bleed bg), dark freeway
   signature band with a giant watermark, bento local-knowledge grid,
   photo strip band, stacked Q&A rows.
   Techniques: layered hero panel (::before gradient + ::after noise),
   torn-edge + multi-wave SVG dividers, asymmetric split hero, tinted
   bento cards (color-mix), floating accents at 5-7% opacity, Caveat
   accent subtitle, mixed-direction reveals, text-wrap balance.
   ══════════════════════════════════════════════════════════════════ */

/* ── Mixed-direction reveal variants (below-fold only) ── */
[data-animate="drift-left"]  { transform: translateX(-40px); }
[data-animate="drift-right"] { transform: translateX(40px); }
[data-animate="drop"]        { transform: translateY(-32px); }
[data-animate="grow"]        { transform: scale(0.93); }

/* ── SPLIT HERO ── */
.rsb-hero {
  position: relative;
  background: var(--color-primary-dark);
  overflow: hidden;
  padding: var(--space-16) 0 0;
}
.rsb-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg,
    var(--color-primary-dark) 0%,
    var(--color-primary) 55%,
    rgba(var(--color-secondary-rgb), 0.85) 100%);
  z-index: 0;
}
.rsb-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px;
  z-index: 1;
  pointer-events: none;
}
.rsb-hero-grid {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-10);
  align-items: center;
  padding-bottom: var(--space-16);
}
.rsb-hero-copy .rsb-kicker {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 3px;
  margin-bottom: var(--space-4);
}
.rsb-hero-copy .rsb-kicker::before {
  content: '';
  width: 34px;
  height: 2px;
  background: var(--color-accent);
  border-radius: var(--radius-full);
}
.rsb-hero-copy h1 {
  color: var(--color-white);
  font-size: clamp(2rem, 4.4vw, 3.4rem);
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rsb-hero-copy h1 em {
  font-style: normal;
  color: var(--color-accent);
}
.rsb-hero-script {
  font-family: var(--font-accent);
  font-size: clamp(1.25rem, 2.2vw, 1.6rem);
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  margin-bottom: var(--space-5);
}
.rsb-hero-copy p.rsb-lead {
  color: color-mix(in srgb, var(--color-white) 84%, transparent);
  line-height: 1.8;
  max-width: 58ch;
  margin-bottom: var(--space-8);
}
.rsb-hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.rsb-hero-meta {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
}
.rsb-hero-meta span {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-white) 8%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 16%, transparent);
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  font-size: var(--font-size-xs);
  padding: var(--space-2) var(--space-3);
  border-radius: var(--radius-full);
}
.rsb-hero-meta svg { color: var(--color-accent); }
.rsb-hero-photo {
  position: relative;
}
.rsb-hero-photo img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-xl);
  clip-path: polygon(6% 0, 100% 3%, 96% 100%, 0 96%);
  box-shadow: var(--shadow-xl);
}
.rsb-hero-photo::before {
  content: '';
  position: absolute;
  inset: var(--space-4) calc(-1 * var(--space-4)) calc(-1 * var(--space-4)) var(--space-4);
  border: 2px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.rsb-hero-eta {
  position: absolute;
  bottom: calc(-1 * var(--space-5));
  left: var(--space-6);
  background: var(--color-accent);
  color: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-4) var(--space-6);
  box-shadow: var(--shadow-lg);
  text-align: center;
}
.rsb-hero-eta strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  line-height: 1;
}
.rsb-hero-eta em {
  font-style: normal;
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ── TORN-EDGE DIVIDER ── */
.rsb-torn {
  display: block;
  width: 100%;
  line-height: 0;
  overflow: hidden;
}
.rsb-torn svg { display: block; width: 100%; height: 52px; }

/* ── INTRO / IDENTITY ── */
.rsb-intro {
  background: var(--color-white);
  padding: var(--space-16) 0 var(--space-12);
  position: relative;
  overflow: hidden;
}
.rsb-intro-float {
  position: absolute;
  top: 30%;
  left: -130px;
  width: 320px;
  height: 320px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 5%, transparent);
  pointer-events: none;
}
.rsb-intro-inner {
  max-width: 820px;
  margin: 0 auto;
  text-align: left;
}
.rsb-intro h2 {
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.rsb-intro p {
  color: var(--color-gray-dark);
  line-height: 1.85;
  max-width: 68ch;
}
.rsb-intro .answer-block { margin-top: var(--space-8); }

/* ── SIGNATURE: FREEWAY BAND ── */
.rsb-freeway {
  position: relative;
  background: var(--color-primary-dark);
  color: var(--color-white);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rsb-freeway::before {
  content: 'I-69';
  position: absolute;
  right: -2%;
  top: 50%;
  transform: translateY(-50%);
  font-family: var(--font-heading);
  font-size: clamp(9rem, 24vw, 20rem);
  line-height: 1;
  color: color-mix(in srgb, var(--color-white) 4%, transparent);
  pointer-events: none;
  user-select: none;
}
.rsb-freeway-grid {
  position: relative;
  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  gap: var(--space-12);
  align-items: start;
}
.rsb-freeway h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rsb-freeway-tag {
  font-family: var(--font-accent);
  font-size: var(--font-size-xl);
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-3);
}
.rsb-freeway p.rsb-freeway-lead {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  line-height: 1.8;
  max-width: 55ch;
}
.rsb-lanes {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.rsb-lane {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-5);
  align-items: start;
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 12%, transparent);
  border-radius: var(--radius-lg);
  padding: var(--space-5) var(--space-6);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.rsb-lane:hover {
  transform: translateX(6px);
  border-color: color-mix(in srgb, var(--color-accent) 55%, transparent);
}
.rsb-lane-marker {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-white);
  background: color-mix(in srgb, var(--color-accent) 85%, var(--color-black));
  border-radius: var(--radius-md);
  padding: var(--space-2) var(--space-3);
  white-space: nowrap;
}
.rsb-lane h3 {
  color: var(--color-white);
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
}
.rsb-lane p {
  color: color-mix(in srgb, var(--color-white) 68%, transparent);
  font-size: var(--font-size-sm);
  line-height: 1.7;
  margin-bottom: 0;
}

/* ── MULTI-WAVE DIVIDER ── */
.rsb-waves {
  display: block;
  width: 100%;
  line-height: 0;
  overflow: hidden;
}
.rsb-waves svg { display: block; width: 100%; height: 70px; }

/* ── BENTO LOCAL GRID ── */
.rsb-locals {
  background: var(--color-light);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.rsb-locals-float {
  position: absolute;
  top: -80px;
  right: 6%;
  width: 240px;
  height: 240px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 6%, transparent);
  pointer-events: none;
}
.rsb-locals-head {
  text-align: center;
  max-width: 740px;
  margin: 0 auto var(--space-12);
}
.rsb-locals-head h2 {
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.rsb-locals-head p { color: var(--color-gray-dark); }
.rsb-bento {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-auto-rows: auto;
  gap: var(--space-5);
}
.rsb-bento-card {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rsb-bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.rsb-bento-card.wide { grid-column: span 2; }
.rsb-bento-card:nth-child(1) { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-white)); }
.rsb-bento-card:nth-child(2) { background: color-mix(in srgb, var(--color-accent) 9%, var(--color-white)); }
.rsb-bento-card:nth-child(3) { background: color-mix(in srgb, var(--color-secondary) 10%, var(--color-white)); }
.rsb-bento-card:nth-child(4) { background: var(--color-white); border: 1px solid var(--color-gray-light); }
.rsb-bento-icon {
  width: 46px;
  height: 46px;
  border-radius: var(--radius-md);
  background: var(--color-primary);
  color: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
}
.rsb-bento-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.rsb-bento-card p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.75;
  margin-bottom: 0;
}

/* ── Q&A ROWS ── */
.rsb-qa {
  background: var(--color-white);
  padding: var(--space-16) 0;
}
.rsb-qa-head {
  max-width: 720px;
  margin-bottom: var(--space-10);
}
.rsb-qa-head h2 { text-wrap: balance; }
.rsb-qa-row {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-6);
  align-items: start;
  padding: var(--space-8) 0;
  border-top: 1px solid var(--color-gray-light);
  max-width: 900px;
}
.rsb-qa-row:last-of-type { border-bottom: 1px solid var(--color-gray-light); }
.rsb-qa-mark {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  color: color-mix(in srgb, var(--color-accent) 55%, var(--color-primary));
  line-height: 1;
  min-width: 56px;
}
.rsb-qa-row h2 {
  font-size: var(--font-size-xl);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.rsb-qa-row p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  max-width: 68ch;
  margin-bottom: 0;
}

/* ── PHOTO BAND + SERVICES ── */
.rsb-band {
  position: relative;
  background: var(--color-light);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rsb-band-grid {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: var(--space-12);
  align-items: center;
}
.rsb-band-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rsb-band-copy p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  max-width: 62ch;
}
.rsb-band-links {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.rsb-band-links a {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  padding: var(--space-3) var(--space-4);
  font-weight: 600;
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  transition: border-color var(--transition-fast), color var(--transition-fast), transform var(--transition-fast);
}
.rsb-band-links a:hover {
  border-color: var(--color-accent);
  color: var(--color-accent);
  transform: translateY(-2px);
}
.rsb-band-links svg { flex-shrink: 0; color: var(--color-accent); }
.rsb-band-photo {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.rsb-band-photo img {
  width: 100%;
  height: auto;
  display: block;
}
.rsb-band-photo figcaption {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: var(--space-4) var(--space-5);
  background: linear-gradient(0deg, rgba(var(--color-primary-rgb), 0.88) 0%, transparent 100%);
  color: var(--color-white);
  font-size: var(--font-size-sm);
}

/* ── FINAL CTA ── */
.rsb-cta {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rsb-cta::before {
  content: '';
  position: absolute;
  left: -90px;
  bottom: -90px;
  width: 300px;
  height: 300px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 7%, transparent);
  pointer-events: none;
}
.rsb-cta-inner {
  position: relative;
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: var(--space-10);
  align-items: center;
}
.rsb-cta h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rsb-cta p {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  line-height: 1.75;
  max-width: 58ch;
  margin-bottom: 0;
}
.rsb-cta-actions {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  align-items: stretch;
}
.rsb-cta-actions .btn { justify-content: center; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .rsb-hero-grid,
  .rsb-freeway-grid,
  .rsb-band-grid,
  .rsb-cta-inner { grid-template-columns: 1fr; }
  .rsb-bento { grid-template-columns: 1fr 1fr; }
  .rsb-bento-card.wide { grid-column: span 2; }
  .rsb-hero-photo { max-width: 560px; }
}
@media (max-width: 640px) {
  .rsb-bento { grid-template-columns: 1fr; }
  .rsb-bento-card.wide { grid-column: span 1; }
  .rsb-band-links { grid-template-columns: 1fr; }
  .rsb-qa-row { grid-template-columns: 1fr; gap: var(--space-2); }
  .rsb-hero-ctas { flex-direction: column; align-items: stretch; }
  .rsb-freeway::before { font-size: 8rem; }
}
</style>

<!-- SPLIT HERO -->
<section class="rsb-hero" aria-labelledby="rsb-h1">
  <div class="container">
    <div class="rsb-hero-grid">
      <div class="rsb-hero-copy">
        <span class="rsb-kicker">Rosenberg, TX 77471</span>
        <h1 id="rsb-h1">Towing &amp; Roadside Assistance in <em>Rosenberg, TX</em></h1>
        <p class="rsb-hero-script">Next door to our Richmond yard — and we treat it that way.</p>
        <p class="rsb-lead">Twin Cities Towing INC is a licensed, insured towing company based minutes away in Richmond, serving Rosenberg and the rest of Fort Bend County since 2011. From the I-69 Southwest Freeway frontage roads to the brick blocks of downtown Rosenberg's railroad district, we put a truck beside you in 15&ndash;30 minutes — 24 hours a day. If you're searching for towing near me in Rosenberg, the closest full-time operator is already next door.</p>
        <div class="rsb-hero-ctas">
          <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
          <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Estimate</a>
        </div>
        <div class="rsb-hero-meta">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 24/7 Dispatch</span>
          <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1 1 0 0 1 1.52 0C14.5 3.8 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg> Licensed &amp; Insured</span>
          <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg> Based in Richmond</span>
        </div>
      </div>
      <div class="rsb-hero-photo">
        <img src="<?php echo htmlspecialchars($clientPhotos[23]); ?>"
             alt="Twin Cities Towing INC tow truck responding to a call in Rosenberg, TX"
             width="620" height="465" loading="eager" fetchpriority="high">
        <div class="rsb-hero-eta" aria-label="Typical response time">
          <strong>15&ndash;30</strong>
          <em>min to Rosenberg</em>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="rsb-torn" style="background:var(--color-white);" aria-hidden="true">
  <svg viewBox="0 0 1440 52" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L80,14 L170,4 L260,20 L390,8 L520,24 L640,10 L780,26 L900,12 L1040,28 L1170,14 L1300,24 L1440,6 L1440,0 Z" fill="var(--color-primary-dark)"/>
  </svg>
</div>

<!-- INTRO / IDENTITY -->
<section class="rsb-intro" aria-labelledby="rsb-intro-h">
  <div class="rsb-intro-float" aria-hidden="true"></div>
  <div class="container">
    <div class="rsb-intro-inner" data-animate>
      <h2 id="rsb-intro-h">Rosenberg Runs on Trucks, Trains &amp; the Freeway — So Do Our Calls</h2>
      <p>Rosenberg is where Fort Bend County's freight moves. The I-69/US-59 corridor cuts straight through the city, Highway 36 peels off toward Needville at a junction that never sleeps, and the Union Pacific main line — the same railroad that built the town and gave downtown Rosenberg its historic depot district — still rolls through daily. That mix of freeway speed, heavy truck traffic, and rail crossings shapes almost every tow call we get in Rosenberg.</p>
      <p>Blown tires on the frontage roads, fender-benders where the Southwest Freeway traffic squeezes at the Hwy 36 interchange, dead batteries in the Brazos Town Center parking lots, and stalls caught behind a stopped train near the depot — after 13+ years next door, we've hauled Rosenberg drivers out of all of it.</p>
      <div class="answer-block">
        <h2>How quickly can a tow truck get to me in Rosenberg, TX?</h2>
        <p>Twin Cities Towing INC typically reaches Rosenberg in 15&ndash;30 minutes from our Richmond base — the two cities share a border, so a Rosenberg call is one of our shortest runs. Dispatch is live 24/7, and we confirm your exact ETA and price on the phone before the truck rolls.</p>
      </div>
    </div>
  </div>
</section>

<!-- SIGNATURE: FREEWAY BAND -->
<section class="rsb-freeway" aria-labelledby="rsb-fwy-h">
  <div class="container">
    <div class="rsb-freeway-grid">
      <div data-animate="drift-left">
        <span class="rsb-freeway-tag">the high-speed side of town</span>
        <h2 id="rsb-fwy-h">Breakdowns on Rosenberg's I-69 Corridor</h2>
        <p class="rsb-freeway-lead">The Southwest Freeway through Rosenberg carries commuters, 18-wheelers, and everything headed to and from Victoria. When a vehicle dies here, the shoulder is narrow and traffic doesn't slow down. Our drivers stage cones, light the scene, and load fast — we've cleared hundreds of vehicles from this stretch since 2011.</p>
        <a href="/services/emergency-towing/" class="btn btn-accent">Emergency Towing &rarr;</a>
      </div>
      <div class="rsb-lanes">
        <div class="rsb-lane" data-animate="drift-right">
          <span class="rsb-lane-marker">I-69 / US-59</span>
          <div>
            <h3>Frontage roads &amp; main lanes</h3>
            <p>Blowouts and overheats at freeway speed. We coordinate with law enforcement on main-lane recoveries and get you off the shoulder fast.</p>
          </div>
        </div>
        <div class="rsb-lane" data-animate="drift-right">
          <span class="rsb-lane-marker">HWY 36</span>
          <div>
            <h3>The interchange squeeze</h3>
            <p>Where Hwy 36 meets the freeway, merging truck traffic causes rear-end collisions. Accident tows and winch-outs are weekly events here.</p>
          </div>
        </div>
        <div class="rsb-lane" data-animate="drift-right">
          <span class="rsb-lane-marker">UP RAIL</span>
          <div>
            <h3>Crossings near the depot district</h3>
            <p>A stopped train can trap an overheating car at a downtown Rosenberg crossing. We route around the blockage — locals know which streets clear.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="rsb-waves" style="background:var(--color-primary-dark);" aria-hidden="true">
  <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C240,55 480,5 720,30 C960,55 1200,5 1440,30 L1440,70 L0,70 Z" fill="color-mix(in srgb, var(--color-light) 55%, var(--color-white))" opacity="0.55"/>
    <path d="M0,42 C240,64 480,20 720,42 C960,64 1200,20 1440,42 L1440,70 L0,70 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- BENTO LOCAL GRID -->
<section class="rsb-locals" aria-labelledby="rsb-loc-h">
  <div class="rsb-locals-float" aria-hidden="true"></div>
  <div class="container">
    <div class="rsb-locals-head" data-animate>
      <h2 id="rsb-loc-h">Where in Rosenberg Do We Tow?</h2>
      <p>Everywhere — but these are the spots that fill the Rosenberg call log, and knowing them is how our drivers find you on the first pass.</p>
    </div>
    <div class="rsb-bento">
      <div class="rsb-bento-card wide" data-animate="grow">
        <div class="rsb-bento-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="10" rx="2"/><path d="M6 7V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2"/><path d="M2 12h20"/></svg></div>
        <h3>Brazos Town Center &amp; the retail corridor</h3>
        <p>The shopping district along I-69 at FM 762 draws traffic from the whole county — and generates a steady stream of parking-lot lockouts, jump starts, and cars that won't restart after errands. We're usually there before you've finished your coffee, and our <a href="/services/lockout-service/">lockout service</a> opens doors without a scratch.</p>
      </div>
      <div class="rsb-bento-card" data-animate="grow">
        <div class="rsb-bento-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v20"/><path d="M2 12h20"/><circle cx="12" cy="12" r="9"/></svg></div>
        <h3>Historic downtown &amp; the depot blocks</h3>
        <p>Rosenberg grew up around the railroad, and the old downtown grid near the depot district has tight brick streets and angle parking. Flatbed loading here takes finesse — our drivers know which blocks give us working room.</p>
      </div>
      <div class="rsb-bento-card" data-animate="grow">
        <div class="rsb-bento-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg></div>
        <h3>Seabourne Creek &amp; the Hwy 36 south side</h3>
        <p>Trips to Seabourne Creek Nature Park and the rural stretch of Hwy 36 south of town put drivers on roads with no shoulder lighting. Night breakdowns out here get priority scene-lighting and a fast <a href="/services/breakdown-towing/">breakdown tow</a> back to civilization.</p>
      </div>
      <div class="rsb-bento-card wide" data-animate="grow">
        <div class="rsb-bento-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18h-5"/><path d="M15 8h4l3 5v4a1 1 0 0 1-1 1h-1"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg></div>
        <h3>Commercial &amp; heavy-truck work</h3>
        <p>Rosenberg's freight economy means box trucks and work vehicles break down here more than anywhere else we serve. Our <a href="/services/truck-towing/">truck towing</a> handles commercial vehicles, and <a href="/services/tire-change/">tire change service</a> gets fleet drivers rolling without a shop visit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Q&A ROWS -->
<section class="rsb-qa" aria-labelledby="rsb-qa-h">
  <div class="container">
    <div class="rsb-qa-head" data-animate>
      <h2 id="rsb-qa-h">Rosenberg Towing Questions, Answered Directly</h2>
    </div>
    <div class="rsb-qa-row" data-animate="drift-left">
      <span class="rsb-qa-mark" aria-hidden="true">Q.</span>
      <div>
        <h2>How much does towing cost in Rosenberg, TX?</h2>
        <p>Most standard tows in Rosenberg run $75&ndash;$135 depending on distance and vehicle type — barely more than our Richmond home rates, since the cities border each other. Freeway recoveries on I-69 or after-hours winch-outs can cost more. Every price is quoted in full before we dispatch.</p>
      </div>
    </div>
    <div class="rsb-qa-row" data-animate="drift-left">
      <span class="rsb-qa-mark" aria-hidden="true">Q.</span>
      <div>
        <h2>What are the most common tow calls in Rosenberg?</h2>
        <p>Tire blowouts and overheats on the I-69 corridor, collisions at the Hwy 36 interchange, parking-lot lockouts and jump starts at Brazos Town Center, and commercial truck breakdowns around the industrial blocks near the UP rail line. Summer heat and freeway speeds do most of the damage in Rosenberg.</p>
      </div>
    </div>
    <div class="rsb-qa-row" data-animate="drift-left">
      <span class="rsb-qa-mark" aria-hidden="true">Q.</span>
      <div>
        <h2>Can you tow my car from Rosenberg to a shop in another city?</h2>
        <p>Yes. We regularly haul vehicles from Rosenberg to mechanics and dealerships in Richmond, Sugar Land, Katy, and greater Houston. You pick the destination — we quote the full transport price upfront, load carefully, and deliver to any shop or address you name. No preferred-shop pressure, ever.</p>
      </div>
    </div>
  </div>
</section>

<!-- PHOTO BAND + SERVICE LINKS -->
<section class="rsb-band" aria-labelledby="rsb-band-h">
  <div class="container">
    <div class="rsb-band-grid">
      <div class="rsb-band-copy" data-animate="drift-left">
        <h2 id="rsb-band-h">One Call Covers Every Rosenberg Situation</h2>
        <p>Whatever put you on the shoulder — mechanical failure, collision, flat, dead key fob — we carry the equipment for it on every shift. These are the services Rosenberg drivers use most, and each one is available 24/7 with upfront pricing. Need something else, or stranded across the county line? Start at our <a href="/contact/">contact page</a> or check our <a href="/areas/richmond-tx/">Richmond</a> and <a href="/areas/sugar-land-tx/">Sugar Land</a> coverage.</p>
        <div class="rsb-band-links">
          <a href="/services/truck-towing/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18h-5"/><path d="M15 8h4l3 5v4a1 1 0 0 1-1 1h-1"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg> Truck Towing</a>
          <a href="/services/emergency-towing/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg> Emergency Towing</a>
          <a href="/services/tire-change/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/></svg> Tire Change</a>
          <a href="/services/lockout-service/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7.5" cy="15.5" r="5.5"/><path d="m21 2-9.6 9.6"/><path d="m15.5 7.5 3 3L22 7l-3-3"/></svg> Lockout Service</a>
        </div>
      </div>
      <figure class="rsb-band-photo" data-animate="grow">
        <img src="<?php echo htmlspecialchars($clientPhotos[19]); ?>"
             alt="Vehicle secured on a Twin Cities Towing flatbed near the I-69 corridor in Rosenberg, TX"
             width="620" height="465" loading="lazy">
        <figcaption>Loading on the frontage road — the everyday Rosenberg call.</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="rsb-cta" aria-labelledby="rsb-cta-h">
  <div class="container">
    <div class="rsb-cta-inner">
      <div data-animate="drift-left">
        <h2 id="rsb-cta-h">Stranded in Rosenberg? The Next Truck Over Is Ours.</h2>
        <p>From the depot district to the I-69 frontage roads, Twin Cities Towing INC has kept Rosenberg moving since 2011. Call for a live ETA and a full price before we roll — 24 hours a day, every day.</p>
        <p style="margin-top:var(--space-6);font-size:var(--font-size-xs);"><em>Last Updated: <?php echo date('F Y'); ?></em></p>
      </div>
      <div class="rsb-cta-actions" data-animate="drift-right">
        <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
        <a href="/contact/" class="btn btn-outline-white btn-lg">Request a Tow Online</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
