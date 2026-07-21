<?php
$pageTitle       = "Privacy Policy | Twin Cities Towing INC";
$pageDescription = "How Twin Cities Towing INC collects, uses, and protects your information. Privacy practices for our website and contact forms.";
$canonicalUrl    = "https://twincitiestowinginc.com/privacy-policy/";
$ogImage         = "https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/logo/1776710766192-a7jjom-better_logo.png";
$currentPage     = "privacy-policy";
$cssVersion      = '2';

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => "WebPage", "@id" => $canonicalUrl . "#webpage", "url" => $canonicalUrl, "name" => $pageTitle, "description" => $pageDescription],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://twincitiestowinginc.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Privacy Policy", "item" => $canonicalUrl],
    ]],
  ]
];
$schemaMarkup = json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';

$companyName = "Twin Cities Towing INC";
$companyState = "Texas";
$companyEmail = !empty($email) ? $email : "contact@twincitiestowinginc.com";
$companyPhone = !empty($phoneDisplay) ? $phoneDisplay : "(281) 342-5222";
$companyPhoneE164 = "+12813425222";
$companyAddress = "1920 Rocky Falls RD, Richmond, TX 77469";
$lastUpdated = date('F j, Y');
?>

<main id="main-content">

  <section class="hero hero--legal" aria-label="Privacy Policy">
    <div class="container">
      <span class="eyebrow-label">Legal</span>
      <h1>Privacy Policy</h1>
      <span class="section-subtitle">your data, our commitments</span>
      <p style="opacity: 0.8; margin-top: var(--space-md);">Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Privacy Policy</li>
      </ol>
    </div>
  </nav>

  <article class="legal-prose">

    <h2>1. Introduction</h2>
    <p>This Privacy Policy explains how <?php echo $companyName; ?> ("we", "us", "our") collects, uses, and protects your personal information when you visit twincitiestowinginc.com or interact with our services.</p>

    <h2>2. Information We Collect</h2>
    <ul>
      <li><strong>Information you provide:</strong> name, email, phone, location, service details (via contact forms or phone calls)</li>
      <li><strong>Automatically collected:</strong> IP address, browser type, device info, pages visited, referring URL, timestamps (via analytics)</li>
      <li><strong>Cookies and similar technologies:</strong> see our <a href="/cookie-policy/">Cookie Policy</a></li>
    </ul>

    <h2>3. How We Use Your Information</h2>
    <ul>
      <li>Respond to inquiries and provide towing/roadside services</li>
      <li>Dispatch drivers to your location</li>
      <li>Send service confirmations and follow-ups</li>
      <li>Communicate via phone and SMS (where you have consented)</li>
      <li>Improve our website and services</li>
      <li>Comply with legal obligations</li>
    </ul>

    <h2>4. How We Share Your Information</h2>
    <ul>
      <li>We do <strong>NOT</strong> sell personal information.</li>
      <li><strong>Service providers:</strong> analytics providers, contact form processors, our hosting provider, and Page One Insights, LLC (our web design partner who receives lead copies for tracking).</li>
      <li><strong>Insurance and roadside assistance partners:</strong> when coordinating tow jobs through insurance or roadside programs.</li>
      <li><strong>Legal compliance:</strong> if required by <?php echo $companyState; ?> or federal law.</li>
    </ul>

    <h2>5. Your Privacy Rights</h2>

    <h3 id="state-rights"><?php echo $companyState; ?> Residents</h3>
    <p>You may request access to or deletion of personal information we hold about you. Contact us using the methods below.</p>

    <h3 id="ccpa-rights">California Residents (CCPA / CPRA)</h3>
    <p>California residents have rights under the California Consumer Privacy Act (CCPA) and California Privacy Rights Act (CPRA):</p>
    <ul>
      <li><strong>Right to know</strong> what personal information we collect, use, disclose, and sell.</li>
      <li><strong>Right to delete</strong> personal information we have collected.</li>
      <li><strong>Right to correct</strong> inaccurate personal information.</li>
      <li><strong>Right to opt-out of sale or sharing.</strong> (We do not sell personal information.)</li>
      <li><strong>Right to non-discrimination</strong> — we won't deny services based on exercising your rights.</li>
    </ul>
    <p><strong>To exercise your rights:</strong> Email <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a> or call <a href="tel:<?php echo $companyPhoneE164; ?>"><?php echo $companyPhone; ?></a>. We will respond within 45 days.</p>

    <h3>Other State Residents</h3>
    <p>Residents of Colorado, Virginia, Connecticut, Utah, and Texas have similar rights under their respective state privacy laws. Contact us using the same methods to exercise your rights.</p>

    <h2>6. SMS and Phone Communications (TCPA)</h2>
    <p>When you submit our contact form and provide consent, you agree to receive phone calls and SMS messages about your service request. Standard message and data rates may apply. Consent is not required to purchase. You can opt out of SMS by replying STOP, or opt out of calls by emailing <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a>.</p>

    <h2>7. Data Retention</h2>
    <p>We retain service records for as long as necessary to provide services and comply with legal obligations, typically 5–7 years for business records.</p>

    <h2>8. Data Security</h2>
    <p>We use SSL encryption on all form submissions and secure hosting. No system is 100% secure, but we work to minimize risks.</p>

    <h2>9. Children's Privacy</h2>
    <p>This site is not directed to children under 13. We do not knowingly collect information from children.</p>

    <h2>10. Third-Party Links</h2>
    <p>Our website may link to third-party sites (Facebook, Google, Yelp, etc.). We are not responsible for their privacy practices. Review their policies separately.</p>

    <h2>11. Changes to This Policy</h2>
    <p>We may update this Privacy Policy. The "Last Updated" date at the top will reflect the most recent change.</p>

    <h2>12. Contact Us</h2>
    <p>For privacy questions or to exercise your rights:</p>
    <p>
      <strong><?php echo $companyName; ?></strong><br>
      Email: <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a><br>
      Phone: <a href="tel:<?php echo $companyPhoneE164; ?>"><?php echo $companyPhone; ?></a><br>
      Address: <?php echo $companyAddress; ?>
    </p>

    <div class="legal-disclaimer">
      This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed <?php echo $companyState; ?> attorney before publication to ensure compliance with current state and federal privacy laws.
    </div>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
