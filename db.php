<?php
$host = "localhost";
<<<<<<< HEAD
$user = "np03cs4a240387";
$pass = "mtrB4BOobr";
$dbname = "np03cs4a240387";
=======
$user = "root";
$pass = "";
$dbname = "student_portal";
>>>>>>> 053436806ac42e819894653d82779f49a72f7c6f

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
<<<<<<< HEAD
    die("Database Connection Failed: " . $conn->connect_error);
=======
    die("Database Connection Failed");
>>>>>>> 053436806ac42e819894653d82779f49a72f7c6f
}
?>
