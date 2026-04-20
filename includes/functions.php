<?php
/**
 * Twin Cities Towing INC — Helper Functions
 * Phase 2 — auto-loaded by head.php
 */

/**
 * Check if the given page slug matches the current page.
 */
function isActivePage(string $page): bool {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format a raw phone number string into (xxx) xxx-xxxx display format.
 * Returns the original string unchanged if it cannot be parsed.
 */
function formatPhone(string $phone): string {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '(' . substr($digits, 1, 3) . ') ' . substr($digits, 4, 3) . '-' . substr($digits, 7);
    }
    return $phone;
}

/**
 * Convert a service name to its URL slug.
 * Matches the slugs stored in config.php $services array.
 */
function getServiceSlug(string $name): string {
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Convert a city name to a URL slug with state suffix (e.g. "Sugar Land" → "sugar-land-tx").
 */
function getAreaSlug(string $city, string $state = 'tx'): string {
    $slug = strtolower(trim($city));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s]+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug . '-' . strtolower($state);
}

/**
 * Generate a schema.org Service JSON-LD array for a given service.
 * Pass $faqs as an array of ['q' => '...', 'a' => '...'] pairs to include FAQPage.
 *
 * @param  array  $service  Single service entry from $services config array
 * @param  array  $faqs     Optional FAQ pairs for this service
 * @return array            Ready to json_encode
 */
function generateServiceSchema(array $service, array $faqs = []): array {
    global $siteName, $domain, $address, $phone, $logoUrl;

    $schema = [
        '@context'    => 'https://schema.org',
        '@graph'      => [
            [
                '@type'       => 'Service',
                '@id'         => $domain . '/services/' . $service['slug'] . '/#service',
                'name'        => $service['name'],
                'description' => $service['description'],
                'url'         => $domain . '/services/' . $service['slug'],
                'provider'    => [
                    '@type'   => 'LocalBusiness',
                    '@id'     => $domain . '/#business',
                    'name'    => $siteName,
                    'telephone' => $phone,
                    'image'   => $logoUrl,
                    'address' => [
                        '@type'           => 'PostalAddress',
                        'addressLocality' => $address['city'],
                        'addressRegion'   => $address['state'],
                        'addressCountry'  => 'US',
                    ],
                ],
                'areaServed' => [
                    '@type' => 'City',
                    'name'  => $address['city'] . ', ' . $address['state'],
                ],
                'serviceType' => $service['name'],
                'availableChannel' => [
                    '@type'                => 'ServiceChannel',
                    'servicePhone'         => $phone,
                    'availableLanguage'    => 'English',
                    'serviceUrl'           => $domain . '/contact',
                    'serviceLocation'      => [
                        '@type'          => 'LocalBusiness',
                        'name'           => $siteName,
                        'address'        => [
                            '@type'           => 'PostalAddress',
                            'addressLocality' => $address['city'],
                            'addressRegion'   => $address['state'],
                        ],
                    ],
                ],
            ],
        ],
    ];

    if (!empty($faqs)) {
        $schema['@graph'][] = generateFAQSchema($faqs);
    }

    return $schema;
}

/**
 * Generate a schema.org FAQPage JSON-LD array.
 *
 * @param  array  $faqs  Array of ['q' => string, 'a' => string] pairs
 * @return array         Ready to json_encode (or nest in @graph)
 */
function generateFAQSchema(array $faqs): array {
    $questions = array_map(function (array $faq): array {
        return [
            '@type' => 'Question',
            'name'  => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['a'],
            ],
        ];
    }, $faqs);

    return [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $questions,
    ];
}

/**
 * Build a meta-tag data array for a given page.
 * Useful for constructing $schemaMarkup or confirming required fields are set.
 *
 * @param  string  $title       Page <title> string
 * @param  string  $description Meta description (140–155 chars ideal)
 * @param  string  $canonical   Canonical URL for this page
 * @return array                Associative array of meta values
 */
function generateMetaTags(string $title, string $description, string $canonical): array {
    return [
        'title'       => $title,
        'description' => $description,
        'canonical'   => $canonical,
        'og_title'    => $title,
        'og_desc'     => $description,
        'og_url'      => $canonical,
    ];
}
