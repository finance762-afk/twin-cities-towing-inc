<?php
/**
 * Twin Cities Towing INC — Flatbed Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Flatbed Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Professional flatbed towing in Richmond, TX for luxury cars, AWD vehicles, low-clearance automobiles, and accident-damaged cars. All 4 wheels off the ground — damage-free transport guaranteed.';
$pageKeywords    = 'flatbed towing Richmond TX, flatbed service Richmond, luxury car towing Texas, AWD towing Richmond, low clearance car towing Fort Bend, damage free towing Richmond';
$canonicalUrl    = $domain . '/services/flatbed-towing';
$ogImage         = $clientPhotos[16];
$currentPage     = 'flatbed-towing';

$serviceFaqs = [
    ['q' => 'When should I request flatbed towing instead of standard towing?', 'a' => 'Request flatbed towing for: all AWD and 4WD vehicles, lowered or low-clearance cars, luxury vehicles you don\'t want rolling on a hook, accident-damaged vehicles that can\'t be safely towed by wheel, and any car where the owner simply wants zero risk of drivetrain or undercarriage contact. When in doubt, flatbed is always the safer choice.'],
    ['q' => 'Does flatbed towing cost more than standard towing in Richmond, TX?', 'a' => 'Flatbed towing typically costs $25–$50 more than wheel-lift for the same distance due to equipment overhead. For most vehicles that require flatbed — AWD, luxury, damaged — that extra cost is trivial compared to the damage that improper towing causes. We quote flatbed rates upfront so you know before we roll.'],
    ['q' => 'Is flatbed towing safe for all-wheel drive vehicles?', 'a' => 'Flatbed is not just safe for AWD — it\'s the required method. Towing an AWD vehicle with the wheels turning when they shouldn\'t be can destroy the transfer case, differentials, and transmission. Flatbed keeps all four wheels stationary and off the ground the entire trip, eliminating that risk entirely.'],
    ['q' => 'Can you load a vehicle that won\'t roll or start?', 'a' => 'Yes. Our flatbeds are equipped with winches that pull non-rolling vehicles up the deck without requiring the car to drive itself on. Vehicles with seized wheels, blown tires, or accident damage that prevents rolling can all be safely loaded via winch and secured for transport.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Flatbed Towing'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/flatbed-towing/#service',
         'name' => 'Flatbed Towing', 'url' => $domain . '/services/flatbed-towing',
         'description' => 'Professional flatbed towing in Richmond TX for luxury, AWD, low-clearance, and accident-damaged vehicles. All wheels off the ground.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Flatbed Towing'],
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
        <span itemprop="name">Flatbed Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[16]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="minus-square" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Luxury Cars &bull; AWD &bull; Low Clearance &bull; Accident Recovery
    </div>
    <h1 class="hero-title" id="service-hero-heading">Flatbed Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">All four wheels off the ground. Zero drivetrain contact. The safest way to move any vehicle — especially when it matters most.</p>
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
    <span>&#9989;&nbsp; All 4 Wheels Off the Ground</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; AWD &amp; 4WD Safe</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Winch Loading Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Google Reviews</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9989;&nbsp; All 4 Wheels Off the Ground</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; AWD &amp; 4WD Safe</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Winch Loading Available</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Google Reviews</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="minus-square" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Flatbed Towing in Richmond TX
        </span>
        <h2>When the Vehicle is Too Valuable to Risk a Standard Tow</h2>
        <div class="prose">
          <p>Not every vehicle should be towed the same way. A hook-and-chain or basic wheel-lift is adequate for many standard cars — but for luxury vehicles, AWD/4WD drivetrains, lowered suspensions, and accident-damaged cars, those methods introduce real risk. Flatbed towing eliminates that risk by keeping all four wheels completely off the road from pickup to delivery.</p>
          <p>The most important application of flatbed towing is AWD and 4WD vehicles. When the non-driven wheels of an AWD car are rolling during a standard tow, the drivetrain is still partially engaged — and damage to the transfer case, differentials, or transmission can cost thousands of dollars in repairs. Flatbed removes this problem entirely: nothing rolls, nothing engages, nothing wears.</p>
          <p>Luxury vehicles benefit from flatbed even when AWD isn't a factor. A Corvette with a 4-inch ground clearance, a Mercedes with air suspension in failure mode, or a custom build with body-kit modifications may not safely clear the approach angle of a wheel-lift. Our flatbed deck angles and winch system handle these situations without scratching or stressing the vehicle.</p>
          <p>We also use flatbed for accident-damaged vehicles that can't roll safely — blown tires, seized wheels, bent frames. The winch pulls the car up the deck without requiring anything to operate correctly. Once on the deck and strapped, it's a stable, ground-contact-free ride to wherever you need it delivered.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[19]); ?>"
               alt="Flatbed towing vehicle being loaded in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Flatbed Towing For:</h4>
          <ul>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> All AWD &amp; 4WD vehicles</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Luxury &amp; exotic cars</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Low-clearance &amp; lowered vehicles</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Accident-damaged vehicles</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Non-rolling cars (winch load)</li>
          </ul>
          <a href="/contact" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Flatbed Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>Why do AWD vehicles need flatbed towing in Richmond, TX?</h2>
      <p>AWD vehicles have all four wheels connected through the drivetrain. When towed with a wheel-lift (rear wheels rolling), the transmission and transfer case can be damaged because they weren't designed to operate that way. Flatbed keeps all wheels stationary and off the ground, eliminating drivetrain damage risk entirely.</p>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>What Makes Our Flatbed Service the Safe Choice</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="shield-check" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Zero Ground Contact — Entire Trip</h3>
          <p class="prose">Your vehicle's tires never touch pavement from the moment it's loaded until it's delivered. That's the fundamental advantage of flatbed over any other towing method — there's no way to damage what isn't moving.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="anchor" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Winch Loading for Non-Running Vehicles</h3>
          <p class="prose">Accident-damaged or mechanically failed vehicles that won't roll get winched up our deck without requiring the car to cooperate. Even completely disabled vehicles load safely with our winch system.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="target" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Proper Tie-Down at Frame Points</h3>
          <p class="prose">We secure vehicles at manufacturer-designated tie-down points — never bumpers, tow hooks used improperly, or body panels. The strapping pattern matches what the vehicle was designed to handle.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="dollar-sign" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Cheaper Than Drivetrain Repair</h3>
          <p class="prose">Flatbed costs a bit more than wheel-lift for the same distance. But AWD drivetrain repair from incorrect towing runs $1,500–$8,000+. The math is straightforward — flatbed is the economical choice for the right vehicles.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="flat-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Luxury or AWD Vehicle?</span>
    <h2 id="flat-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Don't Risk a Wheel-Lift on a Vehicle That Needs Flatbed</h2>
    <p>Twin Cities Towing INC dispatches flatbed equipment 24/7 throughout Richmond and Fort Bend County. Tell us your vehicle make and model — we'll confirm the right method before we roll.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Flatbed Tow
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
      <h2>Flatbed Towing FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="flat-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Flatbed Towing &mdash; Richmond TX</span>
      <h2 id="flat-close-heading">The Safest Tow Available — All 4 Wheels Up, Every Mile</h2>
      <p class="closing-lead">Twin Cities Towing INC has transported luxury cars, AWD vehicles, and accident-damaged automobiles on flatbed throughout Fort Bend County since 2011. Call for immediate dispatch or request a quote online.</p>
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
