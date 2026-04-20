<?php
/**
 * Twin Cities Towing INC — Emergency Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Emergency Towing Richmond TX | 24/7 Dispatch | Twin Cities Towing INC';
$pageDescription = '24/7 emergency towing in Richmond, TX with fast response — 20 to 40 minutes to most Fort Bend County locations. No hold music, no call centers. Real dispatch, real drivers.';
$pageKeywords    = 'emergency towing Richmond TX, 24/7 towing Richmond, urgent towing Texas, emergency vehicle recovery Richmond, highway towing Fort Bend County';
$canonicalUrl    = $domain . '/services/emergency-towing';
$ogImage         = $clientPhotos[4];
$currentPage     = 'emergency-towing';

$serviceFaqs = [
    ['q' => 'How fast can Twin Cities Towing respond to an emergency in Richmond, TX?', 'a' => 'Most emergency calls within Richmond and Fort Bend County see a driver on-site within 20–40 minutes. We dispatch immediately upon your call — no hold queue, no transfer to a national center. Your location and the nearest available driver determine ETA, and we confirm that number before you hang up.'],
    ['q' => 'Do you respond to highway breakdowns on I-69 and Highway 90?', 'a' => 'Yes. We respond regularly to breakdowns and accidents along I-69 (US-59), Highway 90, Business 90, FM 359, and all major Fort Bend County roadways. We coordinate with TxDOT and law enforcement when needed for highway-side safety.'],
    ['q' => 'Are you available at 3am on a Sunday?', 'a' => 'Absolutely. 24/7 means every hour of every day — including holidays, overnight, and weekends. There are no off-hours at Twin Cities Towing. If you\'re stranded, call and we will come.'],
    ['q' => 'What information do I need when I call for emergency towing?', 'a' => 'Just your location (address, mile marker, or cross streets) and what kind of vehicle you have. We\'ll handle the rest. If you\'re not sure where you are, give us a nearby landmark — we know Fort Bend County roads well.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Emergency Towing'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/emergency-towing/#service',
         'name' => 'Emergency Towing', 'url' => $domain . '/services/emergency-towing',
         'description' => '24/7 emergency towing in Richmond TX with fast response times throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Emergency Towing'],
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
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services" itemprop="item"><span itemprop="name">Services</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Emergency Towing</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[4]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="alert-triangle" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      24/7 &bull; Immediate Dispatch &bull; No Hold Music
    </div>
    <h1 class="hero-title" id="service-hero-heading">Emergency Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Stranded on I-69, Highway 90, or a back road in Fort Bend County? We dispatch the moment you call — 20 to 40 minutes to most locations, around the clock.</p>
    <div class="hero-buttons">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Emergency Tow
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
    <span>&#9200;&nbsp; Immediate Dispatch — No Hold Queue</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20–40 Min ETA in Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127942;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; Immediate Dispatch — No Hold Queue</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9651;&nbsp; 20–40 Min ETA in Richmond TX</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127942;&nbsp; 4.9 Stars on Google</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; All of Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<!-- SERVICE DETAIL -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="alert-triangle" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Emergency Towing in Richmond TX
        </span>
        <h2>When It Can't Wait, We're Already Headed Your Way</h2>
        <div class="prose">
          <p>Emergency towing is different from scheduled service. Your car is disabled, you're on a roadside shoulder, it's dark, it's late, or traffic is moving around you. You don't need a promise — you need a driver, fast. Twin Cities Towing INC has operated 24 hours a day in Richmond and Fort Bend County since 2011, and our emergency response is built around one principle: dispatch first, paperwork second.</p>
          <p>When you call, a real local dispatcher answers. We ask for your location and vehicle type — nothing else to start — and have the nearest driver heading your way within minutes. Most locations in Richmond, Rosenberg, Sugar Land, and Missouri City see our truck in 20 to 40 minutes. We confirm your ETA before hanging up so you're not guessing in the dark.</p>
          <p>We respond to all types of emergency situations: highway breakdowns, post-accident recovery, engine failures, vehicles that won't start, crashes in parking lots, and overnight breakdowns with no one nearby. We regularly work alongside TxDOT, Fort Bend County Sheriff's Office, and Richmond Fire when scenes require coordination — keeping you, your vehicle, and other drivers safer while the situation is resolved.</p>
          <p>No call center, no routing to a third-party driver who may or may not show. Just a direct local dispatcher, a local driver, and a real truck. That's what 13 years of serving this community looks like.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[9]); ?>"
               alt="Emergency towing response in Richmond TX by Twin Cities Towing"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Emergency Response</h4>
          <ul>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Available every hour of every day</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> 20–40 min ETA in Fort Bend County</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> No hold queues or call centers</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Highway &amp; back-road response</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Coordinates with law enforcement</li>
          </ul>
          <a href="/contact" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Call for Emergency Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>How fast does emergency towing arrive in Richmond, TX?</h2>
      <p>Twin Cities Towing INC typically reaches most Richmond and Fort Bend County locations within 20–40 minutes of your call. Dispatch is immediate — no hold, no transfer, no delay. Your ETA is confirmed before you hang up.</p>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What Sets Our Emergency Towing Apart in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="phone-call" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Real Dispatcher, Not a Robot</h3>
          <p class="prose">When you call Twin Cities Towing in an emergency, a person answers. No automated system, no national routing, no sitting on hold. A local dispatcher who knows Richmond's roads takes your call and gets you help immediately.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="zap" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Under-2-Minute Dispatch</h3>
          <p class="prose">From your first word to driver departure is under 2 minutes on most calls. We've built our dispatch process around eliminating delay — because in a roadside emergency, every additional minute of exposure matters.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="shield-check" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Scene Safety — Especially on Highways</h3>
          <p class="prose">Highway breakdowns are dangerous. Our drivers are trained to work safely on active road shoulders, use proper lighting and warning equipment, and position the tow truck to protect you from passing traffic while they load your vehicle.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="map" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>13 Years of Local Road Knowledge</h3>
          <p class="prose">We know every interchange, every frontage road, every hidden exit along I-69, Hwy 90, and the county roads of Fort Bend. That knowledge means faster routing to your location — not a driver using GPS and guessing at the turn.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">How It Works</span>
      <h2>Emergency Towing — From Your Call to Safe Delivery</h2>
    </div>
    <ol class="process-steps" data-animate="fade-up">
      <li class="process-step">
        <div class="process-step-num">1</div>
        <div>
          <h3>Call — We Answer Immediately</h3>
          <p class="prose">Give us your location and vehicle type. We confirm your ETA right then, and the nearest driver departs within 2 minutes. No transfers, no waiting.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">2</div>
        <div>
          <h3>Driver Heads Directly to You</h3>
          <p class="prose">We route the nearest driver to your exact position. You'll get a confirmation and can track progress. No uncertainty about whether someone is actually coming.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">3</div>
        <div>
          <h3>Safe Load &amp; Secure</h3>
          <p class="prose">Our driver assesses your vehicle on arrival, sets up proper scene safety, and loads with the right equipment for your vehicle type. Everything secured before moving an inch.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">4</div>
        <div>
          <h3>Delivered to Your Destination</h3>
          <p class="prose">We take your vehicle to the mechanic, dealership, or home address you choose. You're never pressured to use a specific shop — your vehicle goes where you need it.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- MID-PAGE CTA -->
<section class="cta-banner" aria-labelledby="emerg-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Stranded Right Now?</span>
    <h2 id="emerg-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Call Now — We Dispatch in Under 2 Minutes</h2>
    <p>Don't wait on the shoulder any longer than you have to. Twin Cities Towing INC is local, available right now, and has been responding to Fort Bend County emergencies since 2011.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Emergency Tow
      </a>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
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
      <h2>Emergency Towing FAQs &mdash; Richmond, TX</h2>
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

<!-- CLOSING CTA -->
<section class="closing-cta" aria-labelledby="emerg-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Emergency Towing &mdash; 24/7</span>
      <h2 id="emerg-close-heading">Richmond's Go-To Emergency Tow — Any Hour, Any Road</h2>
      <p class="closing-lead">Twin Cities Towing INC has been the call Fort Bend County drivers make in a real emergency for over 13 years. Whether it's 2pm or 2am, we answer, we dispatch, and we arrive. No exceptions.</p>
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
