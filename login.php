<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $table = ($role == 'admin') ? 'admins' : 'users';
    $sql = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: " . (($role == 'admin') ? "admin_dashboard.html" : "user_dashboard.html"));
    } else {
        echo "Invalid login credentials";
    }
}
?>
