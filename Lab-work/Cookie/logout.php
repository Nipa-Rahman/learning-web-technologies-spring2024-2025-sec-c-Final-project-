<?php
setcookie("loggedin", "", time() - 3600, "/");
setcookie("user_name", "", time() - 3600, "/");
setcookie("user_email", "", time() - 3600, "/");
setcookie("user_role", "", time() - 3600, "/");

header("Location: ../View/login.html");
exit();
?>
