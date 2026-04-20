<?php
/**
 * Twin Cities Towing INC — Tire Change Service
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Tire Change Service Richmond TX | Twin Cities Towing INC';
$pageDescription = 'On-site tire change service in Richmond, TX when you\'re stranded with a flat. Twin Cities Towing INC swaps your spare roadside in Fort Bend County — 24/7, fast response.';
$pageKeywords    = 'tire change Richmond TX, flat tire service Richmond, tire replacement Texas, roadside tire change Richmond, flat tire help Fort Bend County, spare tire swap Richmond';
$canonicalUrl    = $domain . '/services/tire-change';
$ogImage         = $clientPhotos[20];
$currentPage     = 'tire-change';

$serviceFaqs = [
    ['q' => 'Can you change my tire if I don\'t have a spare?', 'a' => 'If you have no usable spare, we can tow your vehicle to a tire shop of your choice throughout Fort Bend County. We\'ll load your car and deliver it to wherever you need new tires — same driver, one call. No need to call a second service.'],
    ['q' => 'How long does a roadside tire change take in Richmond, TX?', 'a' => 'Once we arrive — typically 20–35 minutes in the Richmond area — changing to your spare takes about 10–15 minutes. We properly torque the lug nuts, check spare pressure, and confirm the vehicle is safe before we leave. You\'re back on the road in under an hour from your first call.'],
    ['q' => 'Do you change run-flat tires?', 'a' => 'Run-flat tires that have been driven flat cannot simply be swapped and continued — most manufacturers limit zero-pressure driving to 50 miles max. We can swap your run-flat for a spare or tow the vehicle to a dealership or tire shop equipped to replace them properly.'],
    ['q' => 'What if my spare is also flat or damaged?', 'a' => 'If your spare isn\'t usable, we move straight to a tow — same driver, no second call, no additional dispatch fee. We\'ll take your vehicle to whichever tire shop you choose in the Richmond or Fort Bend County area.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $domain . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Tire Change Service'],
        ]],
        ['@type' => 'Service', '@id' => $domain . '/services/tire-change/#service',
         'name' => 'Tire Change Service', 'url' => $domain . '/services/tire-change',
         'description' => 'Roadside flat tire change service in Richmond TX. Fast response, proper lug torque, 24/7 availability throughout Fort Bend County.',
         'provider' => ['@type' => 'LocalBusiness', '@id' => $domain . '/#business'],
         'areaServed' => ['@type' => 'City', 'name' => 'Richmond, TX'], 'serviceType' => 'Tire Change Service'],
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
        <span itemprop="name">Tire Change Service</span><meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<section class="service-hero"
         style="background-image: url('<?php echo htmlspecialchars($clientPhotos[20]); ?>');"
         aria-labelledby="service-hero-heading">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <i data-lucide="disc" style="width:14px;height:14px;display:inline-block;vertical-align:middle;margin-right:6px;"></i>
      Flat Tire &bull; Roadside Swap &bull; Safe &amp; Fast
    </div>
    <h1 class="hero-title" id="service-hero-heading">Tire Change Service<br>in Richmond, TX</h1>
    <p class="hero-subtitle">Flat tire anywhere in Fort Bend County? We come to you, swap your spare on the roadside, and get you back on the road — typically within 45 minutes of your call.</p>
    <div class="hero-buttons">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Get Tire Help Now
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
    <span>&#128665;&nbsp; Spare Tire Swap — On the Spot</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Proper Lug Nut Torque</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; No Spare? We Tow You</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 — Any Day, Any Road</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128665;&nbsp; Spare Tire Swap — On the Spot</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 20–35 Min Response Time</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128737;&nbsp; Proper Lug Nut Torque</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#128666;&nbsp; No Spare? We Tow You</span>
    <span class="ticker-sep">&#9670;</span>
    <span>&#9200;&nbsp; 24/7 — Any Day, Any Road</span>
    <span class="ticker-sep">&#9670;</span>
  </div>
</div>

<section class="section-white" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="split split-reverse" data-animate="fade-up">
      <div class="split-image">
        <div class="img-reveal" data-animate="wipe-right">
          <img src="<?php echo htmlspecialchars($clientPhotos[22]); ?>"
               alt="Technician changing flat tire roadside in Richmond TX"
               width="600" height="500" loading="lazy">
        </div>
      </div>
      <div class="split-content">
        <span class="eyebrow">
          <i data-lucide="disc" style="width:13px;height:13px;vertical-align:middle;margin-right:5px;"></i>
          Tire Change Service in Richmond TX
        </span>
        <h2>Flat on the Side of the Road? We're Closer Than You Think</h2>
        <div class="prose">
          <p>A flat tire on I-69 at rush hour or on a dark residential street at midnight are two very different situations — but they share the same core problem: your vehicle won't move safely on that tire, and you need help fast. Twin Cities Towing INC responds to flat tire calls throughout Richmond, Rosenberg, and Fort Bend County 24 hours a day, with a driver who arrives with the right tools to swap your spare on the spot.</p>
          <p>Our tire change service is more than just loosening and retightening lug nuts. We verify your spare is properly inflated before mounting, torque all lug nuts to the manufacturer's specified rating (not just "tight enough"), check for damage to the wheel or hub from the flat, and confirm the vehicle is sitting properly before we let you drive away. We don't rush a tire change — a wheel that comes loose at 70 mph is a catastrophe, not a minor inconvenience.</p>
          <p>If your spare tire is flat, damaged, or missing entirely, we transition directly to a tow without requiring you to make a second call. The same driver who came to change your tire loads your vehicle and delivers it to the tire shop of your choice. This seamless handoff saves you the wait time and the confusion of managing two separate service calls in an already stressful situation.</p>
          <p>We handle tire changes on all vehicle types: sedans, SUVs, trucks, minivans, and crossovers. For commercial vehicles or oversized tires, contact us with your vehicle specs and we'll confirm capability before dispatch.</p>
          <p><em>Last Updated: April 2026</em></p>
        </div>
      </div>
    </div>

    <div class="answer-block" data-animate="fade-up">
      <h2>What happens if I have a flat tire and no spare in Richmond, TX?</h2>
      <p>Twin Cities Towing INC will tow your vehicle to any tire shop you choose in Fort Bend County — same driver, same call, no second dispatch fee. We don't leave you stranded because the spare didn't work out.</p>
    </div>
  </div>
</section>

<section class="section-light" style="padding: var(--space-16) 0;">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Our Tire Change Process</span>
      <h2>How We Handle Flat Tires in Fort Bend County</h2>
    </div>
    <ol class="process-steps" data-animate="fade-up">
      <li class="process-step">
        <div class="process-step-num">1</div>
        <div>
          <h3>Call &amp; Confirm Your Location</h3>
          <p class="prose">Give us your position and vehicle type. We dispatch in under 2 minutes and give you an ETA. Most Richmond-area flat tire calls: 20–35 minutes to arrival.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">2</div>
        <div>
          <h3>Assess Spare Tire &amp; Flat</h3>
          <p class="prose">We check your spare for pressure and condition before mounting it. We also inspect the flat tire and wheel for damage that might affect safe driving on the spare.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">3</div>
        <div>
          <h3>Swap &amp; Properly Torque</h3>
          <p class="prose">We jack the vehicle at the correct lift point, remove the flat, mount the spare, and torque all lug nuts to spec. No guessing — proper torque prevents wheel-off incidents.</p>
        </div>
      </li>
      <li class="process-step">
        <div class="process-step-num">4</div>
        <div>
          <h3>Safety Check &amp; Clear to Drive</h3>
          <p class="prose">We confirm proper seating, recheck lug torque, and advise on spare tire driving limits (distance and speed). If anything isn't right, we say so before you leave the scene.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<section class="cta-banner" aria-labelledby="tire-cta-heading">
  <div class="container">
    <span class="eyebrow-label" style="justify-content:center;display:flex;color:rgba(255,255,255,0.6);letter-spacing:3px;font-size:0.7rem;margin-bottom:var(--space-3);">Flat Tire Right Now?</span>
    <h2 id="tire-cta-heading" style="color:var(--color-white);font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:var(--space-4);">One Call — Spare Mounted, Torqued, and You're Moving</h2>
    <p>Twin Cities Towing INC responds to flat tire calls throughout Fort Bend County 24/7. Whether you're on a highway shoulder or in a parking lot, we get there fast and do the job right.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" style="width:18px;height:18px;"></i>
        Request Tire Help
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
      <h2>Tire Change FAQs &mdash; Richmond, TX</h2>
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

<section class="closing-cta" aria-labelledby="tire-close-heading">
  <div class="container">
    <div data-animate="fade-up">
      <span style="display:block;font-family:var(--font-heading);font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:3px;color:var(--color-accent);margin-bottom:var(--space-3);">Tire Change Service &mdash; Richmond TX</span>
      <h2 id="tire-close-heading">Flat Tire Fixed on the Spot — or Towed to the Shop</h2>
      <p class="closing-lead">Twin Cities Towing INC handles flat tires throughout Richmond and Fort Bend County with the right tools and technique. If your spare works, we mount it and send you on your way. If not, we tow you — same call, no extra wait.</p>
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
      <a href="/services/roadside-assistance" class="btn btn-outline-white btn-lg">
        <i data-lucide="tool" style="width:18px;height:18px;"></i>
        All Roadside Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
