<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'adventurous';
$db_port = 3306;

$conn = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db,
  $db_port
);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>