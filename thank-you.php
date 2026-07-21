<?php
/**
 * Twin Cities Towing INC — Thank You / Confirmation Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Request Received | Twin Cities Towing INC — Richmond TX';
$pageDescription = 'Thank you for contacting Twin Cities Towing INC. We\'ve received your inquiry and will respond promptly. For immediate emergency towing, call us directly.';
$canonicalUrl    = $domain . '/thank-you';
$currentPage     = 'thank-you';

// noindex this page
$noindex = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
// Override robots for this page
echo '<meta name="robots" content="noindex, nofollow">';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<section class="section-white" style="padding: var(--space-16) 0; min-height: 70vh; display: flex; align-items: center;">
  <div class="container" style="text-align: center;">

    <div data-animate="fade-up">

      <!-- Confirmation Icon -->
      <div style="margin-bottom:var(--space-8);">
        <div style="width:80px;height:80px;background:var(--color-accent);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-inline:auto;box-shadow:0 0 0 16px rgba(6,182,212,0.12);">
          <i data-lucide="check" style="width:40px;height:40px;color:#fff;stroke-width:3;"></i>
        </div>
      </div>

      <h1 style="font-size:clamp(2rem,5vw,3rem);margin-bottom:var(--space-4);">
        Your Request Is In &mdash; We'll Be in Touch Shortly
      </h1>

      <p class="prose-centered" style="font-size:var(--font-size-lg);margin-bottom:var(--space-6);color:var(--color-text-light);">
        Thanks for reaching out to Twin Cities Towing INC. We've received your inquiry and someone will follow up with you as soon as possible.
      </p>

      <!-- What to Expect -->
      <div class="confirmation-steps" style="max-width:580px;margin-inline:auto;margin-bottom:var(--space-10);text-align:left;">
        <h2 style="font-size:var(--font-size-xl);margin-bottom:var(--space-6);text-align:center;">What Happens Next</h2>
        <ol class="process-steps">
          <li class="process-step">
            <div class="process-step-num">1</div>
            <div>
              <h3>We Review Your Request</h3>
              <p class="prose">We look at your service type, location, and message. If you submitted during business hours, expect a call or text within 30–60 minutes. Evening and overnight submissions are reviewed first thing the next morning.</p>
            </div>
          </li>
          <li class="process-step">
            <div class="process-step-num">2</div>
            <div>
              <h3>We Contact You Directly</h3>
              <p class="prose">You'll hear from a real local dispatcher — not an automated reply. We'll confirm your service details, provide a quote if applicable, and schedule pickup or response timing.</p>
            </div>
          </li>
          <li class="process-step">
            <div class="process-step-num">3</div>
            <div>
              <h3>Service Dispatched</h3>
              <p class="prose">Once confirmed, the nearest available driver is dispatched. For emergency calls, we move immediately — no delay between confirmation and driver departure.</p>
            </div>
          </li>
        </ol>
      </div>

      <!-- Emergency prompt -->
      <div class="emergency-contact-card" style="max-width:500px;margin-inline:auto;margin-bottom:var(--space-10);">
        <i data-lucide="alert-triangle" style="width:24px;height:24px;color:#fff;"></i>
        <div style="text-align:left;">
          <h4>Need Help Right Now?</h4>
          <p>For emergency towing and immediate dispatch throughout Fort Bend County, call us directly — don't wait on the form response.</p>
          <a href="/contact" class="btn btn-accent btn-sm" style="margin-top:var(--space-3);display:inline-flex;align-items:center;gap:6px;">
            <i data-lucide="phone" style="width:15px;height:15px;"></i>
            Call for Immediate Dispatch
          </a>
        </div>
      </div>

      <!-- Navigation -->
      <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
        <a href="/" class="btn btn-primary btn-lg">
          <i data-lucide="home" style="width:18px;height:18px;"></i>
          Back to Home
        </a>
        <a href="/services" class="btn btn-outline btn-lg">
          <i data-lucide="list" style="width:18px;height:18px;"></i>
          All Services
        </a>
        <a href="/service-area" class="btn btn-outline btn-lg">
          <i data-lucide="map-pin" style="width:18px;height:18px;"></i>
          Service Area
        </a>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
