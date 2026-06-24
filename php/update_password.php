<?php
session_start();
include "connect.php";

if (!isset($_SESSION['username'])) {
    header("Location: ../index.html");
    exit();
}

// ✅ Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_SESSION['username'];

    $old_password = $_POST['old_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';

    // Get user password
    $stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($old_password, $user['password'])) {

        $new_hash = password_hash($new_password, PASSWORD_DEFAULT);

        $update = $conn->prepare("UPDATE users SET password=? WHERE username=?");
        $update->bind_param("ss", $new_hash, $username);
        $update->execute();

        echo "Password updated successfully ✅";

    } else {
        echo "Wrong old password ❌";
    }

} else {
    echo "Access denied ❌";
}
?>