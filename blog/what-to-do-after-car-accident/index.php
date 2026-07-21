<?php
/**
 * Blog Post: What to Do After a Car Accident in Fort Bend County
 * Twin Cities Towing INC | Page One Insights v6.1 Blog Standard
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'What to Do After a Car Accident in Fort Bend County';
$pageDescription = 'After a car accident in Fort Bend County: move to safety, call 911, document the scene, know your Texas towing rights, and get your car off the road fast.';
$currentPage     = 'blog';
$ogType          = 'article';

$postDate     = 'June 20, 2026';
$postDateISO  = '2026-06-20';
$postAuthor   = $siteName;
$postCategory = 'Roadside Help';
$postReadtime = '8 min read';
$heroImage    = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710966205-obsbo8-o__24_.jpg';
$ogImage      = $heroImage;
$postUrl      = $domain . '/blog/what-to-do-after-car-accident/';

// Visible FAQ — mirrored exactly by the FAQPage schema below.
$postFaqs = [
    ['q' => 'Do I have to use the tow truck the police call after an accident in Texas?', 'a' => 'Not always. If your vehicle is not blocking traffic and you can make arrangements at the scene, you can generally request the towing company of your choice. If the vehicle is blocking a lane or you are being transported for medical care, the officer can order an immediate tow from the department\'s rotation list to clear the scene.'],
    ['q' => 'How do I get a copy of my Texas crash report (CR-3)?', 'a' => 'When an officer investigates your crash, they file a CR-3 peace officer\'s crash report with TxDOT. You can purchase a copy through TxDOT\'s online Crash Report system, usually within about 10 days of the crash. A regular copy costs around $6 and a certified copy around $8. Your insurance company will typically want the report number.'],
    ['q' => 'Will my insurance pay for accident towing in Fort Bend County?', 'a' => 'Most policies with collision coverage treat towing from an accident scene as part of the claim, and many also include separate towing or roadside reimbursement. Keep your towing invoice — Twin Cities Towing INC provides documentation with the pickup location, destination, and service details that insurers ask for.'],
    ['q' => 'What happens if my car is towed to a storage lot after a wreck?', 'a' => 'Police-ordered tows go to a licensed vehicle storage facility, where daily storage fees start accruing. Bring your ID and proof of ownership to retrieve the vehicle or your belongings; if law enforcement placed a hold, you will need a release first. Retrieving the car quickly — or having it towed straight to your chosen shop — keeps fees down.'],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'            => 'BlogPosting',
            '@id'              => $postUrl . '#article',
            'headline'         => 'What to Do After a Car Accident in Fort Bend County',
            'description'      => $pageDescription,
            'image'            => $heroImage,
            'datePublished'    => '2026-06-20',
            'dateModified'     => '2026-06-20',
            'author'           => [
                '@type' => 'Organization',
                'name'  => $siteName,
                '@id'   => $domain . '/#business',
            ],
            'publisher'        => [
                '@id' => $domain . '/#business',
            ],
            'url'              => $postUrl,
            'mainEntityOfPage' => $postUrl,
            'articleSection'   => 'Roadside Help',
            'keywords'         => 'what to do after a car accident Fort Bend County, car accident checklist Texas, Texas crash report CR-3, CR-2 blue form, who chooses the tow company after an accident Texas, accident towing Richmond TX, I-69 US-59 accident, Grand Parkway crash, vehicle storage facility Texas',
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $domain . '/blog/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'What to Do After a Car Accident in Fort Bend County', 'item' => $postUrl],
            ],
        ],
        generateFAQSchema($postFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* Post-specific styles only — the shared blog template
   (.blog-hero, .blog-layout, .blog-prose, .blog-toc,
   .blog-sidebar-cta, .related-articles) lives in framework.css */
.blog-hero__bg { position: absolute; inset: 0; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 40%; opacity: 0.28; transform: scale(1.04); }
.blog-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(170deg, rgba(var(--color-secondary-rgb), 0.55) 0%, rgba(var(--color-primary-rgb), 0.9) 55%, rgba(var(--color-primary-rgb), 1) 100%); z-index: 1; }

/* Numbered crash-scene steps */
.crash-steps { list-style: none; counter-reset: crash-step; margin: var(--space-8) 0 var(--space-10); padding: 0; display: flex; flex-direction: column; gap: var(--space-4); }
.crash-steps li { counter-increment: crash-step; position: relative; padding: var(--space-5) var(--space-6) var(--space-5) calc(var(--space-6) + 52px); background: rgba(var(--color-primary-rgb), 0.04); border: 1px solid rgba(var(--color-primary-rgb), 0.08); border-left: 4px solid var(--color-accent); border-radius: 0 var(--radius-lg) var(--radius-lg) 0; }
.crash-steps li::before { content: counter(crash-step); position: absolute; left: var(--space-4); top: var(--space-5); width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; background: var(--color-primary); color: var(--color-white); font-family: var(--font-heading); font-size: var(--font-size-sm); border-radius: var(--radius-full); box-shadow: var(--shadow-md); }
.crash-steps li strong { display: block; font-family: var(--font-heading); font-size: var(--font-size-base); color: var(--color-primary); margin-bottom: var(--space-1); }
.crash-steps li p { margin: 0; font-size: var(--font-size-sm); line-height: 1.65; color: var(--color-gray-dark); }

/* Jurisdiction split card */
.jurisdiction-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-4); margin: var(--space-6) 0 var(--space-8); }
.jurisdiction-card { padding: var(--space-5) var(--space-6); border-radius: var(--radius-lg); border: 1px solid rgba(var(--color-primary-rgb), 0.1); background: rgba(var(--color-secondary-rgb), 0.06); }
.jurisdiction-card h4 { font-size: var(--font-size-sm); text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-primary); margin-bottom: var(--space-2); }
.jurisdiction-card p { font-size: var(--font-size-sm); line-height: 1.65; color: var(--color-gray-dark); margin: 0; }

/* Bottom CTA block */
.post-cta { margin: var(--space-10) 0 var(--space-4); padding: var(--space-8); border-radius: var(--radius-xl); background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%); color: var(--color-white); text-align: center; box-shadow: var(--shadow-lg); }
.post-cta h3 { color: var(--color-white); font-size: var(--font-size-2xl); margin-bottom: var(--space-3); }
.post-cta p { color: rgba(255, 255, 255, 0.85); max-width: 55ch; margin: 0 auto var(--space-5); line-height: 1.7; }
.post-cta .btn-row { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* FAQ cards on this post */
.post-faq { margin-top: var(--space-6); display: flex; flex-direction: column; gap: var(--space-4); }
.post-faq .faq-item { background: rgba(var(--color-primary-rgb), 0.03); border: 1px solid rgba(var(--color-primary-rgb), 0.08); border-radius: var(--radius-lg); padding: var(--space-5) var(--space-6); }
.post-faq .faq-item h3 { font-size: var(--font-size-lg); color: var(--color-primary); margin-bottom: var(--space-2); }
.post-faq .faq-item p { margin: 0; line-height: 1.7; color: var(--color-gray-dark); }

@media (max-width: 767px) {
  .jurisdiction-grid { grid-template-columns: 1fr; }
  .crash-steps li { padding-left: calc(var(--space-4) + 48px); }
}
</style>

<!-- ════════════════════════════════════════════════════
     BLOG HERO
════════════════════════════════════════════════════ -->
<section class="blog-hero" aria-label="Blog post header">
  <div class="blog-hero__bg" aria-hidden="true"></div>
  <div class="blog-hero__inner">
    <div class="container">

      <nav class="blog-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="blog-hero__breadcrumb-sep" aria-hidden="true">&rsaquo;</span>
        <a href="/blog/">Blog</a>
        <span class="blog-hero__breadcrumb-sep" aria-hidden="true">&rsaquo;</span>
        <span>What to Do After a Car Accident</span>
      </nav>

      <span class="blog-hero__category">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
        <?php echo htmlspecialchars($postCategory); ?>
      </span>

      <h1 class="blog-hero__title">What to Do After a Car Accident in Fort Bend County</h1>

      <div class="blog-hero__meta">
        <div class="blog-hero__meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <time datetime="<?php echo $postDateISO; ?>"><?php echo $postDate; ?></time>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          <span><?php echo htmlspecialchars($postAuthor); ?></span>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <span><?php echo $postReadtime; ?></span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     ARTICLE CONTENT
════════════════════════════════════════════════════ -->
<article class="blog-article" itemscope itemtype="https://schema.org/BlogPosting">
  <meta itemprop="headline"      content="What to Do After a Car Accident in Fort Bend County">
  <meta itemprop="datePublished" content="<?php echo $postDateISO; ?>">
  <meta itemprop="author"        content="<?php echo htmlspecialchars($postAuthor); ?>">
  <meta itemprop="image"         content="<?php echo htmlspecialchars($heroImage); ?>">

  <div class="container">
    <div class="blog-layout">

      <!-- ── MAIN ARTICLE BODY ───────────────────────────────────── -->
      <div class="blog-prose" itemprop="articleBody">

        <a href="/blog/" class="back-to-blog">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
          Back to Blog
        </a>

        <img
          src="<?php echo htmlspecialchars($heroImage); ?>"
          sizes="(max-width: 768px) 100vw, 720px"
          alt="Twin Cities Towing INC flatbed loading an accident-damaged vehicle at a crash scene in Fort Bend County, Texas"
          class="blog-featured-img"
          width="1200"
          height="800"
          loading="eager"
          fetchpriority="high">

        <!-- Answer-first intro -->
        <p>
          Just been in a crash? Move yourself and your passengers to a safe spot away from traffic, call 911 if anyone is hurt, document the scene with photos, then arrange accident towing. Twin Cities Towing INC responds to accident scenes across Fort Bend County 24/7 — call <a href="tel:+12819351113">(281) 935-1113</a> once the scene is secure.
        </p>
        <p>
          The decisions you make at the scene affect your safety, your insurance claim, and what the recovery costs you. This guide walks through the whole sequence for Fort Bend County drivers — from the first minute on the shoulder of I-69/US-59 to picking your car up from a storage lot. For the broader picture, see our <a href="/blog/towing-richmond-tx-complete-guide/">complete guide to towing in Richmond, TX</a>.
        </p>
        <p>
          <em>This article is general information for drivers, not legal advice. For questions about fault, liability, or a specific claim, talk to your insurer or a licensed Texas attorney.</em>
        </p>

        <!-- ── IMMEDIATE STEPS ─────────────────────────────────────── -->
        <h2 id="immediate-steps">What Should You Do in the First Ten Minutes After a Crash?</h2>
        <p>
          Get out of the traffic lane, check for injuries, and make the scene visible before you do anything else. On high-speed corridors like I-69/US-59, the Grand Parkway (SH-99), FM 762, or FM 359, a secondary collision is the biggest danger after the first one — so safety comes before photos, paperwork, or phone calls to anyone but 911.
        </p>

        <ol class="crash-steps">
          <li>
            <strong>Stop and get clear of traffic</strong>
            <p>Texas law requires you to stop. If the car is drivable, pull onto the shoulder, a median crossover, or the nearest parking lot — do not stay in a live lane on US-59 or the Grand Parkway to "preserve the scene." If it will not move, leave it, exit away from traffic, and get behind a barrier.</p>
          </li>
          <li>
            <strong>Check for injuries and call 911</strong>
            <p>Check yourself, your passengers, and the other driver. If anyone is hurt — even "just shaken up" — call 911. Adrenaline masks injuries, so err on the side of a medical check.</p>
          </li>
          <li>
            <strong>Make yourself visible</strong>
            <p>Hazard lights on immediately. If you carry reflective triangles or flares and can place them safely, set them well behind the vehicles — especially at night on unlit stretches of FM 762 or FM 359.</p>
          </li>
          <li>
            <strong>Exchange information</strong>
            <p>Name, phone number, driver license number, license plate, and insurance carrier with policy number — for every driver involved. Photograph their insurance card instead of copying it by hand.</p>
          </li>
          <li>
            <strong>Photograph everything</strong>
            <p>Wide shots of the whole scene, close-ups of damage on every vehicle, skid marks, debris, traffic signs, and the roadway itself. Capture the location context — a mile marker, cross street, or exit sign.</p>
          </li>
          <li>
            <strong>Get witness and officer details</strong>
            <p>Ask witnesses for a name and phone number before they drive off. When an officer arrives, note their name, agency, and the crash report number they give you.</p>
          </li>
          <li>
            <strong>Arrange your tow</strong>
            <p>If the vehicle cannot be driven safely, call Twin Cities Towing INC at <a href="tel:+12819351113">(281) 935-1113</a> for priority <a href="/services/accident-towing/">accident towing</a> dispatch anywhere in Fort Bend County.</p>
          </li>
        </ol>

        <!-- ── WHEN POLICE MUST BE CALLED ──────────────────────────── -->
        <h2 id="when-to-call-police">When Does Texas Law Require You to Call the Police?</h2>
        <p>
          Texas requires a crash to be reported to law enforcement when it involves injury, death, or apparent damage that leaves a vehicle unable to be normally and safely driven. A police-investigated crash report is also required when total apparent damage reaches $1,000 — a threshold almost any modern bumper repair exceeds. In practice: if the crash is more than a parking-lot tap, call.
        </p>
        <p>
          There is a practical reason to call beyond the legal one. The officer's crash report (the CR-3, covered below) is the single most useful document in your insurance claim, and it only exists if an officer investigates. On a busy corridor, law enforcement also manages traffic around the scene — which protects you while you wait for the tow.
        </p>
        <p>
          Who shows up depends on where you crash. Fort Bend County has overlapping jurisdictions, and knowing which agency worked your crash matters later when you request the report.
        </p>

        <div class="jurisdiction-grid">
          <div class="jurisdiction-card">
            <h4>Inside Richmond City Limits</h4>
            <p>The Richmond Police Department typically investigates crashes on city streets — around the Historic Downtown grid, Jackson Street, and the US-90A corridor through town. Request your report through Richmond PD's records division.</p>
          </div>
          <div class="jurisdiction-card">
            <h4>Unincorporated Fort Bend County</h4>
            <p>The Fort Bend County Sheriff's Office covers unincorporated areas — much of the FM 762 and FM 359 mileage, plus neighborhoods outside city limits. DPS troopers may work crashes on I-69/US-59 and the Grand Parkway. Note the agency on scene so you request the report from the right records office.</p>
          </div>
        </div>

        <!-- ── EXCHANGING INFO + DOCUMENTING ───────────────────────── -->
        <h2 id="exchange-and-document">What Should You Document Beyond the Basics?</h2>
        <p>
          Beyond the driver exchange, document the conditions: time of day, weather, traffic, and anything unusual — a missing sign, standing water, construction barrels. Do not discuss fault at the scene or apologize reflexively; state facts to the officer and let the investigation assign responsibility.
        </p>
        <p>
          Two habits pay off later. Photograph your car's interior damage and any deployed airbags — insurers ask. And before the tow truck leaves, photograph the vehicle on the flatbed and note the destination address, so you always know exactly where the car went and when.
        </p>

        <!-- ── TEXAS CRASH REPORTS ─────────────────────────────────── -->
        <h2 id="texas-crash-report">How Do Texas Crash Reports Work — the CR-2 and the CR-3?</h2>
        <p>
          Texas has two crash report forms. The CR-3 is the official peace officer's crash report, filed with TxDOT whenever an officer investigates a qualifying crash. The CR-2 — the "blue form" — is the driver's own crash report for wrecks no officer investigated. Since 2017, TxDOT no longer collects CR-2s, but the form is still worth completing for your records and your insurer.
        </p>
        <p>
          To get your CR-3, use TxDOT's online Crash Report purchase system. Reports are generally available about ten days after the crash; a standard copy runs about $6 and a certified copy about $8. You will need basic details — date, county, and a driver name — to find it. Your insurance adjuster will ask for the report number early in the claim, so order it promptly.
        </p>
        <p>
          If no officer came to the scene — common for minor two-car wrecks that get moved off the road quickly — download the CR-2 from TxDOT, fill it out while your memory is fresh, and keep a copy with your photos. It becomes your contemporaneous record if the other driver's story changes later.
        </p>

        <!-- ── WHO CHOOSES THE TOW COMPANY ─────────────────────────── -->
        <h2 id="who-chooses-tow">Who Chooses the Tow Company After a Wreck — You or the Police?</h2>
        <p>
          In most situations, you do. Texas law distinguishes between consent tows — where you pick the company and the destination — and police-ordered tows, which an officer can direct when a vehicle is blocking traffic, creating a hazard, or when the driver is injured and cannot make arrangements. If your car is on the shoulder and you are able to decide, you can call the towing company you want.
        </p>
        <p>
          The distinction matters financially. A consent tow goes once, directly to the body shop or driveway you choose, at a rate you confirmed on the phone. A police-ordered tow goes to a licensed vehicle storage facility, where daily storage charges start stacking on top of the tow itself — and then you still need a second tow to get the car to a repair shop. If the officer needs the lane cleared immediately, that call is theirs to make; but when you have the option, requesting your own tow usually saves both money and a trip to the storage lot. We break down the consent rules, notice requirements, and fee protections in detail in <a href="/blog/texas-towing-laws-your-rights/">Texas towing laws and your rights</a>.
        </p>

        <!-- ── HOW ACCIDENT TOWING WORKS ───────────────────────────── -->
        <h2 id="how-accident-towing-works">How Does Accident Towing Actually Work in Fort Bend County?</h2>
        <p>
          Accident tows are priority dispatch: Twin Cities Towing INC targets 20–40 minute arrival across Fort Bend County, faster when lanes are blocked on I-69/US-59 or the Grand Parkway. The driver secures the scene, coordinates with the officer on clearance, winches the vehicle onto a flatbed, and delivers it to the shop you choose — with documentation for your insurer.
        </p>
        <p>
          Crash-damaged cars usually cannot be towed the way a broken-down car can. Seized wheels, blown tires, and bent suspension mean the vehicle will not roll onto a wheel-lift — it has to be winched up the deck of a flatbed under control, without dragging anything that adds damage. That is why <a href="/services/flatbed-towing/">flatbed towing</a> is the default for collision recovery, and why our <a href="/services/accident-towing/">accident towing</a> trucks carry winches rated for non-rolling loads. Our drivers work alongside the Fort Bend County Sheriff's Office, Richmond PD, and DPS regularly, so scene protocol — where to stage the truck, when the lane reopens, what the officer needs before releasing the vehicle — is routine, not improvised.
        </p>
        <p>
          Since 2011 we have cleared crash scenes from the US-59 frontage roads in Rosenberg to the Grand Parkway interchanges near Greatwood. Tell the dispatcher your location, whether the car rolls, and where you want it delivered — a body shop, a dealership, or your home if you have not chosen a shop yet.
        </p>

        <!-- ── INSURANCE ───────────────────────────────────────────── -->
        <h2 id="insurance">How Should You Handle the Insurance Claim?</h2>
        <p>
          Report the crash to your insurer the same day if you can, even when the other driver seems at fault. Give facts — location, time, vehicles, the investigating agency — and let the adjuster work from the CR-3 report. Keep every receipt: towing invoice, storage fees, rental car. Photographed evidence plus the officer's report does most of the persuading for you.
        </p>
        <p>
          A few Texas-specific notes. If the other driver was uninsured, your own uninsured motorist coverage responds — one more reason to involve police and get the report on record. Scene towing is normally part of the collision claim, and we provide the itemized invoice insurers expect. And if an adjuster steers you toward a preferred shop, remember the repair-shop choice in Texas is yours, just like the tow.
        </p>

        <!-- ── STORAGE LOT PICKUP ──────────────────────────────────── -->
        <h2 id="storage-lot-pickup">How Do You Get Your Car Back From a Storage Lot?</h2>
        <p>
          If your vehicle went to a vehicle storage facility after a police-ordered tow, go as soon as possible — storage fees accrue daily from the moment it arrives. Bring a government-issued ID and proof you own or control the vehicle, such as the title, registration, or insurance card. Licensed Texas storage facilities must accept payment by card, and the facility is required to give you an itemized statement of charges.
        </p>
        <p>
          You can retrieve essential personal property — medication, documents, child seats — even if you are not releasing the car yet. If law enforcement placed an investigative hold on the vehicle, the facility cannot release it until the agency clears the hold, so call the investigating department first. Once released, the car does not have to be driven out damaged: schedule a <a href="/services/car-towing/">car towing</a> pickup from the lot to your repair shop so it only moves once.
        </p>
        <p>
          The best prevention: when you have the choice at the scene, have the vehicle towed directly to its final destination. A single consent tow — with <a href="/services/roadside-assistance/">roadside assistance</a> on standby if the car turns out to be drivable — costs a fraction of a storage-lot detour.
        </p>

        <!-- ── FAQ ─────────────────────────────────────────────────── -->
        <h2 id="faq">Fort Bend County Accident Towing FAQs</h2>
        <div class="post-faq">
          <?php foreach ($postFaqs as $faq): ?>
          <div class="faq-item">
            <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Bottom CTA -->
        <div class="post-cta">
          <h3>In a Wreck Right Now? We Answer 24/7.</h3>
          <p>Twin Cities Towing INC has cleared accident scenes across Richmond, Rosenberg, and greater Fort Bend County since 2011 — priority dispatch, flatbed recovery, and insurance-ready documentation on every accident call.</p>
          <div class="btn-row">
            <a href="tel:+12819351113" class="btn btn-accent btn-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.58 1h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Call (281) 935-1113
            </a>
            <a href="/services/accident-towing/" class="btn btn-outline-white btn-lg">Accident Towing Service</a>
          </div>
        </div>

      </div><!-- /.blog-prose -->

      <!-- ── SIDEBAR ─────────────────────────────────────────────── -->
      <aside class="blog-sidebar" aria-label="Article sidebar">

        <!-- Table of Contents -->
        <div class="blog-toc">
          <h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
            In This Article
          </h4>
          <ul class="toc-list" role="list">
            <li><a href="#immediate-steps">First Ten Minutes</a></li>
            <li><a href="#when-to-call-police">When to Call Police</a></li>
            <li><a href="#exchange-and-document">Documenting the Scene</a></li>
            <li><a href="#texas-crash-report">CR-2 &amp; CR-3 Reports</a></li>
            <li><a href="#who-chooses-tow">Who Picks the Tow Company</a></li>
            <li><a href="#how-accident-towing-works">How Accident Towing Works</a></li>
            <li><a href="#insurance">Insurance Claims</a></li>
            <li><a href="#storage-lot-pickup">Storage Lot Pickup</a></li>
            <li><a href="#faq">FAQs</a></li>
          </ul>
        </div>

        <!-- Sidebar phone CTA -->
        <div class="blog-sidebar-cta">
          <h4>Accident Scene? Call Now.</h4>
          <p>Priority dispatch across Fort Bend County, 24 hours a day. Flatbed recovery for vehicles that can't roll.</p>
          <a href="tel:+12819351113" class="btn btn-accent">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.58 1h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            (281) 935-1113
          </a>
        </div>

        <!-- Related Services -->
        <div class="blog-sidebar-card">
          <h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
            Related Services
          </h4>
          <ul class="toc-list" role="list">
            <li><a href="/services/accident-towing/">Accident Towing</a></li>
            <li><a href="/services/flatbed-towing/">Flatbed Towing</a></li>
            <li><a href="/services/emergency-towing/">Emergency Towing</a></li>
            <li><a href="/services/car-towing/">Car Towing</a></li>
            <li><a href="/services/roadside-assistance/">Roadside Assistance</a></li>
            <li><a href="/contact/">Request a Tow</a></li>
          </ul>
        </div>

      </aside><!-- /.blog-sidebar -->

    </div><!-- /.blog-layout -->
  </div><!-- /.container -->
</article>

<!-- ════════════════════════════════════════════════════════════════
     RELATED ARTICLES — cards pulled from includes/blog-data.php
════════════════════════════════════════════════════════════════ -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
$currentSlug = basename(__DIR__);
$related = array_values(array_filter(
    $blogPosts,
    function ($p) use ($currentSlug) { return $p['slug'] !== $currentSlug; }
));
// Same-category posts first (usort is stable in PHP 8+, registry order preserved within groups)
usort($related, function ($a, $b) use ($postCategory) {
    return (int)(($b['category'] ?? '') === $postCategory) <=> (int)(($a['category'] ?? '') === $postCategory);
});
$relatedPosts = array_slice($related, 0, 3);
?>
<?php if (!empty($relatedPosts)): ?>
<section class="related-articles" aria-label="Related articles">
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">Keep Reading</span>
      <h2>Related <span class="text-accent">Articles</span></h2>
    </div>

    <div class="related-articles__grid" data-p1-dynamic>
      <?php foreach ($relatedPosts as $ridx => $rp): ?>
      <article class="blog-card reveal-up reveal-delay-<?php echo min($ridx + 1, 4); ?>" aria-label="<?php echo htmlspecialchars($rp['title']); ?>">

        <div class="blog-card__image-wrap">
          <img
            src="<?php echo htmlspecialchars($rp['image']); ?>"
            alt="<?php echo htmlspecialchars($rp['alt']); ?>"
            width="800"
            height="450"
            loading="lazy">
          <span class="blog-card__category-badge"><?php echo htmlspecialchars($rp['category']); ?></span>
        </div>

        <div class="blog-card__body">
          <div class="blog-card__meta">
            <div class="blog-card__meta-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              <time datetime="<?php echo htmlspecialchars($rp['dateISO']); ?>"><?php echo htmlspecialchars($rp['date']); ?></time>
            </div>
            <div class="blog-card__meta-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span><?php echo htmlspecialchars($rp['readtime']); ?></span>
            </div>
          </div>

          <h3>
            <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/">
              <?php echo htmlspecialchars($rp['title']); ?>
            </a>
          </h3>

          <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/" class="blog-card__read-more">
            Read Article
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.related-articles__grid -->

  </div>
</section>
<?php endif; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
