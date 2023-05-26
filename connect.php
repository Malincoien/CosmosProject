<?php
$dbname = 'cosmos';
$servername = "10.2.2.237";
$username = "admin";
$password = "cosmos127";


// Create connection
$conn = new mysqli($dbname, $servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>