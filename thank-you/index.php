<?php
/**
 * Twin Cities Towing INC — Thank You / Confirmation Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Request Received | Twin Cities Towing INC — Richmond TX';
$pageDescription = 'Thank you for contacting Twin Cities Towing INC. We\'ve received your inquiry and will respond promptly. For immediate emergency towing, call us directly.';
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
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:40px;height:40px;color:#fff;stroke-width:3;"><path d="M20 6 9 17l-5-5" /></svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:#fff;"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
  <path d="M12 9v4" />
  <path d="M12 17h.01" /></svg>
        <div style="text-align:left;">
          <h4>Need Help Right Now?</h4>
          <p>For emergency towing and immediate dispatch throughout Fort Bend County, call us directly — don't wait on the form response.</p>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-accent btn-sm" style="margin-top:var(--space-3);display:inline-flex;align-items:center;gap:6px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:15px;height:15px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
            Call <?php echo htmlspecialchars($phoneDisplay); ?> for Immediate Dispatch
          </a>
        </div>
      </div>

      <!-- Review request (v6.1) -->
      <?php if (!empty($gbpPlaceId)): ?>
      <div style="max-width:500px;margin-inline:auto;margin-bottom:var(--space-10);">
        <p class="prose-centered" style="color:var(--color-text-light);margin-bottom:var(--space-3);">
          Already used our service? A quick review helps other stranded drivers find us.
        </p>
        <a href="https://search.google.com/local/writereview?placeid=<?php echo htmlspecialchars($gbpPlaceId); ?>"
           class="btn btn-outline btn-sm" target="_blank" rel="noopener"
           style="display:inline-flex;align-items:center;gap:6px;">
          <?php echo lucide_icon('star', '', 'width:15px;height:15px;'); ?>
          Leave Us a Google Review
        </a>
      </div>
      <?php endif; ?>

      <!-- Navigation -->
      <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
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
        <a href="/service-area/" class="btn btn-outline btn-lg">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          Service Area
        </a>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
