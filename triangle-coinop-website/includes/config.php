<?php
// ============================================================
//  Triangle Coin Op — Site Config
//  Edit values here; they propagate site-wide.
// ============================================================

$SITE = [
    'brand'         => 'Triangle Coin Op',
    'brand_short'   => 'Triangle Coin Op',
    'tagline'       => 'Masterfully Engineered Entertainment',
    'parent_co'     => 'Triangle Coin Op LLC',
    'parent_url'    => 'https://unique.com',
    'venue_email'   => 'steve@optidynamics.org',     // B2B form recipient
    'public_email'  => 'hello@trianglecoinop.com',   // change to real address
    'location'      => 'Durham, North Carolina',
    'residency'     => 'It Only Takes One, With',
    'amazon_url'    => '#',                           // paste Amazon storefront URL
    'pod_url'       => '#',                           // paste Print-on-Demand store URL
    'year'          => date('Y'),
];

// Page metadata defaults — individual pages override
$PAGE = [
    'title'       => $SITE['brand'],
    'description' => 'Curated pinball, league nights, and craft pints. Durham, NC.',
    'slug'        => 'home',
];

// Nav structure — single source of truth for header + footer
$NAV = [
    ['label' => 'Leagues',          'href' => 'leagues.php',           'slug' => 'leagues'],
    ['label' => 'The Mercantile',   'href' => 'mercantile.php',        'slug' => 'mercantile'],
    ['label' => 'Venue Operations', 'href' => 'venue-operations.php',  'slug' => 'venue'],
];
