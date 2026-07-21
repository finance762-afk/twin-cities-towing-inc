<?php
/**
 * Twin Cities Towing INC — 404 Not Found
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Page Not Found | Twin Cities Towing INC — Richmond TX';
$pageDescription = 'The page you\'re looking for doesn\'t exist. Twin Cities Towing INC — 24/7 towing and roadside assistance in Richmond, TX and Fort Bend County.';
$currentPage     = '404';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

http_response_code(404);
?>

<section class="error-page" style="padding: var(--space-16) 0; min-height: 70vh; display: flex; align-items: center;">
  <div class="container" style="text-align: center;">

    <div data-animate="fade-up">
      <div class="error-icon" style="margin-bottom:var(--space-8);">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:80px;height:80px;color:var(--color-accent);opacity:0.6;"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
  <path d="M15 18H9" />
  <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
  <circle cx="17" cy="18" r="2" />
  <circle cx="7" cy="18" r="2" /></svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
  <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /></svg>
          Back to Home
        </a>
        <a href="/services/" class="btn btn-outline btn-lg">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
          All Services
        </a>
        <a href="/contact/" class="btn btn-accent btn-lg">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
          Call for Towing
        </a>
      </div>

      <!-- Popular Links -->
      <div class="popular-links" style="background:var(--color-bg-alt);border-radius:var(--radius);padding:var(--space-8);max-width:600px;margin-inline:auto;text-align:left;">
        <h2 style="font-size:var(--font-size-lg);margin-bottom:var(--space-5);">Popular Pages</h2>
        <ul style="list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:var(--space-3);">
          <li><a href="/services/emergency-towing/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
  <path d="M12 9v4" />
  <path d="M12 17h.01" /></svg> Emergency Towing</a></li>
          <li><a href="/services/flatbed-towing/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><rect width="18" height="18" x="3" y="3" rx="2" />
  <path d="M8 12h8" /></svg> Flatbed Towing</a></li>
          <li><a href="/services/roadside-assistance/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z" /></svg> Roadside Assistance</a></li>
          <li><a href="/services/lockout-service/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
  <path d="M7 11V7a5 5 0 0 1 10 0v4" /></svg> Lockout Service</a></li>
          <li><a href="/services/motorcycle-towing/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" /></svg> Motorcycle Towing</a></li>
          <li><a href="/services/accident-towing/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><circle cx="12" cy="12" r="10" />
  <line x1="12" x2="12" y1="8" y2="12" />
  <line x1="12" x2="12.01" y1="16" y2="16" /></svg> Accident Towing</a></li>
          <li><a href="/service-area/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg> Service Area</a></li>
          <li><a href="/about/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
  <path d="M16 3.128a4 4 0 0 1 0 7.744" />
  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
  <circle cx="9" cy="7" r="4" /></svg> About Us</a></li>
          <li><a href="/contact/" style="display:flex;align-items:center;gap:6px;color:var(--color-accent);font-size:var(--font-size-sm);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
  <rect x="2" y="4" width="20" height="16" rx="2" /></svg> Contact</a></li>
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
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7
      </a>
      <a href="/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
  <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /></svg>
        Go Home
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
