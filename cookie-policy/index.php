<?php
$pageTitle       = "Cookie Policy | Twin Cities Towing INC";
$pageDescription = "How Twin Cities Towing INC uses cookies and similar technologies on our website.";
$ogImage         = "https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/logo/1776710766192-a7jjom-better_logo.png";
$currentPage     = "cookie-policy";
$cssVersion      = '2';

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => "WebPage", "@id" => $canonicalUrl . "#webpage", "url" => $canonicalUrl, "name" => $pageTitle],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://twincitiestowinginc.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Cookie Policy", "item" => $canonicalUrl],
    ]],
  ]
];
$schemaMarkup = json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

$companyName = "Twin Cities Towing INC";
$lastUpdated = date('F j, Y');
?>

<main id="main-content">

  <section class="hero hero--legal">
    <div class="container">
      <span class="eyebrow-label">Legal</span>
      <h1>Cookie Policy</h1>
      <span class="section-subtitle">how we use cookies</span>
      <p style="opacity: 0.8; margin-top: var(--space-md);">Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <nav class="breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep">›</li>
        <li aria-current="page">Cookie Policy</li>
      </ol>
    </div>
  </nav>

  <article class="legal-prose">

    <h2>1. What Are Cookies?</h2>
    <p>Cookies are small text files stored on your device when you visit a website. They help websites remember your preferences and improve your experience.</p>

    <h2>2. Cookies We Use</h2>

    <h3>Essential Cookies</h3>
    <p>These cookies are necessary for the website to function properly. They enable basic features like page navigation and cannot be disabled.</p>
    <ul>
      <li><strong>Session cookies:</strong> maintain your session as you navigate the site</li>
      <li><strong>Cookie consent:</strong> remember your cookie banner dismissal (localStorage)</li>
    </ul>

    <h3>Analytics Cookies</h3>
    <p>We use analytics services to understand how visitors use our site and improve performance.</p>
    <ul>
      <li><strong>Google Analytics (if enabled):</strong> tracks page views, sessions, traffic sources</li>
      <li><strong>Data collected:</strong> IP address (anonymized), browser type, pages visited, referrer, time on site</li>
    </ul>

    <h3>Third-Party Content</h3>
    <p>Some embedded content may set cookies:</p>
    <ul>
      <li><strong>Google Maps:</strong> if we embed a map on the contact page</li>
      <li><strong>Fonts and CDN resources:</strong> may set caching cookies</li>
    </ul>

    <h2>3. How to Manage Cookies</h2>
    <p>You can control cookies through your browser settings:</p>
    <ul>
      <li><strong>Chrome:</strong> Settings → Privacy and Security → Cookies</li>
      <li><strong>Firefox:</strong> Settings → Privacy & Security → Cookies</li>
      <li><strong>Safari:</strong> Preferences → Privacy</li>
      <li><strong>Edge:</strong> Settings → Cookies and site permissions</li>
    </ul>
    <p>Blocking essential cookies may affect site functionality.</p>

    <h2>4. Updates to This Policy</h2>
    <p>We may update this Cookie Policy. The "Last Updated" date reflects the most recent change.</p>

    <h2>5. Contact Us</h2>
    <p>For questions about cookies, see our <a href="/privacy-policy/">Privacy Policy</a> contact section.</p>

    <div class="legal-disclaimer">
      This Cookie Policy is provided as a general template. We recommend attorney review before publication.
    </div>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
