<?php
// Database Connection Configuration

$host = getenv('DB_HOST') ?: 'localhost';      // Database host
$dbname = getenv('DB_NAME') ?: 'reservenu_db';   // Database name
$username = getenv('DB_USER') ?: 'root';       // Database username (default in XAMPP)
$password = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : '';           // Database password (default in XAMPP is empty)

try {
    // Create a PDO instance (DB connection)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set error reporting
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    
    error_log($e->getMessage());
    die("Database connection failed.");
}
?>
