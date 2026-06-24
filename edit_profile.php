<?php
session_start();
include "php/connect.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$username = $_SESSION['username'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

  <div class="glass-card p-4 text-white" style="width: 350px;">

    <h2 class="text-center mb-4">Edit Profile</h2>

    <form action="php/update_profile.php" method="POST" enctype="multipart/form-data">

      <div class="mb-3">
  <label>Profile Picture</label>
  <input type="file" name="profile_pic" class="form-control">
</div>
      <div class="mb-3">
        <input type="text" name="full_name" class="form-control"
        value="<?php echo $user['full_name']; ?>" required>
      </div>

      <div class="mb-3">
        <input type="text" name="phone" class="form-control"
        value="<?php echo $user['phone']; ?>">
      </div>

      <div class="mb-3">
        <textarea name="bio" class="form-control"
        placeholder="Your bio"><?php echo $user['bio']; ?></textarea>
      </div>

      <button class="btn btn-custom w-100">Update</button>

    </form>

    <a href="profile.php" class="btn btn-custom w-100 mt-3">Back</a>

  </div>

</div>

</body>
</html>