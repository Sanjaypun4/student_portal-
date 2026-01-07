<?php
session_start();

// Check if logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

// Get the theme from the cookie (default to light)
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body style="background: <?= $theme === 'dark' ? 'black' : 'white' ?>; color: <?= $theme === 'dark' ? 'white' : 'black' ?>;">
    <h2>🎓 Welcome to Student Dashboard</h2>
    <p>You are successfully logged in!</p>

    <a href="preference.php">Change Theme</a><br><br>
    <a href="logout.php">Logout</a>
</body>
</html>
