<?php

return [
    'paths' => ['*'],                      // apply to all routes
    'allowed_methods' => ['*'],            // allow all HTTP methods
    'allowed_origins' => ['*'],            // allow all origins
    'allowed_headers' => ['*'],            // allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
