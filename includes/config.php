<?php
/**
 * Twin Cities Towing INC — Site Configuration
 * Generated from build-plan.json — Phase 1 Scaffold
 * All page-level PHP files include this via $_SERVER['DOCUMENT_ROOT']
 */

// ─── Business Identity ────────────────────────────────────────────────────────
$siteName        = "Twin Cities Towing INC";
$tagline         = "We'll Get You Moving Again!";
$phone           = "";                          // TODO: fill in from client
$phoneSecondary  = "";                          // TODO: fill in from client
$phoneDisplay    = "";                          // TODO: formatted display e.g. (281) 555-0100
$email           = "";                          // TODO: fill in from client
$ownerName       = "";                          // TODO: fill in from client

// ─── Address ─────────────────────────────────────────────────────────────────
$address = [
    'street' => '1920 Rocky Falls RD',
    'city'   => 'Richmond',
    'state'  => 'TX',
    'zip'    => '77469',
];
$addressFull = $address['street'] . ', ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];

// ─── Domain & URLs ────────────────────────────────────────────────────────────
$domain    = 'https://twincitiestowinginc.com';  // TODO: confirm live domain with client
$industry  = 'towing';

// ─── Analytics & Tracking ────────────────────────────────────────────────────
$googleAnalyticsId     = 'G-XXXXXXXXXX';        // TODO: replace with live GA4 ID
$googleSearchConsoleId = '';                     // TODO: replace with live GSC verification tag

// ─── Business Stats ───────────────────────────────────────────────────────────
$yearEstablished  = 2011;
$yearsInBusiness  = 13;

// ─── Brand Colors ─────────────────────────────────────────────────────────────
$colors = [
    'primary'     => '#1a2b3c',
    'primaryRgb'  => '26, 43, 60',
    'primaryDark' => '#111e2b',
    'secondary'   => '#4d5e6f',
    'accent'      => '#06b6d4',
    'bgDark'      => '#0e1822',
];

// ─── SEO Keywords ────────────────────────────────────────────────────────────
$primaryKeyword    = 'towing service richmond tx';
$secondaryKeywords = [
    'towing company richmond tx',
    'emergency towing richmond tx',
    'roadside assistance richmond tx',
    'car towing richmond tx',
    'truck towing richmond tx',
    'flatbed towing richmond tx',
    'towing near me',
    '24 hour towing richmond tx',
    'accident towing richmond tx',
    'motorcycle towing richmond tx',
    'lockout service richmond tx',
    'tire change service richmond tx',
];

// ─── Services ─────────────────────────────────────────────────────────────────
$services = [
    [
        'name'        => 'Truck Towing Service',
        'slug'        => 'truck-towing',
        'description' => 'Professional truck towing services in Richmond, TX for heavy-duty vehicles and commercial trucks. Twin Cities Towing INC provides reliable truck recovery and transport solutions.',
        'keywords'    => [
            'truck towing Richmond TX',
            'heavy duty towing Richmond',
            'commercial truck towing Texas',
            'truck recovery Richmond',
        ],
        'icon'        => 'truck',
    ],
    [
        'name'        => 'Emergency Towing',
        'slug'        => 'emergency-towing',
        'description' => '24/7 emergency towing services available throughout Richmond, TX and surrounding areas. Fast response times for urgent vehicle recovery situations.',
        'keywords'    => [
            'emergency towing Richmond TX',
            '24/7 towing Richmond',
            'urgent towing Texas',
            'emergency vehicle recovery Richmond',
        ],
        'icon'        => 'alert-triangle',
    ],
    [
        'name'        => 'Roadside Assistance',
        'slug'        => 'roadside-assistance',
        'description' => 'Complete roadside assistance services in Richmond, TX including jump starts, fuel delivery, and emergency repairs. Get back on the road quickly with professional help.',
        'keywords'    => [
            'roadside assistance Richmond TX',
            'roadside help Texas',
            'emergency roadside Richmond',
            'car breakdown assistance',
        ],
        'icon'        => 'tool',
    ],
    [
        'name'        => 'Car Towing',
        'slug'        => 'car-towing',
        'description' => 'Reliable car towing services in Richmond, TX for all vehicle types and situations. Safe transport of your vehicle to your desired location.',
        'keywords'    => [
            'car towing Richmond TX',
            'vehicle towing Richmond',
            'auto towing Texas',
            'car transport Richmond',
        ],
        'icon'        => 'car',
    ],
    [
        'name'        => 'Motorcycle Towing',
        'slug'        => 'motorcycle-towing',
        'description' => 'Specialized motorcycle towing services in Richmond, TX with proper equipment and expertise. Safe transport for motorcycles, scooters, and ATVs.',
        'keywords'    => [
            'motorcycle towing Richmond TX',
            'bike towing Richmond',
            'motorcycle transport Texas',
            'ATV towing Richmond',
        ],
        'icon'        => 'activity',
    ],
    [
        'name'        => 'Flatbed Towing',
        'slug'        => 'flatbed-towing',
        'description' => 'Professional flatbed towing services in Richmond, TX for safe transport of luxury cars, damaged vehicles, and low-clearance automobiles. Damage-free towing guaranteed.',
        'keywords'    => [
            'flatbed towing Richmond TX',
            'flatbed service Richmond',
            'luxury car towing Texas',
            'safe vehicle transport Richmond',
        ],
        'icon'        => 'minus-square',
    ],
    [
        'name'        => 'Tire Change Service',
        'slug'        => 'tire-change',
        'description' => 'On-site tire change services in Richmond, TX when you\'re stranded with a flat tire. Quick and professional tire replacement to get you moving again.',
        'keywords'    => [
            'tire change Richmond TX',
            'flat tire service Richmond',
            'tire replacement Texas',
            'roadside tire change Richmond',
        ],
        'icon'        => 'disc',
    ],
    [
        'name'        => 'Lockout Service',
        'slug'        => 'lockout-service',
        'description' => 'Fast car lockout services in Richmond, TX for when you\'re locked out of your vehicle. Professional unlocking without damage to your car.',
        'keywords'    => [
            'car lockout Richmond TX',
            'vehicle lockout service Richmond',
            'auto lockout Texas',
            'locked out Richmond',
        ],
        'icon'        => 'lock',
    ],
    [
        'name'        => 'Light Duty Towing',
        'slug'        => 'light-duty-towing',
        'description' => 'Light duty towing services in Richmond, TX for cars, SUVs, and small trucks. Efficient and careful handling of your vehicle.',
        'keywords'    => [
            'light duty towing Richmond TX',
            'car towing Richmond',
            'SUV towing Texas',
            'small vehicle towing Richmond',
        ],
        'icon'        => 'navigation',
    ],
    [
        'name'        => 'Accident Towing',
        'slug'        => 'accident-towing',
        'description' => 'Accident recovery and towing services in Richmond, TX available 24/7 for collision situations. Fast response to clear accident scenes safely.',
        'keywords'    => [
            'accident towing Richmond TX',
            'collision towing Richmond',
            'crash recovery Texas',
            'accident vehicle removal Richmond',
        ],
        'icon'        => 'alert-circle',
    ],
    [
        'name'        => 'Breakdown Towing',
        'slug'        => 'breakdown-towing',
        'description' => 'Vehicle breakdown towing services in Richmond, TX for mechanical failures and engine problems. Reliable transport when your car won\'t start.',
        'keywords'    => [
            'breakdown towing Richmond TX',
            'mechanical failure towing Richmond',
            'disabled vehicle towing Texas',
            'car breakdown Richmond',
        ],
        'icon'        => 'zap-off',
    ],
];

// ─── Service Areas ────────────────────────────────────────────────────────────
// Primary + surrounding cities within ~20-mile radius of Richmond TX 77469
$serviceAreas = [
    [
        'city'    => 'Richmond',
        'state'   => 'TX',
        'zip'     => '77469',
        'slug'    => 'richmond-tx',
        'primary' => true,
    ],
    [
        'city'    => 'Rosenberg',
        'state'   => 'TX',
        'zip'     => '77471',
        'slug'    => 'rosenberg-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Sugar Land',
        'state'   => 'TX',
        'zip'     => '77479',
        'slug'    => 'sugar-land-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Missouri City',
        'state'   => 'TX',
        'zip'     => '77459',
        'slug'    => 'missouri-city-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Stafford',
        'state'   => 'TX',
        'zip'     => '77477',
        'slug'    => 'stafford-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Katy',
        'state'   => 'TX',
        'zip'     => '77450',
        'slug'    => 'katy-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Greatwood',
        'state'   => 'TX',
        'zip'     => '77406',
        'slug'    => 'greatwood-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Pecan Grove',
        'state'   => 'TX',
        'zip'     => '77406',
        'slug'    => 'pecan-grove-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Needville',
        'state'   => 'TX',
        'zip'     => '77461',
        'slug'    => 'needville-tx',
        'primary' => false,
    ],
    [
        'city'    => 'Fresno',
        'state'   => 'TX',
        'zip'     => '77545',
        'slug'    => 'fresno-tx',
        'primary' => false,
    ],
];

// ─── Social Links ─────────────────────────────────────────────────────────────
$socialLinks = [
    'facebook'  => '',   // TODO: fill in Facebook page URL
    'instagram' => '',   // TODO: fill in Instagram URL
    'google'    => '',   // TODO: fill in Google Business Profile URL
    'yelp'      => '',   // TODO: fill in Yelp URL
];

// ─── Form ─────────────────────────────────────────────────────────────────────
$formAction = 'https://design.pageone.cloud/api/leads/twin-cities-towing-inc';

// ─── Content Assets ───────────────────────────────────────────────────────────
$logoUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/logo/1776710766192-a7jjom-better_logo.png';

$clientPhotos = [
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710950211-yoyiul-o__16_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710952214-wdk34m-o__15_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710953319-o7jhpe-o__14_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710954194-bzkgy5-o.png',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710955084-7laq6f-o__13_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710955944-izdx6h-o__12_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710956793-onlyrn-o__11_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710957596-d5xvxe-o__10_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710958464-pnzb7b-o__33_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710959294-epl0w8-o__32_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710960154-oumnwk-o__31_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710961005-wznbkc-o__30_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710961854-w3m9na-o__29_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710962715-vjlq4h-o__28_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710963575-8b9tek-o__27_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710964435-vw221x-o__26_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710965325-3pq2z7-o__25_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710966205-obsbo8-o__24_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710967025-6x3qzu-o__23_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710967925-y6udug-o__22_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710968765-9pnrt6-o__21_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710969591-g547t6-o__20_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710970475-rq9ip3-o__19_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710971325-et8fmg-o__18_.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/twin-cities-towing-inc/photos/1776710972170-p45km4-o__17_.jpg',
];

// ─── Business Hours ───────────────────────────────────────────────────────────
$businessHours = [
    'monday'    => '24 Hours',
    'tuesday'   => '24 Hours',
    'wednesday' => '24 Hours',
    'thursday'  => '24 Hours',
    'friday'    => '24 Hours',
    'saturday'  => '24 Hours',
    'sunday'    => '24 Hours',
];
$hoursDisplay = '24/7 — Always Available';

// ─── Certifications / Trust Signals ──────────────────────────────────────────
$trustSignals = [
    'Licensed & Insured',
    '24/7 Emergency Service',
    '13+ Years in Business',
    'Serving Richmond & Rosenberg TX',
    'Fast Response Times',
];
