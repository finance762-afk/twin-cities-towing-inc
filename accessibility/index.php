<?php
$pageTitle       = "Accessibility Statement | Twin Cities Towing INC";
$pageDescription = "Twin Cities Towing INC's commitment to web accessibility and WCAG compliance.";
$canonicalUrl    = "https://twincitiestowinginc.com/accessibility/";
$ogImage         = "https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/logo/1776710766192-a7jjom-better_logo.png";
$currentPage     = "accessibility";
$cssVersion      = '2';

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => "WebPage", "@id" => $canonicalUrl . "#webpage", "url" => $canonicalUrl, "name" => $pageTitle],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://twincitiestowinginc.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Accessibility", "item" => $canonicalUrl],
    ]],
  ]
];
$schemaMarkup = json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

$companyName = "Twin Cities Towing INC";
$companyEmail = !empty($email) ? $email : "contact@twincitiestowinginc.com";
$lastUpdated = date('F j, Y');
?>

<main id="main-content">

  <section class="hero hero--legal">
    <div class="container">
      <span class="eyebrow-label">Legal</span>
      <h1>Accessibility Statement</h1>
      <span class="section-subtitle">our commitment to access</span>
      <p style="opacity: 0.8; margin-top: var(--space-md);">Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <nav class="breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep">›</li>
        <li aria-current="page">Accessibility</li>
      </ol>
    </div>
  </nav>

  <article class="legal-prose">

    <h2>1. Our Commitment</h2>
    <p><?php echo $companyName; ?> is committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying relevant accessibility standards.</p>

    <h2>2. Conformance Status</h2>
    <p>This website aims to conform to the <strong>Web Content Accessibility Guidelines (WCAG) 2.1, Level AA</strong>. These guidelines explain how to make web content more accessible for people with disabilities and more usable for everyone.</p>

    <h2>3. Measures to Support Accessibility</h2>
    <p><?php echo $companyName; ?> takes the following measures to ensure accessibility:</p>
    <ul>
      <li>Include accessibility as part of our website design and development process</li>
      <li>Provide clear and consistent navigation</li>
      <li>Use semantic HTML markup</li>
      <li>Provide alternative text for images</li>
      <li>Ensure sufficient color contrast</li>
      <li>Support keyboard navigation</li>
      <li>Respect user motion preferences (prefers-reduced-motion)</li>
      <li>Provide skip-to-content links</li>
    </ul>

    <h2>4. Technical Specifications</h2>
    <p>This website relies on the following technologies:</p>
    <ul>
      <li>HTML5</li>
      <li>CSS3</li>
      <li>JavaScript (with graceful degradation)</li>
      <li>ARIA landmarks and attributes where appropriate</li>
    </ul>

    <h2>5. Limitations and Alternatives</h2>
    <p>Despite our best efforts to ensure accessibility, there may be some limitations. If you encounter an accessibility barrier, please contact us:</p>
    <ul>
      <li><strong>Email:</strong> <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></li>
      <li><strong>Phone:</strong> <a href="tel:+12813425222">(281) 342-5222</a></li>
      <li><strong>Alternative:</strong> For urgent towing needs, call 24/7 and we can assist by phone</li>
    </ul>

    <h2>6. Assessment Approach</h2>
    <p><?php echo $companyName; ?> assessed the accessibility of this website through:</p>
    <ul>
      <li>Internal review using automated testing tools</li>
      <li>Manual keyboard navigation testing</li>
      <li>Screen reader compatibility checks</li>
      <li>Color contrast validation</li>
    </ul>

    <h2>7. Feedback</h2>
    <p>We welcome your feedback on the accessibility of this website. If you encounter accessibility barriers, please let us know:</p>
    <ul>
      <li><strong>Email:</strong> <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></li>
      <li><strong>Subject line:</strong> "Website Accessibility"</li>
    </ul>
    <p>We will respond within 5 business days and work to address reported issues promptly.</p>

    <h2>8. Formal Complaints</h2>
    <p>If you are not satisfied with our response, you may file a complaint with:</p>
    <ul>
      <li>The U.S. Department of Justice's Civil Rights Division (ADA Title III)</li>
      <li>Your state's Attorney General office</li>
    </ul>

    <div class="legal-disclaimer">
      This Accessibility Statement is provided as a general template and reflects our good-faith efforts to comply with WCAG 2.1 AA. We recommend periodic accessibility audits by qualified professionals.
    </div>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
