<?php
return [
    'driver' => env('SCOUT_DRIVER', 'null'),

    'algolia' => [
        'id' => env('ALGOLIA_APP_ID', ''),
        'secret' => env('ALGOLIA_SECRET', ''),
        'search_key' => env('ALGOLIA_SEARCH', ''),
        'prefix' => env('ALGOLIA_PREFIX', 'dev_'),
    ],
];
