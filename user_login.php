<?php
session_start();
$db = new mysqli('your_db_host', 'your_db_user', 'your_db_password', 'your_db_name');

if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = $db->query($query);

    if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        header('location: user_dashboard.php');
    } else {
        echo "Wrong username/password. Please try again.";
    }
}
