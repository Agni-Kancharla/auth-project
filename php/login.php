<?php
session_start();
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Check user
$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    
    // Store session
    $_SESSION['username'] = $user['username'];

    // Redirect to dashboard
    header("Location: ../dashboard.php");

} else {
    echo "Invalid login ❌";
}
?>