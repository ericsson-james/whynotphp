<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/routes.php'; // load routes

// Start a secure session.
session_start([
    'cookie_lifetime' => 86400,
    'cookie_httponly' => true,
    'cookie_secure' => false, // Set to 'true' if you're using HTTPS
    'use_strict_mode' => true
]);

// Optional: set up error handling (in dev environment only)
if (getenv('ENVIRONMENT') === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    // In production, disable error display for security reasons:
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
}

// Basic routing example
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the user visits http://example.com/, we’ll route to the HomeController -> index
if ($urlPath === '/' || $urlPath === '') {
    $controller = new \App\Controllers\HomeController();
    echo $controller->index();
    exit;
}

// If no matching route was found, show a 404 page
http_response_code(404);
include __DIR__ . '/../app/Views/errors/404.php';
exit;
