<?php
include('auth-cookie.php');

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$role = $_POST['role'];

if ($name && $email && $password && $role) {
    setcookie("user_name", $name, time() + 3600, "/");
    setcookie("user_email", $email, time() + 3600, "/");
    setcookie("user_role", $role, time() + 3600, "/");

    if ($role === "admin") {
        header("Location: ../View/Admin-admin-cookie.php");
    } else {
        header("Location: ../View/Admin-user-cookie.php");
    }
    exit();
} else {
    echo "All fields are required!";
}
?>
