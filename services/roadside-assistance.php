<?php
/**
 * Twin Cities Towing INC — Roadside Assistance
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Roadside Assistance Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Complete roadside assistance in Richmond, TX — jump starts, fuel delivery, flat tire changes, and on-site help. Twin Cities Towing INC gets you moving without a tow when possible.';
$pageKeywords    = 'roadside assistance Richmond TX, jump start service Richmond, fuel delivery Richmond, flat tire change Richmond TX, emergency roadside help Fort Bend County';
$canonicalUrl    = $domain . '/services/roadside-assistance';
$ogImage         = $clientPhotos[6];
$currentPage     = 'roadside-assistance';

$serviceFaqs = [
    ['q' => 'What roadside assistance services does Twin Cities Towing offer in Richmond, TX?', 'a' => 'We provide jump starts for dead batteries, emergency fuel delivery, flat tire changes (using your spare), and on-site diagnostics for common breakdown situations. If the issue can be resolved without a tow, we\'ll do that first. When a tow is necessary, we handle that too — one call covers both scenarios.'],
    ['q' => 'Can you deliver fuel if I run out of gas in Richmond?', 'a' => 'Yes. We deliver enough emergency fuel to get you to the nearest station — typically 1–2 gallons. This service is available throughout Fort Bend County 24/7. Call with your location and we\'ll dispatch with fuel right away.'],
    ['q' => 'How long does a roadside jump start take?', 'a' => 'Once we arrive — usually 20–35 minutes in the Richmond area — a jump start takes about 10–15 minutes from hookup to engine running. If your battery is beyond jumping, we can tow you to your preferred shop right then.'],
    ['q' => 'What if the roadside fix doesn\'t work?', 'a' => 'If we attempt a roadside fix and your vehicle still won\'t operate safely, we transition straight to a tow — same driver, same call, no extra wait. You don\'t pay twice for the dispatch. We get you to your destination one way or another.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Roadside Assistance'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/roadside-assistance/#service',
         'name' => 'Roadside Assistance', 'url' => $domain . '/services/roadside-assistance',
         'description' => 'Complete roadside assistance in Richmond TX including jump starts, fuel delivery, and flat tire changes. Available 24/7.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Roadside Assistance'],
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
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services" itemprop="item"><span itemprop="name">Services</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Roadside Assistance</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[6]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="tool" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Jump Starts &bull; Fuel Delivery &bull; Tire Changes
    </div>
    <h1 class="hero-title" id="service-hero-heading">Roadside Assistance<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Dead battery, flat tire, or running on empty in Fort Bend County? We come to you and fix it on the spot — no tow required whenever possible.</p>
    <div class="hero-buttons">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get Roadside Help
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
    <span>&#9889;&nbsp; Jump Starts Available 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9981;&nbsp; Fuel Delivery — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Tow Available If Needed</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9889;&nbsp; Jump Starts Available 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9981;&nbsp; Fuel Delivery — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Licensed &amp; Insured</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Tow Available If Needed</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[11]); ?>"
               alt="Roadside assistance technician helping stranded driver in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="tool" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Roadside Assistance in Richmond TX
        </span>
        <h2>Not Every Breakdown Needs a Tow — We Fix It Right There</h2>
        <div class="prose">
          <p>The most common roadside breakdowns in the Richmond area — dead battery, flat tire, empty fuel tank — don't need your car dragged across town. They need someone to show up quickly with the right equipment and handle it on the spot. That's exactly what our roadside assistance service does, available 24 hours a day throughout Fort Bend County.</p>
          <p>When you call Twin Cities Towing INC for roadside help, we dispatch immediately with jump cables and a power pack, a fuel can, or a tire-change kit — depending on what you need. Our goal is always to get you back on the road without needing a tow. That saves you time and cost, and it's the outcome most drivers actually want when they're stranded.</p>
          <p>Roadside calls in Richmond, Rosenberg, Sugar Land, Missouri City, and throughout Fort Bend County typically see us arrive in 20–35 minutes. We service all major roads including I-69, Highway 90, FM 359, and residential neighborhoods throughout the county. If you're in a parking garage, a gas station lot, or a subdivision cul-de-sac — we'll find you.</p>
          <p>If roadside repair isn't enough to get your vehicle moving safely, the transition to a tow is seamless — same driver, same call. No second dispatch fee. We go from fixing it on the spot to loading your car in one continuous service call.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What does roadside assistance include in Richmond, TX?</h2>
      <p>Twin Cities Towing INC's roadside assistance covers jump starts, emergency fuel delivery (enough to reach the nearest station), flat tire changes using your spare, and on-site assessment for common mechanical issues. Service is available 24/7 throughout Fort Bend County.</p>
    </div>
  </div>
</section>

<!-- SERVICES OFFERED -->
<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">What We Handle</span>
      <h2>Roadside Services Available in Fort Bend County</h2>
    </div>
    <div class="grid-3" data-animate="fade-up">
      <div class="card">
        <div class="card-icon"><i data-lucide="zap" style="width:28px;height:28px;"></i></div>
        <h3>Jump Starts</h3>
        <p class="prose">Dead battery? We arrive with professional-grade jump packs that work even on late-model vehicles with sensitive electronics. If the battery won't hold a charge, we can tow you to a shop.</p>
      </div>
      <div class="card">
        <div class="card-icon"><i data-lucide="droplets" style="width:28px;height:28px;"></i></div>
        <h3>Emergency Fuel Delivery</h3>
        <p class="prose">Ran out of gas on I-69 or in a parking lot? We bring enough fuel to get you to the nearest station — delivered to your location throughout the Richmond area.</p>
      </div>
      <div class="card">
        <div class="card-icon"><i data-lucide="disc" style="width:28px;height:28px;"></i></div>
        <h3>Flat Tire Change</h3>
        <p class="prose">We swap your flat for your spare right on the roadside. If you have no usable spare, we'll transport your vehicle to a tire shop — your choice of location.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="road-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Stranded in Fort Bend County?</span>
    <h2 id="road-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">One Call Gets Roadside Help Moving Your Way</h2>
    <p>Jump start, fuel, flat — whatever the issue, we dispatch immediately and arrive in 20–35 minutes to most Richmond and Fort Bend County locations.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Roadside Help
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
      <h2>Roadside Assistance FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="road-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Roadside Assistance &mdash; Richmond TX</span>
      <h2 id="road-close-heading">Back on the Road Fast — Without a Trip to the Shop</h2>
      <p class="closing-lead">When your car won't cooperate, Twin Cities Towing INC comes to you. Jump start, fuel, flat — we fix it on the spot whenever possible. When a tow is needed, it happens right then with no extra call or wait.</p>
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
