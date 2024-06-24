<?php
// Informasi koneksi database
$host = "rv-database-1.czxfewbxqjnj.us-east-1.rds.amazonaws.com"; // Host database
$username = "admin"; // Username database
$password = "admin12345"; // Password database
$database = "gazebo_seal"; // Nama database

try {
    $dbh = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    // Exit if connection fails
    exit();
}
?>
