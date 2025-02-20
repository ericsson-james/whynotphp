<?php
declare(strict_types=1);

use Dotenv\Dotenv; // if using phpdotenv

require_once __DIR__ . '/../vendor/autoload.php'; // If you want to autoload Dotenv

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// For example, store environment variables in constants or define them
define('ENVIRONMENT', $_ENV['ENVIRONMENT'] ?? 'production');
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_USER', $_ENV['DB_USER'] ?? 'root');
define('DB_PASS', $_ENV['DB_PASS'] ?? 'supersecret');
define('DB_NAME', $_ENV['DB_NAME'] ?? 'my_database');
