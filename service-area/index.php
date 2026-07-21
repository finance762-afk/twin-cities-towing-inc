<?php
/**
 * Twin Cities Towing INC — Service Area Hub
 * Every city in $serviceAreas links to its /areas/{slug}/ page.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Service Areas | Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Twin Cities Towing INC serves Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy & all of Fort Bend County within 20 miles. 24/7 towing near me.';
$ogImage         = $clientPhotos[0];
$currentPage     = 'service-area';

// Per-city teaser data, keyed by slug — rendered inside the $serviceAreas loop.
$areaTeasers = [
    'richmond-tx'      => ['eta' => '15–25 min', 'text' => 'Our home base. The yard sits on Rocky Falls RD, so Richmond calls — from the courthouse square to the US-90A Brazos bridge and the FM 762 corridor — are our shortest runs of the day.'],
    'rosenberg-tx'     => ['eta' => '15–30 min', 'text' => 'Right next door. We work the I-69 Southwest Freeway shoulders, the Hwy 36 interchange, downtown\'s railroad depot blocks, and the Brazos Town Center parking lots daily.'],
    'sugar-land-tx'    => ['eta' => '25–40 min', 'text' => 'First Colony, Telfair, Riverstone, and the Town Square garages — plus the I-69/Hwy 6 interchange and Smart Financial Centre event-night surge. HOA-conscious, gate-friendly service.'],
    'missouri-city-tx' => ['eta' => '25–40 min', 'text' => 'Highway 6 and FM 1092 corridors, Sienna, and the residential streets in between. Accident tows on Hwy 6 are the staple Missouri City call.'],
    'stafford-tx'      => ['eta' => '30–40 min', 'text' => 'Stafford\'s commercial strip along US-90A and Murphy Road keeps us busy with work-vehicle breakdowns, fleet tire changes, and parking-lot jump starts.'],
    'katy-tx'          => ['eta' => '35–50 min', 'text' => 'The northwest edge of our radius. We cover I-10 and Hwy 90 through Katy plus Cinco Ranch, with frequent motorcycle and flatbed transport calls.'],
    'greatwood-tx'     => ['eta' => '20–35 min', 'text' => 'Just southwest of Sugar Land off Hwy 90 — and close enough to our base that Greatwood\'s residential streets and the FM 762 connector get near-Richmond response times.'],
    'pecan-grove-tx'   => ['eta' => 'under 20 min', 'text' => 'Minutes up FM 359 from our yard. Pecan Grove emergency calls are often our fastest responses anywhere — frequently on scene in under 20 minutes.'],
    'needville-tx'     => ['eta' => '30–45 min', 'text' => 'The southern edge of the radius, down Hwy 36. Rural shoulders and long dark stretches mean Needville breakdowns get scene lighting and a fuel can on every truck.'],
    'fresno-tx'        => ['eta' => '25–40 min', 'text' => 'Along the FM 521 corridor between Missouri City and the Brazos bottomlands. Fresno towing and roadside calls route straight from the Richmond yard.'],
];

// A city gets the "Full guide" CTA label once its /areas/{slug}/ page exists on disk.
$builtAreaPages = array_values(array_filter(
    array_column($serviceAreas, 'slug'),
    fn($slug) => is_file($_SERVER['DOCUMENT_ROOT'] . '/areas/' . $slug . '/index.php')
));

$areaFaqs = [
    ['q' => 'What cities does Twin Cities Towing INC serve?', 'a' => 'We serve Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno, TX — all communities within approximately 20 miles of our Richmond base in Fort Bend County.'],
    ['q' => 'Do you offer towing near me in Fort Bend County?', 'a' => 'If you\'re within 20 miles of Richmond, TX, we\'re your local towing option — 24 hours a day. Call us with your location and we\'ll confirm coverage and give you an ETA immediately.'],
    ['q' => 'Can you tow from highway breakdowns on I-69 and Hwy 90?', 'a' => 'Yes. I-69 (US-59) and Highway 90 are among our highest-volume service corridors. We coordinate with TxDOT and law enforcement for highway scene clearance and respond to both directions of these routes throughout Fort Bend County.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',         'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Area'],
        ]],
        generateFAQSchema($areaFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ══════════════════════════════════════════════════════════════════
   SERVICE AREA HUB — Twin Cities Towing INC
   Page-specific premium styles — var() tokens only.
   Techniques: layered hero (::before gradient + ::after noise),
   wave + angle SVG dividers, asymmetric intro/map composition,
   tinted city cards (color-mix rotation), floating accents at 4-6%
   opacity, Caveat accent subtitle, mixed-direction reveals,
   text-wrap balance on headings.
   ══════════════════════════════════════════════════════════════════ */

/* ── Mixed-direction reveal variants (below-fold only) ── */
[data-animate="hub-left"]  { transform: translateX(-32px); }
[data-animate="hub-right"] { transform: translateX(32px); }
[data-animate="hub-rise"]  { transform: translateY(44px); }
[data-animate="hub-zoom"]  { transform: scale(0.94); }

/* ── Breadcrumb ── */
.hub-crumbs {
  background: var(--color-light);
  border-bottom: 1px solid var(--color-gray-light);
  padding: var(--space-3) 0;
  font-size: var(--font-size-sm);
}
.hub-crumbs ol {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
  align-items: center;
}
.hub-crumbs a {
  color: var(--color-gray);
  transition: color var(--transition-fast);
}
.hub-crumbs a:hover { color: var(--color-accent); }
.hub-crumbs li[aria-current] { color: var(--color-primary); font-weight: 600; }
.hub-crumbs .sep { color: var(--color-gray-light); }

/* ── LAYERED HERO ── */
.hub-hero {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  overflow: hidden;
  padding: var(--space-16) 0;
  text-align: center;
}
.hub-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(150deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.84) 55%,
    rgba(var(--color-secondary-rgb), 0.62) 100%);
  z-index: 1;
}
.hub-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  background-size: 185px;
  z-index: 2;
  pointer-events: none;
}
.hub-hero .container {
  position: relative;
  z-index: 3;
  max-width: 860px;
}
.hub-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-accent) 15%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-full);
  margin-bottom: var(--space-5);
}
.hub-hero h1 {
  color: var(--color-white);
  font-size: clamp(2rem, 4.4vw, 3.3rem);
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.hub-hero h1 span { color: var(--color-accent); }
.hub-hero-script {
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.3vw, 1.65rem);
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  display: block;
  margin-bottom: var(--space-5);
}
.hub-hero-lead {
  color: color-mix(in srgb, var(--color-white) 84%, transparent);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.hub-hero-actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── WAVE / ANGLE DIVIDERS ── */
.hub-wave {
  display: block;
  width: 100%;
  line-height: 0;
  overflow: hidden;
}
.hub-wave svg { display: block; width: 100%; height: 64px; }

/* ── INTRO + MAP (asymmetric) ── */
.hub-intro {
  position: relative;
  background: var(--color-white);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.hub-intro-float {
  position: absolute;
  top: -100px;
  right: -90px;
  width: 320px;
  height: 320px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 5%, transparent);
  pointer-events: none;
}
.hub-intro-grid {
  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  gap: var(--space-12);
  align-items: center;
}
.hub-intro-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.hub-intro-copy p {
  color: var(--color-gray-dark);
  line-height: 1.85;
  max-width: 60ch;
}
.hub-intro-facts {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-top: var(--space-6);
}
.hub-fact {
  flex: 1 1 140px;
  background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white));
  border-radius: var(--radius-lg);
  padding: var(--space-4) var(--space-5);
  border-left: 3px solid var(--color-accent);
}
.hub-fact strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  line-height: 1.15;
}
.hub-fact em {
  font-style: normal;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  text-transform: uppercase;
  letter-spacing: 1px;
}
.hub-map {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.hub-map::after {
  content: '';
  position: absolute;
  inset: 0;
  border: 1px solid color-mix(in srgb, var(--color-primary) 15%, transparent);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.hub-map iframe {
  display: block;
  width: 100%;
  height: 420px;
  border: 0;
}

/* ── CITY GRID ── */
.hub-cities {
  position: relative;
  background: var(--color-light);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.hub-cities-float {
  position: absolute;
  bottom: -110px;
  left: -100px;
  width: 340px;
  height: 340px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 5%, transparent);
  pointer-events: none;
}
.hub-cities-head {
  text-align: center;
  max-width: 760px;
  margin: 0 auto var(--space-12);
}
.hub-cities-head h2 {
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.hub-cities-head p { color: var(--color-gray-dark); margin-bottom: 0; }
.hub-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
}
.hub-card {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  border-radius: var(--radius-xl);
  padding: var(--space-6);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.hub-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.hub-card:nth-child(3n+1) { background: color-mix(in srgb, var(--color-primary) 7%, var(--color-white)); }
.hub-card:nth-child(3n+2) { background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white)); }
.hub-card:nth-child(3n+3) { background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white)); }
.hub-card--primary {
  background: var(--color-primary) !important;
}
.hub-card--primary h3 a { color: var(--color-white); }
.hub-card--primary h3 a:hover { color: var(--color-accent); }
.hub-card--primary p { color: color-mix(in srgb, var(--color-white) 75%, transparent); }
.hub-card-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-3);
}
.hub-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: 0;
  text-wrap: balance;
}
.hub-card h3 a {
  color: var(--color-primary);
  transition: color var(--transition-fast);
}
.hub-card h3 a:hover { color: var(--color-accent); }
.hub-card h3 a::after {
  content: '';
  position: absolute;
  inset: 0;
}
.hub-eta {
  flex-shrink: 0;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  color: var(--color-white);
  background: color-mix(in srgb, var(--color-accent) 88%, var(--color-black));
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  white-space: nowrap;
}
.hub-card p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.7;
  margin-bottom: 0;
  flex: 1;
}
.hub-card-cta {
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-accent);
}
.hub-badge {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-accent);
}

/* ── ANSWER BLOCK SPACING ── */
.hub-cities .answer-block { margin-top: var(--space-12); }

/* ── MID CTA ── */
.hub-cta {
  position: relative;
  background: linear-gradient(130deg, var(--color-primary-dark) 0%, var(--color-primary) 65%, var(--color-secondary) 100%);
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.hub-cta::after {
  content: '';
  position: absolute;
  top: -80px;
  right: 10%;
  width: 240px;
  height: 240px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 6%, transparent);
  pointer-events: none;
}
.hub-cta h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.hub-cta p {
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  max-width: 58ch;
  margin: 0 auto var(--space-8);
  line-height: 1.75;
}
.hub-cta-actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
  position: relative;
  z-index: 1;
}

/* ── FAQ ── */
.hub-faq {
  background: var(--color-white);
  padding: var(--space-16) 0;
}
.hub-faq-head {
  text-align: center;
  max-width: 700px;
  margin: 0 auto var(--space-10);
}
.hub-faq-head h2 { text-wrap: balance; }
.hub-faq-list {
  max-width: 860px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.hub-faq-item {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-5);
  align-items: start;
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-left: 4px solid var(--color-accent);
}
.hub-faq-icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-md);
  background: var(--color-primary);
  color: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.hub-faq-item h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.hub-faq-item p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.75;
  margin-bottom: 0;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .hub-intro-grid { grid-template-columns: 1fr; }
  .hub-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 640px) {
  .hub-grid { grid-template-columns: 1fr; }
  .hub-hero-actions, .hub-cta-actions { flex-direction: column; align-items: stretch; }
  .hub-map iframe { height: 320px; }
  .hub-faq-item { grid-template-columns: 1fr; }
}
</style>

<nav class="hub-crumbs" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="sep" aria-hidden="true">›</li>
      <li aria-current="page">Service Areas</li>
    </ol>
  </div>
</nav>

<!-- LAYERED HERO -->
<section class="hub-hero" style="background-image:url('<?php echo htmlspecialchars($clientPhotos[11]); ?>');" aria-labelledby="hub-h1">
  <div class="container">
    <span class="hub-hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
      Towing Near Me &bull; Fort Bend County &bull; 20-Mile Radius
    </span>
    <h1 id="hub-h1">Towing Service in Richmond TX <span>&amp; Surrounding Communities</span></h1>
    <span class="hub-hero-script">One yard, ten cities, zero call centers.</span>
    <p class="hub-hero-lead">Twin Cities Towing INC covers all of Fort Bend County — Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, and beyond — with 24/7 emergency towing and roadside assistance dispatched from 1920 Rocky Falls RD in Richmond.</p>
    <div class="hub-hero-actions">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
        Call (281) 935-1113
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
        Get a Free Estimate
      </a>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track" data-p1-dynamic>
    <span>&#128205;&nbsp; Richmond, Rosenberg &amp; More</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20-Mile Service Radius</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128663;&nbsp; Serving Fort Bend Since 2011</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Richmond, Rosenberg &amp; More</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20-Mile Service Radius</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128663;&nbsp; Serving Fort Bend Since 2011</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- INTRO + MAP -->
<section class="hub-intro" aria-labelledby="hub-intro-h">
  <div class="hub-intro-float" aria-hidden="true"></div>
  <div class="container">
    <div class="hub-intro-grid">
      <div class="hub-intro-copy" data-animate="hub-left">
        <h2 id="hub-intro-h">Fort Bend County Towing — From Richmond to Katy and Every City Between</h2>
        <p>Based in Richmond at 1920 Rocky Falls RD, Twin Cities Towing INC covers approximately a 20-mile service radius from our Richmond base. That blankets all of Fort Bend County's primary communities — and we regularly service I-69, Highway 90, Highway 36, FM 359, and FM 762 throughout the county, 24 hours a day.</p>
        <div class="hub-intro-facts">
          <div class="hub-fact" data-animate="hub-rise"><strong>10</strong><em>cities covered</em></div>
          <div class="hub-fact" data-animate="hub-rise"><strong>20 mi</strong><em>service radius</em></div>
          <div class="hub-fact" data-animate="hub-rise"><strong>24/7</strong><em>local dispatch</em></div>
        </div>
      </div>
      <div class="hub-map" data-animate="hub-zoom">
        <iframe
          title="Twin Cities Towing INC service area — Fort Bend County TX"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110764.36!2d-95.74!3d29.59!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640f3a3a5b3d6a7%3A0x1234567890abcdef!2sFort%20Bend%20County%2C%20TX!5e0!3m2!1sen!2sus!4v1680000000001"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<div class="hub-wave" style="background:var(--color-white);" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,28 C360,64 1080,0 1440,36 L1440,64 L0,64 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- CITY GRID (loops $serviceAreas) -->
<section class="hub-cities" aria-labelledby="hub-cities-h">
  <div class="hub-cities-float" aria-hidden="true"></div>
  <div class="container">
    <div class="hub-cities-head" data-animate>
      <h2 id="hub-cities-h">Which Fort Bend County Cities Do We Tow In?</h2>
      <p>Pick your city for local response times, the roads we work most, and what a tow costs from there. Every community below sits inside our 24/7 dispatch radius.</p>
    </div>

    <div class="hub-grid" data-p1-dynamic>
      <?php foreach ($serviceAreas as $area):
        $teaser  = $areaTeasers[$area['slug']] ?? ['eta' => '20–45 min', 'text' => 'Full towing and roadside coverage from our Richmond base.'];
        $isPrime = !empty($area['primary']);
        $hasPage = in_array($area['slug'], $builtAreaPages, true);
      ?>
      <article class="hub-card<?php echo $isPrime ? ' hub-card--primary' : ''; ?>" data-animate="hub-rise">
        <div class="hub-card-top">
          <h3><a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>/"><?php echo htmlspecialchars($area['city'] . ', ' . $area['state']); ?></a></h3>
          <span class="hub-eta"><?php echo htmlspecialchars($teaser['eta']); ?></span>
        </div>
        <?php if ($isPrime): ?><span class="hub-badge">Home Base &bull; 77469</span><?php endif; ?>
        <p><?php echo $teaser['text']; ?></p>
        <span class="hub-card-cta"><?php echo $hasPage ? 'Full ' . htmlspecialchars($area['city']) . ' guide' : 'Coverage details'; ?> &rarr;</span>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="answer-block" data-animate>
      <h2>Is there 24-hour towing near me in Fort Bend County?</h2>
      <p>Twin Cities Towing INC operates 24 hours a day throughout Fort Bend County. Our service area covers Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno, TX — all within approximately 20 miles of our Richmond base. Call for immediate dispatch any time of day or night.</p>
    </div>
  </div>
</section>

<div class="hub-wave" style="background:var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,64 0,30 1440,4 1440,64" fill="var(--color-primary-dark)"/>
  </svg>
</div>

<!-- MID CTA -->
<section class="hub-cta" aria-labelledby="hub-cta-h" style="background:var(--color-primary-dark);">
  <div class="container">
    <h2 id="hub-cta-h">Stranded Anywhere in Our Service Area? We're Already Close.</h2>
    <p>Twin Cities Towing INC dispatches from Richmond and reaches most Fort Bend County locations in 20&ndash;40 minutes. Call now for immediate response — 24/7, all cities, all services.</p>
    <div class="hub-cta-actions">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
        Call (281) 935-1113
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 5h.01"/><path d="M3 12h.01"/><path d="M3 19h.01"/><path d="M8 5h13"/><path d="M8 12h13"/><path d="M8 19h13"/></svg>
        View All Services
      </a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="hub-faq" id="faq" aria-labelledby="hub-faq-h">
  <div class="container">
    <div class="hub-faq-head" data-animate>
      <h2 id="hub-faq-h">Service Area FAQs &mdash; Fort Bend County Towing</h2>
    </div>
    <div class="hub-faq-list" data-p1-dynamic>
      <?php foreach ($areaFaqs as $faq): ?>
      <div class="hub-faq-item" data-animate="hub-rise">
        <div class="hub-faq-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
        </div>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
