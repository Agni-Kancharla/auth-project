<?php
include "connect.php";

$username = $_POST['username'];
$new_password = $_POST['new_password'];

// Hash new password
$hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

// Update password
$stmt = $conn->prepare("UPDATE users SET password=? WHERE username=?");
$stmt->bind_param("ss", $hashedPassword, $username);

if ($stmt->execute()) {
    header("Location: ../index.html");
    exit();
} else {
    echo "Error updating password ❌";
}
?>