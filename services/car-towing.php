<?php
/**
 * Twin Cities Towing INC — Car Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Car Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Reliable car towing in Richmond, TX for all vehicle types. Twin Cities Towing INC safely transports your car to any mechanic, dealership, or address in Fort Bend County. 24/7.';
$pageKeywords    = 'car towing Richmond TX, vehicle towing Richmond, auto towing Texas, car transport Richmond, tow car Fort Bend County, sedan towing Richmond';
$canonicalUrl    = $domain . '/services/car-towing';
$ogImage         = $clientPhotos[10];
$currentPage     = 'car-towing';

$serviceFaqs = [
    ['q' => 'How much does car towing cost in Richmond, TX?', 'a' => 'Most standard car tows in Richmond start around $75–$125 for local distances within Fort Bend County. Longer hauls, after-hours service, or difficult recovery situations may cost more. We give you a clear quote before dispatch — no surprise fees once your car is loaded.'],
    ['q' => 'Can you tow my car to any mechanic in the area?', 'a' => 'Absolutely. We deliver your vehicle to any mechanic, dealership, body shop, or private address you choose within our service area. We do not push you toward preferred shops — your vehicle goes where you need it.'],
    ['q' => 'Will my car get scratched or damaged during towing?', 'a' => 'We take extensive precautions to prevent damage during loading and transport. Low-clearance vehicles, sports cars, and luxury sedans are handled on our flatbed, which keeps all four wheels off the ground. Standard vehicles use wheel-lift equipment with proper tie-down technique. In 13+ years of operation, careful handling has been a core part of how we work.'],
    ['q' => 'Can you tow all-wheel drive or four-wheel drive cars?', 'a' => 'Yes — AWD and 4WD vehicles should always be transported on a flatbed to prevent drivetrain damage. We carry flatbed equipment specifically for this. If you\'re not sure what your car requires, tell us the make and model when you call and we\'ll dispatch the right setup.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Car Towing'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/car-towing/#service',
         'name' => 'Car Towing', 'url' => $domain . '/services/car-towing',
         'description' => 'Reliable car towing service throughout Richmond TX and Fort Bend County. Safe transport for all vehicle types, 24/7.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Car Towing'],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business',
         'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '142', 'bestRating' => '5']],
        generateFAQSchema($serviceFaqs),
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
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services" itemprop="item"><span itemprop="name">Services</span></a><meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Car Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[10]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="car" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Sedans &bull; SUVs &bull; Coupes &bull; All Passenger Cars
    </div>
    <h1 class="hero-title" id="service-hero-heading">Car Towing Service<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Safe, careful transport for all passenger vehicles throughout Fort Bend County. Your car delivered to any mechanic or destination — no damage, no drama.</p>
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
    <span>&#128664;&nbsp; All Passenger Vehicle Types</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch — 20–40 Min ETA</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Deliver to Any Mechanic or Address</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128664;&nbsp; All Passenger Vehicle Types</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch — 20–40 Min ETA</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Deliver to Any Mechanic or Address</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="car" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Car Towing in Richmond TX
        </span>
        <h2>Your Car Moved Carefully, Delivered Where You Need It</h2>
        <div class="prose">
          <p>Car towing sounds simple — but a lot can go wrong with the wrong operator. Incorrect tie-down positioning scratches bumpers. Improper wheel-lift technique damages steering components. Loading too fast on an incline can stress body panels. After 13 years of towing passenger vehicles throughout Richmond and Fort Bend County, our drivers know how to avoid every one of those mistakes.</p>
          <p>We tow all passenger vehicle types: sedans, coupes, hatchbacks, station wagons, crossovers, and standard SUVs. Standard front-wheel drive and rear-wheel drive vehicles can be safely towed with our wheel-lift equipment. All-wheel drive and four-wheel drive vehicles go on the flatbed to protect the drivetrain — we'll ask your vehicle type when you call so we dispatch the right truck.</p>
          <p>Your car gets delivered to whichever destination you choose. We service mechanics, dealerships, body shops, and private addresses throughout Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, and surrounding Fort Bend County communities. If you're not sure which shop to use, we're happy to discuss options — but the choice is entirely yours.</p>
          <p>Pricing is transparent and confirmed before dispatch. For standard local tows within Fort Bend County, most car towing calls start at $75–$125. We don't add hidden fees after your vehicle is loaded. What we quote is what you pay.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[13]); ?>"
               alt="Car being towed safely in Richmond TX by Twin Cities Towing"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Car Towing Highlights</h4>
          <ul>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> All passenger car types</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> AWD/4WD on flatbed</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Deliver to any destination</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Upfront pricing before dispatch</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> 24/7 availability</li>
          </ul>
          <a href="/contact" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Car Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>How do I know if my car needs flatbed or wheel-lift towing?</h2>
      <p>AWD, 4WD, and most low-clearance vehicles should always use flatbed towing to protect the drivetrain and undercarriage. Standard FWD and RWD vehicles can typically use wheel-lift. When you call, tell us your car's make and drivetrain type — we'll dispatch the right equipment automatically.</p>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What Careful Car Towing Looks Like in Practice</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="shield" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Right Equipment for Your Vehicle</h3>
          <p class="prose">We match the tow method to your specific car. No flat-bed-for-everything or wheel-lift-for-everything generalization. The right equipment means your vehicle arrives in the same condition it left.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="navigation" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Your Choice of Destination</h3>
          <p class="prose">We never tell you where your car has to go. Any licensed mechanic, dealership, body shop, or home address within our service area is a valid destination. You're in charge of your vehicle.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="dollar-sign" style="width:24px;height:14px;color:var(--color-accent);"></i>
        <div>
          <h3>Quote Before We Roll</h3>
          <p class="prose">You know what you're paying before we touch your car. We don't add "mileage surprises" or fuel surcharges after the fact. What we quote on the call is the final number.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="clock" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Fast Dispatch Around the Clock</h3>
          <p class="prose">Car breakdowns don't follow a 9-to-5 schedule. Our dispatch is live 24 hours a day — whether your car died at 6am on your way to work or at midnight coming back from Sugar Land.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="car-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Car Won't Move?</span>
    <h2 id="car-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">We'll Have It at Your Shop in Under an Hour</h2>
    <p>Call Twin Cities Towing INC for immediate dispatch and a real ETA. No call centers, no runaround — local dispatch, local driver, 20–40 minutes to most Richmond-area locations.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Car Tow
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
      <h2>Car Towing FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="car-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Car Towing &mdash; Richmond TX</span>
      <h2 id="car-close-heading">Your Car, Handled Carefully — Delivered Where You Need It</h2>
      <p class="closing-lead">Twin Cities Towing INC has been safely transporting passenger vehicles throughout Fort Bend County since 2011. When your car won't move, we do — 24/7, with upfront pricing and no pressure on your destination choice.</p>
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
