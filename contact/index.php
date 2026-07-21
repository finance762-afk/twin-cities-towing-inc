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
<section class="service-hero service-hero-sm"
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

<!-- CONTACT SECTION -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="contact-grid" data-animate="fade-up">

      <!-- FORM COLUMN -->
      <div class="contact-form-col">
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

        <div class="contact-info-card">
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

        <div class="contact-info-card" style="margin-top:var(--space-6);">
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
        <div class="emergency-contact-card" style="margin-top:var(--space-6);">
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
    <div class="map-embed" data-animate="fade-up" style="margin-top:var(--space-12);">
      <h3 style="margin-bottom:var(--space-4);">Find Us in Richmond, TX</h3>
      <div class="map-container">
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
