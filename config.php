<?php
/**
 * ==========================================================================
 * DATABASE CONNECTION CONFIGURATION (PDO)
 * ==========================================================================
 * Update settings below if your local environment configuration differs.
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'rental_vichal');
define('DB_USER', 'root');
define('DB_PASS', 'Akhil@2004');
define('DB_CHAR', 'utf8mb4');

try {
    // Construct DSN connection sequence
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHAR;
    
    // Explicit operational behaviors configuration
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    // Establish persistent PDO Instance
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);

} catch (PDOException $e) {
    // Halt operations safely and hide sensitive stack traces from users
    error_log("Database Connection Failed: " . $e->getMessage());
    die("Application Error: Unable to establish database handshake safely.");
}
