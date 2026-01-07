<?php
<<<<<<< HEAD
session_start();
include "db.php"; // include database connection

if (isset($_POST['register'])) {
    $sid = trim($_POST['student_id']);
    $name = trim($_POST['name']);
    $pass = $_POST['password'];

    // Validate basic input
    if (empty($sid) || empty($name) || empty($pass)) {
        $error = "All fields are required!";
    } else {
        // Hash the password securely
        $hash = password_hash($pass, PASSWORD_DEFAULT);

        // Prepare insert statement
        $stmt = $conn->prepare("INSERT INTO students (student_id, full_name, password_hash) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $sid, $name, $hash);

        if ($stmt->execute()) {
            // Registration successful, redirect to login page
            header("Location: login.php");
            exit;
        } else {
            // Check if student_id already exists
            if ($conn->errno == 1062) { // Duplicate entry error code
                $error = "Student ID already exists!";
            } else {
                $error = "Registration failed: " . $conn->error; // Catch any other errors
            }
        }
=======
include "db.php";

if (isset($_POST['register'])) {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO students (student_id, name, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $student_id, $name, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
    } else {
        echo "Registration Failed";
>>>>>>> 053436806ac42e819894653d82779f49a72f7c6f
    }
}
?>

<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
</head>
<body>

<h2>Register</h2>

<?php
// Display error messages if any
if (isset($error)) {
    echo "<p style='color:red;'>❌ $error</p>";
}
?>

<form method="POST">
    Student ID: <input type="text" name="student_id" required><br><br>
    Full Name: <input type="text" name="name" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button name="register">Register</button>
</form>

<br>
<a href="login.php">Already registered? Login here</a>

</body>
</html>
=======
<form method="POST">
    Student ID: <input type="text" name="student_id" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button name="register">Register</button>
</form>
>>>>>>> 053436806ac42e819894653d82779f49a72f7c6f
