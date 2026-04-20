<?php
/**
 * Twin Cities Towing INC — Accident Towing
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Accident Towing Richmond TX | Twin Cities Towing INC';
$pageDescription = 'Accident recovery and towing in Richmond, TX available 24/7. Twin Cities Towing INC clears collision scenes safely, coordinates with law enforcement, and delivers to your chosen shop.';
$pageKeywords    = 'accident towing Richmond TX, collision towing Richmond, crash recovery Texas, accident vehicle removal Richmond, post-accident towing Fort Bend County, wreck recovery Richmond';
$canonicalUrl    = $domain . '/services/accident-towing';
$ogImage         = $clientPhotos[12];
$currentPage     = 'accident-towing';

$serviceFaqs = [
    ['q' => 'Do you coordinate with police at accident scenes in Richmond, TX?', 'a' => 'Yes. We regularly work alongside Fort Bend County Sheriff\'s Office, Richmond Police Department, and TxDOT Traffic Management at accident scenes. We know the protocols for scene clearance, lane re-opening timing, and documentation that law enforcement requires before releasing a vehicle.'],
    ['q' => 'Can you tow a vehicle that is badly damaged and won\'t roll?', 'a' => 'Yes. Accident-damaged vehicles with flat tires, seized wheels, bent frames, or damage preventing them from rolling are loaded via winch onto our flatbed. We assess the damage on arrival and use the appropriate loading method — nothing gets dragged or forced in a way that causes additional damage.'],
    ['q' => 'Will my insurance cover accident towing in Fort Bend County?', 'a' => 'Most auto insurance policies with comprehensive or collision coverage include towing reimbursement. We can provide documentation — invoice, location, and service details — that your insurer may require for the claim. Check your policy\'s roadside assistance or towing benefit for specifics.'],
    ['q' => 'How fast do you respond to accident calls in Richmond, TX?', 'a' => 'Accident towing calls are treated as priority dispatch. We target arrival within 20–40 minutes for most Fort Bend County locations. For highway accidents involving lane blockage, we move even faster given the safety implications. Call immediately after securing the scene and getting clear of traffic.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Accident Towing'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/accident-towing/#service',
         'name' => 'Accident Towing', 'url' => $domain . '/services/accident-towing',
         'description' => 'Accident recovery and towing in Richmond TX available 24/7. Works with law enforcement, handles damaged vehicles, serves Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Accident Towing'],
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
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services" itemprop="item"><span itemprop="name">Services</span></a><meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span itemprop="name">Accident Towing</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[12]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="alert-circle" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Priority Response &bull; Scene Coordination &bull; 24/7
    </div>
    <h1 class="hero-title" id="service-hero-heading">Accident Towing<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Collision vehicle recovery in Fort Bend County — fast clearance, coordination with law enforcement, and flatbed transport for damaged vehicles that can't roll.</p>
    <div class="hero-buttons">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Accident Tow
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
    <span>&#128693;&nbsp; Accident Scene Recovery 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Coordinates with Law Enforcement</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Flatbed for Damaged Vehicles</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; Priority Dispatch — 20–40 Min</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128693;&nbsp; Accident Scene Recovery 24/7</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Coordinates with Law Enforcement</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; Flatbed for Damaged Vehicles</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; Priority Dispatch — 20–40 Min</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#127941;&nbsp; 4.9 Stars — Fort Bend County</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split" data-animate="fade-up">
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="alert-circle" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Accident Towing in Richmond TX
        </span>
        <h2>After the Collision — We Handle the Vehicle, You Focus on What Matters</h2>
        <div class="prose">
          <p>A vehicle accident is already a stressful situation. Figuring out how to get a damaged, possibly non-rolling car off the roadway shouldn't add to that stress. Twin Cities Towing INC responds to accident scenes throughout Richmond and Fort Bend County 24 hours a day, with the experience and equipment to handle damaged vehicle recovery correctly — from coordinating with first responders to loading a totaled car without causing additional damage.</p>
          <p>Accident-damaged vehicles present challenges that standard breakdown tows do not. Wheels may be seized, tires blown, frames bent, or doors jammed — all of which prevent the vehicle from rolling onto a wheel-lift normally. Our flatbeds are equipped with winches that pull non-rolling vehicles up the deck safely, without dragging or forcing anything that would worsen the damage or create a liability concern at the scene.</p>
          <p>We work regularly with Fort Bend County law enforcement, including the Sheriff's Office and Richmond Police Department. We understand scene clearance protocols, know what documentation officers need before releasing a vehicle, and operate within the timing constraints that apply to highway lane blockage situations. Getting the scene cleared safely and quickly is something both we and the responding officers share as a priority.</p>
          <p>After clearing the scene, we deliver to whatever body shop, dealership, or insurance-designated facility you choose. We provide documentation — invoice, service details, pickup/dropoff locations — that your insurance company may request when processing your claim. Call us immediately after securing your own safety following an accident — the faster we respond, the faster the road opens.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[15]); ?>"
               alt="Accident vehicle being recovered by Twin Cities Towing in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
        <div class="service-sidebar-card">
          <h4>Accident Towing Includes:</h4>
          <ul>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Priority dispatch — 24/7</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Winch loading for non-rolling vehicles</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Law enforcement coordination</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Insurance documentation provided</li>
            <li><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--color-accent);"></i> Deliver to any body shop or facility</li>
          </ul>
          <a href="/contact" class="btn btn-primary" style="width:100%;justify-content:center;display:flex;margin-top:var(--space-5);">
            Request Accident Tow
          </a>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What should I do after a car accident in Richmond, TX while waiting for the tow?</h2>
      <p>Move to safety away from traffic, call 911 if anyone is injured, document the scene with photos, and then call Twin Cities Towing INC for priority dispatch. Stay clear of the vehicle and traffic lanes until our driver arrives and secures the scene.</p>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Twin Cities Towing</span>
      <h2>Accident Recovery Done Right in Fort Bend County</h2>
    </div>
    <div class="grid-2" data-animate="fade-up">
      <div class="benefit-item">
        <i data-lucide="shield" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Scene Safety Is the First Priority</h3>
          <p class="prose">Our drivers set up warning equipment on arrival, position the truck to protect you from passing traffic, and work with law enforcement to control the scene before touching your vehicle. Moving fast matters — but not faster than scene safety allows.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="anchor" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Winch Loading for Non-Rolling Vehicles</h3>
          <p class="prose">Crash-damaged vehicles often can't roll. Our flatbeds carry winches designed to pull them up the deck safely. No dragging on the pavement, no forcing bent wheels — just a controlled, careful load that doesn't add to the damage.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="file-text" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Insurance Documentation Provided</h3>
          <p class="prose">We provide a detailed invoice with service information, pickup and dropoff locations, and contact details that your insurance company may need when processing your claim. We've been through this process with dozens of insurers — we know what they ask for.</p>
        </div>
      </div>
      <div class="benefit-item">
        <i data-lucide="clock" style="width:24px;height:24px;color:var(--color-accent);"></i>
        <div>
          <h3>Priority Response — Any Hour</h3>
          <p class="prose">Accident calls jump to front-of-queue dispatch. When lanes are blocked and first responders are waiting on a tow to clear the scene, minutes matter. We target 20–40 minute arrival on all accident calls throughout Fort Bend County.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-labelledby="acc-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Accident Scene in Fort Bend County?</span>
    <h2 id="acc-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">Call Immediately — Priority Dispatch Gets Us There Fast</h2>
    <p>Twin Cities Towing INC prioritizes accident recovery calls throughout Richmond and Fort Bend County. 24/7, every day — scene clearance and safe vehicle transport when you need it most.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Accident Tow
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
      <h2>Accident Towing FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="acc-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Accident Towing &mdash; Richmond TX</span>
      <h2 id="acc-close-heading">Scene Cleared, Vehicle Recovered — The Rest Is Paperwork</h2>
      <p class="closing-lead">Twin Cities Towing INC handles accident scenes throughout Fort Bend County with 13 years of experience working alongside law enforcement and insurance processes. Call us immediately after securing your safety — we handle everything from there.</p>
    </div>
    <div class="closing-actions" data-animate="fade-up">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get Help Now
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
