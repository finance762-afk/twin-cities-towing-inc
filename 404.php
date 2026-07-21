<?php
/**
 * Twin Cities Towing INC — 404 Not Found
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Page Not Found | Twin Cities Towing INC — Richmond TX';
$pageDescription = 'The page you\'re looking for doesn\'t exist. Twin Cities Towing INC — 24/7 towing and roadside assistance in Richmond, TX and Fort Bend County.';
$canonicalUrl    = $domain . '/404';
$currentPage     = '404';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

http_response_code(404);
?>

<section class="error-page" style="padding: var(--space-16) 0; min-height: 70vh; display: flex; align-items: center;">
  <div class="container" style="text-align: center;">

    <div data-animate="fade-up">
      <div class="error-icon" style="margin-bottom:var(--space-8);">
        <i data-lucide="truck" style="width:80px;height:80px;color:var(--color-accent);opacity:0.6;"></i>
      </div>

      <div style="font-family:var(--font-heading);font-size:clamp(5rem,15vw,10rem);font-weight:800;color:var(--color-primary);opacity:0.12;line-height:1;margin-bottom:-2rem;pointer-events:none;">
        404
      </div>

      <h1 style="font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">
        This Road Doesn't Go Anywhere
      </h1>

      <p class="prose-centered" style="margin-bottom:var(--space-8);color:var(--color-text-light);">
        The page you're looking for doesn't exist — but if you're stranded in Fort Bend County, Twin Cities Towing INC definitely does. Let us help you find what you need.
      </p>

      <!-- Quick Nav -->
      <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;margin-bottom:var(--space-10);">
        <a href="/" class="btn btn-primary btn-lg">
          <i data-lucide="home" style="width:18px;height:18px;"></i>
          Back to Home
        </a>
        <a href="/services" class="btn btn-outline btn-lg">
          <i data-lucide="list" style="width:18px;height:18px;"></i>
          All Services
        </a>
        <a href="/contact" class="btn btn-accent btn-lg">
          <i data-lucide="phone" style="width:18px;height:18px;"></i>
          Call for Towing
        </a>
      </div>

      <!-- Popular Links -->
      <div class="popular-links" style="background:var(--color-bg-alt);border-radius:var(--radius);padding:var(--space-8);max-width:600px;margin-inline:auto;text-align:left;">
        <h2 style="font-size:var(--font-size-lg);margin-bottom:var(--space-5);">Popular Pages</h2>
        <ul style="list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:var(--space-3);">
          <li><a href="/services/emergency-towing" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="alert-triangle" style="width:14px;height:14px;"></i> Emergency Towing</a></li>
          <li><a href="/services/flatbed-towing" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="minus-square" style="width:14px;height:14px;"></i> Flatbed Towing</a></li>
          <li><a href="/services/roadside-assistance" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="tool" style="width:14px;height:14px;"></i> Roadside Assistance</a></li>
          <li><a href="/services/lockout-service" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="lock" style="width:14px;height:14px;"></i> Lockout Service</a></li>
          <li><a href="/services/motorcycle-towing" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="activity" style="width:14px;height:14px;"></i> Motorcycle Towing</a></li>
          <li><a href="/services/accident-towing" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="alert-circle" style="width:14px;height:14px;"></i> Accident Towing</a></li>
          <li><a href="/service-area" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Service Area</a></li>
          <li><a href="/about" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="users" style="width:14px;height:14px;"></i> About Us</a></li>
          <li><a href="/contact" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><i data-lucide="mail" style="width:14px;height:14px;"></i> Contact</a></li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<section class="closing-cta" aria-labelledby="notfound-cta-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Stranded? We're Still Here.</span>
      <h2 id="notfound-cta-heading">Wrong Page — Right Company. We'll Get You Where You're Going.</h2>
      <p class="closing-lead">Twin Cities Towing INC provides 24/7 emergency towing and roadside assistance throughout Richmond, TX and all of Fort Bend County. One call, immediate dispatch, real ETA.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
      <a href="/" class="btn btn-outline-white btn-lg">
        <i data-lucide="home" style="width:18px;height:18px;"></i>
        Go Home
      </a>
      <a href="/services" class="btn btn-outline-white btn-lg">
        <i data-lucide="list" style="width:18px;height:18px;"></i>
        All Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
