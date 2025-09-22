<?php

// Database connection using mysqli

$config = require __DIR__ . '/config/config.php';

// Create connection
$conn = mysqli_connect(
    $config['host'],
    $config['username'],
    $config['password'],
    $config['dbname'],
    $config['port']
);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
