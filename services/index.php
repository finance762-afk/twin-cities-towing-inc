<?php
/**
 * Twin Cities Towing INC — Services Index Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Services Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Full list of towing and roadside services from Twin Cities Towing INC in Richmond, TX — emergency towing, flatbed, roadside assistance, lockouts, motorcycle towing, and more. 24/7.';
$pageKeywords    = 'towing services Richmond TX, roadside assistance Richmond, emergency towing Fort Bend County, flatbed towing Richmond, lockout service Richmond, motorcycle towing Richmond';
$canonicalUrl    = $domain . '/services';
$ogImage         = $clientPhotos[0];
$currentPage     = 'services';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services'],
        ]],
        ['@type' => 'LocalBusiness', '@id' => $domain . '/#business',
         'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '142', 'bestRating' => '5']],
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
        <span itemprop="name">Services</span><meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
</nav>

<!-- SERVICES HERO BANNER -->
<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[0]); ?>');"
         aria-labelledby="services-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="truck" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Richmond, TX &bull; 13 Years &bull; 24/7
    </div>
    <h1 class="hero-title" id="services-hero-heading">Towing &amp; Roadside Services<br>in Richmond, TX</h1>
    <p class="hero-subtitle">From emergency towing on I-69 at 3am to a locked car in a Sugar Land parking lot — Twin Cities Towing INC handles every situation in Fort Bend County, around the clock.</p>
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

<!-- TICKER -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Fast Response Times</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Fast Response Times</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- SERVICES INTRO -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">
        <i data-lucide="list" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
        Complete Towing &amp; Roadside Services
      </span>
      <h2>Everything Fort Bend County Drivers Need — One Company, One Call</h2>
      <p class="prose-centered">Twin Cities Towing INC has operated out of Richmond, TX since 2011, handling every towing and roadside situation the roads of Fort Bend County can produce. Whether you need a heavy commercial vehicle recovery, a specialized flatbed for an AWD car, or a technician to pop your locked door — it's one call, immediate dispatch, and a real ETA before you hang up.</p>
    </div>

    <!-- Services Grid -->
    <div class="grid-3" data-animate="fade-up">
      <?php
      $serviceIcons = [
          'truck'           => 'truck',
          'emergency-towing'=> 'alert-triangle',
          'roadside'        => 'tool',
          'car'             => 'car',
          'motorcycle'      => 'activity',
          'flatbed'         => 'minus-square',
          'tire'            => 'disc',
          'lockout'         => 'lock',
          'light'           => 'navigation',
          'accident'        => 'alert-circle',
          'breakdown'       => 'zap-off',
      ];
      foreach ($services as $i => $service):
      $photoIndex = ($i * 2 + 4) % count($clientPhotos);
      ?>
      <div class="card service-listing-card">
        <div class="service-listing-img">
          <img src="<?php echo htmlspecialchars($clientPhotos[$photoIndex]); ?>"
               alt="<?php echo htmlspecialchars($service['name']); ?> in Richmond TX"
               width="400" height="220" loading="lazy">
        </div>
        <div class="card-body">
          <div class="card-icon">
            <i data-lucide="<?php echo htmlspecialchars($service['icon']); ?>" style="width:24px;height:24px;"></i>
          </div>
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <p class="prose"><?php echo htmlspecialchars($service['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>" class="btn btn-primary btn-sm">
            Learn More
            <i data-lucide="arrow-right" style="width:14px;height:14px;margin-left:4px;"></i>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MID-PAGE CTA -->
<section class="cta-banner" aria-labelledby="services-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Need Help Right Now?</span>
    <h2 id="services-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Immediate Dispatch — Any Service, Any Hour</h2>
    <p>Twin Cities Towing INC dispatches within 2 minutes of your call throughout Fort Bend County. No hold music, no national routing — local driver, local dispatcher, real ETA.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request a Free Estimate
      </a>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What 13 Years in Richmond Looks Like</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="map-pin" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Local Dispatchers Who Know Fort Bend County Roads</h3>
          <p class="prose">When you call Twin Cities Towing, you reach a local dispatcher who knows I-69, Hwy 90, FM 359, and every back road in between. No national call center routing your request to a stranger. Direct local dispatch, every time.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="shield-check" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Licensed, Insured, and Accountable</h3>
          <p class="prose">Twin Cities Towing INC operates as a licensed and insured towing company in Texas. We're accountable for our work — if there's an issue, you talk to us directly, not a national customer service line.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="dollar-sign" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Transparent Pricing — Quoted Before Dispatch</h3>
          <p class="prose">We give you a clear price before the truck rolls. No surprise charges once your vehicle is loaded, no fuel surcharges buried in the invoice. What we quote on the call is what you pay.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="clock" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>24/7 — No Exceptions, No Holidays Off</h3>
          <p class="prose">Vehicles break down at all hours. Our dispatch is live every hour of every day — including Christmas, Thanksgiving, and every other day your car decides it's done cooperating. There are no off-hours at Twin Cities Towing.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="stats-section">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</span></div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="11">0</span></div>
        <div class="stat-label">Services Offered</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="9" data-prefix="4." data-suffix="&#9733;">0</span></div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="20" data-suffix=" mi">0</span></div>
        <div class="stat-label">Service Radius</div>
      </div>
    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<section class="closing-cta" aria-labelledby="services-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">All Towing &amp; Roadside Services — Richmond TX</span>
      <h2 id="services-close-heading">Whatever the Situation, We Have the Service and the Equipment</h2>
      <p class="closing-lead">Twin Cities Towing INC has handled every towing and roadside scenario Fort Bend County can produce since 2011. Call for immediate dispatch or request online — a real person answers and a real driver heads your way.</p>
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
      <a href="/service-area" class="btn btn-outline-white btn-lg">
        <i data-lucide="map-pin" style="width:18px;height:18px;"></i>
        View Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
