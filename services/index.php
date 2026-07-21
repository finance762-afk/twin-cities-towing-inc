<?php
/**
 * Twin Cities Towing INC — Services Index Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Services Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Full list of towing and roadside services from Twin Cities Towing INC in Richmond, TX — emergency towing, flatbed, roadside assistance, lockouts, motorcycle towing, and more. 24/7.';
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
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
  <path d="M15 18H9" />
  <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
  <circle cx="17" cy="18" r="2" />
  <circle cx="7" cy="18" r="2" /></svg>
      Richmond, TX &bull; 13 Years &bull; 24/7
    </div>
    <h1 class="hero-title" id="services-hero-heading">Towing &amp; Roadside Services<br>in Richmond, TX</h1>
    <p class="hero-subtitle">From emergency towing on I-69 at 3am to a locked car in a Sugar Land parking lot — Twin Cities Towing INC handles every situation in Fort Bend County, around the clock.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
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
            <?php echo lucide_icon($service['icon'], '', 'width:24px;height:24px;'); ?>
          </div>
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <p class="prose"><?php echo htmlspecialchars($service['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="btn btn-primary btn-sm">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;margin-left:4px;"><path d="M5 12h14" />
  <path d="m12 5 7 7-7 7" /></svg>
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
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Request a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        <div>
          <h3>Local Dispatchers Who Know Fort Bend County Roads</h3>
          <p class="prose">When you call Twin Cities Towing, you reach a local dispatcher who knows I-69, Hwy 90, FM 359, and every back road in between. No national call center routing your request to a stranger. Direct local dispatch, every time.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
  <path d="m9 12 2 2 4-4" /></svg>
        <div>
          <h3>Licensed, Insured, and Accountable</h3>
          <p class="prose">Twin Cities Towing INC operates as a licensed and insured towing company in Texas. We're accountable for our work — if there's an issue, you talk to us directly, not a national customer service line.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        <div>
          <h3>Transparent Pricing — Quoted Before Dispatch</h3>
          <p class="prose">We give you a clear price before the truck rolls. No surprise charges once your vehicle is loaded, no fuel surcharges buried in the invoice. What we quote on the call is what you pay.</p>
        </div>
      </div>
      <div class="benefit-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;color:var(--color-accent);"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
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
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        Call Now &mdash; 24/7 Dispatch
      </a>
      <a href="/service-area/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        View Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
