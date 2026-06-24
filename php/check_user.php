<?php

// Safely get username from URL
$username = $_GET['username'] ?? '';

// Dummy database
$taken = ["admin", "user", "test", "root"];

if (in_array(strtolower($username), $taken)) {
    echo "Username already taken ❌";
} else {
    echo "Username available ✅";
}

?>