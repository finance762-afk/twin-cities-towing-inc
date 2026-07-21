<?php
/**
 * Twin Cities Towing INC — Services Index Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Services Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Full list of towing and roadside services from Twin Cities Towing INC in Richmond, TX — emergency towing, flatbed, roadside assistance, lockouts, motorcycle towing, and more. 24/7.';
$ogImage         = $clientPhotos[0];
$currentPage     = 'services';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services']]],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business']]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   SERVICES HUB — page-specific premium layer
   Theme: "Dispatch Board" — diagonal energy, bento service grid
   Techniques: C1 layered hero, C3 dividers x2 (diagonal + double
   wave), C6 bento/asymmetric grid (signature), tinted card
   rotation, floating accents, C4 radial glows, C5 balance.
   Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---------- T7: typographic balance (every heading) ---------- */
h1, h2, h3, h4 { text-wrap: balance; }

/* ============================================================
   T1 — LAYERED HERO (gradient overlay + noise via ::before/::after)
   ============================================================ */
.hub-hero { isolation: isolate; }
.hub-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 82% 18%, rgba(var(--color-accent-rgb), 0.22) 0%, transparent 46%),
    linear-gradient(150deg,
      rgba(var(--color-primary-rgb), 0.94) 0%,
      rgba(var(--color-primary-rgb), 0.80) 52%,
      rgba(var(--color-secondary-rgb), 0.55) 100%);
  z-index: 1;
}
.hub-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='hn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23hn)' opacity='0.05'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hub-hero .hero-overlay { background: transparent; }
.hub-hero .hero-content { z-index: 2; }
.hub-hero .hero-title {
  font-size: clamp(var(--font-size-4xl), 6vw, var(--font-size-6xl));
  line-height: 1.08;
  letter-spacing: -0.02em;
}
.hub-hero .hero-eyebrow {
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.10);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
}
.hub-hero .hero-subtitle {
  max-width: 60ch;
  margin-left: auto;
  margin-right: auto;
}

/* Ticker: hub accent treatment — dark strip w/ accent top rule */
.hub-ticker.ticker-strip {
  background: var(--color-primary-dark);
  border-top: 2px solid var(--color-accent);
  border-bottom: 1px solid rgba(var(--color-accent-rgb), 0.25);
}

/* ============================================================
   T2 — SVG SECTION DIVIDERS (two distinct styles)
   ============================================================ */
/* Style A: hard diagonal shear (white section -> CTA band) */
.hub-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.hub-divider svg {
  display: block;
  width: 100%;
  height: clamp(var(--space-8), 5vw, var(--space-16));
}
.hub-divider--diagonal {
  background: var(--color-primary);
  color: var(--color-white);
}
/* Style B: double wave (light section -> stats band) */
.hub-divider--waves {
  background: var(--color-primary);
  color: var(--color-light);
}
.hub-divider--waves .wave-soft { opacity: 0.45; }

/* ============================================================
   T3 — SIGNATURE: BENTO SERVICE GRID (asymmetric/broken grid)
   ============================================================ */
.hub-intro { position: relative; overflow: hidden; }
.hub-intro .section-header h2 {
  font-size: clamp(var(--font-size-2xl), 3.4vw, var(--font-size-4xl));
}
.hub-intro .section-header { position: relative; z-index: 1; }

.hub-bento.grid-3 {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: var(--space-5);
  position: relative;
  z-index: 1;
}
.hub-bento > .service-listing-card { grid-column: span 2; }
.hub-bento > .service-listing-card:nth-child(1),
.hub-bento > .service-listing-card:nth-child(7) { grid-column: span 4; }
.hub-bento > .service-listing-card:nth-child(11) { grid-column: span 6; }

/* Card chassis — this page owns these classes */
.hub-bento .service-listing-card {
  display: flex;
  flex-direction: column;
  border-radius: var(--radius-xl);
  overflow: hidden;
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
  position: relative;
}
.hub-bento .service-listing-card:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-lg);
  border-color: rgba(var(--color-accent-rgb), 0.45);
}
.hub-bento .service-listing-img {
  position: relative;
  aspect-ratio: 16 / 8;
  overflow: hidden;
}
.hub-bento .service-listing-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.hub-bento .service-listing-card:hover .service-listing-img img {
  transform: scale(1.05);
}
.hub-bento .service-listing-img::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(var(--color-primary-rgb), 0.35) 0%, transparent 45%);
}
.hub-bento .card-body {
  display: flex;
  flex-direction: column;
  flex: 1;
  gap: var(--space-3);
  padding: var(--space-6);
  position: relative;
}
.hub-bento .card-icon {
  width: var(--space-12);
  height: var(--space-12);
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: var(--radius-md);
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  color: var(--color-accent);
  margin-top: calc(-1 * var(--space-10) - var(--space-2));
  box-shadow: var(--shadow-md);
  border: 1px solid rgba(var(--color-accent-rgb), 0.3);
}
.hub-bento .card-body h3 {
  font-size: var(--font-size-xl);
  margin: 0;
  color: var(--color-primary);
}
.hub-bento .card-body .prose {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
  flex: 1;
}
.hub-bento .card-body .btn {
  align-self: flex-start;
  margin-top: var(--space-2);
}
.hub-bento .card-body .btn svg {
  transition: transform var(--transition-fast);
}
.hub-bento .service-listing-card:hover .card-body .btn svg {
  transform: translateX(var(--space-1));
}
.hub-bento .service-listing-card a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
  border-radius: var(--radius-sm);
}
.hub-bento > .service-listing-card:nth-child(1) .btn-primary,
.hub-bento > .service-listing-card:nth-child(7) .btn-primary {
  background: var(--color-accent);
  color: var(--color-primary-dark);
  border-color: var(--color-accent);
}

/* Featured bento tiles (wide spans) get the dark treatment */
.hub-bento > .service-listing-card:nth-child(1),
.hub-bento > .service-listing-card:nth-child(7) {
  background: linear-gradient(155deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  border-color: rgba(var(--color-accent-rgb), 0.25);
}
.hub-bento > .service-listing-card:nth-child(1)::before,
.hub-bento > .service-listing-card:nth-child(7)::before {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-16));
  right: calc(-1 * var(--space-16));
  width: clamp(var(--space-16), 22vw, calc(var(--space-16) * 4));
  height: clamp(var(--space-16), 22vw, calc(var(--space-16) * 4));
  border-radius: var(--radius-full);
  background: var(--color-accent);
  opacity: 0.08;
  pointer-events: none;
}
.hub-bento > .service-listing-card:nth-child(1) h3,
.hub-bento > .service-listing-card:nth-child(7) h3 { color: var(--color-white); }
.hub-bento > .service-listing-card:nth-child(1) .prose,
.hub-bento > .service-listing-card:nth-child(7) .prose { color: color-mix(in srgb, var(--color-white) 78%, transparent); }
.hub-bento > .service-listing-card:nth-child(1) .service-listing-img,
.hub-bento > .service-listing-card:nth-child(7) .service-listing-img { aspect-ratio: 16 / 6; }

/* Full-width finale tile lays out horizontally */
.hub-bento > .service-listing-card:nth-child(11) {
  flex-direction: row;
  align-items: stretch;
}
.hub-bento > .service-listing-card:nth-child(11) .service-listing-img {
  aspect-ratio: auto;
  flex: 0 0 42%;
}
.hub-bento > .service-listing-card:nth-child(11) .card-body {
  justify-content: center;
}
.hub-bento > .service-listing-card:nth-child(11) .card-icon {
  margin-top: 0;
}

/* ============================================================
   T4 — TINTED CARD BACKGROUNDS (rotating tints, never all-white)
   ============================================================ */
.hub-bento > .service-listing-card:nth-child(6n+2) .card-body {
  background: color-mix(in srgb, var(--color-accent) 7%, var(--color-white));
}
.hub-bento > .service-listing-card:nth-child(6n+3) .card-body {
  background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white));
}
.hub-bento > .service-listing-card:nth-child(6n+4) .card-body {
  background: color-mix(in srgb, var(--color-secondary) 8%, var(--color-white));
}
.hub-bento > .service-listing-card:nth-child(6n+5) .card-body {
  background: color-mix(in srgb, var(--color-warning) 6%, var(--color-white));
}
.hub-bento > .service-listing-card:nth-child(6n+6) .card-body {
  background: color-mix(in srgb, var(--color-accent) 4%, var(--color-light));
}

/* ============================================================
   T5 — FLOATING DECORATIVE ACCENTS (4–8% opacity, animated)
   ============================================================ */
.hub-float {
  position: absolute;
  pointer-events: none;
  z-index: 0;
}
.hub-float--orb {
  top: var(--space-16);
  right: calc(-1 * var(--space-16));
  width: clamp(var(--space-16), 26vw, calc(var(--space-16) * 5));
  aspect-ratio: 1;
  border-radius: var(--radius-full);
  background: radial-gradient(circle, var(--color-accent) 0%, transparent 70%);
  opacity: 0.07;
  animation: hub-drift 14s ease-in-out infinite alternate;
}
.hub-float--ring {
  bottom: var(--space-16);
  left: calc(-1 * var(--space-12));
  width: clamp(var(--space-16), 18vw, calc(var(--space-16) * 3.5));
  aspect-ratio: 1;
  border-radius: var(--radius-full);
  border: var(--space-1) dashed var(--color-primary);
  opacity: 0.05;
  animation: hub-spin 60s linear infinite;
}
@keyframes hub-drift {
  from { transform: translateY(0) scale(1); }
  to   { transform: translateY(var(--space-10)) scale(1.08); }
}
@keyframes hub-spin {
  from { transform: rotate(0deg); }
  to   { transform: rotate(360deg); }
}

/* ============================================================
   T6 — ASYMMETRIC "WHY" SECTION + tinted benefit rails
   ============================================================ */
.hub-why { position: relative; overflow: hidden; }
.hub-why .grid-2 {
  grid-template-columns: 1.15fr 0.85fr;
  align-items: start;
}
.hub-why .benefit-item:nth-child(even) {
  transform: translateY(var(--space-8));
}
.hub-why .benefit-item {
  border-left: var(--space-1) solid transparent;
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  transition: border-color var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
}
.hub-why .benefit-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-accent) 7%, var(--color-white));
  border-left-color: var(--color-accent);
}
.hub-why .benefit-item:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white));
  border-left-color: var(--color-primary);
}
.hub-why .benefit-item:nth-child(4n+3) {
  background: color-mix(in srgb, var(--color-secondary) 9%, var(--color-white));
  border-left-color: var(--color-secondary);
}
.hub-why .benefit-item:nth-child(4n+4) {
  background: color-mix(in srgb, var(--color-warning) 6%, var(--color-white));
  border-left-color: var(--color-warning);
}
.hub-why .benefit-item:hover { box-shadow: var(--shadow-md); }
.hub-why .section-header .eyebrow {
  border-bottom: 2px solid var(--color-accent);
  padding-bottom: var(--space-1);
}

/* ============================================================
   Stats band — radial glow + oversized numerals (C4.1)
   ============================================================ */
.hub-stats { position: relative; overflow: hidden; }
.hub-stats::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 0%, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 62%);
  pointer-events: none;
}
.hub-stats .container { position: relative; }
.hub-stats .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(var(--font-size-4xl), 5vw, var(--font-size-6xl));
  color: var(--color-white);
  line-height: 1;
}
.hub-stats .stat-number span { color: var(--color-accent); }
.hub-stats .stat-label {
  text-transform: uppercase;
  letter-spacing: 0.14em;
  font-size: var(--font-size-xs);
  color: color-mix(in srgb, var(--color-white) 60%, transparent);
  margin-top: var(--space-3);
}
.hub-stats .stat-item {
  border-right: 1px solid color-mix(in srgb, var(--color-white) 12%, transparent);
  padding: var(--space-4);
}
.hub-stats .stat-item:last-child { border-right: none; }

/* Closing CTA — top-arc glow */
.hub-closing { position: relative; overflow: hidden; }
.hub-closing::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 100%, rgba(var(--color-accent-rgb), 0.16) 0%, transparent 60%);
  pointer-events: none;
}
.hub-closing .container { position: relative; }

/* ============================================================
   Responsive collapse + reduced motion
   ============================================================ */
@media (max-width: 1024px) {
  .hub-bento.grid-3 { grid-template-columns: repeat(2, 1fr); }
  .hub-bento > .service-listing-card,
  .hub-bento > .service-listing-card:nth-child(1),
  .hub-bento > .service-listing-card:nth-child(7) { grid-column: span 1; }
  .hub-bento > .service-listing-card:nth-child(11) { grid-column: span 2; }
  .hub-why .grid-2 { grid-template-columns: 1fr; }
  .hub-why .benefit-item:nth-child(even) { transform: none; }
  .hub-stats .stat-item:nth-child(even) { border-right: none; }
}
@media (max-width: 640px) {
  .hub-bento.grid-3 { grid-template-columns: 1fr; gap: var(--space-4); }
  .hub-bento > .service-listing-card:nth-child(11) { grid-column: span 1; flex-direction: column; }
  .hub-bento > .service-listing-card:nth-child(11) .service-listing-img { flex: none; aspect-ratio: 16 / 8; }
  .hub-bento > .service-listing-card:nth-child(1) .service-listing-img,
  .hub-bento > .service-listing-card:nth-child(7) .service-listing-img { aspect-ratio: 16 / 8; }
  .hub-divider svg { height: var(--space-6); }
  .hub-float { display: none; }
  .hub-stats .stat-item { border-right: none; border-bottom: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent); }
  .hub-stats .stat-item:last-child { border-bottom: none; }
}
@media (prefers-reduced-motion: reduce) {
  .hub-float--orb, .hub-float--ring { animation: none; }
  .hub-bento .service-listing-card,
  .hub-bento .service-listing-img img { transition: none; }
}
</style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Services</span><meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
</nav>

<!-- SERVICES HERO BANNER -->
<section class="service-hero hub-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[0]); ?>');"
         aria-labelledby="services-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
  <path d="M15 18H9" />
  <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
  <circle cx="17" cy="18" r="2" />
  <circle cx="7" cy="18" r="2" /></svg>
      Richmond, TX &bull; 13 Years &bull; 24/7
    </div>
    <h1 class="hero-title" id="services-hero-heading">Towing &amp; Roadside Services<br>in Richmond, TX</h1>
    <p class="hero-subtitle">From emergency towing on I-69 at 3am to a locked car in a Sugar Land parking lot — Twin Cities Towing INC handles every situation in Fort Bend County, around the clock.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker-strip hub-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Fast Response Times</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Fast Response Times</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- SERVICES INTRO -->
<section class="section-white hub-intro" style="padding: var(--space-16) 0;">
  <div class="hub-float hub-float--orb" aria-hidden="true"></div>
  <div class="hub-float hub-float--ring" aria-hidden="true"></div>
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
        Complete Towing &amp; Roadside Services
      </span>
      <h2>Everything Fort Bend County Drivers Need — One Company, One Call</h2>
      <p class="prose-centered">Twin Cities Towing INC has operated out of Richmond, TX since 2011, handling every towing and roadside situation the roads of Fort Bend County can produce. Whether you need a heavy commercial vehicle recovery, a specialized flatbed for an AWD car, or a technician to pop your locked door — it's one call, immediate dispatch, and a real ETA before you hang up.</p>
    </div>

    <!-- Services Grid — bento signature layout -->
    <div class="grid-3 hub-bento" data-animate="fade-up" data-p1-dynamic>
      <?php
      $serviceIcons = [
          'truck'           => 'truck',
          'emergency-towing'=> 'alert-triangle',
          'roadside'        => 'tool',
          'car'             => 'car',
          'motorcycle'      => 'activity',
          'flatbed'         => 'minus-square',
          'tire'            => 'disc',
          'lockout'         => 'lock',
          'light'           => 'navigation',
          'accident'        => 'alert-circle',
          'breakdown'       => 'zap-off'];
      foreach ($services as $i => $service):
      $photoIndex = ($i * 2 + 4) % count($clientPhotos);
      ?>
      <div class="card service-listing-card">
        <div class="service-listing-img">
          <img src="<?php echo htmlspecialchars($clientPhotos[$photoIndex]); ?>"
               alt="<?php echo htmlspecialchars($service['name']); ?> in Richmond TX"
               width="400" height="220" loading="lazy">
        </div>
        <div class="card-body">
          <div class="card-icon">
            <?php echo lucide_icon($service['icon'], '', 'width:24px;height:24px;'); ?>
          </div>
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <p class="prose"><?php echo htmlspecialchars($service['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="btn btn-primary btn-sm">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;margin-left:4px;"><path d="M5 12h14" />
  <path d="m12 5 7 7-7 7" /></svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- DIVIDER: diagonal shear into CTA band -->
<div class="hub-divider hub-divider--diagonal" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="currentColor" points="0,0 1200,0 0,60"/></svg>
</div>

<!-- MID-PAGE CTA -->
<section class="cta-banner" aria-labelledby="services-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Need Help Right Now?</span>
    <h2 id="services-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Immediate Dispatch — Any Service, Any Hour</h2>
    <p>Twin Cities Towing INC dispatches within 2 minutes of your call throughout Fort Bend County. No hold music, no national routing — local driver, local dispatcher, real ETA.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section-light hub-why" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What 13 Years in Richmond Looks Like</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        <div>
          <h3>Local Dispatchers Who Know Fort Bend County Roads</h3>
          <p class="prose">When you call Twin Cities Towing, you reach a local dispatcher who knows I-69, Hwy 90, FM 359, and every back road in between. No national call center routing your request to a stranger. Direct local dispatch, every time.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
  <path d="m9 12 2 2 4-4" /></svg>
        <div>
          <h3>Licensed, Insured, and Accountable</h3>
          <p class="prose">Twin Cities Towing INC operates as a licensed and insured towing company in Texas. We're accountable for our work — if there's an issue, you talk to us directly, not a national customer service line.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        <div>
          <h3>Transparent Pricing — Quoted Before Dispatch</h3>
          <p class="prose">We give you a clear price before the truck rolls. No surprise charges once your vehicle is loaded, no fuel surcharges buried in the invoice. What we quote on the call is what you pay.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>24/7 — No Exceptions, No Holidays Off</h3>
          <p class="prose">Vehicles break down at all hours. Our dispatch is live every hour of every day — including Christmas, Thanksgiving, and every other day your car decides it's done cooperating. There are no off-hours at Twin Cities Towing.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DIVIDER: double wave into stats band -->
<div class="hub-divider hub-divider--waves" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none">
    <path class="wave-soft" d="M0,30 C300,70 900,10 1200,40 L1200,0 L0,0 Z" fill="currentColor"/>
    <path d="M0,50 C300,90 900,20 1200,60 L1200,0 L0,0 Z" fill="currentColor"/>
  </svg>
</div>

<!-- STATS -->
<section class="stats-section hub-stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</span></div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="11">0</span></div>
        <div class="stat-label">Services Offered</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="9" data-prefix="4." data-suffix="&#9733;">0</span></div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="20" data-suffix=" mi">0</span></div>
        <div class="stat-label">Service Radius</div>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<section class="closing-cta hub-closing" aria-labelledby="services-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">All Towing &amp; Roadside Services — Richmond TX</span>
      <h2 id="services-close-heading">Whatever the Situation, We Have the Service and the Equipment</h2>
      <p class="closing-lead">Twin Cities Towing INC has handled every towing and roadside scenario Fort Bend County can produce since 2011. Call for immediate dispatch or request online — a real person answers and a real driver heads your way.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7 Dispatch
      </a>
      <a href="/service-area/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        View Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
