<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = $_POST['role'];

    if ($name && $email && $password && $role) {
        $_SESSION['user_info'] = [
            'name' => $name,
            'email' => $email,
            'role' => $role
        ];

       
        $_SESSION['status'] = true;
        $_SESSION['role'] = $role;

        if ($role === "admin") {
            header("Location: Admin-admin.php");
        } else {
            header("Location: Admin-user.php");
        }
        exit();
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request!";
}
?>
