<?php
//Database name
$dbName = 'quiz';
$host = 'localhost';
$user = 'root';
$pwd = '';

$conn = new mysqli($host, $user, $pwd, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
