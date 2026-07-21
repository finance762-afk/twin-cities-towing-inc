<?php
$pageTitle       = "Terms of Service | Twin Cities Towing INC";
$pageDescription = "Terms of Service for Twin Cities Towing INC. Usage terms, service policies, and legal agreements.";
$ogImage         = "https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/logo/1776710766192-a7jjom-better_logo.png";
$currentPage     = "terms";
$cssVersion      = '2';

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => "WebPage", "@id" => $canonicalUrl . "#webpage", "url" => $canonicalUrl, "name" => $pageTitle],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://twincitiestowinginc.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Terms of Service", "item" => $canonicalUrl],
    ]],
  ]
];
$schemaMarkup = json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

$companyName = "Twin Cities Towing INC";
$companyState = "Texas";
$lastUpdated = date('F j, Y');
?>

<main id="main-content">

  <section class="hero hero--legal">
    <div class="container">
      <span class="eyebrow-label">Legal</span>
      <h1>Terms of Service</h1>
      <span class="section-subtitle">usage terms & policies</span>
      <p style="opacity: 0.8; margin-top: var(--space-md);">Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <nav class="breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep">›</li>
        <li aria-current="page">Terms of Service</li>
      </ol>
    </div>
  </nav>

  <article class="legal-prose">

    <h2>1. Agreement to Terms</h2>
    <p>By accessing twincitiestowinginc.com or using <?php echo $companyName; ?> services, you agree to these Terms. If you do not agree, do not use this site or our services.</p>

    <h2>2. Use of This Website</h2>
    <p>You may use this site for personal, non-commercial purposes to learn about our services and contact us. You may not use the site for unlawful purposes, attempt unauthorized access, scrape content, or submit false information.</p>

    <h2>3. Service Quotes and Pricing</h2>
    <p>Phone quotes are estimates based on information provided. Final pricing may differ based on actual conditions, distance, vehicle type, and service complexity. Verbal quotes are non-binding. Dispatch authorization constitutes acceptance of pricing.</p>

    <h2>4. Service Scope</h2>
    <ul>
      <li>We provide towing and roadside assistance throughout Richmond, Rosenberg, and Fort Bend County, TX.</li>
      <li>We are licensed and insured to operate in the state of <?php echo $companyState; ?>.</li>
      <li>Response times are estimates and may vary based on traffic, weather, and driver availability.</li>
      <li>We are not responsible for pre-existing damage to vehicles.</li>
    </ul>

    <h2>5. Payment Terms</h2>
    <p>Payment is due upon service completion unless pre-arranged with insurance or roadside assistance programs. We accept cash, card, and approved electronic payments. Unpaid balances may accrue interest as permitted by <?php echo $companyState; ?> law.</p>

    <h2>6. Cancellation</h2>
    <p>You may cancel a service request before the driver is dispatched without charge. Once dispatched, a cancellation fee may apply.</p>

    <h2>7. Limitation of Liability</h2>
    <p>We take reasonable care in handling your vehicle. Our liability is limited to the actual damage caused by our negligence, up to the limits of our insurance policy. We are not liable for consequential damages, delays, or losses beyond our direct control.</p>

    <h2>8. Indemnification</h2>
    <p>You agree to indemnify <?php echo $companyName; ?> against claims arising from your misuse of this site or provision of false information that affects service delivery.</p>

    <h2>9. Governing Law</h2>
    <p>These Terms are governed by the laws of the State of <?php echo $companyState; ?>. Any disputes will be resolved in <?php echo $companyState; ?> courts.</p>

    <h2>10. Changes to Terms</h2>
    <p>We may update these Terms. The "Last Updated" date reflects the most recent change. Continued use after changes constitutes acceptance.</p>

    <div class="legal-disclaimer">
      This Terms of Service document is provided as a general template. We recommend reviewing this document with a licensed <?php echo $companyState; ?> attorney before publication.
    </div>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
