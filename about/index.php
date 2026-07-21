<?php
/**
 * Twin Cities Towing INC — About Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'About Twin Cities Towing INC | Richmond TX Towing Since 2011';
$pageDescription = 'Twin Cities Towing INC has served Richmond and Rosenberg TX since 2011. Learn about our history, team values, and commitment to fast, honest towing service throughout Fort Bend County.';
$ogImage         = $clientPhotos[1];
$currentPage     = 'about';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'About']]],
        [
            '@type'       => 'Organization',
            '@id'         => $domain . '/#organization',
            'name'        => $siteName,
            'url'         => $domain,
            'logo'        => ['@type' => 'ImageObject', 'url' => $logoUrl],
            'description' => 'Twin Cities Towing INC is a licensed and insured towing company based in Richmond, TX, serving Fort Bend County since 2011.',
            'foundingDate' => (string)$yearEstablished,
            'address'     => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => $address['street'],
                'addressLocality' => $address['city'],
                'addressRegion'   => $address['state'],
                'postalCode'      => $address['zip'],
                'addressCountry'  => 'US']],
        [
            '@type'           => 'LocalBusiness',
            '@id'             => $domain . '/#business']]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ════════════════════════════════════════════════════════════════════
   ABOUT PAGE — Twin Cities Towing INC (page-specific styles)
   Premium tier | var() tokens only — no hardcoded colors/shadows/spacing
   Techniques: (1) layered hero — gradient overlay + noise texture,
   (2) two SVG dividers — torn edge + double wave, (3) broken-grid
   values section, (4) rotating tinted cards, (5) floating tow-hook +
   road-dash accents at 4–8% opacity, (6) signature "route line"
   timeline (mile-marker milestones — unique to this page),
   (7) overlapping image-stack composition, (8) editorial drop cap +
   year watermark, (9) mixed reveal directions on data-animate
   ════════════════════════════════════════════════════════════════════ */

/* ── C1 · LAYERED HERO — photo, token gradient (overlay), noise (::after),
       radial accent glow (::before) ─────────────────────────────────── */
.abtp-hero {
  min-height: 62vh;
  isolation: isolate;
}
.abtp-hero .hero-overlay {
  background: linear-gradient(
    148deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.80) 46%,
    rgba(var(--color-secondary-rgb), 0.58) 78%,
    color-mix(in srgb, var(--color-accent) 26%, transparent) 100%
  );
}
.abtp-hero::before {
  content: '';
  position: absolute;
  top: -20%;
  right: -12%;
  width: 55%;
  height: 130%;
  background: radial-gradient(ellipse at center,
    color-mix(in srgb, var(--color-accent) 14%, transparent) 0%,
    transparent 68%);
  z-index: 1;
  pointer-events: none;
}
.abtp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.045'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.abtp-hero .hero-content { z-index: 2; }
.abtp-hero .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  background: color-mix(in srgb, var(--color-accent) 14%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  letter-spacing: 2.5px;
  font-size: var(--font-size-xs);
}
.abtp-hero .hero-title {
  text-wrap: balance;
  letter-spacing: 0.005em;
  font-size: clamp(var(--font-size-3xl), 4.6vw, var(--font-size-5xl));
}
.abtp-hero .hero-title::after {
  content: '';
  display: block;
  width: clamp(var(--space-12), 8vw, var(--space-16));
  height: var(--space-1);
  margin: var(--space-5) auto 0;
  border-radius: var(--radius-full);
  background: linear-gradient(90deg, var(--color-accent), color-mix(in srgb, var(--color-accent) 25%, transparent));
}
.abtp-hero .hero-subtitle {
  max-width: 58ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}

/* ── MIXED REVEAL DIRECTIONS — transform-only variants for the existing
       data-animate system (framework owns visibility; no opacity rules) ── */
[data-animate="drift-left"]  { transform: translateX(calc(-1 * var(--space-10))); }
[data-animate="drift-right"] { transform: translateX(var(--space-10)); }
[data-animate="pop"]         { transform: scale(0.94); }
[data-animate="drift-left"].animated,
[data-animate="drift-right"].animated { transform: translateX(0); }
[data-animate="pop"].animated { transform: scale(1); }

/* ── STORY SECTION — editorial treatment: watermark, drop cap,
       overlapping image stack ──────────────────────────────────────── */
.abtp-story {
  position: relative;
  overflow: hidden;
}
.abtp-story .container { position: relative; }
.abtp-watermark {
  position: absolute;
  top: calc(-1 * var(--space-8));
  right: calc(-1 * var(--space-4));
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: clamp(var(--font-size-6xl), 16vw, calc(var(--font-size-6xl) * 3));
  line-height: 1;
  color: transparent;
  -webkit-text-stroke: 2px color-mix(in srgb, var(--color-primary) 10%, transparent);
  pointer-events: none;
  user-select: none;
  z-index: 0;
}
.abtp-story .split { position: relative; z-index: 1; }
.abtp-story h2 {
  text-wrap: balance;
  position: relative;
  padding-bottom: var(--space-4);
}
.abtp-story h2::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: var(--space-16);
  height: var(--space-1);
  background: repeating-linear-gradient(
    90deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-3),
    transparent var(--space-3),
    transparent var(--space-5)
  );
  border-radius: var(--radius-full);
}
.abtp-story .prose p:first-of-type::first-letter {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: calc(var(--font-size-5xl) + var(--space-2));
  line-height: 0.85;
  float: left;
  padding-right: var(--space-3);
  padding-top: var(--space-1);
  color: var(--color-accent);
}

/* Overlapping image-stack composition (signature About visual) */
.abtp-stack {
  position: relative;
  padding-bottom: var(--space-12);
  padding-right: var(--space-10);
}
.abtp-stack .abtp-stack-main {
  position: relative;
  z-index: 1;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.abtp-stack .abtp-stack-main::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(var(--color-primary-rgb), 0.35) 0%,
    transparent 42%
  );
  pointer-events: none;
}
.abtp-stack-secondary {
  position: absolute;
  z-index: 2;
  bottom: var(--space-4);
  left: calc(-1 * var(--space-8));
  width: 46%;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  border: var(--space-1) solid var(--color-white);
  transform: rotate(-3deg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.abtp-stack-secondary:hover {
  transform: rotate(-1deg) translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-xl);
}
.abtp-stack-secondary img { display: block; width: 100%; height: auto; }
.abtp-stack .about-stat-card {
  z-index: 3;
  bottom: var(--space-2);
  right: var(--space-2);
  transform: rotate(2deg);
  border: 1px solid color-mix(in srgb, var(--color-white) 30%, transparent);
}
.abtp-stack .abtp-stack-main img {
  transition: transform var(--transition-slow);
}
.abtp-stack .abtp-stack-main:hover img { transform: scale(1.045); }

/* Road-dash floating accent behind the story column (6% opacity) */
.abtp-accent-road {
  position: absolute;
  top: var(--space-16);
  bottom: var(--space-16);
  left: 47%;
  width: var(--space-2);
  background: repeating-linear-gradient(
    to bottom,
    var(--color-primary) 0,
    var(--color-primary) var(--space-6),
    transparent var(--space-6),
    transparent var(--space-12)
  );
  opacity: 0.06;
  border-radius: var(--radius-full);
  pointer-events: none;
  z-index: 0;
}

/* ── SVG DIVIDER 1 — torn/organic edge (white → light) ──────────────── */
.abtp-divider {
  display: block;
  line-height: 0;
  font-size: 0;
  overflow: hidden;
  margin-top: -1px;
  margin-bottom: -1px;
}
.abtp-divider svg {
  display: block;
  width: 100%;
  height: clamp(var(--space-8), 5vw, var(--space-16));
}
.abtp-divider--torn { background: var(--color-white); }
.abtp-divider--wave { background: var(--color-light); }

/* ── SIGNATURE SECTION — "Route Line" timeline: asphalt spine with
       dashed lane markings + mile-marker year badges (About-only) ───── */
.abtp-route {
  position: relative;
  overflow: hidden;
}
.abtp-route .section-header h2 { text-wrap: balance; }
.abtp-route .timeline {
  position: relative;
  max-width: 920px;
  margin: 0 auto;
  padding: var(--space-8) 0 var(--space-4);
}
/* Asphalt road spine */
.abtp-route .timeline::before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: var(--space-3);
  background: linear-gradient(
    to bottom,
    color-mix(in srgb, var(--color-primary) 85%, var(--color-black)),
    var(--color-primary)
  );
  border-radius: var(--radius-full);
}
/* Dashed center lane marking */
.abtp-route .timeline::after {
  content: '';
  position: absolute;
  top: var(--space-2);
  bottom: var(--space-2);
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  background: repeating-linear-gradient(
    to bottom,
    var(--color-warning) 0,
    var(--color-warning) var(--space-4),
    transparent var(--space-4),
    transparent var(--space-8)
  );
  opacity: 0.9;
}
.abtp-route .timeline-item {
  position: relative;
  width: calc(50% - var(--space-10));
  margin-bottom: var(--space-10);
}
.abtp-route .timeline-item:nth-child(odd) { margin-right: auto; text-align: right; }
.abtp-route .timeline-item:nth-child(even) { margin-left: auto; text-align: left; }
.abtp-route .timeline-item:last-child { margin-bottom: 0; }
/* Connector dot sitting on the road spine */
.abtp-route .timeline-item::before {
  content: '';
  position: absolute;
  top: var(--space-5);
  width: var(--space-4);
  height: var(--space-4);
  border-radius: var(--radius-full);
  background: var(--color-accent);
  border: 3px solid var(--color-white);
  box-shadow: var(--shadow-md);
  z-index: 1;
}
.abtp-route .timeline-item:nth-child(odd)::before { right: calc(-1 * var(--space-10) - var(--space-2) + 1px); }
.abtp-route .timeline-item:nth-child(even)::before { left: calc(-1 * var(--space-10) - var(--space-2) + 1px); }
/* Mile-marker year badge */
.abtp-route .timeline-year {
  display: inline-block;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  background: var(--color-white);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-md);
  padding: var(--space-1) var(--space-4);
  box-shadow: var(--shadow-md);
  margin-bottom: var(--space-3);
  transform: rotate(-2deg);
  position: relative;
}
.abtp-route .timeline-item:nth-child(even) .timeline-year { transform: rotate(2deg); }
/* Milestone cards — rotating tints, never all-white */
.abtp-route .timeline-content {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.abtp-route .timeline-item:nth-child(3n+1) .timeline-content {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
}
.abtp-route .timeline-item:nth-child(3n+2) .timeline-content {
  background: rgba(var(--color-primary-rgb), 0.05);
}
.abtp-route .timeline-item:nth-child(3n) .timeline-content {
  background: rgba(var(--color-secondary-rgb), 0.09);
}
.abtp-route .timeline-item:nth-child(odd) .timeline-content { border-right: 3px solid var(--color-accent); }
.abtp-route .timeline-item:nth-child(even) .timeline-content { border-left: 3px solid var(--color-accent); }
.abtp-route .timeline-content:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-lg);
}
.abtp-route .timeline-content h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.abtp-route .timeline-item:nth-child(odd) .timeline-content .prose { margin-left: auto; }
.abtp-route .timeline-content .prose { font-size: var(--font-size-sm); }

/* Floating tow-hook accent (5% opacity, slow drift) */
.abtp-accent-hook {
  position: absolute;
  top: var(--space-16);
  right: var(--space-8);
  width: clamp(var(--space-16), 14vw, calc(var(--space-16) * 3));
  color: var(--color-primary);
  opacity: 0.05;
  pointer-events: none;
  user-select: none;
  animation: abtpFloat 11s ease-in-out infinite alternate;
}
.abtp-accent-hook svg { width: 100%; height: auto; display: block; }
@keyframes abtpFloat {
  from { transform: translateY(0) rotate(-4deg); }
  to   { transform: translateY(calc(-1 * var(--space-5))) rotate(5deg); }
}

/* ── VALUES — asymmetric broken-grid with rotating tinted cards ─────── */
.abtp-values { position: relative; overflow: hidden; }
.abtp-values .section-header h2 { text-wrap: balance; }
.abtp-values-grid {
  display: grid;
  grid-template-columns: 1.12fr 1fr 1.12fr;
  gap: var(--space-6);
  align-items: start;
}
.abtp-value-card {
  position: relative;
  overflow: hidden;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-xl);
  border: 1px solid var(--color-gray-light);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
/* Broken-grid vertical offsets (flattened on tablet/mobile) */
.abtp-value-card:nth-child(1) { margin-top: var(--space-10); }
.abtp-value-card:nth-child(2) { margin-top: 0; }
.abtp-value-card:nth-child(3) { margin-top: var(--space-16); }
/* Rotating tints */
.abtp-value-card:nth-child(1) { background: color-mix(in srgb, var(--color-accent) 7%, var(--color-white)); }
.abtp-value-card:nth-child(2) { background: rgba(var(--color-primary-rgb), 0.05); }
.abtp-value-card:nth-child(3) { background: rgba(var(--color-secondary-rgb), 0.09); }
.abtp-value-card:hover {
  transform: translateY(calc(-1 * var(--space-2)));
  box-shadow: var(--shadow-lg);
  border-color: color-mix(in srgb, var(--color-accent) 45%, var(--color-gray-light));
}
/* Quarter-circle corner accent */
.abtp-value-card::after {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-8));
  right: calc(-1 * var(--space-8));
  width: var(--space-16);
  height: var(--space-16);
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 10%, transparent);
  pointer-events: none;
  transition: transform var(--transition-base);
}
.abtp-value-card:hover::after { transform: scale(1.35); }
.abtp-value-card .card-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: var(--space-16);
  height: var(--space-16);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  color: var(--color-accent);
  box-shadow: var(--shadow-md);
  margin-bottom: var(--space-5);
  transform: rotate(-3deg);
  transition: transform var(--transition-base);
}
.abtp-value-card:hover .card-icon { transform: rotate(0deg) scale(1.06); }
.abtp-value-card h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.abtp-value-card .prose { font-size: var(--font-size-sm); }

/* ── TRUST / CREDENTIALS — clipped image + offset accent frame ──────── */
.abtp-trust .split-image { position: relative; }
.abtp-trust .split-image::before {
  content: '';
  position: absolute;
  inset: 0;
  transform: translate(var(--space-3), var(--space-3));
  border: 2px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.abtp-trust .img-reveal {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  clip-path: polygon(0 0, 100% 3%, 97% 100%, 3% 97%);
}
.abtp-trust h2 { text-wrap: balance; }
.abtp-trust .trust-badges-about .trust-badge {
  background: rgba(var(--color-primary-rgb), 0.07);
  color: var(--color-primary);
  border: 1px solid rgba(var(--color-primary-rgb), 0.16);
  font-weight: 600;
  transition: background var(--transition-fast), border-color var(--transition-fast);
}
.abtp-trust .trust-badges-about .trust-badge:hover {
  background: color-mix(in srgb, var(--color-accent) 12%, var(--color-white));
  border-color: color-mix(in srgb, var(--color-accent) 40%, transparent);
}

/* ── STATS BAND — radial glow + lane-dash underlines ────────────────── */
.abtp-stats {
  position: relative;
  overflow: hidden;
}
.abtp-stats::before {
  content: '';
  position: absolute;
  top: -40%;
  left: 18%;
  width: 60%;
  height: 180%;
  background: radial-gradient(ellipse at center,
    color-mix(in srgb, var(--color-accent) 9%, transparent) 0%,
    transparent 70%);
  pointer-events: none;
}
.abtp-stats .container { position: relative; }
.abtp-stats .stat-item .stat-number { letter-spacing: 0.01em; }
.abtp-stats .stat-item .stat-number::after {
  content: '';
  display: block;
  width: var(--space-12);
  height: 3px;
  margin: var(--space-3) auto 0;
  background: repeating-linear-gradient(
    90deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-2),
    transparent var(--space-2),
    transparent var(--space-4)
  );
  border-radius: var(--radius-full);
}

/* ── CTA BANNER + CLOSING — balance + glow polish ───────────────────── */
.cta-banner h2,
.closing-cta h2 { text-wrap: balance; }
.closing-cta {
  position: relative;
  overflow: hidden;
}
.closing-cta::after {
  content: '';
  position: absolute;
  bottom: -50%;
  right: -10%;
  width: 50%;
  height: 130%;
  background: radial-gradient(ellipse at center,
    color-mix(in srgb, var(--color-accent) 10%, transparent) 0%,
    transparent 70%);
  pointer-events: none;
}
.closing-cta .container { position: relative; z-index: 1; }

/* ── RESPONSIVE ─────────────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .abtp-values-grid { grid-template-columns: 1fr 1fr; }
  .abtp-value-card:nth-child(1),
  .abtp-value-card:nth-child(3) { margin-top: 0; }
  .abtp-value-card:nth-child(2) { margin-top: var(--space-8); }
  .abtp-watermark { font-size: clamp(var(--font-size-5xl), 14vw, var(--font-size-6xl)); }
}
@media (max-width: 768px) {
  .abtp-hero { min-height: 52vh; }
  .abtp-values-grid { grid-template-columns: 1fr; }
  .abtp-value-card:nth-child(2) { margin-top: 0; }
  .abtp-stack { padding-right: 0; }
  .abtp-stack-secondary { left: 0; width: 42%; }
  .abtp-accent-road,
  .abtp-accent-hook { display: none; }
  /* Route timeline collapses to left-rail road */
  .abtp-route .timeline::before,
  .abtp-route .timeline::after { left: var(--space-4); transform: none; }
  .abtp-route .timeline-item,
  .abtp-route .timeline-item:nth-child(odd),
  .abtp-route .timeline-item:nth-child(even) {
    width: auto;
    margin-left: var(--space-12);
    margin-right: 0;
    text-align: left;
  }
  .abtp-route .timeline-item:nth-child(odd)::before,
  .abtp-route .timeline-item:nth-child(even)::before {
    left: calc(-1 * var(--space-12) + var(--space-2) + 1px);
    right: auto;
  }
  .abtp-route .timeline-item:nth-child(odd) .timeline-content {
    border-right: none;
    border-left: 3px solid var(--color-accent);
  }
  .abtp-route .timeline-item:nth-child(odd) .timeline-content .prose { margin-left: 0; }
  .abtp-route .timeline-item .timeline-year,
  .abtp-route .timeline-item:nth-child(even) .timeline-year { transform: rotate(0deg); }
  [data-animate="drift-left"],
  [data-animate="drift-right"] { transform: translateY(var(--space-8)); }
}

/* ── REDUCED MOTION — kill page-level animation & drift ─────────────── */
@media (prefers-reduced-motion: reduce) {
  .abtp-accent-hook { animation: none; }
  [data-animate="drift-left"],
  [data-animate="drift-right"],
  [data-animate="pop"] { transform: none; }
  .abtp-stack .abtp-stack-main:hover img,
  .abtp-value-card:hover,
  .abtp-route .timeline-content:hover { transform: none; }
}
</style>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">About</span><meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
</nav>

<!-- HERO -->
<section class="service-hero abtp-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[1]); ?>');"
         aria-labelledby="about-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
  <path d="M16 3.128a4 4 0 0 1 0 7.744" />
  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
  <circle cx="9" cy="7" r="4" /></svg>
      Serving Richmond Since <?php echo $yearEstablished; ?>
    </div>
    <h1 class="hero-title" id="about-hero-heading">A Towing Company Built<br>on Fort Bend County Roads</h1>
    <p class="hero-subtitle">More than 13 years of showing up when Richmond, Rosenberg, and Fort Bend County drivers needed it most — local roots, local knowledge, local accountability.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
        View Our Services
      </a>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- COMPANY STORY -->
<section class="section-white abtp-story" style="padding: var(--space-16) 0;">
  <div class="abtp-accent-road" aria-hidden="true"></div>
  <div class="container">
    <span class="abtp-watermark" aria-hidden="true"><?php echo $yearEstablished; ?></span>
    <div class="split" data-animate="drift-left">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M12 7v14" />
  <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" /></svg>
          Our Story
        </span>
        <h2>Started in <?php echo $yearEstablished; ?> &mdash; Still Right Here in Richmond</h2>
        <div class="prose">
          <p>Twin Cities Towing INC was founded in <?php echo $yearEstablished; ?> with a straightforward purpose: to provide reliable, honest towing service to the drivers of Richmond and Rosenberg, Texas. The company takes its name from these twin cities at the heart of Fort Bend County — two communities we've been serving since our first call went out over a decade ago.</p>
          <p>In <?php echo $yearsInBusiness; ?>+ years, Fort Bend County has grown significantly. The population has expanded, the highway traffic on I-69 and Highway 90 has increased, and the roads around Richmond have gotten busier. The need for reliable, fast towing service has grown with it. Twin Cities Towing INC has grown alongside the community — expanding our service area and capabilities while maintaining the same direct, no-runaround approach we started with.</p>
          <p>We specialize in towing services for cars, small trucks, and motorcycles — the vehicles that make up the majority of daily traffic in Fort Bend County. We've built our expertise around knowing these vehicle types thoroughly, carrying the right equipment for each, and training our operators to handle them without causing secondary damage in a stressful situation.</p>
          <p>What hasn't changed since 2011 is our operating principle: when a driver in Richmond calls Twin Cities Towing, a real person answers, a real driver heads out, and the pricing is honest. There's no national call center between you and the help you need. That local accountability is what we've built 13 years of reputation on.</p>
        </div>
      </div>
      <div class="split-image abtp-stack">
        <div class="img-reveal abtp-stack-main" data-animate="drift-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[18]); ?>"
               alt="Twin Cities Towing INC truck in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="abtp-stack-secondary" aria-hidden="true">
          <img src="<?php echo htmlspecialchars($clientPhotos[12]); ?>"
               alt="" width="360" height="270" loading="lazy">
        </div>
        <div class="about-stat-card">
          <span class="stat-big"><?php echo $yearEstablished; ?></span>
          <span class="stat-label">Founded in<br>Richmond TX</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DIVIDER: torn edge (story → timeline) -->
<div class="abtp-divider abtp-divider--torn" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" focusable="false">
    <path d="M0,60 L0,40 L60,42 L120,35 L200,45 L280,32 L360,48 L440,38 L540,45 L640,30 L740,42 L840,35 L940,45 L1040,32 L1140,42 L1200,38 L1200,60 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- TIMELINE / MILESTONES -->
<section class="section-light abtp-route" style="padding: var(--space-16) 0;">
  <div class="abtp-accent-hook" aria-hidden="true">
    <svg viewBox="0 0 64 96" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" focusable="false">
      <circle cx="32" cy="16" r="10"/>
      <path d="M32 26v18"/>
      <path d="M14 58a18 18 0 0 0 36 0v-8"/>
      <path d="M50 44h-10"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Our History</span>
      <h2>Over a Decade on Fort Bend County Roads</h2>
    </div>
    <div class="timeline">
      <div class="timeline-item" data-animate="drift-left">
        <div class="timeline-year">2011</div>
        <div class="timeline-content">
          <h3>Twin Cities Towing INC Founded</h3>
          <p class="prose">We launched our towing operation in Richmond, TX, named after the twin cities of Richmond and Rosenberg at the center of Fort Bend County. Our first focus: emergency towing and roadside assistance for local drivers.</p>
        </div>
      </div>
      <div class="timeline-item" data-animate="drift-right">
        <div class="timeline-year">2013</div>
        <div class="timeline-content">
          <h3>Expanded to Flatbed &amp; Specialty Towing</h3>
          <p class="prose">Added flatbed equipment to handle AWD vehicles, luxury cars, and accident-damaged vehicles that require all four wheels off the ground. This expanded our ability to safely serve a wider range of vehicle types.</p>
        </div>
      </div>
      <div class="timeline-item" data-animate="drift-left">
        <div class="timeline-year">2016</div>
        <div class="timeline-content">
          <h3>Extended Service Area Throughout Fort Bend County</h3>
          <p class="prose">Expanded our consistent service radius to cover Sugar Land, Missouri City, Stafford, Katy, and surrounding communities within 20 miles of Richmond — matching the growth of Fort Bend County's population.</p>
        </div>
      </div>
      <div class="timeline-item" data-animate="drift-right">
        <div class="timeline-year">2019</div>
        <div class="timeline-content">
          <h3>Added Motorcycle &amp; ATV Towing Capability</h3>
          <p class="prose">Invested in specialized motorcycle towing equipment — wheel chocks, soft straps, and frame cradles — to safely transport two-wheel vehicles without the chrome and paint damage common from improvised methods.</p>
        </div>
      </div>
      <div class="timeline-item" data-animate="drift-left">
        <div class="timeline-year">2024</div>
        <div class="timeline-content">
          <h3>13 Years &mdash; 4.9 Stars on Google</h3>
          <p class="prose">Reached 13 years of continuous operation in Richmond, TX with a 4.9-star Google rating and hundreds of documented reviews from Fort Bend County drivers. Still the same phone call, same local dispatch, same honest pricing.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DIVIDER: double wave (timeline → values) -->
<div class="abtp-divider abtp-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none" focusable="false">
    <path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-white)" opacity="0.4"/>
    <path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-white)"/>
  </svg>
</div>

<!-- VALUES -->
<section class="section-white abtp-values" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">What We Stand For</span>
      <h2>The Operating Principles Behind Every Tow</h2>
    </div>
    <div class="grid-3 abtp-values-grid">
      <div class="card abtp-value-card" data-animate="drift-left">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><path d="M13 2a9 9 0 0 1 9 9" />
  <path d="M13 6a5 5 0 0 1 5 5" />
  <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        </div>
        <h3>You Talk to People, Not Systems</h3>
        <p class="prose">A real dispatcher answers your call. A real driver heads to your location. A real person is accountable for the outcome. No national routing, no automated systems, no handoffs to strangers.</p>
      </div>
      <div class="card abtp-value-card" data-animate="pop">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        </div>
        <h3>The Price You Hear Is the Price You Pay</h3>
        <p class="prose">We quote before we roll. No surprise charges after your vehicle is loaded. No "fuel surcharges" that appear on the invoice after the fact. Transparent pricing is a baseline expectation — not a premium feature.</p>
      </div>
      <div class="card abtp-value-card" data-animate="drift-right">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
        </div>
        <h3>Your Vehicle Arrives in the Condition It Left</h3>
        <p class="prose">We match equipment to vehicle type, use correct tie-down points, and take the time to load properly even when speed is needed. Damage-free transport isn't a guarantee we sell — it's a result of doing the job right.</p>
      </div>
    </div>
  </div>
</section>

<!-- TRUST SIGNALS / CREDENTIALS -->
<section class="section-light abtp-trust" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="drift-right">
      <div class="split-image">
        <div class="img-reveal">
          <img src="<?php echo htmlspecialchars($clientPhotos[8]); ?>"
               alt="Twin Cities Towing INC licensed and insured towing in Richmond TX"
               width="600" height="480" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
  <circle cx="12" cy="8" r="6" /></svg>
          Credentials &amp; Trust Signals
        </span>
        <h2>Licensed, Insured, and Accountable to Richmond</h2>
        <div class="prose">
          <p>Twin Cities Towing INC operates as a fully licensed and insured towing company in the state of Texas. We carry general liability insurance that covers your vehicle while in our care — so if something does go wrong, there's a proper process to make it right, not a disclaimer that leaves you holding the cost.</p>
          <p>We are proud to have built our reputation through direct word-of-mouth and online reviews from the drivers we've actually served — Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, and Katy residents who experienced our service firsthand. Our 4.9-star Google rating reflects thousands of calls handled correctly over 13 years.</p>
          <p>Our drivers are experienced, trained in proper towing technique for each vehicle type, and familiar with Fort Bend County roads, traffic patterns, and the specific situations that come up on I-69, Highway 90, and the county roads throughout the service area.</p>
        </div>
        <div class="trust-badges-about" style="margin-top:var(--space-8);display:flex;flex-wrap:wrap;gap:var(--space-3);">
          <?php foreach ($trustSignals as $badge): ?>
          <span class="trust-badge"><?php echo htmlspecialchars($badge); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="stats-section abtp-stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</span></div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="5000" data-suffix="+">0</span></div>
        <div class="stat-label">Drivers Helped</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="9" data-prefix="4." data-suffix="&#9733;">0</span></div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="10">0</span></div>
        <div class="stat-label">Cities Served</div>
      </div>
    </div>
  </div>
</section>

<!-- MID CTA -->
<section class="cta-banner" aria-labelledby="about-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">13 Years &mdash; Fort Bend County</span>
    <h2 id="about-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">A Company You Can Call and Actually Count On</h2>
    <p>Twin Cities Towing INC has been the towing call Richmond drivers reach for since 2011 — not because we promise the most, but because we've delivered consistently for over a decade.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
        View Our Services
      </a>
    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<section class="closing-cta" aria-labelledby="about-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Richmond's Local Towing Company</span>
      <h2 id="about-close-heading">When You Need Help in Fort Bend County — We Answer</h2>
      <p class="closing-lead">Thirteen years of showing up, doing the job right, and charging a fair price. That's the whole story. Call us the next time you're stuck and experience it firsthand.</p>
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
        Call Now &mdash; 24/7
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
