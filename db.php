<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "student_portal";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed");
}
?>
