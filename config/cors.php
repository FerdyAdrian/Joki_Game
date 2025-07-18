<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'web/*'],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],

    'allowed_origins' => ['http://localhost:8000', 'http://localhost:3000', '*'],

    'allowed_origins_patterns' => ['#^https?://localhost(:\d+)?$#'],

    'allowed_headers' => ['*', 'Authorization', 'Content-Type', 'X-Requested-With'],

    'exposed_headers' => ['Authorization'],

    'max_age' => 86400,

    'supports_credentials' => true,

];
