<?php
/**
 * Blog Post: Towing in Richmond, TX — The Complete 2026 Guide (PILLAR)
 * Twin Cities Towing INC | Page One Insights v6.1
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing in Richmond, TX: The Complete 2026 Guide';
$pageDescription = 'How towing works in Richmond, TX: local tow costs, response times on US-59 and SH-99, your rights under Texas law, and how to pick a Fort Bend County company.';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710964435-vw221x-o__26_.jpg';
$currentPage     = 'blog';
$ogType          = 'article';

$postDate        = 'July 18, 2026';
$postDateISO     = '2026-07-18';
$postAuthor      = 'Twin Cities Towing INC';
$postCategory    = 'Towing Guides';
$postUrl         = $domain . '/blog/towing-richmond-tx-complete-guide/';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710964435-vw221x-o__26_.jpg';

// FAQ items — single source for BOTH the visible FAQ section and FAQPage schema
$postFaqs = [
    [
        'q' => 'How much does a tow cost in Richmond, TX?',
        'a' => 'Most standard local tows in Richmond run about $75–$125 within Fort Bend County. Longer distances, after-hours calls, heavy-duty trucks, and difficult recoveries cost more. A reputable company quotes the price before dispatching a truck, so you know the number before your car is loaded.',
    ],
    [
        'q' => 'How long does a tow truck take to arrive in Richmond?',
        'a' => 'Typical response time in the Richmond–Rosenberg area is 20–40 minutes. Breakdowns on US-59/I-69 or the SH-99 Grand Parkway are prioritized because stopped vehicles on high-speed corridors are dangerous. Rush hour, storms, and calls far outside town can extend that window.',
    ],
    [
        'q' => 'Can I choose where my car gets towed?',
        'a' => 'Yes. When you call for a tow yourself, it is a consent tow — you decide the destination: your mechanic, a dealership, a body shop, or your driveway. Only nonconsent tows ordered by police or a property owner take that choice away, and even those are regulated by Texas law with capped fees.',
    ],
    [
        'q' => 'Is towing available overnight and on holidays in Richmond?',
        'a' => 'Twin Cities Towing INC dispatches 24 hours a day, 7 days a week, including holidays, and has since 2011. Breakdowns do not keep business hours — a 2 a.m. flat on FM 762 or a Christmas morning dead battery gets the same dispatch as a Tuesday afternoon call.',
    ],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'            => 'BlogPosting',
            '@id'              => $postUrl . '#article',
            'headline'         => 'Towing in Richmond, TX: The Complete 2026 Guide',
            'description'      => $pageDescription,
            'image'            => $heroImage,
            'datePublished'    => $postDateISO,
            'dateModified'     => $postDateISO,
            'author'           => [
                '@type' => 'Organization',
                'name'  => 'Twin Cities Towing INC',
                '@id'   => $domain . '/#business',
            ],
            'publisher'        => ['@id' => $domain . '/#business'],
            'url'              => $postUrl,
            'mainEntityOfPage' => $postUrl,
            'articleSection'   => $postCategory,
            'keywords'         => 'towing Richmond TX, towing service Richmond TX, tow truck Richmond, towing cost Richmond TX, 24 hour towing Fort Bend County, flatbed towing Richmond, Texas towing laws, roadside assistance Richmond TX',
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $domain . '/blog/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Towing in Richmond, TX: The Complete 2026 Guide', 'item' => $postUrl],
            ],
        ],
        generateFAQSchema($postFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* Post-specific styles only — the shared blog article template
   (hero, article layout, TOC, sidebar, CTA blocks, related cards)
   lives in framework.css. This block covers this post's unique flourishes. */
.blog-hero { position: relative; min-height: 52vh; display: flex; align-items: flex-end; padding-top: calc(var(--nav-height, 80px) + var(--space-8)); overflow: hidden; background: var(--color-primary); }
.blog-hero__bg { position: absolute; inset: 0; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 30%; opacity: 0.35; transform: scale(1.05); }
.blog-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(var(--color-primary-rgb), 0.5) 0%, rgba(var(--color-primary-rgb), 0.9) 65%, rgba(var(--color-primary-rgb), 1) 100%); z-index: 1; }
.blog-hero__title { font-family: var(--font-heading); font-size: clamp(var(--font-size-2xl), 4vw, var(--font-size-5xl)); font-weight: 800; line-height: 1.12; letter-spacing: -0.02em; color: var(--color-white); text-wrap: balance; max-width: 22ch; margin-bottom: var(--space-10); }
.blog-hero__title em { font-style: normal; color: var(--color-accent); }

/* Portrait featured photo — this post's hero shot is 3:4, so it floats
   right inside the intro instead of spanning the column */
.article-featured-img--portrait { max-width: 340px; border-radius: var(--radius-lg); box-shadow: var(--shadow-card); }
@media (min-width: 768px) { .article-featured-img--portrait { float: right; margin: 0 0 var(--space-4) var(--space-6); } }
@media (max-width: 767px) { .article-featured-img--portrait { margin: 0 auto var(--space-6); } }

/* Highway callout — unique to this pillar's corridor coverage section */
.highway-callout { border-left: 4px solid var(--color-accent); background: rgba(var(--color-primary-rgb), 0.05); border-radius: var(--radius-md); padding: var(--space-5) var(--space-6); margin: var(--space-6) 0; }
.highway-callout h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); color: var(--color-primary); }
.highway-callout p { margin: 0; color: var(--color-gray-dark); font-size: var(--font-size-sm); }

/* Quick cost-range strip — pillar-only flourish */
.cost-strip { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-4); margin: var(--space-6) 0; }
.cost-strip__item { background: var(--color-light); border: 1px solid var(--color-gray-light); border-radius: var(--radius-md); padding: var(--space-4); text-align: center; }
.cost-strip__price { display: block; font-family: var(--font-heading); font-size: var(--font-size-xl); color: var(--color-primary); margin-bottom: var(--space-1); }
.cost-strip__label { font-size: var(--font-size-xs); color: var(--color-gray); text-transform: uppercase; letter-spacing: 0.06em; }
@media (max-width: 600px) { .cost-strip { grid-template-columns: 1fr; } }

.sidebar-cta h4 { font-family: var(--font-heading); font-size: var(--font-size-base); color: var(--color-white); margin-bottom: var(--space-2); }

/* FAQ inside the article body — single column, roomier than site-wide grid */
.article-faq .faq-item { margin-bottom: var(--space-4); }
@media (max-width: 767px) { .blog-hero { min-height: 46vh; } }
</style>

<!-- ════════════════════════════════════════════════════
     BLOG HERO
════════════════════════════════════════════════════ -->
<section class="blog-hero" aria-label="Blog post header">
  <div class="blog-hero__bg" aria-hidden="true"></div>
  <div class="blog-hero__inner">
    <div class="container">

      <!-- Breadcrumb -->
      <nav class="blog-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="blog-hero__breadcrumb-sep" aria-hidden="true">›</span>
        <a href="/blog/">Blog</a>
        <span class="blog-hero__breadcrumb-sep" aria-hidden="true">›</span>
        <span>Towing in Richmond, TX: The Complete 2026 Guide</span>
      </nav>

      <span class="blog-hero__category">
        <svg aria-hidden="true" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/></svg>
        <?php echo htmlspecialchars($postCategory); ?>
      </span>

      <h1 class="blog-hero__title">
        Towing in <em>Richmond, TX</em>: The Complete 2026 Guide
      </h1>

      <div class="blog-hero__meta">
        <div class="blog-hero__meta-item">
          <svg aria-hidden="true" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
          <time datetime="<?php echo $postDateISO; ?>"><?php echo $postDate; ?></time>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <svg aria-hidden="true" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          <span><?php echo htmlspecialchars($postAuthor); ?></span>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <svg aria-hidden="true" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          <span>9 min read</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SVG transition from hero to article -->
<div class="divider-blog-top" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     ARTICLE CONTENT
════════════════════════════════════════════════════ -->
<article class="article-wrap" itemscope itemtype="https://schema.org/BlogPosting">
  <meta itemprop="headline"      content="Towing in Richmond, TX: The Complete 2026 Guide">
  <meta itemprop="datePublished" content="<?php echo $postDateISO; ?>">
  <meta itemprop="author"        content="<?php echo htmlspecialchars($postAuthor); ?>">
  <meta itemprop="image"         content="<?php echo htmlspecialchars($heroImage); ?>">

  <div class="container">
    <div class="article-layout">

      <!-- ── MAIN ARTICLE BODY ───────────────────────────────────── -->
      <div class="article-body" itemprop="articleBody">

        <a href="/blog/" class="back-to-blog">
          <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
          Back to Blog
        </a>

        <!-- Featured image (portrait — floats right on desktop) -->
        <img
          src="<?php echo htmlspecialchars($heroImage); ?>"
          alt="Twin Cities Towing INC tow truck loading a car onto a flatbed in Richmond, TX"
          class="article-featured-img article-featured-img--portrait"
          width="750"
          height="1000"
          loading="eager"
          fetchpriority="high">

        <!-- Answer-first intro -->
        <p>
          Here is how towing works in Richmond, TX: you call a dispatcher, a truck reaches you in roughly 20–40 minutes, and a standard local tow costs about $75–$125 within Fort Bend County. The price, the equipment, and your legal rights all depend on details this guide walks through one at a time.
        </p>
        <p>
          Twin Cities Towing INC has been running trucks out of Richmond since 2011, covering US-59/I-69, the SH-99 Grand Parkway, FM 762, the Westpark Tollway, and every neighborhood street in between. This pillar guide collects fifteen years of dispatch experience into one page — what kind of tow you need, what it should cost, what to do after a wreck, and when you don't need a tow at all.
        </p>

        <!-- ── TYPES OF TOWING ───────────────────────────────────── -->
        <h2 id="types-of-towing">What Types of Towing Are Available in Richmond?</h2>

        <p>
          Richmond towing companies run three main service classes: light-duty towing for cars and SUVs, flatbed towing for low-clearance and all-wheel-drive vehicles, and heavy-duty truck towing for commercial rigs. The right class depends on what you drive, what's wrong with it, and how far it needs to go.
        </p>
        <p>
          <a href="/services/light-duty-towing/">Light-duty towing</a> is the workhorse of the fleet — wheel-lift trucks that pick up sedans, crossovers, and pickups by the drive wheels. It's fast to load and usually the least expensive option for a running or front-wheel-drive vehicle headed to a shop across town.
        </p>
        <p>
          <a href="/services/flatbed-towing/">Flatbed towing</a> carries the entire vehicle on a hydraulic deck with all four wheels off the pavement. It's mandatory for AWD and 4WD drivetrains, lowered cars, and anything with collision damage. If you're weighing the two methods, our breakdown of <a href="/blog/flatbed-vs-wheel-lift-towing/">flatbed versus wheel-lift towing</a> covers exactly when each one is the right call — and when insisting on a flatbed is worth a few extra dollars.
        </p>
        <p>
          At the heavy end, <a href="/services/truck-towing/">truck towing</a> handles box trucks, work trucks, and commercial vehicles that a standard wrecker can't lift. Fort Bend County's construction boom means a lot of loaded F-350s and landscaping trailers on FM 762 and the Grand Parkway — recovering those takes different equipment and a driver rated for it.
        </p>
        <p>
          Two specialty cases round out the menu. Motorcycles need dedicated chocks, soft straps, and a deck-level load — a bike ratcheted down like a car ends up with bent forks and scratched fairings, which is why motorcycle transport is its own service rather than a footnote. And breakdown towing, the most common call we run, is the routine version of all of the above: the car that overheated on the Westpark Tollway or died at a light in downtown Richmond, picked up and delivered to the shop of your choice without drama.
        </p>

        <!-- ── COST ──────────────────────────────────────────────── -->
        <h2 id="towing-cost">What Does Towing Cost in Richmond, TX?</h2>

        <p>
          A standard local tow in Richmond costs roughly $75–$125 for typical distances inside Fort Bend County. Expect the total to climb with mileage beyond the local zone, heavy-duty equipment, winch-out recovery work, or difficult access. Any legitimate company quotes the price on the phone before a truck rolls.
        </p>

        <div class="cost-strip" aria-label="Typical Richmond towing price ranges">
          <div class="cost-strip__item">
            <span class="cost-strip__price">$75–$125</span>
            <span class="cost-strip__label">Standard local tow</span>
          </div>
          <div class="cost-strip__item">
            <span class="cost-strip__price">+ per mile</span>
            <span class="cost-strip__label">Beyond the local zone</span>
          </div>
          <div class="cost-strip__item">
            <span class="cost-strip__price">Quoted first</span>
            <span class="cost-strip__label">Recovery &amp; heavy duty</span>
          </div>
        </div>

        <p>
          Three factors move the number more than anything else: distance (a tow from Richmond to a Houston dealership costs more than one to a shop in Rosenberg), vehicle type (heavy-duty and specialty vehicles need bigger trucks), and situation (a car in a ditch off FM 762 needs winching before it needs towing). Time of day matters less than people assume with a true 24/7 operator, since overnight dispatch is part of the normal rate structure rather than an emergency surcharge.
        </p>
        <p>
          Check your coverage before you assume you're paying out of pocket. Many auto policies include towing reimbursement as a cheap rider, most manufacturer warranties bundle roadside coverage for the first several years, and memberships like AAA cover a set number of miles per call. Even when a plan "covers" towing, you can usually still pick the operator — the plan reimburses you, or pays its contracted rate and you cover any difference. Keep the receipt either way.
        </p>
        <p>
          We published a full line-item breakdown — base hook fees, mileage math, winch-out pricing, and the questions that expose padded invoices — in our companion post on <a href="/blog/towing-cost-richmond-tx/">what towing costs in Richmond, TX</a>. If you only read one pricing resource before you call anyone, make it that one.
        </p>

        <!-- ── EMERGENCY RESPONSE ────────────────────────────────── -->
        <h2 id="emergency-response">How Fast Can a Tow Truck Reach You on US-59 or SH-99?</h2>

        <p>
          Typical emergency response in the Richmond–Rosenberg corridor is 20–40 minutes, and highway calls get priority. A vehicle stopped on the US-59/I-69 mainlanes or the SH-99 Grand Parkway is a collision risk every minute it sits, so dispatchers route the nearest available truck to freeway breakdowns first.
        </p>
        <p>
          Location precision is the biggest thing you control. On US-59, note the direction of travel and the nearest exit — Williams Way, FM 762, or Reading Road narrows the search from miles to hundreds of yards. On SH-99, the tolling gantries and cross-street overpasses work the same way. If you can't tell where you are, most phones will share GPS coordinates straight from the map app, and our <a href="/services/emergency-towing/">emergency towing</a> dispatcher can work from those.
        </p>

        <div class="highway-callout">
          <h3>Broken down on the highway? Do this first.</h3>
          <p>Get the vehicle onto the shoulder if it will still roll, turn on hazards, and exit on the side away from traffic. Stand well behind the guardrail — never between your car and the traffic lane. On the 59/69 corridor through Richmond, shoulder space narrows in the construction zones, so stay in the vehicle with your seatbelt on if there's nowhere safe to stand.</p>
        </div>

        <p>
          Rush hour and Gulf Coast storms stretch response windows for every operator in the county — the same flooded feeder roads that stalled your car slow the tow truck down too. An honest dispatcher tells you the realistic ETA up front instead of promising fifteen minutes and arriving in fifty.
        </p>

        <!-- ── AFTER AN ACCIDENT ─────────────────────────────────── -->
        <h2 id="after-accident">What Should You Do After an Accident in Fort Bend County?</h2>

        <p>
          After a crash: move to safety, call 911 if anyone is hurt, exchange information, photograph everything, and then arrange the tow yourself if you're able. That last step matters — the driver who calls their own towing company keeps control of where the vehicle goes and what the tow costs.
        </p>
        <p>
          Accident scenes attract trucks you didn't call. Texas law prohibits soliciting tows at an accident scene, but it still happens on busy corridors. You are never obligated to use a wrecker that simply shows up. If police order the roadway cleared, an officer-called tow may take the vehicle to a storage lot — otherwise, you choose the operator and the destination, whether that's a body shop on FM 762 or your own driveway.
        </p>
        <p>
          <a href="/services/accident-towing/">Accident towing</a> is different work from a routine breakdown tow: collision-damaged vehicles often can't roll, leak fluids, or have crushed panels that rule out a wheel lift, which is why wrecked cars almost always ride a flatbed. For the complete step-by-step — insurance calls, photo checklists, and the storage-lot fees to avoid — read our full guide on <a href="/blog/what-to-do-after-car-accident/">what to do after a car accident</a>.
        </p>

        <!-- ── ROADSIDE ALTERNATIVES ─────────────────────────────── -->
        <h2 id="roadside-alternatives">When Is Roadside Assistance Better Than a Tow?</h2>

        <p>
          If the problem is a dead battery, a flat tire, an empty tank, or keys locked inside, you likely don't need a tow at all. Roadside assistance fixes those on the spot in 15–30 minutes for far less than a tow plus a shop visit — the tow is for problems the shoulder can't solve.
        </p>
        <p>
          A jump start gets most dead batteries going long enough to reach a parts store. A roadside <a href="/services/tire-change/">tire change</a> swaps your spare on in minutes — no rim damage, no wrestling a jack on a sloped shoulder. A <a href="/services/lockout-service/">lockout service</a> opens the door without scratching paint or bending the frame, and fuel delivery beats walking the Grand Parkway feeder with a gas can.
        </p>
        <p>
          The judgment call is diagnosing the no-start correctly. A car that clicks but won't crank is usually battery or starter; a car that cranks but won't fire is fuel or ignition, and repeated jump attempts won't help. Our guide to the <a href="/blog/car-wont-start-common-causes/">most common reasons a car won't start</a> walks through the symptoms so you can tell the dispatcher what's happening — and when in doubt, describe it on the phone and our <a href="/services/roadside-assistance/">roadside assistance</a> crew brings the gear for both outcomes, so a misdiagnosis doesn't strand you twice.
        </p>

        <!-- ── CHOOSING A COMPANY ────────────────────────────────── -->
        <h2 id="choosing-company">How Do You Choose a Towing Company in Fort Bend County?</h2>

        <p>
          Pick a towing company on five checks: a Texas TDLR license, proof of insurance, a firm price quoted before dispatch, a realistic ETA, and a local track record you can verify in reviews. A company that hesitates on any of the five is telling you something — believe it.
        </p>
        <p>
          Local matters more in towing than in most trades. A dispatcher who knows that the Williams Way exit backs up at 5 p.m., that FM 762 floods at the low crossings after a hard rain, and that the Brazos River bridge shoulder is no place to load a car will get to you faster and work the scene safer than a call center routing "the nearest GPS dot." Ask where the company is actually based; an operator headquartered in Richmond covers Richmond differently than one dispatching from the far side of Houston.
        </p>
        <p>
          The pattern to avoid is the no-quote operator: a truck that arrives without a price agreed, loads the car, and then names a number you can't refuse with your vehicle on the deck. Since 2011, Twin Cities Towing INC has quoted before rolling on every consent tow — it's the single simplest habit that separates companies you call once from companies you save in your contacts.
        </p>

        <!-- ── TEXAS TOWING LAW ──────────────────────────────────── -->
        <h2 id="texas-towing-law">What Are Your Rights Under Texas Towing Law?</h2>

        <p>
          Texas regulates towing under Occupations Code Chapter 2308: consent tows require your agreement on price and destination, nonconsent tows from private property have state- and county-capped fees, and every stored vehicle triggers notice requirements. If a tow violates the rules, you can challenge it in justice court.
        </p>
        <p>
          The consent/nonconsent line is the one to understand. When you call for your own tow, you're the customer — you set the destination and agree on the price first. When an apartment complex or parking lot tows you without consent, the operator must be licensed for private-property towing, post proper signage, take the car to a licensed vehicle storage facility, and charge no more than the regulated maximums. Storage lots must accept multiple payment forms and release your personal property from the vehicle even before you pay.
        </p>
        <p>
          The tow-hearing right is the part most drivers never learn: Texas gives you 14 days to request a hearing in justice court challenging whether a nonconsent tow was authorized, and if it wasn't, the towing company reimburses your fees. Signage defects, missing permits, and overcharges all count. We wrote a plain-English walkthrough of the statute — caps, deadlines, and how to file — in our guide to <a href="/blog/texas-towing-laws-your-rights/">Texas towing laws and your rights</a>.
        </p>

        <!-- ── FAQ ───────────────────────────────────────────────── -->
        <h2 id="faq">Richmond Towing Questions, Answered</h2>

        <div class="article-faq">
          <?php foreach ($postFaqs as $faq): ?>
          <div class="faq-item">
            <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Bottom CTA block -->
        <div class="article-cta-block reveal-up">
          <div class="article-cta-icon" aria-hidden="true">
            <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>
          </div>
          <div class="article-cta-copy">
            <h3>Stranded in Richmond or Anywhere in Fort Bend County?</h3>
            <p>Twin Cities Towing INC has dispatched 24/7 from Richmond since 2011 — US-59, SH-99, FM 762, and every street in between. Price quoted before the truck rolls.</p>
          </div>
          <div class="article-cta-actions">
            <a href="tel:+12819351113" class="btn btn-accent">
              <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
              Call (281) 935-1113
            </a>
            <a href="/services/emergency-towing/" class="btn btn-primary">
              <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>
              Emergency Towing
            </a>
          </div>
        </div>

      </div><!-- /.article-body -->

      <!-- ── SIDEBAR ─────────────────────────────────────────────── -->
      <aside class="article-sidebar" aria-label="Article sidebar">

        <!-- Table of Contents -->
        <div class="sidebar-card">
          <h4>
            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h.01"/><path d="M3 18h.01"/><path d="M3 6h.01"/><path d="M8 12h13"/><path d="M8 18h13"/><path d="M8 6h13"/></svg>
            In This Guide
          </h4>
          <ul class="toc-list" role="list">
            <li><a href="#types-of-towing">Types of Towing in Richmond</a></li>
            <li><a href="#towing-cost">What Towing Costs Here</a></li>
            <li><a href="#emergency-response">Response Times on US-59 &amp; SH-99</a></li>
            <li><a href="#after-accident">After an Accident</a></li>
            <li><a href="#roadside-alternatives">Roadside Alternatives to a Tow</a></li>
            <li><a href="#choosing-company">Choosing a Towing Company</a></li>
            <li><a href="#texas-towing-law">Your Rights Under Texas Law</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </div>

        <!-- Sidebar CTA -->
        <div class="sidebar-cta">
          <h4>Need a Tow Right Now?</h4>
          <p>Dispatch is answering 24/7. Most Richmond-area arrivals in 20–40 minutes, price quoted before the truck rolls.</p>
          <a href="tel:+12819351113" class="btn btn-accent btn-sm">
            <svg aria-hidden="true" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            (281) 935-1113
          </a>
        </div>

        <!-- Related Services card -->
        <div class="sidebar-card">
          <h4>
            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
            Related Services
          </h4>
          <ul class="toc-list" role="list">
            <li><a href="/services/emergency-towing/">Emergency Towing</a></li>
            <li><a href="/services/flatbed-towing/">Flatbed Towing</a></li>
            <li><a href="/services/roadside-assistance/">Roadside Assistance</a></li>
            <li><a href="/services/accident-towing/">Accident Towing</a></li>
            <li><a href="/contact/">Contact Us</a></li>
          </ul>
        </div>

      </aside><!-- /.article-sidebar -->

    </div><!-- /.article-layout -->
  </div><!-- /.container -->
</article>

<!-- ════════════════════════════════════════════════════════════════
     RELATED ARTICLES — cards pulled from includes/blog-data.php
════════════════════════════════════════════════════════════════ -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
$currentSlug = basename(__DIR__);
$otherPosts  = array_values(array_filter(
    $blogPosts,
    function ($p) use ($currentSlug) { return $p['slug'] !== $currentSlug; }
));
// Same-category posts first, then the rest (registry order preserved)
$sameCat      = array_values(array_filter($otherPosts, function ($p) use ($postCategory) { return $p['category'] === $postCategory; }));
$otherCat     = array_values(array_filter($otherPosts, function ($p) use ($postCategory) { return $p['category'] !== $postCategory; }));
$relatedPosts = array_slice(array_merge($sameCat, $otherCat), 0, 3);
?>
<?php if (!empty($relatedPosts)): ?>
<section class="related-articles" aria-label="Related articles">
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">Keep Reading</span>
      <h2>Related <em style="color:var(--color-accent);font-style:italic">Articles</em></h2>
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
              <svg aria-hidden="true" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
              <time datetime="<?php echo htmlspecialchars($rp['dateISO']); ?>"><?php echo htmlspecialchars($rp['date']); ?></time>
            </div>
            <div class="blog-card__meta-item">
              <svg aria-hidden="true" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
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
            <svg aria-hidden="true" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.related-articles__grid -->

  </div>
</section>
<?php endif; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
