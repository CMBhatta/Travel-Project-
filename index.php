<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "trip";
// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES 
('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
echo $sql;


?>