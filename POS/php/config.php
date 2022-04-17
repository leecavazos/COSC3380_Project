<?php
    define('DB_SERVER', '3.133.98.11');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'cosc3380');
    define('DB_DATABASE', 'POS');
    $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully!";
?>