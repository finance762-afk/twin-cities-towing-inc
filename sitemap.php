<?php
// sitemap.php — emits XML. Never hand-edit page/post lists into this file:
// core pages come from the $pages registry below (services and area pages are
// generated from config.php's $services / $serviceAreas arrays), posts come
// from $blogPosts (includes/blog-data.php). /sitemap.xml rewrites here via
// .htaccess. Image entries are embedded per-URL (no separate image sitemap).
header('Content-Type: application/xml; charset=utf-8');
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$baseUrl = rtrim($domain, '/');

$pages = [
    [
        'path'       => '/',
        'file'       => '/index.php',
        'changefreq' => 'weekly',
        'priority'   => '1.0',
        'images'     => [
            ['src' => $clientPhotos[0], 'caption' => 'Twin Cities Towing INC flatbed tow truck responding to a call in Richmond, TX'],
            ['src' => $clientPhotos[1], 'caption' => 'Twin Cities Towing INC operator loading a vehicle for transport in Fort Bend County'],
            ['src' => $clientPhotos[5], 'caption' => '24/7 emergency towing service by Twin Cities Towing INC in Richmond, Texas'],
        ],
    ],
    [
        'path'       => '/services/',
        'file'       => '/services/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => $clientPhotos[2], 'caption' => 'Towing and roadside assistance services in Richmond, TX by Twin Cities Towing INC'],
        ],
    ],
    [
        'path'       => '/service-area/',
        'file'       => '/service-area/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
    ],
    [
        'path'       => '/about/',
        'file'       => '/about/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.6',
        'images'     => [
            ['src' => $clientPhotos[8], 'caption' => 'The Twin Cities Towing INC fleet based in Richmond, Texas'],
        ],
    ],
    [
        'path'       => '/contact/',
        'file'       => '/contact/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
    ],
    [
        'path'       => '/faq/',
        'file'       => '/faq/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.6',
    ],
    [
        'path'       => '/blog/',
        'file'       => '/blog/index.php',
        'changefreq' => 'weekly',
        'priority'   => '0.7',
    ],
];

// Service pages — generated from the config registry so new services appear
// in the sitemap automatically.
$svcImageIndex = 3;
foreach ($services as $svc) {
    $entry = [
        'path'       => '/services/' . $svc['slug'] . '/',
        'file'       => '/services/' . $svc['slug'] . '/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.9',
    ];
    if (isset($clientPhotos[$svcImageIndex])) {
        $entry['images'] = [
            ['src' => $clientPhotos[$svcImageIndex], 'caption' => $svc['name'] . ' in Richmond, TX — Twin Cities Towing INC'],
        ];
        $svcImageIndex++;
        if ($svcImageIndex > 14) { $svcImageIndex = 3; }
    }
    $pages[] = $entry;
}

// Area pages — generated from the config registry.
foreach ($serviceAreas as $area) {
    if (empty($area['city'])) { continue; }
    $pages[] = [
        'path'       => '/areas/' . $area['slug'] . '/',
        'file'       => '/areas/' . $area['slug'] . '/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
    ];
}

// Legal pages
foreach (['privacy-policy', 'terms', 'cookie-policy', 'accessibility'] as $legal) {
    $pages[] = [
        'path'       => '/' . $legal . '/',
        'file'       => '/' . $legal . '/index.php',
        'changefreq' => 'yearly',
        'priority'   => '0.3',
    ];
}

// Only list pages that actually exist on disk.
$pages = array_values(array_filter($pages, fn($p) => is_file($_SERVER['DOCUMENT_ROOT'] . $p['file'])));

function smLastmod(string $file): string {
    $abs = $_SERVER['DOCUMENT_ROOT'] . $file;
    return is_file($abs) ? date('Y-m-d', filemtime($abs)) : date('Y-m-d');
}
function smImageLoc(string $src, string $baseUrl): string {
    return (strpos($src, 'http') === 0) ? $src : $baseUrl . $src;
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= htmlspecialchars($baseUrl . $page['path']) ?></loc>
    <lastmod><?= smLastmod($page['file']) ?></lastmod>
    <changefreq><?= $page['changefreq'] ?></changefreq>
    <priority><?= $page['priority'] ?></priority>
<?php foreach ($page['images'] ?? [] as $img): ?>
    <image:image>
      <image:loc><?= htmlspecialchars(smImageLoc($img['src'], $baseUrl)) ?></image:loc>
      <image:caption><?= htmlspecialchars($img['caption']) ?></image:caption>
    </image:image>
<?php endforeach; ?>
  </url>
<?php endforeach; ?>
<?php foreach ($blogPosts as $post): ?>
  <url>
    <loc><?= htmlspecialchars($baseUrl . '/blog/' . $post['slug'] . '/') ?></loc>
    <lastmod><?= $post['dateISO'] ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
    <image:image>
      <image:loc><?= htmlspecialchars(smImageLoc($post['image'], $baseUrl)) ?></image:loc>
      <image:caption><?= htmlspecialchars($post['alt']) ?></image:caption>
    </image:image>
  </url>
<?php endforeach; ?>
</urlset>
