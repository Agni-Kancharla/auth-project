<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

  <div class="glass-card text-center">

    <h1>Hello, <?php echo $_SESSION['username']; ?> 👋</h1>
    <p class="mb-4">Welcome to your dashboard</p>

    <a href="profile.php" class="btn btn-custom">Profile</a>
    <br><br>
    <a href="php/logout.php" class="btn btn-custom">Logout</a>

  </div>

</div>

</body>
</html>