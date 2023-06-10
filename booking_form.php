<?php
include 'db_connection.php';

// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$package = $_POST["package"];
$special_request = $_POST["special_request"];

// Insert the data into the database
$sql = "INSERT INTO BookingRequest (name, email, date, package, special_request)
        VALUES ('$name', '$email', '$date', '$package', '$special_request')";

if (mysqli_query($conn, $sql)) {
    echo "Booking request submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
