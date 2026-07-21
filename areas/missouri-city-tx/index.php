<?php
/**
 * Twin Cities Towing INC — Missouri City, TX Service Area
 * Premium area page — corridor-rail signature layout
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Service Missouri City TX | 24/7 Tow Truck | Twin Cities Towing INC';
$pageDescription = '24/7 towing in Missouri City, TX — SH-6, Fort Bend Parkway, Sienna, Quail Valley & Riverstone. Richmond-based dispatch, 25–45 minute response, upfront pricing.';
$ogImage         = $clientPhotos[5];
$currentPage     = 'service-area';

$areaFaqs = [
    ['q' => 'How fast can a tow truck reach Missouri City from Richmond?', 'a' => 'Our trucks dispatch from Richmond 77469, about 15 miles from central Missouri City via US-59 and SH-6. Most calls see a driver in 25–45 minutes. Sienna and Quail Valley pickups usually land near the low end; the Beltway 8 edge during rush hour runs closer to 45.'],
    ['q' => 'How much does towing cost in Missouri City, TX?', 'a' => 'Most light-duty tows that start in Missouri City run $85–$150 depending on distance and vehicle type. A hook from Quail Valley to a shop on SH-6 sits at the low end; a haul up the Fort Bend Parkway toward the Texas Medical Center costs more. You get the full quote before we dispatch.'],
    ['q' => 'Can you tow from the Fort Bend Parkway Toll Road?', 'a' => 'Yes. We recover vehicles from the Fort Bend Parkway Toll Road main lanes and ramps, including the merge at SH-6. Shoulders there are narrow, so stay belted in your vehicle or stand well behind the barrier until our driver positions the truck between you and traffic.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Missouri City, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/missouri-city-tx/#service',
         'name'        => 'Towing Service in Missouri City, TX',
         'url'         => $domain . '/areas/missouri-city-tx/',
         'description' => '24/7 towing and roadside assistance in Missouri City, TX including SH-6, the Fort Bend Parkway Toll Road, Sienna, Quail Valley, Riverstone, and Lake Olympia. Dispatched from Richmond, TX.',
         'serviceType' => 'Towing Service',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Missouri City, TX']],
        generateFAQSchema($areaFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════
   MISSOURI CITY SERVICE AREA — page-specific styles (mc- prefix)
   Techniques: layered gradient+noise hero, slice + curve SVG
   dividers, asymmetric intro grid, corridor rail signature section,
   tinted neighborhood cards, floating accents, mixed reveals,
   text-wrap balance. var() tokens only.
   ════════════════════════════════════════════════════════════════ */

/* ── Mixed-direction reveal variants (page-scoped) ── */
[data-animate="mc-left"] {
  transform: translateX(-36px);
}
[data-animate="mc-right"] {
  transform: translateX(36px);
}
[data-animate="mc-zoom"] {
  transform: scale(0.94);
}
[data-animate].animated {
  transform: none;
}

/* ── HERO — layered gradient + noise, left-anchored ── */
.mc-hero {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('<?php echo htmlspecialchars($clientPhotos[5]); ?>');
  background-size: cover;
  background-position: center 40%;
}
.mc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(105deg,
    color-mix(in srgb, var(--color-primary-dark) 96%, transparent) 0%,
    color-mix(in srgb, var(--color-primary) 82%, transparent) 48%,
    color-mix(in srgb, var(--color-primary) 38%, transparent) 100%);
  z-index: 1;
}
.mc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px;
  z-index: 2;
  pointer-events: none;
}
.mc-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-16) 0 var(--space-12);
}
.mc-hero-crumb {
  font-size: var(--font-size-xs);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: color-mix(in srgb, var(--color-white) 55%, transparent);
  margin-bottom: var(--space-5);
}
.mc-hero-crumb a {
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
}
.mc-hero-crumb a:hover {
  color: var(--color-accent);
}
.mc-hero-crumb .sep {
  margin: 0 var(--space-2);
  color: color-mix(in srgb, var(--color-accent) 70%, transparent);
}
.mc-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-accent) 14%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  color: var(--color-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-full);
  margin-bottom: var(--space-5);
}
.mc-hero h1 {
  color: var(--color-white);
  font-size: clamp(2rem, 4.6vw, 3.4rem);
  line-height: 1.08;
  max-width: 15ch;
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.mc-hero h1 .mc-h1-accent {
  color: var(--color-accent);
}
.mc-hero-lede {
  color: color-mix(in srgb, var(--color-white) 86%, transparent);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 58ch;
  margin-bottom: var(--space-8);
}
.mc-hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.mc-hero-trust {
  display: flex;
  gap: var(--space-6);
  flex-wrap: wrap;
}
.mc-hero-trust span {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  font-size: var(--font-size-sm);
}
.mc-hero-trust svg {
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── DIVIDER STYLE 1 — angled slice ── */
.mc-divider-slice {
  display: block;
  width: 100%;
  line-height: 0;
  margin-top: -1px;
}
.mc-divider-slice svg {
  display: block;
  width: 100%;
  height: clamp(40px, 6vw, 84px);
}
.mc-divider-slice .fill {
  fill: var(--color-white);
}

/* ── INTRO — asymmetric 1.15fr / 0.85fr grid ── */
.mc-intro {
  position: relative;
  background: var(--color-white);
  padding: var(--space-16) 0 var(--space-12);
  overflow: hidden;
}
.mc-intro-float {
  position: absolute;
  top: -90px;
  right: -110px;
  width: 340px;
  height: 340px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 6%, transparent);
  pointer-events: none;
  animation: mc-drift 14s ease-in-out infinite alternate;
}
@keyframes mc-drift {
  from { transform: translate(0, 0); }
  to   { transform: translate(-26px, 20px); }
}
.mc-intro-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: var(--space-12);
  align-items: start;
}
.mc-intro-copy .mc-kicker {
  display: block;
  font-family: var(--font-accent);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.mc-intro-copy h2 {
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.mc-intro-copy p {
  color: var(--color-gray-dark);
  line-height: 1.75;
  max-width: 62ch;
}
.mc-intro-copy a {
  color: var(--color-accent);
  font-weight: 600;
  border-bottom: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  transition: border-color var(--transition-fast), color var(--transition-fast);
}
.mc-intro-copy a:hover {
  color: var(--color-primary);
  border-color: var(--color-primary);
}
.mc-intro-media {
  position: relative;
}
.mc-intro-media img {
  width: 100%;
  height: auto;
  border-radius: var(--radius-lg);
  clip-path: polygon(0 0, 100% 0, 100% calc(100% - 42px), calc(100% - 42px) 100%, 0 100%);
  box-shadow: var(--shadow-lg);
}
.mc-intro-media::before {
  content: '';
  position: absolute;
  top: var(--space-4);
  left: calc(-1 * var(--space-4));
  right: var(--space-4);
  bottom: calc(-1 * var(--space-4));
  border: 2px solid color-mix(in srgb, var(--color-accent) 35%, transparent);
  border-radius: var(--radius-lg);
  z-index: -1;
}
.mc-intro-badge {
  position: absolute;
  bottom: var(--space-5);
  left: calc(-1 * var(--space-6));
  background: var(--color-primary-dark);
  color: var(--color-white);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-3) var(--space-5);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-xl);
  font-size: var(--font-size-sm);
}
.mc-intro-badge strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-accent);
}

/* ── DIVIDER STYLE 2 — soft double curve ── */
.mc-divider-curve {
  display: block;
  width: 100%;
  line-height: 0;
  background: var(--color-white);
}
.mc-divider-curve svg {
  display: block;
  width: 100%;
  height: clamp(48px, 7vw, 96px);
}
.mc-divider-curve .fill {
  fill: var(--color-primary-dark);
}
.mc-divider-curve .fill-soft {
  fill: color-mix(in srgb, var(--color-primary-dark) 35%, var(--color-white));
}

/* ── SIGNATURE — corridor rail (dark) ── */
.mc-corridors {
  background: var(--color-primary-dark);
  padding: var(--space-12) 0 var(--space-16);
  position: relative;
  overflow: hidden;
}
.mc-corridors::after {
  content: 'SH-6';
  position: absolute;
  right: -1%;
  bottom: -4%;
  font-family: var(--font-heading);
  font-size: clamp(6rem, 16vw, 13rem);
  color: color-mix(in srgb, var(--color-white) 4%, transparent);
  pointer-events: none;
  line-height: 1;
}
.mc-corridors-head {
  max-width: 68ch;
  margin-bottom: var(--space-10);
}
.mc-corridors-head .eyebrow {
  color: var(--color-accent);
}
.mc-corridors-head h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.mc-corridors-head p {
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  line-height: 1.75;
}
.mc-rail {
  position: relative;
  margin-left: var(--space-2);
  padding-left: var(--space-8);
}
.mc-rail::before {
  content: '';
  position: absolute;
  left: 7px;
  top: 8px;
  bottom: 8px;
  width: 2px;
  background: repeating-linear-gradient(
    to bottom,
    var(--color-accent) 0,
    var(--color-accent) 10px,
    transparent 10px,
    transparent 20px);
  opacity: 0.65;
}
.mc-rail-stop {
  position: relative;
  padding: var(--space-5) var(--space-6);
  margin-bottom: var(--space-5);
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.mc-rail-stop:hover {
  transform: translateX(6px);
  border-color: color-mix(in srgb, var(--color-accent) 55%, transparent);
}
.mc-rail-stop::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-8) - 1px);
  top: var(--space-6);
  width: 16px;
  height: 16px;
  border-radius: var(--radius-full);
  background: var(--color-primary-dark);
  border: 3px solid var(--color-accent);
}
.mc-rail-stop h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.mc-rail-stop p {
  color: color-mix(in srgb, var(--color-white) 68%, transparent);
  font-size: var(--font-size-sm);
  line-height: 1.7;
  margin-bottom: 0;
  max-width: 70ch;
}
.mc-rail-stop .mc-eta {
  display: inline-block;
  margin-top: var(--space-3);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-accent);
}

/* ── NEIGHBORHOOD TINTED CARDS ── */
.mc-hoods {
  background: var(--color-light);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.mc-hoods-float {
  position: absolute;
  bottom: -70px;
  left: -70px;
  width: 260px;
  height: 260px;
  border-radius: var(--radius-full);
  border: 30px solid color-mix(in srgb, var(--color-primary) 5%, transparent);
  pointer-events: none;
}
.mc-hoods-head {
  text-align: center;
  max-width: 70ch;
  margin: 0 auto var(--space-10);
}
.mc-hoods-head h2 {
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.mc-hoods-head p {
  color: var(--color-gray);
}
.mc-hood-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.mc-hood-card {
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-5);
  border-top: 3px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.mc-hood-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-md);
}
.mc-hood-card.tint-a {
  background: color-mix(in srgb, var(--color-primary) 7%, var(--color-white));
}
.mc-hood-card.tint-b {
  background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white));
}
.mc-hood-card.tint-c {
  background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white));
}
.mc-hood-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.mc-hood-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  line-height: 1.65;
  margin-bottom: 0;
}

/* ── QUESTION SECTIONS ── */
.mc-questions {
  background: var(--color-white);
  padding: var(--space-16) 0;
}
.mc-q {
  max-width: 820px;
  margin: 0 auto var(--space-10);
  padding-left: var(--space-6);
  border-left: 3px solid color-mix(in srgb, var(--color-accent) 55%, transparent);
}
.mc-q:last-child {
  margin-bottom: 0;
}
.mc-q h2 {
  font-size: clamp(1.25rem, 2.4vw, 1.7rem);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.mc-q p {
  color: var(--color-gray-dark);
  line-height: 1.75;
}
.mc-q a {
  color: var(--color-accent);
  font-weight: 600;
}
.mc-q a:hover {
  text-decoration: underline;
}

/* ── CTA + SIBLINGS ── */
.mc-cta {
  background: linear-gradient(120deg, var(--color-primary-dark), var(--color-primary));
  padding: var(--space-16) 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.mc-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: radial-gradient(color-mix(in srgb, var(--color-accent) 12%, transparent) 1px, transparent 1px);
  background-size: 26px 26px;
  opacity: 0.5;
  pointer-events: none;
}
.mc-cta .container {
  position: relative;
  z-index: 1;
}
.mc-cta h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.mc-cta p {
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-8);
}
.mc-cta-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.mc-siblings {
  display: flex;
  gap: var(--space-3);
  justify-content: center;
  flex-wrap: wrap;
}
.mc-siblings a {
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 25%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  font-size: var(--font-size-sm);
  transition: all var(--transition-fast);
}
.mc-siblings a:hover {
  color: var(--color-primary-dark);
  background: var(--color-accent);
  border-color: var(--color-accent);
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .mc-hood-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 900px) {
  .mc-intro-grid {
    grid-template-columns: 1fr;
    gap: var(--space-10);
  }
  .mc-intro-badge {
    left: var(--space-4);
  }
}
@media (max-width: 600px) {
  .mc-hero {
    min-height: 70vh;
  }
  .mc-hood-grid {
    grid-template-columns: 1fr;
  }
  .mc-rail {
    padding-left: var(--space-6);
  }
  .mc-rail-stop::before {
    left: calc(-1 * var(--space-6) - 1px);
  }
  .mc-q {
    padding-left: var(--space-4);
  }
}
</style>

<section class="mc-hero" aria-labelledby="mc-hero-heading">
  <div class="mc-hero-inner">
    <div class="container">
      <nav class="mc-hero-crumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">/</span><a href="/service-area/">Service Areas</a><span class="sep">/</span>Missouri City, TX
      </nav>
      <span class="mc-hero-eyebrow">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        Serving Missouri City &amp; Fort Bend County
      </span>
      <h1 id="mc-hero-heading">Towing Service in <span class="mc-h1-accent">Missouri City</span>, TX</h1>
      <p class="mc-hero-lede">Broke down on SH-6? Stalled on the Fort Bend Parkway ramp? Twin Cities Towing INC dispatches from Richmond around the clock, reaching most Missouri City locations in 25&ndash;45 minutes with the price quoted before the truck rolls.</p>
      <div class="mc-hero-actions">
        <a href="tel:+12819351113" class="btn btn-accent btn-lg">Call (281) 935-1113 &mdash; 24/7</a>
        <a href="/contact/" class="btn btn-outline-white btn-lg">Request a Tow Online</a>
      </div>
      <div class="mc-hero-trust">
        <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg> Licensed &amp; Insured</span>
        <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 24/7 Dispatch Since 2011</span>
        <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 18H3c-.6 0-1-.4-1-1V7c0-.6.4-1 1-1h10c.6 0 1 .4 1 1v11"/><path d="M14 9h4l4 4v4c0 .6-.4 1-1 1h-2"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg> Flatbed &amp; Wheel-Lift Trucks</span>
      </div>
    </div>
  </div>
</section>

<div class="mc-divider-slice" aria-hidden="true">
  <svg viewBox="0 0 1440 90" preserveAspectRatio="none"><polygon class="fill" points="0,90 1440,90 1440,18 0,78"/></svg>
</div>

<section class="mc-intro" aria-labelledby="mc-intro-heading">
  <div class="mc-intro-float" aria-hidden="true"></div>
  <div class="container">
    <div class="mc-intro-grid">
      <div class="mc-intro-copy" data-animate="mc-left">
        <span class="mc-kicker">Your neighbors, one exit down US-59</span>
        <h2 id="mc-intro-heading">Richmond-Based Trucks That Know Missouri City's Roads</h2>
        <p>Twin Cities Towing INC is a licensed and insured towing company based at 1920 Rocky Falls RD in Richmond, TX, and Missouri City has been part of our core coverage since we opened in 2011. When you search for <strong>towing near me in Missouri City</strong>, you're getting a dispatcher who knows the difference between a shoulder call on SH-6 and a driveway winch-out off Oyster Creek &mdash; and sends the right truck the first time.</p>
        <p>Missouri City drives differently than the flat Houston grid around it. The terrain along Oyster Creek rolls more than almost anywhere else in the metro, and the neighborhoods built into it &mdash; Quail Valley wrapped around its golf course, Lake Olympia across the water &mdash; have winding streets, low-hanging oaks, and tight cul-de-sacs. Our drivers position flatbeds for those pickups instead of forcing a long wheel-lift drag. For breakdowns, our <a href="/services/car-towing/">car towing</a> and <a href="/services/flatbed-towing/">flatbed towing</a> crews cover every corner of the city, and <a href="/services/roadside-assistance/">roadside assistance</a> handles the jump starts, fuel runs, and flats that don't need a hook at all.</p>
        <p>Thousands of Missouri City residents commute daily to the Texas Medical Center up the Fort Bend Parkway Toll Road. If your morning ends on that shoulder, call us &mdash; we tow from the parkway's main lanes and ramps, and we'll deliver your vehicle to any shop, dealership, or driveway you choose. <em>Last Updated: <?php echo date('F Y'); ?></em></p>
      </div>
      <div class="mc-intro-media" data-animate="mc-right">
        <img src="<?php echo htmlspecialchars($clientPhotos[5]); ?>"
             alt="Twin Cities Towing flatbed truck loading a vehicle for a Missouri City TX tow"
             width="620" height="465" loading="lazy">
        <div class="mc-intro-badge">
          <strong>25&ndash;45 min</strong>
          Typical ETA to Missouri City
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up" style="max-width:820px;margin:var(--space-12) auto 0;">
      <h2>Does Twin Cities Towing cover all of Missouri City?</h2>
      <p>Yes. Twin Cities Towing INC covers the entire city &mdash; from the SH-6 retail corridor and Quail Valley to Sienna, Riverstone's Missouri City side, Lake Olympia, and the Beltway 8 edge near the Fort Bend Toll Road interchange. Trucks dispatch 24/7 from Richmond, about 15 miles southwest, with upfront pricing on every call.</p>
    </div>
  </div>
</section>

<div class="mc-divider-curve" aria-hidden="true">
  <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
    <path class="fill-soft" d="M0,60 C360,110 720,10 1080,45 C1260,62 1380,55 1440,48 L1440,100 L0,100 Z" opacity="0.35"/>
    <path class="fill" d="M0,78 C360,118 780,28 1140,62 C1280,74 1390,68 1440,64 L1440,100 L0,100 Z"/>
  </svg>
</div>

<section class="mc-corridors" aria-labelledby="mc-corridors-heading">
  <div class="container">
    <div class="mc-corridors-head" data-animate="fade-up">
      <span class="eyebrow">Where We Pull You Out</span>
      <h2 id="mc-corridors-heading">Which Missouri City roads do you tow from most?</h2>
      <p>Three corridors generate most of Missouri City's breakdowns: SH-6 through the retail district, the Fort Bend Parkway Toll Road commuter run, and the Beltway 8 edge on the city's north side. Twin Cities Towing INC works all three daily, plus the residential streets between them.</p>
    </div>
    <div class="mc-rail">
      <div class="mc-rail-stop" data-animate="mc-left">
        <h3>State Highway 6 &mdash; the retail spine</h3>
        <p>Stop-and-go lights from Murphy Road down past Sienna Parkway mean overheated radiators and dead batteries in parking lots. We run quick hooks out of the SH-6 shopping centers and get you to a shop before closing time.</p>
        <span class="mc-eta">Typical response: 25&ndash;35 min</span>
      </div>
      <div class="mc-rail-stop" data-animate="mc-right">
        <h3>Fort Bend Parkway Toll Road &mdash; the Medical Center run</h3>
        <p>Narrow shoulders and 65+ mph traffic make this the corridor where you want a truck fast. We stage recovery with the flatbed between you and the travel lanes, then haul you home or on toward the Texas Medical Center side.</p>
        <span class="mc-eta">Typical response: 30&ndash;45 min</span>
      </div>
      <div class="mc-rail-stop" data-animate="mc-left">
        <h3>Beltway 8 edge &amp; the north side</h3>
        <p>Where Missouri City meets the Sam Houston Tollway, afternoon congestion backs onto the feeder roads. <a href="/services/accident-towing/" style="color:var(--color-accent);">Accident towing</a> calls cluster here &mdash; we clear scenes quickly and document vehicle condition before transport.</p>
        <span class="mc-eta">Typical response: 35&ndash;45 min</span>
      </div>
      <div class="mc-rail-stop" data-animate="mc-right">
        <h3>Oyster Creek neighborhoods &mdash; the hilly streets</h3>
        <p>The creek-side streets roll and dip more than anywhere else nearby, which is unusual for the Houston area. Steep driveways off those slopes call for careful flatbed angles &mdash; low front bumpers survive our loading, not just our promises.</p>
        <span class="mc-eta">Typical response: 25&ndash;40 min</span>
      </div>
    </div>
  </div>
</section>

<section class="mc-hoods" aria-labelledby="mc-hoods-heading">
  <div class="mc-hoods-float" aria-hidden="true"></div>
  <div class="container">
    <div class="mc-hoods-head" data-animate="fade-up">
      <h2 id="mc-hoods-heading">Which Missouri City neighborhoods does Twin Cities Towing serve?</h2>
      <p>Every one of them &mdash; these four generate the most calls to our Richmond dispatch.</p>
    </div>
    <div class="mc-hood-grid">
      <div class="mc-hood-card tint-a" data-animate="fade-up">
        <h3>Sienna</h3>
        <p>The master-planned community formerly known as Sienna Plantation keeps growing south along Sienna Parkway. Long distances to the nearest garage make tow-to-shop calls routine here.</p>
      </div>
      <div class="mc-hood-card tint-b" data-animate="mc-zoom">
        <h3>Quail Valley</h3>
        <p>Established streets curl around the city-owned golf course. Mature oaks and tight corners mean we bring shorter flatbeds for driveway loads.</p>
      </div>
      <div class="mc-hood-card tint-c" data-animate="fade-up">
        <h3>Riverstone</h3>
        <p>The Missouri City side of Riverstone spills over from Sugar Land along LJ Parkway &mdash; newer homes, newer cars, and plenty of lockout and tire calls.</p>
      </div>
      <div class="mc-hood-card tint-a" data-animate="mc-zoom">
        <h3>Lake Olympia</h3>
        <p>Waterside streets off Lake Olympia Parkway sit in the rolling Oyster Creek terrain. We winch vehicles off soft shoulders here after heavy rain.</p>
      </div>
    </div>
  </div>
</section>

<section class="mc-questions" aria-labelledby="mc-questions-heading">
  <div class="container">
    <h2 id="mc-questions-heading" class="sr-only" style="position:absolute;left:-9999px;">Missouri City Towing Questions</h2>
    <?php foreach ($areaFaqs as $faq): ?>
    <div class="mc-q" data-animate="fade-up">
      <h2><?php echo htmlspecialchars($faq['q']); ?></h2>
      <p><?php echo htmlspecialchars($faq['a']); ?></p>
    </div>
    <?php endforeach; ?>
    <div class="mc-q" data-animate="fade-up">
      <h2>What if I just need a jump start or tire change in Missouri City?</h2>
      <p>Not every call needs a tow. Our <a href="/services/roadside-assistance/">roadside assistance</a> crew handles jump starts, fuel delivery, and on-site <a href="/services/tire-change/">tire changes</a> anywhere in Missouri City &mdash; usually cheaper and faster than a hook. If the fix works, you drive away; if it doesn't, the tow truck is already rolling.</p>
    </div>
  </div>
</section>

<section class="mc-cta" aria-labelledby="mc-cta-heading">
  <div class="container">
    <h2 id="mc-cta-heading">Stuck in Missouri City Right Now?</h2>
    <p>One call to our Richmond dispatch gets you a real ETA and a firm price &mdash; no call center, no surprise fees after loading. We answer at 3 PM and 3 AM alike.</p>
    <div class="mc-cta-actions">
      <a href="tel:+12819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Quote</a>
    </div>
    <div class="mc-siblings">
      <a href="/areas/sugar-land-tx/">Also serving Sugar Land</a>
      <a href="/areas/stafford-tx/">Also serving Stafford</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
