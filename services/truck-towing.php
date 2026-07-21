<?php
/**
 * Twin Cities Towing INC — Truck Towing Service
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'truck-towing') { $currentService = $s; break; }
}

$pageTitle       = 'Truck Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Professional truck towing in Richmond, TX for heavy-duty and commercial vehicles. Twin Cities Towing INC handles box trucks, pickups, and commercial fleets. 24/7 dispatch.';
$pageKeywords    = 'truck towing Richmond TX, heavy duty towing Richmond, commercial truck towing Texas, truck recovery Richmond, box truck towing Fort Bend County';
$canonicalUrl    = $domain . '/services/truck-towing';
$ogImage         = $clientPhotos[2];
$currentPage     = 'truck-towing';

$serviceFaqs = [
    ['q' => 'What size trucks can Twin Cities Towing handle in Richmond, TX?', 'a' => 'We handle light-duty pickup trucks up through medium-duty commercial vehicles including box trucks, flatbeds, and commercial vans in the 10,000–26,000 lb range. For ultra-heavy semis over 26,000 lbs, we will refer you to a specialized heavy hauler. Call us with your vehicle specs and we\'ll tell you right away if we\'re the right fit.'],
    ['q' => 'Can you tow a loaded commercial truck?', 'a' => 'For safety and equipment integrity, we tow commercial vehicles empty or as lightly loaded as possible. If your vehicle is loaded, we\'ll work with you on the safest approach — in some cases that means partial off-loading before tow. We\'ll walk you through the options when you call.'],
    ['q' => 'How long does truck towing take in the Richmond area?', 'a' => 'ETA for truck towing depends on the vehicle type and pickup location. Most calls in Richmond and Fort Bend County see our truck on-site within 30–60 minutes. Complex recoveries or longer hauls may require additional coordination — we give you an honest timeline when you call.'],
    ['q' => 'Do you tow commercial trucks on I-69 and Highway 90?', 'a' => 'Yes. We frequently respond to commercial vehicle breakdowns and accidents along I-69 (US-59), Highway 90, FM 359, and FM 762 in Fort Bend County. We coordinate with TxDOT and law enforcement when needed to clear lanes safely.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Truck Towing Service'],
            ],
        ],
        [
            '@type'       => 'Service',
            '@id'         => $domain . '/services/truck-towing/#service',
            'name'        => 'Truck Towing Service',
            'description' => 'Professional truck towing for heavy-duty and commercial vehicles throughout Richmond TX and Fort Bend County. Available 24/7.',
            'url'         => $domain . '/services/truck-towing',
            'provider'    => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
            'areaServed'  => ['@type' => 'City', 'name' => 'Richmond, TX'],
            'serviceType' => 'Truck Towing',
        ],
        [
            '@type'           => 'LocalBusiness',
            '@id'             => $domain . '/#business',
            'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '142', 'bestRating' => '5'],
        ],
        generateFAQSchema($serviceFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<!-- Breadcrumb -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services" itemprop="item"><span itemprop="name">Services</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Truck Towing Service</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<!-- ═══════════════════════════════════════════════════════════════
     HERO — SERVICE BANNER
════════════════════════════════════════════════════════════════ -->
<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[2]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="truck" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Richmond, TX &bull; Fort Bend County
    </div>
    <h1 class="hero-title" id="service-hero-heading">Truck Towing Service<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Heavy-duty recovery and transport for commercial vehicles, box trucks, and pickup trucks throughout Fort Bend County — 24 hours a day.</p>
    <div class="hero-buttons">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get a Free Estimate
      </a>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<!-- Ticker Strip -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9651;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Heavy-Duty &amp; Commercial Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; I-69, Hwy 90 &amp; All Fort Bend Roads</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Heavy-Duty &amp; Commercial Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; I-69, Hwy 90 &amp; All Fort Bend Roads</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     SERVICE DETAIL
════════════════════════════════════════════════════════════════ -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">

    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="truck" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Truck Towing in Richmond TX
        </span>
        <h2>When Your Commercial Vehicle Goes Down, We Come to You</h2>
        <div class="prose">
          <p>A disabled truck isn't just an inconvenience — it's lost revenue, a safety hazard, and a logistical problem that compounds by the hour. Twin Cities Towing INC has been handling commercial and heavy-duty truck towing in Richmond and throughout Fort Bend County since 2011, with the right equipment and experienced operators to get your vehicle secured and moving quickly.</p>
          <p>We handle a wide range of commercial vehicles: full-size pickup trucks, cargo vans, box trucks, flatbed work trucks, and medium-duty commercial vehicles. Whether your rig broke down in an industrial park off FM 762, stalled on I-69 northbound, or won't start in a Rosenberg parking lot at 3am — we dispatch immediately and give you a real ETA, not a window.</p>
          <p>Every truck tow starts with a proper assessment of the vehicle weight, configuration, and damage. We select the appropriate rigging and tow method to prevent secondary damage — a concern that matters even more when the vehicle is commercial property or carries expensive equipment. You'll know exactly what we're doing and why before we hook up.</p>
          <p>Our service area covers Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, and surrounding communities within approximately 20 miles of our Richmond base. We frequently work along I-69, Highway 90, Business 90, FM 359, and FM 762 — the commercial corridors that run through Fort Bend County.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[8]); ?>"
               alt="Twin Cities Towing heavy-duty truck towing service in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Quick Facts</h4>
          <ul>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Available 24 hours, 7 days a week</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Medium-duty vehicles up to ~26,000 lbs</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Pickup trucks, box trucks, cargo vans</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Transparent pricing before dispatch</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Licensed &amp; insured — Richmond TX</li>
          </ul>
          <a href="/contact" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Truck Tow
          </a>
        </div>
      </div>
    </div>

    <!-- Answer Block: AEO -->
    <div class="answer-block" data-animate="fade-up">
      <h2>How much does truck towing cost in Richmond, TX?</h2>
      <p>Commercial and heavy-duty truck towing in Richmond typically runs $125–$250+ depending on vehicle size, distance, and whether recovery equipment is needed. We provide a clear quote before dispatching — no surprise charges once your vehicle is loaded.</p>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     WHY CHOOSE US
════════════════════════════════════════════════════════════════ -->
<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Built for Commercial Vehicle Recovery in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="shield" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Proper Equipment for the Job</h3>
          <p class="prose">Commercial trucks require heavier tow equipment, correct rigging points, and operators who understand load transfer. We use the right setup for your specific vehicle — not a one-size-fits-all hook-and-pull approach that can cause secondary damage.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="clock" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Dispatch in Under 2 Minutes</h3>
          <p class="prose">Every minute your truck sits disabled is money and time lost. We answer immediately, confirm your location, and have the closest available driver headed your way before you hang up — no hold queues, no call centers.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="map-pin" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Local Knowledge of Fort Bend Roads</h3>
          <p class="prose">We know the industrial corridors, loading dock areas, and tight spots throughout Richmond and Rosenberg. That local familiarity means faster response and fewer surprises when we arrive — especially for commercial breakdowns off main roads.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="dollar-sign" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Transparent Pricing, No Billing Surprises</h3>
          <p class="prose">We give you an upfront quote before we roll. Commercial towing involves more variables than a standard car tow, and we walk you through the estimate clearly — so you know exactly what you're paying before we hook up.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     PROCESS
════════════════════════════════════════════════════════════════ -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">How It Works</span>
      <h2>Our Truck Towing Process — From Call to Delivery</h2>
    </div>
    <ol class="process-steps" data-animate="fade-up">
      <li class="process-step">
        <div class="process-step-num">1</div>
        <div>
          <h3>Call &amp; Vehicle Assessment</h3>
          <p class="prose">Tell us your location, vehicle type, and approximate GVW. This takes 60 seconds and lets us dispatch the right equipment. We'll confirm ETA before you hang up.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">2</div>
        <div>
          <h3>On-Site Evaluation</h3>
          <p class="prose">When we arrive, our operator walks around the vehicle, confirms all rigging points, and assesses any damage or unusual conditions before touching anything. We'll review the plan with you on the spot.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">3</div>
        <div>
          <h3>Secure Rigging &amp; Load</h3>
          <p class="prose">We rig the vehicle correctly for its type and condition — whether that means a standard wheel-lift, winch-and-roll, or specialized attachment. Safety chains and secondary securement are always applied.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">4</div>
        <div>
          <h3>Transport to Your Destination</h3>
          <p class="prose">We deliver to any mechanic, fleet shop, dealership, or secure location you specify within our service area. You get confirmation when your vehicle is unloaded and handed off.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     MID-PAGE CTA
════════════════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="truck-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Commercial Vehicle Down?</span>
    <h2 id="truck-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Every Minute Your Truck Sits Costs You Money</h2>
    <p>Twin Cities Towing responds immediately — 24 hours a day, 7 days a week, including weekends and holidays. Get your vehicle moving again with one call.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Truck Tow
      </a>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════════════════════ -->
<section class="section-light" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Truck Towing FAQs &mdash; Richmond, TX</h2>
    </div>
    <div class="faq-grid" data-animate="fade-up">
      <?php foreach ($serviceFaqs as $faq): ?>
      <div class="faq-item">
        <div class="faq-icon"><i data-lucide="help-circle" style="width:20px;height:20px;"></i></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     CLOSING CTA
════════════════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-labelledby="truck-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Truck Towing &mdash; Richmond TX</span>
      <h2 id="truck-close-heading">Commercial Vehicle Stranded? We're Ready Now.</h2>
      <p class="closing-lead">Twin Cities Towing INC has handled commercial vehicle recoveries throughout Fort Bend County for over 13 years. Call for immediate dispatch or submit a request online — we'll get back to you in minutes.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get a Free Estimate
      </a>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7 Dispatch
      </a>
      <a href="/services" class="btn btn-outline-white btn-lg">
        <i data-lucide="list" style="width:18px;height:18px;"></i>
        All Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
