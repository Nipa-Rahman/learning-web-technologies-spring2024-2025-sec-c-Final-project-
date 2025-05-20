<?php
// auth-cookie.php
if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] !== "true" || !isset($_COOKIE['user_role'])) {
    header("Location: ../View/login.html");
    exit();
}
?>
