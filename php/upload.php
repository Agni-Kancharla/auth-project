<?php
session_start();
include "connect.php";

$username = $_SESSION['username'];

$file = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

// Move image to uploads folder
move_uploaded_file($tmp, "../uploads/" . $file);

// Save image name in database
$conn->query("UPDATE users SET profile_pic='$file' WHERE username='$username'");

// Redirect back to profile page
header("Location: ../profile.php");
?>