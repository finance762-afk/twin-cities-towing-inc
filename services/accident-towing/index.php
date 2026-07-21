<?php
/**
 * Twin Cities Towing INC — Accident Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Accident Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Accident recovery and towing in Richmond, TX available 24/7. Twin Cities Towing INC clears collision scenes safely, coordinates with law enforcement, and delivers to your chosen shop.';
$ogImage         = $clientPhotos[12];
$currentPage     = 'accident-towing';

$serviceFaqs = [
    ['q' => 'Do you coordinate with police at accident scenes in Richmond, TX?', 'a' => 'Yes. We regularly work alongside Fort Bend County Sheriff\'s Office, Richmond Police Department, and TxDOT Traffic Management at accident scenes. We know the protocols for scene clearance, lane re-opening timing, and documentation that law enforcement requires before releasing a vehicle.'],
    ['q' => 'Can you tow a vehicle that is badly damaged and won\'t roll?', 'a' => 'Yes. Accident-damaged vehicles with flat tires, seized wheels, bent frames, or damage preventing them from rolling are loaded via winch onto our flatbed. We assess the damage on arrival and use the appropriate loading method — nothing gets dragged or forced in a way that causes additional damage.'],
    ['q' => 'Will my insurance cover accident towing in Fort Bend County?', 'a' => 'Most auto insurance policies with comprehensive or collision coverage include towing reimbursement. We can provide documentation — invoice, location, and service details — that your insurer may require for the claim. Check your policy\'s roadside assistance or towing benefit for specifics.'],
    ['q' => 'How fast do you respond to accident calls in Richmond, TX?', 'a' => 'Accident towing calls are treated as priority dispatch. We target arrival within 20–40 minutes for most Fort Bend County locations. For highway accidents involving lane blockage, we move even faster given the safety implications. Call immediately after securing the scene and getting clear of traffic.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Accident Towing']]],
        ['@type' => 'Service', '@id' => $domain . '/services/accident-towing/#service',
         'name' => 'Accident Towing', 'url' => $domain . '/services/accident-towing',
         'description' => 'Accident recovery and towing in Richmond TX available 24/7. Works with law enforcement, handles damaged vehicles, serves Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Accident Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ═══════════════════════════════════════════════════════════════
   ACCIDENT TOWING — page-specific premium treatment
   Archetype: "Calm Recovery" — muted layers, soft vignette, slow
   motion, step-by-step guidance rail signature. Reassuring, not loud.
   All values via framework.css tokens. Scope prefix: at-
════════════════════════════════════════════════════════════════ */

/* ---------- C1: Layered hero — soft vignette + dual gradient + noise ---------- */
.at-hero {
  min-height: 58vh;
  min-height: 58svh;
  isolation: isolate;
}
.at-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(
      ellipse at 50% 110%,
      color-mix(in srgb, var(--color-accent) 14%, transparent) 0%,
      transparent 55%
    ),
    linear-gradient(
      150deg,
      rgba(var(--color-primary-rgb), 0.96) 0%,
      rgba(var(--color-primary-rgb), 0.84) 55%,
      rgba(var(--color-secondary-rgb), 0.68) 100%
    );
  z-index: 1;
  pointer-events: none;
}
.at-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='atn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23atn)' opacity='0.035'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.at-hero .hero-content {
  z-index: 2;
}
/* slow, reassuring beacon glow along the hero base */
.at-hero .at-hero-beacon {
  position: absolute;
  left: 50%;
  bottom: calc(-1 * var(--space-10));
  width: clamp(16rem, 44vw, 34rem);
  aspect-ratio: 2.6 / 1;
  transform: translateX(-50%);
  background: radial-gradient(
    ellipse at center,
    color-mix(in srgb, var(--color-accent) 32%, transparent) 0%,
    transparent 70%
  );
  z-index: 1;
  pointer-events: none;
  animation: at-beacon 7s ease-in-out infinite;
}
@keyframes at-beacon {
  0%, 100% { opacity: 0.45; }
  50%      { opacity: 0.9; }
}
.at-hero .hero-title {
  text-wrap: balance;
  font-weight: 400;
}
.at-hero .hero-subtitle {
  max-width: 58ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
  line-height: 1.75;
}
.at-hero .hero-eyebrow {
  background: rgba(var(--color-primary-rgb), 0.45);
  border-color: color-mix(in srgb, var(--color-white) 30%, transparent);
  color: var(--color-white);
  letter-spacing: 0.28em;
}

/* ---------- Ticker restyle: subdued steel-blue band ---------- */
.at-ticker {
  background: var(--color-secondary);
  border-top: 1px solid color-mix(in srgb, var(--color-white) 20%, transparent);
  border-bottom: 1px solid color-mix(in srgb, var(--color-white) 20%, transparent);
}
.at-ticker .ticker-track {
  animation-duration: 44s;
}
.at-ticker .ticker-sep {
  color: color-mix(in srgb, var(--color-white) 55%, transparent);
}

/* ---------- Detail split: soft editorial column ---------- */
.at-detail .split-content h2 {
  text-wrap: balance;
  line-height: 1.25;
}
.at-detail .split-content .prose > p:first-of-type {
  font-size: var(--font-size-lg);
  line-height: 1.8;
  color: var(--color-gray-dark);
}
.at-detail .img-reveal {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  position: relative;
}
/* calm duotone wash over the scene photo */
.at-detail .img-reveal::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(var(--color-primary-rgb), 0.35) 0%,
    transparent 55%
  );
  pointer-events: none;
}
.at-detail .img-reveal img {
  filter: saturate(0.88);
}
.at-detail .service-sidebar-card {
  background: var(--color-white);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.25);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-card);
  position: relative;
  overflow: hidden;
}
.at-detail .service-sidebar-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: var(--space-1);
  background: linear-gradient(
    90deg,
    var(--color-secondary) 0%,
    var(--color-accent) 100%
  );
}
.at-detail .service-sidebar-card h4 {
  color: var(--color-secondary);
  letter-spacing: 0.04em;
}

/* ---------- Answer block: editorial pull-quote treatment ---------- */
.at-detail .answer-block {
  position: relative;
  background: transparent;
  border-left: var(--space-1) solid var(--color-accent);
  padding: var(--space-6) var(--space-10);
  margin-top: var(--space-12);
  max-width: 75ch;
  margin-left: auto;
  margin-right: auto;
}
.at-detail .answer-block::before {
  content: '\201C';
  position: absolute;
  top: calc(-1 * var(--space-4));
  left: var(--space-4);
  font-family: var(--font-heading);
  font-size: var(--font-size-6xl);
  line-height: 1;
  color: color-mix(in srgb, var(--color-accent) 30%, transparent);
  pointer-events: none;
}
.at-detail .answer-block h2 {
  font-size: var(--font-size-2xl);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.at-detail .answer-block p {
  margin-bottom: 0;
  font-size: var(--font-size-lg);
  line-height: 1.75;
  color: var(--color-gray-dark);
}

/* ---------- C3 dividers (2 styles: gentle wave + soft parallelograms) ---------- */
.at-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: var(--space-12);
}
.at-divider svg {
  display: block;
  width: 100%;
  height: 100%;
}
.at-divider--wave {
  background: var(--color-white);
}
.at-divider--plates {
  background: color-mix(in srgb, var(--color-accent) 4%, var(--color-light));
}
/* the why-grid section sits on white so the plates divider reads */
.at-why {
  background: var(--color-white);
}

/* ---------- C7 SIGNATURE: calm step-by-step guidance rail ---------- */
.at-guide {
  position: relative;
  background: linear-gradient(
    180deg,
    var(--color-light) 0%,
    color-mix(in srgb, var(--color-accent) 4%, var(--color-light)) 100%
  );
  padding: var(--space-16) 0;
  overflow: hidden;
}
.at-guide-eyebrow {
  display: block;
  text-align: center;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.26em;
  color: var(--color-secondary);
  margin-bottom: var(--space-12);
}
.at-guide-rail {
  position: relative;
  max-width: var(--bp-tablet);
  margin: 0 auto;
  list-style: none;
  padding: 0;
}
/* the continuous calm rail line */
.at-guide-rail::before {
  content: '';
  position: absolute;
  left: var(--space-6);
  top: var(--space-6);
  bottom: var(--space-6);
  width: 2px;
  background: linear-gradient(
    180deg,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 35%, transparent) 100%
  );
  border-radius: var(--radius-full);
}
.at-guide-step {
  position: relative;
  padding: var(--space-5) 0 var(--space-5) var(--space-16);
}
.at-guide-step-dot {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  width: var(--space-12);
  height: var(--space-12);
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 2px solid var(--color-accent);
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-base);
  color: var(--color-primary);
  z-index: 1;
}
.at-guide-step-body {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-8);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.15);
  transition: box-shadow var(--transition-slow), transform var(--transition-slow);
}
.at-guide-step:hover .at-guide-step-body {
  box-shadow: var(--shadow-md);
  transform: translateX(var(--space-2));
}
.at-guide-step-body strong {
  display: block;
  font-family: var(--font-heading);
  font-weight: 600;
  color: var(--color-dark);
  margin-bottom: var(--space-1);
  text-wrap: balance;
}
.at-guide-step-body span {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  line-height: 1.7;
}
/* alternate steps drift right for a gentle broken rhythm */
.at-guide-step:nth-child(even) .at-guide-step-body {
  margin-left: var(--space-8);
  background: color-mix(in srgb, var(--color-accent) 5%, var(--color-white));
}

/* ---------- C6: asymmetric masonry benefit grid w/ full-width lead ---------- */
.at-why .grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  align-items: stretch;
}
/* first card becomes a full-width highlight banner */
.at-why .benefit-item:first-child {
  grid-column: 1 / -1;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-rgb), 0.07) 0%,
    color-mix(in srgb, var(--color-accent) 6%, var(--color-white)) 100%
  );
  border-left: var(--space-1) solid var(--color-accent);
}
.at-why .benefit-item {
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.14);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-slow);
}
.at-why .benefit-item:hover {
  box-shadow: var(--shadow-md);
}
/* muted rotating tints on the remaining cells */
.at-why .benefit-item:nth-child(2) {
  background: rgba(var(--color-secondary-rgb), 0.07);
  transform: translateY(var(--space-4));
}
.at-why .benefit-item:nth-child(3) {
  background: var(--color-white);
}
.at-why .benefit-item:nth-child(4) {
  background: rgba(var(--color-primary-rgb), 0.05);
  transform: translateY(calc(-1 * var(--space-4)));
}
.at-why .grid-2 {
  padding-top: var(--space-4);
  padding-bottom: var(--space-6);
}
.at-why .benefit-item h3 {
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.at-why .section-header h2 {
  text-wrap: balance;
}

/* ---------- FAQ: quiet file-folder cards ---------- */
.at-faq .faq-item {
  border-radius: var(--radius-sm) var(--radius-xl) var(--radius-xl) var(--radius-xl);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.18);
}
.at-faq .faq-item:nth-child(odd) {
  background: color-mix(in srgb, var(--color-secondary) 6%, var(--color-white));
}
.at-faq .faq-item:nth-child(even) {
  background: color-mix(in srgb, var(--color-accent) 5%, var(--color-white));
}
.at-faq .faq-icon {
  background: var(--color-secondary);
}
.at-faq .faq-item h3 {
  text-wrap: balance;
}
.at-faq .section-header h2 {
  text-wrap: balance;
}

/* ---------- Floating decorative accent: slow soft cross beacon ---------- */
.at-float-cross {
  position: absolute;
  top: var(--space-16);
  right: 6%;
  width: clamp(7rem, 13vw, 12rem);
  aspect-ratio: 1;
  opacity: 0.05;
  pointer-events: none;
  z-index: 0;
  background:
    linear-gradient(var(--color-secondary), var(--color-secondary)),
    linear-gradient(var(--color-secondary), var(--color-secondary));
  background-size: 100% 34%, 34% 100%;
  background-position: center, center;
  background-repeat: no-repeat;
  border-radius: var(--radius-lg);
  animation: at-float 16s ease-in-out infinite alternate;
}
@keyframes at-float {
  from { transform: translateY(0) scale(1); }
  to   { transform: translateY(var(--space-10)) scale(1.06); }
}
.at-detail,
.at-why {
  position: relative;
  overflow: hidden;
}
.at-detail .container,
.at-why .container {
  position: relative;
  z-index: 1;
}

/* ---------- CTA banner variant: quiet dusk, no hard gradient stop ---------- */
.at-cta {
  background: linear-gradient(
    135deg,
    var(--color-primary-dark) 0%,
    var(--color-primary) 60%,
    var(--color-secondary) 100%
  );
}
.at-cta h2 {
  text-wrap: balance;
}
.at-cta .eyebrow-label {
  letter-spacing: 0.3em;
}

/* ---------- Optional JS-gated reveal polish (fail-open) ---------- */
html.js-anim .at-guide-step .at-guide-step-body {
  transition:
    box-shadow var(--transition-slow),
    transform var(--transition-slow),
    opacity var(--transition-slow);
}
html.js-anim .at-guide-step:nth-child(2) .at-guide-step-body { transition-delay: 0.09s; }
html.js-anim .at-guide-step:nth-child(3) .at-guide-step-body { transition-delay: 0.18s; }
html.js-anim .at-guide-step:nth-child(4) .at-guide-step-body { transition-delay: 0.27s; }

/* ---------- Responsive ---------- */
@media (max-width: 768px) {
  .at-why .grid-2 {
    grid-template-columns: 1fr;
  }
  .at-why .benefit-item:nth-child(2),
  .at-why .benefit-item:nth-child(4) {
    transform: none;
  }
  .at-guide-step:nth-child(even) .at-guide-step-body {
    margin-left: 0;
  }
  .at-guide-step {
    padding-left: var(--space-16);
  }
  .at-float-cross {
    display: none;
  }
  .at-hero {
    min-height: 50vh;
    min-height: 50svh;
  }
  .at-hero .at-hero-beacon {
    display: none;
  }
}
@media (max-width: 480px) {
  .at-guide-step {
    padding-left: var(--space-12);
  }
  .at-guide-step-dot {
    width: var(--space-10);
    height: var(--space-10);
  }
  .at-guide-rail::before {
    left: var(--space-5);
  }
  .at-detail .answer-block {
    padding: var(--space-5) var(--space-6);
  }
  .at-guide-step-body {
    padding: var(--space-5);
  }
}

/* ---------- Reduced motion: stillness is the calmer default ---------- */
@media (prefers-reduced-motion: reduce) {
  .at-hero .at-hero-beacon,
  .at-float-cross {
    animation: none;
  }
  .at-guide-step .at-guide-step-body,
  .at-guide-step:hover .at-guide-step-body {
    transition: none;
    transform: none;
  }
  html.js-anim .at-guide-step .at-guide-step-body {
    transition: none;
  }
  .at-why .benefit-item {
    transition: none;
  }
}
</style>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services/" itemprop="item"><span itemprop="name">Services</span></a><meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Accident Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero at-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[12]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="at-hero-beacon" aria-hidden="true"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><circle cx="12" cy="12" r="10" />
  <line x1="12" x2="12" y1="8" y2="12" />
  <line x1="12" x2="12.01" y1="16" y2="16" /></svg>
      Priority Response &bull; Scene Coordination &bull; 24/7
    </div>
    <h1 class="hero-title" id="service-hero-heading">Accident Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Collision vehicle recovery in Fort Bend County — fast clearance, coordination with law enforcement, and flatbed transport for damaged vehicles that can't roll.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Accident Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<div class="ticker-strip at-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#128693;&nbsp; Accident Scene Recovery 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Coordinates with Law Enforcement</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Flatbed for Damaged Vehicles</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; Priority Dispatch — 20–40 Min</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128693;&nbsp; Accident Scene Recovery 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Coordinates with Law Enforcement</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Flatbed for Damaged Vehicles</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; Priority Dispatch — 20–40 Min</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white at-detail" style="padding: var(--space-16) 0;">
  <div class="at-float-cross" aria-hidden="true"></div>
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><circle cx="12" cy="12" r="10" />
  <line x1="12" x2="12" y1="8" y2="12" />
  <line x1="12" x2="12.01" y1="16" y2="16" /></svg>
          Accident Towing in Richmond TX
        </span>
        <h2>After the Collision — We Handle the Vehicle, You Focus on What Matters</h2>
        <div class="prose">
          <p>A vehicle accident is already a stressful situation. Figuring out how to get a damaged, possibly non-rolling car off the roadway shouldn't add to that stress. Twin Cities Towing INC responds to accident scenes throughout Richmond and Fort Bend County 24 hours a day, with the experience and equipment to handle damaged vehicle recovery correctly — from coordinating with first responders to loading a totaled car without causing additional damage.</p>
          <p>Accident-damaged vehicles present challenges that standard breakdown tows do not. Wheels may be seized, tires blown, frames bent, or doors jammed — all of which prevent the vehicle from rolling onto a wheel-lift normally. Our flatbeds are equipped with winches that pull non-rolling vehicles up the deck safely, without dragging or forcing anything that would worsen the damage or create a liability concern at the scene.</p>
          <p>We work regularly with Fort Bend County law enforcement, including the Sheriff's Office and Richmond Police Department. We understand scene clearance protocols, know what documentation officers need before releasing a vehicle, and operate within the timing constraints that apply to highway lane blockage situations. Getting the scene cleared safely and quickly is something both we and the responding officers share as a priority.</p>
          <p>After clearing the scene, we deliver to whatever body shop, dealership, or insurance-designated facility you choose. We provide documentation — invoice, service details, pickup/dropoff locations — that your insurance company may request when processing your claim. Call us immediately after securing your own safety following an accident — the faster we respond, the faster the road opens.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[15]); ?>"
               alt="Accident vehicle being recovered by Twin Cities Towing in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Accident Towing Includes:</h4>
          <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Priority dispatch — 24/7</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Winch loading for non-rolling vehicles</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Law enforcement coordination</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Insurance documentation provided</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Deliver to any body shop or facility</li>
          </ul>
          <a href="/contact/" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Accident Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What should I do after a car accident in Richmond, TX while waiting for the tow?</h2>
      <p>Move to safety away from traffic, call 911 if anyone is injured, document the scene with photos, and then call Twin Cities Towing INC for priority dispatch. Stay clear of the vehicle and traffic lanes until our driver arrives and secures the scene.</p>
    </div>
  </div>
</section>

<!-- Divider: gentle wave into the guidance rail -->
<div class="at-divider at-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <path d="M0,45 C350,75 850,15 1200,45 L1200,80 L0,80 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     SIGNATURE: CALM STEP-BY-STEP GUIDANCE RAIL
════════════════════════════════════════════════════════════════ -->
<section class="at-guide" aria-label="What to do after an accident, step by step">
  <div class="container">
    <span class="at-guide-eyebrow">If You've Just Been in an Accident</span>
    <ol class="at-guide-rail">
      <li class="at-guide-step">
        <span class="at-guide-step-dot" aria-hidden="true">1</span>
        <div class="at-guide-step-body">
          <strong>Move to safety</strong>
          <span>Get yourself and passengers away from traffic. Stay clear of the vehicle and traffic lanes.</span>
        </div>
      </li>
      <li class="at-guide-step">
        <span class="at-guide-step-dot" aria-hidden="true">2</span>
        <div class="at-guide-step-body">
          <strong>Call 911 if anyone is injured</strong>
          <span>Emergency responders come first — vehicle recovery waits until everyone is safe.</span>
        </div>
      </li>
      <li class="at-guide-step">
        <span class="at-guide-step-dot" aria-hidden="true">3</span>
        <div class="at-guide-step-body">
          <strong>Document the scene with photos</strong>
          <span>Photos of the vehicles and scene help your insurance claim later.</span>
        </div>
      </li>
      <li class="at-guide-step">
        <span class="at-guide-step-dot" aria-hidden="true">4</span>
        <div class="at-guide-step-body">
          <strong>Call Twin Cities Towing INC for priority dispatch</strong>
          <span>We target 20&ndash;40 minute arrival throughout Fort Bend County and handle the vehicle from there.</span>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- Divider: soft stacked parallelograms out of the guidance rail -->
<div class="at-divider at-divider--plates" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <polygon fill="var(--color-white)" opacity="0.45" points="0,25 1200,45 1200,80 0,80"/>
    <polygon fill="var(--color-white)" points="0,50 1200,25 1200,80 0,80"/>
  </svg>
</div>

<section class="section-light at-why" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Accident Recovery Done Right in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
        <div>
          <h3>Scene Safety Is the First Priority</h3>
          <p class="prose">Our drivers set up warning equipment on arrival, position the truck to protect you from passing traffic, and work with law enforcement to control the scene before touching your vehicle. Moving fast matters — but not faster than scene safety allows.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M12 6v16" />
  <path d="m19 13 2-1a9 9 0 0 1-18 0l2 1" />
  <path d="M9 11h6" />
  <circle cx="12" cy="4" r="2" /></svg>
        <div>
          <h3>Winch Loading for Non-Rolling Vehicles</h3>
          <p class="prose">Crash-damaged vehicles often can't roll. Our flatbeds carry winches designed to pull them up the deck safely. No dragging on the pavement, no forcing bent wheels — just a controlled, careful load that doesn't add to the damage.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        <div>
          <h3>Insurance Documentation Provided</h3>
          <p class="prose">We provide a detailed invoice with service information, pickup and dropoff locations, and contact details that your insurance company may need when processing your claim. We've been through this process with dozens of insurers — we know what they ask for.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>Priority Response — Any Hour</h3>
          <p class="prose">Accident calls jump to front-of-queue dispatch. When lanes are blocked and first responders are waiting on a tow to clear the scene, minutes matter. We target 20–40 minute arrival on all accident calls throughout Fort Bend County.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner at-cta" aria-labelledby="acc-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Accident Scene in Fort Bend County?</span>
    <h2 id="acc-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Call Immediately — Priority Dispatch Gets Us There Fast</h2>
    <p>Twin Cities Towing INC prioritizes accident recovery calls throughout Richmond and Fort Bend County. 24/7, every day — scene clearance and safe vehicle transport when you need it most.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Accident Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light at-faq" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Accident Towing FAQs &mdash; Richmond, TX</h2>
    </div>
    <div class="faq-grid" data-animate="fade-up" data-p1-dynamic>
      <?php foreach ($serviceFaqs as $faq): ?>
      <div class="faq-item">
        <div class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:20px;height:20px;"><circle cx="12" cy="12" r="10" />
  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
  <path d="M12 17h.01" /></svg></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="closing-cta" aria-labelledby="acc-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Accident Towing &mdash; Richmond TX</span>
      <h2 id="acc-close-heading">Scene Cleared, Vehicle Recovered — The Rest Is Paperwork</h2>
      <p class="closing-lead">Twin Cities Towing INC handles accident scenes throughout Fort Bend County with 13 years of experience working alongside law enforcement and insurance processes. Call us immediately after securing your safety — we handle everything from there.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get Help Now
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
        All Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
