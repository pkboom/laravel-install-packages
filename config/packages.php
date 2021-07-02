<?php

return [
    'default' => [
        'barryvdh/laravel-debugbar --dev',
        'beyondcode/laravel-dump-server --dev',
        'pkboom/laravel-tinker-on-vscode --dev',
    ],

    'optional' => [
        'spatie/data-transfer-object',
        'spatie/guzzle-rate-limiter-middleware'
    ],
];
