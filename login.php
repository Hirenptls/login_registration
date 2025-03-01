<?php
session_start(); // Start the session to store session variables
include('db.php');
$message = ""; // Variable to store the message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Set session variables for user
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            $message = "<div class='message'>Login successful! Welcome, " . $_SESSION['username'] . ".<p><a href='index.php'>Go to Homepage</a></p></div>";
        } else {
            $message = "<div class='message error'>Invalid email or password!</div>";
        }
    } else {
        $message = "<div class='message error'>No user found with that email!</div>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <!-- Display the message if exists -->
        <?php if ($message) echo $message; ?>

        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
