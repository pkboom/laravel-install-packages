<?php

return [
    'default' => [
        'barryvdh/laravel-debugbar --dev',
        'pkboom/laravel-dump-tinker --dev',
        'andreaselia/laravel-api-to-postman --dev',
    ],

    'optional' => [
        'spatie/data-transfer-object',
        'spatie/guzzle-rate-limiter-middleware',
        'spatie/laravel-validation-rules',
    ],
];
