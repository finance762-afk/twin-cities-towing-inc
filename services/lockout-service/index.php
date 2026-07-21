<?php
/**
 * Twin Cities Towing INC — Lockout Service
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Car Lockout Service Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Fast car lockout service in Richmond, TX. Locked your keys inside? Twin Cities Towing INC unlocks your vehicle without damage in minutes throughout Fort Bend County. 24/7.';
$ogImage         = $clientPhotos[3];
$currentPage     = 'lockout-service';

$serviceFaqs = [
    ['q' => 'How do you unlock a car without damaging the door or window?', 'a' => 'We use professional slim jim tools, air wedge kits, and long-reach tools designed to work through existing door seal gaps — not by forcing or prying. The goal is always zero damage to your vehicle. Our operators are trained specifically on lockout technique and work methodically to access the lock or interior handle safely.'],
    ['q' => 'Do you unlock newer cars with push-button start and keyless entry?', 'a' => 'Yes. Modern keyless entry vehicles still have a physical key cylinder accessible through the door handle or a hidden location. Our tools and techniques work on virtually all passenger vehicle makes and models through 2025, including push-button start systems. If you have an unusual vehicle, give us the make and model when you call and we\'ll confirm before dispatch.'],
    ['q' => 'How fast can you reach me for a lockout in Richmond, TX?', 'a' => 'Most lockout calls in the Richmond and Fort Bend County area see us on-site within 20–35 minutes. Once there, most vehicles are unlocked in 5–15 minutes, putting you back in your car well under an hour from your first call.'],
    ['q' => 'I left my keys in the car with the engine running — is that an emergency?', 'a' => 'That\'s a priority call. A running engine with keys inside means fuel consumption, potential overheating risk if parked in the sun, and a security concern. Call us immediately and mention the engine is running — we\'ll bump the dispatch priority and get there as fast as possible.']];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Lockout Service']]],
        ['@type' => 'Service', '@id' => $domain . '/services/lockout-service/#service',
         'name' => 'Lockout Service', 'url' => $domain . '/services/lockout-service',
         'description' => 'Fast car lockout service in Richmond TX. Professional unlocking without damage, available 24/7 throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Vehicle Lockout Service'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
        generateFAQSchema($serviceFaqs)]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ============================================================
   Lockout Service — page-specific premium styles
   Archetype: "Security Keyline" — vertical duotone hero framed
   by an inset keyline, double-wave + reverse-diagonal dividers,
   no-damage promise band signature, offset FAQ masonry.
   Tokens only — no hardcoded values.
   ============================================================ */

/* ---------- Typography baseline (C5.5) ---------- */
h1, h2, h3, h4 {
  text-wrap: balance;
}

/* ---------- C1.4 Layered hero: vertical duotone + keyline frame ---------- */
.service-hero {
  min-height: 60vh;
  isolation: isolate;
}
.service-hero .hero-overlay {
  background: rgba(var(--color-primary-rgb), 0.45);
}
.service-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    180deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-secondary-rgb), 0.62) 52%,
    rgba(var(--color-primary-rgb), 0.94) 100%
  );
  pointer-events: none;
}
.service-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='g'%3E%3CfeTurbulence type='turbulence' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23g)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
/* Inset keyline frame — the "lock plate" motif */
.service-hero .hero-content {
  position: relative;
  z-index: 2;
  margin: var(--space-8);
  padding: var(--space-12) var(--space-8);
  border: 1px solid color-mix(in srgb, var(--color-white) 25%, transparent);
  border-radius: var(--radius-xl);
  background: rgba(var(--color-primary-rgb), 0.18);
  backdrop-filter: blur(3px);
  -webkit-backdrop-filter: blur(3px);
}
/* Keyline corner ticks */
.service-hero .hero-content::before,
.service-hero .hero-content::after {
  content: '';
  position: absolute;
  width: var(--space-8);
  aspect-ratio: 1;
  border-color: var(--color-accent);
  border-style: solid;
  pointer-events: none;
}
.service-hero .hero-content::before {
  top: calc(-1 * var(--space-1));
  left: calc(-1 * var(--space-1));
  border-width: 3px 0 0 3px;
  border-top-left-radius: var(--radius-lg);
}
.service-hero .hero-content::after {
  bottom: calc(-1 * var(--space-1));
  right: calc(-1 * var(--space-1));
  border-width: 0 3px 3px 0;
  border-bottom-right-radius: var(--radius-lg);
}
.service-hero .hero-eyebrow {
  border: none;
  background: color-mix(in srgb, var(--color-accent) 16%, transparent);
  box-shadow: var(--shadow-sm);
}

/* ---------- Ticker: keyline strip ---------- */
.ticker-strip {
  background: var(--color-dark);
  border-top: 1px dashed color-mix(in srgb, var(--color-accent) 55%, transparent);
  border-bottom: 1px dashed color-mix(in srgb, var(--color-accent) 55%, transparent);
}

/* ---------- C3 Divider style 1: double wave ---------- */
.lk-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.lk-divider svg {
  display: block;
  width: 100%;
  height: var(--space-16);
}
.lk-divider--doublewave {
  background: var(--color-white);
}
.lk-divider--doublewave svg .wave-soft {
  fill: var(--color-light);
  opacity: 0.45;
}
.lk-divider--doublewave svg .wave-solid {
  fill: var(--color-light);
}

/* ---------- C3 Divider style 2: reverse diagonal shear ---------- */
.lk-divider--shear {
  background: var(--color-light);
}
.lk-divider--shear svg polygon {
  fill: var(--color-primary);
}

/* ---------- Intro split: keyline editorial ---------- */
.section-white {
  position: relative;
  overflow: hidden;
}
/* Floating decorative accent — slow-turning key ring, 6% opacity */
.section-white::after {
  content: '';
  position: absolute;
  top: var(--space-12);
  right: calc(-1 * var(--space-10));
  width: clamp(var(--space-16), 16vw, calc(var(--space-16) * 3.5));
  aspect-ratio: 1;
  border: var(--space-1) dashed var(--color-primary);
  border-radius: var(--radius-full);
  opacity: 0.06;
  pointer-events: none;
  animation: lk-turn 40s linear infinite;
}
@keyframes lk-turn {
  from { transform: rotate(0turn); }
  to   { transform: rotate(1turn); }
}
.split-content .eyebrow {
  display: inline-flex;
  align-items: center;
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.18em;
  padding: var(--space-1) var(--space-3);
  border: 1px solid color-mix(in srgb, var(--color-primary) 30%, transparent);
  border-radius: var(--radius-sm);
}
.split-content h2 {
  padding-left: var(--space-5);
  border-left: var(--space-1) solid var(--color-accent);
}
.split .img-reveal {
  box-shadow: var(--shadow-xl);
  border: var(--space-2) solid var(--color-white);
  outline: 1px solid var(--color-gray-light);
}

/* Sidebar facts card: vault-plate styling */
.service-sidebar-card {
  background: var(--color-dark);
  border-top: none;
  box-shadow: var(--shadow-xl);
  position: relative;
  overflow: hidden;
}
.service-sidebar-card::before {
  content: '';
  position: absolute;
  inset: var(--space-2);
  border: 1px dashed color-mix(in srgb, var(--color-white) 20%, transparent);
  border-radius: var(--radius-md);
  pointer-events: none;
}
.service-sidebar-card h4 {
  color: var(--color-white);
  border-bottom-color: color-mix(in srgb, var(--color-white) 15%, transparent);
  letter-spacing: 0.06em;
}
.service-sidebar-card ul li {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  border-bottom-color: color-mix(in srgb, var(--color-white) 10%, transparent);
}
.service-sidebar-card ul li svg {
  color: var(--color-accent);
}
.service-sidebar-card .btn {
  position: relative;
  z-index: 1;
}

/* ============================================================
   SIGNATURE SECTION (C7): No-Damage Promise Band
   The AEO answer block becomes a centered promise band with a
   double keyline, corner ticks, and a shield-ring watermark.
   Unique to this page.
   ============================================================ */
.answer-block.lk-promise {
  background:
    radial-gradient(
      ellipse at 85% 20%,
      color-mix(in srgb, var(--color-accent) 10%, transparent) 0%,
      transparent 55%
    ),
    rgba(var(--color-primary-rgb), 0.05);
  border-left: none;
  border: 1px solid color-mix(in srgb, var(--color-primary) 25%, transparent);
  outline: 1px solid color-mix(in srgb, var(--color-accent) 35%, transparent);
  outline-offset: var(--space-1);
  border-radius: var(--radius-lg);
  text-align: center;
  padding: var(--space-10) var(--space-12);
  margin-top: var(--space-12);
  position: relative;
}
.answer-block.lk-promise h2 {
  display: inline-block;
  position: relative;
  padding: 0 var(--space-8);
}
/* Keyline dashes flanking the promise heading */
.answer-block.lk-promise h2::before,
.answer-block.lk-promise h2::after {
  content: '';
  position: absolute;
  top: 50%;
  width: var(--space-6);
  height: 2px;
  background: var(--color-accent);
  transform: translateY(-50%);
}
.answer-block.lk-promise h2::before {
  left: 0;
}
.answer-block.lk-promise h2::after {
  right: 0;
}
.answer-block.lk-promise p {
  max-width: 65ch;
  margin: 0 auto;
  font-size: var(--font-size-base);
}
/* Shield-ring watermark */
.answer-block.lk-promise::after {
  content: '';
  position: absolute;
  bottom: calc(-1 * var(--space-12));
  left: calc(-1 * var(--space-10));
  width: var(--space-16);
  aspect-ratio: 1;
  border: var(--space-2) solid var(--color-primary);
  border-radius: var(--radius-full);
  opacity: 0.07;
  pointer-events: none;
}

/* ---------- Benefits: keyline cards with rotating tints ---------- */
.section-light .benefit-item {
  padding: var(--space-6);
  border-radius: var(--radius-sm);
  position: relative;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
/* Rotating tints — accent-led order (distinct from sibling pages) */
.section-light .benefit-item:nth-child(4n+1) {
  background: color-mix(in srgb, var(--color-accent) 9%, var(--color-white));
  border-top: 3px solid var(--color-accent);
}
.section-light .benefit-item:nth-child(4n+2) {
  background: var(--color-white);
  border-top: 3px solid var(--color-primary);
  box-shadow: var(--shadow-card);
}
.section-light .benefit-item:nth-child(4n+3) {
  background: rgba(var(--color-secondary-rgb), 0.08);
  border-top: 3px solid var(--color-secondary);
}
.section-light .benefit-item:nth-child(4n+4) {
  background: rgba(var(--color-primary-rgb), 0.06);
  border-top: 3px solid var(--color-primary-dark);
}
.section-light .benefit-item:hover {
  transform: scale(1.02);
  box-shadow: var(--shadow-lg);
}
.section-light .benefit-item svg {
  flex-shrink: 0;
  margin-top: var(--space-1);
  transition: transform var(--transition-base);
}
.section-light .benefit-item:hover svg {
  transform: rotate(10deg);
}

/* ---------- Mid CTA: dark vault gradient ---------- */
.cta-banner {
  background: linear-gradient(
    200deg,
    var(--color-dark) 0%,
    var(--color-primary) 60%,
    var(--color-primary-dark) 100%
  );
}
.cta-banner::before {
  background:
    radial-gradient(
      ellipse at 80% 15%,
      color-mix(in srgb, var(--color-accent) 22%, transparent) 0%,
      transparent 60%
    );
  opacity: 1;
}
.cta-banner p {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  max-width: var(--bp-tablet);
  margin-left: auto;
  margin-right: auto;
}

/* ---------- FAQ: asymmetric offset masonry (C6 broken grid) ---------- */
#faq .faq-grid {
  grid-template-columns: 1fr 1fr;
  align-items: start;
}
#faq .faq-item:nth-child(even) {
  transform: translateY(var(--space-10));
}
#faq .faq-item {
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base), border-color var(--transition-base);
}
#faq .faq-item:hover {
  box-shadow: var(--shadow-lg);
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
}
#faq .faq-icon {
  background: var(--color-dark);
  color: var(--color-accent);
}
#faq .container {
  padding-bottom: var(--space-10); /* room for the offset column */
}

/* ---------- Closing CTA: keyline echo ---------- */
.closing-cta {
  position: relative;
  overflow: hidden;
}
.closing-cta::before {
  content: '';
  position: absolute;
  inset: var(--space-4);
  border: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent);
  border-radius: var(--radius-lg);
  pointer-events: none;
}
.closing-cta::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    ellipse at 50% 0%,
    color-mix(in srgb, var(--color-accent) 16%, transparent) 0%,
    transparent 55%
  );
  pointer-events: none;
}
.closing-cta .container {
  position: relative;
  z-index: 1;
}

/* ---------- Micro-interaction: outline buttons fill sweep ---------- */
.btn-outline-white {
  position: relative;
  overflow: hidden;
  z-index: 0;
}
.btn-outline-white::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: -1;
  background: var(--color-white);
  transform: scaleX(0);
  transform-origin: left center;
  transition: transform var(--transition-base);
}
.btn-outline-white:hover::before {
  transform: scaleX(1);
}

/* ---------- Reveal support (fail-open, gated under html.js-anim) ---------- */
html.js-anim #faq .faq-item {
  opacity: 0;
  transform: translateY(var(--space-4));
  transition: opacity var(--transition-slow), transform var(--transition-slow);
}
html.js-anim #faq .faq-item.animated,
html.js-anim #faq .faq-item.revealed {
  opacity: 1;
  transform: translateY(0);
}
html.js-anim #faq .faq-item:nth-child(even).animated,
html.js-anim #faq .faq-item:nth-child(even).revealed {
  transform: translateY(var(--space-10));
}

/* ---------- Responsive ---------- */
@media (max-width: 768px) {
  .service-hero {
    min-height: 52vh;
  }
  .service-hero .hero-content {
    margin: var(--space-4);
    padding: var(--space-8) var(--space-4);
  }
  #faq .faq-item:nth-child(even) {
    transform: none;
  }
  html.js-anim #faq .faq-item:nth-child(even).animated,
  html.js-anim #faq .faq-item:nth-child(even).revealed {
    transform: translateY(0);
  }
  #faq .container {
    padding-bottom: 0;
  }
  .answer-block.lk-promise {
    padding: var(--space-6) var(--space-5);
  }
  .answer-block.lk-promise h2 {
    padding: 0;
  }
  .answer-block.lk-promise h2::before,
  .answer-block.lk-promise h2::after {
    display: none;
  }
  .section-white::after {
    display: none;
  }
  .lk-divider svg {
    height: var(--space-8);
  }
}

/* ---------- Reduced motion ---------- */
@media (prefers-reduced-motion: reduce) {
  .section-white::after {
    animation: none;
  }
  .btn-outline-white::before {
    transition: none;
  }
  .section-light .benefit-item,
  .section-light .benefit-item svg,
  #faq .faq-item {
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
        <span itemprop="name">Lockout Service</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[3]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
  <path d="M7 11V7a5 5 0 0 1 10 0v4" /></svg>
      No Damage &bull; 20 Minute Response &bull; All Vehicle Types
    </div>
    <h1 class="hero-title" id="service-hero-heading">Car Lockout Service<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Locked out of your car in Fort Bend County? We use professional tools to get you back inside fast — without scratches, without damage, without drama.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get Lockout Help
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
    <span>&#128273;&nbsp; Pro Tools — No Door Damage</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20 Min Response in Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; All Vehicle Makes &amp; Models</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 — Keys In? We Come Out</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128273;&nbsp; Pro Tools — No Door Damage</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20 Min Response in Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; All Vehicle Makes &amp; Models</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 — Keys In? We Come Out</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
  <path d="M7 11V7a5 5 0 0 1 10 0v4" /></svg>
          Car Lockout Service in Richmond TX
        </span>
        <h2>Locked Out Is Frustrating — Getting Back In Should Be Simple</h2>
        <div class="prose">
          <p>It happens to everyone. Keys on the seat, doors locked, and you're standing in a parking lot in Sugar Land or on the side of a road in Rosenberg with nowhere to go. The difference between a bad afternoon and a quick fix is having the right number saved in your phone. Twin Cities Towing INC handles vehicle lockouts throughout Fort Bend County 24 hours a day — weekdays, weekends, late nights, and holidays.</p>
          <p>Our approach to lockout service is methodical and tool-first, never force-first. We use professional-grade slim jim tools, air wedge kits, and long-reach rods that work through existing door seal gaps without prying, breaking, or stressing the door frame. The result: your car opens, your door is intact, and you're on your way — usually in 10 to 15 minutes after we arrive.</p>
          <p>We work on all passenger vehicles — domestic and import — through current model years including modern keyless entry systems. Modern push-button start vehicles still have a physical lock cylinder for emergency access; our operators know where to find it and how to use it on virtually every common make and model. If you have a particularly unusual or specialty vehicle, mention that when you call and we'll confirm our capability before rolling.</p>
          <p>Keys locked inside with the engine running is a priority call. Fuel consumption, safety concerns, and potential overheating in Texas summer heat make this time-sensitive. Tell us immediately if the engine is running and we'll bump your call to priority dispatch.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[5]); ?>"
               alt="Car lockout service being performed in Richmond TX without damage"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Lockout Service Facts</h4>
          <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> No door or window damage</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> All makes, models, and years</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> 20 min ETA — Richmond TX</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Priority dispatch for running engines</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;color:var(--color-accent);"><path d="M21.801 10A10 10 0 1 1 17 3.335" />
  <path d="m9 11 3 3L22 4" /></svg> Available 24/7</li>
          </ul>
          <a href="/contact/" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Call for Lockout Help
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block lk-promise" data-animate="fade-up">
      <h2>How does car lockout service work in Richmond, TX?</h2>
      <p>Twin Cities Towing INC uses slim jim tools, air wedge kits, and long-reach rods to access your vehicle through existing door seal gaps — never by force. Most vehicles are unlocked in 5–15 minutes after arrival. No damage to your door, window, or weather stripping.</p>
    </div>
  </div>
</section>

<div class="lk-divider lk-divider--doublewave" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path class="wave-soft" d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z"/><path class="wave-solid" d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z"/></svg>
</div>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Safe, Fast, Damage-Free Lockout Service in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
        <div>
          <h3>Professional Tools — Not Improvised</h3>
          <p class="prose">We carry slim jims, air wedge kits, and long-reach tools specifically designed for automotive lockout. We never improvise with coat hangers or anything that risks scratching your door, breaking weather stripping, or damaging interior lock mechanisms.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
        <div>
          <h3>Fast Response Throughout Fort Bend County</h3>
          <p class="prose">Whether you're locked out at a grocery store in Sugar Land, a parking garage in Stafford, or a residential driveway in Rosenberg — we cover all of Fort Bend County with a typical 20–35 minute arrival time.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4" />
  <path d="m21 2-9.6 9.6" />
  <circle cx="7.5" cy="15.5" r="5.5" /></svg>
        <div>
          <h3>Modern Keyless Vehicles Welcome</h3>
          <p class="prose">Keyless entry doesn't mean no physical lock. We know the access points on modern vehicles and carry the tools to reach them without damage. Most current-model vehicles, including push-button start systems, are within our capability.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <line x1="12" x2="12" y1="8" y2="12" />
  <line x1="12" x2="12.01" y1="16" y2="16" /></svg>
        <div>
          <h3>Priority Dispatch for Running Engines</h3>
          <p class="prose">Keys locked in with the engine running? Tell us immediately — that's a priority call. We route the nearest driver to you as fast as possible, knowing that time matters more in that situation than a standard lockout.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="lock-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Locked Out Right Now?</span>
    <h2 id="lock-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Back in Your Car in Under 45 Minutes — Guaranteed</h2>
    <p>Don't try to force it yourself. One wrong move with a coat hanger can damage your lock, window seal, or airbag sensors. Call Twin Cities Towing and we'll handle it properly.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request Lockout Service
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
      <h2>Lockout Service FAQs &mdash; Richmond, TX</h2>
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

<div class="lk-divider lk-divider--shear" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon points="0,0 1200,60 0,60"/></svg>
</div>

<section class="closing-cta" aria-labelledby="lock-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Lockout Service &mdash; Richmond TX</span>
      <h2 id="lock-close-heading">One Call — Keys Inside, Car Opens, You're Back on the Road</h2>
      <p class="closing-lead">Twin Cities Towing INC handles vehicle lockouts throughout Richmond, Rosenberg, Sugar Land, Katy, and all of Fort Bend County with professional tools and zero damage. Available every hour of every day.</p>
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
