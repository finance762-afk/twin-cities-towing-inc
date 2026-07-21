<?php
/**
 * Twin Cities Towing INC — Motorcycle Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Motorcycle Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Specialized motorcycle towing in Richmond, TX using wheel chocks, soft straps, and proper cradles. Safe transport for motorcycles, scooters, and ATVs in Fort Bend County.';
$ogImage         = $clientPhotos[14];
$currentPage     = 'motorcycle-towing';

$serviceFaqs = [
    ['q' => 'Do you have proper equipment for motorcycle towing in Richmond, TX?', 'a' => 'Yes. We use wheel chocks, soft tie-down straps, and frame cradles designed specifically for two-wheel vehicles. We never use hard chains against chrome or painted surfaces, and we always tie from designated frame points — not handlebars, mirrors, or bodywork.'],
    ['q' => 'Can you tow a Harley-Davidson safely?', 'a' => 'Absolutely. Harleys are among the most common motorcycles we transport in the Richmond area. Our operators are familiar with securing larger cruiser-style bikes and take extra care with chrome finish protection. Your Harley arrives looking exactly as it did when we picked it up.'],
    ['q' => 'Do you tow ATVs and off-road vehicles?', 'a' => 'Yes — small ATVs, UTVs, and off-road bikes can be transported on our flatbed with appropriate tie-down positioning. Weight limits apply; contact us with your vehicle specs and we\'ll confirm capability before dispatch.'],
    ['q' => 'How much does motorcycle towing cost in the Richmond area?', 'a' => 'Motorcycle towing in Richmond typically runs $85–$150 for local transport within Fort Bend County. Rates vary by distance and any special equipment needs. We give you a clear quote before we roll — no surprises on delivery.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Motorcycle Towing']]],
        ['@type' => 'Service', '@id' => $domain . '/services/motorcycle-towing/#service',
         'name' => 'Motorcycle Towing', 'url' => $domain . '/services/motorcycle-towing',
         'description' => 'Specialized motorcycle towing with proper equipment throughout Richmond TX and Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Motorcycle Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ═══════════════════════════════════════════════════════════════
   MOTORCYCLE TOWING — page-specific premium treatment
   Archetype: "Lean Angle" — canted slashes, radial headlight glow,
   clip-path photo gallery strip signature, spinning-wheel accent.
   All values via framework.css tokens. Scope prefix: mt-
════════════════════════════════════════════════════════════════ */

/* ---------- C1: Layered hero — radial headlight glow + noise ---------- */
.mt-hero {
  min-height: 64vh;
  min-height: 64svh;
  isolation: isolate;
}
.mt-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(
      ellipse at 76% 24%,
      color-mix(in srgb, var(--color-accent) 30%, transparent) 0%,
      transparent 52%
    ),
    linear-gradient(
      to right,
      rgba(var(--color-primary-rgb), 0.95) 0%,
      rgba(var(--color-primary-rgb), 0.72) 52%,
      rgba(var(--color-secondary-rgb), 0.38) 100%
    );
  z-index: 1;
  pointer-events: none;
}
.mt-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='mtn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23mtn)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.mt-hero .hero-content {
  z-index: 2;
}
/* canted speed slash cutting the hero's lower-left corner */
.mt-hero .mt-hero-slash {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 38%;
  height: var(--space-16);
  background: linear-gradient(
    100deg,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 40%, transparent) 70%,
    transparent 100%
  );
  clip-path: polygon(0 100%, 0 0, 100% 100%);
  opacity: 0.55;
  z-index: 2;
  pointer-events: none;
}
.mt-hero .hero-title {
  text-wrap: balance;
  font-style: italic;
  letter-spacing: -0.01em;
}
.mt-hero .hero-subtitle {
  max-width: 58ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}
.mt-hero .hero-eyebrow {
  border-color: color-mix(in srgb, var(--color-accent) 50%, transparent);
  background: color-mix(in srgb, var(--color-accent) 12%, transparent);
  transform: skewX(-6deg);
}

/* ---------- Ticker restyle: slanted pit-lane stripe ---------- */
.mt-ticker {
  background: var(--color-primary-dark);
  border-top: 2px solid var(--color-accent);
  transform: skewY(-0.6deg);
  margin-top: calc(-1 * var(--space-2));
}
.mt-ticker .ticker-track {
  transform: skewY(0.6deg);
}
.mt-ticker .ticker-track span {
  font-style: italic;
}
.mt-ticker .ticker-sep {
  color: var(--color-accent);
}

/* ---------- Detail split: canted image + accent script eyebrow ---------- */
.mt-detail .split-content h2 {
  text-wrap: balance;
  position: relative;
}
.mt-detail .split-content h2::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-6));
  top: var(--space-1);
  bottom: var(--space-1);
  width: var(--space-1);
  background: linear-gradient(180deg, var(--color-accent), transparent);
  transform: skewX(-12deg);
  border-radius: var(--radius-full);
}
.mt-detail .split-content .prose > p:first-of-type {
  font-size: var(--font-size-lg);
  color: var(--color-gray-dark);
}
.mt-detail .img-reveal {
  clip-path: polygon(0 4%, 100% 0, 100% 96%, 0 100%);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  transform: rotate(-1deg);
  transition: transform var(--transition-slow), clip-path var(--transition-slow);
}
.mt-detail .img-reveal:hover {
  transform: rotate(0deg);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}
.mt-detail .split-image {
  position: relative;
}
.mt-detail .split-image::after {
  content: '';
  position: absolute;
  inset: 0;
  transform: translate(calc(-1 * var(--space-3)), var(--space-3)) rotate(-1deg);
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  clip-path: polygon(0 4%, 100% 0, 100% 96%, 0 100%);
  border-radius: var(--radius-lg);
  z-index: -1;
  pointer-events: none;
}

/* ---------- Answer block: garage tag ---------- */
.mt-detail .answer-block {
  position: relative;
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
  border: 1px solid color-mix(in srgb, var(--color-accent) 25%, transparent);
  border-radius: var(--radius-xl);
  padding: var(--space-8) var(--space-8) var(--space-8) var(--space-12);
  margin-top: var(--space-12);
  overflow: hidden;
}
.mt-detail .answer-block::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: var(--space-2);
  background: linear-gradient(180deg, var(--color-accent) 0%, var(--color-primary) 100%);
  transform: skewY(-8deg) scaleY(1.4);
}
.mt-detail .answer-block h2 {
  font-size: var(--font-size-2xl);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.mt-detail .answer-block p {
  margin-bottom: 0;
}

/* ---------- C3 dividers (2 styles: curved wave + torn edge) ---------- */
.mt-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: var(--space-12);
}
.mt-divider svg {
  display: block;
  width: 100%;
  height: 100%;
}
.mt-divider--wave {
  background: var(--color-white);
}
.mt-divider--torn {
  background: var(--color-light);
}

/* ---------- C7 SIGNATURE: clip-path gallery strip ---------- */
.mt-gallery {
  position: relative;
  background: var(--color-primary-dark);
  padding: var(--space-16) 0;
  overflow: hidden;
  isolation: isolate;
}
.mt-gallery::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    ellipse at 80% 10%,
    color-mix(in srgb, var(--color-accent) 12%, transparent) 0%,
    transparent 60%
  );
  pointer-events: none;
}
.mt-gallery::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='mtg'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23mtg)' opacity='0.05'/%3E%3C/svg%3E");
  pointer-events: none;
}
.mt-gallery .container {
  position: relative;
  z-index: 1;
}
.mt-gallery-eyebrow {
  display: block;
  text-align: center;
  font-family: var(--font-accent);
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  margin-bottom: var(--space-8);
  transform: rotate(-1.5deg);
}
.mt-gallery-strip {
  display: grid;
  grid-template-columns: 1.2fr 0.9fr 1.1fr 0.8fr;
  gap: var(--space-4);
  align-items: stretch;
}
.mt-gallery-shot {
  position: relative;
  overflow: hidden;
  min-height: clamp(12rem, 24vw, 19rem);
  box-shadow: var(--shadow-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.mt-gallery-shot img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
/* four different lean-angle clip shapes */
.mt-gallery-shot:nth-child(1) {
  clip-path: polygon(0 0, 100% 6%, 92% 100%, 0 94%);
}
.mt-gallery-shot:nth-child(2) {
  clip-path: polygon(8% 6%, 100% 0, 100% 94%, 0 100%);
  transform: translateY(var(--space-6));
}
.mt-gallery-shot:nth-child(3) {
  clip-path: polygon(0 6%, 92% 0, 100% 94%, 8% 100%);
}
.mt-gallery-shot:nth-child(4) {
  clip-path: polygon(8% 0, 100% 6%, 92% 94%, 0 100%);
  transform: translateY(var(--space-6));
}
.mt-gallery-shot:hover {
  transform: translateY(0) scale(1.02);
  box-shadow: var(--shadow-xl);
}
.mt-gallery-shot:hover img {
  transform: scale(1.08);
}
.mt-gallery-shot::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(var(--color-primary-rgb), 0.55) 0%,
    transparent 45%
  );
  pointer-events: none;
}
.mt-gallery-strip {
  padding-bottom: var(--space-8);
}

/* ---------- C6: staggered asymmetric benefit grid ---------- */
.mt-why .grid-2 {
  display: grid;
  grid-template-columns: 0.9fr 1.15fr;
  gap: var(--space-8);
  align-items: start;
}
.mt-why .benefit-item {
  padding: var(--space-8);
  border-radius: var(--radius-xl);
  position: relative;
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
/* diagonal stagger — each cell rides at its own height */
.mt-why .benefit-item:nth-child(1) { transform: rotate(-0.5deg); }
.mt-why .benefit-item:nth-child(2) { transform: translateY(var(--space-8)) rotate(0.5deg); }
.mt-why .benefit-item:nth-child(3) { transform: translateY(calc(-1 * var(--space-4))) rotate(0.4deg); }
.mt-why .benefit-item:nth-child(4) { transform: translateY(var(--space-4)) rotate(-0.4deg); }
.mt-why .benefit-item:hover {
  transform: translateY(0) rotate(0deg);
  box-shadow: var(--shadow-lg);
}
/* rotating tints — accent-forward rotation, distinct from other pages */
.mt-why .benefit-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white));
}
.mt-why .benefit-item:nth-child(4n+2) {
  background: rgba(var(--color-secondary-rgb), 0.08);
}
.mt-why .benefit-item:nth-child(4n+3) {
  background: var(--color-white);
}
.mt-why .benefit-item:nth-child(4n+4) {
  background: rgba(var(--color-primary-rgb), 0.06);
}
.mt-why .benefit-item h3 {
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.mt-why .section-header h2 {
  text-wrap: balance;
}
.mt-why .grid-2 {
  padding-bottom: var(--space-10);
}
.mt-why .section-header .eyebrow {
  font-family: var(--font-accent);
  font-size: var(--font-size-xl);
  text-transform: none;
  letter-spacing: 0;
}

/* ---------- FAQ: race-plate cards ---------- */
.mt-faq .faq-item {
  border-radius: var(--radius-xl);
  border-left: var(--space-1) solid transparent;
  transform: skewX(0deg);
}
.mt-faq .faq-item:nth-child(odd) {
  background: color-mix(in srgb, var(--color-accent) 5%, var(--color-white));
  border-left-color: var(--color-accent);
}
.mt-faq .faq-item:nth-child(even) {
  background: rgba(var(--color-primary-rgb), 0.05);
  border-left-color: var(--color-primary);
}
.mt-faq .faq-icon {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-accent) 100%);
  transform: rotate(-6deg);
  transition: transform var(--transition-base);
}
.mt-faq .faq-item:hover .faq-icon {
  transform: rotate(0deg) scale(1.06);
}
.mt-faq .faq-item h3 {
  text-wrap: balance;
}
.mt-faq .section-header h2 {
  text-wrap: balance;
}

/* ---------- Floating decorative accent: slow spinning wheel ---------- */
.mt-float-wheel {
  position: absolute;
  top: var(--space-16);
  right: 5%;
  width: clamp(9rem, 18vw, 16rem);
  aspect-ratio: 1;
  border: var(--space-2) solid var(--color-primary);
  border-radius: var(--radius-full);
  opacity: 0.05;
  pointer-events: none;
  z-index: 0;
  animation: mt-spin 60s linear infinite;
}
.mt-float-wheel::before,
.mt-float-wheel::after {
  content: '';
  position: absolute;
  inset: 0;
  margin: auto;
}
.mt-float-wheel::before {
  width: 100%;
  height: var(--space-1);
  background: var(--color-primary);
}
.mt-float-wheel::after {
  width: var(--space-1);
  height: 100%;
  background: var(--color-primary);
}
@keyframes mt-spin {
  from { transform: rotate(0deg); }
  to   { transform: rotate(360deg); }
}
.mt-detail,
.mt-why {
  position: relative;
  overflow: hidden;
}
.mt-detail .container,
.mt-why .container {
  position: relative;
  z-index: 1;
}

/* ---------- CTA banner variant: angled edges ---------- */
.mt-cta {
  clip-path: polygon(0 var(--space-6), 100% 0, 100% calc(100% - var(--space-6)), 0 100%);
  padding-top: var(--space-16);
  padding-bottom: var(--space-16);
}
.mt-cta h2 {
  text-wrap: balance;
  font-style: italic;
}

/* ---------- Optional JS-gated reveal polish (fail-open) ---------- */
html.js-anim .mt-gallery-shot {
  transition:
    transform var(--transition-slow),
    box-shadow var(--transition-base),
    opacity var(--transition-slow);
}
html.js-anim .mt-gallery-shot:nth-child(2) { transition-delay: 0.07s; }
html.js-anim .mt-gallery-shot:nth-child(3) { transition-delay: 0.14s; }
html.js-anim .mt-gallery-shot:nth-child(4) { transition-delay: 0.21s; }

/* ---------- Responsive ---------- */
@media (max-width: 1024px) {
  .mt-gallery-strip {
    grid-template-columns: 1fr 1fr;
    row-gap: var(--space-6);
  }
  .mt-gallery-shot:nth-child(2),
  .mt-gallery-shot:nth-child(4) {
    transform: none;
  }
}
@media (max-width: 768px) {
  .mt-why .grid-2 {
    grid-template-columns: 1fr;
  }
  .mt-why .benefit-item:nth-child(1),
  .mt-why .benefit-item:nth-child(2),
  .mt-why .benefit-item:nth-child(3),
  .mt-why .benefit-item:nth-child(4) {
    transform: none;
  }
  .mt-why .grid-2 {
    padding-bottom: 0;
  }
  .mt-float-wheel {
    display: none;
  }
  .mt-hero .mt-hero-slash {
    width: 60%;
  }
  .mt-hero {
    min-height: 52vh;
    min-height: 52svh;
  }
  .mt-cta {
    clip-path: polygon(0 var(--space-3), 100% 0, 100% calc(100% - var(--space-3)), 0 100%);
  }
}
@media (max-width: 480px) {
  .mt-gallery-strip {
    grid-template-columns: 1fr;
  }
  .mt-gallery-shot {
    min-height: 14rem;
  }
  .mt-detail .answer-block {
    padding: var(--space-6);
  }
}

/* ---------- Reduced motion ---------- */
@media (prefers-reduced-motion: reduce) {
  .mt-float-wheel {
    animation: none;
  }
  .mt-detail .img-reveal,
  .mt-gallery-shot,
  .mt-gallery-shot img,
  .mt-why .benefit-item,
  .mt-faq .faq-icon {
    transition: none;
  }
  html.js-anim .mt-gallery-shot {
    transition: none;
  }
  .mt-ticker {
    transform: none;
  }
  .mt-ticker .ticker-track {
    transform: none;
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
        <span itemprop="name">Motorcycle Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero mt-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[14]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="mt-hero-slash" aria-hidden="true"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" /></svg>
      Motorcycles &bull; Scooters &bull; ATVs &bull; Cruisers
    </div>
    <h1 class="hero-title" id="service-hero-heading">Motorcycle Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Specialized equipment, proper tie-down technique, and 13 years of experience moving two-wheel vehicles throughout Fort Bend County — zero chrome contact, zero scratches.</p>
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

<div class="ticker-strip mt-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9940;&nbsp; Wheel Chocks &amp; Soft Straps</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Chrome-Safe Technique</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Harley, Sport &amp; ATV Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Fort Bend County &amp; Beyond</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9940;&nbsp; Wheel Chocks &amp; Soft Straps</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Chrome-Safe Technique</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Harley, Sport &amp; ATV Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Fort Bend County &amp; Beyond</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white mt-detail" style="padding: var(--space-16) 0;">
  <div class="mt-float-wheel" aria-hidden="true"></div>
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[17]); ?>"
               alt="Motorcycle being safely secured for towing in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" /></svg>
          Motorcycle Towing in Richmond TX
        </span>
        <h2>Your Bike Gets the Same Care You Give It</h2>
        <div class="prose">
          <p>Motorcycles are not cars. They require a fundamentally different approach to securing, loading, and transporting — and using the wrong technique results in scratched chrome, stressed frames, and bikes that arrive in worse shape than they left. Twin Cities Towing INC carries the specialized equipment and uses the proper methods for two-wheel vehicle transport throughout Richmond and Fort Bend County.</p>
          <p>We use front wheel chocks to hold the bike upright during loading, soft ratchet straps anchored at frame tie-down points, and protective padding wherever a strap or chain could contact painted surfaces or chrome. We never tie from handlebars, mirrors, footpegs, or decorative hardware. The only contact points are designated hard frame mounts — the same points your bike's manual specifies for mounting accessories.</p>
          <p>We transport street bikes, cruisers, sport bikes, standard commuters, touring motorcycles, and scooters. For larger and heavier bikes like full-size touring Harleys or big adventure bikes, we carry extended wheel chock systems designed for that weight class. Small ATVs and utility terrain vehicles can also be accommodated on our flatbed within weight limits.</p>
          <p>Our service area for motorcycle towing covers Richmond, Rosenberg, Katy, Sugar Land, Missouri City, Stafford, Greatwood, and surrounding Fort Bend County communities. Whether you broke down on Hwy 90 near Rosenberg or need transport from a shop in Katy, we've got the route and the equipment.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What equipment does Twin Cities Towing use for motorcycle towing in Richmond, TX?</h2>
      <p>We use front wheel chocks, soft tie-down straps, and frame cradles designed for two-wheel vehicles. All tie-down points are at designated frame mounts — never handlebars, mirrors, or chrome surfaces. Your motorcycle arrives without scratches or strap marks.</p>
    </div>
  </div>
</section>

<!-- Divider: curved wave into gallery -->
<div class="mt-divider mt-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-primary-dark)"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     SIGNATURE: LEAN-ANGLE GALLERY STRIP
════════════════════════════════════════════════════════════════ -->
<section class="mt-gallery" aria-label="Motorcycle towing photo gallery">
  <div class="container">
    <span class="mt-gallery-eyebrow" aria-hidden="true">on the hook &amp; handled with care</span>
    <div class="mt-gallery-strip">
      <div class="mt-gallery-shot">
        <img src="<?php echo htmlspecialchars($clientPhotos[14]); ?>"
             alt="Motorcycle secured on Twin Cities Towing flatbed in Richmond TX"
             width="480" height="360" loading="lazy">
      </div>
      <div class="mt-gallery-shot">
        <img src="<?php echo htmlspecialchars($clientPhotos[17]); ?>"
             alt="Wheel chock and soft strap setup for motorcycle transport"
             width="480" height="360" loading="lazy">
      </div>
      <div class="mt-gallery-shot">
        <img src="<?php echo htmlspecialchars($clientPhotos[16]); ?>"
             alt="Twin Cities Towing operator loading a motorcycle in Fort Bend County"
             width="480" height="360" loading="lazy">
      </div>
      <div class="mt-gallery-shot">
        <img src="<?php echo htmlspecialchars($clientPhotos[18]); ?>"
             alt="Twin Cities Towing truck ready for motorcycle recovery near Richmond TX"
             width="480" height="360" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Divider: torn edge out of gallery -->
<div class="mt-divider mt-divider--torn" aria-hidden="true" style="background: var(--color-primary-dark);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <path d="M0,60 L0,40 L60,42 L120,35 L200,45 L280,32 L360,48 L440,38 L540,45 L640,30 L740,42 L840,35 L940,45 L1040,32 L1140,42 L1200,38 L1200,60 Z" fill="var(--color-light)"/>
  </svg>
</div>

<section class="section-light mt-why" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Motorcycle Towing Done Right in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
        <div>
          <h3>Purpose-Built Equipment</h3>
          <p class="prose">Wheel chocks, soft straps, and frame cradles — not improvised solutions with ratchet straps hooked wherever convenient. The right equipment is the starting point for a damage-free transport.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
  <circle cx="12" cy="12" r="3" /></svg>
        <div>
          <h3>Chrome and Paint Awareness</h3>
          <p class="prose">Our operators know where not to touch your bike. Padding, soft straps, and careful technique mean your finish looks exactly the same when you get it back as when we picked it up.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915" />
  <circle cx="12" cy="12" r="3" /></svg>
        <div>
          <h3>Bikes of All Sizes and Styles</h3>
          <p class="prose">From lightweight 250cc commuters to 900-pound touring bikes, we've transported them all. Tell us the make and approximate weight and we'll confirm capacity before rolling.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>24/7 Availability Throughout Fort Bend</h3>
          <p class="prose">Motorcycle breakdowns happen at all hours — weekend rides cut short, late-night highway issues. We're available every hour to cover the same roads and neighborhoods you ride.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner mt-cta" aria-labelledby="moto-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Bike Down in Fort Bend County?</span>
    <h2 id="moto-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Specialized Equipment — Not a Standard Car Tow</h2>
    <p>Your motorcycle deserves a tow truck that carries the right gear. Twin Cities Towing brings wheel chocks, soft straps, and 13 years of two-wheel transport experience to every call.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Motorcycle Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light mt-faq" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Motorcycle Towing FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="moto-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Motorcycle Towing &mdash; Richmond TX</span>
      <h2 id="moto-close-heading">Your Bike Deserves a Tow Truck That Knows How to Handle It</h2>
      <p class="closing-lead">Twin Cities Towing INC transports motorcycles throughout Richmond, Rosenberg, Katy, and all of Fort Bend County with the proper equipment and technique. Call for immediate dispatch or request online — your bike is in the right hands.</p>
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
