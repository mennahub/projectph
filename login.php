<?php
include 'db_connection.php';

// Start the session
session_start();

// Retrieve form data and sanitize it
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

// Query to retrieve user information from the database
$sql = "SELECT * FROM UserAccount WHERE username = '$username' AND password = '$password'";

// Execute the SQL query and check for errors
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login successful, set session variables
    $_SESSION['username'] = $username;

    // Redirect user to Package page
    header('Location: Package.php');
    exit;
} else {
    // Login unsuccessful, redirect to login page with error message
    header('Location: register.php?error=1');
    exit;
}

// Close the MySQL database connection
$conn->close();
?>