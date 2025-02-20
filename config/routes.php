<?php
declare(strict_types=1);

return [
    '/' => [
        'controller' => \App\Controllers\HomeController::class,
        'action' => 'index'
    ],
    '/about' => [
        'controller' => \App\Controllers\HomeController::class,
        'action' => 'about'
    ],
    // Add more routes as needed
];
