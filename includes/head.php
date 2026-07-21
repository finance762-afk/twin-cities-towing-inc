<?php
require_once __DIR__ . '/site-config.php';
/**
 * Twin Cities Towing INC — Head Component
 * Outputs: DOCTYPE, <html>, <head>, <body> opening tag.
 *
 * Required page variables (set before including this file):
 *   $pageTitle       — <title> for this page
 *   $pageDescription — meta description (140–155 chars)
 *   $canonicalUrl    — absolute canonical URL
 *   $currentPage     — slug string for active nav state
 *
 * Optional:
 *   $pageKeywords    — comma-separated keywords (falls back to site secondaryKeywords)
 *   $ogImage         — OG image URL (falls back to $logoUrl)
 *   $schemaMarkup    — JSON string of page-specific JSON-LD (output as second <script type="application/ld+json">)
 *   $useSwiper       — bool: true loads Swiper CSS/JS
 */

// Auto-load config if not already loaded
if (!isset($siteName)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}

// Auto-load functions if not already loaded
if (!function_exists('isActivePage')) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
}

// ── Resolve page-level SEO values with fallbacks ─────────────────────────────
$_title = isset($pageTitle) && $pageTitle !== ''
    ? $pageTitle
    : $siteName . ' | Towing Service in ' . $address['city'] . ', ' . $address['state'] . ' | 24/7 Emergency';

$_desc = isset($pageDescription) && $pageDescription !== ''
    ? $pageDescription
    : $siteName . ' provides 24/7 emergency towing, roadside assistance, and flatbed towing in ' . $address['city'] . ', ' . $address['state'] . '. Fast response, licensed & insured. Serving Fort Bend County since ' . $yearEstablished . '.';

// Canonical is computed from the request URI — pages never hand-set it, so it
// can never drift from the real URL. Directories keep their trailing slash.
$_reqPath = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
$_reqPath = preg_replace('#/index\.php$#', '/', $_reqPath);
if ($_reqPath === '' || $_reqPath === '/index.php') {
    $_reqPath = '/';
}
$_canonical = rtrim($domain, '/') . $_reqPath;

$_ogImage = isset($ogImage) && $ogImage !== ''
    ? $ogImage
    : $logoUrl;

// ── LocalBusiness JSON-LD ─────────────────────────────────────────────────────
$_sameAs = array_values(array_filter($socialLinks, fn($v) => !empty(trim($v ?? ''))));

$_localBusinessSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'LocalBusiness',
    '@id'         => $domain . '/#business',
    'name'        => $siteName,
    'url'         => $domain,
    'telephone'   => $phone,
    'email'       => $email,
    'description' => $siteName . ' provides 24/7 emergency towing, roadside assistance, flatbed towing, lockout services, and more in Richmond, TX. Proudly serving Fort Bend County since ' . $yearEstablished . '.',
    'foundingYear' => (string)$yearEstablished,
    'image'       => $logoUrl,
    'logo'        => [
        '@type' => 'ImageObject',
        'url'   => $logoUrl,
    ],
    'address'     => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion'   => $address['state'],
        'postalCode'      => $address['zip'],
        'addressCountry'  => 'US',
    ],
    'geo'         => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => '29.5820',
        'longitude' => '-95.7607',
    ],
    'openingHours' => 'Mo,Tu,We,Th,Fr,Sa,Su 00:00-23:59',
    'openingHoursSpecification' => [
        [
            '@type'      => 'OpeningHoursSpecification',
            'dayOfWeek'  => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
            'opens'      => '00:00',
            'closes'     => '23:59',
        ],
    ],
    'areaServed'  => array_values(array_filter(
        array_map(fn($a) => !empty($a['city']) ? [
            '@type' => 'City',
            'name'  => $a['city'] . ', ' . $a['state'],
        ] : null, $serviceAreas)
    )),
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'Towing & Roadside Services',
        'itemListElement' => array_map(fn($s) => [
            '@type'        => 'Offer',
            'itemOffered'  => [
                '@type'  => 'Service',
                'name'   => $s['name'],
                'url'    => $domain . '/services/' . $s['slug'],
            ],
        ], $services),
    ],
];

if (!empty($_sameAs)) {
    $_localBusinessSchema['sameAs'] = $_sameAs;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($_desc); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($_canonical); ?>">
  <meta name="robots" content="index, follow">

  <!-- Open Graph -->
  <meta property="og:type"        content="<?php echo htmlspecialchars($ogType ?? 'website'); ?>">
  <meta property="og:title"       content="<?php echo htmlspecialchars($_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($_desc); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($_canonical); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($_ogImage); ?>">
  <meta property="og:site_name"   content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale"      content="en_US">

  <!-- Performance: Preload above-the-fold fonts (v6.2 self-hosted, 3-font system) -->
  <link rel="preload" href="/assets/fonts/unbounded.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/assets/fonts/dm-sans.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/assets/fonts/caveat.woff2" as="font" type="font/woff2" crossorigin>

  <!-- DNS-prefetch for CDN embeds only (no Google Fonts in v6.2) -->
  <link rel="dns-prefetch" href="https://db.pageone.cloud">

  <!-- Swiper CSS (conditional — set $useSwiper = true on pages that use carousels) -->
  <?php if (!empty($useSwiper)): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Site Stylesheet (mtime cache-bust — Hostinger caches CSS aggressively) -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo @filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/css/framework.css') ?: '1'; ?>">

  <!-- Favicons -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
  <meta name="theme-color" content="#ffffff">

  <?php $_ga4 = !empty($ga4MeasurementId) ? $ga4MeasurementId : (($googleAnalyticsId ?? '') !== 'G-XXXXXXXXXX' ? ($googleAnalyticsId ?? '') : ''); ?>
  <?php if (!empty($_ga4)): ?>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($_ga4); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($_ga4); ?>');
  </script>
  <?php endif; ?>

  <?php $_gsc = !empty($gscVerification) ? $gscVerification : ($googleSearchConsoleId ?? ''); ?>
  <?php if (!empty($_gsc)): ?>
  <!-- Google Search Console Verification -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars($_gsc); ?>">
  <?php endif; ?>

  <!-- JSON-LD: LocalBusiness -->
  <script type="application/ld+json">
<?php echo json_encode($_localBusinessSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
  </script>

  <?php if (!empty($schemaMarkup)): ?>
  <!-- JSON-LD: Page-specific Schema -->
  <script type="application/ld+json">
<?php echo is_array($schemaMarkup) ? json_encode($schemaMarkup, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) : $schemaMarkup; ?>
  </script>
  <?php endif; ?>

<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
<body>
