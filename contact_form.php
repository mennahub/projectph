<?php
include 'db_connection.php';

// Set parameters and execute statement
$name = $conn->real_escape_string($_POST["name"]);
$email = $conn->real_escape_string($_POST["email"]);
$type = $conn->real_escape_string($_POST["type"]);
$message = $conn->real_escape_string($_POST["message"]);

// Prepare and bind statement
$sql = "INSERT INTO complain (name, email, type, message) VALUES ('$name', '$email', '$type', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "<b>FROM:</b> ".$name." (".$email.") <br><br>"."<b>SUBJECT:</b> ".$type."<br><br>
   <b>MESSAGE:</b> <br><br> <textarea readonly  rows='10' cols='50'>".$message."</textarea>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>