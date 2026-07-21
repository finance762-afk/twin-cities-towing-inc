<?php
/**
 * Twin Cities Towing INC — Motorcycle Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Motorcycle Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Specialized motorcycle towing in Richmond, TX using wheel chocks, soft straps, and proper cradles. Safe transport for motorcycles, scooters, and ATVs in Fort Bend County.';
$pageKeywords    = 'motorcycle towing Richmond TX, bike towing Richmond, motorcycle transport Texas, ATV towing Richmond, scooter towing Fort Bend County, Harley towing Richmond';
$canonicalUrl    = $domain . '/services/motorcycle-towing';
$ogImage         = $clientPhotos[14];
$currentPage     = 'motorcycle-towing';

$serviceFaqs = [
    ['q' => 'Do you have proper equipment for motorcycle towing in Richmond, TX?', 'a' => 'Yes. We use wheel chocks, soft tie-down straps, and frame cradles designed specifically for two-wheel vehicles. We never use hard chains against chrome or painted surfaces, and we always tie from designated frame points — not handlebars, mirrors, or bodywork.'],
    ['q' => 'Can you tow a Harley-Davidson safely?', 'a' => 'Absolutely. Harleys are among the most common motorcycles we transport in the Richmond area. Our operators are familiar with securing larger cruiser-style bikes and take extra care with chrome finish protection. Your Harley arrives looking exactly as it did when we picked it up.'],
    ['q' => 'Do you tow ATVs and off-road vehicles?', 'a' => 'Yes — small ATVs, UTVs, and off-road bikes can be transported on our flatbed with appropriate tie-down positioning. Weight limits apply; contact us with your vehicle specs and we\'ll confirm capability before dispatch.'],
    ['q' => 'How much does motorcycle towing cost in the Richmond area?', 'a' => 'Motorcycle towing in Richmond typically runs $85–$150 for local transport within Fort Bend County. Rates vary by distance and any special equipment needs. We give you a clear quote before we roll — no surprises on delivery.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Motorcycle Towing'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/motorcycle-towing/#service',
         'name' => 'Motorcycle Towing', 'url' => $domain . '/services/motorcycle-towing',
         'description' => 'Specialized motorcycle towing with proper equipment throughout Richmond TX and Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Motorcycle Towing'],
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
        <span itemprop="name">Motorcycle Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[14]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="activity" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Motorcycles &bull; Scooters &bull; ATVs &bull; Cruisers
    </div>
    <h1 class="hero-title" id="service-hero-heading">Motorcycle Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Specialized equipment, proper tie-down technique, and 13 years of experience moving two-wheel vehicles throughout Fort Bend County — zero chrome contact, zero scratches.</p>
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
    <span>&#9940;&nbsp; Wheel Chocks &amp; Soft Straps</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Chrome-Safe Technique</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Harley, Sport &amp; ATV Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Fort Bend County &amp; Beyond</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9940;&nbsp; Wheel Chocks &amp; Soft Straps</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Chrome-Safe Technique</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Dispatch</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Harley, Sport &amp; ATV Towing</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128205;&nbsp; Fort Bend County &amp; Beyond</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[17]); ?>"
               alt="Motorcycle being safely secured for towing in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="activity" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Motorcycle Towing in Richmond TX
        </span>
        <h2>Your Bike Gets the Same Care You Give It</h2>
        <div class="prose">
          <p>Motorcycles are not cars. They require a fundamentally different approach to securing, loading, and transporting — and using the wrong technique results in scratched chrome, stressed frames, and bikes that arrive in worse shape than they left. Twin Cities Towing INC carries the specialized equipment and uses the proper methods for two-wheel vehicle transport throughout Richmond and Fort Bend County.</p>
          <p>We use front wheel chocks to hold the bike upright during loading, soft ratchet straps anchored at frame tie-down points, and protective padding wherever a strap or chain could contact painted surfaces or chrome. We never tie from handlebars, mirrors, footpegs, or decorative hardware. The only contact points are designated hard frame mounts — the same points your bike's manual specifies for mounting accessories.</p>
          <p>We transport street bikes, cruisers, sport bikes, standard commuters, touring motorcycles, and scooters. For larger and heavier bikes like full-size touring Harleys or big adventure bikes, we carry extended wheel chock systems designed for that weight class. Small ATVs and utility terrain vehicles can also be accommodated on our flatbed within weight limits.</p>
          <p>Our service area for motorcycle towing covers Richmond, Rosenberg, Katy, Sugar Land, Missouri City, Stafford, Greatwood, and surrounding Fort Bend County communities. Whether you broke down on Hwy 90 near Rosenberg or need transport from a shop in Katy, we've got the route and the equipment.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What equipment does Twin Cities Towing use for motorcycle towing in Richmond, TX?</h2>
      <p>We use front wheel chocks, soft tie-down straps, and frame cradles designed for two-wheel vehicles. All tie-down points are at designated frame mounts — never handlebars, mirrors, or chrome surfaces. Your motorcycle arrives without scratches or strap marks.</p>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Motorcycle Towing Done Right in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="shield" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Purpose-Built Equipment</h3>
          <p class="prose">Wheel chocks, soft straps, and frame cradles — not improvised solutions with ratchet straps hooked wherever convenient. The right equipment is the starting point for a damage-free transport.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="eye" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Chrome and Paint Awareness</h3>
          <p class="prose">Our operators know where not to touch your bike. Padding, soft straps, and careful technique mean your finish looks exactly the same when you get it back as when we picked it up.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="settings" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Bikes of All Sizes and Styles</h3>
          <p class="prose">From lightweight 250cc commuters to 900-pound touring bikes, we've transported them all. Tell us the make and approximate weight and we'll confirm capacity before rolling.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="clock" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>24/7 Availability Throughout Fort Bend</h3>
          <p class="prose">Motorcycle breakdowns happen at all hours — weekend rides cut short, late-night highway issues. We're available every hour to cover the same roads and neighborhoods you ride.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="moto-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Bike Down in Fort Bend County?</span>
    <h2 id="moto-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Specialized Equipment — Not a Standard Car Tow</h2>
    <p>Your motorcycle deserves a tow truck that carries the right gear. Twin Cities Towing brings wheel chocks, soft straps, and 13 years of two-wheel transport experience to every call.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Motorcycle Tow
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
      <h2>Motorcycle Towing FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="moto-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Motorcycle Towing &mdash; Richmond TX</span>
      <h2 id="moto-close-heading">Your Bike Deserves a Tow Truck That Knows How to Handle It</h2>
      <p class="closing-lead">Twin Cities Towing INC transports motorcycles throughout Richmond, Rosenberg, Katy, and all of Fort Bend County with the proper equipment and technique. Call for immediate dispatch or request online — your bike is in the right hands.</p>
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
