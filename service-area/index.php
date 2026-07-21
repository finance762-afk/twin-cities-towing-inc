<?php
/**
 * Twin Cities Towing INC — Service Area Page
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing Service Areas | Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Twin Cities Towing INC serves Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, and all of Fort Bend County within 20 miles. 24/7 emergency towing near me.';
$ogImage         = $clientPhotos[0];
$currentPage     = 'service-area';

$areaFaqs = [
    ['q' => 'What cities does Twin Cities Towing INC serve?', 'a' => 'We serve Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno, TX — all communities within approximately 20 miles of our Richmond base in Fort Bend County.'],
    ['q' => 'Do you offer towing near me in Fort Bend County?', 'a' => 'If you\'re within 20 miles of Richmond, TX, we\'re your local towing option — 24 hours a day. Call us with your location and we\'ll confirm coverage and give you an ETA immediately.'],
    ['q' => 'Can you tow from highway breakdowns on I-69 and Hwy 90?', 'a' => 'Yes. I-69 (US-59) and Highway 90 are among our highest-volume service corridors. We coordinate with TxDOT and law enforcement for highway scene clearance and respond to both directions of these routes throughout Fort Bend County.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',         'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Area'],
        ]],
        generateFAQSchema($areaFaqs),
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
        <span itemprop="name">Service Area</span><meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
</nav>

<!-- HERO -->
<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[11]); ?>');"
         aria-labelledby="area-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
      Towing Near Me &bull; Fort Bend County &bull; 20-Mile Radius
    </div>
    <h1 class="hero-title" id="area-hero-heading">Towing Service in Richmond TX<br>&amp; Surrounding Communities</h1>
    <p class="hero-subtitle">Twin Cities Towing INC covers all of Fort Bend County — Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, and beyond — with 24/7 emergency towing and roadside assistance.</p>
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
    <span>&#128205;&nbsp; Richmond, Rosenberg &amp; More</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20-Mile Service Radius</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Google Reviews</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Richmond, Rosenberg &amp; More</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20-Mile Service Radius</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Google Reviews</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- INTRO + MAP -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z" />
  <path d="M15 5.764v15" />
  <path d="M9 3.236v15" /></svg>
        Coverage Area
      </span>
      <h2>Fort Bend County Towing &mdash; From Richmond to Katy and Every City Between</h2>
      <p class="prose-centered">Based in Richmond at 1920 Rocky Falls RD, Twin Cities Towing INC covers approximately a 20-mile service radius from our Richmond base. That covers all of Fort Bend County's primary communities — and we regularly service I-69, Highway 90, Highway 36, FM 359, and FM 762 throughout the county 24 hours a day.</p>
    </div>

    <!-- Map -->
    <div class="map-container" data-animate="fade-up" style="margin-bottom:var(--space-12);">
      <iframe
        title="Twin Cities Towing INC service area — Fort Bend County TX"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110764.36!2d-95.74!3d29.59!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640f3a3a5b3d6a7%3A0x1234567890abcdef!2sFort%20Bend%20County%2C%20TX!5e0!3m2!1sen!2sus!4v1680000000001"
        width="100%" height="450"
        style="border:0;border-radius:var(--radius);"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <!-- Area Grid -->
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Cities We Serve</span>
      <h2>Towing &amp; Roadside Assistance Near You</h2>
    </div>

    <div class="areas-grid" data-animate="fade-up">

      <!-- Richmond — Primary -->
      <div class="area-card area-card-primary">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;color:var(--color-accent);"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" /></svg>
          <h3>Richmond, TX</h3>
          <span class="area-badge">Primary Location</span>
        </div>
        <p class="prose">Our home base. Twin Cities Towing INC has been serving Richmond drivers since 2011 — covering every neighborhood, every highway, and every back road in the city. I-69, Highway 90, FM 359, and Rocky Falls RD are our most frequent corridors. If you're in Richmond, we're typically 15–25 minutes away.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Flatbed Towing</span>
          <span>Roadside Assistance</span>
          <span>Lockout Service</span>
        </div>
      </div>

      <!-- Rosenberg -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Rosenberg, TX</h3>
        </div>
        <p class="prose">Right next door to Richmond, Rosenberg is one of our highest-volume service areas. We respond to breakdowns along Highway 90, Business 90, and the commercial corridors through downtown Rosenberg daily. Typical ETA: 15–30 minutes from call.</p>
        <div class="area-services">
          <span>24/7 Emergency Towing</span>
          <span>Roadside Assistance</span>
          <span>Car &amp; Truck Towing</span>
        </div>
      </div>

      <!-- Sugar Land -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Sugar Land, TX</h3>
        </div>
        <p class="prose">We serve all of Sugar Land — including First Colony, New Territory, and the Hwy 59/Hwy 90 interchange zone. Sugar Land's mix of retail centers, residential neighborhoods, and business parks keeps us active here throughout the day and overnight. Typical ETA: 25–40 minutes.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Lockout Service</span>
          <span>Flatbed Towing</span>
        </div>
      </div>

      <!-- Missouri City -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Missouri City, TX</h3>
        </div>
        <p class="prose">Missouri City towing covers the Hwy 6 and FM 1092 corridors, Sienna Plantation, and all residential communities throughout the city. We respond to breakdowns on Highway 6 frequently and know the local roads well. Typical ETA: 25–40 minutes.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Roadside Assistance</span>
          <span>Accident Towing</span>
        </div>
      </div>

      <!-- Stafford -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Stafford, TX</h3>
        </div>
        <p class="prose">Stafford's commercial concentration along US-90A and Murphy Road means plenty of business vehicle breakdowns and parking lot situations. We serve the entire city including its industrial and retail zones. Typical ETA: 30–40 minutes from Richmond.</p>
        <div class="area-services">
          <span>Car &amp; Truck Towing</span>
          <span>Roadside Assistance</span>
          <span>Lockout Service</span>
        </div>
      </div>

      <!-- Katy -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Katy, TX</h3>
        </div>
        <p class="prose">Katy marks the northwest edge of our regular service area. We serve I-10 and Hwy 90 corridors through Katy along with Cinco Ranch and surrounding communities. Motorcycle towing and flatbed calls from the Katy area are common. Typical ETA: 35–50 minutes.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Motorcycle Towing</span>
          <span>Flatbed Towing</span>
        </div>
      </div>

      <!-- Greatwood -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Greatwood, TX</h3>
        </div>
        <p class="prose">The Greatwood community sits just southwest of Sugar Land along Hwy 90. We cover Greatwood's residential streets and the FM 359 corridor connecting it to Richmond. Typical ETA: 20–35 minutes — close to our base.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Roadside Assistance</span>
        </div>
      </div>

      <!-- Pecan Grove -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Pecan Grove, TX</h3>
        </div>
        <p class="prose">Pecan Grove is a residential community just north of Richmond along FM 359. We serve Pecan Grove regularly and its location near our Richmond base means faster response times — often under 20 minutes for emergency calls in the area.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Lockout Service</span>
        </div>
      </div>

      <!-- Needville -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Needville, TX</h3>
        </div>
        <p class="prose">Located south of Richmond along Hwy 36, Needville is at the southern edge of our regular service radius. We cover highway breakdowns on Hwy 36 and Hwy 360 through the Needville area. Typical ETA: 30–45 minutes.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Breakdown Towing</span>
        </div>
      </div>

      <!-- Fresno -->
      <div class="area-card">
        <div class="area-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;color:var(--color-accent);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
  <circle cx="12" cy="10" r="3" /></svg>
          <h3>Fresno, TX</h3>
        </div>
        <p class="prose">Fresno lies between Missouri City and Richmond along FM 521. We cover Fresno's residential areas and the FM 521 corridor. Towing and roadside assistance calls from Fresno are routed from our Richmond base. Typical ETA: 25–40 minutes.</p>
        <div class="area-services">
          <span>Emergency Towing</span>
          <span>Roadside Assistance</span>
        </div>
      </div>

    </div><!-- /.areas-grid -->

    <!-- Answer Block -->
    <div class="answer-block" data-animate="fade-up">
      <h2>Is there 24-hour towing near me in Fort Bend County?</h2>
      <p>Twin Cities Towing INC operates 24 hours a day throughout Fort Bend County. Our service area covers Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno, TX — all within approximately 20 miles of our Richmond base. Call for immediate dispatch any time of day or night.</p>
    </div>

  </div><!-- /.container -->
</section>

<!-- MID CTA -->
<section class="cta-banner" aria-labelledby="area-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Towing Near Me — Fort Bend County</span>
    <h2 id="area-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Stranded Anywhere in Our Service Area? We're Already Close</h2>
    <p>Twin Cities Towing INC dispatches from Richmond and reaches most Fort Bend County locations in 20–40 minutes. Call now for immediate response — 24/7, all cities, all services.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
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

<!-- FAQ -->
<section class="section-light" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Service Area FAQs &mdash; Fort Bend County Towing</h2>
    </div>
    <div class="faq-grid" data-animate="fade-up">
      <?php foreach ($areaFaqs as $faq): ?>
      <div class="faq-item">
        <div class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:20px;height:20px;"><circle cx="12" cy="12" r="10" />
  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
  <path d="M12 17h.01" /></svg></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
          <p><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CLOSING CTA -->
<section class="closing-cta" aria-labelledby="area-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Fort Bend County Towing — 24/7</span>
      <h2 id="area-close-heading">Richmond to Katy — If You're in Fort Bend County, We Come to You</h2>
      <p class="closing-lead">Twin Cities Towing INC has been the towing call that works in Fort Bend County since 2011. Licensed, insured, 4.9 stars, 24/7 — and local enough to know your road by name.</p>
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
      <a href="/services/" class="btn btn-outline-white btn-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg>
        View All Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
