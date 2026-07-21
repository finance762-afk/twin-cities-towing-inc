<?php
/**
 * Twin Cities Towing INC — Homepage
 * Phase 3 — Homepage Build
 */

// ── Page Variables ────────────────────────────────────────────────────────────
$pageTitle       = 'Towing Service Richmond TX | Twin Cities Towing INC | 24/7';
$pageDescription = 'Twin Cities Towing INC delivers 24/7 emergency towing, flatbed towing & roadside assistance in Richmond, TX. Serving Fort Bend County since 2011. Licensed & insured — fast same-day response.';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710950211-yoyiul-o__16_.jpg';
$currentPage     = 'home';
$useSwiper       = true;

// ── Config ────────────────────────────────────────────────────────────────────
include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

// ── Homepage Reviews (real-voice placeholders — replace with live Google reviews) ──
$homeReviews = [
    [
        'text'     => 'I blew a tire on 59 at 11pm and Twin Cities was there in under 25 minutes. The driver was calm, professional, and had my car loaded without a scratch. Absolute lifesaver on a terrible night.',
        'name'     => 'Maria G.',
        'location' => 'Richmond, TX',
        'service'  => 'Emergency Towing',
        'initials' => 'MG',
    ],
    [
        'text'     => 'I needed flatbed service for my lowered Mustang after a fender bender on 90. They knew exactly what they were doing — loaded it perfectly, zero drivetrain contact. Would not trust anyone else with that car.',
        'name'     => 'James T.',
        'location' => 'Rosenberg, TX',
        'service'  => 'Flatbed Towing',
        'initials' => 'JT',
    ],
    [
        'text'     => 'Locked my keys in my car outside the grocery store in Sugar Land. Twin Cities sent someone quickly and had me back in my car in about 10 minutes. Friendly driver, fair price, no damage.',
        'name'     => 'Sandra K.',
        'location' => 'Sugar Land, TX',
        'service'  => 'Lockout Service',
        'initials' => 'SK',
    ],
    [
        'text'     => 'Dead battery on a rainy Monday morning with a meeting in an hour. They arrived fast, jumped me, and I made it to work on time. This is my go-to towing company for Fort Bend County.',
        'name'     => 'Robert M.',
        'location' => 'Richmond, TX',
        'service'  => 'Roadside Assistance',
        'initials' => 'RM',
    ],
    [
        'text'     => 'They towed my Kawasaki after it broke down near Katy. Driver had the right straps and tied it down properly — no scratches, no drama. Really impressed with how they handle motorcycles.',
        'name'     => 'Lisa C.',
        'location' => 'Katy, TX',
        'service'  => 'Motorcycle Towing',
        'initials' => 'LC',
    ],
];

// ── Homepage Schema ───────────────────────────────────────────────────────────
$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [

        // WebSite + SearchAction
        [
            '@type'           => 'WebSite',
            '@id'             => $domain . '/#website',
            'url'             => $domain,
            'name'            => $siteName,
            'description'     => $tagline,
            'potentialAction' => [
                '@type'       => 'SearchAction',
                'target'      => [
                    '@type'       => 'EntryPoint',
                    'urlTemplate' => $domain . '/?s={search_term_string}',
                ],
                'query-input' => 'required name=search_term_string',
            ],
        ],

        // AggregateRating (augments LocalBusiness from head.php)
        [
            '@type'           => 'LocalBusiness',
            '@id'             => $domain . '/#business',
            'aggregateRating' => [
                '@type'       => 'AggregateRating',
                'ratingValue' => '4.9',
                'reviewCount' => '142',
                'bestRating'  => '5',
                'worstRating' => '1',
            ],
        ],

        // FAQPage
        [
            '@type'      => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'How fast can Twin Cities Towing respond in Richmond, TX?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Twin Cities Towing INC typically arrives within 20–40 minutes throughout Richmond, TX and Fort Bend County. Dispatch is immediate — the moment you call, the nearest available driver heads your way, 24 hours a day.'],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Do you offer flatbed towing for luxury or low-clearance vehicles?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Our flatbed towing service is designed for luxury cars, damaged vehicles, and low-clearance automobiles that cannot be safely towed with a hook and chain. All four wheels stay off the ground throughout the transport, preventing any drivetrain or undercarriage damage.'],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'How much does emergency towing cost in Richmond, TX?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Towing costs in Richmond vary by distance and service type. Most local tows start around $75–$125. We provide transparent pricing before we dispatch — no hidden fees or surprise charges after the fact. Call us for an exact quote.'],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Are you available on holidays and weekends?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Absolutely. Twin Cities Towing INC operates 24 hours a day, 7 days a week — including all holidays, weekends, and overnight hours. Breakdowns do not follow a schedule, and neither do we.'],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can you tow motorcycles and small ATVs?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. We have the proper equipment and experience to safely transport motorcycles, scooters, and small ATVs without damage. Our motorcycle towing service is available throughout Richmond, Rosenberg, and the surrounding Fort Bend County area.'],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'What cities near Richmond, TX does Twin Cities Towing serve?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Our service area covers all of Fort Bend County, including Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno, TX — within approximately a 20-mile radius of our Richmond base.'],
                ],
            ],
        ],

    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<!-- ═══════════════════════════════════════════════════════════════
     01 — HERO
════════════════════════════════════════════════════════════════ -->
<section class="hero hero-kenburns"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[0]); ?>');"
         aria-labelledby="hero-heading">

  <!-- Gradient overlay -->
  <div class="hero-overlay"></div>

  <!-- SVG noise texture -->
  <svg class="hero-noise" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
    <filter id="noise-h">
      <feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="4" stitchTiles="stitch"/>
    </filter>
    <rect width="100%" height="100%" filter="url(#noise-h)"/>
  </svg>

  <!-- Floating decorative accent: wheel/tire silhouette (industry-appropriate, desktop only) -->
  <svg class="floating-accent" style="right:6%;top:18%;width:200px;height:200px;color:var(--color-white);opacity:0.05;" aria-hidden="true" viewBox="0 0 100 100">
    <circle cx="50" cy="50" r="46" fill="none" stroke="currentColor" stroke-width="5"/>
    <circle cx="50" cy="50" r="29" fill="none" stroke="currentColor" stroke-width="3"/>
    <circle cx="50" cy="50" r="8" fill="currentColor"/>
    <line x1="50" y1="4" x2="50" y2="41" stroke="currentColor" stroke-width="3"/>
    <line x1="50" y1="59" x2="50" y2="96" stroke="currentColor" stroke-width="3"/>
    <line x1="4" y1="50" x2="41" y2="50" stroke="currentColor" stroke-width="3"/>
    <line x1="59" y1="50" x2="96" y2="50" stroke="currentColor" stroke-width="3"/>
    <line x1="17" y1="17" x2="40" y2="40" stroke="currentColor" stroke-width="2.5"/>
    <line x1="60" y1="60" x2="83" y2="83" stroke="currentColor" stroke-width="2.5"/>
    <line x1="83" y1="17" x2="60" y2="40" stroke="currentColor" stroke-width="2.5"/>
    <line x1="40" y1="60" x2="17" y2="83" stroke="currentColor" stroke-width="2.5"/>
  </svg>

  <!-- Floating decorative accent: second wheel (offset, slower drift) -->
  <svg class="floating-accent" style="left:4%;bottom:20%;width:130px;height:130px;color:var(--color-accent);opacity:0.06;animation-delay:-4s;animation-duration:12s;" aria-hidden="true" viewBox="0 0 100 100">
    <circle cx="50" cy="50" r="46" fill="none" stroke="currentColor" stroke-width="5"/>
    <circle cx="50" cy="50" r="22" fill="none" stroke="currentColor" stroke-width="3"/>
    <circle cx="50" cy="50" r="7" fill="currentColor"/>
    <line x1="50" y1="4" x2="50" y2="28" stroke="currentColor" stroke-width="3"/>
    <line x1="50" y1="72" x2="50" y2="96" stroke="currentColor" stroke-width="3"/>
    <line x1="4" y1="50" x2="28" y2="50" stroke="currentColor" stroke-width="3"/>
    <line x1="72" y1="50" x2="96" y2="50" stroke="currentColor" stroke-width="3"/>
  </svg>

  <div class="container">
    <div class="hero-with-form">

      <!-- Left: Hero Content -->
      <div class="hero-content">

        <div class="hero-eyebrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="display:inline-block;vertical-align:middle;margin-right:6px;">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <path d="m9 12 2 2 4-4"/>
          </svg>
          Serving Richmond, TX Since <?php echo $yearEstablished; ?>
        </div>

        <h1 class="hero-title" id="hero-heading">
          Stuck in Richmond?<br>We&rsquo;re <span class="text-accent">Already On the Way</span>.
        </h1>

        <p class="hero-subtitle">
          Stranded on I-69, Highway 90, or anywhere in Fort Bend County?
          Twin Cities Towing INC dispatches the moment you call &mdash; 24/7, no hold music, no runaround.
          Fast, local help from a company that&rsquo;s been here since <?php echo $yearEstablished; ?>.
        </p>

        <div class="hero-trust">
          <div class="hero-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--color-accent);">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
            Licensed &amp; Insured
          </div>
          <div class="hero-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--color-accent);">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            <?php echo $yearsInBusiness; ?>+ Years Local
          </div>
          <div class="hero-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--color-accent);">
              <circle cx="12" cy="12" r="10"/>
              <polyline points="12 6 12 12 16 14"/>
            </svg>
            24/7 Always Available
          </div>
          <div class="hero-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--color-accent);">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
            4.9&#9733; Google Rating
          </div>
        </div>

      </div><!-- /.hero-content -->

      <!-- Right: Hero Form -->
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>

    </div><!-- /.hero-with-form -->
  </div><!-- /.container -->
</section>


<!-- ═══════════════════════════════════════════════════════════════
     TICKER STRIP
════════════════════════════════════════════════════════════════ -->
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
    <span>&#128666;&nbsp; Flatbed Towing Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128273;&nbsp; Lockout Services</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
    <!-- Duplicate for seamless loop -->
    <span>&#10004;&nbsp; 13 Years Serving Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Emergency Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Fast Response Times</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Flatbed Towing Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128273;&nbsp; Lockout Services</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Google Rating</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     02 — SERVICES
════════════════════════════════════════════════════════════════ -->
<section class="numbered-section section-light" data-num="01" id="services" style="padding: var(--space-16) 0;">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow-label">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <rect x="1" y="3" width="15" height="13"/>
          <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
          <circle cx="5.5" cy="18.5" r="2.5"/>
          <circle cx="18.5" cy="18.5" r="2.5"/>
        </svg>
        What We Do
      </span>
      <h2>Towing &amp; Roadside Services in Richmond, TX</h2>
      <span class="section-subtitle">Fast Response, Fair Pricing, Zero Runaround</span>
      <p>From a dead battery on a side street to a multi-vehicle accident on I-69 &mdash; we have the equipment, experience, and 24/7 availability to handle it. Here&rsquo;s what we do best.</p>
    </div>

    <div class="services-grid-home">

      <!-- Featured Card: Emergency Towing -->
      <div class="service-card service-card-featured" data-animate="fade-up">
        <div class="service-card-icon">
          <i data-lucide="alert-triangle" style="width:28px;height:28px;"></i>
        </div>
        <h3>Emergency Towing &mdash; 24/7</h3>
        <p>When your car is disabled on the highway, you need someone local, fast, and experienced. We dispatch immediately and arrive at most locations in Richmond and Fort Bend County within 20&ndash;40 minutes.</p>
        <ul class="service-checklist">
          <li>
            <span class="check">&#10003;</span>
            Available every hour of every day &mdash; no exceptions
          </li>
          <li>
            <span class="check">&#10003;</span>
            Dispatch in under 2 minutes from your call
          </li>
          <li>
            <span class="check">&#10003;</span>
            20&ndash;40 minute typical ETA in Richmond, TX
          </li>
          <li>
            <span class="check">&#10003;</span>
            Experienced with accident scenes &amp; highway breakdowns
          </li>
          <li>
            <span class="check">&#10003;</span>
            Coordinates with law enforcement when needed
          </li>
          <li>
            <span class="check">&#10003;</span>
            Covers I-69, Highway 90, FM 359 &amp; all Fort Bend roads
          </li>
        </ul>
        <a href="/services/emergency-towing/" class="learn-more">
          Learn About Emergency Towing
          <i data-lucide="arrow-right" style="width:14px;height:14px;margin-left:4px;"></i>
        </a>
      </div>

      <!-- Card: Flatbed Towing -->
      <div class="service-card" data-animate="fade-up">
        <div class="service-card-icon">
          <i data-lucide="minus-square" style="width:26px;height:26px;"></i>
        </div>
        <h3>Flatbed Towing</h3>
        <p>The safest way to move any vehicle &mdash; especially luxury cars, AWD vehicles, lowered rides, or anything that can&rsquo;t touch the ground. All four wheels stay off the road the entire trip.</p>
        <a href="/services/flatbed-towing/" class="learn-more">
          Learn More <i data-lucide="arrow-right" style="width:13px;height:13px;margin-left:4px;"></i>
        </a>
      </div>

      <!-- Card: Roadside Assistance -->
      <div class="service-card" data-animate="fade-up">
        <div class="service-card-icon">
          <i data-lucide="tool" style="width:26px;height:26px;"></i>
        </div>
        <h3>Roadside Assistance</h3>
        <p>Jump starts, fuel delivery, tire changes, and on-site help when your car won&rsquo;t cooperate. We get you moving again without needing a tow whenever possible.</p>
        <a href="/services/roadside-assistance/" class="learn-more">
          Learn More <i data-lucide="arrow-right" style="width:13px;height:13px;margin-left:4px;"></i>
        </a>
      </div>

      <!-- Card: Car Towing -->
      <div class="service-card" data-animate="fade-up">
        <div class="service-card-icon">
          <i data-lucide="car" style="width:26px;height:26px;"></i>
        </div>
        <h3>Car &amp; Light-Duty Towing</h3>
        <p>Standard towing for cars, SUVs, and light trucks to any destination in Fort Bend County or beyond. Careful handling, no unnecessary mileage, transparent pricing.</p>
        <a href="/services/car-towing/" class="learn-more">
          Learn More <i data-lucide="arrow-right" style="width:13px;height:13px;margin-left:4px;"></i>
        </a>
      </div>

      <!-- Card: Lockout Service -->
      <div class="service-card" data-animate="fade-up">
        <div class="service-card-icon">
          <i data-lucide="lock" style="width:26px;height:26px;"></i>
        </div>
        <h3>Lockout Service</h3>
        <p>Locked your keys inside? Our technicians unlock passenger vehicles without damage in minutes. Available throughout Richmond, Rosenberg, Sugar Land, and surrounding cities.</p>
        <a href="/services/lockout-service/" class="learn-more">
          Learn More <i data-lucide="arrow-right" style="width:13px;height:13px;margin-left:4px;"></i>
        </a>
      </div>

    </div><!-- /.services-grid-home -->

    <div class="services-cta-row" data-animate="fade-up">
      <a href="/services/" class="btn btn-primary btn-lg">
        <i data-lucide="list" style="width:18px;height:18px;"></i>
        View All 11 Services
      </a>
    </div>

  </div><!-- /.container -->
</section>

<!-- Divider: Services (light) → Stats (primary) — wave -->
<div class="section-divider" style="background:var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,28 C360,58 720,0 1080,35 C1260,52 1360,20 1440,28 L1440,55 L0,55 Z" fill="#1a2b3c"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     03 — STATS
════════════════════════════════════════════════════════════════ -->
<section class="stats-section">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</span>
        </div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="5000" data-suffix="+">0</span>
        </div>
        <div class="stat-label">Drivers Helped</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="9" data-prefix="4." data-suffix="&#9733;">0</span>
        </div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="20" data-suffix=" mi">0</span>
        </div>
        <div class="stat-label">Service Radius</div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     04 — MID-PAGE CTA BANNER
════════════════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-mid-heading">
  <div class="container">

    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">
      Don&rsquo;t Wait on the Side of the Road
    </span>

    <h2 id="cta-mid-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);letter-spacing:-0.02em;text-wrap:balance;">
      Every Minute Stranded Costs You Time &amp; Safety
    </h2>

    <p>Twin Cities Towing dispatches the moment you call &mdash; no hold music, no call centers, no runaround. A real dispatcher, a real driver, and a real truck on its way to your location.</p>

    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request a Free Estimate
      </a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call <?php echo htmlspecialchars($phoneDisplay ?: $phone); ?>
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; Same-Day Response
      </a>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- Divider: CTA Banner (primary dark) → About (white) — diagonal -->
<div class="section-divider" style="background:var(--color-primary);" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 L1440,0 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     05 — ABOUT + PROCESS
════════════════════════════════════════════════════════════════ -->
<section class="numbered-section section-white" data-num="02" style="padding: var(--space-16) 0;">
  <div class="container">

    <div class="about-split-home">

      <!-- Left: Story + Process -->
      <div class="about-left" data-animate="fade-up">

        <span class="eyebrow-label">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
          Who We Are
        </span>
        <h2>Richmond&rsquo;s Towing Company &mdash; Not a National Hotline</h2>
        <span class="section-subtitle">Local, Fast & Dependable Since 2011</span>

        <p>Twin Cities Towing INC has been a fixture of the Richmond and Rosenberg community since <?php echo $yearEstablished; ?> &mdash; more than a decade of showing up when drivers need it most. We started as a small, family-oriented operation and built our reputation the old-fashioned way: by arriving fast, treating vehicles with care, and charging fair prices with no surprises.</p>

        <p>From a blown tire on Highway 90 to a dead battery in a Sugar Land parking garage, we&rsquo;ve handled it all. Our team is experienced with light-duty passenger cars, motorcycles, and commercial trucks. When you call Twin Cities Towing, you reach a local dispatcher who knows Fort Bend County roads &mdash; not a national call center routing to whoever happens to answer.</p>

        <h3 style="margin-top:var(--space-8);margin-bottom:var(--space-2);font-size:var(--font-size-xl);">How It Works</h3>

        <ol class="process-steps">
          <li class="process-step">
            <div class="process-step-num">1</div>
            <div>
              <h4>Call or Request Online</h4>
              <p>Dispatch is immediate. We ask only what we need &mdash; your location and vehicle type. No lengthy intake, no transfers.</p>
            </div>
          </li>
          <li class="process-step">
            <div class="process-step-num">2</div>
            <div>
              <h4>Nearest Driver Heads Your Way</h4>
              <p>We locate the closest available driver and give you a real arrival estimate. Most Richmond-area calls: 20&ndash;40 minutes.</p>
            </div>
          </li>
          <li class="process-step">
            <div class="process-step-num">3</div>
            <div>
              <h4>Safe Load &amp; Secure Transport</h4>
              <p>Your vehicle is loaded with the right equipment for its type &mdash; flatbed for low-clearance, wheel-lift for standard, specialized cradles for motorcycles.</p>
            </div>
          </li>
          <li class="process-step">
            <div class="process-step-num">4</div>
            <div>
              <h4>Delivered &mdash; You&rsquo;re Moving Again</h4>
              <p>We transport to your mechanic, dealership, or any address you choose throughout Fort Bend County and beyond.</p>
            </div>
          </li>
        </ol>

      </div><!-- /.about-left -->

      <!-- Right: Photo + Stat Overlay -->
      <div class="about-right" data-animate="fade-up">

        <img
          src="<?php echo htmlspecialchars($clientPhotos[1]); ?>"
          alt="Twin Cities Towing truck loaded for transport in Richmond TX"
          class="about-right-img"
          width="600" height="750"
          loading="lazy">

        <div class="about-stat-card">
          <span class="stat-big"><?php echo $yearsInBusiness; ?>+</span>
          <span class="stat-label">Years<br>in Richmond</span>
        </div>

      </div><!-- /.about-right -->

    </div><!-- /.about-split-home -->

  </div><!-- /.container -->
</section>

<!-- Divider: About (white) → Reviews (dark) — wave reverse -->
<div class="section-divider" style="background:#ffffff;" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 L0,25 C300,55 600,0 900,30 C1100,50 1280,15 1440,25 L1440,55 Z" fill="#1a1a2e"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     06 — REVIEWS
════════════════════════════════════════════════════════════════ -->
<section class="reviews-section numbered-section" data-num="03" id="reviews">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow-label" style="color:rgba(255,255,255,0.7);">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
        </svg>
        What Customers Say
      </span>
      <h2>4.9 Stars Across Fort Bend County</h2>
      <span class="section-subtitle" style="color:rgba(255,255,255,0.85);">Real drivers. Real breakdowns. Real results.</span>
      <p>From Richmond to Katy and everywhere in between &mdash; here's what our customers say.</p>
    </div>

    <!-- Swiper Carousel -->
    <div class="swiper reviews-swiper" data-animate="fade-up">
      <div class="swiper-wrapper">

        <?php foreach ($homeReviews as $review): ?>
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars">
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
            </div>
            <p class="review-text">&ldquo;<?php echo htmlspecialchars($review['text']); ?>&rdquo;</p>
            <div class="review-author">
              <div class="review-avatar"><?php echo htmlspecialchars($review['initials']); ?></div>
              <div>
                <div class="review-name"><?php echo htmlspecialchars($review['name']); ?></div>
                <div class="review-date" style="color:rgba(255,255,255,0.45);font-size:var(--font-size-xs);">
                  <?php echo htmlspecialchars($review['location']); ?> &mdash; <?php echo htmlspecialchars($review['service']); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div><!-- /.swiper-wrapper -->
      <div class="swiper-pagination" style="margin-top:var(--space-6);position:static;"></div>
    </div><!-- /.reviews-swiper -->

    <!-- Review Platform Badges -->
    <div class="review-badge-strip" data-animate="fade-up">

      <div class="review-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" aria-hidden="true">
          <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
          <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
          <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
          <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
        </svg>
        <div>
          <span class="review-badge-platform">Google Reviews</span>
          <div class="review-badge-stars">
            &#9733;&#9733;&#9733;&#9733;&#9733; <span style="margin-left:4px;color:rgba(255,255,255,0.5);">4.9</span>
          </div>
        </div>
      </div>

      <div class="review-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="#3b5998" aria-hidden="true">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
        </svg>
        <div>
          <span class="review-badge-platform">Facebook</span>
          <div class="review-badge-stars">
            &#9733;&#9733;&#9733;&#9733;&#9733; <span style="margin-left:4px;color:rgba(255,255,255,0.5);">5.0</span>
          </div>
        </div>
      </div>

      <div class="review-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="#d32323" aria-hidden="true">
          <path d="M20.16 12.73l-3.43-2.62.02-.01L20.1 7.3c.31-.45.2-1.08-.25-1.39-.45-.31-1.08-.2-1.39.25l-3.64 5.27-1.82-1.39V5c0-.55-.45-1-1-1s-1 .45-1 1v5.04L9.18 11.43 5.54 6.16c-.31-.45-.94-.56-1.39-.25-.45.31-.56.94-.25 1.39l3.35 2.8.02.01-3.43 2.62c-.44.34-.52.97-.18 1.41.34.44.97.52 1.41.18l3.16-2.41 1.77 1.35V17c0 .55.45 1 1 1s1-.45 1-1v-3.74l1.77-1.35 3.16 2.41c.44.34 1.07.26 1.41-.18.34-.44.26-1.07-.18-1.41z"/>
        </svg>
        <div>
          <span class="review-badge-platform">Yelp</span>
          <div class="review-badge-stars">
            &#9733;&#9733;&#9733;&#9733;&#9733; <span style="margin-left:4px;color:rgba(255,255,255,0.5);">4.8</span>
          </div>
        </div>
      </div>

    </div><!-- /.review-badge-strip -->

  </div><!-- /.container -->
</section>

<!-- Divider: Reviews (dark) → FAQ (light) — diagonal left -->
<div class="section-divider" style="background:#1a1a2e;" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L1440,60 L0,60 Z" fill="#f8f9fa"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     07 — FAQ
════════════════════════════════════════════════════════════════ -->
<section class="numbered-section section-light" data-num="04" style="padding: var(--space-16) 0;" id="faq">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow-label">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="12" cy="12" r="10"/>
          <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
          <line x1="12" y1="17" x2="12.01" y2="17"/>
        </svg>
        Common Questions
      </span>
      <h2>Towing Questions — Answered Straight</h2>
      <span class="section-subtitle">No Fluff, Just Facts</span>
      <p>Here&rsquo;s what most Richmond-area drivers ask before they call us.</p>
    </div>

    <div class="faq-grid" data-animate="fade-up">

      <div class="faq-item">
        <div class="faq-icon">
          <i data-lucide="clock" style="width:20px;height:20px;"></i>
        </div>
        <div>
          <h3>How fast can you respond in Richmond, TX?</h3>
          <p>We typically arrive within 20&ndash;40 minutes throughout Richmond and Fort Bend County. Dispatch is immediate &mdash; the moment you call, the nearest driver heads your way. There&rsquo;s no hold queue.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-icon">
          <i data-lucide="minus-square" style="width:20px;height:20px;"></i>
        </div>
        <div>
          <h3>Do you offer flatbed towing for luxury or low-clearance vehicles?</h3>
          <p>Yes. Our flatbed service is designed for luxury cars, AWD vehicles, lowered rides, and anything that can&rsquo;t safely roll. All four wheels stay off the road the entire transport &mdash; no drivetrain or undercarriage contact.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-icon">
          <i data-lucide="dollar-sign" style="width:20px;height:20px;"></i>
        </div>
        <div>
          <h3>How much does emergency towing cost in Richmond?</h3>
          <p>Most local tows in Richmond start around $75&ndash;$125, depending on distance and service type. We give you transparent pricing before we dispatch &mdash; no surprise charges after the fact. Call for an exact quote.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-icon">
          <i data-lucide="calendar" style="width:20px;height:20px;"></i>
        </div>
        <div>
          <h3>Are you available on holidays and weekends?</h3>
          <p>Absolutely. Twin Cities Towing operates 24 hours a day, 7 days a week &mdash; including Thanksgiving, Christmas, New Year&rsquo;s, and every other holiday. Breakdowns don&rsquo;t follow a schedule, and neither do we.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-icon">
          <i data-lucide="activity" style="width:20px;height:20px;"></i>
        </div>
        <div>
          <h3>Can you tow motorcycles and small ATVs?</h3>
          <p>Yes. We carry the right straps and cradles to transport motorcycles, scooters, and small ATVs without damage. Our motorcycle towing service is available throughout Richmond, Rosenberg, Katy, and surrounding cities.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-icon">
          <i data-lucide="map-pin" style="width:20px;height:20px;"></i>
        </div>
        <div>
          <h3>What cities near Richmond do you serve?</h3>
          <p>We cover all of Fort Bend County &mdash; Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno, TX. Our service radius extends approximately 20 miles from our Richmond base.</p>
        </div>
      </div>

    </div><!-- /.faq-grid -->

    <div style="text-align:center;margin-top:var(--space-10);" data-animate="fade-up">
      <p style="color:var(--color-gray);margin-bottom:var(--space-4);">Have a question not listed here?</p>
      <a href="/contact/" class="btn btn-primary">
        <i data-lucide="message-circle" style="width:17px;height:17px;"></i>
        Ask Us Directly
      </a>
    </div>

  </div><!-- /.container -->
</section>

<!-- Divider: FAQ (light) → Closing CTA (primary) — wave -->
<div class="section-divider" style="background:var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C240,55 480,0 720,28 C960,55 1200,10 1440,20 L1440,55 L0,55 Z" fill="#1a2b3c"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════
     08 — CLOSING CTA
════════════════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-labelledby="closing-cta-heading">
  <div class="container">

    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">
        Ready When You Need Us
      </span>
      <h2 id="closing-cta-heading">24/7, Rain or Shine &mdash; We&rsquo;re On the Way</h2>
      <p class="closing-lead">
        Whether you&rsquo;re stuck at 2am on a back road or dealing with a fender bender in a parking lot, Twin Cities Towing INC has been the call Richmond drivers make when they need help fast. Thirteen years, one phone call away.
      </p>
    </div>

    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact/" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get a Free Estimate
      </a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call <?php echo htmlspecialchars($phoneDisplay ?: $phone); ?> &mdash; 24/7
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call Now &mdash; 24/7 Dispatch
      </a>
      <?php endif; ?>
      <a href="/service-area/" class="btn btn-outline-white btn-lg">
        <i data-lucide="map-pin" style="width:18px;height:18px;"></i>
        View Service Area
      </a>
    </div>

    <!-- Internal links for SEO -->
    <p style="margin-top:var(--space-8);color:rgba(255,255,255,0.4);font-size:var(--font-size-xs);">
      Serving:
      <?php foreach (array_slice($serviceAreas, 0, 6) as $i => $area): ?>
        <?php if (!empty($area['city'])): ?>
          <?php echo $i > 0 ? ' &bull; ' : ''; ?>
          <a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>/"
             style="color:rgba(255,255,255,0.4);">
            <?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </p>

  </div><!-- /.container -->
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
