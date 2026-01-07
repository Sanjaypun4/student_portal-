<?php
session_start();
<<<<<<< HEAD

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: login.php");
exit;
=======
session_destroy();
header("Location: login.php");
>>>>>>> 053436806ac42e819894653d82779f49a72f7c6f
