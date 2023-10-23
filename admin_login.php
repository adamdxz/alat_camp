<?php
session_start();

if (isset($_POST['login_admin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
var_dump($username);

    // Replace with your database connection code
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'kuisioner';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Hash the password for secure storage
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    var_dump($hashed_password);
    // Query the admin_users table
    $query = "SELECT * FROM admins WHERE username='$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $username;
            header('Location: index.php');
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Invalid username";
    }

    $conn->close();
}
