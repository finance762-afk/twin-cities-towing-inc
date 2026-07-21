<?php
/**
 * Twin Cities Towing INC — Richmond, TX Service Area (Home City)
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing in Richmond, TX | Twin Cities Towing INC';
$pageDescription = '24/7 towing in Richmond, TX from our base at 1920 Rocky Falls RD. US-90A, FM 762, FM 359 & downtown square coverage in 15-25 minutes. Call (281) 935-1113.';
$ogImage         = $clientPhotos[21];
$currentPage     = 'service-area';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $domain . '/service-area/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Richmond, TX'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/areas/richmond-tx/#service',
         'name'        => 'Towing Service in Richmond, TX',
         'url'         => $domain . '/areas/richmond-tx/',
         'description' => '24/7 towing and roadside assistance in Richmond, TX — the home city of Twin Cities Towing INC. Coverage for US-90A, FM 762, FM 359, the Grand Parkway, and every Richmond neighborhood since 2011.',
         'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed'  => ['@type' => 'City', 'name' => 'Richmond, TX'],
         'serviceType' => 'Towing Service'],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ══════════════════════════════════════════════════════════════════
   RICHMOND, TX — HOME CITY AREA PAGE
   Page-specific premium styles — var() tokens only.
   Techniques: layered hero (::before gradient + ::after noise),
   curve + angle SVG dividers, asymmetric intro grid, corridor route
   rail signature section, tinted service cards (color-mix), floating
   accents at 5-6% opacity, Caveat accent subtitle, mixed-direction
   reveals via [data-animate] variants, text-wrap balance.
   ══════════════════════════════════════════════════════════════════ */

/* ── Mixed-direction reveal variants (below-fold only) ── */
[data-animate="slide-left"]  { transform: translateX(-36px); }
[data-animate="slide-right"] { transform: translateX(36px); }
[data-animate="rise-far"]    { transform: translateY(48px); }
[data-animate="zoom"]        { transform: scale(0.94); }

/* ── Breadcrumb ── */
.rch-crumbs {
  background: var(--color-light);
  border-bottom: 1px solid var(--color-gray-light);
  padding: var(--space-3) 0;
  font-size: var(--font-size-sm);
}
.rch-crumbs ol {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
  align-items: center;
}
.rch-crumbs a {
  color: var(--color-gray);
  transition: color var(--transition-fast);
}
.rch-crumbs a:hover { color: var(--color-accent); }
.rch-crumbs li[aria-current] { color: var(--color-primary); font-weight: 600; }
.rch-crumbs .sep { color: var(--color-gray-light); }

/* ── LAYERED HERO ── */
.rch-hero {
  position: relative;
  min-height: 74vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.rch-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(118deg,
    rgba(var(--color-primary-rgb), 0.96) 0%,
    rgba(var(--color-primary-rgb), 0.82) 46%,
    rgba(var(--color-secondary-rgb), 0.52) 100%);
  z-index: 1;
}
.rch-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  background-size: 180px;
  z-index: 2;
  pointer-events: none;
}
.rch-hero .container {
  position: relative;
  z-index: 3;
  width: 100%;
}
.rch-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-accent) 16%, transparent);
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
.rch-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.6vw, 3.6rem);
  line-height: 1.08;
  text-wrap: balance;
  max-width: 18ch;
  margin-bottom: var(--space-4);
}
.rch-hero h1 span { color: var(--color-accent); }
.rch-hero-sub {
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.4vw, 1.7rem);
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  margin-bottom: var(--space-4);
}
.rch-hero-lead {
  color: color-mix(in srgb, var(--color-white) 86%, transparent);
  max-width: 62ch;
  font-size: var(--font-size-lg);
  line-height: 1.75;
  margin-bottom: var(--space-6);
}
.rch-hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4) var(--space-6);
  margin-bottom: var(--space-8);
}
.rch-hero-trust span {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  font-size: var(--font-size-sm);
}
.rch-hero-trust svg { color: var(--color-accent); flex-shrink: 0; }
.rch-hero-actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── SVG DIVIDERS ── */
.rch-divider {
  display: block;
  width: 100%;
  line-height: 0;
  overflow: hidden;
}
.rch-divider svg { display: block; width: 100%; height: 64px; }

/* ── ASYMMETRIC INTRO ── */
.rch-intro {
  position: relative;
  background: var(--color-white);
  padding: var(--space-16) 0 var(--space-12);
  overflow: hidden;
}
.rch-intro-float {
  position: absolute;
  top: -90px;
  right: -110px;
  width: 340px;
  height: 340px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 6%, transparent);
  pointer-events: none;
}
.rch-intro-grid {
  display: grid;
  grid-template-columns: 1.25fr 0.75fr;
  gap: var(--space-12);
  align-items: start;
}
.rch-intro h2 {
  font-size: clamp(1.6rem, 3.2vw, 2.4rem);
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.rch-intro .prose p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  max-width: 65ch;
}
.rch-eta-card {
  position: relative;
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  color: var(--color-white);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.rch-eta-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 85% 10%,
    color-mix(in srgb, var(--color-accent) 18%, transparent) 0%,
    transparent 60%);
}
.rch-eta-card h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-6);
  position: relative;
}
.rch-eta-rows {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
  position: relative;
}
.rch-eta-row {
  display: flex;
  align-items: center;
  gap: var(--space-4);
}
.rch-eta-num {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  color: var(--color-accent);
  line-height: 1;
  min-width: 84px;
}
.rch-eta-row strong {
  display: block;
  font-size: var(--font-size-sm);
  color: var(--color-white);
}
.rch-eta-row em {
  font-style: normal;
  font-size: var(--font-size-xs);
  color: color-mix(in srgb, var(--color-white) 62%, transparent);
}
.rch-eta-card .btn { margin-top: var(--space-6); position: relative; width: 100%; justify-content: center; }

/* ── SIGNATURE: CORRIDOR ROUTE RAIL ── */
.rch-corridors {
  position: relative;
  background: var(--color-light);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rch-corridors-float {
  position: absolute;
  bottom: -120px;
  left: -100px;
  width: 380px;
  height: 380px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 5%, transparent);
  pointer-events: none;
}
.rch-corridors-head {
  max-width: 720px;
  margin-bottom: var(--space-12);
}
.rch-corridors-head h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rch-corridors-head p {
  color: var(--color-gray-dark);
  line-height: 1.75;
  max-width: 65ch;
}
.rch-rail {
  position: relative;
  padding-left: var(--space-10);
  display: flex;
  flex-direction: column;
  gap: var(--space-8);
  max-width: 780px;
}
.rch-rail::before {
  content: '';
  position: absolute;
  left: 11px;
  top: 8px;
  bottom: 8px;
  width: 3px;
  border-radius: var(--radius-full);
  background: linear-gradient(180deg,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 30%, transparent) 100%);
}
.rch-stop { position: relative; }
.rch-stop::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-10) + 3px);
  top: 6px;
  width: 19px;
  height: 19px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 4px solid var(--color-accent);
  box-shadow: var(--shadow-sm);
}
.rch-stop h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.rch-stop h3 small {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-1);
}
.rch-stop p {
  color: var(--color-gray-dark);
  line-height: 1.75;
  max-width: 62ch;
  margin-bottom: 0;
}

/* ── PHOTO SPLIT (asymmetric, photo left) ── */
.rch-split {
  background: var(--color-white);
  padding: var(--space-16) 0;
}
.rch-split-grid {
  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  gap: var(--space-12);
  align-items: center;
}
.rch-split-photo {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  transform: rotate(-1.2deg);
}
.rch-split-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.rch-split-photo:hover img { transform: scale(1.04); }
.rch-split-photo::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(200deg,
    transparent 65%,
    rgba(var(--color-primary-rgb), 0.55) 100%);
}
.rch-split-badge {
  position: absolute;
  bottom: var(--space-4);
  left: var(--space-4);
  right: var(--space-4);
  z-index: 2;
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  text-align: center;
  padding: var(--space-3) var(--space-4);
  border-radius: var(--radius-md);
}
.rch-split-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.rch-split-copy p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  max-width: 65ch;
}
.rch-split-list {
  list-style: none;
  margin: var(--space-5) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.rch-split-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: var(--color-gray-dark);
  line-height: 1.6;
}
.rch-split-list svg {
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 3px;
}

/* ── QUESTION BLOCKS ── */
.rch-questions {
  background: var(--color-light);
  padding: var(--space-16) 0;
}
.rch-questions-head {
  text-align: center;
  max-width: 700px;
  margin: 0 auto var(--space-12);
}
.rch-questions-head h2 { text-wrap: balance; }
.rch-qa {
  background: var(--color-white);
  border-left: 4px solid var(--color-accent);
  border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
  box-shadow: var(--shadow-card);
  padding: var(--space-8);
  max-width: 820px;
  margin: 0 auto var(--space-6);
}
.rch-qa h2 {
  font-size: var(--font-size-xl);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.rch-qa p {
  color: var(--color-gray-dark);
  line-height: 1.8;
  margin-bottom: 0;
}

/* ── SERVICE LINK CARDS (tinted) ── */
.rch-services {
  background: var(--color-white);
  padding: var(--space-16) 0;
}
.rch-services-head {
  max-width: 720px;
  margin: 0 auto var(--space-10);
  text-align: center;
}
.rch-services-head h2 { text-wrap: balance; margin-bottom: var(--space-3); }
.rch-services-head p { color: var(--color-gray-dark); }
.rch-svc-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.rch-svc {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rch-svc:nth-child(1) { background: color-mix(in srgb, var(--color-primary) 7%, var(--color-white)); }
.rch-svc:nth-child(2) { background: color-mix(in srgb, var(--color-accent) 9%, var(--color-white)); }
.rch-svc:nth-child(3) { background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white)); }
.rch-svc:nth-child(4) { background: color-mix(in srgb, var(--color-primary-dark) 6%, var(--color-white)); }
.rch-svc:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.rch-svc svg { color: var(--color-accent); }
.rch-svc h3 { font-size: var(--font-size-base); }
.rch-svc p {
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  line-height: 1.6;
  margin-bottom: 0;
  flex: 1;
}
.rch-svc span {
  color: var(--color-primary);
  font-weight: 700;
  font-size: var(--font-size-sm);
}
.rch-svc:hover span { color: var(--color-accent); }

/* ── SIBLING AREAS ── */
.rch-siblings {
  background: var(--color-light);
  padding: var(--space-12) 0;
}
.rch-siblings-inner {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-6);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  box-shadow: var(--shadow-card);
}
.rch-siblings h2 {
  font-size: var(--font-size-xl);
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.rch-siblings p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  margin-bottom: 0;
  max-width: 48ch;
}
.rch-siblings-links {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── FINAL CTA ── */
.rch-cta {
  position: relative;
  background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 60%, var(--color-secondary) 100%);
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.rch-cta::after {
  content: '';
  position: absolute;
  top: -70px;
  right: 8%;
  width: 260px;
  height: 260px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 7%, transparent);
  pointer-events: none;
}
.rch-cta h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rch-cta p {
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  max-width: 58ch;
  margin: 0 auto var(--space-8);
  line-height: 1.75;
}
.rch-cta-actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
  position: relative;
  z-index: 1;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .rch-intro-grid,
  .rch-split-grid { grid-template-columns: 1fr; }
  .rch-svc-grid { grid-template-columns: repeat(2, 1fr); }
  .rch-split-photo { transform: none; }
}
@media (max-width: 640px) {
  .rch-hero { min-height: 0; }
  .rch-svc-grid { grid-template-columns: 1fr; }
  .rch-hero-actions { flex-direction: column; align-items: stretch; }
  .rch-siblings-inner { flex-direction: column; align-items: flex-start; }
  .rch-eta-num { min-width: 64px; font-size: var(--font-size-2xl); }
}
</style>

<nav class="rch-crumbs" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="sep" aria-hidden="true">›</li>
      <li><a href="/service-area/">Service Areas</a></li>
      <li class="sep" aria-hidden="true">›</li>
      <li aria-current="page">Richmond, TX</li>
    </ol>
  </div>
</nav>

<!-- LAYERED HERO -->
<section class="rch-hero" style="background-image:url('<?php echo htmlspecialchars($clientPhotos[21]); ?>');" aria-labelledby="rch-h1">
  <div class="container">
    <span class="rch-hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg>
      Home Base &bull; Richmond, TX 77469
    </span>
    <h1 id="rch-h1">24/7 Towing Service in <span>Richmond, TX</span></h1>
    <p class="rch-hero-sub">Our trucks are parked on Rocky Falls RD — this is home.</p>
    <p class="rch-hero-lead">Twin Cities Towing INC is a licensed and insured towing company based right here in Richmond at 1920 Rocky Falls RD, serving Richmond and all of Fort Bend County since 2011. When you search for towing near me in Richmond, you're calling the company that's already inside the city limits — most Richmond calls get a truck on scene in 15&ndash;25 minutes, day or night.</p>
    <div class="rch-hero-trust">
      <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1 1 0 0 1 1.52 0C14.5 3.8 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg> Licensed &amp; Insured</span>
      <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 15&ndash;25 Min Typical ETA</span>
      <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18h-5"/><path d="M15 8h4l3 5v4a1 1 0 0 1-1 1h-1"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg> Since 2011</span>
    </div>
    <div class="rch-hero-actions">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Estimate</a>
    </div>
  </div>
</section>

<div class="rch-divider" style="background:var(--color-white);" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,34 C420,64 1020,0 1440,30 L1440,0 L0,0 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ASYMMETRIC INTRO + ETA CARD -->
<section class="rch-intro" aria-labelledby="rch-intro-h">
  <div class="rch-intro-float" aria-hidden="true"></div>
  <div class="container">
    <div class="rch-intro-grid">
      <div data-animate="slide-left">
        <h2 id="rch-intro-h">The Towing Company That Lives Where You Broke Down</h2>
        <div class="prose">
          <p>Richmond isn't a dot on our coverage map — it's our address. Our yard sits off Rocky Falls RD on the south side of the city, which means a Richmond dispatch is usually our shortest run of the day. Whether your car quit on the US-90A bridge over the Brazos River heading into the historic downtown, you picked up a nail on FM 762 out past the Grand Parkway near the George Ranch, or your battery died in a driveway in Del Webb Sweetgrass, the truck coming to get you starts inside Richmond city limits.</p>
          <p>Thirteen-plus years of working this city daily means our drivers know the details that shave minutes off a response: which downtown blocks around the 1908 Fort Bend County courthouse square are one-way, where the shoulder disappears on FM 359 toward Pecan Grove, and how backups stack at the US-90A and FM 762 signals when a train rolls through. That local knowledge is the difference between a driver who finds you on the first pass and one who circles.</p>
        </div>
        <div class="answer-block">
          <h2>How fast can a tow truck reach me in Richmond, TX?</h2>
          <p>Twin Cities Towing INC reaches most Richmond locations in 15&ndash;25 minutes because our trucks dispatch from 1920 Rocky Falls RD, inside the city itself. Downtown, the courthouse square, Del Webb Sweetgrass, and the FM 762 corridor are all short runs. We answer 24/7 and confirm a real ETA before the truck rolls.</p>
        </div>
      </div>
      <aside class="rch-eta-card" data-animate="slide-right" aria-label="Richmond response snapshot">
        <h3>Richmond Response Snapshot</h3>
        <div class="rch-eta-rows">
          <div class="rch-eta-row">
            <span class="rch-eta-num">15&ndash;25</span>
            <div><strong>Minutes to most of Richmond</strong><em>Typical ETA from our Rocky Falls RD base</em></div>
          </div>
          <div class="rch-eta-row">
            <span class="rch-eta-num">$75+</span>
            <div><strong>Standard local tows start here</strong><em>Quoted upfront, before dispatch</em></div>
          </div>
          <div class="rch-eta-row">
            <span class="rch-eta-num">24/7</span>
            <div><strong>Live local dispatch</strong><em>No call center — a Richmond number</em></div>
          </div>
        </div>
        <a href="/contact/" class="btn btn-accent">Request a Tow Now</a>
      </aside>
    </div>
  </div>
</section>

<div class="rch-divider" style="background:var(--color-white);" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,64 1440,8 1440,64" fill="var(--color-light)"/>
  </svg>
</div>

<!-- SIGNATURE: CORRIDOR ROUTE RAIL -->
<section class="rch-corridors" aria-labelledby="rch-corr-h">
  <div class="rch-corridors-float" aria-hidden="true"></div>
  <div class="container">
    <div class="rch-corridors-head" data-animate>
      <h2 id="rch-corr-h">Where Do Richmond Drivers Break Down Most?</h2>
      <p>After 13+ years towing in Richmond, the call log tells a clear story. These are the corridors where our trucks work every week — and what usually goes wrong on each one.</p>
    </div>
    <div class="rch-rail">
      <div class="rch-stop" data-animate="slide-left">
        <h3><small>US-90A &mdash; Brazos River Crossing</small>The bridge into downtown</h3>
        <p>The US-90A crossing over the Brazos River funnels commuter traffic straight into Richmond's historic downtown, and a stall on the bridge approach has nowhere to hide. We position for fast recovery here because a single disabled car backs up the courthouse-square grid within minutes. Overheated engines and blowouts are the usual culprits.</p>
      </div>
      <div class="rch-stop" data-animate="slide-left">
        <h3><small>FM 762 &mdash; George Ranch &amp; Jester Corridor</small>The long, dark stretch south</h3>
        <p>FM 762 runs from town past the Grand Parkway toward the George Ranch Historical Park, with the Jester prison units along the way. It's a fast two-lane road with long gaps between lights — flat tires and fuel run-outs strand drivers where walking for help isn't realistic. We bring fuel, change tires, or tow from anywhere on this stretch.</p>
      </div>
      <div class="rch-stop" data-animate="slide-left">
        <h3><small>FM 359 &amp; the North Side</small>Pecan Grove direction</h3>
        <p>FM 359 north toward Pecan Grove carries school-run and commuter traffic with narrow shoulders. Fender-benders and dead batteries dominate the calls. Because it's minutes from our yard, this is often our fastest response zone in the city.</p>
      </div>
      <div class="rch-stop" data-animate="slide-left">
        <h3><small>Neighborhood Calls</small>From the square to Sweetgrass</h3>
        <p>Richmond's housing runs from early-1900s homes near the courthouse square to the Del Webb Sweetgrass active-adult community. Older driveways mean tight flatbed angles; in Sweetgrass we handle a steady stream of jump starts and lockouts. Either way, the truck that shows up has loaded in that exact spot before.</p>
      </div>
    </div>
  </div>
</section>

<div class="rch-divider" style="background:var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C360,64 1080,0 1440,44 L1440,64 L0,64 Z" fill="var(--color-white)"/>
  </svg>
</div>

<!-- PHOTO SPLIT -->
<section class="rch-split" aria-labelledby="rch-split-h">
  <div class="container">
    <div class="rch-split-grid">
      <div class="rch-split-photo" data-animate="zoom">
        <img src="<?php echo htmlspecialchars($clientPhotos[22]); ?>"
             alt="Twin Cities Towing INC flatbed truck loading a vehicle in Richmond, TX"
             width="640" height="480" loading="lazy">
        <span class="rch-split-badge">Based in Richmond Since 2011</span>
      </div>
      <div class="rch-split-copy" data-animate="slide-right">
        <h2 id="rch-split-h">Every Towing &amp; Roadside Service, Right From the Home Yard</h2>
        <p>Because Richmond is our base, every service we run is at full strength here — no long deadhead drive baked into your price. Our <a href="/services/flatbed-towing/">flatbed towing</a> handles low-clearance and AWD vehicles, <a href="/services/emergency-towing/">emergency towing</a> runs around the clock, and <a href="/services/roadside-assistance/">roadside assistance</a> covers jump starts, fuel delivery, and on-site fixes anywhere in the city.</p>
        <ul class="rch-split-list">
          <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> Standard Richmond tows typically run $75&ndash;$125, quoted before dispatch</li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> Delivery to any Richmond-area mechanic, dealership, or address you choose</li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> <a href="/services/lockout-service/">Lockout service</a> without damage — common call in Sweetgrass and downtown</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- QUESTION BLOCKS -->
<section class="rch-questions" aria-labelledby="rch-q-h">
  <div class="container">
    <div class="rch-questions-head" data-animate>
      <h2 id="rch-q-h">Straight Answers for Richmond Drivers</h2>
    </div>
    <div class="rch-qa" data-animate="rise-far">
      <h2>What does a tow cost in Richmond, TX?</h2>
      <p>Most standard tows that start and end in Richmond run $75&ndash;$125 — the lowest range in our service area, because there's no travel time added from our base. Flatbed transport, after-midnight recoveries, and winch-outs can cost more. You get the full number on the phone before any truck moves.</p>
    </div>
    <div class="rch-qa" data-animate="rise-far">
      <h2>What are the most common tow calls in Richmond?</h2>
      <p>Stalls on the US-90A Brazos River bridge approach, flat tires along FM 762 near the Grand Parkway, accident tows at the FM 359 intersections, and battery or lockout calls in Del Webb Sweetgrass top the list. Summer overheating spikes June through September; we run extra water and jump packs on every truck for it.</p>
    </div>
    <div class="rch-qa" data-animate="rise-far">
      <h2>Do you tow at night in Richmond?</h2>
      <p>Yes — dispatch is live 24/7 and night calls in Richmond get the same 15&ndash;25 minute target as daytime. Late-night breakdowns cluster on US-90A and FM 762 where there's little lighting, so our drivers set out cones and light the scene before loading. Call any hour; a local answers.</p>
    </div>
  </div>
</section>

<!-- SERVICE LINK CARDS -->
<section class="rch-services" aria-labelledby="rch-svc-h">
  <div class="container">
    <div class="rch-services-head" data-animate>
      <h2 id="rch-svc-h">Which Towing Services Are Available in Richmond?</h2>
      <p>Every service below dispatches from our Richmond yard — these four are the ones this city calls for most.</p>
    </div>
    <div class="rch-svc-grid">
      <a class="rch-svc" href="/services/emergency-towing/" data-animate="rise-far">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
        <h3>Emergency Towing</h3>
        <p>Immediate dispatch anywhere in Richmond, any hour.</p>
        <span>Learn more &rarr;</span>
      </a>
      <a class="rch-svc" href="/services/flatbed-towing/" data-animate="rise-far">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18h-5"/><path d="M15 8h4l3 5v4a1 1 0 0 1-1 1h-1"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg>
        <h3>Flatbed Towing</h3>
        <p>Damage-free transport for AWD and low-clearance vehicles.</p>
        <span>Learn more &rarr;</span>
      </a>
      <a class="rch-svc" href="/services/roadside-assistance/" data-animate="rise-far">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
        <h3>Roadside Assistance</h3>
        <p>Jump starts, fuel delivery, and quick fixes on the spot.</p>
        <span>Learn more &rarr;</span>
      </a>
      <a class="rch-svc" href="/services/accident-towing/" data-animate="rise-far">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <h3>Accident Towing</h3>
        <p>Fast, careful scene clearance coordinated with responders.</p>
        <span>Learn more &rarr;</span>
      </a>
    </div>
  </div>
</section>

<!-- SIBLING AREAS -->
<section class="rch-siblings" aria-labelledby="rch-sib-h">
  <div class="container">
    <div class="rch-siblings-inner" data-animate>
      <div>
        <h2 id="rch-sib-h">Just Outside Richmond?</h2>
        <p>Our coverage doesn't stop at the city line — we run the same 24/7 dispatch next door.</p>
      </div>
      <div class="rch-siblings-links">
        <a href="/areas/rosenberg-tx/" class="btn btn-primary">Towing in Rosenberg &rarr;</a>
        <a href="/areas/sugar-land-tx/" class="btn btn-outline">Towing in Sugar Land &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="rch-cta" aria-labelledby="rch-cta-h">
  <div class="container">
    <h2 id="rch-cta-h">Stuck in Richmond? Your Tow Truck Is Already in Town.</h2>
    <p>Twin Cities Towing INC has answered Richmond's breakdown calls since 2011 — licensed, insured, and parked minutes from wherever you're stranded. Call now for a real ETA and an upfront price.</p>
    <div class="rch-cta-actions">
      <a href="tel:2819351113" class="btn btn-accent btn-lg">Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Estimate</a>
    </div>
    <p style="margin-top:var(--space-8);margin-bottom:0;font-size:var(--font-size-xs);"><em>Last Updated: <?php echo date('F Y'); ?></em></p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
