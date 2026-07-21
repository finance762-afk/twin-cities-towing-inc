<?php
/**
 * Twin Cities Towing INC — Truck Towing Service
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'truck-towing') { $currentService = $s; break; }
}

$pageTitle       = 'Truck Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Professional truck towing in Richmond, TX for heavy-duty and commercial vehicles. Twin Cities Towing INC handles box trucks, pickups, and commercial fleets. 24/7 dispatch.';
$ogImage         = $clientPhotos[2];
$currentPage     = 'truck-towing';

$serviceFaqs = [
    ['q' => 'What size trucks can Twin Cities Towing handle in Richmond, TX?', 'a' => 'We handle light-duty pickup trucks up through medium-duty commercial vehicles including box trucks, flatbeds, and commercial vans in the 10,000–26,000 lb range. For ultra-heavy semis over 26,000 lbs, we will refer you to a specialized heavy hauler. Call us with your vehicle specs and we\'ll tell you right away if we\'re the right fit.'],
    ['q' => 'Can you tow a loaded commercial truck?', 'a' => 'For safety and equipment integrity, we tow commercial vehicles empty or as lightly loaded as possible. If your vehicle is loaded, we\'ll work with you on the safest approach — in some cases that means partial off-loading before tow. We\'ll walk you through the options when you call.'],
    ['q' => 'How long does truck towing take in the Richmond area?', 'a' => 'ETA for truck towing depends on the vehicle type and pickup location. Most calls in Richmond and Fort Bend County see our truck on-site within 30–60 minutes. Complex recoveries or longer hauls may require additional coordination — we give you an honest timeline when you call.'],
    ['q' => 'Do you tow commercial trucks on I-69 and Highway 90?', 'a' => 'Yes. We frequently respond to commercial vehicle breakdowns and accidents along I-69 (US-59), Highway 90, FM 359, and FM 762 in Fort Bend County. We coordinate with TxDOT and law enforcement when needed to clear lanes safely.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Truck Towing Service']]],
        [
            '@type'       => 'Service',
            '@id'         => $domain . '/services/truck-towing/#service',
            'name'        => 'Truck Towing Service',
            'description' => 'Professional truck towing for heavy-duty and commercial vehicles throughout Richmond TX and Fort Bend County. Available 24/7.',
            'url'         => $domain . '/services/truck-towing',
            'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
            'areaServed'  => ['@type' => 'City', 'name' => 'Richmond, TX'],
            'serviceType' => 'Truck Towing'],
        [
            '@type'           => 'LocalBusiness',
            '@id'             => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ═══════════════════════════════════════════════════════════════
   TRUCK TOWING — page-specific premium treatment
   Archetype: "Industrial Steel" — hard diagonals, plated surfaces,
   hazard-stripe accents, heavy-duty spec band signature section.
   All values via framework.css tokens. Scope prefix: tt-
════════════════════════════════════════════════════════════════ */

/* ---------- C1: Layered hero — diagonal steel gradient + noise ---------- */
.tt-hero {
  min-height: 62vh;
  min-height: 62svh;
  isolation: isolate;
}
.tt-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    linear-gradient(
      120deg,
      rgba(var(--color-primary-rgb), 0.94) 0%,
      rgba(var(--color-primary-rgb), 0.78) 48%,
      rgba(var(--color-secondary-rgb), 0.42) 78%,
      color-mix(in srgb, var(--color-accent) 22%, transparent) 100%
    );
  z-index: 1;
  pointer-events: none;
}
.tt-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='ttn'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23ttn)' opacity='0.045'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.tt-hero .hero-content {
  z-index: 2;
}
/* hazard-stripe kick plate along the hero's bottom edge */
.tt-hero .tt-hero-kick {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: var(--space-2);
  z-index: 2;
  background: repeating-linear-gradient(
    -45deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-4),
    transparent var(--space-4),
    transparent var(--space-8)
  );
  opacity: 0.85;
  pointer-events: none;
}
.tt-hero .hero-title {
  text-wrap: balance;
  letter-spacing: 0.005em;
  text-shadow: var(--shadow-lg);
}
.tt-hero .hero-subtitle {
  max-width: 60ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}
.tt-hero .hero-eyebrow {
  backdrop-filter: blur(6px);
  background: rgba(var(--color-primary-rgb), 0.35);
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
}

/* ---------- Ticker restyle: steel plate ---------- */
.tt-ticker {
  background: linear-gradient(
    100deg,
    var(--color-primary-dark) 0%,
    var(--color-primary) 55%,
    var(--color-secondary) 100%
  );
  border-top: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  border-bottom: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
}
.tt-ticker .ticker-track span {
  color: color-mix(in srgb, var(--color-white) 88%, var(--color-accent));
}
.tt-ticker .ticker-sep {
  color: var(--color-accent);
}

/* ---------- C11: editorial drop cap + detail column ---------- */
.tt-detail .split-content .prose > p:first-of-type::first-letter {
  font-family: var(--font-heading);
  font-size: var(--font-size-5xl);
  line-height: 0.85;
  float: left;
  padding-right: var(--space-3);
  padding-top: var(--space-1);
  color: var(--color-accent);
  font-weight: 700;
}
.tt-detail .split-content h2 {
  text-wrap: balance;
  position: relative;
  padding-bottom: var(--space-4);
}
.tt-detail .split-content h2::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: var(--space-16);
  height: var(--space-1);
  background: linear-gradient(90deg, var(--color-accent), transparent);
  border-radius: var(--radius-full);
}
/* framed image with plated offset shadow */
.tt-detail .img-reveal {
  position: relative;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
}
.tt-detail .img-reveal::after {
  content: '';
  position: absolute;
  inset: 0;
  transform: translate(var(--space-3), var(--space-3));
  border: 2px solid color-mix(in srgb, var(--color-accent) 55%, transparent);
  border-radius: var(--radius-lg);
  z-index: -1;
  pointer-events: none;
}
/* sidebar card: riveted steel panel */
.tt-detail .service-sidebar-card {
  background:
    linear-gradient(
      160deg,
      rgba(var(--color-primary-rgb), 0.06) 0%,
      rgba(var(--color-secondary-rgb), 0.10) 100%
    );
  border: 1px solid rgba(var(--color-primary-rgb), 0.12);
  border-left: var(--space-1) solid var(--color-accent);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-card);
}
.tt-detail .service-sidebar-card h4 {
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-size: var(--font-size-sm);
  color: var(--color-primary);
}

/* ---------- Answer block: dispatch slip ---------- */
.tt-detail .answer-block {
  position: relative;
  background:
    linear-gradient(
      120deg,
      rgba(var(--color-primary-rgb), 0.05) 0%,
      color-mix(in srgb, var(--color-accent) 7%, transparent) 100%
    );
  border: 1px solid rgba(var(--color-primary-rgb), 0.10);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  margin-top: var(--space-12);
  overflow: hidden;
}
.tt-detail .answer-block::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: var(--space-1);
  background: repeating-linear-gradient(
    -45deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-3),
    transparent var(--space-3),
    transparent var(--space-6)
  );
}
.tt-detail .answer-block h2 {
  font-size: var(--font-size-2xl);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.tt-detail .answer-block p {
  margin-bottom: 0;
  color: var(--color-gray-dark);
}

/* ---------- C3 dividers (2 styles: diagonal + stacked parallelograms) ---------- */
.tt-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: var(--space-12);
}
.tt-divider svg {
  display: block;
  width: 100%;
  height: 100%;
}
.tt-divider--into-dark {
  background: var(--color-white);
}
.tt-divider--out-dark {
  background: var(--color-dark);
}
.tt-divider--into-light {
  background: var(--color-white);
}

/* ---------- C7 SIGNATURE: heavy-duty spec / capacity band ---------- */
.tt-spec-band {
  position: relative;
  background: var(--color-dark);
  padding: var(--space-16) 0;
  overflow: hidden;
  isolation: isolate;
}
.tt-spec-band::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    ellipse at 22% 40%,
    color-mix(in srgb, var(--color-accent) 14%, transparent) 0%,
    transparent 65%
  );
  pointer-events: none;
}
.tt-spec-band::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='tts'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23tts)' opacity='0.05'/%3E%3C/svg%3E");
  pointer-events: none;
}
.tt-spec-band .container {
  position: relative;
  z-index: 1;
}
.tt-spec-eyebrow {
  display: block;
  text-align: center;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.3em;
  color: var(--color-accent);
  margin-bottom: var(--space-10);
}
.tt-spec-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
}
.tt-spec-item {
  position: relative;
  text-align: center;
  padding: var(--space-6) var(--space-4);
}
/* internal steel dividers between spec cells */
.tt-spec-item + .tt-spec-item::before {
  content: '';
  position: absolute;
  left: 0;
  top: 15%;
  bottom: 15%;
  width: 1px;
  background: linear-gradient(
    180deg,
    transparent 0%,
    color-mix(in srgb, var(--color-accent) 45%, transparent) 50%,
    transparent 100%
  );
}
.tt-spec-num {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(var(--font-size-3xl), 4vw, var(--font-size-5xl));
  font-weight: 700;
  color: var(--color-white);
  line-height: 1.05;
  letter-spacing: 0.01em;
  margin-bottom: var(--space-2);
}
.tt-spec-num small {
  font-size: var(--font-size-lg);
  color: var(--color-accent);
  font-weight: 600;
  vertical-align: super;
}
.tt-spec-label {
  display: block;
  font-size: var(--font-size-sm);
  text-transform: uppercase;
  letter-spacing: 0.14em;
  color: color-mix(in srgb, var(--color-white) 62%, var(--color-secondary));
}
/* giant watermark behind the band */
.tt-spec-watermark {
  position: absolute;
  right: 0;
  bottom: 0;
  transform: translate(12%, 28%);
  font-family: var(--font-heading);
  font-size: clamp(var(--font-size-6xl), 22vw, 20rem);
  font-weight: 900;
  line-height: 1;
  color: transparent;
  -webkit-text-stroke: 1px color-mix(in srgb, var(--color-accent) 18%, transparent);
  pointer-events: none;
  user-select: none;
}

/* ---------- C6: asymmetric / broken benefit grid ---------- */
.tt-why .grid-2 {
  display: grid;
  grid-template-columns: 1.25fr 1fr;
  gap: var(--space-6);
  align-items: start;
}
.tt-why .benefit-item {
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.tt-why .benefit-item::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: var(--space-1);
  background: linear-gradient(90deg, var(--color-accent), transparent 70%);
  opacity: 0;
  transition: opacity var(--transition-base);
}
.tt-why .benefit-item:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-lg);
}
.tt-why .benefit-item:hover::after {
  opacity: 1;
}
/* rotating tinted backgrounds — never two identical neighbors */
.tt-why .benefit-item:nth-child(4n+1) {
  background: rgba(var(--color-primary-rgb), 0.055);
}
.tt-why .benefit-item:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-accent) 7%, var(--color-white));
}
.tt-why .benefit-item:nth-child(4n+3) {
  background: rgba(var(--color-secondary-rgb), 0.09);
}
.tt-why .benefit-item:nth-child(4n+4) {
  background: var(--color-white);
}
/* broken-grid offsets: right column rides lower, cells breathe unevenly */
.tt-why .benefit-item:nth-child(2) {
  transform: translateY(var(--space-10));
}
.tt-why .benefit-item:nth-child(2):hover {
  transform: translateY(calc(var(--space-10) - var(--space-1)));
}
.tt-why .benefit-item:nth-child(4) {
  transform: translateY(var(--space-10));
}
.tt-why .benefit-item:nth-child(4):hover {
  transform: translateY(calc(var(--space-10) - var(--space-1)));
}
.tt-why .grid-2 {
  padding-bottom: var(--space-12);
}
.tt-why .section-header h2 {
  text-wrap: balance;
}
.tt-why .benefit-item h3 {
  text-wrap: balance;
  margin-bottom: var(--space-2);
}

/* ---------- Process: welded seam timeline ---------- */
.tt-process .process-steps {
  position: relative;
  max-width: var(--bp-tablet);
  margin: 0 auto;
  list-style: none;
}
.tt-process .process-step {
  position: relative;
  padding: var(--space-6) 0 var(--space-6) var(--space-16);
  border-bottom: none;
}
.tt-process .process-step::before {
  content: '';
  position: absolute;
  left: var(--space-5);
  top: 0;
  bottom: 0;
  width: 2px;
  background: repeating-linear-gradient(
    180deg,
    color-mix(in srgb, var(--color-accent) 55%, transparent) 0,
    color-mix(in srgb, var(--color-accent) 55%, transparent) var(--space-2),
    transparent var(--space-2),
    transparent var(--space-4)
  );
}
.tt-process .process-step:first-child::before {
  top: 50%;
}
.tt-process .process-step:last-child::before {
  bottom: 50%;
}
.tt-process .process-step-num {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  width: var(--space-10);
  height: var(--space-10);
  background: var(--color-primary);
  border: 2px solid var(--color-accent);
  box-shadow: var(--shadow-md);
  z-index: 1;
}
.tt-process .process-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-1);
  text-wrap: balance;
}
.tt-process .section-header h2 {
  text-wrap: balance;
}

/* ---------- FAQ: plated cards with rotated tints ---------- */
.tt-faq .faq-item {
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  border-top: var(--space-1) solid transparent;
}
.tt-faq .faq-item:nth-child(3n+1) {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
  border-top-color: var(--color-accent);
}
.tt-faq .faq-item:nth-child(3n+2) {
  background: rgba(var(--color-primary-rgb), 0.05);
  border-top-color: var(--color-primary);
}
.tt-faq .faq-item:nth-child(3n+3) {
  background: rgba(var(--color-secondary-rgb), 0.08);
  border-top-color: var(--color-secondary);
}
.tt-faq .faq-item h3 {
  text-wrap: balance;
}
.tt-faq .section-header h2 {
  text-wrap: balance;
}

/* ---------- Floating decorative accents (4–8% opacity) ---------- */
.tt-float {
  position: absolute;
  pointer-events: none;
  z-index: 0;
  opacity: 0.06;
}
.tt-float--hex {
  top: var(--space-16);
  right: 4%;
  width: clamp(8rem, 16vw, 15rem);
  aspect-ratio: 1;
  background: var(--color-primary);
  clip-path: polygon(25% 5%, 75% 5%, 100% 50%, 75% 95%, 25% 95%, 0% 50%);
  animation: tt-drift 14s ease-in-out infinite alternate;
}
.tt-float--chevrons {
  bottom: var(--space-16);
  left: 3%;
  width: clamp(6rem, 12vw, 11rem);
  aspect-ratio: 2 / 1;
  background: repeating-linear-gradient(
    -45deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-3),
    transparent var(--space-3),
    transparent var(--space-6)
  );
  clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
  opacity: 0.05;
  animation: tt-drift 18s ease-in-out infinite alternate-reverse;
}
@keyframes tt-drift {
  from { transform: translateY(0) rotate(0deg); }
  to   { transform: translateY(var(--space-8)) rotate(4deg); }
}
.tt-detail,
.tt-why {
  position: relative;
  overflow: hidden;
}
.tt-detail .container,
.tt-why .container {
  position: relative;
  z-index: 1;
}

/* ---------- CTA banner variant: hazard top edge ---------- */
.tt-cta {
  border-top: var(--space-1) solid transparent;
  background-image:
    repeating-linear-gradient(
      -45deg,
      var(--color-accent) 0,
      var(--color-accent) var(--space-4),
      var(--color-primary-dark) var(--space-4),
      var(--color-primary-dark) var(--space-8)
    );
  background-size: 100% var(--space-1);
  background-repeat: no-repeat;
  background-position: top;
}
.tt-cta h2 {
  text-wrap: balance;
}

/* ---------- Optional JS-gated reveal polish (fail-open) ---------- */
html.js-anim .tt-spec-item {
  transition: opacity var(--transition-slow), transform var(--transition-slow);
}
html.js-anim .tt-spec-item:nth-child(2) { transition-delay: 0.08s; }
html.js-anim .tt-spec-item:nth-child(3) { transition-delay: 0.16s; }
html.js-anim .tt-spec-item:nth-child(4) { transition-delay: 0.24s; }

/* ---------- Responsive ---------- */
@media (max-width: 1024px) {
  .tt-spec-grid {
    grid-template-columns: repeat(2, 1fr);
    row-gap: var(--space-8);
  }
  .tt-spec-item:nth-child(3)::before {
    display: none;
  }
}
@media (max-width: 768px) {
  .tt-why .grid-2 {
    grid-template-columns: 1fr;
  }
  .tt-why .benefit-item:nth-child(2),
  .tt-why .benefit-item:nth-child(4) {
    transform: none;
  }
  .tt-why .grid-2 {
    padding-bottom: 0;
  }
  .tt-float {
    display: none;
  }
  .tt-spec-watermark {
    display: none;
  }
  .tt-process .process-step {
    padding-left: var(--space-12);
  }
  .tt-hero {
    min-height: 52vh;
    min-height: 52svh;
  }
}
@media (max-width: 480px) {
  .tt-spec-grid {
    grid-template-columns: 1fr;
  }
  .tt-spec-item + .tt-spec-item::before {
    display: none;
  }
  .tt-detail .split-content .prose > p:first-of-type::first-letter {
    font-size: var(--font-size-4xl);
  }
}

/* ---------- Reduced motion ---------- */
@media (prefers-reduced-motion: reduce) {
  .tt-float--hex,
  .tt-float--chevrons {
    animation: none;
  }
  .tt-why .benefit-item,
  .tt-why .benefit-item:hover {
    transition: none;
  }
  html.js-anim .tt-spec-item {
    transition: none;
  }
}
</style>

<!-- Breadcrumb -->
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
        <span itemprop="name">Truck Towing Service</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<!-- ═══════════════════════════════════════════════════════════════
     HERO — SERVICE BANNER
════════════════════════════════════════════════════════════════ -->
<section class="service-hero tt-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[2]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="tt-hero-kick" aria-hidden="true"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
  <path d="M15 18H9" />
  <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
  <circle cx="17" cy="18" r="2" />
  <circle cx="7" cy="18" r="2" /></svg>
      Richmond, TX &bull; Fort Bend County
    </div>
    <h1 class="hero-title" id="service-hero-heading">Truck Towing Service<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Heavy-duty recovery and transport for commercial vehicles, box trucks, and pickup trucks throughout Fort Bend County — 24 hours a day.</p>
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

<!-- Ticker Strip -->
<div class="ticker-strip tt-ticker" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9651;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Heavy-Duty &amp; Commercial Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; I-69, Hwy 90 &amp; All Fort Bend Roads</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Heavy-Duty &amp; Commercial Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; I-69, Hwy 90 &amp; All Fort Bend Roads</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     SERVICE DETAIL
════════════════════════════════════════════════════════════════ -->
<section class="section-white tt-detail" style="padding: var(--space-16) 0;">
  <div class="tt-float tt-float--hex" aria-hidden="true"></div>
  <div class="container">

    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
  <path d="M15 18H9" />
  <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
  <circle cx="17" cy="18" r="2" />
  <circle cx="7" cy="18" r="2" /></svg>
          Truck Towing in Richmond TX
        </span>
        <h2>When Your Commercial Vehicle Goes Down, We Come to You</h2>
        <div class="prose">
          <p>A disabled truck isn't just an inconvenience — it's lost revenue, a safety hazard, and a logistical problem that compounds by the hour. Twin Cities Towing INC has been handling commercial and heavy-duty truck towing in Richmond and throughout Fort Bend County since 2011, with the right equipment and experienced operators to get your vehicle secured and moving quickly.</p>
          <p>We handle a wide range of commercial vehicles: full-size pickup trucks, cargo vans, box trucks, flatbed work trucks, and medium-duty commercial vehicles. Whether your rig broke down in an industrial park off FM 762, stalled on I-69 northbound, or won't start in a Rosenberg parking lot at 3am — we dispatch immediately and give you a real ETA, not a window.</p>
          <p>Every truck tow starts with a proper assessment of the vehicle weight, configuration, and damage. We select the appropriate rigging and tow method to prevent secondary damage — a concern that matters even more when the vehicle is commercial property or carries expensive equipment. You'll know exactly what we're doing and why before we hook up.</p>
          <p>Our service area covers Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, and surrounding communities within approximately 20 miles of our Richmond base. We frequently work along I-69, Highway 90, Business 90, FM 359, and FM 762 — the commercial corridors that run through Fort Bend County.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[8]); ?>"
               alt="Twin Cities Towing heavy-duty truck towing service in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Quick Facts</h4>
          <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Available 24 hours, 7 days a week</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Medium-duty vehicles up to ~26,000 lbs</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Pickup trucks, box trucks, cargo vans</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Transparent pricing before dispatch</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Licensed &amp; insured — Richmond TX</li>
          </ul>
          <a href="/contact/" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Truck Tow
          </a>
        </div>
      </div>
    </div>

    <!-- Answer Block: AEO -->
    <div class="answer-block" data-animate="fade-up">
      <h2>How much does truck towing cost in Richmond, TX?</h2>
      <p>Commercial and heavy-duty truck towing in Richmond typically runs $125–$250+ depending on vehicle size, distance, and whether recovery equipment is needed. We provide a clear quote before dispatching — no surprise charges once your vehicle is loaded.</p>
    </div>

  </div>
</section>

<!-- Divider: diagonal into spec band -->
<div class="tt-divider tt-divider--into-dark" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <polygon fill="var(--color-dark)" points="0,60 1200,10 1200,60 0,60"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     SIGNATURE: HEAVY-DUTY SPEC / CAPACITY BAND
════════════════════════════════════════════════════════════════ -->
<section class="tt-spec-band" aria-label="Heavy-duty towing capacity specifications">
  <span class="tt-spec-watermark" aria-hidden="true">26K</span>
  <div class="container">
    <span class="tt-spec-eyebrow">Heavy-Duty Capacity &mdash; Richmond, TX</span>
    <div class="tt-spec-grid">
      <div class="tt-spec-item">
        <span class="tt-spec-num">26,000<small>lb</small></span>
        <span class="tt-spec-label">Max Vehicle Weight</span>
      </div>
      <div class="tt-spec-item">
        <span class="tt-spec-num">30&ndash;60<small>min</small></span>
        <span class="tt-spec-label">Typical On-Site Arrival</span>
      </div>
      <div class="tt-spec-item">
        <span class="tt-spec-num">24/7</span>
        <span class="tt-spec-label">Emergency Dispatch</span>
      </div>
      <div class="tt-spec-item">
        <span class="tt-spec-num">13<small>yrs</small></span>
        <span class="tt-spec-label">Serving Fort Bend County</span>
      </div>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms out of spec band -->
<div class="tt-divider tt-divider--out-dark" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <polygon fill="var(--color-light)" opacity="0.35" points="0,20 1200,45 1200,80 0,80"/>
    <polygon fill="var(--color-light)" points="0,45 1200,20 1200,80 0,80"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     WHY CHOOSE US
════════════════════════════════════════════════════════════════ -->
<section class="section-light tt-why" style="padding: var(--space-16) 0;">
  <div class="tt-float tt-float--chevrons" aria-hidden="true"></div>
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Built for Commercial Vehicle Recovery in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
        <div>
          <h3>Proper Equipment for the Job</h3>
          <p class="prose">Commercial trucks require heavier tow equipment, correct rigging points, and operators who understand load transfer. We use the right setup for your specific vehicle — not a one-size-fits-all hook-and-pull approach that can cause secondary damage.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>Dispatch in Under 2 Minutes</h3>
          <p class="prose">Every minute your truck sits disabled is money and time lost. We answer immediately, confirm your location, and have the closest available driver headed your way before you hang up — no hold queues, no call centers.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        <div>
          <h3>Local Knowledge of Fort Bend Roads</h3>
          <p class="prose">We know the industrial corridors, loading dock areas, and tight spots throughout Richmond and Rosenberg. That local familiarity means faster response and fewer surprises when we arrive — especially for commercial breakdowns off main roads.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        <div>
          <h3>Transparent Pricing, No Billing Surprises</h3>
          <p class="prose">We give you an upfront quote before we roll. Commercial towing involves more variables than a standard car tow, and we walk you through the estimate clearly — so you know exactly what you're paying before we hook up.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     PROCESS
════════════════════════════════════════════════════════════════ -->
<section class="section-white tt-process" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">How It Works</span>
      <h2>Our Truck Towing Process — From Call to Delivery</h2>
    </div>
    <ol class="process-steps" data-animate="fade-up">
      <li class="process-step">
        <div class="process-step-num">1</div>
        <div>
          <h3>Call &amp; Vehicle Assessment</h3>
          <p class="prose">Tell us your location, vehicle type, and approximate GVW. This takes 60 seconds and lets us dispatch the right equipment. We'll confirm ETA before you hang up.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">2</div>
        <div>
          <h3>On-Site Evaluation</h3>
          <p class="prose">When we arrive, our operator walks around the vehicle, confirms all rigging points, and assesses any damage or unusual conditions before touching anything. We'll review the plan with you on the spot.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">3</div>
        <div>
          <h3>Secure Rigging &amp; Load</h3>
          <p class="prose">We rig the vehicle correctly for its type and condition — whether that means a standard wheel-lift, winch-and-roll, or specialized attachment. Safety chains and secondary securement are always applied.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">4</div>
        <div>
          <h3>Transport to Your Destination</h3>
          <p class="prose">We deliver to any mechanic, fleet shop, dealership, or secure location you specify within our service area. You get confirmation when your vehicle is unloaded and handed off.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     MID-PAGE CTA
════════════════════════════════════════════════════════════════ -->
<section class="cta-banner tt-cta" aria-labelledby="truck-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Commercial Vehicle Down?</span>
    <h2 id="truck-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Every Minute Your Truck Sits Costs You Money</h2>
    <p>Twin Cities Towing responds immediately — 24 hours a day, 7 days a week, including weekends and holidays. Get your vehicle moving again with one call.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Truck Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════════════════════ -->
<section class="section-light tt-faq" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Truck Towing FAQs &mdash; Richmond, TX</h2>
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

<!-- ═══════════════════════════════════════════════════════════════
     CLOSING CTA
════════════════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-labelledby="truck-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Truck Towing &mdash; Richmond TX</span>
      <h2 id="truck-close-heading">Commercial Vehicle Stranded? We're Ready Now.</h2>
      <p class="closing-lead">Twin Cities Towing INC has handled commercial vehicle recoveries throughout Fort Bend County for over 13 years. Call for immediate dispatch or submit a request online — we'll get back to you in minutes.</p>
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
