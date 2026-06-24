<?php
session_start();
include "php/connect.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$username = $_SESSION['username'];

// Fetch user data
$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
.profile-img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #00eaff;
  margin-bottom: 15px;
}

.profile-info p {
  margin: 5px 0;
  color: #ddd;
}

.label {
  color: #00eaff;
  font-size: 13px;
}
</style>

</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

  <div class="glass-card text-center">

    <!-- Profile Image -->
    <?php
$img = $user['profile_pic'] ? "uploads/" . $user['profile_pic'] : "images/default.png";
?>
<img src="<?php echo $img; ?>" class="profile-img">

    <!-- Name -->
    <h2 class="text-white"><?php echo $user['full_name']; ?></h2>
    <p class="text-secondary">@<?php echo $user['username']; ?></p>

    <hr style="border-color: rgba(255,255,255,0.2);">

    <!-- Info -->
    <div class="profile-info text-start">

      <p><span class="label">Email:</span><br><?php echo $user['email']; ?></p>

      <p><span class="label">Phone:</span><br><?php echo $user['phone']; ?></p>

      <p><span class="label">Bio:</span><br><?php echo $user['bio']; ?></p>

    </div>

    <br>

    <!-- Buttons -->
    <a href="edit_profile.php" class="btn btn-custom w-100 mb-2">Edit Profile</a>
    <a href="dashboard.php" class="btn btn-custom w-100 mb-2">Back</a>
    <a href="php/logout.php" class="btn btn-custom w-100">Logout</a>

  </div>

</div>

</body>
</html>