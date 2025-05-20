<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Simple login validation
    if ($email === "admin@example.com" && $password === "admin123") {
        $_SESSION['loggedin'] = true;
        $_SESSION['user_info'] = [
            'email' => $email,
            'role' => 'admin'
        ];
        header("Location: ../View/user-management.php");
        exit();
    } elseif ($email === "user@example.com" && $password === "user123") {
        $_SESSION['loggedin'] = true;
        $_SESSION['user_info'] = [
            'email' => $email,
            'role' => 'user'
        ];
        header("Location: ../View/user-management.php");
        exit();
    } else {
        echo "Invalid credentials!";
    }
} else {
    echo "Please submit the form!";
}
?>
