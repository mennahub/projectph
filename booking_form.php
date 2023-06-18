<?php
include 'db_connection.php';

// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$location = $_POST["package"];
$type = $_POST["type"];


// Insert the data into the database
$sql = "INSERT INTO Reservation (name, email, date, location, type)
        VALUES ('$name', '$email', '$date', '$location', '$type')";

if (mysqli_query($conn, $sql)) {
    header("location: /projectph/Payment.php?packageName=" . $location . "&bookingDate=" . $date . "&customerName=" . $name);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>