<?php
include('auth-cookie.php');

if ($_COOKIE['user_role'] !== 'user') {
    header("Location: ../View/login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Dashboard</title>
  <link rel="stylesheet" href="../Assest/css/Admin.css" />
</head>
<body>
  <div class="container">
    <h2>User Dashboard</h2>

    <div class="dashboard-buttons">
      <button onclick="location.href='view-profile.html'">View Profile</button>
      <button onclick="location.href='update-info.html'">Update Info</button>
      <button onclick="location.href='upload-photo.html'">Upload Progress Photo</button>
      <button onclick="location.href='feedback.html'">Give Feedback</button>
      <button onclick="logout()">Logout</button>
    </div>
  </div>

  <script>
    function logout() {
      // Call logout.php to clear cookies
      window.location.href = "logout.php";
    }
  </script>
</body>
</html>
