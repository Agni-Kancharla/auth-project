<?php
session_start();
include "connect.php";

$username = $_SESSION['username'];

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$bio = $_POST['bio'];

// Image upload
$imageName = $_FILES['profile_pic']['name'];
$tempName = $_FILES['profile_pic']['tmp_name'];

if ($imageName) {
    $target = "../uploads/" . $imageName;
    move_uploaded_file($tempName, $target);

    // Update with image
    $stmt = $conn->prepare("UPDATE users SET full_name=?, phone=?, bio=?, profile_pic=? WHERE username=?");
    $stmt->bind_param("sssss", $full_name, $phone, $bio, $imageName, $username);
} else {
    // Update without image
    $stmt = $conn->prepare("UPDATE users SET full_name=?, phone=?, bio=? WHERE username=?");
    $stmt->bind_param("ssss", $full_name, $phone, $bio, $username);
}

if ($stmt->execute()) {
    header("Location: ../profile.php");
    exit();
} else {
    echo "Update failed ❌";
}
?>