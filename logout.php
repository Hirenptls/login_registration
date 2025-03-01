<?php
session_start(); // Start the session

// Destroy the session
session_unset();
session_destroy();

echo "You have logged out.";
echo "<p><a href='index.php'>Go to Homepage</a></p>";
?>
