<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mine";

$username = $_POST['username']
$password =$_POST['password']

$conn = new PDO("mysql:host=localhost;dbname=mine", $username, $password);
// Set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username']
$password =$_POST['password']

$sql = "SELECT * FROM signup , providersignup  WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  echo json_encode(array('success' => true));
} else {
  echo json_encode(array('success' => false));
}

$conn->close();