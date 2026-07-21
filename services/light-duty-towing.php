<?php
/**
 * Twin Cities Towing INC — Light Duty Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Light Duty Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Light duty towing in Richmond, TX for cars, SUVs, and small pickup trucks. Efficient, careful handling with wheel-lift or flatbed based on your vehicle. 24/7 Fort Bend County.';
$pageKeywords    = 'light duty towing Richmond TX, car towing Richmond, SUV towing Texas, small vehicle towing Richmond, passenger vehicle towing Fort Bend, light towing service Richmond';
$canonicalUrl    = $domain . '/services/light-duty-towing';
$ogImage         = $clientPhotos[7];
$currentPage     = 'light-duty-towing';

$serviceFaqs = [
    ['q' => 'What vehicles qualify as light duty towing in Richmond, TX?', 'a' => 'Light duty towing covers passenger cars, crossovers, SUVs, minivans, and small pickup trucks — typically vehicles under 10,000 lbs GVWR. This includes most personal vehicles driven daily in Fort Bend County. For larger pickup trucks or commercial vehicles, see our truck towing service.'],
    ['q' => 'What towing method do you use for light duty vehicles?', 'a' => 'We match the method to the vehicle. Standard FWD and RWD vehicles can use wheel-lift equipment safely. AWD, 4WD, luxury vehicles, and low-clearance cars go on the flatbed to protect the drivetrain and undercarriage. When you call, we confirm the right method for your specific car.'],
    ['q' => 'How much does light duty towing cost in Fort Bend County?', 'a' => 'Most light duty tows within Fort Bend County start around $75–$125 depending on distance and service type. We give you a clear quote before dispatch. Standard wheel-lift tows cost less than flatbed; we\'ll explain the difference when we confirm your vehicle type.'],
    ['q' => 'Can you tow my car to a mechanic outside Fort Bend County?', 'a' => 'Yes. We can transport vehicles beyond our standard Fort Bend County service area on request. Longer hauls are quoted by distance. Call us with your pickup and dropoff locations and we\'ll give you a rate before we commit to the trip.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Light Duty Towing'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/light-duty-towing/#service',
         'name' => 'Light Duty Towing', 'url' => $domain . '/services/light-duty-towing',
         'description' => 'Light duty towing in Richmond TX for cars, SUVs, and small trucks. 24/7 service throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Light Duty Towing'],
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
        <span itemprop="name">Light Duty Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[7]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="navigation" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Cars &bull; SUVs &bull; Crossovers &bull; Minivans &bull; Small Trucks
    </div>
    <h1 class="hero-title" id="service-hero-heading">Light Duty Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Efficient, careful towing for all passenger vehicles under 10,000 lbs throughout Fort Bend County. Right method for your vehicle, right price, right on time.</p>
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
    <span>&#128664;&nbsp; Cars, SUVs &amp; Small Trucks</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min ETA — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Right Method Per Vehicle Type</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — 13 Years Serving Richmond</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128664;&nbsp; Cars, SUVs &amp; Small Trucks</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–40 Min ETA — Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; Right Method Per Vehicle Type</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — 13 Years Serving Richmond</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="navigation" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Light Duty Towing in Richmond TX
        </span>
        <h2>The Right Tow for the Right Vehicle — No Guessing</h2>
        <div class="prose">
          <p>Light duty towing covers the vast majority of vehicles that break down in Richmond and throughout Fort Bend County every day: sedans, crossovers, SUVs, minivans, and small to mid-size pickup trucks under 10,000 lbs GVWR. These vehicles make up the bulk of what we tow, and 13 years of experience handling them means we've worked through every situation these vehicles can present.</p>
          <p>The most important thing we do before dispatching on a light duty call is confirm the right equipment for your specific vehicle. A standard FWD sedan is safely moved with wheel-lift equipment at a lower cost. An all-wheel drive crossover or a lowered sport coupe needs flatbed to protect the drivetrain and undercarriage — and that matters enough that we'd rather ask and get it right than guess and cost you a drivetrain repair.</p>
          <p>Once we arrive, the process is direct: vehicle assessment, confirm tie-down points, proper loading, secure transit, delivery to your chosen destination. We deliver to any mechanic, dealership, or private address throughout Fort Bend County. There's no pressure to use a particular shop, no detour to a holding lot, no drama about your destination choice.</p>
          <p>Our service area covers Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno — the full 20-mile radius around our Richmond base. Interstate and highway calls on I-69, Hwy 90, and Hwy 36 are within our regular response zone.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[23]); ?>"
               alt="Light duty towing service in Richmond TX by Twin Cities Towing"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Light Duty Towing Covers:</h4>
          <ul>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Sedans, coupes, hatchbacks</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Crossovers &amp; compact SUVs</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Minivans &amp; passenger vans</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Light pickup trucks (under 10k lbs)</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Wheel-lift or flatbed as needed</li>
          </ul>
          <a href="/contact" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Light Duty Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What is light duty towing and do I need it?</h2>
      <p>Light duty towing refers to towing passenger vehicles under approximately 10,000 lbs — cars, SUVs, minivans, and small trucks. If you drive a standard personal vehicle that won't start or can't be driven safely, light duty towing is the right call. Twin Cities Towing INC handles these calls 24/7 throughout Fort Bend County.</p>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Light Duty Towing Done Right in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="settings" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Method Matched to Vehicle</h3>
          <p class="prose">We confirm your drivetrain before dispatching equipment. AWD and 4WD vehicles go on flatbed; standard FWD/RWD use wheel-lift. This one step prevents thousands in avoidable drivetrain damage.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="navigation" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Deliver to Your Mechanic of Choice</h3>
          <p class="prose">We go where you tell us — any licensed shop, dealership, or address in Fort Bend County. No pressure, no affiliated shop steering, no detour to a holding yard. Your destination, your decision.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="dollar-sign" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Transparent Pricing Every Time</h3>
          <p class="prose">We quote before we move. Light duty tows in Fort Bend County typically start at $75–$125 depending on distance. Flatbed tows cost slightly more than wheel-lift — we explain the difference clearly when you call.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="clock" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>24/7 Response — 20-40 Minute ETA</h3>
          <p class="prose">Light duty doesn't mean light urgency. We treat every call with the same immediacy — dispatch within 2 minutes, ETA confirmed before you hang up, driver on the road before you've put your phone away.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="light-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Vehicle Won't Move?</span>
    <h2 id="light-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Your Car, the Right Truck, the Right Method — 20–40 Minutes Away</h2>
    <p>Twin Cities Towing INC handles light duty towing calls throughout Richmond and Fort Bend County with properly matched equipment and experienced drivers. Available right now.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Light Duty Tow
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
      <h2>Light Duty Towing FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="light-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Light Duty Towing &mdash; Richmond TX</span>
      <h2 id="light-close-heading">Your Vehicle Handled Carefully — Delivered Without Detours</h2>
      <p class="closing-lead">Twin Cities Towing INC has been moving passenger vehicles throughout Fort Bend County since 2011. Call for immediate dispatch or request online — 24/7, upfront pricing, your destination of choice.</p>
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
