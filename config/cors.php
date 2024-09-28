<?php

return [
    'paths' => ['api/*', , 'login','sanctum/csrf-cookie','register'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5174'],  // L'URL de votre frontend
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];

return [
    'paths' => ['api/*', 'login', 'register'], // Inclure les routes que tu utilises
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5174'], // Ajouter l'URL de ton frontend
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
