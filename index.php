<?php
session_start(); // Start the session to check if the user is logged in

// Start of the container
echo "<div class='container'>";

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    echo "<h2>Welcome back, " . $_SESSION['username'] . "!</h2>";
    echo "<p><a href='logout.php' class='btn-logout'>Logout</a></p>";
} else {
    echo "<h2>Welcome to Our Website</h2>";
    echo "<p><a href='login.php' class='btn-link'>Login</a></p>";
    echo "<p><a href='register.php' class='btn-link'>Register</a></p>";
}

// End of the container
echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Body content starts here, including the dynamic PHP output -->
</body>
</html>
