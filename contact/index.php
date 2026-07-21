<?php
/**
 * Twin Cities Towing INC — Contact Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Contact Twin Cities Towing INC | Richmond TX | 24/7';
$pageDescription = 'Contact Twin Cities Towing INC in Richmond, TX for a free estimate, emergency towing, or roadside assistance. 24/7 dispatch throughout Fort Bend County. Fast response guaranteed.';
$ogImage         = $clientPhotos[0];
$currentPage     = 'contact';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',    'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact'],
        ]],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ════════════════════════════════════════════════════════════════════
   CONTACT PAGE — Twin Cities Towing INC (page-specific styles)
   Premium tier | var() tokens only — no hardcoded colors/shadows/spacing
   Techniques: (1) layered hero — vertical gradient overlay + noise +
   dispatch "live" pulse, (2) two SVG dividers — stacked parallelograms
   + curved wave, (3) asymmetric split contact panel (broken-grid
   offset columns), (4) rotating tinted info cards, (5) floating
   map-pin + road-dash accents at 4–8% opacity, (6) signature
   dispatch-ticket form panel + map emphasis with radar ping (unique
   to this page), (7) floating-label form micro-interactions,
   (8) mixed reveal directions on data-animate
   ════════════════════════════════════════════════════════════════════ */

/* ── C1 · LAYERED HERO — photo, vertical token gradient, noise,
       bottom accent edge (differentiated from About's diagonal) ─────── */
.ctp-hero {
  min-height: 56vh;
  isolation: isolate;
}
.ctp-hero .hero-overlay {
  background:
    radial-gradient(ellipse at 24% 18%,
      color-mix(in srgb, var(--color-accent) 16%, transparent) 0%,
      transparent 55%),
    linear-gradient(
      180deg,
      rgba(var(--color-primary-rgb), 0.92) 0%,
      rgba(var(--color-primary-rgb), 0.78) 55%,
      rgba(var(--color-primary-rgb), 0.94) 100%
    );
}
.ctp-hero::before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: var(--space-1);
  background: linear-gradient(
    90deg,
    transparent 0%,
    var(--color-accent) 30%,
    var(--color-accent) 70%,
    transparent 100%
  );
  z-index: 2;
  pointer-events: none;
}
.ctp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.045'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.ctp-hero .hero-content { z-index: 2; }
.ctp-hero .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: rgba(var(--color-primary-rgb), 0.45);
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  font-size: var(--font-size-xs);
  letter-spacing: 2px;
}
/* Dispatch-board "live" indicator */
.ctp-hero .hero-eyebrow::before {
  content: '';
  width: var(--space-2);
  height: var(--space-2);
  border-radius: var(--radius-full);
  background: var(--color-success);
  box-shadow: var(--shadow-sm);
  animation: ctpLivePulse 1.8s ease-in-out infinite;
  flex-shrink: 0;
}
@keyframes ctpLivePulse {
  0%, 100% { opacity: 1; transform: scale(1); }
  50%      { opacity: 0.45; transform: scale(0.78); }
}
.ctp-hero .hero-title {
  text-wrap: balance;
  font-size: clamp(var(--font-size-3xl), 4.4vw, var(--font-size-5xl));
}
.ctp-hero .hero-subtitle {
  max-width: 54ch;
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

/* ── SVG DIVIDER 1 — stacked parallelograms (ticker → contact) ──────── */
.ctp-divider {
  display: block;
  line-height: 0;
  font-size: 0;
  overflow: hidden;
  margin-top: -1px;
  margin-bottom: -1px;
}
.ctp-divider svg {
  display: block;
  width: 100%;
  height: clamp(var(--space-8), 4.5vw, var(--space-16));
}
.ctp-divider--angles { background: var(--color-accent); }
.ctp-divider--wave { background: var(--color-white); }

/* ── ASYMMETRIC SPLIT CONTACT PANEL — broken-grid: wide dispatch-ticket
       form column vs offset narrow info rail ───────────────────────── */
.ctp-contact {
  position: relative;
  overflow: hidden;
}
.contact-grid {
  display: grid;
  grid-template-columns: 1.25fr 0.85fr;
  gap: var(--space-12);
  align-items: start;
  position: relative;
  z-index: 1;
}
/* Broken-grid offset: info rail starts lower than the form panel */
.contact-info-col { margin-top: var(--space-16); }

/* ── SIGNATURE — DISPATCH-TICKET FORM PANEL (contact-only) ──────────── */
.ctp-form-panel {
  position: relative;
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  padding: var(--space-10) var(--space-8) var(--space-8);
  overflow: hidden;
}
/* Ticket header stripe */
.ctp-form-panel::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: var(--space-2);
  background: linear-gradient(90deg, var(--color-primary) 0%, var(--color-accent) 100%);
}
/* Ticket perforation under the intro copy */
.ctp-form-panel .contact-form {
  position: relative;
  padding-top: var(--space-6);
}
.ctp-form-panel .contact-form::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: repeating-linear-gradient(
    90deg,
    var(--color-gray-light) 0,
    var(--color-gray-light) var(--space-3),
    transparent var(--space-3),
    transparent var(--space-5)
  );
}
.ctp-form-panel h2 {
  text-wrap: balance;
  font-size: var(--font-size-3xl);
  margin-bottom: var(--space-3);
}
.ctp-form-panel .eyebrow { margin-bottom: var(--space-3); }

/* ── FORM LAYOUT + FLOATING-LABEL MICRO-INTERACTIONS ────────────────── */
.contact-form .form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.contact-form .form-group { margin-bottom: var(--space-5); }
.float-label-wrap { position: relative; }
.float-label-wrap input,
.float-label-wrap select,
.float-label-wrap textarea {
  width: 100%;
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-black);
  background: var(--color-light);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  padding: var(--space-5) var(--space-4) var(--space-2);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast), background var(--transition-fast);
  appearance: none;
  -webkit-appearance: none;
}
.float-label-wrap textarea { resize: vertical; min-height: calc(var(--space-16) * 2); }
.float-label-wrap label {
  position: absolute;
  left: var(--space-4);
  top: 50%;
  transform: translateY(-50%);
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  pointer-events: none;
  transition: all var(--transition-fast);
  white-space: nowrap;
  max-width: calc(100% - var(--space-8));
  overflow: hidden;
  text-overflow: ellipsis;
}
.float-label-wrap--textarea label {
  top: var(--space-5);
  transform: none;
}
/* Float state — focus or filled */
.float-label-wrap input:focus + label,
.float-label-wrap input:not(:placeholder-shown) + label,
.float-label-wrap textarea:focus + label,
.float-label-wrap textarea:not(:placeholder-shown) + label,
.float-label-wrap select:focus + label,
.float-label-wrap select:valid + label {
  top: var(--space-2);
  transform: none;
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  color: var(--color-accent);
}
/* Focus ring — token-composed glow */
.float-label-wrap input:focus,
.float-label-wrap select:focus,
.float-label-wrap textarea:focus {
  outline: none;
  background: var(--color-white);
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px color-mix(in srgb, var(--color-accent) 18%, transparent);
}
/* Select chevron drawn with token colors */
.float-label-wrap--select { position: relative; }
.float-label-wrap--select::after {
  content: '';
  position: absolute;
  right: var(--space-4);
  top: 50%;
  width: var(--space-2);
  height: var(--space-2);
  border-right: 2px solid var(--color-gray);
  border-bottom: 2px solid var(--color-gray);
  transform: translateY(-70%) rotate(45deg);
  pointer-events: none;
  transition: border-color var(--transition-fast);
}
.float-label-wrap--select:focus-within::after { border-color: var(--color-accent); }
.contact-form button[type="submit"] {
  margin-top: var(--space-2);
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast), background var(--transition-fast);
}
.contact-form button[type="submit"]:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-lg);
}
.contact-form button[type="submit"]:active { transform: translateY(0); }

/* ── INFO RAIL — rotating tinted cards (never all-white) ────────────── */
.contact-info-card {
  border-radius: var(--radius-xl);
  padding: var(--space-6);
  border: 1px solid var(--color-gray-light);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.contact-info-card:hover {
  transform: translateY(calc(-1 * var(--space-1)));
  box-shadow: var(--shadow-md);
}
/* Tint rotation across the rail */
.contact-info-col > .contact-info-card:nth-of-type(1) {
  background: color-mix(in srgb, var(--color-accent) 6%, var(--color-white));
  border-left: 3px solid var(--color-accent);
}
.contact-info-col > .contact-info-card:nth-of-type(2) {
  background: rgba(var(--color-primary-rgb), 0.05);
  border-left: 3px solid var(--color-primary);
}
.contact-info-card h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-4);
  padding-bottom: var(--space-3);
  position: relative;
  text-wrap: balance;
}
/* Lane-dash underline on card headings */
.contact-info-card h3::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: var(--space-12);
  height: 3px;
  border-radius: var(--radius-full);
  background: repeating-linear-gradient(
    90deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-2),
    transparent var(--space-2),
    transparent var(--space-4)
  );
}
.contact-detail-list {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.contact-detail-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
}
.contact-detail-list li svg { flex-shrink: 0; margin-top: var(--space-1); }
.contact-detail-label {
  display: block;
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-gray);
  margin-bottom: var(--space-1);
}
.contact-detail-value {
  font-weight: 600;
  color: var(--color-primary);
  transition: color var(--transition-fast);
}
a.contact-detail-value:hover { color: var(--color-accent); }

/* Service-area chips */
.service-area-tags {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-2);
}
.area-tag {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 600;
  color: var(--color-primary);
  background: var(--color-white);
  border: 1px solid color-mix(in srgb, var(--color-accent) 35%, var(--color-gray-light));
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-3);
  transition: background var(--transition-fast), color var(--transition-fast), border-color var(--transition-fast);
}
.area-tag:hover {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-white);
}

/* Emergency card — dark accent panel with pulsing icon ring */
.emergency-contact-card {
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
  background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
  color: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-6);
  box-shadow: var(--shadow-lg);
}
.emergency-contact-card::after {
  content: '';
  position: absolute;
  top: -30%;
  right: -18%;
  width: 60%;
  height: 120%;
  background: radial-gradient(ellipse at center,
    color-mix(in srgb, var(--color-accent) 16%, transparent) 0%,
    transparent 70%);
  pointer-events: none;
}
.emergency-contact-card > svg {
  flex-shrink: 0;
  margin-top: var(--space-1);
  animation: ctpLivePulse 2.2s ease-in-out infinite;
}
.emergency-contact-card h4 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.emergency-contact-card p {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  font-size: var(--font-size-sm);
  line-height: 1.6;
}
.emergency-contact-card > div { position: relative; z-index: 1; }

/* ── MAP EMPHASIS — framed embed, corner brackets, radar ping ───────── */
.ctp-map {
  position: relative;
  padding: var(--space-8);
  background: rgba(var(--color-primary-rgb), 0.04);
  border-radius: var(--radius-xl);
}
.ctp-map h3 {
  display: inline-flex;
  align-items: center;
  gap: var(--space-3);
  font-size: var(--font-size-2xl);
  text-wrap: balance;
}
/* Route line running from the heading */
.ctp-map h3::after {
  content: '';
  width: clamp(var(--space-12), 10vw, var(--space-16));
  height: 3px;
  border-radius: var(--radius-full);
  background: repeating-linear-gradient(
    90deg,
    var(--color-accent) 0,
    var(--color-accent) var(--space-2),
    transparent var(--space-2),
    transparent var(--space-4)
  );
}
.ctp-map .map-container {
  position: relative;
  border: 1px solid color-mix(in srgb, var(--color-accent) 30%, var(--color-gray-light));
}
/* Corner brackets */
.ctp-map::before,
.ctp-map::after {
  content: '';
  position: absolute;
  width: var(--space-8);
  height: var(--space-8);
  border-color: var(--color-accent);
  border-style: solid;
  pointer-events: none;
}
.ctp-map::before {
  top: var(--space-3);
  left: var(--space-3);
  border-width: 3px 0 0 3px;
  border-radius: var(--radius-sm) 0 0 0;
}
.ctp-map::after {
  bottom: var(--space-3);
  right: var(--space-3);
  border-width: 0 3px 3px 0;
  border-radius: 0 0 var(--radius-sm) 0;
}
/* Radar ping over our Richmond base */
.ctp-map-ping {
  position: absolute;
  top: 50%;
  left: 50%;
  width: var(--space-3);
  height: var(--space-3);
  margin-top: calc(-1 * var(--space-2));
  margin-left: calc(-1 * var(--space-2));
  border-radius: var(--radius-full);
  background: var(--color-accent);
  box-shadow: var(--shadow-md);
  pointer-events: none;
  z-index: 1;
}
.ctp-map-ping::before {
  content: '';
  position: absolute;
  inset: calc(-1 * var(--space-2));
  border-radius: var(--radius-full);
  border: 2px solid var(--color-accent);
  animation: ctpPing 2.4s ease-out infinite;
}
@keyframes ctpPing {
  0%   { transform: scale(0.6); opacity: 0.9; }
  100% { transform: scale(2.6); opacity: 0; }
}

/* ── FLOATING DECORATIVE ACCENTS (4–8% opacity) ─────────────────────── */
.ctp-accent-pin {
  position: absolute;
  top: var(--space-12);
  right: var(--space-6);
  width: clamp(var(--space-16), 12vw, calc(var(--space-16) * 2.5));
  color: var(--color-primary);
  opacity: 0.05;
  pointer-events: none;
  user-select: none;
  animation: ctpFloat 12s ease-in-out infinite alternate;
  z-index: 0;
}
.ctp-accent-pin svg { width: 100%; height: auto; display: block; }
@keyframes ctpFloat {
  from { transform: translateY(0) rotate(3deg); }
  to   { transform: translateY(calc(-1 * var(--space-6))) rotate(-4deg); }
}
/* Horizontal road dashes behind the info rail */
.ctp-accent-dashes {
  position: absolute;
  bottom: var(--space-16);
  left: var(--space-4);
  width: 34%;
  height: var(--space-2);
  border-radius: var(--radius-full);
  background: repeating-linear-gradient(
    90deg,
    var(--color-primary) 0,
    var(--color-primary) var(--space-6),
    transparent var(--space-6),
    transparent var(--space-12)
  );
  opacity: 0.06;
  pointer-events: none;
  z-index: 0;
}

/* ── CLOSING CTA — glow polish ──────────────────────────────────────── */
.closing-cta h2 { text-wrap: balance; }
.closing-cta {
  position: relative;
  overflow: hidden;
}
.closing-cta::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -10%;
  width: 50%;
  height: 140%;
  background: radial-gradient(ellipse at center,
    color-mix(in srgb, var(--color-accent) 10%, transparent) 0%,
    transparent 70%);
  pointer-events: none;
}
.closing-cta .container { position: relative; z-index: 1; }

/* ── RESPONSIVE ─────────────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .contact-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .contact-info-col { margin-top: 0; }
  .ctp-accent-pin,
  .ctp-accent-dashes { display: none; }
}
@media (max-width: 768px) {
  .ctp-hero { min-height: 48vh; }
  .contact-form .form-row { grid-template-columns: 1fr; gap: 0; }
  .ctp-form-panel { padding: var(--space-8) var(--space-5) var(--space-6); }
  .ctp-map { padding: var(--space-4); }
  .ctp-map::before,
  .ctp-map::after { display: none; }
  [data-animate="drift-left"],
  [data-animate="drift-right"] { transform: translateY(var(--space-8)); }
}

/* ── REDUCED MOTION — kill page-level animation & drift ─────────────── */
@media (prefers-reduced-motion: reduce) {
  .ctp-hero .hero-eyebrow::before,
  .ctp-map-ping::before,
  .emergency-contact-card > svg,
  .ctp-accent-pin { animation: none; }
  [data-animate="drift-left"],
  [data-animate="drift-right"],
  [data-animate="pop"] { transform: none; }
  .contact-info-card:hover,
  .contact-form button[type="submit"]:hover { transform: none; }
}
</style>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Contact</span><meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
</nav>

<!-- HERO -->
<section class="service-hero service-hero-sm ctp-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[0]); ?>');"
         aria-labelledby="contact-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
      Free Estimates &bull; 24/7 Dispatch &bull; No Hold Music
    </div>
    <h1 class="hero-title" id="contact-hero-heading">Get in Touch &mdash;<br>We Respond Immediately</h1>
    <p class="hero-subtitle">Need a tow right now or planning ahead — fill out the form below or call us directly. Real dispatcher, real ETA, real help.</p>
  </div>
</section>

<!-- TICKER -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9200;&nbsp; Immediate 24/7 Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Free Estimates — No Obligation</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; Immediate 24/7 Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Free Estimates — No Obligation</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- DIVIDER: stacked parallelograms (ticker → contact) -->
<div class="ctp-divider ctp-divider--angles" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" focusable="false">
    <polygon fill="var(--color-white)" opacity="0.3" points="0,20 1200,40 1200,80 0,80"/>
    <polygon fill="var(--color-white)" points="0,40 1200,20 1200,80 0,80"/>
  </svg>
</div>

<!-- CONTACT SECTION -->
<section class="section-white ctp-contact" style="padding: var(--space-16) 0;">
  <div class="ctp-accent-pin" aria-hidden="true">
    <svg viewBox="0 0 64 88" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" focusable="false">
      <path d="M56 32c0 17-19 34-22.8 37.2a2 2 0 0 1-2.4 0C27 66 8 49 8 32a24 24 0 0 1 48 0"/>
      <circle cx="32" cy="32" r="9"/>
    </svg>
  </div>
  <div class="ctp-accent-dashes" aria-hidden="true"></div>
  <div class="container">
    <div class="contact-grid">

      <!-- FORM COLUMN -->
      <div class="contact-form-col ctp-form-panel" data-animate="drift-left">
        <span class="eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
          Request a Free Estimate
        </span>
        <h2>Tell Us What You Need — We'll Get Back to You Fast</h2>
        <p class="prose" style="margin-bottom:var(--space-8);">Fill out the form below for a free quote on any towing or roadside service in Fort Bend County. For immediate emergency dispatch, call us directly — this form is for non-urgent requests and estimates.</p>

        <form class="contact-form"
              action="<?php echo htmlspecialchars($formAction); ?>"
              method="POST"
              novalidate>

          <!-- Formsubmit hidden fields -->
          <input type="hidden" name="_next"     value="<?php echo htmlspecialchars($domain); ?>/thank-you/">
          <input type="hidden" name="_captcha"  value="false">
          <input type="hidden" name="_template" value="table">
          <input type="hidden" name="_subject"  value="Twin Cities Towing INC — New Website Inquiry">
          <!-- Honeypot spam trap -->
          <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true">

          <div class="form-row">
            <div class="form-group">
              <div class="float-label-wrap">
                <input type="text" id="name" name="name" placeholder=" " required autocomplete="name">
                <label for="name">Your Full Name *</label>
              </div>
            </div>
            <div class="form-group">
              <div class="float-label-wrap">
                <input type="tel" id="phone" name="phone" placeholder=" " required autocomplete="tel">
                <label for="phone">Phone Number *</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="float-label-wrap">
              <input type="email" id="email" name="email" placeholder=" " autocomplete="email">
              <label for="email">Email Address (optional)</label>
            </div>
          </div>

          <div class="form-group">
            <div class="float-label-wrap float-label-wrap--select">
              <select id="service" name="service_requested" required>
                <option value="" disabled selected></option>
                <?php foreach ($services as $s): ?>
                <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                <?php endforeach; ?>
                <option value="Not sure — need help">Not sure — need help</option>
              </select>
              <label for="service">Service Needed *</label>
            </div>
          </div>

          <div class="form-group">
            <div class="float-label-wrap">
              <input type="text" id="location" name="pickup_location" placeholder=" ">
              <label for="location">Pickup Location / City</label>
            </div>
          </div>

          <div class="form-group">
            <div class="float-label-wrap float-label-wrap--textarea">
              <textarea id="message" name="message" placeholder=" " rows="5"></textarea>
              <label for="message">Describe Your Situation</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;margin-right:8px;"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
  <path d="m21.854 2.147-10.94 10.939" /></svg>
            Send My Request
          </button>

          <p style="margin-top:var(--space-4);font-size:var(--font-size-xs);color:var(--color-gray);">
            For emergency towing, please call us directly — form submissions are monitored but calls get faster response.
          </p>

        </form>
      </div>

      <!-- INFO COLUMN -->
      <div class="contact-info-col">

        <div class="contact-info-card" data-animate="drift-right">
          <h3>Business Information</h3>
          <ul class="contact-detail-list">
            <?php if (!empty($phone)): ?>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;color:var(--color-accent);"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
              <div>
                <span class="contact-detail-label">Phone</span>
                <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="contact-detail-value">
                  <?php echo htmlspecialchars($phoneDisplay ?: $phone); ?>
                </a>
              </div>
            </li>
            <?php endif; ?>
            <?php if (!empty($email)): ?>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;color:var(--color-accent);"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
  <rect x="2" y="4" width="20" height="16" rx="2" /></svg>
              <div>
                <span class="contact-detail-label">Email</span>
                <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="contact-detail-value">
                  <?php echo htmlspecialchars($email); ?>
                </a>
              </div>
            </li>
            <?php endif; ?>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
              <div>
                <span class="contact-detail-label">Address</span>
                <span class="contact-detail-value"><?php echo htmlspecialchars($addressFull); ?></span>
              </div>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
              <div>
                <span class="contact-detail-label">Hours</span>
                <span class="contact-detail-value"><?php echo htmlspecialchars($hoursDisplay); ?></span>
              </div>
            </li>
          </ul>
        </div>

        <div class="contact-info-card" data-animate="drift-right" style="margin-top:var(--space-6);">
          <h3>Service Area</h3>
          <p class="prose" style="font-size:var(--font-size-sm);margin-bottom:var(--space-4);">We serve Richmond, Rosenberg, and all of Fort Bend County within approximately 20 miles of our Richmond base.</p>
          <div class="service-area-tags">
            <?php foreach ($serviceAreas as $area): ?>
            <?php if (!empty($area['city'])): ?>
            <span class="area-tag"><?php echo htmlspecialchars($area['city']); ?>, TX</span>
            <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <a href="/service-area/" style="display:inline-flex;align-items:center;gap:4px;margin-top:var(--space-4);font-size:var(--font-size-sm);color:var(--color-accent);">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z" />
  <path d="M15 5.764v15" />
  <path d="M9 3.236v15" /></svg>
            View full service area map
          </a>
        </div>

        <!-- Emergency Banner -->
        <div class="emergency-contact-card" data-animate="pop" style="margin-top:var(--space-6);">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:#fff;"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
  <path d="M12 9v4" />
  <path d="M12 17h.01" /></svg>
          <div>
            <h4>Emergency Towing?</h4>
            <p>Don't fill out the form — call us directly for immediate 24/7 dispatch. We pick up and we dispatch fast.</p>
            <a href="/contact/" class="btn btn-accent btn-sm" style="margin-top:var(--space-3);">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:15px;height:15px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
              Call Now — 24/7
            </a>
          </div>
        </div>

      </div><!-- /.contact-info-col -->

    </div><!-- /.contact-grid -->

    <!-- Google Maps Embed Placeholder -->
    <div class="map-embed ctp-map" data-animate="fade-up" style="margin-top:var(--space-12);">
      <h3 style="margin-bottom:var(--space-4);">Find Us in Richmond, TX</h3>
      <div class="map-container">
        <span class="ctp-map-ping" aria-hidden="true"></span>
        <iframe
          title="Twin Cities Towing INC location in Richmond TX"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55549.60892427832!2d-95.78012839453125!3d29.582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864130c5a6f2e5a7%3A0x4b2f3c8a5c8d5e7!2sRichmond%2C%20TX%2077469!5e0!3m2!1sen!2sus!4v1680000000000"
          width="100%" height="400"
          style="border:0;border-radius:var(--radius);"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>

  </div><!-- /.container -->
</section>

<!-- DIVIDER: curved wave (contact → closing CTA) -->
<div class="ctp-divider ctp-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" focusable="false">
    <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- CLOSING CTA -->
<section class="closing-cta" aria-labelledby="contact-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">24/7 &mdash; Richmond TX &mdash; Fort Bend County</span>
      <h2 id="contact-close-heading">Need Towing Right Now? Call — Don't Wait on the Form</h2>
      <p class="closing-lead">The contact form is monitored, but for emergency towing and immediate dispatch throughout Fort Bend County, a direct call gets you a driver in motion faster than any online form can.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact/" class="btn btn-accent btn-lg">
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
        View All Services
      </a>
      <a href="/service-area/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
