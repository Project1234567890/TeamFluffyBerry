<?php
$servername = "localhost";//CHANGE THIS
$username = "root";
$password = "password";//CHANGE THIS

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
