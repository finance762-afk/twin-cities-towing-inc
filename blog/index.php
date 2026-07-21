<?php
/**
 * Twin Cities Towing INC — Blog Index
 * Editorial listing of every post in includes/blog-data.php (newest first).
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$pageTitle       = 'Towing Tips & Guides | Twin Cities Towing INC | Richmond, TX';
$pageDescription = 'Towing tips from Twin Cities Towing INC in Richmond, TX — real local costs, accident steps, flatbed vs. wheel-lift, and your rights under Texas towing law.';
$ogImage         = !empty($blogPosts) ? $blogPosts[0]['image'] : $clientPhotos[0];
$currentPage     = 'blog';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $domain . '/blog/'],
            ],
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

$featuredPost = !empty($blogPosts) ? $blogPosts[0] : null;
$gridPosts    = array_slice($blogPosts, 1);
?>

<style>
/* ═══════════════════════════════════════════════════════════════
   BLOG INDEX — page-specific visual signature
   Techniques: layered hero (gradient + noise), floating decorative
   accent, SVG section dividers (curve + angle), asymmetric featured
   layout with offset tint panel, tinted card rotation, mixed
   typography (Caveat accent), numbered watermark section.
   Shared .blog-card component styles live in framework.css.
═══════════════════════════════════════════════════════════════ */

/* ── 1. Layered hero ─────────────────────────────────────────── */
.tcb-hero {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0 var(--space-12);
  overflow: hidden;
}
.tcb-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 80% 10%, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 55%),
    linear-gradient(135deg, rgba(var(--color-secondary-rgb), 0.4) 0%, transparent 60%);
  pointer-events: none;
  z-index: 1;
}
.tcb-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  pointer-events: none;
  z-index: 1;
}
.tcb-hero__inner {
  position: relative;
  z-index: 2;
}
.tcb-hero__breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.55);
  margin-bottom: var(--space-8);
  flex-wrap: wrap;
}
.tcb-hero__breadcrumb a {
  color: rgba(255,255,255,0.55);
  transition: color var(--transition-fast);
}
.tcb-hero__breadcrumb a:hover { color: var(--color-accent); }
.tcb-hero__breadcrumb-sep { color: rgba(255,255,255,0.25); }
.tcb-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  margin-bottom: var(--space-5);
}
.tcb-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 5vw, 3.6rem);
  line-height: 1.1;
  text-wrap: balance;
  max-width: 20ch;
  margin-bottom: var(--space-3);
}
.tcb-hero h1 em {
  font-style: normal;
  color: var(--color-accent);
}
.tcb-hero__script {
  display: block;
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.6vw, 1.8rem);
  color: rgba(255,255,255,0.85);
  margin-bottom: var(--space-5);
  transform: rotate(-1.2deg);
}
.tcb-hero p.tcb-hero__lead {
  color: rgba(255,255,255,0.72);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 56ch;
  margin-bottom: var(--space-8);
}
.tcb-hero__chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
}
.tcb-hero__chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.14);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-4);
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.8);
  letter-spacing: 0.4px;
}
.tcb-hero__chip svg { color: var(--color-accent); flex-shrink: 0; }

/* ── 2. Floating decorative accent (tow-hook route line) ─────── */
.tcb-hero__accent {
  position: absolute;
  right: 4%;
  top: 18%;
  z-index: 1;
  opacity: 0.07;
  pointer-events: none;
  user-select: none;
  animation: floatDrift 9s ease-in-out infinite alternate; /* keyframes in framework.css */
}
.tcb-hero__accent svg { width: 340px; height: auto; }

/* ── 3. SVG dividers ─────────────────────────────────────────── */
.tcb-divider-curve {
  background: var(--color-primary);
  line-height: 0;
  font-size: 0;
}
.tcb-divider-curve svg { display: block; width: 100%; height: auto; }
.tcb-divider-angle {
  background: var(--color-white);
  line-height: 0;
  font-size: 0;
}
.tcb-divider-angle svg { display: block; width: 100%; height: auto; }

/* ── 4. Featured post — asymmetric layout + offset tint panel ── */
.tcb-featured-section {
  background: var(--color-white);
  padding: var(--space-16) 0 var(--space-12);
  position: relative;
  overflow: hidden;
}
.tcb-featured-head {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  gap: var(--space-6);
  margin-bottom: var(--space-10);
  flex-wrap: wrap;
}
.tcb-featured-head .section-subtitle { margin-top: 0; }
.tcb-featured {
  display: grid;
  grid-template-columns: 7fr 5fr;
  gap: var(--space-10);
  align-items: center;
}
.tcb-featured__media {
  position: relative;
  padding: 0 var(--space-6) var(--space-6) 0;
}
.tcb-featured__media::after {
  content: '';
  position: absolute;
  top: var(--space-6);
  left: var(--space-6);
  right: 0;
  bottom: 0;
  background: rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-lg);
  z-index: 0;
}
.tcb-featured__img-wrap {
  position: relative;
  z-index: 1;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 16 / 10;
}
.tcb-featured__img-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.7s ease;
}
.tcb-featured:hover .tcb-featured__img-wrap img { transform: scale(1.04); }
.tcb-featured__badge {
  position: absolute;
  top: var(--space-4);
  left: var(--space-4);
  z-index: 2;
  background: rgba(var(--color-primary-rgb), 0.88);
  backdrop-filter: blur(6px);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 5px var(--space-4);
  border-radius: var(--radius-full);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
}
.tcb-featured__body { min-width: 0; }
.tcb-featured__meta {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-bottom: var(--space-4);
  flex-wrap: wrap;
}
.tcb-featured__meta-item {
  display: inline-flex;
  align-items: center;
  gap: 5px;
}
.tcb-featured__meta-item svg { width: 13px; height: 13px; color: var(--color-accent); }
.tcb-featured__title {
  font-size: clamp(1.4rem, 2.8vw, 2rem);
  line-height: 1.2;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.tcb-featured__title a {
  color: var(--color-primary);
  transition: color var(--transition-fast);
}
.tcb-featured__title a:hover { color: var(--color-accent); }
.tcb-featured__excerpt {
  color: var(--color-gray);
  font-size: var(--font-size-base);
  line-height: 1.75;
  max-width: 52ch;
  margin-bottom: var(--space-6);
}
.tcb-featured__cta {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-secondary);
  transition: color var(--transition-fast), gap var(--transition-fast);
}
.tcb-featured__cta:hover { color: var(--color-accent); gap: var(--space-4); }
.tcb-featured__cta svg { width: 16px; height: 16px; }

/* ── 5. Article grid — tinted card rotation + watermark ──────── */
.tcb-grid-section {
  background: var(--color-light);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.tcb-grid-section::before {
  content: 'GUIDES';
  position: absolute;
  top: var(--space-8);
  right: calc(5% + var(--space-4));
  font-family: var(--font-heading);
  font-size: 8rem;
  font-weight: 800;
  color: rgba(var(--color-primary-rgb), 0.04);
  line-height: 1;
  pointer-events: none;
  user-select: none;
  letter-spacing: -0.04em;
  z-index: 0;
}
.tcb-grid-section .container { position: relative; z-index: 1; }
.tcb-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-8);
  margin-top: var(--space-10);
}
/* Tint rotation over the shared .blog-card component */
.tcb-tint-1 { background: rgba(var(--color-primary-rgb), 0.04); }
.tcb-tint-2 { background: rgba(var(--color-accent-rgb), 0.05); }
.tcb-tint-3 { background: rgba(var(--color-secondary-rgb), 0.06); }

/* ── 6. Bottom CTA band ──────────────────────────────────────── */
.tcb-cta {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  border-radius: var(--radius-xl);
  padding: var(--space-10) var(--space-8);
  margin-top: var(--space-12);
  display: flex;
  align-items: center;
  gap: var(--space-8);
  position: relative;
  overflow: hidden;
}
.tcb-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n2'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n2)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  pointer-events: none;
}
.tcb-cta__icon {
  width: 64px;
  height: 64px;
  min-width: 64px;
  background: rgba(var(--color-accent-rgb), 0.16);
  border: 2px solid rgba(var(--color-accent-rgb), 0.4);
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  position: relative;
}
.tcb-cta__icon svg { width: 28px; height: 28px; }
.tcb-cta__copy { flex: 1; position: relative; min-width: 0; }
.tcb-cta__copy h2 {
  color: var(--color-white);
  font-size: clamp(1.15rem, 2.2vw, 1.6rem);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.tcb-cta__copy p {
  color: rgba(255,255,255,0.75);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
  max-width: 60ch;
}
.tcb-cta__actions {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  position: relative;
}

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .tcb-featured { grid-template-columns: 1fr; gap: var(--space-8); }
  .tcb-featured__media { padding: 0 var(--space-4) var(--space-4) 0; }
  .tcb-grid { grid-template-columns: 1fr 1fr; }
  .tcb-hero__accent svg { width: 240px; }
}
@media (max-width: 768px) {
  .tcb-hero { padding: var(--space-12) 0 var(--space-10); }
  .tcb-hero__accent { display: none; }
  .tcb-grid { grid-template-columns: 1fr; }
  .tcb-grid-section::before { font-size: 4.5rem; top: var(--space-4); right: var(--space-4); }
  .tcb-cta { flex-direction: column; text-align: center; }
  .tcb-cta__actions { width: 100%; }
  .tcb-cta__actions .btn { width: 100%; justify-content: center; }
  .tcb-featured-head { flex-direction: column; gap: var(--space-2); }
}
@media (max-width: 480px) {
  .tcb-hero__chips { gap: var(--space-2); }
  .tcb-hero__chip { font-size: 0.68rem; padding: var(--space-1) var(--space-3); }
  .tcb-featured__media::after { display: none; }
  .tcb-featured__media { padding: 0; }
}

/* ── 7. Interaction polish ───────────────────────────────────── */
.tcb-grid .blog-card {
  position: relative;
}
.tcb-grid .blog-card::after {
  content: '';
  position: absolute;
  left: 0;
  right: 100%;
  bottom: 0;
  height: 3px;
  background: var(--color-accent);
  transition: right var(--transition-slow);
  pointer-events: none;
}
.tcb-grid .blog-card:hover::after { right: 0; }
.tcb-featured__cta:focus-visible,
.tcb-hero__breadcrumb a:focus-visible,
.blog-card__read-more:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
  border-radius: var(--radius-sm);
}
.tcb-cta__copy a {
  text-decoration: underline;
  text-underline-offset: 3px;
  transition: opacity var(--transition-fast);
}
.tcb-cta__copy a:hover { opacity: 0.8; }
.tcb-hero h1,
.tcb-featured__title,
.tcb-cta__copy h2 { text-wrap: balance; }
@media (prefers-reduced-motion: reduce) {
  .tcb-hero__accent { animation: none; }
  .tcb-featured:hover .tcb-featured__img-wrap img { transform: none; }
  .tcb-grid .blog-card::after { transition: none; }
}
</style>

<!-- ═══════════════════════════════════════════════════════════════
     BLOG HERO — layered gradient + noise, floating accent
════════════════════════════════════════════════════════════════ -->
<section class="tcb-hero" aria-labelledby="blog-hero-heading">

  <div class="tcb-hero__accent float-animate" aria-hidden="true">
    <svg viewBox="0 0 340 220" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10 190 C 90 190, 80 60, 170 60 S 250 160, 330 110" stroke="#ffffff" stroke-width="3" stroke-dasharray="10 12" stroke-linecap="round"/>
      <circle cx="10" cy="190" r="9" fill="#ffffff"/>
      <path d="M330 110 l-16 -7 v14 z" fill="#ffffff"/>
      <path d="M150 30 a20 20 0 1 1 40 0 v18 h-8 v-18 a12 12 0 1 0 -24 0 z" fill="#ffffff"/>
    </svg>
  </div>

  <div class="tcb-hero__inner">
    <div class="container">

      <nav class="tcb-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="tcb-hero__breadcrumb-sep" aria-hidden="true">&rsaquo;</span>
        <span>Blog</span>
      </nav>

      <span class="tcb-hero__eyebrow">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
        Towing Tips &amp; Guides
      </span>

      <h1 id="blog-hero-heading">Road Knowledge from the <em>Tow Truck Seat</em></h1>
      <span class="tcb-hero__script">Straight answers, no runaround&hellip;</span>

      <p class="tcb-hero__lead">
        After 13 years towing along US-59, I-69, and SH-99, the Twin Cities Towing INC
        crew has seen every breakdown Fort Bend County can throw at a driver. These
        guides cover what towing really costs, what to do after a wreck, and what
        Texas law says about your car — written from the driver&rsquo;s seat, not a
        marketing office.
      </p>

      <div class="tcb-hero__chips">
        <span class="tcb-hero__chip">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          24/7 Dispatch
        </span>
        <span class="tcb-hero__chip">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          Based in Richmond, TX
        </span>
        <span class="tcb-hero__chip">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
          Serving Since 2011
        </span>
      </div>

    </div>
  </div>
</section>

<!-- Divider: hero (primary) → featured (white) — curve -->
<div class="tcb-divider-curve" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C360,50 1080,0 1440,30 L1440,50 L0,50 Z" fill="#ffffff"/>
  </svg>
</div>

<?php if ($featuredPost): ?>
<!-- ═══════════════════════════════════════════════════════════════
     FEATURED POST — asymmetric layout, offset tint panel
════════════════════════════════════════════════════════════════ -->
<section class="tcb-featured-section" aria-labelledby="featured-post-heading">
  <div class="container">

    <div class="tcb-featured-head" data-animate="fade-up">
      <div>
        <span class="eyebrow-label">Latest Article</span>
        <h2 id="featured-post-heading" style="margin:0;">Fresh Off the Truck</h2>
      </div>
      <span class="section-subtitle">Hot off the flatbed</span>
    </div>

    <article class="tcb-featured" data-p1-dynamic aria-label="<?php echo htmlspecialchars($featuredPost['title']); ?>">

      <div class="tcb-featured__media">
        <div class="tcb-featured__img-wrap">
          <img src="<?php echo htmlspecialchars($featuredPost['image']); ?>"
               alt="<?php echo htmlspecialchars($featuredPost['alt']); ?>"
               width="800" height="500" loading="eager">
        </div>
        <span class="tcb-featured__badge"><?php echo htmlspecialchars($featuredPost['category']); ?></span>
      </div>

      <div class="tcb-featured__body">
        <div class="tcb-featured__meta">
          <span class="tcb-featured__meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
            <time datetime="<?php echo htmlspecialchars($featuredPost['dateISO']); ?>"><?php echo htmlspecialchars($featuredPost['date']); ?></time>
          </span>
          <span class="tcb-featured__meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <?php echo htmlspecialchars($featuredPost['readtime']); ?>
          </span>
        </div>

        <h3 class="tcb-featured__title">
          <a href="/blog/<?php echo htmlspecialchars($featuredPost['slug']); ?>/">
            <?php echo htmlspecialchars($featuredPost['title']); ?>
          </a>
        </h3>

        <p class="tcb-featured__excerpt"><?php echo htmlspecialchars($featuredPost['excerpt']); ?></p>

        <a href="/blog/<?php echo htmlspecialchars($featuredPost['slug']); ?>/" class="tcb-featured__cta">
          Read the Full Guide
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>

    </article>

  </div>
</section>
<?php endif; ?>

<!-- Divider: featured (white) → grid (light) — angle -->
<div class="tcb-divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 45" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,45 L1440,0 L1440,45 Z" fill="#f8f9fa"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     ARTICLE GRID — tinted card rotation + watermark
════════════════════════════════════════════════════════════════ -->
<section class="tcb-grid-section" aria-labelledby="all-articles-heading">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow-label">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
        All Articles
      </span>
      <h2 id="all-articles-heading">Every Guide for Fort Bend County Drivers</h2>
      <span class="section-subtitle">Read it before you need it</span>
      <p>Costs, accident steps, equipment differences, and Texas towing law — everything we explain to customers on the phone, written down.</p>
    </div>

    <?php if (!empty($gridPosts)): ?>
    <div class="tcb-grid" data-p1-dynamic>
      <?php foreach ($gridPosts as $idx => $post): ?>
      <article class="blog-card tcb-tint-<?php echo ($idx % 3) + 1; ?>" aria-label="<?php echo htmlspecialchars($post['title']); ?>">

        <div class="blog-card__image-wrap">
          <img src="<?php echo htmlspecialchars($post['image']); ?>"
               alt="<?php echo htmlspecialchars($post['alt']); ?>"
               width="800" height="450" loading="lazy">
          <span class="blog-card__category-badge"><?php echo htmlspecialchars($post['category']); ?></span>
        </div>

        <div class="blog-card__body">
          <div class="blog-card__meta">
            <span class="blog-card__meta-item">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
              <time datetime="<?php echo htmlspecialchars($post['dateISO']); ?>"><?php echo htmlspecialchars($post['date']); ?></time>
            </span>
            <span class="blog-card__meta-item">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span><?php echo htmlspecialchars($post['readtime']); ?></span>
            </span>
          </div>

          <h2>
            <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>/">
              <?php echo htmlspecialchars($post['title']); ?>
            </a>
          </h2>

          <p class="blog-card__excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>

          <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>/" class="blog-card__read-more">
            Read Article
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.tcb-grid -->
    <?php endif; ?>

    <!-- Bottom CTA band -->
    <div class="tcb-cta" data-animate="fade-up">
      <div class="tcb-cta__icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
      </div>
      <div class="tcb-cta__copy">
        <h2>Reading This from a Shoulder on I-69?</h2>
        <p>Skip the article and call — Twin Cities Towing INC dispatches 24/7 across Richmond, Rosenberg, Sugar Land, and Katy. Browse our <a href="/services/" style="color:var(--color-accent);">towing &amp; roadside services</a> or <a href="/contact/" style="color:var(--color-accent);">request a free estimate</a>.</p>
      </div>
      <div class="tcb-cta__actions">
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-accent">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
          Call <?php echo htmlspecialchars($phoneDisplay ?: $phone); ?>
        </a>
        <a href="/contact/" class="btn btn-outline-white">Get a Free Estimate</a>
      </div>
    </div>

  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
