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
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
  <path d="M16 3.128a4 4 0 0 1 0 7.744" />
  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
  <circle cx="9" cy="7" r="4" /></svg>
      Serving Richmond Since <?php echo $yearEstablished; ?>
    </div>
    <h1 class="hero-title" id="about-hero-heading">A Towing Company Built<br>on Fort Bend County Roads</h1>
    <p class="hero-subtitle">More than 13 years of showing up when Richmond, Rosenberg, and Fort Bend County drivers needed it most — local roots, local knowledge, local accountability.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M12 7v14" />
  <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" /></svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><path d="M13 2a9 9 0 0 1 9 9" />
  <path d="M13 6a5 5 0 0 1 5 5" />
  <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        </div>
        <h3>You Talk to People, Not Systems</h3>
        <p class="prose">A real dispatcher answers your call. A real driver heads to your location. A real person is accountable for the outcome. No national routing, no automated systems, no handoffs to strangers.</p>
      </div>
      <div class="card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><line x1="12" x2="12" y1="2" y2="22" />
  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>
        </div>
        <h3>The Price You Hear Is the Price You Pay</h3>
        <p class="prose">We quote before we roll. No surprise charges after your vehicle is loaded. No "fuel surcharges" that appear on the invoice after the fact. Transparent pricing is a baseline expectation — not a premium feature.</p>
      </div>
      <div class="card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:28px;height:28px;"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
  <circle cx="12" cy="8" r="6" /></svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
  <path d="M10 9H8" />
  <path d="M16 13H8" />
  <path d="M16 17H8" /></svg>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
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
      <a href="/service-area/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
        View Service Area
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
