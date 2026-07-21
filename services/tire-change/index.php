<?php
/**
 * Twin Cities Towing INC — Tire Change Service
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Tire Change Service Richmond TX | Twin Cities Towing INC';
$pageDescription = 'On-site tire change service in Richmond, TX when you\'re stranded with a flat. Twin Cities Towing INC swaps your spare roadside in Fort Bend County — 24/7, fast response.';
$ogImage         = $clientPhotos[20];
$currentPage     = 'tire-change';

$serviceFaqs = [
    ['q' => 'Can you change my tire if I don\'t have a spare?', 'a' => 'If you have no usable spare, we can tow your vehicle to a tire shop of your choice throughout Fort Bend County. We\'ll load your car and deliver it to wherever you need new tires — same driver, one call. No need to call a second service.'],
    ['q' => 'How long does a roadside tire change take in Richmond, TX?', 'a' => 'Once we arrive — typically 20–35 minutes in the Richmond area — changing to your spare takes about 10–15 minutes. We properly torque the lug nuts, check spare pressure, and confirm the vehicle is safe before we leave. You\'re back on the road in under an hour from your first call.'],
    ['q' => 'Do you change run-flat tires?', 'a' => 'Run-flat tires that have been driven flat cannot simply be swapped and continued — most manufacturers limit zero-pressure driving to 50 miles max. We can swap your run-flat for a spare or tow the vehicle to a dealership or tire shop equipped to replace them properly.'],
    ['q' => 'What if my spare is also flat or damaged?', 'a' => 'If your spare isn\'t usable, we move straight to a tow — same driver, no second call, no additional dispatch fee. We\'ll take your vehicle to whichever tire shop you choose in the Richmond or Fort Bend County area.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Tire Change Service']]],
        ['@type' => 'Service', '@id' => $domain . '/services/tire-change/#service',
         'name' => 'Tire Change Service', 'url' => $domain . '/services/tire-change',
         'description' => 'Roadside flat tire change service in Richmond TX. Fast response, proper lug torque, 24/7 availability throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Tire Change Service'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   Tire Change Service — page-specific premium styles
   Archetype: "Roadway" — sweeping gradient hero with dashed
   road-line motif, torn-edge + wave dividers, framed-offset
   asymmetric split, roadside steps timeline signature, slow
   spinning tire-ring accent. Tokens only — no hardcoded values.
   ============================================================ */

/* ---------- Typography baseline (C5.5) ---------- */
h1, h2, h3, h4 {
  text-wrap: balance;
}

/* ---------- C1.4 Layered hero: sweep gradient + coarse grain ---------- */
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
  background: linear-gradient(
    115deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.62) 45%,
    rgba(var(--color-secondary-rgb), 0.55) 75%,
    color-mix(in srgb, var(--color-warning) 18%, transparent) 100%
  );
  pointer-events: none;
}
.service-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='r'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.55' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23r)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.06;
  pointer-events: none;
}
.service-hero .hero-content {
  position: relative;
  z-index: 2;
  padding: var(--space-16) var(--space-6) var(--space-12);
}
/* Dashed road-line under the hero title */
.service-hero .hero-title {
  position: relative;
  padding-bottom: var(--space-5);
}
.service-hero .hero-title::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: min(70%, calc(var(--space-16) * 4));
  height: 0;
  border-bottom: 3px dashed color-mix(in srgb, var(--color-warning) 75%, var(--color-white));
  opacity: 0.85;
}
.service-hero .hero-eyebrow {
  border-color: color-mix(in srgb, var(--color-warning) 55%, transparent);
  color: color-mix(in srgb, var(--color-warning) 60%, var(--color-white));
  background: rgba(var(--color-primary-rgb), 0.3);
}

/* ---------- Ticker: hazard strip ---------- */
.ticker-strip {
  background: repeating-linear-gradient(
    -45deg,
    var(--color-primary) 0,
    var(--color-primary) var(--space-8),
    var(--color-primary-dark) var(--space-8),
    var(--color-primary-dark) var(--space-16)
  );
  border-top: 3px solid var(--color-warning);
  border-bottom: 3px solid var(--color-warning);
}

/* ---------- C3 Divider style 1: torn shoulder edge ---------- */
.tc-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.tc-divider svg {
  display: block;
  width: 100%;
  height: var(--space-10);
}
.tc-divider--torn {
  background: var(--color-white);
}
.tc-divider--torn svg path {
  fill: var(--color-light);
}

/* ---------- C3 Divider style 2: rolling wave ---------- */
.tc-divider--roll {
  background: var(--color-light);
}
.tc-divider--roll svg .roll-back {
  fill: var(--color-primary);
  opacity: 0.35;
}
.tc-divider--roll svg .roll-front {
  fill: var(--color-primary);
}

/* ============================================================
   Asymmetric split (C6/C11): image column dominates with an
   offset accent frame; content column narrows and drops.
   ============================================================ */
.section-white {
  position: relative;
  overflow: hidden;
}
.split-reverse {
  grid-template-columns: 1.15fr 1fr;
  align-items: start;
}
.split-reverse .split-content {
  padding-top: var(--space-10); /* broken-grid vertical offset */
}
.split-reverse .split-image {
  position: relative;
  padding: 0 var(--space-4) var(--space-4) 0;
}
/* Solid offset plate behind the photo (C11.1) */
.split-reverse .split-image::before {
  content: '';
  position: absolute;
  top: var(--space-4);
  left: var(--space-4);
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    color-mix(in srgb, var(--color-warning) 55%, var(--color-accent)) 0%,
    var(--color-accent) 100%
  );
  border-radius: var(--radius-lg);
  opacity: 0.9;
}
.split-reverse .img-reveal {
  position: relative;
  z-index: 1;
}

/* Floating decorative accent — slow-spinning tire ring, 5% opacity */
.section-white::after {
  content: '';
  position: absolute;
  bottom: calc(-1 * var(--space-16));
  left: calc(-1 * var(--space-16));
  width: clamp(var(--space-16), 24vw, calc(var(--space-16) * 5));
  aspect-ratio: 1;
  border: var(--space-3) solid var(--color-primary);
  outline: 2px dashed var(--color-primary);
  outline-offset: calc(-1 * var(--space-6));
  border-radius: var(--radius-full);
  opacity: 0.05;
  pointer-events: none;
  animation: tc-roll 60s linear infinite;
}
@keyframes tc-roll {
  from { transform: rotate(0turn); }
  to   { transform: rotate(1turn); }
}

.split-content .eyebrow {
  display: inline-flex;
  align-items: center;
  color: var(--color-secondary);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.14em;
  padding-bottom: var(--space-1);
  border-bottom: 3px double var(--color-accent);
}

/* ---------- Answer block: roadside marker ---------- */
.answer-block {
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-left: var(--space-2) solid var(--color-warning);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-card);
  position: relative;
  overflow: hidden;
}
.answer-block::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: var(--space-16);
  height: var(--space-16);
  background: radial-gradient(
    circle at 100% 0%,
    color-mix(in srgb, var(--color-warning) 22%, transparent) 0%,
    transparent 70%
  );
  pointer-events: none;
}

/* ============================================================
   SIGNATURE SECTION (C7): On-Site Steps Timeline
   The 4-step process becomes a roadside timeline — dashed
   center-line rail, mile-marker nodes, alternating tinted
   stops. Unique to this page.
   ============================================================ */
.tc-steps {
  position: relative;
  overflow: hidden;
}
.tc-steps .section-header .eyebrow {
  color: var(--color-secondary);
}
.tc-steps .process-steps {
  position: relative;
  max-width: var(--bp-tablet);
  margin-left: auto;
  margin-right: auto;
  padding-left: var(--space-10);
}
/* Dashed road center-line rail */
.tc-steps .process-steps::before {
  content: '';
  position: absolute;
  top: var(--space-4);
  bottom: var(--space-4);
  left: var(--space-5);
  width: 0;
  border-left: 3px dashed color-mix(in srgb, var(--color-primary) 45%, transparent);
}
.tc-steps .process-step {
  position: relative;
  border-bottom: none;
  margin-bottom: var(--space-5);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
/* Rotating tinted stops */
.tc-steps .process-step:nth-child(4n+1) {
  background: rgba(var(--color-primary-rgb), 0.06);
}
.tc-steps .process-step:nth-child(4n+2) {
  background: color-mix(in srgb, var(--color-accent) 8%, var(--color-white));
}
.tc-steps .process-step:nth-child(4n+3) {
  background: rgba(var(--color-secondary-rgb), 0.09);
}
.tc-steps .process-step:nth-child(4n+4) {
  background: color-mix(in srgb, var(--color-warning) 9%, var(--color-white));
}
.tc-steps .process-step:hover {
  transform: translateX(var(--space-2));
  box-shadow: var(--shadow-md);
}
/* Mile-marker node bridging the rail */
.tc-steps .process-step-num {
  position: absolute;
  left: calc(-1 * var(--space-12));
  top: var(--space-5);
  width: var(--space-10);
  height: var(--space-10);
  background: var(--color-primary);
  border: 3px solid var(--color-light);
  box-shadow: var(--shadow-md), 0 0 0 3px color-mix(in srgb, var(--color-accent) 45%, transparent);
  font-size: var(--font-size-base);
  transition: background var(--transition-base), transform var(--transition-base);
}
.tc-steps .process-step:hover .process-step-num {
  background: var(--color-accent);
  transform: scale(1.1);
}
.tc-steps .process-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-1);
}
/* Alternating slight horizontal stagger for rhythm */
.tc-steps .process-step:nth-child(even) {
  margin-left: var(--space-8);
}
.tc-steps .process-step:nth-child(even) .process-step-num {
  left: calc(-1 * var(--space-12) - var(--space-8));
}

/* ---------- Mid CTA: dusk-road gradient + glow ---------- */
.cta-banner {
  background: linear-gradient(
    150deg,
    var(--color-dark) 0%,
    var(--color-primary) 50%,
    var(--color-secondary) 100%
  );
}
.cta-banner::before {
  background:
    radial-gradient(
      ellipse at 20% 100%,
      color-mix(in srgb, var(--color-warning) 16%, transparent) 0%,
      transparent 55%
    );
  opacity: 1;
}
.cta-banner p {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  max-width: var(--bp-tablet);
  margin-left: auto;
  margin-right: auto;
}

/* ---------- FAQ: tread-block cards ---------- */
#faq .faq-item {
  background: var(--color-white);
  border-radius: var(--radius-md);
  border: 1px solid var(--color-gray-light);
  border-bottom: var(--space-1) solid transparent;
  transition: border-color var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
}
#faq .faq-item:nth-child(3n+1) {
  border-bottom-color: var(--color-accent);
}
#faq .faq-item:nth-child(3n+2) {
  border-bottom-color: var(--color-primary);
}
#faq .faq-item:nth-child(3n+3) {
  border-bottom-color: var(--color-warning);
}
#faq .faq-item:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-lg);
}
#faq .faq-icon {
  background: linear-gradient(
    135deg,
    var(--color-secondary) 0%,
    var(--color-primary) 100%
  );
}

/* ---------- Closing CTA: dashed horizon line ---------- */
.closing-cta {
  position: relative;
  overflow: hidden;
}
.closing-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    ellipse at 50% 120%,
    color-mix(in srgb, var(--color-accent) 20%, transparent) 0%,
    transparent 60%
  );
  pointer-events: none;
}
.closing-cta::after {
  content: '';
  position: absolute;
  left: 10%;
  right: 10%;
  top: var(--space-6);
  border-top: 2px dashed color-mix(in srgb, var(--color-white) 18%, transparent);
  pointer-events: none;
}
.closing-cta .container {
  position: relative;
  z-index: 1;
}

/* ---------- Micro-interaction: lug-nut icon spin on CTA hover ---------- */
.hero-buttons .btn svg,
.closing-actions .btn svg {
  transition: transform var(--transition-base);
}
.hero-buttons .btn:hover svg,
.closing-actions .btn:hover svg {
  transform: rotate(90deg);
}
.btn-accent {
  box-shadow: var(--shadow-md);
}
.btn-accent:hover {
  box-shadow: var(--shadow-lg);
}

/* ---------- Reveal support (fail-open, gated under html.js-anim) ---------- */
html.js-anim .tc-steps .process-step {
  opacity: 0;
  transform: translateX(calc(-1 * var(--space-6)));
  transition: opacity var(--transition-slow), transform var(--transition-slow);
}
html.js-anim .tc-steps .process-step.animated,
html.js-anim .tc-steps .process-step.revealed {
  opacity: 1;
  transform: translateX(0);
}

/* ---------- Responsive ---------- */
@media (max-width: 1024px) {
  .split-reverse {
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 768px) {
  .service-hero {
    min-height: 50vh;
  }
  .split-reverse {
    grid-template-columns: 1fr;
  }
  .split-reverse .split-content {
    padding-top: 0;
  }
  .tc-steps .process-steps {
    padding-left: var(--space-8);
  }
  .tc-steps .process-step:nth-child(even) {
    margin-left: 0;
  }
  .tc-steps .process-step:nth-child(even) .process-step-num {
    left: calc(-1 * var(--space-12));
  }
  .tc-steps .process-step-num {
    width: var(--space-8);
    height: var(--space-8);
    font-size: var(--font-size-sm);
    left: calc(-1 * var(--space-10));
  }
  .tc-steps .process-steps::before {
    left: var(--space-4);
  }
  .section-white::after {
    display: none;
  }
  .tc-divider svg {
    height: var(--space-6);
  }
}

/* ---------- Reduced motion ---------- */
@media (prefers-reduced-motion: reduce) {
  .section-white::after {
    animation: none;
  }
  .tc-steps .process-step,
  .tc-steps .process-step-num,
  #faq .faq-item,
  .hero-buttons .btn svg,
  .closing-actions .btn svg {
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
        <span itemprop="name">Tire Change Service</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[20]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><circle cx="12" cy="12" r="10" />
  <circle cx="12" cy="12" r="2" /></svg>
      Flat Tire &bull; Roadside Swap &bull; Safe &amp; Fast
    </div>
    <h1 class="hero-title" id="service-hero-heading">Tire Change Service<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Flat tire anywhere in Fort Bend County? We come to you, swap your spare on the roadside, and get you back on the road — typically within 45 minutes of your call.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get Tire Help Now
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
    <span>&#128665;&nbsp; Spare Tire Swap — On the Spot</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Proper Lug Nut Torque</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; No Spare? We Tow You</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 — Any Day, Any Road</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128665;&nbsp; Spare Tire Swap — On the Spot</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Proper Lug Nut Torque</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; No Spare? We Tow You</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 — Any Day, Any Road</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[22]); ?>"
               alt="Technician changing flat tire roadside in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><circle cx="12" cy="12" r="10" />
  <circle cx="12" cy="12" r="2" /></svg>
          Tire Change Service in Richmond TX
        </span>
        <h2>Flat on the Side of the Road? We're Closer Than You Think</h2>
        <div class="prose">
          <p>A flat tire on I-69 at rush hour or on a dark residential street at midnight are two very different situations — but they share the same core problem: your vehicle won't move safely on that tire, and you need help fast. Twin Cities Towing INC responds to flat tire calls throughout Richmond, Rosenberg, and Fort Bend County 24 hours a day, with a driver who arrives with the right tools to swap your spare on the spot.</p>
          <p>Our tire change service is more than just loosening and retightening lug nuts. We verify your spare is properly inflated before mounting, torque all lug nuts to the manufacturer's specified rating (not just "tight enough"), check for damage to the wheel or hub from the flat, and confirm the vehicle is sitting properly before we let you drive away. We don't rush a tire change — a wheel that comes loose at 70 mph is a catastrophe, not a minor inconvenience.</p>
          <p>If your spare tire is flat, damaged, or missing entirely, we transition directly to a tow without requiring you to make a second call. The same driver who came to change your tire loads your vehicle and delivers it to the tire shop of your choice. This seamless handoff saves you the wait time and the confusion of managing two separate service calls in an already stressful situation.</p>
          <p>We handle tire changes on all vehicle types: sedans, SUVs, trucks, minivans, and crossovers. For commercial vehicles or oversized tires, contact us with your vehicle specs and we'll confirm capability before dispatch.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What happens if I have a flat tire and no spare in Richmond, TX?</h2>
      <p>Twin Cities Towing INC will tow your vehicle to any tire shop you choose in Fort Bend County — same driver, same call, no second dispatch fee. We don't leave you stranded because the spare didn't work out.</p>
    </div>
  </div>
</section>

<div class="tc-divider tc-divider--torn" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,44 L90,38 L170,48 L260,34 L340,46 L430,36 L520,48 L610,32 L700,44 L790,36 L880,47 L970,34 L1060,45 L1150,38 L1200,44 L1200,60 Z"/></svg>
</div>

<section class="section-light tc-steps" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Our Tire Change Process</span>
      <h2>How We Handle Flat Tires in Fort Bend County</h2>
    </div>
    <ol class="process-steps" data-animate="fade-up">
      <li class="process-step">
        <div class="process-step-num">1</div>
        <div>
          <h3>Call &amp; Confirm Your Location</h3>
          <p class="prose">Give us your position and vehicle type. We dispatch in under 2 minutes and give you an ETA. Most Richmond-area flat tire calls: 20–35 minutes to arrival.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">2</div>
        <div>
          <h3>Assess Spare Tire &amp; Flat</h3>
          <p class="prose">We check your spare for pressure and condition before mounting it. We also inspect the flat tire and wheel for damage that might affect safe driving on the spare.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">3</div>
        <div>
          <h3>Swap &amp; Properly Torque</h3>
          <p class="prose">We jack the vehicle at the correct lift point, remove the flat, mount the spare, and torque all lug nuts to spec. No guessing — proper torque prevents wheel-off incidents.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">4</div>
        <div>
          <h3>Safety Check &amp; Clear to Drive</h3>
          <p class="prose">We confirm proper seating, recheck lug torque, and advise on spare tire driving limits (distance and speed). If anything isn't right, we say so before you leave the scene.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<section class="cta-banner" aria-labelledby="tire-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Flat Tire Right Now?</span>
    <h2 id="tire-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">One Call — Spare Mounted, Torqued, and You're Moving</h2>
    <p>Twin Cities Towing INC responds to flat tire calls throughout Fort Bend County 24/7. Whether you're on a highway shoulder or in a parking lot, we get there fast and do the job right.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Tire Help
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
      <h2>Tire Change FAQs &mdash; Richmond, TX</h2>
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

<div class="tc-divider tc-divider--roll" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path class="roll-back" d="M0,35 C250,75 850,5 1200,45 L1200,80 L0,80 Z"/><path class="roll-front" d="M0,55 C350,85 900,25 1200,60 L1200,80 L0,80 Z"/></svg>
</div>

<section class="closing-cta" aria-labelledby="tire-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Tire Change Service &mdash; Richmond TX</span>
      <h2 id="tire-close-heading">Flat Tire Fixed on the Spot — or Towed to the Shop</h2>
      <p class="closing-lead">Twin Cities Towing INC handles flat tires throughout Richmond and Fort Bend County with the right tools and technique. If your spare works, we mount it and send you on your way. If not, we tow you — same call, no extra wait.</p>
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
      <a href="/services/roadside-assistance/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z" /></svg>
        All Roadside Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
