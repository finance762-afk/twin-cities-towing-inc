<?php
/**
 * Blog Post: Flatbed vs. Wheel-Lift Towing: Which Does Your Car Need?
 * Twin Cities Towing INC | Page One Insights v6.1 Blog Standard
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Flatbed vs. Wheel-Lift Towing: Which Does Your Car Need?';
$pageDescription = 'Flatbed towing carries your car with all four wheels off the road; wheel-lift tows it on two. See which method your vehicle needs in Richmond, TX.';
$currentPage     = 'blog';
$ogType          = 'article';

$postDate        = 'June 8, 2026';
$postDateISO     = '2026-06-08';
$postCategory    = 'Towing Guides';
$postReadtime    = '6 min read';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710967025-6x3qzu-o__23_.jpg';
$ogImage         = $heroImage;

// Visible FAQ + FAQPage schema are built from this single array so they can
// never drift out of sync.
$blogFaqs = [
    [
        'q' => 'Is flatbed towing always the better choice?',
        'a' => 'Flatbed is the safest method for every vehicle, but it is not always necessary. A standard two-wheel-drive sedan moving a few miles across Richmond rides fine on a wheel-lift. Flatbed becomes mandatory — not optional — for AWD/4WD, low-clearance, luxury, and electric vehicles, and for anything traveling a long distance.',
    ],
    [
        'q' => 'Will wheel-lift towing damage my transmission?',
        'a' => 'Not if the truck lifts the correct end. A front-wheel-drive car lifted by its front wheels rolls on its undriven rear wheels, which spin freely without touching the transmission. Damage happens when driven wheels are left rolling on the pavement — which is exactly why AWD and 4WD vehicles must go on a flatbed.',
    ],
    [
        'q' => 'Can I request a flatbed when I call Twin Cities Towing INC?',
        'a' => 'Yes. Tell the dispatcher you want a flatbed and we will send one — no justification needed. If you are not sure which method your vehicle requires, give us the year, make, model, and drivetrain, and we will confirm the right truck before it leaves the yard. We dispatch 24/7 across Fort Bend County.',
    ],
];

$postUrl = $domain . '/blog/flatbed-vs-wheel-lift-towing/';

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'            => 'BlogPosting',
            '@id'              => $postUrl . '#article',
            'headline'         => 'Flatbed vs. Wheel-Lift Towing: Which Does Your Car Need?',
            'description'      => $pageDescription,
            'image'            => $heroImage,
            'datePublished'    => '2026-06-08',
            'dateModified'     => '2026-06-08',
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
            'articleSection'   => 'Towing Guides',
            'keywords'         => 'flatbed vs wheel lift towing, flatbed towing Richmond TX, wheel lift towing Richmond TX, AWD towing, low clearance car towing, EV towing Richmond, tow truck types Fort Bend County, damage-free towing',
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $domain . '/blog/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Flatbed vs. Wheel-Lift Towing: Which Does Your Car Need?', 'item' => $postUrl],
            ],
        ],
        generateFAQSchema($blogFaqs),
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* Page-specific styles only — the shared blog template (.blog-hero, .blog-layout,
   .blog-toc, .blog-prose, .blog-sidebar-cta, .related-articles) lives in framework.css */
.blog-hero__bg { position: absolute; inset: 0; background-image: url('<?php echo htmlspecialchars($heroImage); ?>'); background-size: cover; background-position: center 40%; opacity: 0.22; transform: scale(1.04); }
.blog-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(155deg, rgba(6,182,212,0.25) 0%, rgba(var(--color-primary-rgb), 0.9) 50%, var(--color-primary-dark) 100%); z-index: 1; }
.blog-answer { font-size: var(--font-size-lg); line-height: 1.65; color: var(--color-gray-dark); border-left: 3px solid var(--color-accent); background: rgba(6,182,212,0.05); padding: var(--space-4) var(--space-5); border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: var(--space-4) 0 var(--space-6); }
.vs-table-wrap { margin: var(--space-8) 0; border: 1px solid var(--color-gray-light); border-radius: var(--radius-lg); overflow-x: auto; box-shadow: var(--shadow-sm); }
.vs-table { width: 100%; border-collapse: collapse; font-size: var(--font-size-sm); min-width: 560px; }
.vs-table thead th { background: var(--color-primary); color: var(--color-white); font-family: var(--font-heading); font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 0.06em; text-align: left; padding: var(--space-3) var(--space-4); }
.vs-table tbody td { padding: var(--space-3) var(--space-4); border-bottom: 1px solid var(--color-gray-light); vertical-align: top; line-height: 1.55; color: var(--color-gray-dark); }
.vs-table tbody td:first-child { font-family: var(--font-heading); font-size: var(--font-size-xs); color: var(--color-primary); white-space: nowrap; }
.vs-table tbody tr:nth-child(even) { background: var(--color-light); }
.vs-table tbody tr:last-child td { border-bottom: none; }
.method-cards { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-5); margin: var(--space-6) 0 var(--space-8); }
.method-card { border: 1px solid var(--color-gray-light); border-top: 3px solid var(--color-accent); border-radius: var(--radius-md); background: var(--color-white); padding: var(--space-5); box-shadow: var(--shadow-sm); }
.method-card--lift { border-top-color: var(--color-secondary); }
.method-card h3 { font-size: var(--font-size-base); color: var(--color-primary); margin-bottom: var(--space-2); display: flex; align-items: center; gap: var(--space-2); }
.method-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; line-height: 1.6; }
.require-list { list-style: none; padding: 0; margin: var(--space-4) 0 var(--space-6); display: flex; flex-direction: column; gap: var(--space-3); }
.require-list li { background: var(--color-light); border-radius: var(--radius-md); padding: var(--space-3) var(--space-4) var(--space-3) var(--space-10); position: relative; font-size: var(--font-size-sm); line-height: 1.6; color: var(--color-gray-dark); }
.require-list li::before { content: ''; position: absolute; left: var(--space-4); top: var(--space-3); width: 18px; height: 18px; border-radius: var(--radius-full); background: var(--color-accent); box-shadow: 0 0 0 4px rgba(6,182,212,0.15); }
.require-list li strong { color: var(--color-primary); }
.dispatch-list { counter-reset: dispatch; list-style: none; padding: 0; margin: var(--space-4) 0 var(--space-6); display: flex; flex-direction: column; gap: var(--space-3); }
.dispatch-list li { counter-increment: dispatch; position: relative; padding: var(--space-3) var(--space-4) var(--space-3) var(--space-12); background: var(--color-white); border: 1px solid var(--color-gray-light); border-radius: var(--radius-md); font-size: var(--font-size-sm); line-height: 1.6; color: var(--color-gray-dark); }
.dispatch-list li::before { content: counter(dispatch); position: absolute; left: var(--space-4); top: 50%; transform: translateY(-50%); width: 1.7rem; height: 1.7rem; border-radius: var(--radius-full); background: var(--color-primary); color: var(--color-white); font-family: var(--font-heading); font-size: var(--font-size-xs); display: flex; align-items: center; justify-content: center; }
.blog-faq .faq-grid { grid-template-columns: 1fr; }
@media (max-width: 767px) {
  .method-cards { grid-template-columns: 1fr; }
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
        <span>Flatbed vs. Wheel-Lift Towing</span>
      </nav>

      <span class="blog-hero__category">
        <i data-lucide="tag" style="width:14px;height:14px;"></i>
        <?php echo htmlspecialchars($postCategory); ?>
      </span>

      <h1 class="blog-hero__title">Flatbed vs. Wheel-Lift Towing: Which Does Your Car Need?</h1>

      <div class="blog-hero__meta">
        <div class="blog-hero__meta-item">
          <i data-lucide="calendar" style="width:15px;height:15px;"></i>
          <time datetime="<?php echo $postDateISO; ?>"><?php echo $postDate; ?></time>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <i data-lucide="user" style="width:15px;height:15px;"></i>
          <span><?php echo htmlspecialchars($siteName); ?></span>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <i data-lucide="clock" style="width:15px;height:15px;"></i>
          <span><?php echo htmlspecialchars($postReadtime); ?></span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     ARTICLE
════════════════════════════════════════════════════ -->
<article class="blog-article" itemscope itemtype="https://schema.org/BlogPosting">
  <meta itemprop="headline"      content="Flatbed vs. Wheel-Lift Towing: Which Does Your Car Need?">
  <meta itemprop="datePublished" content="<?php echo $postDateISO; ?>">
  <meta itemprop="author"        content="<?php echo htmlspecialchars($siteName); ?>">
  <meta itemprop="image"         content="<?php echo htmlspecialchars($heroImage); ?>">

  <div class="container">
    <div class="blog-layout">

      <!-- ── MAIN BODY ─────────────────────────────────── -->
      <div class="blog-prose" itemprop="articleBody">

        <a href="/blog/" class="back-to-blog">
          <i data-lucide="arrow-left" style="width:15px;height:15px;"></i>
          Back to Blog
        </a>

        <img
          src="<?php echo htmlspecialchars($heroImage); ?>"
          alt="Twin Cities Towing INC flatbed tow truck loading a car in Richmond, TX with all four wheels secured off the ground"
          class="blog-featured-img"
          width="1200"
          height="675"
          loading="eager"
          fetchpriority="high">

        <p>
          A flatbed tow truck carries your entire vehicle on its deck with all four wheels off the ground — it is the safe default for any car, any distance. Wheel-lift towing, which raises one axle and lets the other roll, is fine for short local tows of standard two-wheel-drive cars.
        </p>
        <p>
          The difference matters because the wrong method can cost far more than the tow. An AWD crossover dragged on two wheels can chew up its transfer case before it reaches the shop. Twin Cities Towing INC has run both truck types out of Richmond, TX since 2011, and the honest answer is that each has its place. This guide explains how both methods work, which vehicles genuinely require a flatbed, when a wheel-lift is the smarter call, and what to tell our dispatcher so the right truck rolls out the first time. For the full picture of local towing — response times, service types, and what to expect at the roadside — start with our <a href="/blog/towing-richmond-tx-complete-guide/">complete guide to towing in Richmond, TX</a>.
        </p>

        <h2 id="how-they-work">How Do Flatbed and Wheel-Lift Towing Actually Work?</h2>
        <p class="blog-answer">
          A flatbed truck tilts its hydraulic deck to the ground, pulls the vehicle up with a winch or drives it on, then straps it down — nothing touches pavement in transit. A wheel-lift truck slides a steel yoke under two wheels, lifts that axle, and tows the car rolling on its other two wheels.
        </p>

        <div class="method-cards">
          <div class="method-card">
            <h3><i data-lucide="minus-square" style="width:18px;height:18px;color:var(--color-accent);"></i> Flatbed (Rollback)</h3>
            <p>The full vehicle rides on the deck. Winch loading handles cars that will not start, roll, or steer. Zero drivetrain engagement, zero ground contact, zero added wear — the method we run for anything valuable, damaged, or drivetrain-sensitive. See our <a href="/services/flatbed-towing/">flatbed towing service</a> for details.</p>
          </div>
          <div class="method-card method-card--lift">
            <h3><i data-lucide="navigation" style="width:18px;height:18px;color:var(--color-secondary);"></i> Wheel-Lift</h3>
            <p>A hydraulic yoke cradles the tires of one axle — no chains on the frame like the old hook-and-chain rigs. The other axle rolls on the road. Faster to hook up, cheaper to run, and able to reach parking garages and tight apartment lots a 19,000-pound rollback cannot enter.</p>
          </div>
        </div>

        <div class="vs-table-wrap">
          <table class="vs-table" aria-label="Flatbed vs wheel-lift towing comparison">
            <thead>
              <tr>
                <th scope="col">Factor</th>
                <th scope="col">Flatbed</th>
                <th scope="col">Wheel-Lift</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Wheels on road</td>
                <td>None — entire vehicle rides the deck</td>
                <td>Two — one axle rolls in transit</td>
              </tr>
              <tr>
                <td>Safe for AWD/4WD</td>
                <td>Yes, the required method</td>
                <td>No — drivetrain damage risk</td>
              </tr>
              <tr>
                <td>Low-clearance vehicles</td>
                <td>Yes, with ramp extensions</td>
                <td>Risky — approach angle can catch bodywork</td>
              </tr>
              <tr>
                <td>Non-running vehicles</td>
                <td>Yes — winch loading</td>
                <td>Only if the free wheels roll and steer</td>
              </tr>
              <tr>
                <td>Typical cost in Richmond</td>
                <td>$25&ndash;$50 more per tow</td>
                <td>Lowest-cost method</td>
              </tr>
              <tr>
                <td>Best use</td>
                <td>Long distance, valuable or damaged vehicles</td>
                <td>Short local tows of standard 2WD cars</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2 id="flatbed-required">Which Vehicles Require a Flatbed?</h2>
        <p class="blog-answer">
          AWD and 4WD vehicles, lowered or low-clearance cars, luxury and exotic vehicles, electric vehicles, and motorcycles all require flatbed transport. For these vehicles the extra cost is not an upgrade — rolling any driven wheel on pavement or misjudging an approach angle causes damage that dwarfs the price of the tow.
        </p>
        <ul class="require-list">
          <li><strong>AWD and 4WD vehicles.</strong> All four wheels connect through the drivetrain. Tow one axle rolling and the transfer case and differentials spin without proper lubrication — repairs commonly run $1,500&ndash;$8,000. Every Subaru, 4x4 pickup, and AWD crossover in Fort Bend County belongs on a deck.</li>
          <li><strong>Low-clearance and lowered cars.</strong> Sports cars and vehicles with body kits or aftermarket suspension can scrape on a wheel-lift's approach geometry. A flatbed with ramp extensions flattens the load angle so splitters and rocker panels clear.</li>
          <li><strong>Luxury vehicles.</strong> Air suspension in fault mode, aluminum control arms, and sensor-laden bumpers do not tolerate improvised hookups. Flatbed keeps everything static from pickup to delivery.</li>
          <li><strong>Electric vehicles.</strong> Nearly every EV manufacturer — Tesla included — prohibits towing with any wheel on the ground, because rolling wheels back-feed the motors and can overheat them. Flatbed is the only manufacturer-approved method.</li>
          <li><strong>Motorcycles.</strong> Two wheels means a wheel-lift has nothing to grab. Bikes ride the deck in a wheel chock with soft-loop straps — our <a href="/services/motorcycle-towing/">motorcycle towing service</a> covers the specialized rigging.</li>
        </ul>

        <h2 id="wheel-lift-ok">When Does Wheel-Lift Towing Make Sense?</h2>
        <p class="blog-answer">
          Wheel-lift is the practical choice for a standard front- or rear-wheel-drive car moving a short distance — a few miles to a Richmond repair shop, out of a parking garage, or off a narrow apartment lot. Lifting the driven axle keeps the drivetrain disengaged, and the free-rolling axle adds no meaningful wear over local distances.
        </p>
        <p>
          There are also spots where wheel-lift is the only option: parking garages with 7-foot clearance, alleys, and tight complexes physically exclude a full-size rollback. Most of the everyday tows we run through our <a href="/services/light-duty-towing/">light-duty towing service</a> — commuter sedans headed to a shop in town — are exactly this scenario, and paying extra for a flatbed buys nothing. The honest rule: if the car is standard 2WD, runs no modifications, and travels under roughly ten miles, wheel-lift is a sound, economical tow.
        </p>

        <h2 id="cost-difference">How Much More Does Flatbed Towing Cost?</h2>
        <p class="blog-answer">
          In the Richmond area, flatbed towing typically runs $25&ndash;$50 more than a wheel-lift tow over the same distance. The premium covers heavier equipment and longer load times. Against a $1,500-plus drivetrain repair or scraped bodywork, that margin is trivial for any vehicle on the flatbed-required list.
        </p>
        <p>
          Both methods share the same structure: a hookup fee plus per-mile mileage, with the flatbed premium layered on top. We quote the full number before the truck leaves, so there is no arithmetic happening at the roadside. For current hookup fees, per-mile rates, and what after-hours calls actually cost, see our breakdown of <a href="/blog/towing-cost-richmond-tx/">towing costs in Richmond, TX</a>.
        </p>

        <h2 id="damage-prevention">How Do Operators Prevent Damage During a Tow?</h2>
        <p class="blog-answer">
          Damage prevention comes down to tie-down discipline. On a flatbed, the vehicle is secured at four to eight manufacturer-designated points with wheel straps or frame chains rated for the load — never around bumpers, control arms, or body panels. On a wheel-lift, the yoke cradles tires only, so nothing metal touches the car.
        </p>
        <p>
          The details separate a clean delivery from a claim. Soft loops protect painted wheels; EVs and unibody cars get wheel-basket straps because their floors hide battery packs and pinch-weld sensors; a winched non-runner is pulled in a straight line with the wheels chocked before the straps go on. Our operators re-check strap tension after the first mile — loads settle — and again before unloading. It is unglamorous procedure, and it is why vehicles arrive in the condition they left.
        </p>

        <h2 id="dispatcher">What Should You Tell the Dispatcher?</h2>
        <p class="blog-answer">
          Give the dispatcher five things: your vehicle's year, make, and model; its drivetrain (AWD, 4WD, FWD, or RWD); whether it starts, rolls, and steers; any lowering or modifications; and the pickup and drop-off locations. Those answers determine the truck type, so the right equipment arrives on the first run.
        </p>
        <ol class="dispatch-list">
          <li><strong>Year, make, model.</strong> This alone flags most flatbed-required vehicles — we know a Model 3 or a WRX needs a deck before you say another word.</li>
          <li><strong>Drivetrain.</strong> Not sure? Say so. We can look it up by model rather than guess wrong.</li>
          <li><strong>Condition.</strong> Won't start, won't roll, wheels locked, or airbags deployed — winch loading changes the setup and the truck we send.</li>
          <li><strong>Modifications.</strong> Lowered suspension, splitters, or a body kit means ramp extensions come along.</li>
          <li><strong>Both locations.</strong> A garage pickup may force wheel-lift; a 40-mile run to a Houston dealership argues for flatbed regardless of drivetrain.</li>
        </ol>
        <p>
          One accurate phone call saves you a second dispatch fee and 45 minutes on the shoulder. That is the whole reason this question list exists.
        </p>

        <h2 id="faq">Flatbed vs. Wheel-Lift: Common Questions</h2>
        <div class="blog-faq">
          <div class="faq-grid">
            <?php foreach ($blogFaqs as $faq): ?>
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

        <p>
          Still not sure which truck your situation calls for? Call Twin Cities Towing INC at <a href="tel:+12819351113"><?php echo htmlspecialchars($phoneDisplay); ?></a> — we answer 24/7, and the dispatcher will settle it in under a minute.
        </p>

      </div><!-- /.blog-prose -->

      <!-- ── SIDEBAR ───────────────────────────────────── -->
      <aside class="blog-sidebar" aria-label="Article sidebar">

        <!-- Table of Contents -->
        <div class="blog-toc">
          <h4><i data-lucide="list" style="width:15px;height:15px;"></i> In This Article</h4>
          <ul class="blog-toc__list" role="list">
            <li><a href="#how-they-work">How Each Method Works</a></li>
            <li><a href="#flatbed-required">Vehicles That Require a Flatbed</a></li>
            <li><a href="#wheel-lift-ok">When Wheel-Lift Makes Sense</a></li>
            <li><a href="#cost-difference">The Cost Difference</a></li>
            <li><a href="#damage-prevention">Damage Prevention &amp; Tie-Downs</a></li>
            <li><a href="#dispatcher">What to Tell the Dispatcher</a></li>
            <li><a href="#faq">Common Questions</a></li>
          </ul>
        </div>

        <!-- Sidebar phone CTA -->
        <div class="blog-sidebar-cta">
          <h4>Need a Tow Right Now?</h4>
          <p>Twin Cities Towing INC dispatches flatbed and wheel-lift trucks 24/7 across Richmond and Fort Bend County. Tell us your vehicle — we send the right truck the first time.</p>
          <a href="tel:+12819351113" class="btn btn-accent">
            <i data-lucide="phone" style="width:16px;height:16px;"></i>
            <?php echo htmlspecialchars($phoneDisplay); ?>
          </a>
        </div>

        <!-- Related Services -->
        <div class="blog-toc">
          <h4><i data-lucide="truck" style="width:15px;height:15px;"></i> Related Services</h4>
          <ul class="blog-toc__list" role="list">
            <li><a href="/services/flatbed-towing/">Flatbed Towing</a></li>
            <li><a href="/services/light-duty-towing/">Light Duty Towing</a></li>
            <li><a href="/services/car-towing/">Car Towing</a></li>
            <li><a href="/services/motorcycle-towing/">Motorcycle Towing</a></li>
            <li><a href="/services/truck-towing/">Truck Towing</a></li>
          </ul>
        </div>

      </aside><!-- /.blog-sidebar -->

    </div><!-- /.blog-layout -->
  </div>
</article>

<!-- ════════════════════════════════════════════════════
     RELATED ARTICLES — pulled from includes/blog-data.php
════════════════════════════════════════════════════ -->
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
$currentSlug  = basename(__DIR__);
$relatedPosts = array_values(array_filter(
    $blogPosts,
    function ($p) use ($currentSlug) { return $p['slug'] !== $currentSlug; }
));
// Same-category posts first, registry (newest-first) order preserved within groups.
usort($relatedPosts, function ($a, $b) use ($postCategory) {
    return ($b['category'] === $postCategory) <=> ($a['category'] === $postCategory);
});
$relatedPosts = array_slice($relatedPosts, 0, 3);
?>
<?php if (!empty($relatedPosts)): ?>
<section class="related-articles" aria-label="Related articles">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Keep Reading</span>
      <h2>Related Articles</h2>
    </div>

    <div class="related-articles__grid" data-p1-dynamic>
      <?php foreach ($relatedPosts as $rp): ?>
      <article class="blog-card" aria-label="<?php echo htmlspecialchars($rp['title']); ?>">

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
              <i data-lucide="calendar" style="width:14px;height:14px;"></i>
              <time datetime="<?php echo htmlspecialchars($rp['dateISO']); ?>"><?php echo htmlspecialchars($rp['date']); ?></time>
            </div>
            <div class="blog-card__meta-item">
              <i data-lucide="clock" style="width:14px;height:14px;"></i>
              <span><?php echo htmlspecialchars($rp['readtime']); ?></span>
            </div>
          </div>

          <h3>
            <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/">
              <?php echo htmlspecialchars($rp['title']); ?>
            </a>
          </h3>

          <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/" class="blog-card__read-more">
            Read Article <i data-lucide="arrow-right" style="width:14px;height:14px;"></i>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.related-articles__grid -->

  </div>
</section>
<?php endif; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
