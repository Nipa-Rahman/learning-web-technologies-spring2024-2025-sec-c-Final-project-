<?php
session_start();

if (!isset($_SESSION['loggedin']) || !isset($_SESSION['user_info'])) {
    header("Location: ../View/login.html");
    exit();
}
?>
