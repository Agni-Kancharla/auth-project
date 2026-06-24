<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ✅ SAME NAVBAR AS LOGIN PAGE -->
<div class="top-nav">
  <a href="index.html">Login</a>
  <a href="reg-frontend.php">Register</a>
</div>

<!-- Background -->
<div class="bg"></div>

<!-- Main Container -->
<div class="d-flex justify-content-center align-items-center vh-100">

  <div class="glass-card p-4">
    <?php
session_start();

if (isset($_SESSION['success'])) {
    echo "<div class='alert alert-success text-center'>" . $_SESSION['success'] . "</div>";
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger text-center'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']);
}
?>

    <h2 class="text-center mb-4 text-white">Create Account</h2>

    <form action="php/reg-backend.php" method="POST">

      <!-- Username -->
      <div class="input-box">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>

      <!-- Full Name -->
      <div class="input-box">
        <input type="text" name="full_name" required>
        <label>Full Name</label>
      </div>

      <!-- Phone -->
      <div class="input-box">
        <input type="text" name="phone" required>
        <label>Phone Number</label>
      </div>

      <!-- Email -->
      <div class="input-box">
        <input type="email" name="email" required>
        <label>Email</label>
      </div>

      <!-- Password -->
      <div class="input-box">
        <input type="password" id="password" name="password" required>
        <label>Password</label>
        <span class="eye" onclick="togglePassword('password')">👁️</span>
      </div>

      <!-- Confirm Password -->
      <div class="input-box">
        <input type="password" id="confirmPassword" name="confirm_password" required>
        <label>Confirm Password</label>
        <span class="eye" onclick="togglePassword('confirmPassword')">👁️</span>
      </div>

      <!-- Bio -->
      <div class="input-box">
        <input type="text" name="bio">
        <label>Bio</label>
      </div>

      <button type="submit" class="btn-login w-100">Register</button>

      <p class="text-center mt-3 text-white">
        Already have an account? <a href="index.html">Login</a>
      </p>

    </form>

  </div>

</div>

<script>
function togglePassword(id) {
  const input = document.getElementById(id);
  input.type = input.type === "password" ? "text" : "password";
}
</script>

</body>
</html>