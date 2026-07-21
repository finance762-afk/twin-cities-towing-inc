<?php
/**
 * Twin Cities Towing INC — Needville, TX Service Area
 * Premium area page — unique structure: centered hero, honest-ETA meter
 * signature section, farm & ranch tri-panel, numbered Q&A stack,
 * reversed asymmetric photo band, dark services/areas ribbon.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing & Roadside Assistance in Needville, TX | Twin Cities Towing';
$pageDescription = 'Towing and roadside assistance in Needville, TX 77461. Honest 25-45 minute ETAs from Richmond down SH-36, farm and trailer-savvy drivers, 24/7. (281) 935-1113.';
$ogImage         = $clientPhotos[11];
$currentPage     = 'service-area';

$areaFaqs = [
    ['q' => 'How long does a tow truck take to reach Needville from Richmond?', 'a' => 'Plan on 25–45 minutes. Needville sits in rural southern Fort Bend County, roughly 16 miles down the SH-36 corridor from our Richmond yard, and we would rather tell you that plainly than promise a 15-minute miracle. When you call, dispatch gives you the driver\'s real position and a real clock — and we hit it.'],
    ['q' => 'How much does towing cost in Needville, TX?', 'a' => 'Most passenger-vehicle tows starting in Needville run $95–$150 because of the added distance from Richmond — more than an in-town Richmond tow, and we say so up front. Hauls back up SH-36 to a Rosenberg or Richmond shop are quoted as one firm number before the truck leaves the yard.'],
    ['q' => 'Can you tow farm trucks, trailers, or equipment around Needville?', 'a' => 'Yes. Around Needville we regularly handle three-quarter-ton and one-ton farm trucks, gooseneck and stock trailers with a failed axle or blowout, and light ag equipment that fits our flatbeds. For loaded grain or oil-field traffic on FM 442 we dispatch our heavy-duty truck towing equipment instead of guessing with a light rig.'],
    ['q' => 'Do you cover FM 1462 out toward Brazos Bend State Park?', 'a' => 'We do. FM 1462 east of Needville carries a steady stream of park visitors toward Brazos Bend State Park, and a breakdown out there means long, dark stretches with no shoulder lighting and thin cell coverage. Give dispatch your mile marker or the nearest crossroad and stay with your vehicle — the driver will find you.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Needville, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/needville-tx/#service',
         'name'        => 'Towing & Roadside Assistance in Needville, TX',
         'url'         => $domain . '/areas/needville-tx/',
         'description' => '24/7 towing, breakdown recovery, tire change, and farm/ranch-aware roadside assistance for Needville, TX 77461 and the SH-36, FM 442, and FM 1462 corridors of southern Fort Bend County.',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Needville', 'containedInPlace' => ['@type' => 'State', 'name' => 'Texas']],
         'serviceType' => 'Towing Service'],
        generateFAQSchema($areaFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ═══════════════════════════════════════════════════════════════════
   NEEDVILLE, TX — AREA PAGE STYLES (page-specific, var() tokens only)
   Techniques: layered hero (gradient + noise), honest-ETA meter
   signature, 2 SVG divider styles (double-curve + teeth), tinted
   tri-panel cards, reversed asymmetric photo band, numbered Q&A stack,
   floating accents, Caveat subtitle, mixed reveals, text-wrap balance.
   ═══════════════════════════════════════════════════════════════════ */

/* ── HERO — centered, tall layered gradient ──────────────────────── */
.nv-hero {
  position: relative;
  min-height: 66vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: var(--color-primary-dark);
  overflow: hidden;
  padding: calc(var(--space-16) + var(--space-12)) 0 var(--space-16);
}
.nv-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 50% 115%, color-mix(in srgb, var(--color-accent) 26%, transparent) 0%, transparent 60%),
    linear-gradient(180deg,
      var(--color-primary-dark) 0%,
      var(--color-primary) 62%,
      color-mix(in srgb, var(--color-primary) 78%, var(--color-accent)) 100%);
  z-index: 1;
}
.nv-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.045'/%3E%3C/svg%3E");
  background-size: 170px;
  z-index: 2;
  pointer-events: none;
}
.nv-hero-inner {
  position: relative;
  z-index: 3;
  max-width: 820px;
  margin: 0 auto;
  padding: 0 var(--space-6);
}
.nv-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.nv-hero-eyebrow::before,
.nv-hero-eyebrow::after {
  content: '';
  width: var(--space-10);
  height: 1px;
  background: color-mix(in srgb, var(--color-accent) 50%, transparent);
}
.nv-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.9rem);
  line-height: 1.14;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.nv-hero h1 .nv-h1-accent { color: var(--color-accent); }
.nv-hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.75;
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 66ch;
  margin: 0 auto var(--space-8);
}
.nv-hero-ctas {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── SVG DIVIDERS — style 1: double curve / style 2: teeth ───────── */
.nv-divider { display: block; line-height: 0; }
.nv-divider svg { display: block; width: 100%; height: clamp(36px, 5vw, 68px); }

/* ── SIGNATURE — HONEST-ETA METER ────────────────────────────────── */
.nv-honest {
  position: relative;
  background: var(--color-white);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.nv-honest-float {
  position: absolute;
  top: -70px;
  left: -90px;
  width: 340px;
  height: 340px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 5%, transparent);
  pointer-events: none;
}
.nv-honest-head {
  text-align: center;
  max-width: 66ch;
  margin: 0 auto var(--space-10);
}
.nv-honest-script {
  font-family: var(--font-accent);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-2);
  transform: rotate(-1deg);
}
.nv-honest-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.nv-meter {
  max-width: 900px;
  margin: 0 auto var(--space-8);
}
.nv-meter-track {
  position: relative;
  height: var(--space-3);
  border-radius: var(--radius-full);
  background: linear-gradient(90deg,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 55%, var(--color-primary)) 60%,
    var(--color-primary) 100%);
  margin-bottom: var(--space-6);
}
.nv-meter-track::before {
  content: '';
  position: absolute;
  left: 0;
  top: calc(-1 * var(--space-1));
  width: var(--space-5);
  height: var(--space-5);
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 4px solid var(--color-accent);
  box-shadow: var(--shadow-md);
}
.nv-meter-track::after {
  content: '';
  position: absolute;
  right: 0;
  top: calc(-1 * var(--space-1));
  width: var(--space-5);
  height: var(--space-5);
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 4px solid var(--color-primary);
  box-shadow: var(--shadow-md);
}
.nv-meter-labels {
  display: flex;
  justify-content: space-between;
  gap: var(--space-4);
}
.nv-meter-labels .nv-meter-cell h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
}
.nv-meter-labels .nv-meter-cell span {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
}
.nv-meter-cell:last-child { text-align: right; }
.nv-honest-copy {
  max-width: 68ch;
  margin: 0 auto;
  color: var(--color-gray-dark);
  line-height: 1.75;
}
.nv-honest-copy a { color: var(--color-accent); font-weight: 600; text-decoration: underline; }
.nv-honest-copy a:hover { color: var(--color-primary); }

/* ── FARM & RANCH TRI-PANEL — tinted cards ───────────────────────── */
.nv-farm {
  background: var(--color-light);
  padding: var(--space-16) 0;
}
.nv-farm-head {
  max-width: 68ch;
  margin-bottom: var(--space-10);
}
.nv-farm-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.1rem);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.nv-farm-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.nv-farm-card {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.nv-farm-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.nv-farm-card:nth-child(1) { background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white)); }
.nv-farm-card:nth-child(2) { background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white)); }
.nv-farm-card:nth-child(3) { background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white)); }
.nv-farm-card .nv-farm-icon {
  width: var(--space-12);
  height: var(--space-12);
  border-radius: var(--radius-md);
  background: var(--color-primary);
  color: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-5);
}
.nv-farm-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.nv-farm-card p { color: var(--color-gray-dark); line-height: 1.7; font-size: var(--font-size-sm); }
.nv-farm-card a { color: var(--color-accent); font-weight: 600; text-decoration: underline; }
.nv-farm-card a:hover { color: var(--color-primary); }

/* ── REVERSED ASYMMETRIC PHOTO BAND ──────────────────────────────── */
.nv-band {
  background: var(--color-white);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.nv-band-float {
  position: absolute;
  bottom: -100px;
  right: -70px;
  width: 300px;
  height: 300px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 6%, transparent);
  pointer-events: none;
}
.nv-band .container {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: var(--space-12);
  align-items: center;
}
.nv-band-photo {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  clip-path: polygon(0 0, 100% var(--space-4), 100% 100%, 0 calc(100% - var(--space-4)));
}
.nv-band-photo img { width: 100%; height: auto; display: block; }
.nv-band-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.8vw, 2rem);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.nv-band-content p {
  color: var(--color-gray-dark);
  line-height: 1.75;
  margin-bottom: var(--space-4);
  max-width: 62ch;
}
.nv-band-content a { color: var(--color-accent); font-weight: 600; text-decoration: underline; }
.nv-band-content a:hover { color: var(--color-primary); }

/* ── NUMBERED Q&A STACK ──────────────────────────────────────────── */
.nv-qa {
  background: var(--color-light);
  padding: var(--space-16) 0;
}
.nv-qa-head {
  max-width: 62ch;
  margin: 0 auto var(--space-10);
  text-align: center;
}
.nv-qa-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.1rem);
  color: var(--color-primary);
  text-wrap: balance;
}
.nv-qa-stack {
  max-width: 860px;
  margin: 0 auto;
}
.nv-qa-row {
  display: grid;
  grid-template-columns: var(--space-16) 1fr;
  gap: var(--space-6);
  padding: var(--space-8) 0;
  border-bottom: 1px solid var(--color-gray-light);
}
.nv-qa-row:last-child { border-bottom: 0; }
.nv-qa-num {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  line-height: 1;
  color: color-mix(in srgb, var(--color-accent) 45%, var(--color-white));
  -webkit-text-stroke: 1px var(--color-accent);
}
.nv-qa-row h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.nv-qa-row p { color: var(--color-gray-dark); line-height: 1.75; }

/* ── DARK SERVICES / AREAS RIBBON + CTA ──────────────────────────── */
.nv-ribbon {
  position: relative;
  background:
    radial-gradient(ellipse at 80% -20%, color-mix(in srgb, var(--color-accent) 16%, transparent) 0%, transparent 55%),
    linear-gradient(160deg, var(--color-primary), var(--color-primary-dark));
  padding: var(--space-16) 0;
  overflow: hidden;
}
.nv-ribbon h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.2vw, 2.3rem);
  color: var(--color-white);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.nv-ribbon-sub {
  text-align: center;
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-10);
  line-height: 1.7;
}
.nv-chip-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
  margin-bottom: var(--space-10);
}
.nv-chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-white);
  border: 1px solid color-mix(in srgb, var(--color-white) 22%, transparent);
  background: color-mix(in srgb, var(--color-white) 7%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  transition: background var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast);
}
.nv-chip:hover {
  background: color-mix(in srgb, var(--color-accent) 22%, transparent);
  border-color: var(--color-accent);
  transform: translateY(-2px);
}
.nv-chip svg { color: var(--color-accent); }
.nv-ribbon-ctas {
  display: flex;
  justify-content: center;
  gap: var(--space-4);
  flex-wrap: wrap;
}

/* ── PAGE-SPECIFIC REVEAL DIRECTIONS ─────────────────────────────── */
[data-animate="nv-left"]  { opacity: 0; transform: translateX(-30px); transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="nv-right"] { opacity: 0; transform: translateX(30px);  transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="nv-down"]  { opacity: 0; transform: translateY(-26px); transition: opacity var(--transition-slow), transform var(--transition-slow); }
[data-animate="nv-left"].animated,
[data-animate="nv-right"].animated,
[data-animate="nv-down"].animated { opacity: 1; transform: none; }

/* ── RESPONSIVE ──────────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .nv-farm-grid { grid-template-columns: 1fr; max-width: 560px; margin: 0 auto; }
  .nv-band .container { grid-template-columns: 1fr; }
  .nv-band-photo { max-width: 520px; order: 2; }
}
@media (max-width: 640px) {
  .nv-hero { min-height: 0; }
  .nv-meter-labels .nv-meter-cell h3 { font-size: var(--font-size-lg); }
  .nv-qa-row { grid-template-columns: var(--space-10) 1fr; gap: var(--space-4); }
  .nv-qa-num { font-size: var(--font-size-2xl); }
  .nv-hero-ctas .btn, .nv-ribbon-ctas .btn { width: 100%; justify-content: center; }
  .nv-hero-eyebrow::before, .nv-hero-eyebrow::after { width: var(--space-5); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li><a href="/service-area/">Service Areas</a></li>
      <li aria-current="page">Needville, TX</li>
    </ol>
  </div>
</nav>

<!-- HERO — no reveal classes above the fold -->
<section class="nv-hero" aria-labelledby="nv-hero-heading">
  <div class="nv-hero-inner">
    <span class="nv-hero-eyebrow">Needville &middot; Southern Fort Bend County &middot; 77461</span>
    <h1 id="nv-hero-heading">Towing &amp; Roadside Assistance in <span class="nv-h1-accent">Needville</span>, TX</h1>
    <p class="nv-hero-answer">Twin Cities Towing INC is a licensed and insured towing company based in Richmond, TX, and we'll tell you the truth other outfits won't: Needville is a real drive from anybody's yard. Ours is about 16 miles up the SH-36 corridor, which means an honest 25&ndash;45 minute ETA — quoted straight, hit consistently, 24 hours a day since 2011.</p>
    <div class="nv-hero-ctas">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Request a Tow Online</a>
    </div>
  </div>
</section>

<!-- Divider style 1: double curve -->
<div class="nv-divider" style="background: var(--color-primary);" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,32 C240,64 480,0 720,32 C960,64 1200,0 1440,32 L1440,64 L0,64 Z" fill="var(--color-white)"/>
  </svg>
</div>

<!-- SIGNATURE — honest-ETA meter -->
<section class="nv-honest" aria-labelledby="nv-honest-heading">
  <div class="nv-honest-float" aria-hidden="true"></div>
  <div class="container">
    <div class="nv-honest-head" data-animate>
      <span class="nv-honest-script">No 15-minute fairy tales out here</span>
      <h2 id="nv-honest-heading">How long does towing near me in Needville actually take?</h2>
      <p class="answer-block">A straight answer: 25&ndash;45 minutes for most of Needville, because the truck is coming from Richmond down SH-36, not from a phantom "local driver." Companies that promise Needville in 15 minutes are reading a script. We quote the real drive, then beat it when the corridor is clear.</p>
    </div>
    <div class="nv-meter" data-animate="nv-left" aria-hidden="true">
      <div class="nv-meter-track"></div>
      <div class="nv-meter-labels">
        <div class="nv-meter-cell">
          <h3>Richmond yard — mile 0</h3>
          <span>1920 Rocky Falls Rd, dispatch answers live</span>
        </div>
        <div class="nv-meter-cell">
          <h3>Needville — ~16 miles</h3>
          <span>SH-36 south, 25&ndash;45 minutes real-world</span>
        </div>
      </div>
    </div>
    <p class="nv-honest-copy" data-animate>Small towns keep score. Needville is a Needville ISD town where the Bluejays are the Friday conversation and word travels faster than any review site — if a tow company burns somebody on FM 442, half the county hears about it by Sunday. That's exactly why we quote Needville honestly: our name has to hold up out here longer than any single invoice. Whether it's a <a href="/services/breakdown-towing/">breakdown tow</a> back to a Rosenberg shop or a <a href="/services/tire-change/">tire change</a> on the shoulder, the price and the clock we give you are the ones you get.</p>
  </div>
</section>

<!-- FARM & RANCH TRI-PANEL -->
<section class="nv-farm" aria-labelledby="nv-farm-heading">
  <div class="container">
    <div class="nv-farm-head" data-animate="nv-down">
      <h2 id="nv-farm-heading">What kind of towing does rural Needville need?</h2>
      <p class="answer-block">Different from the suburbs. Around Needville we tow farm trucks and stock trailers as often as commuter sedans, work around loaded grain and oil-field traffic on FM 442, and cover the long, unlit stretch of FM 1462 that carries visitors toward Brazos Bend State Park. Rural miles change the job — our equipment and drivers are set up for it.</p>
    </div>
    <div class="nv-farm-grid">
      <div class="nv-farm-card" data-animate>
        <div class="nv-farm-icon">
          <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 17h4V5H2v12h3"/><path d="M20 17h2v-3.34a4 4 0 0 0-1.17-2.83L19 9h-5v8h1"/><circle cx="7.5" cy="17.5" r="2.5"/><circle cx="17.5" cy="17.5" r="2.5"/></svg>
        </div>
        <h3>Farm &amp; ranch rigs</h3>
        <p>Dually farm trucks, gooseneck and stock trailers, hay haulers with a dropped axle — ranch work around Needville rides on equipment that a standard wrecker can't always handle. Our <a href="/services/truck-towing/">truck towing</a> service covers the heavy end so a blowout doesn't strand your whole operation.</p>
      </div>
      <div class="nv-farm-card" data-animate>
        <div class="nv-farm-icon">
          <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 22v-5l5-5 5 5-5 5z"/><path d="M9.5 14.5 16 8"/><path d="m17 2 5 5-.5.5a3.53 3.53 0 0 1-5 0s0 0 0 0a3.53 3.53 0 0 1 0-5L17 2Z"/></svg>
        </div>
        <h3>FM 442 working traffic</h3>
        <p>FM 442 west of town carries grain trucks at harvest and oil-field service traffic year-round. When something heavy quits on a two-lane farm road, positioning matters as much as horsepower — our drivers set up so the lane reopens fast and nobody gets surprised over a hill crest.</p>
      </div>
      <div class="nv-farm-card" data-animate>
        <div class="nv-farm-icon">
          <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h3>Long-road breakdowns</h3>
        <p>Between town and Brazos Bend State Park, FM 1462 runs dark and quiet after sunset. If your car dies out there, call, share your nearest crossroad, and stay put with flashers on. <a href="/services/roadside-assistance/">Roadside assistance</a> — fuel, jump starts, tire swaps — solves many of those calls without a tow.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider style 2: teeth -->
<div class="nv-divider" style="background: var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 48" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,48 L120,10 L240,48 L360,10 L480,48 L600,10 L720,48 L840,10 L960,48 L1080,10 L1200,48 L1320,10 L1440,48 Z" fill="var(--color-white)" transform="translate(0,-48) scale(1,-1)" transform-origin="center"/>
    <path d="M0,0 L120,38 L240,0 L360,38 L480,0 L600,38 L720,0 L840,38 L960,0 L1080,38 L1200,0 L1320,38 L1440,0 L1440,48 L0,48 Z" fill="var(--color-white)"/>
  </svg>
</div>

<!-- REVERSED ASYMMETRIC PHOTO BAND -->
<section class="nv-band" aria-labelledby="nv-band-heading">
  <div class="nv-band-float" aria-hidden="true"></div>
  <div class="container">
    <div class="nv-band-photo" data-animate="nv-left">
      <img src="<?php echo htmlspecialchars($clientPhotos[11]); ?>"
           alt="Twin Cities Towing flatbed on a rural route serving Needville, TX"
           width="600" height="450" loading="lazy">
    </div>
    <div class="nv-band-content" data-animate="nv-right">
      <h2 id="nv-band-heading">Why does a Richmond company bother with Needville calls?</h2>
      <p>Because somebody dependable has to. Needville doesn't have a tow yard on every corner — it's rural southern Fort Bend County, where the nearest help is always a highway away. Rather than pretend that distance doesn't exist, we built our dispatch around it: SH-36 is a road our drivers run daily, so a Needville call slots into routes we already know cold.</p>
      <p>It also means one company can handle the whole problem. If your truck needs to get from a field access road off FM 442 to a mechanic in Rosenberg, that's one call, one <a href="/services/flatbed-towing/">flatbed</a>, one firm price — not a relay between brokers. And when the vehicle is fixable on the spot, we'd rather send roadside help than sell you a tow you don't need.</p>
      <p>Planning ahead? <a href="/contact/">Contact us</a> for a quote, or keep (281) 935-1113 in the glovebox next to the proof of insurance.</p>
    </div>
  </div>
</section>

<!-- NUMBERED Q&A STACK -->
<section class="nv-qa" aria-labelledby="nv-qa-heading">
  <div class="container">
    <div class="nv-qa-head" data-animate>
      <h2 id="nv-qa-heading">Needville towing questions, answered plainly</h2>
    </div>
    <div class="nv-qa-stack">
      <?php foreach ($areaFaqs as $i => $faq): ?>
      <div class="nv-qa-row" data-animate="<?php echo $i % 2 === 0 ? 'nv-right' : 'nv-left'; ?>">
        <span class="nv-qa-num" aria-hidden="true">0<?php echo $i + 1; ?></span>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- DARK RIBBON + CTA -->
<section class="nv-ribbon" aria-labelledby="nv-ribbon-heading">
  <div class="container" data-animate>
    <h2 id="nv-ribbon-heading">Stranded around Needville? One call covers it.</h2>
    <p class="nv-ribbon-sub">From the SH-36 corridor to the last gravel turnoff before the state park — honest ETAs, firm pricing, and a dispatcher who actually knows where FM 442 goes.</p>
    <div class="nv-chip-row">
      <a class="nv-chip" href="/services/truck-towing/">
        <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        Truck Towing
      </a>
      <a class="nv-chip" href="/services/breakdown-towing/">
        <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        Breakdown Towing
      </a>
      <a class="nv-chip" href="/services/tire-change/">
        <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        Tire Change
      </a>
      <a class="nv-chip" href="/areas/rosenberg-tx/">
        <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        Rosenberg, TX
      </a>
      <a class="nv-chip" href="/areas/richmond-tx/">
        <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        Richmond, TX
      </a>
    </div>
    <div class="nv-ribbon-ctas">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113 Now</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Quote</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
