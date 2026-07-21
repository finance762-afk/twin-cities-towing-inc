<?php
/**
 * Blog Post: Texas Towing Laws: Your Rights When Your Car Gets Towed
 * Twin Cities Towing INC | Page One Insights v6.1
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Texas Towing Laws: Your Rights When Your Car Gets Towed';
$pageDescription = 'Towed in Texas? Know your rights: TDLR licensing, nonconsent fee caps, private property signage rules, storage facility access, and the 14-day tow hearing.';
$currentPage     = 'blog';
$ogType          = 'article';

$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710968765-9pnrt6-o__21_.jpg';
$ogImage         = $heroImage;

$postDate        = 'May 9, 2026';
$postDateISO     = '2026-05-09';
$postAuthor      = $siteName;
$postCategory    = 'Towing Guides';
$postReadtime    = '8 min read';
$postUrl         = $domain . '/blog/texas-towing-laws-your-rights/';

// FAQ pairs — rendered visibly below AND mirrored exactly in FAQPage schema.
$postFaqs = [
    [
        'q' => 'How long do I have to request a tow hearing in Texas?',
        'a' => 'You have 14 days from the date you receive notice that your vehicle was towed to request a hearing under Texas Occupations Code Chapter 2308. The hearing is held in a justice of the peace court, and the filing fee is small. If the court finds there was no probable cause for the tow, you can recover the towing and storage fees you paid.',
    ],
    [
        'q' => 'Can a tow company charge whatever it wants in Texas?',
        'a' => 'Not for nonconsent tows. The Texas Department of Licensing and Regulation sets maximum fees for private property tows, and storage facilities charge daily rates within state-regulated limits. You are also entitled to an itemized invoice listing every charge. Consent tows — where you call and hire the company yourself — are priced by agreement before the truck is dispatched.',
    ],
    [
        'q' => 'Do I get to choose the tow company after an accident in Texas?',
        'a' => 'Generally, yes. If your vehicle is drivable to the shoulder or is not blocking traffic, you can call the towing company you want. Police can order an immediate nonconsent removal when a wrecked vehicle blocks the roadway or creates a hazard. Telling the officer you have already called a specific company often lets you keep that choice.',
    ],
    [
        'q' => 'Can I get my belongings out of a towed car in Texas?',
        'a' => 'Yes. Texas-licensed vehicle storage facilities must allow you to retrieve certain personal items from your vehicle — such as medication, identification, and documents — even before you pay the towing and storage charges. Bring a government-issued ID that matches the vehicle records, and ask the facility for its documented release procedure.',
    ],
];

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'            => 'BlogPosting',
            '@id'              => $postUrl . '#article',
            'headline'         => 'Texas Towing Laws: Your Rights When Your Car Gets Towed',
            'description'      => $pageDescription,
            'image'            => $heroImage,
            'datePublished'    => '2026-05-09',
            'dateModified'     => '2026-05-09',
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
            'keywords'         => 'Texas towing laws, towing rights Texas, TDLR tow license, nonconsent tow fees Texas, private property towing Texas, tow hearing Texas, Occupations Code 2308, vehicle storage facility rights, towing company Richmond TX',
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $domain . '/blog/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Texas Towing Laws: Your Rights When Your Car Gets Towed', 'item' => $postUrl],
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
   (hero, article layout, TOC, sidebar, CTA blocks) lives in framework.css */
.blog-hero__bg { position: absolute; inset: 0; background-image: url('<?php echo htmlspecialchars($heroImage); ?>'); background-size: cover; background-position: center 40%; opacity: 0.32; transform: scale(1.04); }
.blog-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(170deg, rgba(var(--color-secondary-rgb), 0.5) 0%, rgba(var(--color-primary-rgb), 0.88) 55%, rgba(var(--color-primary-rgb), 1) 100%); z-index: 1; }
/* Statute reference callout — unique to this legal-guide post */
.statute-box { background: rgba(var(--color-primary-rgb), 0.05); border: 1px solid var(--color-gray-light); border-left: 4px solid var(--color-accent); border-radius: 0 var(--radius-lg) var(--radius-lg) 0; padding: var(--space-6); margin: var(--space-8) 0; }
.statute-box strong { display: block; font-family: var(--font-heading); font-size: var(--font-size-sm); color: var(--color-primary); margin-bottom: var(--space-2); }
.statute-box p { font-size: var(--font-size-sm); line-height: 1.7; color: var(--color-gray-dark); margin: 0; }
/* In-article FAQ — single column, roomier than the site-wide 2-col grid */
.article-faq .faq-grid { grid-template-columns: 1fr; gap: var(--space-4); margin-top: var(--space-6); }
.article-faq .faq-item h3 { font-size: var(--font-size-lg); }
.article-faq .faq-item p { font-size: var(--font-size-base); line-height: 1.7; }
/* Legal disclaimer note */
.legal-note { display: flex; gap: var(--space-3); align-items: flex-start; font-size: var(--font-size-sm); color: var(--color-gray); background: var(--color-light); border: 1px dashed var(--color-gray-light); border-radius: var(--radius-md); padding: var(--space-4) var(--space-5); margin: var(--space-8) 0; }
.legal-note i, .legal-note svg { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; color: var(--color-secondary); }
@media (max-width: 767px) {
  .statute-box { padding: var(--space-4); }
}
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
        <span>Texas Towing Laws: Your Rights</span>
      </nav>

      <span class="blog-hero__category">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z" />
  <circle cx="7.5" cy="7.5" r=".5" fill="currentColor" /></svg>
        <?php echo htmlspecialchars($postCategory); ?>
      </span>

      <h1 class="blog-hero__title">
        Texas Towing Laws: Your <em>Rights</em> When Your Car Gets Towed
      </h1>

      <div class="blog-hero__meta">
        <div class="blog-hero__meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:15px;height:15px;"><path d="M8 2v4" />
  <path d="M16 2v4" />
  <rect width="18" height="18" x="3" y="4" rx="2" />
  <path d="M3 10h18" /></svg>
          <time datetime="<?php echo $postDateISO; ?>"><?php echo $postDate; ?></time>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:15px;height:15px;"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
  <circle cx="12" cy="7" r="4" /></svg>
          <span><?php echo htmlspecialchars($postAuthor); ?></span>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:15px;height:15px;"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
          <span><?php echo htmlspecialchars($postReadtime); ?></span>
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
  <meta itemprop="headline"      content="Texas Towing Laws: Your Rights When Your Car Gets Towed">
  <meta itemprop="datePublished" content="<?php echo $postDateISO; ?>">
  <meta itemprop="author"        content="<?php echo htmlspecialchars($postAuthor); ?>">
  <meta itemprop="image"         content="<?php echo htmlspecialchars($heroImage); ?>">

  <div class="container">
    <div class="article-layout">

      <!-- ── MAIN ARTICLE BODY ───────────────────────────────────── -->
      <div class="article-body" itemprop="articleBody">

        <a href="/blog/" class="back-to-blog">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;"><path d="m12 19-7-7 7-7" />
  <path d="M19 12H5" /></svg>
          Back to Blog
        </a>

        <!-- Featured image -->
        <img
          src="<?php echo htmlspecialchars($heroImage); ?>"
          sizes="(max-width: 768px) 100vw, 720px"
          alt="Twin Cities Towing INC flatbed tow truck loading a car in Richmond TX — a licensed Texas consent-tow operator"
          class="article-featured-img"
          width="1200"
          height="675"
          loading="eager"
          fetchpriority="high">

        <!-- Intro — answer-first -->
        <p>
          If your car gets towed in Texas, you have more rights than most drivers realize. The Texas Department of Licensing and Regulation (TDLR) licenses every tow operator, state rules cap what nonconsent tows can cost, and you can request a tow hearing within 14 days if you believe the tow was improper.
        </p>
        <p>
          Twin Cities Towing INC has operated as a licensed consent-tow company in Richmond, TX since 2011, and in 13+ years serving Fort Bend County we have talked with hundreds of drivers who paid fees they never had to pay — or signed away rights they did not know they had. This guide walks through what Texas law actually says: the difference between consent and nonconsent tows, how to verify an operator's license, private property towing rules, fee caps, storage facility rights, and how to challenge a tow in court.
        </p>

        <!-- ── CONSENT VS NONCONSENT ─────────────────────────────── -->
        <h2 id="consent-vs-nonconsent">What Is the Difference Between a Consent and a Nonconsent Tow?</h2>

        <p>
          A consent tow happens when you hire the towing company yourself — you call, agree on the service and the price, and choose where your vehicle goes. A nonconsent tow happens without your permission: a private property tow, a police-ordered removal, or an abandoned-vehicle tow. Texas regulates nonconsent tows far more strictly because you never agreed to the charges.
        </p>
        <p>
          The distinction matters because your rights change with the tow type. In a consent tow — like calling Twin Cities Towing INC for <a href="/services/car-towing/">car towing</a> to a mechanic — the price is a private agreement, and a reputable operator quotes it before the truck rolls. In a nonconsent tow, the state steps in on your behalf: fees are capped, an itemized invoice is required, and a court process exists to challenge the tow. Knowing which kind of tow you are dealing with tells you which set of protections applies.
        </p>

        <div class="statute-box">
          <strong>The law behind it</strong>
          <p>Vehicle towing in Texas is governed primarily by Texas Occupations Code Chapter 2308 (Vehicle Towing and Booting), with vehicle storage facilities regulated under Chapter 2303. TDLR administers licensing, fee rules, and enforcement for both.</p>
        </div>

        <!-- ── TDLR LICENSING ─────────────────────────────────────── -->
        <h2 id="tdlr-licensing">How Do You Verify a Tow Operator's TDLR License?</h2>

        <p>
          Every tow truck, tow operator, and towing company in Texas must be licensed by the Texas Department of Licensing and Regulation. You can verify any license in about a minute using the free license search on the TDLR website — search by company name, city, or license number. Tow trucks are also required to display identifying information on the truck itself.
        </p>
        <p>
          Why bother checking? Because an unlicensed operator is the single biggest red flag in this industry. Licensed companies carry required insurance, follow state fee rules, and answer to TDLR complaints. Unlicensed "bandit" operators — the trucks that appear uninvited at accident scenes — do not. Before handing over your keys, look for the company name and TDLR information on the truck, and if anything feels off, call another company. Twin Cities Towing INC operates fully licensed and insured, and we encourage every customer to look us up before we load a vehicle.
        </p>

        <!-- ── PRIVATE PROPERTY TOWING ────────────────────────────── -->
        <h2 id="private-property">When Can Your Car Be Towed From Private Property in Texas?</h2>

        <p>
          A parking facility owner can have an unauthorized vehicle towed without your consent, but only if the lot follows strict state rules — most importantly, proper signage. Texas law requires signs at each driveway entrance that face the driver, state that unauthorized vehicles will be towed at the owner's expense, and list a phone number for information about the tow.
        </p>
        <p>
          The signage requirements are specific: signs must use the required colors and the international towing symbol, be mounted at the prescribed height, remain visible and unobstructed, and generally be in place before the tow happens. There are limited exceptions — such as a vehicle blocking a fire lane, an entrance or exit, or a marked accessible space — but for a routine "you parked in the wrong lot" tow, missing or non-compliant signage is one of the most common reasons a justice court finds a tow improper. If your car disappears from a private lot, photograph the entrances and any signs (or the absence of them) before you leave. Those photos are exactly the kind of evidence a tow hearing turns on.
        </p>

        <div class="pull-quote" data-animate="fade-up">
          <p>A private property tow is only lawful when the lot follows the state's rules. If the required signs were not posted, the tow — and every fee attached to it — can be challenged.</p>
        </div>

        <!-- ── FEE CAPS ───────────────────────────────────────────── -->
        <h2 id="fee-caps">Are Nonconsent Towing Fees Capped in Texas?</h2>

        <p>
          Yes. Texas caps what companies can charge for nonconsent tows. TDLR sets the maximum fees for private property tows statewide, based on vehicle weight class, and political subdivisions regulate fees for police-ordered incident tows. A tow company cannot lawfully charge more than the applicable maximum, and it must give you an itemized tow ticket listing each charge.
        </p>
        <p>
          That itemized invoice is a right worth insisting on. It should identify the towing company and its license information, describe the vehicle, and break out every fee — the base tow, any permitted extras, and storage charges. Vague lump-sum totals and cash-only demands are warning signs. If the numbers on your invoice exceed the state maximums, you can file a complaint with TDLR and raise the overcharge at a tow hearing. Keep every receipt: overcharges on a nonconsent tow can be recoverable, and documentation is what makes recovery possible. For context on what a fair consent tow actually costs in our area, see our breakdown of <a href="/blog/towing-cost-richmond-tx/">towing costs in Richmond, TX</a>.
        </p>

        <!-- ── STORAGE FACILITIES ─────────────────────────────────── -->
        <h2 id="storage-facilities">What Are Your Rights at a Vehicle Storage Facility?</h2>

        <p>
          Vehicle storage facilities (VSFs) in Texas are licensed by TDLR and must follow their own set of rules: regulated daily storage fees, required notification letters to the vehicle owner, posted fee schedules, and documented release procedures. Storage charges accrue daily, so acting quickly after a tow directly limits what you owe.
        </p>
        <p>
          Two rights matter most in practice. First, you can retrieve certain personal belongings from your vehicle — items like medication, identification, and important documents — even before paying the towing and storage charges. Bring a government-issued ID and expect the facility to document what you remove. Second, the facility must tell you the total charges and accept payment during posted hours so you can get your vehicle out. A facility that refuses access to essential belongings, will not itemize charges, or invents fees can be reported to TDLR and challenged at a hearing.
        </p>

        <div class="highlight-box" data-animate="fade-up">
          <div class="highlight-box__icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:20px;height:20px;"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
          </div>
          <div class="highlight-box__body">
            <strong>Storage fees run daily — move fast.</strong>
            <p>Every day a vehicle sits in a storage facility adds another day of charges. Locating your car the same day it is towed and retrieving it promptly is usually the cheapest decision you can make after a nonconsent tow.</p>
          </div>
        </div>

        <!-- ── TOW HEARING ────────────────────────────────────────── -->
        <h2 id="tow-hearing">How Do You Challenge an Improper Tow in Texas?</h2>

        <p>
          Texas Occupations Code Chapter 2308 gives you the right to a tow hearing in justice court if you believe your vehicle was towed or booted without probable cause. You must request the hearing within 14 days of receiving notice of the tow, the filing fee is small, and if you win, you can recover the towing and storage fees you paid.
        </p>
        <p>
          The hearing is designed for ordinary drivers, not lawyers. You file in the justice of the peace precinct tied to where the vehicle was towed from or stored, and the storage facility is required to provide information about your hearing rights when you pick up your car. At the hearing, the court looks at one core question: was there probable cause for the removal? Photos of missing or non-compliant signage, your itemized invoice, and receipts are your evidence. Practical tip: pay the fees, get your car back, and then pursue the hearing — the 14-day clock does not require you to leave your vehicle accruing storage charges while you wait.
        </p>

        <div class="statute-box">
          <strong>Tow hearing at a glance</strong>
          <p>Where: justice of the peace court. Deadline: request within 14 days of notice of the tow. Cost: a small statutory filing fee. Remedy: reimbursement of towing and storage fees if the court finds no probable cause for the tow.</p>
        </div>

        <!-- ── ACCIDENT SCENES ────────────────────────────────────── -->
        <h2 id="accident-scenes">Who Picks the Tow Company After an Accident?</h2>

        <p>
          In most cases, you do. After a crash in Texas, the driver generally has the right to choose which towing company moves the vehicle — a consent tow at an agreed price. The exception is when your vehicle is blocking the roadway or creating a hazard: police can order an immediate nonconsent removal to clear the scene.
        </p>
        <p>
          This is the moment when knowing your rights saves you the most money. Unsolicited tow trucks that show up at crash scenes count on you being shaken and saying yes to the first truck you see. If your car is off the travel lanes, you can tell the officer you are calling your own company and request <a href="/services/accident-towing/">accident towing</a> from an operator you chose and priced in advance. We cover the full step-by-step — photos, police report, insurance calls, and towing decisions — in our guide on <a href="/blog/what-to-do-after-car-accident/">what to do after a car accident</a>.
        </p>

        <!-- ── HOW CONSENT TOWING DIFFERS ─────────────────────────── -->
        <h2 id="consent-towing-twin-cities">How Is a Consent Tow With Twin Cities Towing Different?</h2>

        <p>
          Everything about a consent tow is agreed to before the truck moves. When you call Twin Cities Towing INC, you get a quote before dispatch, you pick the destination, and the price you approved is the price you pay. There are no state fee caps involved because none are needed — you saw the number first.
        </p>
        <p>
          That is the practical difference between the two sides of this article. Nonconsent tows need fee caps, signage rules, and court hearings because the driver never had a say. A consent tow with a licensed operator replaces all of that with a simple agreement: our dispatcher quotes the job — whether it is <a href="/services/car-towing/">car towing</a> to your mechanic or 2 a.m. <a href="/services/emergency-towing/">emergency towing</a> off US-59 — and your vehicle goes where you direct, anywhere in Fort Bend County, 24/7. We have run our Richmond operation that way since 2011.
        </p>

        <!-- ── FAQ ────────────────────────────────────────────────── -->
        <section class="article-faq" id="faq" aria-label="Frequently asked questions about Texas towing laws">
          <h2>Texas Towing Law FAQs</h2>
          <div class="faq-grid">
            <?php foreach ($postFaqs as $faq): ?>
            <div class="faq-item">
              <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
              <p><?php echo htmlspecialchars($faq['a']); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </section>

        <div class="legal-note">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><circle cx="12" cy="12" r="10" />
  <path d="M12 16v-4" />
  <path d="M12 8h.01" /></svg>
          <span>This article is general information about Texas towing law, not legal advice. Statutes and TDLR rules change, and how they apply depends on your specific situation. For advice about a particular tow, consult a licensed Texas attorney or contact TDLR directly.</span>
        </div>

        <!-- Bottom CTA block -->
        <div class="article-cta-block" data-animate="fade-up">
          <div class="article-cta-icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:24px;height:24px;"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
  <path d="m9 12 2 2 4-4" /></svg>
          </div>
          <div class="article-cta-copy">
            <h3>Need a Tow You Actually Agreed To?</h3>
            <p>Twin Cities Towing INC quotes every job before dispatch — licensed, insured, and serving Richmond and all of Fort Bend County 24/7 since 2011. You pick the destination. You approve the price. Then we roll.</p>
          </div>
          <div class="article-cta-actions">
            <a href="tel:2819351113" class="btn btn-accent">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
              Call (281) 935-1113
            </a>
            <a href="/services/car-towing/" class="btn btn-outline-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:18px;height:18px;"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
  <circle cx="7" cy="17" r="2" />
  <path d="M9 17h6" />
  <circle cx="17" cy="17" r="2" /></svg>
              Car Towing
            </a>
          </div>
        </div>

      </div><!-- /.article-body -->

      <!-- ── SIDEBAR ─────────────────────────────────────────────── -->
      <aside class="article-sidebar" aria-label="Article sidebar">

        <!-- Table of Contents -->
        <div class="sidebar-card">
          <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;"><path d="M3 5h.01" />
  <path d="M3 12h.01" />
  <path d="M3 19h.01" />
  <path d="M8 5h13" />
  <path d="M8 12h13" />
  <path d="M8 19h13" /></svg> In This Article</h4>
          <ul class="toc-list" role="list">
            <li><a href="#consent-vs-nonconsent">Consent vs. Nonconsent Tows</a></li>
            <li><a href="#tdlr-licensing">Verifying a TDLR License</a></li>
            <li><a href="#private-property">Private Property Towing Rules</a></li>
            <li><a href="#fee-caps">Nonconsent Fee Caps</a></li>
            <li><a href="#storage-facilities">Storage Facility Rights</a></li>
            <li><a href="#tow-hearing">The 14-Day Tow Hearing</a></li>
            <li><a href="#accident-scenes">Who Picks the Tow Company</a></li>
            <li><a href="#consent-towing-twin-cities">How Consent Towing Differs</a></li>
            <li><a href="#faq">FAQs</a></li>
          </ul>
        </div>

        <!-- Sidebar CTA -->
        <div class="sidebar-cta">
          <h4>Stranded in Fort Bend County?</h4>
          <p>Get a quote before the truck is dispatched — 24/7 consent towing from Richmond's licensed, by-the-book operator.</p>
          <a href="tel:2819351113" class="btn btn-accent btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
            (281) 935-1113
          </a>
        </div>

        <!-- Related Services -->
        <div class="sidebar-card">
          <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:16px;height:16px;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z" /></svg> Related Services</h4>
          <ul class="toc-list" role="list">
            <li><a href="/services/car-towing/">Car Towing</a></li>
            <li><a href="/services/accident-towing/">Accident Towing</a></li>
            <li><a href="/services/emergency-towing/">Emergency Towing</a></li>
            <li><a href="/services/flatbed-towing/">Flatbed Towing</a></li>
            <li><a href="/services/roadside-assistance/">Roadside Assistance</a></li>
            <li><a href="/contact/">Get a Free Quote</a></li>
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
$_others     = array_values(array_filter(
    $blogPosts,
    function ($p) use ($currentSlug) { return $p['slug'] !== $currentSlug; }
));
// Same category first, preserving registry order within each group.
$_sameCat  = array_values(array_filter($_others, fn($p) => ($p['category'] ?? '') === $postCategory));
$_otherCat = array_values(array_filter($_others, fn($p) => ($p['category'] ?? '') !== $postCategory));
$relatedPosts = array_slice(array_merge($_sameCat, $_otherCat), 0, 3);
?>
<?php if (!empty($relatedPosts)): ?>
<section class="related-articles" aria-label="Related articles">
  <div class="container">

    <div class="section-title" data-animate="fade-up">
      <span class="eyebrow-label">Keep Reading</span>
      <h2>Related <em style="color:var(--color-accent);font-style:italic">Articles</em></h2>
    </div>

    <div class="related-articles__grid" data-p1-dynamic>
      <?php foreach ($relatedPosts as $ridx => $rp): ?>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><path d="M8 2v4" />
  <path d="M16 2v4" />
  <rect width="18" height="18" x="3" y="4" rx="2" />
  <path d="M3 10h18" /></svg>
              <time datetime="<?php echo htmlspecialchars($rp['dateISO']); ?>"><?php echo htmlspecialchars($rp['date']); ?></time>
            </div>
            <div class="blog-card__meta-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px;height:14px;"><circle cx="12" cy="12" r="10" />
  <path d="M12 6v6l4 2" /></svg>
              <span><?php echo htmlspecialchars($rp['readtime']); ?></span>
            </div>
          </div>

          <h3>
            <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/">
              <?php echo htmlspecialchars($rp['title']); ?>
            </a>
          </h3>

          <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/" class="blog-card__read-more">
            Read Article <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:15px;height:15px;"><path d="M5 12h14" />
  <path d="m12 5 7 7-7 7" /></svg>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.related-articles__grid -->

  </div>
</section>
<?php endif; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
