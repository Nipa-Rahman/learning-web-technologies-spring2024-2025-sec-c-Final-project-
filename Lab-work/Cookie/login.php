<?php
// login.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email === "" || $password === "") {
        echo "Email and password required!";
        exit();
    }

    // Example static check (replace with DB check in real app)
    if ($email === "admin@example.com" && $password === "admin123") {
        setcookie("loggedin", "true", time() + 3600, "/");
        setcookie("user_role", "admin", time() + 3600, "/");
        header("Location: user-management.html");
        exit();
    } elseif ($email === "user@example.com" && $password === "user123") {
        setcookie("loggedin", "true", time() + 3600, "/");
        setcookie("user_role", "user", time() + 3600, "/");
        header("Location: user-management.html");
        exit();
    } else {
        echo "Invalid credentials!";
        exit();
    }
} else {
    echo "Please submit the form!";
    exit();
}
?>
