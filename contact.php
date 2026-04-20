<?php
/**
 * Twin Cities Towing INC — Contact Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Contact Twin Cities Towing INC | Richmond TX | Get a Free Estimate';
$pageDescription = 'Contact Twin Cities Towing INC in Richmond, TX for a free estimate, emergency towing, or roadside assistance. 24/7 dispatch throughout Fort Bend County. Fast response guaranteed.';
$pageKeywords    = 'contact Twin Cities Towing, towing Richmond TX, free estimate towing Richmond, towing quote Fort Bend County, emergency towing contact Richmond';
$canonicalUrl    = $domain . '/contact';
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
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
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
      <i data-lucide="phone" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
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
          <i data-lucide="file-text" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Request a Free Estimate
        </span>
        <h2>Tell Us What You Need — We'll Get Back to You Fast</h2>
        <p class="prose" style="margin-bottom:var(--space-8);">Fill out the form below for a free quote on any towing or roadside service in Fort Bend County. For immediate emergency dispatch, call us directly — this form is for non-urgent requests and estimates.</p>

        <form class="contact-form"
              action="<?php echo htmlspecialchars($formAction); ?>"
              method="POST"
              novalidate>

          <!-- Formsubmit hidden fields -->
          <input type="hidden" name="_next"     value="<?php echo htmlspecialchars($domain); ?>/thank-you">
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
            <i data-lucide="send" style="width:18px;height:18px;margin-right:8px;"></i>
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
              <i data-lucide="phone" style="width:18px;height:18px;color:var(--color-accent);"></i>
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
              <i data-lucide="mail" style="width:18px;height:18px;color:var(--color-accent);"></i>
              <div>
                <span class="contact-detail-label">Email</span>
                <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="contact-detail-value">
                  <?php echo htmlspecialchars($email); ?>
                </a>
              </div>
            </li>
            <?php endif; ?>
            <li>
              <i data-lucide="map-pin" style="width:18px;height:18px;color:var(--color-accent);"></i>
              <div>
                <span class="contact-detail-label">Address</span>
                <span class="contact-detail-value"><?php echo htmlspecialchars($addressFull); ?></span>
              </div>
            </li>
            <li>
              <i data-lucide="clock" style="width:18px;height:18px;color:var(--color-accent);"></i>
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
          <a href="/service-area" style="display:inline-flex;align-items:center;gap:4px;margin-top:var(--space-4);font-size:var(--font-size-sm);color:var(--color-accent);">
            <i data-lucide="map" style="width:14px;height:14px;"></i>
            View full service area map
          </a>
        </div>

        <!-- Emergency Banner -->
        <div class="emergency-contact-card" style="margin-top:var(--space-6);">
          <i data-lucide="alert-triangle" style="width:24px;height:24px;color:#fff;"></i>
          <div>
            <h4>Emergency Towing?</h4>
            <p>Don't fill out the form — call us directly for immediate 24/7 dispatch. We pick up and we dispatch fast.</p>
            <a href="/contact" class="btn btn-accent btn-sm" style="margin-top:var(--space-3);">
              <i data-lucide="phone" style="width:15px;height:15px;"></i>
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
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
      <a href="/services" class="btn btn-outline-white btn-lg">
        <i data-lucide="list" style="width:18px;height:18px;"></i>
        View All Services
      </a>
      <a href="/service-area" class="btn btn-outline-white btn-lg">
        <i data-lucide="map-pin" style="width:18px;height:18px;"></i>
        Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
