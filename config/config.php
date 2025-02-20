<?php
declare(strict_types=1);

use Dotenv\Dotenv; // if using phpdotenv

require_once __DIR__ . '/../vendor/autoload.php'; // If you want to autoload Dotenv

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
