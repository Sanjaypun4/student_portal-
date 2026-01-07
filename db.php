<?php
$host = "localhost";
$user = "np03cs4a240387";
$pass = "mtrB4BOobr";
$dbname = "np03cs4a240387";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
