<?php
/**
 * Twin Cities Towing INC — About Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'About Twin Cities Towing INC | Richmond TX Towing Since 2011';
$pageDescription = 'Twin Cities Towing INC has served Richmond and Rosenberg TX since 2011. Learn about our history, team values, and commitment to fast, honest towing service throughout Fort Bend County.';
$ogImage         = $clientPhotos[1];
$currentPage     = 'about';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'About'],
        ]],
        [
            '@type'       => 'Organization',
            '@id'         => $domain . '/#organization',
            'name'        => $siteName,
            'url'         => $domain,
            'logo'        => ['@type' => 'ImageObject', 'url' => $logoUrl],
            'description' => 'Twin Cities Towing INC is a licensed and insured towing company based in Richmond, TX, serving Fort Bend County since 2011.',
            'foundingDate' => (string)$yearEstablished,
            'address'     => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => $address['street'],
                'addressLocality' => $address['city'],
                'addressRegion'   => $address['state'],
                'postalCode'      => $address['zip'],
                'addressCountry'  => 'US',
            ],
        ],
        [
            '@type'           => 'LocalBusiness',
            '@id'             => $domain . '/#business',
            'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '142', 'bestRating' => '5'],
        ],
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
        <span itemprop="name">About</span><meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
</nav>

<!-- HERO -->
<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[1]); ?>');"
         aria-labelledby="about-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="users" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Serving Richmond Since <?php echo $yearEstablished; ?>
    </div>
    <h1 class="hero-title" id="about-hero-heading">A Towing Company Built<br>on Fort Bend County Roads</h1>
    <p class="hero-subtitle">More than 13 years of showing up when Richmond, Rosenberg, and Fort Bend County drivers needed it most — local roots, local knowledge, local accountability.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <i data-lucide="list" style="width:18px;height:18px;"></i>
        View Our Services
      </a>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- COMPANY STORY -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="book-open" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Our Story
        </span>
        <h2>Started in <?php echo $yearEstablished; ?> &mdash; Still Right Here in Richmond</h2>
        <div class="prose">
          <p>Twin Cities Towing INC was founded in <?php echo $yearEstablished; ?> with a straightforward purpose: to provide reliable, honest towing service to the drivers of Richmond and Rosenberg, Texas. The company takes its name from these twin cities at the heart of Fort Bend County — two communities we've been serving since our first call went out over a decade ago.</p>
          <p>In <?php echo $yearsInBusiness; ?>+ years, Fort Bend County has grown significantly. The population has expanded, the highway traffic on I-69 and Highway 90 has increased, and the roads around Richmond have gotten busier. The need for reliable, fast towing service has grown with it. Twin Cities Towing INC has grown alongside the community — expanding our service area and capabilities while maintaining the same direct, no-runaround approach we started with.</p>
          <p>We specialize in towing services for cars, small trucks, and motorcycles — the vehicles that make up the majority of daily traffic in Fort Bend County. We've built our expertise around knowing these vehicle types thoroughly, carrying the right equipment for each, and training our operators to handle them without causing secondary damage in a stressful situation.</p>
          <p>What hasn't changed since 2011 is our operating principle: when a driver in Richmond calls Twin Cities Towing, a real person answers, a real driver heads out, and the pricing is honest. There's no national call center between you and the help you need. That local accountability is what we've built 13 years of reputation on.</p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[18]); ?>"
               alt="Twin Cities Towing INC truck in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="about-stat-card">
          <span class="stat-big"><?php echo $yearEstablished; ?></span>
          <span class="stat-label">Founded in<br>Richmond TX</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TIMELINE / MILESTONES -->
<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Our History</span>
      <h2>Over a Decade on Fort Bend County Roads</h2>
    </div>
    <div class="timeline" data-animate="fade-up">
      <div class="timeline-item">
        <div class="timeline-year">2011</div>
        <div class="timeline-content">
          <h3>Twin Cities Towing INC Founded</h3>
          <p class="prose">We launched our towing operation in Richmond, TX, named after the twin cities of Richmond and Rosenberg at the center of Fort Bend County. Our first focus: emergency towing and roadside assistance for local drivers.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year">2013</div>
        <div class="timeline-content">
          <h3>Expanded to Flatbed &amp; Specialty Towing</h3>
          <p class="prose">Added flatbed equipment to handle AWD vehicles, luxury cars, and accident-damaged vehicles that require all four wheels off the ground. This expanded our ability to safely serve a wider range of vehicle types.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year">2016</div>
        <div class="timeline-content">
          <h3>Extended Service Area Throughout Fort Bend County</h3>
          <p class="prose">Expanded our consistent service radius to cover Sugar Land, Missouri City, Stafford, Katy, and surrounding communities within 20 miles of Richmond — matching the growth of Fort Bend County's population.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year">2019</div>
        <div class="timeline-content">
          <h3>Added Motorcycle &amp; ATV Towing Capability</h3>
          <p class="prose">Invested in specialized motorcycle towing equipment — wheel chocks, soft straps, and frame cradles — to safely transport two-wheel vehicles without the chrome and paint damage common from improvised methods.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year">2024</div>
        <div class="timeline-content">
          <h3>13 Years &mdash; 4.9 Stars on Google</h3>
          <p class="prose">Reached 13 years of continuous operation in Richmond, TX with a 4.9-star Google rating and hundreds of documented reviews from Fort Bend County drivers. Still the same phone call, same local dispatch, same honest pricing.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">What We Stand For</span>
      <h2>The Operating Principles Behind Every Tow</h2>
    </div>
    <div class="grid-3" data-animate="fade-up">
      <div class="card">
        <div class="card-icon">
          <i data-lucide="phone-call" style="width:28px;height:28px;"></i>
        </div>
        <h3>You Talk to People, Not Systems</h3>
        <p class="prose">A real dispatcher answers your call. A real driver heads to your location. A real person is accountable for the outcome. No national routing, no automated systems, no handoffs to strangers.</p>
      </div>
      <div class="card">
        <div class="card-icon">
          <i data-lucide="dollar-sign" style="width:28px;height:28px;"></i>
        </div>
        <h3>The Price You Hear Is the Price You Pay</h3>
        <p class="prose">We quote before we roll. No surprise charges after your vehicle is loaded. No "fuel surcharges" that appear on the invoice after the fact. Transparent pricing is a baseline expectation — not a premium feature.</p>
      </div>
      <div class="card">
        <div class="card-icon">
          <i data-lucide="shield" style="width:28px;height:28px;"></i>
        </div>
        <h3>Your Vehicle Arrives in the Condition It Left</h3>
        <p class="prose">We match equipment to vehicle type, use correct tie-down points, and take the time to load properly even when speed is needed. Damage-free transport isn't a guarantee we sell — it's a result of doing the job right.</p>
      </div>
    </div>
  </div>
</section>

<!-- TRUST SIGNALS / CREDENTIALS -->
<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[8]); ?>"
               alt="Twin Cities Towing INC licensed and insured towing in Richmond TX"
               width="600" height="480" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="award" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Credentials &amp; Trust Signals
        </span>
        <h2>Licensed, Insured, and Accountable to Richmond</h2>
        <div class="prose">
          <p>Twin Cities Towing INC operates as a fully licensed and insured towing company in the state of Texas. We carry general liability insurance that covers your vehicle while in our care — so if something does go wrong, there's a proper process to make it right, not a disclaimer that leaves you holding the cost.</p>
          <p>We are proud to have built our reputation through direct word-of-mouth and online reviews from the drivers we've actually served — Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, and Katy residents who experienced our service firsthand. Our 4.9-star Google rating reflects thousands of calls handled correctly over 13 years.</p>
          <p>Our drivers are experienced, trained in proper towing technique for each vehicle type, and familiar with Fort Bend County roads, traffic patterns, and the specific situations that come up on I-69, Highway 90, and the county roads throughout the service area.</p>
        </div>
        <div class="trust-badges-about" style="margin-top:var(--space-8);display:flex;flex-wrap:wrap;gap:var(--space-3);">
          <?php foreach ($trustSignals as $badge): ?>
          <span class="trust-badge"><?php echo htmlspecialchars($badge); ?></span>
          <?php endforeach; ?>
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
        <div class="stat-number"><span data-counter="5000" data-suffix="+">0</span></div>
        <div class="stat-label">Drivers Helped</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="9" data-prefix="4." data-suffix="&#9733;">0</span></div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number"><span data-counter="10">0</span></div>
        <div class="stat-label">Cities Served</div>
      </div>
    </div>
  </div>
</section>

<!-- MID CTA -->
<section class="cta-banner" aria-labelledby="about-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">13 Years &mdash; Fort Bend County</span>
    <h2 id="about-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">A Company You Can Call and Actually Count On</h2>
    <p>Twin Cities Towing INC has been the towing call Richmond drivers reach for since 2011 — not because we promise the most, but because we've delivered consistently for over a decade.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <i data-lucide="list" style="width:18px;height:18px;"></i>
        View Our Services
      </a>
    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<section class="closing-cta" aria-labelledby="about-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Richmond's Local Towing Company</span>
      <h2 id="about-close-heading">When You Need Help in Fort Bend County — We Answer</h2>
      <p class="closing-lead">Thirteen years of showing up, doing the job right, and charging a fair price. That's the whole story. Call us the next time you're stuck and experience it firsthand.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get a Free Estimate
      </a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7
      </a>
      <a href="/service-area/" class="btn btn-outline-white btn-lg">
        <i data-lucide="map-pin" style="width:18px;height:18px;"></i>
        View Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
