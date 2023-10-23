<?php
session_start();

if (isset($_SESSION['admin'])) {
    // Unset the 'admin' session variable
    unset($_SESSION['admin']);

    // Destroy the session data
    session_destroy();
}

// Redirect to the login page or any other appropriate page after logout
header('Location: index.php'); // Replace 'login.php' with your login page URL
exit();
?>
