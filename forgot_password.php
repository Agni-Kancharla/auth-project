<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="glass-card text-white">

    <h2 class="text-center">Reset Password</h2>

    <form action="php/reset_password.php" method="POST">

      <input type="text" name="username" placeholder="Enter Username" required class="form-control mb-3">

      <input type="password" name="new_password" placeholder="New Password" required class="form-control mb-3">

      <button class="btn btn-custom w-100">Update Password</button>

    </form>

    <a href="index.html" class="btn btn-custom w-100 mt-3">Back to Login</a>

  </div>
</div>

</body>
</html>