<?php
session_start();
include "connect.php";

// Allow only POST request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../reg-frontend.php");
    exit();
}

// Get form data
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$full_name = trim($_POST['full_name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$bio = trim($_POST['bio'] ?? '');

// ===============================
// VALIDATION
// ===============================

if (empty($username) || empty($email) || empty($password) || empty($full_name)) {
    $_SESSION['error'] = "Please fill all required fields ❌";
    header("Location: ../reg-frontend.php");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Invalid email format ❌";
    header("Location: ../reg-frontend.php");
    exit();
}

if ($password !== $confirm_password) {
    $_SESSION['error'] = "Passwords do not match ❌";
    header("Location: ../reg-frontend.php");
    exit();
}

// ===============================
// CHECK USERNAME
// ===============================

$stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['error'] = "Username already exists ❌";
    header("Location: ../reg-frontend.php");
    exit();
}

$stmt->close();

// ===============================
// CHECK EMAIL
// ===============================

$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['error'] = "Email already exists ❌";
    header("Location: ../reg-frontend.php");
    exit();
}

$stmt->close();

// ===============================
// INSERT USER
// ===============================

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("
    INSERT INTO users
    (username, email, password, full_name, phone, bio)
    VALUES (?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssss",
    $username,
    $email,
    $hashedPassword,
    $full_name,
    $phone,
    $bio
);

if ($stmt->execute()) {

    $_SESSION['success'] = "Registration Successful ✅";

    // Redirect to login page
    header("Location: ../index.html?registered=1");
    exit();

} else {

    $_SESSION['error'] = "Something went wrong ❌";

    header("Location: ../reg-frontend.php");
    exit();
}

$stmt->close();
$conn->close();
?>