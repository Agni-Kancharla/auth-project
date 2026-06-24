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
<title>Change Password</title>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

<h2>Change Password 🔐</h2>

<form action="php/update_password.php" method="POST">
    
    <input type="password" name="old_password" placeholder="Enter Old Password" required>
    <br><br>

    <input type="password" name="new_password" placeholder="Enter New Password" required>
    <br><br>

    <button type="submit">Update Password</button>

</form>

<br>
<a href="profile.php">⬅ Back to Profile</a>

</body>
</html>