<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {
    $sid = $_POST['student_id'];
    $pass = $_POST['password'];

    // Query to check if student_id exists in the database
    $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = ?");
    $stmt->bind_param("s", $sid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify the password using password_verify
        if (password_verify($pass, $row['password_hash'])) {
            // Set session variables upon successful login
            $_SESSION['logged_in'] = true;
            $_SESSION['student_id'] = $row['student_id'];
            $_SESSION['full_name'] = $row['full_name'];

            // Redirect to dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Incorrect password!";
        }
    } else {
        $error = "Student ID not found!";
    }
}
?>

<h2>Login</h2>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST">
    Student ID: <input type="text" name="student_id" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button name="login">Login</button>
</form>

<br>
<a href="register.php">Create account</a>
