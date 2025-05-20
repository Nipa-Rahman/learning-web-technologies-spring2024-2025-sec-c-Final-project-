<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Management</title>
  <link rel="stylesheet" href="../Assest/css/Admin.css" />
</head>
<body>
  <div class="container">
    <h2>User Management</h2>
    <form action="user-management-cookie.php" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" required />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" required />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required />
      </div>
      <div class="form-group">
        <label>Role</label>
        <select name="role" required>
          <option value="">Select Role</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
