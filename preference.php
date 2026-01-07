<?php
session_start();

// Check if logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

// Get the current theme from the cookie (default to light)
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

// Save the selected theme in a cookie for 30 days
if (isset($_POST['save'])) {
    setcookie('theme', $_POST['theme'], time() + (86400 * 30), "/");  // Set cookie for 30 days
    header("Location: dashboard.php");  // Redirect to the dashboard to reflect the theme change
    exit;
}
?>

<h2>Theme Preference</h2>

<form method="POST">
    <select name="theme">
        <option value="light" <?= $theme === 'light' ? 'selected' : '' ?>>Light</option>
        <option value="dark" <?= $theme === 'dark' ? 'selected' : '' ?>>Dark</option>
    </select><br><br>
    <button name="save">Save</button>
</form>

<a href="dashboard.php">Back</a>
