<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

$theme = $_COOKIE['theme'] ?? "light";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: <?php echo ($theme == "dark") ? "black" : "white"; ?>;
            color: <?php echo ($theme == "dark") ? "white" : "black"; ?>;
            font-family: Arial;
        }
    </style>
</head>
<body>

<h1>Welcome to Dashboard</h1>

<a href="preference.php">Change Theme</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>
