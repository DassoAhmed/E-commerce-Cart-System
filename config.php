<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ecommerce');

$conn = new mysqli('localhost', 'root', '', 'ecommerce');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>