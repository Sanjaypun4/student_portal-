<?php
session_start();

<<<<<<< HEAD
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
=======
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

>>>>>>> 053436806ac42e819894653d82779f49a72f7c6f
</body>
</html>
