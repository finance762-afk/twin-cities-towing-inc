<?php
/**
 * Twin Cities Towing INC — Light Duty Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Light Duty Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Light duty towing in Richmond, TX for cars, SUVs, and small pickup trucks. Efficient, careful handling with wheel-lift or flatbed based on your vehicle. 24/7 Fort Bend County.';
$ogImage         = $clientPhotos[7];
$currentPage     = 'light-duty-towing';

$serviceFaqs = [
    ['q' => 'What vehicles qualify as light duty towing in Richmond, TX?', 'a' => 'Light duty towing covers passenger cars, crossovers, SUVs, minivans, and small pickup trucks — typically vehicles under 10,000 lbs GVWR. This includes most personal vehicles driven daily in Fort Bend County. For larger pickup trucks or commercial vehicles, see our truck towing service.'],
    ['q' => 'What towing method do you use for light duty vehicles?', 'a' => 'We match the method to the vehicle. Standard FWD and RWD vehicles can use wheel-lift equipment safely. AWD, 4WD, luxury vehicles, and low-clearance cars go on the flatbed to protect the drivetrain and undercarriage. When you call, we confirm the right method for your specific car.'],
    ['q' => 'How much does light duty towing cost in Fort Bend County?', 'a' => 'Most light duty tows within Fort Bend County start around $75–$125 depending on distance and service type. We give you a clear quote before dispatch. Standard wheel-lift tows cost less than flatbed; we\'ll explain the difference when we confirm your vehicle type.'],
    ['q' => 'Can you tow my car to a mechanic outside Fort Bend County?', 'a' => 'Yes. We can transport vehicles beyond our standard Fort Bend County service area on request. Longer hauls are quoted by distance. Call us with your pickup and dropoff locations and we\'ll give you a rate before we commit to the trip.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Light Duty Towing']]],
        ['@type' => 'Service', '@id' => $domain . '/services/light-duty-towing/#service',
         'name' => 'Light Duty Towing', 'url' => $domain . '/services/light-duty-towing',
         'description' => 'Light duty towing in Richmond TX for cars, SUVs, and small trucks. 24/7 service throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Light Duty Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   Light Duty Towing — page-specific premium styles
   Archetype: "Precision Spec Sheet" — radial-focus hero,
   curved wave + stacked parallelogram dividers, overlapping
   broken-grid split, vehicle-class ladder signature strip.
   Tokens only — no hardcoded values.
   ============================================================ */

/* ---------- Typography baseline (C5.5) ---------- */
h1, h2, h3, h4 {
  text-wrap: balance;
}

/* ---------- C1.4 Layered hero: radial gradient + fine noise ---------- */
.service-hero {
  min-height: 60vh;
  isolation: isolate;
}
.service-hero .hero-overlay {
  background: rgba(var(--color-primary-rgb), 0.5);
}
.service-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background:
    radial-gradient(
      ellipse at 28% 38%,
      rgba(var(--color-primary-rgb), 0.55) 0%,
      rgba(var(--color-primary-rgb), 0.9) 78%
    ),
    linear-gradient(
      180deg,
      transparent 55%,
      color-mix(in srgb, var(--color-accent) 16%, transparent) 100%
    );
  pointer-events: none;
}
.service-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='f'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='1.1' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23f)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.045;
  pointer-events: none;
}
.service-hero .hero-content {
  position: relative;
  z-index: 2;
  padding: var(--space-16) var(--space-6) var(--space-12);
}
/* Bracketed spec-sheet eyebrow */
.service-hero .hero-eyebrow {
  border-radius: var(--radius-sm);
  border: 1px solid color-mix(in srgb, var(--color-white) 30%, transparent);
  border-left: 3px solid var(--color-accent);
  border-right: 3px solid var(--color-accent);
  background: rgba(var(--color-primary-rgb), 0.35);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
}
.service-hero .hero-subtitle {
  border-top: 1px solid color-mix(in srgb, var(--color-white) 22%, transparent);
  padding-top: var(--space-4);
}

/* ---------- Ticker: light precision strip ---------- */
.ticker-strip {
  background: var(--color-primary-dark);
  border-top: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  border-bottom: 4px solid var(--color-accent);
}

/* ---------- C3 Divider style 1: curved wave ---------- */
.ld-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.ld-divider svg {
  display: block;
  width: 100%;
  height: var(--space-16);
}
.ld-divider--wave {
  background: var(--color-white);
}
.ld-divider--wave svg path {
  fill: var(--color-light);
}

/* ---------- C3 Divider style 2: stacked parallelograms ---------- */
.ld-divider--planes {
  background: var(--color-light);
}
.ld-divider--planes svg .plane-soft {
  fill: var(--color-primary);
  opacity: 0.3;
}
.ld-divider--planes svg .plane-solid {
  fill: var(--color-primary);
}

/* ============================================================
   Broken-grid split (C6.2): image column narrows, and the
   vehicle-class card overlaps INTO the content column.
   ============================================================ */
.section-white {
  position: relative;
  overflow: hidden;
}
.split {
  grid-template-columns: 1.25fr 1fr;
  align-items: start;
}
.split .split-image {
  position: relative;
  z-index: 1;
}
.split .img-reveal {
  transform: rotate(1.2deg);
  transition: transform var(--transition-slow);
}
.split .img-reveal:hover {
  transform: rotate(0deg);
}
/* The sidebar card breaks the grid boundary to the left */
.split .service-sidebar-card {
  margin-left: calc(-1 * var(--space-16));
  margin-top: calc(-1 * var(--space-10));
  position: relative;
  z-index: 2;
}

/* Floating decorative accent — soft chassis ring, slow float */
.section-white::before {
  content: '';
  position: absolute;
  bottom: var(--space-10);
  left: calc(-1 * var(--space-12));
  width: clamp(var(--space-16), 18vw, calc(var(--space-16) * 4));
  aspect-ratio: 1;
  border: var(--space-2) solid var(--color-accent);
  border-radius: var(--radius-full);
  opacity: 0.05;
  pointer-events: none;
  animation: ld-float 16s ease-in-out infinite alternate;
}
@keyframes ld-float {
  from { transform: translate3d(0, 0, 0); }
  to   { transform: translate3d(var(--space-10), calc(-1 * var(--space-12)), 0); }
}

/* Numbered-journal eyebrow (C5.1) */
.split-content .eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.16em;
  background: color-mix(in srgb, var(--color-accent) 9%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
}
.split-content h2::after {
  content: '';
  display: block;
  width: var(--space-12);
  height: var(--space-1);
  margin-top: var(--space-3);
  border-radius: var(--radius-full);
  background: linear-gradient(90deg, var(--color-accent), transparent);
}

/* ============================================================
   SIGNATURE SECTION (C7): Vehicle-Class Ladder
   The "covers" checklist becomes a weight-class ladder — each
   row carries an ascending capacity bar. Unique to this page.
   ============================================================ */
.service-sidebar-card {
  background: linear-gradient(
    170deg,
    var(--color-white) 0%,
    rgba(var(--color-primary-rgb), 0.05) 100%
  );
  border-top: none;
  border-left: var(--space-1) solid var(--color-accent);
  box-shadow: var(--shadow-xl);
}
.service-sidebar-card h4 {
  font-family: var(--font-heading);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  font-size: var(--font-size-base);
  border-bottom: 2px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
}
.service-sidebar-card ul li {
  position: relative;
  padding-top: var(--space-3);
  padding-bottom: var(--space-4);
  border-bottom: 1px dashed var(--color-gray-light);
}
/* Ascending capacity bar per class row */
.service-sidebar-card ul li::after {
  content: '';
  position: absolute;
  left: var(--space-6);
  bottom: var(--space-1);
  height: var(--space-1);
  border-radius: var(--radius-full);
  background: linear-gradient(
    90deg,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 25%, transparent) 100%
  );
  transition: transform var(--transition-base);
  transform-origin: left center;
}
.service-sidebar-card ul li:nth-child(1)::after { width: 18%; }
.service-sidebar-card ul li:nth-child(2)::after { width: 32%; }
.service-sidebar-card ul li:nth-child(3)::after { width: 46%; }
.service-sidebar-card ul li:nth-child(4)::after { width: 60%; }
.service-sidebar-card ul li:nth-child(5)::after {
  width: 74%;
  background: linear-gradient(
    90deg,
    var(--color-primary) 0%,
    var(--color-accent) 100%
  );
}
.service-sidebar-card ul li:hover::after {
  transform: scaleX(1.15);
}
.service-sidebar-card ul li:last-child {
  border-bottom: none;
}
.service-sidebar-card .btn {
  box-shadow: var(--shadow-md);
}

/* ---------- Answer block: spec-callout tint ---------- */
.answer-block {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
  border-left: none;
  border: 1px solid color-mix(in srgb, var(--color-accent) 25%, transparent);
  border-radius: var(--radius-lg);
  position: relative;
}
.answer-block::before {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-2));
  left: var(--space-8);
  width: var(--space-16);
  height: var(--space-1);
  border-radius: var(--radius-full);
  background: var(--color-accent);
}

/* ---------- Benefits: rotating tinted cards, 2-col rhythm ---------- */
.section-light .grid-2 {
  gap: var(--space-6);
}
.section-light .benefit-item {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  border-bottom: 3px solid transparent;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
.section-light .benefit-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white));
}
.section-light .benefit-item:nth-child(4n+2) {
  background: rgba(var(--color-primary-rgb), 0.06);
}
.section-light .benefit-item:nth-child(4n+3) {
  background: rgba(var(--color-secondary-rgb), 0.09);
}
.section-light .benefit-item:nth-child(4n+4) {
  background: var(--color-white);
  box-shadow: var(--shadow-card);
}
.section-light .benefit-item:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-lg);
  border-bottom-color: var(--color-accent);
}
.section-light .benefit-item svg {
  flex-shrink: 0;
  margin-top: var(--space-1);
  transition: transform var(--transition-base);
}
.section-light .benefit-item:hover svg {
  transform: scale(1.15);
}

/* ---------- Mid CTA: dual-tone gradient + noise ---------- */
.cta-banner {
  background: linear-gradient(
    115deg,
    var(--color-primary) 0%,
    var(--color-primary-dark) 45%,
    color-mix(in srgb, var(--color-accent) 45%, var(--color-primary-dark)) 100%
  );
}
.cta-banner p {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  max-width: var(--bp-tablet);
  margin-left: auto;
  margin-right: auto;
}

/* ---------- FAQ: keyline cards with numbered spines ---------- */
#faq .faq-grid {
  counter-reset: ld-faq;
}
#faq .faq-item {
  counter-increment: ld-faq;
  position: relative;
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
#faq .faq-item::before {
  content: counter(ld-faq, decimal-leading-zero);
  position: absolute;
  bottom: var(--space-2);
  right: var(--space-4);
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  font-weight: 800;
  color: rgba(var(--color-primary-rgb), 0.08);
  line-height: 1;
  pointer-events: none;
}
#faq .faq-item:nth-child(odd) {
  border-top: 3px solid var(--color-accent);
}
#faq .faq-item:nth-child(even) {
  border-top: 3px solid var(--color-primary);
}
#faq .faq-item:hover {
  border-color: color-mix(in srgb, var(--color-accent) 50%, transparent);
  box-shadow: var(--shadow-md);
}

/* ---------- Closing CTA: left-anchored glow (C4.1 variant) ---------- */
.closing-cta {
  position: relative;
  overflow: hidden;
  background: linear-gradient(
    160deg,
    var(--color-primary-dark) 0%,
    var(--color-primary) 100%
  );
}
.closing-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    ellipse at 12% 88%,
    color-mix(in srgb, var(--color-accent) 20%, transparent) 0%,
    transparent 55%
  );
  pointer-events: none;
}
.closing-cta .container {
  position: relative;
  z-index: 1;
}

/* ---------- Micro-interaction: arrow nudge on primary CTAs ---------- */
.btn-accent {
  transition: all var(--transition-base), letter-spacing var(--transition-base);
}
.btn-accent:hover {
  letter-spacing: 0.08em;
}
.btn-accent svg {
  transition: transform var(--transition-base);
}
.btn-accent:hover svg {
  transform: translateX(var(--space-1)) rotate(-4deg);
}

/* ---------- Reveal support (fail-open, gated under html.js-anim) ---------- */
html.js-anim .section-light .benefit-item {
  opacity: 0;
  transform: translateX(calc(-1 * var(--space-4)));
  transition: opacity var(--transition-slow), transform var(--transition-slow);
}
html.js-anim .section-light .benefit-item:nth-child(even) {
  transform: translateX(var(--space-4));
}
html.js-anim .section-light .benefit-item.animated,
html.js-anim .section-light .benefit-item.revealed {
  opacity: 1;
  transform: translateX(0);
}

/* ---------- Responsive ---------- */
@media (max-width: 1024px) {
  .split {
    grid-template-columns: 1fr 1fr;
  }
  .split .service-sidebar-card {
    margin-left: calc(-1 * var(--space-8));
  }
}
@media (max-width: 768px) {
  .service-hero {
    min-height: 50vh;
  }
  .split {
    grid-template-columns: 1fr;
  }
  .split .service-sidebar-card {
    margin-left: 0;
    margin-top: var(--space-6);
  }
  .split .img-reveal {
    transform: none;
  }
  .section-white::before {
    display: none;
  }
  .ld-divider svg {
    height: var(--space-8);
  }
  #faq .faq-item::before {
    font-size: var(--font-size-2xl);
  }
}

/* ---------- Reduced motion ---------- */
@media (prefers-reduced-motion: reduce) {
  .section-white::before {
    animation: none;
  }
  .split .img-reveal,
  .section-light .benefit-item,
  .section-light .benefit-item svg,
  .service-sidebar-card ul li::after,
  .btn-accent,
  .btn-accent svg {
    transition: none;
  }
}
</style>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

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
        <span itemprop="name">Light Duty Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[7]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><polygon points="3 11 22 2 13 21 11 13 3 11" /></svg>
      Cars &bull; SUVs &bull; Crossovers &bull; Minivans &bull; Small Trucks
    </div>
    <h1 class="hero-title" id="service-hero-heading">Light Duty Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Efficient, careful towing for all passenger vehicles under 10,000 lbs throughout Fort Bend County. Right method for your vehicle, right price, right on time.</p>
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

<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#128664;&nbsp; Cars, SUVs &amp; Small Trucks</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min ETA — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Right Method Per Vehicle Type</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — 13 Years Serving Richmond</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128664;&nbsp; Cars, SUVs &amp; Small Trucks</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min ETA — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Right Method Per Vehicle Type</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — 13 Years Serving Richmond</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><polygon points="3 11 22 2 13 21 11 13 3 11" /></svg>
          Light Duty Towing in Richmond TX
        </span>
        <h2>The Right Tow for the Right Vehicle — No Guessing</h2>
        <div class="prose">
          <p>Light duty towing covers the vast majority of vehicles that break down in Richmond and throughout Fort Bend County every day: sedans, crossovers, SUVs, minivans, and small to mid-size pickup trucks under 10,000 lbs GVWR. These vehicles make up the bulk of what we tow, and 13 years of experience handling them means we've worked through every situation these vehicles can present.</p>
          <p>The most important thing we do before dispatching on a light duty call is confirm the right equipment for your specific vehicle. A standard FWD sedan is safely moved with wheel-lift equipment at a lower cost. An all-wheel drive crossover or a lowered sport coupe needs flatbed to protect the drivetrain and undercarriage — and that matters enough that we'd rather ask and get it right than guess and cost you a drivetrain repair.</p>
          <p>Once we arrive, the process is direct: vehicle assessment, confirm tie-down points, proper loading, secure transit, delivery to your chosen destination. We deliver to any mechanic, dealership, or private address throughout Fort Bend County. There's no pressure to use a particular shop, no detour to a holding lot, no drama about your destination choice.</p>
          <p>Our service area covers Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno — the full 20-mile radius around our Richmond base. Interstate and highway calls on I-69, Hwy 90, and Hwy 36 are within our regular response zone.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[23]); ?>"
               alt="Light duty towing service in Richmond TX by Twin Cities Towing"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Light Duty Towing Covers:</h4>
          <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Sedans, coupes, hatchbacks</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Crossovers &amp; compact SUVs</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Minivans &amp; passenger vans</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Light pickup trucks (under 10k lbs)</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Wheel-lift or flatbed as needed</li>
          </ul>
          <a href="/contact/" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Light Duty Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What is light duty towing and do I need it?</h2>
      <p>Light duty towing refers to towing passenger vehicles under approximately 10,000 lbs — cars, SUVs, minivans, and small trucks. If you drive a standard personal vehicle that won't start or can't be driven safely, light duty towing is the right call. Twin Cities Towing INC handles these calls 24/7 throughout Fort Bend County.</p>
    </div>
  </div>
</section>

<div class="ld-divider ld-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z"/></svg>
</div>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Light Duty Towing Done Right in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915" />
  <circle cx="12" cy="12" r="3" /></svg>
        <div>
          <h3>Method Matched to Vehicle</h3>
          <p class="prose">We confirm your drivetrain before dispatching equipment. AWD and 4WD vehicles go on flatbed; standard FWD/RWD use wheel-lift. This one step prevents thousands in avoidable drivetrain damage.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><polygon points="3 11 22 2 13 21 11 13 3 11" /></svg>
        <div>
          <h3>Deliver to Your Mechanic of Choice</h3>
          <p class="prose">We go where you tell us — any licensed shop, dealership, or address in Fort Bend County. No pressure, no affiliated shop steering, no detour to a holding yard. Your destination, your decision.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        <div>
          <h3>Transparent Pricing Every Time</h3>
          <p class="prose">We quote before we move. Light duty tows in Fort Bend County typically start at $75–$125 depending on distance. Flatbed tows cost slightly more than wheel-lift — we explain the difference clearly when you call.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>24/7 Response — 20-40 Minute ETA</h3>
          <p class="prose">Light duty doesn't mean light urgency. We treat every call with the same immediacy — dispatch within 2 minutes, ETA confirmed before you hang up, driver on the road before you've put your phone away.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ld-divider ld-divider--planes" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon class="plane-soft" points="0,20 1200,40 1200,80 0,80"/><polygon class="plane-solid" points="0,40 1200,20 1200,80 0,80"/></svg>
</div>

<section class="cta-banner" aria-labelledby="light-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Vehicle Won't Move?</span>
    <h2 id="light-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Your Car, the Right Truck, the Right Method — 20–40 Minutes Away</h2>
    <p>Twin Cities Towing INC handles light duty towing calls throughout Richmond and Fort Bend County with properly matched equipment and experienced drivers. Available right now.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Light Duty Tow
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Light Duty Towing FAQs &mdash; Richmond, TX</h2>
    </div>
    <div class="faq-grid" data-animate="fade-up">
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

<section class="closing-cta" aria-labelledby="light-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Light Duty Towing &mdash; Richmond TX</span>
      <h2 id="light-close-heading">Your Vehicle Handled Carefully — Delivered Without Detours</h2>
      <p class="closing-lead">Twin Cities Towing INC has been moving passenger vehicles throughout Fort Bend County since 2011. Call for immediate dispatch or request online — 24/7, upfront pricing, your destination of choice.</p>
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
