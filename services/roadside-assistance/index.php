<?php
/**
 * Twin Cities Towing INC — Roadside Assistance
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Roadside Assistance Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Complete roadside assistance in Richmond, TX — jump starts, fuel delivery, flat tire changes, and on-site help. Twin Cities Towing INC gets you moving without a tow when possible.';
$ogImage         = $clientPhotos[6];
$currentPage     = 'roadside-assistance';

$serviceFaqs = [
    ['q' => 'What roadside assistance services does Twin Cities Towing offer in Richmond, TX?', 'a' => 'We provide jump starts for dead batteries, emergency fuel delivery, flat tire changes (using your spare), and on-site diagnostics for common breakdown situations. If the issue can be resolved without a tow, we\'ll do that first. When a tow is necessary, we handle that too — one call covers both scenarios.'],
    ['q' => 'Can you deliver fuel if I run out of gas in Richmond?', 'a' => 'Yes. We deliver enough emergency fuel to get you to the nearest station — typically 1–2 gallons. This service is available throughout Fort Bend County 24/7. Call with your location and we\'ll dispatch with fuel right away.'],
    ['q' => 'How long does a roadside jump start take?', 'a' => 'Once we arrive — usually 20–35 minutes in the Richmond area — a jump start takes about 10–15 minutes from hookup to engine running. If your battery is beyond jumping, we can tow you to your preferred shop right then.'],
    ['q' => 'What if the roadside fix doesn\'t work?', 'a' => 'If we attempt a roadside fix and your vehicle still won\'t operate safely, we transition straight to a tow — same driver, same call, no extra wait. You don\'t pay twice for the dispatch. We get you to your destination one way or another.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Roadside Assistance']]],
        ['@type' => 'Service', '@id' => $domain . '/services/roadside-assistance/#service',
         'name' => 'Roadside Assistance', 'url' => $domain . '/services/roadside-assistance',
         'description' => 'Complete roadside assistance in Richmond TX including jump starts, fuel delivery, and flat tire changes. Available 24/7.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Roadside Assistance'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ═══════════════════════════════════════════════════════════════
   ROADSIDE ASSISTANCE — page-specific premium treatment
   Archetype: "Service Counter" — dashed route lines, ticket cards,
   service-menu checklist panel signature, soft drifting blobs.
   All values via framework.css tokens. Scope prefix: ra-
════════════════════════════════════════════════════════════════ */

/* ---------- C1: Layered hero — vertical dusk gradient + noise ---------- */
.ra-hero {
  min-height: 60vh;
  min-height: 60svh;
  isolation: isolate;
}
.ra-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    180deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.70) 55%,
    rgba(var(--color-secondary-rgb), 0.55) 82%,
    color-mix(in srgb, var(--color-accent) 26%, transparent) 100%
  );
  z-index: 1;
  pointer-events: none;
}
.ra-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='ran'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23ran)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.ra-hero .hero-content {
  z-index: 2;
}
/* dashed roadside "route line" running across the hero base */
.ra-hero .ra-hero-route {
  position: absolute;
  left: 0;
  right: 0;
  bottom: var(--space-8);
  height: var(--space-1);
  z-index: 2;
  background: repeating-linear-gradient(
    90deg,
    color-mix(in srgb, var(--color-white) 75%, transparent) 0,
    color-mix(in srgb, var(--color-white) 75%, transparent) var(--space-8),
    transparent var(--space-8),
    transparent var(--space-12)
  );
  opacity: 0.45;
  pointer-events: none;
  animation: ra-route-move 16s linear infinite;
}
@keyframes ra-route-move {
  from { background-position: 0 0; }
  to   { background-position: var(--space-16) 0; }
}
.ra-hero .hero-title {
  text-wrap: balance;
}
.ra-hero .hero-subtitle {
  max-width: 56ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}
.ra-hero .hero-eyebrow {
  background: color-mix(in srgb, var(--color-white) 10%, transparent);
  border-style: dashed;
  border-color: color-mix(in srgb, var(--color-white) 40%, transparent);
  color: var(--color-white);
}

/* ---------- Ticker restyle: emergency amber pulse edge ---------- */
.ra-ticker {
  background: linear-gradient(
    90deg,
    var(--color-primary) 0%,
    var(--color-secondary) 100%
  );
  border-bottom: var(--space-1) solid var(--color-warning);
}
.ra-ticker .ticker-sep {
  color: var(--color-warning);
}

/* ---------- C6: asymmetric detail split (65/35 rebalance) ---------- */
.ra-detail .split {
  display: grid;
  grid-template-columns: 0.85fr 1.25fr;
  gap: var(--space-12);
  align-items: start;
}
.ra-detail .split-content h2 {
  text-wrap: balance;
  padding-left: var(--space-6);
  border-left: var(--space-1) dashed color-mix(in srgb, var(--color-accent) 55%, transparent);
}
.ra-detail .split-content .prose > p:first-of-type {
  font-size: var(--font-size-lg);
  color: var(--color-gray-dark);
}
.ra-detail .img-reveal {
  border-radius: var(--radius-xl) var(--radius-sm) var(--radius-xl) var(--radius-sm);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  position: relative;
}
.ra-detail .img-reveal::before {
  content: '';
  position: absolute;
  inset: var(--space-3);
  border: 1px dashed color-mix(in srgb, var(--color-white) 65%, transparent);
  border-radius: var(--radius-lg) var(--radius-sm) var(--radius-lg) var(--radius-sm);
  z-index: 1;
  pointer-events: none;
}
.ra-detail .split-image {
  position: sticky;
  top: var(--space-16);
}

/* ---------- Answer block: torn service ticket, offset overlap ---------- */
.ra-detail .answer-block {
  position: relative;
  background: color-mix(in srgb, var(--color-success) 7%, var(--color-white));
  border: 1px dashed color-mix(in srgb, var(--color-success) 45%, transparent);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-10);
  margin-top: var(--space-12);
  margin-left: var(--space-8);
  transform: rotate(-0.6deg);
  box-shadow: var(--shadow-card);
}
.ra-detail .answer-block::before,
.ra-detail .answer-block::after {
  content: '';
  position: absolute;
  top: 50%;
  width: var(--space-6);
  height: var(--space-6);
  background: var(--color-white);
  border-radius: var(--radius-full);
  transform: translateY(-50%);
}
.ra-detail .answer-block::before {
  left: calc(-1 * var(--space-3));
  border-right: 1px dashed color-mix(in srgb, var(--color-success) 45%, transparent);
}
.ra-detail .answer-block::after {
  right: calc(-1 * var(--space-3));
  border-left: 1px dashed color-mix(in srgb, var(--color-success) 45%, transparent);
}
.ra-detail .answer-block h2 {
  font-size: var(--font-size-2xl);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.ra-detail .answer-block p {
  margin-bottom: 0;
}

/* ---------- C3 dividers (2 styles: double wave + diagonal) ---------- */
.ra-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: var(--space-16);
}
.ra-divider svg {
  display: block;
  width: 100%;
  height: 100%;
}
.ra-divider--doublewave {
  background: var(--color-white);
}
.ra-divider--diagonal {
  background: var(--color-light);
  height: var(--space-12);
}

/* ---------- C7 SIGNATURE: service-menu checklist panel ---------- */
.ra-menu {
  position: relative;
  overflow: hidden;
}
.ra-menu-panel {
  max-width: var(--bp-desktop);
  margin: 0 auto;
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
/* panel header bar — dispatch-counter look */
.ra-menu-panel::before {
  content: '';
  display: block;
  height: var(--space-3);
  background: repeating-linear-gradient(
    90deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-10),
    var(--color-primary) var(--space-10),
    var(--color-primary) var(--space-16)
  );
}
.ra-menu-panel .grid-3 {
  display: grid;
  grid-template-columns: 1fr;
  gap: 0;
  padding: var(--space-6) var(--space-10);
}
/* each card becomes a checklist menu row */
.ra-menu-panel .card {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-6);
  align-items: start;
  padding: var(--space-8) var(--space-4);
  background: transparent;
  box-shadow: none;
  border-radius: 0;
  border-bottom: 1px dashed rgba(var(--color-primary-rgb), 0.18);
  position: relative;
  transition: background var(--transition-base), transform var(--transition-base);
}
.ra-menu-panel .card:last-child {
  border-bottom: none;
}
.ra-menu-panel .card:hover {
  background: color-mix(in srgb, var(--color-accent) 5%, transparent);
  transform: translateX(var(--space-2));
}
.ra-menu-panel .card .card-icon {
  width: var(--space-16);
  height: var(--space-16);
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-white);
  box-shadow: var(--shadow-md);
  flex-shrink: 0;
}
/* rotating tinted icon chips per row */
.ra-menu-panel .card:nth-child(3n+1) .card-icon {
  background: linear-gradient(135deg, var(--color-warning), color-mix(in srgb, var(--color-warning) 60%, var(--color-primary)));
}
.ra-menu-panel .card:nth-child(3n+2) .card-icon {
  background: linear-gradient(135deg, var(--color-accent), color-mix(in srgb, var(--color-accent) 55%, var(--color-primary)));
}
.ra-menu-panel .card:nth-child(3n+3) .card-icon {
  background: linear-gradient(135deg, var(--color-success), color-mix(in srgb, var(--color-success) 55%, var(--color-primary)));
}
.ra-menu-panel .card h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-2);
  text-wrap: balance;
  position: relative;
  display: inline-block;
}
/* checklist tick before each service name */
.ra-menu-panel .card h3::before {
  content: '\2713';
  display: inline-block;
  margin-right: var(--space-3);
  color: var(--color-success);
  font-weight: 700;
}
.ra-menu-panel .card p {
  margin-bottom: 0;
  color: var(--color-gray);
  max-width: 65ch;
}
/* dotted route leader between icon and text, menu-style */
.ra-menu-panel .card > div:last-child {
  position: relative;
  padding-top: var(--space-2);
}
.ra-menu .section-header h2 {
  text-wrap: balance;
}
.ra-menu .section-header .eyebrow {
  color: var(--color-success);
}

/* ---------- Tinted FAQ cards — service-ticket rotation ---------- */
.ra-faq .faq-item {
  border-radius: var(--radius-lg);
  border: 1px solid transparent;
  position: relative;
}
.ra-faq .faq-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
  border-color: color-mix(in srgb, var(--color-accent) 22%, transparent);
}
.ra-faq .faq-item:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-warning) 7%, var(--color-white));
  border-color: color-mix(in srgb, var(--color-warning) 25%, transparent);
}
.ra-faq .faq-item:nth-child(4n+3) {
  background: color-mix(in srgb, var(--color-success) 7%, var(--color-white));
  border-color: color-mix(in srgb, var(--color-success) 25%, transparent);
}
.ra-faq .faq-item:nth-child(4n+4) {
  background: rgba(var(--color-primary-rgb), 0.05);
  border-color: rgba(var(--color-primary-rgb), 0.15);
}
.ra-faq .faq-icon {
  border-radius: var(--radius-md);
  transform: rotate(45deg);
}
.ra-faq .faq-icon svg {
  transform: rotate(-45deg);
}
.ra-faq .faq-item h3 {
  text-wrap: balance;
}
.ra-faq .section-header h2 {
  text-wrap: balance;
}

/* ---------- Floating decorative accents: drifting soft blobs ---------- */
.ra-blob {
  position: absolute;
  border-radius: var(--radius-full);
  pointer-events: none;
  z-index: 0;
  opacity: 0.06;
}
.ra-blob--one {
  top: var(--space-10);
  left: 2%;
  width: clamp(10rem, 20vw, 18rem);
  aspect-ratio: 1;
  background: radial-gradient(circle at 35% 35%, var(--color-accent) 0%, transparent 70%);
  animation: ra-drift 18s ease-in-out infinite alternate;
}
.ra-blob--two {
  bottom: var(--space-10);
  right: 3%;
  width: clamp(8rem, 15vw, 14rem);
  aspect-ratio: 1;
  background: radial-gradient(circle at 60% 40%, var(--color-warning) 0%, transparent 70%);
  animation: ra-drift 24s ease-in-out infinite alternate-reverse;
}
@keyframes ra-drift {
  from { transform: translate(0, 0) scale(1); }
  to   { transform: translate(var(--space-8), var(--space-10)) scale(1.12); }
}
.ra-detail,
.ra-menu {
  position: relative;
  overflow: hidden;
}
.ra-detail .container,
.ra-menu .container {
  position: relative;
  z-index: 1;
}

/* ---------- CTA banner variant: night-road gradient ---------- */
.ra-cta {
  background: linear-gradient(
    160deg,
    var(--color-primary-dark) 0%,
    var(--color-primary) 50%,
    var(--color-secondary) 100%
  );
  position: relative;
}
.ra-cta .container::after {
  content: '';
  display: block;
  margin: var(--space-8) auto 0;
  max-width: var(--bp-mobile);
  height: var(--space-1);
  background: repeating-linear-gradient(
    90deg,
    color-mix(in srgb, var(--color-white) 55%, transparent) 0,
    color-mix(in srgb, var(--color-white) 55%, transparent) var(--space-6),
    transparent var(--space-6),
    transparent var(--space-10)
  );
  opacity: 0.5;
}
.ra-cta h2 {
  text-wrap: balance;
}

/* ---------- Optional JS-gated reveal polish (fail-open) ---------- */
html.js-anim .ra-menu-panel .card {
  transition:
    background var(--transition-base),
    transform var(--transition-base),
    opacity var(--transition-slow);
}
html.js-anim .ra-menu-panel .card:nth-child(2) { transition-delay: 0.08s; }
html.js-anim .ra-menu-panel .card:nth-child(3) { transition-delay: 0.16s; }

/* ---------- Responsive ---------- */
@media (max-width: 1024px) {
  .ra-detail .split {
    grid-template-columns: 1fr;
  }
  .ra-detail .split-image {
    position: static;
  }
}
@media (max-width: 768px) {
  .ra-menu-panel .grid-3 {
    padding: var(--space-4) var(--space-5);
  }
  .ra-menu-panel .card {
    grid-template-columns: 1fr;
    justify-items: start;
    gap: var(--space-4);
  }
  .ra-menu-panel .card:hover {
    transform: none;
  }
  .ra-blob {
    display: none;
  }
  .ra-detail .answer-block {
    margin-left: 0;
    transform: none;
    padding: var(--space-6);
  }
  .ra-hero {
    min-height: 50vh;
    min-height: 50svh;
  }
  .ra-hero .ra-hero-route {
    bottom: var(--space-4);
  }
}
@media (max-width: 480px) {
  .ra-menu-panel .card .card-icon {
    width: var(--space-12);
    height: var(--space-12);
  }
  .ra-detail .split-content h2 {
    padding-left: var(--space-4);
  }
}

/* ---------- Reduced motion ---------- */
@media (prefers-reduced-motion: reduce) {
  .ra-hero .ra-hero-route,
  .ra-blob--one,
  .ra-blob--two {
    animation: none;
  }
  .ra-menu-panel .card,
  .ra-menu-panel .card:hover {
    transition: none;
    transform: none;
  }
  html.js-anim .ra-menu-panel .card {
    transition: none;
  }
}
</style>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services/" itemprop="item"><span itemprop="name">Services</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Roadside Assistance</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero ra-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[6]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="ra-hero-route" aria-hidden="true"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z" /></svg>
      Jump Starts &bull; Fuel Delivery &bull; Tire Changes
    </div>
    <h1 class="hero-title" id="service-hero-heading">Roadside Assistance<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Dead battery, flat tire, or running on empty in Fort Bend County? We come to you and fix it on the spot — no tow required whenever possible.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get Roadside Help
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<div class="ticker-strip ra-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9889;&nbsp; Jump Starts Available 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9981;&nbsp; Fuel Delivery — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Tow Available If Needed</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Jump Starts Available 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9981;&nbsp; Fuel Delivery — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Tow Available If Needed</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white ra-detail" style="padding: var(--space-16) 0;">
  <div class="ra-blob ra-blob--one" aria-hidden="true"></div>
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[11]); ?>"
               alt="Roadside assistance technician helping stranded driver in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z" /></svg>
          Roadside Assistance in Richmond TX
        </span>
        <h2>Not Every Breakdown Needs a Tow — We Fix It Right There</h2>
        <div class="prose">
          <p>The most common roadside breakdowns in the Richmond area — dead battery, flat tire, empty fuel tank — don't need your car dragged across town. They need someone to show up quickly with the right equipment and handle it on the spot. That's exactly what our roadside assistance service does, available 24 hours a day throughout Fort Bend County.</p>
          <p>When you call Twin Cities Towing INC for roadside help, we dispatch immediately with jump cables and a power pack, a fuel can, or a tire-change kit — depending on what you need. Our goal is always to get you back on the road without needing a tow. That saves you time and cost, and it's the outcome most drivers actually want when they're stranded.</p>
          <p>Roadside calls in Richmond, Rosenberg, Sugar Land, Missouri City, and throughout Fort Bend County typically see us arrive in 20–35 minutes. We service all major roads including I-69, Highway 90, FM 359, and residential neighborhoods throughout the county. If you're in a parking garage, a gas station lot, or a subdivision cul-de-sac — we'll find you.</p>
          <p>If roadside repair isn't enough to get your vehicle moving safely, the transition to a tow is seamless — same driver, same call. No second dispatch fee. We go from fixing it on the spot to loading your car in one continuous service call.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What does roadside assistance include in Richmond, TX?</h2>
      <p>Twin Cities Towing INC's roadside assistance covers jump starts, emergency fuel delivery (enough to reach the nearest station), flat tire changes using your spare, and on-site assessment for common mechanical issues. Service is available 24/7 throughout Fort Bend County.</p>
    </div>
  </div>
</section>

<!-- Divider: double wave into the service menu -->
<div class="ra-divider ra-divider--doublewave" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none">
    <path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-light)" opacity="0.4"/>
    <path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     SIGNATURE: SERVICE-MENU CHECKLIST PANEL
════════════════════════════════════════════════════════════════ -->
<section class="section-light ra-menu" style="padding: var(--space-16) 0;">
  <div class="ra-blob ra-blob--two" aria-hidden="true"></div>
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">What We Handle</span>
      <h2>Roadside Services Available in Fort Bend County</h2>
    </div>
    <div class="ra-menu-panel" data-animate="fade-up">
    <div class="grid-3">
      <div class="card">
        <div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" /></svg></div>
        <h3>Jump Starts</h3>
        <p class="prose">Dead battery? We arrive with professional-grade jump packs that work even on late-model vehicles with sensitive electronics. If the battery won't hold a charge, we can tow you to a shop.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z" />
  <path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97" /></svg></div>
        <h3>Emergency Fuel Delivery</h3>
        <p class="prose">Ran out of gas on I-69 or in a parking lot? We bring enough fuel to get you to the nearest station — delivered to your location throughout the Richmond area.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><circle cx="12" cy="12" r="10" />
  <circle cx="12" cy="12" r="2" /></svg></div>
        <h3>Flat Tire Change</h3>
        <p class="prose">We swap your flat for your spare right on the roadside. If you have no usable spare, we'll transport your vehicle to a tire shop — your choice of location.</p>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal out of the service menu -->
<div class="ra-divider ra-divider--diagonal" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <polygon fill="var(--color-primary-dark)" points="0,60 1200,15 1200,60 0,60"/>
  </svg>
</div>

<section class="cta-banner ra-cta" aria-labelledby="road-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Stranded in Fort Bend County?</span>
    <h2 id="road-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">One Call Gets Roadside Help Moving Your Way</h2>
    <p>Jump start, fuel, flat — whatever the issue, we dispatch immediately and arrive in 20–35 minutes to most Richmond and Fort Bend County locations.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Roadside Help
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light ra-faq" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Roadside Assistance FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="road-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Roadside Assistance &mdash; Richmond TX</span>
      <h2 id="road-close-heading">Back on the Road Fast — Without a Trip to the Shop</h2>
      <p class="closing-lead">When your car won't cooperate, Twin Cities Towing INC comes to you. Jump start, fuel, flat — we fix it on the spot whenever possible. When a tow is needed, it happens right then with no extra call or wait.</p>
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
