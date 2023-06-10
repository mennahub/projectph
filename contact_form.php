<?php
include 'db_connection.php';

// Prepare and bind statement
$stmt = mysqli_prepare($conn, "INSERT INTO ContactRequest (name, email, subject, message) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

// Set parameters and execute statement
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
mysqli_stmt_execute($stmt);

// Check if data was successfully inserted
if (mysqli_stmt_affected_rows($stmt) > 0) {
  echo "Contact request submitted successfully!";
} else {
  echo "Error submitting contact request.";
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
