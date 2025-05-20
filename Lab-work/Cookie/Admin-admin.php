<?php
include('auth-cookie.php');

if ($_COOKIE['user_role'] !== 'admin') {
    header("Location: ../View/login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../Assest/css/Admin.css" />
</head>
<body>
  <div class="container">
    <h2>Admin Dashboard</h2>

    <div class="dashboard-buttons">
      <button onclick="location.href='../View/view-user.html'">View All Users</button>
      <button onclick="location.href='../View/view-reports.html'">View Reports</button>

      <h3>System Settings</h3>
      <button onclick="location.href='../View/change-password.html'">Change Admin Password</button>
      <button onclick="location.href='../View/configure-email.html'">Configure Email Notifications</button>
      <button onclick="location.href='../View/backup-db.html'">Backup Database</button>

      <h3>Other Options</h3>
      <button onclick="location.href='../View/upload-announcements.html'">Upload Announcements</button>
      <button onclick="location.href='../View/review-feedback.html'">Review Feedback</button>
      <button onclick="location.href='../View/update-homepage.html'">Update Homepage Content</button>
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
