<?php
/**
 * Twin Cities Towing INC — Breakdown Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Breakdown Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Vehicle breakdown towing in Richmond, TX for engine failures, transmission problems, and cars that won\'t start. Twin Cities Towing INC gets your car to a mechanic fast. 24/7.';
$pageKeywords    = 'breakdown towing Richmond TX, mechanical failure towing Richmond, disabled vehicle towing Texas, car breakdown Richmond, engine failure towing Fort Bend, car won\'t start towing Richmond';
$canonicalUrl    = $domain . '/services/breakdown-towing';
$ogImage         = $clientPhotos[24];
$currentPage     = 'breakdown-towing';

$serviceFaqs = [
    ['q' => 'What if my car breaks down on a highway in Richmond, TX?', 'a' => 'Highway breakdowns are treated as high-priority calls. Turn on your hazard lights, pull as far onto the shoulder as possible, and call us immediately. We dispatch quickly and arrive with warning equipment to protect you from passing traffic. Don\'t stay in or near the vehicle on an active highway shoulder — get behind the guard rail if possible.'],
    ['q' => 'Can you tell me what\'s wrong with my car when you arrive?', 'a' => 'Our drivers are experienced with common breakdown symptoms and will give you their honest read on what may be happening. However, we\'re tow operators — not mechanics — and won\'t make repair promises or misdiagnose. We can help you get to a mechanic who can do a proper diagnosis. If the issue might be fixable roadside (dead battery, for instance), we\'ll try that first.'],
    ['q' => 'My car died at home and won\'t start — can you still tow it?', 'a' => 'Absolutely. We tow from any location — driveways, parking lots, garages (standard height), streets. If you\'re in a private driveway or parking structure, give us the details when you call and we\'ll confirm access. Most residential and commercial tow pickups present no issues.'],
    ['q' => 'How do I lock my car if the battery is completely dead?', 'a' => 'Most modern vehicles have a mechanical key hidden inside the key fob for battery-dead situations. Your owner\'s manual will show you the hidden key slot location. If you\'re unable to secure the vehicle, stay with it until we arrive — we can help with secure handoff at your destination.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Breakdown Towing'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/breakdown-towing/#service',
         'name' => 'Breakdown Towing', 'url' => $domain . '/services/breakdown-towing',
         'description' => 'Vehicle breakdown towing in Richmond TX for mechanical failures. 24/7 availability throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Breakdown Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business',
         'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '142', 'bestRating' => '5']],
        generateFAQSchema($serviceFaqs),
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
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services" itemprop="item"><span itemprop="name">Services</span></a><meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Breakdown Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[24]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="zap-off" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Engine Failures &bull; Won't Start &bull; Transmission Issues
    </div>
    <h1 class="hero-title" id="service-hero-heading">Breakdown Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">When your car stops cooperating — anywhere in Fort Bend County — we get it to the right mechanic fast. 24/7 dispatch, 20–40 minute response.</p>
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

<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#9889;&nbsp; Engine, Transmission &amp; Electrical</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min Response — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Any Location — Driveway to Highway</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Engine, Transmission &amp; Electrical</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min Response — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Any Location — Driveway to Highway</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[21]); ?>"
               alt="Breakdown towing service in Richmond TX picking up disabled vehicle"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="zap-off" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Breakdown Towing in Richmond TX
        </span>
        <h2>Your Car Gave Up — We Haven't</h2>
        <div class="prose">
          <p>Mechanical breakdowns happen without warning. A transmission that shifts rough one week can fail completely the next. An engine that's been running hot might overheat and seize before you reach your exit on I-69. An electrical failure can leave you dead in the water in the middle of a Rosenberg parking lot on a Sunday afternoon. Whatever put your vehicle out of commission, Twin Cities Towing INC responds to breakdown calls throughout Fort Bend County 24 hours a day — and has done so since 2011.</p>
          <p>Our first step on any breakdown call is to assess whether there's a simple roadside fix. A dead battery that responds to a jump, for instance, may not require a tow at all. If the issue genuinely requires a shop visit — engine failure, blown transmission, serious electrical fault — we load and transport without delay. We don't waste your time pretending a mechanical failure can be fixed on the side of a road when it can't.</p>
          <p>Breakdown towing pickup locations aren't limited to roadways. We tow from residential driveways, apartment parking lots, commercial parking garages (standard clearance heights), and anywhere else your vehicle happens to be when it gives out. If your car didn't start this morning and has been sitting in your driveway all day, we can pick it up and take it to your preferred shop during regular business hours or at any point through the night.</p>
          <p>We service all of Fort Bend County, including Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno. Common breakdown corridors we cover daily include I-69, Highway 90, Highway 36, FM 359, and FM 762.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What should I do if my car breaks down on the highway in Richmond, TX?</h2>
      <p>Get to the right shoulder as far as possible, turn on hazard lights, and exit the vehicle to stand behind the guard rail away from traffic. Then call Twin Cities Towing INC for immediate dispatch. Don't stay inside a stationary vehicle on an active highway shoulder.</p>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Getting Your Broken-Down Vehicle Where It Needs to Go</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="tool" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Roadside Fix Attempted First</h3>
          <p class="prose">We don't tow when we don't have to. If your breakdown might be solvable on the spot — dead battery, low fuel, tripped killswitch — we check first. Saves you time and money when the fix is simpler than the symptom suggests.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="map-pin" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Pickup from Any Location</h3>
          <p class="prose">Highway, driveway, parking lot, garage — we come to wherever your car stopped. No restriction to roadway-only pickups. If it needs to go to a shop and you can give us the location, we'll get there.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="navigation" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Your Mechanic, Your Call</h3>
          <p class="prose">We deliver to the shop you trust, not one we're affiliated with. Whether that's a dealership in Sugar Land or an independent mechanic in Rosenberg you've used for years — your vehicle goes where you send it.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="clock" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Available When Breakdowns Happen</h3>
          <p class="prose">Mechanical failures don't schedule themselves for business hours. We dispatch 24 hours a day, 7 days a week — including the middle of the night, the weekend, and every holiday on the calendar.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="break-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Car Broken Down in Fort Bend County?</span>
    <h2 id="break-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">From Breakdown to Mechanic — One Call, 20–40 Minutes</h2>
    <p>Whether your car broke down on I-69 or won't start in your driveway, Twin Cities Towing INC responds immediately and handles the rest. Available right now.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Breakdown Tow
      </a>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Breakdown Towing FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="break-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Breakdown Towing &mdash; Richmond TX</span>
      <h2 id="break-close-heading">Broken Down Anywhere in Fort Bend County — We Come to You</h2>
      <p class="closing-lead">Twin Cities Towing INC has been responding to vehicle breakdowns throughout Richmond, Rosenberg, and all of Fort Bend County for over 13 years. When your car won't cooperate, we will — 24/7, any location, upfront pricing.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get a Free Estimate
      </a>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
      <a href="/services" class="btn btn-outline-white btn-lg">
        <i data-lucide="list" style="width:18px;height:18px;"></i>
        All Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
